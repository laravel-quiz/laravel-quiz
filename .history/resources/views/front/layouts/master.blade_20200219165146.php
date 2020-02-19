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
                color: #ffff;
                font-family: 'Roboto', sans-serif;
                font-weight: 200;
                /* height: 100vh; */
                margin: 0;
            }

            .full-height {
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
            }

            .content {
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


            .block {
                display: block;
                width: 100%;
                border: none;
                background-color: #ddd;
                color: white;
                /* padding: 14px 10px; */
                margin: 10px;
                font-size: 30px;
                color: black;
                cursor: pointer;
                text-align: center;
                border-radius: 15px;
                height: 70px;
                }

                .block:hover {
                background-color: #ddd;
                border: solid black 2px;
                color: black;
                }
                .tryagain {
                display: block;
                width: 20%;
                border: none;
                background-color: #ddd;
                color: white;
                /* padding: 14px 10px; */
                margin: 10px;
                font-size: 30px;
                color: black;
                cursor: pointer;
                text-align: center;
                border-radius: 15px;
                height: 60px;
                }

                .tryagain:hover {
                background-color: #ddd;
                border: solid black 2px;
                color: black;
                }
        </style>




    </head>
    <body>

        @yield('content')
        @yield('stylesheets')
    </body>
</html>
