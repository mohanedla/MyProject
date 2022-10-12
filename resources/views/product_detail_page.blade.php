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
            <h1>New LCDScreen...</h1>
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="category_page.html">Products</a></li>
              <li class="active">New LCDS...</li>
            </ul>
          </div>
        </div>
        <!-- =====  BREADCRUMB END===== -->
        <div id="column-left" class="col-sm-4 col-lg-3 hidden-xs">
          <div id="category-menu" class="navbar collapse in mb_40" aria-expanded="true" style="" role="button">
            <div class="nav-responsive">
              <div class="heading-part">              </div>
          </div>

          </div>
          <div class="left_banner left-sidebar-widget mt_30 mb_40">  </div>
          <div class="left-special left-sidebar-widget mb_50">
            <div class="heading-part mb_10 ">
            </div>

            {{-- <div id="left-special" class="owl-carousel">
              
              </div>  --}}
            </div>
        </div>
        <div class="col-sm-8 col-lg-9 mtb_20">
          <div class="row mt_10 ">
            <div class="col-md-6">
              <div><a class="thumbnails"> <img data-name="product_image" src=" {{asset('images/product/product1.jpg')}}"  /></a></div>
              <div id="product-thumbnail" class="owl-carousel">
                <div class="item">
                </div>
                <div class="image-additional"><a class="thumbnail" href="images/product/product1.jpg" data-fancybox="group1"> <img src="{{asset('images/product/product1.jpg')}}"  /></a></div>
                <div class="item">
                  <div class="image-additional"><a class="thumbnail" href="images/product/product2.jpg" data-fancybox="group1"> <img src="{{asset('images/product/product2.jpg')}}"  /></a></div>
                </div>
                <div class="item">
                  <div class="image-additional"><a class="thumbnail" href="images/product/product3.jpg" data-fancybox="group1"> <img src="{{asset('images/product/product3.jpg')}}"  /></a></div>
                </div>
                <div class="item">
                  <div class="image-additional"><a class="thumbnail" href="images/product/product4.jpg" data-fancybox="group1"> <img src="{{asset('images/product/product4.jpg')}}"  /></a></div>
                </div>
                <div class="item">
                  <div class="image-additional"><a class="thumbnail" href="images/product/product5.jpg" data-fancybox="group1"> <img src="{{asset('images/product/product5.jpg')}}"  /></a></div>
                </div>
                <div class="item">
                  <div class="image-additional"><a class="thumbnail" href="images/product/product6.jpg" data-fancybox="group1"> <img src="{{asset('images/product/product6.jpg')}}"  /></a></div>
                </div>
                <div class="item">
                  <div class="image-additional"><a class="thumbnail" href="images/product/product7.jpg" data-fancybox="group1"> <img src="{{asset('images/product/product7.jpg')}}" /></a></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 prodetail caption product-thumb">
              <h4 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h4>
              <div class="rating">
                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
              </div>
              <span class="price mb_20"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
              </span>
              <hr>
              <ul class="list-unstyled product_info mtb_20">
                <li>
                  <label>Brand:</label>
                  <span> <a href="#">Apple</a></span></li>
                <li>
                  <label>Product Code:</label>
                  <span> product 20</span></li>
                <li>
                  <label>Availability:</label>
                  <span> In Stock</span></li>
              </ul>
              <hr>
              <p class="product-desc mtb_30"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go. Cover Flow. Browse through your music collection by flipping..</p>
              <div id="product">
                <div class="form-group">
                  <div class="row">
                    <div class="Sort-by col-md-6">
                      <label>Sort by</label>
                      <select name="product_size" id="select-by-size" class="selectpicker form-control">
                        <option>Small</option>
                        <option>Medium</option>
                        <option>Large</option>
                      </select>
                    </div>
                    <div class="Color col-md-6">
                      <label>Color</label>
                      <select name="product_color" id="select-by-color" class="selectpicker form-control">
                        <option>Blue</option>
                        <option>Green</option>
                        <option>Orange</option>
                        <option>White</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="qty mt_30 form-group2">
                  <label>Qty</label>
                  <input name="product_quantity" min="1" value="1" type="number">
                </div>
                <div class="button-group mt_30">
                  <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                  <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                  <div class="compare"><a href="#"><span>Compare</span></a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div id="exTab5" class="mtb_30">
                <ul class="nav nav-tabs">
                  <li class="active"> <a href="#1c" data-toggle="tab"> {{__(' Overview')}}</a> </li>
                  <li><a href="#2c" data-toggle="tab"> {{__(' Reviews')}} (1)</a> </li>
                </ul>
                <div class="tab-content ">
                  <div class="tab-pane active pt_20" id="1c">
                    <p>CLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis malesuada mi id tristique. Sed ipsum nisi, dapibus at faucibus non, dictum a diam. Nunc vitae interdum diam. Sed finibus, justo vel maximus facilisis, sapien turpis euismod tellus, vulputate semper diam ipsum vel tellus.</p>
                  </div>
                  <div class="tab-pane" id="2c">
                    <form class="form-horizontal">
                      <div id="review"></div>
                      <h4 class="mt_20 mb_30">Write a review</h4>
                      <div class="form-group required">
                        <div class="col-sm-12">
                          <label class="control-label" for="input-name">Your Name</label>
                          <input name="name" value="" id="input-name" class="form-control" type="text">
                        </div>
                      </div>
                      <div class="form-group required">
                        <div class="col-sm-12">
                          <label class="control-label" for="input-review">Your Review</label>
                          <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                          <div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div>
                        </div>
                      </div>
                      <div class="form-group required">
                        <div class="col-md-6">
                          <label class="control-label">Rating</label>
                          <div class="rates"><span>Bad</span>
                            <input name="rating" value="1" type="radio">
                            <input name="rating" value="2" type="radio">
                            <input name="rating" value="3" type="radio">
                            <input name="rating" value="4" type="radio">
                            <input name="rating" value="5" type="radio">
                            <span>Good</span></div>
                        </div>
                        <div class="col-md-6">
                          <div class="buttons pull-right">
                            <button type="submit" class="btn btn-md btn-link">Continue</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">

                </div>
              </div>
            </div>
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