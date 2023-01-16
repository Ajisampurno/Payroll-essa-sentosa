<?php

namespace App\Http\Controllers;

use App\Models\Penilaian;
use App\Models\Profile;
use App\Models\Settingnilai;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Nullable;

class PenilaiankaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/raport', [
            "title" => "Data karyawan"
        ]);
    }

    public function rangkingboard()
    {

        $settingnilai = Settingnilai::get();
        $count = Penilaian::get()->toarray();
        $penilaian = Penilaian::join('profiles', 'penilaians.nip', '=', 'profiles.id')
            ->select('penilaians.*', 'profiles.nama_ktp')
            ->get();

        if ($count != null) {
            foreach ($settingnilai as $set) {
                foreach ($penilaian as $key => $nilai) {
                    foreach ($settingnilai as $set) {
                        //penilaian 1
                        if ($nilai->s1 != 0) {
                            if ($set->type1 != "Benefit") {
                                $nilai1 = $nilai->s1 / Penilaian::max('s1') * $set->bobot1 / 100;
                            } else {
                                $nilai1 = Penilaian::min('s1') / $nilai->s1 * $set->bobot1 / 100;
                            }
                        } else {
                            $nilai1 = 0;
                        };
                        //penilaian 2
                        if ($nilai->s2 != 0) {
                            if ($set->type2 != "Benefit") {
                                $nilai2 = $nilai->s2 / Penilaian::max('s2') * $set->bobot2 / 100;
                            } else {
                                $nilai2 = Penilaian::min('s2') / $nilai->s2 * $set->bobot2 / 100;
                            }
                        } else {
                            $nilai2 = 0;
                        };
                        //penilaian 3
                        if ($nilai->s3 != 0) {
                            if ($set->type3 != "Benefit") {
                                $nilai3 = $nilai->s3 / Penilaian::max('s3') * $set->bobot3 / 100;
                            } else {
                                $nilai3 = Penilaian::min('s3') / $nilai->s3 * $set->bobot3 / 100;
                            }
                        } else {
                            $nilai3 = 0;
                        };
                        //penilaian 4
                        if ($nilai->s4 != 0) {
                            if ($set->type4 != "Benefit") {
                                $nilai4 = $nilai->s4 / Penilaian::max('s4') * $set->bobot4 / 100;
                            } else {
                                $nilai4 = Penilaian::min('s4') / $nilai->s4 * $set->bobot4 / 100;
                            }
                        } else {
                            $nilai4 = 0;
                        };
                        //penilaian 5
                        if ($nilai->s5 != 0) {
                            if ($set->type5 != "Benefit") {
                                $nilai5 = $nilai->s5 / Penilaian::max('s5') * $set->bobot5 / 100;
                            } else {
                                $nilai5 = Penilaian::min('s5') / $nilai->s5 * $set->bobot5 / 100;
                            }
                        } else {
                            $nilai5 = 0;
                        };
                        //penilaian 6
                        if ($nilai->s6 != 0) {
                            if ($set->type6 != "Benefit") {
                                $nilai6 = $nilai->s6 / Penilaian::max('s6') * $set->bobot6 / 100;
                            } else {
                                $nilai6 = Penilaian::min('s6') / $nilai->s6 * $set->bobot6 / 100;
                            }
                        } else {
                            $nilai6 = 0;
                        };
                        //penilaian 7
                        if ($nilai->s7 != 0) {
                            if ($set->type7 != "Benefit") {
                                $nilai7 = $nilai->s7 / Penilaian::max('s7') * $set->bobot7 / 100;
                            } else {
                                $nilai7 = Penilaian::min('s7') / $nilai->s7 * $set->bobot7 / 100;
                            }
                        } else {
                            $nilai7 = 0;
                        };
                        //penilaian 8
                        if ($nilai->s8 != 0) {
                            if ($set->type8 != "Benefit") {
                                $nilai8 = $nilai->s8 / Penilaian::max('s8') * $set->bobot8 / 100;
                            } else {
                                $nilai8 = Penilaian::min('s8') / $nilai->s8 * $set->bobot8 / 100;
                            }
                        } else {
                            $nilai8 = 0;
                        };
                        //penilaian 9
                        if ($nilai->s9 != 0) {
                            if ($set->type9 != "Benefit") {
                                $nilai9 = $nilai->s9 / Penilaian::max('s9') * $set->bobot9 / 100;
                            } else {
                                $nilai9 = Penilaian::min('s9') / $nilai->s9 * $set->bobot9 / 100;
                            }
                        } else {
                            $nilai9 = 0;
                        };
                        //penilaian 10
                        if ($nilai->s10 != 0) {
                            if ($set->type10 != "Benefit") {
                                $nilai10 = $nilai->s10 / Penilaian::max('s10') * $set->bobot10 / 100;
                            } else {
                                $nilai10 = Penilaian::min('s10') / $nilai->s10 * $set->bobot10 / 100;
                            }
                        } else {
                            $nilai10 = 0;
                        };
                        //penilaian 11
                        if ($nilai->s11 != 0) {
                            if ($set->type11 != "Benefit") {
                                $nilai11 = $nilai->s11 / Penilaian::max('s11') * $set->bobot11 / 100;
                            } else {
                                $nilai11 = Penilaian::min('s11') / $nilai->s11 * $set->bobot11 / 100;
                            }
                        } else {
                            $nilai11 = 0;
                        };
                        //penilaian 12
                        if ($nilai->s12 != 0) {
                            if ($set->type12 != "Benefit") {
                                $nilai12 = $nilai->s12 / Penilaian::max('s12') * $set->bobot12 / 100;
                            } else {
                                $nilai12 = Penilaian::min('s12') / $nilai->s12 * $set->bobot12 / 100;
                            }
                        } else {
                            $nilai12 = 0;
                        };
                        //penilaian 13
                        if ($nilai->s13 != 0) {
                            if ($set->type13 != "Benefit") {
                                $nilai13 = $nilai->s13 / Penilaian::max('s13') * $set->bobot13 / 100;
                            } else {
                                $nilai13 = Penilaian::min('s13') / $nilai->s13 * $set->bobot13 / 100;
                            }
                        } else {
                            $nilai13 = 0;
                        };
                        //penilaian 14
                        if ($nilai->s14 != 0) {
                            if ($set->type14 != "Benefit") {
                                $nilai14 = $nilai->s14 / Penilaian::max('s14') * $set->bobot14 / 100;
                            } else {
                                $nilai14 = Penilaian::min('s14') / $nilai->s14 * $set->bobot14 / 100;
                            }
                        } else {
                            $nilai14 = 0;
                        };
                        //penilaian 15
                        if ($nilai->s15 != 0) {
                            if ($set->type15 != "Benefit") {
                                $nilai15 = $nilai->s15 / Penilaian::max('s15') * $set->bobot15 / 100;
                            } else {
                                $nilai15 = Penilaian::min('s15') / $nilai->s15 * $set->bobot15 / 100;
                            }
                        } else {
                            $nilai15 = 0;
                        };
                        //penilaian 16
                        if ($nilai->s16 != 0) {
                            if ($set->type16 != "Benefit") {
                                $nilai16 = $nilai->s16 / Penilaian::max('s16') * $set->bobot16 / 100;
                            } else {
                                $nilai16 = Penilaian::min('s16') / $nilai->s16 * $set->bobot16 / 100;
                            }
                        } else {
                            $nilai16 = 0;
                        };
                        //penilaian 17
                        if ($nilai->s17 != 0) {
                            if ($set->type17 != "Benefit") {
                                $nilai17 = $nilai->s17 / Penilaian::max('s17') * $set->bobot17 / 100;
                            } else {
                                $nilai17 = Penilaian::min('s17') / $nilai->s17 * $set->bobot17 / 100;
                            }
                        } else {
                            $nilai17 = 0;
                        };
                        //penilaian 18
                        if ($nilai->s18 != 0) {
                            if ($set->type18 != "Benefit") {
                                $nilai18 = $nilai->s18 / Penilaian::max('s18') * $set->bobot18 / 100;
                            } else {
                                $nilai18 = Penilaian::min('s18') / $nilai->s18 * $set->bobot18 / 100;
                            }
                        } else {
                            $nilai18 = 0;
                        };
                        //penilaian 19
                        if ($nilai->s19 != 0) {
                            if ($set->type19 != "Benefit") {
                                $nilai19 = $nilai->s19 / Penilaian::max('s19') * $set->bobot19 / 100;
                            } else {
                                $nilai19 = Penilaian::min('s19') / $nilai->s19 * $set->bobot19 / 100;
                            }
                        } else {
                            $nilai19 = 0;
                        };
                        //penilaian 20
                        if ($nilai->s20 != 0) {
                            if ($set->type20 != "Benefit") {
                                $nilai20 = $nilai->s20 / Penilaian::max('s20') * $set->bobot20 / 100;
                            } else {
                                $nilai20 = Penilaian::min('s20') / $nilai->s20 * $set->bobot20 / 100;
                            }
                        } else {
                            $nilai20 = 0;
                        };
                        $total[$key] = $nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5 + $nilai6 + $nilai7 + $nilai8 + $nilai9 + $nilai10 + $nilai11 + $nilai12 + $nilai13 + $nilai14 + $nilai15 + $nilai16 + $nilai17 + $nilai18 + $nilai19 + $nilai20;
                    }
                }
            }


            foreach ($total as $key => $item) {

                $fixnilai[$key] = [
                    'nip' => $penilaian[$key]->nip,
                    'nama_ktp' => $penilaian[$key]->nama_ktp,
                    'skor' => $item
                ];
            }

            usort($fixnilai, function ($a, $b) {
                return $a['skor'] < $b['skor'];
            });
        } else {
            $fixnilai = [];
        }

        return view('rangkingboard', [
            "title" => "Rangking Board",
            "fixnilai" => $fixnilai
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $ValidateData = $request->validate([
            'id',
            'nip' => 'unique:penilaians,nip',
            's1' => 'nullable',
            's2' => 'nullable',
            's3' => 'nullable',
            's4' => 'nullable',
            's5' => 'nullable',
            's6' => 'nullable',
            's7' => 'nullable',
            's8' => 'nullable',
            's9' => 'nullable',
            's10' => 'nullable',
            's11' => 'nullable',
            's12' => 'nullable',
            's13' => 'nullable',
            's14' => 'nullable',
            's15' => 'nullable',
            's16' => 'nullable',
            's17' => 'nullable',
            's18' => 'nullable',
            's19' => 'nullable',
            's20' => 'nullable',
        ]);

        Penilaian::create($ValidateData);
        return redirect('/rangkingboard')->with('success', 'Data berhasil di tambah kan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penilaian  $penilaian
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('formPK', [
            "title" => "Form penilaian",
            "profiles" => Profile::find($id)
        ]);
    }

    public function form()
    {
        $profile = Profile::get();
        $setting = Settingnilai::get();

        return view('formPK', [
            "title" => "Form penilaian",
            "profiles" => $profile,
            "setting" => $setting
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penilaian  $penilaian
     * @return \Illuminate\Http\Response
     */
    public function edit(Penilaian $penilaian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penilaian  $penilaian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penilaian $penilaian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penilaian  $penilaian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penilaian $penilaian)
    {
        //
    }
}
