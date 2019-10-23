<header class="main-header">
<!-- Logo -->
<a href="#" class="logo">
    <!-- mini logo -->
    <b class="logo-mini">
        <span class="light-logo"><img src="{{ asset('images/logo-light.png') }}" alt="logo"></span>
        <span class="dark-logo"><img src="{{ asset('images/logo-dark.png') }}" alt="logo"></span>
    </b>
    <!-- logo-->
    <span class="logo-lg">
        <img src="{{ asset('images/logo-light-text.png') }}" alt="logo" class="light-logo">
        <img src="{{ asset('images/logo-dark-text.png') }}" alt="logo" class="dark-logo">
    </span>
</a>
<!-- Header Navbar -->
<nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="data.html#" class="sidebar-toggle" data-toggle="push-menu" role="button">
    <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
        <!-- Notifications -->
        <li class="dropdown notifications-menu">
        <a href="data.html#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="mdi mdi-bell"></i>
        </a>
        <ul class="dropdown-menu scale-up">
            <li class="header">You have @php echo count(auth()->user()->unreadNotifications) @endphp notifications</li>
            <li>
            <!-- inner menu: contains the actual data -->
            <ul class="menu inner-content-div">
                    @foreach (auth()->user()->unreadNotifications  as $notification)
                        <li>
                            <a href="data.html#">
                                <i class="fa fa-users text-aqua"></i> Patient birthday today: {{ $notification->data['patients_fullname'] }}
                            </a>
                        </li>
                    @endforeach
            </ul>
            </li>
            <li class="footer"><a href="data.html#">View all</a></li>
        </ul>
        </li>

        <!-- User Account-->
        <li class="dropdown user user-menu">
        <a href="data.html#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="../../../images/user5-128x128.jpg" class="user-image rounded-circle" alt="User Image">
        </a>
        <ul class="dropdown-menu scale-up">
            <!-- User image -->
            <li class="user-header">
            <img src="../../../images/user5-128x128.jpg" class="float-left rounded-circle" alt="User Image">

            <p>
                Juliya Brus
                <small class="mb-5">xxx@gmail.com</small>
                <a href="data.html#" class="btn btn-danger btn-sm btn-rounded">View Profile</a>
            </p>
            </li>
            <!-- Menu Body -->
            <li class="user-body">
            <div class="row no-gutters">
                <div class="col-12 text-left">
                <a href="data.html#"><i class="ion ion-person"></i> My Profile</a>
                </div>
                <div class="col-12 text-left">
                <a href="data.html#"><i class="ion ion-email-unread"></i> Inbox</a>
                </div>
                <div class="col-12 text-left">
                <a href="data.html#"><i class="ion ion-settings"></i> Setting</a>
                </div>
            <div role="separator" class="divider col-12"></div>
                <div class="col-12 text-left">
                <a href="data.html#"><i class="ti-settings"></i> Account Setting</a>
                </div>
            <div role="separator" class="divider col-12"></div>
                <div class="col-12 text-left">
                    
                  <a href="{{ route('logout') }}"><i class="fa fa-power-off"></i> Logout</a>
                </div>				
            </div>
            <!-- /.row -->
            </li>
        </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
        <li>
        <a href="data.html#" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></a>
        </li>
    </ul>
    </div>
</nav>
</header>