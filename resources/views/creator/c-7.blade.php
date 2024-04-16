@extends('layouts.main')

@push('footer-style')
    <style>
        .nk-footer {
            display: none;
        }

        .scroll-holder {
            max-height: none;
        }

        .img {
            object-fit: cover;
            width: 100%;
            height: 100%;
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
                            {{-- <div class="progress progress-lg">
                                <div class="progress-bar" id="progressBar" data-progress="25">25%</div>
                            </div> --}}
                            <div id="s-1">
                                <div class="card">
                                    <div class="card-inner card-inner p-0">
                                        <div class="top-btn-holder">
                                            {{-- <div class="example-profile-btn">View Example Campaign</div> --}}
                                            <div class="step-holder">7/9</div>
                                        </div>
                                        <div class="nk-block-head my-5">
                                            <div class="nk-block-head-content">
                                                <br />
                                                <h3 class="nk-block-title"><b>Add up to 5 images of you and your content</b>
                                                </h3>
                                            </div>
                                        </div>
                                        <form method="POST" action="{{ route('create.page', ['id' => 8]) }}" class="form"
                                            id="form" enctype="multipart/form-data">
                                            @csrf
                                            <div class="scroll-holder scroll-holder-wide">
                                                <div id='file-area-prof-pic'>
                                                    <img class='profile-img'
                                                        src='{{ url('assets/websiteImages/creatorMarketplace/addProfPic.png') }}'>
                                                    <input id='file-input' type='file' name='img' accept='image/*'>
                                                </div>

                                                <div class="img-row">
                                                    <div class="primary-img">
                                                        <div class="file-area">
                                                            <div class="cover-img-badge">Cover Photo</div>
                                                            <input class="img-input" type="file" id="img1"
                                                                name="img1" accept="image/*">
                                                            <img class="img img1"
                                                                src="{{ url('assets/websiteImages/creatorMarketplace/default.png') }}">
                                                        </div>
                                                    </div>
                                                    <div class="img-col">
                                                        <div class="img-row-sq">
                                                            <div class="file-area">
                                                                <input class="img-input" id="img2" type="file"
                                                                    name="img2" accept="image/*">
                                                                <img class="img img2"
                                                                    src="{{ url('assets/websiteImages/creatorMarketplace/default.png') }}">
                                                            </div>
                                                            <div class="file-area">
                                                                <input class="img-input" type="file" name="img3"
                                                                    id="img3" accept="image/*">
                                                                <img class="img img3"
                                                                    src="{{ url('assets/websiteImages/creatorMarketplace/default.png') }}">
                                                            </div>
                                                        </div>
                                                        <div class="file-area file-area4">
                                                            <input class="img-input" type="file" name="img4"
                                                                id="img4" accept="image/*">
                                                            <img class="img img4"
                                                                src="{{ url('assets/websiteImages/creatorMarketplace/default.png') }}">
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
                                    </div>
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

            const fileInput = document.getElementById('file-input');
            const imgInput = document.getElementById('img1');
            const imgInputTwo = document.getElementById('img2');
            const imgInputThree = document.getElementById('img3');
            const imgInputFour = document.getElementById('img4');
            // Add event listener to detect changes in the file input
            fileInput.addEventListener('change', function(event) {
                // Get the selected file
                const selectedFile = event.target.files[0];

                // Check if a file was selected
                if (selectedFile) {
                    // Read the selected file as a URL
                    const reader = new FileReader();

                    reader.onload = function(event) {
                        // Update the image source with the selected file's URL
                        const imageUrl = event.target.result;
                        document.querySelector('.profile-img').setAttribute('src', imageUrl);
                    };

                    // Read the selected file as a data URL
                    reader.readAsDataURL(selectedFile);
                }
            });

            // Add event listener to detect changes in the file input
            imgInput.addEventListener('change', function(event) {
                // Get the selected file
                const selectedFile = event.target.files[0];

                // Check if a file was selected
                if (selectedFile) {
                    // Read the selected file as a URL
                    const reader = new FileReader();

                    reader.onload = function(event) {
                        // Update the image source with the selected file's URL
                        const imageUrl = event.target.result;
                        document.querySelector('.img1').setAttribute('src', imageUrl);
                    };

                    // Read the selected file as a data URL
                    reader.readAsDataURL(selectedFile);
                }
            });

            // Add event listener to detect changes in the file input
            imgInputTwo.addEventListener('change', function(event) {
                // Get the selected file
                const selectedFile = event.target.files[0];

                // Check if a file was selected
                if (selectedFile) {
                    // Read the selected file as a URL
                    const reader = new FileReader();

                    reader.onload = function(event) {
                        // Update the image source with the selected file's URL
                        const imageUrl = event.target.result;
                        document.querySelector('.img2').setAttribute('src', imageUrl);
                    };

                    // Read the selected file as a data URL
                    reader.readAsDataURL(selectedFile);
                }
            });

            // Add event listener to detect changes in the file input
            imgInputThree.addEventListener('change', function(event) {
                // Get the selected file
                const selectedFile = event.target.files[0];

                // Check if a file was selected
                if (selectedFile) {
                    // Read the selected file as a URL
                    const reader = new FileReader();

                    reader.onload = function(event) {
                        // Update the image source with the selected file's URL
                        const imageUrl = event.target.result;
                        document.querySelector('.img3').setAttribute('src', imageUrl);
                    };

                    // Read the selected file as a data URL
                    reader.readAsDataURL(selectedFile);
                }
            });

            // Add event listener to detect changes in the file input
            imgInputFour.addEventListener('change', function(event) {
                // Get the selected file
                const selectedFile = event.target.files[0];

                // Check if a file was selected
                if (selectedFile) {
                    // Read the selected file as a URL
                    const reader = new FileReader();

                    reader.onload = function(event) {
                        // Update the image source with the selected file's URL
                        const imageUrl = event.target.result;
                        document.querySelector('.img4').setAttribute('src', imageUrl);
                    };

                    // Read the selected file as a data URL
                    reader.readAsDataURL(selectedFile);
                }
            });

        });
    </script>
@endsection
