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
                                        <div class="step-holder">9/10</div>
                                    </div>
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title"><b>Add links to content examples</b></h3>
                                        </div>
                                    </div>

                                    <form method="POST" action="{{ route('create.campaign', ['id' => 10]) }}"
                                        id="form">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <input id="content_link" type="text"
                                                class="form-control form-control-lg" name="content_1" autofocus
                                                placeholder="https://example.com/img.png" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <input id="content_link" type="text"
                                                class="form-control form-control-lg" name="content_2" autofocus
                                                placeholder="https://example.com/img.png" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <input id="content_link" type="text"
                                                class="form-control form-control-lg" name="content_3" autofocus
                                                placeholder="https://example.com/img.png" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <input id="content_link" type="text"
                                                class="form-control form-control-lg" name="content_4" autofocus
                                                placeholder="https://example.com/img.png" required>
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
