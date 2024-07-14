<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function index(){
        return view('pages.reviews');
    }

    public function show(){
        return view('pages.reviews-single');
    }
}
