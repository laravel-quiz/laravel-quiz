@extends('admin.layouts.master')

@section('content')
    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h1 class="text-white">Users</h1>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{$user->count()}}</h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <h1 class="text-white">Question</h1>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{$question->count()}}</h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-question"></i></span>
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
