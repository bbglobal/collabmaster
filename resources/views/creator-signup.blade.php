@extends('layouts.main')

@push('footer-style')
    <style>
        .nk-footer {
            display: none;
        }
    </style>
@endpush

@section('main-section')
    <!-- content @s
        -->
        <div class="nk-content " style="width: 92%;margin: 0 auto;margin-top: 40px;">
            <div class="container-fluid">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-content-wrap">


                            <div class="nk-block nk-block-middle nk-auth-body wide-xs pt-0">
                                <div class="card">
                                    <div class="card-inner card-inner">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content text-center">
                                                <h3 class="nk-block-title"><b>Create Your Profile</b></h3>
                                            </div>
                                        </div>
                                        <div class="nk-block-head my-4">
                                            <div class="nk-block-head-content w-75 mx-auto">
                                                <div class="d-flex"
                                                    style="padding: 5px 5px; border: 1px solid; border-radius:4px;">
                                                    <svg class="m-auto" width="15" version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg" viewbox="0 0 48 48"
                                                        class="LgbsSe-Bz112c">
                                                        <g>
                                                            <path fill="#EA4335"
                                                                d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z">
                                                            </path>
                                                            <path fill="#4285F4"
                                                                d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z">
                                                            </path>
                                                            <path fill="#FBBC05"
                                                                d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z">
                                                            </path>
                                                            <path fill="#34A853"
                                                                d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z">
                                                            </path>
                                                            <path fill="none" d="M0 0h48v48H0z"></path>
                                                        </g>
                                                    </svg>
                                                    <a href="{{ route('login.google') }}" class="w-100 text-center"> Sign in
                                                        with
                                                        Google</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="seperator"><span>or</span></div>
                                        @if ($message = Session::get('success'))
                                            <div class="alert alert-soft-success d-flex" role="alert">
                                                <i class="material-icons mr-3">check_circle</i>
                                                <div class="text-body">
                                                    {{ $message }}
                                                </div>
                                            </div>
                                        @elseif ($message = Session::get('error'))
                                            <div class="alert alert-soft-danger d-flex" role="alert">
                                                <i class="material-icons mr-3">check_circle</i>
                                                <div class="text-body">
                                                    {{ $message }}
                                                </div>
                                            </div>
                                        @endif
                                        <form method="POST" action="{{ route('creator.register') }}" id="form">
                                            @csrf
                                            <div class="form-group mb-3">
                                                <input id="full_name" type="text"
                                                    class="form-control form-control-lg @error('full_name') is-invalid @enderror"
                                                    name="full_name" value="{{ old('full_name') }}" autofocus
                                                    placeholder="Full Name" required>
                                                @error('full_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-3">
                                                <input id="email" type="email"
                                                    class="form-control form-control-lg @error('email') is-invalid @enderror"
                                                    name="email" value="{{ old('email') }}" autofocus placeholder="Email"
                                                    required>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="form-control-wrap">
                                                    <a href="javascript:void(0);"
                                                        class="form-icon form-icon-right passcode-switch"
                                                        data-target="password">
                                                        <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                        <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                                    </a>
                                                    <input id="password" type="password"
                                                        class="form-control form-control-lg @error('password') is-invalid @enderror"
                                                        name="password" placeholder="Password">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group mb-5">
                                                <button type="submit" class="btn btn-lg btn-secondary btn-block"
                                                    id="primary">Signup</button>

                                                <button class="btn btn-lg btn-secondary btn-block d-none" id="loading"
                                                    type="button" disabled>
                                                    <span class="spinner-border spinner-border-sm" role="status"
                                                        aria-hidden="true"></span>
                                                    <span>Loading...</span>
                                                </button>
                                            </div>
                                        </form>
                                        <div class="login-forgot forgot w-100 text-center my-4">Forgot password?</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content @e -->

        <script>
            $(document).ready(function() {
                $('#form').submit(() => {
                    $('#primary').addClass("d-none");
                    $("#loading").removeClass("d-none")
                });
            });
        </script>
    @endsection
