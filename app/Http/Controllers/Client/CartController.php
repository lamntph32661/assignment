<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addToCart(Request $req)
{
    $cart=Cart::join('users','users.id','=','carts.user_id')
    ->where('product_id',$req->product_id)->where('users.id',Session::get('user')['id'])->first();
    // dd($cart->quantity+$req->quantity);
    if (empty($cart)||$cart==null) {
        Cart::create([
        'product_id'=>$req->product_id,
        'user_id'=>Session::get('user')['id'],
        'quantity'=>$req->quantity,
    ]);
    }else {
        Cart::join('users','users.id','=','carts.user_id')
        ->join('products','products.id','=','carts.product_id')
        ->where('users.id',Session::get('user')['id'])->where('product_id',$req->product_id)
        ->update(['carts.quantity'=>$cart->quantity+$req->quantity]);
    }
    
    return redirect()->back()->with(['message'=>'Thêm sản phẩm vào giỏ hàng thành công']);
}
public function list()  {
    $carts=Cart::join('users','users.id','=','carts.user_id')
    ->join('products','products.id','=','carts.product_id')->select('products.*','carts.quantity as quantity_cart','carts.id as cart_id')
    ->where('users.id',Session::get('user')['id'])->orderBy('carts.id','desc')->get();
    // dd($carts);
    return view('client/shop/cart',compact('carts'));
}
function deleteToCart($cart_id)  {
    Cart::where('id',$cart_id)->delete();
    return redirect()->back()->with(['message'=>'Xóa thành công']);
}
}
