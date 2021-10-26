@extends('layouts.app')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">Change Pin</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Unga Group</a></li>
                            <li class="breadcrumb-item active">Change Pin</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-md-6" style="margin: 0 auto">
                <div class="card">
                    <div class="card-header">Change Pin</div>
                    <div class="card-body">
                        @if (session('message'))
                            <div class="alert alert-danger">
                                <p>{{ session('message') }}</p>
                            </div>
                        @endif
                        <form action="{{ route('pin.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Enter Current Pin<span class="text-danger">*</span></label>
                                <input type="password" class="form-control" name="old_pin" required>
                                @error('old_pin')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Enter New Pin<span class="text-danger">*</span></label>
                                <input type="password" class="form-control" name="new_pin" required>
                                @error('new_pin')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Confirm New Pin<span class="text-danger">*</span></label>
                                <input type="password" class="form-control" name="confirm_new_pin" required>
                                @error('confirm_new_pin')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <button class="btn btn-success mt-4" type="submit">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

    </div> <!-- container-fluid -->
</div>
@endsection
