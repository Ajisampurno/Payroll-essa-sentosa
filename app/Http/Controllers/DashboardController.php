<?php

namespace App\Http\Controllers;
use App\Models\Pengajuan;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index()
    
    {$pengajuan = Pengajuan::latest();

        if (request('search')) {
           $pengajuan->where('id','like','%'.request('search').'%')
                    ->orwhere('nama_ktp','like','%'.request('search').'%');
        }
    
            return view('dashboard',[
                "title" => "Dashboard",
                "pengajuans" => $pengajuan->get()->sortBy('id')
            ]);
    }
}
