<!-- you have scored {{$user->score}} points in quiz -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mail</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            font-family: 'Roboto', sans-serif;
        }

        .cointainer {
            max-width: 100%;
        }

        .row {
            width: 80%;
            margin: 0px auto;
            text-align: center;
            background-color: #1a1b1d;
        }

        .siz {
            position: absolute;
            float: left;
            width: 300px;
            margin-left: 50px;
            margin-top: 35px;
        }

        span>img{
            width: 100px;
        }
        .h1 {
            text-align: center;
        }
        .color{
            height: 300px;
        }
        .color>h1{
            margin-left: 140px;
            text-align: left;
            text-align: justify;
            color: #20a86a;
        }
        .color>p{
            margin-left: 80px;
            text-align: left;
            text-align: justify;
            font-size: 20px;
            color: white;
        }
    </style>
</head>

<body>
    <div class="cointainer">
        <div class="row">
            <span><img src="{{image/quiz.png}}" alt="hello"></img></span>
        </div>
    </div>
    <div class="cointainer">
        <div class="row">
            <div class="color">
                <h1>Congratulation!!!</h1>
                <p>
                    You have Scored {{$user->score}} in the Quiz game.
                </p>
                <img src="image/mailman.png" alt="" class="siz">
            </div>
        </div>
    </div>
</body>

</html>