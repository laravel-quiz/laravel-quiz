@extends('layouts.app')

@section('content')

             <div class="card"  style="width:50rem; float:center;">
                <div class="card-header">Setting</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card" style="width: 18rem; float:center;">
                        <ul class="list-group list-group-flush">
                          <a class="setting" href="" ><li class="list-group-item">Change password</li></a>
                        <a class="setting" href="{{route('user.image')}}"><li class="list-group-item"> Upload image</li></a>
                          <a class="setting" href="#"><li class="list-group-item">QUestion category</li></a>
                        </ul>
                      </div>
                </div>
            </div> 
@endsection
