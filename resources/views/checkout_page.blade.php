<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <!-- =====  BASIC PAGE NEEDS  ===== -->
    <meta charset="utf-8">
    <title>{{__ ('checkout')}}</title>

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

    <script src="{{asset('js/jquery-3.5.1.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <link href="{{asset('css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://use.fontawesome.com/releases/v5.0.1/css/all.css"
      rel="stylesheet"
    />

    <link href="{{asset('css/design4.css')}}" rel="stylesheet" />

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
                                                        <li class="dropdown-header">{{ __('Women') }}</li>
                                                        @foreach ($category_women as $women)
                                                            <li><a href="#">{{ __($women->name) }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                <li class="col-md-3">
                                                    <ul>
                                                        <li class="dropdown-header">{{ __('Men') }}</li>
                                                        @foreach ($category_men as $men)
                                                            <li><a href="#">{{ __($men->name) }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>

                                                <li class="col-md-3">
                                                    <ul>
                                                        <li class="dropdown-header">{{ __('Children') }}</li>
                                                        @foreach ($category_kids as $kids)
                                                            <li><a href="#">{{ __($kids->name) }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                <li class="col-md-3">
                                                    <ul>
                                                        <li id="myCarousel" class="carousel slide" data-ride="carousel">
                                                            <div class="carousel-inner">
                                                                <div class="item active"><a href=""> <img
                                                                            src="{{ asset('images/menu-banner1.jpg') }}"
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
            <h1>{{ __('Checkout') }}</h1>
            <ul>
              <li><a href="index">{{ __('Home') }}</a></li>
              <li class="active">{{ __('Checkout') }}</li>
            </ul>
          </div>
        </div>
        <!-- =====  BREADCRUMB END===== -->

        <div id="column-left" class="col-sm-4 col-lg-3 hidden-xs">
          <div id="category-menu" class="navbar collapse in mb_40" aria-expanded="true" style="" role="button">
            <div class="nav-responsive">
              <div class="heading-part">
                <h2 class="main_title">Top category</h2>
              </div>
              <ul class="nav  main-navigation collapse in">
                <li><a href="#">Appliances</a></li>
                <li><a href="#">Mobile Phones</a></li>
                <li><a href="#">Tablet PC &amp; Accessories</a></li>
                <li><a href="#">Consumer Electronics</a></li>
                <li><a href="#">Computers &amp; Networking</a></li>
                <li><a href="#">Electrical &amp; Tools</a></li>
                <li><a href="#">Apparel</a></li>
                <li><a href="#">Bags &amp; Shoes</a></li>
                <li><a href="#">Toys &amp; Hobbies</a></li>
                <li><a href="#">Watches &amp; Jewelry</a></li>
                <li><a href="#">Home &amp; Garden</a></li>
                <li><a href="#">Health &amp; Beauty</a></li>
                <li><a href="#">Outdoors &amp; Sports</a></li>
              </ul>
            </div>
          </div>
          <div class="left_banner left-sidebar-widget mt_30 mb_40"> <a href="#"><img src="images/left1.jpg" alt="Left Banner" class="img-responsive"></a> </div>
          <div class="left-special left-sidebar-widget mb_50">
            <div class="heading-part mb_10 ">
              <h2 class="main_title">Top Products</h2>
            </div>
            <div id="left-special" class="owl-carousel owl-loaded owl-drag">




            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 907px;"><div class="owl-item active" style="width: 226.656px;"><ul class="row ">
                <li class="item product-layout-left mb_20">
                  <div class="product-list col-xs-4">
                    <div class="product-thumb">
                      <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product3.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product3-1.jpg"> </a> </div>
                    </div>
                  </div>
                  <div class="col-xs-8">
                    <div class="caption product-detail">
                      <h6 class="product-name"><a href="#">New LCDScreen and HD Video Recording</a></h6>
                      <div class="rating">
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                      </div>
                      <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                      </span>
                    </div>
                  </div>
                </li>
                <li class="item product-layout-left mb_20">
                  <div class="product-list col-xs-4">
                    <div class="product-thumb">
                      <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product4.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product4-1.jpg"> </a> </div>
                    </div>
                  </div>
                  <div class="col-xs-8">
                    <div class="caption product-detail">
                      <h6 class="product-name"><a href="#">New LCDScreen and HD Video Recording</a></h6>
                      <div class="rating">
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                      </div>
                      <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                      </span>
                    </div>
                  </div>
                </li>
                <li class="item product-layout-left mb_20">
                  <div class="product-list col-xs-4">
                    <div class="product-thumb">
                      <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product5.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product5-1.jpg"> </a> </div>
                    </div>
                  </div>
                  <div class="col-xs-8">
                    <div class="caption product-detail">
                      <h6 class="product-name"><a href="#">New LCDScreen and HD Video Recording</a></h6>
                      <div class="rating">
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                      </div>
                      <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                      </span>
                    </div>
                  </div>
                </li>
              </ul></div><div class="owl-item active" style="width: 226.656px;"><ul class="row ">
                <li class="item product-layout-left mb_20">
                  <div class="product-list col-xs-4">
                    <div class="product-thumb">
                      <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product6.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product6-1.jpg"> </a> </div>
                    </div>
                  </div>
                  <div class="col-xs-8">
                    <div class="caption product-detail">
                      <h6 class="product-name"><a href="#">New LCDScreen and HD Video Recording</a></h6>
                      <div class="rating">
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                      </div>
                      <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                      </span>
                    </div>
                  </div>
                </li>
                <li class="item product-layout-left mb_20">
                  <div class="product-list col-xs-4">
                    <div class="product-thumb">
                      <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product7.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product7-1.jpg"> </a> </div>
                    </div>
                  </div>
                  <div class="col-xs-8">
                    <div class="caption product-detail">
                      <h6 class="product-name"><a href="#">New LCDScreen and HD Video Recording</a></h6>
                      <div class="rating">
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                      </div>
                      <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                      </span>
                    </div>
                  </div>
                </li>
                <li class="item product-layout-left mb_20">
                  <div class="product-list col-xs-4">
                    <div class="product-thumb">
                      <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product8.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product8-1.jpg"> </a> </div>
                    </div>
                  </div>
                  <div class="col-xs-8">
                    <div class="caption product-detail">
                      <h6 class="product-name"><a href="#">New LCDScreen and HD Video Recording</a></h6>
                      <div class="rating">
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                      </div>
                      <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                      </span>
                    </div>
                  </div>
                </li>
              </ul></div><div class="owl-item" style="width: 226.656px;"><ul class="row ">
                <li class="item product-layout-left mb_20">
                  <div class="product-list col-xs-4">
                    <div class="product-thumb">
                      <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product9.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product9-1.jpg"> </a> </div>
                    </div>
                  </div>
                  <div class="col-xs-8">
                    <div class="caption product-detail">
                      <h6 class="product-name"><a href="#">New LCDScreen and HD Video Recording</a></h6>
                      <div class="rating">
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                      </div>
                      <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                      </span>
                    </div>
                  </div>
                </li>
                <li class="item product-layout-left mb_20">
                  <div class="product-list col-xs-4">
                    <div class="product-thumb">
                      <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product10.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product10-1.jpg"> </a> </div>
                    </div>
                  </div>
                  <div class="col-xs-8">
                    <div class="caption product-detail">
                      <h6 class="product-name"><a href="#">New LCDScreen and HD Video Recording</a></h6>
                      <div class="rating">
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                      </div>
                      <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                      </span>
                    </div>
                  </div>
                </li>
                <li class="item product-layout-left mb_20">
                  <div class="product-list col-xs-4">
                    <div class="product-thumb">
                      <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product1.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product1-1.jpg"> </a> </div>
                    </div>
                  </div>
                  <div class="col-xs-8">
                    <div class="caption product-detail">
                      <h6 class="product-name"><a href="#">New LCDScreen and HD Video Recording</a></h6>
                      <div class="rating">
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                      </div>
                      <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                      </span>
                    </div>
                  </div>
                </li>
              </ul></div><div class="owl-item" style="width: 226.656px;"><ul class="row ">
                <li class="item product-layout-left mb_20">
                  <div class="product-list col-xs-4">
                    <div class="product-thumb">
                      <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product2.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product2-1.jpg"> </a> </div>
                    </div>
                  </div>
                  <div class="col-xs-8">
                    <div class="caption product-detail">
                      <h6 class="product-name"><a href="#">New LCDScreen and HD Video Recording</a></h6>
                      <div class="rating">
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                      </div>
                      <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                      </span>
                    </div>
                  </div>
                </li>
                <li class="item product-layout-left mb_20">
                  <div class="product-list col-xs-4">
                    <div class="product-thumb">
                      <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product3.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product3-1.jpg"> </a> </div>
                    </div>
                  </div>
                  <div class="col-xs-8">
                    <div class="caption product-detail">
                      <h6 class="product-name"><a href="#">New LCDScreen and HD Video Recording</a></h6>
                      <div class="rating">
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                      </div>
                      <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                      </span>
                    </div>
                  </div>
                </li>
                <li class="item product-layout-left mb_20">
                  <div class="product-list col-xs-4">
                    <div class="product-thumb">
                      <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product4.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product4-1.jpg"> </a> </div>
                    </div>
                  </div>
                  <div class="col-xs-8">
                    <div class="caption product-detail">
                      <h6 class="product-name"><a href="#">New LCDScreen and HD Video Recording</a></h6>
                      <div class="rating">
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                      </div>
                      <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                      </span>
                    </div>
                  </div>
                </li>
              </ul></div></div></div><div class="owl-nav"><div class="owl-prev disabled">prev</div><div class="owl-next">next</div></div><div class="owl-dots"><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div></div></div>
          </div>
        </div>

           <div class="left_banner left-sidebar-widget mb_50 mt_30"> <a href="#"></a> </div>
        </div>
        <div class="col-sm-8 col-lg-9 mtb_20">
          <div class="panel-group" id="accordion">
            <div class="panel panel-default  ">
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">{{ __('Step') }} 1:{{ __('Checkout Options') }}  <i class="fa fa-caret-down"></i></a></h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <h3>{{ __('New Customer') }}</h3>
                      <p>{{ __('Checkout Options') }}:</p>
                      <div class="radio">
                        <label>
                          <input type="radio" checked="checked" value="register" name="account"> {{ __('Register Account') }}</label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" value="guest" name="account"> {{ __('Guest Checkout') }}</label>
                      </div>
                      <p>{{ __('By creating an account, you ll be able to shop faster, see products, and keep track of the orders you ve placed') }}</p>
                      <input type="button" class="btn mt_20" data-loading-text="Loading..." id="button-account" value="{{ __('Continue') }}">
                    </div>
                    <div class="col-sm-6">
                      <h3>{{ __('Returning Customer') }}</h3>
                      <p>{{ __('I am a returning customer') }}</p>
                      <div class="form-group">
                        <label for="input-email" class="control-label">{{ __('E-mail') }}</label>
                        <input type="text" class="form-control" id="input-email" placeholder="{{ __('E-mail') }}" value="" name="{{ __('E-mail') }}">
                      </div>
                      <div class="form-group">
                        <label for="input-password" class="control-label">{{ __('Password') }}</label>
                        <input type="password" class="form-control" id="input-password" placeholder="{{ __('Password') }}" value="" name="{{ __('password') }}">
                        <input type="button" class="btn" data-loading-text="Loading..." id="button-login" value="{{ __('Login') }}">
                        <a class="pt_30" href="#"> {{ __('Forgotten Password') }}</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default ">
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">{{ __('Step') }} 2:{{ __('Billing Details') }}   <i class="fa fa-caret-down"></i></a> </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                  <form class="form-horizontal">
                    <div class="radio">
                      <label>
                        <input type="radio" checked="checked" value="existing" name="payment_address" data-id="payment-existing">{{ __('I want to use an existing address') }}</label>
                    </div>
                    <div id="payment-existing">
                      <select class="form-control" name="address_id">
                        <option selected="selected" value="4">{{ __('adsasd') }}</option>
                      </select>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" value="new" name="payment_address" data-id="payment-new"> {{ __('I want to use a new address') }}</label>
                    </div>
                    <br>
                    <div id="payment-new" style="display: none;">
                      <div class="form-group required">
                        <label for="input-payment-firstname" class="col-sm-2 control-label">{{ __('First name') }}</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="input-payment-firstname" placeholder="{{ __('First name') }}" value="" name="firstname">
                        </div>
                      </div>
                      <div class="form-group required">
                        <label for="input-payment-lastname" class="col-sm-2 control-label">{{ __('Last name') }}</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="input-payment-lastname" placeholder="{{ __('Last name') }}" value="" name="lastname">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="input-payment-company" class="col-sm-2 control-label">{{ __('Company') }}</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="input-payment-company" placeholder="{{ __('Company') }}" value="" name="company">
                        </div>
                      </div>
                      <div class="form-group required">
                        <label for="input-payment-address-1" class="col-sm-2 control-label">{{ __('Address') }} 1</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="input-payment-address-1" placeholder="{{ __('Address') }} 1" value="" name="address_1">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="input-payment-address-2" class="col-sm-2 control-label">{{ __('Address') }} 2</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="input-payment-address-2" placeholder="{{ __('Address') }} 2" value="" name="address_2">
                        </div>
                      </div>
                      <div class="form-group required">
                        <label for="input-payment-city" class="col-sm-2 control-label">{{ __('City') }}</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="input-payment-city" placeholder="{{ __('City') }}" value="" name="city">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="input-payment-postcode" class="col-sm-2 control-label">{{ __('Post Code') }}</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="input-payment-postcode" placeholder="{{ __('Post Code') }}" value="" name="postcode">
                        </div>
                      </div>
                      <div class="form-group required">
                        <label for="input-payment-country" class="col-sm-2 control-label">{{ __('Country') }}</label>
                        <div class="col-sm-10">
                          <select class="form-control" id="input-payment-country" name="country_id">
                            <option value=""> --- {{ __('Please Select') }}--- </option>
                            <option value="244">Aaland Islands</option>
                            <option value="1">Afghanistan</option>
                            <option value="2">Albania</option>
                            <option value="3">Algeria</option>
                            <option value="4">American Samoa</option>
                            <option value="5">Andorra</option>
                            <option value="6">Angola</option>
                            <option value="7">Anguilla</option>
                            <option value="8">Antarctica</option>
                            <option value="9">Antigua and Barbuda</option>
                            <option value="10">Argentina</option>

                          </select>
                        </div>
                      </div>
                      <div class="form-group required">
                        <label for="input-payment-zone" class="col-sm-2 control-label">{{ __('Region / State') }}</label>
                        <div class="col-sm-10">
                          <select class="form-control" id="input-payment-zone" name="zone_id">
                            <option value=""> --- {{ __('Please Select') }}---</option>
                            <option selected="selected" value="3121">Al Hasakah</option>
                            <option value="3122">Al Ladhiqiyah</option>
                            <option value="3123">Al Qunaytirah</option>
                            <option value="3124">Ar Raqqah</option>
                            <option value="3125">As Suwayda</option>
                            <option value="3126">Dara</option>
                            <option value="3127">Dayr az Zawr</option>
                            <option value="3128">Dimashq</option>
                            <option value="3129">Halab</option>
                            <option value="3130">Hamah</option>
                            <option value="3131">Hims</option>
                            <option value="3132">Idlib</option>
                            <option value="3133">Rif Dimashq</option>
                            <option value="3134">Tartus</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="buttons clearfix">
                      <div class="pull-right">
                        <input type="button" class="btn" data-loading-text="Loading..." id="button-payment-address" value="{{ __('Continue') }}">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="panel panel-default ">
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">{{ __('Step') }} 3: {{ __('Delivery Details') }} <i class="fa fa-caret-down"></i></a> </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                  <form class="form-horizontal">
                    <div class="radio">
                      <label>
                        <input type="radio" checked="checked" value="existing" name="shipping_address"> {{ __('I want to use an existing address') }}</label>
                    </div>
                    <div id="shipping-existing">
                      <select class="form-control" name="address_id">
                        <option selected="selected" value="4">{{ __('adsasd') }}</option>
                      </select>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" value="new" name="shipping_address">{{ __('I want to use a new address') }}</label>
                    </div>
                    <br>
                    <div id="shipping-new" style="display: none;">
                      <div class="form-group required">
                        <label for="input-shipping-firstname" class="col-sm-2 control-label">{{ __('First name') }}</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="input-shipping-firstname" placeholder="{{ __('First name') }}" value="" name="firstname">
                        </div>
                      </div>
                      <div class="form-group required">
                        <label for="input-shipping-lastname" class="col-sm-2 control-label">{{ __('Last name') }}</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="input-shipping-lastname" placeholder="{{ __('Last ame') }}" value="" name="lastname">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="input-shipping-company" class="col-sm-2 control-label">{{ __('Company') }}</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="input-shipping-company" placeholder="{{ __('Company') }}" value="" name="company">
                        </div>
                      </div>
                      <div class="form-group required">
                        <label for="input-shipping-address-1" class="col-sm-2 control-label">{{ __('Address') }} 1</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="input-shipping-address-1" placeholder="{{ __('Address') }} 1" value="" name="address_1">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="input-shipping-address-2" class="col-sm-2 control-label">{{ __('Address') }} 2</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="input-shipping-address-2" placeholder="{{ __('Address') }} 2" value="" name="address_2">
                        </div>
                      </div>
                      <div class="form-group required">
                        <label for="input-shipping-city" class="col-sm-2 control-label">{{ __('City') }}</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="input-shipping-city" placeholder="{{ __('City') }}" value="" name="city">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="input-shipping-postcode" class="col-sm-2 control-label">{{ __('Post Code') }}</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="input-shipping-postcode" placeholder="{{ __('Post Code') }}" value="123456" name="postcode">
                        </div>
                      </div>
                      <div class="form-group required">
                        <label for="input-shipping-country" class="col-sm-2 control-label">{{ __('Country') }}</label>
                        <div class="col-sm-10">
                          <select class="form-control" id="input-shipping-country" name="country_id">
                            <option value=""> --- {{ __('Please Select') }} --- </option>
                            <option value="244">Aaland Islands</option>
                            <option value="1">Afghanistan</option>
                            <option value="2">Albania</option>
                            <option value="3">Algeria</option>
                            <option value="4">American Samoa</option>
                            <option value="5">Andorra</option>
                            <option value="6">Angola</option>
                            <option value="7">Anguilla</option>
                            <option value="8">Antarctica</option>
                            <option value="9">Antigua and Barbuda</option>
                            <option value="10">Argentina</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group required">
                        <label for="input-payment-zone" class="col-sm-2 control-label">{{ __('Region / State') }}</label>
                        <div class="col-sm-10">
                          <select class="form-control" id="input-payment-zone" name="zone_id">
                            <option value=""> --- {{ __('Please Select') }}---</option>
                            <option selected="selected" value="3121">Al Hasakah</option>
                            <option value="3122">Al Ladhiqiyah</option>
                            <option value="3123">Al Qunaytirah</option>
                            <option value="3124">Ar Raqqah</option>
                            <option value="3125">As Suwayda</option>
                            <option value="3126">Dara</option>
                            <option value="3127">Dayr az Zawr</option>
                            <option value="3128">Dimashq</option>
                            <option value="3129">Halab</option>
                            <option value="3130">Hamah</option>
                            <option value="3131">Hims</option>
                            <option value="3132">Idlib</option>
                            <option value="3133">Rif Dimashq</option>
                            <option value="3134">Tartus</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="buttons clearfix">
                      <div class="pull-right">
                        <input type="button" class="btn" data-loading-text="Loading..." id="button-shipping-address" value="{{ __('Continue') }}">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="panel panel-default ">
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapsefour">{{ __('Step') }} 4: {{ __('Delivery Method') }} <i class="fa fa-caret-down"></i></a> </h4>
              </div>
              <div id="collapsefour" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>{{ __('Please select the preferred shipping method to use on this order') }}.</p>
                  <p><strong>{{ __('Flat Rate') }}</strong></p>
                  <div class="radio">
                    <label>
                      <input type="radio" checked="checked" value="flat.flat" name="shipping_method">{{ __('Flat Shipping Rate') }}  - $5.00</label>
                  </div>
                  <p><strong>{{ __('Add Comments About Your Order') }}</strong></p>
                  <p>
                    <textarea class="form-control" rows="8" name="comment"></textarea>
                  </p>
                  <div class="buttons">
                    <div class="pull-right">
                      <input type="button" class="btn mt_20" data-loading-text="Loading..." id="button-shipping-method" value="{{ __('Continue') }}">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default ">
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapsefive">{{ __('Step') }} 5: {{ __('ayment Method P') }}<i class="fa fa-caret-down"></i></a> </h4>
              </div>
              <div id="collapsefive" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>{{ __('Please select the preferred payment method to use on this order') }}.</p>
                  <div class="radio">
                    <label>
                      <input type="radio" checked="checked" value="cod" name="payment_method">{{ __('Cash On Delivery') }}  </label>
                  </div>
                  <p><strong>{{ __('Add Comments About Your Order') }}</strong></p>
                  <p>
                    <textarea class="form-control" rows="8" name="comment"></textarea>
                  </p>
                  <div class="buttons">
                    <div class="pull-right mt_20">{{ __('I have read and agree') }} <a class="agree" href="#"><b>{{ __('Terms & Conditions') }}</b></a>
                      <input type="checkbox" value="1" name="agree"> &nbsp;
                      <input type="button" class="btn" data-loading-text="Loading..." id="button-payment-method" value="Continue">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default ">
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapsesix">{{ __('Step') }} 6:{{ __('Confirm Order') }}  <i class="fa fa-caret-down"></i></a> </h4>
              </div>
              <div id="collapsesix" class="panel-collapse collapse">
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <td class="text-left">{{ __('Product Name') }}</td>
                          <td class="text-left">{{ __('Model') }}</td>
                          <td class="text-right">{{ __('Quantity') }}</td>
                          <td class="text-right">{{ __('Unit Price') }}</td>
                          <td class="text-right">{{ __('Total') }}</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="text-left"><a href="http://localhost/opc001/index.php?route=product/product&amp;product_id=46">Sony VAIO</a></td>
                          <td class="text-left">{{ __('Product 19') }}</td>
                          <td class="text-right">1</td>
                          <td class="text-right">$1,000.00</td>
                          <td class="text-right">$1,000.00</td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <td class="text-right" colspan="4"><strong>{{ __('Sub-Total') }}:</strong></td>
                          <td class="text-right">$1,000.00</td>
                        </tr>
                        <tr>
                          <td class="text-right" colspan="4"><strong>{{ __('Flat Shipping Rate') }}:</strong></td>
                          <td class="text-right">$5.00</td>
                        </tr>
                        <tr>
                          <td class="text-right" colspan="4"><strong>{{ __('Total') }}:</strong></td>
                          <td class="text-right">$1,005.00</td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <div class="buttons">
                    <div class="pull-right">
                      <input type="button" data-loading-text="Loading..." class="btn" id="button-confirm" value="{{ __('Confirm Order') }}">
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
    <!-- =====  FOOTER END  ===== -->
  </div>
  <a id="scrollup"></a>
  {{-- <script src="js/jQuery_v3.1.1.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.magnific-popup.js"></script>
  <script src="js/custom.js"></script>
   --}}
   @extends('layout.footer')
   @section('footer')
   @endsection
  @extends('layout.js')
  @section('js')
  <script type="text/javascript">
  $('input[name=\'payment_address\']').on('change', function() {
    if (this.value == 'new') {
      $('#payment-existing').hide();
      $('#payment-new').show();
    } else {
      $('#payment-existing').show();
      $('#payment-new').hide();
    }
  });
  $('input[name=\'shipping_address\']').on('change', function() {
    if (this.value == 'new') {
      $('#shipping-existing').hide();
      $('#shipping-new').show();
    } else {
      $('#shipping-existing').show();
      $('#shipping-new').hide();
    }
  });
  </script>
</body>

</html>
