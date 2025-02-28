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
                        background-color: #121212;
                        color: #e0e0e0;
                        text-align: center;
                        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                    }

                    button {
                        padding: 10px 20px;
                        background-color: #ff5722;
                        border: none;
                        color: #212121;
                        cursor: pointer;
                        font-size: 16px;
                        border-radius: 5px;
                        transition: background-color 0.3s ease;
                    }

                    button:hover {
                        background-color: #e64a19;
                    }

                    .animated-text {
                        font-size: 20px;
                        color: #ffeb3b;
                        margin-top: 20px;
                    }

                    .shaking-title {
                        font-size: 30px;
                        font-weight: bold;
                        animation: shakeTitle 3s infinite, changeColor 5s infinite;
                        margin-bottom: 20px;
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
                            color: #ffeb3b;
                        }

                        25% {
                            color: #4caf50;
                        }

                        50% {
                            color: #f44336;
                        }

                        75% {
                            color: #ffeb3b;
                        }
                    }

                    select {
                        padding: 10px;
                        font-size: 16px;
                        background-color: #333;
                        color: #e0e0e0;
                        border: 1px solid #444;
                        border-radius: 5px;
                        margin: 20px;
                    }

                    table {
                        width: 60%;
                        margin: 20px auto;
                        border-collapse: collapse;
                        background-color: #1e1e1e;
                        color: #e0e0e0;
                        border-radius: 8px;
                        overflow: hidden;
                    }

                    th,
                    td {
                        border: 1px solid #444;
                        padding: 10px;
                        text-align: center;
                    }

                    th {
                        background-color: #ff5722;
                    }

                    .digit-display-container {
                        display: flex;
                        flex-wrap: wrap;
                        justify-content: center;
                        gap: 10px;
                        max-width: 80%;
                        margin: 10px auto;
                        border: 1px solid #444;
                        padding: 10px;
                        overflow: hidden;
                        background-color: #2c2c2c;
                        border-radius: 8px;
                    }

                    .digit {
                        font-size: 18px;
                        width: 20px;
                        height: 20px;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        border-radius: 50%;
                        margin: 2px;
                    }

                    .even-digit {
                        background-color: blue;
                        color: white;
                    }

                    .odd-digit {
                        background-color: green;
                        color: white;
                    }

                    .over-digit {
                        background-color: red;
                        color: white;
                    }

                    .under-digit {
                        background-color: blue;
                        color: white;
                    }
                </style>
            </head>

            <body>
                <h1 class="shaking-title" id="titleText"></h1>

                <p class="animated-text" id="typingText"></p>

                <!-- Volatility Market Dropdown -->
                <h2>Select Volatility Market</h2>
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

                <!-- Even/Odd Analysis Table -->
                <h2>Even Odd Analyser</h2>
                <div id="digitDisplayEvenOdd" class="digit-display-container"></div>
                <table id="evenOddTable">
                    <thead>
                        <tr>
                            <th colspan="3">Even Odd Analyser</th>
                        </tr>
                        <tr>
                            <th>Market</th>
                            <th>Even</th>
                            <th>Odd</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td id="bestEvenOddMarket">Best Market</td>
                            <td id="evenMarket">Loading...</td>
                            <td id="oddMarket">Loading...</td>
                        </tr>
                    </tbody>
                </table>

                <!-- Over/Under Analysis Table -->
                <h2>Over and Under Analyser</h2>
                <div id="digitDisplayOverUnder" class="digit-display-container"></div>
                <table id="overUnderTable">
                    <thead>
                        <tr>
                            <th colspan="3">Over and Under Analyser</th>
                        </tr>
                        <tr>
                            <th>Market</th>
                            <th>Over</th>
                            <th>Under</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td id="bestOverUnderMarket">Best Market</td>
                            <td id="overMarket">Loading...</td>
                            <td id="underMarket">Loading...</td>
                        </tr>
                    </tbody>
                </table>

                <script>
                    const titleTextElement = document.getElementById('titleText');
                    const titleWords = ['Derivhub', 'Market', 'Analyser'];
                    let titleIndex = 0;

                    function animateTitle() {
                        if (titleIndex < titleWords.length) {
                            titleTextElement.textContent += titleWords[titleIndex] + ' ';
                            titleIndex++;
                            setTimeout(animateTitle, 500);
                        } else {
                            setTimeout(() => {
                                titleTextElement.textContent = '';
                                titleIndex = 0;
                                animateTitle();
                            }, 2000);
                        }
                    }

                    animateTitle();

                    const typingText = document.getElementById('typingText');
                    const typingMessage = "Welcome to Derivhub Support System";
                    let typingIndex = 0;

                    function typeMessage() {
                        if (typingIndex < typingMessage.length) {
                            typingText.textContent += typingMessage.charAt(typingIndex);
                            typingIndex++;
                            setTimeout(typeMessage, 100);
                        } else {
                            setTimeout(() => {
                                typingText.textContent = '';
                                typingIndex = 0;
                                typeMessage();
                            }, 2000);
                        }
                    }

                    typeMessage();

                    const appId = '63213'; // Replace with your actual app_id
                    const ws = new WebSocket(`wss://ws.binaryws.com/websockets/v3?app_id=${appId}`);

                    let evenCount = 0;
                    let oddCount = 0;
                    let overCount = 0;
                    let underCount = 0;
                    let digitCounts = Array(10).fill(0); // To store counts of each digit
                    let startTime = new Date().getTime(); // Track start time for 15-minute interval
                    const digitDisplayEvenOdd = document.getElementById('digitDisplayEvenOdd');
                    const digitDisplayOverUnder = document.getElementById('digitDisplayOverUnder');

                    const marketNames = {
                        'R_10': 'Volatility 10 Index',
                        'R_25': 'Volatility 25 Index',
                        'R_50': 'Volatility 50 Index',
                        'R_75': 'Volatility 75 Index',
                        'R_100': 'Volatility 100 Index',
                        'R_200': 'Volatility 200 Index',
                        'R_300': 'Volatility 300 Index',
                        'R_10_1s': 'Volatility 10 (1s) Index',
                        'R_25_1s': 'Volatility 25 (1s) Index',
                        'R_50_1s': 'Volatility 50 (1s) Index',
                        'R_75_1s': 'Volatility 75 (1s) Index',
                        'R_100_1s': 'Volatility 100 (1s) Index'
                    };

                    document.getElementById('volatilityMarket').addEventListener('change', function() {
                        const selectedMarket = this.value;
                        const marketName = marketNames[selectedMarket];
                        document.getElementById('bestEvenOddMarket').textContent = marketName;
                        document.getElementById('bestOverUnderMarket').textContent = marketName;
                        subscribeToTicks(selectedMarket);
                    });

                    ws.onopen = function() {
                        console.log('Connected to WebSocket');
                        subscribeToTicks('R_50'); // Default market
                    };

                    ws.onmessage = function(event) {
                        const data = JSON.parse(event.data);
                        if (data.msg_type === 'tick') {
                            updateData(data.tick.quote);
                        }
                    };

                    ws.onerror = function(error) {
                        console.error('WebSocket Error:', error);
                    };

                    ws.onclose = function() {
                        console.log('WebSocket connection closed');
                    };

                    function subscribeToTicks(market) {
                        ws.send(JSON.stringify({
                            ticks: market
                        }));
                    }

                    function updateData(tickPrice) {
                        const lastDigit = tickPrice.toString().slice(-1);
                        const digit = parseInt(lastDigit);

                        digitCounts[digit]++;
                        const currentTime = new Date().getTime();

                        if (digit % 2 === 0) {
                            evenCount++;
                            addDigit(digitDisplayEvenOdd, 'E', 'even-digit');
                        } else {
                            oddCount++;
                            addDigit(digitDisplayEvenOdd, 'O', 'odd-digit');
                        }

                        if (digit >= 5) {
                            overCount++;
                            addDigit(digitDisplayOverUnder, 'O', 'over-digit');
                        } else {
                            underCount++;
                            addDigit(digitDisplayOverUnder, 'U', 'under-digit');
                        }

                        if (currentTime - startTime >= 15 * 60 * 1000) {
                            displayBestMarkets();
                            evenCount = 0;
                            oddCount = 0;
                            overCount = 0;
                            underCount = 0;
                            digitCounts.fill(0);
                            startTime = currentTime;
                        }
                    }

                    function addDigit(container, label, className) {
                        const digitElement = document.createElement('div');
                        digitElement.textContent = label;
                        digitElement.className = `digit ${className}`;
                        container.appendChild(digitElement);
                        if (container.children.length > 20) {
                            container.removeChild(container.children[0]);
                        }
                    }

                    function displayBestMarkets() {
                        document.getElementById('evenMarket').textContent = evenCount;
                        document.getElementById('oddMarket').textContent = oddCount;
                        document.getElementById('overMarket').textContent = overCount;
                        document.getElementById('underMarket').textContent = underCount;
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
