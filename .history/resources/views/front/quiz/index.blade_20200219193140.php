@extends('front.layouts.master')

@section('title','Quiz')
@section('content')
<div class="content container">
                <div class="title m-b-md" id="test">
                    <img src="{{asset('/images/quiz.png')}}" class="img-responsive">
                </div>
                <div class="row justify-content-center">
                    <div class="col-2 .container-fluid" id="scorediv">
                        <h1>Time Out In :</h1>
                    <h1 id="timer"></h1>

                    </div>
                </div>
                <div id="quiz" class="row justify-content-center">
                    <div class="col-2 .container-fluid" id="col1"><h1>Q.N</h1><h1 id="question_no"></h1></div>
                    <div class="col-8 .container-fluid"><h1 id="finalscore"></h1><h1 id="question"></h1></div>
                    <div class="col-2 .container-fluid" id="col3"><h1>Score</h1><h2 id="score"></h2></div>
                </div>
                <div id="answers" class="row justify-content-center">

                    </div>

                <div id="replay" align="center">
                    <a href="{{route('quiz.index')}}" style="text-decoration: none;"><button class="tryagain">Play Again?</button></>
                </div>
            </div>
@endsection


@section('stylesheets')
<script src="{{ asset('/js/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#replay').hide();
    var questions = new Array();
    var question_no = 1;
    var counter = 30;
    var score = 0;
    var index = 0;
     $.ajaxSetup({
      headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    //$('#score').text('Score:'+ score);

     //$.get('https://cors-anywhere.herokuapp.com/https://opentdb.com/api.php?amount=10',function(data){
        $.get("/api/quiz/all",function(data){
        //console.log(data);
        //var results = data.results;
        var results = data;

        var output = '';

        var i =0;
        results.forEach(function(quiz){
            questions.push(quiz);
            questions[i].incorrect_answers.push(quiz.correct_answer);
            i++;
            //output += `<h3> ${quiz.question} </h3>`;
        });

        updateScreen();

     });

     verify = function(userAnswer,correctAnswer){
         if(userAnswer == correctAnswer){

            score++;
         }
         index++;
         updateScreen();
     }

     updateScreen = function(){

        counter = 30;
        var output = '';
        $('#score').text(score);
        if(index>=4){
            $('#finalscore').text('Your final Score: '+ score + ' out of ' + index);
            $('#question').hide();
             $('#col1').hide();
             $('#col3').hide();
            $('#answers').hide();
            clearInterval(timer);
            $('#timer').hide();
            $('#replay').show();
        }
        console.log(questions[index]);
        var value = questions[index].incorrect_answers;
        console.log(value);
        value = shuffle(value);
        console.log(value);
        $('#answers').text("");
        $('#question_no').text(question_no);
        question_no++;
        $('#question').text(questions[index].question);
        //output += `<br><input type="radio" name="answers" value="${questions[index].correct_answer}"><label>${questions[index].correct_answer}</label><br>`
        value.forEach(function(d){
            //output += `<br><input type="radio" name="answers" value="${d}"><label>${d}</label>`
            //output += `<div align="center" style="margin:2px;"><button class="block" value="${d}" onClick="verify(${d},${questions[index].correct_answer});">${d}</button></div>`
            output += `<div align="center" style="margin:2px;" class="col-5"><button class="block" value="${d}" onClick="verify('${d}','${questions[index].correct_answer}');">${d}</button></div>`
        });

        $('#answers').append(output);

     }

     timer =
         setInterval(function(){
            $('#timer').text(counter);
            counter--;
            if(counter<=0){
                index++;
                //clearInterval(timer);
                updateScreen();
            }
         },1000);




     function shuffle(a) {
        var j, x, i;
        for (i = a.length - 1; i > 0; i--) {
            j = Math.floor(Math.random() * (i + 1));
            x = a[i];
            a[i] = a[j];
            a[j] = x;
        }
        return a;
    }

    // var url = 'https://cors-anywhere.herokuapp.com/https://opentdb.com/api.php?amount=10';
    // fetch(url, {
    // method: 'GET',
    // headers:{
    //     'X-Requested-With': 'XMLHttpRequest'
    // }
    // }).then(res => res.json())
    // .then(response => console.log('Success:', response))
    // .catch(error => console.error('Error:', error));



});

</script>
@endsection
