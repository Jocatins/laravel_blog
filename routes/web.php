<?php

use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('user.blog');
});
Route::get('/post', function () {
    return view('user.post');
})->name('post');
Route::get('/admin/home', function () {
    return view('admin.home');
});


// Route::get('/admin/tag', function () {
//     return view('admin.tag.tag');
// });
// Route::get('/admin/category', function () {
//     return view('admin.category.category');
// });
Route::resource('admin/post', 'App\Http\Controllers\Admin\PostController');
