<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
 use Illuminate\Support\Facades\Session;

class commentController extends Controller
{
    public function store(Request $request, $postId)
    {
        $post = Post::findOrFail($postId);
        if ($post) {
            $comment = new Comment();
            $comment->description = $request->description;
            $comment->post_id = $post->id;
            $comment->user_id = Auth::id();

            $comment->status = 1;
            $comment->save();
        }
        Session::flash('add-cm', 'comment add shod ');
         return back();

    }

    public function reply(Request  $request)
    {

     $postId=$request->input('post_id');
     $parentId=$request->input('parent_id');
     $post=Post::findOrFail($postId);
        if ($post) {
            $comment = new Comment();
            $comment->description = $request->description;
            $comment->post_id = $post->id;
            $comment->user_id = Auth::id();
            $comment->parent_id= $parentId;
            $comment->status = 1;
            $comment->save();
        }
        Session::flash('add-cm', 'comment add shod ');
        return back();
    }
}
