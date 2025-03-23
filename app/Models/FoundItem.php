<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FoundItem extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'location', 'image', 'user_id'];

    /**
     * Get the user who reported the found item.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
