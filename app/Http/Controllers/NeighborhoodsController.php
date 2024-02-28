<?php

namespace App\Http\Controllers;

use App\Models\city;
use App\Models\neighborhoods;
use App\Http\Requests\StoreneighborhoodsRequest;
use App\Http\Requests\UpdateneighborhoodsRequest;

class NeighborhoodsController extends Controller
{
    public function index()
    {
        $neighborhoods = neighborhoods::all();
        return response()->json($neighborhoods);
    }
    public function show($id)
    {
        $neighborhoods = neighborhoods::findOrFail($id);
        return response()->json($neighborhoods);
    }
   
}
