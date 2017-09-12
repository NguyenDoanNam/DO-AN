<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Deliver extends Controller
{
    public function getLogin()
    {
    	if(!Auth::check())
    		return view('admindeliver.signin')->with('a','1');
    	else
        {

    		return redirect('deliver_admin');
        }
    }
    public function postLogin(Request $request)
    {
    	$login=[
    		'email' => $request->txtemail, 
    		'password' => $request->txtpassword,
    		'level' => 1
    	];
    	if (Auth::attempt($login)) {
            // Authentication passed...
            return redirect('deliver_admin');
        }
        else
        	return redirect()->back()->with('error_login','Login unsuccessful');
    }
    public function getLogOut()
    {
    	auth::logout();
    	return redirect()->route('getLogin');
    }
}
