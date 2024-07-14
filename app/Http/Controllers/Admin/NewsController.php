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

    public function update(News $news, NewsRequest $request){
        $data = $request->validated();

        if($data){
            if($request->file('image')){
                $data['image'] = $request->file('image');
                $imageName = $data['image']->getClientOriginalName();
                $data['image']->storeAs('images', $imageName, 'public');
                $data['image'] = $imageName;
            }else{
                $data['image'] = $news->image;
            }

            News::query()->where('id', $news->id)->update($data);
        }

        return redirect()->route('admin.news');
    }

    public function destroy(News $news){
        News::whereId($news->id)->delete();

        return response()->noContent(204);
    }

    public function show(News $news){

        return view('backend.news.show', compact('news'));
    }
}
