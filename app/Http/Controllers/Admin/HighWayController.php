<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HighWays;
use Illuminate\Http\Request;

class HighWayController extends Controller
{
    public function index(){
        $highWays = HighWays::all();

        return view('backend.highways.index', compact('highWays'));
    }

    public function store(Request $request){
        $data = $request->validate(['name' => 'required|unique:regions'], [
            'name.required' => 'Поле "Название" обязательно для заполнения.',
            'name.unique' => 'Регион с таким названием уже существует.'
        ]);

        if($data){
            HighWays::query()->create($data);
        }

        return redirect()->route('admin.highways');
    }

    public function update(Request $request, $id){
        $data = $request->validate(['name' => 'required|unique:regions']);

        if($data){
            HighWays::query()->where('id', $id)->update($data);
        }

        return redirect()->route('admin.highways');
    }

    public function destroy($id){
        HighWays::whereId($id)->delete();

        return response()->noContent(204);
    }
}
