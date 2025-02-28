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
                <title>Admin Dashboard</title>
                <style>
                    * {
                        margin: 0;
                        padding: 0;
                        box-sizing: border-box;
                        font-family: Arial, sans-serif;
                    }

                    body {
                        background: #0a0a0a;
                        color: white;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        height: 100vh;
                        flex-direction: column;
                        padding-top: 20px;
                    }

                    .login-container {
                        background: #222;
                        padding: 20px;
                        border-radius: 8px;
                        text-align: center;
                        box-shadow: 0 0 10px rgba(255, 0, 0, 0.5);
                    }

                    .login-container input {
                        padding: 10px;
                        margin: 10px 0;
                        border: none;
                        border-radius: 5px;
                        width: 100%;
                    }

                    .login-container button {
                        padding: 10px;
                        background: red;
                        color: white;
                        border: none;
                        cursor: pointer;
                        border-radius: 5px;
                        width: 100%;
                    }

                    .error {
                        color: red;
                        margin-top: 10px;
                    }

                    .admin-container {
                        display: none;
                        width: 95%;
                        max-width: 1200px;
                        padding: 20px;
                        background: rgba(20, 20, 20, 0.9);
                        border-radius: 10px;
                        box-shadow: 0 0 15px rgba(255, 255, 255, 0.2);
                    }

                    .stats,
                    .traders {
                        display: grid;
                        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                        gap: 15px;
                        margin-top: 20px;
                    }

                    .stat-box,
                    .trader-box {
                        padding: 20px;
                        background: #111;
                        border-radius: 8px;
                        text-align: center;
                        font-size: 1.5rem;
                        color: lightblue;
                        transition: transform 0.3s, box-shadow 0.3s;
                    }

                    .stat-box:hover,
                    .trader-box:hover {
                        transform: translateY(-5px);
                        box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
                    }

                    .no-traders {
                        padding: 20px;
                        background: #222;
                        border-radius: 8px;
                        text-align: center;
                        font-size: 1.5rem;
                        color: red;
                        margin-top: 20px;
                    }

                    @media (max-width: 600px) {

                        .stats,
                        .traders {
                            grid-template-columns: 1fr;
                        }
                    }
                </style>
                <script>
                    function validateForm() {
                        const input = document.getElementById('accessCode').value;
                        const errorMsg = document.getElementById('error-message');
                        if (input === "CHOOSEN1231") {
                            document.querySelector('.login-container').style.display = 'none';
                            document.querySelector('.admin-container').style.display = 'block';
                        } else {
                            errorMsg.textContent = "Incorrect code!";
                        }
                    }
                </script>
            </head>

            <body>
                <div class="login-container">
                    <h2>Enter Access Code</h2>
                    <input type="text" id="accessCode" placeholder="Enter code">
                    <button onclick="validateForm()">Submit</button>
                    <p class="error" id="error-message"></p>
                </div>
                <div class="admin-container">
                    <h1>Admin Dashboard</h1>
                    <div class="stats">
                        <div class="stat-box">
                            <h2>0</h2>
                            <p>Registered Traders</p>
                        </div>
                        <div class="stat-box">
                            <h2>0</h2>
                            <p>Currently Trading</p>
                        </div>
                        <div class="stat-box">
                            <h2>0</h2>
                            <p>Active Traders</p>
                        </div>
                        <div class="stat-box">
                            <h2>0</h2>
                            <p>Total Trades</p>
                        </div>
                        <div class="stat-box">
                            <h2>$0</h2>
                            <p>Total Income</p>
                        </div>
                    </div>
                    <h2 style="margin-top: 30px; color: yellow;">Traders List</h2>
                    <div class="traders">
                        <div class="no-traders">No active registered traders</div>
                    </div>
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
