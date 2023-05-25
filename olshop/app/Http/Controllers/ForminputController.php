<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForminputController extends Controller
{

    public function index(){
        return view('inputform');
    }

    public function output(Request $request){
        $data = [
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'lokasi' => $request->input('lokasi'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'skill' => $request->input('skill'),
        ];
        return view('inputform', compact('data'));
    }
}
