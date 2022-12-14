<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <!-- =====  BASIC PAGE NEEDS  ===== -->
    <meta charset="utf-8">
    <title>{{ __('Reports') }}</title>
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

    <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet" />

    <link href="{{ asset('css/design4.css') }}" rel="stylesheet" />

    <style>
        .dataTables_filter input,
        .dataTables_length select {
            /* background: rgb(34, 34, 34); */
            /* border: 0px; */
            height: 40px;
            line-height: 20px;
            padding: 0 40px 0 10px;
            border: none;
            border-radius: 0;
            border: 1px solid #424242;
            background-color: #000;
        }

        .dataTables_filter label,
        .dataTables_length label,
        .dataTables_length option,
        #tblCustomer_previous {
            color: white;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.disabled,
        .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover,
        .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
            color: white;
        }

        .button {
            border-radius: 3px;
            background-color: #555555;
            color: white;
            border: 2px solid #555555;
            padding: 7px 45px;
            text-align: center;
            float: right;
            border: none;
            color: #FFFFFF;
            -webkit-transition-duration: 0.4s;
            margin: 16px 0 !important;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            transition-duration: 0.4s;
        }

        .button:hover {
            background-color: #0f0f0f;
            color: white;
        }

        .address {
            padding: 6px;
            font-size: xx-large;
        }

        .btn_add {
            margin-bottom: 20px;
            margin-top: 15px;
        }
    </style>
</head>

<body>
    @if (!Auth::check())
        <script>
            window.location.href = 'home';
        </script>
    @endif
    @if (Auth::user())
        @if (Auth::user()->role != 'admin' && Auth::user()->role != 'supervisor')
            <script>
                window.location.href = 'home';
            </script>
        @endif
    @endif
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
                                @endguest <li class="language dropdown"> <span class="dropdown-toggle"
                                        id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" role="button">{{ __('Language') }} <span
                                            class="caret"></span> </span>
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
                                        role="button">{{ __('Properties') }} <span class="caret"></span> </span>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu12">

                                        <li><a href="/admin">{{ __('admin management') }}</a></li>
                                        <li><a href="/user">{{ __('user management') }}</a></li>
                                        <li><a href="/product">{{ __('Product Management') }}</a></li>
                                        <li><a href="/brand">{{ __('Brands') }}</a></li>
                                        <li><a href="/reports">{{ __('Reports') }}</a></li>
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
                        </div>
                        <div class="navbar-header col-xs-6 col-sm-4"> <a class="navbar-brand" href="index.html"> <img
                                    alt="themini" src="{{ asset('images/logo/logo4.jpg') }}"> </a> </div>
                        <div class="col-xs-6 col-sm-4 shopcart">
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
                                                <li><a href="#"><select name="dropdown"
                                                            class="dropdown_ch"></a>
                                                <li>
                                                    <option class="option_ch"><a
                                                            href="#">{{ __('Born') }}</a>
                                                    </option>
                                                </li>
                                                <li>
                                                    <option class="option_ch"><a
                                                            href="#">{{ __('Boys') }}</a>
                                                    </option>
                                                </li>
                                                <li>
                                                    <option class="option_ch"><a
                                                            href="#">{{ __('Girls') }}</a>
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
                                                        src="{{ asset('images/menu-banner1.jpg') }}"
                                                        class="img-responsive" alt="Banner1"></a></div>
                                            {{--
                                                        <div class="item"> <img
                                                                    src="{{asset('images/menu-banner2.jpg')}}"
                                                                    class="img-responsive" alt="Banner1"></div>

                                                        <div class="item"> <img
                                                                    src="{{asset('images/menu-banner3.jpg')}}"
                                                                    class="img-responsive" alt="Banner1"></div> --}}

                                        </div>
                                        <!-- End Carousel Inner -->
                                    </li>
                                    <!-- /.carousel -->
                                </ul>
                            <li class="col-md-3">
                            </li>
                            </ul>
                            </li>
                            <li> <a href="shop">{{ __('shop') }}</a></li>
                            <li> <a href="about">{{ __('About us') }}</a></li>
                            <li> <a href="contact_us">{{ __('Contact us') }}</a></li>
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
                        <h1>{{ __('Reports') }}</h1>
                        <ul>
                            <li><a href="home">{{ __('Home') }}</a></li>
                            <li class="active">{{ __('Reports') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <br>
    <br>
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
