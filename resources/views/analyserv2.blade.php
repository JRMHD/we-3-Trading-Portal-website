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
                <title> Analysis Tool</title>
                <script src="scripti.html"></script>
                <link rel="stylesheet"
                    href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap">
                <link rel="stylesheet" href="index.css">
                <script src="../cdn.jsdelivr.net/npm/chart.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script> <!-- Include DataLabels plugin -->


                <style>
                    body {
                        background-color: black;
                        color: white;
                        text-align: center;
                        font-family: Arial, sans-serif;
                    }

                    h1 {
                        color: #ff6f00;
                        text-align: center;
                    }

                    .controls {
                        margin-bottom: 20px;
                        color: #4fef0b;
                        padding: 0px;
                        border-radius: 20px;
                        text-align: center;
                        width: 100%;
                        max-width: 600px;
                        box-sizing: border-box;
                    }

                    .controls label {
                        display: block;
                        font-size: 1.5em;
                        margin-bottom: 10px;
                    }

                    .controls select {
                        width: 100%;
                        padding: 10px;
                        font-size: 1.2em;
                        border-radius: 10px;
                        margin-bottom: 20px;
                        box-sizing: border-box;
                        background-color: rgb(0 0 0 / 21%);
                        color: rgb(255, 255, 255);
                    }


                    button {
                        background-color: #ff6f00;
                        border: none;
                        color: white;
                        padding: 10px 20px;
                        font-size: 16px;
                        margin: 5px;
                        border-radius: 5px;
                        cursor: pointer;
                        width: 100%;
                        max-width: 300px;
                        box-sizing: border-box;
                    }

                    button:hover {
                        background-color: #e65c00;
                    }

                    #latestTick,
                    #digits {
                        font-size: 34px;
                        margin-top: 20px;
                        padding: 10px;
                        color: #2be243;
                        text-align: center;
                    }

                    #digitBars {
                        display: flex;
                        justify-content: space-around;
                        margin-top: 20px;
                        flex-wrap: wrap;
                    }

                    .digit-bar {
                        width: 50px;
                        height: 50px;
                        background-color: orange;
                        color: black;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        border-radius: 50%;
                        font-size: 24px;
                    }

                    button {
                        padding: 25px;
                        font-size: 25px;
                        border-radius: 10px;
                        background-Color: red;
                    }


                    .digit-bar {
                        width: 40px;
                        height: 40px;
                        font-size: 18px;
                    }
                    }

                    .title.shake,
                    .startPredictions.shake {
                        animation: shake 0.5s;
                    }

                    @keyframes shake {
                        0% {
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

                        100% {
                            transform: translateX(0);
                        }
                    }

                    @keyframes slide {
                        0% {
                            left: -100%;
                        }

                        100% {
                            left: 100%;
                        }
                    }

                    .highlight {
                        background-color: yellow;
                    }

                    .arrow {
                        position: relative;
                    }

                    .arrow::after {
                        content: '↓';
                        position: absolute;
                        bottom: -20px;
                        left: 50%;
                        transform: translateX(-50%);
                        color: blue;
                    }

                    .title {
                        color: orange;
                        /* Default color */
                        transition: color 0.5s ease;
                        /* Smooth transition for color change */
                    }

                    p#even-odd-timer {
                        display: block;
                        color: white;
                        padding: 10px;
                        font-size: 25px;
                    }

                    .timecode {
                        font-family: 'Roboto', sans-serif;
                        font-size: 1rem;
                        color: white;
                        background-color: black;
                        padding: 10px;
                        border-radius: 8px;
                        display: inline-block;
                        font-weight: bold;
                        bottom: 10px;
                        right: 30px;
                        text-align: center;
                    }
                </style>

            </head>

            <body>
                <div class="container">
                    <h1 class="title"> Analysis Tool</h1>
                    <SCRIPT language=JavaScript>
                        <!-- http://www.spacegun.co.uk 
                        -->
                        var
                        message
                        =
                        "This
                        Service
                        Is
                        Blocked,
                        Your
                        Address
                        Will
                        be
                        BLocked
                        When
                        trying
                        it
                        3
                        times ";
                        function
                        rtclickcheck(keyp) {
                        if
                        (navigator.appName
                        ==
                        "Netscape"
                        &&
                        keyp.which
                        ==
                        3) {
                        alert(message);
                        return
                        false;
                        }
                        if
                        (navigator.appVersion.indexOf("MSIE")
                        !=
                        -1
                        &&
                        event.button
                        ==
                        2)
                        {
                        alert(message);
                        return
                        false;
                        }
                        }
                        document.onmousedown
                        =
                        rtclickcheck;
                        function
                        handleShakeEffect()
                        {
                        const
                        title
                        =
                        document.querySelector('.title');
                        const
                        startPredictions
                        =
                        document.querySelector('.startpredictions');
                        const
                        colors
                        =
                        ['orange',
                        'red',
                        'blue',
                        'green'];
                        let
                        currentColorIndex
                        =
                        0;
                        function
                        changeColor()
                        {
                        currentColorIndex
                        =
                        (currentColorIndex
                        +
                        1)
                        %
                        colors.length;
                        if
                        (title)
                        {
                        title.style.color
                        =
                        colors[currentColorIndex];
                        }
                        }
                        function
                        triggerShake(element)
                        {
                        element.classList.add('shake');
                        setTimeout(()
                        =>
                        {
                        element.classList.remove('shake');
                        },
                        2000);
                        //
                        2
                        seconds
                        }
                        if
                        (title)
                        {
                        setInterval(()
                        =>
                        {
                        triggerShake(title);
                        changeColor();
                        },
                        2000);
                        //
                        2
                        seconds
                        for
                        color
                        change
                        and
                        shaking
                        }
                        if
                        (startPredictions)
                        {
                        setInterval(()
                        =>
                        {
                        triggerShake(startPredictions);
                        },
                        10000);
                        //
                        10
                        seconds
                        for
                        shaking
                        }
                        }
                        window.addEventListener('load',
                        handleShakeEffect);
                    </script>
                    <style>
                        .controls {
                            text-align: center;
                            width: 90%;
                        }

                        .controls label {
                            display: block;
                            font-size: 1.5em;
                            /* Increase font size */
                            margin-bottom: 10px;
                        }

                        .controls select {
                            width: 110%;
                            /* Make dropdowns full width */
                            padding: 20px;
                            font-size: 1.2em;
                            /* Increase font size for the dropdowns */
                            margin-bottom: 20px;
                            box-sizing: border-box;
                            /* Ensure padding and border are included in the width */
                            background-color: #080921);
                            /* Sets the background colour of dropdown list*/
                            color: rgb(255, 255, 255);
                            /* Sets the colour of dropdown list*/
                        }
                    </style>
                    <div class="controls">
                        <label for="marketSelect">Select Market</label>
                        <br><br>
                        <select id="marketSelect">
                            <option value="R_10">Volatility 10 index</option>
                            <option value="1HZ10V">Volatility 10(1s) index</option>
                            <option value="R_25">Volatility 25 index</option>
                            <option value="1HZ25V">Volatility 25(1s) index</option>
                            <option value="R_50">Volatility 50 index</option>
                            <option value="1HZ50V">Volatility 50(1s) index</option>
                            <option value="R_75">Volatility 75 index</option>1
                            <option value="1HZ75V">Volatility 75(1s) index</option>
                            <option value="R_100">Volatility 100 index</option>
                            <option value="1HZ100V">Volatility 100(1s) index</option>
                        </select> <br><br>
                        <label for="strategySelect">Signals</label>
                        <br><br>
                        <select id="strategySelect" onchange="navigateToPage()">
                            <option value="">Select an option</option>
                            <option value="trial2.html">Market Analyser</option>
                            <option value="test1.html">Over/Under Analyser</option>
                            <option value="risefall.html">Rise/Fall</option>
                            <option value="digits.html">Digits Percantage</option>
                            <!-- Other options if any -->
                        </select><br><br>
                        <label for="ticks">Select Number of Ticks:</label><br><br>
                        <select id="ticks" onchange="resetCounters()">
                            <option value="25">25 Ticks</option>
                            <option value="40">40 Ticks</option>
                            <option value="50">50 Ticks</option>
                            <option value="100">100 Ticks</option>
                            <option value="100">200 Ticks</option>
                            <option value="100">300 Ticks</option>
                            <option value="100">500 Ticks</option>
                            <option value="100">1000 Ticks</option>
                        </select>
                    </div>

                    <button id="startAnalysis">Start Analysis</button>
                    <button id="stopAnalysis">Stop Analysis</button>

                    <div id="digitBars" style="display: flex; justify-content: space-around; margin-top: 20px;">
                        <div id="bar-0" class="digit-bar" data-digit="0">0</div>
                        <div id="bar-1" class="digit-bar" data-digit="1">1</div>
                        <div id="bar-2" class="digit-bar" data-digit="2">2</div>
                        <div id="bar-3" class="digit-bar" data-digit="3">3</div>
                        <div id="bar-4" class="digit-bar" data-digit="4">4</div>
                        <div id="bar-5" class="digit-bar" data-digit="5">5</div>
                        <div id="bar-6" class="digit-bar" data-digit="6">6</div>
                        <div id="bar-7" class="digit-bar" data-digit="7">7</div>
                        <div id="bar-8" class="digit-bar" data-digit="8">8</div>
                        <div id="bar-9" class="digit-bar" data-digit="9">9</div>
                    </div>
                    <br>

                    <div id="tick-info">
                        <p id="latestTick">Latest Tick: </p>
                        <p id="digits">Digits: </p>
                    </div>
                    <br>
                    <!-- matches and differs -->
                    <div class="predictions-container">
                        <h2 class="title">Matches and Differs</h2>
                        <table class="predictions-table">
                            <tr>
                                <td>Matches</td>
                                <td id="matches-prediction">My Prediction</td>
                                <td id="matches-value" class="number-display">--</td>
                            </tr>
                            <tr>
                                <td>Differs</td>
                                <td id="differs-prediction">My Prediction</td>
                                <td id="differs-value" class="number-display">--</td>
                            </tr>
                        </table>
                        <button id="start-predictions">Start Predictions</button>
                        <button id="stop-predictions">Stop Predictions</button>
                        <p id="timer"></p>
                    </div><br>

                    <!-- end of matches and differs -->
                    <br>

                    <!-- Even and Odd Predictions -->
                    <div class="evenodd-predictions-container">
                        <h2 class="title">Even and Odd</h2><br><br>
                        <!-- Even/Odd Chart Container -->
                        <div id="evenOddChartContainer" class="chart-container">
                            <canvas id="myChart"></canvas>
                        </div><br><br>
                        <table class="predictions-table">
                            <tr>
                                <td>Even</td>
                                <td id="even-prediction">Percentage</td>
                                <td id="even-value" class="number-display">--</td>
                            </tr>
                            <tr>
                                <td>Odd</td>
                                <td id="odd-prediction">Percentage</td>
                                <td id="odd-value" class="number-display">--</td>
                            </tr>
                        </table><br><br>
                        <button id="start-even-odd-predictions">Start Even/Odd Analysis</button>
                        <button id="stop-evenodd-predictions">Stop Even/Odd Analysis</button>
                        <p id="even-odd-timer"></p>
                    </div>
                    <br>
                    <br>

                    <!-- Over and Under Predictions -->
                    <div class="over-under-predictions-container">
                        <h2 class="title">Over and Under</h2><br><br>

                        <div id="slidingListContainer">
                            <div id="slidingList"></div>
                        </div>


                        <!-- Over/Under Chart Container -->
                        <div id="overUnderChartContainer" class="chart-container">
                            <canvas id="overUnderChart"></canvas>
                        </div><br><br>
                        <table class="predictions-table">
                            <tr>
                                <td>Over</td>
                                <td id="over-prediction">Percentage</td>
                                <td id="over-value" class="number-display">--</td>
                            </tr>
                            <tr>
                                <td>Under</td>
                                <td id="under-prediction">Percentage</td>
                                <td id="under-value" class="number-display">--</td>
                            </tr>
                        </table><br><br>
                        <button id="start-over-under-predictions">Start Predictions</button>
                        <button id="stop-over-under-predictions">Stop Predictions</button>
                        <p id="over-under-timer"></p>
                    </div>

                    <br>
                    <br>
                    <!-- Percentage Chart Container (always visible) -->
                    <h2 class="title">Digits Percentage</h2>
                    <div id="percentageChartContainer">
                        <canvas id="percentageChart"></canvas>
                    </div>

                    <div class="timecode" id="timecode"></div>
                    <script src="../cdn.jsdelivr.net/npm/chart.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
                    <script>
                        const appId = '63213'; // Replace with your actual app_id
                        const ws = new WebSocket(`wss://ws.binaryws.com/websockets/v3?app_id=${appId}`);

                        let isSubscribed = false;
                        let evenData = 0;
                        let oddData = 0;
                        let overData = 0;
                        let underData = 0;
                        let chart;
                        let percentageChart;
                        let overUnderChart;
                        let digitCounts = Array(10).fill(0); // To store counts of each digit
                        let totalTicks = 0;

                        // WebSocket event handlers
                        ws.onopen = function() {
                            console.log('Connected to WebSocket');
                        };

                        ws.onmessage = function(event) {
                            const data = JSON.parse(event.data);

                            if (data.msg_type === 'tick') {
                                updateData(data);
                            }
                        };

                        ws.onerror = function(error) {
                            console.error('WebSocket Error:', error);
                        };

                        ws.onclose = function() {
                            console.log('WebSocket connection closed');
                        };

                        // Start Analysis Button
                        document.getElementById('startAnalysis').addEventListener('click', function() {
                            const market = document.getElementById('marketSelect').value;

                            if (!market) {
                                console.error('Please select a market.');
                                return;
                            }

                            if (!isSubscribed) {
                                ws.send(JSON.stringify({
                                    "ticks": market,
                                    "subscribe": 1
                                }));
                                isSubscribed = true;
                                console.log(`Started analysis for market: ${market}`);
                            }
                        });

                        // Stop Analysis Button
                        document.getElementById('stopAnalysis').addEventListener('click', function() {
                            if (isSubscribed) {
                                ws.send(JSON.stringify({
                                    "ticks": "",
                                    "unsubscribe": 1
                                }));
                                isSubscribed = false;
                                console.log('Stopped analysis');
                            }

                            // Force the page to reload
                            setTimeout(() => {
                                location.reload(true);
                            }, 100);
                        });

                        function navigateToPage() {
                            var selectElement = document.getElementById("strategySelect");
                            var selectedValue = selectElement.value;
                            if (selectedValue) {
                                window.location.href = selectedValue;
                            }
                        }


                        // Mapping of market types to decimal places
                        const decimalPlaces = {
                            'R_10': 3,
                            '1HZ10V': 2,
                            'R_25': 3,
                            '1HZ25V': 2,
                            'R_50': 4,
                            '1HZ50V': 23,
                            'R_75': 4,
                            '1HZ75V': 2,
                            'R_100': 2,
                            '1HZ100V': 2
                        };

                        // Function to update the digits and tick display
                        function updateData(data) {
                            const market = document.getElementById('marketSelect').value; // Get the selected market
                            const places = decimalPlaces[market] || 3; // Default to 3 decimal places if market is not in the map

                            const tick = data.tick.quote;
                            const tickStr = tick.toFixed(places); // Use the appropriate number of decimal places
                            const lastDigit = parseInt(tickStr[tickStr.length - 1]); // Get the last decimal digit

                            document.getElementById('latestTick').innerText = `Latest Tick: ${tick}`;
                            document.getElementById('digits').innerText = `Digits: ${lastDigit}`;

                            // Update digit counts
                            digitCounts[lastDigit]++;
                            totalTicks++;

                            if (lastDigit % 2 === 0) {
                                evenData = lastDigit;
                            } else {
                                oddData = lastDigit;
                            }

                            // Update the chart data and render the charts
                            updateChart(lastDigit);
                            highlightDigitBar(lastDigit);
                            updatePercentageChart();
                            updateOverUnderChart(lastDigit); // Update the Over/Under chart
                        }

                        // Highlight the corresponding digit bar
                        function highlightDigitBar(digit) {
                            document.querySelectorAll('.digit-bar').forEach(bar => {
                                const barDigit = bar.getAttribute('data-digit');
                                const isHighlight = parseInt(barDigit) === digit;

                                if (isHighlight) {
                                    bar.classList.add('highlight');
                                    bar.classList.add('arrow');
                                } else {
                                    bar.classList.remove('highlight');
                                    bar.classList.remove('arrow');
                                }
                            });

                            let chart;
                            let evenData = 0;
                            let oddData = 0;

                            // Initialize and update even/odd bar chart
                            function updateChart(lastDigit) {
                                // Update the respective data based on the last digit value
                                if (lastDigit % 2 === 0) {
                                    evenData = lastDigit;
                                    oddData = 0; // Set Odd data to 0 when it's an Even digit
                                    addToSlidingList('E'); // Add "E" for Even number
                                } else {
                                    oddData = lastDigit;
                                    evenData = 0; // Set Even data to 0 when it's an Odd digit
                                    addToSlidingList('O'); // Add "O" for Odd number
                                }

                                if (!chart) {
                                    const ctx = document.getElementById('myChart').getContext('2d');
                                    chart = new Chart(ctx, {
                                        type: 'bar',
                                        data: {
                                            labels: ['Even', 'Odd'], // X-axis categories
                                            datasets: [{
                                                label: 'Even/Odd',
                                                data: [evenData, oddData], // Data for Even and Odd
                                                backgroundColor: ['rgba(0, 255, 0, 0.5)',
                                                'rgba(255, 0, 0, 0.5)'], // Green for Even, Red for Odd
                                                borderColor: ['rgba(0, 255, 0, 1)', 'rgba(255, 0, 0, 1)'],
                                                borderWidth: 1
                                            }]
                                        },
                                        options: {
                                            responsive: true,
                                            maintainAspectRatio: false,
                                            scales: {
                                                x: {
                                                    stacked: false, // Disable stacking to show individual bars
                                                },
                                                y: {
                                                    beginAtZero: true,
                                                    stacked: false, // Disable stacking to show individual bars
                                                    ticks: {
                                                        stepSize: 1,
                                                        max: 9 // Set the maximum value for the y-axis
                                                    }
                                                }
                                            },
                                            plugins: {
                                                datalabels: {
                                                    display: true,
                                                    color: 'orange',
                                                    anchor: 'end',
                                                    align: 'top',
                                                    formatter: function(value) {
                                                        return value > 0 ? value : ''; // Display only positive values
                                                    }
                                                }
                                            }
                                        },
                                        plugins: [ChartDataLabels]
                                    });
                                } else {
                                    // Update the data for the existing chart
                                    chart.data.datasets[0].data[0] = evenData; // Update Even data
                                    chart.data.datasets[0].data[1] = oddData; // Update Odd data
                                    chart.update();
                                }
                            }

                            // Function to add the digit to the sliding list
                            function addToSlidingList(label) {
                                const listContainer = document.getElementById('slidingList');
                                const listItem = document.createElement('div');

                                listItem.textContent = label;
                                listItem.classList.add('sliding-item', label === 'E' ? 'even-item' : 'odd-item');

                                // Append the new item to the container
                                listContainer.appendChild(listItem);

                                // Keep the list scrolling by removing the first item after it slides out
                                if (listContainer.children.length > 20) {
                                    listContainer.removeChild(listContainer.firstChild);
                                }
                            }


                        } // Initialize and update even/odd bar chart
                        function updateChart(lastDigit) {
                            // Update the respective data based on the last digit value
                            if (lastDigit % 2 === 0) {
                                evenData = lastDigit;
                                oddData = 0; // Set Odd data to 0 when it's an Even digit
                            } else {
                                oddData = lastDigit;
                                evenData = 0; // Set Even data to 0 when it's an Odd digit
                            }

                            if (!chart) {
                                const ctx = document.getElementById('myChart').getContext('2d');
                                chart = new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: ['Even', 'Odd'], // X-axis categories
                                        datasets: [{
                                            label: 'Even/Odd',
                                            data: [evenData, oddData], // Data for Even and Odd
                                            backgroundColor: ['rgba(0, 255, 0, 0.5)',
                                            'rgba(255, 0, 0, 0.5)'], // Green for Even, Red for Odd
                                            borderColor: ['rgba(0, 255, 0, 1)', 'rgba(255, 0, 0, 1)'],
                                            borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        responsive: true,
                                        maintainAspectRatio: false,
                                        scales: {
                                            x: {
                                                stacked: false, // Disable stacking to show individual bars
                                            },
                                            y: {
                                                beginAtZero: true,
                                                stacked: false, // Disable stacking to show individual bars
                                                ticks: {
                                                    stepSize: 1,
                                                    max: 9 // Set the maximum value for the y-axis
                                                }
                                            }
                                        },
                                        plugins: {
                                            datalabels: {
                                                display: true,
                                                color: 'orange',
                                                anchor: 'end',
                                                align: 'top',
                                                formatter: function(value) {
                                                    return value > 0 ? value : ''; // Display only positive values
                                                }
                                            }
                                        }
                                    },
                                    plugins: [ChartDataLabels]
                                });
                            } else {
                                // Update the data for the existing chart
                                chart.data.datasets[0].data[0] = evenData; // Update Even data
                                chart.data.datasets[0].data[1] = oddData; // Update Odd data
                                chart.update();
                            }
                        }




                        // Initialize and update the Over/Under chart
                        function updateOverUnderChart(lastDigit) {
                            // Update the respective data based on the digit value
                            if (lastDigit >= 0 && lastDigit <= 4) {
                                underData = lastDigit;
                            } else if (lastDigit >= 5 && lastDigit <= 9) {
                                overData = lastDigit;
                            }

                            if (!overUnderChart) {
                                const ctx = document.getElementById('overUnderChart').getContext('2d');
                                overUnderChart = new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: ['Under(4-0)', 'Over(5-9)'], // X-axis categories
                                        datasets: [{
                                            label: 'Over/Under',
                                            data: [underData, overData], // Data for Under and Over
                                            backgroundColor: ['rgba(255, 0, 0, 0.5)',
                                            'rgba(0, 255, 0, 0.5)'], // Red for Under, Green for Over
                                            borderColor: ['rgba(255, 0, 0, 1)', 'rgba(0, 255, 0, 1)'],
                                            borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        responsive: true,
                                        maintainAspectRatio: false,
                                        scales: {
                                            x: {
                                                stacked: true,

                                            },
                                            y: {
                                                beginAtZero: true,
                                                stacked: true,
                                                ticks: {
                                                    stepSize: 1,
                                                    max: 9 // Set the maximum value for the y-axis
                                                }
                                            }
                                        },
                                        plugins: {
                                            datalabels: {
                                                display: true,
                                                color: 'orange',
                                                anchor: 'end',
                                                align: 'top',
                                                formatter: function(value) {
                                                    return value > 0 ? value : '';
                                                }
                                            }
                                        }
                                    },
                                    plugins: [ChartDataLabels]
                                });
                            } else {
                                // Update the data for existing chart
                                overUnderChart.data.datasets[0].data[0] = underData; // Update Under data
                                overUnderChart.data.datasets[0].data[1] = overData; // Update Over data
                                overUnderChart.update();
                            }
                        }

                        // Initialize and update the percentage chart
                        function updatePercentageChart() {
                            if (!percentageChart) {
                                const ctx = document.getElementById('percentageChart').getContext('2d');
                                percentageChart = new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: Array.from({
                                            length: 10
                                        }, (_, i) => i),
                                        datasets: [{
                                            label: 'Percentage',
                                            data: digitCounts.map(count => (count / totalTicks) * 100 || 0),
                                            backgroundColor: (context) => {
                                                const index = context.dataIndex;
                                                const percentage = context.dataset.data[index];
                                                const maxPercentage = Math.max(...context.dataset.data);
                                                const minPercentage = Math.min(...context.dataset.data);

                                                if (percentage === maxPercentage)
                                            return 'rgba(0, 255, 0, 0.5)'; // Green for highest
                                                if (percentage === minPercentage)
                                            return 'rgba(255, 0, 0, 0.5)'; // Red for lowest
                                                return 'rgba(200, 200, 200, 0.8)'; // Default color
                                            },
                                            borderColor: 'rgba(0, 0, 0, 1)',
                                            borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        responsive: true,
                                        maintainAspectRatio: false,
                                        scales: {
                                            x: {
                                                beginAtZero: true
                                            },
                                            y: {
                                                beginAtZero: true,
                                                ticks: {
                                                    stepSize: 10
                                                }
                                            }
                                        },
                                        plugins: {
                                            datalabels: {
                                                display: true,
                                                color: 'orange',
                                                anchor: 'end',
                                                align: 'top',
                                                formatter: function(value) {
                                                    return value.toFixed(1) + '%';
                                                }
                                            }
                                        }
                                    },
                                    plugins: [ChartDataLabels]
                                });
                            } else {
                                percentageChart.data.datasets[0].data = digitCounts.map(count => (count / totalTicks) * 100 || 0);
                                percentageChart.update();
                            }
                        }


                        // Show or hide charts based on selected strategy
                        document.getElementById('strategySelect').addEventListener('change', function() {
                            const strategy = this.value;
                            const evenOddContainer = document.getElementById('evenOddChartContainer');
                            const overUnderContainer = document.getElementById('overUnderChartContainer');

                            if (strategy === 'evenOdd') {
                                evenOddContainer.classList.add('active');
                                overUnderContainer.classList.remove('active');
                            } else if (strategy === 'overUnder') {
                                evenOddContainer.classList.remove('active');
                                overUnderContainer.classList.add('active');
                            }
                        });

                        // Initialize the first chart visibility based on the default selection
                        document.getElementById('strategySelect').dispatchEvent(new Event('change'));


                        // Matches And Differs Initialization
                        let predictionInterval;

                        document.getElementById('start-predictions').addEventListener('click', startPredictions);
                        document.getElementById('stop-predictions').addEventListener('click', stopPredictions);

                        function startPredictions() {
                            let countdown = 30;
                            const timerElement = document.getElementById('timer');
                            const matchesPredictionElement = document.getElementById('matches-prediction');
                            const differsPredictionElement = document.getElementById('differs-prediction');
                            const tickCountElement = document.getElementById(
                            'tick-count'); // Assuming you have an input for the number of ticks

                            const numberOfTicks = parseInt(tickCountElement.value) || 30; // Number of ticks to analyze
                            let ticksCollected = 0; // Count of ticks collected

                            let digitsCount = new Array(10).fill(0); // Array to keep track of the digit occurrences

                            predictionInterval = setInterval(() => {
                                timerElement.textContent = `Time Remaining: ${countdown} sec`;

                                // Assuming 'getLatestDigit()' fetches the latest digit from your tick data
                                let latestDigit = getLatestDigit();
                                digitsCount[latestDigit]++;
                                ticksCollected++;

                                if (ticksCollected >= numberOfTicks) {
                                    // Find the digit that appeared the most (Matches Prediction)
                                    let mostFrequentDigit = digitsCount.indexOf(Math.max(...digitsCount));
                                    matchesPredictionElement.textContent = mostFrequentDigit;

                                    // Find the digit that appeared the least (Differs Prediction)
                                    let leastFrequentDigit = digitsCount.indexOf(Math.min(...digitsCount.filter(digit => digit >
                                        0))); // Ensure it's an occurring digit
                                    differsPredictionElement.textContent = leastFrequentDigit;

                                    // Display "Won" under Matches if the most frequent digit appeared during the countdown
                                    if (digitsCount[mostFrequentDigit] > 0) {
                                        matchesPredictionElement.textContent += ' (Won)';
                                    }

                                    // Display "Won" under Differs if the least frequent digit appeared during the countdown
                                    if (digitsCount[leastFrequentDigit] > 0) {
                                        differsPredictionElement.textContent += ' (Won)';
                                    }

                                    // Reset for the next prediction
                                    countdown = 30; // Reset the countdown
                                    digitsCount.fill(0); // Reset the digits count
                                    ticksCollected = 0; // Reset the tick count
                                }

                                countdown--;

                                if (countdown === 0) {
                                    countdown = 30; // Reset countdown every 30 seconds
                                }
                            }, 1000);
                        }

                        // Timer for predictions
                        let timerInterval;
                        document.getElementById('start-predictions').addEventListener('click', function() {
                            let timeLeft = 30;
                            document.getElementById('timer').textContent = `Time left: ${timeLeft} seconds`;

                            timerInterval = setInterval(function() {
                                timeLeft--;
                                document.getElementById('timer').textContent = `Time left: ${timeLeft} seconds`;

                                if (timeLeft <= 0) {
                                    clearInterval(timerInterval);
                                    document.getElementById('timer').textContent = 'Match Now!';

                                    // Times up Cowntdown

                                    function startCountdown10Sec() {
                                        let countdown10Sec = 10;
                                        const timerElement = document.getElementById('timer');

                                        countdownInterval = setInterval(() => {
                                            timerElement.textContent = `Time Left: ${countdown10Sec} sec`;
                                            countdown10Sec--;

                                            if (countdown10Sec < 0) {
                                                clearInterval(countdownInterval);
                                                document.getElementById('timer').textContent = 'Time is up!';
                                            }
                                        }, 1000);
                                    }

                                    // Calculate and display Matches and Differs
                                    const maxDigit = digitCounts.indexOf(Math.max(...digitCounts));
                                    const minDigit = digitCounts.indexOf(Math.min(...digitCounts));

                                    document.getElementById('matches-value').textContent = `${maxDigit} (Won)`;
                                    document.getElementById('differs-value').textContent = `${minDigit} (Won)`;
                                    // Reset digit counts for the next round
                                    digitCounts.fill(0);

                                }
                            }, 1000); // Decrease every second
                        });

                        document.getElementById('stop-predictions').addEventListener('click', function() {
                            clearInterval(timerInterval);
                            clearInterval(predictionInterval);
                            document.getElementById('timer').textContent = 'Predictions stopped.';
                        });

                        function stopPredictions() {
                            clearInterval(timerInterval);
                            document.getElementById('timer').textContent = 'Predictions Stopped';
                        }

                        function getLatestDigit() {
                            // Replace this with the actual method to fetch the latest digit
                            return Math.floor(Math.random() * 10); // Random digit between 0-9 for demonstration
                        }

                        // Example function to simulate collecting ticks and updating digit counts
                        function collectTicks() {
                            setInterval(() => {
                                let latestDigit = getLatestDigit();
                                digitCounts[latestDigit]++;
                            }, 1000); // Simulate collecting a new tick every second
                        }

                        // Initialize variables for the Even and Odd Predictions functionality
                        let evenOddPredictionInterval;

                        document.getElementById('start-even-odd-predictions').addEventListener('click', startEvenOddPredictions);
                        document.getElementById('stop-evenodd-predictions').addEventListener('click', stopEvenOddPredictions);

                        function startEvenOddPredictions() {
                            // Disable start button to prevent multiple intervals running
                            document.getElementById('start-even-odd-predictions').disabled = true;
                            document.getElementById('stop-evenodd-predictions').disabled = false;

                            const evenPredictionElement = document.getElementById('even-value');
                            const oddPredictionElement = document.getElementById('odd-value');
                            let evenCount = 0; // Count of even digits
                            let oddCount = 0; // Count of odd digits
                            let totalDigits = 0; // Total digits collected

                            // Prediction logic that collects digits and updates the percentage live
                            evenOddPredictionInterval = setInterval(() => {
                                let latestDigit = getLatestDigit(); // Fetch latest digit
                                totalDigits++; // Increment total digits count

                                if (latestDigit % 2 === 0) {
                                    evenCount++;
                                } else {
                                    oddCount++;
                                }

                                // Calculate percentages
                                const evenPercentage = totalDigits > 0 ? (evenCount / totalDigits * 100).toFixed(2) : 0;
                                const oddPercentage = totalDigits > 0 ? (oddCount / totalDigits * 100).toFixed(2) : 0;

                                // Display live percentages in the table
                                evenPredictionElement.textContent = `Even: ${evenPercentage}%`;
                                oddPredictionElement.textContent = `Odd: ${oddPercentage}%`;

                            }, 1000); // Simulate collecting a new tick every second
                        }

                        function stopEvenOddPredictions() {
                            clearInterval(evenOddPredictionInterval);
                            document.getElementById('even-odd-timer').textContent = 'Analysis Stopped.';
                            document.getElementById('start-even-odd-predictions').disabled = false;
                            document.getElementById('stop-evenodd-predictions').disabled = true;
                        }

                        // Example function to simulate fetching the latest digit (replace with actual logic)
                        function getLatestDigit() {
                            return Math.floor(Math.random() * 10); // Random digit between 0-9 for demonstration
                        }

                        // Initialize buttons to ensure correct initial state
                        document.getElementById('start-even-odd-predictions').disabled = false;
                        document.getElementById('stop-evenodd-predictions').disabled = true;


                        // Initialize variables for the Over and Under Predictions functionality
                        let overUnderPredictionInterval;

                        document.getElementById('start-over-under-predictions').addEventListener('click', startOverUnderPredictions);
                        document.getElementById('stop-over-under-predictions').addEventListener('click', stopOverUnderPredictions);

                        function startOverUnderPredictions() {
                            // Disable start button to prevent multiple intervals running
                            document.getElementById('start-over-under-predictions').disabled = true;
                            document.getElementById('stop-over-under-predictions').disabled = false;

                            const overPredictionElement = document.getElementById('over-value');
                            const underPredictionElement = document.getElementById('under-value');
                            let overCount = 0; // Count of over digits (5-9)
                            let underCount = 0; // Count of under digits (0-4)
                            let totalDigits = 0; // Total digits collected

                            // Prediction logic that collects digits and updates the percentage live
                            overUnderPredictionInterval = setInterval(() => {
                                let latestDigit = getLatestDigit(); // Fetch latest digit
                                totalDigits++; // Increment total digits count

                                if (latestDigit >= 5) {
                                    overCount++;
                                } else {
                                    underCount++;
                                }

                                // Calculate percentages
                                const overPercentage = totalDigits > 0 ? (overCount / totalDigits * 100).toFixed(2) : 0;
                                const underPercentage = totalDigits > 0 ? (underCount / totalDigits * 100).toFixed(2) : 0;

                                // Display live percentages in the table
                                overPredictionElement.textContent = `Over: ${overPercentage}%`;
                                underPredictionElement.textContent = `Under: ${underPercentage}%`;

                            }, 1000); // Simulate collecting a new tick every second
                        }

                        function stopOverUnderPredictions() {
                            clearInterval(overUnderPredictionInterval);
                            document.getElementById('over-under-timer').textContent = 'Analysis Stopped.';
                            document.getElementById('start-over-under-predictions').disabled = false;
                            document.getElementById('stop-over-under-predictions').disabled = true;
                        }

                        // Example function to simulate fetching the latest digit (replace with actual logic)
                        function getLatestDigit() {
                            return Math.floor(Math.random() * 10); // Random digit between 0-9 for demonstration
                        }

                        // Initialize buttons to ensure correct initial state
                        document.getElementById('start-over-under-predictions').disabled = false;
                        document.getElementById('stop-over-under-predictions').disabled = true;

                        function updateTime() {
                            const timecodeElement = document.getElementById("timecode");
                            const now = new Date();
                            const hours = String(now.getHours()).padStart(2, '0');
                            const minutes = String(now.getMinutes()).padStart(2, '0');
                            const seconds = String(now.getSeconds()).padStart(2, '0');
                            timecodeElement.textContent = `${hours}:${minutes}:${seconds}`;
                        }

                        setInterval(updateTime, 1000);
                        updateTime(); // Initial call to display the time immediately

                        //Initialize Timer Clock
                        function updateTime() {
                            const timecodeElement = document.getElementById("timecode");

                            const now = new Date();

                            // Get GMT time
                            const gmtHours = String(now.getUTCHours()).padStart(2, '0');
                            const gmtMinutes = String(now.getUTCMinutes()).padStart(2, '0');
                            const gmtSeconds = String(now.getUTCSeconds()).padStart(2, '0');
                            const gmtTime = `GMT: ${gmtHours}:${gmtMinutes}:${gmtSeconds}`;

                            // Get EAT time (EAT is UTC+3)
                            const eatTime = new Date(now.getTime() + 3 * 60 * 60 * 1000);
                            const eatHours = String(eatTime.getUTCHours()).padStart(2, '0');
                            const eatMinutes = String(eatTime.getUTCMinutes()).padStart(2, '0');
                            const eatSeconds = String(eatTime.getUTCSeconds()).padStart(2, '0');
                            const eatTimeString = `EAT: ${eatHours}:${eatMinutes}:${eatSeconds}`;

                            // Display both times
                            timecodeElement.textContent = `${eatTimeString} | ${gmtTime}`;
                        }

                        setInterval(updateTime, 1000);
                        updateTime(); // Initial call to display the time immediately
                    </script>
                    <iframe src="https://www.google.com/recaptcha/api2/aframe" width="0" height="0"
                        style="display: none;"
                        bis_size="{&quot;x&quot;:0,&quot;y&quot;:0,&quot;w&quot;:0,&quot;h&quot;:0,&quot;abs_x&quot;:0,&quot;abs_y&quot;:0}"></iframe>
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
