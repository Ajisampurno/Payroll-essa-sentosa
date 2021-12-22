<?php

namespace App\Http\Controllers;

use App\Models\Profile;

use App\Exports\ProfilesExport;
use App\Imports\ProfilesImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateProfileRequest;
//use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('data_karyawan',[
            "title" => "Data karyawan",
            "profiles" => Profile::all()
        ]);
    }

    public function profilesexport(){
        return Excel::download(new ProfilesExport,'profiles.xls');
    }

    public function ProfilesImport(Request $request){

        $file = $request->file('file');
        $nama_file = $file->getClientOriginalName();
        $file->move('DataKaryawan',$nama_file);

        Excel::import(new ProfilesImport, public_path('/DataKaryawan/'.$nama_file));
        return redirect('/data_karyawan');
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProfileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfileRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('show_profiles',[
            "title" => "Lihat data",
            "profiles" => Profile::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfileRequest  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfileRequest $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
