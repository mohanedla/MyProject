<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--<![endif]-->

<head>
    <!-- =====  BASIC PAGE NEEDS  ===== -->
    <meta charset="utf-8">
    <title>{{ __($product[0]->name)}}{{' '}}{{ __($name) }}</title>
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

                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="account" href="/login_register">{{ __('My Account') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="currency dropdown"> <span class="dropdown-toggle" id="dropdownMenu12"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        role="button">{{ Auth::user()->name }} <span class="caret"></span> </span>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu12">

                                        <li><a class="dropdown-item" href="/home"
                                                onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endguest
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
                            @if (Auth::user())
                                @if (Auth::user()->role == 'admin' || Auth::user()->role == 'supervisor')
                                    {{-- @if ((Auth::User()->role = 'admin') or (Auth::User()->role = 'supervisor')) --}}
                                    <li class="currency dropdown"> <span class="dropdown-toggle" id="dropdownMenu12"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            role="button">{{ __('Properties') }} <span class="caret"></span> </span>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu12">

                                            <li><a href="/admin">{{ __('admin management') }}</a></li>
                                            <li><a href="/user">{{ __('user management') }}</a></li>
                                            <li><a href="/product">{{ __('Product Management') }}</a></li>
                                            <li><a href="/brand">{{ __('Brands') }}</a></li>
                                            <li><a href="/reports">{{ __('Reports') }}</a></li>
                                        </ul>
                                    </li>
                                @endif
                                {{-- @endif --}}
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {{-- @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif --}}
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <!-- <div class="main-search mt_40">
                            <input id="search-input" name="search" value=""
                                placeholder="{{ __('Search') }}" class="form-control input-lg" autocomplete="off"
                                type="text">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-lg"><i
                                        class="fa fa-search"></i></button>
                            </span>
                        </div> -->
                    </div>
                    <div class="navbar-header col-xs-6 col-sm-4"> <a class="navbar-brand" href="home"> <img
                                alt="themini" src="{{ asset('images/logo/logo4.jpg') }}"> </a> </div>
                    <div class="col-xs-6 col-sm-4 shopcart">
                        <div id="cart" class="btn-group btn-block mtb_40">
                            <button type="button" class="btn" data-target="#cart-dropdown"
                                data-toggle="collapse" aria-expanded="true"><span
                                    id="shippingcart">{{ __('Shopping cart') }}</span><span
                                    id="cart-total">{{ __('items') }} (0)</span> </button>
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
                                                <td class="text-right"><strong>{{ __('Sub-Total') }} </strong></td>
                                                <td class="text-right">$2,100.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>{{ __('VAT') }} (20%)</strong></td>
                                                <td class="text-right">$20.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>"{{ __('Total') }}"</strong></td>
                                                <td class="text-right">$2,122.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li>
                                <li>
                                    <form action="cart_page">
                                        <input class="btn pull-left mt_10" value="{{ __('View cart') }}"
                                            type="submit">
                                    </form>
                                    <form action="checkout_page">
                                        <input class="btn pull-right mt_10" value="{{ __('Checkout') }}"
                                            type="submit">
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <nav class="navbar">
                    <p>{{ __('menu')}}</p>
                    <button class="navbar-toggle" type="button" data-toggle="collapse"
                        data-target=".js-navbar-collapse"> <span class="i-bar"><i
                                class="fa fa-bars"></i></span></button>
                    <div class="collapse navbar-collapse js-navbar-collapse">
                        <ul id="menu" class="nav navbar-nav">
                            <li> <a href="/home">{{ __('Home') }}</a></li>
                            <li class="dropdown mega-dropdown"> <a href="#" class="dropdown-toggle"
                                    data-toggle="dropdown">{{ __('Collection') }} </a>
                                <ul class="dropdown-menu mega-dropdown-menu row">
                                    <li class="col-md-3">
                                        <ul>
                                            <li class="dropdown-header">{{ __('Women') }}</li>
                                            @foreach ($categories as $category)
                                                <li><a href="#">{{ __($category->name) }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="col-md-3">
                                        <ul>
                                            <li class="dropdown-header">{{ __('Men') }}</li>
                                            @foreach ($categories as $category)
                                                <li><a href="#">{{ __($category->name) }}</a></li>
                                            @endforeach

                                        </ul>
                                    </li>

                                    <li class="col-md-3">
                                        <ul>
                                            <li class="dropdown-header">{{ __('Children') }}</li>
                                            <li><a href="#"><select name="dropdown" class="dropdown_ch"></a>
                                            <li>
                                                <option class="option_ch"><a href="#">{{ __('Born') }}</a>
                                                </option>
                                            </li>
                                            <li>
                                                <option class="option_ch"><a href="#">{{ __('Boys') }}</a>
                                                </option>
                                            </li>
                                            <li>
                                                <option class="option_ch"><a href="#">{{ __('Girls') }}</a>
                                                </option>
                                            </li>
                                            </select>
                                    </li>
                                    <li><a href="#"><select name="dropdown" class="dropdown_ch"></a>
                                    <li>
                                        <option class="option_ch"><a href="#">{{ __('Childrens') }}</a>
                                        </option>
                                    </li>
                                    <li>
                                        <option class="option_ch"><a href="#">{{ __('Boys') }}</a>
                                        </option>
                                    </li>
                                    <li>
                                        <option class="option_ch"><a href="#">{{ __('Girls') }}</a>
                                        </option>
                                    </li>
                                    </select>
                            </li>


                        </ul>
                        </li>
                        <li class="col-md-3">
                            <ul>
                                <li id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="item active"><a href=""> <img
                                                    src="{{asset('images/menu-banner1.jpg')}}"
                                                    class="img-responsive" alt="Banner1"></a></div>
                                    </div>
                                    <!-- End Carousel Inner -->
                                </li>
                                <!-- /.carousel -->
                            </ul>
                        <li class="col-md-3">
                        </li>
                        </ul>
                        </li>
                        <li> <a href="/shop">{{ __('shop') }}</a></li>
                        <li> <a href="/about">{{ __('About us') }}</a></li>
                        <li> <a href="/contact_us">{{ __('Contact us') }}</a></li>
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
                        <label class="control-label" for="input-limit">{{ __('Show') }} :</label>
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
                        <label class="control-label" for="input-sort">{{ __('Sort By') }} :</label>
                        <div class="sort-inner">
                            <select id="input-sort" class="form-control">
                                <option value="ASC" selected="selected">{{ __('Default') }}</option>
                                <option value="ASC">{{ __('Name') }} (A - Z)</option>
                                <option value="DESC">{{ __('Name') }} (Z - A)</option>
                                <option value="ASC"> {{ __('Price') }}(Low &gt; High)</option>
                                <option value="DESC">{{ __('Price') }}(High &gt; Low)</option>
                                <option value="DESC">{{ __('Rating') }} (Highest)</option>
                                <option value="ASC"> {{ __('Rating') }} (Lowest)</option>
                                <option value="ASC"> {{ __('Model') }}(A - Z)</option>
                                <option value="DESC">{{ __('Model') }}(Z - A)</option>
                            </select>
                        </div>
                        <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                    </div>
                </div>
                <div class="row">
                    @php
                        $i=0;
                    @endphp
                    @foreach ($items as $item)

                    <div class="product-layout product-grid col-md-4 col-xs-6 ">
                        <div class="item">
                            <div class="product-thumb clearfix mb_30">
                                <div class="image product-imageblock" style="height: 418px;">
                                        <a href="product_detail_page" style="height: -webkit-fill-available;">
                                            <img style="height: -webkit-fill-available;" data-name="product_image"
                                            src="{{ asset(Storage::url($item->profile_image)) }}" alt="iPod Classic"
                                            title="iPod Classic" class="img-responsive" />
                                            <img style="height: -webkit-fill-available;"
                                            src="{{ asset(Storage::url($item->profile_image)) }}" alt="iPod Classic"
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
                                            title="Casual Shirt With Ruffle Hem">
                                            {{ __($item->categories->name)}}</a></h6>
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
                                                class="currencySymbol">$</span>{{ $item->price }}.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php
                    $i++;
                @endphp
                    @endforeach

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
            <div class="row">
                <div class="col-sm-12 mtb_10">
                    <!-- =====  PRODUCT TAB  ===== -->

                    <!-- =====  SUB BANNER END  ===== -->
                    <div id="brand_carouse" class="ptb_60 text-center">
                        <div class="type-01">
                            <div class="heading-part mb_10 ">
                                <h2 class="main_title">{{ __('Brands') }}</h2>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="brand owl-carousel ptb_20">
                                        @foreach ($brand as $x)
                                            <div class="item text-center"> <a
                                                    href="item_brand/{{ $x->id }}"><img
                                                        src="{{ asset(Storage::url($x->profile_image)) }}"
                                                        alt="" class="img-responsive" /></a> </div>
                                        @endforeach

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
