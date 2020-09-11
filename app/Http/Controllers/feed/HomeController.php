<?php

namespace App\Http\Controllers\feed;

use App\Models\feed\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
     

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts=Post::getorder()->get();
        return view('index.index',compact('posts'));
    }
    public function feedIndex()
    {
        $posts=Post::getorder()->get();
        return view('feed.index',compact('posts'));
    }
    
}
