<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Piece extends Model
{
    /** @use HasFactory<\Database\Factories\PieceFactory> */
    use HasFactory;

    /**
     * The users that belong to the role.
     */
    public function salles(): BelongsToMany
    {
        return $this->belongsToMany(Salle::class)->withTimestamps();
    }
}
