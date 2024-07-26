<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function detailOrder($id)  {
        $orders=Order_detail::join('products','products.id','=','orders_detail.product_id')->where('order_id',$id)->select('orders_detail.*','products.name','products.image')->get();
        // dd($orders);
        return view('client/order/order-detail',compact('orders'));
    }
    
    public function cancelledOrder($id){
        Order::where('id',$id)->update(['status'=>'Cancelled']);
        return redirect()->back()->with(['message'=>'Đã hủy','active'=>'class="active"','show'=>'show active']);
    }
    public function receivedOrder($id)  {
        Order::where('id',$id)->update(['status'=>'Cancelled']);
        return redirect()->back()->with(['message'=>'Đã xác nhận','active'=>'class="active"','show'=>'show active']);
    }
    
}
