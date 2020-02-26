@extends('layouts.app')

@section('content')

            <div class="home-content">
                <div class="row justify-content-center title">
                    <h1>Welcome {{Auth::user()->name}}</h1>
                </div>
                <div class="row justify-content-center title">
                    <img src="{{asset('/images/quiz.png')}}" class="img-responsive">
                </div>

                {{-- <div class="row justify-content-center">
                    <div class="col-2 .container-fluid"><h3>Play</h3></div>
                    <div class="col-2 .container-fluid"><h3>LogOut</h3></div>
                </div> --}}
            </div>

            {{-- <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div> --}}
@endsection
