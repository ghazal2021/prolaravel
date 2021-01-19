<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use Symfony\Component\Console\Input\Input;

class PostController extends Controller
{
    public function show($slug)
    {

     $post =Post::with(['user','category','photo',
         'comments'=>function($q){
        $q->where('status',0)->where('parent_id',null);
     },
     'comments.replies'=>function($q){
         $q->where('status',0);
     }])->where('slug', $slug)->where('status',0)->first();
     $categories=Category::all();
     return view('frontend.posts.show',compact(['post','categories']));

   }

    public function searchTitle(Request $request)
    {

        $query=$request->get('title');
    $posts=Post::with('user','photo','category')->where('title','like',"%".$query."%")
        ->orWhere('description', 'like', "%{$query}%")->where('status',0)->orderBy('created_at','desc')->paginate(3);
    $categories = Category::all();
return view('frontend.posts.search',compact(['posts','categories','query']));
   }
}
