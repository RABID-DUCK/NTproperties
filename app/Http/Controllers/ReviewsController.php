<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReviewsController extends Controller
{
    public function index(){
        $reviews = Reviews::query()->latest()->paginate(12);

        return view('pages.reviews', compact('reviews'));
    }

    public function show(Reviews $reviews){
        $humanReadableFileSize = null;

        if($reviews->file !== null){
            $fileSize = Storage::disk('public')->size('files/'.$reviews->file);
            $humanReadableFileSize = $this->humanFilesize($fileSize);
        }

        return view('pages.reviews-single', compact('reviews', 'humanReadableFileSize'));
    }

    protected function humanFilesize($bytes, $decimals = 2)
    {
        $sz = 'BKMGTP';
        $factor = (int)floor((strlen($bytes) - 1) / 3);
        return sprintf("%.{$decimals}f", $bytes / (1024 ** $factor)) . @$sz[$factor] . 'B';
    }
}
