<?php

namespace App\Http\Controllers;

use App\Models\Penilaian;
use App\Models\Settingnilai;
use App\Models\Profile;

use App\Models\Saw;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {

        $profile = Profile::get();
        //usort($fixnilairangking, function ($a, $b) {
        //    return $a['skor'] < $b['skor'];
        //});

        $saw = Saw::join('profiles', 'saws.nip', '=', 'profiles.id')
            ->select('saws.*', 'profiles.nama_ktp')
            ->orderBy('skor', 'desc')
            ->get();

        return view('/report', [
            'title' => 'Report',
            'saw' => $saw,
        ]);
    }
}
