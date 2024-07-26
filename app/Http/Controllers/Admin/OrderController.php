<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Order_detail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function list()  {
        $orders= Order::orderBy('id','desc')->get();
        return view('admin/order/list', compact('orders'));
    }
    function detail($id)  {
         $orders=Order_detail::join('products','products.id','=','orders_detail.product_id')->where('order_id',$id)->select('orders_detail.*','products.name','products.image')->get();
        $order=Order::find($id);
       
        return view('admin/order/order-detail',compact('orders','order'));
    }
    function updateStatus($id, Request $req)  {
        Order::where('id',$id)->update($req->all('status'));
        return redirect()->route('admin.order.list')->with(['message'=>'cập nhật thành công']);
    }
   
}
