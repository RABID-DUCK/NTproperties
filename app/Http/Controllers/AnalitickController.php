<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Reviews;
use Illuminate\Http\Request;

class AnalitickController extends Controller
{
    public function index(){
        $news = News::query()->get()->sortByDesc('created_at');
        $reviews = Reviews::query()->get()->sortByDesc('created_at');

        return view('pages.analitick', compact('news', 'reviews'));
    }

    public function show(Reviews $reviews){
        return view('pages.analitick-overview', compact('reviews'));
    }
}
