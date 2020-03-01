<!DOCTYPE html>
<html>
<head>
	<title>Certificate of High Score</title>
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('/css/cstyle.css')}}"> --}}
    <style>
        * {
                margin: 0px;
                padding: 0px;
            }

            .container {
                max-width: 100%;
            }

            .row {
                width: 95%;
                margin: 0px auto;
                text-align: center;
            }

            .top {
                font-size: 20px;
                text-align: center;
                background: #2980b9;
                height: 50px;
            }

            .top > h1 {
                /*background: #2980b9;*/
            }

            .space > h4 {
                color: #2c3e50;
            }

            .space > h3 {
                color: #8e44ad;
            }

            .space > span {
                color: #c0392b;
            }

            .space > h2 {
                color: #c0392b;
            }

            .space {
                margin-top: 30px;
            }

            .space > img {
                max-width: 400px;
                margin-top: 100px;
            }

    </style>
</head>
<body>
	<div class="container">
		<div class=row>
			<div class="top">
				<h1>CERFICATE OF ACHIEVEMENT</h1>
				<div class=space><h4>This Certificate has been awarded to</h4></div>
				<div class=space><h3>{{$user->name}}</h3></div>
                <div class=space><h4>For @if($score<5)
                        Active Partipitation  in
                    @endif
                    @if($score == 5)
                        successful completion of the
                    @endif
                    Quiz With {{$score}} point</h4></div>
				@if($score == 5)<div class=space><h2>Congratulation !!!</h2></div>@endif
                <div class=space><span><h2>Award Date: {{\Carbon\Carbon::now()->toDateString()}}</h2></span></div>
				{{-- <div class=space><img src="{{asset('/images/quiz.png')}}"></div> --}}
			</div>
		</div>
	</div>
</body>
</html>
