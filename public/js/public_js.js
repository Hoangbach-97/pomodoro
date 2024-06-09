const worker = new Worker("js/worker_timer.js");

document.querySelector("#pomo-time").value = window.localStorage.getItem("pomo")
    ? window.localStorage.getItem("pomo")
    : 25;
document.querySelector("#short-time").value = window.localStorage.getItem(
    "short"
)
    ? window.localStorage.getItem("short")
    : 5;
document.querySelector("#long-time").value = window.localStorage.getItem("long")
    ? window.localStorage.getItem("long")
    : 15;

var _timer = 0;
var countFocus = 0;
var countShort = 0;
var countLong = 0;
var displayFrame;

// let isPlaying = false;

var minuteFocusFrame = document.getElementById("parent-frame-time-focus-id");
var minuteShortFrame = document.getElementById("parent-frame-time-short-id");
var minuteLongFrame = document.getElementById("parent-frame-time-long-id");

function handleWorker(e) {
    if (window.getComputedStyle(minuteFocusFrame).display != "none") {
        displayFrame = document.querySelector("#time-js-focus");
    } else if (window.getComputedStyle(minuteShortFrame).display != "none") {
        displayFrame = document.querySelector("#time-js-short");
    } else if (window.getComputedStyle(minuteLongFrame).display != "none") {
        displayFrame = document.querySelector("#time-js-long");
    }
    if (e.data === "Done") {
        // isPlaying = false;

        startCountFocus();
        startCountLong();
        startCountShort();
        document.getElementById("sound_finish").play();

        if (window.getComputedStyle(minuteFocusFrame).display != "none") {
            countFocus++;
            document.getElementById("btn-pause").style.display = "none";
            document.getElementById("btn-play").style.display = "inline";

            // Automatically change to short count <=4

            if (countFocus < 4) {
                document.getElementById("focus-btn").style.opacity = 0.5;
                document.getElementById("short-btn").style.opacity = 1;
                document.getElementById("long-btn").style.opacity = 0.5;

                document.getElementById(
                    "parent-frame-time-focus-id"
                ).style.display = "none";
                document.getElementById(
                    "parent-frame-time-short-id"
                ).style.display = "flex";
                document.getElementById(
                    "parent-frame-time-long-id"
                ).style.display = "none";

                document.body.style.backgroundColor = "#F2FFF5";
                document.getElementById("quotes").style.color = "#14401D";

                document.getElementById("btn-pause-short").style.display =
                    "none";
                document.getElementById("btn-play-short").style.display =
                    "inline";
            }

            // Automatically change to long if count >4
            if (countFocus == 4) {

                countFocus = 0; // reset
                document.getElementById("focus-btn").style.opacity = 0.5;
                document.getElementById("short-btn").style.opacity = 0.5;
                document.getElementById("long-btn").style.opacity = 1;

                document.getElementById(
                    "parent-frame-time-focus-id"
                ).style.display = "none";
                document.getElementById(
                    "parent-frame-time-short-id"
                ).style.display = "none";
                document.getElementById(
                    "parent-frame-time-long-id"
                ).style.display = "flex";

                document.body.style.backgroundColor = "#F2F9FF";
                document.getElementById("quotes").style.color = "#142D42";

                document.getElementById("btn-pause-long").style.display =
                    "none";
                document.getElementById("btn-play-long").style.display =
                    "inline";
            }
        } else if (
            window.getComputedStyle(minuteShortFrame).display != "none"
        ) {
            // displayFrame = document.querySelector("#time-js-short");
            countShort++;
            document.getElementById("btn-pause-short").style.display = "none";
            document.getElementById("btn-play-short").style.display = "inline";

            // Automatically change to focus
            if (countShort == 1) {

                countShort = 0;

                document.getElementById("focus-btn").style.opacity = 1;
                document.getElementById("short-btn").style.opacity = 0.5;
                document.getElementById("long-btn").style.opacity = 0.5;

                document.getElementById(
                    "parent-frame-time-focus-id"
                ).style.display = "flex";
                document.getElementById(
                    "parent-frame-time-short-id"
                ).style.display = "none";
                document.getElementById(
                    "parent-frame-time-long-id"
                ).style.display = "none";

                document.body.style.backgroundColor = "#FFF2F2";
                document.getElementById("quotes").style.color = "#471515";

                // clearInterval(stopPlayBtn);
                document.getElementById("btn-pause").style.display = "none";
                document.getElementById("btn-play").style.display = "inline";
            }
        } else if (window.getComputedStyle(minuteLongFrame).display != "none") {
            // displayFrame = document.querySelector("#time-js-long");
            countLong++;

            document.getElementById("btn-pause-long").style.display = "none";
            document.getElementById("btn-play-long").style.display = "inline";

            // Automatically change to focus
            if (countLong == 1) {
                countLong = 0;

                document.getElementById("focus-btn").style.opacity = 1;
                document.getElementById("short-btn").style.opacity = 0.5;
                document.getElementById("long-btn").style.opacity = 0.5;

                document.getElementById(
                    "parent-frame-time-focus-id"
                ).style.display = "flex";
                document.getElementById(
                    "parent-frame-time-short-id"
                ).style.display = "none";
                document.getElementById(
                    "parent-frame-time-long-id"
                ).style.display = "none";

                document.body.style.backgroundColor = "#FFF2F2";
                document.getElementById("quotes").style.color = "#142D42";

                document.getElementById("btn-pause").style.display = "none";
                document.getElementById("btn-play").style.display = "inline";
            }
        }
    } else if (Number.isInteger(e.data)) {
        _timer = e.data;
        var _minutes;
        var _seconds;
        _minutes = parseInt(_timer / 60, 10);
        _seconds = parseInt(_timer % 60, 10);

        _minutes = _minutes < 10 ? "0" + _minutes : _minutes;
        _seconds = _seconds < 10 ? "0" + _seconds : _seconds;

        displayFrame.textContent = _minutes + ":" + _seconds;
    }
}

