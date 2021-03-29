<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CommentController extends Controller
{
    public function newComment(Request $request){
        $comment = new Comments;
        $comment->post_id = $request['post'];
        $comment->user_id = Auth::id();
        $comment->content = $request['content'];
        $comment->save();

        $notification = array([
            'Message' => 'Comment Added',
            'alert-type' => 'success'
        ]);
        return redirect()->back()->with($notification);
    }
}
