@extends('admin.layouts.master')

@section('content')
    <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="card gradient-3">
                    <div class="card-body">
                        @if(Session::has('success'))
                        <h1 class="alert alert-success" id="successmsg"> {!! session()->get('success') !!} </h1>
                        @endif
                        <h1 class="text-white">Set the number of Question :</h1>
                        <div class="d-inline-block">
                            <form method="POST" action="{{ route('settings.update') }}">
                            @csrf
                            @method('PUT')
                                <div class="input-group">
                                    <input type="text" id="quantity" name="quantity" class="form-control" value="{{ $quantity->value }}" min="5" max="100">&nbsp;&nbsp;&nbsp;
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus">
                                        <i class="fa fa-minus" style="font-size:26px;"></i>
                                        </button>
                                    </span>
                                    &nbsp;&nbsp;&nbsp;
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                                        <i class="fa fa-plus" style="font-size:26px;"></i>
                                        </button>
                                    </span>
                                </div><br>

                                <h1 class="text-white">Set Minimum Question to Pass :</h1>
                                <div class="input-group">
                                    <input type="text" id="min_question" name="min_question" class="form-control" value="{{ $minQuestion->value }}" min="0" max="100">&nbsp;&nbsp;&nbsp;
                                    <span class="input-group-btn">
                                        <button type="button" class="min_question-left-minus btn btn-danger btn-number" data-type="minus">
                                        <i class="fa fa-minus" style="font-size:26px;"></i>
                                        </button>
                                    </span>
                                    &nbsp;&nbsp;&nbsp;
                                    <span class="input-group-btn">
                                        <button type="button" class="min_question-right-plus btn btn-success btn-number" data-type="plus">
                                        <i class="fa fa-plus" style="font-size:26px;"></i>
                                        </button>
                                    </span>
                                </div><br>

                                <h1 class="text-white">Set Aspect Ratio :</h1>
                                <div class="input-group">
                                    <input type="text" id="image_ratio" name="image_ratio" class="form-control" value="{{ $imgRatio->value }}" min="0" max="100">&nbsp;&nbsp;&nbsp;
                                    <span class="input-group-btn">
                                        <button type="button" class="image_ratio-left-minus btn btn-danger btn-number" data-type="minus">
                                        <i class="fa fa-minus" style="font-size:26px;"></i>
                                        </button>
                                    </span>
                                    &nbsp;&nbsp;&nbsp;
                                    <span class="input-group-btn">
                                        <button type="button" class="image_ratio-right-plus btn btn-success btn-number" data-type="plus">
                                        <i class="fa fa-plus" style="font-size:26px;"></i>
                                        </button>
                                    </span>
                                </div><br>

                                <button type="submit" id="btnsubmit" class="btn mb-1 btn-rounded btn-default">Save</button>
                            </form>
                        </div>
                        <i class="fa fa-question-circle display-5 opacity-5" style="float:right;font-size:100px;"></i>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
@endsection
