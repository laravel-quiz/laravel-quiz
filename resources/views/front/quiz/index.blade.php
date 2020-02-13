@extends('front.layouts.master')

@section('title','Quiz')
@section('content')
<div class="content">
                <div class="title m-b-md" id="test">
                    Quiz
                </div>
                <div id="quiz">
                    <h1 id="question"></h1>
                    <div id="answers">
                    </div>
                </div>
            </div>
@endsection


@section('stylesheets')
<script src="{{ asset('/js/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript">
$(document).ready(function(){
    var index = 0;
     $.ajaxSetup({
      headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

     $.get('https://cors-anywhere.herokuapp.com/https://opentdb.com/api.php?amount=10',function(data){
        console.log(data);
        var results = data.results;

        var output = '';
        var questions = new Array();
        results.forEach(function(quiz){
            questions.push(quiz);
            //output += `<h3> ${quiz.question} </h3>`;
        });
        console.log(questions);
        var value = questions[index].incorrect_answers;
        $('#question').text(questions[index].question);
        output += `<br><input type="radio" name="answers" value="${questions[index].correct_answer}"><label>${questions[index].correct_answer}</label><br>`
        value.forEach(function(d){
            output += `<input type="radio" name="answers" value="${d}"><label>${d}</label><br>`
        });
        $('#question').append(output);
        // $('#quiz').append(output);
     });

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