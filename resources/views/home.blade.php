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


        .time-long {
            font-weight: 800;
            color: #142D42;
            font-family: 'Times New Roman', Times, serif;
            font-size: 130px;
            margin-top: 50px;
        }


        .time {
            font-weight: 800;
            color: #471515;
            font-family: 'Times New Roman', Times, serif;
            font-size: 130px;
            margin-top: 50px;
        }

        .time-short {
            font-weight: 800;
            color: #14401D;
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
        }

        .frame-time-short {
            width: 500px;
            height: 400px;
            display: inline-block;
            background-color: #dddddd63;
            border-radius: 10px;
            border: 1px solid #14401D;
        }

        .frame-time-long {
            width: 500px;
            height: 400px;
            display: inline-block;
            background-color: #dddddd63;
            border-radius: 10px;
            border: 1px solid #142D42;
        }

        .frame-time:hover {}

        .parent-frame-time,
        .parent-frame-time-short,
        .parent-frame-time-long {
            text-align: center;
            display: flex;
            justify-content: center;
        }

        .play-pause-btn,
        .play-pause-btn-short,
        .play-pause-btn-long {
            width: 8%;
            margin-top: 50px;
            cursor: pointer;
        }

        .btn-play-pause-frame img:hover {
            opacity: 0.8;
            border: 1px solid #471515
        }

        #btn-play,
        #btn-play-short,
        #btn-play-long {
            display: inline;
        }

        #btn-pause,
        #btn-pause-short,
        #btn-pause-long {
            display: none;
        }

        /* #time-js-short,
        #time-js-long {
            display: none;
        } */


        .parent-frame-time-short,
        .parent-frame-time-long {
            display: none;
        }

        #quotes {
            text-align: center;
            font-size: 20px;
            font-family: Monospace;
        }

        #quotes-frame {
            margin-top: 50px;
        }

        #focus-btn,
        #long-btn,
        #short-btn {
            width: 120px;
            height: 45px;
        }

        .topnav .fa-bars {
            display: none;
        }

        .img-main-icon:hover {
            cursor: pointer;
            opacity: 0.8;
        }

        @media only screen and (max-width: 768px) {

            #focus-btn,
            #long-btn,
            #short-btn {
                width: 80px;
                height: 35px;
                margin: 10px;
            }

            .time,
            .time-short,
            .time-long {
                font-size: 80px;
                margin-top: 35px;
                font-weight: 600;
            }

            .frame-time,
            .frame-time-long,
            .frame-time-short {
                width: 330px;
                height: 270px;
            }

            #quotes {
                font-size: 16px;
                margin: 12px;
            }

            .parent-frame-time-long,
            .parent-frame-time-short,
            .parent-frame-time {

                margin-top: 20px;
            }

            .img-main-icon {
                margin-left: 20px;
                width: 100px;
            }

            .text_quotes_second {
                display: list-item;
            }


            .topnav .fa-bars {
                display: inline-block;
                float: right;
                margin-right: 15px;
                margin-top: 20px;
                font-size: 20px !important
            }



            .topnav .navbar-text {
                display: none;
            }

            .topnav .hidden-responsive-settings {
                display: none;
            }

            .topnav .hidden-responsive-login {
                display: none;
            }

       
        }

        .text_quotes_second {
            text-align: center;
            display: none;
        }

        .frame-icon-main {
            width: 100px;
        }

        .change-width {
            width: 100px;
        }
    </style>
</head>

