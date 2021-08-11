<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\PostsController;
use Illuminate\Support\Facades\Route;

//User Routes
Route::group(['namespace' => 'User'], function () {

    Route::get('/', [HomeController::class, 'index']);
    Route::get('/post', [PostsController::class, 'index'])->name('post');
});


//Admin Routes

Route::group(['namespace' => 'Admin'], function () {
    Route::resource('admin/post', 'PostController');
    Route::resource('admin/tag', 'TagController');
    Route::resource('admin/category', ' CategoryController');
});


// Route::get('/admin/home', function () {
//     return view('admin.home');
// });
