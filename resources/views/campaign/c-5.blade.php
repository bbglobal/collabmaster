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
                            <div class="card mt-5">
                                <div class="card-inner card-inner p-0">
                                    <div class="top-btn-holder">
                                        <div class="example-profile-btn">View Example Campaign</div>
                                        <div class="step-holder">5/10</div>
                                    </div>
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title"><b>Describe the product/service you are promoting</b></h3>
                                        </div>
                                    </div>

                                    <form method="POST" action="{{ route('create.campaign', ['id' => 6]) }}"
                                        id="form">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <textarea name="" class="form-control form-control-lg" autofocus id="" cols="30" rows="5"
                                                placeholder="What is the product/service you want the influencer to promote? What are some key points regarding it?"></textarea>
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
