@extends('layouts.master')

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
                                        @can(['create','viewany','update', 'view', 'delete'], auth()->user())
                                        <th scope="col">Action</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td></td>
                                            <td><a href=""></a></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <a href="" data-toggle="tooltip" data-placement="top" title="Add"><span class="btn btn-success"><i class="fa fa-plus color-muted m-r-5"></i></span></a>
                                                <a href="" data-toggle="tooltip" data-placement="top" title="Edit"><span class="btn btn-info"><i class="fa fa-pencil color-muted m-r-5"></i></span></a>
                                                <form method="POST" action="">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick="return confirm('Are you sure?')" data-toggle="tooltip" data-placement="top" title="Delete"><span class="btn btn-danger"><i class="fa fa-trash color-muted m-r-5"></i></span></button>
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
