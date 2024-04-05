@extends('layouts.main')

@push('footer-style')
    <style>
        .packages-holder {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 20px;
        }

        .profile-holder {
            display: flex;
            margin-top: 2%;
        }

        .profile-pic {
            min-width: 80px;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
        }

        .profile-info-holder {
            display: flex;
            flex-direction: column;
            margin-left: 15px;
        }

        .listing-title {
            font-size: 135%;
            font-weight: 600;
            margin: 0;
            word-break: break-word;
        }

        .profile-name-location {
            color: gray;
            font-size: 90%;
            margin: 5px 0 9px 0;
        }

        .platform-img-holder {
            display: flex;
            align-items: center;
        }

        .platform-img {
            margin: 0 15px 0 0;
            width: 18px;
            cursor: pointer;
            position: relative;
        }

        .platform-img img {
            width: 100%;
            height: 100%;
        }

        .listing-description {
            line-height: 1.4;
            font-size: 95%;
            margin-top: 2%;
            font-weight: 300;
        }

        .profile-listing-holder {
            width: 100%;
        }

        .profile-listing-holder {
            cursor: pointer;
            position: relative;
        }

        .profile-listing-holder:hover .profile-listing-img,
        .category-listing-holder:hover .category-listing-img {
            transform: scale(1.1);
        }

        .link-spanner {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 1;
        }

        .profile-listing-img-holder {
            width: 100%;
            height: 320px;
            position: relative;
            border-radius: 9px;
            background-color: black;
            overflow: hidden;
        }

        .profile-listing-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 8px;
            -webkit-mask-image: linear-gradient(to top, rgb(0 0 0 / 50%) 10%, rgba(0, 0, 0, 1));
            transition: transform 0.4s cubic-bezier(0.17, 0.67, 0.13, 1.02) 0s;
        }

        .profile-listing-owner-holder {
            position: absolute;
            bottom: 8px;
            left: 8px;
            display: flex;
            align-items: center;
        }

        .profile-listing-owner-info-holder {
            display: flex;
            flex-direction: column;
        }

        .profile-listing-owner-name {
            display: flex;
            align-items: center;
            font-size: 80%;
            color: white;
            font-weight: 600;
        }

        .profile-listing-owner-location {
            font-size: 72%;
            color: white;
            font-weight: 300;
            margin-top: 1px;
        }

        #msg-holder {
            display: none;
        }
    </style>
@endpush

