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
    @livewireStyles
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
                                @endguest
                                <li class="language dropdown"> <span class="dropdown-toggle" id="dropdownMenu1"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        role="button">{{ __('Language') }} <span class="caret"></span>
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
                        <div class="navbar-header col-xs-6 col-sm-4"> <a class="navbar-brand" href="home"> <img
                                    alt="themini" src="{{ asset('images/logo/logo4.jpg') }}"> </a> </div>

                        <div class="col-xs-6 col-sm-4 shopcart">
                            <div id="cart" class="btn-group btn-block mtb_40">
                                <button type="button" class="btn" data-target="#cart-dropdown"
                                    data-toggle="collapse" aria-expanded="true"><span
                                        id="shippingcart">{{ __('Shopping cart') }}</span>
                                    {{-- @livewire('cart-counter') --}}
                                    <span id="cart-total">{{ __('items') }}
                                        ({{ \Cart::content()->count() }})
                                    </span>
                                </button>
                            </div>
                            <div id="cart-dropdown" class="cart-menu collapse">
                                <ul>
                                    <li>
                                        @if (Cart::content()->count() > 3)
                                            <div id="cart-dropdown1">
                                            @else
                                                <div>
                                        @endif
                                            <table class="table table-striped">
                                                <tbody>
                                                    @if (Cart::count() > 0)

                                                        @foreach (Cart::content() as $item)
                                                            <tr>
                                                                <td class="text-center"><a href="#"><img
                                                                            style="width: 80px"
                                                                            src="{{ asset(Storage::url($item->image)) }}"
                                                                            alt="iPod Classic"
                                                                            title="iPod Classic"></a></td>
                                                                <td class="text-left product-name"><a
                                                                        href="#">{{ $item->name }}</a> <span
                                                                        class="text-left price">${{ $item->price }}</span>
                                                                    <input class="cart-qty" name="product_quantity"
                                                                        min="1" value="{{ $item->qty }}"
                                                                        type="number">
                                                                </td>
                                                                <td class="text-center">
                                                                    <a class="close-cart"
                                                                        href="{{ url('remove', $item->rowId) }}"><i
                                                                            class="fa fa-times-circle"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        @endforeach


                                                    @endif
                                                </tbody>

                                            </table>
                                        </div>
                                    </li>
                                    <li>
                                        <table class="table">

                                            <tbody>
                                                <tr>
                                                    <th>${{ \Cart::priceTotal() }}</th>
                                                    <th><strong>:"{{ __('Total') }}"</strong></th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <form action="cart_page">
                                                            <input class="btn pull-left mt_10"
                                                                value="{{ __('View cart') }}" type="submit">
                                                        </form>
                                                    </td>
                                                    <td>
                                                        <form action="checkout_page">
                                                            <input class="btn pull-right mt_10"
                                                                value="{{ __('Checkout') }}" type="submit">
                                                        </form>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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
                                                            href="/category/{{ $men->id }}/Men">{{ __($men->name) }}</a>
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
                                    <li> <a href="shop">{{ __('shop') }}</a></li>
                                @endif
                                @if (Auth::user())
                            @if (Auth::user()->role == '3')
                                <li class="dropdown"> <a href="#" class="dropdown-toggle"
                                        data-toggle="dropdown">{{ __('previous orders') }} </a>

                                    <ul class="dropdown-menu">
                                        <div class="cart-dropdown2">
                                            @php
                                                $i = 0;
                                            @endphp
                                            @foreach ($old_order as $order)
                                                <li> <a href="/old_Bills/{{ $order->id }}">طلبية
                                                        {{ ++$i }}
                                                    </a></li>
                                                    <li> <a href="/old_Bills/{{ $order->id }}">طلبية
                                                        {{ ++$i }}
                                                    </a></li>  <li> <a href="/old_Bills/{{ $order->id }}">طلبية
                                                        {{ ++$i }}
                                                    </a></li>
                                                    
                                            @endforeach
                                            {{-- @foreach ($old_order as $order) --}}
                                        @empty($old_order->count())
                                            <li style="text-align: center;"> لايوجد طلبيات</li>
                                        @endempty
                                        {{-- @endforeach --}}
                                        {{-- @if ($old_order == []) --}}


                                    </div>
                                </ul>
                            </li>
                        @endif
                    @endif


                                <li> <a href="about">{{ __('About us') }}</a></li>
                                @if (Auth::User())
                                    <li> <a href="contact_us">{{ __('Contact us') }}</a></li>
                                @endif
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
                            <li><a href="home">{{ __('Home') }}</a></li>
                            <li class="active">{{ __('Checkout') }}</li>
                        </ul>
                    </div>
                </div>
                <!-- =====  BREADCRUMB END===== -->

                <div id="column-left" class="col-sm-4 col-lg-3 ">
                    <div id="category-menu" class="navbar collapse in mb_40" aria-expanded="true" style=""
                        role="button"></div>
                    <!-- <div class="nav-responsive">
                    </div> -->
                    <!-- </div> -->
                    <!-- <div id="column-left" class="col-sm-4 col-lg-3 hidden-xs"> -->
                    <div class="filter left-sidebar-widget mb_50">
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
                                <h2 class="main_title">{{ __('Children') }}</h2>
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
                    <!-- <div class="filter left-sidebar-widget mb_50">
                        <div class="heading-part mtb_20 ">
                            <h2 class="main_title">{{ __('Refine Search') }}</h2>
                        </div>
                        <div class="filter-block">
                            <p>
                                <label for="amount">{{ __('Price range') }}:</label>
                                <input type="text" id="amount" readonly>
                            </p>
                            <div id="slider-range" class="mtb_20"></div>
                            <div class="list-group">
                                <div class="list-group-item mb_10">

                                </div>
                                <div class="list-group-item mb_10">

                                </div>
                                <br>
                                <button type="button" class="btn">{{ __('Search') }}</button>
                            </div>
                        </div>
                    </div> -->

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
                            <label class="control-label" for="input-limit">{{ __('Show') }} :</label>
                            <div class="limit">

                                {!! Form::open(['url' => route('shop'), 'method' => 'get']) !!}
                                {!! Form::select(
                                    'per_page',
                                    ['Select', '9' => '9', '18' => '18', '32' => '32', '50' => '50', '75' => '75', '100' => '100'],
                                    '5',
                                    ['onchange' => 'submit()', 'class' => 'form-control'],
                                ) !!}
                                {!! Form::close() !!}
                            </div>
                            <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                        </div>
                        <!-- <div class="sort-wrapper pull-right">
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
                        </div> -->
                    </div>
                    <div class="row">
                        @foreach ($products as $product)
                        @if($product->quantity>$product->quantity_price)

                            <div class="product-layout product-grid col-md-4 col-xs-6 ">
                                <div class="item">
                                    <div class="product-thumb clearfix mb_30">
                                        <div class="image product-imageblock" style="height: 200px; width: 250px;"> <a
                                                href="product_detail_page/{{ $product->id }}"> <img
                                                    data-name="product_image"
                                                    src="{{ asset(Storage::url($product->profile_image)) }}"
                                                    style="height: 200px; width: 250px;" alt="iPod Classic"
                                                    title="iPod Classic" class="img-responsive" />
                                                <img src="{{ asset(Storage::url($product->profile_image)) }}"
                                                    style="height: 200px; width: 250px;" alt="iPod Classic"
                                                    title="iPod Classic" class="img-responsive" />
                                            </a>

                                        </div>
                                        <div class="caption product-detail text-center">&nbsp;&nbsp;&nbsp;
                                            <h3 data-name="product_name" class="product-name mt_20"><a href="#"
                                                    title="Casual Shirt With Ruffle Hem">{{ $product->name }}</a></h3>
                                            <!-- <div class="button-group text-center">
                                                        <div class="add-to-cart"><a href="#"><span>Add to cart</span></a>
                                                        </div>
                                                    </div> -->

                                            {{-- <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-1x"></i><i
                                                    class="fa fa-star fa-stack-1x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                    class="fa fa-star fa-stack-1x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                    class="fa fa-star fa-stack-1x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                    class="fa fa-star fa-stack-1x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                                    class="fa fa-star fa-stack-x"></i></span> </div> --}}

                                            <span class="price">
                                                <h5 class="amount"><span
                                                        class="currencySymbol">$</span>{{ $product->price }}&nbsp;
                                                        {{ $product->brands->name}}</h5>
                                                <h3 class="product-desc mt_20 mb_60">{{ __('Specifications') }}
                                                    : {{ $product->specification }} </h3>
                                                <!-- <form action="/">
             <input class="btn pull-right mt_30" type="submit" value="{{ __('Add to cart') }}" />
         </form> -->
                                            </span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>

                </div>
                <div class="pagination-nav text-center mt_50">
                    {{-- <ul>
                      <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul> --}}
                    {!! $products->links() !!}
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

                                        <a
                                            @if (Auth::User()) href="/item_brand/{{ $x->id }}" @endif>
                                            <img src="{{ asset(Storage::url($x->profile_image)) }}" alt=""
                                                class="img-responsive" /></a>
                                    </div>
                                @endforeach
                            </div>
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
        @livewireScripts
    </body>

    </html>
