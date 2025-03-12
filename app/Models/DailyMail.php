<?php

declare(strict_types=1);

namespace App\Models;

final class DailyMail extends Model
{
    protected $fillable = [
        'subject',
        'content',
        'sent_at',
        'status',
        'error_message',
    ];

    protected $casts = [
        'sent_at' => 'datetime',
    ];
} 