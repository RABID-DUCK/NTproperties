<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilterRequest;
use App\Models\Directions;
use App\Models\HighWays;
use App\Models\News;
use App\Models\Objects;
use App\Models\Regions;
use App\Models\Reviews;
use Illuminate\Http\Request;

class ObjectsController extends Controller
{
    public function index(){
        $objects = Objects::query()->latest();

        if (app()->currentLocale() == 'EN') {
            $objects = $objects->where('eng_title', '<>', '')->latest();
        }else{
            $objects = $objects->where('eng_title', null)->latest();
        }

        $objects = $objects->paginate(12);
        $regions = Regions::all();
        $directions = Directions::all();
        $highways = Highways::all();
        $news = News::query()->latest()->take(3)->get();
        $reviews = Reviews::query()->latest()->take(3)->get();

        return view('pages.objects', compact('objects', 'regions', 'directions', 'highways', 'news', 'reviews'));
    }

    public function show(Objects $object, $id){
        $price = $object->price;
        if($object->price_type == 2){
            $object->price = $object->price * $object->all_square;
        }else{
            $object->price = ($object->price * $object->all_square) / 12;
        }
        return view('pages.object-single', compact('object', 'id', 'price'));
    }

    public function list(FilterRequest $request){
        $data = $request->validated();
        $regions = Regions::all();
        $directions = Directions::all();
        $highways = Highways::all();
        $news = News::query()->get()->sortByDesc('created_at');
        $reviews = Reviews::query()->get()->sortByDesc('created_at');
        $price_type2 = 1;

        $objects = Objects::query()
            ->when($data['price_type2'], function ($query) use ($data, &$price_type2) {
                if($data['price_type2'] == 'metr'){
                    $price_type2 = 1;
                }else{
                    $price_type2 = 2;
                }
            })
            ->when($data['price_type'], function ($query, $price_type) {
                return $query->where('price_type', $price_type);
            })
            ->when($data['type_room'], function ($query, $type_room) {
                return $query->where('type_room', $type_room);
            })
            ->when($data['price_min'], function ($query, $price_min) {
                return $query->where('price', '>=', $price_min);
            })
            ->when($data['price_max'], function ($query, $price_max) {
                return $query->where('price', '<=', $price_max);
            })
            ->when($data['square_min'], function ($query, $square_min) {
                return $query->where('free_square', '>=', $square_min);
            })
            ->when($data['square_max'], function ($query, $square_max) {
                return $query->where('free_square', '<=', $square_max);
            })
            ->when($data['region'], function ($query, $region) {
                return $query->where('region_id', $region);
            })
            ->when($data['direction'], function ($query, $direction) {
                return $query->where('direction_id', $direction);
            })
            ->when($data['highway'], function ($query, $highway) {
                return $query->where('highway_id', $highway);
            })
            ->when($data['distance_min'], function ($query, $distance_min) {
                return $query->where('distance_mkad', '>=', $distance_min);
            })
            ->when($data['distance_max'], function ($query, $distance_max) {
                return $query->where('distance_mkad', '<=', $distance_max);
            })
            ->when($data['availability'], function ($query, $distance_max) use ($data) {
                if($data['availability'] == 'on'){
                    return $query->where('availability', 1);
                }else{
                    return $query->where('availability', 0);
                }
            })
            ->when(app()->currentLocale() == 'EN', function ($query) {
                return $query->whereNotNull('eng_title');
            })
            ->when(app()->currentLocale() == 'RU', function ($query) {
                return $query->whereNotNull('title');
            })
            ->latest()->paginate(12);

        return view('pages.objects', compact('objects', 'regions', 'directions', 'highways', 'news', 'reviews', 'request', 'price_type2'));
    }
}
