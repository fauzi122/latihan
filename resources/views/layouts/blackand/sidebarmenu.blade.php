<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="" class="brand-link">
    {{--  <img src="{{ asset('blackend/img_sk/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">  --}}

    {{--  <span class="brand-text font-weight-light">SI-AGEN 126</span>  --}}
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        @if (Auth::user()->profile_photo_path!=null)
        <img src="{{ Storage::url('public/staff/'.Auth::user()->profile_photo_path.'') }}" class="img-thumbnail" alt="{{ Auth::user()->name }}"/>

        @else
        <img src="{{ asset('blackend/dist/img/avatar5.png')}}" class="img-circle elevation-2" alt="User Image">

        @endif

      </div>
      <div class="info">
        <a href="/profil" class="d-block">{{ Auth::user()->name }}</a>
      </div>
    </div>



    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

        <li class="nav-item">
          <a href="{{ route('dashboard') }}" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Beranda
              <span class="right badge badge-danger"></span>
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('user') }}" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Data User
              <span class="right badge badge-danger"></span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('prasarana') }}" class="nav-link">
            <i class="nav-icon fas fa-folder-open"></i>
            <p>
               Sarana Prasarana
              <span class="right badge badge-danger"></span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('books') }}" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Data Buku
              <span class="right badge badge-danger"></span>
            </p>
          </a>
        </li>
     



      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
