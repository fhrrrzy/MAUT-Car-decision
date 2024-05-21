<div class="app-menu">

    <!-- Brand Logo -->
    <div class="logo-box">
        <!-- Brand Logo Light -->
        <a href="/" class="logo-light">
            <h1>CDA</h1>

            {{-- <img src="{{ asset('assets/images/logo-light.png') }}" alt="logo" class="logo-lg"> --}}
            {{-- <img src="{{ asset('assets/images/logo-sm.png') }}" alt="small logo" class="logo-sm"> --}}
        </a>

        <!-- Brand Logo Dark -->
        <a href="/" class="logo-dark">
            <h1>CDA</h1>

            {{-- <img src="{{ asset('assets/images/logo-dark.png') }}" alt="dark logo" class="logo-lg"> --}}
            {{-- <img src="{{ asset('assets/images/logo-sm.png') }}" alt="small logo" class="logo-sm"> --}}
        </a>
    </div>

    <!-- menu-left -->
    <div class="scrollbar">

        <!-- User box -->
        {{-- <div class="user-box text-center">
            <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);" class="dropdown-toggle h5 mb-1 d-block" data-bs-toggle="dropdown">Geneva Kennedy</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user me-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings me-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock me-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out me-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>
            <p class="text-muted mb-0">Admin Head</p>
        </div> --}}

        <!--- Menu -->
        <ul class="menu">


            <li class="menu-title">Dashboard</li>
            <li class="menu-item">
                <a href="{{ url('dashboard/dashboard') }}" class="menu-link">
                    <span class="menu-icon"><i data-feather="monitor"></i></span>
                    <span class="menu-text"> Dashboard </span>
                </li>
                </a>
            
            <li class="menu-title">Master Data</li>
            <li class="menu-item">
                <a href="{{ url('dashboard/cars') }}" class="menu-link">
                    <span class="menu-icon"><i data-feather="truck"></i></span>
                    <span class="menu-text"> Mobil </span>
                </a>
            </li>

        </ul>
        <!--- End Menu -->
        <div class="clearfix"></div>
    </div>
</div>