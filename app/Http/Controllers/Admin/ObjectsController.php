<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ObjectRequest;
use App\Models\Directions;
use App\Models\HighWays;
use App\Models\Images;
use App\Models\Objects;
use App\Models\Regions;
use Illuminate\Http\Request;

class ObjectsController extends Controller
{
    public function index(){
        $objects = Objects::all();
        $directions = Directions::all();
        $highways = Highways::all();
        $regions = Regions::all();

        return view('backend.objects.index', compact('objects', 'directions', 'highways', 'regions'));
    }

    public function store(ObjectRequest $request){
        $data = $request->validated();
        if($request->file('images')){
            $images = $request->file('images');
            unset($data['images']);

            $object = Objects::create($data);

            foreach($images as $image){
                $imageName = $image->getClientOriginalName();
                $image->storeAs('images', $imageName, 'public');

                Images::create([
                    'name' => $imageName,
                    'type_model' => Objects::class,
                    'model_id' => $object['id'],
                ]);
            }

        }

        return redirect()->route('admin.objects');
    }

    public function show(Objects $object){
        $images = Images::query()->where('model_id', $object['id'])->where('type_model', Objects::class)->get();
        $directions = Directions::all();
        $highways = Highways::all();
        $regions = Regions::all();

        return view('backend.objects.show', compact('object', 'images', 'directions', 'highways', 'regions'));
    }

    public function update(Objects $object, ObjectRequest $request){
        $data = $request->validated();

        if($request->file('images')){
            $images = $request->file('images');
            unset($data['images']);

            $object = Objects::query()->where('id', $object['id'])->first();
            $object->update($data);
            $object->save();

            foreach($images as $image){
                $imageName = $image->getClientOriginalName();
                $image->storeAs('images', $imageName, 'public');

                Images::create([
                    'name' => $imageName,
                    'type_model' => Objects::class,
                    'model_id' => $object['id'],
                ]);
            }

        }

        return redirect()->route('admin.objects');
    }

    public function destroy(Objects $object){
        Objects::whereId($object->id)->delete();

        return response()->noContent(204);
    }
}
