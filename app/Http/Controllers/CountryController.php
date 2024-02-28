<?php

namespace App\Http\Controllers;

use App\Models\country;
use App\Http\Requests\StorecountryRequest;
use App\Http\Requests\UpdatecountryRequest;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return response()->json($countries);
    }

    public function show($id)
    { 
        $country = country::findOrFail($id);
        return response()->json($country);
    }
    public function citiesInCountry($country_id)
{
    $country = Country::findOrFail($country_id);
    $cities = $country->cities;
    
    return response()->json($cities);
}

}
