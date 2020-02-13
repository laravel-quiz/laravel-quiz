@extends('front.layouts.master')

@section('title','Quiz')
@section('content')
<div class="content">
                <div class="title m-b-md" id="test">
                    Quiz
                </div>
                <div id="quiz">
                </div>
            </div>
@endsection


@section('stylesheets')
<script src="{{ asset('/js/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript">
$(document).ready(function(){
     $.ajaxSetup({
      headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

     $.get('https://cors-anywhere.herokuapp.com/https://opentdb.com/api.php?amount=10',function(data){
        console.log(data);
        var results = data.results;
        console.log(results);
        var output = '';
        results.forEach(function(quiz){
            output += `<h3> ${quiz.question} </h3>`;
        });
        $('#quiz').append(output);
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