<!DOCTYPE html>
<html class="no-js" lang="zxx">


<!-- Mirrored from htmldemo.net/eposi/eposi/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jul 2024 04:15:28 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Eposi - Multipurpose eCommerce Bootstrap5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets/img/favicon.ico')}}">

    <!--=============================================
    =            CSS  files       =
    =============================================-->
    <!-- Google Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,400;0,700;1,400;1,700&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    

    <!-- Vendor CSS -->
    <link href="{{asset('assets/css/vendors.css')}}" rel="stylesheet">
    <!-- Main CSS -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">


</head>

<body>
    <!--====================  header area ====================-->
    @include('client.layouts.header')
    <!--====================  End of header area  ====================-->
    <!--====================  hero slider area ====================-->
@yield('content')
    @include('client/layouts.footer')
    <!--====================  End of newsletter area  ====================-->
    <!--====================  footer area ====================-->
    
    <!--====================  End of footer area  ====================-->
    <!--=======  offcanvas mobile menu  =======-->

    <div class="offcanvas-mobile-menu" id="offcanvas-mobile-menu">
        <a href="javascript:void(0)" class="offcanvas-menu-close" id="offcanvas-menu-close-trigger">
            <i class="ion-android-close"></i>
        </a>

        <div class="offcanvas-wrapper">

            <div class="offcanvas-inner-content">
                <div class="offcanvas-mobile-search-area">
                    <form action="#">
                        <input type="search" placeholder="Search ...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <nav class="offcanvas-navigation">
                    <ul>
                        <li ><a href="{{route('home')}}">HOME</a>
                            {{-- <ul class="sub-menu">
                                <li><a href="index.html">Home Shop 1</a></li>
                                <li><a href="index-2.html">Home Shop 2</a></li>
                                <li><a href="index-3.html">Home Shop 3</a></li>
                                <li><a href="index-4.html">Home Shop 4</a></li>
                                <li><a href="index-5.html">Home Shop 5</a></li>
                                <li><a href="index-6.html">Home Shop 6</a></li>
                                <li><a href="index-7.html">Home Shop 7</a></li>
                                <li><a href="index-8.html">Home Shop 8</a></li>
                            </ul> --}}
                        </li>

                        <li ><a href="#">PAGES</a>
                            <ul class="sub-menu">
                                <li class="menu-item-has-children"><a href="#">Page List One</a>
                                    <ul class="sub-menu">
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">page list two</a>
                                    <ul class="sub-menu">
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="login-register.html">Login Register</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Page list three</a>
                                    <ul class="sub-menu">
                                        <li><a href="compare.html">Compare</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class=""><a href="{{route('List')}}">SHOP</a>
                            {{-- <ul class="mega-menu four-column">
                                <li><a href="#">Shop Grid</a>
                                    <ul>
                                        <li><a href="shop-3-column.html">shop 3 column</a></li>
                                        <li><a href="shop-4-column.html">shop 4 column</a></li>
                                        <li><a href="shop-left-sidebar.html">shop left sidebar</a></li>
                                        <li><a href="shop-right-sidebar.html">shop right sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop-list-left-sidebar.html">Shop List</a>
                                    <ul>
                                        <li><a href="shop-list.html">shop List</a></li>
                                        <li><a href="shop-list-left-sidebar.html">shop List Left Sidebar</a>
                                        </li>
                                        <li><a href="shop-list-right-sidebar.html">shop List Right
                                                Sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="single-product.html">Single Product</a>
                                    <ul>
                                        <li><a href="single-product.html">Single Product</a></li>
                                        <li><a href="single-product-variable.html">Single Product
                                                variable</a></li>
                                        <li><a href="single-product-affiliate.html">Single Product
                                                affiliate</a></li>
                                        <li><a href="single-product-group.html">Single Product group</a>
                                        </li>
                                        <li><a href="single-product-tabstyle-2.html">Tab Style 2</a></li>
                                        <li><a href="single-product-tabstyle-3.html">Tab Style 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="single-product.html">Single Product</a>
                                    <ul>
                                        <li><a href="single-product-gallery-left.html">Gallery Left</a></li>
                                        <li><a href="single-product-gallery-right.html">Gallery Right</a>
                                        </li>
                                        <li><a href="single-product-sticky-left.html">Sticky Left</a></li>
                                        <li><a href="single-product-sticky-right.html">Sticky Right</a></li>
                                        <li><a href="single-product-slider-box.html">Slider Box</a></li>
                                    </ul>
                                </li>
                                <li class="megamenu-banner d-none d-lg-block mt-30 w-100">
                                    <a href="shop-left-sidebar.html" class="mb-0">
                                        <img width="920" height="183" src="assets/img/banners/img-bottom-menu.webp" class="img-fluid"
                                            alt="">
                                    </a>
                                </li>
                            </ul> --}}
                        </li>

                        <li class="menu-item-has-children"><a href="blog-left-sidebar.html">BLOG</a>
                            <ul class="sub-menu">
                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                <li><a href="blog-post-left-sidebar.html">Blog Post Left Sidebar</a></li>
                                <li><a href="blog-post-right-sidebar.html">Blog Post Right Sidebar</a></li>
                                <li><a href="blog-post-image-format.html">Blog Post Image Format</a></li>
                                <li><a href="blog-post-image-gallery.html">Blog Post Image Gallery</a></li>
                                <li><a href="blog-post-audio-format.html">Blog Post Audio Format</a></li>
                                <li><a href="blog-post-video-format.html">Blog Post Video Format</a></li>
                            </ul>
                        </li>

                        <li><a href="contact.html">CONTACT</a></li>

                    </ul>
                </nav>

                <div class="offcanvas-settings">
                    <nav class="offcanvas-navigation">
                        <ul>
                            <li class="menu-item-has-children"><a href="#">MY ACCOUNT </a>
                                <ul class="sub-menu">
                                    @if (!empty(Session::get('user'))||(Session::get('user')))
                                    <li><a href="login-register.html">{{Session::get('user')['name']}}</a></li>
                                    @if (Session::get('user')['role']==0)
                                    <li><a href="{{route('admin.home')}}">Login Admin</a></li>
                                    
                                        
                                    @endif
                                    <li><a href="{{route('Logout')}}">Logout</a></li>
                                    @else
                                        
                                                            <li><a href="{{route('Login')}}">Login</a></li>
                                    @endif
                                                                
                                                            
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">CURRENCY: USD </a>
                                <ul class="sub-menu">
                                    <li><a href="javascript:void(0)">€ Euro</a></li>
                                    <li><a href="javascript:void(0)">$ US Dollar</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">LANGUAGE: EN-GB </a>
                                <ul class="sub-menu">
                                    <li><a href="javascript:void(0)"><img width="16" height="11" src="assets/img/icons/en-gb.webp" alt="">
                                            English</a></li>
                                    <li><a href="javascript:void(0)"><img width="16" height="11" src="assets/img/icons/de-de.webp" alt="">
                                            Germany</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="offcanvas-widget-area">
                    <div class="off-canvas-contact-widget">
                        <div class="header-contact-info">
                            <ul class="header-contact-info__list">
                                <li><i class="ion-android-phone-portrait"></i> <a href="tel://12452456012">(1245) 2456
                                        012 </a></li>
                                <li><i class="ion-android-mail"></i> <a
                                        href="mailto:info@yourdomain.com">info@yourdomain.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Off Canvas Widget Social Start-->
                    <div class="off-canvas-widget-social">
                        <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                        <a href="#" title="Youtube"><i class="fa fa-youtube-play"></i></a>
                        <a href="#" title="Vimeo"><i class="fa fa-vimeo-square"></i></a>
                    </div>
                    <!--Off Canvas Widget Social End-->
                </div>
            </div>
        </div>

    </div>

    <!--=======  End of offcanvas mobile menu  =======-->
    <!--====================  search overlay ====================-->

    <div class="search-overlay" id="search-overlay">
        <a href="javascript:void(0)" class="close-search-overlay" id="close-search-overlay">
            <i class="ion-ios-close-empty"></i>
        </a>

        <!--=======  search form  =======-->

        <div class="search-form">
            <form action="{{route('List')}}" method="get">
                <input type="search" name="product_name" placeholder="Search entire store here ...">
                <button type="submit"><i class="ion-android-search"></i></button>
            </form>
        </div>

        <!--=======  End of search form  =======-->
    </div>

    <!--====================  End of search overlay  ====================-->
    <!--====================  quick view ====================-->

    <div class="modal fade quick-view-modal-container" id="quick-view-modal-container" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-xl-12 col-lg-12">
                        <!--=======  single product main content area  =======-->
                        <div class="single-product-main-content-area">
                            <div class="row">
                                <div class="col-xl-5 col-lg-6">
                                    <!--=======  product details slider area  =======-->

                                    <div class="product-details-slider-area">


                                        <div class="big-image-wrapper">

                                            <div class="product-details-big-image-slider-wrapper-quick product-details-big-image-slider-wrapper--bottom-space ht-slick-slider"
                                                data-slick-setting='{
                "slidesToShow": 1,
                "slidesToScroll": 1,
                "arrows": false,
                "autoplay": false,
                "autoplaySpeed": 5000,
                "fade": true,
                "speed": 500,
                "prevArrow": {"buttonClass": "slick-prev", "iconClass": "fa fa-angle-left" },
                "nextArrow": {"buttonClass": "slick-next", "iconClass": "fa fa-angle-right" }
            }' data-slick-responsive='[
                {"breakpoint":1501, "settings": {"slidesToShow": 1, "arrows": false} },
                {"breakpoint":1199, "settings": {"slidesToShow": 1, "arrows": false} },
                {"breakpoint":991, "settings": {"slidesToShow": 1, "arrows": false, "slidesToScroll": 1} },
                {"breakpoint":767, "settings": {"slidesToShow": 1, "arrows": false, "slidesToScroll": 1} },
                {"breakpoint":575, "settings": {"slidesToShow": 1, "arrows": false, "slidesToScroll": 1} },
                {"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false, "slidesToScroll": 1} }
            ]'>
                                                <div class="single-image">
                                                    <img width="600" height="800" src="assets/img/products/big1-1.webp" class="img-fluid" alt="">
                                                </div>
                                                <div class="single-image">
                                                    <img width="600" height="800" src="assets/img/products/big1-2.webp" class="img-fluid" alt="">
                                                </div>
                                                <div class="single-image">
                                                    <img width="600" height="800" src="assets/img/products/big1-3.webp" class="img-fluid" alt="">
                                                </div>
                                                <div class="single-image">
                                                    <img width="600" height="800" src="assets/img/products/big1-4.webp" class="img-fluid" alt="">
                                                </div>
                                                <div class="single-image">
                                                    <img width="600" height="800" src="assets/img/products/big1-5.webp" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="product-details-small-image-slider-wrapper product-details-small-image-slider-wrapper--horizontal-space ht-slick-slider"
                                            data-slick-setting='{
            "slidesToShow": 4,
            "slidesToScroll": 1,
            "arrows": true,
            "autoplay": false,
            "autoplaySpeed": 5000,
            "speed": 500,
            "asNavFor": ".product-details-big-image-slider-wrapper-quick",
            "focusOnSelect": true,
            "centerMode": false,
            "prevArrow": {"buttonClass": "slick-prev", "iconClass": "fa fa-angle-left" },
            "nextArrow": {"buttonClass": "slick-next", "iconClass": "fa fa-angle-right" }
        }' data-slick-responsive='[
            {"breakpoint":1501, "settings": {"slidesToShow": 3, "arrows": false} },
            {"breakpoint":1199, "settings": {"slidesToShow": 3, "arrows": false} },
            {"breakpoint":991, "settings": {"slidesToShow": 5, "arrows": false, "slidesToScroll": 1} },
            {"breakpoint":767, "settings": {"slidesToShow": 3, "arrows": false, "slidesToScroll": 1} },
            {"breakpoint":575, "settings": {"slidesToShow": 3, "arrows": false, "slidesToScroll": 1} },
            {"breakpoint":479, "settings": {"slidesToShow": 2, "arrows": false, "slidesToScroll": 1} }
        ]'>
                                            <div class="single-image">
                                                <img width="600" height="800" src="assets/img/products/big1-1.webp" class="img-fluid" alt="">
                                            </div>
                                            <div class="single-image">
                                                <img width="600" height="800" src="assets/img/products/big1-2.webp" class="img-fluid" alt="">
                                            </div>
                                            <div class="single-image">
                                                <img width="600" height="800" src="assets/img/products/big1-3.webp" class="img-fluid" alt="">
                                            </div>
                                            <div class="single-image">
                                                <img width="600" height="800" src="assets/img/products/big1-4.webp" class="img-fluid" alt="">
                                            </div>
                                            <div class="single-image">
                                                <img width="600" height="800" src="assets/img/products/big1-5.webp" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <!--=======  End of product details slider area  =======-->
                                </div>
                                <div class="col-xl-7 col-lg-6">
                                    <!--=======  single product content description  =======-->
                                    <div class="single-product-content-description">
                                        <p class="single-info">Brands <a href="shop-left-sidebar.html">Dolor</a> </p>
                                        <h4 class="product-title">Lorem ipsum dolor set amet decor</h4>
                                        <div class="product-rating">
                                            <span class="rating">
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star-outline"></i>
                                            </span>

                                            <span class="review-count"> <a href="#">(2 reviews)</a> | <a href="#">Write
                                                    A Review</a> </span>
                                        </div>

                                        <p class="single-grid-product__price"><span
                                                class="discounted-price">$100.00</span> <span
                                                class="main-price discounted">$120.00</span></p>

                                        <p class="single-info">Product Code: <span class="value">CODE123</span> </p>
                                        <p class="single-info">Reward Points: <span class="value">200</span> </p>
                                        <p class="single-info">Availability: <span class="value">In Stock</span> </p>

                                        <p class="product-description">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. At, delectus. Voluptates omnis distinctio vitae quo quia
                                            veniam minima dolorem hic necessitatibus pariatur, quae fuga similique optio
                                            laboriosam assumenda voluptatum aperiam.</p>

                                        <div class="product-actions product-actions--quick-view">
                                            <div class="quantity-selection">
                                                <label>Qty</label>
                                                <input type="number" value="1" min="1">
                                            </div>

                                            <div class="product-buttons">
                                                <a class="cart-btn" href="#"> <i class="ion-bag"></i> ADD TO CART</a>
                                                <span class="wishlist-compare-btn">
                                                    <a> <i class="ion-heart"></i></a>
                                                    <a> <i class="ion-android-options"></i></a>
                                                </span>
                                            </div>

                                        </div>


                                    </div>
                                    <!--=======  End of single product content description  =======-->
                                </div>
                            </div>
                        </div>
                        <!--=======  End of single product main content area  =======-->
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--====================  End of quick view  ====================-->
    <!-- scroll to top  -->
    <div id="scroll-top">
        <span>Back to top</span><i class="ion-chevron-right"></i><i class="ion-chevron-right"></i>
    </div>
    <!-- end of scroll to top -->
    <!--=============================================
    =            JS files        =
    =============================================-->

    <!-- Vendor JS -->
    <script src="{{asset('assets/js/vendors.js')}}"></script>

    <!-- Active JS -->
    <script src="{{asset('assets/js/active.js')}}"></script>

    <!--=====  End of JS files ======-->

</body>


<!-- Mirrored from htmldemo.net/eposi/eposi/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jul 2024 04:15:59 GMT -->
</html>