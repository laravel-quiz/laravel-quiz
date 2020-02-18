@extends('front.layouts.master')

@section('title','Quiz')
@section('content')
<div class="content">
                <div class="title m-b-md" id="test">
                    Quiz
                </div>
                <div class="row">
                    <div id="scorediv">
                    <h1 id="timer"></h1>
                    <h2 id="score"></h2>
                    </div>
                </div>
                <div id="quiz">
                    <h1 id="question"></h1>
                    <div id="answers">
                    </div>
                </div>
                <div id="replay">
                    <a href="{{route('quiz.index')}}">Play Again?</>
                </div>
            </div>
@endsection


@section('stylesheets')
<script src="{{ asset('/js/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#replay').hide();
    var questions = new Array();
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
        console.log(questions[index]);
        var value = questions[index].incorrect_answers;
        console.log(value);
        value = shuffle(value);
        console.log(value);
        $('#question').text(questions[index].question);
        //output += `<br><input type="radio" name="answers" value="${questions[index].correct_answer}"><label>${questions[index].correct_answer}</label><br>`
        value.forEach(function(d){
            //output += `<br><input type="radio" name="answers" value="${d}"><label>${d}</label>`
            //output += `<div align="center" style="margin:2px;"><button class="block" value="${d}" onClick="verify(${d},${questions[index].correct_answer});">${d}</button></div>`
            output += `<div align="center" style="margin:2px;"><button class="block" value="${d}" onClick="verify('${d}','${questions[index].correct_answer}');">${d}</button></div>`
        });
        $('#question').append(output);
        timer();
        // $('#quiz').append(output);
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
        //$('#score').text('Score:'+ score);
        if(index>=4){
            $('#score').text('Your final Score: '+ score + ' out of ' + index);
            $('#question').hide();
            clearInterval(timer);
            $('#timer').hide();
            $('#replay').show();
        }
        console.log(questions[index]);
        var value = questions[index].incorrect_answers;
        console.log(value);
        value = shuffle(value);
        console.log(value);
        $('#question').text(questions[index].question);
        //output += `<br><input type="radio" name="answers" value="${questions[index].correct_answer}"><label>${questions[index].correct_answer}</label><br>`
        value.forEach(function(d){
            //output += `<br><input type="radio" name="answers" value="${d}"><label>${d}</label>`
            //output += `<div align="center" style="margin:2px;"><button class="block" value="${d}" onClick="verify(${d},${questions[index].correct_answer});">${d}</button></div>`
            output += `<div align="center" style="margin:2px;"><button class="block" value="${d}" onClick="verify('${d}','${questions[index].correct_answer}');">${d}</button></div>`
        });
        
        $('#question').append(output);
        
     }

     timer = function(){
         setInterval(function(){
            $('#timer').text(counter);
            counter--;
            if(counter<=0){
                index++;
                //clearInterval(timer);
                updateScreen();
            }
         },1000);
     }



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