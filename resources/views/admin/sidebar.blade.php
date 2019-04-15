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
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="active treeview menu-open">
        <a href="">
                <i class="fa fa-dashboard"></i><span>Dasboard</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
        <ul class="treeview-menu">
          <li><a href="{{url('adminIndex')}}"><i class="fa fa-circle-o"></i>Index</a></li>
          <li><a href="{{url('accept')}}"><i class="fa fa-circle-o"></i>Accept</a></li>
          <li><a href="{{url('reject')}}"><i class="fa fa-circle-o"></i>Reject</a></li>
        </ul>
      </li>
      {{--
      <li class="treeview">
        <a href="#">
                <i class="fa fa-user"></i><span>User Setting</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
      </li>
      <li class="treeview">
        <a href="#">
                <i class="fa fa-book"></i><span>xxxxx</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
      </li> --}}


  </section>
  <!-- /.sidebar -->
</aside>