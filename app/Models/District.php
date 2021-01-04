<?php

namespace App\Models;

use App\Models\City;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public function cities()
    {
    	return $this->belongsTo(City::class);
    }
}
