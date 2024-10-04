<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    use HasFactory;

    /**
     * enable mass assignment for safe attributes by marking them as "fillable".
     * this disables the default protection of all atributes
     */
    protected $fillable = [
        'message',
        'image'
    ];

    /**
     * Connect a chirp to a user (inverse of has many)
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
