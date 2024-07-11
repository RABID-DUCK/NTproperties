<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Directions;
use Illuminate\Http\Request;

class DirectionController extends Controller
{
    public function index(){
        $directions = Directions::all();

        return view('backend.directions.index', compact('directions'));
    }

    public function store(Request $request){
        $data = $request->validate(['name' => 'required|unique:regions'], [
            'name.required' => 'Поле "Название" обязательно для заполнения.',
            'name.unique' => 'Регион с таким названием уже существует.'
        ]);

        if($data){
            Directions::query()->create($data);
        }

        return redirect()->route('admin.directions');
    }

    public function update(Request $request, $id){
        $data = $request->validate(['name' => 'required|unique:regions']);

        if($data){
            Directions::query()->where('id', $id)->update($data);
        }

        return redirect()->route('admin.directions');
    }

    public function destroy($id){
        Directions::whereId($id)->delete();

        return response()->noContent(204);
    }
}
