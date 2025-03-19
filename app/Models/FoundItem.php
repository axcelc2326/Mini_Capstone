<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoundItem extends Model
{
    protected $fillable = ['name', 'description', 'location', 'user_id', 'status', 'image'];
}
