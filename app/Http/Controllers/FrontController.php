<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('frontend.home.home');
    }

    public function about(){
        return view('frontend.about.about');
    }
}
