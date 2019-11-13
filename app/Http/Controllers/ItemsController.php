<?php

namespace App\Http\Controllers;

use App\Items;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function index() {
        return Items::all();
    }
    
    public function show(Items $item) {
        return $item;
    }
    
    public function store(Request $request) {
        $item = Items::create($request->all());
        return response()->json($item, 201);
    }
    
    public function update(Request $request, Items $item) {
        $item->update($request->all());
        return response()->json($item, 200);
    }
    
    public function destroy(Items $item) {
        $item->delete();
        return response()->json(null, 204);
    }
}
