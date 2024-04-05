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
                                        <span class="text-dark no-verify-email">I didn't receive an email</span>.
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.no-verify-email').click(function() {
            showModal(`
<link rel='stylesheet' type='text/css' href="/static/igmarketplace/profile/walkthrough.css?v=3.67">

<div class="slide" style="display: block">
    <div class="modal-content-header">
        <div class="modal-content-header-title">Can't Find the Email?</div>
        <div class="close-modal"><img class="close-modal-img" src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/closeModal.svg"></div>
    </div>

    <div class="modal-content-scroll">
        <div class="steps-holder">
            <div class="step-holder">
                <div class="step-info-holder">
                    <div class="step-title">1. Check All of Your Folders</div>
                    <div class="step-txt">Sometimes emails end up in spam or folders other than your inbox. Be sure to check all of your folders for the verification email.</div>
                </div>
            </div>

            <div class="step-holder">
                <div class="step-info-holder">
                    <div class="step-title">2. Search for Emails From hello@collabstr.com</div>
                    <div class="step-txt">Search your inbox for emails from hello@collabstr.com.</div>
                </div>
            </div>

            <div class="step-holder">
                <div class="step-info-holder">
                    <div class="step-title">3. Resend Email</div>
                    <div class="step-txt">If you still can't find the email, try resending it using the button below. If you still are having issues, <a style="color: #222;" href="/support">Contact Us</a>.</div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-content-footer">
        <button class='btn modal-btn resend-btn'>Resend Email</button>
    </div>
</div>`);
        });
    </script>
    <!-- content @e -->

    <script>
        $(document).ready(function() {
            $('#verify-form').submit(function(event) {
                event.preventDefault();

                $('#primary').addClass("d-none");
                $("#loading").removeClass("d-none")
                var verificationCodeValue = $('#verification-code').val();

                $(this).attr('action', $(this).attr('action') + '/verify/' + encodeURIComponent(
                    verificationCodeValue));

                this.submit();
            });
        });
    </script>
@endsection
