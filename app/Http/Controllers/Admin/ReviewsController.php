<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\Reviews;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function index(){
        $reviews = Reviews::query()->get()->sortByDesc('created_at');

        return view('backend.reviews.index', compact('reviews'));
    }

    public function store(NewsRequest $request){
        $data = $request->validated();

        if($data){
            $data['image'] = $request->file('image');
            $imageName = $data['image']->getClientOriginalName();
            $data['image']->storeAs('images', $imageName, 'public');
            $data['image'] = $imageName;

            if($request->file('file')){
                $data['file'] = $request->file('file');
                $fileName = $data['file']->getClientOriginalName();
                $data['file']->storeAs('files', $fileName, 'public');
                $data['file'] = $fileName;
            }

            Reviews::query()->create($data);
        }

        return redirect()->route('admin.reviews');
    }

    public function update(Reviews $reviews, NewsRequest $request){
        $data = $request->validated();

        if($data){
            if($request->file('image')){
                $data['image'] = $request->file('image');
                $imageName = $data['image']->getClientOriginalName();
                $data['image']->storeAs('images', $imageName, 'public');
                $data['image'] = $imageName;
            }else{
                $data['image'] = $reviews->image;
            }

            if($request->file('file')){
                $data['file'] = $request->file('file');
                $fileName = $data['file']->getClientOriginalName();
                $data['file']->storeAs('files', $fileName, 'public');
                $data['file'] = $fileName;
            }

            Reviews::query()->where('id', $reviews->id)->update($data);
        }

        return redirect()->route('admin.reviews');
    }

    public function destroy(Reviews $reviews){
        Reviews::whereId($reviews->id)->delete();

        return response()->noContent(204);
    }

    public function show(Reviews $reviews){

        return view('backend.reviews.show', compact('reviews'));
    }
}
