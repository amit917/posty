<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function _construct(){
        $this->middleware('auth')->only('store');
    }
    public function index(){
        return view('posts.index');
    }
    public function store(Request $request){
       // dd('Posted!');
        $this->validate($request,[
            'body'=>'required|',
            
        ]);
        $request->user()->posts()->create([
            'body'=>$request->body
        ]);
        return back();
    }
}
