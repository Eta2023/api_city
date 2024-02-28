<?php

namespace App\Http\Controllers;

use App\Models\city;
use App\Http\Requests\StorecityRequest;
use App\Http\Requests\UpdatecityRequest;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();
        return response()->json($cities);
    }
    public function show($id)
    {
        $city = City::findOrFail($id);
        return response()->json($city);
    }
    public function neighborhoodsInCity($city_id)
    {
        $city = city::findOrFail($city_id);
        $neighborhoods = $city->neighborhood;
        
        return response()->json($neighborhoods);
    }
}
