<aside class="left-sidebar">
    <!-- Sidebar scroll-->
      <div>
          <div class="brand-logo d-flex align-items-center justify-content-center">
              <a href="/general-dashbord" class="text-nowrap logo-img text-wisata" style="font-size: 1.5rem; font-weight:600; ">
                <img src="{{asset('/img/Logo.png')}}" width="180" alt="" />
              </a>
              <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                  <i class="ti ti-x fs-8"></i>
              </div>
          </div>
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
              <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                  <span class="hide-menu">Home</span>
              </li>
              <li class="sidebar-item">
              <a class="sidebar-link" href="/dashbord-user" aria-expanded="false">
                  <span>
                  <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Dashboard</span>
              </a>
              </li>
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Starter</span>
              </li>
              <li class="sidebar-item">
              <a class="sidebar-link" href="/pengaduan" aria-expanded="false">
                  <span>
                  <i class="ti ti-alert-circle"></i>
                  </span>
                  <span class="hide-menu">Pengaduan</span>
              </a>
              </li>
              <li class="sidebar-item">
                  <a class="sidebar-link" href="/respon" aria-expanded="false">
                      <span>
                      <i class="ti ti-cards"></i>
                      </span>
                      <span class="hide-menu">Respon</span>
                  </a>
              </li>
          </nav>
          <!-- End Sidebar navigation -->
      </div>
    <!-- End Sidebar scroll-->
  </aside>
  <!--  Sidebar End -->
  <!--  Main wrapper -->
  <div class="body-wrapper">
    <!--  Header Start -->
    <header class="app-header">
      <nav class="navbar navbar-expand-lg navbar-light">
        <ul class="navbar-nav">
          <li class="nav-item d-block d-xl-none">
            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
              <i class="ti ti-menu-2"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-icon-hover" href="javascript:void(0)">
              <i class="ti ti-bell-ringing"></i>
              <div class="notification bg-primary rounded-circle"></div>
            </a>
          </li>
        </ul>
        <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
          <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
            <li class="nav-item dropdown">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                aria-expanded="false">
                <img src="{{asset('/modernize/src/assets/images/profile/user-1.jpg')}}" alt="" width="35" height="35" class="rounded-circle">
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                <div class="message-body">
                  <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                    <i class="ti ti-user fs-6"></i>
                    <p class="mb-0 fs-3">{{ Auth::user()->name }}</p>
                  </a>
                  {{-- <a href="{{ route('logout') }}" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a> --}}
                  <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
              </a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
             </form>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </header>