<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsSingleController extends Controller
{
    public function index()
    {
        $news = News::query()->paginate(10);

        return view('pages.news', compact('news'));
    }

    public function show(News $news){
        return view('pages.news-single', compact('news'));
    }
}
