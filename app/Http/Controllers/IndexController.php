<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
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
        // return top 9 categories
        $categories = Category::orderBy('created_at', 'desc')->take(9)->get();
        
        return view('pages.index', compact('posts', 'total_posts'));
        
    }

    // show login page
    public function login()
    {
        return view('auth.login');
    }

    // show register page
    public function register()
    {
        return view('auth.register');
    }
}
