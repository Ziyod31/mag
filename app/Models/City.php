<?php

namespace App\Models;

use App\Models\Region;
use App\User;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function regions()
    {
    	return $this->hasMany(Region::class);
    }

    public function users()
    {
    	return $this->belongsToMany(User::class);
    }
}
