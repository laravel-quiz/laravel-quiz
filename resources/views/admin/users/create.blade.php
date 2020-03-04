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
  margin: 10px;
  border: 1px solid red;
}
.modal-lg{
  max-width: 1000px !important;
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
                                <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Laravel Crop Image Before Upload using Cropper JS - NiceSnippets.com</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="img-container">
            <div class="row">
                <div class="col-md-8">
                    <img id="image" src="https://avatars0.githubusercontent.com/u/3456749">
                </div>
                <div class="col-md-4">
                    <div class="preview"></div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="crop">Crop</button>
      </div>
    </div>
  </div>
</div>

                                    <form id="formElem">
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
                                        <!-- <div class="row">
                                        <div  class="col-sm-8">
                                            <img id="image" src="#">
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="preview"></div>
                                        </div>
                                        </div> -->
                                        



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
                                                <!-- <button id="submit" type="submit" class="btn btn-primary">Submit</button> -->
                                                <button id="submit" type="button">submit</button>
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

<!-- <script src="{{ asset('/js/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="{{ asset('/js/cropper.min.js') }}"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha256-WqU1JavFxSAMcLP2WIOI+GB2zWmShMI82mTpLDcqFUg=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css" integrity="sha256-jKV9n9bkk/CTP8zbtEtnKaKf+ehRovOYeKoyfthwbC8=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js" integrity="sha256-CgvH7sz3tHhkiVKh05kSUgG97YtzYNnWt6OXcmYzqHY=" crossorigin="anonymous"></script>
<script>

$(document).ready(function(){



$.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

var $modal = $('#modal');
var image = document.getElementById('image');
var cropper;
//var formData =  document.getElementById('formElem');
var allInputs = $(":input");
var file;

$("body").on("change", ".image", function(e){
    var files = e.target.files;
    var done = function (url) {
      image.src = url;
      $modal.modal('show');
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

    // cropper = new Cropper(image, {
	//   aspectRatio: {{$aspect->value}},
    //   viewMode: 3,
    //   preview: '.preview'
    // });


});

$modal.on('shown.bs.modal', function () {
    file = document.querySelector('input[type=file]').files[0];
    console.log(file);
    cropper = new Cropper(image, {
	  aspectRatio: {{$aspect->value}},
	  viewMode: 3,
	  preview: '.preview'
    });
}).on('hidden.bs.modal', function () {
   //cropper.destroy();
   //cropper = null;
});


var formData;
$("#crop").click(function(){

    

$modal.modal('hide');
    
});


$('#submit').click(function(e){
    cropper.getCroppedCanvas().toBlob((blob) => {
    formData = new FormData(formElem);

    // Pass the image file name as the third parameter if necessary.
    formData.append('croppedImage', blob/*, 'example.png' */);

    
    // $.ajax({
    //         method:'POST',
    //         url:"{{ route('quiz.updatescore') }}",
    //         data:{
    //             score: highscore,
    //             userid:'{{Auth::user()->id}}'
    //         },
    //         success:function(data){
    //             console.log(data);
    //         }
    //     });
}/*, 'image/png' */);
    e.preventDefault();
    // Use `jQuery.ajax` method for example
    $.ajax({
        method: 'POST',
        url:"{{route('users.store')}}",
        data: formData,
        processData: false,
        contentType: false,
        success:function(data) {
        console.log(data);
        }
    });
});




});

</script>
@endsection
