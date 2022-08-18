<?php

namespace App\Http\Controllers;

use App\Models\Penilaian;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index()
    {
        $nilai = Penilaian::where('nip', auth()->user()->nip)->first();
        $s1 = $nilai->s1 / Penilaian::max('s1') * 1 * 100;
        $s2 = $nilai->s2 / Penilaian::max('s2') * 1 * 100;
        $s3 = $nilai->s3 / Penilaian::max('s3') * 1 * 100;
        $s4 = $nilai->s4 / Penilaian::max('s4') * 1 * 100;
        $s5 = $nilai->s5 / Penilaian::max('s5') * 1 * 100;
        $s6 = $nilai->s6 / Penilaian::max('s6') * 1 * 100;
        $s7 = $nilai->s7 / Penilaian::max('s7') * 1 * 100;
        $s8 = $nilai->s8 / Penilaian::max('s8') * 1 * 100;
        $s9 = $nilai->s9 / Penilaian::max('s9') * 0.5 * 100;
        $s10 = $nilai->s10 / Penilaian::max('s10') * 0.5 * 100;
        $s11 = $nilai->s11 / Penilaian::max('s11') * 0.5 * 100;
        $s12 = $nilai->s12 / Penilaian::max('s12') * 0.5 * 100;

        return view('dashboard', [
            "title" => "Dashboard",
            "s1" => $s1,
            "s2" => $s2,
            "s3" => $s3,
            "s4" => $s4,
            "s5" => $s5,
            "s6" => $s6,
            "s7" => $s7,
            "s8" => $s8,
            "s9" => $s9,
            "s10" => $s10,
            "s11" => $s11,
            "s12" => $s12,
        ]);
    }
}
