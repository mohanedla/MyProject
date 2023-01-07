
<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <!-- =====  BASIC PAGE NEEDS  ===== -->
    <meta charset="utf-8">
    <title>{{ __('طلبية') }}</title>
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
                                    role="button">{{ __('Language') }}&nbsp;  <span class="caret"></span> </span>
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
                            <li class="currency dropdown">
                                 <span class="dropdown-toggle" id="dropdownMenu12"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                role="button">{{__('previous orders')}}&nbsp; <span class="caret"></span> </span>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenu12">
                                <li><a href="admin">{{__ ('طلبية 1')}}</a></li>
                                <li><a href="user">{{__ ('طلبية 2')}}</a></li>
                            </ul>


                        @endif
                        @endif -->
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
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{__('previous orders')}} </a>
                  <ul class="dropdown-menu">
                    <li> <a href="/old_Bills">طلبية 1 </a></li>
                    <li> <a href="checkout_page.html">طلبية 2</a></li>

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
                        <h1>{{ __('previous orders') }}</h1>
                        <ul>
                            <li><a href="home">{{ __('Home') }}</a></li>
                            <li class="active">{{ __('previous orders') }}</li>
                        </ul>
                    </div>
                </div>
                  </div>
            </div>
            <div id="formContent">
                <div class="btn_add">
                                    <!-- <label class="address"> {{ __('previous orders') }}</label> -->
                                    <!-- <a href="add_brand"><button id="button" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        {{ __('Add Brand') }}
                                      </button></a> -->

                                </div>
                                <hr />
                                <table id="tblCustomer" class="display" style="width: 100%;">
                                  <thead>
                                    <tr>

                                    <th scope="col">{{ __('#')}}</th>
                                    <th>{{ __('Product Name') }}</th>
                                    {{-- <th scope="col">{{ __('photo')}}</th> --}}
                                    <th>{{ __('Quantity') }}</th>
                                    <th>{{ __('Unit Price') }}</th>
                                    <th>{{ __('Total') }}</th>
                                    <th>{{ __('Unit Price') }}</th>
                                    <th>{{ __('Total') }}</th>

                                    </tr>
                                  </thead>
                                  <tbody>
                                    @php
                                        $id=0;
                                    @endphp
                                    @foreach ($old_bills as $bill)

                                    <tr>
                                        <td>{{++$id}}</td>
                                        <td>{{$bill->name}}</td>
                                        <td>{{$bill->quantity}}</td>
                                        <td>{{$bill->price}}</td>
                                        <td>{{$bill->total}}</td>
                                        <td>{{$bill->price_dl}}</td>
                                        <td>{{$bill->total_dl}}</td>

                                        <!-- <td>
                                            <a href=""><img src="{{ asset('images/icone/edit-solid-24.png') }}"></a>
                                            <a href=""><img src="{{ asset('images/icone/x-square-solid-24.png') }}"></a>
                                        </td> -->
                                    </tr>

                                    @endforeach


                                  </tbody>
                                  <tfoot>
                                    <tr>
                                    <td ></td>
                                    <td ></td>
                                    <td ></td>
                                    <td ></td>
                                    <td ></td>
                                    <th >{{$total}}</th>
                                    <th ><b>:المجموع</b></th>

                                    </tr>
                                  </tfoot>
                                </table>
                              </div>

                              <script>
                                $(document).ready(function () {
                                  $("#tblCustomer").DataTable();
                                });
                              </script>

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
                    @extends('layout.js1')
                    @section('js1')

                    </body>

                    </html>

