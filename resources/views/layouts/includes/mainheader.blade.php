<header class="main-header">
<!-- Logo -->
<a href="#" class="logo">
    <!-- mini logo -->
    <h6 class="logo-mini">
        {{-- <span class="light-logo"><img src="{{ asset('images/logo-light.png') }}" alt="logo"></span>
        <span class="dark-logo"><img src="{{ asset('images/logo-dark.png') }}" alt="logo"></span> --}}
        <p>IMAKULATEEYECLINIC</p>
    </h6>
    <!-- logo-->
    
    <h6 class="logo-lg">
        {{-- <p>I.C</p> --}}
        {{-- <img src="{{ asset('images/logo-light-text.png') }}" alt="logo" class="light-logo">
        <img src="{{ asset('images/logo-dark-text.png') }}" alt="logo" class="dark-logo"> --}}
    </h6>
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
            @if($notificationCount)
            <ul class="menu inner-content-div">
                    @foreach (auth()->user()->unreadNotifications  as $notification)
                        <li>
                            <a href="data.html#">
                                <i class="fa fa-users text-aqua"></i> Patient birthday today: {{ $notification->data['patients_fullname'] }}
                            </a>
                        </li>
                    @endforeach
            </ul>
            @endif
            </li>
            @if($notificationCount)
                <li class="footer"><a href="{{ route('notification.markasread') }}">Mark as read</a></li>
            @endif
        </ul>
        </li>

        <!-- User Account-->
        <li class="dropdown user user-menu">
        <a href="data.html#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-user-circle"></i>
        </a>
        <ul class="dropdown-menu scale-up">
            <!-- User image -->
            <li class="user-header">
            <img src="../../../images/user5-1.jpg" class="float-left rounded-circle" alt="User Image">
            @if(auth()->check())
                <p>
                    {{ auth()->user()->name }}
                    <small class="mb-5">{{ auth()->user()->email }}</small>
                </p>
             @endif
            </li>
            <!-- Menu Body -->
            <li class="user-body">
            <div class="row no-gutters">
                {{-- <div class="col-12 text-left">
                <a href="data.html#"><i class="ion ion-person"></i> My Profile</a>
                </div> --}}
                
            <div role="separator" class="divider col-12"></div>
                <div class="col-12 text-left">
                <a href="{{ route('changepassword') }}"><i class="ti-settings"></i> Change Password</a>
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