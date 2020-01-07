<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Tourcase;
use Auth;


class AdminPostsController extends Controller
{

    public function index()
    {
        $Tourcase=Tourcase::orderBy('created_at','DESC')->get();
        $data=['tourcase'=>$Tourcase];
        return view('admin.posts.index',$data);
    }
    public function check()
    {
        if (Auth::check())
        {
            if(Auth::user()->type==2) {
                return view('admin.dashboard.index');
            }
            return redirect('/');
        }
        return redirect('/login');
        
    }

    public function check2()
    {
        if (Auth::check())
        {
            return redirect('/about');
        }
        return redirect('/login');
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function edit($id)
    {
        $Tourcase=Tourcase::find($id);
        $data=['tourcase'=>$Tourcase];
        return view('admin.posts.edit',$data);
    }

    public function store(Request $request)
    {
        Tourcase::create($request->all());
        return redirect()->route('admin.posts.index');
    }
    public function update(Request $request,$id)
    {
        $post = Tourcase::find($id);
        $post->update($request->all());
        return redirect()->route('admin.posts.index');
    }
    public function destroy($id)
    {
        Tourcase::destroy($id);
        return redirect()->route('admin.posts.index');
    }
}

