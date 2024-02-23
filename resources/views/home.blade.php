<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pomo</title>
    <link rel="icon" type="image/x-icon" href="{{ URL('images/pomodoro-technique.png') }}">
    {{-- <link data-n-head="1" rel="icon" type="image/x-icon" href="/favicon-96x96.ico"> --}}
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    {{-- Load icon: Temporary logo: remove later --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <style>
        body {
            background-color: #FFF2F2;
            /* background-color: #F2FFF5 */
            /* background-color: #F2F9FF */

        }

        #login-dp {
            min-width: 250px;
            padding: 14px 14px 0;
            overflow: hidden;
            background-color: rgba(255, 255, 255, .8);
        }

        #login-dp .help-block {
            font-size: 12px
        }

        #login-dp .bottom {
            background-color: rgba(255, 255, 255, .8);
            border-top: 1px solid #ddd;
            clear: both;
            padding: 14px;
        }

        #login-dp .social-buttons {
            margin: 12px 0
        }

        #login-dp .social-buttons a {
            width: 49%;
        }

        #login-dp .form-group {
            margin-bottom: 10px;
        }

        .btn-fb {
            color: #fff;
            background-color: #3b5998;
        }

        .btn-fb:hover {
            color: #fff;
            background-color: #496ebc
        }

        .btn-tw {
            color: #fff;
            background-color: #55acee;
        }

        .btn-tw:hover {
            color: #fff;
            background-color: #59b5fa;
        }

        @media(max-width:768px) {
            #login-dp {
                background-color: inherit;
                color: #fff;
            }

            #login-dp .bottom {
                background-color: inherit;
                border-top: 0 none;
            }
        }

        .icon-logo-pomodoro {
            /* customize later */

        }

        .img-main-icon {
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .navbar-background {
            background-color: #FFFFFF
        }


        .footer-custom {
            text-align: center;
            background-color: #FFFFFF;
            position: absolute;
            width: 100%;
            bottom: 0;
            padding: 20px;
        }

        .stick-bottm {
            position: relative;
        }

        .btn-group {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-group img {
            margin: 30px;
            cursor: pointer;
            display: inline-block;
            opacity: 0.5;
        }

        .btn-group img:hover {
            opacity: 1;
        }

        .time {
            font-weight: 800;
            color: #471515;
            font-family: 'Times New Roman', Times, serif;
            font-size: 130px;
            margin-top: 50px;
        }

        .frame-time {
            width: 500px;
            height: 400px;
            display: inline-block;
            background-color: #dddddd63;
            border-radius: 10px;
            border: 1px solid #471515;
            /* background-image:  url('images/pomodoro-technique.png'); */
            /* text-align: center; */
        }

        .frame-time:hover {}

        .parent-frame-time {
            text-align: center;
            display: flex;
            justify-content: center;
        }

        .play-pause-btn {
            width: 8%;
            margin-top: 50px;
            cursor: pointer;
        }

        .btn-play-pause-frame img:hover {
            opacity: 0.8;
            border: 1px solid #471515
        }

        #btn-play {
            display: inline;
        }

        #btn-pause {
            display: none;
        }

        #time-js-short,
        #time-js-long {
            display: none;
        }

        /* .btn-group # */
    </style>
</head>

