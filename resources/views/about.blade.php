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
                                <li class="account"><a href="login">{{ __('My Account') }}</a></li>
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

                                    <li><a href="add_admin">{{__ ('add admin')}}</a></li>
                                    <li><a href="add_brand">{{__ ('add brand')}}</a></li>
                                    <li><a href="add_product">{{__ ('add product')}}</a></li>
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
                        <div class="navbar-header col-xs-6 col-sm-4"> <a class="navbar-brand" href="home"> <img
                                    alt="themini" src="{{ asset('images/logo/logo4.jpg') }}"> </a> </div>
                        <div class="col-xs-6 col-sm-4 shopcart">

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
                                        <form action="cart_page">
                                            <input class="btn pull-left mt_10" value="View cart" type="submit">
                                        </form>
                                        <form action="checkout_page">
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
        <div class="container">
            <div class="row ">
                <!-- =====  BANNER STRAT  ===== -->
                <div class="col-sm-12">
                    <div class="breadcrumb ptb_20">
                        <h1>{{ __('About us') }}</h1>
                        <ul>
                            <li><a href="home">{{ __('Home') }}</a></li>
                            {{-- <li><a href="brand">{{ __('About us') }}</a></li> --}}
                            <li class="active">{{ __('About us') }}</li>
                        </ul>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-sm-8 col-lg-9 mtb_20">
            <!-- about  -->
            <div class="row">
                <div class="col-md-12">
                <figure> <img src="{{ asset('images\about-page11-gaando.jpg')}}" alt="#"> </figure>
                </div>
                <div class="col-md-12">
                <div class="about-text">
                    <div class="about-heading-wrap">
                        <p><h1 style=" text-align: center">Online shop</h1></p>
                        <p><h3 style=" text-align: center"><span>{{ __('Designing this website is the best part of my life') }}</h3></p>
                    </div>
                </div>
                </div>
            </div>
            <br>
            <br>
            <!-- =====  product ===== -->
                    <p><h3 style=" text-align: center">{{ __('We offer you the pleasure of shopping with international brands at competitive prices. At the time you enter the site, the exchange value and product prices are stored in US dollars and the equivalent in Libyan dinars') }}</h3></p>
              <br>
                    <div class="item team-detail">
                    <div class="team-item-img"> <img src="{{ asset('images\brand\13.jpg')}}" alt="" /> </div>
                    <div class="team-designation mt_20"><h1>{{ __('THE ENNGINEER') }}</h1></div>
                    <h3 class="copyright-part">{{ __('Aymen Abd_Almjeed Ben Ghali') }}</h3>
                    
                    <div class="col-sm-4">
                    <div class="social_icon">
                        <ul>
                            <li><a href="https://www.facebook.com/aymenbenghali"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="mailto:aymenbenghali@gmail.com"><i class="fa fa-google"></i></a></li>
                        </ul>
                    </div>
                </div>
                </div>
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

    </body>

    </html>

