<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Poll extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'is_active'
    ];

    public function position(): HasMany
    {
        return $this->hasMany(Position::class);
    }
}
