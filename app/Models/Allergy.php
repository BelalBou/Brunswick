<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

final class Allergy extends Model
{
    protected $fillable = [
        'name',
        'description',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function menus(): BelongsToMany
    {
        return $this->belongsToMany(Menu::class, 'allergy_menus');
    }
} 