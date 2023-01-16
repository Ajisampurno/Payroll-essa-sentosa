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

        if ($count != null) {
            $m1 = Penilaian::max('s1');
            $m2 = Penilaian::max('s2');
            $m3 = Penilaian::max('s3');
            $m4 = Penilaian::max('s4');
            $m5 = Penilaian::max('s5');
            $m6 = Penilaian::max('s6');
            $m7 = Penilaian::max('s7');
            $m8 = Penilaian::max('s8');
            $m9 = Penilaian::max('s9');
            $m10 = Penilaian::max('s10');
            $m11 = Penilaian::max('s11');
            $m12 = Penilaian::max('s12');

            $penilaian = Penilaian::join('profiles', 'penilaians.nip', '=', 'profiles.id')
                ->select('penilaians.*', 'profiles.nama_ktp')
                ->get();
            foreach ($penilaian as $key => $nilai) {
                $total[$key] =  $nilai->s1 / $m1 * 1 +
                    $nilai->s2 / $m2 * 1 +
                    $nilai->s3 / $m3 * 1 +
                    $nilai->s4 / $m4 * 1 +
                    $nilai->s5 / $m5 * 1 +
                    $nilai->s6 / $m6 * 1 +
                    $nilai->s7 / $m7 * 1 +
                    $nilai->s8 / $m8 * 1 +
                    $nilai->s9 / $m9 * 0.5 +
                    $nilai->s10 / $m10 * 0.5 +
                    $nilai->s11 / $m11 * 0.5 +
                    $nilai->s12 / $m12 * 0.5;
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
            's1' => 'required',
            's2' => 'required',
            's3' => 'required',
            's4' => 'required',
            's5' => 'required',
            's6' => 'required',
            's7' => 'required',
            's8' => 'required',
            's9' => 'required',
            's10' => 'required',
            's11' => 'required',
            's12' => 'required'
        ]);


        Penilaian::create($ValidateData);
        return redirect('/data_karyawan')->with('success', 'Data berhasil di tambah kan');
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
