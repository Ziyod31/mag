<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
	public function getDistrict(Request $request)
	{
		$data['districts'] = District::where("city_id", $request->city_id)
		->get(["name","id"]);
		return response()->json($data);
	}
}