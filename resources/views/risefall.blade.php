<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title> - DERIVHUB</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/bt.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&amp;family=Roboto:wght@500;700&amp;display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="../cdn.jsdelivr.net/npm/bootstrap-icons%401.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.html" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.html" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .social-icons {
            font-size: 20px;
            margin: 10px;
        }
    </style>
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->



        <!-- Sidebar Start -->
        @include('sidebar')
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index-2.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><!-- Replace icon with image -->
                        <img src="img/bt.png" style="width: 30px; height: 30px;">
                    </h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">


                    <!-- Telegram Icon -->
                    <a href="https://t.me/derivhub25years" target="_blank">
                        <i class="fab fa-telegram"></i><br>

                        <!-- YouTube Icon -->
                        <a href="https://youtube.com/@derivhubfreebots?si=UxddE2bftWKsBHZr" target="_blank">
                            <i class="fab fa-youtube social-icons"></i>
                        </a><br>

                        <!-- Telegram Icon -->
                        <a href="http://wa.me/254741922367" target="_blank">
                            <i class="fab fa-whatsapp"></i>



                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                    <img class="rounded-circle me-lg-2" src="img/user.jpg" alt=""
                                        style="width: 40px; height: 40px;">
                                    <span class="d-none d-lg-inline-flex">DERIV HUB</span>
                                </a>
                                <div
                                    class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                                    <a href="#" class="dropdown-item">My Profile</a>
                                    <a href="#" class="dropdown-item">Settings</a>
                                    <a href="#" class="dropdown-item">Log Out</a>
                                </div>
                            </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Rise and Fall</title>
                <link rel="stylesheet" href="stylesrisefall.css">
            </head>

            <body>
                <div class="container">
                    <h1 class="title">Rise and Fall</h1>
                    <select id="market-select" class="dropdown">
                        <option value="R_10">Volatility 10 index</option>
                        <option value="1HZ10V">Volatility 10(1s) index</option>
                        <option value="R_25">Volatility 25 index</option>
                        <option value="1HZ25V">Volatility 25(1s) index</option>
                        <option value="R_50">Volatility 50 index</option>
                        <option value="1HZ50V">Volatility 50(1s) index</option>
                        <option value="R_75">Volatility 75 index</option>1
                        <option value="1HZ75V">Volatility 75(1s) index</option>
                        <option value="R_100">Volatility 100 index</option>
                        <option value="1HZ100V">Volatility 100(1s) index</option>
                    </select>
                    <select id="tick-select" class="dropdown">
                        <option value="5">5 Ticks</option>
                        <option value="10">10 Ticks</option>
                        <option value="50">50 Ticks</option>
                        <option value="50">100 Ticks</option>
                        <option value="50">200 Ticks</option>
                        <option value="50">500 Ticks</option>
                        <option value="50">1000 Ticks</option>
                    </select>
                    <div id="tick-display" class="tick-display">Latest Tick: --</div>
                    <div class="chart-container">
                        <div class="bar" id="rise-bar" style="width: 50%;">Rise</div>
                        <div class="bar" id="fall-bar" style="width: 50%;">Fall</div>
                    </div>
                    <div id="bar-container">
                        <div id="rise-bar" style="width: 50px; height: 0%; background-color: grey;"></div>
                        <div id="fall-bar" style="width: 50px; height: 0%; background-color: grey;"></div>
                    </div>

                    <table class="prediction-table">
                        <thead>
                            <tr>
                                <th colspan="2">Rise/Fall Predictions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Rise %:</td>
                                <td id="rise-percentage">0%</td>
                            </tr>
                            <tr>
                                <td>Fall %:</td>
                                <td id="fall-percentage">0%</td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Candlestick Formation Container -->
                    <div class="candlestick-container">
                        <h2 class="candlestick-title">Candlestick Formation</h2>
                        <select id="interval-select" class="dropdown">
                            <option value="60">1 Minute</option>
                            <option value="120">2 Minutes</option>
                            <option value="180">3 Minutes</option>
                            <option value="300">5 Minutes</option>
                            <option value="600">10 Minutes</option>
                            <option value="780">13 Minutes</option>
                            <option value="900">15 Minutes</option>
                            <option value="3600">1 Hour</option>
                            <option value="7200">2 Hours</option>
                            <option value="86400">24 Hours</option>
                        </select>
                        <table class="candlestick-table">
                            <thead>
                                <tr>
                                    <th>Entry Point</th>
                                    <th>Closing Point</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody id="candlestick-body">
                                <tr>
                                    <td>--</td>
                                    <td>--</td>
                                    <td>No candlestick forming</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <script src="scriptrisefall.js"></script>
            </body>

            </html>


            <!-- Footer Start -->
            @include('footer')
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="../code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="../cdn.jsdelivr.net/npm/bootstrap%405.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.html"></script>
    <script src="lib/easing/easing.min.html"></script>
    <script src="lib/waypoints/waypoints.min.html"></script>
    <script src="lib/owlcarousel/owl.carousel.min.html"></script>
    <script src="lib/tempusdominus/js/moment.min.html"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.html"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.html"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
