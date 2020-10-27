<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
	public function getRegion(Request $request)
	{
		$regions = DB::table("regions")
		->where("country_id", $request->country_id);
		return response()->json($regions);
	}
}