@extends('layouts.app')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Create Offer</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Create Offer</li>
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
                            <h2 class="card-title">Create Offer</h2>
                        </div>
                        <div class="card-body">
                            <!-- end row -->

                            @if (session('message'))
                                <div class="alert alert-success">
                                    <p>{{ session('message') }}</p>
                                </div>
                            @endif
                            <!-- Add Employee Modal -->
                            <form method="POST" enctype="multipart/form-data" action="{{ route('products.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="">Sales Organization</label>
                                            <select name="" id="" class="form-control">
                                                <option value="" selected disabled>--Select--</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="">Category</label>
                                            <select name="" id="" class="form-control">
                                                <option value="" selected disabled>--Select--</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="">Sub Category</label>
                                            <select name="" id="" class="form-control">
                                                <option value="" selected disabled>--Select--</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="">Sales Area</label>
                                            <select name="" id="" class="form-control">
                                                <option value="" selected disabled>--Select--</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Products</label>
                                        <table class="table table-sm">
                                            <thead>
                                                <th><input type="checkbox"></th>
                                                <th>Product Name</th>
                                                <th>Product price</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td>Maize</td>
                                                    <td>Kes. 890</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td>Millet</td>
                                                    <td>Kes. 890</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td>Corns</td>
                                                    <td>Kes. 890</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="">Valid From</label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="">Valid To</label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="">Offer Statement</label>
                                            <textarea name="" id="" cols="30" rows="2" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button class="btn btn-primary float-end">Submit</button>
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
