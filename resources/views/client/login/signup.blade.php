
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
                        <h2 class="breadcrumb-content__title">Login - Register</h2>
                        <ul class="breadcrumb-content__page-map">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Login - Register</li>
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
                @if (session('message'))
                    <div class="alert alert-primary">{{session('message')}}</div>
                @endif
                <!--=======  page wrapper  =======-->
                <div class="page-wrapper">
                    <div class="page-content-wrapper"><p style="margin: auto; font-size: 20px" >{{$message2??''}}</p>
                        
                        <div class="row">
                            
                            {{-- <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6">
                                <!-- Login Form s-->
                                <form action="{{route('Login')}}" method="POST">
                                    @csrf
                                    <div class="login-form">
                                        <h4 class="login-title">Login</h4>

                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                                <label>Email Address*</label><p style="color: red">{{$errors->first('login_email')}}</p>
                                                <input type="email" name="login_email" value="{{old('login_email')}}" placeholder="Email Address">
                                            </div>
                                            <div class="col-12">
                                                <label>Password</label><p style="color: red">{{$errors->first('login_password')}}</p>
                                                <input type="password" name="login_password" value="{{old('login_password')}}" placeholder="Password">
                                            </div>
                                            <div class="col-sm-6">

                                                <div class="check-box d-inline-block ml-0 ml-md-2">
                                                    <input type="checkbox" name="remember" id="remember_me">
                                                    <label for="remember_me">Remember me</label>
                                                </div>

                                            </div>

                                            <div class="col-sm-6 text-start text-sm-end">
                                                <a href="{{route('Forgot')}}" class="forget-pass-link"> Forgotten pasward?</a>
                                            </div>

                                            <div class="col-md-12">
                                                <button class="register-button" type="submit">Login</button>
                                            </div>

                                        </div>
                                    </div>

                                </form>
                            </div> --}}
                            <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6" style="margin: auto;">
                                <form method="POST" action="{{route('Signup')}}">

                                    <div class="login-form">
                                        @csrf
                                        <h4 class="login-title" style="text-align: center">Register</h4>
                                        {{-- {{$message??''}} --}}
                                        <div class="row">
                                            <div class="col-md-6 col-12 mb-20">
                                                <label>Name</label><p style="color: red">{{$errors->first('name')??''}}</p>
                                                <input type="text" name="name" value="{{old('name')}}" placeholder="Name">
                                            </div>
                                           
                                            <div class="col-md-12 mb-20">
                                                <label>Email Address*</label><p style="color: red">{{$errors->first('email')??''}}</p>
                                                <input type="email" name="email" value="{{old('email')}}" placeholder="Email Address">
                                            </div>
                                            <div class="col-md-6 mb-20">
                                                <label>Password</label><p style="color: red">{{$errors->first('password')??''}}</p>
                                                <input type="password" name="password" value="{{old('password')}}" placeholder="Password">
                                            </div>
                                            <div class="col-md-6 mb-20">
                                                <label>Confirm Password</label><p style="color: red">{{$errors->first('confirmpassword')??''}}</p>
                                                <input type="password" name="confirmpassword" value="{{old('confirmpassword')}}" placeholder="Confirm Password">
                                            </div>
                                            <div class="col-12">
                                                <button class="register-button mt-0" type="submit">Register</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
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