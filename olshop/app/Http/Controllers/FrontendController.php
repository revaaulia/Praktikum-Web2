<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //properti dengan nama index
    public function index_frontend() {
        return view('frontend.dashboard');
    }
}