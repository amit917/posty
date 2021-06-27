<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function _construct(){
        $this->middleware('auth')->only('store');
    }
    public function index(){
        
        $posts = Post::latest()->paginate(1);
        
        return view('posts.index',['posts'=>$posts]);
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
