@extends('layouts.app')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Create Customer</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Create Customer</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Create Customer</h2>
                        </div>
                        <div class="card-body">
                            <!-- end row -->

                            @if (session('message'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{ session('message') }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <!-- Add Customer -->
                            <form method="POST" enctype="multipart/form-data" action="{{ route('customers.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="">First Name</label>
                                            <input type="text" name="first_name" class="form-control" required>
                                            @error('first_name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="">Last Name</label>
                                            <input type="text" class="form-control" name="last_name" required>
                                            @error('last_name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="">Customer Number</label>
                                            <input type="text" class="form-control" name="customer_no" required>
                                            @error('username')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="">Email</label>
                                            <input type="email" class="form-control" name="email" required>
                                            @error('email')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="">Mobile Number</label>
                                            <input type="text" name="mobileno" class="form-control" required>
                                            @error('mobile_no')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="">User Type</label>
                                            <select name="user_type" id="" class="form-control" required>
                                                <option value="" selected disabled>Select</option>
                                                <option value="ADMIN">Admin</option>
                                                <option value="CUSTOMER">Customer</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="">Password</label>
                                            <input type="password" name="password" class="form-control" required>
                                            @error('password')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="">Confirm Password</label>
                                            <input type="password" name="password_confirmation" class="form-control"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button class="btn btn-primary float-end">Save</button>
                                            <a href="{{ route('users.index') }}" class="btn btn-secondary float-end"
                                                style="margin-right: 5px">Cancel</a>
                                        </div>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
