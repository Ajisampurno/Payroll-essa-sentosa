<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Penilaian;

use App\Exports\ProfilesExport;
use App\Imports\ProfilesImport;
use Maatwebsite\Excel\Facades\Excel;

use App\Http\Controllers\Controller;

//use App\Http\Requests\StoreProfileRequest;
//use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Auth\Events\Validated;
//use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Redirect;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $profile = Profile::latest();

        if (request('search')) {
            $profile->where('id', 'like', '%' . request('search') . '%')
                ->orwhere('bagian', 'like', '%' . request('search') . '%')
                ->orwhere('nama_ktp', 'like', '%' . request('search') . '%');
        }

        return view('data_karyawan', [
            "title" => "Data karyawan",
            "profiles" => $profile->get()->sortBy('id')
        ]);
    }

    public function tambah()
    {
        return view('tambah_karyawan', [
            "title" => "Tambah data"
        ]);
    }

    public function profilesexport()
    {
        return Excel::download(new ProfilesExport, 'profiles.xls');
    }

    public function ProfilesImport(Request $request)
    {

        Profile::truncate();

        $file = $request->file('file');
        $nama_file = $file->getClientOriginalName();
        $file->move('DataKaryawan', $nama_file);

        Excel::import(new ProfilesImport, public_path('/DataKaryawan/' . $nama_file));
        return redirect('/data_karyawan');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProfileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ValidateData = $request->validate([
            'id' => 'required|max:6|unique:profiles',
            'nama_ktp' => 'required',
            'nama_absen' => 'required',
            'no_ktp' => 'required|max:16|unique:profiles',
            'alamat_ktp' => 'required',
            'tgl_lahir' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'bagian' => 'required',
            'referensi' => 'required',
            'aktiv_mulai' => 'required',
        ]);

        Profile::create($ValidateData);
        return redirect('/data_karyawan')->with('success', 'Data berhasil di tambah kan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('show_profiles', [
            "title" => "show profile",
            "profiles" => Profile::find($id)
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('update_datakaryawan', [
            "title" => "ubah",
            "profile" => Profile::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfileRequest  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $profile = Profile::find($id);

        $rules = [
            'nama_ktp' => 'required',
            'nama_absen' => 'required',
            'alamat_ktp' => 'required',
            'tgl_lahir' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'bagian' => 'required',
            'referensi' => 'required',
            'aktiv_mulai' => 'required',
        ];

        if ($request->id != $id) {
            $rules['id'] = 'required|max:6|unique:profiles';
        }
        if ($request->no_ktp != $profile->no_ktp) {
            $rules['no_ktp'] = 'required|max:16|unique:profiles';
        }

        $ValidateData = $request->validate($rules);

        Profile::find($id)->update($ValidateData);

        return redirect('/data_karyawan')->with('success', 'Data berhasil di ubah');
    }


    public function hapus($id)
    {
        $data = Profile::find($id);
        $data->delete();
        return redirect('/data_karyawan')->with('success', 'Data berhasil di hapus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        Profile::destroy($profile->id);
        return redirect('/data_karyawan')->with('success', 'Data berhasil di hapus');
    }
}
