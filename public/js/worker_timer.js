let intervalId = null;
let remainingTime = null;

self.addEventListener(
    "message",
    function (e) {
        const message = e.data;
        if (
            typeof message === "object" &&
            message.action === "play" &&
            typeof message.value === "number" &&
            message.value > 0
        ) {
            console.log("worker ping");
            remainingTime = message.value;
            if (remainingTime !== null) {
                console.log("workerlevel 1");
                console.log("workerlevel 2");
                // Check if timer is not already running
                intervalId = setInterval(function () {
                    remainingTime--;
                    if (remainingTime === 0) {
                        clearInterval(intervalId);
                        self.postMessage("Done");
                    } else {
                        self.postMessage(remainingTime);
                    }
                }, 1000);
            }
        } else if (message.action === "pause") {
            if (intervalId !== null) {
                clearInterval(intervalId);
                intervalId = null;
            }
        }
    },
    false
);
