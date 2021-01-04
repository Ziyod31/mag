<?php

namespace App\Models;

use App\Models\District;
use App\User;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
	public function districts()
	{
		return $this->hasMany(District::class);
	}

	public function users()
	{
		return $this->belongsToMany(User::class);
	}
}
