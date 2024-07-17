<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Reviews;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function index(){
        $reviews = Reviews::query()->latest()->paginate(12);

        return view('pages.reviews', compact('reviews'));
    }

    public function show(Reviews $reviews){

        return view('pages.reviews-single', compact('reviews'));
    }
}
