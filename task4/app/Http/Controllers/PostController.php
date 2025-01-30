<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    //
    public function index(){
        $posts=Post::with('user')->paginate();
        return view('front.posts.index',compact('posts')); 
    }
    public function show(Post $post){
            return view('front.posts.show',compact('post'));
        //return view('front.posts.show',compact('post'));
    }
}
