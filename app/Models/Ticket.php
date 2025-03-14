<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ticket extends Model
{
    /** @use HasFactory<\Database\Factories\TicketFactory> */
    use HasFactory;

     /**
     * The roles that belong to the user.
     */
    public function representations(): BelongsToMany
    {
        return $this->belongsToMany(Representation::class)->withTimestamps();
    }
}
