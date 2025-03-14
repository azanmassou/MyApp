<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Artiste extends Model
{
    /** @use HasFactory<\Database\Factories\ArtisteFactory> */
    use HasFactory;

     /**
     * Get the comments for the blog post.
     */
    public function spectacles(): HasMany
    {
        return $this->hasMany(Spectacle::class);
    }

     /**
     * The users that belong to the role.
     */
    public function representations(): BelongsToMany
    {
        return $this->belongsToMany(Representation::class)->withTimestamps();
    }
}
