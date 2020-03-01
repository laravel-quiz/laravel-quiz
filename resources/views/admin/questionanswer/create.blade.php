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
                                    <form class="form-valide" action="{{route('questionanswer.store')}}" method="POST" >
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-name">Question</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-name" name="question" placeholder="Enter Question">
                                                @error('question')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Category</span>
                                            </label>
                                            <div class="col-lg-6">
                                            <select class="form-control" name="category_id">
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</optioon>
                                            @endforeach
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-name">Correct Answer</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-name" name="correct_answer" placeholder="Enter Question Answer">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-name">Incorrect Answers</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-name" name="incorrect_answer" placeholder="Enter any 3 seperated by commma ','">
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
                        <p style="size:20px; text-align:center;">Or</p>
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="#" method="POST" >
                                        @csrf
                                    
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-name">Import From Excel</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="file" class="" id="val-name" name="incorrect_answer" placeholder="Enter any 3 seperated by commma ','">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Import</button>
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
