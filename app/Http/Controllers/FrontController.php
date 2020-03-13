<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('frontend.home.home');
    }
    public function about()
    {
        return view('frontend.about.about');
    }
    public function travelDestination()
    {
        return view('frontend.Travel_Destination.travelDestination');
    }
//    public function destinationDetails()
//    {
//        return view('frontend.destinationDetails.destinationDetails');
//    }

    public function contact()
    {
        return view('frontend.contact.contact');
    }
}
