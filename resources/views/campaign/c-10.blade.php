@extends('layouts.main')

@push('footer-style')
    <style>
        .nk-footer {
            display: none;
        }

        .file-upload-area {
            position: relative;
            margin-bottom: 3%;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            border-radius: 8px;
            padding: 15px 0;
            font-weight: 500;
            border: 1px solid rgba(191, 203, 218, .52);
        }

        .file-upload-img {
            width: 18px;
            margin-right: 10px;
        }

        .file-input {
            opacity: 0;
            width: 100%;
            z-index: 1;
            height: 100%;
            top: 0;
            left: 0;
            position: absolute;
            cursor: pointer;

        }

        input[type="hidden" i] {
            appearance: none;
            background-color: initial;
            cursor: default;
            display: none !important;
            padding: initial;
            border: initial;
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
                                        <div class="step-holder">10/10</div>
                                    </div>
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title"><b>Upload documents the influencer will need</b></h3>
                                        </div>
                                    </div>

                                    <form method="POST" action="{{ route('submit.campaign', ['id' => Auth::user()->id]) }}"
                                        id="form" enctype="multipart/form-data">
                                        @csrf
                                        <div class="file-upload-area">
                                            <img class="file-upload-img"
                                                src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/upload.svg">Click
                                            to upload files
                                            <input type="file" class="file-input js-file-input" name="files" multiple>
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
