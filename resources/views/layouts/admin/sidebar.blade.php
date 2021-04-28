<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin/dashboard"><img class="img-fluid" id="SDLogo" src="{!! URL::to('/images/assets/logo.png') !!}"  title="Sneaker District" alt="sneaker-district-logo"/></a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{!! URL::to('images/admin/user2-160x160.jpg') !!}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          {!! Auth::guard('admin')->user()->name !!}
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item {!! Route::currentRouteName() == 'dashboard' ? 'active' : '' !!}">
            <a href="{!! URL::to('admin/dashboard')!!}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item {!! Route::currentRouteName() == 'settings' ? 'active' : '' !!}">
            <a href="{!! URL::to('admin/settings')!!}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Admin Settings</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>