<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    public function createUser(Request $request)
    {
        $email = $request['email'];
        $name = $request['name'];
        $password = bcrypt($request['password']);

        $this->validate($request, [
            'email' => 'required|unique:users|max:255|min:5|email'
        ]);

        $user = new User();
        $user->email = $email;
        $user->name = $name;
        $user->password = $password;

        $user->save();

        return redirect()->back();
    }

    public function logUserIn(Request $request)
    {
        $email = $request['email'];
        $password = $request['password'];

        if (Auth::attempt(['email' => $email, 'password' => $password]))
        {
            $hasStock = false;
            $results = DB::select('select distinct(symbol) from stocks where email = ?', [Auth::User()->email]);

            $data = array(
                'hasStock' => $hasStock,
                'results' => $results
            );

            return View::make('myStocks')->with($data);
        }


        return view('welcome');
    }

    public function logOut()
    {
        Auth::logout();

        return view('welcome');
    }
}