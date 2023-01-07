<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <!-- =====  BASIC PAGE NEEDS  ===== -->
    <meta charset="utf-8">
    <title>{{ __('View cart') }}</title>

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
                                @if( Auth::user()->profile_image)
                            <img src="{{ asset(Storage::url( Auth::user()->profile_image)) }}" alt="Profile"
                             style="  border-radius: 50%; 
                                    -webkit-border-radius: 50%; 
                                    -moz-border-radius: 50%;
                                    width: 40px; 
        height: 40px;">
        @endif
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
                                                <li><a href="/category/{{$women->id}}/Women">{{ __($women->name) }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="col-md-3">
                                        <ul>
                                            <li class="dropdown-header">{{ __('Men') }}</li>
                                            @foreach ($category_men as $men)
                                                <li><a href="/category/{{$men->id}}/Women">{{ __($men->name) }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>

                                    <li class="col-md-3">
                                        <ul>
                                            <li class="dropdown-header">{{ __('Children') }}</li>
                                            @foreach ($category_kids as $kids)
                                                <li><a href="/category/{{$kids->id}}/Women">{{ __($kids->name) }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="col-md-3">
                                        <ul>
                                            <li id="myCarousel" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="item active">
                                                    <a href=""> <img src="{{ asset('images\uploads\shof_1d433f3c8569e7d-removebg-preview.png') }}"
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
                            <li> <a href="shop">{{ __('shop') }}</a></li>
                            @if (Auth::user())
                                @if (Auth::user()->role == '3')
                            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{__('previous orders')}} </a>
                  <ul class="dropdown-menu">
                  @php
                        $i=0;
                    @endphp
                  @foreach ($old_order as $order)
                    <li> <a href="/old_Bills/{{$order->id}}">طلبية {{++$i}} </a></li>
                    @endforeach
                  {{-- @foreach ($old_order as $order) --}}
                  @empty($old_order->count())
                  <li style="text-align: center;" > لايوجد طلبيات</li>
                  @endempty
                    {{-- @endforeach --}}
                    {{-- @if($old_order==[]) --}}

                  </ul>
                </li>
                @endif
                @endif
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
                        <h1>{{ __('Shopping Cart') }}</h1>
                        <ul>
                            <li><a href="index.html">{{ __('Home') }}</a></li>
                            <li class="active">{{ __('Shopping Cart') }}</li>
                        </ul>
                    </div>
                </div>
                <!-- =====  BREADCRUMB END===== -->
                <div id="column-left" class="col-sm-4 col-lg-3 hidden-xs">
                    <div id="category-menu" class="navbar collapse in mb_40" aria-expanded="true" style=""
                        role="button">
                        <div id="category-menu" class="navbar collapse in mb_40" >
                        <div class="nav-responsive">
                <div class="heading-part">
                    <h2 class="main_title">{{ __('Women') }}</h2>
                </div>
                <li class="nav navbar-nav">
                    <ul>
                        @foreach ($category_women as $women)
                        <li><a href="/category/{{$women->id}}/Women">{{ __($women->name) }}</a></li>
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
                            <li><a href="/category/{{$men->id}}/Men">{{ __($men->name) }}</a></li>
                        @endforeach
                    </ul>
                </li>
            </div>
            <div class="heading-part">
                <h2 class="main_title">{{ __('Children') }}</h2>
            </div>
            <li class="nav navbar-nav">
                <ul>
                    @foreach ($category_kids as $kids)
                        <li><a href="/category/{{$kids->id}}/Kids">{{ __($kids->name) }}</a></li>
                    @endforeach
                </ul>
            </li>
        </div>
        </div>

                </div>


                <div class="col-sm-8 col-lg-9 mtb_20">
                    {{-- <form enctype="multipart/form-data" method="post" action="#"> --}}
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td class="text-center">{{ __('Image') }}</td>
                                        <td class="text-left">{{ __('Product Name') }}</td>
                                        <!-- <td class="text-left">{{ __('Model') }}</td> -->
                                        <td class="text-left">{{ __('Quantity') }}</td>
                                        <td class="text-right">{{ __('Unit Price') }}</td>
                                        <td class="text-right">{{ __('Total') }}</td>
                                        <td class="text-right">{{ __('Unit Price') }}</td>
                                        <td class="text-right">{{ __('Total') }}</td>


                                    </tr>
                                </thead>
                                <tbody>
                                    @if (Cart::count() > 0)

                                    @foreach (Cart::content() as $item)
                                    <tr>
                                        <td class="text-center"><a href="#"><img style="width: 80px"
                                            src="{{ asset(Storage::url($item->image)) }}"
                                            alt="iPod Classic" title="iPod Classic"></a></td>
                                        <td class="text-left"><a href="product"> {{ __($item->name) }} </a></td>
                                        <td class="text-left">
                                            <div style="max-width: 200px;" class="input-group btn-block">
                                                <form action="{{ url('/updatecart') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $item->rowId}}" >
                                                    <input style="width: 100px" type="number" class="form-control quantity" size="1"
                                                    min="0" max="" value="{{$item->qty}}" name="quantity">
                                                <span class="input-group-btn">
                                                    <button class="btn" title="" data-toggle="tooltip"
                                                    type="submit" data-original-title="Update"><i
                                                        class="fa fa-refresh"></i></button>
                                            </span>
                                                  </form>
                                            </div>
                                        </td>
                                        <td class="text-right">${{$item->price}}</td>
                                        <td class="text-right">${{$item->price*$item->qty}}</td>
                                        <td class="text-right">254.00 DL</td>
                                        <td class="text-right">254.00 DL</td>
                                        <td class="text-right"><a class="close-cart" href="{{ url('remove', $item->rowId ) }}"><i
                                            class="fa fa-times-circle"></i>
                                        </a></td>

                                    </tr>
                                    @endforeach
                                    @endif
                                    <td class="text-right">


                                    </td>
                                    <td class="text-left"></td>

                                    <tr class="text-hight"></tr>

                                </tbody>
                            </table>
                            <div style="float: right;">
                                <li style="float: right; display: -webkit-box; list-style-type: none;"><strong>:"{{ __('Total') }}"</strong></li>
                                <li style="float: right; display: -webkit-box; list-style-type: none;  padding-right: 25px;">${{\Cart::priceTotal()}}</li>
                            </div>
                            <br>

                            {{-- </form> --}}

                    <form action="\shop">
                        <input class="btn pull-left mt_30" type="submit" value="{{ __('Continue Shopping') }}" />
                    </form>
                    <form action="checkout_page">
                        <input class="btn pull-right mt_30" type="submit" value="{{ __('Checkout') }}" />
                        </form>


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
                                        @foreach ($brand as $x)
                                        <div class="item text-center">

                                                 <a   @if (Auth::User()) href="item_brand/{{ $x->id }}" @endif >
                                               <img src="{{ asset(Storage::url($x->profile_image)) }}"
                                                        alt="" class="img-responsive" /></a>
                                                    </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

        </div>
        <!-- =====  FOOTER END  ===== -->
    </div>
    <a id="scrollup"></a>
    <br>
<br>
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
