<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Objects;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request){
        $searchTerm = $request->input('title');

        $news = News::where('title', 'LIKE', "%$searchTerm%")
            ->orWhere('description', 'LIKE', "%$searchTerm%")
            ->get();

        $objects = Objects::where('title', 'LIKE', "%$searchTerm%")
            ->orWhere('description', 'LIKE', "%$searchTerm%")
            ->get();

        return view('pages.search', compact('news', 'objects', 'searchTerm'));
    }
}
