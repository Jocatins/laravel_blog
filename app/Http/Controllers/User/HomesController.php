<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\user\post;
use Illuminate\Http\Request;

class HomesController extends Controller
{
    public function index()
    {
        $posts = post::where('status', 1)->get();
        return view('user.blog', compact('posts'));
    }
}
