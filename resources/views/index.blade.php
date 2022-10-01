<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <!-- =====  BASIC PAGE NEEDS  ===== -->
    <meta charset="utf-8">
    <title>{{ __('Home') }}</title>
    <!-- =====  SEO MATE  ===== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="distribution" content="global">
    <meta name="revisit-after" content="2 Days">
    <meta name="robots" content="ALL">
    <meta name="rating" content="8 YEARS">
    <meta name="Language" content="en-us">
    <meta name="GOOGLEBOT" content="NOARCHIVE">
    <!-- =====  MOBILE SPECIFICATION  ===== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="viewport" content="width=device-width">
    <!-- =====  CSS  ===== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}">

    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-touch-icon-114x114.png') }}">
</head>

<body>
    <!-- =====  LODER  ===== -->
    <div class="loder"></div>
    <!-- =====  HEADER START  ===== -->
    <header id="header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="header-top-left">
                            <div class="contact"><span class="hidden-xs hidden-sm hidden-md">
                                </span></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-8">
                        <ul class="header-top-right text-right">
                            <li class="account"><a href="login.html">{{ __('My Account') }}</a></li>
                            <li class="language dropdown"> <span class="dropdown-toggle" id="dropdownMenu1"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    role="button">{{ __('Language') }} <span class="caret"></span> </span>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <li>
                                            <a rel="alternate" hreflang="{{ $localeCode }}"
                                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                {{ $properties['native'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="currency dropdown"> <span class="dropdown-toggle" id="dropdownMenu12"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    role="button">{{ __('Currency') }} <span class="caret"></span> </span>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu12">
                                    <li><a href="#">€ Euro</a></li>
                                    <li><a href="#">£ Pound Sterling</a></li>
                                    <li><a href="#">$ US Dollar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="main-search mt_40">
                            <input id="search-input" name="search" value="" placeholder="Search"
                                class="form-control input-lg" autocomplete="off" type="text">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-lg"><i
                                        class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </div>
                    <div class="navbar-header col-xs-6 col-sm-4"> <a class="navbar-brand" href="home"> <img
                                alt="themini" src="{{ asset('images/logo/logo4.jpg') }}"> </a> </div>
                    <div class="col-xs-6 col-sm-4 shopcart">
                        <div id="cart" class="btn-group btn-block mtb_40">
                            <button type="button" class="btn" data-target="#cart-dropdown"
                                data-toggle="collapse" aria-expanded="true"><span id="shippingcart">Shopping
                                    cart</span><span id="cart-total">items (0)</span> </button>
                        </div>
                        <div id="cart-dropdown" class="cart-menu collapse">
                            <ul>
                                <li>
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <td class="text-center"><a href="#"><img
                                                            src="{{ asset('images/product/70x84.jpg') }}"
                                                            alt="iPod Classic" title="iPod Classic"></a></td>
                                                <td class="text-left product-name"><a href="#">MacBook
                                                        Pro</a> <span class="text-left price">$20.00</span>
                                                    <input class="cart-qty" name="product_quantity" min="1"
                                                        value="1" type="number">
                                                </td>
                                                <td class="text-center"><a class="close-cart"><i
                                                            class="fa fa-times-circle"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><a href="#"><img
                                                            src="{{ asset('images/product/70x84.jpg') }}"
                                                            alt="iPod Classic" title="iPod Classic"></a></td>
                                                <td class="text-left product-name"><a href="#">MacBook
                                                        Pro</a> <span class="text-left price">$20.00</span>
                                                    <input class="cart-qty" name="product_quantity" min="1"
                                                        value="1" type="number">
                                                </td>
                                                <td class="text-center"><a class="close-cart"><i
                                                            class="fa fa-times-circle"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li>
                                <li>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td class="text-right"><strong>Sub-Total</strong></td>
                                                <td class="text-right">$2,100.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                                                <td class="text-right">$2.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>VAT (20%)</strong></td>
                                                <td class="text-right">$20.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>Total</strong></td>
                                                <td class="text-right">$2,122.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li>
                                <li>
                                    <form action="cart_page.html">
                                        <input class="btn pull-left mt_10" value="View cart" type="submit">
                                    </form>
                                    <form action="checkout_page.html">
                                        <input class="btn pull-right mt_10" value="Checkout" type="submit">
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <nav class="navbar">
                    <p>menu</p>
                    <button class="navbar-toggle" type="button" data-toggle="collapse"
                        data-target=".js-navbar-collapse"> <span class="i-bar"><i
                                class="fa fa-bars"></i></span></button>
                    <div class="collapse navbar-collapse js-navbar-collapse">
                        <ul id="menu" class="nav navbar-nav">
                            <li> <a href="home">{{ __('Home') }}</a></li>
                            <li class="dropdown mega-dropdown"> <a href="#" class="dropdown-toggle"
                                    data-toggle="dropdown">{{ __('Collection') }} </a>
                                <ul class="dropdown-menu mega-dropdown-menu row">
                                    <li class="col-md-3">
                                        <ul>
                                            <li class="dropdown-header">{{ __('Womens') }}</li>
                                            <li><a href="#">{{ __('trouser') }}</a></li>
                                            <li><a href="#">{{ __('T-Shirts') }}</a></li>
                                            <li><a href="#">{{ __('dress') }}</a></li>
                                            <li><a href="#">{{ __('Jumpsuit') }}</a></li>
                                            <li><a href="#">{{ __('shoes') }}</a></li>
                                            <li><a href="#">{{ __('blouse') }}</a></li>
                                            <li><a href="#">{{ __('watches') }}</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-md-3">
                                        <ul>
                                            <li class="dropdown-header">{{ __('Mans') }}</li>
                                            <li><a href="#">{{ __('trouser') }}</a></li>
                                            <li><a href="#">{{ __('T-Shirts') }}</a></li>
                                            <li><a href="#">{{ __('Shirt') }}</a></li>
                                            <li><a href="#">{{ __('Suits') }}</a></li>
                                            <li><a href="#">{{ __('shoes') }}</a></li>
                                            <li><a href="#">{{ __('Jackets') }}</a></li>
                                            <li><a href="#">{{ __('watches') }}</a></li>
                                        </ul>
                                    </li>

                                    <li class="col-md-3">

                                        <ul>
                                            <li class="dropdown-header">{{ __('Children') }}</li>
                                                    <li><select name="dropdown" class="dropdown"></li>
                                                <option>Settings<i class='bx bx-down-arrow-alt bx-flashing' style='color:#ffffff'  ></i></option>
                                                <option>Your profile</option>
                                                <option>Your account</option>
                                                <option>Notifications</option>
                                                <option>Sign Out</option>
                                            </select>
                                        </ul>
                                    </li>

                                    <li class="col-md-3">
                                        <ul>
                                            <li id="myCarousel" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="item active"> <a href="#"><img
                                                                src="{{ asset('images/menu-banner1.jpg') }}"
                                                                class="img-responsive" alt="Banner1"></a></div>
                                                    <!-- End Item -->
                                                    <div class="item"> <a href="#"><img
                                                                src="{{ asset('images/menu-banner2.jpg') }}"
                                                                class="img-responsive" alt="Banner1"></a></div>
                                                    <!-- End Item -->
                                                    <div class="item"> <a href="#"><img
                                                                src="{{ asset('images/menu-banner3.jpg') }}"
                                                                class="img-responsive" alt="Banner1"></a></div>
                                                    <!-- End Item -->
                                                </div>
                                                <!-- End Carousel Inner -->
                                            </li>
                                            <!-- /.carousel -->
                                        </ul>
                                    <style>
                                        .dropdown {
                                            background: #424242;
                                            border: 0;
                                        }
                                    </style>
                                    <li class="col-md-3">
                                    </li>
                                </ul>
                            </li>
                            <li> <a href="shop">{{ __('shop') }}</a></li>
                            <li> <a href="blog_page.html">{{ __('Blog') }}</a></li>
                            <li class="dropdown"> <a href="#" class="dropdown-toggle"
                                    data-toggle="dropdown">Pages </a>
                                <ul class="dropdown-menu">
                                    <li> <a href="cart_page.html">Cart</a></li>
                                    <li> <a href="checkout_page.html">Checkout</a></li>
                                    <li> <a href="product_detail_page.html">Product Detail Page</a></li>
                                    <li> <a href="single_blog.html">Single Post</a></li>
                                </ul>
                            </li>
                            <li> <a href="about.html">{{ __('About us') }}</a></li>
                            <li> <a href="contact_us.html">{{ __('Contact us') }}</a></li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </nav>
            </div>
        </div>
    </header>
    <!-- =====  HEADER END  ===== -->
    <!-- =====  BANNER STRAT  ===== -->
    <div class="banner">
        <div class="main-banner owl-carousel">
            <div class="item"><a href="#"><img src="{{ asset('images/logo/logo1.jpg') }}" alt="Main Banner"
                        class="img-responsive" /></a></div>
        </div>
    </div>
    <!-- =====  BANNER END  ===== -->
    <!-- =====  CONTAINER START  ===== -->
    <div class="container">
        <!-- =====  SUB BANNER  STRAT ===== -->
        <div class="row ">
            <div class="col-sm-12 mt_30">
                <!-- =====  PRODUCT TAB  ===== -->
                <div id="product-tab" class="mt_10">
                    <div class="heading-part mb_10 ">
                        <h2 class="main_title">{{ __('Featured Products') }}</h2>
                    </div>
                    <ul class="nav text-right">
                        <li class="active"> <a href="#nArrivals" data-toggle="tab">{{ __('New Arrivals') }}</a>
                        </li>
                        <li><a href="#Bestsellers" data-toggle="tab">{{ __('Bestsellers') }}</a> </li>
                        <li><a href="#Featured" data-toggle="tab">{{ __('Featured') }}</a> </li>
                    </ul>
                    <div class="tab-content clearfix box">
                        <div class="tab-pane active" id="nArrivals">
                            <div class="nArrivals owl-carousel">
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html">
                                                    <img data-name="product_image"
                                                        src="{{ asset('images/product/product9.jpg') }}"
                                                        alt="iPod Classic" title="iPod Classic"
                                                        class="img-responsive"> <img
                                                        src="{{ asset('images/product/product9-1.jpg') }}"
                                                        alt="iPod Classic" title="iPod Classic"
                                                        class="img-responsive"> </a>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a>
                                                    </div>
                                                    <div class="quickview"><a href="#"><span>Quick
                                                                View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a>
                                                    </div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to
                                                                cart</span></a></div>
                                                </div>
                                            </div>
                                            <div class="caption product-detail text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-x"></i></span> </div>
                                                <h6 data-name="product_name" class="product-name"><a href="#"
                                                        title="Casual Shirt With Ruffle Hem">New
                                                        LCDScreen and HD Vide..</a></h6>
                                                <span class="price"><span class="amount"><span
                                                            class="currencySymbol">$</span>70.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html">
                                                    <img data-name="product_image"
                                                        src="{{ asset('images/product/product1.jpg') }}"
                                                        alt="iPod Classic" title="iPod Classic"
                                                        class="img-responsive"> <img
                                                        src="{{ asset('images/product/product1-1.jpg') }}"
                                                        alt="iPod Classic" title="iPod Classic"
                                                        class="img-responsive"> </a>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a>
                                                    </div>
                                                    <div class="quickview"><a href="#"><span>Quick
                                                                View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a>
                                                    </div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to
                                                                cart</span></a></div>
                                                </div>
                                            </div>
                                            <div class="caption product-detail text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-x"></i></span> </div>
                                                <h6 data-name="product_name" class="product-name"><a href="#"
                                                        title="Casual Shirt With Ruffle Hem">New
                                                        LCDScreen and HD Vide..</a></h6>
                                                <span class="price"><span class="amount"><span
                                                            class="currencySymbol">$</span>70.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html">
                                                    <img data-name="product_image"
                                                        src="{{ asset('images/product/product3.jpg') }}"
                                                        alt="iPod Classic" title="iPod Classic"
                                                        class="img-responsive"> <img
                                                        src="{{ asset('images/product/product3-1.jpg') }}"
                                                        alt="iPod Classic" title="iPod Classic"
                                                        class="img-responsive"> </a>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a>
                                                    </div>
                                                    <div class="quickview"><a href="#"><span>Quick
                                                                View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a>
                                                    </div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to
                                                                cart</span></a></div>
                                                </div>
                                            </div>
                                            <div class="caption product-detail text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-x"></i></span> </div>
                                                <h6 data-name="product_name" class="product-name"><a href="#"
                                                        title="Casual Shirt With Ruffle Hem">New
                                                        LCDScreen and HD Vide..</a></h6>
                                                <span class="price"><span class="amount"><span
                                                            class="currencySymbol">$</span>70.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html">
                                                    <img data-name="product_image"
                                                        src="{{ asset('images/product/product5.jpg') }}"
                                                        alt="iPod Classic" title="iPod Classic"
                                                        class="img-responsive"> <img
                                                        src="{{ asset('images/product/product5-1.jpg') }}"
                                                        alt="iPod Classic" title="iPod Classic"
                                                        class="img-responsive"> </a>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a>
                                                    </div>
                                                    <div class="quickview"><a href="#"><span>Quick
                                                                View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a>
                                                    </div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to
                                                                cart</span></a></div>
                                                </div>
                                            </div>
                                            <div class="caption product-detail text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-x"></i></span> </div>
                                                <h6 data-name="product_name" class="product-name"><a href="#"
                                                        title="Casual Shirt With Ruffle Hem">New
                                                        LCDScreen and HD Vide..</a></h6>
                                                <span class="price"><span class="amount"><span
                                                            class="currencySymbol">$</span>70.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html">
                                                    <img data-name="product_image"
                                                        src="{{ asset('images/product/product7.jpg') }}"
                                                        alt="iPod Classic" title="iPod Classic"
                                                        class="img-responsive"> <img
                                                        src="{{ asset('images/product/product7-1.jpg') }}"
                                                        alt="iPod Classic" title="iPod Classic"
                                                        class="img-responsive"> </a>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a>
                                                    </div>
                                                    <div class="quickview"><a href="#"><span>Quick
                                                                View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a>
                                                    </div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to
                                                                cart</span></a></div>
                                                </div>
                                            </div>
                                            <div class="caption product-detail text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-x"></i></span> </div>
                                                <h6 data-name="product_name" class="product-name"><a href="#"
                                                        title="Casual Shirt With Ruffle Hem">New
                                                        LCDScreen and HD Vide..</a></h6>
                                                <span class="price"><span class="amount"><span
                                                            class="currencySymbol">$</span>70.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html">
                                                    <img data-name="product_image"
                                                        src="{{ asset('images/product/product9.jpg') }}"
                                                        alt="iPod Classic" title="iPod Classic"
                                                        class="img-responsive"> <img
                                                        src="{{ asset('images/product/product9-1.jpg') }}"
                                                        alt="iPod Classic" title="iPod Classic"
                                                        class="img-responsive"> </a>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a>
                                                    </div>
                                                    <div class="quickview"><a href="#"><span>Quick
                                                                View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a>
                                                    </div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to
                                                                cart</span></a></div>
                                                </div>
                                            </div>
                                            <div class="caption product-detail text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-x"></i></span> </div>
                                                <h6 data-name="product_name" class="product-name"><a href="#"
                                                        title="Casual Shirt With Ruffle Hem">New
                                                        LCDScreen and HD Vide..</a></h6>
                                                <span class="price"><span class="amount"><span
                                                            class="currencySymbol">$</span>70.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="Bestsellers">
                            <div class="Bestsellers owl-carousel">
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html">
                                                    <img data-name="product_image"
                                                        src="{{ asset('images/product/product1.jpg') }}"
                                                        alt="iPod Classic" title="iPod Classic"
                                                        class="img-responsive"> <img
                                                        src="{{ asset('images/product/product1-1.jpg') }}"
                                                        alt="iPod Classic" title="iPod Classic"
                                                        class="img-responsive"> </a>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a>
                                                    </div>
                                                    <div class="quickview"><a href="#"><span>Quick
                                                                View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a>
                                                    </div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to
                                                                cart</span></a></div>
                                                </div>
                                            </div>
                                            <div class="caption product-detail text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-x"></i></span> </div>
                                                <h6 data-name="product_name" class="product-name"><a href="#"
                                                        title="Casual Shirt With Ruffle Hem">New
                                                        LCDScreen and HD Vide..</a></h6>
                                                <span class="price"><span class="amount"><span
                                                            class="currencySymbol">$</span>70.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html">
                                                    <img data-name="product_image"
                                                        src="{{ asset('images/product/product3.jpg') }}"
                                                        alt="iPod Classic" title="iPod Classic"
                                                        class="img-responsive"> <img
                                                        src="{{ asset('images/product/product3-1.jpg') }}"
                                                        alt="iPod Classic" title="iPod Classic"
                                                        class="img-responsive"> </a>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a>
                                                    </div>
                                                    <div class="quickview"><a href="#"><span>Quick
                                                                View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a>
                                                    </div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to
                                                                cart</span></a></div>
                                                </div>
                                            </div>
                                            <div class="caption product-detail text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-x"></i></span> </div>
                                                <h6 data-name="product_name" class="product-name"><a href="#"
                                                        title="Casual Shirt With Ruffle Hem">New
                                                        LCDScreen and HD Vide..</a></h6>
                                                <span class="price"><span class="amount"><span
                                                            class="currencySymbol">$</span>70.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html">
                                                    <img data-name="product_image"
                                                        src="{{ asset('images/product/product5.jpg') }}"
                                                        alt="iPod Classic" title="iPod Classic"
                                                        class="img-responsive"> <img
                                                        src="{{ asset('images/product/product5-1.jpg') }}"
                                                        alt="iPod Classic" title="iPod Classic"
                                                        class="img-responsive"> </a>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a>
                                                    </div>
                                                    <div class="quickview"><a href="#"><span>Quick
                                                                View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a>
                                                    </div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to
                                                                cart</span></a></div>
                                                </div>
                                            </div>
                                            <div class="caption product-detail text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-x"></i></span> </div>
                                                <h6 data-name="product_name" class="product-name"><a href="#"
                                                        title="Casual Shirt With Ruffle Hem">New
                                                        LCDScreen and HD Vide..</a></h6>
                                                <span class="price"><span class="amount"><span
                                                            class="currencySymbol">$</span>70.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html">
                                                    <img data-name="product_image"
                                                        src="{{ asset('images/product/product6.jpg') }}"
                                                        alt="iPod Classic" title="iPod Classic"
                                                        class="img-responsive"> <img
                                                        src="{{ asset('images/product/product6-1.jpg') }}"
                                                        alt="iPod Classic" title="iPod Classic"
                                                        class="img-responsive"> </a>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a>
                                                    </div>
                                                    <div class="quickview"><a href="#"><span>Quick
                                                                View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a>
                                                    </div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to
                                                                cart</span></a></div>
                                                </div>
                                            </div>
                                            <div class="caption product-detail text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-x"></i></span> </div>
                                                <h6 data-name="product_name" class="product-name"><a href="#"
                                                        title="Casual Shirt With Ruffle Hem">New
                                                        LCDScreen and HD Vide..</a></h6>
                                                <span class="price"><span class="amount"><span
                                                            class="currencySymbol">$</span>70.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html">
                                                    <img data-name="product_image" src="images/product/product8.jpg"
                                                        alt="iPod Classic" title="iPod Classic"
                                                        class="img-responsive"> <img
                                                        src="images/product/product8-1.jpg" alt="iPod Classic"
                                                        title="iPod Classic" class="img-responsive"> </a>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a>
                                                    </div>
                                                    <div class="quickview"><a href="#"><span>Quick
                                                                View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a>
                                                    </div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to
                                                                cart</span></a></div>
                                                </div>
                                            </div>
                                            <div class="caption product-detail text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-x"></i></span> </div>
                                                <h6 data-name="product_name" class="product-name"><a href="#"
                                                        title="Casual Shirt With Ruffle Hem">New
                                                        LCDScreen and HD Vide..</a></h6>
                                                <span class="price"><span class="amount"><span
                                                            class="currencySymbol">$</span>70.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html">
                                                    <img data-name="product_image"
                                                        src="{{ asset('images/product/product10.jpg') }}"
                                                        alt="iPod Classic" title="iPod Classic"
                                                        class="img-responsive"> <img
                                                        src="{{ asset('images/product/product10-1.jpg') }}"
                                                        alt="iPod Classic" title="iPod Classic"
                                                        class="img-responsive"> </a>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a>
                                                    </div>
                                                    <div class="quickview"><a href="#"><span>Quick
                                                                View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a>
                                                    </div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to
                                                                cart</span></a></div>
                                                </div>
                                            </div>
                                            <div class="caption product-detail text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-x"></i></span> </div>
                                                <h6 data-name="product_name" class="product-name"><a href="#"
                                                        title="Casual Shirt With Ruffle Hem">New
                                                        LCDScreen and HD Vide..</a></h6>
                                                <span class="price"><span class="amount"><span
                                                            class="currencySymbol">$</span>70.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="Featured">
                            <div class="Featured owl-carousel">
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html">
                                                    <img data-name="product_image" src="images/product/product2.jpg"
                                                        alt="iPod Classic" title="iPod Classic"
                                                        class="img-responsive"> <img
                                                        src="images/product/product2-1.jpg" alt="iPod Classic"
                                                        title="iPod Classic" class="img-responsive"> </a>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a>
                                                    </div>
                                                    <div class="quickview"><a href="#"><span>Quick
                                                                View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a>
                                                    </div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to
                                                                cart</span></a></div>
                                                </div>
                                            </div>
                                            <div class="caption product-detail text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-x"></i></span> </div>
                                                <h6 data-name="product_name" class="product-name"><a href="#"
                                                        title="Casual Shirt With Ruffle Hem">New
                                                        LCDScreen and HD Vide..</a></h6>
                                                <span class="price"><span class="amount"><span
                                                            class="currencySymbol">$</span>70.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html">
                                                    <img data-name="product_image" src="images/product/product4.jpg"
                                                        alt="iPod Classic" title="iPod Classic"
                                                        class="img-responsive"> <img
                                                        src="images/product/product4-1.jpg" alt="iPod Classic"
                                                        title="iPod Classic" class="img-responsive"> </a>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a>
                                                    </div>
                                                    <div class="quickview"><a href="#"><span>Quick
                                                                View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a>
                                                    </div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to
                                                                cart</span></a></div>
                                                </div>
                                            </div>
                                            <div class="caption product-detail text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-x"></i></span> </div>
                                                <h6 data-name="product_name" class="product-name"><a href="#"
                                                        title="Casual Shirt With Ruffle Hem">New
                                                        LCDScreen and HD Vide..</a></h6>
                                                <span class="price"><span class="amount"><span
                                                            class="currencySymbol">$</span>70.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html">
                                                    <img data-name="product_image" src="images/product/product6.jpg"
                                                        alt="iPod Classic" title="iPod Classic"
                                                        class="img-responsive"> <img
                                                        src="images/product/product6-1.jpg" alt="iPod Classic"
                                                        title="iPod Classic" class="img-responsive"> </a>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a>
                                                    </div>
                                                    <div class="quickview"><a href="#"><span>Quick
                                                                View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a>
                                                    </div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to
                                                                cart</span></a></div>
                                                </div>
                                            </div>
                                            <div class="caption product-detail text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-x"></i></span> </div>
                                                <h6 data-name="product_name" class="product-name"><a href="#"
                                                        title="Casual Shirt With Ruffle Hem">New
                                                        LCDScreen and HD Vide..</a></h6>
                                                <span class="price"><span class="amount"><span
                                                            class="currencySymbol">$</span>70.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html">
                                                    <img data-name="product_image" src="images/product/product8.jpg"
                                                        alt="iPod Classic" title="iPod Classic"
                                                        class="img-responsive"> <img
                                                        src="images/product/product8-1.jpg" alt="iPod Classic"
                                                        title="iPod Classic" class="img-responsive"> </a>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a>
                                                    </div>
                                                    <div class="quickview"><a href="#"><span>Quick
                                                                View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a>
                                                    </div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to
                                                                cart</span></a></div>
                                                </div>
                                            </div>
                                            <div class="caption product-detail text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-x"></i></span> </div>
                                                <h6 data-name="product_name" class="product-name"><a
                                                        href="#" title="Casual Shirt With Ruffle Hem">New
                                                        LCDScreen and HD Vide..</a></h6>
                                                <span class="price"><span class="amount"><span
                                                            class="currencySymbol">$</span>70.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a
                                                    href="product_detail_page.html"> <img data-name="product_image"
                                                        src="images/product/product10.jpg" alt="iPod Classic"
                                                        title="iPod Classic" class="img-responsive"> <img
                                                        src="images/product/product10-1.jpg" alt="iPod Classic"
                                                        title="iPod Classic" class="img-responsive"> </a>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a
                                                            href="#"><span>wishlist</span></a></div>
                                                    <div class="quickview"><a href="#"><span>Quick
                                                                View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a>
                                                    </div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to
                                                                cart</span></a></div>
                                                </div>
                                            </div>
                                            <div class="caption product-detail text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-x"></i></span> </div>
                                                <h6 data-name="product_name" class="product-name"><a
                                                        href="#" title="Casual Shirt With Ruffle Hem">New
                                                        LCDScreen and HD Vide..</a></h6>
                                                <span class="price"><span class="amount"><span
                                                            class="currencySymbol">$</span>70.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a
                                                    href="product_detail_page.html"> <img data-name="product_image"
                                                        src="images/product/product2.jpg" alt="iPod Classic"
                                                        title="iPod Classic" class="img-responsive"> <img
                                                        src="images/product/product2-1.jpg" alt="iPod Classic"
                                                        title="iPod Classic" class="img-responsive"> </a>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a
                                                            href="#"><span>wishlist</span></a></div>
                                                    <div class="quickview"><a href="#"><span>Quick
                                                                View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a>
                                                    </div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to
                                                                cart</span></a></div>
                                                </div>
                                            </div>
                                            <div class="caption product-detail text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-1x"></i></span> <span
                                                        class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-1x"></i><i
                                                            class="fa fa-star fa-stack-x"></i></span> </div>
                                                <h6 data-name="product_name" class="product-name"><a
                                                        href="#" title="Casual Shirt With Ruffle Hem">New
                                                        LCDScreen and HD Vide..</a></h6>
                                                <span class="price"><span class="amount"><span
                                                            class="currencySymbol">$</span>70.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- =====  PRODUCT TAB  END ===== -->
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 mtb_10">
                <!-- =====  PRODUCT TAB  ===== -->
                <div class="mt_60">
                    <div class="heading-part mb_10 ">
                        <h2 class="main_title">{{ __('Deals of the Week') }}</h2>
                    </div>
                    <div class="latest_pro box">
                        <div class="latest owl-carousel">
                            <div class="product-grid">
                                <div class="item">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"> <a href="product_detail_page.html">
                                                <img data-name="product_image"
                                                    src="{{ asset('images/product/product2.jpg') }}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"> <img
                                                    src="{{ asset('images/product/product2-1.jpg') }}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"> </a>
                                            <div class="button-group text-center">
                                                <div class="wishlist"><a href="#"><span>wishlist</span></a>
                                                </div>
                                                <div class="quickview"><a href="#"><span>Quick
                                                            View</span></a></div>
                                                <div class="compare"><a href="#"><span>Compare</span></a>
                                                </div>
                                                <div class="add-to-cart"><a href="#"><span>Add to
                                                            cart</span></a></div>
                                            </div>
                                        </div>
                                        <div class="caption product-detail text-center">
                                            <div class="rating"> <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-1x"></i><i
                                                        class="fa fa-star fa-stack-1x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                        class="fa fa-star fa-stack-1x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                        class="fa fa-star fa-stack-1x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                        class="fa fa-star fa-stack-1x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                        class="fa fa-star fa-stack-x"></i></span> </div>
                                            <h6 data-name="product_name" class="product-name"><a href="#"
                                                    title="Casual Shirt With Ruffle Hem">New
                                                    LCDScreen and HD Vide..</a></h6>
                                            <span class="price"><span class="amount"><span
                                                        class="currencySymbol">$</span>70.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid">
                                <div class="item">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"> <a href="product_detail_page.html">
                                                <img data-name="product_image"
                                                    src="{{ asset('images/product/product4.jpg') }}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"> <img
                                                    src="{{ asset('images/product/product4-1.jpg') }}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"> </a>
                                            <div class="button-group text-center">
                                                <div class="wishlist"><a href="#"><span>wishlist</span></a>
                                                </div>
                                                <div class="quickview"><a href="#"><span>Quick
                                                            View</span></a></div>
                                                <div class="compare"><a href="#"><span>Compare</span></a>
                                                </div>
                                                <div class="add-to-cart"><a href="#"><span>Add to
                                                            cart</span></a></div>
                                            </div>
                                        </div>
                                        <div class="caption product-detail text-center">
                                            <div class="rating"> <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-1x"></i><i
                                                        class="fa fa-star fa-stack-1x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                        class="fa fa-star fa-stack-1x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                        class="fa fa-star fa-stack-1x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                        class="fa fa-star fa-stack-1x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                        class="fa fa-star fa-stack-x"></i></span> </div>
                                            <h6 data-name="product_name" class="product-name"><a href="#"
                                                    title="Casual Shirt With Ruffle Hem">New
                                                    LCDScreen and HD Vide..</a></h6>
                                            <span class="price"><span class="amount"><span
                                                        class="currencySymbol">$</span>70.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid">
                                <div class="item">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"> <a href="product_detail_page.html">
                                                <img data-name="product_image"
                                                    src="{{ asset('images/product/product6.jpg') }}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"> <img
                                                    src="{{ asset('images/product/product6-1.jpg') }}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"> </a>
                                            <div class="button-group text-center">
                                                <div class="wishlist"><a href="#"><span>wishlist</span></a>
                                                </div>
                                                <div class="quickview"><a href="#"><span>Quick
                                                            View</span></a></div>
                                                <div class="compare"><a href="#"><span>Compare</span></a>
                                                </div>
                                                <div class="add-to-cart"><a href="#"><span>Add to
                                                            cart</span></a></div>
                                            </div>
                                        </div>
                                        <div class="caption product-detail text-center">
                                            <div class="rating"> <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-1x"></i><i
                                                        class="fa fa-star fa-stack-1x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                        class="fa fa-star fa-stack-1x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                        class="fa fa-star fa-stack-1x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                        class="fa fa-star fa-stack-1x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                        class="fa fa-star fa-stack-x"></i></span> </div>
                                            <h6 data-name="product_name" class="product-name"><a href="#"
                                                    title="Casual Shirt With Ruffle Hem">New
                                                    LCDScreen and HD Vide..</a></h6>
                                            <span class="price"><span class="amount"><span
                                                        class="currencySymbol">$</span>70.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid">
                                <div class="item">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"> <a href="product_detail_page.html">
                                                <img data-name="product_image"
                                                    src="{{ asset('images/product/product8.jpg') }}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"> <img
                                                    src="{{ asset('images/product/product8-1.jpg') }}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"> </a>
                                            <div class="button-group text-center">
                                                <div class="wishlist"><a href="#"><span>wishlist</span></a>
                                                </div>
                                                <div class="quickview"><a href="#"><span>Quick
                                                            View</span></a></div>
                                                <div class="compare"><a href="#"><span>Compare</span></a>
                                                </div>
                                                <div class="add-to-cart"><a href="#"><span>Add to
                                                            cart</span></a></div>
                                            </div>
                                        </div>
                                        <div class="caption product-detail text-center">
                                            <div class="rating"> <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-1x"></i><i
                                                        class="fa fa-star fa-stack-1x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                        class="fa fa-star fa-stack-1x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                        class="fa fa-star fa-stack-1x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                        class="fa fa-star fa-stack-1x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                        class="fa fa-star fa-stack-x"></i></span> </div>
                                            <h6 data-name="product_name" class="product-name"><a href="#"
                                                    title="Casual Shirt With Ruffle Hem">New
                                                    LCDScreen and HD Vide..</a></h6>
                                            <span class="price"><span class="amount"><span
                                                        class="currencySymbol">$</span>70.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid">
                                <div class="item">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"> <a href="product_detail_page.html">
                                                <img data-name="product_image"
                                                    src="{{ asset('images/product/product10.jpg') }}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"> <img
                                                    src="{{ asset('images/product/product10-1.jpg') }}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"> </a>
                                            <div class="button-group text-center">
                                                <div class="wishlist"><a href="#"><span>wishlist</span></a>
                                                </div>
                                                <div class="quickview"><a href="#"><span>Quick
                                                            View</span></a></div>
                                                <div class="compare"><a href="#"><span>Compare</span></a>
                                                </div>
                                                <div class="add-to-cart"><a href="#"><span>Add to
                                                            cart</span></a></div>
                                            </div>
                                        </div>
                                        <div class="caption product-detail text-center">
                                            <div class="rating"> <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-1x"></i><i
                                                        class="fa fa-star fa-stack-1x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                        class="fa fa-star fa-stack-1x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                        class="fa fa-star fa-stack-1x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                        class="fa fa-star fa-stack-1x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                        class="fa fa-star fa-stack-x"></i></span> </div>
                                            <h6 data-name="product_name" class="product-name"><a href="#"
                                                    title="Casual Shirt With Ruffle Hem">New
                                                    LCDScreen and HD Vide..</a></h6>
                                            <span class="price"><span class="amount"><span
                                                        class="currencySymbol">$</span>70.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid">
                                <div class="item">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"> <a href="product_detail_page.html">
                                                <img data-name="product_image"
                                                    src="{{ asset('images/product/product2.jpg') }}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"> <img
                                                    src="{{ asset('images/product/product2-1.jpg') }}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"> </a>
                                            <div class="button-group text-center">
                                                <div class="wishlist"><a href="#"><span>wishlist</span></a>
                                                </div>
                                                <div class="quickview"><a href="#"><span>Quick
                                                            View</span></a></div>
                                                <div class="compare"><a href="#"><span>Compare</span></a>
                                                </div>
                                                <div class="add-to-cart"><a href="#"><span>Add to
                                                            cart</span></a></div>
                                            </div>
                                        </div>
                                        <div class="caption product-detail text-center">
                                            <div class="rating"> <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-1x"></i><i
                                                        class="fa fa-star fa-stack-1x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                        class="fa fa-star fa-stack-1x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                        class="fa fa-star fa-stack-1x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                        class="fa fa-star fa-stack-1x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                        class="fa fa-star fa-stack-x"></i></span> </div>
                                            <h6 data-name="product_name" class="product-name"><a href="#"
                                                    title="Casual Shirt With Ruffle Hem">New
                                                    LCDScreen and HD Vide..</a></h6>
                                            <span class="price"><span class="amount"><span
                                                        class="currencySymbol">$</span>70.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- =====  SUB BANNER END  ===== -->
            <div id="brand_carouse" class="ptb_60 text-center">
                <div class="type-01">
                    <div class="heading-part mb_10 ">
                        <h2 class="main_title">{{ __('Brands') }}</h2>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="brand owl-carousel ptb_20">
                                <div class="item text-center"> <a href="#"><img
                                            src="{{ asset('images/brand/1.jpg') }}" alt="Disney"
                                            class="img-responsive" /></a> </div>
                                <div class="item text-center"> <a href="#"><img
                                            src="{{ asset('images/brand/2.jpg') }}" alt="Dell"
                                            class="img-responsive" /></a> </div>
                                <div class="item text-center"> <a href="#"><img
                                            src="{{ asset('images/brand/3.jpg') }}" alt="Harley"
                                            class="img-responsive" /></a> </div>
                                <div class="item text-center"> <a href="#"><img
                                            src="{{ asset('images/brand/4.jpg') }}" alt="Canon"
                                            class="img-responsive" /></a> </div>
                                <div class="item text-center"> <a href="#"><img
                                            src="{{ asset('images/brand/5.jpg') }}" alt="Canon"
                                            class="img-responsive" /></a> </div>
                                <div class="item text-center"> <a href="#"><img
                                            src="{{ asset('images/brand/6.jpg') }}" alt="Canon"
                                            class="img-responsive" /></a> </div>
                                <div class="item text-center"> <a href="#"><img
                                            src="{{ asset('images/brand/7.jpg') }}" alt="Canon"
                                            class="img-responsive" /></a> </div>
                                <div class="item text-center"> <a href="#"><img
                                            src="{{ asset('images/brand/8.jpg') }}" alt="Canon"
                                            class="img-responsive" /></a> </div>
                                <div class="item text-center"> <a href="#"><img
                                            src="{{ asset('images/brand/9.jpg') }}" alt="Canon"
                                            class="img-responsive" /></a> </div>
                                <div class="item text-center"> <a href="#"><img
                                            src="{{ asset('images/brand/10.jpg') }}" alt="Canon"
                                            class="img-responsive" /></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- =====  CONTAINER END  ===== -->
        <!-- =====  FOOTER START  ===== -->
        @extends('layout.footer')
        @section('footer')
        @endsection
        <!-- =====  FOOTER END  ===== -->
    </div>
    @extends('layout.js')
    @section('js')
    @endsection
</body>

</html>
