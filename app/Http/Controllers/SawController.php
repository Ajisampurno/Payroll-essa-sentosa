<?php

namespace App\Http\Controllers;

use App\Models\Saw;
use App\Http\Requests\StoreSawRequest;
use App\Http\Requests\UpdateSawRequest;

class SawController extends Controller
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
     * @param  \App\Http\Requests\StoreSawRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSawRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Saw  $saw
     * @return \Illuminate\Http\Response
     */
    public function show(Saw $saw)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Saw  $saw
     * @return \Illuminate\Http\Response
     */
    public function edit(Saw $saw)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSawRequest  $request
     * @param  \App\Models\Saw  $saw
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSawRequest $request, Saw $saw)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Saw  $saw
     * @return \Illuminate\Http\Response
     */
    public function destroy(Saw $saw)
    {
        //
    }
}
