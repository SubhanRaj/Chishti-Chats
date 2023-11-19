<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //show index page
    public function index()
    {    
        // return top 5 recent posts
        $posts = Post::orderBy('created_at', 'desc')->take(5)->get();
        // count of total posts
        $total_posts = Post::count();
        return view('pages.index', compact('posts', 'total_posts'));
        
    }
}
