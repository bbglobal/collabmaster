@extends('layouts.main')

@push('footer-style')
    <style>
        .nk-footer {
            display: none;
        }
    </style>
@endpush

@section('main-section')
    @if ($message = Session::get('message'))
        <div id="msg-holder">
            <div id="msg-holder-row">
                <img src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/succ.svg"
                    class="succ-err-msg-img" id="msg-img-succ">
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
                            {{-- <div class="progress progress-lg">
                                <div class="progress-bar" id="progressBar" data-progress="25">25%</div>
                            </div> --}}
                            <div class="card mt-5">
                                <div class="card-inner card-inner p-0">
                                    <div class="top-btn-holder">
                                        {{-- <div class="example-profile-btn">View Example Campaign</div> --}}
                                        <div class="step-holder">9/9</div>
                                    </div>
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h4 class="nk-block-title"><b>Last step! Become a Trusted Creator</b></h4>
                                            <p>Don't worry, it's free to use Collabstr and you won't be charged for signing up.</p>
                                            <p>We collect this information to show brands that you are a trusted creator, and that you won't steal their products or waste their time.</p>
                                        </div>
                                    </div>

                                    <form method="POST" action="{{ route('submit.creator', ['id' => Auth::user()->id]) }}" id="form">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <input id="card-number" type="text" class="form-control form-control-lg"
                                                name="card_number" autofocus placeholder="Card Number" required>
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

                                    {{-- <div class="login-forgot forgot w-100 text-center my-4">
                                        <a href="#" class="text-dark">I didn't receive an email</a>.
                                    </div> --}}
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
