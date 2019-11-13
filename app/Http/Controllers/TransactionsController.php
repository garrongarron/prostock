<?php

namespace App\Http\Controllers;

use App\Transactions;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    public function index() {
        return Transactions::all();
    }
    
    public function show(Transaction $transaction) {
        return $transaction;
    }
    
    public function store(Request $request) {
        $transaction = Transactions::create($request->all());
        return response()->json($transaction, 201);
    }
    
    public function update(Request $request, Transaction $transaction) {
        $transaction->update($request->all());
        return response()->json($transaction, 200);
    }
    
    public function destroy(Transaction $transaction) {
        $transaction->delete();
        return response()->json(null, 204);
    }
}
