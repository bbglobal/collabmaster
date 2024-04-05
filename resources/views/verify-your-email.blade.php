@extends('layouts.main')

@push('footer-style')
    <style>
        .nk-footer {
            display: none;
        }
    </style>
@endpush

@section('main-section')
    @if ($message = Session::get('error'))
        <div id="msg-holder">
            <div id="msg-holder-row">
                <img src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/err.svg" id="msg-img-err"
                    class="succ-err-msg-img">
                <div id="msg">{{ $message }}</div>
            </div>
        </div>
    @endif
    <div class="nk-content main-outer-container">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-content-wrap">


                        <div class="nk-block nk-block-middle nk-auth-body wide-xs pt-0">
                            <div class="card">
                                <div class="card-inner card-inner p-0">
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title"><b>Verify your email</b></h3>

                                            <small class="text-muted">We sent an email to {{ Auth::user()->email }}. Check
                                                your inbox and enter the
                                                6-digit code to verify your email.</small>
                                        </div>
                                    </div>

                                    <form method="POST" action="" id="verify-form">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <input id="verification-code" type="text"
                                                class="form-control form-control-lg @error('verificationCode') is-invalid @enderror"
                                                name="verificationCode" value="{{ old('verificationCode') }}" autofocus
                                                placeholder="6-Digit Code" required>
                                            @error('verificationCode')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <button type="submit" class="btn btn-lg btn-secondary btn-block"
                                                id="primary">Continue</button>

                                            <button class="btn btn-lg btn-secondary btn-block d-none" id="loading"
                                                type="button" disabled>
                                                <span class="spinner-border spinner-border-sm" role="status"
                                                    aria-hidden="true"></span>
                                                <span>Loading...</span>
                                            </button>
                                        </div>
                                    </form>

                                    <div class="login-forgot forgot w-100 text-center my-4">
                                        <a href="#" class="text-dark">I didn't receive an email</a>.
                                    </div>
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
            $('#verify-form').submit(function(event) {
                event.preventDefault();

                $('#primary').addClass("d-none");
                $("#loading").removeClass("d-none")
                var verificationCodeValue = $('#verification-code').val();

                $(this).attr('action', $(this).attr('action') + '/token/' + encodeURIComponent(
                    verificationCodeValue));

                this.submit();
            });
        });
    </script>
@endsection
