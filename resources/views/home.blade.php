<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pomo</title>
    <link rel="icon" type="image/x-icon" href="{{ URL('images/pomodoro-technique.png') }}">



    <link rel="stylesheet" href="{{ URL('font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL('css/public_css.css') }}" type="text/css">
</head>

<body id="body-backkgound">


    <div class="stick-bottom">

        <nav class="navbar navbar-default navbar-background  topnav" role="navigation">

            <div class="container-fluid ">


                <a href="" class="icon_menu" id="clickMenuSmall">
                    <i class="fa fa-bars"></i>
                </a>

                <ul class="nav navbar-nav navbar-left change-width" id="logo_id">
                    <li class="frame-icon-main">
                        <img width="150" src="{{ URL('images/Light.png') }}"
                            alt="{{ URL('images/no-pictures.png') }}" class="img-main-icon" >
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">

                    <p class="navbar-text" >Login to change your favourite quotes</p>

                    <p class="navbar-text-login" data-toggle="modal"
                    data-target="#myModalQuotes">Change quotes</p>

                    <li class="dropdown hidden-responsive-settings">
                        <a href="" class="dropdown-toggle hover-settings" data-toggle="modal"
                            data-target="#myModalSettings"><b style="color:black">Settings</b> <span
                                class="fa fa-cogs"></span></span></a>


                        {{-- Start --}}



                        {{-- <ul id="login-dp" class="dropdown-menu">
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
                        </ul> --}}

                    </li>

                    <li class="dropdown hidden-responsive-login">
                        <a href="" data-toggle="modal" data-target="#myModalChangeTime"><b
                                style="color:black">Login</b> <span class="fa fa-sign-in"></span></a>
                        {{-- <ul id="login-dp" class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-md-12">
                                        Login via
                                        <div class="social-buttons">
                                            <a href="" class="btn btn-fb"><i class="fa fa-facebook"></i>
                                                Facebook</a>
                                            <a href="" class="btn btn-tw"><i class="fa fa-twitter"></i>
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
                                                <input type="password" class="form-control" id="exampleInputPassword2"
                                                    placeholder="Password" required>
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
                                        New member ? <a href=""><b>Register</b></a>
                                    </div>
                                </div>
                            </li>
                        </ul> --}}

                    </li>
                </ul>

            </div>



        </nav>





    </div>

    {{-- quotes for mobile --}}

    {{-- <div>
        <p class="text_quotes_second">Login to change your favourite quotes</p>

    </div> --}}
    <div class="hover-quotes">
        <p class="text_quotes_second" >Login to change your favourite quotes</p>

    </div>

    <div class="hover-quotes-login">
        <p class="text_quotes_second-login" data-toggle="modal"
        data-target="#myModalQuotes">Change quotes</p>

    </div>

    {{-- Span --}}
    <div id="mySidenav" class="sidenav">
        <a href="" class="closebtn" id="closeSmall">&times;</a>
        <a href="" class="force-width" data-toggle="modal" data-target="#myModalSettings"><b
                style="color:black">Settings</b> <span class="fa fa-cogs"></span></span></a>

        <a href="" data-toggle="modal" data-target="#myModalChangeTime"><b style="color:black">Login</b> <span
                class="fa fa-sign-in force-width"></span></a>
    </div>

    {{-- Span --}}
    <div class="container">
        <!-- Modal -->
        <div class="modal fade" id="myModalSettings" role="dialog">
            <div class="modal-dialog modal-sm">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Change Pomodoro Time</h4>
                    </div>
                    <div class="modal-body">
                        <div class="social-buttons" style="text-align: center">
                            <img src="{{ URL('images/pomodoro-technique.png') }}" width="35"
                                alt="{{ URL('images/no-pictures.png') }}">
                        </div>
                        <form class="form" role="form" method="post" action="login" accept-charset="UTF-8"
                            id="login-nav">
                            <div class="form-group">
                                <p>Pomo Time</p>
                                <label class="sr-only" for="exampleInputEmail2">Pomo
                                    Time</label>
                                <input type="number" class="form-control" id="pomo-time" placeholder="Pomo Time"
                                    required min="25" max="120">
                            </div>
                            <div class="form-group">
                                <p>Short Break</p>
                                <label class="sr-only" for="exampleInputEmail2">Short
                                    Break</label>
                                <input type="number" class="form-control" id="short-time" placeholder="Short Break"
                                    required min="5" max="10">
                            </div>
                            <div class="form-group">
                                <p>Long Break</p>
                                <label class="sr-only" for="exampleInputPassword2">Long
                                    Break</label>
                                <input type="number" class="form-control" id="long-time" placeholder="Long Break"
                                    required min="15" max="20">
                            </div>

                            <div class="form-group" data-toggle="dropdown">
                                <button class="btn btn-primary btn-block" id="clickSave"
                                    type="button" data-dismiss="modal">Save</button>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" id="closeSmallSetting">Close</button>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="container">
        <!-- Modal -->
        <div class="modal fade" id="myModalChangeTime" role="dialog">
            <div class="modal-dialog modal-sm">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Login to change quotes</h4>
                    </div>
                    <div class="modal-body">


                        <div class="row">
                            <div class="col-md-12">
                                {{-- Login via
                                        <div class="social-buttons">
                                            <a href="" class="btn btn-fb"><i class="fa fa-facebook"></i>
                                                Facebook</a>
                                            <a href="" class="btn btn-tw"><i class="fa fa-twitter"></i>
                                                Twitter</a>
                                        </div>
                                        or --}}
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
                                        <input type="password" class="form-control" id="exampleInputPassword2"
                                            placeholder="Password" required>
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
                                New member ? <a href=""><b>Register</b></a>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" id="idSaveQuotes">Save</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

    </div>


    {{-- End --}}

     <!-- Quotes Model -->
     <div class="container">
        <!-- Modal -->
        <div class="modal fade" id="myModalQuotes" role="dialog" >
            <div class="modal-dialog modal-md">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Change Quotes</h4>
                    </div>
                    <div class="modal-body">
                        <textarea id="quotes-area"  rows="5" cols="70"  maxlength="100" 
                        placeholder="Put your quotes here"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" id="idSaveQuotes">Save</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="btn-group">
        <img id="focus-btn"  src="{{ URL('images/focus_svg.svg') }}"
            alt="{{ URL('images/no-pictures.png') }}">
        <img id="short-btn" src="{{ URL('images/short_svg.svg') }}" alt="{{ URL('images/no-pictures.png') }}"
           >
        <img id="long-btn" src="{{ URL('images/long_svg.svg') }}" alt="{{ URL('images/no-pictures.png') }}"
            >
    </div>

    <div class="parent-frame-time" id="parent-frame-time-focus-id">
        <div class="frame-time">
            <h1 class="time" id="time-js-focus"> </h1>
            <div class="btn-play-pause-frame">
                <img  class="play-pause-btn" id="btn-pause"
                    src="{{ URL('images/pause-button.png') }}" alt="{{ URL('images/no-pictures.png') }}">
                <img  class="play-pause-btn" id="btn-play" src="{{ URL('images/play.png') }}"
                    alt="{{ URL('images/no-pictures.png') }}">
            </div>
        </div>
    </div>

    <div class="parent-frame-time-short" id="parent-frame-time-short-id">
        <div class="frame-time-short">
            <h1 class="time-short" id="time-js-short"> </h1>
            <div class="btn-play-pause-frame-short">
                <img  class="play-pause-btn-short" id="btn-pause-short"
                    src="{{ URL('images/pause-button.png') }}" alt="{{ URL('images/no-pictures.png') }}">
                <img  class="play-pause-btn-short" id="btn-play-short"
                    src="{{ URL('images/play.png') }}" alt="{{ URL('images/no-pictures.png') }}">
            </div>
        </div>
    </div>

    <div class="parent-frame-time-long" id="parent-frame-time-long-id">
        <div class="frame-time-long">
            <h1 class="time-long" id="time-js-long"> </h1>
            <div class="btn-play-pause-frame-long">
                <img  class="play-pause-btn-long" id="btn-pause-long"
                    src="{{ URL('images/pause-button.png') }}" alt="{{ URL('images/no-pictures.png') }}">
                <img  class="play-pause-btn-long" id="btn-play-long"
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
    <script src="{{ URL('jquery/jquery.min.js') }}"></script>
    <script src="{{ URL('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL('js/public_js.js') }}" charset="utf-8"></script>
</body>


</html>
