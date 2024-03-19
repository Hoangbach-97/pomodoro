document.querySelector('#pomo-time').value = window.localStorage.getItem("pomo") ? window.localStorage.getItem(
    "pomo") : 25;
document.querySelector('#short-time').value = window.localStorage.getItem("short") ? window.localStorage.getItem(
    "short") : 5;
document.querySelector('#long-time').value = window.localStorage.getItem("long") ? window.localStorage.getItem(
    "long") : 15;

var stopPlayBtn;
var countFocus = 0;
var countShort = 0;
var countLong = 0;

function startTimer(duration, display) {
    var timer = duration;
    var minutes;
    var seconds;
    stopPlayBtn = setInterval(function() {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;
        --timer;
        if (timer < 0) {
            // timer = duration;
            // clearInterval(stopPlayBtn);
            startCountFocus();
            startCountLong();
            startCountShort();
            document.getElementById("sound_finish").play();
            var minuteFocus = document.getElementById("parent-frame-time-focus-id");
            var minuteShort = document.getElementById("parent-frame-time-short-id");
            var minuteLong = document.getElementById("parent-frame-time-long-id");
            if (window.getComputedStyle(minuteFocus).display != "none") {
                countFocus++;
                clearInterval(stopPlayBtn);
                document.getElementById("btn-pause").style.display = "none";
                document.getElementById("btn-play").style.display = "inline";

                // Automatically change to short count <=4

                if (countFocus <= 4) {
                    document.getElementById("focus-btn").style.opacity = 0.5;
                    document.getElementById("short-btn").style.opacity = 1;
                    document.getElementById("long-btn").style.opacity = 0.5;

                    document.getElementById("parent-frame-time-focus-id").style.display = "none";
                    document.getElementById("parent-frame-time-short-id").style.display = "flex";
                    document.getElementById("parent-frame-time-long-id").style.display = "none";

                    document.body.style.backgroundColor = "#F2FFF5";
                    document.getElementById("quotes").style.color = "#14401D";

                    document.getElementById("btn-pause-short").style.display = "none";
                    document.getElementById("btn-play-short").style.display = "inline";
                }

                // Automatically change to long if count >4
                if (countFocus > 4) {
                    countFocus = 0; // reset
                    document.getElementById("focus-btn").style.opacity = 0.5;
                    document.getElementById("short-btn").style.opacity = 0.5;
                    document.getElementById("long-btn").style.opacity = 1;

                    document.getElementById("parent-frame-time-focus-id").style.display = "none";
                    document.getElementById("parent-frame-time-short-id").style.display = "none";
                    document.getElementById("parent-frame-time-long-id").style.display = "flex";

                    document.body.style.backgroundColor = "#F2F9FF";
                    document.getElementById("quotes").style.color = "#142D42";

                    document.getElementById("btn-pause-long").style.display = "none";
                    document.getElementById("btn-play-long").style.display = "inline";
                }


            } else if (window.getComputedStyle(minuteShort).display != "none") {
                clearInterval(stopPlayBtn);
                countShort++;

                document.getElementById("btn-pause-short").style.display = "none";
                document.getElementById("btn-play-short").style.display = "inline";

                // Automatically change to focus
                if (countShort == 1) {
                    countShort = 0;

                    document.getElementById("focus-btn").style.opacity = 1;
                    document.getElementById("short-btn").style.opacity = 0.5;
                    document.getElementById("long-btn").style.opacity = 0.5;

                    document.getElementById("parent-frame-time-focus-id").style.display = "flex";
                    document.getElementById("parent-frame-time-short-id").style.display = "none";
                    document.getElementById("parent-frame-time-long-id").style.display = "none";

                    document.body.style.backgroundColor = "#FFF2F2";
                    document.getElementById("quotes").style.color = "#471515";


                    clearInterval(stopPlayBtn);
                    document.getElementById("btn-pause").style.display = "none";
                    document.getElementById("btn-play").style.display = "inline";
                }


            } else if (window.getComputedStyle(minuteLong).display != "none") {
                countLong++;

                clearInterval(stopPlayBtn);
                document.getElementById("btn-pause-long").style.display = "none";
                document.getElementById("btn-play-long").style.display = "inline";

                // Automatically change to focus
                if (countLong == 1) {

                    countLong = 0;

                    document.getElementById("focus-btn").style.opacity = 1;
                    document.getElementById("short-btn").style.opacity = 0.5;
                    document.getElementById("long-btn").style.opacity = 0.5;

                    document.getElementById("parent-frame-time-focus-id").style.display = "flex";
                    document.getElementById("parent-frame-time-short-id").style.display = "none";
                    document.getElementById("parent-frame-time-long-id").style.display = "none";

                    document.body.style.backgroundColor = "#FFF2F2";
                    document.getElementById("quotes").style.color = "#142D42";

                    document.getElementById("btn-pause").style.display = "none";
                    document.getElementById("btn-play").style.display = "inline";
                }
            } else {
            }
        }
    }, 1000);

};
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

    let isNone = document.querySelector('#time-js-focus');
    if (window.getComputedStyle(isNone).display != "none") {
        document.querySelector('#time-js-focus').innerHTML = minutes + ":" + seconds;
    }

};


