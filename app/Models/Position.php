<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Position extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'poll_id'
    ];

    public function poll(): BelongsToMany
    {
        return $this->belongsToMany(Poll::class);
    }


    public function candidate(): HasMany
    {
        return $this->hasMany(Candidate::class);
    }
}
