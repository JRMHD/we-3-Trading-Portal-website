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
                <title>Even Odd</title>
                <script src="../cdn.jsdelivr.net/npm/chart.js"></script>
                <style>
                    /* General Styles */
                    body {
                        font-family: 'Roboto', sans-serif;
                        margin: 0;
                        padding: 0;
                        background-color: #121212;
                        color: #fff;
                        display: flex;
                        flex-direction: column;
                        justify-content: center;
                        align-items: center;
                        height: 100vh;
                        overflow: hidden;
                    }

                    .container {
                        background: linear-gradient(45deg, #0f0f0f, #282828, #0f0f0f);
                        border-radius: 20px;
                        padding: 30px;
                        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.7);
                        position: relative;
                        width: 80%;
                        max-width: 800px;
                        text-align: center;
                        animation: glow 5s ease-in-out infinite alternate;
                        max-height: 90vh;
                        overflow-y: auto;
                    }

                    @keyframes glow {
                        0% {
                            background-color: #333;
                        }

                        50% {
                            background-color: #0077ff;
                        }

                        100% {
                            background-color: #00ff77;
                        }
                    }

                    h1 {
                        color: #ff8c00;
                        font-size: 36px;
                        margin-bottom: 20px;
                    }

                    #latest-tick-container {
                        margin-top: 20px;
                        padding: 20px;
                        background: rgba(34, 34, 34, 0.8);
                        border-radius: 10px;
                        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
                        text-align: center;
                    }

                    #latest-tick,
                    #last-digit {
                        font-size: 24px;
                        color: #00ff00;
                        font-weight: bold;
                        text-align: center;
                        margin: 10px 0;
                    }

                    #digit-history {
                        display: flex;
                        flex-wrap: wrap;
                        gap: 5px;
                        justify-content: center;
                        margin-top: 20px;
                    }

                    .digit-box {
                        width: 30px;
                        height: 30px;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        font-size: 16px;
                        font-weight: bold;
                        border-radius: 5px;
                    }

                    .digit-even {
                        background-color: blue;
                        color: white;
                    }

                    .digit-odd {
                        background-color: red;
                        color: white;
                    }

                    .digit-previous {
                        background-color: purple;
                        color: pink;
                    }

                    .dropdown-container {
                        margin-bottom: 20px;
                        text-align: center;
                    }


                    .dropdown:hover {
                        box-shadow: 0 0 10px 3px orange;
                        border-color: orange;
                    }

                    .dropdown-label {
                        display: block;
                        font-size: 18px;
                        margin-bottom: 10px;
                    }

                    /* New Container Styles */
                    .small-container {
                        background: rgba(34, 34, 34, 0.9);
                        border-radius: 15px;
                        padding: 20px;
                        margin-top: 20px;
                        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.7);
                        width: 100%;
                        /* Full width to match Latest Tick */
                        max-width: 800px;
                        /* Ensure it doesn't go too wide */
                        text-align: center;
                    }

                    /* Chart.js container styling */
                    .chart-container {
                        width: 100%;
                        height: 300px;
                        position: relative;
                        margin-top: 20px;
                    }
                </style>
                <script>
                    document.addEventListener("DOMContentLoaded", () => {
                        const appId = '66860';
                        const tickSocketUrl = `wss://ws.binaryws.com/websockets/v3?app_id=${appId}`;
                        let tickSocket = null;
                        const marketDropdown = document.getElementById("market");
                        const latestTickElem = document.getElementById("latest-tick");
                        const lastDigitElem = document.getElementById("last-digit");
                        const digitHistoryContainer = document.getElementById("digit-history");
                        const tickDropdown = document.getElementById("tick-count");

                        let digitHistory = [];

                        // Set up Chart.js chart
                        const ctx = document.getElementById("evenOddChart").getContext("2d");
                        const evenOddChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: ['Even', 'Odd'],
                                datasets: [{
                                    label: 'Percentage',
                                    data: [0, 0], // Initial data (0%)
                                    backgroundColor: ['#00FF00', '#FF0000'],
                                    borderColor: ['#00FF00', '#FF0000'],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                                scales: {
                                    y: {
                                        beginAtZero: true,
                                        max: 100,
                                        ticks: {
                                            stepSize: 25
                                        }
                                    }
                                }
                            }
                        });

                        // Handle tick count selection change
                        tickDropdown.addEventListener("change", updateBarChart);

                        // Handle market selection change
                        marketDropdown.addEventListener("change", () => {
                            const selectedMarket = marketDropdown.value;

                            if (tickSocket) {
                                tickSocket.close();
                            }

                            if (selectedMarket) {
                                // Mark all previous digits as "previous"
                                Array.from(digitHistoryContainer.children).forEach(box => {
                                    box.classList.remove("digit-even", "digit-odd");
                                    box.classList.add("digit-previous");
                                });

                                tickSocket = new WebSocket(tickSocketUrl);
                                tickSocket.onopen = () => {
                                    tickSocket.send(
                                        JSON.stringify({
                                            ticks: selectedMarket,
                                            subscribe: 1
                                        })
                                    );
                                };

                                tickSocket.onmessage = (event) => {
                                    const data = JSON.parse(event.data);

                                    if (data.tick) {
                                        const quote = data.tick.quote.toFixed(data.tick.pip_size);
                                        const lastDigit = quote.slice(-1);
                                        const isEven = parseInt(lastDigit) % 2 === 0;

                                        latestTickElem.textContent = `Latest Tick: ${quote}`;
                                        lastDigitElem.textContent = `Last Digit: ${lastDigit}`;

                                        // Add digit to history
                                        const digitBox = document.createElement("div");
                                        digitBox.textContent = isEven ? "E" : "O";
                                        digitBox.classList.add("digit-box", isEven ? "digit-even" : "digit-odd");
                                        digitHistoryContainer.appendChild(digitBox);

                                        digitHistory.push(parseInt(lastDigit));

                                        if (digitHistory.length > 50) {
                                            digitHistory.shift();
                                            digitHistoryContainer.removeChild(digitHistoryContainer.firstChild);
                                        }

                                        updateBarChart();
                                    }
                                };

                                tickSocket.onerror = (error) => {
                                    console.error("WebSocket error:", error);
                                    latestTickElem.textContent = "Error fetching tick data";
                                    lastDigitElem.textContent = "--";
                                };

                                tickSocket.onclose = () => {
                                    console.log("WebSocket connection closed");
                                };
                            } else {
                                latestTickElem.textContent = "Latest Tick: --";
                                lastDigitElem.textContent = "Last Digit: --";
                            }
                        });

                        // Update the bar chart based on the number of selected ticks
                        function updateBarChart() {
                            const tickCount = parseInt(tickDropdown.value);
                            const recentDigits = digitHistory.slice(-tickCount);
                            const evenCount = recentDigits.filter(digit => digit % 2 === 0).length;
                            const oddCount = recentDigits.length - evenCount;

                            const evenPercentage = ((evenCount / tickCount) * 100).toFixed(1);
                            const oddPercentage = ((oddCount / tickCount) * 100).toFixed(1);

                            // Update chart data
                            evenOddChart.data.datasets[0].data = [parseFloat(evenPercentage), parseFloat(oddPercentage)];
                            evenOddChart.update();
                        }
                    });
                </script>
            </head>

            <body>
                <div class="container">
                    <h1>Even Odd</h1>
                    <div class="dropdown-container">
                        <label for="market" class="dropdown-label">Select Market</label>
                        <select id="market" class="dropdown">
                            <option value="">Select Market</option>
                            <option value="R_10">Volatility 10 Index</option>
                            <option value="R_25">Volatility 25 Index</option>
                            <option value="R_50">Volatility 50 Index</option>
                            <option value="R_75">Volatility 75 Index</option>
                            <option value="R_100">Volatility 100 Index</option>
                            <option value="1HZ10V">1Hz Volatility 10 Index</option>
                            <option value="1HZ25V">1Hz Volatility 25 Index</option>
                            <option value="1HZ50V">1Hz Volatility 50 Index</option>
                            <option value="1HZ75V">1Hz Volatility 75 Index</option>
                            <option value="1HZ100V">1Hz Volatility 100 Index</option>
                        </select>
                    </div>

                    <div id="latest-tick-container">
                        <p id="latest-tick">Latest Tick: --</p>
                        <p id="last-digit">Last Digit: --</p>
                    </div>

                    <div id="digit-history"></div>

                    <!-- New small container for Even/Odd chart and tick dropdown -->
                    <div class="small-container">
                        <div class="dropdown-container">
                            <label for="tick-count" class="dropdown-label">Number of Ticks</label>
                            <select id="tick-count" class="dropdown">
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>

                        <!-- Chart.js bar chart container -->
                        <div class="chart-container">
                            <canvas id="evenOddChart"></canvas>
                        </div><br><br>
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
