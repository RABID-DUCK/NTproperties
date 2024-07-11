<?php

namespace App\Http\Controllers;

use App\Models\Directions;
use App\Models\HighWays;
use App\Models\News;
use App\Models\Regions;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $regions = Regions::all();
        $directions = Directions::all();
        $highways = Highways::all();
        $news = News::all();

        return view('main.main', compact('regions', 'directions', 'highways', 'news'));
    }
}
