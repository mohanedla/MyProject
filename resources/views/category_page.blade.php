<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <!-- =====  BASIC PAGE NEEDS  ===== -->
    <meta charset="utf-8">
    <title>{{ __('shop') }}</title>
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
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">

    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-touch-icon-114x114.png') }}">
</head>

<body>
    <!-- =====  LODER  ===== -->
    <div class="loder"></div>
    <div class="wrapper">
        <!-- =====  HEADER START  ===== -->
        <header id="header">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4">
                            <div class="header-top-left">
                                <div class="contact"><span class="hidden-xs hidden-sm hidden-md"></span></div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-8">
                            <ul class="header-top-right text-right">
                                <li class="account"><a href="login">My Account</a></li>
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
                                        role="button">Currency <span class="caret"></span> </span>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu12">

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
                        <div class="navbar-header col-xs-6 col-sm-4"> <a class="navbar-brand" href="index.html"> <img
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
                                                        <input class="cart-qty" name="product_quantity"
                                                            min="1" value="1" type="number">
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
                                                        <input class="cart-qty" name="product_quantity"
                                                            min="1" value="1" type="number">
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
                                                <li class="dropdown-header">{{ __('Childrens') }}</li>
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
                                    </ul>
                                </li>
                                <li> <a href="shop">{{ __('shop') }}</a></li>
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
        <!-- =====  CONTAINER START  ===== -->
        <div class="container">
            <div class="row ">
                <!-- =====  BANNER STRAT  ===== -->
                <div class="col-sm-12">
                    <div class="breadcrumb ptb_20">
                        <h1>{{ __('Products') }}</h1>
                        <ul>
                            <li><a href="home">{{ __('Home') }}</a></li>
                            <li class="active">{{ __('Products') }}</li>
                        </ul>
                    </div>
                </div>
                <!-- =====  BREADCRUMB END===== -->
                <div id="column-left" class="col-sm-4 col-lg-3 ">
                    <div id="category-menu" class="navbar collapse in mb_40" aria-expanded="true" style=""
                        role="button">
                        <div class="nav-responsive">


                        </div>
                    </div>
                    <div class="filter left-sidebar-widget mb_50">
                        <div class="heading-part mtb_20 ">
                            <h2 class="main_title">Refinr Search</h2>
                        </div>
                        <div class="filter-block">
                            <p>
                                <label for="amount">Price range:</label>
                                <input type="text" id="amount" readonly>
                            </p>
                            <div id="slider-range" class="mtb_20"></div>
                            <div class="list-group">
                                <div class="list-group-item mb_10">
                                    <label>Color</label>
                                    <div id="filter-group1">
                                        <div class="checkbox">
                                            <label>
                                                <input value="" type="checkbox"> Red (10)</label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input value="" type="checkbox"> Green (06)</label>
                                        </div>
                                        <div class="checkbox ">
                                            <label>
                                                <input value="" type="checkbox"> Blue(09)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item mb_10">
                                    <label>Size</label>
                                    <div id="filter-group3">
                                        <div class="checkbox">
                                            <label>
                                                <input value="" type="checkbox"> Big (3)</label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input value="" type="checkbox"> Medium (2)</label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input value="" type="checkbox"> Small (1)</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn">Refine Search</button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-8 col-lg-9 mtb_20">
                    <div class="category-page-wrapper mb_30">
                        <div class="list-grid-wrapper pull-left">
                            <div class="btn-group btn-list-grid">
                                <button type="button" id="grid-view"
                                    class="btn btn-default grid-view active"></button>
                                <button type="button" id="list-view" class="btn btn-default list-view"></button>
                            </div>
                        </div>
                        <div class="page-wrapper pull-right">
                            <label class="control-label" for="input-limit">Show :</label>
                            <div class="limit">
                                <select id="input-limit" class="form-control">
                                    <option value="8" selected="selected">08</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="75">75</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                            <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                        </div>
                        <div class="sort-wrapper pull-right">
                            <label class="control-label" for="input-sort">Sort By :</label>
                            <div class="sort-inner">
                                <select id="input-sort" class="form-control">
                                    <option value="ASC" selected="selected">Default</option>
                                    <option value="ASC">Name (A - Z)</option>
                                    <option value="DESC">Name (Z - A)</option>
                                    <option value="ASC">Price (Low &gt; High)</option>
                                    <option value="DESC">Price (High &gt; Low)</option>
                                    <option value="DESC">Rating (Highest)</option>
                                    <option value="ASC">Rating (Lowest)</option>
                                    <option value="ASC">Model (A - Z)</option>
                                    <option value="DESC">Model (Z - A)</option>
                                </select>
                            </div>
                            <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="product-layout product-grid col-md-4 col-xs-6 ">
                            <div class="item">
                                <div class="product-thumb clearfix mb_30">
                                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img
                                                data-name="product_image"
                                                src="{{ asset('images/product/product3.jpg') }}" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> <img
                                                src="{{ asset('images/product/product3-1.jpg') }}" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> </a>
                                        <div class="button-group text-center">
                                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption product-detail text-center">
                                        <h6 data-name="product_name" class="product-name mt_20"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video
                                                Recording</a></h6>
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
                                        <span class="price"><span class="amount"><span
                                                    class="currencySymbol">$</span>70.00</span>
                                        </span>
                                        <p class="product-desc mt_20 mb_60"> More room to move. With 80GB or 160GB of
                                            storage and up to 40 hours of battery life, the new iPod classic lets you
                                            enjoy up to 40,000 songs or up to 200 hours of video or any combination
                                            wherever you go.Cover Flow. Browse through your music collection by
                                            flipping..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout product-grid col-md-4 col-xs-6 ">
                            <div class="item">
                                <div class="product-thumb clearfix mb_30">
                                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img
                                                data-name="product_image"
                                                src="{{ asset('images/product/product4.jpg') }}" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> <img
                                                src="{{ asset('images/product/product4-1.jpg') }}" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> </a>
                                        <div class="button-group text-center">
                                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption product-detail text-center">
                                        <h6 data-name="product_name" class="product-name mt_20"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video
                                                Recording</a></h6>
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
                                        <span class="price"><span class="amount"><span
                                                    class="currencySymbol">$</span>70.00</span>
                                        </span>
                                        <p class="product-desc mt_20 mb_60"> More room to move. With 80GB or 160GB of
                                            storage and up to 40 hours of battery life, the new iPod classic lets you
                                            enjoy up to 40,000 songs or up to 200 hours of video or any combination
                                            wherever you go.Cover Flow. Browse through your music collection by
                                            flipping..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout product-grid col-md-4 col-xs-6 ">
                            <div class="item">
                                <div class="product-thumb clearfix mb_30">
                                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img
                                                data-name="product_image"
                                                src="{{ asset('images/product/product5.jpg') }}" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> <img
                                                src="{{ asset('images/product/product5-1.jpg') }}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                                        </a>
                                        <div class="button-group text-center">
                                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption product-detail text-center">
                                        <h6 data-name="product_name" class="product-name mt_20"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video
                                                Recording</a></h6>
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
                                        <span class="price"><span class="amount"><span
                                                    class="currencySymbol">$</span>70.00</span>
                                        </span>
                                        <p class="product-desc mt_20 mb_60"> More room to move. With 80GB or 160GB of
                                            storage and up to 40 hours of battery life, the new iPod classic lets you
                                            enjoy up to 40,000 songs or up to 200 hours of video or any combination
                                            wherever you go.Cover Flow. Browse through your music collection by
                                            flipping..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout product-grid col-md-4 col-xs-6 ">
                            <div class="item">
                                <div class="product-thumb clearfix mb_30">
                                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img
                                                data-name="product_image" src="{{asset ('images/product/product6.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                                            <img src="{{ asset('images/product/product6-1.jpg') }}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                                        </a>
                                        <div class="button-group text-center">
                                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption product-detail text-center">
                                        <h6 data-name="product_name" class="product-name mt_20"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video
                                                Recording</a></h6>
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
                                        <span class="price"><span class="amount"><span
                                                    class="currencySymbol">$</span>70.00</span>
                                        </span>
                                        <p class="product-desc mt_20 mb_60"> More room to move. With 80GB or 160GB of
                                            storage and up to 40 hours of battery life, the new iPod classic lets you
                                            enjoy up to 40,000 songs or up to 200 hours of video or any combination
                                            wherever you go.Cover Flow. Browse through your music collection by
                                            flipping..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout product-grid col-md-4 col-xs-6 ">
                            <div class="item">
                                <div class="product-thumb clearfix mb_30">
                                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img
                                                data-name="product_image" src="{{asset ('images/product/product7.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                                            <img src="{{ asset('images/product/product7-1.jpg') }}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                                        </a>
                                        <div class="button-group text-center">
                                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                            <div class="quickview"><a href="#"><span>Quick View</span></a>
                                            </div>
                                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption product-detail text-center">
                                        <h6 data-name="product_name" class="product-name mt_20"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video
                                                Recording</a></h6>
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
                                        <span class="price"><span class="amount"><span
                                                    class="currencySymbol">$</span>70.00</span>
                                        </span>
                                        <p class="product-desc mt_20 mb_60"> More room to move. With 80GB or 160GB of
                                            storage and up to 40 hours of battery life, the new iPod classic lets you
                                            enjoy up to 40,000 songs or up to 200 hours of video or any combination
                                            wherever you go.Cover Flow. Browse through your music collection by
                                            flipping..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout product-grid col-md-4 col-xs-6 ">
                            <div class="item">
                                <div class="product-thumb  mb_30">
                                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img
                                                data-name="product_image"
                                                src="{{ asset('images/product/product8.jpg') }}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                                            <img src="{{ asset('images/product/product8-1.jpg') }}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                                        </a>
                                        <div class="button-group text-center">
                                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                            <div class="quickview"><a href="#"><span>Quick View</span></a>
                                            </div>
                                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption product-detail text-center">
                                        <h6 data-name="product_name" class="product-name mt_20"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video
                                                Recording</a></h6>
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
                                        <span class="price"><span class="amount"><span
                                                    class="currencySymbol">$</span>70.00</span>
                                        </span>
                                        <p class="product-desc mt_20 mb_60"> More room to move. With 80GB or 160GB of
                                            storage and up to 40 hours of battery life, the new iPod classic lets you
                                            enjoy up to 40,000 songs or up to 200 hours of video or any combination
                                            wherever you go.Cover Flow. Browse through your music collection by
                                            flipping..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout product-grid col-md-4 col-xs-6 ">
                            <div class="item">
                                <div class="product-thumb  mb_30">
                                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img
                                                data-name="product_image" src="{{asset ('images/product/product9.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                                            <img src="{{ asset('images/product/product9-1.jpg') }}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                                        </a>
                                        <div class="button-group text-center">
                                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                            <div class="quickview"><a href="#"><span>Quick View</span></a>
                                            </div>
                                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption product-detail text-center">
                                        <h6 data-name="product_name" class="product-name mt_20"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video
                                                Recording</a></h6>
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
                                        <span class="price"><span class="amount"><span
                                                    class="currencySymbol">$</span>70.00</span>
                                        </span>
                                        <p class="product-desc mt_20 mb_60"> More room to move. With 80GB or 160GB of
                                            storage and up to 40 hours of battery life, the new iPod classic lets you
                                            enjoy up to 40,000 songs or up to 200 hours of video or any combination
                                            wherever you go.Cover Flow. Browse through your music collection by
                                            flipping..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout product-grid col-md-4 col-xs-6 ">
                            <div class="item">
                                <div class="product-thumb  mb_30">
                                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img
                                                data-name="product_image" src="{{asset ('images/product/product10.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                                            <img src="{{ asset('images/product/product10-1.jpg') }}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                                        </a>
                                        <div class="button-group text-center">
                                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                            <div class="quickview"><a href="#"><span>Quick View</span></a>
                                            </div>
                                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption product-detail text-center">
                                        <h6 data-name="product_name" class="product-name mt_20"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video
                                                Recording</a></h6>
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
                                        <span class="price"><span class="amount"><span
                                                    class="currencySymbol">$</span>70.00</span>
                                        </span>
                                        <p class="product-desc mt_20 mb_60"> More room to move. With 80GB or 160GB of
                                            storage and up to 40 hours of battery life, the new iPod classic lets you
                                            enjoy up to 40,000 songs or up to 200 hours of video or any combination
                                            wherever you go.Cover Flow. Browse through your music collection by
                                            flipping..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout product-grid col-md-4 col-xs-6 ">
                            <div class="item">
                                <div class="product-thumb  mb_30">
                                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img
                                                data-name="product_image" src="{{asset ('images/product/product1.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                                            <img src="{{ asset('images/product/product1-1.jpg') }}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                                        </a>
                                        <div class="button-group text-center">
                                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                            <div class="quickview"><a href="#"><span>Quick View</span></a>
                                            </div>
                                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption product-detail text-center">
                                        <h6 data-name="product_name" class="product-name mt_20"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video
                                                Recording</a></h6>
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
                                        <span class="price"><span class="amount"><span
                                                    class="currencySymbol">$</span>70.00</span>
                                        </span>
                                        <p class="product-desc mt_20 mb_60"> More room to move. With 80GB or 160GB of
                                            storage and up to 40 hours of battery life, the new iPod classic lets you
                                            enjoy up to 40,000 songs or up to 200 hours of video or any combination
                                            wherever you go.Cover Flow. Browse through your music collection by
                                            flipping..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout product-grid col-md-4 col-xs-6 ">
                            <div class="item">
                                <div class="product-thumb  mb_30">
                                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img
                                                data-name="product_image" src="{{asset ('images/product/product2.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                                            <img src="{{ asset('images/product/product2-1.jpg') }}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                                        </a>
                                        <div class="button-group text-center">
                                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                            <div class="quickview"><a href="#"><span>Quick View</span></a>
                                            </div>
                                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption product-detail text-center">
                                        <h6 data-name="product_name" class="product-name mt_20"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video
                                                Recording</a></h6>
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
                                        <span class="price"><span class="amount"><span
                                                    class="currencySymbol">$</span>70.00</span>
                                        </span>
                                        <p class="product-desc mt_20 mb_60"> More room to move. With 80GB or 160GB of
                                            storage and up to 40 hours of battery life, the new iPod classic lets you
                                            enjoy up to 40,000 songs or up to 200 hours of video or any combination
                                            wherever you go.Cover Flow. Browse through your music collection by
                                            flipping..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout product-grid col-md-4 col-xs-6 ">
                            <div class="item">
                                <div class="product-thumb  mb_30">
                                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img
                                                data-name="product_image" src="{{asset ('images/product/product3.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                                            <img src="{{ asset('images/product/product3-1.jpg') }}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                                        </a>
                                        <div class="button-group text-center">
                                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                            <div class="quickview"><a href="#"><span>Quick View</span></a>
                                            </div>
                                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption product-detail text-center">
                                        <h6 data-name="product_name" class="product-name mt_20"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video
                                                Recording</a></h6>
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
                                        <span class="price"><span class="amount"><span
                                                    class="currencySymbol">$</span>70.00</span>
                                        </span>
                                        <p class="product-desc mt_20 mb_60"> More room to move. With 80GB or 160GB of
                                            storage and up to 40 hours of battery life, the new iPod classic lets you
                                            enjoy up to 40,000 songs or up to 200 hours of video or any combination
                                            wherever you go.Cover Flow. Browse through your music collection by
                                            flipping..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout product-grid col-md-4 col-xs-6 ">
                            <div class="item">
                                <div class="product-thumb  mb_30">
                                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img
                                                data-name="product_image" src="{{asset ('images/product/product4.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                                            <img src="{{ asset('images/product/product4-1.jpg') }}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                                        </a>
                                        <div class="button-group text-center">
                                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                            <div class="quickview"><a href="#"><span>Quick View</span></a>
                                            </div>
                                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption product-detail text-center">
                                        <h6 data-name="product_name" class="product-name mt_20"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video
                                                Recording</a></h6>
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
                                        <span class="price"><span class="amount"><span
                                                    class="currencySymbol">$</span>70.00</span>
                                        </span>
                                        <p class="product-desc mt_20 mb_60"> More room to move. With 80GB or 160GB of
                                            storage and up to 40 hours of battery life, the new iPod classic lets you
                                            enjoy up to 40,000 songs or up to 200 hours of video or any combination
                                            wherever you go.Cover Flow. Browse through your music collection by
                                            flipping..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-nav text-center mt_50">
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
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
        @extends('layout.footer')
        <!-- =====  CONTAINER END  ===== -->
        <!-- =====  FOOTER START  ===== -->
        @section('footer')

        @endsection
        <!-- =====  FOOTER END  ===== -->
    </div>
    @extends('layout.js')
    @section('js')

    </body>

    </html>
