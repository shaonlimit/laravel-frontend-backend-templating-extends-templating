<?php

namespace App\Http\Controllers;



class BackendController extends Controller
{
    public function dashboard()
    {
        return view('backend.dashboard');
    }
    public function create()
    {
        return view('backend.create-post');
    }
    public function view()
    {
        return view('backend.view-post');
    }
}
