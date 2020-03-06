@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style type="text/css">
    .form-div {
        margin-top: 100px;
        border: 1px solid #e0e0e0;
        padding-top: 15px;
    }
    #profileDisplay {
        display: block;
        width: 70%;
        margin:10px auto;
        border-radius: 50%;
    }
    #profileLabel {
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-size: 30px;
    }
</style>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-4 offset-md-4 form-div">
        <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <h3 class="text-center">Upload Image</h3>
                <div class="form-group text-center">
                    <img src="{{asset('images/download.png')}}" onclick="triggerClick()" id="profileDisplay">
                    <label for="profileImage" id="profileLabel">Profile image</label>
                    <input type="file" name="image" onchange="displayImage(this)" id="profileImage" style="display: none;" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" name="save" class="btn btn-primary btn-block">Upload Image</button>
                </div>
            </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function triggerClick(){
     document.querySelector('#profileImage').click();
    } 

     function displayImage(e){
         if(e.files[0]) {
             var reader = new FileReader();

             reader.onload = function(e){
                 document.querySelector('#profileDisplay').setAttribute('src',e.target.result);
             }
             reader.readAsDataURL(e.files[0]);

     }
 }
 </script>
@endsection