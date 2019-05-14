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
            <div class="main-login-panel">
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
                            <form>
                                <div class="input-group no-border">
                                    <input type="text" value="" class="form-control" placeholder="Search...">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="fas fa-search"></i>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <ul class="navbar-nav">
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