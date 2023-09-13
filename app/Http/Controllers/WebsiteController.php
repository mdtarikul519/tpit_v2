<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class WebsiteController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function courses()
    {
        return view('frontend.pages.courses');
    }

    public function gallery()
    {
        return view('frontend.pages.gallery');
    }

    public function blog()
    {
        return view('frontend.pages.blog');
    }
    public function it_solution_services()
    {
        return view('frontend.pages.it_solution_services');
    }


}
