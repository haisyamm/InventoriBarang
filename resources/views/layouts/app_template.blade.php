<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dashboard - Inventori</title>
    <!-- CSS files -->
    <link href="{{ asset('assets/dist/css/tabler.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/dist/css/tabler-flags.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/dist/css/tabler-payments.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/dist/css/tabler-vendors.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/dist/css/demo.min.css') }}" rel="stylesheet" />
    <!-- Pus Dist -->
    <link href="{{ asset('assets/pus_dist/css/style.css') }}" rel="stylesheet" />
    <!-- Toast -->
    <link rel="stylesheet" href="{{ asset('assets/pus_dist/lib/jquery-toast-plugin/jquery.toast.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/pus_dist/lib/sweetalert/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    <!-- ....... -->
</head>

<body class="layout-fluid theme-light">
    <div class="page">
        @if(!isset($asside))
        <aside class="navbar navbar-vertical navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <h1 class="navbar-brand navbar-brand-autodark">
                    <a href=".">
                        <h2 class="fw-bold">Asset ALFA</h2>
                    </a>
                </h1>
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="navbar-nav pt-lg-3">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/file-text -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-desktop-analytics" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <rect x="3" y="4" width="18" height="12" rx="1"></rect>
                                        <path d="M7 20h10"></path>
                                        <path d="M9 16v4"></path>
                                        <path d="M15 16v4"></path>
                                        <path d="M9 12v-4"></path>
                                        <path d="M12 12v-1"></path>
                                        <path d="M15 12v-2"></path>
                                        <path d="M12 12v-1"></path>
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Dashboard
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('master.my_assets') }}">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/file-text -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="12" cy="12" r="9"></circle>
                                        <circle cx="12" cy="10" r="3"></circle>
                                        <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    My Assets
                                </span>
                            </a>
                        </li>
                        @if(Auth::user()->role_code != 3)
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#navbar-layout" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="true">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/file-text -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-text" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                                        <line x1="9" y1="9" x2="10" y2="9"></line>
                                        <line x1="9" y1="13" x2="15" y2="13"></line>
                                        <line x1="9" y1="17" x2="15" y2="17"></line>
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Assets Management
                                </span>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('master.assets') }}">
                                    All
                                </a>
                                <a class="dropdown-item" href="{{ route('assets_management.release') }}">
                                    Waiting Approval
                                </a>
                                <a class="dropdown-item" href="{{ route('assets_management.release') }}">
                                    Accept
                                </a>
                                <a class="dropdown-item" href="{{ route('assets_management.release') }}">
                                    Reject
                                </a>
                            </div>
                        </li>
                        @endif
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#navbar-layout" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="true">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-3d" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                                        <path d="M12 13.5l4 -1.5"></path>
                                        <path d="M8 11.846l4 1.654v4.5l4 -1.846v-4.308l-4 -1.846z"></path>
                                        <path d="M8 12v4.2l4 1.8"></path>
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Maintenance
                                </span>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('maintenanceperiod') }}">
                                    Period
                                </a>
                                <a class="dropdown-item" href="{{ route('master.regional') }}">
                                    Repair & Replacement
                                </a>
                                <a class="dropdown-item" href="{{ route('master.vendor') }}">
                                    New Store
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#navbar-layout" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="true">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/file-text -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-text" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                                        <line x1="9" y1="9" x2="10" y2="9"></line>
                                        <line x1="9" y1="13" x2="15" y2="13"></line>
                                        <line x1="9" y1="17" x2="15" y2="17"></line>
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Report
                                </span>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="./layout-horizontal.html">
                                    Inventori By Outlet
                                </a>
                                <a class="dropdown-item" href="./layout-boxed.html">
                                    Inventori By Regional
                                </a>
                                <a class="dropdown-item" href="./layout-boxed.html">
                                    Inventori Check-In & Out
                                </a>
                                <a class="dropdown-item" href="./layout-boxed.html">
                                    Inventori Order & Release
                                </a>
                            </div>
                        </li>
                        @if(Auth::user()->role_code == 1)
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Setup
                                </span>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('master.outlet') }}">
                                    Store
                                </a>
                                <a class="dropdown-item" href="{{ route('master.regional') }}">
                                    Regional
                                </a>
                                <a class="dropdown-item" href="{{ route('master.vendor') }}">
                                    Company
                                </a>
                                <a class="dropdown-item" href="{{ route('master.vendor') }}">
                                    Department
                                </a>
                                <a class="dropdown-item" href="{{ route('master.vendor') }}">
                                    Vendor
                                </a>
                            </div>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/file-text -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-recycle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 17l-2 2l2 2m-2 -2h9a2 2 0 0 0 1.75 -2.75l-.55 -1"></path>
                                        <path d="M12 17l-2 2l2 2m-2 -2h9a2 2 0 0 0 1.75 -2.75l-.55 -1" transform="rotate(120 12 13)"></path>
                                        <path d="M12 17l-2 2l2 2m-2 -2h9a2 2 0 0 0 1.75 -2.75l-.55 -1" transform="rotate(240 12 13)"></path>
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Trash
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
        @endif
        <header class="navbar navbar-expand-md navbar-light d-none d-lg-flex d-print-none">
            <div class="container-xl">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-nav flex-row order-md-last">
                    <div class="nav-item px-4">
                        <a href="{{ route('master.assets.create') }}" class="btn btn-dark">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="9"></circle>
                                    <line x1="9" y1="12" x2="15" y2="12"></line>
                                    <line x1="12" y1="9" x2="12" y2="15"></line>
                                </svg>
                            </span>
                            Add Assets
                        </a>
                    </div>
                    <div class="d-none d-md-flex">
                        <div class="nav-item dropdown d-none d-md-flex me-3">
                            <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                                <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"></path>
                                    <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>
                                </svg>
                                <span class="badge bg-red"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Last updates</h3>
                                    </div>
                                    <div class="list-group list-group-flush list-group-hoverable">
                                        <div class="list-group-item">
                                            <div class="row align-items-center">
                                                <div class="col-auto"><span class="status-dot status-dot-animated bg-red d-block"></span></div>
                                                <div class="col text-truncate">
                                                    <a href="#" class="text-body d-block">Notification</a>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="list-group-item-actions">
                                                        <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                            <span class="avatar avatar-sm">{{ substr(Auth::user()->name, 0, 2) }}</span>
                            <div class="d-none d-xl-block ps-2">
                                <div>{{ Auth::user()->name }}</div>
                                <div class="mt-1 small text-muted">Hello Sir</div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <a href="#" class="dropdown-item">Set status</a>
                            <a href="#" class="dropdown-item">Profile &amp; account</a>
                            <a href="#" class="dropdown-item">Feedback</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item" onclick="logout_app()">Logout</a>
                        </div>
                    </div>
                </div>
                <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first">
                    @if(isset($back))
                    <a href="{{ $back_url }}" class="text-dark strong h3 text-decoration-none">
                        <span class="me-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <line x1="5" y1="12" x2="9" y2="16"></line>
                                <line x1="5" y1="12" x2="9" y2="8"></line>
                            </svg>
                        </span>
                        {{ $back }}
                    </a>
                    @endif
                </div>
            </div>
        </header>
        <div class="page-wrapper">
            <div class="page-body">
                <!-- <div class="container-xl"> -->
                @yield('content')
                <!-- </div> -->
            </div>
            <footer class="footer footer-transparent d-print-none bg-white">
                <div class="container-xl">
                    <div class="row text-center align-items-center flex-row-reverse">
                        <div class="col-lg-auto ms-lg-auto">
                            <ul class="list-inline list-inline-dots mb-0">
                                <li class="list-inline-item"><a href="./docs/index.html" class="link-secondary">Documentation</a></li>
                                <li class="list-inline-item"><a href="./license.html" class="link-secondary">License</a></li>
                                <li class="list-inline-item"><a href="https://github.com/tabler/tabler" target="_blank" class="link-secondary" rel="noopener">Source code</a></li>
                                <li class="list-inline-item">
                                    <a href="https://github.com/sponsors/codecalm" target="_blank" class="link-secondary" rel="noopener">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink icon-filled icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                        </svg>
                                        Sponsor
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                            <ul class="list-inline list-inline-dots mb-0">
                                <li class="list-inline-item">
                                    Copyright &copy; 2022
                                    <a href="." class="link-secondary">Inventory</a>.
                                    All rights reserved.
                                </li>
                                <li class="list-inline-item">
                                    <a href="./changelog.html" class="link-secondary" rel="noopener">
                                        v1.0.0
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <x-modal.logout />
    <!-- Libs JS -->
    <script src="{{ asset('assets/dist/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/dist/libs/jsvectormap/dist/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/dist/libs/jsvectormap/dist/maps/world.js') }}"></script>
    <script src="{{ asset('assets/dist/libs/jsvectormap/dist/maps/world-merc.js') }}"></script>
    <!-- Tabler Core -->
    <script src="{{ asset('assets/dist/js/tabler.min.js') }}"></script>
    <script src="{{ asset('assets/dist/js/demo.min.js') }}"></script>
    <!-- Jquery -->
    <script src="{{ asset('assets/pus_dist/lib/jquery/jquery.min.js') }}"></script>
    <!-- Toast and sweetalert -->
    <script src="{{ asset('assets/pus_dist/lib/jquery-toast-plugin/jquery.toast.min.js') }}"></script>
    <script src="{{ asset('assets/pus_dist/lib/sweetalert/sweetalert2/sweetalert2.min.js') }}"></script>
    <!-- Custome Js -->
    <script src="{{ asset('assets/pus_dist/js/script.js') }}"></script>
    <!-- JS -->
    <script>
        let url = "<?= url('') ?>";
        let token = "<?= Illuminate\Support\Facades\Session::token() ?>";
        let auth_user = <?= json_encode(Illuminate\Support\Facades\Auth::user()) ?>;
    </script>
    @stack('script')
</body>

</html>