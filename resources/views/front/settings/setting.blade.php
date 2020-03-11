@extends('layouts.app')

@section('stylesheets')
    <style>
    .setting
    {
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-size: 20px;
    }
    .setting:hover
    {
        text-decoration: none;
    }
    </style>
@endsection

@section('content')
    <div class="col-6" style="text-align: center;">
        <table class="table table-bordered">
            <tr><th class="setting">User Settings</th></tr>
            <tr><td><a class="setting" href="#">Change Password</a></td></tr>
            <tr><td><a class="setting" href="{{route('user.displayAvatar')}}">Upload image</a></td></tr>
            <tr><td><a class="setting" href="#">Choose category</a></td></tr>
           
        </table>

    </div>
    
@endsection