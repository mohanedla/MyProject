@extends('dashboard.layouts.master')
@section('menu')
    @extends('dashboard.sidebar.dashboard')
@endsection
@section('content')
    <!-- ======= Header ======= -->
   <!-- End Header -->

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
                        <h3>{{ __('add admin') }}</h3>
                        <br>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/dashboard_home">{{ __('Dashboard') }}</a></li>
                                <li class="breadcrumb-item"><a href="/employees">{{ __('all admin') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('add admin') }}
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">

                            <form class="signup-form" action="{{ route('store_employee') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="city-column">{{ __('name admin') }}</label>
                                            <input type="text" id="city-column" class="form-control" required
                                                placeholder="{{ __('enter name admin') }}"
                                                name="name">
                                        </div>
                                    </div>


                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="country-floating">{{ __('Email Address') }}</label>
                                            <input type="email" id="country-floating" class="form-control" required
                                                name="email" placeholder=" {{ __('enter your email') }}">
                                        </div>
                                    </div>


                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <br>
                                            <label for="email-id-column">{{ __('Password') }}</label>
                                            <input type="password" id="email-id-column" class="form-control" required
                                                name="password" placeholder=" {{ __('enter password') }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <br>
                                            <label for="email-id-column">{{ __('Confirm Password') }}</label>
                                            <input type="password" id="email-id-column" class="form-control" required
                                                name="password_confirmation" placeholder="{{ __('enter password again') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="email-id-column"> {{ __('Upload Profile Picture') }}</label>
                                                <input type="file"  placeholder="{{ __('enter photo') }}" class="form-control" required 
                                               
                                                    id="first-name-icon" name="profile_image">
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
    {{-- <div class="modal fade" id="type_men" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>>{{ __('') }}
                </div>
                </form>
            </div>
        </div>
    </div> --}}

    {{-- color --}}
    {{-- <div class="modal fade" id="color" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    </div> --}}
    {{-- size --}}
    {{-- <div class="modal fade" id="size" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    </div> --}}

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
