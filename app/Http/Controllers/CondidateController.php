<?php

namespace App\Http\Controllers;

use App\Models\Condidate;
use App\Http\Requests\StoreCondidateRequest;
use App\Http\Requests\UpdateCondidateRequest;

class CondidateController extends Controller
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
     * @param  \App\Http\Requests\StoreCondidateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCondidateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Condidate  $condidate
     * @return \Illuminate\Http\Response
     */
    public function show(Condidate $condidate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Condidate  $condidate
     * @return \Illuminate\Http\Response
     */
    public function edit(Condidate $condidate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCondidateRequest  $request
     * @param  \App\Models\Condidate  $condidate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCondidateRequest $request, Condidate $condidate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Condidate  $condidate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Condidate $condidate)
    {
        //
    }
}
