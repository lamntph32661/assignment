<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Order_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addToCart(Request $req)
    {
        $cart = Cart::join('users', 'users.id', '=', 'carts.user_id')
            ->where('product_id', $req->product_id)->where('users.id', Auth::user()->id)->first();

        if (empty($cart) || $cart == null) {
            Cart::create([
                'product_id' => $req->product_id,
                'user_id' => Auth::user()->id,
                'quantity' => $req->quantity,
            ]);
        } else {
            Cart::join('users', 'users.id', '=', 'carts.user_id')
                ->join('products', 'products.id', '=', 'carts.product_id')
                ->where('users.id', Auth::user()->id)->where('product_id', $req->product_id)
                ->update(['carts.quantity' => $cart->quantity + $req->quantity]);
        }

        return redirect()->back()->with(['message' => 'Thêm sản phẩm vào giỏ hàng thành công']);
    }
    public function list()
    {
        $carts = Cart::join('users', 'users.id', '=', 'carts.user_id')
            ->join('products', 'products.id', '=', 'carts.product_id')->select('products.*', 'carts.quantity as quantity_cart', 'carts.id as cart_id')
            ->where('users.id', Auth::user()->id)->orderBy('carts.id', 'desc')->get();
        // dd($carts);
        return view('client/shop/cart', compact('carts'));
    }
    function deleteToCart($cart_id)
    {
        Cart::where('id', $cart_id)->delete();
        return redirect()->back()->with(['message' => 'Xóa thành công']);
    }
    function deleteAllCart()
    {
        Cart::join('users', 'users.id', '=', 'carts.user_id')
            ->where('users.id', Auth::user()->id)->delete();
        return redirect()->back()->with(['message' => 'Xóa thành công']);
    }
    public function checkOut()
    {
        $carts = Cart::join('users', 'users.id', '=', 'carts.user_id')
            ->join('products', 'products.id', '=', 'carts.product_id')
            ->select('products.*', 'carts.quantity as quantity_cart', 'carts.id as cart_id')
            ->where('users.id', Auth::user()->id)->orderBy('carts.id', 'desc')->get();
        // dd($carts);
        return view('client/shop/checkout', compact('carts'));
    }
    public function checkOutPost(Request $req)
    {
        $req->validate([
            
            'name_user' => 'required|max:255',
            'address' => 'required|max:255',
            
            'phone' => 'required|max:10'
        ],);
        $data = [
            'user_id' => Auth::user()->id,
            'name_user' => $req->name_user,
            'address' => $req->address,
            'total' => $req->total,
            'phone' => $req->phone
        ];
        
        $carts = Cart::join('users', 'users.id', '=', 'carts.user_id')
            ->join('products', 'products.id', '=', 'carts.product_id')->select('products.*', 'carts.quantity as quantity_cart', 'carts.id as cart_id')
            ->where('users.id', Auth::user()->id)->orderBy('carts.id', 'desc')->get();
        if ($order=Order::create($data)) {
            foreach ($carts as $key) {
                $orderDetail=[
                    'order_id'=>$order->id,
                    'product_id'=>$key->id,
                    'quantity'=>$key->quantity_cart,
                    'price'=>round($key->price*((100-$key->discount)/100)),
                    'total_price'=>round($key->price*((100-$key->discount)/100))*$key->quantity_cart,
                ];

                Order_detail::create($orderDetail);
                Cart::where('id',$key->cart_id)->delete();
            }
            return redirect()->route('MyAccount')->with(['message'=>'Đặt hàng thành công','active'=>'class="active"','show1'=>'show active']);
        }
    }
}
