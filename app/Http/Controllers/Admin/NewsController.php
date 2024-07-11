<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index(){
        $news = News::all();

        return view('backend.news.index', compact('news'));
    }

    public function store(NewsRequest $request){
        $data = $request->validated();

        if($data){
            $data['image'] = $request->file('image');
            $imageName = $data['image']->getClientOriginalName();
            $data['image']->storeAs('images', $imageName, 'public');
            $data['image'] = $imageName;
            News::query()->create($data);
        }

        return redirect()->route('admin.news');
    }

    public function update(Request $request, $id){
        $data = $request->validate(['name' => 'required|unique:regions']);

        if($data){
            News::query()->where('id', $id)->update($data);
        }

        return redirect()->route('admin.news');
    }

    public function destroy($id){
        News::whereId($id)->delete();

        return response()->noContent(204);
    }
}
