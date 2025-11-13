<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Magazine extends Model
{

    protected $fillable = [
        'title',
        'slug',
        'image',
    ];
}
