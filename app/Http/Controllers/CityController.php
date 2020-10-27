<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
	public function getRegion(Request $request)
	{
		$data['regions'] = Region::where("city_id", $request->city_id)
		->get(["name","id"]);
		return response()->json($data);
	}
}