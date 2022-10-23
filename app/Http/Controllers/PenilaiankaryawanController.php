<?php

namespace App\Http\Controllers;

use App\Models\Penilaian;
use App\Models\Profile;
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

    public function perhitungan()
    {
        $penilaians = Penilaian::get();

        //NORMALISASI
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

        foreach ($penilaians as $key => $nilai) {
            $n1 = $nilai->s1 / $m1 * 1;
            $n2 = $nilai->s2 / $m2 * 1;
            $n3 = $nilai->s3 / $m3 * 1;
            $n4 = $nilai->s4 / $m4 * 1;
            $n5 = $nilai->s5 / $m5 * 1;
            $n6 = $nilai->s6 / $m6 * 1;
            $n7 = $nilai->s7 / $m7 * 1;
            $n8 = $nilai->s8 / $m8 * 1;
            $n9 = $nilai->s9 / $m9 * 0.5;
            $n10 = $nilai->s10 / $m10 * 0.5;
            $n11 = $nilai->s11 / $m11 * 0.5;
            $n12 = $nilai->s12 / $m12 * 0.5;

            $normalisasi[$key] = [
                'nip' => $nilai->nip,
                'nama' => $nilai->nama_ktp,
                'nilai1' => $n1,
                'nilai2' => $n2,
                'nilai3' => $n3,
                'nilai4' => $n4,
                'nilai5' => $n5,
                'nilai6' => $n6,
                'nilai7' => $n7,
                'nilai8' => $n8,
                'nilai9' => $n9,
                'nilai10' => $n10,
                'nilai11' => $n11,
                'nilai12' => $n12
            ];
        }

        //PERANGKINGAN
        foreach ($penilaians as $key => $nilai) {
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
                'nip' => $penilaians[$key]->nip,
                'nama_ktp' => $penilaians[$key]->nama_ktp,
                'skor' => $item
            ];
        }
        usort($fixnilai, function ($a, $b) {
            return $a['skor'] < $b['skor'];
        });

        return view('/perhitungan', [
            "title" => "Perhitungan",
            "input" => $penilaians,
            "normalisasi" => $normalisasi,
            "fixnilai" => $fixnilai
        ]);
    }

    public function rangkingboard()
    {
        $penilaians = Penilaian::latest();

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

        $penilaian = $penilaians->get();

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
            'nama_ktp' => 'required',
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
