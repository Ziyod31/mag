<?php

namespace App\Http\Controllers;

use App\Models\City;
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

	public function index()
	{
		$cities = City::all();
		return view('admin.cities.cities', compact('cities'));
	}

	public function create()
	{
		return view('admin.cities.create');
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'name' => 'required|min:5|max:20',
		]);

		$city = new City;
		$city->name = $request->input('name');
		$city->save();

		return redirect()->route('cities.index')->with('success', 'New City is successfully added !');
	}

	public function edit(City $city)
	{
		return view('admin.cities.create', compact('city'));
	}

	public function update(Request $request, City $city)
	{
		$this->validate($request, [
			'name' => 'required|min:5|max:20',
		]);

		$city->name = $request->input('name');
		$city->update();

		return redirect()->route('cities.index')->with('success', 'The City is successfully updated !');
	}

	public function destroy(City $city)
    {
        $city->delete();
        return redirect()->route('cities.index')->with('success', 'The City is deleted !');

    }
}