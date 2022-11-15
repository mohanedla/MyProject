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
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item">
                    <a href="/dashboard_home" class='sidebar-link'>
                        <i class="bi bi-house-fill"></i>
                        <span>{{ __('Dashboard') }}</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <div class="card-body">
                        <div class="badges">
                            {{-- @if (Auth::user()->role_name=='Admin')
                            <span>Name: <span class="fw-bolder">{{ Auth::user()->name }}</span></span>
                            <hr>
                            <span>Role Name:</span>
                            <span class="badge bg-success">Admin</span>
                            @endif
                            @if (Auth::user()->role_name=='Super Admin')
                                <span>Name: <span class="fw-bolder">{{ Auth::user()->name }}</span></span>
                                <hr>
                                <span>Role Name:</span>
                                <span class="badge bg-info">Super Admin</span>
                            @endif
                            @if (Auth::user()->role_name=='Normal User')
                                <span>Name: <span class="fw-bolder">{{ Auth::user()->name }}</span></span>
                                <hr>
                                <span>Role Name:</span>
                                <span class="badge bg-warning">User Normal</span>
                            @endif --}}
                        </div>
                    </div>
                </li>
                <li class="sidebar-item">
                    <a href="/dashboard_viewuser" class='sidebar-link'>
                        <i class="bi bi-shield-lock"></i>
                        <span>{{ __('admin management') }}</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/dashboard_viewuser" class='sidebar-link'>
                        <i class="bi bi-shield-lock"></i>
                        <span>{{ __('user management') }}</span>
                    </a>
                </li>

                {{-- @if (Auth::user()->role_name=='Admin')
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
                <li class="sidebar-item">
                    <a href="/dashboard_viewuser" class='sidebar-link'>
                        <i class="bi bi-shield-lock"></i>
                        <span>{{ __('Brands') }}</span>
                    </a>
                </li>

                <li class="sidebar-title">Forms &amp; Tables</li>
                <li class="sidebar-item  has-sub active">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>{{ __('Products') }}</span>
                    </a>
                    <ul class="submenu active">
                        <li class="submenu-item active">
                            <a href="/men_product">{{ __('Men') }}</a>
                        </li>
                        <li class="submenu-item">
                            <a href="/women_product">{{ __('Women') }}</a>
                        </li>
                        <li class="submenu-item">
                            <a href="/kids_product">{{ __('Children') }}</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="/dashboard_viewuser" class='sidebar-link'>
                        <i class="bi bi-shield-lock"></i>
                        <span>{{ __('Reports') }}</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/dashboard_viewuser" class='sidebar-link'>
                        <i class="bi bi-shield-lock"></i>
                        <span>{{ __('notice') }}</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/dashboard_viewuser" class='sidebar-link'>
                        <i class="bi bi-shield-lock"></i>
                        <span>{{ __('Bills') }}</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
