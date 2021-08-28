<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('front.index');
    }
    public function pricing(){
        return view('pages.pricing');
    }
    public function about(){
        return view('pages.about');
    }
    public function contact(){
        return view('pages.contact');
    }
}
