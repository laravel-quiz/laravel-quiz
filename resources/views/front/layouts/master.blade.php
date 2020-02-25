<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!-- Styles -->
        <style>
            *{
                /* border: 1px solid black; */
            }
            html, body {
                background-color: #1a1b1d;
                position: relative;
                color: #ffff;
                font-family: 'Roboto', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            /* .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            } */
            .content {
                text-align: center;
                margin: auto;
            }
             .home-content
             {
                margin: 0;
                position: absolute;
                top: 50%;
                left: 50%;
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
                text-align: center;
             }
            .title {
                font-size: 84px;
                margin: 20px;
            }
            .title img {
                width: 30%;
                height: 30%;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                /* margin-bottom: 30px; */
            }
            .block, .tryagain {
                display: block;
                width: 100%;
                border: none;
                background-color: #ddd;
                /* padding: 14px 10px; */
                margin: 10px;
                font-size: 3vw;
                color: black;
                cursor: pointer;
                text-align: center;
                border-radius: 15px;
                height: 70px;
                }
                .block:hover{
                background-color: #3d3f44;
                border: solid whitesmoke 2px;
                color: whitesmoke;
                transform: translate(10px, -10px);
                animation: solution 1.5s ease-in-out infinite alternate;
                }

                .tryagain:hover {
                background-color: #3d3f44;
                border: solid whitesmoke 2px;
                color: whitesmoke;

                }
        </style>
    </head>
    <body>

        @yield('content')
        @yield('stylesheets')
    </body>
    <script src="{{ asset('/js/jquery-3.4.1.min.js') }}"></script>
</html>
