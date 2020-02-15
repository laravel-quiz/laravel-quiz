@extends('layouts.master')

@section('content')
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <h4>Question Info</h4>
                        <div class="media align-items-center mb-4">
                            <ul class="card-profile__info">
                                <li class="mb-4"><strong class="text-dark mr-4">Name: </strong> <span>{{ ucwords($user->name) }}</span></li>
                            </ul>
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