function startCountShort() {
    let minute = document.getElementById("short-time").value;
    let timer = minute * 60;
    let minutes = parseInt(timer / 60, 10);
    let seconds = parseInt(timer % 60, 10);

    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;

    let isNone = document.querySelector('#time-js-short');
    if (window.getComputedStyle(isNone).display != "none") {
        document.querySelector('#time-js-short').innerHTML = minutes + ":" + seconds;
    }
};

function startCountLong() {
    let minute = document.getElementById("long-time").value;
    let timer = minute * 60;
    let minutes = parseInt(timer / 60, 10);
    let seconds = parseInt(timer % 60, 10);

    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;

    let isNone = document.querySelector('#time-js-long');
    if (window.getComputedStyle(isNone).display != "none") {
        document.querySelector('#time-js-long').innerHTML = minutes + ":" + seconds;
    }
};

document.getElementById("btn-pause").addEventListener("click", stopBtn);
document.getElementById("btn-pause-short").addEventListener("click", stopBtn);
document.getElementById("btn-pause-long").addEventListener("click", stopBtn);

function stopBtn() {
    document.getElementById("sound_play_pause").play();

    var minuteFocus = document.getElementById("parent-frame-time-focus-id");
    var minuteShort = document.getElementById("parent-frame-time-short-id");
    var minuteLong = document.getElementById("parent-frame-time-long-id");

    console.log("stop-focus" + window.getComputedStyle(minuteFocus).display);


    if (window.getComputedStyle(minuteFocus).display != "none") {
        clearInterval(stopPlayBtn);
        document.getElementById("btn-pause").style.display = "none";
        document.getElementById("btn-play").style.display = "inline";
    } else if (window.getComputedStyle(minuteShort).display != "none") {
        clearInterval(stopPlayBtn);
        document.getElementById("btn-pause-short").style.display = "none";
        document.getElementById("btn-play-short").style.display = "inline";
    } else if (window.getComputedStyle(minuteLong).display != "none") {
        clearInterval(stopPlayBtn);
        document.getElementById("btn-pause-long").style.display = "none";
        document.getElementById("btn-play-long").style.display = "inline";
    } else {

    }


};


document.getElementById("btn-play-long").addEventListener("click", playBtn);
document.getElementById("btn-play-short").addEventListener("click", playBtn);
document.getElementById("btn-play").addEventListener("click", playBtn);
function playBtn() {

    //TODO: Update for long-short
    document.getElementById("sound_play_pause").play();


    var minuteFocus = document.getElementById("parent-frame-time-focus-id");
    var minuteShort = document.getElementById("parent-frame-time-short-id");
    var minuteLong = document.getElementById("parent-frame-time-long-id");

    console.log(window.getComputedStyle(minuteFocus).display + "play-focus");

    if (window.getComputedStyle(minuteFocus).display != "none") {
        document.getElementById("btn-pause").style.display = "inline";
        document.getElementById("btn-play").style.display = "none";
        let fiveMinutes = convertStringToTime(document.querySelector("#time-js-focus").textContent);
        let display = document.querySelector('#time-js-focus');
        startTimer(fiveMinutes, display);
    } else if (window.getComputedStyle(minuteShort).display != "none") {
        document.getElementById("btn-pause-short").style.display = "inline";
        document.getElementById("btn-play-short").style.display = "none";
        let fiveMinutes = convertStringToTime(document.querySelector("#time-js-short").textContent);
        let display = document.querySelector('#time-js-short');
        startTimer(fiveMinutes, display);

    } else if (window.getComputedStyle(minuteLong).display != "none") {
        document.getElementById("btn-pause-long").style.display = "inline";
        document.getElementById("btn-play-long").style.display = "none";
        let fiveMinutes = convertStringToTime(document.querySelector("#time-js-long").textContent);
        let display = document.querySelector('#time-js-long');
        startTimer(fiveMinutes, display);

    } else {
    }

};




function convertStringToTime(string) {
    let text = string.split(":");
    let minute = parseInt(text[0]);
    let second = parseInt(text[1]);
    return minute * 60 + second;
};

