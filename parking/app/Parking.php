<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    protected $fillable = ['name', 'access_key','is_active','distance'];
    protected $hidden = ['created_at', 'updated_at' ];
}
