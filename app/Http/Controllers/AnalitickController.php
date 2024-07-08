<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnalitickController extends Controller
{
    public function index(){
        return view('pages.analitick');
    }
}