document.getElementById("clickSave").addEventListener("click", clickCounter);
function clickCounter() {
    if (typeof(Storage) !== "undefined") {
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

        document.getElementById("pomo-time").value = window.localStorage.getItem("pomo");
        document.getElementById("short-time").value = window.localStorage.getItem("short");
        document.getElementById("long-time").value = window.localStorage.getItem("long");

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
};
checkHighlights();

function checkHighlights() {
    var minuteFocus = document.getElementById("parent-frame-time-focus-id");
    var minuteShort = document.getElementById("parent-frame-time-short-id");
    var minuteLong = document.getElementById("parent-frame-time-long-id");


    if (window.getComputedStyle(minuteFocus).display != "none") {
        var iconFocusBtn = document.getElementById("focus-btn");
        iconFocusBtn.style.opacity = 1;
    } else if (window.getComputedStyle(minuteShort).display != "none") {
        var iconShortBtn = document.getElementById("short-btn");
        iconShortBtn.style.opacity = 1;
    } else if (window.getComputedStyle(minuteLong).display != "none") {
        var iconLongBtn = document.getElementById("long-btn");
        iconLongBtn.style.opacity = 1;
    } else {

    }

};

document.getElementById("focus-btn").addEventListener("click", clickToChange);
document.getElementById("short-btn").addEventListener("click", clickToChange);
document.getElementById("long-btn").addEventListener("click", clickToChange);

function clickToChange() {
    var id = "";
    window.onclick = e => {
        id = e.target.id;

        if (id == 'focus-btn') {
            changeToFocused();
        } else if (id == 'short-btn') {
            changeToShortcut();
        } else if (id == 'long-btn') {
            changeToLong();
        }
    }
}


function changeToFocused() {
    document.getElementById("focus-btn").style.opacity = 1;
    document.getElementById("short-btn").style.opacity = 0.5;
    document.getElementById("long-btn").style.opacity = 0.5;

    document.getElementById("parent-frame-time-focus-id").style.display = "flex";
    document.getElementById("parent-frame-time-short-id").style.display = "none";
    document.getElementById("parent-frame-time-long-id").style.display = "none";

    document.body.style.backgroundColor = "#FFF2F2";
    document.getElementById("quotes").style.color = "#471515";


    clearInterval(stopPlayBtn);
    document.getElementById("btn-pause").style.display = "none";
    document.getElementById("btn-play").style.display = "inline";

    startCountFocus();
}

function changeToShortcut() {
    document.getElementById("focus-btn").style.opacity = 0.5;
    document.getElementById("short-btn").style.opacity = 1;
    document.getElementById("long-btn").style.opacity = 0.5;

    document.getElementById("parent-frame-time-focus-id").style.display = "none";
    document.getElementById("parent-frame-time-short-id").style.display = "flex";
    document.getElementById("parent-frame-time-long-id").style.display = "none";

    document.body.style.backgroundColor = "#F2FFF5";
    document.getElementById("quotes").style.color = "#14401D";



    clearInterval(stopPlayBtn);
    document.getElementById("btn-pause-short").style.display = "none";
    document.getElementById("btn-play-short").style.display = "inline";

    startCountShort();
}

function changeToLong() {
    document.getElementById("focus-btn").style.opacity = 0.5;
    document.getElementById("short-btn").style.opacity = 0.5;
    document.getElementById("long-btn").style.opacity = 1;

    document.getElementById("parent-frame-time-focus-id").style.display = "none";
    document.getElementById("parent-frame-time-short-id").style.display = "none";
    document.getElementById("parent-frame-time-long-id").style.display = "flex";

    document.body.style.backgroundColor = "#F2F9FF";
    document.getElementById("quotes").style.color = "#142D42";

    clearInterval(stopPlayBtn);
    document.getElementById("btn-pause-long").style.display = "none";
    document.getElementById("btn-play-long").style.display = "inline";

    startCountLong();
}

document.getElementById("logo_id").addEventListener("click", reloadAllPages);
function reloadAllPages() {
    location.reload();
}

document.getElementById("closeSmall").addEventListener("click", closeNav);
document.getElementById("closeSmallSetting").addEventListener("click", closeNav);
document.getElementById("clickMenuSmall").addEventListener("click", openNav);

function openNav() {
    document.getElementById("mySidenav").style.width = "200px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

document.getElementById("quotes").innerHTML = localStorage.clickcount ? "“"+localStorage.clickcount+"”" : "“"+"One day, all your hard work will pay off."+"”";
document.getElementById("quotes-area").value = localStorage.clickcount ? localStorage.clickcount : "One day, all your hard work will pay off." ;

document.getElementById("idSaveQuotes").addEventListener("click", clickA);
function clickA() {

    if (typeof(Storage) !== "undefined") {
    if (localStorage.clickcount) {
    if(document.getElementById("quotes-area").value.length == 0){
    localStorage.clickcount = "One day, all your hard work will pay off.";
    } else {
    localStorage.clickcount =document.getElementById("quotes-area").value;
    }
    } else {
    if(document.getElementById("quotes-area").value.length == 0){
    localStorage.clickcount = "One day, all your hard work will pay off.";
    } else {
    localStorage.clickcount = document.getElementById("quotes-area").value;
    }
    }
    document.getElementById("quotes").innerHTML ="“"+localStorage.clickcount+"”";
    document.getElementById("quotes-area").value = localStorage.clickcount;
    } else {
    document.getElementById("quotes").innerHTML = "“"+document.getElementById("quotes-area").value+"”";
    }
    }