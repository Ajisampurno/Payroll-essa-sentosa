<?php

namespace App\Http\Controllers;

use App\Models\Penilaian;
use App\Models\Settingnilai;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {

        $cekcount = Penilaian::get()->toarray();

        $penilaian = Penilaian::join('profiles', 'penilaians.nip', '=', 'profiles.id')
            ->select('penilaians.*', 'profiles.nama_ktp')
            ->get();
        $settingnilai = Settingnilai::get();

        // Proses normalisasi
        if ($cekcount != null) {
            foreach ($settingnilai as $set) {
                foreach ($penilaian as $key => $nilai) {

                    //Penilaianin 1
                    if (Penilaian::max('s1') != 0) {
                        if ($set->type1 = "Benefit") {
                            $nilai1[$key] = $nilai->s1 / Penilaian::max('s1');
                        } else {
                            $nilai1[$key] = Penilaian::min('s1') / $nilai->s1;
                        }
                    } else {
                        $nilai1[$key] = 0;
                    }
                    //Penilaianin 2
                    if (Penilaian::max('s2') != 0) {
                        if ($set->type2 = "Benefit") {
                            $nilai2[$key] = $nilai->s2 / Penilaian::max('s2');
                        } else {
                            $nilai2[$key] = Penilaian::min('s2') / $nilai->s2;
                        }
                    } else {
                        $nilai2[$key] = 0;
                    }
                    //Penilaianin 3
                    if (Penilaian::max('s3') != 0) {
                        if ($set->type3 = "Benefit") {
                            $nilai3[$key] = $nilai->s3 / Penilaian::max('s3');
                        } else {
                            $nilai3[$key] = Penilaian::min('s3') / $nilai->s3;
                        }
                    } else {
                        $nilai3[$key] = 0;
                    }
                    //Penilaianin 4
                    if (Penilaian::max('s4') != 0) {
                        if ($set->type4 = "Benefit") {
                            $nilai4[$key] = $nilai->s4 / Penilaian::max('s4');
                        } else {
                            $nilai4[$key] = Penilaian::min('s4') / $nilai->s4;
                        }
                    } else {
                        $nilai4[$key] = 0;
                    }
                    //Penilaianin 5
                    if (Penilaian::max('s5') != 0) {
                        if ($set->type5 = "Benefit") {
                            $nilai5[$key] = $nilai->s5 / Penilaian::max('s5');
                        } else {
                            $nilai5[$key] = Penilaian::min('s5') / $nilai->s5;
                        }
                    } else {
                        $nilai5[$key] = 0;
                    }
                    //Penilaianin 6
                    if (Penilaian::max('s6') != 0) {
                        if ($set->type6 = "Benefit") {
                            $nilai6[$key] = $nilai->s6 / Penilaian::max('s6');
                        } else {
                            $nilai6[$key] = Penilaian::min('s6') / $nilai->s6;
                        }
                    } else {
                        $nilai6[$key] = 0;
                    }
                    //Penilaianin 7
                    if (Penilaian::max('s7') != 0) {
                        if ($set->type7 = "Benefit") {
                            $nilai7[$key] = $nilai->s7 / Penilaian::max('s7');
                        } else {
                            $nilai7[$key] = Penilaian::min('s7') / $nilai->s7;
                        }
                    } else {
                        $nilai7[$key] = 0;
                    }
                    //Penilaianin 8
                    if (Penilaian::max('s8') != 0) {
                        if ($set->type8 = "Benefit") {
                            $nilai8[$key] = $nilai->s8 / Penilaian::max('s8');
                        } else {
                            $nilai8[$key] = Penilaian::min('s8') / $nilai->s8;
                        }
                    } else {
                        $nilai8[$key] = 0;
                    }
                    //Penilaianin 9
                    if (Penilaian::max('s9') != 0) {
                        if ($set->type9 = "Benefit") {
                            $nilai9[$key] = $nilai->s9 / Penilaian::max('s9');
                        } else {
                            $nilai9[$key] = Penilaian::min('s9') / $nilai->s9;
                        }
                    } else {
                        $nilai9[$key] = 0;
                    }
                    //Penilaianin 10
                    if (Penilaian::max('s10') != 0) {
                        if ($set->type10 = "Benefit") {
                            $nilai10[$key] = $nilai->s10 / Penilaian::max('s10');
                        } else {
                            $nilai10[$key] = Penilaian::min('s10') / $nilai->s10;
                        }
                    } else {
                        $nilai10[$key] = 0;
                    }
                    //Penilaianin 11
                    if (Penilaian::max('s11') != 0) {
                        if ($set->type11 = "Benefit") {
                            $nilai11[$key] = $nilai->s11 / Penilaian::max('s11');
                        } else {
                            $nilai11[$key] = Penilaian::min('s11') / $nilai->s11;
                        }
                    } else {
                        $nilai11[$key] = 0;
                    }
                    //Penilaianin 12
                    if (Penilaian::max('s12') != 0) {
                        if ($set->type12 = "Benefit") {
                            $nilai12[$key] = $nilai->s12 / Penilaian::max('s12');
                        } else {
                            $nilai12[$key] = Penilaian::min('s12') / $nilai->s12;
                        }
                    } else {
                        $nilai12[$key] = 0;
                    }
                    //Penilaianin 13
                    if (Penilaian::max('s13') != 0) {
                        if ($set->type13 = "Benefit") {
                            $nilai13[$key] = $nilai->s13 / Penilaian::max('s13');
                        } else {
                            $nilai13[$key] = Penilaian::min('s13') / $nilai->s13;
                        }
                    } else {
                        $nilai13[$key] = 0;
                    }
                    //Penilaianin 14
                    if (Penilaian::max('s14') != 0) {
                        if ($set->type14 = "Benefit") {
                            $nilai14[$key] = $nilai->s14 / Penilaian::max('s14');
                        } else {
                            $nilai14[$key] = Penilaian::min('s14') / $nilai->s14;
                        }
                    } else {
                        $nilai14[$key] = 0;
                    }
                    //Penilaianin 15
                    if (Penilaian::max('s15') != 0) {
                        if ($set->type15 = "Benefit") {
                            $nilai15[$key] = $nilai->s15 / Penilaian::max('s15');
                        } else {
                            $nilai15[$key] = Penilaian::min('s15') / $nilai->s15;
                        }
                    } else {
                        $nilai15[$key] = 0;
                    }
                    //Penilaianin 16
                    if (Penilaian::max('s16') != 0) {
                        if ($set->type16 = "Benefit") {
                            $nilai16[$key] = $nilai->s16 / Penilaian::max('s16');
                        } else {
                            $nilai16[$key] = Penilaian::min('s16') / $nilai->s16;
                        }
                    } else {
                        $nilai16[$key] = 0;
                    }
                    //Penilaianin 17
                    if (Penilaian::max('s17') != 0) {
                        if ($set->type17 = "Benefit") {
                            $nilai17[$key] = $nilai->s17 / Penilaian::max('s17');
                        } else {
                            $nilai17[$key] = Penilaian::min('s17') / $nilai->s17;
                        }
                    } else {
                        $nilai17[$key] = 0;
                    }
                    //Penilaianin 18
                    if (Penilaian::max('s18') != 0) {
                        if ($set->type18 = "Benefit") {
                            $nilai18[$key] = $nilai->s18 / Penilaian::max('s18');
                        } else {
                            $nilai18[$key] = Penilaian::min('s18') / $nilai->s18;
                        }
                    } else {
                        $nilai18[$key] = 0;
                    }
                    //Penilaianin 19
                    if (Penilaian::max('s19') != 0) {
                        if ($set->type19 = "Benefit") {
                            $nilai19[$key] = $nilai->s19 / Penilaian::max('s19');
                        } else {
                            $nilai19[$key] = Penilaian::min('s19') / $nilai->s19;
                        }
                    } else {
                        $nilai19[$key] = 0;
                    }
                    //Penilaianin 20
                    if (Penilaian::max('s20') != 0) {
                        if ($set->type20 = "Benefit") {
                            $nilai20[$key] = $nilai->s20 / Penilaian::max('s20');
                        } else {
                            $nilai20[$key] = Penilaian::min('s20') / $nilai->s20;
                        }
                    } else {
                        $nilai20[$key] = 0;
                    }
                    $nor1 = $nilai1[$key] * $set->bobot1 / 100;
                    $nor2 = $nilai2[$key] * $set->bobot2 / 100;
                    $nor3 = $nilai3[$key] * $set->bobot3 / 100;
                    $nor4 = $nilai4[$key] * $set->bobot4 / 100;
                    $nor5 = $nilai5[$key] * $set->bobot5 / 100;
                    $nor6 = $nilai6[$key] * $set->bobot6 / 100;
                    $nor7 = $nilai7[$key] * $set->bobot7 / 100;
                    $nor8 = $nilai8[$key] * $set->bobot8 / 100;
                    $nor9 = $nilai9[$key] * $set->bobot9 / 100;
                    $nor10 = $nilai10[$key] * $set->bobot10 / 100;
                    $nor11 = $nilai11[$key] * $set->bobot11 / 100;
                    $nor12 = $nilai12[$key] * $set->bobot12 / 100;
                    $nor13 = $nilai13[$key] * $set->bobot13 / 100;
                    $nor14 = $nilai14[$key] * $set->bobot14 / 100;
                    $nor15 = $nilai15[$key] * $set->bobot15 / 100;
                    $nor16 = $nilai16[$key] * $set->bobot16 / 100;
                    $nor17 = $nilai17[$key] * $set->bobot17 / 100;
                    $nor18 = $nilai18[$key] * $set->bobot18 / 100;
                    $nor19 = $nilai19[$key] * $set->bobot19 / 100;
                    $nor20 = $nilai20[$key] * $set->bobot20 / 100;

                    $total[$key] =
                        $nor1 +
                        $nor2 +
                        $nor3 +
                        $nor4 +
                        $nor5 +
                        $nor6 +
                        $nor7 +
                        $nor8 +
                        $nor9 +
                        $nor10 +
                        $nor11 +
                        $nor12 +
                        $nor13 +
                        $nor14 +
                        $nor15 +
                        $nor16 +
                        $nor17 +
                        $nor18 +
                        $nor19 +
                        $nor20;
                }
            }



            foreach ($total as $key => $item) {
                $fixnilainormalisasi[$key] = [
                    'id' => $penilaian[$key]->id,
                    'nip' => $penilaian[$key]->nip,
                    'nama_ktp' => $penilaian[$key]->nama_ktp,
                    'nor1' => $nilai1[$key],
                    'nor2' => $nilai2[$key],
                    'nor3' => $nilai3[$key],
                    'nor4' => $nilai4[$key],
                    'nor5' => $nilai5[$key],
                    'nor6' => $nilai6[$key],
                    'nor7' => $nilai7[$key],
                    'nor8' => $nilai8[$key],
                    'nor9' => $nilai9[$key],
                    'nor10' => $nilai10[$key],
                    'nor11' => $nilai11[$key],
                    'nor12' => $nilai12[$key],
                    'nor13' => $nilai13[$key],
                    'nor14' => $nilai14[$key],
                    'nor15' => $nilai15[$key],
                    'nor16' => $nilai16[$key],
                    'nor17' => $nilai17[$key],
                    'nor18' => $nilai18[$key],
                    'nor19' => $nilai19[$key],
                    'nor20' => $nilai20[$key],
                ];

                $fixnilairangking[$key] = [
                    'id' => $penilaian[$key]->id,
                    'nip' => $penilaian[$key]->nip,
                    'nama_ktp' => $penilaian[$key]->nama_ktp,
                    'nor1' => $nilai1[$key] * $set->bobot1 / 100,
                    'nor2' => $nilai2[$key] * $set->bobot2 / 100,
                    'nor3' => $nilai3[$key] * $set->bobot3 / 100,
                    'nor4' => $nilai4[$key] * $set->bobot4 / 100,
                    'nor5' => $nilai5[$key] * $set->bobot5 / 100,
                    'nor6' => $nilai6[$key] * $set->bobot6 / 100,
                    'nor7' => $nilai7[$key] * $set->bobot7 / 100,
                    'nor8' => $nilai8[$key] * $set->bobot8 / 100,
                    'nor9' => $nilai9[$key] * $set->bobot9 / 100,
                    'nor10' => $nilai10[$key] * $set->bobot10 / 100,
                    'nor11' => $nilai11[$key] * $set->bobot11 / 100,
                    'nor12' => $nilai12[$key] * $set->bobot12 / 100,
                    'nor13' => $nilai13[$key] * $set->bobot13 / 100,
                    'nor14' => $nilai14[$key] * $set->bobot14 / 100,
                    'nor15' => $nilai15[$key] * $set->bobot15 / 100,
                    'nor16' => $nilai16[$key] * $set->bobot16 / 100,
                    'nor17' => $nilai17[$key] * $set->bobot17 / 100,
                    'nor18' => $nilai18[$key] * $set->bobot18 / 100,
                    'nor19' => $nilai19[$key] * $set->bobot19 / 100,
                    'nor20' => $nilai20[$key] * $set->bobot20 / 100,
                    'skor' => $item
                ];
            }

            usort($fixnilairangking, function ($a, $b) {
                return $a['skor'] < $b['skor'];
            });
        }

        return view('/report', [
            'title' => 'Report',
            'penilaian' => $penilaian,
            'normalisasi' => $fixnilainormalisasi,
            'perangkingan' => $fixnilairangking
        ]);
    }
}
