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
            <h1>{{__('Shopping Cart')}}</h1>
            <ul>
              <li><a href="index.html">{{__('Home')}}</a></li>
              <li class="active">{{__('Shopping Cart')}}</li>
            </ul>
          </div>
        </div>
        <!-- =====  BREADCRUMB END===== -->
         <div id="column-left" class="col-sm-4 col-lg-3 hidden-xs">
          <div id="category-menu" class="navbar collapse in mb_40" aria-expanded="true" style="" role="button">
          </div>
         
        </div> 
        <div class="col-sm-8 col-lg-9 mtb_20">
          <form enctype="multipart/form-data" method="post" action="#">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <td class="text-center">{{__('Image')}}</td>
                    <td class="text-left">{{__('Product Name')}}</td>
                    <td class="text-left">{{__('Model')}}</td>
                    <td class="text-left">{{__('Quantity')}}</td>
                    <td class="text-right">{{__('Unit Price')}}</td>
                    <td class="text-right">{{__('Total')}}</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center"><a href="#"><img src="{{asset('images/product/70x84.jpg')}} " alt="iPod Classic" title="iPod Classic"></a></td>
                    <td class="text-left"><a href="product"> {{__('iPhone')}} </a></td>
                    <td class="text-left">{{__('product 11')}} </td>
                    <td class="text-left">
                      <div style="max-width: 200px;" class="input-group btn-block">
                        <input type="text" class="form-control quantity" size="1" value="1" name="quantity">
                        <span class="input-group-btn">
                      <button class="btn" title="" data-toggle="tooltip" type="submit" data-original-title="Update"><i class="fa fa-refresh"></i></button>
                      <button  class="btn btn-danger" title="" data-toggle="tooltip" type="button" data-original-title="Remove"><i class="fa fa-times-circle"></i></button>
                      </span></div>
                    </td>
                    <td class="text-right">$254.00</td>
                    <td class="text-right">$254.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </form>
          <h3 class="mtb_10"> {{ __('What would you like to do next?') }}</h3>
          <p>{{ __('Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost') }}</p>
          <div class="panel-group mt_20" id="accordion">
            <div class="panel panel-default pull-left">
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">{{ __('Use Coupon Code') }} <i class="fa fa-caret-down"></i></a></h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                  <label for="input-coupon" class="col-sm-4 control-label">{{ __('Enter coupon here') }}</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="input-coupon" placeholder="{{ __('Enter coupon here') }}" value="" name="coupon">
                    <span class="input-group-btn">
                  <input type="button" class="btn" data-loading-text="Loading..." id="button-coupon" value="{{ __('Apply Coupon') }}">
                  </span> </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default pull-left">
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">{{ __('Use Gift Voucher') }} <i class="fa fa-caret-down"></i></a> </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                  <label for="input-voucher" class="col-sm-4 control-label">{{ __('Enter gift voucher code here') }}</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="input-voucher" placeholder="{{ __('Enter gift voucher code here') }}" value="" name="voucher">
                    <span class="input-group-btn">
                  <input type="button" class="btn" data-loading-text="Loading..." id="button-voucher" value="{{ __('Apply Voucher') }}">
                  </span>
                 </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default pull-left">
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">{{ __('Estimate Shipping & Taxes') }} <i class="fa fa-caret-down"></i></a> </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>{{ __('Enter destination to get a shipping estimate') }}.</p>
                  <form class="form-horizontal">
                    <div class="form-group required">
                      <label for="input-country" class="col-sm-2 control-label">{{ __('Country') }}</label>
                      <div class="col-sm-10">
                        <select class="form-control" id="input-country" name="country_id">
                          <option value="">--- {{ __('Please Select') }}--- </option>
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
                      <label for="input-zone" class="col-sm-2 control-label">{{ __('Region / State') }}</label>
                      <div class="col-sm-10">
                        <select class="form-control" id="input-zone" name="zone_id">
                          <option value="">--- {{ __('Please Select') }}--- </option>
                          <option value="3513">Aberdeen</option>
                          <option value="3514">Aberdeenshire</option>
                          <option value="3515">Anglesey</option>
                          <option value="3516">Angus</option>
                          <option value="3517">Argyll and Bute</option>
                          <option value="3518">Bedfordshire</option>
                          <option value="3519">Berkshire</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group required">
                      <label for="input-postcode" class="col-sm-2 control-label">{{ __('Post Code') }}</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="input-postcode" placeholder="{{ __('Enter Post Code') }}" value="" name="{{ __('postcode') }}">
                      </div>
                    </div>
                    <input type="button" class="btn pull-right" data-loading-text="Loading..." id="button-quote" value="{{ __('Get Quotes')}}">
                  </form>
                </div>
              </div>
            </div>
          </div>
      
          <form action="index">
            <input class="btn pull-left mt_30" type="submit" value="{{__('Continue Shopping')}}" />
          </form>
          <form action="checkout">
            <input class="btn pull-right mt_30" type="submit" value="{{__('Checkout')}}
" />
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