<?php

declare(strict_types=1);

namespace App\Models;

final class Dictionary extends Model
{
    protected $fillable = [
        'key',
        'value',
        'locale',
        'group',
    ];
} 