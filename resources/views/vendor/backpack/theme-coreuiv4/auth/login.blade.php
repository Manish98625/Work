@extends(backpack_view('layouts.plain'))
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <style>
        .password {
            position: relative;
        }
    </style>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="container ">
        <div class="row ">
            <div class="col-lg-6 left d-flex flex-column justify-content-center align-items-center  ">
                <div class="logo_wrapper text-center text-white">
                    <img src="/storage/logo-removebg-preview (3).png" alt="" class="mb-3" width="25%" />
                    <h4>Wattra Technology. Pvt.Ltd</h4>
                    <h4>Importer & Supplier</h4>
                    <h5>Ramkot-06, Nagarjun, Nepal</h5>
                </div>
                <div class="company_label" style="text-align: center">
                    &copy; Wattra Technology All rights reserverd.<br>

                </div>
            </div>
            <div class="col-lg-6 p-5 right d-flex align-items-center justify-content-center">
                
                
                    <div class="card p-2">
                        <div class="card-body">
                            <form class="col-md-12 p-t-10" role="form" method="POST"
                                action="{{ route('backpack.auth.login') }}">
                                {!! csrf_field() !!}

                                <div class="form-group">
                                    <label class="control-label"
                                        for="{{ $username }}">{{ trans(config('backpack.base.authentication_column_name')) }}</label>

                                    <div>
                                        <input type="text"
                                            class="form-control{{ $errors->has($username) ? ' is-invalid' : '' }}"
                                            name="{{ $username }}" value="{{ old($username) }}"
                                            id="{{ $username }}">

                                        @if ($errors->has($username))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first($username) }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label"
                                        for="password">{{ trans('backpack::base.password') }}</label>

                                    <div>
                                        <input type="password"
                                            class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                            name="password" id="password">

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember">
                                                {{ trans('backpack::base.check_password') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-0">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-block btn-primary">
                                            {{ trans('backpack::base.login') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    {{--  @if (backpack_users_have_email() && backpack_email_column() == 'email' && config('backpack.base.setup_password_recovery_routes', true))
                        <div class="text-center"><a
                                href="{{ route('backpack.auth.password.reset') }}">{{ trans('backpack::base.forgot_your_password') }}</a>
                        </div>
                    @endif
                    @if (config('backpack.base.registration_open'))
                        <div class="text-center"><a
                                href="{{ route('backpack.auth.register') }}">{{ trans('backpack::base.register') }}</a>
                        </div>
                    @endif --}}
                </div>
            </div>
            <script>
                const togglePassword = document.querySelector("#togglePassword");
                const passwordInput = document.querySelector("#password");

                togglePassword.addEventListener("click", function() {
                    if (passwordInput.type === 'password') {
                        passwordInput.type = 'text';
                    } else {
                        passwordInput.type = 'password';
                    }
                });
            </script>
        @endsection
