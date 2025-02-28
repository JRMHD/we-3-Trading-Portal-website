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
                <title>Over/Under Strategies & Entries</title>
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

                    h2 {
                        color: #0000ff;
                        margin-bottom: 10px;
                    }

                    h3 {
                        color: #0000ff;
                        margin: 20px 0 10px;
                    }

                    p {
                        line-height: 1.6;
                        margin: 10px 0;
                    }

                    ul {
                        text-align: left;
                        display: inline-block;
                        margin: 10px 0;
                    }

                    hr {
                        margin: 20px 0;
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
                    <h2>Over/Under Strategies & Entries</h2>

                    <h3>Over 0 &amp; 1</h3>
                    <p><strong>Criteria:</strong></p>
                    <ul>
                        <li>Use 1 tick.</li>
                        <li>Green bar should have 10.5% and above.</li>
                        <li>Red bar should have 9% and below.</li>
                    </ul>
                    <p><strong>Entry Point:</strong> Wait for the moving cursor to hit 0 or 1 once or twice before
                        trading Over 0 or 1.</p>

                    <hr>

                    <h3>Over 2</h3>
                    <p><strong>Criteria:</strong></p>
                    <ul>
                        <li>Any digit among 3, 4, 5, 6, 7, 8, or 9 should be at least 10% and above.</li>
                        <li>Use 1 tick or 2 ticks.</li>
                    </ul>
                    <p><strong>Entry Point:</strong> If the last trade ends in Under 2, it triggers a prediction of the
                        next trade ending in Over. Trade Over when the cursor hits 0, 1, or 2.</p>

                    <hr>

                    <h3>Over 3</h3>
                    <p><strong>Criteria:</strong></p>
                    <ul>
                        <li>Use any volatility; avoid jump indices when trading Over 3.</li>
                        <li>Any digit among 4, 5, 6, 7, 8, or 9 should have 11% and above.</li>
                        <li>Use Expert Speed Bot or Dollar Printer Bot from Deriv Hub.</li>
                        <li>Red bar should be less than 9.5%.</li>
                    </ul>
                    <p><strong>Entry Point:</strong> Ensure the cursor hits 0, 1, 2, and 3 (in any order such as 3,2,0,1
                        or 2,3,0,1). Then run your bot when it hits any of 4, 5, 6, 7, 8, or 9.</p>

                    <hr>

                    <h3>Over 4</h3>
                    <p><strong>Criteria:</strong> When analyzing Over contract type prediction (4):</p>
                    <ul>
                        <li>Check if any of these numbers (5, 6, 7, 8, 9) have above 11.5%, especially even numbers (6
                            &amp; 8) when they are at 11.5% and above.</li>
                    </ul>
                    <p><strong>Entry Point:</strong> Wait for the moving cursor to show 4, 3, 2, 1, or 0, and then enter
                        your trade. Ensure the highlighted digits do not decrease in percentage.</p>
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
