<!-- <!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <!-- =====  BASIC PAGE NEEDS  ===== -->
    <meta charset="utf-8">
    <title>{{ __('My Account') }}</title>
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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui.css')}}">

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
                                @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="account" href="/home">{{ __('My Account') }}</a>
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
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header">
                <div class="container">
                    <div class="row">
                    <br>
                        <div class="col-xs-12 col-sm-4">
                        </div>
                        <div class="navbar-header col-xs-6 col-sm-4"> <a  style="margin-top=20px width=300px height=100px" href="index"> <img
                                    alt="themini" src="{{ asset('images/logo/logo4.jpg') }}"> </a> </div>
                        <!-- <div class="col-xs-6 col-sm-4 shopcart">

                        </div> -->
                    </div>
                    <br>
                    <nav class="navbar">
                        <p>menu</p>
                        <button class="navbar-toggle" type="button" data-toggle="collapse"
                            data-target=".js-navbar-collapse"> <span class="i-bar"><i
                                    class="fa fa-bars"></i></span></button>
                                    <div class="collapse navbar-collapse js-navbar-collapse">
                                        <ul id="menu" class="nav navbar-nav">
                                            <li> <a href="home">{{ __('Home') }}</a></li>
                                            <!-- <li class="dropdown mega-dropdown"> <a href="#" class="dropdown-toggle"
                                                    data-toggle="dropdown">{{ __('Collection') }} </a>
                                                <ul class="dropdown-menu mega-dropdown-menu row">
                                                    <li class="col-md-3">
                                                        <ul>
                                                            <li class="dropdown-header">{{ __('Women') }}</li>

                                                        </ul>
                                                    </li>
                                                    <li class="col-md-3">
                                                        <ul>
                                                            <li class="dropdown-header">{{ __('Men') }}</li>
                                                            

                                                        </ul>
                                                    </li>

                                                    <li class="col-md-3">
                                                        <ul>
                                                            <li class="dropdown-header">{{ __('Children') }}</li>
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


                                        </ul>
                                        </li>
                                        <li class="col-md-3">
                                            <ul>
                                                <li id="myCarousel" class="carousel slide" data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="item active"><a href=""> <img
                                                                    src="{{asset('images/menu-banner1.jpg')}}"
                                                                    class="img-responsive" alt="Banner1"></a></div>

                                                    </div>
                                                    <!-- End Carousel Inner -->
                                                <!-- </li> -->
                                                <!-- /.carousel -->
                                            <!-- </ul>
                                        <li class="col-md-3">
                                        </li>
                                        </ul>
                                        </li> --> 
                                        <!-- <li> <a href="shop">{{ __('shop') }}</a></li> -->
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
                <!-- <div class="col-sm-12">
                    <div class="breadcrumb ptb_20">
                        <ul>
                            <li><a href="/home">{{ __('Home') }}</a></li>
                            <li class="active">{{ __('Login') }}</li>
                        </ul>
                    </div>
                </div> -->
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

                                            <a href="#login_register"class="active" data-toggle="modal" data-whatever="@getbootstrap">
                                                {{ __('View the conditions') }}</a>

                                            <div class="col-xs-6" >
                                                <a href="#" class="active" id="register-form-link">{{ __('Register') }}</a>
                                            </div>
                                        </div>
                                    <hr>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">

                                            {{-- Form For Login --}}
                                            <form id="login-form" method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <input id="username" type="text"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        name="email" placeholder="{{ __('Username') }}"
                                                        value="{{ old('email') }}" required autocomplete="email"
                                                        autofocus>

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" name="password" id="password"
                                                        tabindex="2" class="form-control"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        placeholder="{{ __('Password') }}" required
                                                        autocomplete="current-password">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group text-center">
                                                    <input type="checkbox" tabindex="3" class=""
                                                        name="remember" id="remember"
                                                        {{ old('remember') ? 'checked' : '' }}>
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
                                                <!-- <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="text-center">
                                                                @if (Route::has('password.request'))
                                                                <a
                                                                    href="{{ route('password.request') }}"  class="forgot-password">
                                                                    {{ __('Forgot Password?') }}
                                                                </a>
                                                            @endif

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->
                                            </form>
                                            {{-- Form For Registerion --}}
                                            {{-- @if(Auth::User()->role="admin") --}}
                                            <form id="register-form" method="POST"
                                                action="{{ route('register') }}">
                                                @csrf
                                                <div class="form-group">

                                                    <input id="username" type="text"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        name="name" placeholder="{{ __('Username') }}"
                                                        value="{{ old('name') }}" required autocomplete="name"
                                                        autofocus>

                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <input id="email" type="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        name="email" placeholder="{{ __('Email Address') }}"
                                                        tabindex="1" class="form-control"
                                                        value="{{ old('email') }}" required autocomplete="email">

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">

                                                    <input id="password2" type="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        name="password" tabindex="2" class="form-control"
                                                        placeholder="{{ __('Password') }}" required
                                                        autocomplete="new-password">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">

                                                    <input id="confirm-password" type="password" class="form-control"
                                                        name="password_confirmation" tabindex="2"
                                                        class="form-control"
                                                        placeholder="{{ __('Confirm Password') }}" required
                                                    autocomplete="new-password">

                                                </div>  
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-sm-offset-3">
                                                            <input type="submit" name="/home"
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
<div class="modal fade" id="login_register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h2 class="modal-title" id="exampleModalLabel" style="margin-left:230px; color:black"; >{{ __('the conditions')}}</h2>

                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                <!-- </div> -->
                <div class="modal-header">
                    <form  action="{{ route('ValidationdAmin') }}" method="post" enctype="multipart/form-data">
                        <br>
                        <p style="color:black">
                        {{ __('• When booking, the bill value is completely deducted from the bank account.')}}
                        <br>
</p>
                      <p style="color:black">
                        
                        <!-- <h3> -->
                        {{ __('• When booking, the customer can decide to receive it at the company, or the order will be delivered to him.')}}
                        <!-- </> -->
</p>
                         <p style="color:black" > 
                         {{ __('• Upon confirmation of receipt from the supervisor, in the event of non-receipt for a maximum period of 10 days, 3/4 of the invoice value will be returned to the user, and the remainder will be taken as a delay fine.')}}
</p>
                        <!-- @csrf
                       <div class="form-group">
                      <label for="firstname" class="col-form-label">{{ __('الشروط') }} </label>
                        <input form-control style="width: 230px" type="text" id="recipient-name" name="password" class="form-input"
                            placeholder="{{ __('Enter Password') }}" required="required" />
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror -->
                    </div>
                    </div>

                </div>
                <div class="modal-footer">
                  <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close')}}</button>
                  <button type="submit" class="btn">{{ __('Save') }}</button> -->
                </form>
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

    </html> -->
