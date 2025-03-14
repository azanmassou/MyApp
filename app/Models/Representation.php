<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Representation extends Model
{
    /** @use HasFactory<\Database\Factories\RepresentationFactory> */
    use HasFactory;

     /**
     * Get the post that owns the comment.
     */
    public function salles(): BelongsTo
    {
        return $this->belongsTo(Salle::class);
    }

     /**
     * The roles that belong to the user.
     */
    public function artistes(): BelongsToMany
    {
        return $this->belongsToMany(Artiste::class)->withTimestamps();
    }

     /**
     * The users that belong to the role.
     */
    public function spectacles(): BelongsToMany
    {
        return $this->belongsToMany(Spectacle::class)->withTimestamps();
    }

     /**
     * The users that belong to the role.
     */
    public function tickets(): BelongsToMany
    {
        return $this->belongsToMany(Ticket::class)->withTimestamps();
    }
}
