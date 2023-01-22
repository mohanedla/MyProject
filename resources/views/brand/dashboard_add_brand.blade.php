@extends('dashboard.layouts.master')
@section('menu')
    @extends('dashboard.sidebar.dashboard')
@endsection
@section('content')


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
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>{{ __('Brand management control') }}</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard_home">{{ __('Dashboard') }}</a></li>
                            <li class="breadcrumb-item"><a href="/d_brand">{{ __('Brand') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('add brand') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ __('add brand') }}</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">

                            <form class="signup-form"  action="{{ route('AddBrand') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">{{ __('Brand Name') }}</label>
                                            <input type="text" id="first-name-column" class="form-control"
                                                placeholder="{{ __('enter Brand Name') }}" name="brand_name">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                    <div class="form-group">
                                            <label for="email-id-column">{{ __('Email') }}</label>
                                            <input type="email" id="email-id-column" class="form-control"
                                                name="brand_email" placeholder="{{ __('enter your email') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="city-column">{{ __('model') }} </label>
                                            <input type="text" id="city-column" class="form-control"
                                                placeholder="{{ __('enter model') }}" name="brand_model">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="country-floating">{{ __('Phone Number') }}</label>
                                            <input type="text" id="country-floating" class="form-control"
                                                name="brand_phone" placeholder="{{ __('Enter your phone number') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="company-column">{{ __('Country') }}</label>
                                            <input type="text" id="company-column" class="form-control"
                                                name="brand_country" placeholder="{{ __('enter country name') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">{{ __('Address') }} </label>
                                            <input type="text" id="email-id-column" class="form-control"
                                                name="brand_address" placeholder="{{ __('enter your address') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group has-icon-lefts">
                                            <div class="form-group">
                                                <label for="email-id-column"> {{ __('Upload Product Picture') }}</label>
                                                <input type="file" class="form-control" placeholder=""
                                                    id="first-name-icon" name="profile_image" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">{{ __('Save') }}</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">{{ __('Reset') }}</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
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
