<?php

namespace App\Http\Controllers;

use App\Models\Settingnilai;
use App\Http\Requests\StoreSettingnilaiRequest;
use App\Http\Requests\UpdateSettingnilaiRequest;
use App\Models\Penilaian;
use Illuminate\Http\Request;

class SettingnilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $isi = Settingnilai::get();
        return view('settingnilai', [
            "title" => "Setting Nilai",
            "settingnilai" => $isi,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function simpan(Request $request)
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSettingnilaiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Settingnilai::truncate();
        $tbobot = $request->bobot1 +
            $request->bobot2 +
            $request->bobot3 +
            $request->bobot4 +
            $request->bobot5 +
            $request->bobot6 +
            $request->bobot7 +
            $request->bobot8 +
            $request->bobot9 +
            $request->bobot10 +
            $request->bobot11 +
            $request->bobot12 +
            $request->bobot13 +
            $request->bobot14 +
            $request->bobot15 +
            $request->bobot16 +
            $request->bobot17 +
            $request->bobot18 +
            $request->bobot19 +
            $request->bobot20;

        if ($tbobot == 100) {
            $ValidateData = $request->validate([
                'a1' => 'nullable',
                'bobot1' => 'nullable',
                'type1' => 'nullable',

                'a2' => 'nullable',
                'bobot2' => 'nullable',
                'type2' => 'nullable',

                'a3' => 'nullable',
                'bobot3' => 'nullable',
                'type3' => 'nullable',

                'a4' => 'nullable',
                'bobot4' => 'nullable',
                'type4' => 'nullable',

                'a5' => 'nullable',
                'bobot5' => 'nullable',
                'type5' => 'nullable',

                'a6' => 'nullable',
                'bobot6' => 'nullable',
                'type6' => 'nullable',

                'a7' => 'nullable',
                'bobot7' => 'nullable',
                'type7' => 'nullable',

                'a8' => 'nullable',
                'bobot8' => 'nullable',
                'type8' => 'nullable',

                'a9' => 'nullable',
                'bobot9' => 'nullable',
                'type9' => 'nullable',

                'a10' => 'nullable',
                'bobot10' => 'nullable',
                'type10' => 'nullable',

                'a11' => 'nullable',
                'bobot11' => 'nullable',
                'type11' => 'nullable',

                'a12' => 'nullable',
                'bobot12' => 'nullable',
                'type12' => 'nullable',

                'a13' => 'nullable',
                'bobot13' => 'nullable',
                'type13' => 'nullable',

                'a14' => 'nullable',
                'bobot14' => 'nullable',
                'type14' => 'nullable',

                'a15' => 'nullable',
                'bobot15' => 'nullable',
                'type15' => 'nullable',

                'a16' => 'nullable',
                'bobot16' => 'nullable',
                'type16' => 'nullable',

                'a17' => 'nullable',
                'bobot17' => 'nullable',
                'type17' => 'nullable',

                'a18' => 'nullable',
                'bobot18' => 'nullable',
                'type18' => 'nullable',

                'a19' => 'nullable',
                'bobot19' => 'nullable',
                'type19' => 'nullable',

                'a20' => 'nullable',
                'bobot20' => 'nullable',
                'type20' => 'nullable',
            ]);
            Settingnilai::create($ValidateData);
            return redirect('/settingnilai')->with('success', 'Data berhasil di ubah');
        } else {
            $ValidateData = $request->validate([
                'a1' => 'nullable',
                'bobot1' => 'nullable',
                'type1' => 'nullable',

                'a2' => 'nullable',
                'bobot2' => 'nullable',
                'type2' => 'nullable',

                'a3' => 'nullable',
                'bobot3' => 'nullable',
                'type3' => 'nullable',

                'a4' => 'nullable',
                'bobot4' => 'nullable',
                'type4' => 'nullable',

                'a5' => 'nullable',
                'bobot5' => 'nullable',
                'type5' => 'nullable',

                'a6' => 'nullable',
                'bobot6' => 'nullable',
                'type6' => 'nullable',

                'a7' => 'nullable',
                'bobot7' => 'nullable',
                'type7' => 'nullable',

                'a8' => 'nullable',
                'bobot8' => 'nullable',
                'type8' => 'nullable',

                'a9' => 'nullable',
                'bobot9' => 'nullable',
                'type9' => 'nullable',

                'a10' => 'nullable',
                'bobot10' => 'nullable',
                'type10' => 'nullable',

                'a11' => 'nullable',
                'bobot11' => 'nullable',
                'type11' => 'nullable',

                'a12' => 'nullable',
                'bobot12' => 'nullable',
                'type12' => 'nullable',

                'a13' => 'nullable',
                'bobot13' => 'nullable',
                'type13' => 'nullable',

                'a14' => 'nullable',
                'bobot14' => 'nullable',
                'type14' => 'nullable',

                'a15' => 'nullable',
                'bobot15' => 'nullable',
                'type15' => 'nullable',

                'a16' => 'nullable',
                'bobot16' => 'nullable',
                'type16' => 'nullable',

                'a17' => 'nullable',
                'bobot17' => 'nullable',
                'type17' => 'nullable',

                'a18' => 'nullable',
                'bobot18' => 'nullable',
                'type18' => 'nullable',

                'a19' => 'nullable',
                'bobot19' => 'nullable',
                'type19' => 'nullable',

                'a20' => 'nullable',
                'bobot20' => 'nullable',
                'type20' => 'nullable',
            ]);
            Settingnilai::create($ValidateData);
            return redirect('/settingnilai')->with('gagal', 'nilai total bobot tidak boleh lebih atau kurang dari 100');;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Settingnilai  $settingnilai
     * @return \Illuminate\Http\Response
     */
    public function show(Settingnilai $settingnilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Settingnilai  $settingnilai
     * @return \Illuminate\Http\Response
     */
    public function edit(Settingnilai $settingnilai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSettingnilaiRequest  $request
     * @param  \App\Models\Settingnilai  $settingnilai
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSettingnilaiRequest $request, Settingnilai $settingnilai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Settingnilai  $settingnilai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Settingnilai $settingnilai)
    {
        //
    }
}
