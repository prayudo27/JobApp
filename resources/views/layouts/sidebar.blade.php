<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            {{--
            <div class="pull-left image">
                <img src="{{asset('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
            </div> --}}
        </div>
        <!-- search form -->
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

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MY APPLICATION</li>
            <li class="treeview">
                <a href="{{route('statusCV',$currentUser->id)}}">
                <i class="fa fa-book"></i><span>Application Status</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
            </li>

            <li class="header">MY RESUME</li>
            <li class="treeview">
                <a href="{{route('userIndex',$currentUser->id)}}">
            <i class="fa fa-user"></i><span>Profil</span>
            </a>
            </li>
            <li class="treeview">
                <a href="#">
            <i class="fa fa-graduation-cap">
            </i><span>Education</span>
        </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>organizational experience</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-briefcase">
                        </i><span>work experience</span>
                    </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-wrench"></i>
                    <span>basic skills</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-language">
                        </i>
                        <span>language skills</span>
                    </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>