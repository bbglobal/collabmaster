@extends('layouts.main')

@push('footer-style')
    <style>
        .nk-footer {
            display: none;
        }

        .scroll-holder {
            max-height: none;
        }

        @media (min-width: 576px) {
            .wide-xs {
                max-width: 70% !important;
            }

            .wide-xs-fix {
                width: 70% !important;
            }
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
                                    <div class="nk-block-head">
                                        <div class="top-btn-holder">
                                            <div class="example-profile-btn">View Example Campaign</div>
                                            <div class="step-holder">8/10</div>
                                        </div>
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title">
                                                <b>Add up to 4 images of the product and content
                                                    examples</b>
                                            </h3>
                                        </div>
                                    </div>

                                    <form method="POST" action="{{ route('create.campaign', ['id' => 9]) }}" class="form"
                                        id="form" enctype="multipart/form-data">
                                        @csrf
                                        <div class="scroll-holder scroll-holder-wide">

                                            <div class="img-row">
                                                <!-- overlay -->
                                                <div class="upload-img-overlay">
                                                    <div class="upload-btn-overlay">
                                                        <input type="file"
                                                            class="img-file-input file-input js-img-file-input"
                                                            name="img_files" accept="image/*" multiple />
                                                        <div class="upload-img-btn btn">
                                                            <img class="upload-btn-img"
                                                                src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/upload.svg">Upload
                                                            Photos
                                                        </div>
                                                    </div>
                                                    <div class="primary-img">
                                                        <div class="file-area"></div>
                                                    </div>
                                                    <div class="img-col">
                                                        <div class="img-row-sq">
                                                            <div class="file-area"></div>
                                                            <div class="file-area"></div>
                                                        </div>
                                                        <div class="file-area file-area4"></div>
                                                    </div>
                                                </div>

                                                <!-- overlay end -->

                                                <div class="primary-img">
                                                    <div class="file-area">
                                                        <div class="cover-img-badge">Cover Photo</div>
                                                        <input id="required-img" onchange="showImg(this,0)"
                                                            class="img-input" type="file" name="img1"
                                                            accept="image/*">
                                                        <img class="img img1"
                                                            src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/defaultCover.png">
                                                    </div>
                                                </div>
                                                <div class="img-col">
                                                    <div class="img-row-sq">
                                                        <div class="file-area">
                                                            <!-- menu btn -->
                                                            <div class="more-img-holder">
                                                                <div class="more-img-badge">&#8226;&#8226;&#8226;</div>
                                                                <div class="more-img-dropdown-holder">

                                                                    <div class="more-img-dropdown-item" data-action="cover"
                                                                        data-id="2">Make cover
                                                                        photo</div>

                                                                    <div class="more-img-dropdown-item" data-action="delete"
                                                                        data-id="2">Delete</div>
                                                                </div>
                                                            </div>
                                                            <!-- menu btn end -->

                                                            <input onchange="showImg(this,1)" class="img-input"
                                                                type="file" name="img2" accept="image/*">
                                                            <img class="img img2"
                                                                src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/default.png">
                                                        </div>
                                                        <div class="file-area">
                                                            <!-- menu btn -->
                                                            <div class="more-img-holder">
                                                                <div class="more-img-badge">&#8226;&#8226;&#8226;</div>
                                                                <div class="more-img-dropdown-holder">

                                                                    <div class="more-img-dropdown-item" data-action="cover"
                                                                        data-id="3">Make cover
                                                                        photo</div>

                                                                    <div class="more-img-dropdown-item" data-action="delete"
                                                                        data-id="3">Delete</div>
                                                                </div>
                                                            </div>
                                                            <!-- menu btn end -->

                                                            <input onchange="showImg(this,2)" class="img-input"
                                                                type="file" name="img3" accept="image/*">
                                                            <img class="img img3"
                                                                src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/default.png">
                                                        </div>
                                                    </div>
                                                    <div class="file-area file-area4">
                                                        <!-- menu btn -->
                                                        <div class="more-img-holder">
                                                            <div class="more-img-badge">&#8226;&#8226;&#8226;</div>
                                                            <div class="more-img-dropdown-holder">

                                                                <div class="more-img-dropdown-item" data-action="cover"
                                                                    data-id="4">Make cover
                                                                    photo</div>

                                                                <div class="more-img-dropdown-item" data-action="delete"
                                                                    data-id="4">Delete</div>
                                                            </div>
                                                        </div>
                                                        <!-- menu btn end -->

                                                        <input onchange="showImg(this,3)" class="img-input"
                                                            type="file" name="img4" accept="image/*">
                                                        <img class="img img4"
                                                            src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/default.png">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <button type="submit" class="btn btn-lg btn-secondary btn-block s-2-con"
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
            $('#form').submit(() => {
                $('#primary').addClass("d-none");
                $("#loading").removeClass("d-none")
            });
            $('.platform-holder').click(function() {
                $(this).find('.platform-option').hide();
                $(this).find('.input-row').show();
            });
        });
    </script>
@endsection
