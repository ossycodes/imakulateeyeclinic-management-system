  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
        <!-- sidebar-->
        <section class="sidebar">
          
          <!-- sidebar menu-->
          <ul class="sidebar-menu" data-widget="tree">
            {{-- <li class="user-profile treeview">
              <a href="http://html-templates.multipurposethemes.com/bootstrap-4/admin/minimal-elite-admin/src/pages/tables/index.html">
                <img src="../../../images/user5-128x128.jpg" alt="user">
                <span>Juliya Brus</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="javascript:void()"><i class="fa fa-user mr-5"></i>My Profile </a></li>
                <li><a href="javascript:void()"><i class="fa fa-money mr-5"></i>My Balance</a></li>
                <li><a href="javascript:void()"><i class="fa fa-envelope-open mr-5"></i>Inbox</a></li>
                <li><a href="javascript:void()"><i class="fa fa-cog mr-5"></i>Account Setting</a></li>
                <li><a href="javascript:void()"><i class="fa fa-power-off mr-5"></i>Logout</a></li>
              </ul>
            </li> --}}
            {{-- <li class="header nav-small-cap">NAVIGATION</li> --}}
            <li>
              <a href="../dashboard">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <li class="treeview">
              <a href="data.html#">
                <i class="fa fa-th"></i>
                <span>Patients</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('patients.create') }}"><i class="fa fa-circle-thin"></i>Register</a></li>
                <li><a href="{{ route('patients.index') }}"><i class="fa fa-circle-thin"></i>Registered Patients</a></li>
                {{-- <li><a href="../app/app-ticket.html"><i class="fa fa-circle-thin"></i>Support Ticket</a></li>
                <li><a href="../app/calendar.html"><i class="fa fa-circle-thin"></i>Calendar</a></li>
                <li><a href="../app/profile.html"><i class="fa fa-circle-thin"></i>Profile</a></li>
                <li><a href="../app/userlist-grid.html"><i class="fa fa-circle-thin"></i>Userlist Grid</a></li>
                <li><a href="../app/userlist.html"><i class="fa fa-circle-thin"></i>Userlist</a></li> --}}
              </ul>
            </li>
          </ul>
        </section>
      </aside>