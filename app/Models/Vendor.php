<?php

declare(strict_types=1);

namespace App\Models;

final class Vendor extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
} 