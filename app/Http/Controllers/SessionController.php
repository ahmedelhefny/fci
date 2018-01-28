<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Foundation\Auth\User;

class SessionController extends Controller
{
    public function A()
    {
        $email=\request('email');
        $password=\request('password');
        $remember=\request('checked');
       

        if (Auth::attempt(['email' => $email, 'password' => $password], $remember)) {
            return redirect('/');
          }
    	
    	else
    	{
            return redirect()->back()->withErrors(['your email or password not correct!!']);

    		
    	}
    	
    }
    public function destroy ()
    {
    	auth()->logout();
    	return redirect('/');
    }
}
