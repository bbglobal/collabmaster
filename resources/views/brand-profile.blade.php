@extends('layouts.main')

@push('footer-style')
    <style>
        #msg-holder {
            display: none;
        }
        .profile-listing-owner-holder {
            text-transform:capitalize;
            margin-top: -4rem;
            padding: 0 2rem;
            color: #fff;
            position: relative;
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

    <div id="content">


        <link rel="stylesheet" href="{{ url('assets/css/banner.css') }}">
        <link rel="stylesheet" href="{{ url('assets/css/brand.css') }}">
        <div class="banner stripe-banner">
            <div class="banner-row">
                <div class="banner-txt-holder">
                    <h2 class="banner-title">Complete Your Profile</h2>
                    <div class="banner-txt">Your profile is the first thing creators view to learn about your brand. Having
                        a complete, detailed profile helps creators decide if you're a fit to collaborate with.</div>
                </div>
                <div onclick="location.href='/edit-page/{{ Auth::user()->id }}'" class="btn banner-btn">Complete Profile
                </div>
            </div>
        </div>


        <div class="btn-row btn-row-mobile">
            <div onclick="location.href='/edit-page/{{ Auth::user()->id }}'" class="row-btn"><img class="row-btn-img"
                    src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/edit.svg">Edit</div>
        </div>

        <div class="swiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <picture>
                        <source media='(min-width: 800px)'
                            srcset='data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs='>
                        <img loading="lazy" class="img"
                            src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/cover.png"
                            alt="Photo of David Mezrahi">
                    </picture>
                </div>

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
                                alt="Photo of David Mezrahi">
                        </picture>
                    </div>
                </div>
            </div>

            <div class="info-holder">
                <div class="profile-holder">
                    <img loading="lazy" class="profile-pic"
                        src="https://d5ik1gor6xydq.cloudfront.net/buyers/126036/17055948169590776.webp"
                        alt="Photo of brandboostesr">
                    <div class="profile-info-holder">
                        <h1 class="listing-title">brandboostesr</h1>
                        <div class="profile-name-location"></div>
                        <div class="platform-img-holder">

                            <div class="platform-img">
                                <a rel="nofollow" href="https://www.brandboosters.us" target="_blank"><span
                                        class="link-spanner"></span></a>
                                <img loading="lazy"
                                    src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/website.svg"
                                    alt="Website logo">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="listing-description">A quality description, logo and adding your social channels results in 3x
                    more influencer collaborations on Collabstr. <span class="complete-prof-btn"
                        onclick="location.href='/edit-page/{{ Auth::user()->id }}'">Complete your profile now.</span>
                </div>


                <div class="section-title">Campaigns</div>
                @if ($campaigns->isEmpty())
                    <div class="packages-holder">
                        <a href="{{ route('start.campaign', ['id' => 1]) }}" class="create-campaign-btn">
                            <img loading="lazy" class="create-campaign-btn-img"
                                src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/create.svg">Create
                            Campaign
                        </a>
                    </div>
                @else
                    <div class="packages-holder">
                        @foreach ($campaigns as $row)
                            <div class="profile-listing-holder">
                                <a href="/brandboostesr/{{ $row->slug }}" target="_blank"><span
                                        class="link-spanner"></span></a>
                                <a href="{{ route('show.campaign', ['id' => $row->id]) }}">
                                    <div class="profile-listing-img-holder">
                                        <img loading="lazy" class="profile-listing-img" alt="{{ $row->platform }}'s campaign"
                                            src="{{ url('/assets/images/'. $row->img_1 ) }}">
                                        <div class="profile-listing-owner-holder">
                                            <div class="profile-listing-owner-info-holder">
                                                <div class="profile-listing-owner-name">{{ $row->product_summary }}</div>
                                                <div class="profile-listing-owner-location">{{ $row->brand }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endif


                <div class="section-title">Reviews</div>
                <div class="listing-description">You have no reviews yet.</div>

            </div>
        </div>

        <link rel="stylesheet" type="text/css" href="/static/igmarketplace/components/modal.css?v=3.67">


        <div class="modal">
            <div class="modal-content-holder"></div>
        </div>
        <script>
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
        </script>

    </div>
@endsection
