<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use function Laravel\Prompts\select;

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
        $comments = Comment::join('users', 'users.id', '=', 'comments.user_id')->where('comments.product_id', $id)
            // ->where('comments.user_id',Auth::user()->id)
            ->select('comments.*', 'users.name')->get();

        return view('client/shop/detail', compact('product', 'productOther', 'comments'));
    }
    public function list(Request $req)
    {
        $query = Product::join('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.*', 'categories.name as category_name')->orderBy('products.id', 'desc');
            $categories = Category::join('products', 'products.category_id', '=', 'categories.id')
            ->select('categories.*')
            ->selectRaw('COUNT(products.id) as product_count')
            ->groupBy('categories.id')
            ->get();

        if ($req->query('cate')) {

            $query->where('categories.id', $req->query('cate'));
        }
        if ($req->query('product_name')) {

            $query->where('products.name', 'like', '%' . $req->query('product_name') . '%');
        }
        $products = $query->paginate(12);
        return view('client/shop/shop-list', compact('products', 'categories'));
    }
}
