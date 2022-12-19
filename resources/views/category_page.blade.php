<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <!-- =====  BASIC PAGE NEEDS  ===== -->
    <meta charset="utf-8">
    <title>{{ __('Shop') }}</title>
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
                                    @if (Auth::user()->role == '1' || Auth::user()->role == '2')
                                        {{-- @if ((Auth::User()->role = '1') or (Auth::User()->role = '2')) --}}
                                        <li class="nav-item">
                                            <a class="account" href="/dashboard_home">{{ __('System management') }}</a>
                                        </li>
                                    @endif
                                    {{-- @endif --}}
                                @endif


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
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
                        <div class="navbar-header col-xs-6 col-sm-4"> <a class="navbar-brand" href="/home"> <img
                                    alt="themini" src="{{ asset('images/logo/logo4.jpg') }}"> </a> </div>
                        @if (Auth::User())
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
                                                    <td class="text-right"><strong>"{{ __('Total') }}"</strong></td>
                                                    <td class="text-right">$2,122.00</td>
                                                </tbody>
                                            </table>
                                        </li>
                                        <li>
                                            <table class="table">
                                                <tbody>

                                                    <tr>
                                                    </tr>
                                                    <tr>
                                                        <form action="cart_page">
                                                            <input class="btn pull-left mt_10"
                                                                value="{{ __('View cart') }}" type="submit">
                                                        </form>
                                                    </tr>
                                                    <tr>
                                                        <form action="checkout_page">
                                                            <input class="btn pull-right mt_10"
                                                                value="{{ __('Checkout') }}" type="submit">
                                                        </form>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </li>
                                        <!-- <li>
                                    <form action="cart_page">
                                        <input class="btn pull-left mt_10" value="{{ __('View cart') }}"
                                            type="submit">
                                    </form>
                                    <form action="checkout_page">
                                        <input class="btn pull-right mt_10" value="{{ __('Checkout') }}"
                                            type="submit">
                                    </form>
                                </li> -->
                                    </ul>
                                </div>
                            </div>
                        @endif
                    </div>
                    <nav class="navbar">
                        <p>menu</p>
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
                                                @foreach ($category_women as $women)
                                                    <li><a
                                                            href="/category/{{ $women->id }}/Women">{{ __($women->name) }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="col-md-3">
                                            <ul>
                                                <li class="dropdown-header">{{ __('Men') }}</li>
                                                @foreach ($category_men as $men)
                                                    <li><a
                                                            href="/category/{{ $men->id }}/Women">{{ __($men->name) }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>

                                        <li class="col-md-3">
                                            <ul>
                                                <li class="dropdown-header">{{ __('Children') }}</li>
                                                @foreach ($category_kids as $kids)
                                                    <li><a
                                                            href="/category/{{ $kids->id }}/Women">{{ __($kids->name) }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="col-md-3">
                                            <ul>
                                                <li id="myCarousel" class="carousel slide" data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="item active">
                                                            <a href=""> <img
                                                                    src="{{ asset('images\uploads\shof_1d433f3c8569e7d-removebg-preview.png') }}"
                                                                    class="img-responsive" alt="Banner1"></a>
                                                        </div>
                                                    </div>
                                                    <!-- End Carousel Inner -->
                                                </li>
                                                <!-- /.carousel -->
                                            </ul>
                                        <li class="col-md-3">
                                        </li>
                                    </ul>
                                </li>
                                <li> <a href="shop">{{ __('/shop') }}</a></li>
                                <li> <a href="about">{{ __('/About us') }}</a></li>
                                <li> <a href="contact_us">{{ __('/Contact us') }}</a></li>

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
                        <h1>{{ __('Checkout') }}</h1>
                        <ul>
                            <li><a href="/home">{{ __('Home') }}</a></li>
                            <li class="active">{{ __('Checkout') }}</li>
                        </ul>
                    </div>
                </div>
                <!-- =====  BREADCRUMB END===== -->

                <div id="column-left" class="col-sm-4 col-lg-3 ">
                    <div id="category-menu" class="navbar collapse in mb_40" aria-expanded="true" style=""
                        role="button"></div>

                    <div id="column-left" class="col-sm-4 col-lg-3 hidden-xs">
                        <div id="category-menu" class="navbar collapse in mb_40">
                            <div class="nav-responsive">
                                <div class="heading-part">
                                    <h2 class="main_title">{{ __('Women') }}</h2>
                                </div>
                                <li class="nav navbar-nav">
                                    <ul>
                                        @foreach ($category_women as $women)
                                            <li><a
                                                    href="/category/{{ $women->id }}/Women">{{ __($women->name) }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <!-- </ul> -->



                                <!-- </div> -->
                                <div class="heading-part">
                                    <h2 class="main_title">{{ __('Men') }}</h2>
                                </div>
                                <li class="nav navbar-nav">
                                    <ul>
                                        @foreach ($category_men as $men)
                                            <li><a href="/category/{{ $men->id }}/Men">{{ __($men->name) }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            </div>
                            <div class="heading-part">
                                <h2 class="main_title">{{ __('Kids') }}</h2>
                            </div>
                            <li class="nav navbar-nav">
                                <ul>
                                    @foreach ($category_kids as $kids)
                                        <li><a href="/category/{{ $kids->id }}/Kids">{{ __($kids->name) }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        </div>
                    </div>
                    @extends('layout.js')
                    @section('js')

    </body>

    </html>
