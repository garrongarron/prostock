<?php

namespace App\Http\Controllers;

use App\Batchs;
use Illuminate\Http\Request;

class BatchsController extends Controller
{
    public function index() {
        return Batchs::all();
    }
    
    public function show(Batchs $batch) {
        return $batch;
    }
    
    public function store(Request $request) {
        $batch = Batchs::create($request->all());
        return response()->json($batch, 201);
    }
    
    public function update(Request $request, Batchs $batch) {
        $batch->update($request->all());
        return response()->json($batch, 200);
    }
    
    public function destroy(Batchs $batch) {
        $batch->delete();
        return response()->json(null, 204);
    }
}
