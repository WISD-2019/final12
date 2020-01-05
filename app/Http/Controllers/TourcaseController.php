<?php

namespace App\Http\Controllers;

use App\Tourcase;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TourcaseRepository;

class TourcaseController extends Controller
{
    /**
     * 建立一個新的控制器實例。
     *
     * @return void
     */
    public function __construct(TourcaseRepository $tourcases)
    {
        $this->middleware('auth');
        $this->tourcases = $tourcases;
    }

    public function index(Request $request)

    {
        $tourcase = new Tourcase;
        $tourcase->id = $request->input("id");
        $tourcase->tourname = $request->input("tourname");
        $tourcase->place = $request->input("place");
        $tourcase->price = $request->input("price");
        $tourcase->save();

        return view('tourcase');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'tourname' => 'required|max:255',
        ]);

        $request->user()->tasks()->create([
            'tourname' => $request->name,
        ]);

        return redirect('/tourcases');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  \App\Tourcase  $tourcase
     * @return \Illuminate\Http\Response
     */
    public function show(Tourcase $tourcase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tourcase  $tourcase
     * @return \Illuminate\Http\Response
     */
    public function edit(Tourcase $tourcase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tourcase  $tourcase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tourcase $tourcase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tourcase  $tourcase
     * @return \Illuminate\Http\Response
     */
    /**
     * 移除給定的任務。
     *
     * @param Request $request
     * @param Task $task
     * @return Response
     */
    public function destroy(Request $request, Tourcase $tourcase)
    {
        $this->authorize('destroy', $tourcase);
        $tourcase->delete();

        return redirect('/tourcases');
    }
}
