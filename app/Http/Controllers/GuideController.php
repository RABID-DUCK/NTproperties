<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuideController extends Controller
{
    public function index(){
        return view('pages.guide');
    }

    public function show(){
        return view('pages.guide-single');
    }
}
