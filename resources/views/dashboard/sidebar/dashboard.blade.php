
<div id="sidebar" class="active">   

    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">

                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>

        <div class="sidebar-menu">
            <ul class="menu">
                <!-- <li class="sidebar-title">{{ __('Menu') }}</li> -->
                <br>
                @if($page == "home")
                <li class="sidebar-item active">
                <title>{{__ ('Dashboard')}}</title>

                @else
                <li class="sidebar-item">
                @endif
                    <a href="/dashboard_home" class='sidebar-link'>
                        <i class="bi bi-house-fill"></i>
                        <span>{{ __('Dashboard') }}</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <div class="card-body">
                        <div class="badges">
                            {{-- <div class="badges">
                             @if (Auth::user()->role == 1)
                            <span>{{ __('Role Name')}}:</span>
                            <span class="badge bg-success">{{ __('Admin')}}</span>
                            <hr>
                            @endif
                             @if (Auth::user()->role == 2)
                                <span>{{ __('Role Name')}}:</span>
                                <span class="badge bg-info">{{__('Supervisor')}}</span>
                                <hr>
                            @endif

                        </div> --}}
                        </div>
                    </div>
                </li>
                @if (Auth::user()->role == '1')
                 @if($page == "employees")
                <li class="sidebar-item active">
                <title>{{__ ('all admin')}}</title>

                @else
                <li class="sidebar-item">
                @endif
                    <a href="{{route('employees')}}" class='sidebar-link'>
                        <i class="bi bi-people-fill"></i>
                        <span>{{ __('admin management') }}</span>
                    </a>
                </li>
                @endif

                @if($page == "users")
                <li class="sidebar-item active">
                <title>{{__ ('Users')}}</title>

                @else
                <li class="sidebar-item">
                @endif
                    <a href="/d_user" class='sidebar-link'>
                        <i class="bi bi-people-fill"></i>
                        <span>{{ __('user management') }}</span>
                    </a>
                </li>
                @if($page == "brands")
                <li class="sidebar-item active">
                <title>{{__ ('B??and')}}</title>

                @else
                <li class="sidebar-item">
                @endif
                    <a href="/d_brand" class='sidebar-link'>
                        <i class="bi bi-star-fill"></i>
                        <span>{{ __('B??and') }}</span>
                    </a>
                </li>

                {{-- @if (Auth::user()->role_name == 'Admin')
                    <li class="sidebar-title">Page &amp; Controller</li>
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-hexagon-fill"></i>
                            <span>Maintenain</span>
                        </a>
                        <ul class="submenu">
                            <li class="submenu-item">
                                <a href="{{ route('userManagement') }}">User Control</a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{ route('activity/log') }}">User Activity Log</a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{ route('activity/login/logout') }}">Activity Log</a>
                            </li>
                        </ul>
                    </li>
                @endif --}}

                {{-- <li class="sidebar-title">Forms &amp; Tables</li> --}}
                @if($page == "product")
                <li class="sidebar-item  has-sub active">
                <title>{{__ ('Products')}}</title>

                @else
                <li class="sidebar-item  has-sub">
                @endif
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-bag-check-fill"></i>
                        <span>{{ __('Products') }}</span>
                    </a>
                    <ul class="submenu">

                        <li class="submenu-item">
                            <a href="{{route('all_product',['id'=>0])}}">{{ __('all') }}</a>
                        </li>

                        <li class="submenu-item">
                            <a href="{{route('all_product',['id'=>1])}}">{{ __('Men') }}</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{route('all_product',['id'=>2])}}">{{ __('Women') }}</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{route('all_product',['id'=>3])}}">{{ __('Children') }}</a>
                        </li>
                    </ul>
                </li>
                @if($page == "notification")
                <li class="sidebar-item active">
                <title>{{__ ('notice')}}</title>

                @else
                <li class="sidebar-item">
                @endif
                    <a href="/d_notic" class='sidebar-link'>
                    <i class="bi bi-chat-square-dots-fill"></i>
                        <span>{{ __('notice') }}</span>
                    </a>
                </li>
                @if($page == "report")
                <li class="sidebar-item active">
                <title>{{__ ('Reports')}}</title>

                @else
                <li class="sidebar-item">
                @endif
                    <a href="/d_report" class='sidebar-link'>
                        <i class="bi bi-file-earmark-text-fill"></i>

                        <span>{{ __('Reports') }}</span>
                    </a>
                </li>
                @if($page == "bills")
                <li class="sidebar-item active">
                <title>{{__ ('Bills')}}</title>

                @else
                <li class="sidebar-item">
                @endif
                    <a href="/d_Bills" class='sidebar-link'>
                    <i class="bi bi-file-earmark-medical-fill"></i>
                    <span>{{ __('Bills') }}</span>
                    </a>
                </li>


            </ul>
            @if($page == "notifications")
                <!-- <li class="sidebar-item active"> -->
                <title>{{__ ('notifications')}}</title>

                @else
                <!-- <li class="sidebar-item"> -->
                @endif
                    <!-- <a href="/d_report" class='sidebar-link'> -->
                        <!-- <i class="bi bi-file-earmark-text-fill"></i> -->

                        <!-- <span>{{ __('notifications') }}</span> -->
                    </a>
                </li>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
