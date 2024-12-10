<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Your App Name')</title>
    
    <!-- Favicon links -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon/favicon-16x16.png') }}">
    
    <!-- Vendors styles-->
    <link rel="stylesheet" href="{{ asset('node_modules/simplebar/dist/simplebar.css') }}">
    <link rel="stylesheet" href="{{ asset('sass/vendors/simplebar.scss') }}">
    <link rel="stylesheet" href="{{ asset('path/to/bootstrap.min.css') }}">
    
    <!-- Main styles for this application-->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
    <!-- Additional styles -->
    <link href="{{ asset('css/examples.css') }}" rel="stylesheet">
    
    <!-- Inline Styles -->
    <style>
        /* Your custom styles */
        table {
        width: 100%; /* Occupy full width */
        border-collapse: collapse; /* Merge cell borders */
        margin: 15px auto; /* Center the table and add spacing */
        font-family: Tahoma, sans-serif;
        font-size: 12px; /* Slightly larger font size */
    }
    th, td {
        border: 1px solid #ddd; /* Consistent border style */
        padding: 10px; /* Add padding for larger cells */
        text-align: center; /* Align content to center */
    } 
    th {
        background-color: #f5f5f5; /* Light grey background for headers */
        font-weight: bold; /* Emphasize header text */
    }
    /* Table Container */
    .table-container {
        width: 95%; /* Increase overall container size */
        margin: 20px auto;
        padding: 15px;
        border: 1px solid #ddd;
        background-color: #f9f9f9;
        border-radius: 8px; /* Rounded edges */
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); /* Slight shadow for elegance */
    }

    .scrollable-table {
        max-height: 500px; /* Set the desired height */
        overflow-y: auto;  /* Enable vertical scrolling */
    }

    .img-svg {
      
    }
    </style>

    <!-- Vendors JS -->
    <script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</head>
<body>
  @if(Route::currentRouteName() !== 'login')
    <div class="sidebar sidebar-dark sidebar-fixed border-end" id="sidebar">
      <div class="sidebar-header border-bottom">
        <div class="sidebar-brand">
          <svg class="sidebar-brand-full" width="88" height="32" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui.svg#full"></use>
          </svg>
          <svg class="sidebar-brand-narrow" width="32" height="32" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui.svg#signet"></use>
          </svg>
        </div>
        <button class="btn-close d-lg-none" type="button" data-coreui-dismiss="offcanvas" data-coreui-theme="dark" aria-label="Close" onclick="coreui.Sidebar.getInstance(document.querySelector(&quot;#sidebar&quot;)).toggle()"></button>
      </div>
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
        <li class="nav-item img-svg"><a class="nav-link" href="{{ route('home') }}">
            <img src="resources/assets/icons/menu.svg" alt="Bell Icon">
            Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>
        <li class="nav-title">Choose</li>
        <li class="nav-item img-svg"><a class="nav-link" href="colors">
            <img src="resources/assets/icons/menu.svg" alt="Bell Icon"> Merge</a></li>
        <li class="nav-item img-svg"><a class="nav-link" href="typography.html">
            <img src="resources/assets/icons/menu.svg" alt="Bell Icon"> Incoming</a></li>
        <li class="nav-item img-svg"><a class="nav-link" href="typography.html">
            <img src="resources/assets/icons/menu.svg" alt="Bell Icon"> Outgoing</a></li>
      </ul>
      <div class="sidebar-footer border-top d-none d-md-flex">     
        <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
      </div>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100">
      <header class="header header-sticky p-0 mb-4">
        <div class="container-fluid border-bottom px-4">
          <button class="header-toggler" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()" style="margin-inline-start: -14px;">
            <img src="resources/assets/icons/menu.svg" alt="menu Icon">
          </button>
          <ul class="header-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#">
            <img src="resources/assets/icons/bell.svg" alt="Bell Icon">
            </a></li>
          </ul>
          <ul class="header-nav">
            <li class="nav-item py-1">
              <div class="vr h-100 mx-2 text-body text-opacity-75"></div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link py-0 pe-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-md"><img class="avatar-img" src="resources/assets/img/avatars/8.jpg" alt="user@email.com"></div></a>
              <div class="dropdown-menu dropdown-menu-end pt-0">
                <div class="dropdown-header bg-body-tertiary text-body-secondary fw-semibold rounded-top mb-2">Account</div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-bell"></use>
                  </svg> Updates<span class="badge badge-sm bg-info ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-envelope-open"></use>
                  </svg> Messages<span class="badge badge-sm bg-success ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-task"></use>
                  </svg> Tasks<span class="badge badge-sm bg-danger ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-comment-square"></use>
                  </svg> Comments<span class="badge badge-sm bg-warning ms-2">42</span></a>
                <div class="dropdown-header bg-body-tertiary text-body-secondary fw-semibold my-2">
                  <div class="fw-semibold">Settings</div>
                </div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-user"></use>
                  </svg> Profile</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-settings"></use>
                  </svg> Settings</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-credit-card"></use>
                  </svg> Payments<span class="badge badge-sm bg-secondary ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-file"></use>
                  </svg> Projects<span class="badge badge-sm bg-primary ms-2">42</span></a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-lock-locked"></use>
                  </svg> Lock Account</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                  <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-account-logout"></use>
                  </svg> Logout</a>
                 
                 
              </div>
            </li>
          </ul>
        </div>
        <div class="container-fluid px-4">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a>
              </li>
              <li class="breadcrumb-item active"><span>Dashboard</span>
              </li>
            </ol>
          </nav>
        </div>
      </header>
      <main class="col-md-12">
        @yield('content')
            <!-- Table Container -->
            <div class="table-container mt-4">
                Tablee
                @yield('table')
            </div>
      </main>
        <footer class="footer px-4">
            <!-- Footer Content -->
            <div>
                All rights reserved.
            </div>
            <div class="ms-auto">
                2024</a>
            </div>
        </footer>
        @endif
    <!-- CoreUI and Vendor JS-->
    <script src="{{ asset('node_modules/@coreui/coreui/dist/js/coreui.bundle.min.js') }}"></script>
    <script src="{{ asset('node_modules/@coreui/icons/js/svgxuse.js') }}"></script>
    <script src="{{ asset('node_modules/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('node_modules/chart.js/dist/chart.umd.js') }}"></script>
    <script src="{{ asset('node_modules/@coreui/chartjs/dist/js/coreui-chartjs.js') }}"></script>
    <script src="{{ asset('node_modules/@coreui/utils/dist/umd/index.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    
    <!-- Inline Scripts -->
    <script>
        const header = document.querySelector('header.header');
        document.addEventListener('scroll', () => {
            if (header) {
                header.classList.toggle('shadow-sm', document.documentElement.scrollTop > 0);
            }
        });
    </script>
</body>
</html>
