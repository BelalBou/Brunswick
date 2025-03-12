<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

final class Extra extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'is_active',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'is_active' => 'boolean',
    ];

    public function menus(): BelongsToMany
    {
        return $this->belongsToMany(Menu::class, 'extra_menus');
    }
} 