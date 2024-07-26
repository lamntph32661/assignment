@extends('client.layouts.default')
@section('content')
    <!--====================  breadcrumb area ====================-->
    <div class="breadcrumb-area section-space--half">
        <div class="container wide">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  breadcrumb wrpapper  =======-->
                    <div class="breadcrumb-wrapper breadcrumb-bg">
                        <!--=======  breadcrumb content  =======-->
                        <div class="breadcrumb-content">
                            <h2 class="breadcrumb-content__title">Cart</h2>
                            <ul class="breadcrumb-content__page-map">
                                <li><a href="index.html">Home</a></li>
                                <li class="active">Cart</li>
                            </ul>
                        </div>
                        <!--=======  End of breadcrumb content  =======-->
                    </div>
                    <!--=======  End of breadcrumb wrpapper  =======-->
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of breadcrumb area  ====================-->
    <!--====================  page content area ====================-->
    <div class="page-content-area">
        <div class="container">
            <div class="row">
                @if (Session::get('message'))
                    <div class="alert alert-success" role="alert">

                        {{ Session::get('message') ?? '' }}</div>
                @endif
                <div class="col-lg-12">
                    <!--=======  page wrapper  =======-->
                    <div class="page-wrapper">
                        <div class="page-content-wrapper">
                            <form action="#">
                                <!--=======  cart table  =======-->

                                <div class="cart-table table-responsive">
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
                                                            <img width="600" height="800" src="{{ asset($item->image) }}" class="img-fluid" alt="Product"></a>
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
                                </div>

                                <!--=======  End of cart table  =======-->


                            </form>

                            {{-- <div class="row">

                                <div class="col-lg-6 col-12">
                                    <!--=======  Calculate Shipping  =======-->



                                    <!--=======  End of Calculate Shipping  =======-->

                                    <!--=======  Discount Coupon  =======-->

                                    <div class="discount-coupon">
                                        <h4>Discount Coupon Code</h4>
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <input type="text" placeholder="Coupon Code">
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <input type="submit" value="Apply Code">
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <!--=======  End of Discount Coupon  =======-->

                                </div>


                                <div class="col-lg-6 col-12 d-flex">
                                    <!--=======  Cart summery  =======-->

                                    <div class="cart-summary">
                                        <div class="cart-summary-wrap">
                                            <h4>Cart Summary</h4>
                                            <p>Sub Total <span>${{ $total }}</span></p>
                                            <p>Shipping Cost <span>$00.00</span></p>
                                            <h2>Grand Total <span>${{ $total }}</span></h2>
                                        </div>
                                        <div class="cart-summary-button" style="justify-content: center">

                                            <a href="{{ route('DeleteAllCart') }}"class="update-btn" style="margin: au">
                                                <button class="update-btn">Delete All</button>
                                            </a>
                                            <a href="{{ route('Checkout') }}" class="checkout-btn"> 
                                                <button class="checkout-btn">Checkout</button>
                                            </a>

                                        </div>
                                    </div>

                                    <!--=======  End of Cart summery  =======-->

                                </div>

                            </div> --}}
                        </div>
                    </div>
                    <!--=======  End of page wrapper  =======-->
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of page content area  ====================-->
    <!--====================  newsletter area ====================-->
    <div class="newsletter-area section-space--inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="newsletter-wrapper">
                        <p class="small-text">Special Ofers For Subscribers</p>
                        <h3 class="title">Ten Percent Member Discount</h3>
                        <p class="short-desc">Subscribe to our newsletters now and stay up to date with new collections,
                            the latest lookbooks and exclusive offers.</p>

                        <div class="newsletter-form">
                            <form id="mc-form" class="mc-form">
                                <input type="email" placeholder="Enter Your Email Address Here..." required>
                                <button type="submit" value="submit">SUBSCRIBE</button>
                            </form>

                        </div>
                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts">
                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                            <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                            <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                        </div>
                        <!-- mailchimp-alerts end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