<body>
    <div class="stick-bottom">

        <nav class="navbar navbar-default navbar-background" role="navigation">

            <div class="container-fluid">

                <!-- Brand and toggle get grouped for better mobile display -->

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <img width="150" src="{{ URL('images/Light.png') }}"
                                alt="{{ URL('images/no-pictures.png') }}" class="img-main-icon">
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">

                        <li>
                            <p class="navbar-text">Login to customize your favourite quotes</p>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b
                                    style="color:black">Settings</b> <span class="caret"></span></a>
                            <ul id="login-dp" class="dropdown-menu">
                                <div id="timeShowHidden">
                                    <li>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div style="text-align: center">
                                                    <p style="color: #59b5fa">
                                                        Customize Timing
                                                    </p>
                                                </div>
                                                <div class="social-buttons" style="text-align: center">
                                                    <img src="{{ URL('images/pomodoro-technique.png') }}" width="35"
                                                        alt="{{ URL('images/no-pictures.png') }}">
                                                </div>
                                                <form class="form" role="form" method="post" action="login"
                                                    accept-charset="UTF-8" id="login-nav">
                                                    <div class="form-group">
                                                        <p>Pomo Time</p>
                                                        <label class="sr-only" for="exampleInputEmail2">Pomo
                                                            Time</label>
                                                        <input type="number" class="form-control" id="pomo-time"
                                                            placeholder="Pomo Time" required min="25"
                                                            max="120">
                                                    </div>
                                                    <div class="form-group">
                                                        <p>Short Break</p>
                                                        <label class="sr-only" for="exampleInputEmail2">Short
                                                            Break</label>
                                                        <input type="number" class="form-control" id="short-time"
                                                            placeholder="Short Break" required min="1"
                                                            max="20">
                                                    </div>
                                                    <div class="form-group">
                                                        <p>Long Break</p>
                                                        <label class="sr-only" for="exampleInputPassword2">Long
                                                            Break</label>
                                                        <input type="number" class="form-control" id="long-time"
                                                            placeholder="Long Break" required min="1"
                                                            max="30">
                                                    </div>

                                                    <div class="form-group" data-toggle="dropdown">
                                                        <button class="btn btn-primary btn-block"
                                                            onclick="clickCounter()" type="button">Save</button>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b
                                    style="color:black">Login</b> <span class="caret"></span></a>
                            <ul id="login-dp" class="dropdown-menu">
                                <li>
                                    <div class="row">
                                        <div class="col-md-12">
                                            Login via
                                            <div class="social-buttons">
                                                <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i>
                                                    Facebook</a>
                                                <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i>
                                                    Twitter</a>
                                            </div>
                                            or
                                            <form class="form" role="form" method="post" action="login.php"
                                                accept-charset="UTF-8" id="login-nav">
                                                <div class="form-group">
                                                    <label class="sr-only" for="exampleInputEmail2">Email
                                                        address</label>
                                                    <input type="email" class="form-control" id=""
                                                        placeholder="Email address" required>
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only"
                                                        for="exampleInputPassword2">Password</label>
                                                    <input type="password" class="form-control"
                                                        id="exampleInputPassword2" placeholder="Password" required>
                                                    <div class="help-block text-right"><a href="">Forget the
                                                            password
                                                            ?</a></div>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary btn-block">Sign
                                                        in</button>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"> Keep me logged-in
                                                    </label>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="bottom text-center">
                                            New member ? <a href="#"><b>Register</b></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="footer-custom">
            <footer>
                <p>Author: Peter Bach<br>
                    <a href="pomodorosmart.com">pomodorosmart@gmai.com</a>
                </p>
            </footer>
        </div>


    </div>

    <div class="btn-group">
        <img id="focus-btn" src="{{ URL('images/focus_img.png') }}" alt="{{ URL('images/no-pictures.png') }}"
            onclick="clickToChange()">
        <img id="short-btn" src="{{ URL('images/short_img.png') }}" alt="{{ URL('images/no-pictures.png') }}"
            onclick="clickToChange()">
        <img id="long-btn" src="{{ URL('images/long_img.png') }}" alt="{{ URL('images/no-pictures.png') }}"
            onclick="clickToChange()">
    </div>

    <div class="parent-frame-time">
        <div class="frame-time">
            <h1 class="time" id="time-js-focus" style="color = green"> </h1>
            <h1 class="time" id="time-js-short" style="color = green"> </h1>
            <h1 class="time" id="time-js-long" style="color = green"> </h1>
            <div class="btn-play-pause-frame">
                <img onclick="stopBtn()" class="play-pause-btn" id="btn-pause"
                    src="{{ URL('images/pause-button.png') }}" alt="{{ URL('images/no-pictures.png') }}">
                <img onclick="playBtn()" class="play-pause-btn" id="btn-play" src="{{ URL('images/play.png') }}"
                    alt="{{ URL('images/no-pictures.png') }}">
            </div>
        </div>
    </div>

    {{-- <div class="parent-frame-time-short">
        <div class="frame-time-short">
            <h1 class="time-short" id="time-js-short" style="color = green"> </h1>
            <div class="btn-play-pause-frame-short">
                <img onclick="stopBtn()" class="play-pause-btn-short" id="btn-pause-short"
                    src="{{ URL('images/pause-button.png') }}" alt="{{ URL('images/no-pictures.png') }}">
                <img onclick="playBtn()" class="play-pause-btn--short" id="btn-play-short" src="{{ URL('images/play.png') }}"
                    alt="{{ URL('images/no-pictures.png') }}">
            </div>
        </div>
    </div>

    <div class="parent-frame-time-long">
        <div class="frame-time-long">
            <h1 class="time-long" id="time-js-long" style="color = green"> </h1>
            <div class="btn-play-pause-frame-long">
                <img onclick="stopBtn()" class="play-pause-btn-long" id="btn-pause-long"
                    src="{{ URL('images/pause-button.png') }}" alt="{{ URL('images/no-pictures.png') }}">
                <img onclick="playBtn()" class="play-pause-btn-long" id="btn-play-long" src="{{ URL('images/play.png') }}"
                    alt="{{ URL('images/no-pictures.png') }}">
            </div>
        </div>
    </div> --}}


    <script>
        // getInfoFirstTime();
        document.querySelector('#pomo-time').value = window.localStorage.getItem("pomo") ? window.localStorage.getItem(
            "pomo") : 25;
        document.querySelector('#short-time').value = window.localStorage.getItem("short") ? window.localStorage.getItem(
            "short") : 5;
        document.querySelector('#long-time').value = window.localStorage.getItem("long") ? window.localStorage.getItem(
            "long") : 15;

        var stopPlayBtn;

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
                    timer = duration;
                }
            }, 1000);

        };
        startCountFocus();
        startCountShort();
        startCountLong();


        function stopBtn() {
            clearInterval(stopPlayBtn);
            document.getElementById("btn-pause").style.display = "none";
            document.getElementById("btn-play").style.display = "inline";
        };

        function startCountFocus() {
            // window.onload = function() {
            let minute = document.getElementById("pomo-time").value;
            let timer = minute * 60;
            let minutes = parseInt(timer / 60, 10);
            let seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            if (document.querySelector('#time-js-focus').display != "none") {
                document.querySelector('#time-js-focus').innerHTML = minutes + ":" + seconds;
            }


            // }    
        };


        function startCountShort() {
            // window.onload = function() {
            let minute = document.getElementById("short-time").value;
            let timer = minute * 60;
            let minutes = parseInt(timer / 60, 10);
            let seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            if (document.querySelector('#time-js-short').display != "none") {
                document.querySelector('#time-js-short').innerHTML = minutes + ":" + seconds;

            }

            // }    
        };

        function startCountLong() {
            // window.onload = function() {
            let minute = document.getElementById("long-time").value;
            let timer = minute * 60;
            let minutes = parseInt(timer / 60, 10);
            let seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            if (document.querySelector('#time-js-long').display != "none") {
                document.querySelector('#time-js-long').innerHTML = minutes + ":" + seconds;

            }
            // }    
        };


        function playBtn() {
            document.getElementById("btn-pause").style.display = "inline";
            document.getElementById("btn-play").style.display = "none";
            //TODO: Update for long-short

            var minuteFocus = document.getElementById("time-js-focus");
            var minuteShort = document.getElementById("time-js-short");
            var minuteLong = document.getElementById("time-js-long");

            
            if (minuteFocus.display != 'none') {
            let fiveMinutes = convertStringToTime(document.querySelector("#time-js-focus").textContent);
            let display = document.querySelector('#time-js-focus');
            console.log("focus");
            startTimer(fiveMinutes, display);
            } else if (minuteShort.display != 'none') {
                let fiveMinutes = convertStringToTime(document.querySelector("#time-js-short").textContent);
            let display = document.querySelector('#time-js-short');
            startTimer(fiveMinutes, display);
            console.log("short");

            } else if (minuteLong.display != 'none') {
                let fiveMinutes = convertStringToTime(document.querySelector("#time-js-long").textContent);
            let display = document.querySelector('#time-js-long');
            startTimer(fiveMinutes, display);
            console.log("long");

            } else {

            }

            // let fiveMinutes = convertStringToTime(document.querySelector("#time-js-focus").textContent);
            // let display = document.querySelector('#time-js-focus');
            // startTimer(fiveMinutes, display);
        };

        function convertStringToTime(string) {
            let text = string.split(":");
            let minute = parseInt(text[0]);
            let second = parseInt(text[1]);
            return minute * 60 + second;
        };

        function clickCounter() {
            if (typeof(Storage) !== "undefined") {
                if (window.localStorage.pomo) {
                    let pomoTime = document.getElementById("pomo-time").value;
                    window.localStorage.setItem("pomo", pomoTime);
                }
                if (window.localStorage.short) {
                    let shortTime = document.getElementById("short-time").value;
                    window.localStorage.setItem("short", shortTime);
                }
                if (window.localStorage.long) {
                    let longTime = document.getElementById("long-time").value;
                    window.localStorage.setItem("long", longTime);
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
            // startCountFocus();
            // startCountFocus();
            // startCountShort();
            // startCountLong();
        };
        checkHighlights();

        function checkHighlights() {
            var minuteFocus = document.getElementById("time-js-focus");
            var minuteShort = document.getElementById("time-js-short");
            var minuteLong = document.getElementById("time-js-long");

            if (minuteFocus.display != 'none') {
                var iconFocusBtn = document.getElementById("focus-btn");
                iconFocusBtn.style.opacity = 1;
            } else if (minuteShort.display != 'none') {
                var iconShortBtn = document.getElementById("short-btn");
                iconShortBtn.style.opacity = 1;
            } else if (minuteLong.display != 'none') {
                var iconLongBtn = document.getElementById("long-btn");
                iconLongBtn.style.opacity = 1;
            } else {

            }

        };

        function clickToChange() {
            var id = "";
            window.onclick = e => {
                id = e.target.id;

            if (id == 'focus-btn') {
                // document.getElementById("short-btn").style.display = "none";
                // document.getElementById("long-btn").style.display = "none";
                // document.getElementById("focus-btn").style.display = "inline";
                document.getElementById("focus-btn").style.opacity = 1;
                document.getElementById("short-btn").style.opacity = 0.5;
                document.getElementById("long-btn").style.opacity = 0.5;

            document.getElementById("time-js-focus").style.display = "inline-block";
            document.getElementById("time-js-short").style.display = "none";
            document.getElementById("time-js-long").style.display = "none";

            



                
                // checkHighlights();
                startCountFocus();

            } else if (id =='short-btn') {
                // document.getElementById("focus-btn").style.display = "none";
                // document.getElementById("long-btn").style.display = "none";
                // document.getElementById("short-btn").style.display = "inline";

                document.getElementById("focus-btn").style.opacity = 0.5;
                document.getElementById("short-btn").style.opacity = 1;
                document.getElementById("long-btn").style.opacity = 0.5;
                // checkHighlights();

                document.getElementById("time-js-focus").style.display = "none";
            document.getElementById("time-js-short").style.display = "inline-block";
            document.getElementById("time-js-long").style.display = "none";

                startCountShort();
            } else if (id == 'long-btn') {
                // document.getElementById("short-btn").style.display = "none";
                // document.getElementById("focus-btn").style.display = "none";
                // document.getElementById("long-btn").style.display = "inline";

                document.getElementById("focus-btn").style.opacity = 0.5;
                document.getElementById("short-btn").style.opacity = 0.5;
                document.getElementById("long-btn").style.opacity = 1;

                document.getElementById("time-js-focus").style.display = "none";
            document.getElementById("time-js-short").style.display = "none";
            document.getElementById("time-js-long").style.display = "inline-block";

                // checkHighlights();

                startCountLong();
            }
        }

        }
    </script>
</body>


</html>
