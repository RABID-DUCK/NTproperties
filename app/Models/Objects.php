<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objects extends Model
{
    use HasFactory;
    protected $table = 'objects';

    protected $guarded = false;

    public function getImages($id){
        return Images::query()
            ->where('type_model', Objects::class)
            ->where('model_id',$id)->first();
    }
}
