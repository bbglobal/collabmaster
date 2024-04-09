@extends('layouts.main')

@push('footer-style')
    <style>
        .nk-footer {
            display: none;
        }

        .page-holder {
            width: 80%;
            margin: 4% auto;
        }

        .campaign-info-holder {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 0 0 4% 0;
        }

        .lists-title {
            font-size: 210%;
            font-weight: 600;
            margin: 0;
        }

        .create-btn {
            display: flex;
            align-items: center;
            width: fit-content;
            padding: 10px 18px;
            font-size: 90%;
            font-weight: 600;
            cursor: pointer;
            margin: 0;
            box-shadow: var(--lightBoxShadow);
            border-radius: 8px;
            transition-duration: 0.3s;
            background-color: var(--black);
            text-decoration: none;
            color: white;
        }

        .create-btn-img {
            width: 13px;
            margin-right: 6px;
        }

        .example-row-holder {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .example-img-holder {
            width: 50%;
        }

        .example-img {
            width: 100%;
            filter: drop-shadow(2px 8px 0.9rem #f9f9f9);
        }

        .example-steps-holder {
            width: 42%;
        }

        .example-row-title {
            font-size: 190%;
            font-weight: 600;
            margin: 0 0 11% 0;
        }

        .example-step {
            margin: 8% 0;
        }

        .example-step-title {
            margin: 0;
            font-weight: 600;
            font-size: 125%;
        }

        .example-step-txt {
            line-height: 1.4;
            font-size: 95%;
            margin-top: 2%;
            color: gray;
            font-weight: 400;
        }

        a:hover {
            color: #fff;
        }

        .example-step:last-child {
            margin: 0;
        }

        #msg-holder {
            display: none;
        }
    </style>
@endpush

@section('main-section')
    <link rel="stylesheet" href="{{ url('assets/css/banner.css') }}">
    <div id="msg-holder">
        <div id="msg-holder-row">
            <img src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/succ.svg" class="succ-err-msg-img"
                id="msg-img-succ">
            <img src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/err.svg" class="succ-err-msg-img"
                id="msg-img-err">
            <div id="msg"></div>
        </div>
    </div>
    <div id="content">
        <div class="page-holder">
            <div class="campaign-info-holder">
                <h1 class="lists-title">Campaigns</h1>
                <a href="{{ route('start.campaign', ['id' => 1]) }}" class="create-btn"><img class="create-btn-img"
                        src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/create.svg">Create
                    Campaign</a>
            </div>


            <br><br>
            <div class="example-row-holder row-holder example-row-holder-reverse">
                <div class="example-img-holder">
                    <picture>
                        <source media='(max-width: 800px)'
                            srcset='https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/brandPage/campaignSmall.png'>
                        <img src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/brandPage/campaign.png"
                            class="example-img" alt="Influencer campaign brief" loading="lazy">
                    </picture>
                </div>
                <div class="example-steps-holder">
                    <h2 class="example-row-title">Save Hours With Campaigns and Work With Influencers at Scale</h2>

                    <div class="example-step">
                        <h3 class="example-step-title">Create Campaigns</h3>
                        <div class="example-step-txt">Centralize your images, requirements, content examples, and more in a
                            campaign brief.</div>
                    </div>
                    <div class="example-step">
                        <h3 class="example-step-title">Add Influencers</h3>
                        <div class="example-step-txt">Search and add influencers to your campaign in seconds.</div>
                    </div>
                    <div class="example-step">
                        <h3 class="example-step-title">Send to Influencers</h3>
                        <div class="example-step-txt">Order from influencers in a single click by sending your campaign.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
