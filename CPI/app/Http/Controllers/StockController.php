<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class StockController extends Controller
{
    public function addStock(Request $request)
    {
        $symbol = $request['symbol'];
        $hasStock = true;

        DB::insert('insert into stocks (email, symbol, active) values (?, ?, ?)', [Auth::user()->email, $symbol, 1]);

        $data = array(
            'symbol' => $symbol,
            'hasStock' => $hasStock
        );

        return View::make('SearchStock')->with($data);
    }
}