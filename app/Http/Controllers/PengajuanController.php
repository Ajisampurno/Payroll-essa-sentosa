<?php

namespace App\Http\Controllers;
use App\Models\Pengajuan;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function index(){
        return view('/pengajuan',[
            'title' => 'pengajuan'
        ]);
    }

    public function store(Request $request){


        $ValidateData = $request->validate([
            'nip' => 'required',
            'nama_ktp' => 'required',
            'tgl_mulai' => 'required',
            'tgl_sampai' => 'required',
            'alasan' => 'required',
            'foto' => 'image|file|max:2048',
            'status'=>'nullable'
        ]);

        if ($request->file('foto')) {
            $ValidateData['foto'] = $request->file('foto')->store('foto-pengajuan');
        }

        Pengajuan::create($ValidateData);

        return redirect('pengajuan')->with('success','pengajuan telah selesai di simpan dan menunggu aproval');
    }

    public function show($id)
    {
        return view('show_pengajuan',[
            "title" => "show pengajuan",
            "pengajuan" => Pengajuan::find($id)
        ]);
    }


}
