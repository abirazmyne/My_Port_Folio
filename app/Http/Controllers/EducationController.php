<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index()
    {
        return view('website.education.index');
    }
}
