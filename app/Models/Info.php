<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'tools' => 'array',
        ];
    }

    protected $fillable = [
        'email',
        'linkedin_url',
        'instagram_url',
        'github_url',
        'tools',
        'picture_url',
    ];

    public static function instance(): self
    {
        return self::first() ?? self::create([]);
    }
}
