<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <!-- =====  BASIC PAGE NEEDS  ===== -->
    <meta charset="utf-8">
    <title>{{__ ('admin management')}}</title>
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
                                <li class="account"><a href="login">{{ __('My Account')}}</a></li>
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
                                        role="button">{{__('Properties')}} <span class="caret"></span> </span>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu12">

                                        <li><a href="admin">{{__ ('admin management')}}</a></li>
                                        <li><a href="user">{{__ ('user management')}}</a></li>
                                        <li><a href="product">{{__ ('Product Management')}}</a></li>
                                        <li><a href="brand">{{__ ('Brands')}}</a></li>
                                        <li><a href="reports">{{__ ('Reports')}}</a></li>
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
                                                    <li><a href="#"><select name="dropdown" class="dropdown_ch"></a>
                                                    <li>
                                                        <option class="option_ch"><a href="#">{{ __('puzzling') }}</a>
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
                        <h1>{{ __('admin management') }}</h1>
                        <ul>
                            <li><a href="home">{{ __('Home') }}</a></li>
                            <li class="active">{{ __('admin management') }}</li>
                        </ul>
                    </div>
                </div>
                  </div>
            </div>
            <div class="col-sm-8 col-lg-9 mtb_20">
                <!-- contact  -->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="panel-login panel">
                            <div class="panel-heading">
                                <div class="row mb_20">
                                    <div class="col-xs-6">
                                        <a href="#" class="active"
                                            id="login-form-link">{{ __('Login') }}</a>
                                    </div>
                                    <div class="col-xs-6">
                                        <a href="#" id="register-form-link">{{ __('Register') }}</a>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form id="login-form" action="#" method="post">
                                            <div class="form-group">
                                                <input type="text" name="username" id="username1"
                                                    tabindex="1" class="form-control"
                                                    placeholder="{{ __('Username') }}" value="">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password" id="password"
                                                    tabindex="2" class="form-control"
                                                    placeholder="{{ __('Password') }}">
                                            </div>
                                            <div class="form-group text-center">
                                                <input type="checkbox" tabindex="3" class=""
                                                    name="remember" id="remember">
                                                <label for="remember"> {{ __('Remember Me') }}</label>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-6 col-sm-offset-3">
                                                        <input type="submit" name="login-submit"
                                                            id="login-submit" tabindex="4"
                                                            class="form-control btn btn-login"
                                                            value="{{ __('Login') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <a href="#" tabindex="5"
                                                                class="forgot-password">{{ __('Forgot Password?') }}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <form id="register-form" action="#" method="post">
                                            <div class="form-group">
                                                <input type="text" name="username" id="username"
                                                    tabindex="1" class="form-control"
                                                    placeholder="{{ __('Username') }}" value="">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="email" id="email"
                                                    tabindex="1" class="form-control"
                                                    placeholder="{{ __('Email Address') }}" value="">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password" id="password2"
                                                    tabindex="2" class="form-control"
                                                    placeholder="{{ __('Password') }}">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="confirm-password"
                                                    id="confirm-password" tabindex="2" class="form-control"
                                                    placeholder="{{ __('Confirm Password') }}">
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-6 col-sm-offset-3">
                                                        <input type="submit" name="register-submit"
                                                            id="register-submit" tabindex="4"
                                                            class="form-control btn btn-register"
                                                            value="{{ __('Register Now') }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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
