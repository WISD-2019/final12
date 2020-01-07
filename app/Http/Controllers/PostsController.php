<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index(Request $request)
    {
        $a=$request->input("id");

        return view('post',['a'=>$a]);
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
