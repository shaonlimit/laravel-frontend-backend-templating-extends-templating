<?php

namespace App\Http\Controllers;



class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function services()
    {
        return view('frontend.services');
    }
    public function portfolio()
    {
        return view('frontend.portfolio');
    }
    public function team()
    {
        return view('frontend.team');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
}