@section('main-section')
    <div id="msg-holder">
        <div id="msg-holder-row">
            <img src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/succ.svg" class="succ-err-msg-img"
                id="msg-img-succ">
            <img src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/err.svg" class="succ-err-msg-img"
                id="msg-img-err">
            <div id="msg"></div>
        </div>
    </div>

    <link rel="stylesheet" href="{{ url('assets/css/banner.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/profile.css') }}">
    <div id="content">
        <div class="banner share-banner">
            <div class="banner-row">
                <div class="banner-txt-holder">
                    <h2 class="banner-title">Earn $20 Cash for Every Brand You Refer to Collabstr</h2>
                    <div class="banner-txt">Get $20 cash for every brand that signs up and makes an order through your link.
                        They will also get $10 to use towards their first order.</div>
                </div>
                <div class="btn banner-btn share-profile-btn">Share Profile</div>
            </div>
        </div>




        {{-- <div class="profile-strength-holder">
            <div class="strength-bar-holder">
                <div class="strength-bar">
                    <div class="strength-progress" style="width: 75%;background-color: orange;"></div>
                </div>
            </div>

            <div class="strength-holder">
                <div class="strength-num-holder">
                    <div class="strength-num">75%</div>
                    <div class="strength-title">of your profile is complete</div>
                </div>

                <div class="recommendations-holder">
                    <div class="recommendation-holder js-recommendation-holder" data-id="1">
                        <div class="recommendation-box"></div>
                        <div class="recommendation-title">Increase your discoverability</div>

                        <div class="recommendation-num">+10%</div>

                    </div>

                    <div class="recommendation-holder js-recommendation-holder" data-id="2">
                        <div class="recommendation-box"></div>
                        <div class="recommendation-title">Add your demographics</div>

                        <div class="recommendation-num">+5%</div>

                    </div>


                    <div class="recommendation-holder js-recommendation-holder" data-id="3">
                        <div class="recommendation-box"></div>
                        <div class="recommendation-title">Showcase your content</div>

                        <div class="recommendation-num">+10%</div>

                    </div>

                </div>
            </div>
        </div> --}}

        <div class="btn-row btn-row-mobile">


            <a href="{{ route('profile.edit', ['id' => Auth::user()->id]) }}" class="row-btn d-block"><img
                    class="row-btn-img"
                    src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/edit.svg">Edit</a>


        </div>

        <div class="swiper">

            <div class="swipe-num-holder"><span class="swipe-num">1</span>/4</div>

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <picture>
                        <source media='(min-width: 800px)'
                            srcset='data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs='>
                        <img fetchpriority="high" class="img"
                            src="https://d5ik1gor6xydq.cloudfront.net/sellers/135441/17084621233573737.webp"
                            alt="Photo of Saddam Hussain">
                    </picture>
                </div>

                <div class="swiper-slide">
                    <picture>
                        <source media='(min-width: 800px)'
                            srcset='data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs='>
                        <img loading="lazy" class="img"
                            src="https://d5ik1gor6xydq.cloudfront.net/sellers/135441/17095803118460636.webp"
                            alt="Photo of Saddam Hussain">
                    </picture>
                </div>

                <div class="swiper-slide">
                    <picture>
                        <source media='(min-width: 800px)'
                            srcset='data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs='>
                        <img loading="lazy" class="img"
                            src="https://d5ik1gor6xydq.cloudfront.net/sellers/135441/17095803120075932.webp"
                            alt="Photo of Saddam Hussain">
                    </picture>
                </div>

                <div class="swiper-slide">
                    <picture>
                        <source media='(min-width: 800px)'
                            srcset='data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs='>
                        <img loading="lazy" class="img"
                            src="https://d5ik1gor6xydq.cloudfront.net/sellers/135441/17095803121435711.webp"
                            alt="Photo of Saddam Hussain">
                    </picture>
                </div>

            </div>
        </div>

        <div class="listing-holder">

            <div class="img-row">
                <div class="primary-img">
                    <div class="file-area">
                        <picture>
                            <source media='(max-width: 800px)'
                                srcset='data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs='>
                            <img fetchpriority="high" class="img img1" src="{{ url('assets/images/' . $creator->img_1) }}"
                                alt="Photo of Saddam Hussain">
                        </picture>
                    </div>
                </div>
                <div class="img-col">
                    <div class="img-row-sq">
                        <div class="file-area">
                            <picture>
                                <source media='(max-width: 800px)'
                                    srcset='data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs='>
                                <img class="img img2" src="{{ url('assets/images/' . $creator->img_2) }}"
                                    alt="Photo of Saddam Hussain">
                            </picture>
                        </div>
                        <div class="file-area">
                            <picture>
                                <source media='(max-width: 800px)'
                                    srcset='data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs='>
                                <img class="img img3" src="{{ url('assets/images/' . $creator->img_3) }}"
                                    alt="Photo of Saddam Hussain">
                            </picture>
                        </div>
                    </div>
                    <div class="file-area file-area4">
                        <picture>
                            <source media="(max-width: 800px)"
                                srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=">
                            <img class="img img4" src="{{ url('assets/images/' . $creator->img_4) }}"
                                alt="Photo of Saddam Hussain">
                        </picture>
                    </div>
                </div>
            </div>

            <div class="info-holder">

                <div class="profile-holder">
                    <img loading="lazy" class="profile-pic" src="{{ url('assets/images/' . $creator->file_path) }}"
                        alt="image">
                    <div class="profile-info-holder">
                        <h1 class="listing-title">{{ $creator->full_name }} | {{ $creator->bio }}</h1>
                        <div class="profile-name-location">{{ $creator->location }}</div>
                        <div class="platform-img-holder">

                            <div class="platform-img" data-id="verify">

                                <a rel="nofollow" href="https://instagram.com/haseeb112" target="_blank"
                                    data-platform="instagram" class="intercept"><span class="link-spanner"></span></a>

                                <img loading="lazy"
                                    src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/instagram.svg"
                                    alt="Instagram logo">
                            </div>

                        </div>
                    </div>
                </div>


                <div class="badge-holder">
                    <div class="badge-img not-earned-badge-img">
                        <svg viewBox="162.014 83.885 155.095 185.538" class="badge-img"
                            style="min-width: 29px; width: 29px;">
                            <path d="m237.411 329.348 11.933 20.843h-23.866l11.933-20.843Z"
                                data-bx-shape="triangle 225.478 329.348 23.866 20.843 0.5 0 1@d0370680"
                                style="fill:#ffadbb;stroke:#000" transform="rotate(167.544 259.78 295.633)"></path>
                            <path d="m237.411 329.348 11.933 20.843h-23.866l11.933-20.843Z"
                                data-bx-shape="triangle 225.478 329.348 23.866 20.843 0.5 0 1@d0370680"
                                style="fill:#ffadbb;stroke:#000" transform="rotate(167.544 226.901 291.81)"></path>
                            <path d="m-213.545-250.038 11.933 15.824h-23.866l11.933-15.824Z"
                                data-bx-shape="triangle -225.478 -250.038 23.866 15.824 0.5 0 1@88a547ec"
                                style="fill:#ffadbb;stroke:#000" transform="scale(-1 1) rotate(-12.456 1905.528 373.14)">
                            </path>
                            <path d="m216.117 250.038 10.862 15.824h-21.725l10.863-15.824Z"
                                data-bx-shape="triangle 205.254 250.038 21.725 15.824 0.5 0 1@98606ad7"
                                style="fill:#ffadbb;stroke:#000" transform="rotate(-12.456 74.036 398.316)"></path>
                            <ellipse style="stroke:#000;fill:#ffadbb" cx="236.62" cy="153.49" rx="64.49"
                                ry="62.609"></ellipse>
                            <path
                                d="M223.268 84.823c-28.1 6-49.9 27.6-55.4 54.8-3.3 16.1-1.4 30 6.1 45.8 3.8 7.9 5.9 10.8 13.2 18 7.1 7.2 10.2 9.5 18.1 13.4 20.9 10.3 41.6 10.3 63-.2 16.5-8 29.7-23.4 35.7-41.7 3.4-10.3 3.8-28.2.9-38.5-6.9-24.7-26.2-44.2-50.1-50.5-8.5-2.2-23.6-2.7-31.5-1.1Zm26.2 10c17.1 3.7 32.1 15.1 40.3 30.8 4.9 9.2 6.5 14.8 7.1 24.8 1.2 17.2-4.8 33.2-17.1 45.6-7.7 7.8-13.4 11.5-23.4 15.2-9 3.3-24 4.1-33.1 1.8-22.4-5.6-39.9-22.9-45.5-45.1-8-31.4 13.7-66.1 45.5-72.9 8.5-1.9 17.9-1.9 26.2-.2Z"
                                style="fill:#222"></path>
                            <path
                                d="M229.768 108.223c-4 2.5-5.3 4.2-9.5 12.1-1.9 3.6-4.2 6.7-5 6.8-12.8 1.7-16.4 2.7-19.6 5.5-4 3.5-5.9 9.1-5 14.4.6 2.8 2.5 5.5 7.3 10.5l6.6 6.8-1.3 8.1c-.7 4.4-1 9.4-.6 11.1 1.3 6.8 7.7 11.9 15 11.9 2.2 0 6.6-1.5 11.4-3.9l7.7-3.9 7.5 3.9c4.7 2.4 8.9 3.8 11.4 3.9 5.2 0 10.9-3.4 13.6-8.3 2.2-3.9 2.3-4.3 1-13.4l-1.3-9.3 6.6-7c7.7-8.1 8.9-11.6 6.2-18.5-2.9-7.9-6-9.4-23.5-11.8-.8-.1-3.2-3.3-5.3-7.2-4.6-8.4-6.3-10.4-10.4-12.1-4.5-1.9-9.2-1.7-12.8.4Zm11.3 10.9c1.1 1.6 3.4 5.7 5.2 9.3 1.8 3.6 3.7 6.8 4.2 7.1.6.4 5.1 1.2 10 1.9 9.2 1.2 12.8 3.1 12.8 6.6 0 .9-3.4 5.1-7.6 9.4l-7.5 7.8 1.6 9.3c2.8 16.1.6 17.9-14 10.6l-9.2-4.5-8.9 4.5c-9.4 4.8-13.7 5.3-15.1 1.6-.4-.9.1-6.2 1-11.7l1.6-10.1-7.4-7.5c-4.1-4.2-7.5-8.2-7.5-9 0-.9.7-2.5 1.5-3.6 1.1-1.7 3.3-2.4 10.8-3.4 5.2-.7 9.9-1.5 10.4-1.9.6-.3 2.7-4 4.8-8.1 2-4.1 4.4-8.3 5.3-9.3 2.3-2.6 5.8-2.1 8 1Zm55.2 94.9c-8.9 9.1-24.4 17.6-37.4 20.5-3.1.7-5.6 1.4-5.6 1.7 0 .8 9.2 21.6 12.1 27.4 2.6 5.1 3.3 5.8 5.9 5.8 3.6 0 4.7-1.6 10.1-13.9 2.3-5.3 4.5-10 4.9-10.4.4-.5 6.5 1 13.5 3.2 12.1 3.9 13 4 15.3 2.5 1.9-1.3 2.3-2.2 1.9-4.4-.6-2.9-14.4-34.9-15.6-36.2-.4-.5-2.7 1.3-5.1 3.8Zm4.3 18.1c1.5 3.2 2.3 5.9 1.9 6-.4.2-4-.7-8-2l-7.3-2.2 4.8-3.7c2.6-2 5.1-3.7 5.4-3.7.3-.1 1.8 2.5 3.2 5.6Zm-25.6 13.3c-1.8 3.8-3.4 7-3.7 7-.7 0-4.3-9-3.8-9.5s9.1-4.3 10-4.4c.3-.1-.8 3-2.5 6.9Zm-105.7-18.8c-7.7 17.4-8.8 22.1-5.5 24.3 1.7 1.2 3.7.8 14.5-2.6 6.9-2.2 13-3.7 13.5-3.5.6.2 3 5.1 5.5 11 4.9 11.9 6.5 13.9 10.6 13.4 2.6-.3 3.4-1.5 9.5-14.8 9.1-19.8 8.8-18.3 3-19.7-12.6-3-26.3-10.1-36.3-18.8-3.5-3-6.6-5.5-6.9-5.5-.3 0-3.9 7.3-7.9 16.2Zm17.9 4.3 4.4 3-7.4 2.2c-9.1 2.8-9.1 2.8-8 0 3.2-8.1 4.2-9.7 5.4-9 .7.4 3.2 2.1 5.6 3.8Zm23.9 12c.2.2-.6 2.5-1.7 5.1-1.2 2.6-2.3 4.5-2.6 4.3-.2-.3-1.7-3.5-3.4-7.1l-3-6.7 5.2 2c2.9 1.1 5.4 2.2 5.5 2.4Z"
                                style="fill:#222"></path>
                        </svg>
                    </div>
                    <div class="badge-txt-holder">
                        <div class="badge-title">Top Creator <span class="not-earned-badge earn-badge">Not Earned</span>
                        </div>
                        <div class="badge-txt">To earn this badge, you must complete multiple orders and have a high rating
                            from brands.</div>
                    </div>
                </div>


                <div class="badge-holder">
                    <div class="badge-img not-earned-badge-img">
                        <svg viewBox="166.438 34.205 117.359 185.948" class="badge-img"
                            style="width: 22px; min-width: 22px;">
                            <path d="M223.374 60.139v83.259h-47.267l47.267-83.259Z"
                                data-bx-shape="triangle 176.107 60.139 47.267 83.259 1 0 1@1e60841e"
                                style="stroke:#000;stroke-opacity:0;stroke-width:0;fill:#23f35d"></path>
                            <path d="M-222.811-196.155v85.058h-49.493l49.493-85.058Z"
                                data-bx-shape="triangle -272.304 -196.155 49.493 85.058 1 0 1@8959b67d"
                                style="stroke:#000;stroke-opacity:0;stroke-width:0;fill:#23f35d" transform="rotate(180)">
                            </path>
                            <path
                                d="M84.6 23.7c-2.4 3.8-36.4 62.1-53.5 92-6.5 11.3-9.1 16.7-8.7 18.1.6 1.9 1.9 2 27.1 2.4 14.5.2 26.7.6 26.9.9.3.3-1 15.3-2.9 33.4-2.5 23.9-3.1 33.2-2.3 34.2 1.9 2.4 4.7 1.4 7.1-2.5 3-4.6 52.9-92.1 58.2-101.8 5.9-10.8 6.7-10.4-24.4-10.4-14.1 0-26.1-.4-26.7-.8-.8-.5.1-9.9 3.2-33.6 3.2-24.4 4.1-33.3 3.3-34.3-2-2.3-4.8-1.4-7.3 2.4zm-8.2 48.7c-2.6 19.7-2.5 21 2.9 25 2.6 1.9 4.4 2.1 24.3 2.4 11.8.2 21.4.5 21.4.7 0 .8-41.2 72.6-41.5 72.3-.2-.2.6-8.6 1.6-18.7 1.6-14.5 1.8-19 .9-21.2-2.2-5.2-3.8-5.6-27.3-6.4-12-.4-21.7-1.1-21.5-1.5.8-1.9 41.2-71 41.4-70.7.1.1-.8 8.2-2.2 18.1z"
                                transform="translate(144.078 14.159)" style="fill:#222"></path>
                        </svg>
                    </div>
                    <div class="badge-txt-holder">
                        <div class="badge-title">Responds Fast <span class="not-earned-badge earn-badge">Not Earned</span>
                        </div>
                        <div class="badge-txt">To earn this badge, you must respond to requests within 12 hours.</div>
                    </div>
                </div>


                <div class="listing-description">{{ $creator->description }}</div>


                <div class="section-title">
                    <div>Packages</div>
                </div>

                <div class="packages-holder">
                    @foreach ($packages as $package)
                        <div class="package-holder" data-platform="{{ $package->package_content_type_ }}">
                            <div class="package-top-row">
                                <div class="package-title">
                                    {{ $package->package_quantity_ }}
                                    {{ $package->package_content_type_ }}
                                    @if ($package->package_duration_ != null)
                                        ({{ $package->package_duration_ }}
                                        {{ $package->package_duration_unit_ }})
                                    @endif
                                </div>
                                <div class="package-price">₹{{ $package->package_price_ }}</div>
                            </div>

                            <div class="package-desc">{{ $package->package_description_ }}</div>
                            <div style="display: none"
                                class="package-desc-full"{{ $package->package_description_ }}</div>

                                <div class="package-btm-row">
                                    <div class="package-img-holder package-img-holder-instagram">
                                        <img loading="lazy" class="package-img"
                                            src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/instagram.svg"
                                            alt="Instagram logo">
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        @endsection
