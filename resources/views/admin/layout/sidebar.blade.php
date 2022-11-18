<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ asset('asset/admin') }}/index3.html" class="brand-link">
    <img src="{{ asset('asset/admin') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
      class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('asset/admin') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
          alt="User Image">
      </div>
      <div class="info">
        <a href="{{ asset('asset/admin') }}/#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class -->
        <li class="nav-item ">
          <a href="{{ route('admin.index') }}" class="nav-link {{ ($title == 'User') ? 'active' : ''}}">
            <i class="nav-icon fas fa-user-lock"></i>
            <p>Danh sách người dùng</p>
          </a>
          
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.postlist') }}" class="nav-link {{ ($title == 'Post') ? 'active' : ''}}">
            
            <i class="nav-icon fa fa-list-alt" aria-hidden="true"></i>
            <p>Bài viết</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.statistical') }}" class="nav-link {{ ($title == 'Statistical') ? 'active' : ''}}">
            
            <i class="nav-icon fas fa-chart-pie mr-1"></i>
            <p>Thống kê</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.profileadmin') }}" class="nav-link {{ ($title == 'Setting') ? 'active' : ''}}">
            
            <i class="nav-icon fa fa-cog" aria-hidden="true"></i>
            <p>Cài đặt</p>
          </a>
        </li>
        
        <li class="nav-header"></li>
        <li class="nav-header"></li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>