<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Reviews;
use Illuminate\Http\Request;

class AnalitickController extends Controller
{
    public function index(){
        $news = News::all();
        $reviews = Reviews::all();

        return view('pages.analitick', compact('news', 'reviews'));
    }

    public function show(Reviews $reviews){
        return view('pages.analitick-overview', compact('reviews'));
    }
}
