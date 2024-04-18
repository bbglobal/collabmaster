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

        .tabs-holder {
            display: flex;
            margin-bottom: 4%;
        }

        .tab-active {
            box-shadow: 0 3px 0 0 var(--black);
            color: var(--black);
        }

        .tab {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            padding: 18px 9px;
            margin-right: 45px;
            color: gray;
            cursor: pointer;
            font-weight: 600;
            transition-duration: 0.3s;
            white-space: nowrap;
        }

        #msg-holder {
            display: none;
        }
    </style>
@endpush

@section('main-section')
    <link rel="stylesheet" href="{{ url('assets/css/banner.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/campaign.css') }}">
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




        <div class="banner stripe-banner">
            <div class="banner-row">
                <div class="banner-txt-holder">
                    <h2 class="banner-title">Find Brands for Your Work</h2>
                    <div class="banner-txt">Send your porposal to hundreds of brands in minutes.</div>
                </div>
            </div>
        </div>

        <div class="swiper">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <picture>
                        <source media='(min-width: 800px)'
                            srcset='data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs='>
                        <img loading="lazy" class="img d-none"
                            src="https://d5ik1gor6xydq.cloudfront.net/campaigns/9159/imgs/17131757506310446.webp"
                            alt="Photo of brandboostesr's product">
                    </picture>
                </div>

            </div>
        </div>

        @if (Auth::user()->role == 'brand')
            <div class="tabs-holder">
                <div class="tab tab-active" data-tab="1">Details</div>
                <div class="tab" data-tab="2">Proposals</div>
            </div>

            <div class="proposal-holder" data-step="2">

                @foreach ($proposal as $row)
                    <div class="package-holder flex-column my-3">
                        <div class="package-top-row">
                            <div class="package-title">{{ $row->name }}</div>
                        </div>
                        <div class="package-description">{{ $row->proposal }}</div>
                        <div class="package-btm-row">
                            <div class="package-img-holder package-img-holder-instagram">
                                <img loading="lazy" class="package-img"
                                    src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/instagram.svg"
                                    alt="Instagram logo">
                            </div>
                            <a href="{{ url('chatify/'. $row->creator_id) }}" class="create-btn">Chat</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        <div class="listing-holder" data-step="1">


            <div class="img-row">
                <div class="primary-img primary-img1">
                    <div class="file-area">
                        <picture>
                            <source media='(max-width: 800px)'
                                srcset='data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs='>
                            <img loading="lazy" class="img img1" src={{ url('/assets/images/' . $campaign->img_1) }}
                                alt="image">
                        </picture>
                    </div>
                </div>
            </div>

            <div class="info-holder">
                <div class="profile-holder">
                    <img loading="lazy" class="profile-pic" src="{{ url($campaign->file_path) }}"
                        alt="Photo of brandboostesr" onclick="window.open(`{{ $campaign->id }}`)">
                    <div class="profile-info-holder">
                        <h1 class="listing-title">{{ $campaign->product_summary }}</h1>
                        <div class="profile-name-location" onclick="window.open(`{{ $campaign->id }}`)">
                            {{ $campaign->product_summary }} |
                            {{ $campaign->platform }} campaign</div>
                        <div class="platform-img-holder">

                            <div class="platform-img">
                                <a rel="nofollow" href="{{ $campaign->website }}" target="_blank"><span
                                        class="link-spanner"></span></a>
                                <img loading="lazy"
                                    src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/website.svg"
                                    alt="Website logo">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="listing-description campaign-description">{{ $campaign->brand }}</div>



                <div class="section-title">Content Requirements</div>
                <div class="section-subtitle-holder">

                    <div class="section-subtitle"><img class="section-subtitle-img"
                            src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/greenCheck.svg"
                            loading="lazy">You are required to post on your page</div>
                </div>


                <div class="packages-holder">
                    <div class="package-holder">
                        <div class="package-top-row">
                            <div class="package-title">{{ $campaign->quantity_0 }} {{ $campaign->content_type_0 }}</div>
                        </div>
                        <div class="package-description">{{ $campaign->brand }}</div>
                        <div class="package-btm-row">
                            <div class="package-img-holder package-img-holder-instagram">
                                <img loading="lazy" class="package-img"
                                    src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/instagram.svg"
                                    alt="Instagram logo">
                            </div>
                        </div>
                    </div>
                </div>



                <div class="section-title">Mentions</div>
                <div class="listing-description">None</div>

                @if (Auth::user()->role == 'creator')
                    <div class="section-title">Submit a Proposal</div>
                    <form action="{{ route('submit.proposal', ['id' => $campaign->id]) }}" method="post" class="mt-3">
                        @csrf
                        <input type="hidden" name="brand_id" value="{{ $campaign->user_id }}">
                        <input type="hidden" name="creator_id" value="{{ Auth::user()->id }}">
                        <textarea name="proposal" id="" cols="30" rows="5" placeholder="Write a proposal"
                            class="form-control w-100"></textarea>
                        <div class="row">
                            <div class="col-6">
                                <input type="number" name="price" class="form-control w-100 my-3"
                                    placeholder="Price">
                            </div>
                            <div class="col-6">
                                <input type="text" name="duration" class="form-control w-100 my-3"
                                    placeholder="Duration">
                            </div>
                        </div>
                        <button type="submit" class="my-3 upgrade-btn border-0"
                            style="border-radius: 7px;">Submit</button>
                    </form>
                @endif
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
        <script>
            $('.proposal-holder').hide();
            $('.tab').click(function() {
                let tab = $(this).data('tab');
                console.log(tab);
                $('.tab').removeClass("tab-active");
                $('.listing-holder').hide();
                $(this).addClass('tab-active');
                console.log(tab);
                $(`[data-step=${tab}]`).show();
            })
        </script>
    @endsection
