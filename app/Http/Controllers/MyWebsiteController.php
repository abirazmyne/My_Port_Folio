<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyWebsiteController extends Controller
{
    public function index()
    {
        return view('website.home.index');
    }
}
