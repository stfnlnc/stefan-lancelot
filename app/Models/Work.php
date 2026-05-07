<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'tags' => 'array',
        ];
    }

    protected $fillable = [
        'title',
        'slug',
        'image',
        'tags',
        'url'
    ];
}
