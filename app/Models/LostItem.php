<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LostItem extends Model
{
    protected $fillable = ['name', 'description', 'location', 'user_id', 'status', 'image'];

}
