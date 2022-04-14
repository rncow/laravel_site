<?php

namespace App\Http\Controllers;

use http\Exception\RuntimeException;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function incubation()
    {
        return view('incubation');
    }
}
