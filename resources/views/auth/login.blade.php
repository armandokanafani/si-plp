<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PLP-Login</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/iconfonts/puse-icons-feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.addons.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <form method="POST" action="{{ url('login/proses') }}">
        {{ csrf_field() }}
        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
                <div class="content-wrapper d-flex align-items-center auth theme-one">
                    <div class="row w-100">
                        <div class="col-md-12" style="margin-bottom: 20px;">
                            <h2 style="text-align: center;">Login</h2>
                        </div>
                        <div class="col-lg-4 mx-auto">
                            <div class="auto-form-wrapper">
                                <div class="form-group">
                                    <label class="label">Username</label>
                                    <div class="input-group">
                                        <input id="username" type="text" class="form-control" 
                                        @error('username')
                                            id-invalid
                                        @enderror
                                        name="username" placeholder="Username">
                                        <div class="input-group-append">
                                            <span class="input-group-text"></span>
                                        </div>

                                        @error('username')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label class="label">Password</label>
                                    <div class="input-group">
                                        <input id="password" type="password" class="form-control"
                                        @error('password')
                                            id-invalid
                                        @enderror
                                        name="password" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text"></span>
                                        </div>

                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                </div>
                                    </div>
                                <div class="form-group">
                                    <button class="btn btn-primary submit-btn btn-block" type="submit">Login</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>              
            </div>
        </div>
    </form>
    
    <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('vendors/js/vendor.bundle.addons.js')}}"></script>
</body>
</html>