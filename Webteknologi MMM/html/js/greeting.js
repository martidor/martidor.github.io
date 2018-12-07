function displayTime() {
	var clk = document.getElementById("clock");  // Find element with id="clock"
	var msg = document.getElementById("message");

	var now = new Date();                        // Get current time
	var hours = now.getHours();
	var minutes = now.getMinutes();
	var seconds = now.getSeconds();

	if (hours <= 5) {
		msg.innerHTML = "God natt!";
	}
	else if (hours <= 12) {
		msg.innerHTML = "God morgen!";
	}
	else if (hours <= 16) {
		msg.innerHTML = "God dag!";
	}
	else if (hours <= 19) {
		msg.innerHTML = "God ettermiddag!";
	}
	else if (hours <= 22) {
		msg.innerHTML = "God kveld!";
	}
	else {
		msg.innerHTML = "God natt!";
	}

	if (seconds < 10) {
		seconds = "0" + seconds;
	}

	if (minutes < 10) {
		minutes = "0" + minutes;
	}

	if (hours < 10) {
		hours = "0" + hours;
	}

	clk.innerHTML = hours + ":" + minutes + ":" + seconds;    // Make clk display it
	setTimeout(displayTime, 995);               // Run again in 1 second

}

window.onload = displayTime;  // Start displaying the time when document loads.