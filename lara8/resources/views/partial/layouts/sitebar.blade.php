<!-- Brand Logo -->
<a href="{{asset('template')}}/index3.html" class="brand-link">
    <img src="{{asset('template')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('template')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{Auth::user()->profile->nama_lengkap}}</a>
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
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
             <li class="nav-item has-treeview">
              <a href="" class="nav-link ">
                <i class="nav-icon far fa-plus-square"></i>
                <p>
                  Tugas 3 templating
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                
                <li class="nav-item">
                  <a href="/table-data" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Table</p>
                  </a>
                </li>
               
              </ul>
            </li>

        <li class="nav-item has-treeview">
          <a href="" class="nav-link ">
            <i class="nav-icon far fa-plus-square"></i>
            <p>
              Tugas CRUD 
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            
           
            <li class="nav-item">
              <a href={{"/layout/post/create"}} class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>Tambah Data</p>
              </a>
            </li>
            <li class="nav-item">
              <a href={{"/layout/post/"}} class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>Tampil Tabel</p>
              </a>
            </li>
            
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>