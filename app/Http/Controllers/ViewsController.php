<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    // index
    public function index()
    {
        return view('index');
    }
}
