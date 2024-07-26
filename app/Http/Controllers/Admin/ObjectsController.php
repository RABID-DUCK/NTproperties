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
        $objects = Objects::query()->get()->sortByDesc('created_at');
        $directions = Directions::all();
        $highways = Highways::all();
        $regions = Regions::all();

        return view('backend.objects.index', compact('objects', 'directions', 'highways', 'regions'));
    }

    public function store(ObjectRequest $request){
        $data = $request->validated();
        $images = null;

        if($data['date'] !== null){
            $data['created_at'] = $data['date'];
        }else{
            $data['created_at'] = now();
        }

        if(isset($data['availability']) && $data['availability'] == 'on'){
            $data['availability'] = 1;
        }else{
            $data['availability'] = 0;
        }

        if($request->file('images')){
            $images = $request->file('images');
        }
        unset($data['date'], $data['images']);

        $object = Objects::create($data);
        $id = $object->id;

        if($request->file('images')){
            foreach($images as $image){
                $imageName = $image->getClientOriginalName();
                $image->storeAs('images', $imageName, 'public');

                Images::create([
                    'name' => $imageName,
                    'type_model' => Objects::class,
                    'model_id' => $id,
                ]);
            }
        }

        return redirect()->route('admin.objects');
    }

    public function show(Objects $object){
        $images = Images::query()->where('model_id', $object['id'])->where('type_model', Objects::class)->get()->sortByDesc('id');
        $directions = Directions::all();
        $highways = Highways::all();
        $regions = Regions::all();

        return view('backend.objects.show', compact('object', 'images', 'directions', 'highways', 'regions'));
    }

    public function update(Objects $object, ObjectRequest $request){
        $data = $request->validated();

        $images = $request->file('images');
        unset($data['images']);

        if($data['date'] !== null){
            $data['created_at'] = $data['date'];
        }else{
            $data['created_at'] = now();
        }
        unset($data['date']);

        if(isset($data['availability']) && $data['availability'] == 'on'){
            $data['availability'] = 1;
        }else{
            $data['availability'] = 0;
        }

        $object = Objects::query()->where('id', $object['id'])->first();
        $object->update($data);
        $object->save();

        if($request->file('images')){
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
