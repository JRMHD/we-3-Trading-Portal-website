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
                <title>Bot XML File UPLOAD</title>
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
                        color: #000;
                    }

                    .container {
                        background-color: #252d40;
                        border: 2px solid blue;
                        padding: 60px;
                        border-radius: 12px;
                        text-align: center;
                        position: relative;
                        width: 80%;
                        max-width: 1200px;
                        animation: glowing-border 4s infinite linear;
                        overflow-y: scroll;
                        max-height: 80vh;
                    }

                    .bot-container {
                        background-color: #3a4856;
                        padding: 20px;
                        margin-bottom: 20px;
                        border-radius: 8px;
                        cursor: pointer;
                        transition: transform 0.3s ease, box-shadow 0.3s ease;
                    }

                    .bot-container:hover {
                        transform: translateY(-5px);
                        box-shadow: 0 0 15px #00f;
                    }

                    .options {
                        margin-top: 10px;
                    }

                    button {
                        padding: 8px 15px;
                        margin: 5px;
                        border: none;
                        border-radius: 5px;
                        background-color: #0066cc;
                        color: #fff;
                        cursor: pointer;
                        transition: background-color 0.3s;
                    }

                    button:hover {
                        background-color: #004c99;
                    }

                    @keyframes glowing-border {
                        0% {
                            box-shadow: 0 0 15px blue, 0 0 25px blue, 0 0 35px darkblue;
                        }

                        25% {
                            box-shadow: 0 -15px 25px darkblue, 0 15px 25px blue;
                        }

                        50% {
                            box-shadow: -15px 0 25px blue, 15px 0 25px darkblue;
                        }

                        75% {
                            box-shadow: 15px 0 25px darkblue, -15px 0 25px blue;
                        }

                        100% {
                            box-shadow: 0 0 15px blue, 0 0 25px blue;
                        }
                    }

                    @media (max-width: 768px) {
                        .container {
                            padding: 30px;
                        }

                        .bot-container {
                            width: 100%;
                        }

                        button {
                            padding: 10px;
                            font-size: 14px;
                        }
                    }
                </style>
            </head>

            <body>
                <div class="container">
                    <div class="bot-container" data-bot="Expert-Speed N.version.xml">
                        <h3>Bot 1</h3>
                        <div class="options">
                            <button class="UPLOAD">UPLOAD</button>
                        </div>
                    </div>
                    <div class="bot-container" data-bot="files/bot2.xml">
                        <h3>Bot 2</h3>
                        <div class="options">
                            <button class="UPLOAD">UPLOAD</button>
                        </div>
                    </div>
                    <div class="bot-container" data-bot="files/bot3.xml">
                        <h3>Bot 3</h3>
                        <div class="options">
                            <button class="UPLOAD">UPLOAD</button>
                        </div>
                    </div>
                    <div class="bot-container" data-bot="files/bot4.xml">
                        <h3>Bot 4</h3>
                        <div class="options">
                            <button class="UPLOAD">UPLOAD</button>
                        </div>
                    </div>
                    <div class="bot-container" data-bot="files/bot5.xml">
                        <h3>Bot 5</h3>
                        <div class="options">
                            <button class="UPLOAD">UPLOAD</button>
                        </div>
                    </div>
                    <div class="bot-container" data-bot="files/bot6.xml">
                        <h3>Bot 6</h3>
                        <div class="options">
                            <button class="UPLOAD">UPLOAD</button>
                        </div>
                    </div>
                    <!-- More bot containers can go here... -->
                </div>

                <script>
                    // Grab all bot containers
                    const botContainers = document.querySelectorAll('.bot-container');

                    // Loop through all containers
                    botContainers.forEach(container => {
                        const UPLOADButton = container.querySelector('.UPLOAD');

                        // UPLOAD button logic
                        UPLOADButton.addEventListener('click', (e) => {
                            e.stopPropagation();
                            const botLink = container.getAttribute('data-bot');
                            const link = document.createElement('a');
                            link.href = botLink;
                            link.UPLOAD = botLink.split('index.html')
                                .pop(); // Ensures the file is named correctly for UPLOAD
                            link.click(); // Trigger UPLOAD
                        });
                    });
                </script>
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
