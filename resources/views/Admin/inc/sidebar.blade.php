  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
    
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{asset('images/gili.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>{{ Auth::user()->name }}</p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
    
          <!-- search form (Optional) -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                  <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                  </button>
                </span>
            </div>
          </form>
          <!-- /.search form -->
    
          <!-- Sidebar Menu -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="/dashboard"><i class="fa fa-link"></i> <span>Dashbaord</span></a></li>
            <li><a href="#"><i class="fa fa-link"></i> <span>Others</span></a></li>

            <li class="header">Sending Message</li>
            <li><a href="{{ route('index') }}"><i class="fa fa-link"></i> <span>Create Message</span></a></li>
            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Adding Numbers</span>
                  <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('formOne.view') }}">Form One</a></li>
                    <li><a href="{{ route('formTwo.view') }}">Form Two</a></li>
                    <li><a href="{{ route('formThree.view') }}">Form Three</a></li>
                    <li><a href="{{ route('formFour.view') }}">Form Four</a></li>
                    <li><a href="{{ route('deleteForm') }}">Delete Form</a></li>
                </ul>
              </li>

            <li class="header">Pages Design</li>
            <li><a href="{{ route('coverimage.view') }}"><i class="fa fa-link"></i> <span>Home Page</span></a></li>
            <li><a href="{{ route('overview.view') }}"><i class="fa fa-link"></i> <span>Overview</span></a></li>

            <li class="treeview">
              <a href="#"><i class="fa fa-link"></i> <span>About</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="{{ route('aboutadmin.view') }}">Boarding</a></li>
                  <li><a href="{{ route('eventadmin.view') }}">Events</a></li>
                  <li><a href="{{ route('tenderadmin.view') }}">Tender</a></li>
                  <li><a href="{{ route('newsalumni.view') }}">Alumni</a></li>
                  <li><a href="{{ route('newsparents.view') }}">Parents</a></li>
              </ul>
            </li>

            <li><a href="{{ route('academicsadmin.view') }}"><i class="fa fa-link"></i> <span>Academics</span></a></li>
            <li><a href="{{ route('faithadmin.view') }}"><i class="fa fa-link"></i> <span>Faith and Services</span></a></li>
            <li><a href="{{ route('co-curricular.view') }}"><i class="fa fa-link"></i> <span>Co-Curriculars</span></a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-link"></i> <span>Administration</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('schboss.view') }}">Admin Pages</a></li>
                <li><a href="{{ route('board.view') }}">Board Members</a></li>
                <li><a href="{{ route('pta.view') }}">P.T.A</a></li>
                <li><a href="{{ route('schbossimg.view') }}">School Heads</a></li>
                <li><a href="{{ route('teachers.view') }}">Teaching Staff</a></li>
                <li><a href="{{ route('workers.view') }}">Non-Teaching Staff</a></li>
              </ul>
            </li>
            <li class="header">Super Admin</li>
            <li><a href="{{ route('superadmin.view') }}"><i class="fa fa-link"></i> <span>Set Up Things</span></a></li>
          </ul>
          <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>