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
                <title>Market Signals Dashboard</title>
                <style>
                    body {
                        background-color: black;
                        color: white;
                        text-align: center;
                        font-family: Arial, sans-serif;
                    }

                    button {
                        padding: 10px 20px;
                        border: none;
                        color: white;
                        cursor: pointer;
                        font-size: 16px;
                        margin: 5px;
                        border-radius: 5px;
                    }

                    .bar-container {
                        display: flex;
                        justify-content: center;
                        margin: 20px;
                    }

                    .bar {
                        width: 300px;
                        height: 30px;
                        background-color: grey;
                        position: relative;
                        margin: 0 10px;
                        border-radius: 5px;
                    }

                    .bar .fill {
                        height: 100%;
                        position: absolute;
                        top: 0;
                        left: 0;
                        border-radius: 5px;
                    }

                    .digit-buttons {
                        margin: 20px;
                    }

                    .digit-buttons button {
                        background-color: #444;
                        border: 1px solid white;
                        color: white;
                        margin: 2px;
                        font-size: 14px;
                        border-radius: 5px;
                        transition: background-color 0.3s;
                    }

                    .digit-buttons button:hover {
                        background-color: #555;
                    }

                    .digit-container {
                        display: flex;
                        justify-content: center;
                        flex-wrap: wrap;
                        margin-bottom: 20px;
                    }

                    .digit-bar {
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        margin: 0 15px;
                    }

                    .digit-bar span {
                        margin-bottom: 5px;
                    }

                    .shaking-title {
                        font-size: 30px;
                        font-weight: bold;
                        animation: shakeTitle 3s infinite, changeColor 5s infinite;
                        margin-bottom: 20px;
                        color: #ff5722;
                    }

                    .volatility-selector {
                        margin: 20px 0;
                        border-radius: 10px;
                        border: 1px solid #1e90ff;
                        box-shadow: 0 0 15px 5px rgba(30, 144, 255, 0.5);
                        padding: 10px 20px;
                        background-color: black;
                        color: white;
                        font-size: 18px;
                    }

                    .volatility-selector select {
                        width: 100%;
                        padding: 10px;
                        font-size: 16px;
                        color: white;
                        background-color: #333;
                        border: 1px solid #1e90ff;
                        border-radius: 5px;
                        outline: none;
                    }

                    @keyframes shakeTitle {

                        0%,
                        100% {
                            transform: translateX(0);
                        }

                        25% {
                            transform: translateX(-5px);
                        }

                        50% {
                            transform: translateX(5px);
                        }

                        75% {
                            transform: translateX(-5px);
                        }
                    }

                    @keyframes changeColor {

                        0%,
                        100% {
                            color: orange;
                        }

                        25% {
                            color: darkred;
                        }

                        50% {
                            color: orange;
                        }

                        75% {
                            color: darkred;
                        }
                    }
                </style>
            </head>

            <body>
                <h1 class="shaking-title" id="titleText">Over/Under Percentage Analysis</h1>

                <!-- Volatility Markets Selector -->
                <div class="volatility-selector">
                    <label for="volatilityMarket">Choose a Volatility Market:</label><br>
                    <select id="volatilityMarket">
                        <option value="R_10">Volatility 10 Index</option>
                        <option value="R_25">Volatility 25 Index</option>
                        <option value="R_50">Volatility 50 Index</option>
                        <option value="R_75">Volatility 75 Index</option>
                        <option value="R_100">Volatility 100 Index</option>
                        <option value="R_200">Volatility 200 Index</option>
                        <option value="R_300">Volatility 300 Index</option>
                        <option value="R_10_1s">Volatility 10 (1s) Index</option>
                        <option value="R_25_1s">Volatility 25 (1s) Index</option>
                        <option value="R_50_1s">Volatility 50 (1s) Index</option>
                        <option value="R_75_1s">Volatility 75 (1s) Index</option>
                        <option value="R_100_1s">Volatility 100 (1s) Index</option>
                    </select>
                </div>

                <!-- Over and Under Analysis -->
                <h2>Over and Under Analysis</h2>

                <div class="digit-container">
                    <div class="digit-bar">
                        <h3>Over</h3>
                        <div id="overButtons"></div>
                        <div class="bar-container">
                            <div class="bar" id="overBar">
                                <div class="fill" id="overFill"></div>
                            </div>
                            <span id="overPercentage">0%</span>
                        </div>
                    </div>

                    <div class="digit-bar">
                        <h3>Under</h3>
                        <div id="underButtons"></div>
                        <div class="bar-container">
                            <div class="bar" id="underBar">
                                <div class="fill" id="underFill"></div>
                            </div>
                            <span id="underPercentage">0%</span>
                        </div>
                    </div>
                </div>

                <script>
                    const overButtonsContainer = document.getElementById('overButtons');
                    const underButtonsContainer = document.getElementById('underButtons');
                    const overFill = document.getElementById('overFill');
                    const underFill = document.getElementById('underFill');
                    const overPercentage = document.getElementById('overPercentage');
                    const underPercentage = document.getElementById('underPercentage');
                    const volatilityMarket = document.getElementById('volatilityMarket');
                    let digitCounts = Array(10).fill(0);

                    // Create digit buttons
                    function createDigitButtons() {
                        for (let i = 0; i <= 8; i++) {
                            const button = document.createElement('button');
                            button.textContent = i;
                            button.style.backgroundColor = '#333';
                            button.style.border = '1px solid orange';
                            button.addEventListener('click', () => handleDigitClick(i, 'over'));
                            overButtonsContainer.appendChild(button);
                        }
                        for (let i = 1; i <= 9; i++) {
                            const button = document.createElement('button');
                            button.textContent = i;
                            button.style.backgroundColor = '#333';
                            button.style.border = '1px solid orange';
                            button.addEventListener('click', () => handleDigitClick(i, 'under'));
                            underButtonsContainer.appendChild(button);
                        }
                    }

                    createDigitButtons();

                    // Handle digit click event
                    function handleDigitClick(digit, type) {
                        let percentage;
                        if (type === 'over') {
                            const total = digitCounts.slice(digit + 1).reduce((a, b) => a + b, 0);
                            percentage = ((total / digitCounts.reduce((a, b) => a + b, 0)) * 100).toFixed(2);
                            updateBar(overFill, percentage, 'blue');
                            overPercentage.textContent = `${percentage}%`;
                        } else if (type === 'under') {
                            const total = digitCounts.slice(0, digit).reduce((a, b) => a + b, 0);
                            percentage = ((total / digitCounts.reduce((a, b) => a + b, 0)) * 100).toFixed(2);
                            updateBar(underFill, percentage, 'red');
                            underPercentage.textContent = `${percentage}%`;
                        }
                    }

                    // Update the bar with the percentage
                    function updateBar(fillElement, percentage, color) {
                        fillElement.style.width = `${percentage}%`;
                        fillElement.style.backgroundColor = color;
                    }

                    // Fetch data from Deriv API and update digit counts based on selected market
                    function fetchData() {
                        const appId = '63213'; // Replace with your actual app_id
                        const ws = new WebSocket(`wss://ws.binaryws.com/websockets/v3?app_id=${appId}`);

                        ws.onopen = function() {
                            console.log('Connected to WebSocket');
                            ws.send(JSON.stringify({
                                ticks: volatilityMarket.value
                            })); // Selected market
                        };

                        ws.onmessage = function(event) {
                            const data = JSON.parse(event.data);
                            if (data.msg_type === 'tick') {
                                const digit = parseInt(data.tick.quote.toString().slice(-1));
                                digitCounts[digit]++;
                            }
                        };

                        ws.onerror = function(error) {
                            console.error('WebSocket Error:', error);
                        };

                        ws.onclose = function() {
                            console.log('WebSocket connection closed');
                        };

                        // Update the WebSocket when the market changes
                        volatilityMarket.addEventListener('change', () => {
                            digitCounts = Array(10).fill(0);
                            ws.close();
                            fetchData();
                        });
                    }

                    fetchData();
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
