@extends('dashboard.layouts.master')
@section('menu')
    @extends('dashboard.sidebar.dashboard')
@endsection
@section('content')
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="home#" class="logo d-flex align-items-center">
                <span class="d-none d-lg-block">Online Shop</span>
                <!-- <a class="d-none d-lg-block"> alt="themini" src="{{ asset('images/logo/logo4.jpg') }}"> </a> -->
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

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>{{ __('notic management ') }}</h3>
                        <br>
                        <br>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard_home">{{ __('Dashboard') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('notice') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            {{-- message --}}
            {!! Toastr::message() !!}
            <section class="section">  
                <div class="card">
                    <div class="card-header">
                        <h4>{{ __('notice List') }}</h4>


                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th style="width: 50px;" scope="col">{{ __('#') }}</th>
                                    <th style="width: 50px;" scope="col">{{ __('User name') }}</th>
                                    <th style="width: 50px;" scope="col">{{ __('Email Address') }}</th>
                                    <th style="width: 50px;" scope="col">{{ __('Phone Number') }}</th>
                                    <th style="width: 50px;" scope="col">{{ __('Role') }}</th>
                                    
                                    <th style="width: 50px;" scope="col"></th>


                                </tr>
                            </thead>
                            <tbody>
                               
                            @php
                                $i=1;
                                
                            @endphp
                            @foreach ($notices as $x)
                               @if(Auth::User()->role==1)
                                
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$x->name}}</td>
                                    <td>{{$x->email}}</td>
                                    <td>{{$x->phone1}}</td>
                                    @if($x->role==2)
                                    <td>{{__('Supervisor')}}</td>
                                    @else
                                    <td>{{__('user')}}</td>
                                    @endif
                                     <td class="text-center"> 
                                 <a data-bs-toggle="modal" data-bs-target="#type_men" data-bs-whatever="@mdo">
                                    <span class="badge bg-info"><i class="bi bi-eye-fill"></i></span>
                                </a>


                                <a href="#" onclick="return confirm('Are you sure to want to delete it?')"><span
                                        class="badge bg-danger"><i class="bi bi-trash"></i></span></a> 
                             </td>
                                </tr>
                                @elseif(Auth::User()->role==2 and $x->role==3)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$x->name}}</td>
                                    <td>{{$x->email}}</td>
                                    <td>{{$x->phone1}}</td>
                                    @if($x->role==2)
                                    <td>{{__('Supervisor')}}</td>
                                    @else
                                    <td>{{__('user')}}</td>
                                    @endif
                                    <td>{{$x->subject}}</td>
                                    
                                     <td class="text-center"> 
                                 <a data-bs-toggle="modal" data-bs-target="#type_men" data-bs-whatever="@mdo">
                                    <span class="badge bg-info"><i class="bi bi-eye-fill"></i></span>
                                </a>


                                <a href="#" onclick="return confirm('Are you sure to want to delete it?')"><span
                                        class="badge bg-danger"><i class="bi bi-trash"></i></span></a> 
                             </td>
                                </tr>
                                @endif
                                @endforeach                            
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                    <script>
                        $(document).ready(function() {
                            $("#tblCustomer").DataTable();
                        });
                    </script>
                </div>
            </section>
        </div>

        {{-- for categories --}}
        <div class="modal fade" id="type_men" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"> {{ __('The reason for the notice') }} </h1>
                        <br>
                        <h1 class="modal-title fs-5" id="productName"></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <!-- <th style="width: 50px;" scope="col">الالوان</th>
                                    <th style="width: 50px;" scope="col">المقاسات</th> -->
                                </tr>
                            </thead>
                            <tbody id="bodyrow">

                            <tr>{{$x->subject}}</tr> 

                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">{{ __('Close') }}</button>
                        <!-- <button type="submit" class="btn btn-primary">{{ __('Save') }}</button> -->
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
