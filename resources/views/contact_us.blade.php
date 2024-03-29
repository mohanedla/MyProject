<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <!-- =====  BASIC PAGE NEEDS  ===== -->
    <meta charset="utf-8">
    <title>{{ __('Contact us') }}</title>
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
                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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
        <div class="header">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-4">

                    </div>
                    <div class="navbar-header col-xs-6 col-sm-4"> <a class="navbar-brand" href="/home"> <img
                        alt="themini" src="{{ asset('images\brand\logoooo.jpg') }}"> </a> </div>
           
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
    <div class="container">
        <div class="row ">
            <!-- =====  BANNER STRAT  ===== -->
            <div class="col-sm-12">
                <div class="breadcrumb ptb_20">
                    <h1>{{ __('Contact us') }}</h1>
                    <ul>
                        <li><a href="/home">{{ __('Home') }}</a></li>
                        <li class="active">{{ __('Contact us') }}</li>
                    </ul>
                </div>
            </div>
              </div>
        </div>
        <div class="banner">
        <div class="main-banner owl-carousel">
            {{-- <div class="item"><a href="#"><img src="{{ asset('images\about-page11-gaando.jpg')}}"
                        style="height: 350px; Width: 5000px;" alt="Main Banner" class="img-responsive" /></a></div> --}}
                        <div class="item"><a href="#"><img src="{{ asset('images/logo/logo1.jpg')}}"
                            style="height: 320px;" alt="Main Banner" class="img-responsive" /></a></div>
                    </div>
    <!-- </div> -->
      <!-- </div> -->
    <!-- =====  HEADER END  ===== -->
    <!-- =====  CONTAINER START  ===== -->
    <div class="container mt_30">
      <div class="row ">

        <div id="column-left" class="col-sm-4 col-lg-3 hidden-xs">
          <div id="category-menu" class="navbar collapse in mb_40" aria-expanded="true" style="" role="button">
          </div>
        </div>
        <div class="col-sm-8 col-lg-9 mtb_20">
          <!-- contact  -->
          <div class="row">
            <div class="col-md-4 col-xs-12 contact">
              <div class="location mb_50">
                <h5 class="capitalize mb_20"><strong>{{ __('Our Location')}}</strong></h5>
                <div class="address">{{ __('Office address')}}
                  <br>
                  <br>
                   {{__ ('Tripoli/')}}</div>
                <div class="call mt_10"><i class="fa fa-phone" aria-hidden="true"></i>+218-91-820-63-70</div>
              </div>

              <div class="Hello mb_50">
                <div class="email mt_10"><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:aymenbenghali@gmail.com" target="_top">aymenbenghali@gmail.com</a></div>
              </div>
            </div>






            <div class="col-md-8 col-xs-12 contact-form mb_50">
              <!-- Contact FORM -->
              <div id="contact_form">
                  <form id="contact_body" method="get" action="{{ route('contact_notice')}}"  enctype="multipart/form-data" >
                    @csrf
                  <!--                                <label class="full-with-form" ><span>Name</span></label>
-->
<input class="full-with-form  mt_30" type="hidden" name="role" value="{{ Auth()->user()->role}}" />

                 @if(auth()->user())
                  <input class="full-with-form " style="border-color:black; color:black;" type="text" name="name"  value="{{ Auth()->user()->name }}" placeholder="{{__ ('Name')}}"  required="required" data-required="true" />
                  @else
                  <input class="full-with-form "  type="text" name="name"  placeholder="{{__ ('Name')}}"  required="required" data-required="true" />
@endif
@if(auth()->user())
<input class="full-with-form  mt_30" type="email" style="border-color:black; color:black;" name="email"   value="{{ Auth()->user()->email}}" placeholder="{{__('Email Address')}}"  required="required" data-required="true" />
                  @else
                  <input class="full-with-form  mt_30" type="email" name="email"   placeholder="{{__('Email Address')}}"  required="required" data-required="true" />
@endif
                <input class="full-with-form  mt_30" style="border-color:black; color:black;" type="text" name="phone1" placeholder="{{__ ('Phone Number')}}" maxlength="15"  required="required" data-required="true" />
                  <!--                <label class="full-with-form" ><span>Subject</span></label>
-->
                  <input class="full-with-form  mt_30" type="text" style="border-color:black; color:black;" name="subject" placeholder="{{__('Subject')}}" data-required="true"  required="required">
                  <!--                                <label class="full-with-form" ><span>Attachment</span></label>
--> 
                  <!--                                <label class="full-with-form" ><span>Message</span></label>
-->
                  {{-- <textarea class="full-with-form  mt_30" name="message" placeholder="Message" data-required="true"></textarea> --}}
                  <button class="btn mt_30" type="submit">{{__ ('Send')}}</button>
                </form>
                <div id="contact_results"></div>
              </div>
              <!-- END Contact FORM -->
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
