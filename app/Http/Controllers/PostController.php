<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePost;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        $posts = Post::paginate(5);
        return view('welcome', compact('posts'));
    }
    public function newPost(){
        return view('posts.post');
    }

    public function createPost(CreatePost $request){
        $post = new Post();
        $post->title = $request['title'];
        $post->content = $request['content'];
        $post->user_id = Auth::id();

        $post->save();

        $notification = array(
            'message' => 'Post created successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
