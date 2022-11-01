<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <!-- =====  BASIC PAGE NEEDS  ===== -->
    <meta charset="utf-8">
    <title>{{ __('add Product') }}</title>
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
    @if (!Auth::check())
        <script>
            window.location.href = 'home';
        </script>
    @endif
    @if (Auth::user())
        @if (Auth::user()->role != 'admin' && Auth::user()->role != 'supervisor')
            <script>
                window.location.href = 'home';
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
                                <li class="currency dropdown"> <span class="dropdown-toggle" id="dropdownMenu12"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        role="button">{{ __('Properties') }} <span class="caret"></span> </span>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu12">

                                        <li><a href="/admin">{{ __('admin management') }}</a></li>
                                        <li><a href="/user">{{ __('user management') }}</a></li>
                                        <li><a href="/product">{{ __('Product Management') }}</a></li>
                                        <li><a href="/brand">{{ __('Brands') }}</a></li>
                                        <li><a href="/reports">{{ __('Reports') }}</a></li>
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
                        <div class="navbar-header col-xs-6 col-sm-4"> <a class="navbar-brand" href="index"> <img
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
                                                <li><a href="#"><select name="dropdown"
                                                            class="dropdown_ch"></a>
                                                <li>
                                                    <option class="option_ch"><a
                                                            href="#">{{ __('Born') }}</a>
                                                    </option>
                                                </li>
                                                <li>
                                                    <option class="option_ch"><a
                                                            href="#">{{ __('Boys') }}</a>
                                                    </option>
                                                </li>
                                                <li>
                                                    <option class="option_ch"><a
                                                            href="#">{{ __('Girls') }}</a>
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
                        <h1>{{ __('add Product') }}</h1>
                        <ul>
                            <li><a href="home">{{ __('Home') }}</a></li>
                            <li class="active"><a href="product">{{ __('Product Management') }}</a></li>
                            <!-- <li class="active"><a href="add_product">{{ __('add Product') }}</a></li> -->
                            <li class="active">{{ __('add Product') }}</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <form class="signup-form" action="{{ route('AddProduct') }}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- form header -->
            <div class="form-header">
                <h1>{{ __('Add Product') }}</h1>
            </div>

            <!-- form body -->
            <div class="form-body">

                <!-- Firstname and Lastname -->

                <div class="horizontal-group">

                    <div class="form-group left">
                        <label for="lastname" class="label-title">{{ __('Serial Number') }}</label>
                        <input type="number" name="product_serial" id="lastname" class="form-input"
                        placeholder="{{ __('enter serial number') }}" />
                    </div>

                    <div class="form-group right" >
                        <label class="label-title">{{ __('Product Name') }}  <span style="margin-left:310px"><button type="button" class="btn_icone" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">
                            <i class="fa fa-plus-square"></i>
                        </button></span></label>
                        {{-- <i class="fa fa-plus-circle"></i> --}}
                        <select name="product_name" class="form-input" id="level">

                            <option value="">{{ __('Select') }}</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ __($category->name) }}</option>
                            @endforeach

                        </select>
                    </div>


                </div>


                <!-- Gender and Hobbies -->

                <div class="horizontal-group">
                    <div class="form-group left">
                        <label for="firstname" class="label-title">{{ __('model') }} </label>
                        <input type="text" id="firstname" name="product_model" class="form-input"
                            placeholder="{{ __('enter model') }}" required="required" />
                    </div>
                </div>

                <!-- Source of Income and Income -->
                <div class="horizontal-group">
                    <div class="form-group left" id="adj">
                        <label class="label-title">{{ __('Brand') }}</label>
                        <select name="product_brand" class="form-input" id="level">
                            <option value="">{{ __('Select') }}</option>
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}">{{ __($brand->name) }}</option>
                            @endforeach

                        </select>
                    </div>
                    </div>

                     <!-- Source of Income and Income -->
                <div class="horizontal-group">
                    <div class="form-group left">
                        <label for="firstname" class="label-title">{{ __('Specifications') }} </label>
                        <input type="text" id="Specification" name="product_specification" class="form-input"
                            placeholder="{{ __('enter Specifications') }}" required="required" />
                    </div>
                    </div>
                    <div class="horizontal-group">
                    <div class="form-group right">
                        <label for="lastname" class="label-title">{{ __('Quantity') }}</label>
                        <input type="number" name="product_quantity" id="lastname" class="form-input"
                            placeholder="{{ __('enter Quantity') }}" />
                    </div>

                </div>

                <div class="horizontal-group">
                    <div class="form-group left">
                        <label for="firstname" class="label-title">{{ __('Color') }} </label>
                        <input type="text" id="product_name" name="product_color" class="form-input"
                            placeholder="{{ __('enter Color') }}" required="required" />
                    </div>
                    </div>
                    <div class="horizontal-group">
                    <div class="form-group right">
                        <label for="lastname" class="label-title">{{ __('Size') }}</label>
                        <input type="text" name="product_size" id="lastname" class="form-input"
                            placeholder="{{ __('enter Size') }}" />
                    </div>

                </div>

                <div class="horizontal-group">
                    <div class="form-group left">
                        <label for="firstname" class="label-title">{{ __('price') }} </label>
                        <input type="number" id="firstname" name="product_price" class="form-input"
                            placeholder="{{ __('enter price') }}" required="required" />
                    </div>
                    </div>
                <div class="horizontal-group">
                    <div class="form-group right" id="adj">
                        <label class="label-title">{{ __('Collection') }}</label>
                        <select name="product_collection" class="form-input" id="level">
                            <option value="">{{ __('Select') }}</option>
                            @for ($i=0;$i<count($collect);$i++)
                            <option value="{{ $collect[$i] }}">{{ __($collect[$i])}} </option>
                            @endfor

                    </select>
                    </div>

                </div>

                <!-- Bio -->
            <div class="horizontal-group">
                <div class="form-group left">
                    <div class="file-input">
                        <input type="file" name="product_image" id="file" class="file">
                        <label for="file">
                            {{ __('Upload Product Picture') }}
                            <p class="file-name"></p>
                        </label>
                    </div>
                </div>
                <div class="form-group right">


                </div>
            </form>
            </div>

            <!-- form-footer -->
            <div class="form-footer">
                <span></span>
                <button type="submit" class="btn">{{ __('Save') }}</button>
            </div>

        </form>


        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">{{ __('Add Category')}}</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form  action="{{ route('AddCategory') }}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group">
                      <label for="firstname" class="col-form-label">{{ __('Category Name') }} </label>
                        <input form-control type="text" id="recipient-name" name="category_name" class="form-input"
                            placeholder="{{ __('Enter Category Name') }}" required="required" />
                    </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close')}}</button>
                  <button type="submit" class="btn">{{ __('Save') }}</button>
                </form>
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
