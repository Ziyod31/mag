<?php

namespace App\Models;

use App\Models\City;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public function city()
    {
    	return $this->belongsTo(City::class);
    }

    public function users()
    {
    	return $this->belongsToMany(User::class);
    }
}
