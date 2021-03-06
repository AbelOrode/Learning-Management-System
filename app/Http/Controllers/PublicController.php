<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('welcome', compact('posts'));
    }


    public function singlePost(Post $post){
        return view('singlePost', compact('post'));
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
}
