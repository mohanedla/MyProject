@extends('dashboard.layouts.master')
@section('menu')
    @extends('dashboard.sidebar.men')
@endsection
@section('content')
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="" class="logo d-flex align-items-center">

                <span class="d-none d-lg-block">Online Shop</span>
            </a>
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
            {{-- <i class="bi bi-list toggle-sidebar-btn"></i> --}}

        </div><!-- End Logo -->



        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number">4</span>
                    </a><!-- End Notification Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">
                            You have 4 new notifications
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Sit rerum fuga</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>2 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-info-circle text-primary"></i>
                            <div>
                                <h4>Dicta reprehenderit</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer">
                            <a href="#">Show all notifications</a>
                        </li>

                    </ul><!-- End Notification Dropdown Items -->

                </li><!-- End Notification Nav -->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-chat-left-text"></i>
                        <span class="badge bg-success badge-number">3</span>
                    </a><!-- End Messages Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                        <li class="dropdown-header">
                            You have 3 new messages
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>Maria Hudson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>4 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>Anna Nelson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>6 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>David Muldon</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>8 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="dropdown-footer">
                            <a href="#">Show all messages</a>
                        </li>

                    </ul><!-- End Messages Dropdown Items -->

                </li><!-- End Messages Nav -->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Kevin Anderson</h6>
                            <span>Web Designer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <div id="main">
        <style>
            .avatar.avatar-im .avatar-content,
            .avatar.avatar-xl img {
                width: 40px !important;
                height: 40px !important;
                font-size: 1rem !important;
            }

            .form-group[class*=has-icon-].has-icon-lefts .form-select {
                padding-left: 2rem;
            }
        </style>

        {{-- <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header> --}}
    {{-- message --}}
    {!! Toastr::message() !!}
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>{{ __('Products management control') }}</h3>
                        <br>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">{{ __('Dashboard') }}</a></li>
                                <li class="breadcrumb-item"><a href="">{{ __('Product Management') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('Add a men,s product') }}
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ __('Add a men,s product') }}
                            <button style="float: right;" type="button" data-bs-toggle="modal" data-bs-target="#type_men"
                                data-bs-whatever="@mdo"
                                class="btn btn-secondary rounded-pill">{{ __('add Type') }}</button>
                            <button style="float: right;" type="button" data-bs-toggle="modal" data-bs-target="#size"
                                data-bs-whatever="@mdo"
                                class="btn btn-secondary rounded-pill">{{ __('Add Size') }}</button>
                            <button style="float: right;" type="button" data-bs-toggle="modal" data-bs-target="#color"
                                data-bs-whatever="@mdo"
                                class="btn btn-secondary rounded-pill"">{{ __('Add Color') }}</button>

                        </h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">

                            <form class="signup-form" action="{{ route('AddProduct') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <input type="hidden" name="product_collection" value="Men">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">{{ __('Product Name') }}</label>
                                            <fieldset class="form-group">
                                                <select class="form-select @error('role_name') is-invalid @enderror"
                                                    name="product_name" id="role_name">
                                                    <option selected disabled>{{ __('Select') }} </option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->name }}">{{ __($category->name) }}
                                                        </option>
                                                    @endforeach

                                                </select>

                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">{{ __('Brand') }}</label>
                                            <fieldset class="form-group">
                                                <select class="form-select @error('role_name') is-invalid @enderror"
                                                    name="product_brand" id="role_name">
                                                    <option selected disabled>Select </option>
                                                    @foreach ($brands as $brand)
                                                        <option value="{{ $brand->id }}">{{ __($brand->name) }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="city-column">{{ __('Specifications') }} </label>
                                            <input type="text" id="city-column" class="form-control"
                                                placeholder="{{ __('enter Specifications') }}"
                                                name="product_specification">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="country-floating">{{ __('Quantity') }}</label>
                                            <input type="number" id="country-floating" class="form-control"
                                                name="product_quantity" placeholder="{{ __('enter Quantity') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="company-column">{{ __('Size') }}</label>
                                            <fieldset class="form-group">
                                                <select style="width=100%" class="form-select" name="product_size[]"
                                                    id="level" id="field2" multiselect-select-all="true" multiple
                                                    onchange="console.log(Array.from(this.selectedOptions).map(x=>x.value??x.text))"
                                                    multiselect-hide-x="true">
                                                    {{-- <select multiple class="form-select @error('role_name') is-invalid @enderror" name="role_name" id="role_name"> --}}
                                                    @foreach ($size as $s)
                                                        <option value="{{ $s->name }}">{{ __($s->name) }} </option>
                                                    @endforeach
                                                </select>

                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">{{ __('Color') }}</label>
                                            <fieldset class="form-group">
                                                <select style="width=100%" class="form-select" name="product_color[]"
                                                    id="level" id="field2" multiselect-select-all="true" multiple
                                                    onchange="console.log(Array.from(this.selectedOptions).map(x=>x.value??x.text))"
                                                    multiselect-hide-x="true">
                                                    {{-- <select multiple class="form-select @error('role_name') is-invalid @enderror" name="role_name" id="role_name"> --}}
                                                    @foreach ($color as $c)
                                                        <option value="{{ $c->name }}">{{ __($c->name) }} </option>
                                                    @endforeach
                                                </select>

                                            </fieldset>

                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <br>
                                            <label for="email-id-column">{{ __('price') }}</label>
                                            <input type="text" id="email-id-column" class="form-control"
                                                name="product_price" placeholder="{{ __('enter price') }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group has-icon-lefts">
                                            <br>
                                            <label for="email-id-column"> {{ __('Upload Product Picture') }}</label>
                                            <input type="file" class="form-control" placeholder="Name"
                                                id="first-name-icon" name="product_image" />
                                            {{-- <div class="form-control-icon avatar avatar.avatar-im">
                                                <img src="{{ URL::to('/images/'. $data[0]->avatar) }}">
                                            </div> --}}

                                        </div>
                                    </div>
                                </div>


                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">{{ __('Save') }}</button>
                                    <button type="reset"
                                        class="btn btn-light-secondary me-1 mb-1">{{ __('Reset') }}</button>
                                </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- for categories --}}
    <div class="modal fade" id="type_men" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{ __('New Category') }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('AddCategoryMen') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">{{ __('New Category') }}:</label>
                            <input type="text" class="form-control" id="recipient-name" name="category_men_name"
                                placeholder="{{ __('Enter Category Name') }}" required="required">
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">{{ __('Close') }}</button>
                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    {{-- color --}}
    <div class="modal fade" id="color" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{ __('New Color') }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('AddColor') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">{{ __('New Color') }}:</label>
                            <input type="text" class="form-control" placeholder="{{ __('Enter Color Name') }}"
                                name="color_name" id="recipient-name" required="required">
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">{{ __('Close') }}</button>
                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    {{-- size --}}
    <div class="modal fade" id="size" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{ __('New Size') }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('AddSize') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">{{ __('New Size') }}:</label>
                            <input type="text" class="form-control" id="recipient-name" name="size_name"
                                placeholder="{{ __('Enter Size Name') }}" required="required">
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">{{ __('Close') }}</button>
                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer clearfix mb-0 text-muted ">
            <div class="float-start">
            </div>
            <div class="float-end">

            </div>
        </div>
    </footer>
    </div>
@endsection
