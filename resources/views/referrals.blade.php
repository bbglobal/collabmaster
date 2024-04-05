@extends('layouts.main')

@push('footer-style')
    <style>
        .nk-footer {
            display: none;
        }

        .share-banner {
            background-color: var(--black);
            background: var(--gradientText);
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

        .referral-holder {
            width: 80%;
            margin: 0 auto;
        }

        .total-row {
            display: flex;
            justify-content: space-evenly;
            margin: 5% 0 8% 0;
            flex-wrap: wrap;
        }

        .total-holder {
            width: 20%;
            box-shadow: var(--lightBoxShadow);
            border-radius: 8px;
            text-align: center;
            padding: 38px 0;
        }

        .total-num {
            font-weight: 600;
            font-size: 250%;
            margin: 0 0 4% 0;
        }

        .total-title-holder {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .total-title {
            background: var(--gradientText);
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
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

        .order-holder-title {
            font-weight: 600;
            font-size: 135%;
        }

        .order-subtitle {
            color: gray;
            font-size: 85%;
            margin: 1% 0 3% 0;
        }

        .order-holder {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 10px;
            border-bottom: 1px solid rgba(191, 203, 218, .4);
            font-size: 92%;
        }

        .order-date,
        .order-amount {
            width: 110px;
        }

        .order-title {
            font-weight: 600;
        }

        .order-status {
            width: 16%;
        }

        .order-date,
        .order-amount {
            width: 110px;
        }

        .order-title {
            font-weight: 600;
        }

        .no-orders {
            margin: 5% auto;
            text-align: center;
            color: #AAA;
        }
    </style>
@endpush

@section('main-section')
    <link rel="stylesheet" href="{{ url('assets/css/banner.css') }}">
    <div id="content">
        <div class="banner share-banner">
            <div class="banner-row">
                <div class="banner-txt-holder">
                    <h1 class="banner-title">Earn $20 Cash for Every Brand You Refer to Collabstr</h1>
                    <div class="banner-txt">Welcome to your referral dashboard. Get $20 cash for every brand that signs up
                        and makes an order through your link. They will also get $10 towards their first order.</div>
                </div>
                <div class="btn banner-btn share-modal-btn">Share Your Link</div>
            </div>
        </div>

        <div class="referral-holder">
            <div class="total-row">
                <div class="total-holder">
                    <div class="total-num">0</div>
                    <div class="total-title-holder">
                        <div class="total-title">Total Referrals</div>
                        <div class="tooltip"><img class="tooltip-img"
                                src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/tooltip.svg">
                            <div class="tooltip-txt">Number of brands you've referred that have made an order.</div>
                        </div>
                    </div>
                </div>
                <div class="total-holder">
                    <div class="total-num">$0.00</div>
                    <div class="total-title-holder">
                        <div class="total-title">Total Commission</div>
                        <div class="tooltip"><img class="tooltip-img"
                                src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/tooltip.svg">
                            <div class="tooltip-txt">Lifetime commission that has been paid out to you.</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="orders-holder">
                <div class="order-holder-title">Referrals</div>
                <div class="order-subtitle"></div>
                <div class="orders-table">
                    <div class="order-holder">
                        <div class="order-title order-date">Date</div>
                        <div class="order-title order-status">Status</div>
                        <div class="order-title order-amount">Commission</div>
                    </div>

                    <div class="no-orders">Your referrals will be shown here.</div>

                </div>
            </div>
        </div>
    </div>
@endsection
