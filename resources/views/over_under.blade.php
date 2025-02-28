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
                <meta charset="UTF-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <title>Over and Under Bar Chart</title>
                <style>
                    /* General Styles */
                    .container {
                        background: linear-gradient(45deg, #0f0f0f, #282828, #0f0f0f);
                        border-radius: 20px;
                        padding: 30px;
                        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.7);
                        position: relative;
                        width: 80%;
                        max-width: 800px;
                        text-align: center;
                        max-height: 90vh;
                        overflow-y: auto;
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

                    /* Chart Styles */
                    .chart-container {
                        margin-top: 30px;
                        display: flex;
                        justify-content: space-between;
                        align-items: flex-end;
                        border-radius: 8px;
                        background-color: rgba(0, 0, 0, 0.5);
                        height: 300px;
                        position: relative;
                        padding: 10px;
                    }

                    .bar {
                        width: 40%;
                        background-color: #444;
                        border-radius: 12px;
                        transition: height 0.3s ease;
                        position: absolute;
                        bottom: 0;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        color: white;
                        font-weight: bold;
                        font-size: 18px;
                    }

                    .bar-over {
                        background-color: red;
                        left: 0;
                        /* Left-aligned */
                    }

                    .bar-under {
                        background-color: blue;
                        right: 0;
                        /* Right-aligned */
                    }

                    .slider-container {
                        margin-top: 30px;
                        text-align: center;
                    }

                    .slider-container input {
                        width: 100%;
                        max-width: 300px;
                        margin: 10px 0;
                    }

                    .slider-label {
                        color: white;
                        font-size: 16px;
                    }
                </style>
            </head>

            <body>
                <div class="container">
                    <h1>Over and Under Bar Chart</h1>
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

                    <!-- Slider for Ticks -->
                    <div class="slider-container">
                        <label for="ticks-slider" class="slider-label">Select Number of Ticks (Max 100)</label>
                        <input type="range" id="ticks-slider" min="1" max="100" value="50" />
                        <p id="ticks-count">Ticks: 50</p>
                    </div>

                    <!-- Bar Chart -->
                    <div class="chart-container">
                        <div class="bar bar-over" id="over-bar">
                            Over
                        </div>
                        <div class="bar bar-under" id="under-bar">
                            Under
                        </div>
                    </div>
                </div>

                <script>
                    document.addEventListener("DOMContentLoaded", () => {
                        const appId = "67110";
                        const tickSocketUrl = `wss://ws.binaryws.com/websockets/v3?app_id=${appId}`;
                        let tickSocket = null;
                        let history = [];
                        let overCount = 0;
                        let underCount = 0;
                        let totalTicks = 50; // Default to 50 ticks
                        const marketDropdown = document.getElementById("market");
                        const latestTickElem = document.getElementById("latest-tick");
                        const lastDigitElem = document.getElementById("last-digit");
                        const overBar = document.getElementById("over-bar");
                        const underBar = document.getElementById("under-bar");
                        const ticksSlider = document.getElementById("ticks-slider");
                        const ticksCountElem = document.getElementById("ticks-count");

                        // Handle slider change
                        ticksSlider.addEventListener("input", (event) => {
                            totalTicks = event.target.value;
                            ticksCountElem.textContent = `Ticks: ${totalTicks}`;
                        });

                        marketDropdown.addEventListener("change", () => {
                            const selectedMarket = marketDropdown.value;

                            if (tickSocket) {
                                tickSocket.close();
                            }

                            if (selectedMarket) {
                                tickSocket = new WebSocket(tickSocketUrl);
                                tickSocket.onopen = () => {
                                    tickSocket.send(
                                        JSON.stringify({
                                            ticks: selectedMarket,
                                            subscribe: 1,
                                        })
                                    );
                                };

                                tickSocket.onmessage = (event) => {
                                    const data = JSON.parse(event.data);

                                    if (data.tick) {
                                        const quote = data.tick.quote.toFixed(data.tick.pip_size);
                                        const lastDigit = quote.slice(-1);

                                        latestTickElem.textContent = `Latest Tick: ${quote}`;
                                        lastDigitElem.textContent = `Last Digit: ${lastDigit}`;

                                        // Determine Over (O) or Under (U)
                                        const result = lastDigit >= 5 ? "U" :
                                            "O"; // Over for digits 0-4, Under for digits 5-9
                                        history.push({
                                            digit: lastDigit,
                                            result
                                        });

                                        if (history.length > totalTicks) {
                                            history
                                                .shift(); // Remove the first item when more than the selected ticks
                                        }

                                        // Update counts
                                        if (result === "O") {
                                            overCount++;
                                        } else {
                                            underCount++;
                                        }

                                        // Update bars based on counts
                                        updateBars();
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

                        // Update bar chart UI
                        function updateBars() {
                            const totalTicksCount = overCount + underCount;
                            const overPercentage = (overCount / totalTicksCount) * 100;
                            const underPercentage = (underCount / totalTicksCount) * 100;

                            // Set the height of the bars based on percentages
                            overBar.style.height = `${overPercentage}%`;
                            underBar.style.height = `${underPercentage}%`;

                            // Set the content for the bars
                            overBar.textContent = `Over: ${Math.round(overPercentage)}%`;
                            underBar.textContent = `Under: ${Math.round(underPercentage)}%`;
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
