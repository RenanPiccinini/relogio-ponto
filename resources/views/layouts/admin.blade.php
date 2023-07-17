<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>Mazzuli</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>


    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/site/img/favicon.ico') }}">>

 @vite([
    'resources/css/app.css',
    'resources/js/app.js',
    'resources/assets/admin/css/bootstrap.min.css',
    'resources/assets/admin/css/icons.min.css',
    'resources/assets/admin/css/app.min.css',
    'resources/assets/admin/libs/jquery/jquery.min.js',
    'resources/assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js',
    'resources/assets/admin/libs/metismenu/metisMenu.min.js',
    'resources/assets/admin/libs/simplebar/simplebar.min.js',
    //'resources/assets/admin/libs/node-waves/waves.min.js',
    'resources/assets/admin/libs/morris.js/morris.min.js',
    'resources/assets/admin/libs/raphael/raphael.min.js',
    'resources/assets/admin/js/pages/dashboard.init.js',
    'resources/assets/admin/js/app.js'
 ])

</head>


<body data-sidebar="dark">

@yield('content')

<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner"></div>
    </div>
</div>

<!-- Begin page -->
<div id="layout-wrapper">

    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            {{-- <img src="{{ asset('assets/admin/images/logo-sm.png') }}" alt="" height="22"> --}}
                            <img class="main__logo--img" src="{{ asset('assets/site/img/logo/logo.png') }}" alt="logo-img">
                        </span>
                        <span class="logo-lg">
                            {{-- <img src="{{ asset('assets/admin/images/logo-dark.png') }}" alt="" height="20"> --}}
                            <img class="main__logo--img" src="{{ asset('assets/site/img/logo/logo.png') }}" alt="logo-img">
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            {{-- <img src="{{ asset('assets/admin/images/logo-sm.png') }}" alt="" height="22"> --}}
                            <img class="main__logo--img" src="{{ asset('assets/site/img/logo/logo.png') }}" alt="logo-img">
                        </span>
                        <span class="logo-lg">
                            {{-- <img src="{{ asset('assets/admin/images/logo-light.png') }}" alt="" height="20"> --}}
                            <img class="main__logo--img" src="{{ asset('assets/site/img/logo/logo.png') }}" alt="logo-img">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-24 header-item" id="vertical-menu-btn">
                    <i class="mdi mdi-menu"></i>
                </button>

                <div class="d-none d-sm-block ms-2">
                    <h4 class="page-title font-size-18">Dashboard Mazzuli</h4>
                </div>

            </div>

            <!-- Search input -->
            <div class="search-wrap" id="search-wrap">
                <div class="search-bar">
                    <input class="search-input form-control" placeholder="Search" />
                    <a href="#" class="close-search toggle-search" data-bs-target="#search-wrap">
                        <i class="mdi mdi-close-circle"></i>
                    </a>
                </div>
            </div>

            <div class="dropdown d-inline-block ms-2">
                <button type="button" class="btn header-item" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ asset('assets/admin/images/users/gustavo.png') }}"
                        alt="Prifile">
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#"><i class="dripicons-user font-size-16 align-middle me-2"></i>
                        Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item"  href="{{ route('logout') }}"><i class="dripicons-exit font-size-16 align-middle me-2"></i>
                        Logout</a>
                </div>
            </div>

        </div>
    </header>

    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">

        <div data-simplebar class="h-100">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title">Utilidades</li>

                    <li>
                        <a href="index.html">
                            <i class="dripicons-device-desktop"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="users.html">
                            <i class="dripicons-user"></i>
                            <span>Users</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow">
                            <i class="dripicons-mail"></i>
                            <span> Email </span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="email-inbox.html">Inbox</a></li>
                            <li><a href="email-read.html">Email Read</a></li>
                            <li><a href="email-compose.html">Email Compose</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="categorias.html" >
                            <i class="dripicons-blog"></i>
                            <span>Categorias</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow">
                            <i class="dripicons-card"></i>
                            <span> Subcategorias</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="contacts-grid.html">Subcategoria 1</a></li>
                            <li><a href="contacts-list.html">Subcategorias 2</a></li>
                            <li><a href="contacts-profile.html">Subcategorias 3</a></li>
                        </ul>
                    </li>

                    <li class="menu-title">Produtos</li>

                    <li>
                        <a href="produto1.html">
                            <i class="dripicons-suitcase"></i>
                            <span>Produto 1</span>
                        </a>
                    </li>

                    <li>
                        <a href="produto2.html">
                            <i class="dripicons-suitcase"></i>
                            <span>Produto 2</span>
                        </a>
                    </li>

                    <li>
                        <a href="produto3.html">
                            <i class="dripicons-suitcase"></i>
                            <span>Produto 3</span>
                        </a>
                    </li>

                </ul>
            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    ©
                    <script>document.write(new Date().getFullYear())</script> Mazzuli
                </div>
            </div>
        </div>
    </footer>

</div>

</body>

</html>
