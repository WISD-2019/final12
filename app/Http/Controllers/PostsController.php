<?php

namespace App\Http\Controllers;

use App\Schedule;
use App\Tourcase;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index(Request $request)
    {
        $delroom = Tourcase::where('id', $request->input('id'))->first();
        $a_id=$delroom->id;
        $a_tourname=$delroom->tourname;
        $a_place=$delroom->place;
        $a_price=$delroom->price;

        return view('tour',['a_id'=>$a_id,'a_tourname'=>$a_tourname,'a_place'=>$a_place,'a_price'=>$a_price]);
    }

    public function show()
    {
        //
        return view('post');
    }

    public function about()
    {
        //
        return view('about');
    }

    public function contact()
    {
        //
        return view('contact');
    }
}
