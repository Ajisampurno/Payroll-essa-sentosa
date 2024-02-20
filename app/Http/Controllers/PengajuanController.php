<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{

    public function store(Request $request)
    {
        $ValidateData = $request->validate([
            'nip' => 'required',
            'nama_ktp' => 'required',
            'tgl_mulai' => 'required',
            'tgl_sampai' => 'required',
            'alasan' => 'required',
            'foto' => 'image|file|max:5000000',
            'aproval' => 'nullable'
        ]);

        if ($request->file('foto')) {
            $ValidateData['foto'] = $request->file('foto')->store('foto-pengajuan');
        }

        Pengajuan::create([
            'nip' => $request->nip,
            'nama_ktp'   => $request->nama_ktp,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_sampai' => $request->tgl_sampai,
            'alasan' => $request->alasan,
            'foto' => $ValidateData['foto'],
            'aproval' => 'Menunggu',
        ]);

        return redirect('pengajuan_saya')->with('success', 'pengajuan telah selesai di simpan dan menunggu aproval');
    }

    public function request_karyawan()
    {
        $request_karyawan = Pengajuan::latest();
        $pengajuan = Pengajuan::all()->sortDesc();

        if (request('search')) {
            $request_karyawan->where('nip', 'like', '%' . request('search') . '%')
                ->orwhere('alasan', 'like', '%' . request('search') . '%')
                ->orwhere('nama_ktp', 'like', '%' . request('search') . '%');
        }

        return view('request_karyawan', [
            "title" => "Request karyawan | ES",
            "pengajuan" => $pengajuan,
            "request_karyawan" => $request_karyawan->get()->sortDesc()
        ]);
    }

    public function pengajuansaya()
    {
        $target = auth()->user()->nip;
        $pengajuan = Pengajuan::where('nip', $target);

        return view('pengajuan_saya', [
            "title" => "pengajuan saya",
            "pengajuan" => $pengajuan->get()->sortDesc()
        ]);
    }

    public function show($id)
    {
        $show_pengajuan = Pengajuan::find($id);

        return view('show_pengajuan', [
            "title" => "pengajuan saya",
            "show_pengajuan" => $show_pengajuan
        ]);
    }

    public function cancel($id)
    {
        Pengajuan::find($id)->update([
            'aproval' => 'cancel'
        ]);
        return redirect('/request_karyawan')->with('success', 'Data berhasil dikembalikan');
    }
    public function approve($id)
    {
        Pengajuan::find($id)->update([
            'aproval' => 'setuju'
        ]);
        return redirect('/request_karyawan')->with('success', 'Data berhasil disetujui');
    }
}
