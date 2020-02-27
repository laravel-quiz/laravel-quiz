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

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <h2>Player With Top Score </h2>
                                        <table class="table table-xs mb-0">
                                            <thead>
                                                <tr>
                                                    <th>S.No.</th>
                                                    <th>Full Name</th>
                                                    <th>Email</th>
                                                    <th>Score</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($user->sortByDesc('score') as $key=>$u)
                                                    @if(($key)<3)
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td><img src="{{ asset('images/users/'. $u->image) }}" class=" rounded-circle mr-3" alt="">{{ucwords($u->name)}}</td>
                                                            <td>{{$u->email}}</td>
                                                            <td>{{$u->score}}</td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <h2>Recent Play on Quiz </h2>
                                        <table class="table table-xs mb-0">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Full Name</th>
                                                    <th>Email</th>
                                                    <th>Score</th>
                                                    <th>Time</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($user->sortByDesc('updated_at') as $key=>$u)
                                                    @if(($key)<3)
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td><img src="{{ asset('images/users/'. $u->image) }}" class="rounded-circle mr-3">{{ucwords($u->name)}}</td>
                                                            <td>{{$u->email}}</td>
                                                            <td>{{$u->score}}</td>
                                                            <td>{{\Carbon\Carbon::parse($u->updated_at)->diffForHumans()}}</td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
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
