@extends('admin.layouts.master')

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
                                    <div class="row">
                                         <div class="col-6">
                                            <h1>User</h1>
                                            <h2>{{$user->count()}}</h2>
                                        </div>
                                        <div class="col-6">
                                            <h1>Question</h1>
                                            <h2>{{$question->count()}}</h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <table class="table">

                                        </table>
                                    </div>
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
