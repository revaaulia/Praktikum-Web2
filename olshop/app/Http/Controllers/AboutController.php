<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //properti dengan nama index
    public function index() {
        return view('frontend.about.about');
    }
}
