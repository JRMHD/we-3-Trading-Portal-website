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
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Trading Strategies & Risk Management</title>
                <style>
                    * {
                        margin: 0;
                        padding: 0;
                        box-sizing: border-box;
                        font-family: 'Arial', sans-serif;
                    }

                    body {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        min-height: 100vh;
                        background-color: #101128;
                        color: #0bfb1b;
                    }

                    .container {
                        max-width: 800px;
                        margin: auto;
                        background-color: #252d40;
                        padding: 20px;
                        border-radius: 20px;
                        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
                        position: relative;
                        border: 4px solid transparent;
                        animation: glowing-border 3s linear infinite, border-move 5s linear infinite;
                    }

                    @keyframes glowing-border {
                        0% {
                            box-shadow: 0 0 15px #0000ff, 0 0 25px #0000ff, 0 0 35px #0000ff;
                        }

                        100% {
                            box-shadow: 0 0 25px #0000ff, 0 0 35px #0000ff, 0 0 45px #0000ff;
                        }
                    }

                    @keyframes border-move {
                        0% {
                            border-image-source: linear-gradient(to right, #0000ff, transparent);
                        }

                        25% {
                            border-image-source: linear-gradient(to bottom, #0000ff, transparent);
                        }

                        50% {
                            border-image-source: linear-gradient(to left, #0000ff, transparent);
                        }

                        75% {
                            border-image-source: linear-gradient(to top, #0000ff, transparent);
                        }

                        100% {
                            border-image-source: linear-gradient(to right, #0000ff, transparent);
                        }
                    }

                    h2 {
                        color: #0000ff;
                    }

                    p {
                        line-height: 1.6;
                    }

                    @media (max-width: 768px) {
                        .container {
                            padding: 15px;
                        }

                        body {
                            padding: 10px;
                        }
                    }
                </style>
            </head>

            <body>
                <div class="container">
                    <h2>Why is Risk Management Important?</h2>
                    <p><strong>Prevents large losses:</strong> By setting limits on how much you can lose on a single
                        trade, you can avoid catastrophic losses that could wipe out your trading capital.</p>
                    <p><strong>Promotes disciplined trading:</strong> It helps you make rational decisions based on
                        analysis rather than emotions.</p>
                    <p><strong>Allows for consistent profitability:</strong> By managing risk effectively, you can
                        maintain a stable trading account and potentially achieve long-term gains.</p>

                    <h2>Key Risk Management Strategies</h2>
                    <p><strong>Position Sizing:</strong> Allocate only a small percentage of your total capital to each
                        trade to minimize exposure.</p>
                    <p><strong>Stop-Loss Orders:</strong> Set predefined exit points to limit potential losses.</p>
                    <p><strong>Risk-Reward Ratio:</strong> Always ensure your potential reward outweighs the risk taken.
                    </p>
                    <p><strong>Diversification:</strong> Spread investments across different assets to reduce overall
                        risk.</p>
                    <p><strong>Emotional Control:</strong> Avoid impulsive trading and stick to a well-defined strategy.
                    </p>

                    <h2>Balancing Potential Gains & Losses</h2>
                    <p>Make sure you balance potential gains with the possibility of losses by implementing strategies
                        to minimize the potential for losses & protect your capital. Set your stop-loss orders and
                        evaluate risk-reward ratios on each trade.</p>
                </div>
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
