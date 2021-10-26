<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Login | Unga Group</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<meta content="Unga Group Ltd Customer Web Interface" name="description" />-->
        <!--<meta content="Unga Group" name="author" />-->
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">

        <!-- Bootstrap Css -->
        <link href="{{ asset('css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg">
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <a href="#" class="mb-5 d-block auth-logo">

                                {{-- <img src="{{ asset('images/logo.png') }}" alt="" width="140px" > --}}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6">
                        <div class="card">

                            <div class="card-body p-4">
                                <div class="text-center">
                                    <img src="{{ asset('images/logo.png') }}" alt="" width="140px" >
                                </div>
                                <div>
                                    @if (session('danger'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>{{ session('danger') }}</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                    @endif
                                    <form method="POST" action="{{ route('login.store') }}">
                                         @csrf
                                        <div class="mb-3">
                                            <label class="form-label" for="username">Email</label>
                                            <input type="text" class="form-control" name="email" id="email" placeholder="Enter email">
                                            @error('email')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            {{-- <div class="float-end">
                                                <a href="" class="text-muted">Forgot password?</a>
                                            </div> --}}
                                            <label class="form-label" for="userpassword">Password</label>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
                                            @error('password')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="auth-remember-check">
                                            <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                        </div>

                                        <div class="mt-3 text-end">
                                            <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">Log In</button>
                                            {{-- <button type="button" class="btn btn-success" onclick="user()">Get User</button> --}}
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>

                        {{-- <div class="mt-5 text-center">
                            <p>© <script>document.write(new Date().getFullYear())</script> Minible. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                        </div> --}}

                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('libs/node-waves/waves.min.js') }}"></script>
        <script src="{{ asset('libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('libs/jquery.counterup/jquery.counterup.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('js/app.js') }}"></script>
        <!-- axios -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
        <script src="{{ asset('js/main.js') }}"></script>

    </body>
</html>
