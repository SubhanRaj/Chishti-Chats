<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\OrderModel;
use App\Models\ProductVariationModel;

class AdminIndexController extends Controller
{
    public function index()
    {

        return view('admin.index');
    }
    public function logout()
    {
        session()->forget('abcdefgh');
        return redirect()->route('login-view')->with('true', 'You are now successfully signed out.');
    }
}
