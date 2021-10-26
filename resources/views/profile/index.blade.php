@extends('layouts.app')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">Profile</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Unga Group</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row mb-4">
            <div class="col-xl-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="text-center">
                            <div class=" float-end">

                                <div class=" pull-right">
                                    <a class="btn btn-success btn-sm" href="#">Edit Profile</a>

                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div>
                                <img src="{{ asset('profile.jpg') }}" alt=""
                                    class="avatar-lg rounded-circle img-thumbnail">
                            </div>
                            <h5 class="mt-3 mb-1">Full Name</h5>
                            <p class="text-muted">ADMIN</p>

                            {{-- <div class="mt-4">
                                <button type="button" class="btn btn-light btn-sm"><i
                                        class="uil uil-envelope-alt me-2"></i> Message</button>
                            </div> --}}
                        </div>

                        <hr class="my-4">

                        <div class="text-muted">
                            <h5 class="font-size-16">Customer No.</h5>
                            <p>0000TH</p>
                            <h5 class="font-size-16">Customer Name</h5>
                            <p>Periska Coach Abdalla</p>
                            <div class="table-responsive mt-4">
                                <div>
                                    <p class="mb-1">Name :</p>
                                    <h5 class="font-size-16">Shariff Ltd</h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-1">Mobile :</p>
                                    <h5 class="font-size-16">+254789654545</h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-1">E-mail :</p>
                                    <h5 class="font-size-16">someone@gmail.com</h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-1">Status :</p>
                                    <h5 class="font-size-16">Active</h5>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end row -->

    </div> <!-- container-fluid -->
</div>
@endsection
