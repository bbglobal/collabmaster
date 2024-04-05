@extends('layouts.main')

@push('footer-style')
    <style>
        .nk-footer {
            display: none;
        }

        .stripe-banner {
            background-color: var(--black);
        }

        .banner {
            padding: 40px 0;
            margin-bottom: 3%;
        }

        .banner-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 78%;
            margin: 0 auto;
        }

        .banner-title {
            font-size: 170%;
            color: white;
            font-weight: 600;
            margin: 0 0 2% 0;
        }

        .banner-txt {
            color: white;
            font-size: 90%;
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

        .banner-btn {
            padding: 18px;
            background-color: white;
            margin-left: 8%;
            white-space: nowrap;
        }

        .sections-holder {
            width: 80%;
            margin: 4% auto 2% auto;
        }

        .overall-title {
            font-size: 155%;
            font-weight: 600;
        }

        .overall-holder {
            display: flex;
            align-items: center;
            margin: 3.5% 0;
        }

        .overall-num {
            font-size: 270%;
            font-weight: 600;
        }

        .star-img {
            width: 35px;
            margin-left: 10px;
        }

        .overall-txt {
            margin-left: 30px;
        }

        .badge-holder {
            display: flex;
            align-items: center;
            margin: 3% 0;
        }

        .not-earned-badge-img {
            opacity: 0.2;
        }

        .badge-img {
            width: 40px;
            min-width: 40px;
            margin-right: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .badge-img {
            width: 40px;
            min-width: 40px;
            margin-right: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .badge-title {
            font-weight: 600;
            font-size: 105%;
        }

        .not-earned-badge {
            background-color: var(--red);
            color: red;
        }

        .earn-badge {
            font-size: 80%;
            border-radius: 8px;
            margin-left: 6px;
            padding: 5px 7px;
        }

        .badge-txt {
            color: gray;
            font-size: 90%;
            margin-top: 8px;
            font-weight: 300;
        }

        .section-holder {
            border-top: 1px solid rgb(221, 221, 221);
            padding-top: 4%;
        }

        .section-title {
            font-size: 130%;
        }

        .insight-row {
            display: flex;
            align-items: center;
            margin: 5% 0;
        }

        .insight-row-num {
            font-size: 185%;
            font-weight: 600;
            min-width: 80px;
            text-align: right;
        }

        .insight-row-txt-holder {
            margin-left: 40px;
        }

        .insight-row-title-holder {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .insight-row-title {
            font-weight: 600;
            font-size: 115%;
        }

        .insight-rating-good {
            background-color: var(--green);
            color: green;
        }

        .insight-rating {
            border-radius: 8px;
            padding: 5px 7px;
            font-size: 85%;
            font-weight: 600;
            margin-left: 8px;
        }

        .insight-row-txt {
            font-weight: 300;
            font-size: 95%;
        }
    </style>
@endpush

@section('main-section')
    <link rel="stylesheet" href="{{ url('assets/css/banner.css') }}">
    <div id="content">
        <div class="banner stripe-banner">
            <div class="banner-row">
                <div class="banner-txt-holder">
                    <h1 class="banner-title">Insights</h1>
                    <div class="banner-txt">See your profile's ranking and how you are performing.</div>
                </div>
                <div class="btn banner-btn how-success-btn">How to Be Successful</div>
            </div>
        </div>

        <div class="sections-holder">
            <div class="overall-title">Your Marketplace Ranking</div>

            <div class="overall-holder">
                <div class="overall-num-holder">
                    <div class="overall-num">3.9</div>
                    <img class="star-img"
                        src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/star.svg">
                </div>
                <div class="overall-txt">Your overall ranking out of 5, based on metrics such as response rates, order
                    completion, brand reviews, and more.</div>
            </div>


            <div class="badge-holder">
                <div class="badge-img not-earned-badge-img">
                    <svg viewBox="162.014 83.885 155.095 185.538" class="badge-img" style="min-width: 29px; width: 29px;">
                        <path d="m237.411 329.348 11.933 20.843h-23.866l11.933-20.843Z"
                            data-bx-shape="triangle 225.478 329.348 23.866 20.843 0.5 0 1@d0370680"
                            style="fill:#ffadbb;stroke:#000" transform="rotate(167.544 259.78 295.633)"></path>
                        <path d="m237.411 329.348 11.933 20.843h-23.866l11.933-20.843Z"
                            data-bx-shape="triangle 225.478 329.348 23.866 20.843 0.5 0 1@d0370680"
                            style="fill:#ffadbb;stroke:#000" transform="rotate(167.544 226.901 291.81)"></path>
                        <path d="m-213.545-250.038 11.933 15.824h-23.866l11.933-15.824Z"
                            data-bx-shape="triangle -225.478 -250.038 23.866 15.824 0.5 0 1@88a547ec"
                            style="fill:#ffadbb;stroke:#000" transform="scale(-1 1) rotate(-12.456 1905.528 373.14)"></path>
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
                    <div class="badge-title">Top Creator <span class="not-earned-badge earn-badge">Not Earned</span></div>
                    <div class="badge-txt">To earn this badge, you must complete multiple orders and have a high rating from
                        brands.</div>
                </div>
            </div>


            <div class="badge-holder">
                <div class="badge-img not-earned-badge-img">
                    <svg viewBox="166.438 34.205 117.359 185.948" class="badge-img" style="width: 22px; min-width: 22px;">
                        <path d="M223.374 60.139v83.259h-47.267l47.267-83.259Z"
                            data-bx-shape="triangle 176.107 60.139 47.267 83.259 1 0 1@1e60841e"
                            style="stroke:#000;stroke-opacity:0;stroke-width:0;fill:#23f35d"></path>
                        <path d="M-222.811-196.155v85.058h-49.493l49.493-85.058Z"
                            data-bx-shape="triangle -272.304 -196.155 49.493 85.058 1 0 1@8959b67d"
                            style="stroke:#000;stroke-opacity:0;stroke-width:0;fill:#23f35d" transform="rotate(180)"></path>
                        <path
                            d="M84.6 23.7c-2.4 3.8-36.4 62.1-53.5 92-6.5 11.3-9.1 16.7-8.7 18.1.6 1.9 1.9 2 27.1 2.4 14.5.2 26.7.6 26.9.9.3.3-1 15.3-2.9 33.4-2.5 23.9-3.1 33.2-2.3 34.2 1.9 2.4 4.7 1.4 7.1-2.5 3-4.6 52.9-92.1 58.2-101.8 5.9-10.8 6.7-10.4-24.4-10.4-14.1 0-26.1-.4-26.7-.8-.8-.5.1-9.9 3.2-33.6 3.2-24.4 4.1-33.3 3.3-34.3-2-2.3-4.8-1.4-7.3 2.4zm-8.2 48.7c-2.6 19.7-2.5 21 2.9 25 2.6 1.9 4.4 2.1 24.3 2.4 11.8.2 21.4.5 21.4.7 0 .8-41.2 72.6-41.5 72.3-.2-.2.6-8.6 1.6-18.7 1.6-14.5 1.8-19 .9-21.2-2.2-5.2-3.8-5.6-27.3-6.4-12-.4-21.7-1.1-21.5-1.5.8-1.9 41.2-71 41.4-70.7.1.1-.8 8.2-2.2 18.1z"
                            transform="translate(144.078 14.159)" style="fill:#222"></path>
                    </svg>
                </div>
                <div class="badge-txt-holder">
                    <div class="badge-title">Responds Fast <span class="not-earned-badge earn-badge">Not Earned</span></div>
                    <div class="badge-txt">To earn this badge, you must respond to requests within 12 hours.</div>
                </div>
            </div>


            <div class="insights-holder section-holder">
                <div class="section-title">What Makes Up Your Ranking</div>
                <div class="insight-row">
                    <div class="insight-row-num">100%</div>
                    <div class="insight-row-txt-holder">
                        <div class="insight-row-title-holder">
                            <div class="insight-row-title">Order Response Rate</div>

                            <div class="insight-rating insight-rating-good">Good</div>

                        </div>
                        <div class="insight-row-txt">Percentage of orders you’ve received that you’ve responded to (accepted
                            or declined).</div>
                    </div>
                </div>

                <div class="insight-row">
                    <div class="insight-row-num">100%</div>
                    <div class="insight-row-txt-holder">
                        <div class="insight-row-title-holder">
                            <div class="insight-row-title">Order Completion Rate</div>

                            <div class="insight-rating insight-rating-good">Good</div>

                        </div>
                        <div class="insight-row-txt">Percentage of orders you’ve completed that you've accepted.</div>
                    </div>
                </div>

                <div class="insight-row">
                    <div class="insight-row-num">75%</div>
                    <div class="insight-row-txt-holder">
                        <div class="insight-row-title-holder">
                            <div class="insight-row-title">Profile Strength</div>

                            <div class="insight-rating insight-rating-improvement" onclick="location.href='/haseeb122'">
                                Needs Improvement</div>

                        </div>
                        <div class="insight-row-txt">Percentage of your profile you've filled out - <a
                                href="/haseeb122">Improve this now.</a></div>
                    </div>
                </div>
            </div>

            <div class="reviews-holder section-holder">
                <div class="section-title">0 Reviews</div>

                <div class="bars-holder">
                    <div class="bar-row">
                        <div class="bar-title">Communication</div>
                        <div class="bar-holder">
                            <div class="bar-progress" style="width: calc(20 * %)"></div>
                        </div>
                        <div class="bar-num">0</div>
                    </div>

                    <div class="bar-row">
                        <div class="bar-title">Timeliness</div>
                        <div class="bar-holder">
                            <div class="bar-progress" style="width: calc(20 * %)"></div>
                        </div>
                        <div class="bar-num">0</div>
                    </div>

                    <div class="bar-row">
                        <div class="bar-title">Satisfaction</div>
                        <div class="bar-holder">
                            <div class="bar-progress" style="width: calc(20 * %)"></div>
                        </div>
                        <div class="bar-num">0</div>
                    </div>
                </div>
                <div class="review-holder">

                </div>
            </div>
        </div>
    </div>
@endsection
