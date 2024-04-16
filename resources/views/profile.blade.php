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
    </style>
@endpush

@section('main-section')
    <link rel="stylesheet" href="{{ url('assets/css/banner.css') }}">
    <div id="content">
        <div class="banner stripe-banner">
            <div class="banner-row">
                <div class="banner-txt-holder">
                    <h2 class="banner-title">Create a Campaign</h2>
                    <div class="banner-txt">Save hours with campaigns and work with influencers at scale.</div>
                </div>
                <div class="btn banner-btn">Create Campaign</div>
            </div>
        </div>

        <div class="listing-holder">

            <div class="img-row">
                <div class="primary-img primary-img1">
                    <div class="file-area">
                        <picture>
                            <source media='(max-width: 800px)'
                                srcset='data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs='>
                            <img loading="lazy" class="img img1"
                                src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/cover.png"
                                alt="Photo of Saddam Hussain">
                        </picture>
                    </div>
                </div>
            </div>


            <div class="info-holder">
                <div class="profile-holder">
                    <img loading="lazy" class="profile-pic"
                        src="https://d5ik1gor6xydq.cloudfront.net/buyers/133276/17078394531847463.webp"
                        alt="Photo of brandboostesr">
                    <div class="profile-info-holder">
                        <h1 class="listing-title">brandboostesr</h1>
                        <div class="profile-name-location">London, LND, United Kingdom</div>
                        <div class="platform-img-holder">


                            <div class="platform-img">
                                <a rel="nofollow" href="https://instagram.com/haseebkahlid217" target="_blank"
                                    data-platform="instagram" class="intercept"><span class="link-spanner"></span></a>
                                <img loading="lazy"
                                    src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/instagram.svg"
                                    alt="Instagram logo">
                            </div>

                        </div>
                    </div>
                </div>

                <div class="listing-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non veritatis
                    accusamus laudantium, neque dolorum nihil itaque id minima sint aspernatur rerum totam voluptates
                    doloremque minus soluta quis labore sapiente fugiat!</div>


                <div class="section-title">Campaigns</div>

                <div class="packages-holder">

                    @if ($campaign->count() > 0)
                        @foreach ($campaign as $row)
                            <div class="profile-listing-holder">
                                <a href="testteteteteststestesrwe" target="_blank"><span class="link-spanner"></span></a>
                                <div class="profile-listing-img-holder">
                                    <img loading="lazy" class="profile-listing-img" alt="brandboostesr's campaign"
                                        src="{{ url('assets/images/' . $row->img_files) }}">
                                    <div class="profile-listing-owner-holder">
                                        <div class="profile-listing-owner-info-holder">
                                            <div class="profile-listing-owner-name">{{ $row->product_summary }}</div>
                                            <div class="profile-listing-owner-location">{{ $row->platform }} Campaign</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <a href="{{ route('create.campaign', ['id' => 1]) }}" class="create-campaign-btn mt-5"><img
                                loading="lazy" class="create-campaign-btn-img"
                                src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/create.svg">Create
                            Campaign</a>
                    @endif

                </div>


            </div>
        </div>

    </div>
@endsection
