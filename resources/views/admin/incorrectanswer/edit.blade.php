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
                                <div class="form-validation">
                                    <form class="form-valide" action="{{ route('incorrectanswer.update',['id'=>$incorrectans->id]) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-name">Incorrect Answer</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-name" name="answer" value="{{ $incorrectans->answer }}" placeholder="Enter Incorrect answer">
                                                @error('answer')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Category</span>
                                            </label>
                                            <div class="col-lg-6">
                                            <select class="form-control" name="quiz_id">
                                            @foreach($quizes as $quiz)
                                                <option value="{{ $quiz->id }}" {{(old('quiz_id',$incorrectans->quiz_id)==$quiz->id) ? 'selected':''}}>{{$quiz->question}}</optioon>
                                            @endforeach
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
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
