<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DescController extends Controller
{
    public function index()
    {
        return view('about.index');
    }

    public function about()
    {
        return view('about.about');
    }

    public function contact()
    {
        return view('about.contact');
    }
}
