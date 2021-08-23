<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\user\post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(post $slug)
    {

        return view('user.post', compact('slug'));
    }
}
