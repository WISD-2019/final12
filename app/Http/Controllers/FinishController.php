<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\Tourcase;
use App\Tourgroup;
use Illuminate\Http\Request;

class FinishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $res = new Reservation;
        $res->tourcase_id = $request->input("id");
        $res->people = $request->input("people");
        $res->r_time = $request->input("r_time");
        $res->save();

        return view('contact');
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
     * @param  \App\Tourgroup  $tourgroup
     * @return \Illuminate\Http\Response
     */
    public function show(Tourgroup $tourgroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tourgroup  $tourgroup
     * @return \Illuminate\Http\Response
     */
    public function edit(Tourgroup $tourgroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tourgroup  $tourgroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tourgroup $tourgroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tourgroup  $tourgroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tourgroup $tourgroup)
    {
        //
    }
}
