<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="{{ url('/') }}"><img src="{{asset('storage/images/company/logos/'.$company->logo)}}" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="{{ url('/') }}"><img src="{{asset('storage/images/company/logos/'.$company->logo)}}" alt="logo"/></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="ti-layout-grid2"></span>
        </button>

        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                    <i class="ti-bell mx-0"></i>
                    <span class="count"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                    <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-success">
                                <i class="ti-info-alt mx-0"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <h6 class="preview-subject font-weight-normal">Application Error</h6>
                            <p class="font-weight-light small-text mb-0 text-muted">
                                Just now
                            </p>
                        </div>
                    </a>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-warning">
                                <i class="ti-settings mx-0"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <h6 class="preview-subject font-weight-normal">Settings</h6>
                            <p class="font-weight-light small-text mb-0 text-muted">
                                Private message
                            </p>
                        </div>
                    </a>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-info">
                                <i class="ti-user mx-0"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <h6 class="preview-subject font-weight-normal">New user registration</h6>
                            <p class="font-weight-light small-text mb-0 text-muted">
                                2 days ago
                            </p>
                        </div>
                    </a>
                </div>
            </li>
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                    <img src="{{asset('storage/images/admin/images/'.auth()->user()->image)}}" alt="profile"/>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                    <a href="{{route('profile')}}" class="dropdown-item">
                        <i class="ti-settings text-primary"></i>
                        Profile
                    </a>

                    <a href="{{route('password')}}" class="dropdown-item">
                        <i class="ti-eraser menu-icon text-primary"></i>
                        Change Password
                    </a>

                    <form action="{{route('admin.logout')}}" method="post">
                        @csrf
                        <button class="dropdown-item">
                            <i class="ti-power-off text-primary"></i>
                            Logout
                        </button>
                    </form>
                </div>
            </li>
{{--            <li class="nav-item nav-settings d-none d-lg-flex">--}}
{{--                <a class="nav-link" href="#">--}}
{{--                    <i class="ti-more"></i>--}}
{{--                </a>--}}
{{--            </li>--}}
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="ti-layout-grid2"></span>
        </button>
    </div>
</nav>
