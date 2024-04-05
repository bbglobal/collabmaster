@extends('layouts.main')

@push('footer-style')
    <style>
        .nk-footer {
            display: none;
        }

        .progress-bar {
            display: flex;
            flex-direction: row;
            align-items: center;
            background-color: rgba(191, 203, 218, .12);
            font-size: 85%;
        }

        .step-active {
            background-color: rgba(191, 203, 218, .22);
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
        }

        .progress-step {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            padding: 12px 0;
            cursor: pointer;
        }

        .step-num {
            width: 26px;
            height: 26px;
            line-height: 26px;
            text-align: center;
            border: 1px solid rgba(191, 203, 218, .52);
            border-radius: 50%;
            color: #000;
        }

        .num-active {
            border: 2px solid rgb(0, 219, 134) !important;
            color: rgb(0, 198, 121);
            background-color: rgba(0, 221, 136, 0.16);
        }

        .step-txt {
            margin-left: 8px;
            color: #000;
        }

        .progress-step {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            padding: 12px 0;
            cursor: pointer;
        }

        .step-num {
            width: 26px;
            height: 26px;
            line-height: 26px;
            text-align: center;
            border: 1px solid rgba(191, 203, 218, .52);
            border-radius: 50%;
        }

        .step-txt {
            margin-left: 8px;
        }

        .form-holder {
            width: 70%;
            margin: 3% auto;
        }

        .form-section {
            margin-bottom: 2%;
        }

        .form-title {
            font-size: 135%;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .form-desc {
            font-size: 90%;
            font-weight: 300;
            margin-bottom: 2%;
        }

        .box-holder {
            margin: 3% 0;
        }

        .platforms-holder {
            display: block;
            margin-bottom: 2%;
            border-radius: 8px;
            box-shadow: var(--lightBoxShadow);
            padding: 18px 20px;
            border: 1px solid var(--black);
        }

        .platform-holder {
            width: 100%;
        }

        .platform-option {
            display: flex;
            align-items: center;
            width: calc(100% - 32px);
            border-radius: 8px;
            padding: 15px 0 15px 30px;
            font-weight: 500;
            border: 1px solid rgba(191, 203, 218, .52);
            margin-bottom: 1%;
            cursor: pointer;
        }

        .platform-img {
            width: 16px !important;
            height: 16px !important;
            margin-right: 10px;
            top: 5px;
            left: 0;
        }

        img {
            width: 16px !important;
            height: 16px !important;
            margin-right: 10px;
            max-width: none;
        }

        .input-row {
            display: none;
            width: 100%;
        }

        .platform-holder .input {
            margin-bottom: 1% !important;
            width: calc(100% - 10px);
        }

        .input {
            min-height: 45px;
            margin-bottom: 3% !important;
            padding: 0 4px;
        }

        .btn {
            display: block;
            text-align: center;
            font-weight: 600;
            border: none;
            font-size: 100%;
            font-family: inherit;
            border-radius: 8px;
            box-shadow: var(--lightBoxShadow);
            text-decoration: none;
            cursor: pointer;
            transition-duration: 0.3s;
            position: relative;
        }

        .btn {
            background-color: var(--black);
            color: white;
            margin: 0 0 0 auto;
            width: 200px;
            padding: 16px;
            min-width: fit-content;
        }

        .form-section+.form-section {
            display: none;
        }

        .form-section {
            margin-bottom: 2%;
        }

        .form-title {
            font-size: 135%;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .form-desc {
            font-size: 90%;
            font-weight: 300;
            margin-bottom: 2%;
        }

        .checkout-row {
            display: flex;
            justify-content: space-between;
            margin-top: 4%;
        }

        .checkout-col {
            width: 48%;
        }

        .disclaimer-holder {
            display: flex;
            justify-content: space-between;
            font-size: 63%;
            font-weight: 300;
            margin: 1.5% auto 4% auto;
            width: 99%;
        }

        .card-input-holder {
            display: flex;
        }

        #card-element {
            padding: 14px;
        }

        #postal-code-input {
            width: 25%;
        }

        .disclaimer-holder {
            display: flex;
            justify-content: space-between;
            font-size: 63%;
            font-weight: 300;
            margin: 1.5% auto 4% auto;
            width: 99%;
        }

        .lock {
            width: 8px;
            filter: brightness(0);
            opacity: 0.6;
        }

        .checkout-row .btn {
            width: 100%;
        }

        .payment-request-holder {
            display: none;
        }

        .payment-request-holder .seperator {
            margin: 29px 0 !important;
        }

        .seperator {
            text-align: center;
            border-bottom: 2px solid gainsboro;
            line-height: 0.1em;
            margin: 8% 0;
        }

        .seperator span {
            background: white;
            color: #9c9c9c;
            padding: 0 10px;
        }

        .checkout-col {
            width: 48%;
        }

        .checkout-row .package-holder {
            display: flex;
            align-items: center;
            padding-bottom: 3%;
            border-bottom: 1px solid rgba(0, 0, 0, .1);
        }

        .package-img {
            width: 65px;
            height: 65px;
            border-radius: 8px;
            object-fit: cover;
        }

        .package-detail-holder {
            margin-left: 10px;
        }

        .checkout-row .package-title {
            font-weight: 600;
            font-size: 90%;
        }

        .price-row {
            display: flex;
            justify-content: space-between;
            font-size: 85%;
            margin-top: 3%;
        }

        .tooltip {
            position: relative;
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .tooltip-img {
            width: 12px;
            height: 12px;
            margin-left: 4px;
            filter: brightness(0);
            opacity: 0.7;
        }

        .tooltip .tooltip-txt {
            visibility: hidden;
            width: 230px;
            background-color: var(--black);
            color: white;
            font-weight: 400;
            text-align: center;
            border-radius: 6px;
            padding: 8px;
            position: absolute;
            z-index: 1;
            top: 20px;
            left: -115px;
            font-size: 12px;
            box-shadow: var(--lightBoxShadow);
        }

        .price-row {
            display: flex;
            justify-content: space-between;
            font-size: 85%;
            margin-top: 3%;
        }

        .tax-row {
            display: none;
        }

        .price-row {
            display: flex;
            justify-content: space-between;
            font-size: 85%;
            margin-top: 3%;
        }

        .total-price-row {
            font-weight: 600;
        }

        .price-row {
            display: flex;
            justify-content: space-between;
            font-size: 85%;
            margin-top: 3%;
        }

        .guides-holder {
            display: flex;
            justify-content: space-between;
            margin-top: 5%;
        }

        .guide-holder {
            width: 30%;
        }

        .guide-title {
            display: flex;
            align-items: center;
            font-size: 110%;
        }

        .guide-num {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            margin-right: 12px;
            font-size: 140%;
        }

        .guide-num {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            margin-right: 12px;
            font-size: 140%;
        }
    </style>
@endpush

@section('main-section')
    <link rel="stylesheet" href="{{ url('assets/css/banner.css') }}">
    @if ($message = session('success'))
        <div id="msg-holder">
            <div id="msg-holder-row">
                <img src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/succ.svg"
                    class="succ-err-msg-img" id="msg-img-err">
                <div id="msg">{{ $message }}</div>
            </div>
        </div>
    @endif
    <div id="content">
        <div class="form-holder">
            <div>
                <form class="form-section package-form" method="POST"
                    action="{{ route('offer.create', ['id' => $user->id]) }}" id="form">
                    @csrf
                    <input type="hidden" name="creator_id" value="{{ $user->id }}">
                    <input type="hidden" name="brand_id" value="{{ Auth::user()->id }}">
                    <div class="form-title">Create an Offer for {{ $user->username }}</div>
                    <div class="form-desc">Be specific to ensure {{ $user->username }} understands your request. You will
                        be able to chat
                        further and add attachments once the offer is placed.</div>
                    <div>

                        <div class="package-holder box-holder">
                            <select class="@error('package_category') is-invalid  @enderror input package-category-select"
                                name="package_category" required>
                                <option value="" disabled selected hidden>Choose Platform</option>

                                <option value="instagram">Instagram</option>

                                <option value="ugc">User Generated Content</option>

                                <option value="youtube">YouTube</option>

                                <option value="tiktok">TikTok</option>

                            </select>
                            <input class="@error('package_title') is-invalid  @enderror input" type="text"
                                name="package_title" placeholder="Summarize your request. E.g 1 TikTok Video" maxlength="60"
                                required>
                            @error('package_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <textarea class="@error('package_description') is-invalid  @enderror input textarea" name="package_description"
                                placeholder="What are the details of this request? How many posts or photos? What will the influencer be expected to deliver? E.g. 1 TikTok Video promoting our product to your audience"
                                maxlength="800" required></textarea>
                            @error('package_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input class="@error('package_price') is-invalid  @enderror input price-input" type="number"
                                name="package_price" placeholder="Offer Price (INR)" min="50" required>
                            <div class="price-estimate">On average, {{ $user->username }} charges
                                &#8377;{{ number_format($averagePrice, 0) }}. Keep this in mind
                                when pricing your
                                offer.</div>
                        </div>
                    </div>

                    <div class="form-title">Add Your Social Channels</div>
                    <div class="form-desc">Adding your social media helps {{ $user->username }} understand your brand
                        better
                        and leads to higher acceptance rates.</div>

                    <div class="platforms-holder">
                        <div class="platform-holder">
                            <div class="platform-option">
                                <img
                                    src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/website.svg">
                                <div>Add Website</div>
                            </div>
                            <div class="input-row">
                                <input class="input" type="text" name="website" placeholder="Website" value="">
                            </div>
                        </div>

                        <div class="platform-holder">
                            <div class="platform-option"><img
                                    src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/instagram.svg">
                                <div>Add Instagram</div>
                            </div>
                            <div class="input-row">
                                <input class="input" type="text" name="instagram_username"
                                    placeholder="Instagram Username" value="">
                            </div>
                        </div>

                        <div class="platform-holder">
                            <div class="platform-option"><img
                                    src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/tiktok.svg">
                                <div>Add TikTok</div>
                            </div>
                            <div class="input-row">
                                <input class="input" type="text" name="tiktok_username" placeholder="TikTok Username"
                                    value="">
                            </div>
                        </div>

                        <div class="platform-holder">
                            <div class="platform-option"><img
                                    src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/youtube.svg">
                                <div>Add YouTube</div>
                            </div>
                            <div class="input-row">
                                <input class="input" type="text" name="youtube_username" placeholder="YouTube URL"
                                    value="">
                            </div>
                        </div>

                        <div class="platform-holder">
                            <div class="platform-option"><img
                                    src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/twitter.svg">
                                <div>Add Twitter</div>
                            </div>
                            <div class="input-row">
                                <input class="input" type="text" name="twitter_username" placeholder="Twitter Username"
                                    value="">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class='btn'>Continue</button>
                </form>

                <div class="form-section">
                    <div class="form-title">Send Offer</div>
                    <!--<div class="form-desc">A hold on your payment method will be placed for 72 hours. You will only be charged if Louise accepts your offer.</div>-->
                    <div class="form-desc">Your payment will be held for 72 hours. If {{ $user->username }} declines the
                        offer, the amount
                        will be added to your Collabmaster balance.</div>

                    <div class="checkout-row">
                        <form class="checkout-col checkout-form">
                            <input type="hidden" name="csrfmiddlewaretoken"
                                value="MhKv00tVWlrZzxK1U45h3Fgp7l34nFXIJGHPHnQPk158jpGNhg3hCwVDREbHs9TK">



                            <div class="new-card-holder">
                                <div class="card-input-holder">
                                    <div id='card-element'></div>
                                    <input class="input" type="text" name="postal_code" id="postal-code-input"
                                        placeholder="Zip/Postal Code">
                                </div>

                                <div class="disclaimer-holder">
                                    <div class="secure-holder"><img alt="" class="lock"
                                            src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/password.svg" /> Secure
                                        payments with Stripe</div>
                                </div>
                            </div>

                            <button class='btn'>Place Offer</button>

                            <div class="payment-request-holder">
                                <div class="seperator"><span>or</span></div>
                                <div id="payment-request-button"></div>
                            </div>
                        </form>
                        <div class="checkout-col">
                            <div class="package-holder">
                                <div>
                                    <img class="package-img"
                                        src="https://d5ik1gor6xydq.cloudfront.net/sellers/14537/16276333534559464.webp">
                                </div>
                                <div class="package-detail-holder">
                                    <div class="package-title"></div>
                                </div>
                            </div>
                            <div>
                                <div class="price-row">
                                    <div>Subtotal</div>
                                    <div class="subtotal-amt"></div>
                                </div>
                                <div class="price-row">
                                    <div class="tooltip">Fee<img class="tooltip-img"
                                            src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/tooltip.svg">
                                        <div class="tooltip-txt">This helps us operate our platform and cover payment
                                            processing fees.</div>
                                    </div>
                                    <div class="fee-amt"></div>
                                </div>
                                <div class="price-row tax-row">
                                    <div>Tax</div>
                                    <div id="tax-price"></div>
                                </div>

                                <div class="price-row total-price-row">
                                    <div>Total</div>
                                    <div id="total-price"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="guides-holder">
                    <div class="guide-holder">
                        <div class="guide-title">
                            <div class="guide-num">1</div>Send Offer
                        </div>
                        <!--<div class="guide-txt">Submit the details of the collaboration. Louise has 72 hours to accept it. You're only charged if they accept the offer.</div>-->
                        <div class="guide-txt">Submit the details of the collaboration. {{ $user->username }} has 72 hours
                            to accept your
                            request, otherwise the amount is added to your Collabstr balance.</div>
                    </div>

                    <div class="guide-holder">
                        <div class="guide-title">
                            <div class="guide-num">2</div>Chat With Influencer
                        </div>
                        <div class="guide-txt">Chat with {{ $user->username }} and arrange the collaboration. Your funds
                            are held securely
                            until they complete the work.</div>
                    </div>

                    <div class="guide-holder">
                        <div class="guide-title">
                            <div class="guide-num">3</div>Receive Content
                        </div>
                        <div class="guide-txt">Receive your content to review and approve. The collaboration is complete
                            and payment is released to the influencer.</div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <script>
            function hideModal() {
                $(".modal").hide();
                $('.modal-content-holder').css('width', '500px');
                allowScroll();
            }

            function showModal(content, width, alreadyOpen) {
                if (content) $(".modal-content-holder").html(content);
                if (width) $('.modal-content-holder').css('width', width);
                $(".modal").css('display', 'flex');
                if (!alreadyOpen) preventScroll();
            }

            function preventScroll() {
                // When the modal is shown, we want a fixed body
                const scrollY = window.scrollY;
                document.body.style.position = 'fixed';
                document.body.style.top = `-${scrollY}px`;

                // fix scroll issue on mobile
                let scrollHolder = $('.modal-content-scroll');
                if (scrollHolder.length) scrollHolder[0].scrollTop = 1;
            }

            function allowScroll() {
                document.body.style.position = "initial";
                const scrollY = document.body.style.top;
                document.body.style.position = '';
                document.body.style.top = '';
                window.scrollTo(0, parseInt(scrollY || '0') * -1);
            }

            $(document).on('click', '.close-modal', function() {
                hideModal();
            });

            $(document).on('click', function(e) {
                // if outside modal clicked and 3ds not open
                if ($(e.target).is('.modal') && !$('.modal').find('iframe').length) {
                    hideModal();
                }
            });
        </script> --}}

        <script>
            let balanceOption = false;
            // $('.package-form').submit(function(e) {
            //     e.preventDefault();

            //     // reset vars


            //     balanceOption = false;

            //     let platformsHolder = $('.platforms-holder');

            //     // if filled out platforms send to next step
            //     if (platformsHolder.is(":visible")) {
            //         nextPrev(1);
            //         return true;
            //     }

            //     // if description contains contact info
            //     let description = $('.textarea');
            //     if (containsContactInfo(description.val())) {
            //         description.addClass('empty-input');
            //         showMsg('You cannot send contact info such as emails or phone numbers before the offer is accepted by the influencer.',
            //             'err');
            //         return false;
            //     }

            // });

            // function containsContactInfo(txt) {
            //     txt = txt.toLowerCase();
            //     let emailExp = /\S+@\S+\.\S+/; //email matches x@x
            //     let phoneExp = /[ ][0-9-.+]{8,14}([ .)]+|[0-9]$)/;
            //     return emailExp.test(txt) || phoneExp.test(txt);
            // }

            $('.platform-option').click(function() {
                $(this).hide();
                $(this).siblings('.input-row').css('display', 'flex');
            });
        </script>
    @endsection
