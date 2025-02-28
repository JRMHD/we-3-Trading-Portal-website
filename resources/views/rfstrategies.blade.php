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
                <title>Rise and Fall Strategies</title>
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
                        color: #0af822;
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

                    h2,
                    h3 {
                        color: #0000ff;
                        margin-bottom: 10px;
                    }

                    p {
                        line-height: 1.6;
                        text-align: left;
                        margin: 10px 0;
                    }

                    ul {
                        text-align: left;
                        margin: 10px 0 10px 20px;
                        padding: 0;
                    }

                    li {
                        margin-bottom: 6px;
                    }

                    .extra {
                        font-style: italic;
                        color: #555;
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
                    <h2>Rise and Fall Strategies</h2>

                    <h3>Proven and Tested Techniques</h3>
                    <p>Our Rise and Fall strategies are designed to help traders capitalize on market trends using
                        methods that have been proven, tested, and approved by experienced traders. These strategies
                        combine technical analysis, trend confirmation, and robust risk management to improve your
                        trading decisions.</p>

                    <h3>Rise Strategy</h3>
                    <ul>
                        <li><strong>Trend Identification:</strong> Use moving averages, trend lines, and volume analysis
                            to confirm an upward momentum.</li>
                        <li><strong>Entry Timing:</strong> Wait for a pullback or consolidation near support levels
                            before entering a trade.</li>
                        <li><strong>Technical Indicators:</strong> Utilize RSI, MACD, and stochastic indicators to
                            ensure the trend is strong.</li>
                        <li><strong>Risk Management:</strong> Place stop-loss orders just below key support levels to
                            minimize potential losses.</li>
                        <li><strong>Confirmation:</strong> Ensure at least two technical signals are in agreement before
                            executing the trade.</li>
                    </ul>

                    <h3>Fall Strategy</h3>
                    <ul>
                        <li><strong>Trend Identification:</strong> Use similar technical tools (moving averages and
                            trend lines) to detect downward momentum.</li>
                        <li><strong>Entry Timing:</strong> Wait for a brief consolidation or bounce near resistance
                            levels before initiating the trade.</li>
                        <li><strong>Technical Indicators:</strong> Confirm the downtrend with indicators like RSI
                            (oversold conditions) and MACD crossovers.</li>
                        <li><strong>Risk Management:</strong> Place stop-loss orders above key resistance levels to
                            protect your capital.</li>
                        <li><strong>Confirmation:</strong> Verify the downtrend with multiple signals before executing
                            the trade.</li>
                    </ul>

                    <h3>Additional Tips for Success</h3>
                    <ul>
                        <li>Combine technical indicators with market sentiment for more accurate predictions.</li>
                        <li>Practice these strategies on a demo account until you are confident with the signals.</li>
                        <li>Keep a detailed trading journal to review and refine your strategies over time.</li>
                        <li>Stay updated with global market news that could affect the underlying assets.</li>
                        <li>Always use proper risk management techniques to safeguard your trading capital.</li>
                        <li>Be patient and avoid rushing into trades—wait for clear signals and confirmation.</li>
                    </ul>

                    <p class="extra">These strategies have been tested in various market conditions and are proven to
                        assist traders in making more informed decisions when trading Rise and Fall. Always integrate
                        these techniques with your own market analysis for the best results.</p>
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
