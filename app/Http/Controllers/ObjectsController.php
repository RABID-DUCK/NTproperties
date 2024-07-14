<?php

namespace App\Http\Controllers;

use App\Models\Directions;
use App\Models\HighWays;
use App\Models\Objects;
use App\Models\Regions;
use Illuminate\Http\Request;

class ObjectsController extends Controller
{
    public function index(){
        $objects = Objects::all();
        $regions = Regions::all();
        $directions = Directions::all();
        $highways = Highways::all();

        return view('pages.objects', compact('objects', 'regions', 'directions', 'highways'));
    }

    public function show(Objects $object){
        return view('pages.object-single', compact('object'));
    }
}
