<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
{
    public function delete(Images $image){
        $imageRecord = Images::find($image->id);
        if ($imageRecord) {
            Storage::disk('public')->delete('/images/' . $imageRecord->name);
            $imageRecord->delete();
        }
    }
}
