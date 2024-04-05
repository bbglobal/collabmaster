@extends('layouts.main')

@push('footer-style')
    <style>
        .nk-footer {
            display: none;
        }

        .scroll-holder-wide {
            display: flex;
            flex-wrap: wrap;
            max-height: none;
            overflow-y: auto;
            justify-content: space-between;
        }

        .scroll-holder {
            width: 100%;
        }

        .requirement-holder {
            flex: 0 100%;
        }

        .box-holder {
            border-radius: 8px;
            box-shadow: var(--lightBoxShadow);
            padding: 15px 15px 8px 15px;
            position: relative;
            border: 1px solid var(--black);
            margin: 0 0 2% 0;
        }

        .quantity-row {
            display: flex;
        }

        .requirement-holder .input {
            margin-bottom: 2% !important;
        }

        .input,
        .textarea,
        select {
            -webkit-appearance: none;
            appearance: none;
        }

        .input {
            min-height: 45px;
            padding: 0 4px;
        }

        .duration-row {
            display: none;
        }

        .textarea {
            padding: 4px;
        }

        .textarea,
        .input,
        #card-element {
            font-family: 'Inter', sans-serif;
            border-radius: 8px;
            background-color: white;
            border: 1px solid rgba(191, 203, 218, .9);
            transition-duration: 0.3s;
        }

        .textarea {
            min-height: 105px !important;
        }

        .input {
            width: calc(100% - 10px);
            margin-bottom: 5%;
        }

        .desktop-add-btn {
            margin: 1.5% 0 0 auto;
        }

        .add-btn {
            font-size: 90%;
            width: fit-content;
            cursor: pointer;
            margin-bottom: 10px;
        }

        .delete-btn {
            color: var(--lightGray);
            font-size: 66%;
            cursor: pointer;
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
                                    <div class="top-btn-holder">
                                        <div class="example-profile-btn">View Example Campaign</div>
                                        <div class="step-holder">6/10</div>
                                    </div>
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title"><b>What are the content requirements?</b>
                                            </h3>
                                        </div>
                                    </div>

                                    <form method="POST" action="{{ route('create.campaign', ['id' => 7]) }}"
                                        id="form">
                                        @csrf
                                        <div class="scroll-holder scroll-holder-wide">

                                            <div class="requirement-holder box-holder">
                                                <div class="quantity-row">
                                                    <select class="input package-content-type-select" name="content_type_0">
                                                        <option value="" disabled selected hidden>Choose Content Type
                                                        </option>
                                                        <option value="10">Instagram Photo Feed Post</option>

                                                        <option value="12">Instagram Reel</option>

                                                        <option value="13">Instagram Story</option>

                                                        <option value="14">Instagram Live</option </select>

                                                        <input class="input quantity-input" name="quantity_0" type="number"
                                                            placeholder="Quantity" value="">
                                                </div>
                                                <div class="duration-row">
                                                    <input class="input duration-input" name="duration_0" type="number"
                                                        min="1" placeholder="Duration (Optional)">
                                                    <select class="input duration-unit" name="duration_unit_0">
                                                        <option value="Seconds">Seconds</option>
                                                        <option value="Minutes">Minutes</option>
                                                        <option value="Hours">Hours</option>
                                                    </select>
                                                </div>
                                                <textarea class="input textarea description-input" name="requirement_description_0"
                                                    placeholder="What do you want the influencer to do? Are there any specifics on how the content should look?"
                                                    maxlength="1200"></textarea>
                                            </div>

                                            <div class="requirement-holder box-holder show d-none">
                                                <div class="quantity-row">
                                                    <select class="input package-content-type-select" name="content_type_1">
                                                        <option value="" disabled selected hidden>Choose Content Type
                                                        </option>

                                                    </select>

                                                    <input class="input quantity-input" name="quantity_1" type="number"
                                                        placeholder="Quantity" value="">
                                                </div>
                                                <div class="duration-row">
                                                    <input class="input duration-input" name="duration_1" type="number"
                                                        min="1" placeholder="Duration (Optional)">
                                                    <select class="input duration-unit" name="duration_unit_1">
                                                        <option value="Seconds">Seconds</option>
                                                        <option value="Minutes">Minutes</option>
                                                        <option value="Hours">Hours</option>
                                                    </select>
                                                </div>
                                                <textarea class="input textarea description-input" name="requirement_description_1"
                                                    placeholder="What do you want the influencer to do? Are there any specifics on how the content should look?"
                                                    maxlength="1200"></textarea>

                                                <div class="delete-requirement-btn delete-btn">Remove</div>

                                            </div>
                                        </div>
                                        <div class="add-req-btn add-btn desktop-add-btn">+ Add Content Requirement</div>
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

        document.addEventListener('DOMContentLoaded', function() {
            const addPackageBtn = document.querySelector('.add-req-btn');
            const packageHolder = document.querySelector('.show');

            addPackageBtn.addEventListener('click', function() {
                packageHolder.classList.toggle("d-none")
                addPackageBtn.classList.toggle("d-none")
            });

            // Get all the "Remove" buttons
            var removeButtons = document.querySelectorAll(".delete-requirement-btn");

            // Add click event listener to each "Remove" button
            removeButtons.forEach(function(button) {
                button.addEventListener("click", function() {
                    packageHolder.classList.toggle("d-none")
                    addPackageBtn.classList.toggle("d-none")
                });
            });
        });
    </script>
@endsection