// Add event listeners using the named functions
// Define the event handler function
function handleMessage(e) {
    handleWorker(e);
}

// Function to add event listener
function startTimer() {
    worker.addEventListener("message", handleMessage);
}

// Function to remove event listener
function stopTimer() {
    worker.removeEventListener("message", handleMessage);
}
startCountFocus();
startCountShort();
startCountLong();

function startCountFocus() {
    let minute = document.getElementById("pomo-time").value;
    let timer = minute * 60;
    let minutes = parseInt(timer / 60, 10);
    let seconds = parseInt(timer % 60, 10);

    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;

    let isNone = document.querySelector("#time-js-focus");
    if (window.getComputedStyle(isNone).display != "none") {
        document.querySelector("#time-js-focus").innerHTML =
            minutes + ":" + seconds;
    }
}

function startCountShort() {
    let minute = document.getElementById("short-time").value;
    let timer = minute * 60;
    let minutes = parseInt(timer / 60, 10);
    let seconds = parseInt(timer % 60, 10);

    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;

    let isNone = document.querySelector("#time-js-short");
    if (window.getComputedStyle(isNone).display != "none") {
        document.querySelector("#time-js-short").innerHTML =
            minutes + ":" + seconds;
    }
}

function startCountLong() {
    let minute = document.getElementById("long-time").value;
    let timer = minute * 60;
    let minutes = parseInt(timer / 60, 10);
    let seconds = parseInt(timer % 60, 10);

    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;

    let isNone = document.querySelector("#time-js-long");
    if (window.getComputedStyle(isNone).display != "none") {
        document.querySelector("#time-js-long").innerHTML =
            minutes + ":" + seconds;
    }
}

document.getElementById("btn-pause").addEventListener("click", stopBtn);
document.getElementById("btn-pause-short").addEventListener("click", stopBtn);
document.getElementById("btn-pause-long").addEventListener("click", stopBtn);

function stopBtn() {
    document.getElementById("sound_play_pause").play();

    if (window.getComputedStyle(minuteFocusFrame).display != "none") {
        // if (isPlaying) {
        const messFocusStop = {
            action: "pause",
            value: null,
        };
        worker.postMessage(messFocusStop);
        stopTimer();
        // isPlaying = false;
        // }
        document.getElementById("btn-pause").style.display = "none";
        document.getElementById("btn-play").style.display = "inline";
    } else if (window.getComputedStyle(minuteShortFrame).display != "none") {
        // if (isPlaying) {
        const messShortStop = {
            action: "pause",
            value: null,
        };
        worker.postMessage(messShortStop);
        stopTimer();
        // isPlaying = false;
        // }
        document.getElementById("btn-pause-short").style.display = "none";
        document.getElementById("btn-play-short").style.display = "inline";
    } else if (window.getComputedStyle(minuteLongFrame).display != "none") {
        // if (isPlaying) {
        // worker.postMessage("pause");
        const messLongStop = {
            action: "pause",
            value: null,
        };
        worker.postMessage(messLongStop);
        stopTimer();
        // isPlaying = false;
        // }
        document.getElementById("btn-pause-long").style.display = "none";
        document.getElementById("btn-play-long").style.display = "inline";
    }
}

document.getElementById("btn-play-long").addEventListener("click", playBtn);
document.getElementById("btn-play-short").addEventListener("click", playBtn);
document.getElementById("btn-play").addEventListener("click", playBtn);

