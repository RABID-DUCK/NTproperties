<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObjectsController extends Controller
{
    public function index(){
        return view('pages.objects');
    }
}
