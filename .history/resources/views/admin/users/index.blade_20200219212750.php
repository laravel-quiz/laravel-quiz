@extends('admin.layouts.master')

@section('content')
    <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Users Info</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered verticle-middle">
                                <thead>
                                    <tr>
                                        <th scope="col">S.No</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><a href="{{ route('users.show',['id' => $user->id]) }}">{{ ucwords($user->name) }}</a></td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->role->name }}</td>
                                            <td>
                                                {{-- <a href="{{ route('users.create') }}" data-toggle="tooltip" data-placement="top" title="Add"><span class="btn btn-success"><i class="fa fa-plus color-muted m-r-5"></i></span></a> --}}
                                                <a href="{{ route('users.edit',['id' => $user->id ]) }}" data-toggle="tooltip" data-placement="top" title="Edit" style="float:left;"><span class="btn btn-info"><i class="fa fa-pencil color-muted m-r-5"></i></span></a>
                                                <form method="POST" action="{{ route('users.destory',['id' => $user->id]) }}" style="float:right;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick="return confirm('Are you sure?')" data-toggle="tooltip" data-placement="top" title="Delete" style="float:right;"><span class="btn btn-danger"><i class="fa fa-trash color-muted m-r-5"></i></span></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
