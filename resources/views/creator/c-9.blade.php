@extends('layouts.main')

@push('footer-style')
    <style>
        .nk-footer {
            display: none;
        }

        #brand-none {
            display: none;

        }

        input[type="radio"] {
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

                            <div id="s-4">
                                <div class="card">
                                    <div class="card-inner card-inner p-0">
                                        <div class="top-btn-holder">
                                            {{-- <div class="example-profile-btn">View Example Campaign</div> --}}
                                            <div class="step-holder">9/11</div>
                                        </div>
                                        <div class="nk-block-head my-5">
                                            <div class="nk-block-head-content">
                                                <h3 class="nk-block-title"><b>Which one is you Main Platform?</b>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="top-btn-holder">
                                            <svg class="back-btn" onclick="" viewBox="0 0 24 24" aria-hidden="true">
                                                <path
                                                    d="M19 11H7.83l4.882-4.882a1 1 0 000-1.413h-.005a1 1 0 00-1.408 0L4.705 11.3a1 1 0 000 1.41L11.3 19.3a1 1 0 001.41 0 1 1 0 000-1.41L7.83 13H19a1 1 0 001-1 1 1 0 00-1-1z">
                                                </path>
                                            </svg>
                                        </div>

                                        <form method="POST" action="{{ route('create.page', ['id' => 10]) }}"
                                            id="form">  
                                            @csrf
                                            <div class="niches-holder scroll-holder">
                                                <label class="niche-holder" for="instagram">Instagram
                                                    <input type="radio" name="platform" id="instagram" value="Instagram">
                                                </label>
                                                <label class="niche-holder" for="tikTok">TikTok
                                                    <input type="radio" name="platform" id="tikTok" value="TikTok">
                                                </label>
                                                <label class="niche-holder" for="user-generated">User Generated Content
                                                    <input type="radio" name="platform" id="user-generated"
                                                        value="User Generated Content">
                                                </label>
                                                <label class="niche-holder" for="you-tube">YouTube
                                                    <input type="radio" name="platform" id="you-tube" value="YouTube">
                                                </label>
                                            </div>
                                            <div class="form-group mb-3">
                                                <button type="submit" class="btn btn-lg btn-secondary btn-block s-4-con"
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
    <!-- content @e -->

    <script>
        $(document).ready(function() {

            $('#form').submit(() => {
                $('#primary').addClass("d-none");
                $("#loading").removeClass("d-none")
            });

            $('.niche-holder input[type="radio"]').on('change', function() {
                // Remove the 'niche-selected' class from all niche holders
                $('.niche-holder').removeClass('niche-selected');

                // Check if the current radio input is checked
                if ($(this).is(':checked')) {
                    // Add the 'niche-selected' class to the closest niche holder
                    $(this).closest('.niche-holder').addClass('niche-selected');
                }
            });
        });
    </script>
@endsection
