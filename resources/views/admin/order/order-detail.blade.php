@extends('admin.layouts.default')
@section('content')
    <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="margin-left: 1px; ">
        <div class="card card-primary w-100" style="min-height: 585px;">
            <div class="card-header">
                <h3 class="card-title">Chi tiết đơn hàng</h3>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th class="pro-thumbnail">Image</th>
                        <th class="pro-title">Product</th>
                        <th class="pro-price">Quantity</th>
                        <th class="pro-quantity">Price</th>
                        <th class="pro-subtotal">Total</th>

                    </tr>
                </thead>
                <tbody>@php
                    $total = 0;
                @endphp
                    @foreach ($orders as $item)
                        <tr>
                            <td class="pro-thumbnail">
                                <a href="{{ route('Detail', $item->id) }}">
                                    <img width="50" height="100" src="{{ asset($item->image) }}" class="img-fluid"
                                        alt="Product"></a>
                            </td>
                            <td class="pro-title">
                                <a href="{{ route('Detail', $item->id) }}">{{ $item->name }}</a>
                            </td>

                            <td class="pro-quantity">
                                {{ $item->quantity }}
                            </td>
                            <td class="pro-title">
                                {{ $item->price }}
                            </td>
                            <td class="pro-title">
                                {{ $item->total_price }}
                            </td>
                            <td class="pro-subtotal">


                        </tr>
                    @endforeach


                </tbody>
            </table>
            <form class="ml-5" action="{{ route('admin.order.UpdateStatus', $order->id) }}" method="POST">
                @csrf
                <div class="card-body">

                    <div class="form-group">
                        <label for="danhmuc">Status:</label>
                        
                            @if ($order->status == 'Pending')
                            <select name="status" class="form-control" id="">
                                <option value="Pending" selected>Pending</option>
                                <option value="Processing">Processing</option>
                                <option value="Shipped">Shipped</option>
                                <option value="Delivered">Delivered</option>
                                <option value="Cancelled">Cancelled</option></select>
                            @endif
                            @if ($order->status == 'Processing')
                            <select name="status" class="form-control" id="">
                                <option value="Processing" selected>Processing</option>
                                <option value="Shipped">Shipped</option>
                                <option value="Delivered">Delivered</option>
                                <option value="Cancelled">Cancelled</option></select>
                            @endif
                            @if ($order->status == 'Shipped')
                            <select name="status" class="form-control" id="">
                                <option value="Shipped" selected>Shipped</option>
                                <option value="Delivered">Delivered</option>
                                <option value="Cancelled">Cancelled</option></select>
                            @endif
                            @if ($order->status == 'Delivered')
                                
                               <p>Delivered</p> 
                                
                            @endif
                            @if ($order->status == 'Cancelled')
                                
                               <p>Cancelled</p> 
                            @endif 
                    </div>
                </div>
                @if ($order->status != 'Delivered'||$order->status != 'Cancelled')       
                           <div class="card-footer">
                    <input type="submit" class="btn btn-success" name="themmoi"  onclick="return confirm('Xác nhận cập nhật')" value="Submit">
                    <input class="btn btn-secondary" type="reset" value="Nhập lại">
                    <a href="#" class="btn btn-primary">Danh sách</a>
                </div>    
                            @endif
                
            </form>

        </div>
    </nav>
@endsection
