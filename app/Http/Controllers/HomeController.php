<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()  {
        
        return view('client/home');
    }
    public function homeAdmin()  {
        return view('admin/home');
    }
    function login()  {
        return view('admin/login');
    }
}
