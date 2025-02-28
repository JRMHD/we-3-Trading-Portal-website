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
                <title>Trading Calculator</title>
                <style>
                    body {
                        font-family: 'Arial', sans-serif;
                        background-color: #101128;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        min-height: 100vh;
                        margin: 0;
                    }

                    .container {
                        background-color: #252d40;
                        padding: 25px;
                        border-radius: 12px;
                        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
                        max-width: 420px;
                        width: 100%;
                        border: 1px solid #5f05fc;
                    }

                    h1 {
                        text-align: center;
                        color: #1f77d0;
                    }

                    label {
                        display: block;
                        margin: 15px 0 5px;
                        font-weight: bold;
                        color: #1f77d0;
                    }

                    input {
                        width: 90%;
                        padding: 12px;
                        border: 1px solid #2e0f4d;
                        border-radius: 8px;
                        transition: all 0.3s ease;
                    }

                    input:hover,
                    input:focus {
                        border-color: #1f77d0;
                        box-shadow: 0 0 8px rgba(31, 119, 208, 0.5);
                    }

                    button {
                        width: 90%;
                        padding: 12px;
                        background-color: #007bff;
                        color: rgb(241, 5, 5);
                        border: none;
                        border-radius: 8px;
                        cursor: pointer;
                        margin-top: 15px;
                        transition: background-color 0.3s ease;
                    }

                    button:hover {
                        background-color: #0056b3;
                    }

                    #result {
                        margin-top: 20px;
                        padding: 12px;
                        background-color: #d4edda;
                        color: #155724;
                        border: 1px solid #c3e6cb;
                        border-radius: 8px;
                        display: none;
                    }
                </style>
            </head>

            <body>
                <div class="container">
                    <h1>Trading Calculator</h1>
                    <label for="riskAmount">Risk Amount ($)</label>
                    <input type="number" id="riskAmount" placeholder="Enter risk amount" min="1" required>

                    <label for="targetProfit">Target Profit ($)</label>
                    <input type="number" id="targetProfit" placeholder="Enter target profit" min="1" required>

                    <label for="numberOfLosses">Number of Losses</label>
                    <input type="number" id="numberOfLosses" placeholder="Enter number of losses" min="0"
                        required>

                    <button onclick="calculateStrategy()">Calculate</button>

                    <div id="result"></div>
                </div>

                <script>
                    function calculateStrategy() {
                        const riskAmount = parseFloat(document.getElementById('riskAmount').value);
                        const targetProfit = parseFloat(document.getElementById('targetProfit').value);
                        const numberOfLosses = parseInt(document.getElementById('numberOfLosses').value);

                        if (isNaN(riskAmount) || isNaN(targetProfit) || isNaN(numberOfLosses)) {
                            alert('Please enter valid numbers for all fields.');
                            return;
                        }

                        if (numberOfLosses <= 0) {
                            alert('Number of losses must be at least 1.');
                            return;
                        }

                        // Total amount available per trade must be less than risk amount and aim for profitability
                        const maxAffordableRisk = riskAmount / numberOfLosses;
                        let recommendedTradeAmount;

                        if (targetProfit <= 0 || maxAffordableRisk <= 0) {
                            recommendedTradeAmount = 'Achieving the target profit is not feasible with these parameters.';
                        } else {
                            // Safe and profitable recommendation
                            const safeTradeAmount = Math.min((targetProfit / (numberOfLosses + 1)), maxAffordableRisk * 0.8);

                            recommendedTradeAmount =
                                `To achieve your target, consider trading around $${safeTradeAmount.toFixed(2)} per trade to stay within risk limits and aim for profitability.`;
                        }

                        const resultDiv = document.getElementById('result');
                        resultDiv.style.display = 'block';
                        resultDiv.textContent = recommendedTradeAmount;
                    }
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
