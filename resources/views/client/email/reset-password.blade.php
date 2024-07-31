
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
                            <li class="active">Reset Password</li>
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
                            <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6" style="margin: auto">
                                <!-- Login Form s-->
                                <form action="{{route('ResetPassword',$token)}}" method="POST">
                                    
                                    @csrf
                                    <div class="login-form">
                                        <h4 class="login-title">Reset Password</h4>
{{$message??""}}
                                        <div class="row">
                                            <div class="col-md-6 mb-20">
                                                <label>Password</label>
                                                <input type="password" name="password" value="{{old('password')}}" placeholder="Password"><p style="color: red">{{$errors->first('password')}}</p>
                                            </div>
                                            <div class="col-md-6 mb-20">
                                                <label>Confirm Password</label>
                                                <input type="password" name="confirmpassword" value="{{old('confirmpassword')}}" placeholder="Confirm Password"><p style="color: red">{{$errors->first('confirmpassword')}}</p>
                                            </div>
                                            <div class="col-md-12">
                                                <button class="register-button" type="submit">Submit</button>
                                            </div>

                                        </div>
                                    </div>

                                </form>
                            </div>
                            {{-- <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                                <form method="POST" action="{{route('Signup')}}">

                                    <div class="login-form">
                                        @csrf
                                        <h4 class="login-title">Register</h4>
                                        {{$message??''}}
                                        <div class="row">
                                            <div class="col-md-6 col-12 mb-20">
                                                <label>Name</label>
                                                <input type="text" name="name" placeholder="Name">
                                            </div>
                                           
                                            <div class="col-md-12 mb-20">
                                                <label>Email Address*</label>
                                                <input type="email" name="email" placeholder="Email Address">
                                            </div>
                                            <div class="col-md-6 mb-20">
                                                <label>Password</label>
                                                <input type="password" name="password" placeholder="Password">
                                            </div>
                                            <div class="col-md-6 mb-20">
                                                <label>Confirm Password</label>
                                                <input type="password" name="confirmpassword" placeholder="Confirm Password">
                                            </div>
                                            <div class="col-12">
                                                <button class="register-button mt-0" type="submit">Register</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div> --}}
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