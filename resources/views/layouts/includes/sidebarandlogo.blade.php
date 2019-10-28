  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
        <!-- sidebar-->
        <section class="sidebar">
          
          <!-- sidebar menu-->
          <ul class="sidebar-menu" data-widget="tree">
            <li>
              <a href="{{ route('dashbaord') }}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            {{-- <li>
                <a href="{{ route('profile') }}">
                  <i class="fa fa-user"></i> <span>Profile</span>
                </a>
            </li> --}}
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
                <li><a href="{{ route('celebrants') }}"><i class="fa fa-circle-thin"></i>Celebrants</a></li>
                <li><a href="{{ route('casefile') }}"><i class="fa fa-circle-thin"></i>Case File</a></li>
                <li><a href="{{ route('relatedfiles') }}"><i class="fa fa-circle-thin"></i>Related Files</a></li>
                {{-- <li><a href="../app/app-ticket.html"><i class="fa fa-circle-thin"></i>Support Ticket</a></li>
                <li><a href="../app/userlist-grid.html"><i class="fa fa-circle-thin"></i>Userlist Grid</a></li>
                <li><a href="../app/userlist.html"><i class="fa fa-circle-thin"></i>Userlist</a></li> --}}
              </ul>
            </li>
          </ul>
        </section>
      </aside>