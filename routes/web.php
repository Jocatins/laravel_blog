<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\User\HomesController;
use App\Http\Controllers\User\PostsController;
use Illuminate\Support\Facades\Route;

//User Routes
Route::group(['namespace' => 'User'], function () {

    Route::get('/', [HomesController::class, 'index']);
    Route::get('post/{slug} ',  [PostsController::class, 'index'])->name('post');
});

//Admin Routes
Route::group(['namespace' => 'Admin'], function () {
    Route::get('admin/home', [HomeController::class, 'index'])->name('admin.home');
    //User Routes
    Route::resource('admin/user', 'UserController');
    //Post Routes
    Route::resource('admin/post', 'PostController');
    //Tag Routes
    Route::resource('admin/tag', 'TagController');
    //Category Routes
    Route::resource('admin/category', 'CategoryController');
});
