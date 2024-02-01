<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
<<<<<<< HEAD
=======
    <!-- Brand Logo -->
    {{-- <a href="index3.html" class="brand-link">
        <img src="{{ asset('addmin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a> --}}
>>>>>>> 8b1b25cc4006a8c21156f283a99032982045a288

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if (Auth::check())
                    <img src="{{ Auth::user()->photos ? Storage::url(Auth::user()->photos) : asset('default.png') }}"
                        class="lazyload" width="150" alt="image">
                @endif
            </div>
            <div class="info">
<<<<<<< HEAD
                <a href="#" class="d-block" style="text-decoration: none;">Alexander Pierce</a>
=======
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
>>>>>>> 8b1b25cc4006a8c21156f283a99032982045a288
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
<<<<<<< HEAD
               <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('member.index')}}" class="nav-link">
                            <i class="fas fa-users nav-icon"></i>
                            <p>Member</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('personal-trainer-index')}}" class="nav-link">
                            <i class="fas fa-user nav-icon"></i>
                            <p>Personal Trainer</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('daftarPaketMember')}}" class="nav-link">
                            <i class="fas fa-list nav-icon"></i>
                            <p>Paket Member</p>
                        </a>
                    </li>
                </ul>
            </li>
            
=======
                <li class="nav-item menu-open">
                    {{-- <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a> --}}
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        @if (Auth::user()->role == 'ADMIN' || Auth::user()->role == 'CS')
                            <li class="nav-item">
                                <a href="{{ route('member.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Members</p>
                                </a>
                            </li>
                        @endif
                        @if (Auth::user()->role == 'ADMIN' || Auth::user()->role == 'CS')
                            <li class="nav-item">
                                <a href="{{ route('personal-trainer-index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Personal Trainer</p>
                                </a>
                            </li>
                        @endif
                        @if (Auth::user()->role == 'ADMIN' || Auth::user()->role == 'CS')
                            <li class="nav-item">
                                <a href="{{ route('customer-service-index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Customer Service</p>
                                </a>
                            </li>
                        @endif
                        @if (Auth::user()->role == 'ADMIN' || Auth::user()->role == 'CS')
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Package Transactions</p>
                                </a>
                            </li>
                        @endif

                        @if (Auth::user()->role == 'MEMBER')
                            <li class="nav-item">
                                <a href="{{ route('my-package') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>My Package</p>
                                </a>
                            </li>
                        @endif
                    </ul>
                </li>
>>>>>>> 8b1b25cc4006a8c21156f283a99032982045a288
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

