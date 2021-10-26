@extends('layouts.app')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Dashboard</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Unga Group</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="total-revenue-chart"></div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup">90</span></h4>
                                <p class="text-muted mb-0">Total Orders</p>
                            </div>
                            {{-- <p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i
                                        class="mdi mdi-arrow-up-bold me-1"></i>2.65%</span> since last week
                            </p> --}}
                        </div>
                    </div>
                </div> <!-- end col-->

                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="orders-chart"> </div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup">3</span></h4>
                                <p class="text-muted mb-0">Processed Orders</p>
                            </div>
                            {{-- <p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i
                                        class="mdi mdi-arrow-down-bold me-1"></i>0.82%</span> since last week
                            </p> --}}
                        </div>
                    </div>
                </div> <!-- end col-->

                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="customers-chart"> </div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup">6</span></h4>
                                <p class="text-muted mb-0">Received Orders</p>
                            </div>
                            {{-- <p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i
                                        class="mdi mdi-arrow-down-bold me-1"></i>6.24%</span> since last week
                            </p> --}}
                        </div>
                    </div>
                </div> <!-- end col-->

                <div class="col-md-6 col-xl-3">

                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="growth-chart"></div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1"> <span>89</span></h4>
                                <p class="text-muted mb-0">Customers</p>
                            </div>
                            {{-- <p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i
                                        class="mdi mdi-arrow-up-bold me-1"></i>10.51%</span> since last week
                            </p> --}}
                        </div>
                    </div>
                </div> <!-- end col-->
            </div> <!-- end row-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Latest Orders</h4>
                            <div class="table-responsive">
                                <table class="table table-centered table-nowrap mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Order No</th>
                                            <th>Customer Name</th>
                                            <th>Tracking No</th>
                                            <th>Date Ordered</th>
                                            <th>Collection Mode</th>
                                            <th>Sales Area</th>
                                            <th>Collection Point</th>
                                            <th>Truck No</th>
                                            <th>Order Status</th>
                                        </tr>
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
                                          <td></td>
                                          <td></td>
                                      </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- end table-responsive -->
                        </div>
                    </div>
                </div>
            </div>


            <!-- end row -->


            <!-- end row -->


        </div> <!-- container-fluid -->
    </div>
@endsection
