<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard');
    }

    public function userdata() {
        return view('User.user-data');
    }

    public function home() {
        return view('User.home');
    }

}
