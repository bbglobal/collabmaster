@extends('layouts.main')

@push('footer-style')
    <style>
        .nk-footer {
            display: none;
        }#brand-none{
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

                            <div id="s-6">
                                <div class="card">
                                    <div class="card-inner card-inner p-0">
                                        <div class="top-btn-holder">
                                            {{-- <div class="example-profile-btn">View Example Campaign</div> --}}
                                            <div class="step-holder">6/7</div>
                                        </div>
                                        <div class="nk-block-head my-5">
                                            <div class="nk-block-head-content">
                                                <h3 class="nk-block-title"><b>How many pieces of content do you need from
                                                        influencers each month?</b>
                                                </h3>
                                            </div>
                                        </div>
                                        <a href="{{ route('register.brand', ['id' => 5]) }}" class="top-btn-holder d-block">
                                            <svg class="back-btn" viewBox="0 0 24 24" aria-hidden="true">
                                                <path
                                                    d="M19 11H7.83l4.882-4.882a1 1 0 000-1.413h-.005a1 1 0 00-1.408 0L4.705 11.3a1 1 0 000 1.41L11.3 19.3a1 1 0 001.41 0 1 1 0 000-1.41L7.83 13H19a1 1 0 001-1 1 1 0 00-1-1z">
                                                </path>
                                            </svg>
                                        </a>

                                        <form method="POST" action="{{ route('register.brand', ['id' => 7]) }}"
                                            id="form">
                                            @csrf
                                            <div class="form-group mb-3 s-1">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="five" name="content"
                                                        class="custom-control-input" value="0-5">
                                                    <label class="custom-control-label" for="five">
                                                        <strong>0-5</strong>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3 s-1">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="ten" name="content"
                                                        class="custom-control-input" value="5-10">
                                                    <label class="custom-control-label" for="ten">
                                                        <strong>5-10</strong>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3 s-1">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="twenty" name="content"
                                                        class="custom-control-input" value="10-20">
                                                    <label class="custom-control-label" for="twenty">
                                                        <strong>10-20</strong>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3 s-1">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="fifty" name="content"
                                                        class="custom-control-input" value="20-50">
                                                    <label class="custom-control-label" for="fifty">
                                                        <strong>20-50</strong>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3 s-1">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="plus" name="content"
                                                        class="custom-control-input" value="50+">
                                                    <label class="custom-control-label" for="plus">
                                                        <strong>50+</strong>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <button type="submit" class="btn btn-lg btn-secondary btn-block s-6-con"
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
                $("#loading").removeClass("d-none");
            });
        });
    </script>
@endsection
