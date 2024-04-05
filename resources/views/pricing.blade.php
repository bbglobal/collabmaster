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
                                    <h2 class="hero-title">Put Your Influencer Marketing on Autopilot</h2>
                                    <div class="text-gray-1 hero-subtitle">
                                        <p class="lead">Save hours by having influencers come to you. Upgrade to post
                                            campaigns, have influencers apply and save on fees.</p>
                                    </div>
                                    <div>
                                        <div class="billing-periods-holder">
                                            <div class="billing-period-holder billing-period-active" data-period="m">Billed
                                                Monthly</div>
                                            <div class="yearly-period-holder">
                                                <div class="billing-period-holder" data-period="y">Billed Yearly</div>
                                                <div class="yearly-discount">6 months free</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- .nk-block -->

                            <div class="plans-holder">

                                <div class="plan-holder">
                                    <div class="plan-name">Basic</div>
                                    <div class="plan-price">Free Forever</div>
                                    <div class="plan-feature-holder">
                                        <div class="plan-feature">Search thousands of influencers</div>
                                        <div class="plan-feature">Manually purchase content from influencers</div>
                                        <div class="plan-feature">10% marketplace fee</div>
                                        <div class="plan-feature plan-feature-empty">&nbsp;</div>
                                        <div class="plan-feature plan-feature-empty">&nbsp;</div>
                                    </div>
                                    <div class="plan-btn" style="border: none; pointer-events: none">Current Plan</div>
                                </div>



                                <div class="plan-holder">
                                    <div class="plan-name">Pro</div>
                                    <div class="plan-price monthly-plan-price">$<span class="monthly-price">299</span><span
                                            class="annual-price">149</span>/mo</div>
                                    <div class="plan-feature-holder">
                                        <div class="plan-feature plan-feature-bold">Everything included in Basic</div>
                                        <div class="plan-feature">Post unlimited campaigns</div>
                                        <div class="plan-feature">30 influencers apply per month</div>
                                        <div class="plan-feature">Chat with influencers before accepting</div>
                                        <div class="plan-feature">10% marketplace fee</div>
                                    </div>
                                    <div class="plan-btn plan-btn-active" data-id="1">Upgrade</div>
                                    <div class="cancel-anytime">Cancel anytime</div>
                                </div>



                                <div class="plan-holder plan-preferred">
                                    <div class="plan-name">Premium</div>
                                    <div class="plan-price monthly-plan-price">$<span class="monthly-price">399</span><span
                                            class="annual-price">199</span>/mo</div>
                                    <div class="plan-feature-holder">
                                        <div class="plan-feature plan-feature-bold">Everything included in Pro</div>
                                        <div class="plan-feature">Unlimited advertised brands</div>
                                        <div class="plan-feature">60 influencers apply per month</div>
                                        <div class="plan-feature">5% marketplace fee</div>

                                        <div class="plan-feature plan-feature-empty">&nbsp;</div>

                                    </div>
                                    <div class="plan-btn plan-btn-active" data-id="2">Upgrade</div>
                                    <div class="cancel-anytime">Cancel anytime</div>
                                </div>



                                <div class="plan-holder">
                                    <div class="plan-name">Scale</div>
                                    <div class="plan-price monthly-plan-price">$<span class="monthly-price">999</span><span
                                            class="annual-price">499</span>/mo</div>
                                    <div class="plan-feature-holder">
                                        <div class="plan-feature plan-feature-bold">Everything included in Premium</div>
                                        <div class="plan-feature">100 influencers apply per month</div>
                                        <div class="plan-feature">0% marketplace fee</div>
                                        <div class="plan-feature plan-feature-empty">&nbsp;</div>

                                        <div class="plan-feature plan-feature-empty">&nbsp;</div>

                                    </div>
                                    <div class="plan-btn plan-btn-active" data-id="3">Upgrade</div>
                                    <div class="cancel-anytime">Cancel anytime</div>
                                </div>
                            </div>

                            <div class="d-flex flex-column align-items-center justify-content-center">
                                <div class="logo-title">Trusted by 40,000+ teams</div>
                                <div class="brand-logo-holder logos-holder ">
                                    <img class="logos-img"
                                        src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/logos/wealthsimple.svg"
                                        alt="Wealthsimple logo" loading="lazy">
                                    <img class="logos-img"
                                        src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/logos/clickup.svg"
                                        alt="ClickUp logo" loading="lazy">
                                    <img class="logos-img"
                                        src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/logos/hopper.svg"
                                        alt="Hopper logo" loading="lazy">
                                    <img class="logos-img"
                                        src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/logos/un.svg"
                                        alt="United Nations logo" loading="lazy">
                                    <img class="logos-img"
                                        src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/logos/deezer.svg"
                                        alt="Mcdonalds logo" loading="lazy">
                                </div>

                                <h2 class="row-title row-title-center row-title-plan" style="margin-top:5rem; ">Watch a Demo
                                </h2>
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
                                <div class="row p-0 m-0 my-5">
                                    <div class="col-12">
                                        <h2 class="text-center my-5">Included in Monthly Plans</h2>
                                    </div>
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
                        @endsection
