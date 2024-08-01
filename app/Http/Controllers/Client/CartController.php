<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cart\AddToCartRequest;
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
    public function updateToCart(Request $req)
    {
        $req->validate([
            'quantity' => 'required'
        ]);
        // $cart = Cart::join('users', 'users.id', '=', 'carts.user_id')
        //     ->where('product_id', $req->product_id)->where('users.id', Auth::user()->id)->first();


        Cart::join('users', 'users.id', '=', 'carts.user_id')
            ->join('products', 'products.id', '=', 'carts.product_id')
            ->where('users.id', Auth::user()->id)->where('product_id', $req->product_id)
            ->update(['carts.quantity' =>  $req->quantity]);


        return redirect()->back()->with(['message' => 'Sửa số lượng thành công']);
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
        if (isset($carts->first()->id)) {
            return view('client/shop/checkout', compact('carts'));
        } else {
            return redirect()->back()->with(['message' => 'Giỏ hàng trống']);
        }
    }
    public function checkOutPost(AddToCartRequest $req)
    {
        // $req->validate([

        //     'name_user' => 'required|max:255',
        //     'address' => 'required|max:255',
        //     'email' => 'required|max:255',
        //     'phone' => 'required|max:10'
        // ],);
        $data = [
            'user_id' => Auth::user()->id,
            'name_user' => $req->name_user,
            'address' => $req->address,
            'total' => $req->total,
            'phone' => $req->phone
        ];
        Session::put('order', $data);


        if ($req->payment_method == 'vnpay') {
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            /*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

            $vnp_TmnCode = "N179GVW7"; //Mã định danh merchant kết nối (Terminal Id)
            $vnp_HashSecret = "MHEP1M5967S6VS91T1GRNH2DVLDRJVE4"; //Secret key
            $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
            $vnp_Returnurl = "http://127.0.0.1:8000/vnpay_return";
            $vnp_apiUrl = "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html";
            $apiUrl = "https://sandbox.vnpayment.vn/merchant_webapi/api/transaction";
            $vnp_TxnRef = rand(1, 10000); //Mã giao dịch thanh toán tham chiếu của merchant
            $vnp_Amount = $req->total * 25000; // Số tiền thanh toán
            $vnp_Locale = 'vn'; //Ngôn ngữ chuyển hướng thanh toán
            $vnp_BankCode = ''; //Mã phương thức thanh toán
            $vnp_IpAddr = $_SERVER['REMOTE_ADDR']; //IP Khách hàng thanh toán
            $startTime = date("YmdHis");
            $expire = date('YmdHis', strtotime('+15 minutes', strtotime($startTime)));
            $inputData = array(
                "vnp_Version" => "2.1.0",
                "vnp_TmnCode" => $vnp_TmnCode,
                "vnp_Amount" => $vnp_Amount * 100,
                "vnp_Command" => "pay",
                "vnp_CreateDate" => date('YmdHis'),
                "vnp_CurrCode" => "VND",
                "vnp_IpAddr" => $vnp_IpAddr,
                "vnp_Locale" => $vnp_Locale,
                "vnp_OrderInfo" => "Thanh toan GD:",
                "vnp_OrderType" => "other",
                "vnp_ReturnUrl" => $vnp_Returnurl,
                "vnp_TxnRef" => $vnp_TxnRef,
                "vnp_ExpireDate" => $expire
            );

            if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                $inputData['vnp_BankCode'] = $vnp_BankCode;
            }

            ksort($inputData);
            $query = "";
            $i = 0;
            $hashdata = "";
            foreach ($inputData as $key => $value) {
                if ($i == 1) {
                    $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                } else {
                    $hashdata .= urlencode($key) . "=" . urlencode($value);
                    $i = 1;
                }
                $query .= urlencode($key) . "=" . urlencode($value) . '&';
            }

            $vnp_Url = $vnp_Url . "?" . $query;
            if (isset($vnp_HashSecret)) {
                $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
                $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
            }
            header('Location: ' . $vnp_Url);
            die();
            $vnp_SecureHash = $_GET['vnp_SecureHash'];
            $inputData = array();
            foreach ($_GET as $key => $value) {
                if (substr($key, 0, 4) == "vnp_") {
                    $inputData[$key] = $value;
                }
            }

            unset($inputData['vnp_SecureHash']);
            ksort($inputData);
            $i = 0;
            $hashData = "";
            foreach ($inputData as $key => $value) {
                if ($i == 1) {
                    $hashData = $hashData . '&' . urlencode($key) . "=" . urlencode($value);
                } else {
                    $hashData = $hashData . urlencode($key) . "=" . urlencode($value);
                    $i = 1;
                }
            }

            $secureHash = hash_hmac('sha512', $hashData, $vnp_HashSecret);
            if ($secureHash == $vnp_SecureHash) {
                if ($_GET['vnp_ResponseCode'] == '00') {
                    echo "GD Thanh cong";
                } else {
                    echo "GD Khong thanh cong";
                }
            } else {
                echo "Chu ky khong hop le";
            }
            // vui lòng tham khảo thêm tại code demo
            // echo 'vn pay';
        } else {
            $carts = Cart::join('users', 'users.id', '=', 'carts.user_id')
                ->join('products', 'products.id', '=', 'carts.product_id')->select('products.*', 'carts.quantity as quantity_cart', 'carts.id as cart_id')
                ->where('users.id', Auth::user()->id)->orderBy('carts.id', 'desc')->get();
            if ($order = Order::create($data)) {
                foreach ($carts as $key) {
                    $orderDetail = [
                        'order_id' => $order->id,
                        'product_id' => $key->id,
                        'quantity' => $key->quantity_cart,
                        'price' => round($key->price * ((100 - $key->discount) / 100)),
                        'total_price' => round($key->price * ((100 - $key->discount) / 100)) * $key->quantity_cart,
                    ];

                    Order_detail::create($orderDetail);
                    Cart::where('id', $key->cart_id)->delete();
                }
                return redirect()->route('MyAccount')->with(['message' => 'Đặt hàng thành công', 'active' => 'class="active"', 'show1' => 'show active']);
            }
        }
    }
    function vnp_ReturnUrl(Request $req)
    {
        $result = $req->query('vnp_ResponseCode');
        $data = Session::get('order');
        $data['pay'] = 'paid';
        $data['status'] = 'Processing';
        //    dd($data);
        if ($result != null && $result == '00') {


            $carts = Cart::join('users', 'users.id', '=', 'carts.user_id')
                ->join('products', 'products.id', '=', 'carts.product_id')->select('products.*', 'carts.quantity as quantity_cart', 'carts.id as cart_id')
                ->where('users.id', Auth::user()->id)->orderBy('carts.id', 'desc')->get();
            if ($order = Order::create($data)) {
                foreach ($carts as $key) {
                    $orderDetail = [
                        'order_id' => $order->id,
                        'product_id' => $key->id,
                        'quantity' => $key->quantity_cart,
                        'price' => round($key->price * ((100 - $key->discount) / 100)),
                        'total_price' => round($key->price * ((100 - $key->discount) / 100)) * $key->quantity_cart,
                    ];

                    Order_detail::create($orderDetail);
                }
                Cart::where('id', $key->cart_id)->delete();
                return redirect()->route('MyAccount')->with(['message' => 'Đặt hàng thành công', 'active1' => 'class="active"', 'show1' => 'show active']);
            }
        } else {
            return redirect()->route('CheckOut');
        }
    }
}
