@extends('layouts.app')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">Orders</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Orders</li>
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

                        <!-- end row -->
                        <div class="table-responsive mb-4">
                            <table class="table table-centered table-nowrap mb-0 datatable">
                                <thead>
                                    <th>#</th>
                                    <th>Customer Name</th>
                                    <th>Customer No</th>
                                    <th>Order No</th>
                                    <th>Tracking No</th>
                                    <th>Date Ordered</th>
                                    <th>Order Status</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                     <tr>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td>
                                             <a href="" class="btn btn-success btn-sm"><i class="uil uil-eye"></i></a>
                                             <a href="" class="btn btn-danger btn-sm"><i class="uil uil-trash-alt"></i></a>
                                         </td>
                                     </tr>
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
