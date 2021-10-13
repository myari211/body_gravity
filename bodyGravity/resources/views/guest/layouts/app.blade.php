<html>
    <head>
        @include('master.css')
        <style>
            .link{
                color: #000000;
                font-weight:400;
            }

            .active{
                color: #89171A;
                font-weight: 600;
                border-bottom: 2px solid #89171A;
            }
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="d-none d-lg-block">
            <nav class="navbar navbar-expand-lg navbar-dark z-depth-0 fixed-top bg-white">
                <div class="container w-100">
                    <div class="row w-100">
                        <div class="col-lg-12 d-flex justify-content-between align-items-center w-100">
                            <a class="navbar-brand" href="#">
                                <img src="{{ asset('image/asset/BG2.png') }}" style="width:250px;">
                            </a>
                            <div>
                                <a class="mr-5 link active" href="/">Home</a>
                                <a class="mr-5 link" href="{{ route('guest.about') }}">About Us</a>
                                <a class="mr-5 link" href="{{ route('guest.program') }}">Program</a>
                                <a class="mr-5 link" href="{{ route('guest.contact') }}">Contact Us</a>
                            </div>
                            <div>
                                <button type="button" class="btn btn-md rounded-pill back-color text-white">
                                    Join Now
                                </button>
                            </div>
                        </div>
                    </div>    
                </div>
            </nav>
        </div>
        <div class="d-block d-lg-none">
            <nav class="navbar navbar-expand-lg navbar-dark white-bg">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('image/asset/BG2.png') }}" style="width:150px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars font-color"></i>
                </button>
                <div class="collapse navbar-collapse" id="basicExampleNav">
                    <div class="container mt-3">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="mr-5 link font-color" href="/" style="font-weight:600">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-color" style="font-weight:600" href="{{ route('guest.about') }}">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-color" style="font-weight:600" href="{{ route('guest.program') }}">Program</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-color" style="font-weight:600" href="{{ route('guest.contact') }}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        @yield('content')

        <footer class="page-footer font-small back-color pt-4 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card rounded-0">
                            <div class="card-body rounded-0">
                                <img src="{{ asset('image/asset/BG2.png') }}" class="w-100">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span style="font-size:18px; font-weight:600">About Us</span>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <span>Our Founder & Coach</span>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-12">
                                        <span>About Us</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span style="font-size:18px; font-weight:600">Program</span>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <span>Body Shaping</span>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-12">
                                        <span>Rehabilitation</span>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-12">
                                        <span>Children</span>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-12">
                                        <span>Senior</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span style="font-weight:600">SIMPRUK TERAS APARTEMENT</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span>Jl. Teuku Nyak Arif</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span>Jakarta Selatan 12220</span>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-12">
                                        <span style="font-weight:600">Contact Us</span>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-12">
                                        <span>
                                            <i class="fas fa-phone"></i> +62 811 877 2283
                                        </span>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-12">
                                        <span>
                                            <i class="fas fa-envelope"></i> admin@body-gravity.com
                                        </span>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-12">
                                        <span>
                                            <i class="fas fa-envelope"></i> bodygravityid@gmail.com
                                        </span>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-12">
                                        <span>
                                            <i class="fab fa-instagram"></i> bodygravityid
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright text-center py-3">
                <span>2021 &copy; Body Gravity | All rights reserved</span>
            </div>
        </footer>
        @include('master.js')
        <script>
            $(document).ready(function () {
                var current_page_URL = location.href;
                $(".link").each(function () {
                    if($(this).attr("href") !== "#") {
                        var target_URL = $(this).prop("href");
                        if(target_URL == current_page_URL) {
                            $(".link").removeClass('active');
                            $(this).addClass('active');
                            return false;
                        }
                    }
                })
            });
        </script>
    </body>
</html>