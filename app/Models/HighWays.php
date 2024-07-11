<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HighWays extends Model
{
    use HasFactory;

    protected $table = 'high_ways';
    protected $fillable = ['name'];
}
