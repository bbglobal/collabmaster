@extends('layouts.main')

@section('main-section')
    <!-- content @s
        -->
        <div class="nk-content main-outer-container">
            <div class="container-fluid">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-content-wrap">
                            <div class="nk-block-head nk-block-head-lg">
                                <div class="nk-block-head-content text-center">
                                    <h1 class="hero-title">The Easy Way to Generate</h1>
                                    <h2 class="change-txt title-gradient">Influencer Marketing Made Easy</h2>
                                    <div class="text-gray-1 hero-subtitle">
                                        <p class="lead">Find influencers, run campaigns, and get unique
                                            content for your brand
                                            in seconds</p>
                                    </div>
                                    <div>
                                        <a href="{{ route('brand.signup') }}">
                                            <button type="button" class="btn btn-dark btn-sign-up font-w-300 font-135">Start
                                                for free</button>
                                        </a>
                                    </div>
                                </div>

                            </div><!-- .nk-block -->


                            <div class="">
                                <div class="row mt-3 mb-4">
                                    <div class="col-12">
                                        <div class="logo-title">Trusted by 30,000+ teams</div>
                                    </div>
                                </div>
                                <div class="row justify-around mb-5">
                                    <div class="col-12 col-sm-6 col-md-2 col-lg-2 logo-holder">
                                        <img class="partner-img"
                                            src="assets/websiteImages/creatorMarketplace/logos/buzzfeed.svg" alt="Buzzfeed logo"
                                            loading="lazy">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-2 col-lg-2 logo-holder">
                                        <img class="partner-img"
                                            src="assets/websiteImages/creatorMarketplace/logos/bloomberg.svg"
                                            alt="Bloomberg logo" loading="lazy">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-2 col-lg-2 logo-holder">
                                        <img class="partner-img" src="assets/websiteImages/creatorMarketplace/logos/nyt.svg"
                                            alt="New York Times logo" style="width: 175px;" loading="lazy">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-2 col-lg-2 logo-holder">
                                        <img class="partner-img" src="assets/websiteImages/creatorMarketplace/logos/yahoo.svg"
                                            alt="Forbes logo" loading="lazy">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-2 col-lg-2 logo-holder">
                                        <img class="partner-img" src="assets/websiteImages/creatorMarketplace/logos/shopify.svg"
                                            alt="Shopify logo" loading="lazy">
                                    </div>
                                </div>
                            </div>


                            <div class="nk-block">
                                <div class="demo-vid-holder" style="margin-top: 3%">
                                    <video class="demo-vid" preload="metadata"
                                        poster="assets/websiteImages/videos/demo_vid_thumbnail.png" controls="">
                                        <source src="assets/websiteImages/videos/collabstr_demo_vid.mp4">
                                    </video>
                                </div>

                            </div>


                            <div class="nk-block mb-5">
                                <div class="row p-0 m-0 my-5 row-reverse">
                                    <div class="col-sm-12 col-md-6 col-lg-6 mb-4 pr-md-5">
                                        <div class="example-steps-holder">
                                            <h2 class="example-row-title">Find and Hire Influencers in Seconds
                                                on the
                                                Marketplace</h2>

                                            <div class="example-step">
                                                <h3 class="example-step-title">Search Influencers</h3>
                                                <div class="example-step-txt">Search thousands of vetted
                                                    Instagram, TikTok, and
                                                    YouTube influencers.</div>
                                            </div>
                                            <div class="example-step">
                                                <h3 class="example-step-title">Purchase Securely</h3>
                                                <div class="example-step-txt">Safely purchase through
                                                    Collabstr. We hold your
                                                    payment until the work is completed.</div>
                                            </div>
                                            <div class="example-step">
                                                <h3 class="example-step-title">Receive Quality Content</h3>
                                                <div class="example-step-txt">Receive your high-quality content
                                                    from influencers
                                                    directly through the platform.</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6 col-lg-6 mb-4">
                                        <picture>
                                            <source media="(max-width: 800px)"
                                                srcset="websiteImages/creatorMarketplace/brandPage/marketplaceSmall.png">
                                            <img src="assets/websiteImages/creatorMarketplace/brandPage/marketplace.png"
                                                class="example-img" alt="Influencer marketplace" loading="lazy">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-block mb-5">
                                <div class="row p-0 m-0 my-5">
                                    <div class="col-sm-12 col-md-6 col-lg-6 mb-5">
                                        <picture>
                                            <source media="(max-width: 800px)"
                                                srcset="websiteImages/creatorMarketplace/brandPage/campaignSmall.png">
                                            <img src="assets/websiteImages/creatorMarketplace/brandPage/campaign.png"
                                                class="example-img" alt="Influencer campaign brief" loading="lazy">
                                        </picture>
                                    </div>

                                    <div class="col-sm-12 col-md-6 col-lg-6 mb-5 px-md-5">
                                        <div class="example-steps-holder">
                                            <h2 class="example-row-title">Save Hours With Campaigns and Work
                                                With Influencers at Scale</h2>

                                            <div class="example-step">
                                                <h3 class="example-step-title">Search Influencers</h3>
                                                <div class="example-step-txt">Search thousands of vetted
                                                    Instagram, TikTok, and
                                                    YouTube influencers.</div>
                                            </div>
                                            <div class="example-step">
                                                <h3 class="example-step-title">Purchase Securely</h3>
                                                <div class="example-step-txt">Safely purchase through
                                                    Collabstr. We hold your
                                                    payment until the work is completed.</div>
                                            </div>
                                            <div class="example-step">
                                                <h3 class="example-step-title">Receive Quality Content</h3>
                                                <div class="example-step-txt">Receive your high-quality content
                                                    from influencers
                                                    directly through the platform.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-block mb-5">
                                <div class="row p-0 m-0 my-5 row-reverse">
                                    <div class="col-sm-12 col-md-6 col-lg-6 mb-4 pr-md-5">
                                        <div class="example-steps-holder">
                                            <h2 class="example-row-title">Find and Hire Influencers in Seconds
                                                on the
                                                Marketplace</h2>

                                            <div class="example-step">
                                                <h3 class="example-step-title">Search Influencers</h3>
                                                <div class="example-step-txt">Search thousands of vetted
                                                    Instagram, TikTok, and
                                                    YouTube influencers.</div>
                                            </div>
                                            <div class="example-step">
                                                <h3 class="example-step-title">Purchase Securely</h3>
                                                <div class="example-step-txt">Safely purchase through
                                                    Collabstr. We hold your
                                                    payment until the work is completed.</div>
                                            </div>
                                            <div class="example-step">
                                                <h3 class="example-step-title">Receive Quality Content</h3>
                                                <div class="example-step-txt">Receive your high-quality content
                                                    from influencers
                                                    directly through the platform.</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6 col-lg-6 mb-4">
                                        <picture>
                                            <source media="(max-width: 800px)"
                                                srcset="websiteImages/creatorMarketplace/brandPage/marketplaceSmall.png">
                                            <img src="assets/websiteImages/creatorMarketplace/brandPage/marketplace.png"
                                                class="example-img" alt="Influencer marketplace" loading="lazy">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-block mb-5">
                                <div class="row p-0 m-0 my-5">
                                    <div class="col-sm-12 col-md-6 col-lg-6 mb-5">
                                        <picture>
                                            <source media="(max-width: 800px)"
                                                srcset="websiteImages/creatorMarketplace/brandPage/campaignSmall.png">
                                            <img src="assets/websiteImages/creatorMarketplace/brandPage/campaign.png"
                                                class="example-img" alt="Influencer campaign brief" loading="lazy">
                                        </picture>
                                    </div>

                                    <div class="col-sm-12 col-md-6 col-lg-6 mb-5 px-md-5">
                                        <div class="example-steps-holder">
                                            <h2 class="example-row-title">Save Hours With Campaigns and Work
                                                With Influencers at Scale</h2>

                                            <div class="example-step">
                                                <h3 class="example-step-title">Search Influencers</h3>
                                                <div class="example-step-txt">Search thousands of vetted
                                                    Instagram, TikTok, and
                                                    YouTube influencers.</div>
                                            </div>
                                            <div class="example-step">
                                                <h3 class="example-step-title">Purchase Securely</h3>
                                                <div class="example-step-txt">Safely purchase through
                                                    Collabstr. We hold your
                                                    payment until the work is completed.</div>
                                            </div>
                                            <div class="example-step">
                                                <h3 class="example-step-title">Receive Quality Content</h3>
                                                <div class="example-step-txt">Receive your high-quality content
                                                    from influencers
                                                    directly through the platform.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="row my-5">
                                    <div class="col-12">
                                        <div class="logo-title mt-4">As seen in</div>
                                    </div>
                                </div>
                                <div class="row justify-around mb-5">
                                    <div class="col-12 col-sm-6 col-md-2 col-lg-2 logo-holder">
                                        <img class="partner-img"
                                            src="assets/websiteImages/creatorMarketplace/logos/buzzfeed.svg"
                                            alt="Buzzfeed logo" loading="lazy">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-2 col-lg-2 logo-holder">
                                        <img class="partner-img"
                                            src="assets/websiteImages/creatorMarketplace/logos/bloomberg.svg"
                                            alt="Bloomberg logo" loading="lazy">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-2 col-lg-2 logo-holder">
                                        <img class="partner-img" src="assets/websiteImages/creatorMarketplace/logos/nyt.svg"
                                            alt="New York Times logo" style="width: 175px;" loading="lazy">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-2 col-lg-2 logo-holder">
                                        <img class="partner-img" src="assets/websiteImages/creatorMarketplace/logos/yahoo.svg"
                                            alt="Forbes logo" loading="lazy">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-2 col-lg-2 logo-holder">
                                        <img class="partner-img"
                                            src="assets/websiteImages/creatorMarketplace/logos/shopify.svg" alt="Shopify logo"
                                            loading="lazy">
                                    </div>
                                </div>
                            </div>

                            <div class="nk-block-head nk-block-head-lg">
                                <div class="nk-block-head-content text-center">
                                    <h3 class="row-title title-gradient">Over 100,000 Creators for Your Brand
                                    </h3>
                                    <div class="d-flex justify-center my-4">
                                        <div class="filter-list-2 mt-3">
                                            <p> Lifestyle</p>
                                            <p> Fashion</p>
                                            <p> Beauty</p>
                                            <p> Travel</p>
                                            <p> Health & Fitness</p>
                                            <p> Comedy & Entertainment</p>
                                            <p> Food & Drink</p>
                                            <p> Food & Drink</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .nk-block -->

                            <script>
                                let arr = ['Product Photos', 'Sponsored Posts', 'Testimonials', 'Video Ads'];
                                let txtIdx = 0;
                                let change = $('.change-txt');

                                function changeTxt() {
                                    if (txtIdx === arr.length - 1) {
                                        txtIdx = 0;
                                    } else {
                                        txtIdx += 1;
                                    }
                                }

                                function typeBackwards() {
                                    let currTxt = change.text();
                                    if (!currTxt) {
                                        // start typing forwards in 0.4 seconds
                                        changeTxt();
                                        setTimeout(typeForwards, 400);
                                    } else {
                                        currTxt = arr[txtIdx].substring(0, currTxt.length - 1);
                                        change.text(currTxt);
                                        setTimeout(typeBackwards, 70);
                                    }
                                }

                                function typeForwards() {
                                    let currTxt = change.text();
                                    if (currTxt === arr[txtIdx]) {
                                        // start typing backwards in 1 seconds
                                        setTimeout(typeBackwards, 1000);
                                    } else {
                                        currTxt = arr[txtIdx].substring(0, currTxt.length + 1);
                                        change.text(currTxt);
                                        setTimeout(typeForwards, 70);
                                    }
                                }

                                typeForwards();

                                $('.faq-holder').click(function() {
                                    let answer = $(this).find('.faq-answer');
                                    let img = $(this).find('.faq-btn');
                                    if (answer.is(":visible")) {
                                        answer.slideUp();
                                        img.css('transform', 'rotateZ(0deg)');
                                    } else {
                                        answer.slideDown();
                                        img.css('transform', 'rotateZ(45deg)');
                                    }
                                });
                            </script>
                        @endsection
