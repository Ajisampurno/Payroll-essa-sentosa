<?php

namespace App\Http\Controllers;

use App\Models\Penilaian;
use App\Models\Settingnilai;
use App\Models\Profile;
use App\Models\Pengajuan;
use App\Models\Saw;
use App\Models\In;
use App\Models\Out;
use App\Models\Nilai;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public static function getSaw()
    {
        $sakit = Pengajuan::where('nip', Auth::user()->nip)
            ->where('aproval', 'setuju')
            ->where('alasan', 'sakit')->get()->count();

        $cuti = Pengajuan::where('nip', Auth::user()->nip)
            ->where('aproval', 'setuju')
            ->where('alasan', 'cuti')->get()->count();

        $nilai = Nilai::where('nip', Auth::user()->nip)->get();

        $countdatangawal = In::where('nip', Auth::user()->nip)->where('status', 'LIKE', "%datang awal%")->count();
        $countontimemasuk = In::where('nip', Auth::user()->nip)->where('status', 'LIKE', "%ontime masuk%")->count();
        $countdatangtelat = In::where('nip', Auth::user()->nip)->where('status', 'LIKE', "%datang telat%")->count();
        $countpulangawal = Out::where('nip', Auth::user()->nip)->where('status', 'LIKE', "%pulang awal%")->count();
        $countontimepulang = Out::where('nip', Auth::user()->nip)->where('status', 'LIKE', "%ontime pulang%")->count();
        $countpulangtelat = Out::where('nip', Auth::user()->nip)->where('status', 'LIKE', "%pulang telat%")->count();

        if ($nilai->toarray() != null) {
            Nilai::where('nip', Auth::user()->nip)
                ->update([
                    'nip' => Auth::user()->nip,
                    'datangawal' => $countdatangawal,
                    'ontimemasuk' => $countontimemasuk,
                    'datangtelat' => $countdatangtelat,
                    'pulangawal' => $countpulangawal,
                    'ontimepulang' => $countontimepulang,
                    'pulangtelat' => $countpulangtelat,
                    'sakit' => $sakit,
                    'cuti' => $cuti,
                ]);
        } else {
            Nilai::create([
                'nip' => Auth::user()->nip,
                'datangawal' => $countdatangawal,
                'ontimemasuk' => $countontimemasuk,
                'datangtelat' => $countdatangtelat,
                'pulangawal' => $countpulangawal,
                'ontimepulang' => $countontimepulang,
                'pulangtelat' => $countpulangtelat,
                'sakit' => $sakit,
                'cuti' => $cuti,
            ]);
        }

        $countnilai = Nilai::join('penilaians', 'penilaians.nip', 'nilais.nip')->get();

        // Nilai dari atasan
        $cekcount = Penilaian::get()->toarray();
        $settingnilai = Settingnilai::get();

        $bobotdatangawal = 0.1;
        $bobotontimemasuk = 0.1;
        $bobotdatangtelat = 0.1;
        $bobotpulangawal = 0.1;
        $bobotontimepulang = 0.1;
        $bobotpulangtelat = 0.1;
        $bobotcuti = 0.1;
        $bobotsakit = 0.1;

        if ($cekcount != null) {
            foreach ($settingnilai as $set) {
                foreach ($countnilai as $key => $nl) {

                    if ($nl->datangawal != null) {
                        $nilaidatangawal = $nl->datangawal / Nilai::max('datangawal') * $bobotdatangawal;
                    } else {
                        $nilaidatangawal = 0;
                    }

                    if ($nl->ontimemasuk != null) {
                        $nilaiontimmasuk = $nl->ontimemasuk / Nilai::max('ontimemasuk') * $bobotontimemasuk;
                    } else {
                        $nilaiontimmasuk = 0;
                    }

                    if ($nl->datangtelat != null) {
                        $nilaidatangtelat = $nl->datangtelat / Nilai::max('datangtelat') * $bobotdatangtelat;
                    } else {
                        $nilaidatangtelat = 0;
                    }

                    if ($nl->pulangawal != null) {
                        $nilaipulangawal = $nl->pulangawal / Nilai::max('pulangawal') * $bobotpulangawal;
                    } else {
                        $nilaipulangawal = 0;
                    }

                    if ($nl->ontimepulang) {
                        $nilaiontimepulang = $nl->ontimepulang / Nilai::max('ontimepulang') * $bobotontimepulang;
                    } else {
                        $nilaiontimepulang = 0;
                    }

                    if ($nl->pulangtelat != null) {
                        $nilaipulangtelat = $nl->pulangtelat / Nilai::max('pulangtelat') * $bobotpulangtelat;
                    } else {
                        $nilaipulangtelat = 0;
                    }
                    if ($sakit != null) {
                        $nilaisakit = $sakit / Nilai::max('sakit') * $bobotsakit;
                    } else {
                        $nilaisakit = 0;
                    }
                    if ($cuti != null) {
                        $nilaicuti = $cuti / Nilai::max('cuti') * $bobotcuti;
                    } else {
                        $nilaicuti = 0;
                    }



                    //Penilaianin 1
                    if (Penilaian::max('s1') != 0) {
                        if ($set->type1 = "Benefit") {
                            $nl1 = $nl->s1 / Penilaian::max('s1') * $set->bobot1 / 100;
                        } else {
                            $nl1 = Penilaian::min('s1') / $nl->s1 * $set->bobot1 / 100;
                        }
                    } else {
                        $nl1 = 0;
                    }
                    //Penilaianin 2
                    if (Penilaian::max('s2') != 0) {
                        if ($set->type2 = "Benefit") {
                            $nl2 = $nl->s2 / Penilaian::max('s2') * $set->bobot2 / 100;
                        } else {
                            $nl2 = Penilaian::min('s2') / $nl->s2 * $set->bobot2 / 100;
                        }
                    } else {
                        $nl2 = 0;
                    }
                    //Penilaianin 3
                    if (Penilaian::max('s3') != 0) {
                        if ($set->type3 = "Benefit") {
                            $nl3 = $nl->s3 / Penilaian::max('s3') * $set->bobot3 / 100;
                        } else {
                            $nl3 = Penilaian::min('s3') / $nl->s3 * $set->bobot3 / 100;
                        }
                    } else {
                        $nl3 = 0;
                    }
                    //Penilaianin 4
                    if (Penilaian::max('s4') != 0) {
                        if ($set->type4 = "Benefit") {
                            $nl4 = $nl->s4 / Penilaian::max('s4') * $set->bobot4 / 100;
                        } else {
                            $nl4 = Penilaian::min('s4') / $nl->s4 * $set->bobot4 / 100;
                        }
                    } else {
                        $nl4 = 0;
                    }
                    //Penilaianin 5
                    if (Penilaian::max('s5') != 0) {
                        if ($set->type5 = "Benefit") {
                            $nl5 = $nl->s5 / Penilaian::max('s5') * $set->bobot5 / 100;
                        } else {
                            $nl5 = Penilaian::min('s5') / $nl->s5 * $set->bobot5 / 100;
                        }
                    } else {
                        $nl5 = 0;
                    }
                    //Penilaianin 6
                    if (Penilaian::max('s6') != 0) {
                        if ($set->type6 = "Benefit") {
                            $nl6 = $nl->s6 / Penilaian::max('s6') * $set->bobot6 / 100;
                        } else {
                            $nl6 = Penilaian::min('s6') / $nl->s6 * $set->bobot6 / 100;
                        }
                    } else {
                        $nl6 = 0;
                    }
                    //Penilaianin 7
                    if (Penilaian::max('s7') != 0) {
                        if ($set->type7 = "Benefit") {
                            $nl7 = $nl->s7 / Penilaian::max('s7') * $set->bobot7 / 100;
                        } else {
                            $nl7 = Penilaian::min('s7') / $nl->s7 * $set->bobot7 / 100;
                        }
                    } else {
                        $nl7 = 0;
                    }
                    //Penilaianin 8
                    if (Penilaian::max('s8') != 0) {
                        if ($set->type8 = "Benefit") {
                            $nl8 = $nl->s8 / Penilaian::max('s8') * $set->bobot8 / 100;
                        } else {
                            $nl8 = Penilaian::min('s8') / $nl->s8 * $set->bobot8 / 100;
                        }
                    } else {
                        $nl8 = 0;
                    }
                    //Penilaianin 9
                    if (Penilaian::max('s9') != 0) {
                        if ($set->type9 = "Benefit") {
                            $nl9 = $nl->s9 / Penilaian::max('s9') * $set->bobot9 / 100;
                        } else {
                            $nl9 = Penilaian::min('s9') / $nl->s9 * $set->bobot9 / 100;
                        }
                    } else {
                        $nl9 = 0;
                    }
                    //Penilaianin 10
                    if (Penilaian::max('s10') != 0) {
                        if ($set->type10 = "Benefit") {
                            $nl10 = $nl->s10 / Penilaian::max('s10') * $set->bobot10 / 100;
                        } else {
                            $nl10 = Penilaian::min('s10') / $nl->s10 * $set->bobot10 / 100;
                        }
                    } else {
                        $nl10 = 0;
                    }
                    //Penilaianin 11
                    if (Penilaian::max('s11') != 0) {
                        if ($set->type11 = "Benefit") {
                            $nl11 = $nl->s11 / Penilaian::max('s11') * $set->bobot11 / 100;
                        } else {
                            $nl11 = Penilaian::min('s11') / $nl->s11 * $set->bobot11 / 100;
                        }
                    } else {
                        $nl11 = 0;
                    }
                    //Penilaianin 12
                    if (Penilaian::max('s12') != 0) {
                        if ($set->type12 = "Benefit") {
                            $nl12 = $nl->s12 / Penilaian::max('s12') * $set->bobot12 / 100;
                        } else {
                            $nl12 = Penilaian::min('s12') / $nl->s12 * $set->bobot12 / 100;
                        }
                    } else {
                        $nl12 = 0;
                    }
                    //Penilaianin 13
                    if (Penilaian::max('s13') != 0) {
                        if ($set->type13 = "Benefit") {
                            $nl13 = $nl->s13 / Penilaian::max('s13') * $set->bobot13 / 100;
                        } else {
                            $nl13 = Penilaian::min('s13') / $nl->s13 * $set->bobot13 / 100;
                        }
                    } else {
                        $nl13 = 0;
                    }
                    //Penilaianin 14
                    if (Penilaian::max('s14') != 0) {
                        if ($set->type14 = "Benefit") {
                            $nl14 = $nl->s14 / Penilaian::max('s14') * $set->bobot14 / 100;
                        } else {
                            $nl14 = Penilaian::min('s14') / $nl->s14 * $set->bobot14 / 100;
                        }
                    } else {
                        $nl14 = 0;
                    }
                    //Penilaianin 15
                    if (Penilaian::max('s15') != 0) {
                        if ($set->type15 = "Benefit") {
                            $nl15 = $nl->s15 / Penilaian::max('s15') * $set->bobot15 / 100;
                        } else {
                            $nl15 = Penilaian::min('s15') / $nl->s15 * $set->bobot15 / 100;
                        }
                    } else {
                        $nl15 = 0;
                    }
                    //Penilaianin 16
                    if (Penilaian::max('s16') != 0) {
                        if ($set->type16 = "Benefit") {
                            $nl16 = $nl->s16 / Penilaian::max('s16') * $set->bobot16 / 100;
                        } else {
                            $nl16 = Penilaian::min('s16') / $nl->s16 * $set->bobot16 / 100;
                        }
                    } else {
                        $nl16 = 0;
                    }
                    //Penilaianin 17
                    if (Penilaian::max('s17') != 0) {
                        if ($set->type17 = "Benefit") {
                            $nl17 = $nl->s17 / Penilaian::max('s17') * $set->bobot17 / 100;
                        } else {
                            $nl17 = Penilaian::min('s17') / $nl->s17 * $set->bobot17 / 100;
                        }
                    } else {
                        $nl17 = 0;
                    }
                    //Penilaianin 18
                    if (Penilaian::max('s18') != 0) {
                        if ($set->type18 = "Benefit") {
                            $nl18 = $nl->s18 / Penilaian::max('s18') * $set->bobot18 / 100;
                        } else {
                            $nl18 = Penilaian::min('s18') / $nl->s18 * $set->bobot18 / 100;
                        }
                    } else {
                        $nl18 = 0;
                    }
                    //Penilaianin 19
                    if (Penilaian::max('s19') != 0) {
                        if ($set->type19 = "Benefit") {
                            $nl19 = $nl->s19 / Penilaian::max('s19') * $set->bobot19 / 100;
                        } else {
                            $nl19 = Penilaian::min('s19') / $nl->s19 * $set->bobot19 / 100;
                        }
                    } else {
                        $nl19 = 0;
                    }
                    //Penilaianin 20
                    if (Penilaian::max('s20') != 0) {
                        if ($set->type20 = "Benefit") {
                            $nl20 = $nl->s20 / Penilaian::max('s20') * $set->bobot20 / 100;
                        } else {
                            $nl20 = Penilaian::min('s20') / $nl->s20 * $set->bobot20 / 100;
                        }
                    } else {
                        $nl20 = 0;
                    }

                    $skor = $nilaidatangawal +
                        $nilaiontimmasuk +
                        $nilaidatangtelat +
                        $nilaipulangawal +
                        $nilaiontimepulang +
                        $nilaipulangtelat +
                        $nilaisakit +
                        $nilaicuti +
                        $nl1 +
                        $nl2 +
                        $nl3 +
                        $nl4 +
                        $nl5 +
                        $nl6 +
                        $nl7 +
                        $nl8 +
                        $nl9 +
                        $nl10 +
                        $nl11 +
                        $nl12 +
                        $nl13 +
                        $nl14 +
                        $nl15 +
                        $nl16 +
                        $nl17 +
                        $nl18 +
                        $nl19 +
                        $nl20;

                    // Bungkus ke variabel cnilai
                    $data[$key] = [
                        'nip' => $nl->nip,
                        'datangawal' => $nilaidatangawal,
                        'ontimemasuk' => $nilaiontimmasuk,
                        'datangtelat' => $nilaidatangtelat,
                        'pulangawal' => $nilaipulangawal,
                        'ontimepulang' => $nilaiontimepulang,
                        'pulangtelat' => $nilaipulangtelat,
                        'sakit' => $nilaisakit,
                        'cuti' => $nilaicuti,
                        'nilai1' => $nl1,
                        'nilai2' => $nl2,
                        'nilai3' => $nl3,
                        'nilai4' => $nl4,
                        'nilai5' => $nl5,
                        'nilai6' => $nl6,
                        'nilai7' => $nl7,
                        'nilai8' => $nl8,
                        'nilai9' => $nl9,
                        'nilai10' => $nl10,
                        'nilai11' => $nl11,
                        'nilai12' => $nl12,
                        'nilai13' => $nl13,
                        'nilai14' => $nl14,
                        'nilai15' => $nl15,
                        'nilai16' => $nl16,
                        'nilai17' => $nl17,
                        'nilai18' => $nl18,
                        'nilai19' => $nl19,
                        'nilai20' => $nl20,
                        'skor' => $skor
                    ];
                }
            }
        }

        usort($data, function ($a, $b) {
            return $b['skor'] > $a['skor'];
        });

        $peringkat = 1;
        foreach ($data as $key => $item) {
            $data[$key]['peringkat'] = $peringkat++;
        }
        return $data;
    }


    public function index()
    {
        $data = ReportController::getSaw();
        $settingnilai = Settingnilai::get();

        return view('/report', [
            'title' => 'Report',
            'saw' => $data,
            'settingnilai' => $settingnilai
        ]);
    }

    public function rangkingboard()
    {
        $data = ReportController::getSaw();
        $settingnilai = Settingnilai::get();

        return view('/report', [
            'title' => 'Rangkingboard',
            'saw' => $data,
            'settingnilai' => $settingnilai
        ]);
    }
}
