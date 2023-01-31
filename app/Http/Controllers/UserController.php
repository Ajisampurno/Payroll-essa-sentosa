<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $user = User::get();
        return view('manageuser', [
            "title" => "Manage User",
            "users" => $user
        ]);
    }
    public function registrasi()
    {
        return view('auth/registrasi', [
            "title" => "Registrasi"
        ]);
    }

    protected function simpan(Request $request)
    {

        $ValidateData = $request->validate([
            'name' => 'required|string|max:255',
            'nip' => 'required|integer|unique:users',
            'ceklevel' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'foto' => 'image|file|max:5000000',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($request['foto']) {
            $ValidateData['foto'] = $request['foto']->store('foto-profil');
        }
        if ($request['password']) {
            $ValidateData['password'] = Hash::make($request['password']);
        }

        User::create($ValidateData);
        return redirect('/manageuser')->with('success', 'Data berhasil di tambah kan');
    }


    public function hapus($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect('/manageuser')->with('success', 'Data berhasil di hapus');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('auth/edituser', [
            "title" => "Edit User",
            "users" => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        $ValidateData = $request->validate([
            'name' => 'required|string|max:255',
            'nip' => 'required|integer',
            'ceklevel' => 'required',
            'email' => 'required|string|email|max:255',
            'foto' => 'image|file|max:5000000',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($request['foto']) {
            $ValidateData['foto'] = $request['foto']->store('foto-profil');
        }
        if ($request['password']) {
            $ValidateData['password'] = Hash::make($request['password']);
        }

        User::find($id)->update($ValidateData);

        return redirect('/manageuser')->with('success', 'Data berhasil di ubah');
    }
}
