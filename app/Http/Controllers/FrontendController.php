<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');     
    }

    public function blogDetails()
    {
        return view('frontend.blog-details');
    }

    public function storyDetails()
    {
        return view('frontend.story-details');
    }
    
}