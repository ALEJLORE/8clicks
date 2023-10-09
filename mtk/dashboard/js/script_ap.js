document.addEventListener("DOMContentLoaded", function () {
    const statusElement = document.getElementById("status_ap");
    const resultElement = document.getElementById("result_ap");

    function getColorCode(time) {
        if (time < 50) {
            return "green"; // Fast response, color it green
        } else if (time < 100) {
            return "orange"; // Medium response time, color it orange
        } else {
            return "red"; // Slow response time, color it red
        }
    }

    function ping() {
        const xhr = new XMLHttpRequest();
        xhr.open("GET", "ping_ap.php", true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                const response = JSON.parse(xhr.responseText);
                statusElement.textContent = `Status: ${response.status}`;
                if (response.status === "Online") {
                    let pingDetails = '';
                    response.responses.forEach(response => {
                        const colorCode = getColorCode(response.time);
                        pingDetails += `<span style="color: ${colorCode};">Ping ${response.seq}: ${response.time}ms</span><br>`;
                    });
                    resultElement.innerHTML = pingDetails;
                } else {
                    resultElement.textContent = "";
                }
            }
        };
        xhr.send();
    }

    setInterval(ping, 1000);
});


document.addEventListener("DOMContentLoaded", function () {
    const statusElement = document.getElementById("status");
    const resultElement = document.getElementById("result");

    function getColorCode(time) {
        if (time < 50) {
            return "green"; // Fast response, color it green
        } else if (time < 100) {
            return "orange"; // Medium response time, color it orange
        } else {
            return "red"; // Slow response time, color it red
        }
    }

    function ping_balancer() {
        const xhr = new XMLHttpRequest();
        xhr.open("GET", "ping_balancer.php", true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                const response = JSON.parse(xhr.responseText);
                statusElement.textContent = `Status: ${response.status}`;
                if (response.status === "Online") {
                    let pingDetails = '';
                    response.responses.forEach(response => {
                        const colorCode = getColorCode(response.time);
                        pingDetails += `<span style="color: ${colorCode};">Ping ${response.seq}: ${response.time}ms</span><br>`;
                    });
                    resultElement.innerHTML = pingDetails;
                } else {
                    resultElement.textContent = "";
                }
            }
        };
        xhr.send();
    }

    setInterval(ping, 1000);
});


