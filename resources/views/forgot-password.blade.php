@extends('layouts.main')

@push('footer-style')
    <style>
        .nk-footer {
            display: none;
        }

        a {
            color: #000;
        }

        a:hover {
            color: #000;
        }
    </style>
@endpush

@section('main-section')
    <!-- content @s
        -->
        @if ($message = session('status'))
            <div id="msg-holder">
                <div id="msg-holder-row">
                    <img src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/succ.svg"
                        class="succ-err-msg-img" id="msg-img-err">
                    <div id="msg">{{ $message }}</div>
                </div>
            </div>
        @elseif ($message = session('email'))
            <div id="msg-holder">
                <div id="msg-holder-row">
                    <img src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/err.svg"
                        class="succ-err-msg-img" id="msg-img-err">
                    <div id="msg">{{ $message }}</div>
                </div>
            </div>
        @endif

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
                                                <h3 class="nk-block-title"><b>Enter your Email</b></h3>
                                            </div>

                                        </div>
                                        <form method="POST" action="{{ route('password.email') }}" id="form">
                                            @csrf
                                            @if (session('success'))
                                                <div class="alert alert-danger">{{ session('success') }}</div>
                                            @endif
                                            <div class="form-group mb-5">
                                                <input id="email" type="email"
                                                    class="form-control form-control-lg @error('email') is-invalid @enderror"
                                                    name="email" value="" autofocus="" placeholder="Email"
                                                    required="">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-3">
                                                <button type="submit" class="btn btn-lg btn-secondary btn-block s-6-con"
                                                    id="primary">Continue</button>

                                                <button class="btn btn-lg btn-secondary btn-block d-none" id="loading"
                                                    type="button" disabled>
                                                    <span class="spinner-border spinner-border-sm" role="status"
                                                        aria-hidden="true"></span>
                                                    <span>Loading...</span>
                                                </button>
                                            </div>
                                        </form>
                                        <a href="{{ route('user.login') }}"
                                            class="login-forgot forgot w-100 text-center my-4 d-block">Back to Login</a>
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
                    $("#loading").removeClass("d-none");
                });
            });
        </script>
    @endsection
