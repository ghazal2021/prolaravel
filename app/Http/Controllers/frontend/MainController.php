<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {

        $posts=Post::with('user','photo','category')->where('status',0)->orderBy('created_at','desc')->paginate(3);
        $categories=Category::all();
        return view('frontend.main.index',compact(['posts' ,'categories']));
  }
}
