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

    public function allImages($id)
    {
        return Images::query()
            ->where('type_model', Objects::class)
            ->where('model_id', $id)->get();
    }

    public function highway()
    {
        return $this->hasOne(HighWays::class, 'id', 'highway_id');
    }
    public function direction()
    {
        return $this->hasOne(Directions::class, 'id', 'direction_id');
    }
    public function region()
    {
        return $this->hasOne(Regions::class, 'id', 'region_id');
    }
}
