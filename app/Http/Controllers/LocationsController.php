<?php

namespace App\Http\Controllers;

use App\Locations;
use Illuminate\Http\Request;

class LocationsController extends Controller
{
    public function index() {
        return Locations::all();
    }
    
    public function show(Locations $location) {
        return $location;
    }
    
    public function store(Request $request) {
        $location = Locations::create($request->all());
        return response()->json($location, 201);
    }
    
    public function update(Request $request, Locations $location) {
        $location->update($request->all());
        return response()->json($location, 200);
    }
    
    public function destroy(Locations $location) {
        $location->delete();
        return response()->json(null, 204);
    }
}
