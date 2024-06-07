<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Poll extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'is_active', 'end_time',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'end_time' => 'datetime',
    ];

    public function position(): HasMany
    {
        return $this->hasMany(Position::class);
    }
}
