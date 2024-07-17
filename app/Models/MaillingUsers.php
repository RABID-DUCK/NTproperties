<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaillingUsers extends Model
{
    use HasFactory;
    protected $table = 'mailling_users';
    protected $fillable = ['email'];
}
