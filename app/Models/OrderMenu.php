<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

final class OrderMenu extends Model
{
    protected $fillable = [
        'order_id',
        'menu_id',
        'quantity',
        'unit_price',
        'total_price',
        'notes',
    ];

    protected $casts = [
        'quantity' => 'integer',
        'unit_price' => 'decimal:2',
        'total_price' => 'decimal:2',
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }

    public function extras(): BelongsToMany
    {
        return $this->belongsToMany(Extra::class, 'extra_menu_orders')
            ->withPivot('quantity', 'unit_price', 'total_price');
    }
} 