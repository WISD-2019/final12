<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Member;
class AdminPostsController extends Controller
{
    public function index()
    {
        $Member=Member::orderBy('created_at','DESC')->get();
        $data=['member'=>$Member];
        return view('admin.posts.index',$data);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function edit($id)
    {
        $Member=member::find($id);
        $data=['member'=>$Member];
        return view('admin.posts.edit',$data);
    }

    public function store(Request $request)
    {
        Member::create($request->all());
        return redirect()->route('admin.posts.index');
    }
    public function update(Request $request,$id)
    {
        $post = Member::find($id);
        $post->update($request->all());
        return redirect()->route('admin.posts.index');
    }
    public function destroy($id)
    {
        Member::destroy($id);
        return redirect()->route('admin.posts.index');
    }
}

