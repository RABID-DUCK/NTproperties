<?php

namespace App\Http\Controllers;

use App\Models\Objects;
use Illuminate\Http\Request;

class ObjectsController extends Controller
{
    public function index(){
        $objects = Objects::all();

        return view('pages.objects', compact('objects'));
    }

    public function show(Objects $object){
        return view('pages.object-single', compact('object'));
    }
}
