<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FeedBack;
use Illuminate\Http\Request;

class FeedBackController extends Controller
{
    public function index(){
        $feedbacks = Feedback::all();

        return view('backend.feedbacks.index', compact('feedbacks'));
    }

    public function show(FeedBack $feed_backs){
        return view('backend.feedbacks.show', compact('feed_backs'));
    }
}
