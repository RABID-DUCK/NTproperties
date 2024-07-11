<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsSingleController extends Controller
{
    public function show(News $news){
        return view('pages.news-single', compact('news'));
    }
}
