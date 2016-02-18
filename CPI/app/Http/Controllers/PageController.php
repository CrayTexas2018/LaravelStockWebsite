<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function showMyStocks()
    {
        if (Auth::check())
        {
            //return view('myStocks');

            $results = DB::select('select distinct(symbol) from stocks where email = ?', [Auth::User()->email]);

            $data = array(
              'results' => $results
            );

            return View::make('myStocks')->with($data);
        }
        return view('login');
    }

    public function showStockSearch(Request $request)
    {
        if (!Auth::check())
        {
            return view('login');
        }

        $symbol = $request['symbol'];
        $symbol = strtoupper($symbol);

        $results = DB::select('select distinct(symbol) from stocks where email = ?', [Auth::User()->email]);

        $hasStock = false;

        foreach ($results as $result)
        {
            if ($result->symbol == $symbol)
            {
                $hasStock = true;
                break;
            }
        }

        $data = [
            'symbol' => $symbol,
            'results' => $results,
            'hasStock' => $hasStock
        ];

        return View::make('SearchStock')->with($data);
    }
}