<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        if ($request->has("query")) {
            $query = sanitizeInput($request->get('query'));
            $posts = Post::where("title", "like", "%" . $query . "%")->get();
            return view('pages.search')->with(compact('posts', 'query'));
        } else {
            return redirect()->back();
        }
    }
}
