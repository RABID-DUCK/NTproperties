<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Regions;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function index(){
        $regions = Regions::all();

        return view('backend.cities.index', compact('regions'));
    }

    public function store(Request $request){
        $data = $request->validate(['name' => 'required', 'eng_name' => 'nullable|string'], [
            'name.required' => 'Поле "Название" обязательно для заполнения.',
            'name.unique' => 'Регион с таким названием уже существует.'
        ]);

        if($data){
            Regions::query()->create($data);
        }

        return redirect()->route('admin.regions');
    }

    public function update(Request $request, $id){
        $data = $request->validate(['name' => 'required', 'eng_name' => 'nullable|string']);

        if($data){
            Regions::query()->where('id', $id)->update($data);
        }

        return redirect()->route('admin.regions');
    }

    public function destroy($id){
        Regions::whereId($id)->delete();

        return response()->noContent(204);
    }
}
