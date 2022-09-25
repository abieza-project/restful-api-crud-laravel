<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Http\Resources\Post as PostResource;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->get();
        return view('dashboard', compact('posts'));
    }
}
