@extends('client.layouts.default')
@section('content')
    <div class="breadcrumb-area section-space--half">
        <div class="container wide">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  breadcrumb wrpapper  =======-->
                    <div class="breadcrumb-wrapper breadcrumb-bg">
                        <!--=======  breadcrumb content  =======-->
                        <div class="breadcrumb-content">
                            <h2 class="breadcrumb-content__title">My Account</h2>
                            <ul class="breadcrumb-content__page-map">
                                <li><a href="index.html">Home</a></li>
                                <li class="active">My Account</li>
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
                <div class="col-lg-12">
                    <!--=======  page wrapper  =======-->
                    <div class="page-wrapper">
                        <div class="page-content-wrapper">
                            <div class="row">
                                @if (Session::get('message'))
                                    <div class="alert alert-success" role="alert">

                                        {{ Session::get('message') ?? '' }}</div>
                                @endif
                                <!-- My Account Tab Menu Start -->
                                <div class="col-lg-3 col-12">
                                    <div class="myaccount-tab-menu nav" role="tablist">
                                        <a href="#dashboad" data-bs-toggle="tab"><i class="fa fa-dashboard"></i>
                                            Dashboard</a>

                                        <a href="#orders" data-bs-toggle="tab"><i class="fa fa-cart-arrow-down"></i>
                                            Orders</a>



                                        <a href="#orders_history" data-bs-toggle="tab"><i class="fa fa-cart-arrow-down"></i>
                                            Orders History</a>

                                        <a href="#account-info" {{ session('active4') }} data-bs-toggle="tab"><i
                                                class="fa fa-user"></i> Account
                                            Details</a>


                                    </div>
                                </div>
                                <!-- My Account Tab Menu End -->

                                <!-- My Account Tab Content Start -->
                                <div class="col-lg-9 col-12">
                                    <div class="tab-content" id="myaccountContent">
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade  " id="dashboad" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Dashboard</h3>

                                                <div class="welcome mb-20">
                                                    <p>Hello, <strong>Alex Tuntuni</strong> (If Not <strong>Tuntuni
                                                            !</strong><a href="login-register.html" class="logout">
                                                            Logout</a>)</p>
                                                </div>

                                                <p class="mb-0">From your account dashboard. you can easily check &amp;
                                                    view your
                                                    recent orders, manage your shipping and billing addresses and edit
                                                    your
                                                    password and account details.</p>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->

                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade {{ Session::get('show1') ?? '' }}" id="orders"
                                            role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Orders</h3>

                                                <div class="myaccount-table table-responsive text-center">
                                                    <table class="table table-bordered">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Name</th>
                                                                <th>Date</th>
                                                                <th>Status</th>
                                                                <th>Total</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            @foreach ($orders as $item)
                                                                <tr>
                                                                    <td>{{ $item->id }}</td>
                                                                    <td>{{ $item->name_user }}</td>
                                                                    <td>{{ $item->created_at }}</td>
                                                                    <td>{{ $item->status }}</td>
                                                                    <td>${{ $item->total }}</td>
                                                                    <td><a href="{{ route('DetailOrder', $item->id) }}"
                                                                            class="btn">View</a>
                                                                        @if ($item->status == 'Pending')
                                                                            <a href="{{ route('CancelledOrder', $item->id) }}"
                                                                                onclick="return confirm('Bạn có muốn hủy đơn hàng này?')"
                                                                                class="btn">Cancelled</a>
                                                                    </td>
                                                            @endif
                                                            @if ($item->status == 'Shipped')
                                                                <a href="{{ route('ReceivedOrder', $item->id) }}"
                                                                    class="btn">Received</a></td>
                                                            @endif
                                                            </td>
                                                            </tr>
                                                            @endforeach


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->
                                        <div class="tab-pane fade {{ Session::get('show2') ?? '' }}" id="orders_history"
                                            role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Orders History</h3>

                                                <div class="myaccount-table table-responsive text-center">
                                                    <table class="table table-bordered">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Name</th>
                                                                <th>Date</th>
                                                                <th>Status</th>
                                                                <th>Total</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            @foreach ($orderHistory as $item)
                                                                <tr>
                                                                    <td>{{ $item->id }}</td>
                                                                    <td>{{ $item->name_user }}</td>
                                                                    <td>{{ $item->created_at }}</td>
                                                                    <td>{{ $item->status }}</td>
                                                                    <td>${{ $item->total }}</td>
                                                                    <td><a href="{{ route('DetailOrder', $item->id) }}"
                                                                            class="btn">View</a>
                                                                        @if ($item->status == 'Pending')
                                                                            <a href="{{ route('CancelledOrder', $item->id) }}"
                                                                                onclick="return confirm('Bạn có muốn hủy đơn hàng này?')"
                                                                                class="btn">Cancelled</a>
                                                                    </td>
                                                            @endif
                                                            @if ($item->status == 'Shipped')
                                                                <a href="{{ route('ReceivedOrder', $item->id) }}"
                                                                    class="btn">Received</a></td>
                                                            @endif
                                                            </td>
                                                            </tr>
                                                            @endforeach


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content Start -->

                                        <!-- Single Tab Content End -->

                                        <!-- Single Tab Content Start -->

                                        <!-- Single Tab Content End -->

                                        <!-- Single Tab Content Start -->

                                        <!-- Single Tab Content End -->

                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade  {{ session('show4') ?? '' }}" id="account-info"
                                            role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Account Details</h3>
                                                {{-- {{ Session::get('message') }} --}}
                                                <div class="account-details-form">
                                                    <form action="{{ route('ChangeInfo', $info->id) }}" method="POST">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-lg-6 col-12">{{ $errors->first('name') }}
                                                                <input id="first-name" name="name"
                                                                    value="{{ $info->name }}" placeholder="Name"
                                                                    type="text">
                                                            </div>

                                                            <div class="col-lg-6 col-12">{{ $errors->first('email') }}
                                                                <input id="last-name" disabled placeholder="Email"
                                                                    name="email" value="{{ $info->email }}"
                                                                    type="email">
                                                            </div>

                                                            <div class="col-12">{{ $errors->first('phone') }}
                                                                <input id="display-name" placeholder="Phone" name="phone"
                                                                    value="{{ $info->phone }}" type="text">
                                                            </div>

                                                            <div class="col-12">{{ $errors->first('address') }}
                                                                <input id="email" placeholder="Address"
                                                                    name="address" value="{{ $info->address }}"
                                                                    type="text">
                                                            </div>
                                                            {{-- <input type="hidden" name="passwordHidden" value="{{ $info->password }}"> --}}
                                                                <input type="hidden" name="email" value="{{ $info->email }}">
                                                            <div class="col-12">{{ $errors->first('password') }}
                                                                <input id="current-pwd" placeholder="Current Password"
                                                                    name="password" type="password" required>
                                                            </div>
                                                            <div class="col-12 mb-2">
                                                                <h4>Password change</h4>
                                                            </div>



                                                            <div class="col-lg-6 col-12">

                                                                <input id="new-pwd" placeholder="New Password"
                                                                    name="new_password"
                                                                    type="password">{{ $errors->first('new_password') }}
                                                            </div>

                                                            <div class="col-lg-6 col-12">
                                                                {{ $errors->first('confirm_new_password') }}
                                                                <input id="confirm-pwd" placeholder="Confirm Password"
                                                                    name="confirm_new_password" type="password">
                                                            </div>

                                                            <div class="col-12">
                                                                <button class="save-change-btn">Save Changes</button>
                                                            </div>

                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->
                                    </div>
                                </div>
                                <!-- My Account Tab Content End -->
                            </div>
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
