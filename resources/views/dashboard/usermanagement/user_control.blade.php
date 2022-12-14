@extends('dashboard.layouts.master')
@section('menu')
@extends('dashboard.sidebar.admin')
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
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>User Management Control</h3>
                    <p class="text-subtitle text-muted">For user to check they list</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User Mangement</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        {{-- message --}}
        {{-- {!! Toastr::message() !!} --}}
        <section class="section">
            <div class="card">
                <div class="card-header">
                    User Datatable
                    {{-- <div class="buttons"> --}}
                        <a style="float: right;" href="#" class="btn btn-secondary">Secondary</a>

                  {{-- </div> --}}
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Profile</th>
                                <th>Email Address</th>
                                <th>Phone Number</th>
                                <th>Status</th>
                                <th>Role Name</th>
                                <th class="text-center">Modify</th>
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
                                    @if($item->status =='Active')
                                    <td class="status"><span class="badge bg-success">{{ $item->status }}</span></td>
                                    @endif
                                    @if($item->status =='Disable')
                                    <td class="status"><span class="badge bg-danger">{{ $item->status }}</span></td>
                                    @endif
                                    @if($item->status ==null)
                                    <td class="status"><span class="badge bg-danger">{{ $item->status }}</span></td>
                                    @endif
                                    @if($item->role_name =='Admin')
                                    <td class="role_name"><span  class="badge bg-success">{{ $item->role_name }}</span></td>
                                    @endif
                                    @if($item->role_name =='Super Admin')
                                    <td class="role_name"><span  class="badge bg-info">{{ $item->role_name }}</span></td>
                                    @endif
                                    @if($item->role_name =='Normal User')
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

                            <tr>
                                <td class="id">1</td>
                                <td class="name">mohaned</td>
                                <td class="name">mohaned</td>
                                <td class="name">mohaned</td>
                                <td class="name">mohaned</td>
                                <td class="name">mohaned</td>
                                <td class="name">mohaned</td>
                                
                                <td class="text-center">
                                    <a href="">

                                        <span class="badge bg-info"><i class="bi bi-eye-fill"></i></span>
                                    </a>
                                    <a href="">
                                        <span class="badge bg-success"><i class="bi bi-pencil-square"></i></span>
                                    </a>
                                    <a href="" onclick="return confirm('Are you sure to want to delete it?')"><span class="badge bg-danger"><i class="bi bi-trash"></i></span></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
    <footer>
        <div class="footer clearfix mb-0 text-muted ">
            <div class="float-start">
                <p>2021 &copy; Soeng Souy</p>
            </div>
            <div class="float-end">
                <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                href="http://soengsouy.com">Soeng Souy</a></p>
            </div>
        </div>
    </footer>
</div>
@endsection
