<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class AnalitickController extends Controller
{
    public function index(){
        $news = News::all();

        return view('pages.analitick', compact('news'));
    }

    public function show(){

        return view('pages.analitick-overview');
    }
}
