<?php

namespace App\Http\Controllers;

use App\Models\In;
use App\Models\Out;
use App\Models\User;
use App\Models\Nilai;
use App\Models\Penilaian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;



class DashboardController extends Controller
{
    public function index()
    {
        $absenin = In::where('nip', Auth::user()->nip)->get();
        $absenout = Out::where('nip', Auth::user()->nip)->get();
        $user = User::get();

        $indikator = In::select('status', DB::raw('COUNT(*) as jumlah'))
            ->where('nip', Auth::user()->nip)
            ->groupBy('status')
            ->get();

        $countdatangawal = In::where('nip', Auth::user()->nip)->where('status', 'LIKE', "%datang awal%")->count();
        $countontimemasuk = In::where('nip', Auth::user()->nip)->where('status', 'LIKE', "%ontime masuk%")->count();
        $countdatangtelat = In::where('nip', Auth::user()->nip)->where('status', 'LIKE', "%datang telat%")->count();
        $countpulangawal = Out::where('nip', Auth::user()->nip)->where('status', 'LIKE', "%pulang awal%")->count();
        $countontimepulang = Out::where('nip', Auth::user()->nip)->where('status', 'LIKE', "%ontime pulang%")->count();
        $countpulangtelat = Out::where('nip', Auth::user()->nip)->where('status', 'LIKE', "%pulang telat%")->count();

        Nilai::create([
            'nip' => Auth::user()->nip,
            'nilai1' => $countdatangawal,
            'nilai2' => $countontimemasuk,
            'nilai3' => $countdatangtelat,
            'nilai4' => $countpulangawal,
            'nilai5' => $countontimepulang,
            'nilai6' => $countpulangtelat,
            'nilai7' => "0",
            'nilai8' => "0",
            'nilai9' => "0",
            'nilai10' => "0",
        ]);
        return view('dashboard', [
            "in" => $absenin,
            "out" => $absenout,
            "indikator" => $indikator,
            "title" => "Dashboard"
        ]);
    }
}
