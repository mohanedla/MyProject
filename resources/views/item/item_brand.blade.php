<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--<![endif]-->

<head>
    <!-- =====  BASIC PAGE NEEDS  ===== -->
    <meta charset="utf-8">

    <title>{{ __('Products') . ' '  }}</title>
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
                                @if (Auth::user()->profile_image)
                                    <img src="{{ asset(Storage::url(Auth::user()->profile_image)) }}" alt="Profile"
                                        style="  border-radius: 50%;
                                    -webkit-border-radius: 50%;
                                    -moz-border-radius: 50%;
                                    width: 40px;
                                    height: 40px;">
                                @endif
                                </a>
                                <li class="currency dropdown"> <span class="dropdown-toggle" id="dropdownMenu12"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        role="button">{{ Auth::user()->name }} <span class="caret"></span> </span>
                                    <a class="rounded-circle">
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
                                    role="button">{{ __('Language') }}&nbsp; <span class="caret"></span> </span>
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
                            <!--
                            @if (Auth::user())
@if (Auth::user()->role == '3')
@endif
@endif -->
                            @if (Auth::user())
                                @if (Auth::user()->role == '1' || Auth::user()->role == '2')
                                    <li class="nav-item">
                                        <a class="account" href="/dashboard_home">{{ __('System management') }}</a>
                                    </li>
                                @endif
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
                    </div>
                    <div class="navbar-header col-xs-6 col-sm-4"> <a class="navbar-brand" href="/home">
                            <img alt="themini" src="{{ asset('images/logo/logo4.jpg') }}"> </a> </div>
                    @if (Auth::User())
                        <x-share.cart-shop></x-share.cart-shop>
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
                                            <li><a href="/category/{{ $men->id }}/Men">{{ __($men->name) }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>

                                <li class="col-md-3">
                                    <ul>
                                        <li class="dropdown-header">{{ __('Children') }}</li>
                                        @foreach ($category_kids as $kids)
                                            <li><a
                                                    href="/category/{{ $kids->id }}/Kids">{{ __($kids->name) }}</a>
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



                        @if (Auth::User())
                            <li> <a href="/shop">{{ __('shop') }}</a></li>
                        @endif
                        @if (Auth::user())
                                <li class="dropdown"> <a href="#" class="dropdown-toggle"
                                        data-toggle="dropdown">{{ __('previous orders') }} </a>

                                    <ul class="dropdown-menu">
                                        <div class="cart-dropdown2">
                                            @php
                                                $i = 0;
                                            @endphp
                                            @foreach ($old_order as $order)
                                                <li> <a href="/old_Bills/{{ $order->id }}">{{ __('INVOICE') }}
                                                        {{ ++$i }}
                                                    </a></li>



                                            @endforeach

                                            @empty($old_order->count())
                                            <li style="text-align: center;"> {{ __('There are no orders') }}</li>
                                        @endempty

                                    </div>
                                </ul>
                            </li>
                    @endif


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
            <div class="col-sm-12 mt_30">
                <!-- =====  PRODUCT TAB  ===== -->

                <div class="row">
                    <div class="col-sm-12 mtb_10">
                        <!-- =====  PRODUCT TAB  ===== -->
                        <div class="mt_60">
                            <div class="heading-part mb_10 ">
                                <h2 class="main_title">{{ __('Men') }}</h2>
                            </div>
                            <div class="latest_pro box">
                                <div class="latest owl-carousel">
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach ($products as $item)
                                        @if ($item->collection == $collect['M'])
                                        @if($item->quantity>$item->quantity_price)

                                            <div class="product-grid">
                                                <div class="item">
                                                    <div class="product-thumb">
                                                    <div class="image product-imageblock" style="height: 300px;">
                                                            <a href="/product_detail_page/{{ $item->id }}"
                                                                style="height: -webkit-fill-available;">
                                                                <img data-name="product_image"
                                                                    style="height: -webkit-fill-available;"
                                                                    src="{{ asset(Storage::url($item->profile_image)) }}"
                                                                    alt="iPod Classic" title="iPod Classic"
                                                                    class="img-responsive"> <img
                                                                    style="height: -webkit-fill-available;"
                                                                    src="{{ asset(Storage::url($item->profile_image)) }}"
                                                                    alt="iPod Classic" title="iPod Classic"
                                                                    class="img-responsive"> </a>
                                                            <div class="button-group text-center">

                                                            </div>
                                                        </div>
                                                        <div class="caption product-detail text-center">
                                                            <div class="rating"> <span class="fa fa-stack"><i
                                                                        class="fa fa-star-o fa-stack-1x"></i><i
                                                                        class="fa fa-star fa-stack-1x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star-o fa-stack-1x"></i><i
                                                                        class="fa fa-star fa-stack-1x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star-o fa-stack-1x"></i><i
                                                                        class="fa fa-star fa-stack-1x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star-o fa-stack-1x"></i><i
                                                                        class="fa fa-star fa-stack-1x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star-o fa-stack-1x"></i><i
                                                                        class="fa fa-star fa-stack-x"></i></span>
                                                            </div>
                                                            <h6 data-name="product_name" class="product-name"><a
                                                                    href="#"
                                                                    title="Casual Shirt With Ruffle Hem">
                                                                    {{ $item->name }} &nbsp; {{ $item->brand->name }} </a></h6>
                                                            @if (Auth::User())
                                                                <span class="price"><span class="amount"><span
                                                                            class="currencySymbol">$</span>{{ $item->price }}.00
                                                                        </span>
                                                                       <br>
                                                                        <span class="price"><span class="amount"><span class="currencySymbol">LYD </span>{{ round( $item->price  * Session::get('LYD') , 2) }}</span>

                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @php
                                                $i++;
                                            @endphp
                                        @endif
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="mt_60">
                            <div class="heading-part mb_10 ">
                                <h2 class="main_title">{{ __('Women') }}</h2>
                            </div>
                            <div class="latest_pro box">
                                <div class="latest owl-carousel">
                                    @foreach ($products as $item)
                                        @if ($item->collection == $collect['W'])
                                        @if($item->quantity>$item->quantity_price)

                                            <div class="product-grid">
                                                <div class="item">
                                                    <div class="product-thumb">
                                                    <div class="image product-imageblock" style="height: 300px;">

                                                    <a href="/product_detail_page/{{ $item->id }}"
                                                        style="height: -webkit-fill-available;">
                                                        <img data-name="product_image"
                                                            style="height: -webkit-fill-available;"
                                                            src="{{ asset(Storage::url($item->profile_image)) }}"
                                                            alt="iPod Classic" title="iPod Classic"
                                                            class="img-responsive"> <img
                                                            style="height: -webkit-fill-available;"
                                                            src="{{ asset(Storage::url($item->profile_image)) }}"
                                                            alt="iPod Classic" title="iPod Classic"
                                                            class="img-responsive">

                                                    </a>
                                                    <div class="button-group text-center">

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
                                                            href="#" title="Casual Shirt With Ruffle Hem">
                                                            {{ $item->name }} &nbsp; {{ $item->brand->name }}</a></h6>
                                                    @if (Auth::User())
                                                        <span class="price"><span class="amount"><span
                                                                    class="currencySymbol">$</span>{{ $item->price }}.00</span>
                                                                   <br>
                                                                    <span class="price"><span class="amount"><span class="currencySymbol">LYD </span>{{ round( $item->price  * Session::get('LYD') , 2) }}</span>

                                                                </span>
                                                    @endif
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="mt_60">
                            <div class="heading-part mb_10 ">
                                <h2 class="main_title">{{ __('Children') }}</h2>
                            </div>
                            <div class="latest_pro box">
                                <div class="latest owl-carousel">
                                    @foreach ($products as $item)
                                        @if ($item->collection == $collect['C'])
                                        @if($item->quantity>$item->quantity_price)

                                            <div class="product-grid">
                                                <div class="item">
                                                    <div class="product-thumb">
                                                    <div class="image product-imageblock" style="height: 300px;">
                                                            <a href="/product_detail_page/{{ $item->id }}"
                                                                style="height: -webkit-fill-available;"
                                                                sstyle="height: -webkit-fill-available;">
                                                                <img data-name="product_image"
                                                                    style="height: -webkit-fill-available;"
                                                                    src="{{ asset(Storage::url($item->profile_image)) }}"
                                                                    alt="iPod Classic" title="iPod Classic"
                                                                    class="img-responsive"> <img
                                                                    style="height: -webkit-fill-available;"
                                                                    src="{{ asset(Storage::url($item->profile_image)) }}"
                                                                    alt="iPod Classic" title="iPod Classic"
                                                                    class="img-responsive"> </a>
                                                            <div class="button-group text-center">

                                                            </div>
                                                        </div>
                                                        <div class="caption product-detail text-center">
                                                            <div class="rating"> <span class="fa fa-stack"><i
                                                                        class="fa fa-star-o fa-stack-1x"></i><i
                                                                        class="fa fa-star fa-stack-1x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star-o fa-stack-1x"></i><i
                                                                        class="fa fa-star fa-stack-1x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star-o fa-stack-1x"></i><i
                                                                        class="fa fa-star fa-stack-1x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star-o fa-stack-1x"></i><i
                                                                        class="fa fa-star fa-stack-1x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star-o fa-stack-1x"></i><i
                                                                        class="fa fa-star fa-stack-x"></i></span>
                                                            </div>
                                                            <h6 data-name="product_name" class="product-name"><a
                                                                    href="#"
                                                                    title="Casual Shirt With Ruffle Hem">
                                                                    {{ $item->name }} &nbsp; {{ $item->brand->name }}</a></h6>
                                                            @if (Auth::User())
                                                                <span class="price"><span class="amount"><span
                                                                            class="currencySymbol">$</span>{{ $item->price }}.00</span>
                                                                           <br>
                                                                            <span class="price"><span class="amount"><span class="currencySymbol">LYD </span>{{ round( $item->price  * Session::get('LYD') , 2) }}</span>

                                                                            <!-- <form action="/">

             <input class="btn pull-right mt_30" type="submit" value="{{ __('Add to cart') }}" />

         </form> -->

                                                                        </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        @endif
                                    @endforeach
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
                                        @foreach ($brand as $x)
                                            <div class="item text-center"> <a
                                                    href="/item_brand/{{ $x->id }}"><img
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
