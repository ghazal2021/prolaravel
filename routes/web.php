<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\adminUsersController;
use App\Http\Controllers\admin\adminCategoryController;
use App\Http\Controllers\admin\adminPostsController;
use App\Http\Controllers\admin\adminPhotosController;
use App\Http\Controllers\admin\adminDashboardController;
use App\Http\Controllers\frontend\MainController;
use App\Http\Controllers\frontend\PostController;
use App\Http\Controllers\admin\adminCommentController;
use App\Http\Controllers\frontend\CommentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::resource('admin/users',adminUsersController::class);

Route::resource('admin/category' ,adminCategoryController::class);

Route::resource('admin/posts', adminPostsController::class);

Route::resource('admin/photos',adminPhotosController::class);

//Route::get('admin/comments/show/{id}',[adminCommentController::class,'show'])->name('comments.show');
Route::get('admin/actions/{id}',[adminCommentController::class,'actions'])->name('comments.actions');

Route::resource('admin/comments',adminCommentController::class);

Route::get('admin/dashboard',[adminDashboardController::class,'index'])->name('dashboard.index');


Route::get('/',[MainController::class,'index']);
Route::get('posts/{slug}',[PostController::class,'show'])->name('frontend.posts.show');
Route::get('/search',[PostController::class,'searchTitle'])->name('search');

Route::post('comments/{postId}',[commentController::class,'store'])->name('frontend.comments.store');
Route::post('comments',[commentController::class,'reply'])->name('comments');