function playBtn() {
    document.getElementById("sound_play_pause").play();
    var minuteFocusConvert;
    var minuteLongConvert;
    var minuteShortConvert;

    if (window.getComputedStyle(minuteFocusFrame).display != "none") {
        document.getElementById("btn-pause").style.display = "inline";
        document.getElementById("btn-play").style.display = "none";
        minuteFocusConvert = convertStringToTime(
            document.querySelector("#time-js-focus").textContent
        );

        // if (!isPlaying) {
        const enteredTimeFocus = parseInt(minuteFocusConvert);
        if (!isNaN(enteredTimeFocus) && enteredTimeFocus > 0) {
            const messFocus = {
                action: "play",
                value: enteredTimeFocus,
            };
            // isPlaying = true;
            startTimer();
            worker.postMessage(messFocus);
        } else {
            alert("Please enter a valid positive number of seconds.");
        }
        // }
    } else if (window.getComputedStyle(minuteShortFrame).display != "none") {
        document.getElementById("btn-pause-short").style.display = "inline";
        document.getElementById("btn-play-short").style.display = "none";
        minuteShortConvert = convertStringToTime(
            document.querySelector("#time-js-short").textContent
        );

        // if (!isPlaying) {
        const enteredTimeShort = parseInt(minuteShortConvert);
        if (!isNaN(enteredTimeShort) && enteredTimeShort > 0) {
            const messShort = {
                action: "play",
                value: enteredTimeShort,
            };
            startTimer();
            worker.postMessage(messShort);
            // isPlaying = true;
        } else {
            alert("Please enter a valid positive number of seconds.");
        }
        // }
    } else if (window.getComputedStyle(minuteLongFrame).display != "none") {
        document.getElementById("btn-pause-long").style.display = "inline";
        document.getElementById("btn-play-long").style.display = "none";
        minuteLongConvert = convertStringToTime(
            document.querySelector("#time-js-long").textContent
        );

        // if (!isPlaying) {
        const enteredTimeLong = parseInt(minuteLongConvert);
        if (!isNaN(enteredTimeLong) && enteredTimeLong > 0) {
            const messLong = {
                action: "play",
                value: enteredTimeLong,
            };
            startTimer();
            worker.postMessage(messLong);
            // isPlaying = true;
        } else {
            alert("Please enter a valid positive number of seconds.");
        }
    }
}
// }

function convertStringToTime(string) {
    let text = string.split(":");
    let minute = parseInt(text[0]);
    let second = parseInt(text[1]);
    return minute * 60 + second;
}

document.getElementById("clickSave").addEventListener("click", clickCounter);
function clickCounter() {
    if (typeof Storage !== "undefined") {
        if (window.localStorage.pomo) {
            var pomoTime = document.getElementById("pomo-time").value;
            var pomoTime = document.getElementById("pomo-time").value;
            if (pomoTime < 25 || pomoTime > 120) {
                alert("Pomo time must be greater than 25 and less than 120.");
            } else {
                window.localStorage.setItem("pomo", pomoTime);
            }
        }
        if (window.localStorage.short) {
            var shortTime = document.getElementById("short-time").value;
            if (shortTime < 5 || shortTime > 10) {
                alert("Short break must be greater than 5 and less than 10.");
            } else {
                window.localStorage.setItem("short", shortTime);
            }
        }
        if (window.localStorage.long) {
            var longTime = document.getElementById("long-time").value;
            if (longTime < 15 || longTime > 20) {
                alert("Long break must be greater than 15 and less than 20.");
            } else {
                window.localStorage.setItem("long", longTime);
            }
        } else {
            let pomoTime = document.getElementById("pomo-time").value;
            let shortTime = document.getElementById("short-time").value;
            let longTime = document.getElementById("long-time").value;

            window.localStorage.setItem("pomo", pomoTime);
            window.localStorage.setItem("short", shortTime);
            window.localStorage.setItem("long", longTime);
        }

        document.getElementById("pomo-time").value =
            window.localStorage.getItem("pomo");
        document.getElementById("short-time").value =
            window.localStorage.getItem("short");
        document.getElementById("long-time").value =
            window.localStorage.getItem("long");
    } else {
        let pomoTime = document.getElementById("pomo-time").value;
        let shortTime = document.getElementById("short-time").value;
        let longTime = document.getElementById("long-time").value;

        document.getElementById("pomo-time").value = pomoTime;
        document.getElementById("short-time").value = shortTime;
        document.getElementById("long-time").value = longTime;
    }
    startCountFocus();
    startCountShort();
    startCountLong();
}
checkHighlights();

function checkHighlights() {
    if (window.getComputedStyle(minuteFocusFrame).display != "none") {
        var iconFocusBtn = document.getElementById("focus-btn");
        iconFocusBtn.style.opacity = 1;
    } else if (window.getComputedStyle(minuteShortFrame).display != "none") {
        var iconShortBtn = document.getElementById("short-btn");
        iconShortBtn.style.opacity = 1;
    } else if (window.getComputedStyle(minuteLongFrame).display != "none") {
        var iconLongBtn = document.getElementById("long-btn");
        iconLongBtn.style.opacity = 1;
    } else {
    }
}

