<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Locations;
use App\Batchs;
use App\Items;
use App\Transactions;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function locations()
    {

        $locations = Locations::all();
        return view('locations')->with(
            [
                'locations' => $locations
            ]
        );
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function batchs()
    {
        $batchs = Batchs::all();
        return view('batchs')->with(
            [
                'batchs' => $batchs
            ]
        );
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function items()
    {
        $items = Items::all();
        return view('items')->with(
            [
                'items' => $items
            ]
        );
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function transactions()
    {
        $transactions = Transactions::all();
        return view('transactions')->with(
            [
                'transactions' => $transactions
            ]
        );
    }

    
}
