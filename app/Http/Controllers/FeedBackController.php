<?php

namespace App\Http\Controllers;

use App\Models\FeedBack;
use Illuminate\Http\Request;

class FeedBackController extends Controller
{
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
        ], [
            'name.required' => 'Поле имени не может быть пустым',
            'title.required' => 'Поле темы письма не может быть пустым',
            'description.required' => 'Поле описания письма не может быть пустым',
        ]);

        if($data){
            FeedBack::create($data);

            return view('pages.contacts');
        }else{
            return redirect()->back();
        }
    }
}