document.getElementById("focus-btn").addEventListener("click", clickToChange);
document.getElementById("short-btn").addEventListener("click", clickToChange);
document.getElementById("long-btn").addEventListener("click", clickToChange);

function clickToChange() {
    // if (isPlaying) {
    // worker.postMessage("pause");
    const messChange = {
        action: "pause",
        value: null,
    };
    worker.postMessage(messChange);
    // isPlaying = false;
    // }
    var id = "";
    window.onclick = (e) => {
        id = e.target.id;

        if (id == "focus-btn") {
            changeToFocused();
        } else if (id == "short-btn") {
            changeToShortcut();
        } else if (id == "long-btn") {
            changeToLong();
        }
    };
}

function changeToFocused() {
    document.getElementById("focus-btn").style.opacity = 1;
    document.getElementById("short-btn").style.opacity = 0.5;
    document.getElementById("long-btn").style.opacity = 0.5;

    document.getElementById("parent-frame-time-focus-id").style.display =
        "flex";
    document.getElementById("parent-frame-time-short-id").style.display =
        "none";
    document.getElementById("parent-frame-time-long-id").style.display = "none";

    document.body.style.backgroundColor = "#FFF2F2";
    document.getElementById("quotes").style.color = "#471515";

    document.getElementById("btn-pause").style.display = "none";
    document.getElementById("btn-play").style.display = "inline";

    startCountFocus();
}

function changeToShortcut() {
    document.getElementById("focus-btn").style.opacity = 0.5;
    document.getElementById("short-btn").style.opacity = 1;
    document.getElementById("long-btn").style.opacity = 0.5;

    document.getElementById("parent-frame-time-focus-id").style.display =
        "none";
    document.getElementById("parent-frame-time-short-id").style.display =
        "flex";
    document.getElementById("parent-frame-time-long-id").style.display = "none";

    document.body.style.backgroundColor = "#F2FFF5";
    document.getElementById("quotes").style.color = "#14401D";

    document.getElementById("btn-pause-short").style.display = "none";
    document.getElementById("btn-play-short").style.display = "inline";

    startCountShort();
}

function changeToLong() {
    document.getElementById("focus-btn").style.opacity = 0.5;
    document.getElementById("short-btn").style.opacity = 0.5;
    document.getElementById("long-btn").style.opacity = 1;

    document.getElementById("parent-frame-time-focus-id").style.display =
        "none";
    document.getElementById("parent-frame-time-short-id").style.display =
        "none";
    document.getElementById("parent-frame-time-long-id").style.display = "flex";

    document.body.style.backgroundColor = "#F2F9FF";
    document.getElementById("quotes").style.color = "#142D42";

    document.getElementById("btn-pause-long").style.display = "none";
    document.getElementById("btn-play-long").style.display = "inline";

    startCountLong();
}

document.getElementById("logo_id").addEventListener("click", reloadAllPages);
function reloadAllPages() {
    location.reload();
}

document.getElementById("closeSmall").addEventListener("click", closeNav);
document
    .getElementById("closeSmallSetting")
    .addEventListener("click", closeNav);
document.getElementById("clickMenuSmall").addEventListener("click", openNav);

function openNav() {
    document.getElementById("mySidenav").style.width = "200px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

// document.getElementById("quotes").innerHTML = localStorage.clickcount
//     ? "“" + localStorage.clickcount + "”"
//     : "“" + "One day, all your hard work will pay off." + "”";
// document.getElementById("quotes-area").value = localStorage.clickcount
//     ? localStorage.clickcount
//     : "One day, all your hard work will pay off.";

// document.getElementById("idSaveQuotes").addEventListener("click", clickA);
// function clickA() {
//     if (typeof Storage !== "undefined") {
//         if (localStorage.clickcount) {
//             if (document.getElementById("quotes-area").value.length == 0) {
//                 localStorage.clickcount =
//                     "One day, all your hard work will pay off.";
//             } else {
//                 localStorage.clickcount =
//                     document.getElementById("quotes-area").value;
//             }
//         } else {
//             if (document.getElementById("quotes-area").value.length == 0) {
//                 localStorage.clickcount =
//                     "One day, all your hard work will pay off.";
//             } else {
//                 localStorage.clickcount =
//                     document.getElementById("quotes-area").value;
//             }
//         }
//         document.getElementById("quotes").innerHTML =
//             "“" + localStorage.clickcount + "”";
//         document.getElementById("quotes-area").value = localStorage.clickcount;
//     } else {
//         document.getElementById("quotes").innerHTML =
//             "“" + document.getElementById("quotes-area").value + "”";
//     }
// }
