@extends('admin.layouts.master')

@section('content')
    <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="card gradient-3">
                    <div class="card-body">
                        <h1 class="text-white">Set the number of Question :</h1>
                        <div class="d-inline-block">
                            <form method="POST" action="{{ route('settings.update') }}">
                            @csrf
                            @method('PUT')
                                <div class="input-group">
                                    <input type="text" id="quantity" name="quantity" class="form-control" value="{{ $quantity->value }}" min="0" max="100">&nbsp;&nbsp;&nbsp;
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
                                <button type="submit" class="btn mb-1 btn-rounded btn-default">Save</button>
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