<body id="body-backkgound">
    <div class="stick-bottom">

        <nav class="navbar navbar-default navbar-background  topnav" role="navigation">

            <div class="container-fluid ">
                <a href="javascript:void(0);" class="icon_menu" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>

                <ul class="nav navbar-nav navbar-left change-width" id="logo_id">
                    <li class="frame-icon-main">
                        <img width="150" src="{{ URL('images/Light.png') }}"
                            alt="{{ URL('images/no-pictures.png') }}" class="img-main-icon" onclick="reloadAllPages()">
                    </li>
                    <li>

                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">

                    <p class="navbar-text">Login to change your favourite quotes</p>
                    </li>

                    <li class="dropdown hidden-responsive-settings">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b
                                style="color:black">Settings</b> <span class="caret"></span></a>
                        <ul id="login-dp" class="dropdown-menu">
                            <div id="timeShowHidden">
                                <li>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div style="text-align: center">
                                                <p style="color: #59b5fa">
                                                    Update Timing
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
                                                        placeholder="Pomo Time" required min="1" max="2">
                                                </div>
                                                <div class="form-group">
                                                    <p>Short Break</p>
                                                    <label class="sr-only" for="exampleInputEmail2">Short
                                                        Break</label>
                                                    <input type="number" class="form-control" id="short-time"
                                                        placeholder="Short Break" required min="1"
                                                        max="2">
                                                </div>
                                                <div class="form-group">
                                                    <p>Long Break</p>
                                                    <label class="sr-only" for="exampleInputPassword2">Long
                                                        Break</label>
                                                    <input type="number" class="form-control" id="long-time"
                                                        placeholder="Long Break" required min="1" max="2">
                                                </div>

                                                <div class="form-group" data-toggle="dropdown">
                                                    <button class="btn btn-primary btn-block" onclick="clickCounter()"
                                                        type="button">Save</button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </ul>
                    </li>

                    <li class="dropdown hidden-responsive-login">
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
                                                <label class="sr-only" for="exampleInputPassword2">Password</label>
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



        </nav>


        <div class="footer-custom">
            <footer>
                <h5 style="color: #471515">
                    <img src="{{ URL('images/author.png') }}" width="20">
                    Author: Peter Hoang Bach
                </h5>
                <h5>
                    <img src="{{ URL('images/support.png') }}" width="20">
                    Support:pomodorosmart@gmail.com
                </h5>

            </footer>
        </div>


    </div>

    <div>
        <p class="text_quotes_second">Login to change your favourite quotes</p>

    </div>
    <div class="btn-group">
        {{-- <button id="focus-btn"  class="button button1">
            <img src="{{ URL('images/focus.svg') }}" alt="{{ URL('images/focus.svg') }}">
            Focus
        </button>
        <button class="button button1">2px</button>
        <button class="button button1">2px</button> --}}
        <img id="focus-btn" onclick="clickToChange()" src="{{ URL('images/focus_svg.svg') }}"
            alt="{{ URL('images/no-pictures.png') }}">
        <img id="short-btn" src="{{ URL('images/short_svg.svg') }}" alt="{{ URL('images/no-pictures.png') }}"
            onclick="clickToChange()">
        <img id="long-btn" src="{{ URL('images/long_svg.svg') }}" alt="{{ URL('images/no-pictures.png') }}"
            onclick="clickToChange()">
    </div>

    <div class="parent-frame-time" id="parent-frame-time-focus-id">
        <div class="frame-time">
            <h1 class="time" id="time-js-focus"> </h1>
            {{-- <h1 class="time" id="time-js-short" style="color = green"> </h1>
            <h1 class="time" id="time-js-long" style="color = green"> </h1> --}}
            <div class="btn-play-pause-frame">
                <img onclick="stopBtn()" class="play-pause-btn" id="btn-pause"
                    src="{{ URL('images/pause-button.png') }}" alt="{{ URL('images/no-pictures.png') }}">
                <img onclick="playBtn()" class="play-pause-btn" id="btn-play" src="{{ URL('images/play.png') }}"
                    alt="{{ URL('images/no-pictures.png') }}">
            </div>
        </div>
    </div>

    <div class="parent-frame-time-short" id="parent-frame-time-short-id">
        <div class="frame-time-short">
            <h1 class="time-short" id="time-js-short"> </h1>
            <div class="btn-play-pause-frame-short">
                <img onclick="stopBtn()" class="play-pause-btn-short" id="btn-pause-short"
                    src="{{ URL('images/pause-button.png') }}" alt="{{ URL('images/no-pictures.png') }}">
                <img onclick="playBtn()" class="play-pause-btn-short" id="btn-play-short"
                    src="{{ URL('images/play.png') }}" alt="{{ URL('images/no-pictures.png') }}">
            </div>
        </div>
    </div>

    <div class="parent-frame-time-long" id="parent-frame-time-long-id">
        <div class="frame-time-long">
            <h1 class="time-long" id="time-js-long"> </h1>
            <div class="btn-play-pause-frame-long">
                <img onclick="stopBtn()" class="play-pause-btn-long" id="btn-pause-long"
                    src="{{ URL('images/pause-button.png') }}" alt="{{ URL('images/no-pictures.png') }}">
                <img onclick="playBtn()" class="play-pause-btn-long" id="btn-play-long"
                    src="{{ URL('/images/play.png') }}" alt="{{ URL('images/no-pictures.png') }}">
            </div>
        </div>
    </div>
    <div id="quotes-frame">
        <p id="quotes">“One day, all your hard work will pay off.”</p>
    </div>

    <audio id="sound_play_pause">
        <source src="{{ URL('sounds/Play_pause.wav') }}" type="audio/wav">
    </audio>

    <audio id="sound_finish">
        <source src="{{ URL('sounds/Finish.wav') }}" type="audio/wav">
    </audio>

    <script>
        //Assign values to form settings
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
                        console.log("focus ===" + countFocus);
                        clearInterval(stopPlayBtn);
                        document.getElementById("btn-pause").style.display = "none";
                        document.getElementById("btn-play").style.display = "inline";

                        // Automatically change to short count <=4

                        if (countFocus <= 4) {
                            console.log("focus <<==4 ===" + countFocus);
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
                            console.log("focus >4" + countFocus);
                            countFocus = 0; // reset
                            console.log("rết focus" + countFocus);
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
                        console.log("short====" + countShort);

                        document.getElementById("btn-pause-short").style.display = "none";
                        document.getElementById("btn-play-short").style.display = "inline";

                        // Automatically change to focus
                        if (countShort == 1) {
                            console.log("short=== 1=" + countShort);
                            countShort = 0;
                            console.log("short=== reset=" + countShort);

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
                        console.log("long====" + countLong);

                        clearInterval(stopPlayBtn);
                        document.getElementById("btn-pause-long").style.display = "none";
                        document.getElementById("btn-play-long").style.display = "inline";

                        // Automatically change to focus
                        if (countLong == 1) {
                            console.log("long====111" + countLong);

                            countLong = 0;
                            console.log("long====reset" + countLong);

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
                        console.log("Error stop")
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
                console.log("Error stop")

            }


        };


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
                console.log("Error play")
            }

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
                    var pomoTime = document.getElementById("pomo-time").value;
                    // if (pomoTime < 25 || pomoTime > 120) {
                    //     alert("Pomo time must be greater than 25 and less than 120.");
                    // } else {
                    // }
                    window.localStorage.setItem("pomo", pomoTime);

                }
                if (window.localStorage.short) {
                    var shortTime = document.getElementById("short-time").value;
                    // if (shortTime < 1 || shortTime > 20) {
                    //     alert("Short break must be greater than 1 and less than 20.");
                    // } else {
                    // }
                    window.localStorage.setItem("short", shortTime);

                }
                if (window.localStorage.long) {
                    var longTime = document.getElementById("long-time").value;
                    // if (longTime < 5 || longTime > 30) {
                    //     alert("Long break must be greater than 5 and less than 30.");
                    // } else {
                    // }
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
            startCountFocus();
            startCountShort();
            startCountLong();
        };
        checkHighlights();

        function checkHighlights() {
            var minuteFocus = document.getElementById("parent-frame-time-focus-id");
            var minuteShort = document.getElementById("parent-frame-time-short-id");
            var minuteLong = document.getElementById("parent-frame-time-long-id");

            console.log(window.getComputedStyle(minuteFocus).display +
                "---" + window.getComputedStyle(minuteShort).display + "---" + window.getComputedStyle(minuteLong)
                .display);

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

        function reloadAllPages() {
            location.reload();
        }
    </script>
</body>


</html>
