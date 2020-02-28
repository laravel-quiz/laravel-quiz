@extends('admin.layouts.master')

@section('content')
    <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <h1>Hello World</h1>
                    </div>
                    <form method="POST" action="{{route('settings.update')}}">
                    @csrf
                    @method('PUT')
                    
                    <label>Set the number of question to:</label>
                    <input type="number" id="quantity" name="quantity" min="5" max="10" value={{$quantity->value}}>
                    <button type="submit">Save</button>
                    </form>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
@endsection
