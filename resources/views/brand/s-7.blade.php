@extends('layouts.main')

@push('footer-style')
    <style>
        .nk-footer {
            display: none;
        }

        #brand-none {
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
                            <div class="progress progress-lg">
                                <div class="progress-bar" id="progressBar" data-progress="25">25%</div>
                            </div>

                            <div id="s-7">
                                <div class="card">
                                    <div class="card-inner card-inner p-0">
                                        <div class="nk-block-head my-5">
                                            <div class="nk-block-head-content">
                                                <h3 class="nk-block-title"><b>What’s your annual budget for working with
                                                        influencers?</b>
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
                                        <form method="POST" action="{{ route('submit.brand', ['id' => Auth::user()->id]) }}"
                                            id="form">
                                            @csrf
                                            <div class="form-group mb-3 s-1">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="thousand" name="genderOption"
                                                        class="custom-control-input" value="Under $1,000">
                                                    <label class="custom-control-label" for="thousand">
                                                        <strong>Under $1,000</strong>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3 s-1">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="five-thousand" name="genderOption"
                                                        class="custom-control-input" value="$1,000 - $5,000">
                                                    <label class="custom-control-label" for="five-thousand">
                                                        <strong>$1,000 - $5,000</strong>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3 s-1">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="ten-thousand" name="genderOption"
                                                        class="custom-control-input" value="$5,000 - $10,000">
                                                    <label class="custom-control-label" for="ten-thousand">
                                                        <strong>$5,000 - $10,000</strong>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3 s-1">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="fifty-thousand" name="genderOption"
                                                        class="custom-control-input" value="$10,000 - $50,000">
                                                    <label class="custom-control-label" for="fifty-thousand">
                                                        <strong>$10,000 - $50,000</strong>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3 s-1">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="plus" name="genderOption"
                                                        class="custom-control-input" value="$50,000+">
                                                    <label class="custom-control-label" for="plus">
                                                        <strong>$50,000+</strong>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <button type="submit" class="btn btn-lg btn-secondary btn-block s-7-con"
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
        });
    </script>
@endsection
