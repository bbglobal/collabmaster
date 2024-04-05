@extends('layouts.main')

@push('footer-style')
    <style>
        .nk-footer {
            display: none;
        }

        .input {
            width: 100%;
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
                                        <div class="step-holder">7/10</div>
                                    </div>
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title"><b>Select all that apply</b>
                                            </h3>
                                        </div>
                                    </div>

                                    <form method="POST" action="{{ route('create.campaign', ['id' => 8]) }}"
                                        id="form">
                                        @csrf
                                        <div class="form-group mb-3 s-1">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="yearly" name="genderOption"
                                                    class="custom-control-input" value="Influencer required to post on their page?">
                                                <label class="custom-control-label" for="yearly">
                                                    <strong>Influencer required to post on their page?</strong>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 s-1">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="monthly" name="genderOption_2"
                                                    class="custom-control-input" value="Content approval required before posting?">
                                                <label class="custom-control-label" for="monthly">
                                                    <strong>Content approval required before posting?</strong>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 s-1">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="ads" name="genderOption_3"
                                                    class="custom-control-input" value="Will you be using the content for ads?">
                                                <label class="custom-control-label" for="ads">
                                                    <strong>Will you be using the content for ads?</strong>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 s-1">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="shipping" name="genderOption_4"
                                                    class="custom-control-input" value="Are you shipping a physical product?">
                                                <label class="custom-control-label" for="shipping">
                                                    <strong>Are you shipping a physical product?</strong>
                                                </label>
                                            </div>
                                        </div>
                                        <input class="input option-input" type="number" name="product_cost"
                                            placeholder="What is your cost on the product? (USD)" min="0"
                                            width="100% ">
                                        <div class="form-group mb-3 s-1">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="date" name="genderOption_5"
                                                    class="custom-control-input" value="Do you expect the content by a certain date?">
                                                <label class="custom-control-label" for="date">
                                                    <strong>Do you expect the content by a certain date?</strong>
                                                </label>
                                            </div>
                                        </div>
                                        <input class="input option-input" type="text" name="delivery_date"
                                            placeholder="MM/DD/YYYY">
                                        <div class="form-group mb-3 s-1">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="tag" name="genderOption_6"
                                                    class="custom-control-input" value="Do influencers need to tag you?">
                                                <label class="custom-control-label" for="tag">
                                                    <strong>Do influencers need to tag you?</strong>
                                                </label>
                                            </div>
                                        </div>
                                        <input class="input option-input" type="text" name="mentions"
                                            placeholder="@ Mentions" maxlength="100" value="">
                                        <div class="form-group mb-3">
                                            <button type="submit" class="btn btn-lg btn-secondary btn-block s-3-con"
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

            $('input[type="radio"]').change(function() {
                // Show corresponding input field if radio button is checked
                if ($(this).is(':checked')) {
                    $(this).closest('.form-group').next('.input').show();
                }
            });
        });
    </script>
@endsection
