<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcomWebsiteController extends Controller
{
    public function index()
    {
        return view('ewebsite.home.index');
    }
}
