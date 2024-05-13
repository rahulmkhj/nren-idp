<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NREN Eduroam</title>

    <link rel="stylesheet" crossorigin href="{{asset('assets/compiled/css/app.css')}}">
    <link rel="stylesheet" crossorigin href="{{asset('assets/compiled/css/app-dark.css')}}">
    <link rel="stylesheet" crossorigin href="{{asset('assets/compiled/css/iconly.css')}}">
</head>

<body>
<div id="app">
    <div id="main" class="layout-horizontal">
        <header class="mb-5">
            <div class="header-top">
                <div class="container">
                    <div class="logo">
                        <a href="{{url('/')}}">NREN Eduroam</a>
                    </div>
                    <div class="header-top-right">

                        <div class="dropdown">
                            <a href="#" id="topbarUserDropdown" class="user-dropdown d-flex align-items-center dropend dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="text">
                                    <h6 class="user-dropdown-name">Rahul Makhija</h6>
                                    <p class="user-dropdown-status text-sm text-muted">Admin</p>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="topbarUserDropdown">
                                <li><a class="dropdown-item" href="">Change Password</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="">Logout</a></li>
                            </ul>
                        </div>

                        <!-- Burger button responsive -->
                        <a href="#" class="burger-btn d-block d-xl-none">
                            <i class="bi bi-justify fs-3"></i>
                        </a>
                    </div>
                </div>
            </div>
            <nav class="main-navbar">
                <div class="container">
                    <ul>
                        <li class="menu-item">
                            <a href="" class='menu-link'>
                                <span><i class="bi bi-wifi"></i>Active Sessions</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="" class='menu-link'>
                                <span><i class="bi bi-people-fill"></i>User Accounts</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="" class='menu-link'>
                                <span><i class="bi bi-pci-card-network"></i>NAS</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="content-wrapper container">

            <div class="page-heading">
                <h3>Heading</h3>
            </div>
            <div class="page-content">
                <section class="row">

                </section>
            </div>

        </div>

        <footer>
            <div class="container">
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                               target="_blank" href="https://www.linkedin.com/in/rmakhija/">Rahul Makhija</a></p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="{{asset('assets/static/js/components/dark.js')}}"></script>
<script src="{{asset('assets/static/js/pages/horizontal-layout.js')}}"></script>
<script src="{{asset('assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

<script src="{{asset('assets/compiled/js/app.js')}}"></script>
</body>

</html>
