@extends('layouts.app')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Collection Point</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Collection Point</li>
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
                            <h2 class="card-title">Create Creation Points</h2>
                        </div>
                        <div class="card-body">
                            <!-- end row -->

                            @if (session('message'))
                                <div class="alert alert-success">
                                    <p>{{ session('message') }}</p>
                                </div>
                            @endif
                            <!-- Add Employee Modal -->
                            <form method="POST" enctype="multipart/form-data" action="{{ route('sales-area.store') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="">Sales area</label>
                                    <select name="" id="" class="form-control">
                                        <option value="" selected disabled>Select</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Collection Point <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary float-end">Save</button>
                                    <a href="{{ route('collection-points.index') }}" class="btn btn-secondary float-end" style="margin-right: 5px">Cancel</a>
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
