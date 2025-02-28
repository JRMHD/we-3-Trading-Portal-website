<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Digit History</title>
        <style>
            body {
                font-family: "Roboto", sans-serif;
                margin: 0;
                padding: 0;
                background-color: #0b0f1a;
                color: #fff;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                height: 100vh;
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

            .title {
                color: red;
                font-size: 24px;
                font-weight: bold;
                font-family: "Roboto", sans-serif;
                margin-bottom: 20px;
            }

            .dropdown,
            .tick-input {
                background-color: #000000;
                color: #3106f9;
                padding: 10px;
                font-size: 16px;
                border-radius: 10px;
                border: 1px solid #000000;
                width: 100%;
                max-width: 300px;
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

            .digit-circle-container {
                padding-left: 0px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-top: 20px;
                width: 100%;
                max-width: 500px;
            }

            /* Changed the style for digit boxes instead of circles */
            .digit-circle {
                width: 1000px;
                height: 60px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                font-size: 18px;
                font-weight: bold;
                border-radius: 5px;
                background-color: #e7000094;
                color: #000000;
                margin: 5px;
                border: 2px solid #e60606;
                position: relative;
            }

            .digit-percentage {
                font-size: 9px;
                color: #00ff00; /* Green percentage color */
                margin-top: 3px;
            }

            /* When a digit box is highlighted */
            .highlight {
                border-color: #00ff00;
                color: #00ff00;
            }

            /* Adjusted arrow color to green */
            .arrow {
                width: 0;
                height: 0;
                border-left: 10px solid transparent;
                border-right: 10px solid transparent;
                border-top: 15px solid #00ff00;
                position: absolute;
                bottom: -20px;
                left: 50%;
                transform: translateX(-50%);
                display: none;
            }
        </style>
        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const appId = "66860";
                const tickSocketUrl = `wss://ws.binaryws.com/websockets/v3?app_id=${appId}`;
                let tickSocket = null;
                const marketDropdown = document.getElementById("market");
                const latestTickElem = document.getElementById("latest-tick");
                const lastDigitElem = document.getElementById("last-digit");
                const tickInput = document.getElementById("tick-count");
                const digitCircleContainer = document.getElementById(
                    "digit-circle-container"
                );
                let tickHistory = [];
                let tickLimit = 100;

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
                                const quote = data.tick.quote.toFixed(
                                    data.tick.pip_size
                                );
                                const lastDigit = parseInt(quote.slice(-1));

                                latestTickElem.textContent = `Latest Tick: ${quote}`;
                                lastDigitElem.textContent = `Last Digit: ${lastDigit}`;

                                tickHistory.push(lastDigit);
                                if (tickHistory.length > tickLimit) {
                                    tickHistory.shift();
                                }

                                updateDigitPercentage();
                                highlightDigit(lastDigit);
                            }
                        };

                        tickSocket.onerror = (error) => {
                            console.error("WebSocket error:", error);
                        };

                        tickSocket.onclose = () => {
                            console.log("WebSocket connection closed");
                        };
                    } else {
                        latestTickElem.textContent = "Latest Tick: --";
                        lastDigitElem.textContent = "Last Digit: --";
                    }
                });

                tickInput.addEventListener("input", () => {
                    const value = parseInt(tickInput.value);
                    if (!isNaN(value) && value > 0) {
                        tickLimit = value;
                        updateDigitPercentage();
                    }
                });

                function updateDigitPercentage() {
                    const counts = Array(10).fill(0);
                    tickHistory.forEach((digit) => counts[digit]++);

                    digitCircleContainer.childNodes.forEach((circle, index) => {
                        const percentage = (
                            (counts[index] / tickHistory.length) *
                            100
                        ).toFixed(1);
                        circle.querySelector(".digit-percentage").textContent =
                            tickHistory.length ? `${percentage}%` : "--%";
                    });
                }

                function highlightDigit(digit) {
                    digitCircleContainer.childNodes.forEach((circle, index) => {
                        if (index === digit) {
                            circle.classList.add("highlight");
                            circle.querySelector(".arrow").style.display =
                                "block";
                        } else {
                            circle.classList.remove("highlight");
                            circle.querySelector(".arrow").style.display =
                                "none";
                        }
                    });
                }

                for (let i = 0; i < 10; i++) {
                    const digitCircle = document.createElement("div");
                    digitCircle.classList.add("digit-circle");
                    digitCircle.innerHTML = `<div>${i}</div><div class="digit-percentage">--%</div>`;

                    const arrow = document.createElement("div");
                    arrow.classList.add("arrow");
                    digitCircle.appendChild(arrow);

                    digitCircleContainer.appendChild(digitCircle);
                }
            });
        </script>
    </head>
    <body>
        <div class="container">
            <div class="title">Digits</div>
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

            <input
                type="number"
                id="tick-count"
                class="tick-input"
                placeholder="Number of Ticks"
                min="1"
                value="100"
            />

            <div id="latest-tick-container">
                <p id="latest-tick">Latest Tick: --</p>
                <p id="last-digit">Last Digit: --</p>
            </div>

            <div
                id="digit-circle-container"
                class="digit-circle-container"
            ></div>
        </div>
    </body>
</html>
