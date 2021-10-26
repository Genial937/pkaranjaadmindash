@extends('layouts.app')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Permissions</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Permissions</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            @if (session('message'))
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('message') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            @endif

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="mb-3 float-end">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#add"
                                            class="btn btn-success waves-effect waves-light"><i
                                                class="mdi mdi-plus me-2"></i> Add New</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="table-responsive mb-4">
                                <table class="table table-centered table-nowrap mb-0 datatable">
                                    <thead>
                                        <th>#</th>
                                        <th>Permission</th>
                                    </thead>
                                    <tbody>
                                        @php($count = 1)
                                        @foreach ($permissions as $permission)
                                            <tr>
                                                <td>{{ $count++ }}</td>
                                                <td>{{ $permission->name }}</td>
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
            <div class="modal fade" id="add">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form action="{{ route('permissions.store') }}" method="POST">
                            @csrf
                            <div class="modal-header">
                                <h3 class="modal-title">Add Permission</h3>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="">Permission Name</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a href="#" data-bs-dismiss="modal" class="btn btn-danger">Cancel</a>
                                <button class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
