<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObjectSingleController extends Controller
{
    public function index(){
        return view('pages.object-single');
    }
}
