<?php

declare(strict_types=1);

namespace App\Models;

final class Setting extends Model
{
    protected $fillable = [
        'key',
        'value',
        'description',
        'group',
    ];

    protected $casts = [
        'value' => 'json',
    ];
} 