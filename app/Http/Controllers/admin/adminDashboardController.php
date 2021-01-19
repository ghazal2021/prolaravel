<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Photo;


class adminDashboardController extends Controller
{
    public function index( )
    {
        $postsCount=Post::count();
        $usersCount= User::count();
        $photosCount= Photo::count();
        $categoriesCount= Category::count();
$posts=Post::with('category')->orderBy('created_at','desc')->limit(5)->get();
$users=User::with('photo')->orderBy('created_at','desc')->limit(5)->get();

return view('admin.dashboard.index',compact(['postsCount','usersCount','photosCount','categoriesCount','posts','users']));
   }
}
