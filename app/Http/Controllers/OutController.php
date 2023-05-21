<?php

namespace App\Http\Controllers;

use App\Models\Out;
use App\Http\Requests\StoreOutRequest;
use App\Http\Requests\UpdateOutRequest;

class OutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreOutRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOutRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Out  $out
     * @return \Illuminate\Http\Response
     */
    public function show(Out $out)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Out  $out
     * @return \Illuminate\Http\Response
     */
    public function edit(Out $out)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOutRequest  $request
     * @param  \App\Models\Out  $out
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOutRequest $request, Out $out)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Out  $out
     * @return \Illuminate\Http\Response
     */
    public function destroy(Out $out)
    {
        //
    }
}
