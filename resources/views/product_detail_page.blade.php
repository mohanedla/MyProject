<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>

    <!-- =====  BASIC PAGE NEEDS  ===== -->
    <meta charset="utf-8">
    <title>{{ __('product_detail') }}</title>

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

    {{-- <link href="{{ asset('css/design4.css') }}" rel="stylesheet" /> --}}
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
                                            <a class="account"
                                                href="/dashboard_home">{{ __('System management') }}</a>
                                        </li>
                                    @endif

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
                        <div class="navbar-header col-xs-6 col-sm-4">
                             <a class="navbar-brand" href="/home">
                                 <img alt="themini" src="{{ asset('images\brand\logoooo.jpg') }}"> </a> 
                                </div>

                        <x-share.cart-shop> </x-share.cart-shop>

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
                                                        <li><a href="/category/{{$women->id}}/Women">{{ __($women->name) }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li class="col-md-3">
                                                <ul>
                                                    <li class="dropdown-header">{{ __('Men') }}</li>
                                                    @foreach ($category_men as $men)
                                                        <li><a href="/category/{{$men->id}}/Men">{{ __($men->name) }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>

                                            <li class="col-md-3">
                                                <ul>
                                                    <li class="dropdown-header">{{ __('Children') }}</li>
                                                    @foreach ($category_kids as $kids)
                                                        <li><a href="/category/{{$kids->id}}/Kids">{{ __($kids->name) }}</a></li>
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
                                            {{-- @foreach ($old_order as $order) --}}
                                        @empty($old_order->count())
                                            <li style="text-align: center;"> {{ __('There are no orders') }}</li>
                                        @endempty
                                        {{-- @endforeach --}}
                                        {{-- @if ($old_order == []) --}}


                                    </div>
                                </ul>
                            </li>
                    @endif
                  
                                <li> <a href="/about">{{ __('About us') }}</a></li>
                                @if (Auth::User())
                                    <li> <a href="/contact_us">{{ __('Contact us') }}</a></li>
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
                        <h1> {{ __('product_detail_page') }} </h1>
                        <ul>
                            <li><a href="/home">{{ __('Home') }}</a></li>
                            <li class="active"><a href="/shop">{{ __('shop') }}</a></li>
                            <li class="active">{{ __('product_detail') }}</li>
                        </ul>
                    </div>
                </div>
                <!-- =====  BREADCRUMB END===== -->
                <div id="column-left" class="col-sm-4 col-lg-3 hidden-xs">
                    <div id="category-menu" class="navbar collapse in mb_40">
                        <div class="nav-responsive">
                            <div class="heading-part">
                                <h2 class="main_title">{{ __('Women') }}</h2>
                            </div>
                            <li class="nav navbar-nav">
                                <ul>
                                    <div class="cart-dropdown3">
                                    @foreach ($category_women as $women)
                                    <li><a href="/category/{{$women->id}}/Women">{{ __($women->name) }}</a></li>
                                @endforeach
                                    </div>
                                </ul>
                            </li>
                            <!-- </ul> -->



                            <!-- </div> -->
                            <div class="heading-part">
                                <h2 class="main_title">{{ __('Men') }}</h2>
                            </div>
                            <li class="nav navbar-nav">
                                <ul>
                                    <div class="cart-dropdown3">
                                    @foreach ($category_men as $men)
                                        <li><a href="/category/{{$men->id}}/Men">{{ __($men->name) }}</a></li>
                                    @endforeach
                                </div>
                                </ul>
                            </li>
                        </div>
                        <div class="heading-part">
                            <h2 class="main_title">{{ __('Children') }}</h2>
                        </div>
                        <li class="nav navbar-nav">
                            <ul>
                                <div class="cart-dropdown3">
                                @foreach ($category_kids as $kids)
                                    <li><a href="/category/{{$kids->id}}/Kids">{{ __($kids->name) }}</a></li>
                                @endforeach
                                </div>
                            </ul>

                        </li>
                    </div>
                </div>


                @foreach ($products as $product)
                    <div class="col-sm-8 col-lg-9 mtb_20" >
                        <div class="row mt_10 " >
                            <div class="col-md-6">
                                <div ><a class="thumbnails"> <img data-name="product_image"
                                            src=" {{ asset(Storage::url($product->profile_image)) }}" /></a></div>
                                <div id="product-thumbnail" class="owl-carousel">
                                    <div class="item">
                                    </div>
   
                                    @foreach ($product->images as $image)
                                        <div class="item" >

                                            <div class="image-additional" ><a class="thumbnail"
                                                    href="{{ asset(Storage::url($image->image)) }}"
                                                    data-fancybox="group1"> <img
                                                        src="{{ asset(Storage::url($image->image)) }}" /></a></div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-6 prodetail caption product-thumb">
                                <h4 data-name="product_name" class="product-name"><a href="#"
                                        title="Casual Shirt With Ruffle Hem">{{ __('product_detail') }}</a></h4>
                                <div class="rating">
                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                            class="fa fa-star fa-stack-1x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                            class="fa fa-star fa-stack-1x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                            class="fa fa-star fa-stack-1x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                            class="fa fa-star fa-stack-1x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i
                                            class="fa fa-star fa-stack-x"></i></span>
                                </div>
                                <span class="price mb_20"><span class="amount"><span
                                            class="currencySymbol">{{ $product->price }}</span>$</span>
                                            <br>    
                                            <span class="price"><span class="amount"><span class="currencySymbol"> </span>{{ round( $product->price  * Session::get('LYD') , 2) }} LYD</span>

                                    {{-- <span><span class="amount"><span class="currencySymbol">180</span>DL</span> --}}

                                    </span>
                                    <hr>
                                    <ul class="list-unstyled product_info mtb_20">
                                        <li>
                                            <label>
                                                <h4>{{ __('Product Name') }} : {{ $product->name }}</h4>
                                            </label>

                                        </li>
                                        <br>
                                        <li>
                                            <h4>{{ __('Brand') }} : {{ $product->brand->name }} </h4>

                                            <!-- <span><h5> Shirt </h5></span> -->
                                        </li>

                                    </ul>
                                    <hr>
                                    <!-- <p class="product-desc mtb_30"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go. Cover Flow. Browse through your music collection by flipping..</p> -->
                                    <div id="product">
                                        <br>
                                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="Sort-by col-md-6">
                                                        <label>
                                                            <h4>{{ __('Size') }}</h4>
                                                        </label>
                                                        <select name="size" id="select-by-size" 
                                                        class="selectpicker form-control" style="border-color:black; color:black;">
                                                        @if($product->sizes->count()>0) 
                                                            @foreach ($product->sizes as $s)
                                                                <option selected value="{{ $s->size_id }}" >
                                                                    {{ __($s->size->name) }} </option>
                                                            @endforeach
                                                            @endif
                                                        </select>
                                                    </div>
                                                    <div class="Color col-md-6">
                                                        <label>
                                                            <h4>{{ __('Color') }}</h4>
                                                        </label>
                                                        <select name="color" id="select-by-color"
                                                            class="selectpicker form-control" style="border-color:black; color:black;">
                                                            @foreach ($product->colors as $c)
                                                                <option selected value="{{ $c->color_id }}">
                                                                    {{ __($c->color->name) }} </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="qty mt_30 form-group2">
                                            
                                                        <input type="hidden"  value="{{ $product->id }}" name="id">
                                                        <input type="hidden" value="{{ $product->name }}" name="name">
                                                        <input type="hidden" value="{{ $product->price }}" name="price">
                                                        <label>
                                                            <h4>{{ __('Quantity') }}</h4>
                                                        </label>
                                                        <input name="quantity" style="border-color:black; color:black;" min="1" max="{{$product->quantity - $product->quantity_price}}" value="1"
                                                            type="number" required>
                                                        <input type="hidden" value="{{ $product->profile_image }}"  name="image">
                                                        <br>
                                                        <input class="btn pull-right mt_30" type="submit" value="{{ __('Add to cart') }}" />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div id="brand_carouse" class="ptb_60 text-center">
        <div class="type-01">
            <div class="heading-part mb_10 " bis_skin_checked="1">
                <h2 class="main_title">{{ __('Brands') }}</h2>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="brand owl-carousel ptb_20">
                        @foreach ($brand as $x)
                            <div class="item text-center"> <a href="/item_brand/{{ $x->id }}"><img
                                        src="{{ asset(Storage::url($x->profile_image)) }}" alt=""
                                        class="img-responsive" /></a> </div>
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
        @livewireScripts
    </body>