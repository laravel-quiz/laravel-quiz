@extends('admin.layouts.master')

@section('stylesheets')
<link rel="stylesheet" href="{{asset('/css/cropper.min.css')}}">
<style>
img {
  display: block;

  /* This rule is very important, please don't ignore this */
  max-width: 100%;
}
.preview {
  overflow: hidden;
  width: 300px; 
  height: 300px;
}
</style>
@endsection

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

                                    <form class="form-valide" action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-name">Name</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-name" name="name" placeholder="Enter full name..">
                                                @error('name')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Image</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="file" class="image" name="image">
                                                @error('image')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div  class="col-sm-8">
                                            <img id="image" src="#">
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="preview"></div>
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Email</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-email" name="email" placeholder="Your valid email..">
                                                @error('email')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-password">Password</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="val-password" name="password" placeholder="Choose a safe one..">
                                                @error('password')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Confirm Password</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="val-confirm-password" name="val-confirm-password" placeholder="please enter confirm it!">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-role-id">Role</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" name="role_id">
                                                    @foreach ($roles as $role)
                                                        <option value="{{ $role->id }}">{{ ucwords($role->name) }}</option>
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


@section('scripts')
<script src="{{ asset('/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('/js/cropper.min.js') }}"></script>
<script>


var image = document.getElementById('image');
var cropper;

$("body").on("change", ".image", function(e){
    var files = e.target.files;
    var done = function (url) {
      image.src = url;
    };
    var reader;
    var file;
    var url;

    if (files && files.length > 0) {
      file = files[0];

      if (URL) {
        done(URL.createObjectURL(file));
      } else if (FileReader) {
        reader = new FileReader();
        reader.onload = function (e) {
          done(reader.result);
        };
        reader.readAsDataURL(file);
      }
    }

    cropper = new Cropper(image, {
	  aspectRatio: {{$aspect->value}},
      viewMode: 3,
      preview: '.preview'
    });

    // canvas = cropper.getCroppedCanvas({width:160,height:160});
    // canvas.toBlob(function(blob)){
    //     url = URL.createObjectURL(blob);
    //     var reader = new FileReader();
    //     reader.readAsDataURL(blob);
    //     reader.onloadend = function(){
    //         var base64data = reader.result;
    //     }
    // }

});
</script>
@endsection
