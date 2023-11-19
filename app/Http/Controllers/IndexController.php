<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //show index page
    public function index()
    {
        return view('pages.index');
    }
}
