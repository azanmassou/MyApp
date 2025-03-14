<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Spectacle extends Model
{
    /** @use HasFactory<\Database\Factories\SpectacleFactory> */
    use HasFactory;

     /**
     * Get the comments for the blog post.
     */
    public function artistes(): BelongsTo
    {
        return $this->belongsTo(Artiste::class);
    }

      /**
     * The roles that belong to the user.
     */
    public function representations(): BelongsToMany
    {
        return $this->belongsToMany(Representation::class)->withTimestamps();
    }

}
