<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function viewDetail($id)
    {
        $product = Product::where('products.id', $id)->join('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.*', 'categories.name as category_name')
            ->first();
        $productOther = Product::where('products.id', '<>', $id)->where('categories.id', $product->category_id)->join('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.*', 'categories.name as category_name')
            ->get();

        return view('client/shop/detail', compact('product', 'productOther'));
    }
    public function list()
    {
        $products = Product::join('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.*', 'categories.name as category_name')->orderBy('products.id', 'desc')->paginate(12);
        $categories = Category::all();
        return view('client/shop/shop-list', compact('products', 'categories'));
    }
    
}
