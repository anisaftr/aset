<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function userlogin() {
        return view('User.login-user');
    }

    public function postlogin(Request $request) {
        if(Auth::guard('user')->attempt(['username' => $request->username, 'password' => $request->password])) {
            return view('User.user-data');
        }elseif(Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password])) {
            return view('dashboard');
        }
        return redirect('/');
    }

    public function logout() {
        if (Auth::guard('user')->check()) {
            Auth::guard('user')->logout();
        }elseif(Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        }
        return redirect('/login');
    }

}
