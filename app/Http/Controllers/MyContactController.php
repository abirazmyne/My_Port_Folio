<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyContactController extends Controller
{
    public function index()
    {
        return view('website.mycontact.index');
    }
}
