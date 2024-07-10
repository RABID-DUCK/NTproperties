<?php

namespace App\Http\Controllers;

use App\Models\Regions;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $regions = Regions::all();

        return view('main.main', compact('regions'));
    }
}
