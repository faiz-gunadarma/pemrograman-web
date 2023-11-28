<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     */
    public function index(Post $post)
    {
        $posts = $post->with('user')->get();

        return view('home', compact('posts'));
    }

    /**
     * Show the application dashboard.
     */
    public function show(Post $post)
    {
        return view('show', compact('post'));
    }
}
