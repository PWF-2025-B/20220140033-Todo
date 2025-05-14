<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Todo;

class Category extends Model
{
    protected $fillable = [
        'title',
        'user_id', 
    ];

    public function todos(): HasMany
    {
        return $this->hasMany(Todo::class);
    }
}
