<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">
        <meta name="author" content="Buba">
        <meta name="theme-color" content="black">
        <meta name="description" content="Buba Financial Dashboard">

        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
        
        <!-- Font & Icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

        <!-- Animation -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/animate.min.css') }}">
        
        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/pay-dashboard.css') }}">

        <!-- JS -->
        <script src="{{ asset('/js/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ asset('/js/popper.min.js') }}"></script>
        <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
        <!--  Notifications Plugin    -->
        <script src="{{ asset('/js/bootstrap-notify.js') }}"></script>
        <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{ asset('/js/pay-dashboard.min.js') }}"></script>
        <!-- Animation -->
        <script src="{{ asset('/js/TweenMax.min2.js') }}"></script>
        <script src="{{ asset('/js/wow.min.js') }}"></script>

        <script>
            new WOW().init();
        </script>
    </head>
    <body>
        <div class="wrapper ">
            <div class="sidebar" style="margin-top: 63px;" data-color="white" data-active-color="danger">
                <div class="sidebar-wrapper">
                    <ul class="nav" id="accordion">
                        <li>
                            <a href="/insight">
                                <i class="fas fa-chart-line"></i>
                                <p>Insight</p>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse-asset2">
                                <i class="fas fa-receipt"></i>
                                <p>Investment</p>
                            </a>
                            <div id="collapse-asset2" class="panel-collapse collapse in">
                                <a href="/mtr/index">
                                    <div class="inner-menu">
                                        <p>Mandiri Tabungan Rencana</p>
                                    </div>
                                </a>
                                <a href="/cryptos/index">
                                    <div class="inner-menu">
                                        <p>Ethereum</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse-asset">
                                <i class="fas fa-wallet"></i>
                                <p>Assets</p>
                            </a>
                            <div id="collapse-asset" class="panel-collapse collapse in">
                                <a href="/cashes/index">
                                    <div class="inner-menu">
                                        <p>Cash</p>
                                    </div>
                                </a>
                                <a href="/jenius/index">
                                    <div class="inner-menu">
                                        <p>Jenius Reguler</p>
                                    </div>
                                </a>
                                <a href="/flexi/index">
                                    <div class="inner-menu">
                                        <p>Jenius - Flexi Server</p>
                                    </div>
                                </a>
                                <a href="/mandiri/index">
                                    <div class="inner-menu">
                                        <p>Mandiri</p>
                                    </div>
                                </a>
                                <a href="/ovo/index">
                                    <div class="inner-menu">
                                        <p>OVO</p>
                                    </div>
                                </a>
                                <a href="/ovopoint/index">
                                    <div class="inner-menu">
                                        <p>OVO Points</p>
                                    </div>
                                </a>
                                <a href="/linkaja/index">
                                    <div class="inner-menu">
                                        <p>LinkAja</p>
                                    </div>
                                </a>
                                <a href="/gopay/index">
                                    <div class="inner-menu">
                                        <p>Gopay</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <a href="/debts">
                                <i class="fas fa-money-check-alt"></i>
                                <p>Debt</p>
                            </a>
                        </li>
                        <li>
                            <a href="https://min-api.cryptocompare.com/data/pricemulti?fsyms=ETH&tsyms=USD&api_key=3344741df194be4ca00cd66fa9736c06f070b1fc53e38c5f0088a40a0f311b2f">
                                <i class="fas fa-receipt"></i>
                                <p>Financial Plan</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="main-panel">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent" style="position: fixed; background-color: #fff !important; opacity: .9;">
                    <div class="container-fluid">
                        <div class="navbar-wrapper">
                            <div class="navbar-toggle">
                                <button type="button" class="navbar-toggler">
                                    <span class="navbar-toggler-bar bar1"></span>
                                    <span class="navbar-toggler-bar bar2"></span>
                                    <span class="navbar-toggler-bar bar3"></span>
                                </button>
                            </div>
                            <a class="navbar-brand">Buba Financial Management Tools</a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navigation">
                            <ul class="navbar-nav">

                                <!-- Notifications Menu -->
                                <li class="nav-item btn-rotate dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="far fa-bell"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="#">Notification #3</a>
                                        <a class="dropdown-item" href="#">Notification #2</a>
                                        <a class="dropdown-item" href="#">Notification #1</a>
                                    </div>
                                </li>
                                <!-- End of Notifications Menu -->

                                <!-- User Menu -->
                                <li class="nav-item btn-rotate dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="far fa-user"></i> {{Session::get('name')}} 
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="/user">Show Profile</a>
                                        <a class="dropdown-item" href="/">Log Out</a>
                                    </div>
                                </li>
                                <!-- End of User Menu -->
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End of Navbar -->

                @yield('content')

                <!-- Footer/Credits Section -->
                <footer class="footer footer-black  footer-white ">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="credits ml-auto">
                                <span class="copyright">©
                                    <script>
                                      document.write(new Date().getFullYear())
                                    </script> Buba Financial Management Tools
                                </span>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer/Credits Section -->
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}" type="text/js"></script>
    </body>
</html>