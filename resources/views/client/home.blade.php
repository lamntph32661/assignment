@extends('client.layouts.default')
@section('content')
    <div class="hero-slider-area section-space">
        <!--=======  hero slider wrapper  =======-->

        <div class="hero-slider-wrapper">
            <div class="ht-slick-slider"
                data-slick-setting='{
        "slidesToShow": 1,
        "slidesToScroll": 1,
        "arrows": true,
        "dots": true,
        "autoplay": true,
        "autoplaySpeed": 5000,
        "speed": 1000,
        "fade": true,
        "infinite": true,
        "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ion-chevron-left" },
        "nextArrow": {"buttonClass": "slick-next", "iconClass": "ion-chevron-right" }
    }'
                data-slick-responsive='[
        {"breakpoint":1501, "settings": {"slidesToShow": 1} },
        {"breakpoint":1199, "settings": {"slidesToShow": 1, "arrows": false} },
        {"breakpoint":991, "settings": {"slidesToShow": 1, "arrows": false} },
        {"breakpoint":767, "settings": {"slidesToShow": 1, "arrows": false} },
        {"breakpoint":575, "settings": {"slidesToShow": 1, "arrows": false} },
        {"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false} }
    ]'>

                <!--=======  single slider item  =======-->

                <div class="single-slider-item">
                    <div class="hero-slider-item-wrapper hero-slider-item-wrapper--fullwidth hero-slider-bg-4">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="hero-slider-content hero-slider-content--left-space">
                                        <p class="slider-title slider-title--big-light">New Arrivals</p>
                                        <p class="slider-title slider-title--big-light">Led Desk Lamp Brand</p>
                                        <p class="slider-title slider-title--small">Next generation LED lamp. A
                                            multi-function LED lamp that is environmentally friendly and soft on the
                                            eyes.</p>
                                        <a class="hero-slider-button" href="shop-left-sidebar.html"> <i
                                                class="ion-ios-plus-empty"></i> SHOP NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--=======  End of single slider item  =======-->

                <!--=======  single slider item  =======-->

                <div class="single-slider-item">
                    <div class="hero-slider-item-wrapper hero-slider-item-wrapper--fullwidth hero-slider-bg-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="hero-slider-content hero-slider-content--left-space">
                                        <p class="slider-title slider-title--big-light">AMAZING PRODUCT!</p>
                                        <p class="slider-title slider-title--big-light">DECOR CHAIR</p>
                                        <p class="slider-title slider-title--small">An elegant selection of chairs
                                            combining comfort & practicality. Providing the perfect solution for large &
                                            small scale exhibition seating.</p>
                                        <a class="hero-slider-button" href="shop-left-sidebar.html"> <i
                                                class="ion-ios-plus-empty"></i> SHOP NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--=======  End of single slider item  =======-->

                <!--=======  single slider item  =======-->

                <div class="single-slider-item">
                    <div class="hero-slider-item-wrapper hero-slider-item-wrapper--fullwidth hero-slider-bg-6">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="hero-slider-content hero-slider-content--left-space">
                                        <p class="slider-title slider-title--big-light">New Arrivals</p>
                                        <p class="slider-title slider-title--big-light">Decorative Vases</p>
                                        <p class="slider-title slider-title--small">The materials used in these
                                            exquisite accessories are of the same high quality marbles and granites that
                                            are found.</p>
                                        <a class="theme-button hero-slider-button" href="shop-left-sidebar.html"> <i
                                                class="ion-ios-plus-empty"></i> SHOP NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--=======  End of single slider item  =======-->

            </div>
        </div>

        <!--=======  End of hero slider wrapper  =======-->
    </div>

    <!--====================  End of hero slider area  ====================-->
    <!--====================  category area ====================-->
    <div class="category-area section-space">
        <div class="container wide">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  category wrapper  =======-->
                    <div class="category-wrapper">
                        <div class="row row-10 masonry-category-layout--style2">
                            <div class="col grid-item2">
                                <!--=======  single category item  =======-->
                                <div class="single-category-item">
                                    <div class="single-category-item__image">
                                        <a href="shop-left-sidebar.html">
                                            <img width="375" height="550"
                                                src="assets/img/category/img1-top-eposi1.webp" class="img-fluid"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="single-category-item__content">
                                        <h3 class="title">Storage</h3>
                                        <a href="shop-left-sidebar.html">Shop Now <i
                                                class="ion-android-arrow-dropright-circle"></i></a>
                                    </div>
                                </div>
                                <!--=======  End of single category item  =======-->
                            </div>
                            <div class="col grid-item2--width2">
                                <!--=======  single category item  =======-->
                                <div class="single-category-item">
                                    <div class="single-category-item__image">
                                        <a href="shop-left-sidebar.html">
                                            <img width="709" height="242"
                                                src="assets/img/category/img2-top-eposi2.webp" class="img-fluid"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="single-category-item__content">
                                        <h3 class="title">Decor Vases</h3>
                                        <a href="shop-left-sidebar.html">Shop Now <i
                                                class="ion-android-arrow-dropright-circle"></i></a>
                                    </div>
                                </div>
                                <!--=======  End of single category item  =======-->
                            </div>
                            <div class="col grid-item2">
                                <!--=======  single category item  =======-->
                                <div class="single-category-item">
                                    <div class="single-category-item__image">
                                        <a href="shop-left-sidebar.html">
                                            <img width="380" height="265"
                                                src="assets/img/category/img2-top-eposi1.webp" class="img-fluid"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="single-category-item__content">
                                        <h3 class="title">Lighting</h3>
                                        <a href="shop-left-sidebar.html">Shop Now <i
                                                class="ion-android-arrow-dropright-circle"></i></a>
                                    </div>
                                </div>
                                <!--=======  End of single category item  =======-->
                            </div>
                            <div class="col grid-item2">
                                <!--=======  single category item  =======-->
                                <div class="single-category-item">
                                    <div class="single-category-item__image">
                                        <a href="shop-left-sidebar.html">
                                            <img src="assets/img/category/img3-top-eposi1.webp" class="img-fluid"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="single-category-item__content">
                                        <h3 class="title">Decoration</h3>
                                        <a href="shop-left-sidebar.html">Shop Now <i
                                                class="ion-android-arrow-dropright-circle"></i></a>
                                    </div>
                                </div>
                                <!--=======  End of single category item  =======-->
                            </div>
                            <div class="col grid-item2--width2">
                                <!--=======  single category item  =======-->
                                <div class="single-category-item">
                                    <div class="single-category-item__image">
                                        <a href="shop-left-sidebar.html">
                                            <img width="709" height="242"
                                                src="assets/img/category/img5-top-eposi2.webp" class="img-fluid"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="single-category-item__content">
                                        <h3 class="title">Accessories</h3>
                                        <a href="shop-left-sidebar.html">Shop Now <i
                                                class="ion-android-arrow-dropright-circle"></i></a>
                                    </div>
                                </div>
                                <!--=======  End of single category item  =======-->
                            </div>
                            <div class="col grid-item2">
                                <!--=======  single category item  =======-->
                                <div class="single-category-item">
                                    <div class="single-category-item__image">
                                        <a href="shop-left-sidebar.html">
                                            <img width="380" height="265"
                                                src="assets/img/category/img4-top-eposi1.webp" class="img-fluid"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="single-category-item__content">
                                        <h3 class="title">Living Room</h3>
                                        <a href="shop-left-sidebar.html">Shop Now <i
                                                class="ion-android-arrow-dropright-circle"></i></a>
                                    </div>
                                </div>
                                <!--=======  End of single category item  =======-->
                            </div>
                        </div>
                    </div>
                    <!--=======  End of category wrapper  =======-->
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of category area  ====================-->
    <!--====================  single row slider tab ====================-->
    <div class="single-row-slider-tab-area section-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  section title  =======-->
                    <div class="section-title-wrapper text-center section-space--half">
                        <h2 class="section-title">Our Products</h2>
                        <p class="section-subtitle">Mirum est notare quam littera gothica, quam nunc putamus parum
                            claram anteposuerit litterarum formas.</p>
                    </div>
                    <!--=======  End of section title  =======-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  tab slider wrapper  =======-->

                    <div class="tab-slider-wrapper">
                        <!--=======  tab product navigation  =======-->

                        <div class="tab-product-navigation">
                            <div class="nav nav-tabs justify-content-center" id="nav-tab2" role="tablist">
                                <a class="nav-item nav-link active" id="product-tab-1" data-bs-toggle="tab"
                                    href="#product-series-1" role="tab" aria-selected="true">Decoration</a>
                                <a class="nav-item nav-link" id="product-tab-2" data-bs-toggle="tab"
                                    href="#product-series-2" role="tab" aria-selected="false">Lighting</a>
                                <a class="nav-item nav-link" id="product-tab-3" data-bs-toggle="tab"
                                    href="#product-series-3" role="tab" aria-selected="false">Storage</a>
                                <a class="nav-item nav-link" id="product-tab-4" data-bs-toggle="tab"
                                    href="#product-series-4" role="tab" aria-selected="false">Living Room</a>
                            </div>
                        </div>

                        <!--=======  End of tab product navigation  =======-->

                        <!--=======  tab product content  =======-->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="product-series-1" role="tabpanel"
                                aria-labelledby="product-tab-1">
                                <!--=======  double row slider wrapper  =======-->
                                <div class="double-row-slider-wrapper">
                                    <div class="ht-slick-slider"
                                        data-slick-setting='{
                                "slidesToShow": 4,
                                "slidesToScroll": 1,
                                "arrows": true,
                                "autoplay": false,
                                "autoplaySpeed": 5000,
                                "speed": 1000,
                                "infinite": false,
                                "rows": 2,
                                "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ion-chevron-left" },
                                "nextArrow": {"buttonClass": "slick-next", "iconClass": "ion-chevron-right" }
                            }'
                                        data-slick-responsive='[
                                {"breakpoint":1501, "settings": {"slidesToShow": 4} },
                                {"breakpoint":1199, "settings": {"slidesToShow": 4, "arrows": false} },
                                {"breakpoint":991, "settings": {"slidesToShow": 3, "arrows": false} },
                                {"breakpoint":767, "settings": {"slidesToShow": 2, "arrows": false} },
                                {"breakpoint":575, "settings": {"slidesToShow": 2, "arrows": false} },
                                {"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false} }
                            ]'>

                                        
                                            <!--=======  single grid product  =======-->

                                            @foreach ($products as $item)
                                            <div class="col">
                                                <div class="single-grid-product">
                                                    <div class="single-grid-product__image">
                                                        <div class="single-grid-product__label">
                                                            <span class="sale">-{{ $item->discount }}%</span>
                                                            <span class="new">New</span>
                                                        </div>
                                                        <a href="{{route('Detail',$item->id)}}">
                                                            <img style="width: 300px; height: 400px; object-fit:cover"
                                                                src="{{ asset($item->image) }}" class="img-fluid"
                                                                alt="" style="object-fit: cover">
                                                            <img style="width: 300px; height: 400px; object-fit:cover"
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
                                                                class="discounted-price">${{ $item->price*((100-$item->discount)/100) }}</span> <span
                                                                class="main-price discounted">${{ $item->price }}</span></p>
                                                    </div>
                                                </div></div>
                                            @endforeach


                                            <!--=======  End of single grid product  =======-->
                                        

                                        {{-- <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">
                                                    <div class="single-grid-product__label">
                                                        <span class="sale">-20%</span>
                                                    </div>
                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/2-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/2_1-600x800.webp" class="img-fluid"
                                                            alt="">
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
                                                                href="shop-left-sidebar.html">Decor</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">lorem ipsum cillium dolore
                                                            decoration item</a></h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="discounted-price">$20.00</span> <span
                                                            class="main-price discounted">$40.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">
                                                    <div class="single-grid-product__label">
                                                        <span class="new">New</span>
                                                    </div>
                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/3-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/3_1-600x800.webp" class="img-fluid"
                                                            alt="">
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
                                                                href="shop-left-sidebar.html">Vase</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">lorem ipsum decoration item</a>
                                                    </h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="discounted-price">$40.00</span> <span
                                                            class="main-price discounted">$60.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">

                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/4-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/4_1-600x800.webp" class="img-fluid"
                                                            alt="">
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
                                                                href="shop-left-sidebar.html">Furniture</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">Cillum dolore lorem ipsum
                                                            decoration item</a></h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="main-price">$120.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">
                                                    <div class="single-grid-product__label">
                                                        <span class="sale">-20%</span>
                                                        <span class="new">New</span>
                                                    </div>
                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/5-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/5_1-600x800.webp" class="img-fluid"
                                                            alt="">
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
                                                                href="shop-left-sidebar.html">Decor</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">Cillum dolore lorem ipsum
                                                            decoration item</a></h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="discounted-price">$80.00</span> <span
                                                            class="main-price discounted">$100.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">
                                                    <div class="single-grid-product__label">
                                                        <span class="sale">-20%</span>
                                                    </div>
                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/6-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/6_1-600x800.webp" class="img-fluid"
                                                            alt="">
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
                                                                href="shop-left-sidebar.html">Decor</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">Cillum lorem ipsum ipsum
                                                            furniture item</a></h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="discounted-price">$80.00</span> <span
                                                            class="main-price discounted">$100.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">

                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/7-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/7_1-600x800.webp" class="img-fluid"
                                                            alt="">
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
                                                                href="shop-left-sidebar.html">Furniture</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">lorem ipsum decoration item</a>
                                                    </h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="discounted-price">$180.00</span> <span
                                                            class="main-price discounted">$200.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">
                                                    <div class="single-grid-product__label">
                                                        <span class="sale">-20%</span>
                                                        <span class="new">New</span>
                                                    </div>
                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/8-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/8_1-600x800.webp" class="img-fluid"
                                                            alt="">
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
                                                                href="shop-left-sidebar.html">Decor</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">Cillum dolore ipsum lorem
                                                            decoration item</a></h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="discounted-price">$50.00</span> <span
                                                            class="main-price discounted">$80.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">
                                                    <div class="single-grid-product__label">
                                                        <span class="sale">-20%</span>
                                                        <span class="new">New</span>
                                                    </div>
                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/9-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/9_1-600x800.webp" class="img-fluid"
                                                            alt="">
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
                                                                href="shop-left-sidebar.html">Decor</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">Cillum dolore item</a></h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="discounted-price">$80.00</span> <span
                                                            class="main-price discounted">$100.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">
                                                    <div class="single-grid-product__label">
                                                        <span class="sale">-20%</span>
                                                        <span class="new">New</span>
                                                    </div>
                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/10-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/10_1-600x800.webp" class="img-fluid"
                                                            alt="">
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
                                                                href="shop-left-sidebar.html">Decor</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">Cillum dolore lorem ipsum
                                                            decoration item</a></h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="discounted-price">$80.00</span> <span
                                                            class="main-price discounted">$100.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div> --}}

                                    </div>
                                </div>
                                <!--=======  End of double row slider wrapper  =======-->
                            </div>
                            <div class="tab-pane fade" id="product-series-2" role="tabpanel"
                                aria-labelledby="product-tab-2">
                                <!--=======  double row slider wrapper  =======-->
                                <div class="double-row-slider-wrapper">
                                    <div class="ht-slick-slider"
                                        data-slick-setting='{
                                "slidesToShow": 4,
                                "slidesToScroll": 1,
                                "arrows": true,
                                "autoplay": false,
                                "autoplaySpeed": 5000,
                                "speed": 1000,
                                "infinite": false,
                                "rows": 2,
                                "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ion-chevron-left" },
                                "nextArrow": {"buttonClass": "slick-next", "iconClass": "ion-chevron-right" }
                            }'
                                        data-slick-responsive='[
                                {"breakpoint":1501, "settings": {"slidesToShow": 4} },
                                {"breakpoint":1199, "settings": {"slidesToShow": 4, "arrows": false} },
                                {"breakpoint":991, "settings": {"slidesToShow": 3, "arrows": false} },
                                {"breakpoint":767, "settings": {"slidesToShow": 2, "arrows": false} },
                                {"breakpoint":575, "settings": {"slidesToShow": 2, "arrows": false} },
                                {"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false} }
                            ]'>

                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">
                                                    <div class="single-grid-product__label">
                                                        <span class="sale">-20%</span>
                                                        <span class="new">New</span>
                                                    </div>
                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/8-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/8_1-600x800.webp" class="img-fluid"
                                                            alt="">
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
                                                                href="shop-left-sidebar.html">Decor</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">Cillum decoration item</a></h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="discounted-price">$50.00</span> <span
                                                            class="main-price discounted">$80.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">
                                                    <div class="single-grid-product__label">
                                                        <span class="sale">-20%</span>
                                                        <span class="new">New</span>
                                                    </div>
                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/9-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/9_1-600x800.webp" class="img-fluid"
                                                            alt="">
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
                                                                href="shop-left-sidebar.html">Decor</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">Cillum dolore lorem ipsum dolore
                                                            item</a></h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="discounted-price">$80.00</span> <span
                                                            class="main-price discounted">$100.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">
                                                    <div class="single-grid-product__label">
                                                        <span class="sale">-20%</span>
                                                        <span class="new">New</span>
                                                    </div>
                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/10-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/10_1-600x800.webp" class="img-fluid"
                                                            alt="">
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
                                                                href="shop-left-sidebar.html">Decor</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">Cillum dolore lorem ipsum
                                                            decoration item</a></h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="discounted-price">$80.00</span> <span
                                                            class="main-price discounted">$100.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">
                                                    <div class="single-grid-product__label">
                                                        <span class="sale">-20%</span>
                                                        <span class="new">New</span>
                                                    </div>
                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/1-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/1_1-600x800.webp" class="img-fluid"
                                                            alt="">
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
                                                                href="shop-left-sidebar.html">Decor</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">Cillum dolore lorem ipsum
                                                            decoration item</a></h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="discounted-price">$100.00</span> <span
                                                            class="main-price discounted">$120.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">
                                                    <div class="single-grid-product__label">
                                                        <span class="sale">-20%</span>
                                                    </div>
                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/2-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/2_1-600x800.webp" class="img-fluid"
                                                            alt="">
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
                                                                href="shop-left-sidebar.html">Decor</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">lorem ipsum decoration item</a>
                                                    </h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="discounted-price">$20.00</span> <span
                                                            class="main-price discounted">$40.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">
                                                    <div class="single-grid-product__label">
                                                        <span class="new">New</span>
                                                    </div>
                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/3-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/3_1-600x800.webp" class="img-fluid"
                                                            alt="">
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
                                                                href="shop-left-sidebar.html">Vase</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">lorem ipsum cillium dolore
                                                            decoration item</a></h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="discounted-price">$40.00</span> <span
                                                            class="main-price discounted">$60.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">

                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/4-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/4_1-600x800.webp" class="img-fluid"
                                                            alt="">
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
                                                                href="shop-left-sidebar.html">Furniture</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">Cillum dolore decoration item</a>
                                                    </h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="main-price">$120.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">
                                                    <div class="single-grid-product__label">
                                                        <span class="sale">-20%</span>
                                                        <span class="new">New</span>
                                                    </div>
                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/5-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/5_1-600x800.webp" class="img-fluid"
                                                            alt="">
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
                                                                href="shop-left-sidebar.html">Decor</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">Cillum dolore lorem ipsum
                                                            decoration item</a></h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="discounted-price">$80.00</span> <span
                                                            class="main-price discounted">$100.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">
                                                    <div class="single-grid-product__label">
                                                        <span class="sale">-20%</span>
                                                    </div>
                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/6-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/6_1-600x800.webp" class="img-fluid"
                                                            alt="">
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
                                                                href="shop-left-sidebar.html">Decor</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">Cillum ipsum furniture item</a>
                                                    </h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="discounted-price">$80.00</span> <span
                                                            class="main-price discounted">$100.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">

                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/7-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/7_1-600x800.webp" class="img-fluid"
                                                            alt="">
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
                                                                href="shop-left-sidebar.html">Furniture</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">lorem ipsum decoration item
                                                            cillium ipsum</a></h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="discounted-price">$180.00</span> <span
                                                            class="main-price discounted">$200.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>

                                    </div>
                                </div>
                                <!--=======  End of double row slider wrapper  =======-->
                            </div>
                            <div class="tab-pane fade" id="product-series-3" role="tabpanel"
                                aria-labelledby="product-tab-3">
                                <!--=======  double row slider wrapper  =======-->
                                <div class="double-row-slider-wrapper">
                                    <div class="ht-slick-slider"
                                        data-slick-setting='{
                                "slidesToShow": 4,
                                "slidesToScroll": 1,
                                "arrows": true,
                                "autoplay": false,
                                "autoplaySpeed": 5000,
                                "speed": 1000,
                                "infinite": false,
                                "rows": 2,
                                "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ion-chevron-left" },
                                "nextArrow": {"buttonClass": "slick-next", "iconClass": "ion-chevron-right" }
                            }'
                                        data-slick-responsive='[
                                {"breakpoint":1501, "settings": {"slidesToShow": 4} },
                                {"breakpoint":1199, "settings": {"slidesToShow": 4, "arrows": false} },
                                {"breakpoint":991, "settings": {"slidesToShow": 3, "arrows": false} },
                                {"breakpoint":767, "settings": {"slidesToShow": 2, "arrows": false} },
                                {"breakpoint":575, "settings": {"slidesToShow": 2, "arrows": false} },
                                {"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false} }
                            ]'>

                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">
                                                    <div class="single-grid-product__label">
                                                        <span class="sale">-20%</span>
                                                        <span class="new">New</span>
                                                    </div>
                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/5-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/5_1-600x800.webp" class="img-fluid"
                                                            alt="">
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
                                                                href="shop-left-sidebar.html">Decor</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">Cillum dolore lorem ipsum
                                                            decoration item</a></h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="discounted-price">$80.00</span> <span
                                                            class="main-price discounted">$100.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">
                                                    <div class="single-grid-product__label">
                                                        <span class="sale">-20%</span>
                                                    </div>
                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/6-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/6_1-600x800.webp" class="img-fluid"
                                                            alt="">
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
                                                                href="shop-left-sidebar.html">Decor</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">Cillum lorem dolore ipsum
                                                            furniture item</a></h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="discounted-price">$80.00</span> <span
                                                            class="main-price discounted">$100.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">

                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/7-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/7_1-600x800.webp" class="img-fluid"
                                                            alt="">
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
                                                                href="shop-left-sidebar.html">Furniture</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">lorem ipsum decoration item</a>
                                                    </h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="discounted-price">$180.00</span> <span
                                                            class="main-price discounted">$200.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">
                                                    <div class="single-grid-product__label">
                                                        <span class="sale">-20%</span>
                                                        <span class="new">New</span>
                                                    </div>
                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/8-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/8_1-600x800.webp" class="img-fluid"
                                                            alt="">
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
                                                                href="shop-left-sidebar.html">Decor</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">Cillum lorem ipsum dolore
                                                            decoration item</a></h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="discounted-price">$50.00</span> <span
                                                            class="main-price discounted">$80.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">
                                                    <div class="single-grid-product__label">
                                                        <span class="sale">-20%</span>
                                                        <span class="new">New</span>
                                                    </div>
                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/9-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/9_1-600x800.webp" class="img-fluid"
                                                            alt="">
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
                                                                href="shop-left-sidebar.html">Decor</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">Cillum dolore item</a></h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="discounted-price">$80.00</span> <span
                                                            class="main-price discounted">$100.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">
                                                    <div class="single-grid-product__label">
                                                        <span class="sale">-20%</span>
                                                        <span class="new">New</span>
                                                    </div>
                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/1-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/1_1-600x800.webp" class="img-fluid"
                                                            alt="">
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
                                                                href="shop-left-sidebar.html">Decor</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">Cillum dolore lorem ipsum
                                                            decoration item</a></h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="discounted-price">$100.00</span> <span
                                                            class="main-price discounted">$120.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">
                                                    <div class="single-grid-product__label">
                                                        <span class="sale">-20%</span>
                                                    </div>
                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/2-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/2_1-600x800.webp" class="img-fluid"
                                                            alt="">
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
                                                                href="shop-left-sidebar.html">Decor</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">lorem ipsum decoration item</a>
                                                    </h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="discounted-price">$20.00</span> <span
                                                            class="main-price discounted">$40.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">
                                                    <div class="single-grid-product__label">
                                                        <span class="new">New</span>
                                                    </div>
                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/3-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/3_1-600x800.webp" class="img-fluid"
                                                            alt="">
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
                                                                href="shop-left-sidebar.html">Vase</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">lorem ipsum cilium dolore
                                                            decoration item</a></h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="discounted-price">$40.00</span> <span
                                                            class="main-price discounted">$60.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">

                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/4-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/4_1-600x800.webp" class="img-fluid"
                                                            alt="">
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
                                                                href="shop-left-sidebar.html">Furniture</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">Cillum dolore decoration item</a>
                                                    </h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="main-price">$120.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">
                                                    <div class="single-grid-product__label">
                                                        <span class="sale">-20%</span>
                                                        <span class="new">New</span>
                                                    </div>
                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/10-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/10_1-600x800.webp"
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
                                                <div class="single-grid-product__content">
                                                    <div class="single-grid-product__category-rating">
                                                        <span class="category"><a
                                                                href="shop-left-sidebar.html">Decor</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">Cillum dolore lorem ipsum
                                                            decoration item</a></h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="discounted-price">$80.00</span> <span
                                                            class="main-price discounted">$100.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>

                                    </div>
                                </div>
                                <!--=======  End of double row slider wrapper  =======-->
                            </div>
                            <div class="tab-pane fade" id="product-series-4" role="tabpanel"
                                aria-labelledby="product-tab-4">
                                <!--=======  double row slider wrapper  =======-->
                                <div class="double-row-slider-wrapper">
                                    <div class="ht-slick-slider"
                                        data-slick-setting='{
                                "slidesToShow": 4,
                                "slidesToScroll": 1,
                                "arrows": true,
                                "autoplay": false,
                                "autoplaySpeed": 5000,
                                "speed": 1000,
                                "infinite": false,
                                "rows": 2,
                                "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ion-chevron-left" },
                                "nextArrow": {"buttonClass": "slick-next", "iconClass": "ion-chevron-right" }
                            }'
                                        data-slick-responsive='[
                                {"breakpoint":1501, "settings": {"slidesToShow": 4} },
                                {"breakpoint":1199, "settings": {"slidesToShow": 4, "arrows": false} },
                                {"breakpoint":991, "settings": {"slidesToShow": 3, "arrows": false} },
                                {"breakpoint":767, "settings": {"slidesToShow": 2, "arrows": false} },
                                {"breakpoint":575, "settings": {"slidesToShow": 2, "arrows": false} },
                                {"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false} }
                            ]'>

                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">
                                                    <div class="single-grid-product__label">
                                                        <span class="sale">-20%</span>
                                                        <span class="new">New</span>
                                                    </div>
                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/1-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/1_1-600x800.webp" class="img-fluid"
                                                            alt="">
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
                                                                href="shop-left-sidebar.html">Decor</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">Cillum dolore lorem ipsum
                                                            decoration item</a></h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="discounted-price">$100.00</span> <span
                                                            class="main-price discounted">$120.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">
                                                    <div class="single-grid-product__label">
                                                        <span class="sale">-20%</span>
                                                    </div>
                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/2-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/2_1-600x800.webp" class="img-fluid"
                                                            alt="">
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
                                                                href="shop-left-sidebar.html">Decor</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">lorem ipsum cillium dolore
                                                            decoration item</a></h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="discounted-price">$20.00</span> <span
                                                            class="main-price discounted">$40.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">
                                                    <div class="single-grid-product__label">
                                                        <span class="new">New</span>
                                                    </div>
                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/3-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/3_1-600x800.webp" class="img-fluid"
                                                            alt="">
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
                                                                href="shop-left-sidebar.html">Vase</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">lorem ipsum decoration item</a>
                                                    </h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="discounted-price">$40.00</span> <span
                                                            class="main-price discounted">$60.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">

                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/4-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/4_1-600x800.webp" class="img-fluid"
                                                            alt="">
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
                                                                href="shop-left-sidebar.html">Furniture</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">Cillum dolore lorem ipsum
                                                            decoration item</a></h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="main-price">$120.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">
                                                    <div class="single-grid-product__label">
                                                        <span class="sale">-20%</span>
                                                        <span class="new">New</span>
                                                    </div>
                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/5-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/5_1-600x800.webp" class="img-fluid"
                                                            alt="">
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
                                                                href="shop-left-sidebar.html">Decor</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">Cillum dolore lorem ipsum
                                                            decoration item</a></h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="discounted-price">$80.00</span> <span
                                                            class="main-price discounted">$100.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">
                                                    <div class="single-grid-product__label">
                                                        <span class="sale">-20%</span>
                                                    </div>
                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/6-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/6_1-600x800.webp" class="img-fluid"
                                                            alt="">
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
                                                                href="shop-left-sidebar.html">Decor</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">Cillum dolore lorem ipsyum ipsum
                                                            furniture item</a></h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="discounted-price">$80.00</span> <span
                                                            class="main-price discounted">$100.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">

                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/7-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/7_1-600x800.webp" class="img-fluid"
                                                            alt="">
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
                                                                href="shop-left-sidebar.html">Furniture</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">lorem ipsum decoration item</a>
                                                    </h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="discounted-price">$180.00</span> <span
                                                            class="main-price discounted">$200.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">
                                                    <div class="single-grid-product__label">
                                                        <span class="sale">-20%</span>
                                                        <span class="new">New</span>
                                                    </div>
                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/8-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/8_1-600x800.webp" class="img-fluid"
                                                            alt="">
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
                                                                href="shop-left-sidebar.html">Decor</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">Cillum dolore lorem ipsum
                                                            decoration item</a></h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="discounted-price">$50.00</span> <span
                                                            class="main-price discounted">$80.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">
                                                    <div class="single-grid-product__label">
                                                        <span class="sale">-20%</span>
                                                        <span class="new">New</span>
                                                    </div>
                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/9-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/9_1-600x800.webp" class="img-fluid"
                                                            alt="">
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
                                                                href="shop-left-sidebar.html">Decor</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">Cillum dolore item</a></h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="discounted-price">$80.00</span> <span
                                                            class="main-price discounted">$100.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">
                                                    <div class="single-grid-product__label">
                                                        <span class="sale">-20%</span>
                                                        <span class="new">New</span>
                                                    </div>
                                                    <a href="single-product.html">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/10-600x800.webp" class="img-fluid"
                                                            alt="">
                                                        <img width="600" height="800"
                                                            src="assets/img/products/10_1-600x800.webp"
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
                                                <div class="single-grid-product__content">
                                                    <div class="single-grid-product__category-rating">
                                                        <span class="category"><a
                                                                href="shop-left-sidebar.html">Decor</a></span>
                                                        <span class="rating">
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star active"></i>
                                                            <i class="ion-android-star-outline"></i>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title"> <a
                                                            href="single-product.html">Cillum dolore lorem ipsum
                                                            decoration item</a></h3>
                                                    <p class="single-grid-product__price"><span
                                                            class="discounted-price">$80.00</span> <span
                                                            class="main-price discounted">$100.00</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>

                                    </div>
                                </div>
                                <!--=======  End of double row slider wrapper  =======-->
                            </div>
                        </div>
                        <!--=======  End of tab product content  =======-->
                    </div>

                    <!--=======  End of tab slider wrapper  =======-->
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of single row slider tab  ====================-->
    <!--====================  testimonial area ====================-->
    <div class="testimonial-area section-space">
        <div class="container wide">
            <div class="row">
                <div class="col-lg-12">
                    <div class="full-testimonial-wrapper testimonial-bg">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!--=======  testimonial wrapper  =======-->
                                    <div class="testimonial-wrapper section-space--inner">
                                        <div class="ht-slick-slider"
                                            data-slick-setting='{
                                    "slidesToShow": 1,
                                    "slidesToScroll": 1,
                                    "autoplay": false,
                                    "autoplaySpeed": 5000,
                                    "speed": 1000,
                                    "infinite": true,
                                    "arrows": true,
                                    "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ion-ios-arrow-left" },
                                    "nextArrow": {"buttonClass": "slick-next", "iconClass": "ion-ios-arrow-right" }
                                }'
                                            data-slick-responsive='[
                                    {"breakpoint":1501, "settings": {"slidesToShow": 1} },
                                    {"breakpoint":1199, "settings": {"slidesToShow": 1, "arrows": false} },
                                    {"breakpoint":991, "settings": {"slidesToShow": 1, "arrows": false} },
                                    {"breakpoint":767, "settings": {"slidesToShow": 1, "arrows": false} },
                                    {"breakpoint":575, "settings": {"slidesToShow": 1, "arrows": false} },
                                    {"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false} }
                                ]'>
                                            <!--=======  single testimonial item  =======-->
                                            <div class="single-testimonial-item row">
                                                <div class="col-lg-8 mx-auto">
                                                    <div class="single-testimonial-item__image">
                                                        <img width="72" height="72"
                                                            src="assets/img/testimonial/testimor1-72x72.webp"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                    <div class="single-testimonial-item__content">
                                                        <p class="testimonial-text"> Sed vel urna at dui iaculis
                                                            gravida. Maecenas pretium, velit vitae placerat faucibus,
                                                            velit quam facilisis elit, sit amet lacinia est est id
                                                            ligula. Duis feugiat quam non justo faucibus, in gravida
                                                            diam tempor. Nam viverra enim non ipsum ornare, condimentum
                                                            blandit diam mattis. Maecenas gravida mol..</p>
                                                        <img width="29" height="22"
                                                            src="assets/img/icons/icon_testimonials.webp"
                                                            alt="">
                                                        <p class="testimonial-author">Magdalena Valencia</p>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--=======  End of single testimonial item  =======-->
                                            <!--=======  single testimonial item  =======-->
                                            <div class="single-testimonial-item row">
                                                <div class="col-lg-8 mx-auto">
                                                    <div class="single-testimonial-item__image">
                                                        <img width="72" height="72"
                                                            src="assets/img/testimonial/testimor2-72x72.webp"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                    <div class="single-testimonial-item__content">
                                                        <p class="testimonial-text"> Sed vel urna at dui iaculis
                                                            gravida. Maecenas pretium, velit vitae placerat faucibus,
                                                            velit quam facilisis elit, sit amet lacinia est est id
                                                            ligula. Duis feugiat quam non justo faucibus, in gravida
                                                            diam tempor. Nam viverra enim non ipsum ornare, condimentum
                                                            blandit diam mattis. Maecenas gravida mol..</p>
                                                        <img width="29" height="22"
                                                            src="assets/img/icons/icon_testimonials.webp"
                                                            alt="">
                                                        <p class="testimonial-author">Magdalena Valencia</p>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--=======  End of single testimonial item  =======-->
                                            <!--=======  single testimonial item  =======-->
                                            <div class="single-testimonial-item row">
                                                <div class="col-lg-8 mx-auto">
                                                    <div class="single-testimonial-item__image">
                                                        <img width="72" height="72"
                                                            src="assets/img/testimonial/testimor3-72x72.webp"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                    <div class="single-testimonial-item__content">
                                                        <p class="testimonial-text"> Sed vel urna at dui iaculis
                                                            gravida. Maecenas pretium, velit vitae placerat faucibus,
                                                            velit quam facilisis elit, sit amet lacinia est est id
                                                            ligula. Duis feugiat quam non justo faucibus, in gravida
                                                            diam tempor. Nam viverra enim non ipsum ornare, condimentum
                                                            blandit diam mattis. Maecenas gravida mol..</p>
                                                        <img width="29" height="22"
                                                            src="assets/img/icons/icon_testimonials.webp"
                                                            alt="">
                                                        <p class="testimonial-author">Magdalena Valencia</p>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--=======  End of single testimonial item  =======-->
                                        </div>

                                    </div>
                                    <!--=======  End of testimonial wrapper  =======-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of testimonial area  ====================-->
    <!--====================  single row slider ====================-->
    <div class="single-row-slider-area section-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  section title  =======-->
                    <div class="section-title-wrapper text-center section-space--half">
                        <h2 class="section-title">Latest Arrivals</h2>
                        <p class="section-subtitle">Mirum est notare quam littera gothica, quam nunc putamus parum
                            claram anteposuerit litterarum formas.</p>
                    </div>
                    <!--=======  End of section title  =======-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  single row slider wrapper  =======-->
                    <div class="single-row-slider-wrapper">
                        <div class="ht-slick-slider"
                            data-slick-setting='{
                    "slidesToShow": 4,
                    "slidesToScroll": 1,
                    "arrows": true,
                    "autoplay": false,
                    "autoplaySpeed": 5000,
                    "speed": 1000,
                    "infinite": false,
                    "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ion-chevron-left" },
                    "nextArrow": {"buttonClass": "slick-next", "iconClass": "ion-chevron-right" }
                }'
                            data-slick-responsive='[
                    {"breakpoint":1501, "settings": {"slidesToShow": 4} },
                    {"breakpoint":1199, "settings": {"slidesToShow": 4, "arrows": false} },
                    {"breakpoint":991, "settings": {"slidesToShow": 3, "arrows": false} },
                    {"breakpoint":767, "settings": {"slidesToShow": 2, "arrows": false} },
                    {"breakpoint":575, "settings": {"slidesToShow": 2, "arrows": false} },
                    {"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false} }
                ]'>

                            <div class="col">
                                <!--=======  single grid product  =======-->
                                <div class="single-grid-product">
                                    <div class="single-grid-product__image">
                                        <div class="single-grid-product__label">
                                            <span class="sale">-20%</span>
                                            <span class="new">New</span>
                                        </div>
                                        <a href="single-product.html">
                                            <img width="600" height="800"
                                                src="assets/img/products/1-600x800.webp" class="img-fluid"
                                                alt="">
                                            <img width="600" height="800"
                                                src="assets/img/products/1_1-600x800.webp" class="img-fluid"
                                                alt="">
                                        </a>

                                        <div class="hover-icons">
                                            <a href="javascript:void(0)"><i class="ion-bag"></i></a>
                                            <a href="javascript:void(0)"><i class="ion-heart"></i></a>
                                            <a href="javascript:void(0)"><i class="ion-android-options"></i></a>
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#quick-view-modal-container"><i
                                                    class="ion-android-open"></i></a>
                                        </div>
                                    </div>
                                    <div class="single-grid-product__content">
                                        <div class="single-grid-product__category-rating">
                                            <span class="category"><a href="shop-left-sidebar.html">Decor</a></span>
                                            <span class="rating">
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star-outline"></i>
                                            </span>
                                        </div>

                                        <h3 class="single-grid-product__title"> <a href="single-product.html">Cillum
                                                dolore lorem ipsum decoration item</a></h3>
                                        <p class="single-grid-product__price"><span
                                                class="discounted-price">$100.00</span> <span
                                                class="main-price discounted">$120.00</span></p>
                                    </div>
                                </div>
                                <!--=======  End of single grid product  =======-->
                            </div>

                            <div class="col">
                                <!--=======  single grid product  =======-->
                                <div class="single-grid-product">
                                    <div class="single-grid-product__image">
                                        <div class="single-grid-product__label">
                                            <span class="sale">-20%</span>
                                        </div>
                                        <a href="single-product.html">
                                            <img width="600" height="800"
                                                src="assets/img/products/2-600x800.webp" class="img-fluid"
                                                alt="">
                                            <img width="600" height="800"
                                                src="assets/img/products/2_1-600x800.webp" class="img-fluid"
                                                alt="">
                                        </a>

                                        <div class="hover-icons">
                                            <a href="javascript:void(0)"><i class="ion-bag"></i></a>
                                            <a href="javascript:void(0)"><i class="ion-heart"></i></a>
                                            <a href="javascript:void(0)"><i class="ion-android-options"></i></a>
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#quick-view-modal-container"><i
                                                    class="ion-android-open"></i></a>
                                        </div>
                                    </div>
                                    <div class="single-grid-product__content">
                                        <div class="single-grid-product__category-rating">
                                            <span class="category"><a href="shop-left-sidebar.html">Decor</a></span>
                                            <span class="rating">
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star-outline"></i>
                                            </span>
                                        </div>

                                        <h3 class="single-grid-product__title"> <a href="single-product.html">lorem
                                                ipsum cillium dolore decoration item</a></h3>
                                        <p class="single-grid-product__price"><span
                                                class="discounted-price">$20.00</span> <span
                                                class="main-price discounted">$40.00</span></p>
                                    </div>
                                </div>
                                <!--=======  End of single grid product  =======-->
                            </div>

                            <div class="col">
                                <!--=======  single grid product  =======-->
                                <div class="single-grid-product">
                                    <div class="single-grid-product__image">
                                        <div class="single-grid-product__label">
                                            <span class="new">New</span>
                                        </div>
                                        <a href="single-product.html">
                                            <img width="600" height="800"
                                                src="assets/img/products/3-600x800.webp" class="img-fluid"
                                                alt="">
                                            <img width="600" height="800"
                                                src="assets/img/products/3_1-600x800.webp" class="img-fluid"
                                                alt="">
                                        </a>

                                        <div class="hover-icons">
                                            <a href="javascript:void(0)"><i class="ion-bag"></i></a>
                                            <a href="javascript:void(0)"><i class="ion-heart"></i></a>
                                            <a href="javascript:void(0)"><i class="ion-android-options"></i></a>
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#quick-view-modal-container"><i
                                                    class="ion-android-open"></i></a>
                                        </div>
                                    </div>
                                    <div class="single-grid-product__content">
                                        <div class="single-grid-product__category-rating">
                                            <span class="category"><a href="shop-left-sidebar.html">Vase</a></span>
                                            <span class="rating">
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star-outline"></i>
                                            </span>
                                        </div>

                                        <h3 class="single-grid-product__title"> <a href="single-product.html">cillium
                                                dolore lorem ipsum decoration item</a></h3>
                                        <p class="single-grid-product__price"><span
                                                class="discounted-price">$40.00</span> <span
                                                class="main-price discounted">$60.00</span></p>
                                    </div>
                                </div>
                                <!--=======  End of single grid product  =======-->
                            </div>

                            <div class="col">
                                <!--=======  single grid product  =======-->
                                <div class="single-grid-product">
                                    <div class="single-grid-product__image">

                                        <a href="single-product.html">
                                            <img width="600" height="800"
                                                src="assets/img/products/4-600x800.webp" class="img-fluid"
                                                alt="">
                                            <img width="600" height="800"
                                                src="assets/img/products/4_1-600x800.webp" class="img-fluid"
                                                alt="">
                                        </a>

                                        <div class="hover-icons">
                                            <a href="javascript:void(0)"><i class="ion-bag"></i></a>
                                            <a href="javascript:void(0)"><i class="ion-heart"></i></a>
                                            <a href="javascript:void(0)"><i class="ion-android-options"></i></a>
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#quick-view-modal-container"><i
                                                    class="ion-android-open"></i></a>
                                        </div>
                                    </div>
                                    <div class="single-grid-product__content">
                                        <div class="single-grid-product__category-rating">
                                            <span class="category"><a href="shop-left-sidebar.html">Furniture</a></span>
                                            <span class="rating">
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star-outline"></i>
                                            </span>
                                        </div>

                                        <h3 class="single-grid-product__title"> <a href="single-product.html">Cillum
                                                dolore lorem ipsum decoration item</a></h3>
                                        <p class="single-grid-product__price"><span class="main-price">$120.00</span>
                                        </p>
                                    </div>
                                </div>
                                <!--=======  End of single grid product  =======-->
                            </div>

                            <div class="col">
                                <!--=======  single grid product  =======-->
                                <div class="single-grid-product">
                                    <div class="single-grid-product__image">
                                        <div class="single-grid-product__label">
                                            <span class="sale">-20%</span>
                                            <span class="new">New</span>
                                        </div>
                                        <a href="single-product.html">
                                            <img width="600" height="800"
                                                src="assets/img/products/5-600x800.webp" class="img-fluid"
                                                alt="">
                                            <img width="600" height="800"
                                                src="assets/img/products/5_1-600x800.webp" class="img-fluid"
                                                alt="">
                                        </a>

                                        <div class="hover-icons">
                                            <a href="javascript:void(0)"><i class="ion-bag"></i></a>
                                            <a href="javascript:void(0)"><i class="ion-heart"></i></a>
                                            <a href="javascript:void(0)"><i class="ion-android-options"></i></a>
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#quick-view-modal-container"><i
                                                    class="ion-android-open"></i></a>
                                        </div>
                                    </div>
                                    <div class="single-grid-product__content">
                                        <div class="single-grid-product__category-rating">
                                            <span class="category"><a href="shop-left-sidebar.html">Decor</a></span>
                                            <span class="rating">
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star-outline"></i>
                                            </span>
                                        </div>

                                        <h3 class="single-grid-product__title"> <a href="single-product.html">Cillum
                                                dolore lorem ipsum decoration item</a></h3>
                                        <p class="single-grid-product__price"><span
                                                class="discounted-price">$80.00</span> <span
                                                class="main-price discounted">$100.00</span></p>
                                    </div>
                                </div>
                                <!--=======  End of single grid product  =======-->
                            </div>

                        </div>
                    </div>
                    <!--=======  End of single row slider wrapper  =======-->
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of single row slider  ====================-->
    <!--====================  banner hover area ====================-->
    <div class="banner-hover-area section-space">
        <div class="container wide">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  banner hover wrapper  =======-->
                    <div class="banner-hover-wrapper">
                        <div class="row">
                            <div class="col-md-6">
                                <!--=======  single hover banner  =======-->
                                <div class="single-hover-banner single-hover-banner--middlesize-text">
                                    <div class="single-hover-banner__image">
                                        <a href="shop-left-sidebar.html">
                                            <img width="895" height="430"
                                                src="assets/img/banners/img1-middle-eposi2.webp" class="img-fluid"
                                                alt="">
                                        </a>
                                        <div class="single-hover-banner--middlesize-text__content">
                                            <h4 class="small-text">Black Friday</h4>
                                            <h3 class="big-text">Save Up To 50% Off</h3>
                                            <a class="banner-link" href="shop-left-sidebar.html">SHOP NOW</a>
                                        </div>
                                    </div>
                                </div>
                                <!--=======  End of single hover banner  =======-->
                            </div>

                            <div class="col-md-6">
                                <!--=======  single hover banner  =======-->
                                <div class="single-hover-banner single-hover-banner--middlesize-text">
                                    <div class="single-hover-banner__image">
                                        <a href="shop-left-sidebar.html">
                                            <img width="895" height="430"
                                                src="assets/img/banners/img2-middle-eposi2.webp" class="img-fluid"
                                                alt="">
                                        </a>
                                        <div class="single-hover-banner--middlesize-text__content">
                                            <h4 class="small-text">Best Selling !</h4>
                                            <h3 class="big-text">Living Room Up To 70% Off</h3>
                                            <a class="banner-link" href="shop-left-sidebar.html">SHOP NOW</a>
                                        </div>
                                    </div>
                                </div>
                                <!--=======  End of single hover banner  =======-->
                            </div>
                        </div>
                    </div>
                    <!--=======  End of banner hover wrapper  =======-->
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of banner hover area  ====================-->
    <!--====================  feature logo area ====================-->
    <div class="feature-logo-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  feature logo wrapper  =======-->
                    <div class="feature-logo-wrapper section-space--inner-bottom">
                        <div class="row">
                            <div class="col-md-4">
                                <!--=======  single feature logo  =======-->
                                <div class="single-feature-logo">
                                    <div class="single-feature-logo__image">
                                        <img width="51" height="52" src="assets/img/icons/free_shipping.webp"
                                            class="img-fluid" alt="">
                                    </div>
                                    <div class="single-feature-logo__content">
                                        <h4 class="title">FREE SHIPPING WORLDWIDE</h4>
                                        <p class="short-desc">We offer free shipping via Standard Shipping on orders
                                            over $200.00</p>
                                    </div>
                                </div>
                                <!--=======  End of single feature logo  =======-->
                            </div>
                            <div class="col-md-4">
                                <!--=======  single feature logo  =======-->
                                <div class="single-feature-logo">
                                    <div class="single-feature-logo__image">
                                        <img width="52" height="52" src="assets/img/icons/money_back.webp"
                                            class="img-fluid" alt="">
                                    </div>
                                    <div class="single-feature-logo__content">
                                        <h4 class="title">MONEY BACK GUARANTEE</h4>
                                        <p class="short-desc">If you're not satisfied with our product, we'll refund the
                                            purchase price*.</p>
                                    </div>
                                </div>
                                <!--=======  End of single feature logo  =======-->
                            </div>
                            <div class="col-md-4">
                                <!--=======  single feature logo  =======-->
                                <div class="single-feature-logo">
                                    <div class="single-feature-logo__image">
                                        <img width="41" height="53" src="assets/img/icons/support247.webp"
                                            class="img-fluid" alt="">
                                    </div>
                                    <div class="single-feature-logo__content">
                                        <h4 class="title">ONLINE SUPPORT 24/7</h4>
                                        <p class="short-desc">Our friendly support team is available to help you 24
                                            hours a day, seven days a week</p>
                                    </div>
                                </div>
                                <!--=======  End of single feature logo  =======-->
                            </div>
                        </div>
                    </div>
                    <!--=======  End of feature logo wrapper  =======-->
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of feature logo area  ====================-->
    <!--====================  blog post slider area ====================-->
    <div class="blog-post-slider-area">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <!--=======  blog post slider border wrapper  =======-->
                    <div class="blog-post-slider-border-wrapper section-space--inner">
                        <div class="row">
                            <div class="col-lg-12">
                                <!--=======  section title  =======-->
                                <div class="section-title-wrapper text-center section-space--half">
                                    <h2 class="section-title">Latest Blog Posts</h2>
                                    <p class="section-subtitle">Mirum est notare quam littera gothica, quam nunc putamus
                                        parum claram anteposuerit litterarum formas.</p>
                                </div>
                                <!--=======  End of section title  =======-->
                            </div>
                            <div class="col-lg-12">
                                <!--=======  blog post slider wrapper  =======-->
                                <div class="blog-post-slider-wrapper">
                                    <div class="ht-slick-slider"
                                        data-slick-setting='{
                                "slidesToShow": 3,
                                "slidesToScroll": 1,
                                "arrows": false,
                                "autoplay": false,
                                "autoplaySpeed": 5000,
                                "speed": 1000,
                                "infinite": true
                            }'
                                        data-slick-responsive='[
                                {"breakpoint":1501, "settings": {"slidesToShow": 3} },
                                {"breakpoint":1199, "settings": {"slidesToShow": 3} },
                                {"breakpoint":991, "settings": {"slidesToShow": 2} },
                                {"breakpoint":767, "settings": {"slidesToShow": 1} },
                                {"breakpoint":575, "settings": {"slidesToShow": 1} },
                                {"breakpoint":479, "settings": {"slidesToShow": 1} }
                            ]'>

                                        <div class="col">
                                            <!--=======  single slider post  =======-->
                                            <div class="single-slider-post">
                                                <div class="single-slider-post__image">
                                                    <a href="blog-post-left-sidebar.html">
                                                        <img width="370" height="235"
                                                            src="assets/img/blog/slider/1-370x235.webp"
                                                            class="img-fluid" alt="">
                                                    </a>
                                                    <div class="single-slider-post__date-sticker">
                                                        <span class="month">Oct</span>
                                                        <span class="day">02</span>
                                                    </div>
                                                </div>
                                                <div class="single-slider-post__content">
                                                    <h3 class="title"><a href="blog-post-left-sidebar.html">Buy Used
                                                            Furniture and Used Decor</a></h3>
                                                    <p class="post-meta">by <a href="#">HasTech</a></p>
                                                    <p class="short-desc">It's no secret, engines and transmissions can
                                                        be very expensive...</p>
                                                    <a href="blog-post-left-sidebar.html" class="blog-post-link">Read
                                                        More</a>
                                                </div>
                                            </div>
                                            <!--=======  End of single slider post  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single slider post  =======-->
                                            <div class="single-slider-post">
                                                <div class="single-slider-post__image">
                                                    <a href="blog-post-left-sidebar.html">
                                                        <img width="370" height="235"
                                                            src="assets/img/blog/slider/2-370x235.webp"
                                                            class="img-fluid" alt="">
                                                    </a>
                                                    <div class="single-slider-post__date-sticker">
                                                        <span class="month">Oct</span>
                                                        <span class="day">03</span>
                                                    </div>
                                                </div>
                                                <div class="single-slider-post__content">
                                                    <h3 class="title"><a href="blog-post-left-sidebar.html">Get Your
                                                            Furniture Ready for the Summer!</a></h3>
                                                    <p class="post-meta">by <a href="#">HasTech</a></p>
                                                    <p class="short-desc">It's no secret, engines and transmissions can
                                                        be very expensive...</p>
                                                    <a href="blog-post-left-sidebar.html" class="blog-post-link">Read
                                                        More</a>
                                                </div>
                                            </div>
                                            <!--=======  End of single slider post  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single slider post  =======-->
                                            <div class="single-slider-post">
                                                <div class="single-slider-post__image">
                                                    <a href="blog-post-left-sidebar.html">
                                                        <img width="370" height="235"
                                                            src="assets/img/blog/slider/3-370x235.webp"
                                                            class="img-fluid" alt="">
                                                    </a>
                                                    <div class="single-slider-post__date-sticker">
                                                        <span class="month">Oct</span>
                                                        <span class="day">04</span>
                                                    </div>
                                                </div>
                                                <div class="single-slider-post__content">
                                                    <h3 class="title"><a href="blog-post-left-sidebar.html">Minor
                                                            Wreck?
                                                            We Got The Furniture!</a></h3>
                                                    <p class="post-meta">by <a href="#">HasTech</a></p>
                                                    <p class="short-desc">It's no secret, engines and transmissions can
                                                        be very expensive...</p>
                                                    <a href="blog-post-left-sidebar.html" class="blog-post-link">Read
                                                        More</a>
                                                </div>
                                            </div>
                                            <!--=======  End of single slider post  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single slider post  =======-->
                                            <div class="single-slider-post">
                                                <div class="single-slider-post__image">
                                                    <a href="blog-post-left-sidebar.html">
                                                        <img width="370" height="235"
                                                            src="assets/img/blog/slider/4-370x235.webp"
                                                            class="img-fluid" alt="">
                                                    </a>
                                                    <div class="single-slider-post__date-sticker">
                                                        <span class="month">Oct</span>
                                                        <span class="day">05</span>
                                                    </div>
                                                </div>
                                                <div class="single-slider-post__content">
                                                    <h3 class="title"><a href="blog-post-left-sidebar.html">Purchasing
                                                            Furniture in our Online Store</a></h3>
                                                    <p class="post-meta">by <a href="#">HasTech</a></p>
                                                    <p class="short-desc">It's no secret, engines and transmissions can
                                                        be very expensive...</p>
                                                    <a href="blog-post-left-sidebar.html" class="blog-post-link">Read
                                                        More</a>
                                                </div>
                                            </div>
                                            <!--=======  End of single slider post  =======-->
                                        </div>

                                        <div class="col">
                                            <!--=======  single slider post  =======-->
                                            <div class="single-slider-post">
                                                <div class="single-slider-post__image">
                                                    <a href="blog-post-left-sidebar.html">
                                                        <img width="370" height="235"
                                                            src="assets/img/blog/slider/5-370x235.webp"
                                                            class="img-fluid" alt="">
                                                    </a>
                                                    <div class="single-slider-post__date-sticker">
                                                        <span class="month">Oct</span>
                                                        <span class="day">06</span>
                                                    </div>
                                                </div>
                                                <div class="single-slider-post__content">
                                                    <h3 class="title"><a href="blog-post-left-sidebar.html">The Life
                                                            Cycle of Decor Items</a></h3>
                                                    <p class="post-meta">by <a href="#">HasTech</a></p>
                                                    <p class="short-desc">It's no secret, engines and transmissions can
                                                        be very expensive...</p>
                                                    <a href="blog-post-left-sidebar.html" class="blog-post-link">Read
                                                        More</a>
                                                </div>
                                            </div>
                                            <!--=======  End of single slider post  =======-->
                                        </div>

                                    </div>
                                </div>
                                <!--=======  End of blog post slider wrapper  =======-->
                            </div>
                        </div>
                    </div>
                    <!--=======  End of blog post slider border wrapper  =======-->
                </div>
            </div>

        </div>
    </div>
    <!--====================  End of blog post slider area  ====================-->
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
