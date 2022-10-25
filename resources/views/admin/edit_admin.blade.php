<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <!-- =====  BASIC PAGE NEEDS  ===== -->
    <meta charset="utf-8">
    <title>{{ __('Add admin') }}</title>
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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style1.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">

    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-touch-icon-114x114.png') }}">
</head>

<body>
    @if(!Auth::check())
    <script>
       window.location.href ='home';
   </script>
@endif
    @if (Auth::user())
    @if (Auth::user()->role != "admin" && Auth::user()->role != "supervisor")
<script>
    window.location.href ='home';
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
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                            @endguest                                 <li class="language dropdown"> <span class="dropdown-toggle" id="dropdownMenu1"
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
                        <h1>{{ __('Edit admin') }}</h1>
                        <ul>
                            <li><a href="home">{{ __('Home') }}</a></li>
                            <li><a href="admin">{{ __('admin') }}</a></li>
                            <li><a href="edit_admin">{{ __('Edit admin') }}</a></li>
                        </ul>
                    </div>
                </div>
                  </div>
            </div>

            <form class="signup-form"  action="{{url('/edit_admin/'.$admin->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <!-- form header -->
                <div class="form-header">
                    <h1>{{ __('Edit admin') }}</h1>
                </div>

                <!-- form body -->
                <div class="form-body">

                    <!-- Firstname and Lastname -->
                    <div class="horizontal-group">
                        <div class="form-group left">
                                <label for="firstname" class="label-title">{{ __('First name') }} </label>
                                <input type="text" id="firstname" name="admin_fname" value="{{$admin->fname}}" class="form-input" placeholder="{{ __('enter your first name') }}"
                                    required="required" />
                        </div>
                        <div class="form-group right" >
                                <label for="lastname" class="label-title">{{ __('Last name') }}</label>
                                <input type="text" id="lastname" name="admin_lname" value="{{$admin->lname}}" class="form-input"
                                    placeholder="{{ __('enter your last name') }}"

                       </div>

                    </div>


                    <!-- Gender and Hobbies -->

                        <div class="horizontal-group">
                            <div class="form-group left">
                                    <label for="email" class="label-title">{{ __('Email') }}</label>
                                    <input type="email" id="email" name="admin_email" value="{{$admin->email}}" class="form-input" placeholder="{{ __('enter your email') }}"
                                        required="required">
                            </div>
                    </div>

                    <!-- Source of Income and Income -->
                    <div class="horizontal-group">
                        <div class="form-group left" id="adj">
                            <label for="phone" class="label-title">{{ __('Phone Number') }}</label>
                        <input type="tel" id="phone" name="admin_phone" value="{{$admin->phone_number}}" class="form-input" placeholder="{{ __('Enter your phone number') }}" required="required">
                </div>


                    </div>

                    <div class="horizontal-group">
                        <div class="form-group left">
                            <label for="password" class="label-title">{{ __('Password') }} </label>
                        <input type="password" id="password" name="admin_password" value="{{$admin->password}}" class="form-input" placeholder="{{ __('enter your password') }}"
                            required="required">
                        </div>
                        <div class="form-group right">
                            <label for="confirm-password" class="label-title">{{ __('Confirm Password') }} </label>
                            <input type="password" class="form-input" id="confirm-password" name="admin_confirm_password" value="{{$admin->confirm_password}}"
                                placeholder="{{ __('enter your password again') }}" required="required">
                        </div>
                    </div>
                    <div class="horizontal-group">
                        <div class="form-group left">
                            <label for="firstname" class="label-title">{{ __('Address') }} </label>
                            <input type="text" id="firstname" name="admin_address" value="{{$admin->address}}" class="form-input" placeholder="{{ __('enter your address') }}"
                                required="required" />
                        </div>
                        <div class="form-group right">
                            <label class="label-title">{{ __('Adjective') }}</label>
                        <select name="admin_adjective" value="{{$admin->adjective}}" class="form-input" id="level">
                            <option value="B">{{ __('Manger') }}</option>
                            <option value="I">{{ __('Admin') }}</option>

                        </select>
                        </div>
                    </div>
                    <div class="horizontal-group">
                        <div class="form-group left">
                            <div class="radio-container">
                                <input checked="checked" type="radio" name="gender" value="{{$admin->gender}}" id="male" />
                                <label for="male">{{ __('Male') }}</label>
                                <input type="radio" name="gender" value="{{$admin->gender}}" id="female" />
                                <label for="female">{{ __('Female') }}</label>
                            </div>
                        </div>
                        <div class="form-group right">
                            <label style="float:left" for="experience" class="label-title">{{ __('Age') }}</label>
                            <input type="number" min="18" max="60" value="{{$admin->age}}" name="admin_age" class="form-input">
                        </div>
                    </div>

                    <div class="horizontal-group">
                        <div class="form-group left">
                            <div class="file-input">
                                <input type="file" name="profile_image" value="{{$admin->profile_image}}" id="file" class="file">
                                <label for="file">
                                    {{ __('Upload Product Picture') }}
                                  <p class="file-name"></p>
                                </label>
                              </div>
                            </div>
                            <div class="form-group right">
                                <label style="float:left" for="experience" class="label-title">{{ __('Job No.') }}</label>
                                <input type="text"  maxlength="12" name="admin_serial" value="{{$admin->id}}" class="form-input">
                        </div>
                        </div>
                    <!-- Bio -->

                </div>

                <!-- form-footer -->
                <div class="form-footer">
                    <span></span>
                    <button type="submit" name="admin_save" class="btn">{{ __('Edit') }}</button>
                </div>

            </form>


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

