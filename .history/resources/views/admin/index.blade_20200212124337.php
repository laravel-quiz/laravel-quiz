@extends('layouts.master')

@section('content')
    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                    Name: <span>{{ ucwords(auth()->user()->name) }}</span><br>
                                    SignIn_Time : <span>{{ auth()->user()->current_signin_at->diffForHumans() }}</span><br>
                                    Last_SignIn_Time: <span>{{ auth()->user()->last_signin_at->diffForHumans() }}</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- #/ container -->
    </div>
    <!--**********************************
        Content body end
    ***********************************-->
@endsection
