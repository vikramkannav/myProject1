<?php

namespace App\Http\Controllers;

use App\Messgae;
use Illuminate\Http\Request;

class MessgaeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('message');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('message');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Messgae  $messgae
     * @return \Illuminate\Http\Response
     */
    public function show(Messgae $messgae)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Messgae  $messgae
     * @return \Illuminate\Http\Response
     */
    public function edit(Messgae $messgae)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Messgae  $messgae
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Messgae $messgae)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Messgae  $messgae
     * @return \Illuminate\Http\Response
     */
    public function destroy(Messgae $messgae)
    {
        //
    }
}
