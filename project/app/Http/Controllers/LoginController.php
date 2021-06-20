<?php

namespace App\Http\Controllers;

use App\Kakotora;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Validator;
use Auth;
use Hash;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    function checklogin(Request $request)
    {
     $this->validate($request, [
      'name'   => 'required|string',
      'password'  => 'required|alphaNum|min:3'
     ]);

     if (Auth::attempt(['name' => $request->name, 'password' => $request->password]))
     {
      return redirect('/kakotora-home');
     }
     else
     {
      return back()->with('error', 'Wrong Login Details');
     }

    }

    function logout()
    {
     Auth::logout();
     return redirect('/');
    }

    public function register()
    {

      return view('register');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'required|alphaNum|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/');
    }
}
