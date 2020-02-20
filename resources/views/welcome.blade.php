@extends('front.layouts.master')

@section('title','Quiz')
@section('content')
            <div class="home-content">
                <div class="row justify-content-center title">
                    <img src="{{asset('/images/quiz.png')}}" class="img-responsive">
                </div>

                <div class="row justify-content-center">
                    <div class="col-4 .container-fluid">Play</div>
                    <div class="col-4 .container-fluid">Play</div>
                    <div class="col-4 .container-fluid">Play</div>
                </div>
            </div>
@endsection
