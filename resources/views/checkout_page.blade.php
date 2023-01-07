<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <!-- =====  BASIC PAGE NEEDS  ===== -->
    <meta charset="utf-8">
    <title>{{ __('Checkout') }}</title>

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
                                    <li class="currency dropdown"> <span class="dropdown-toggle" id="dropdownMenu12"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            role="button"> {{ Auth::user()->name }}
                                            <span class="caret"></span> </span>
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
                                                            href="/category/{{ $men->id }}/Women">{{ __($men->name) }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>

                                        <li class="col-md-3">
                                            <ul>
                                                <li class="dropdown-header">{{ __('Children') }}</li>
                                                @foreach ($category_kids as $kids)
                                                    <li><a
                                                            href="/category/{{ $kids->id }}/Women">{{ __($kids->name) }}</a>
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
                        <h1>{{ __('Checkout') }}</h1>
                        <ul>
                            <li><a href="index">{{ __('Home') }}</a></li>
                            <li class="active">{{ __('Checkout') }}</li>
                        </ul>
                    </div>
                </div>
                <!-- =====  BREADCRUMB END===== -->

                <div id="column-left" class="col-sm-4 col-lg-3 hidden-xs">
                    <div id="category-menu" class="navbar collapse in mb_40" aria-expanded="true" style=""
                        role="button">

                    </div>
                    <div class="left-special left-sidebar-widget mb_50">

                        <div id="left-special" class="owl-carousel owl-loaded owl-drag">




                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 907px;">
                                    <div class="owl-item active" style="width: 226.656px;">
                                        <ul class="row ">
                                            <li class="item product-layout-left mb_20">
                                                <div class="product-list col-xs-4">
                                                    <div class="product-thumb">
                                                    </div>
                                                </div>

                                            </li>
                                            <li class="item product-layout-left mb_20">
                                                <div class="product-list col-xs-4">
                                                    <div class="product-thumb">
                                                    </div>
                                                </div>

                                    </div>
                                </div>

                                <div>
                                </div>
                                <div class="owl-dot"></div>
                                <div class="owl-dot"></div>
                                <div class="owl-dot"></div>
                            </div>
                        </div>
                    </div>

                </div>




                <div class="col-sm-8 col-lg-9 mtb_20">
                        <div class="panel panel-default " style="margin-left:3px;">
                            <div class="panel-heading">

                                <h3> {{ __('تعبئة البيانات') }} &nbsp; &nbsp; </h3>
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseTwo"> <i class="fa fa-caret-down"></i>

                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <form class="form-horizontal" action="{{ route('updateuser') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label">{{ __('رقم الحساب المصرفي') }}</label>
                                                <input type="text" name="bank_num" value="{{Auth::user()->bank_num}}"
                                                    class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="input-password"
                                                    class="control-label">{{ __('Address') }}</label>
                                                <input type="text" class="form-control" name="address"
                                                    placeholder="{{ __('') }} " value="{{Auth::user()->address}}">


                                            </div>
                                            <div class="form-group">
                                                <label for="input-password"
                                                class="control-label">{{ __('Phone Number') }}</label>
                                                <input type="integer" class="form-control" name="phone_number"
                                                value="{{Auth::user()->phone_number}}"
                                                placeholder="{{ __('') }}">
                                            </div>
                                            <div class="form-group">

                                                <label for="input-password"
                                                    class="control-label">{{ __('Upload Picture') }}</label>

                                                <input type="file" name="profile_image" id="file"
                                                    class="form-control"  value="{{Auth::user()->profile_image}}" name="profile_image">
                                                <label for="file">
                                                    <p class="file-name"></p>
                                                </label>
                                                <div class="container">
                                                    <div class="radio-inline">
                                                        <h3> طريقة الإستلام</h3>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="recive" value="0"
                                                                checked> {{ __('توصيل') }}
                                                        </label>
                                                        <label class="radio-inline">
                                                            @if(Auth::user()->recive== 1)
                                                             <input type="radio" name="recive" value="1"
                                                                checked>{{ __('الإستلام في الشركة') }}
                                                                @else
                                                                <input type="radio" name="recive" value="1"
                                                                >{{ __('الإستلام في الشركة') }}
                                                                @endif
                                                        </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <br>
                                                        
<input type="submit" class="btn"
                                                            data-loading-text="Loading..." id="button-login"
                                                            value="{{ __('Register') }}">
                                                 
                                                       

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
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
                    <form  action="{{ route('aymen') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <br>
                        @if(Auth::user()->recive== 1)
                        <p style="color:black">
                        {{ __('لفد تم خصم قيمة الفاتورة من حسابك المصرفي')}}
                        {{ __('نحن في انتظارك لإستلام منتجاتك')}}
                        <br>
                        <br>
                        @else 
                        <p style="color:black">
                        {{ __('لفد تم خصم قيمة الفاتورة من حسابك المصرفي')}}
                        {{ __('سيتم توصيل الطلبية إليك')}}
                        <br>
</p>
<br>
<br>
@endif
 <input type="submit" class="btn" id="button-confirm"
                                                    value="{{ __('Confirm Order') }}">
</form>
                    
                    </div>
                    </div>
                    </div>
                    </div>

                </div>
                    @if (Auth::User()->bank_num)
                        <div class="panel panel-default " style="margin-left:3px;">
                            <div class="panel-heading">
                                <h3> {{ __('Confirm Order') }} &nbsp; &nbsp; </h3>
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion"
                                        href="#collapsesix">{{ __('Step') }} 2 <i
                                            class="fa fa-caret-down"></i></a>
                                </h4>
                            </div>
                            <div id="collapsesix" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover" style=" font-color:#wihte;">
                                            <thead style="background-color:#424242;">
                                                <tr>
                                                    <td class="text-left">{{ __('Product Name') }}</td>
                                                    <td class="text-right">{{ __('Quantity') }}</td>
                                                    <td class="text-right">{{ __('Unit Price') }}</td>
                                                    <td class="text-right">{{ __('Total') }}</td>
                                                    <td class="text-right">{{ __('Unit Price') }}</td>
                                                    <td class="text-right">{{ __('Total') }}</td>
                                                </tr>
                                            </thead>
                                            <tbody style="background-color:#424242; font-color:#wihte;">
                                                @foreach (Cart::content() as $item)
                                                    <tr>
                                                        <td>{{ __($item->name) }}</td>
                                                        <td class="text-right">{{ $item->qty }}</td>
                                                        <td class="text-right">${{ $item->price }}</td>
                                                        <td class="text-right">${{ $item->price * $item->qty }}</td>
                                                        <td class="text-right">$1,000.00</td>
                                                        <td class="text-right">$1,000.00</td>


                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                    <td class="text-right"colspan="4">${{ \Cart::priceTotal() }}
                                                    </td>
                                                    <td></td>
                                                    <td class="text-right"colspan="4">$1,000.00</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="buttons">
                                        <div class="pull-right">
                                            <form class="form-horizontal" action="{{ route('aymen') }}"
                                                method="post" enctype="multipart/form-data">
                                                @csrf
                                                <a href="#login_register"class="btn" data-toggle="modal" data-whatever="@getbootstrap">
                                                {{ __('Confirm Order') }}</a>
                                                {{-- <input type="hidden" name='total' value="{{\Cart::priceTotal()}}"> --}}
                                               
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
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
                            @foreach ($brand as $x)
                                <div class="item text-center">

                                    <a @if (Auth::User()) href="item_brand/{{ $x->id }}" @endif>
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