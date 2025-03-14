<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Salle extends Model
{
    /** @use HasFactory<\Database\Factories\SalleFactory> */
    use HasFactory;

     /**
     * Get the comments for the blog post.
     */
    public function representations(): HasMany
    {
        return $this->hasMany(Representation::class);
    }

     /**
     * The roles that belong to the user.
     */
    public function pieces(): BelongsToMany
    {
        return $this->belongsToMany(Piece::class)->withTimestamps();
    }
}
