<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model as BaseModel;

abstract class Model extends BaseModel
{
    protected $guarded = [];
    
    public function getTable(): string
    {
        return $this->table ?? strtolower(class_basename($this));
    }
} 