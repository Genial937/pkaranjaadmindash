@extends('layouts.app')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">Users</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Users</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <div class="mb-3 float-end">
                                    <a href="{{ route('users.create') }}" class="btn btn-success waves-effect waves-light"><i
                                            class="mdi mdi-plus me-2"></i> Add New</a>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="table-responsive mb-4">
                            <table class="table table-centered table-nowrap mb-0 datatable">
                                <thead>
                                    <th>Name</th>
                                    <th>Mobile No.</th>
                                    <th>Email</th>
                                    <th>User Type</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                                        <td>{{ $user->mobile_no }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->user_type }}</td>
                                        <td>
                                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-success btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="" class="btn btn-danger btn-sm"><i class="uil uil-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection
