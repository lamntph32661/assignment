<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function add() {
        return view('admin/movie/add');
    }
    public function updateMovie() {
        return view('admin/movie/update');
    }
    public function deleteMovie() {
        return view('admin/movie/list');
    }
    public function list()  {
        return view('admin/movie/list');
    }
    public function listClient()  {
        return view('client/shop/shop-list');
    }
    public function detail()  {
        return view('client/shop/detail');
    }
    public function cart()  {
        return view('client/shop/cart');
    }
    public function seatPlan()  {
        return view('client/movie/seat-plan');
    }
    public function checkOut()  {
        return view('client/shop/checkout');
    }
}
