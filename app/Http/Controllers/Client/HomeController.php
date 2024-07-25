<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function home()  {
        $products=Product::join('categories','categories.id','=','products.category_id')
        ->select('products.*','categories.name as category_name')
        ->get();
        return view('client/home',compact('products'));
        
    }
    
}
