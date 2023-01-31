<?php

namespace App\Http\Controllers;

use App\Models\Penilaian;
use App\Models\Profile;
use App\Models\Settingnilai;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PenilaiankaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
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

        $count = Penilaian::get()->toarray();
        $penilaian = Penilaian::join('profiles', 'penilaians.nip', '=', 'profiles.id')
            ->select('penilaians.*', 'profiles.nama_ktp')
            ->get();
        $settingnilai = Settingnilai::get();

        if ($count != null) {

            foreach ($settingnilai as $set) {
                foreach ($penilaian as $key => $nilai) {

                    //Penilaianin 1
                    if (Penilaian::max('s1') != 0) {
                        if ($set->type1 = "Benefit") {
                            $nilai1[$key] = $nilai->s1 / Penilaian::max('s1') * $set->bobot1 / 100;
                        } else {
                            $nilai1[$key] = Penilaian::min('s1') / $nilai->s1 * $set->bobot1 / 100;
                        }
                    } else {
                        $nilai1[$key] = 0;
                    }
                    //Penilaianin 2
                    if (Penilaian::max('s2') != 0) {
                        if ($set->type2 = "Benefit") {
                            $nilai2[$key] = $nilai->s2 / Penilaian::max('s2') * $set->bobot2 / 100;
                        } else {
                            $nilai2[$key] = Penilaian::min('s2') / $nilai->s2 * $set->bobot2 / 100;
                        }
                    } else {
                        $nilai2[$key] = 0;
                    }
                    //Penilaianin 3
                    if (Penilaian::max('s3') != 0) {
                        if ($set->type3 = "Benefit") {
                            $nilai3[$key] = $nilai->s3 / Penilaian::max('s3') * $set->bobot3 / 100;
                        } else {
                            $nilai3[$key] = Penilaian::min('s3') / $nilai->s3 * $set->bobot3 / 100;
                        }
                    } else {
                        $nilai3[$key] = 0;
                    }
                    //Penilaianin 4
                    if (Penilaian::max('s4') != 0) {
                        if ($set->type4 = "Benefit") {
                            $nilai4[$key] = $nilai->s4 / Penilaian::max('s4') * $set->bobot4 / 100;
                        } else {
                            $nilai4[$key] = Penilaian::min('s4') / $nilai->s4 * $set->bobot4 / 100;
                        }
                    } else {
                        $nilai4[$key] = 0;
                    }
                    //Penilaianin 5
                    if (Penilaian::max('s5') != 0) {
                        if ($set->type5 = "Benefit") {
                            $nilai5[$key] = $nilai->s5 / Penilaian::max('s5') * $set->bobot5 / 100;
                        } else {
                            $nilai5[$key] = Penilaian::min('s5') / $nilai->s5 * $set->bobot5 / 100;
                        }
                    } else {
                        $nilai5[$key] = 0;
                    }
                    //Penilaianin 6
                    if (Penilaian::max('s6') != 0) {
                        if ($set->type6 = "Benefit") {
                            $nilai6[$key] = $nilai->s6 / Penilaian::max('s6') * $set->bobot6 / 100;
                        } else {
                            $nilai6[$key] = Penilaian::min('s6') / $nilai->s6 * $set->bobot6 / 100;
                        }
                    } else {
                        $nilai6[$key] = 0;
                    }
                    //Penilaianin 7
                    if (Penilaian::max('s7') != 0) {
                        if ($set->type7 = "Benefit") {
                            $nilai7[$key] = $nilai->s7 / Penilaian::max('s7') * $set->bobot7 / 100;
                        } else {
                            $nilai7[$key] = Penilaian::min('s7') / $nilai->s7 * $set->bobot7 / 100;
                        }
                    } else {
                        $nilai7[$key] = 0;
                    }
                    //Penilaianin 8
                    if (Penilaian::max('s8') != 0) {
                        if ($set->type8 = "Benefit") {
                            $nilai8[$key] = $nilai->s8 / Penilaian::max('s8') * $set->bobot8 / 100;
                        } else {
                            $nilai8[$key] = Penilaian::min('s8') / $nilai->s8 * $set->bobot8 / 100;
                        }
                    } else {
                        $nilai8[$key] = 0;
                    }
                    //Penilaianin 9
                    if (Penilaian::max('s9') != 0) {
                        if ($set->type9 = "Benefit") {
                            $nilai9[$key] = $nilai->s9 / Penilaian::max('s9') * $set->bobot9 / 100;
                        } else {
                            $nilai9[$key] = Penilaian::min('s9') / $nilai->s9 * $set->bobot9 / 100;
                        }
                    } else {
                        $nilai9[$key] = 0;
                    }
                    //Penilaianin 10
                    if (Penilaian::max('s10') != 0) {
                        if ($set->type10 = "Benefit") {
                            $nilai10[$key] = $nilai->s10 / Penilaian::max('s10') * $set->bobot10 / 100;
                        } else {
                            $nilai10[$key] = Penilaian::min('s10') / $nilai->s10 * $set->bobot10 / 100;
                        }
                    } else {
                        $nilai10[$key] = 0;
                    }
                    //Penilaianin 11
                    if (Penilaian::max('s11') != 0) {
                        if ($set->type11 = "Benefit") {
                            $nilai11[$key] = $nilai->s11 / Penilaian::max('s11') * $set->bobot11 / 100;
                        } else {
                            $nilai11[$key] = Penilaian::min('s11') / $nilai->s11 * $set->bobot11 / 100;
                        }
                    } else {
                        $nilai11[$key] = 0;
                    }
                    //Penilaianin 12
                    if (Penilaian::max('s12') != 0) {
                        if ($set->type12 = "Benefit") {
                            $nilai12[$key] = $nilai->s12 / Penilaian::max('s12') * $set->bobot12 / 100;
                        } else {
                            $nilai12[$key] = Penilaian::min('s12') / $nilai->s12 * $set->bobot12 / 100;
                        }
                    } else {
                        $nilai12[$key] = 0;
                    }
                    //Penilaianin 13
                    if (Penilaian::max('s13') != 0) {
                        if ($set->type13 = "Benefit") {
                            $nilai13[$key] = $nilai->s13 / Penilaian::max('s13') * $set->bobot13 / 100;
                        } else {
                            $nilai13[$key] = Penilaian::min('s13') / $nilai->s13 * $set->bobot13 / 100;
                        }
                    } else {
                        $nilai13[$key] = 0;
                    }
                    //Penilaianin 14
                    if (Penilaian::max('s14') != 0) {
                        if ($set->type14 = "Benefit") {
                            $nilai14[$key] = $nilai->s14 / Penilaian::max('s14') * $set->bobot14 / 100;
                        } else {
                            $nilai14[$key] = Penilaian::min('s14') / $nilai->s14 * $set->bobot14 / 100;
                        }
                    } else {
                        $nilai14[$key] = 0;
                    }
                    //Penilaianin 15
                    if (Penilaian::max('s15') != 0) {
                        if ($set->type15 = "Benefit") {
                            $nilai15[$key] = $nilai->s15 / Penilaian::max('s15') * $set->bobot15 / 100;
                        } else {
                            $nilai15[$key] = Penilaian::min('s15') / $nilai->s15 * $set->bobot15 / 100;
                        }
                    } else {
                        $nilai15[$key] = 0;
                    }
                    //Penilaianin 16
                    if (Penilaian::max('s16') != 0) {
                        if ($set->type16 = "Benefit") {
                            $nilai16[$key] = $nilai->s16 / Penilaian::max('s16') * $set->bobot16 / 100;
                        } else {
                            $nilai16[$key] = Penilaian::min('s16') / $nilai->s16 * $set->bobot16 / 100;
                        }
                    } else {
                        $nilai16[$key] = 0;
                    }
                    //Penilaianin 17
                    if (Penilaian::max('s17') != 0) {
                        if ($set->type17 = "Benefit") {
                            $nilai17[$key] = $nilai->s17 / Penilaian::max('s17') * $set->bobot17 / 100;
                        } else {
                            $nilai17[$key] = Penilaian::min('s17') / $nilai->s17 * $set->bobot17 / 100;
                        }
                    } else {
                        $nilai17[$key] = 0;
                    }
                    //Penilaianin 18
                    if (Penilaian::max('s18') != 0) {
                        if ($set->type18 = "Benefit") {
                            $nilai18[$key] = $nilai->s18 / Penilaian::max('s18') * $set->bobot18 / 100;
                        } else {
                            $nilai18[$key] = Penilaian::min('s18') / $nilai->s18 * $set->bobot18 / 100;
                        }
                    } else {
                        $nilai18[$key] = 0;
                    }
                    //Penilaianin 19
                    if (Penilaian::max('s19') != 0) {
                        if ($set->type19 = "Benefit") {
                            $nilai19[$key] = $nilai->s19 / Penilaian::max('s19') * $set->bobot19 / 100;
                        } else {
                            $nilai19[$key] = Penilaian::min('s19') / $nilai->s19 * $set->bobot19 / 100;
                        }
                    } else {
                        $nilai19[$key] = 0;
                    }
                    //Penilaianin 20
                    if (Penilaian::max('s20') != 0) {
                        if ($set->type20 = "Benefit") {
                            $nilai20[$key] = $nilai->s20 / Penilaian::max('s20') * $set->bobot20 / 100;
                        } else {
                            $nilai20[$key] = Penilaian::min('s20') / $nilai->s20 * $set->bobot20 / 100;
                        }
                    } else {
                        $nilai20[$key] = 0;
                    }
                    $total[$key] =  $nilai1[$key] + $nilai2[$key] + $nilai3[$key] + $nilai4[$key] + $nilai5[$key] + $nilai6[$key] + $nilai7[$key] + $nilai8[$key] + $nilai9[$key] + $nilai10[$key] + $nilai11[$key] + $nilai12[$key] + $nilai13[$key] + $nilai14[$key] + $nilai15[$key] + $nilai16[$key] + $nilai17[$key] + $nilai18[$key] + $nilai19[$key] + $nilai20[$key];
                }
            }

            foreach ($total as $key => $item) {

                $fixnilai[$key] = [
                    'id' => $penilaian[$key]->id,
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

    public function hapus($id)
    {
        $data = Penilaian::find($id);
        $data->delete();
        return redirect('/rangkingboard')->with('success', 'Data berhasil di hapus');
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
        return redirect('/formPK')->with('success', 'Data berhasil di tambah kan');
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
    public function edit($nip)
    {
        $profile = Profile::find($nip);
        $setting = Settingnilai::get();


        return view('update_nilai', [
            "title" => "ubah penilaian",
            "penilaian" => Penilaian::where('nip'),
            "profiles" => $profile,
            "setting" => $setting
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penilaian  $penilaian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $rules = [
            'nip' => 'required',
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
        ];

        $ValidateData = $request->validate($rules);
        Penilaian::where('nip', $id)->update($ValidateData);

        return redirect('/rangkingboard')->with('success', 'Data berhasil di ubah');
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
