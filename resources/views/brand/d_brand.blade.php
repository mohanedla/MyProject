@extends('dashboard.layouts.master')
@section('menu')
@extends('dashboard.sidebar.dashboard')
@endsection
@section('content')
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="home" class="logo d-flex align-items-center">

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
                        <h3>{{ __('Brand management control') }}</h3>
                        <br>
                        <br>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard_home">{{ __('Dashboard') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('Brand') }}</li>
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
                        {{ __('Brand List') }}
                        {{-- <div class="buttons"> --}}


                        <a style="float: right;" href="/dashboard_add_brand"
                        class="btn btn-secondary rounded-pill">{{ __('add brand') }}</a>

                        {{-- </div> --}}
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th style="width: 50px;" scope="col">{{ __('#') }}</th>
                                    <th style="width: 50px;" scope="col">{{ __('Name') }}</th>
                                    <th style="width: 50px;" scope="col">{{ __('Serial Number') }}</th>
                                    <th style="width: 50px;" scope="col">{{ __('Country') }}</th>
                                    <th style="width: 50px;" scope="col">{{ __('Address') }}</th>
                                    <th style="width: 50px;" scope="col">{{ __('E-mail') }}</th>
                                    <th style="width: 50px;" scope="col">{{ __('Phone Number') }}</th>
                                    <th style="width: 50px;" scope="col">{{ __('photo') }}</th> 
                                    <th style="width: 50px;" scope="col">{{ __('') }}</th>

                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($data as $key => $item)
                                <tr>
                                    <td class="id">{{ ++$key }}</td>
                                    <td class="name">{{ $item->name }}</td>
                                    <td class="name">
                                        <div class="avatar avatar-xl">
                                            <img src="{{ URL::to('/images/'. $item->avatar) }}" alt="{{ $item->avatar }}">
                                        </div>
                                    </td>
                                    <td class="email">{{ $item->email }}</td>
                                    <td class="phone_number">{{ $item->phone_number }}</td>
                                    @if ($item->status == 'Active')
                                    <td class="status"><span class="badge bg-success">{{ $item->status }}</span></td>
                                    @endif
                                    @if ($item->status == 'Disable')
                                    <td class="status"><span class="badge bg-danger">{{ $item->status }}</span></td>
                                    @endif
                                    @if ($item->status == null)
                                    <td class="status"><span class="badge bg-danger">{{ $item->status }}</span></td>
                                    @endif
                                    @if ($item->role_name == 'Admin')
                                    <td class="role_name"><span  class="badge bg-success">{{ $item->role_name }}</span></td>
                                    @endif
                                    @if ($item->role_name == 'Super Admin')
                                    <td class="role_name"><span  class="badge bg-info">{{ $item->role_name }}</span></td>
                                    @endif
                                    @if ($item->role_name == 'Normal User')
                                    <td class="role_name"><span  class=" badge bg-warning">{{ $item->role_name }}</span></td>
                                    @endif
                                    <td class="text-center">
                                        <a href="{{ route('user/add/new') }}">
                                            <span class="badge bg-info"><i class="bi bi-person-plus-fill"></i></span>
                                        </a>
                                        <a href="{{ url('view/detail/'.$item->id) }}">
                                            <span class="badge bg-success"><i class="bi bi-pencil-square"></i></span>
                                        </a>
                                        <a href="{{ url('delete_user/'.$item->id) }}" onclick="return confirm('Are you sure to want to delete it?')"><span class="badge bg-danger"><i class="bi bi-trash"></i></span></a>
                                    </td>
                                </tr>
                            @endforeach --}}

                            @php
                            $i=1;
                        @endphp
                        @foreach($brand as $x)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$x->name}}</td>
                          <td>{{$x->id}}</td>
                          <td>{{$x->country}}</td>
                          <td>{{$x->address}}</td>
                          <td>{{$x->email}}</td>
                          <td>{{$x->phone_number}}</td>
                          <td><img style="width: 50%; height:50%;" src="{{asset(Storage::url($x->profile_image))}}" alt=""></td>
                          <td class="text-center">
                          <a data-bs-toggle="modal" data-bs-target="#type_men"
                                        data-bs-whatever="@mdo" onclick="showDetails({{json_encode($x)}},{{json_encode($x->sizes)}},{{json_encode($x->colors)}})">
                                            <span class="badge bg-info"><i class="bi bi-eye-fill"></i></span>
                                        </a>
                            <a href="/dashboard_edit_brand/{{$x->id}}">
                                <span class="badge bg-success"><i class="bi bi-pencil-square"></i></span>
                            </a>
                            <a href="/delete_brand/{{$x->id}}"
                                onclick="return confirm('Are you sure to want to delete it?')"><span
                                    class="badge bg-danger"><i class="bi bi-trash"></i></span></a>
                        </td>
                    </tr>
                        </tr>
                        @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
        <div class="modal fade" id="type_men" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" > {{ __('Brand') }}</h1><br>
                    <h1 class="modal-title fs-5"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                               
                                <td>
                                    <img style="width: 66%;   margin-left: 30px;" src="{{asset(Storage::url($view->profile_image))}}" alt=""></td>
                                    <td class="text-center">
                            </tr>

                            
                        </thead>
                        
                    
                        <tbody id="bodyrow" style=" word-spacing: 50px; " >
                        </tbody>
                    </table>
                            <td > {{ __('Name') }} : &nbsp; {{$view->name}} </td>
                            <td > &nbsp; &nbsp; &nbsp; &nbsp; {{ __('Email Address') }} : &nbsp {{$view->email}}</td>
                            <br>
                            <td>{{$view->country}} :  {{ __('Country') }} &nbsp; </td>
                            <td>&nbsp; &nbsp; &nbsp; &nbsp;  {{$view->address}}  :&nbsp; {{ __('Address') }} </td>
                            <br>
                            <td> {{ __('Phone Number') }}  :   {{$view->phone_number}} </td>
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
    </div>
        <footer>
            <div class="footer clearfix mb-0 text-muted ">
                <div class="float-start">
                    <!-- <p>2021 &copy; Soeng Souy</p> -->
                </div>
                <div class="float-end">
                    <!-- <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                            href="http://soengsouy.com">Soeng Souy</a></p> -->
                </div>
            </div>
        </footer>
    </div>
@endsection
