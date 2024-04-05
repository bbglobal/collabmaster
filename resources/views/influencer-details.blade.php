@extends('layouts.main')

@push('footer-style')
    <style>
        .profile-img {
            position: relative;
            height: 20px;
            width: 20px;
            object-fit: cover;
            border-radius: 50%;
        }

        .package-filter-holder {
            display: flex;
            margin-bottom: 3%;
            width: fit-content;
            max-width: 100%;
            border-radius: 8px;
            font-size: 96%;
        }

        .package-filter {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            padding: 8px;
            color: gray;
            cursor: pointer;
            font-weight: 600;
            transition-duration: 0.3s;
            white-space: nowrap;
            border-radius: 8px;
            min-width: 90px;
            background-color: rgb(243, 243, 243);
            margin-right: 10px;
        }

        .package-filter-active,
        .package-filter:hover {
            color: white;
            background-color: var(--collabstrDark);
            background: var(--gradientText);
        }

        .msg-btn-holder a {
            color: #000;
        }

        .msg-btn-holder a:hover {
            text-decoration: underline;
        }
    </style>
@endpush

@section('main-section')

    <!-- content @s
        -->
        <div class="nk-content main-outer-container mt-0">
            <div class="container-fluid">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-content-wrap">
                            <div class="nk-block-head nk-block-head-lg">
                                <div class="btn-row btn-row-mobile">
                                    <div class="share-btn row-btn">
                                        <img class="row-btn-img row-btn-img-mobile"
                                            src="{{ url('assets/websiteImages/creatorMarketplace/share.svg') }}"
                                            alt="share button">
                                        <span class="row-btn-txt">Share</span>
                                    </div>
                                    <div class="save-btn row-btn" data-id="save">
                                        <svg class="row-btn-img row-btn-img-mobile row-btn-save-img " viewbox="0 0 32 32">
                                            <path
                                                d="m16 28c7-4.733 14-10 14-17 0-1.792-.683-3.583-2.05-4.95-1.367-1.366-3.158-2.05-4.95-2.05-1.791 0-3.583.684-4.949 2.05l-2.051 2.051-2.05-2.051c-1.367-1.366-3.158-2.05-4.95-2.05-1.791 0-3.583.684-4.949 2.05-1.367 1.367-2.051 3.158-2.051 4.95 0 7 7 12.267 14 17z">
                                            </path>
                                        </svg>
                                        <span class="save-btn-txt row-btn-txt">Save</span>
                                    </div>
                                </div>
                                <div class="listing-img">
                                    <div class="img-row">
                                        <div class="primary-img">
                                            <div class="file-area">
                                                <picture>

                                                    <img fetchpriority="high" class="img img1 zoom-in-image" data-toggle="modal"
                                                        data-target="#open-image-modal"
                                                        src="{{ url('assets/images/' . $creator->img_1) }}" alt="image">
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="img-col">
                                            <div class="img-row-sq">
                                                <div class="file-area">
                                                    <picture>

                                                        <img class="img img2 zoom-in-image" data-toggle="modal"
                                                            data-target="#open-image-modal"
                                                            src="{{ url('assets/images/' . $creator->img_2) }}"
                                                            alt="Photo of Dalena">
                                                    </picture>
                                                </div>
                                                <div class="file-area">
                                                    <picture>

                                                        <img class="img img3 zoom-in-image" data-toggle="modal"
                                                            data-target="#open-image-modal"
                                                            src="{{ url('assets/images/' . $creator->img_3) }}"
                                                            alt="Photo of Dalena">
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="file-area file-area4">
                                                <picture>

                                                    <img class="img img4 zoom-in-image" data-toggle="modal"
                                                        data-target="#open-image-modal"
                                                        src="{{ url('assets/images/' . $creator->img_4) }}"
                                                        alt="Photo of Dalena">
                                                </picture>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="profile-holder">
                                        <img loading="lazy" class="profile-pic"
                                            src="{{ url('assets/images/' . $creator->file_path) }}" alt="image">
                                        <div class="profile-info-holder">
                                            <h1 class="listing-title">{{ $creator->full_name }} | {{ $creator->bio }}</h1>
                                            <div class="profile-name-location">
                                                {{ $creator->location }}
                                            </div>
                                            <div class="profile-img-holder">
                                                <div class="profile-img">
                                                    <img loading="lazy"
                                                        src="{{ url('assets/websiteImages/creatorMarketplace/instagram.svg') }}"
                                                        alt="Instagram logo">
                                                </div>
                                                <div class="profile-img">
                                                    <img loading="lazy"
                                                        src="{{ url('assets/websiteImages/creatorMarketplace/tiktok.svg') }}"
                                                        alt="TikTok logo">
                                                </div>
                                                <div class="profile-img">
                                                    <img loading="lazy"
                                                        src="{{ url('assets/websiteImages/creatorMarketplace/youtube.svg') }}"
                                                        alt="YouTube logo">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    {{-- <div class="badge-holder mb-3">
                                        <div class="badge-img">
                                            <svg viewbox="162.014 83.885 155.095 185.538" class="badge-img"
                                                style="min-width: 29px; width: 29px;">
                                                <path d="m237.411 329.348 11.933 20.843h-23.866l11.933-20.843Z"
                                                    data-bx-shape="triangle 225.478 329.348 23.866 20.843 0.5 0 1@d0370680"
                                                    style="fill:#ffadbb;stroke:#000" transform="rotate(167.544 259.78 295.633)">
                                                </path>
                                                <path d="m237.411 329.348 11.933 20.843h-23.866l11.933-20.843Z"
                                                    data-bx-shape="triangle 225.478 329.348 23.866 20.843 0.5 0 1@d0370680"
                                                    style="fill:#ffadbb;stroke:#000" transform="rotate(167.544 226.901 291.81)">
                                                </path>
                                                <path d="m-213.545-250.038 11.933 15.824h-23.866l11.933-15.824Z"
                                                    data-bx-shape="triangle -225.478 -250.038 23.866 15.824 0.5 0 1@88a547ec"
                                                    style="fill:#ffadbb;stroke:#000"
                                                    transform="scale(-1 1) rotate(-12.456 1905.528 373.14)">
                                                </path>
                                                <path d="m216.117 250.038 10.862 15.824h-21.725l10.863-15.824Z"
                                                    data-bx-shape="triangle 205.254 250.038 21.725 15.824 0.5 0 1@98606ad7"
                                                    style="fill:#ffadbb;stroke:#000" transform="rotate(-12.456 74.036 398.316)">
                                                </path>
                                                <ellipse style="stroke:#000;fill:#ffadbb" cx="236.62" cy="153.49"
                                                    rx="64.49" ry="62.609"></ellipse>
                                                <path
                                                    d="M223.268 84.823c-28.1 6-49.9 27.6-55.4 54.8-3.3 16.1-1.4 30 6.1 45.8 3.8 7.9 5.9 10.8 13.2 18 7.1 7.2 10.2 9.5 18.1 13.4 20.9 10.3 41.6 10.3 63-.2 16.5-8 29.7-23.4 35.7-41.7 3.4-10.3 3.8-28.2.9-38.5-6.9-24.7-26.2-44.2-50.1-50.5-8.5-2.2-23.6-2.7-31.5-1.1Zm26.2 10c17.1 3.7 32.1 15.1 40.3 30.8 4.9 9.2 6.5 14.8 7.1 24.8 1.2 17.2-4.8 33.2-17.1 45.6-7.7 7.8-13.4 11.5-23.4 15.2-9 3.3-24 4.1-33.1 1.8-22.4-5.6-39.9-22.9-45.5-45.1-8-31.4 13.7-66.1 45.5-72.9 8.5-1.9 17.9-1.9 26.2-.2Z"
                                                    style="fill:#222"></path>
                                                <path
                                                    d="M229.768 108.223c-4 2.5-5.3 4.2-9.5 12.1-1.9 3.6-4.2 6.7-5 6.8-12.8 1.7-16.4 2.7-19.6 5.5-4 3.5-5.9 9.1-5 14.4.6 2.8 2.5 5.5 7.3 10.5l6.6 6.8-1.3 8.1c-.7 4.4-1 9.4-.6 11.1 1.3 6.8 7.7 11.9 15 11.9 2.2 0 6.6-1.5 11.4-3.9l7.7-3.9 7.5 3.9c4.7 2.4 8.9 3.8 11.4 3.9 5.2 0 10.9-3.4 13.6-8.3 2.2-3.9 2.3-4.3 1-13.4l-1.3-9.3 6.6-7c7.7-8.1 8.9-11.6 6.2-18.5-2.9-7.9-6-9.4-23.5-11.8-.8-.1-3.2-3.3-5.3-7.2-4.6-8.4-6.3-10.4-10.4-12.1-4.5-1.9-9.2-1.7-12.8.4Zm11.3 10.9c1.1 1.6 3.4 5.7 5.2 9.3 1.8 3.6 3.7 6.8 4.2 7.1.6.4 5.1 1.2 10 1.9 9.2 1.2 12.8 3.1 12.8 6.6 0 .9-3.4 5.1-7.6 9.4l-7.5 7.8 1.6 9.3c2.8 16.1.6 17.9-14 10.6l-9.2-4.5-8.9 4.5c-9.4 4.8-13.7 5.3-15.1 1.6-.4-.9.1-6.2 1-11.7l1.6-10.1-7.4-7.5c-4.1-4.2-7.5-8.2-7.5-9 0-.9.7-2.5 1.5-3.6 1.1-1.7 3.3-2.4 10.8-3.4 5.2-.7 9.9-1.5 10.4-1.9.6-.3 2.7-4 4.8-8.1 2-4.1 4.4-8.3 5.3-9.3 2.3-2.6 5.8-2.1 8 1Zm55.2 94.9c-8.9 9.1-24.4 17.6-37.4 20.5-3.1.7-5.6 1.4-5.6 1.7 0 .8 9.2 21.6 12.1 27.4 2.6 5.1 3.3 5.8 5.9 5.8 3.6 0 4.7-1.6 10.1-13.9 2.3-5.3 4.5-10 4.9-10.4.4-.5 6.5 1 13.5 3.2 12.1 3.9 13 4 15.3 2.5 1.9-1.3 2.3-2.2 1.9-4.4-.6-2.9-14.4-34.9-15.6-36.2-.4-.5-2.7 1.3-5.1 3.8Zm4.3 18.1c1.5 3.2 2.3 5.9 1.9 6-.4.2-4-.7-8-2l-7.3-2.2 4.8-3.7c2.6-2 5.1-3.7 5.4-3.7.3-.1 1.8 2.5 3.2 5.6Zm-25.6 13.3c-1.8 3.8-3.4 7-3.7 7-.7 0-4.3-9-3.8-9.5s9.1-4.3 10-4.4c.3-.1-.8 3-2.5 6.9Zm-105.7-18.8c-7.7 17.4-8.8 22.1-5.5 24.3 1.7 1.2 3.7.8 14.5-2.6 6.9-2.2 13-3.7 13.5-3.5.6.2 3 5.1 5.5 11 4.9 11.9 6.5 13.9 10.6 13.4 2.6-.3 3.4-1.5 9.5-14.8 9.1-19.8 8.8-18.3 3-19.7-12.6-3-26.3-10.1-36.3-18.8-3.5-3-6.6-5.5-6.9-5.5-.3 0-3.9 7.3-7.9 16.2Zm17.9 4.3 4.4 3-7.4 2.2c-9.1 2.8-9.1 2.8-8 0 3.2-8.1 4.2-9.7 5.4-9 .7.4 3.2 2.1 5.6 3.8Zm23.9 12c.2.2-.6 2.5-1.7 5.1-1.2 2.6-2.3 4.5-2.6 4.3-.2-.3-1.7-3.5-3.4-7.1l-3-6.7 5.2 2c2.9 1.1 5.4 2.2 5.5 2.4Z"
                                                    style="fill:#222"></path>
                                            </svg>
                                        </div>
                                        <div class="badge-txt-holder">
                                            <div class="badge-title">Dalena is a Top Creator </div>
                                            <div class="badge-txt">Top creators have completed multiple orders
                                                and have a high
                                                rating from brands.</div>
                                        </div>
                                    </div> --}}

                                    <div class="listing-description mb-5">{{ $creator->description }}</div>

                                    <div class="nk-block-head pb-0">
                                        <div class="nk-block-head-content section-title pb-0">
                                            <h4 class="title nk-block-title">Packages</h4>
                                            <div class="how-it-works-btn">
                                                <img loading="lazy" alt="How Collabstr works" class="how-it-works-btn-img"
                                                    src="{{ url('assets/websiteImages/creatorMarketplace/howItWorks.svg') }}">
                                                How does it work?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-inner p-0">

                                            {{-- <ul class="nav nav-tabs profile border-0 mt-n3">
                                                <li class="nav-item p-1">
                                                    <a class="nav-link package-filter px-md-4 py-1 active" data-toggle="tab"
                                                        href="#tab-all" style="border-radius: 8px;">All</a>
                                                </li>
                                                <li class="nav-item p-1">
                                                    <a class="nav-link package-filter px-md-4 py-1" data-toggle="tab"
                                                        href="#tab-instagram" style="border-radius: 8px;">Instagram</a>
                                                </li>
                                                <li class="nav-item p-1">
                                                    <a class="nav-link package-filter px-md-4 py-1" data-toggle="tab"
                                                        href="#tab-tiktok" style="border-radius: 8px;">TikTok</a>
                                                </li>
                                            </ul> --}}

                                            <div class="package-filter-holder">
                                                <div class="package-filter package-filter-active" data-platform="all">All</div>
                                            </div>

                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab-all">
                                                    <div class="row">
                                                        @foreach ($packages as $package)
                                                            <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
                                                                <div class="package-holder"
                                                                    data-platform="{{ $package->package_content_type_ }}">
                                                                    <!-- Your content here -->

                                                                    <div class="package-top-row">
                                                                        <div class="package-title">
                                                                            {{ $package->package_quantity_ }}
                                                                            {{ $package->package_content_type_ }}
                                                                            @if ($package->package_duration_ != null)
                                                                                ({{ $package->package_duration_ }}
                                                                                {{ $package->package_duration_unit_ }})
                                                                            @endif
                                                                        </div>
                                                                        <div class="package-price">
                                                                            ₹{{ $package->package_price_ }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="package-desc">
                                                                        {{ $package->package_description_ }}
                                                                        <span class="see-more-package">See More</span>
                                                                    </div>
                                                                    <div style="display: none" class="package-desc-full">{{ $package->package_description_ }}</div>
                                                                    <div class="package-btm-row">
                                                                        <div
                                                                            class="package-img-holder package-img-holder-instagram">
                                                                            <img class="package-img"
                                                                                src="{{ url('assets/websiteImages/creatorMarketplace/instagram.svg') }}"
                                                                                alt="Instagram logo" loading="lazy">
                                                                        </div>
                                                                        @guest
                                                                            <a href="{{ route('brand.checkout', ['id' => $package->id]) }}"
                                                                                class="buy-btn btn">Continue</a>
                                                                        @else
                                                                            @if (Auth::user()->role == 'brand')
                                                                                <a href="{{ route('brand.checkout', ['id' => $package->id]) }}"
                                                                                    class="buy-btn btn">Continue</a>
                                                                            @endif
                                                                        @endguest
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .card-preview -->

                                    <div class="msg-btn-holder">Have a different request?
                                        <a href="{{ route('offer.create', ['id' => $creator->user_id]) }}"
                                            class="msg-btn">Send a
                                            Custom Offer</a>
                                    </div>



                                    {{-- <div class="reviews-holder">
                                        <div class="section-title">7 Reviews&nbsp;&nbsp;&nbsp;&nbsp;
                                            <img loading="lazy" class="star-img"
                                                src="{{ url('assets/websiteImages/creatorMarketplace/star.svg') }}">5.0
                                        </div>
                                        <div class="bars-holder">
                                            <div class="bar-row">
                                                <div class="bar-title">Communication</div>
                                                <div class="bar-holder">
                                                    <div class="bar-progress" style="width: calc(20 * 5.0%)">
                                                    </div>
                                                </div>
                                                <div class="bar-num">5.0</div>
                                            </div>

                                            <div class="bar-row">
                                                <div class="bar-title">Timeliness</div>
                                                <div class="bar-holder">
                                                    <div class="bar-progress" style="width: calc(20 * 5.0%)">
                                                    </div>
                                                </div>
                                                <div class="bar-num">5.0</div>
                                            </div>

                                            <div class="bar-row">
                                                <div class="bar-title">Satisfaction</div>
                                                <div class="bar-holder">
                                                    <div class="bar-progress" style="width: calc(20 * 5.0%)">
                                                    </div>
                                                </div>
                                                <div class="bar-num">5.0</div>
                                            </div>
                                        </div>
                                        <div class="review-holder">

                                            <div class="review-row">
                                                <div class="reviewer-holder">
                                                    <img loading="lazy" class="reviewer-img"
                                                        src="{{ url('assets/websiteImages/creatorMarketplace/profPics/t.webp') }}">
                                                    <div class="reviewer-info-holder">
                                                        <div class="reviewer-name">Tyler</div>
                                                        <div class="review-date">October 2022</div>
                                                        <div class="review-num"><img loading="lazy" class="review-star-img"
                                                                src="{{ url('assets/websiteImages/creatorMarketplace/star.svg') }}">5.0
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-txt">Thanks so much. It was great working
                                                    with you, and your video is amazing. I look forward to
                                                    collaborating again soon!</div>
                                            </div>

                                            <div class="review-row">
                                                <div class="reviewer-holder">
                                                    <img loading="lazy" class="reviewer-img"
                                                        src="{{ url('assets/websiteImages/creatorMarketplace/profPics/j.webp') }}">
                                                    <div class="reviewer-info-holder">
                                                        <div class="reviewer-name">Jerome</div>
                                                        <div class="review-date">May 2022</div>
                                                        <div class="review-num"><img loading="lazy" class="review-star-img"
                                                                src="{{ url('assets/websiteImages/creatorMarketplace/star.svg') }}">5.0
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-txt">Jerome left a 5.0 star review.</div>
                                            </div>

                                            <div class="review-row">
                                                <div class="reviewer-holder">
                                                    <img loading="lazy" class="reviewer-img"
                                                        src="{{ url('assets/websiteImages/creatorMarketplace/profPics/m.webp') }}">
                                                    <div class="reviewer-info-holder">
                                                        <div class="reviewer-name">Michael</div>
                                                        <div class="review-date">February 2022</div>
                                                        <div class="review-num"><img loading="lazy" class="review-star-img"
                                                                src="{{ url('assets/websiteImages/creatorMarketplace/star.svg') }}">5.0
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-txt">Dalena was a pleasure to work with and
                                                    super professional! Would definitely work with her again :
                                                </div>
                                            </div>

                                            <div class="review-row">
                                                <div class="reviewer-holder">
                                                    <img loading="lazy" class="reviewer-img"
                                                        src="assets/websiteImages/creatorMarketplace/profPics/m.webp">
                                                    <div class="reviewer-info-holder">
                                                        <div class="reviewer-name">Malik</div>
                                                        <div class="review-date">January 2022</div>
                                                        <div class="review-num"><img loading="lazy" class="review-star-img"
                                                                src="assets/websiteImages/creatorMarketplace/star.svg">5.0
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-txt">Malik left a 5.0 star review.</div>
                                            </div>

                                            <div class="review-row">
                                                <div class="reviewer-holder">
                                                    <img loading="lazy" class="reviewer-img"
                                                        src="assets/websiteImages/creatorMarketplace/profPics/c.webp">
                                                    <div class="reviewer-info-holder">
                                                        <div class="reviewer-name">Cole</div>
                                                        <div class="review-date">September 2021</div>
                                                        <div class="review-num"><img loading="lazy" class="review-star-img"
                                                                src="assets/websiteImages/creatorMarketplace/star.svg">5.0
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-txt">Awesome &amp; easy to work with! </div>
                                            </div>

                                            <div class="review-row">
                                                <div class="reviewer-holder">
                                                    <img loading="lazy" class="reviewer-img"
                                                        src="assets/websiteImages/creatorMarketplace/profPics/t.webp">
                                                    <div class="reviewer-info-holder">
                                                        <div class="reviewer-name">Taaj</div>
                                                        <div class="review-date">July 2021</div>
                                                        <div class="review-num"><img loading="lazy" class="review-star-img"
                                                                src="assets/websiteImages/creatorMarketplace/star.svg">5.0
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-txt">Taaj left a 5.0 star review.</div>
                                            </div>

                                            <div class="review-row">
                                                <div class="reviewer-holder">
                                                    <img loading="lazy" class="reviewer-img"
                                                        src="assets/websiteImages/creatorMarketplace/profPics/l.webp">
                                                    <div class="reviewer-info-holder">
                                                        <div class="reviewer-name">Lenovie</div>
                                                        <div class="review-date">September 2021</div>
                                                        <div class="review-num"><img loading="lazy" class="review-star-img"
                                                                src="assets/websiteImages/creatorMarketplace/star.svg">5.0
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-txt">Thank you Dalena</div>
                                            </div>

                                        </div>
                                    </div> --}}

                                    <!--<div class="related-cats-holder">-->
                                    <!--    <h3 class="related-cats-title">Related Categories</h3>-->
                                    <!--    <div class="related-items-holder">-->
                                    <!--        <a class="related-item" href="/find-influencers/instagram" target="_blank">Find-->
                                    <!--            Instagram Influencers</a>-->
                                    <!--        <a class="related-item" href="/find-influencers/tiktok" target="_blank">Find-->
                                    <!--            TikTok Influencers</a>-->
                                    <!--        <a class="related-item" href="/find-influencers/health-&-fitness"-->
                                    <!--            target="_blank">Find Health &amp; Fitness Influencers</a>-->
                                    <!--        <a class="related-item" href="/find-influencers/music-&-dance"-->
                                    <!--            target="_blank">Find-->
                                    <!--            Music &amp; Dance Influencers</a>-->
                                    <!--        <a class="related-item" href="/find-influencers/fashion" target="_blank">Find-->
                                    <!--            Fashion Influencers</a>-->
                                    <!--        <a class="related-item" href="/find-influencers/beauty" target="_blank">Find-->
                                    <!--            Beauty Influencers</a>-->
                                    <!--        <a class="related-item" href="/find-influencers/healthcare" target="_blank">Find-->
                                    <!--            Healthcare Influencers</a>-->
                                    <!--        <a class="related-item" href="/top-influencers/in/united-states"-->
                                    <!--            target="_blank">Top-->
                                    <!--            Influencers in United States</a>-->
                                    <!--        <a class="related-item" href="/top-influencers/in/hillsboro-or-united-states"-->
                                    <!--            target="_blank">Top Influencers in Hillsboro, OR, United-->
                                    <!--            States</a>-->
                                    <!--    </div>-->
                                    <!--</div>-->




                                </div> <!-- listing-img ends -->



                            </div><!-- .nk-block -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content @e -->

        <script>
            var hasInstagramPackage = false;
            var hasUgcPackage = false;
            var hasTiktokPackage = false;
            var hasYoutubePackage = false;
            var hasAmazonPackage = false;

            $('.package-holder').each(function() {
                var platform = $(this).attr('data-platform');


                if (platform.includes('Instagram')) {
                    $(this).attr('data-platform', 'instagram');
                    hasInstagramPackage = true;
                } else if (platform.includes('UGC')) {
                    $(this).attr('data-platform', 'user generated content');
                    hasUgcPackage = true;
                } else if (platform.includes('TikTok')) {
                    $(this).attr('data-platform', 'tiktok');
                    hasTiktokPackage = true;
                } else if (platform.includes('YouTube')) {
                    $(this).attr('data-platform', 'youtube');
                    hasYoutubePackage = true;
                } else if (platform.includes('Amazon')) {
                    $(this).attr('data-platform', 'amazon');
                    hasAmazonPackage = true;
                }
            });

            if (hasInstagramPackage) {
                $('.package-filter-holder').append('<div class="package-filter" data-platform="instagram">Instagram</div>');
            }
            if (hasUgcPackage) {
                $('.package-filter-holder').append(
                    '<div class="package-filter" data-platform="user generated content">UGC</div>');
            }
            if (hasTiktokPackage) {
                $('.package-filter-holder').append('<div class="package-filter" data-platform="tiktok">TikTok</div>');
            }
            if (hasYoutubePackage) {
                $('.package-filter-holder').append('<div class="package-filter" data-platform="youtube">Youtube</div>');
            }
            if (hasAmazonPackage) {
                $('.package-filter-holder').append('<div class="package-filter" data-platform="amazon">Amazon</div>');
            }


            $('.package-filter').click(function() {
                let plat = $(this).data('platform');
                $('.package-filter').removeClass('package-filter-active');
                $(this).addClass('package-filter-active');
                $('.package-holder').show();
                if (plat !== 'all') $(`.package-holder[data-platform!="${plat}"]`).hide();
            });
        </script>
    @endsection
