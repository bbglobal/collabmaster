@extends('layouts.main')

@push('footer-style')
    <style>
        .nk-footer {
            display: none;
        }

        .form * {
            font-size: 13px;
        }

        .scroll-holder {
            max-height: none;
        }

        .package-content-type-select {
            font-weight: 600;
        }

        .package-content-type-select,
        .input-row select,
        .platform-dropdown {
            width: 100% !important;
        }

        .input {
            width: calc(100% - 10px);
            margin-bottom: 5%;
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

        .package-content-type-select,
        .input-row select,
        .platform-dropdown {
            width: 100% !important;
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

        .quantity-input {
            margin-left: 8px;
            width: 34%;
        }

        .duration-unit {
            margin-left: 8px;
            width: 38%;
        }

        .duration-row {
            display: flex;
        }

        .add-desc-btn {
            font-size: 70%;
            font-weight: 500;
            cursor: pointer;
            text-decoration: underline;
        }

        .add-desc-num {
            background-color: var(--green);
            color: green;
            padding: 2px 4px;
            font-size: 7px;
            border-radius: 4px;
            margin-left: 5px;
        }

        .package-btn-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: auto;
        }

        .delete-btn {
            color: var(--lightGray);
            font-size: 11px;
            cursor: pointer;
        }

        .desktop-add-btn {
            margin: 1.5% 0 0 auto;
        }

        .add-btn {
            font-size: 90%;
            width: fit-content;
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
                            {{-- <div class="progress progress-lg">
                                <div class="progress-bar" id="progressBar" data-progress="25">25%</div>
                            </div> --}}
                            <div id="s-1">
                                <div class="card">
                                    <div class="card-inner card-inner p-0">
                                        <div class="top-btn-holder">
                                            {{-- <div class="example-profile-btn">View Example Campaign</div> --}}
                                            <div class="step-holder">8/9</div>
                                        </div>
                                        <div class="nk-block-head my-5">
                                            <div class="nk-block-head-content">
                                                <br />
                                                <h3 class="nk-block-title"><b>Add your content packages</b></h3>
                                                <p>Content packages are listed on your profile and can be purchased by
                                                    brands. Unsure what to charge? <a href="#">Use our rate
                                                        calculator.</a> Collabstr takes a 15% fee.</p>
                                            </div>
                                        </div>
                                        <form method="POST" action="{{ route('create.page', ['id' => 9]) }}" class="form"
                                            id="form">
                                            @csrf
                                            <div class="box-scroll-holder scroll-holder scroll-holder-wide">

                                                <div class="package-holder box-holder package-holder-1">
                                                    <div class="quantity-row">
                                                        <select class="input package-content-type-select"
                                                            name="package_content_type_[]">
                                                            <option value="" disabled selected hidden>Choose Content
                                                                Type</option>
                                                            <option value="Instagram Photo Feed Post" selected>Instagram
                                                                Photo Feed Post</option>
                                                            <option value="Instagram Reel">Instagram Reel</option>
                                                            <option value="Instagram Story">Instagram Story</option>
                                                            <option value="Instagram Live">Instagram Live</option>
                                                            <option value="TikTok Video">TikTok Video</option>
                                                            <option value="TikTok Story">TikTok Story</option>
                                                            <option value="TikTok Live">TikTok Live</option>
                                                            <option value="UGC Product Video">UGC Product Video</option>
                                                            <option value="UGC Product Photo">UGC Product Photo</option>
                                                            <option value="UGC Video Ad">UGC Video Ad</option>
                                                            <option value="UGC Photo Ad">UGC Photo Ad</option>
                                                            <option value="UGC Tutorial">UGC Tutorial</option>
                                                            <option value="UGC Testimonial/Review">UGC Testimonial/Review
                                                            </option>
                                                            <option value="UGC Unboxing">UGC Unboxing</option>
                                                            <option value="UGC Blog">UGC Blog</option>
                                                            <option value="YouTube Video">YouTube Video</option>
                                                            <option value="YouTube Short">YouTube Short</option>
                                                            <option value="YouTube Livestream">YouTube Livestream</option>
                                                            <option value="Twitter Tweet">Twitter Tweet</option>
                                                            <option value="Twitter Thread">Twitter Thread</option>
                                                            <option value="Twitter Retweet">Twitter Retweet</option>
                                                            <option value="Twitch Livestream">Twitch Livestream</option>
                                                            <option value="Amazon Livestream">Amazon Livestream</option>
                                                            <option value="Amazon Video">Amazon Video</option>
                                                            <option value="Amazon Photo">Amazon Photo</option>
                                                        </select>
                                                        <input class="input quantity-input" type="number"
                                                            name="package_quantity_[]" placeholder="Quantity"
                                                            value="">
                                                    </div>

                                                    <div class="duration-row">
                                                        <input class="input duration-input" name="package_duration_[]"
                                                            type="number" placeholder="Duration (Optional)">
                                                        <select class="input duration-unit" name="package_duration_unit_[]">
                                                            <option value="Seconds">Seconds</option>
                                                            <option value="Minutes">Minutes</option>
                                                            <option value="Hours">Hours</option>
                                                        </select>
                                                    </div>
                                                    <input class="input price-input" type="number" name="package_price_[]"
                                                        placeholder="Price (USD)" value="">
                                                    <textarea style="display: none" class="input textarea description-input" name="package_description_[]"
                                                        placeholder="Write a useful description of what brands can expect to receive from this package" maxlength="800"></textarea>

                                                    <div class="package-btn-row">
                                                        <div class="add-desc-btn-holder"><span class="add-desc-btn">Add a
                                                                Description</span><span class="add-desc-num">+20%
                                                                Improvement</span></div>

                                                    </div>
                                                </div>

                                                <div class="package-holder box-holder package-holder-2">
                                                    <div class="quantity-row">
                                                        <select class="input package-content-type-select"
                                                            name="package_content_type_[]">
                                                            <option value="" disabled selected hidden>Choose Content
                                                                Type</option>
                                                            <option value="Instagram Photo Feed Post" selected>Instagram
                                                                Photo Feed Post</option>
                                                            <option value="Instagram Reel">Instagram Reel</option>
                                                            <option value="Instagram Story">Instagram Story</option>
                                                            <option value="Instagram Live">Instagram Live</option>
                                                            <option value="TikTok Video">TikTok Video</option>
                                                            <option value="TikTok Story">TikTok Story</option>
                                                            <option value="TikTok Live">TikTok Live</option>
                                                            <option value="UGC Product Video">UGC Product Video</option>
                                                            <option value="UGC Product Photo">UGC Product Photo</option>
                                                            <option value="UGC Video Ad">UGC Video Ad</option>
                                                            <option value="UGC Photo Ad">UGC Photo Ad</option>
                                                            <option value="UGC Tutorial">UGC Tutorial</option>
                                                            <option value="UGC Testimonial/Review">UGC Testimonial/Review
                                                            </option>
                                                            <option value="UGC Unboxing">UGC Unboxing</option>
                                                            <option value="UGC Blog">UGC Blog</option>
                                                            <option value="YouTube Video">YouTube Video</option>
                                                            <option value="YouTube Short">YouTube Short</option>
                                                            <option value="YouTube Livestream">YouTube Livestream</option>
                                                            <option value="Twitter Tweet">Twitter Tweet</option>
                                                            <option value="Twitter Thread">Twitter Thread</option>
                                                            <option value="Twitter Retweet">Twitter Retweet</option>
                                                            <option value="Twitch Livestream">Twitch Livestream</option>
                                                            <option value="Amazon Livestream">Amazon Livestream</option>
                                                            <option value="Amazon Video">Amazon Video</option>
                                                            <option value="Amazon Photo">Amazon Photo</option>
                                                        </select>
                                                        <input class="input quantity-input" type="number"
                                                            name="package_quantity_[]" placeholder="Quantity"
                                                            value="">
                                                    </div>

                                                    <div class="duration-row">
                                                        <input class="input duration-input" name="package_duration_[]"
                                                            type="number" placeholder="Duration (Optional)">
                                                        <select class="input duration-unit"
                                                            name="package_duration_unit_[]">
                                                            <option value="Seconds">Seconds</option>
                                                            <option value="Minutes">Minutes</option>
                                                            <option value="Hours">Hours</option>
                                                        </select>
                                                    </div>
                                                    <input class="input price-input" type="number"
                                                        name="package_price_[]" placeholder="Price (USD)" value="">
                                                    <textarea style="display: none" class="input textarea description-input" name="package_description_[]"
                                                        placeholder="Write a useful description of what brands can expect to receive from this package" maxlength="800"></textarea>

                                                    <div class="package-btn-row">
                                                        <div class="add-desc-btn-holder"><span class="add-desc-btn">Add a
                                                                Description</span><span class="add-desc-num">+20%
                                                                Improvement</span></div>

                                                        <div class="delete-package-btn delete-btn">Remove</div>

                                                    </div>
                                                </div>

                                                <div class="package-holder box-holder package-holder-3">
                                                    <div class="quantity-row">
                                                        <select class="input package-content-type-select"
                                                            name="package_content_type_[]">
                                                            <option value="" disabled selected hidden>Choose Content
                                                                Type</option>
                                                            <option value="Instagram Photo Feed Post" selected>Instagram
                                                                Photo Feed Post</option>
                                                            <option value="Instagram Reel">Instagram Reel</option>
                                                            <option value="Instagram Story">Instagram Story</option>
                                                            <option value="Instagram Live">Instagram Live</option>
                                                            <option value="TikTok Video">TikTok Video</option>
                                                            <option value="TikTok Story">TikTok Story</option>
                                                            <option value="TikTok Live">TikTok Live</option>
                                                            <option value="UGC Product Video">UGC Product Video</option>
                                                            <option value="UGC Product Photo">UGC Product Photo</option>
                                                            <option value="UGC Video Ad">UGC Video Ad</option>
                                                            <option value="UGC Photo Ad">UGC Photo Ad</option>
                                                            <option value="UGC Tutorial">UGC Tutorial</option>
                                                            <option value="UGC Testimonial/Review">UGC Testimonial/Review
                                                            </option>
                                                            <option value="UGC Unboxing">UGC Unboxing</option>
                                                            <option value="UGC Blog">UGC Blog</option>
                                                            <option value="YouTube Video">YouTube Video</option>
                                                            <option value="YouTube Short">YouTube Short</option>
                                                            <option value="YouTube Livestream">YouTube Livestream</option>
                                                            <option value="Twitter Tweet">Twitter Tweet</option>
                                                            <option value="Twitter Thread">Twitter Thread</option>
                                                            <option value="Twitter Retweet">Twitter Retweet</option>
                                                            <option value="Twitch Livestream">Twitch Livestream</option>
                                                            <option value="Amazon Livestream">Amazon Livestream</option>
                                                            <option value="Amazon Video">Amazon Video</option>
                                                            <option value="Amazon Photo">Amazon Photo</option>
                                                        </select>
                                                        <input class="input quantity-input" type="number"
                                                            name="package_quantity_[]" placeholder="Quantity"
                                                            value="">
                                                    </div>

                                                    <div class="duration-row">
                                                        <input class="input duration-input" name="package_duration_[]"
                                                            type="number" placeholder="Duration (Optional)">
                                                        <select class="input duration-unit"
                                                            name="package_duration_unit_[]">
                                                            <option value="Seconds">Seconds</option>
                                                            <option value="Minutes">Minutes</option>
                                                            <option value="Hours">Hours</option>
                                                        </select>
                                                    </div>
                                                    <input class="input price-input" type="number"
                                                        name="package_price_[]" placeholder="Price (USD)" value="">
                                                    <textarea style="display: none" class="input textarea description-input" name="package_description_[]"
                                                        placeholder="Write a useful description of what brands can expect to receive from this package" maxlength="800"></textarea>

                                                    <div class="package-btn-row">
                                                        <div class="add-desc-btn-holder"><span class="add-desc-btn">Add a
                                                                Description</span><span class="add-desc-num">+20%
                                                                Improvement</span></div>

                                                        <div class="delete-package-btn delete-btn">Remove</div>

                                                    </div>
                                                </div>

                                                <div class="package-holder box-holder package-holder-4">
                                                    <div class="quantity-row">
                                                        <select class="input package-content-type-select"
                                                            name="package_content_type_[]">
                                                            <option value="" disabled selected hidden>Choose Content
                                                                Type</option>
                                                            <option value="Instagram Photo Feed Post" selected>Instagram
                                                                Photo Feed Post</option>
                                                            <option value="Instagram Reel">Instagram Reel</option>
                                                            <option value="Instagram Story">Instagram Story</option>
                                                            <option value="Instagram Live">Instagram Live</option>
                                                            <option value="TikTok Video">TikTok Video</option>
                                                            <option value="TikTok Story">TikTok Story</option>
                                                            <option value="TikTok Live">TikTok Live</option>
                                                            <option value="UGC Product Video">UGC Product Video</option>
                                                            <option value="UGC Product Photo">UGC Product Photo</option>
                                                            <option value="UGC Video Ad">UGC Video Ad</option>
                                                            <option value="UGC Photo Ad">UGC Photo Ad</option>
                                                            <option value="UGC Tutorial">UGC Tutorial</option>
                                                            <option value="UGC Testimonial/Review">UGC Testimonial/Review
                                                            </option>
                                                            <option value="UGC Unboxing">UGC Unboxing</option>
                                                            <option value="UGC Blog">UGC Blog</option>
                                                            <option value="YouTube Video">YouTube Video</option>
                                                            <option value="YouTube Short">YouTube Short</option>
                                                            <option value="YouTube Livestream">YouTube Livestream</option>
                                                            <option value="Twitter Tweet">Twitter Tweet</option>
                                                            <option value="Twitter Thread">Twitter Thread</option>
                                                            <option value="Twitter Retweet">Twitter Retweet</option>
                                                            <option value="Twitch Livestream">Twitch Livestream</option>
                                                            <option value="Amazon Livestream">Amazon Livestream</option>
                                                            <option value="Amazon Video">Amazon Video</option>
                                                            <option value="Amazon Photo">Amazon Photo</option>
                                                        </select>
                                                        <input class="input quantity-input" type="number"
                                                            name="package_quantity_[]" placeholder="Quantity"
                                                            value="">
                                                    </div>

                                                    <div class="duration-row">
                                                        <input class="input duration-input" name="package_duration_[]"
                                                            type="number" placeholder="Duration (Optional)">
                                                        <select class="input duration-unit"
                                                            name="package_duration_unit_[]">
                                                            <option value="Seconds">Seconds</option>
                                                            <option value="Minutes">Minutes</option>
                                                            <option value="Hours">Hours</option>
                                                        </select>
                                                    </div>
                                                    <input class="input price-input" type="number"
                                                        name="package_price_[]" placeholder="Price (USD)" value="">
                                                    <textarea style="display: none" class="input textarea description-input" name="package_description_[]"
                                                        placeholder="Write a useful description of what brands can expect to receive from this package" maxlength="800"></textarea>

                                                    <div class="package-btn-row">
                                                        <div class="add-desc-btn-holder"><span class="add-desc-btn">Add a
                                                                Description</span><span class="add-desc-num">+20%
                                                                Improvement</span></div>

                                                        <div class="delete-package-btn delete-btn">Remove</div>

                                                    </div>
                                                </div>

                                                <div class="package-holder box-holder package-holder-5">
                                                    <div class="quantity-row">
                                                        <select class="input package-content-type-select"
                                                            name="package_content_type_[]">
                                                            <option value="" disabled selected hidden>Choose Content
                                                                Type</option>
                                                            <option value="Instagram Photo Feed Post" selected>Instagram
                                                                Photo Feed Post</option>
                                                            <option value="Instagram Reel">Instagram Reel</option>
                                                            <option value="Instagram Story">Instagram Story</option>
                                                            <option value="Instagram Live">Instagram Live</option>
                                                            <option value="TikTok Video">TikTok Video</option>
                                                            <option value="TikTok Story">TikTok Story</option>
                                                            <option value="TikTok Live">TikTok Live</option>
                                                            <option value="UGC Product Video">UGC Product Video</option>
                                                            <option value="UGC Product Photo">UGC Product Photo</option>
                                                            <option value="UGC Video Ad">UGC Video Ad</option>
                                                            <option value="UGC Photo Ad">UGC Photo Ad</option>
                                                            <option value="UGC Tutorial">UGC Tutorial</option>
                                                            <option value="UGC Testimonial/Review">UGC Testimonial/Review
                                                            </option>
                                                            <option value="UGC Unboxing">UGC Unboxing</option>
                                                            <option value="UGC Blog">UGC Blog</option>
                                                            <option value="YouTube Video">YouTube Video</option>
                                                            <option value="YouTube Short">YouTube Short</option>
                                                            <option value="YouTube Livestream">YouTube Livestream</option>
                                                            <option value="Twitter Tweet">Twitter Tweet</option>
                                                            <option value="Twitter Thread">Twitter Thread</option>
                                                            <option value="Twitter Retweet">Twitter Retweet</option>
                                                            <option value="Twitch Livestream">Twitch Livestream</option>
                                                            <option value="Amazon Livestream">Amazon Livestream</option>
                                                            <option value="Amazon Video">Amazon Video</option>
                                                            <option value="Amazon Photo">Amazon Photo</option>
                                                        </select>
                                                        <input class="input quantity-input" type="number"
                                                            name="package_quantity_[]" placeholder="Quantity"
                                                            value="">
                                                    </div>

                                                    <div class="duration-row">
                                                        <input class="input duration-input" name="package_duration_[]"
                                                            type="number" placeholder="Duration (Optional)">
                                                        <select class="input duration-unit"
                                                            name="package_duration_unit_[]">
                                                            <option value="Seconds">Seconds</option>
                                                            <option value="Minutes">Minutes</option>
                                                            <option value="Hours">Hours</option>
                                                        </select>
                                                    </div>
                                                    <input class="input price-input" type="number"
                                                        name="package_price_[]" placeholder="Price (USD)" value="">
                                                    <textarea style="display: none" class="input textarea description-input" name="package_description_[]"
                                                        placeholder="Write a useful description of what brands can expect to receive from this package" maxlength="800"></textarea>

                                                    <div class="package-btn-row">
                                                        <div class="add-desc-btn-holder"><span class="add-desc-btn">Add a
                                                                Description</span><span class="add-desc-num">+20%
                                                                Improvement</span></div>

                                                        <div class="delete-package-btn delete-btn">Remove</div>

                                                    </div>
                                                </div>

                                                <div class="package-holder box-holder package-holder-6">
                                                    <div class="quantity-row">
                                                        <select class="input package-content-type-select"
                                                            name="package_content_type_[]">
                                                            <option value="" disabled selected hidden>Choose Content
                                                                Type</option>
                                                            <option value="Instagram Photo Feed Post" selected>Instagram
                                                                Photo Feed Post</option>
                                                            <option value="Instagram Reel">Instagram Reel</option>
                                                            <option value="Instagram Story">Instagram Story</option>
                                                            <option value="Instagram Live">Instagram Live</option>
                                                            <option value="TikTok Video">TikTok Video</option>
                                                            <option value="TikTok Story">TikTok Story</option>
                                                            <option value="TikTok Live">TikTok Live</option>
                                                            <option value="UGC Product Video">UGC Product Video</option>
                                                            <option value="UGC Product Photo">UGC Product Photo</option>
                                                            <option value="UGC Video Ad">UGC Video Ad</option>
                                                            <option value="UGC Photo Ad">UGC Photo Ad</option>
                                                            <option value="UGC Tutorial">UGC Tutorial</option>
                                                            <option value="UGC Testimonial/Review">UGC Testimonial/Review
                                                            </option>
                                                            <option value="UGC Unboxing">UGC Unboxing</option>
                                                            <option value="UGC Blog">UGC Blog</option>
                                                            <option value="YouTube Video">YouTube Video</option>
                                                            <option value="YouTube Short">YouTube Short</option>
                                                            <option value="YouTube Livestream">YouTube Livestream</option>
                                                            <option value="Twitter Tweet">Twitter Tweet</option>
                                                            <option value="Twitter Thread">Twitter Thread</option>
                                                            <option value="Twitter Retweet">Twitter Retweet</option>
                                                            <option value="Twitch Livestream">Twitch Livestream</option>
                                                            <option value="Amazon Livestream">Amazon Livestream</option>
                                                            <option value="Amazon Video">Amazon Video</option>
                                                            <option value="Amazon Photo">Amazon Photo</option>
                                                        </select>
                                                        <input class="input quantity-input" type="number"
                                                            name="package_quantity_[]" placeholder="Quantity"
                                                            value="">
                                                    </div>

                                                    <div class="duration-row">
                                                        <input class="input duration-input" name="package_duration_[]"
                                                            type="number" placeholder="Duration (Optional)">
                                                        <select class="input duration-unit"
                                                            name="package_duration_unit_[]">
                                                            <option value="Seconds">Seconds</option>
                                                            <option value="Minutes">Minutes</option>
                                                            <option value="Hours">Hours</option>
                                                        </select>
                                                    </div>
                                                    <input class="input price-input" type="number"
                                                        name="package_price_[]" placeholder="Price (USD)" value="">
                                                    <textarea style="display: none" class="input textarea description-input" name="package_description_[]"
                                                        placeholder="Write a useful description of what brands can expect to receive from this package" maxlength="800"></textarea>

                                                    <div class="package-btn-row">
                                                        <div class="add-desc-btn-holder"><span class="add-desc-btn">Add a
                                                                Description</span><span class="add-desc-num">+20%
                                                                Improvement</span></div>

                                                        <div class="delete-package-btn delete-btn">Remove</div>

                                                    </div>
                                                </div>

                                                {{-- <div class="add-package-btn add-btn mobile-add-btn mobile-add-package-btn">
                                                    + Add Package</div> --}}
                                            </div>
                                            <div class="add-package-btn add-btn desktop-add-btn">+ Add Package</div>

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
        });
        // JavaScript code to clone package holder
        document.addEventListener('DOMContentLoaded', function() {
            const addPackageBtn = document.querySelector('.add-package-btn');
            const packageHolder = document.querySelector('.package-holder-2');
            const container = packageHolder.parentNode;

            addPackageBtn.addEventListener('click', function() {
                const clone = packageHolder.cloneNode(true);
                container.appendChild(clone);
            });

            var addDescriptionButtons = document.querySelectorAll(".add-desc-btn");

            // Add click event listener to each "Add a Description" button
            addDescriptionButtons.forEach(function(button) {
                button.addEventListener("click", function() {
                    // Toggle visibility of the description textarea for the clicked package
                    var descriptionTextarea = this.closest(".package-holder").querySelector(
                        ".description-input");
                    descriptionTextarea.style.display = (descriptionTextarea.style.display ===
                        "none") ? "block" : "none";
                });
            });

            // Get all the "Remove" buttons
            var removeButtons = document.querySelectorAll(".delete-package-btn");

            // Add click event listener to each "Remove" button
            removeButtons.forEach(function(button) {
                button.addEventListener("click", function() {
                    // Remove the parent package holder of the clicked button
                    this.closest(".package-holder").remove();
                });
            });
        });
    </script>
@endsection
