<!-- you have scored {{$user->score}} points in quiz -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mail</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }
        
        .cointainer {
            max-width: 100%;
        }

        .row {
            width: 80%;
            margin: 0px auto;
            text-align: center;
        }

        .image {
            background-image: url('image/mailman.png');
            background-color: yellow;
        }

        .siz {
            position: absolute;
            float: left;
            width: 300px;
            margin-left: 50px;
            margin-top: 80px;
        }

        span>h1{
            background-color:#f8fafc;
        }
        .h1 {
            text-align: center;
        }
        .color{
            background-color: #2980b9;
            height: 300px;
        }
    </style>
</head>

<body>
    <div class="cointainer">
        <div class="row">
            <span><h1>Quiz Game</h1></span>
        </div>
    </div>
    <div class="cointainer">
        <div class="row">
            <div class="color">
                <p>
                    you have scored {{$user->score}} points in quiz
                </p>
                <img src="image/mailman.png" alt="" class="siz">
            </div>
        </div>
    </div>
</body>

</html>