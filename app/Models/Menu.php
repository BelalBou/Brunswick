<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class Menu extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'category_id',
        'image',
        'is_active',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'is_active' => 'boolean',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function allergies(): BelongsToMany
    {
        return $this->belongsToMany(Allergy::class, 'allergy_menus');
    }

    public function extras(): BelongsToMany
    {
        return $this->belongsToMany(Extra::class, 'extra_menus');
    }

    public function orderMenus(): HasMany
    {
        return $this->hasMany(OrderMenu::class);
    }
} 