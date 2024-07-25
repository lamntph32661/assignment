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
                            <h2 class="breadcrumb-content__title">Shop</h2>
                            <ul class="breadcrumb-content__page-map">
                                <li><a href="index.html">Home</a></li>
                                <li class="active">Shop</li>
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

    <!--====================  shop page content area ====================-->
    <div class="page-content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  shop page wrapper  =======-->
                    <div class="page-wrapper">
                        <div class="page-content-wrapper">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!--=======  shop page header  =======-->
                                    <div class="shop-header">
                                        <div class="shop-header__left">
                                            <div class="grid-icons">
                                                <button data-target="grid three-column" data-tippy="3"
                                                    data-tippy-inertia="true" data-tippy-animation="fade"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-theme="roundborder" class="active three-column"></button>
                                                <button data-target="grid four-column" data-tippy="4"
                                                    data-tippy-inertia="true" data-tippy-animation="fade"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-theme="roundborder"
                                                    class="four-column d-none d-lg-block"></button>
                                                {{-- <button data-target="list" data-tippy="List" data-tippy-inertia="true"
                                                    data-tippy-animation="fade" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-theme="roundborder"
                                                    class="list-view"></button> --}}
                                            </div>

                                            <div class="shop-header__left__message">
                                                Showing 1 to 9 of 15 (2 Pages)
                                            </div>
                                        </div>

                                        <div class="shop-header__right">

                                            <div class="single-select-block d-inline-block">
                                                <span class="select-title">Show:</span>
                                                <select>
                                                    <option value="1">10</option>
                                                    <option value="2">20</option>
                                                    <option value="3">30</option>
                                                    <option value="4">40</option>
                                                </select>
                                            </div>

                                            <div class="single-select-block d-inline-block">
                                                <span class="select-title">Sort By:</span>
                                                <select class="pr-0">
                                                    <option value="1">Default</option>
                                                    <option value="2">Name (A-Z)</option>
                                                    <option value="3">Price (min - max)</option>
                                                    <option value="4">Color</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!--=======  End of shop page header  =======-->
                                </div>
                                <div class="col-lg-3 order-2 order-lg-1">
                                    <!--=======  page sidebar wrapper =======-->
                                    <div class="page-sidebar-wrapper">
                                        <!--=======  single sidebar widget  =======-->
                                        <div class="single-sidebar-widget">

                                            <h4 class="single-sidebar-widget__title">Categories</h4>
                                            <ul class="single-sidebar-widget__category-list">
                                                {{-- <li class="has-children"><a href="#" class="active">Accessories <span
                                                            class="counter">15</span></a>
                                                    <ul>
                                                        <li><a href="#">Brushes <span class="counter">3</span></a>
                                                        </li>
                                                        <li><a href="#">Mascara <span class="counter">5</span></a>
                                                        </li>
                                                        <li><a href="#">Eye Shadow <span class="counter">1</span></a>
                                                        </li>
                                                        <li><a href="#">Eye Brushes <span class="counter">7</span></a>
                                                        </li>
                                                    </ul>
                                                </li> --}}
                                                @foreach ($categories as $item)
                                                    <li><a href="#">{{$item->name}}<span class="counter">7</span></a></li>
                                                @endforeach
                                                
                                                

                                            </ul>
                                        </div>
                                        <!--=======  End of single sidebar widget  =======-->
                                        <!--=======  single sidebar widget  =======-->
                                        <div class="single-sidebar-widget">
                                            <div class="sidebar-sub-widget-wrapper">
                                                <div class="sidebar-sub-widget">
                                                    <h4
                                                        class="sidebar-sub-widget__title sidebar-sub-widget__title--price-title">
                                                        Fillter By Price</h4>
                                                    <div class="sidebar-price">
                                                        <div id="price-range" class="mb-10"></div>
                                                        <input type="text" id="price-amount" class="price-amount"
                                                            readonly>
                                                    </div>
                                                </div>
                                                <div class="sidebar-sub-widget">
                                                    <h4
                                                        class="sidebar-sub-widget__title sidebar-sub-widget__title--abs-icon">
                                                        Manufacturer</h4>
                                                    <ul
                                                        class="single-sidebar-widget__category-list single-sidebar-widget__category-list--abs-icon">
                                                        <li><a href="#">Lorem ipsum (7)</a></li>
                                                        <li><a href="#">Dolor (8) </a></li>
                                                        <li><a href="#">Cillium (10) </a></li>
                                                        <li><a href="#">Dolore (14) </a></li>
                                                        <li><a href="#">Lorem ipsum (7)</a></li>
                                                        <li><a href="#">Dolor (8) </a></li>
                                                        <li><a href="#">Cillium (10) </a></li>
                                                        <li><a href="#">Dolore (14) </a></li>
                                                    </ul>
                                                </div>
                                                <div class="sidebar-sub-widget">
                                                    <h4
                                                        class="sidebar-sub-widget__title sidebar-sub-widget__title--abs-icon">
                                                        Select By Color</h4>
                                                    <ul
                                                        class="single-sidebar-widget__category-list single-sidebar-widget__category-list--abs-icon">
                                                        <li><a href="#">Black (7)</a></li>
                                                        <li><a href="#">Blue (8) </a></li>
                                                        <li><a href="#">Yellow (10) </a></li>
                                                        <li><a href="#">Pink (14) </a></li>
                                                        <li><a href="#">Red (7)</a></li>
                                                        <li><a href="#">Cayan (8) </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!--=======  End of single sidebar widget  =======-->
                                        <!--=======  single sidebar widget  =======-->
                                        <div class="single-sidebar-widget">
                                            <h4 class="single-sidebar-widget__title">Popular Tags</h4>
                                            <ul class="single-sidebar-widget__tag-list">
                                                <li><a href="#">Car Seats</a></li>
                                                <li><a href="#">Chair</a></li>
                                                <li><a href="#">Engine Parts</a></li>
                                                <li><a href="#">Sofas</a></li>
                                                <li><a href="#">Sofas</a></li>
                                                <li><a href="#">Decor</a></li>
                                                <li><a href="#">Furniture</a></li>
                                                <li><a href="#">Chair</a></li>

                                            </ul>
                                        </div>
                                        <!--=======  End of single sidebar widget  =======-->
                                    </div>
                                    <!--=======  End of page sidebar wrapper  =======-->
                                </div>
                                <div class="col-lg-9 order-1 order-lg-2">
                                    <!--=======  shop page content  =======-->
                                    <div class="shop-page-content">

                                        <div class="row shop-product-wrap grid three-column">
                                            @foreach ($products as $item)
                                                <div class="col-12 col-lg-4 col-md-4 col-sm-6">
                                                    <!--=======  product grid view  =======-->
                                                    <div class="single-grid-product grid-view-product">
                                                        <div class="single-grid-product__image">
                                                            <div class="single-grid-product__label">
                                                                <span class="sale">-{{ $item->discount }}%</span>
                                                                <span class="new">New</span>
                                                            </div>
                                                            <a href="{{route('Detail',$item->id)}}">
                                                                <img style="width: 300px; height: 300px; object-fit:cover"
                                                                    src="{{ asset($item->image) }}" class="img-fluid"
                                                                    alt="" style="object-fit: cover">
                                                                <img style="width: 300px; height: 300px; object-fit:cover"
                                                                    src="{{ asset($item->image) }}" class="img-fluid"
                                                                    alt="" >
                                                            </a>
        
                                                            <div class="hover-icons">
                                                                <a href="javascript:void(0)"><i class="ion-bag"></i></a>
                                                                <a href="javascript:void(0)"><i class="ion-heart"></i></a>
                                                                <a href="javascript:void(0)"><i
                                                                        class="ion-android-options"></i></a>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view-modal-container"><i
                                                                        class="ion-android-open"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="single-grid-product__content">
                                                            <div class="single-grid-product__category-rating">
                                                                <span class="category"><a
                                                                        href="shop-left-sidebar.html">{{ $item->category_name }}</a></span>
                                                                <span class="rating">
                                                                    <i class="ion-android-star active"></i>
                                                                    <i class="ion-android-star active"></i>
                                                                    <i class="ion-android-star active"></i>
                                                                    <i class="ion-android-star active"></i>
                                                                    <i class="ion-android-star-outline"></i>
                                                                </span>
                                                            </div>
        
                                                            <h3 class="single-grid-product__title"> <a
                                                                    href="single-product.html">{{ $item->name }}</a></h3>
                                                            <p class="single-grid-product__price"><span
                                                                    class="discounted-price">${{ round($item->price*((100-$item->discount)/100),2) }}</span> <span
                                                                    class="main-price discounted">${{ $item->price }}</span></p>
                                                        </div>
                                                    </div>
                                                    <!--=======  End of product grid view  =======-->
                                                    <!--=======  list view product  =======-->
                                                    <div
                                                        class="single-grid-product single-grid-product--list-view list-view-product">
                                                        <div
                                                            class="single-grid-product__image single-grid-product--list-view__image">
                                                            <div class="single-grid-product__label">
                                                                <span class="sale">-20%</span>
                                                                <span class="new">New</span>
                                                            </div>
                                                            <a href="single-product.html">
                                                                <img width="600" height="800"
                                                                    src="assets/img/products/1-600x800.webp"
                                                                    class="img-fluid" alt="">
                                                                <img width="600" height="800"
                                                                    src="assets/img/products/1_1-600x800.webp"
                                                                    class="img-fluid" alt="">
                                                            </a>

                                                            <div class="hover-icons">
                                                                <a href="javascript:void(0)"><i class="ion-bag"></i></a>
                                                                <a href="javascript:void(0)"><i class="ion-heart"></i></a>
                                                                <a href="javascript:void(0)"><i
                                                                        class="ion-android-options"></i></a>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view-modal-container"><i
                                                                        class="ion-android-open"></i></a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="single-grid-product__content single-grid-product--list-view__content">

                                                            <div class="category"><a
                                                                    href="shop-left-sidebar.html">Decor</a>
                                                            </div>
                                                            <h3
                                                                class="single-grid-product__title single-grid-product--list-view__title">
                                                                <a href="single-product.html">Cillum dolore lorem ipsum
                                                                    decoration item</a>
                                                            </h3>
                                                            <div class="rating">
                                                                <i class="ion-android-star active"></i>
                                                                <i class="ion-android-star active"></i>
                                                                <i class="ion-android-star active"></i>
                                                                <i class="ion-android-star active"></i>
                                                                <i class="ion-android-star-outline"></i>
                                                            </div>
                                                            <p
                                                                class="single-grid-product__price single-grid-product--list-view__price">
                                                                <span class="discounted-price">$100.00</span> <span
                                                                    class="main-price discounted">$120.00</span>
                                                            </p>
                                                            <p class="single-grid-product--list-view__product-short-desc">
                                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                                Voluptate cupiditate provident praesentium, esse omnis quis!
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!--=======  End of list view product  =======-->
                                                </div>
                                            @endforeach

                                            
                                        </div>
                                        {{$products->links('pagination::bootstrap-5')}}
                                    </div>

                                    <!--=======  pagination area =======-->
                                    
                                    <!--=======  End of pagination area  =======-->
                                    <!--=======  End of shop page content  =======-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--=======  End of shop page wrapper  =======-->
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of shop page content area  ====================-->

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
