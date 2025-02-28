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
                <title>Digits & Percentage</title>
                <style>
                    body {
                        background-color: black;
                        color: white;
                        font-family: 'Roboto Mono', monospace;
                        display: flex;
                        justify-content: center;
                        align-items: flex-start;
                        /* Align to the top for better scrolling */
                        height: 100%;
                        margin: 0;
                        overflow-y: auto;
                        /* Allow vertical scrolling */
                        padding: 20px;
                        /* Add padding to prevent content from touching the edges */
                    }

                    .container {
                        text-align: center;
                        max-width: 100%;
                        padding: 20px;
                        box-sizing: border-box;
                        animation: changeContainerColor 10s infinite alternate;
                        border-radius: 15px;
                        width: 100%;
                        max-width: 800px;
                        /* Limit container width for larger screens */
                    }

                    h1 {
                        font-size: 1.5rem;
                        color: #f0f0f0;
                        white-space: nowrap;
                        overflow: hidden;
                        border-right: 0.15em solid orange;
                        animation: typing 3s steps(30, end) infinite, blink-caret 0.75s step-end infinite;
                        margin: 0;
                        text-align: center;
                        width: 100%;
                    }

                    @keyframes typing {
                        0% {
                            width: 0;
                        }

                        100% {
                            width: 100%;
                        }
                    }

                    @keyframes blink-caret {

                        from,
                        to {
                            border-color: transparent;
                        }

                        50% {
                            border-color: orange;
                        }
                    }

                    .table-container {
                        margin-top: 20px;
                        width: 100%;
                    }

                    .digit-table {
                        display: inline-block;
                        padding: 10px;
                        margin: 20px;
                        border: 2px solid orange;
                        border-radius: 10px;
                        box-shadow: 0 0 10px orange;
                        width: 100%;
                    }

                    table {
                        border-collapse: collapse;
                        width: 100%;
                    }

                    th,
                    td {
                        border: 1px solid orange;
                        padding: 8px;
                        color: white;
                    }

                    .dropdown-container {
                        display: flex;
                        justify-content: center;
                        margin-bottom: 10px;
                        flex-wrap: wrap;
                        /* Allow dropdowns to wrap on smaller screens */
                        gap: 10px;
                        /* Add some space between dropdowns */
                    }

                    .dropdowny {
                        margin: 0 10px;
                        padding: 5px 10px;
                        border-radius: 5px;
                        background-color: blue;
                        color: white;
                        font-size: 1rem;
                        border: none;
                        box-shadow: 0 0 10px rgba(0, 255, 255, 0.7);
                        min-width: 150px;
                        /* Minimum width for dropdown */
                    }

                    @media (max-width: 768px) {
                        h1 {
                            font-size: 1.2rem;
                            /* Slightly smaller font for smaller screens */
                        }

                        .digit-table {
                            margin: 10px 0;
                        }

                        .dropdown-container {
                            flex-direction: column;
                            /* Stack dropdowns on top of each other */
                            align-items: center;
                        }
                    }
                </style>
            </head>

            <body>

                <div class="container">
                    <h1 id="title">Digits & Percentage</h1>

                    <div class="table-container">
                        <!-- Dropdown containers placed above the tables -->
                        <div class="dropdown-container">
                            <select class="dropdowny" id="time-interval">
                                <option value="30">Past 30 min</option>
                                <option value="20">Past 20 min</option>
                                <option value="10">Past 10 min</option>
                                <option value="5">Past 5 min</option>
                                <option value="current">Current Time</option>
                            </select>

                            <select class="dropdowny" id="market">
                                <!-- Dynamically populate with markets from Deriv API -->
                            </select>
                        </div>

                        <!-- Table for digits -->
                        <div class="digit-table" id="digitTable">
                            <table>
                                <tr>
                                    <th>Digit</th>
                                    <th>Percentage</th>
                                    <th>Times Displayed</th>
                                </tr>
                                <tr>
                                    <td>0</td>
                                    <td id="digit-0-percentage">--</td>
                                    <td id="digit-0-count">--</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td id="digit-1-percentage">--</td>
                                    <td id="digit-1-count">--</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td id="digit-2-percentage">--</td>
                                    <td id="digit-2-count">--</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td id="digit-3-percentage">--</td>
                                    <td id="digit-3-count">--</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td id="digit-4-percentage">--</td>
                                    <td id="digit-4-count">--</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td id="digit-5-percentage">--</td>
                                    <td id="digit-5-count">--</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td id="digit-6-percentage">--</td>
                                    <td id="digit-6-count">--</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td id="digit-7-percentage">--</td>
                                    <td id="digit-7-count">--</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td id="digit-8-percentage">--</td>
                                    <td id="digit-8-count">--</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td id="digit-9-percentage">--</td>
                                    <td id="digit-9-count">--</td>
                                </tr>
                            </table>
                        </div>

                        <!-- Strong and Weak digits table -->
                        <div class="digit-table" id="strongWeakTable">
                            <table>
                                <tr>
                                    <th>Strong Digit</th>
                                    <th>Weak Digit</th>
                                </tr>
                                <tr>
                                    <td id="strong-digit">--</td>
                                    <td id="weak-digit">--</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <script>
                    const appId = '63213'; // Deriv API token
                    let derivSocket = null;

                    document.addEventListener('DOMContentLoaded', function() {
                        const timeIntervalDropdown = document.getElementById('time-interval');
                        const marketDropdown = document.getElementById('market');

                        // Fetch markets from Deriv API on load
                        fetchMarkets();

                        // Event listener to handle dropdown changes
                        timeIntervalDropdown.addEventListener('change', updateData);
                        marketDropdown.addEventListener('change', updateData);

                        function fetchMarkets() {
                            // Open a WebSocket connection to the Deriv API
                            derivSocket = new WebSocket('wss://ws.binaryws.com/websockets/v3?app_id=' + appId);

                            derivSocket.onopen = function() {
                                // Send a request for active markets
                                derivSocket.send(JSON.stringify({
                                    active_symbols: "brief",
                                    product_type: "basic"
                                }));
                            };

                            derivSocket.onmessage = function(message) {
                                const data = JSON.parse(message.data);

                                if (data.active_symbols) {
                                    // Populate market dropdown with fetched symbols
                                    data.active_symbols.forEach(symbol => {
                                        const option = document.createElement('option');
                                        option.value = symbol.symbol;
                                        option.textContent = symbol.display_name;
                                        marketDropdown.appendChild(option);
                                    });
                                }
                            };
                        }

                        function updateData() {
                            const timeInterval = timeIntervalDropdown.value;
                            const selectedMarket = marketDropdown.value;

                            if (selectedMarket) {
                                fetchMarketData(selectedMarket, timeInterval);
                            }
                        }

                        function fetchMarketData(market, timeInterval) {
                            // Fetch data based on selected time interval and market
                            derivSocket.send(JSON.stringify({
                                ticks_history: market,
                                end: 'latest',
                                count: parseInt(timeInterval) * 60,
                                adjust_start_time: 1,
                                style: 'ticks',
                                granularity: 60
                            }));

                            derivSocket.onmessage = function(message) {
                                const data = JSON.parse(message.data);
                                if (data.history) {
                                    // Parse and display the digits and percentages in the tables
                                    updateTables(data.history.prices);
                                }
                            };
                        }

                        function updateTables(prices) {
                            // Logic to calculate digit percentages, display counts, and strong/weak digits
                            let counts = Array(10).fill(0); // Digit counts (0-9)

                            prices.forEach(price => {
                                const lastDigit = parseInt(price.toString().slice(-1));
                                counts[lastDigit]++;
                            });

                            const total = prices.length;

                            counts.forEach((count, digit) => {
                                document.getElementById(`digit-${digit}-percentage`).textContent = ((count / total) *
                                    100).toFixed(2) + '%';
                                document.getElementById(`digit-${digit}-count`).textContent = count;
                            });

                            // Determine strong and weak digits
                            const strongDigit = counts.indexOf(Math.max(...counts));
                            const weakDigit = counts.indexOf(Math.min(...counts));

                            document.getElementById('strong-digit').textContent = strongDigit;
                            document.getElementById('weak-digit').textContent = weakDigit;
                        }
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
