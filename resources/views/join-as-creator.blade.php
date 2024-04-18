@extends('layouts.main')

@section('main-section')
    <!-- content @s
        -->
        @error('name')
            <div id="msg-holder">
                <div id="msg-holder-row">
                    <img src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/err.svg" id="msg-img-err"
                        class="succ-err-msg-img">
                    <div id="msg">{{ $message }}</div>
                </div>
            </div>
        @enderror
        <div class="nk-content main-outer-container">
            <div class="container-fluid">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-content-wrap">
                            <div class="nk-block-head nk-block-head-lg">
                                <div class="nk-block-head-content text-center">
                                    <h1 class="hero-title">Make Money as a Creator</h1>

                                    <div class="text-gray-1 hero-subtitle">
                                        <p class="lead">Find influencers, run campaigns, and get unique content for your brand
                                            in seconds</p>
                                    </div>

                                    <form action="" method="post" id="form">
                                        @csrf
                                        <div class="hero-holder">
                                            <div class="username-holder">
                                                <div class="username-domain">collabmaster.com/</div>
                                                <div class="username-input-holder">
                                                    <input type="text" name="name" class="username-input"
                                                        placeholder="yourname" id="username">
                                                </div>
                                                <button type="submit" class="username-btn" id="primary">
                                                    Claim
                                                </button>
                                                <div class="username-btn d-none" id="loading">
                                                    <div class="spinner-border text-light" role="status">
                                                        <span class="visually-hidden invisible">Loading...</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div><!-- .nk-block -->



                            <div class="nk-block">
                                <div class="hero-img-holder">
                                    <video class="hero-vid" playsinline="" autoplay="" muted="" loop="">
                                        <source src="assets/websiteImages/creatorMarketplace/hero.mp4">
                                    </video>
                                    <div class="platform-img instagram-img">
                                        <img src="assets/websiteImages/creatorMarketplace/instagram.svg" alt="Instagram Logo">
                                    </div>

                                    <div class="platform-img tiktok-img">
                                        <img src="assets/websiteImages/creatorMarketplace/tiktok.svg" alt="TikTok Logo">
                                    </div>

                                    <div class="platform-img youtube-img">
                                        <img src="assets/websiteImages/creatorMarketplace/youtube.svg" alt="YouTube Logo">
                                    </div>

                                    <div class="platform-img twitter-img">
                                        <img src="assets/websiteImages/creatorMarketplace/twitter.svg" alt="Twitter Logo">
                                    </div>

                                    <div class="platform-img twitch-img">
                                        <img src="assets/websiteImages/creatorMarketplace/twitch.svg" alt="Twitch Logo">
                                    </div>

                                    <div class="platform-img amazon-img">
                                        <img src="assets/websiteImages/creatorMarketplace/amazon.svg" alt="Amazon Logo">
                                    </div>
                                </div>

                            </div>

                            <div class="nk-block-head nk-block-head-lg">
                                <div class="nk-block-head-content text-center">
                                    <h3 class="row-title title-gradient">Loved by 100,000+ Creators</h3>
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


                            <div class="nk-block mb-4">
                                <div class="listing-row">
                                    @foreach ($creators as $row)
                                        <div class="profile-listing-holder custom-col-4 m-0"
                                            style="padding: 0 0.5rem !important;">
                                            <div class="card h-100 p-0">
                                                <div class="card-inner p-0">
                                                    <a href="{{ route('influencer.details', ['id' => $row->id]) }}">
                                                        <div class="project">
                                                            <div class="profile-listing-img-holder position-relative">
                                                                <div class="profile-listing-badge-holder"
                                                                    title="Top creators have completed multiple orders and have a high rating from brands.">

                                                                </div>
                                                                <img class="profile-listing-img"
                                                                    src="{{ url('assets/images/' . $row->img_1) }}"
                                                                    alt="">
                                                                <div class="d-block position-absolute pb-1"
                                                                    style="bottom: 0; left: 10px;line-height: 1.2;">
                                                                    <div class="text-white font-80 font-w-600 p-0 m-0">
                                                                        {{ $row->full_name }}</div>
                                                                    <div class="text-white font-75 font-w-300 p-0 m-0">
                                                                        {{ $row->location }}</div>
                                                                </div>
                                                            </div>
                                                            <div class="project-details">
                                                                <div class="d-flex justify-content-between">
                                                                    <span
                                                                        class="font-90 text-gray-light">{{ $row->platform }}</span>
                                                                    <span
                                                                        class="text-black"><b>₹{{ $row->package_price_ }}</b></span>
                                                                </div>
                                                                <div class="text-reduce font-90 font-w-300 text-gray-1">
                                                                    {{ $row->categories }}</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div><!-- .nk-block -->

                            <div class="mt-5">
                                <div class="row justify-around my-5">
                                    <div class="col-12 col-sm-6 col-md-2 col-lg-2 logo-holder">
                                        <img class="partner-img"
                                            src="assets/websiteImages/creatorMarketplace/logos/wealthsimple.svg"
                                            alt="Wealthsimple logo" loading="lazy">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-2 col-lg-2 logo-holder">
                                        <img class="partner-img" src="assets/websiteImages/creatorMarketplace/logos/clickup.svg"
                                            alt="ClickUp logo" loading="lazy">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-2 col-lg-2 logo-holder">
                                        <img class="partner-img"
                                            src="assets/websiteImages/creatorMarketplace/logos/hopper.svg" alt="Hopper logo"
                                            loading="lazy">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-2 col-lg-2 logo-holder">
                                        <img class="partner-img" src="assets/websiteImages/creatorMarketplace/logos/un.svg"
                                            alt="United Nations logo" loading="lazy">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-2 col-lg-2 logo-holder">
                                        <img class="partner-img"
                                            src="assets/websiteImages/creatorMarketplace/logos/deezer.svg"
                                            alt="Mcdonalds logo" loading="lazy">
                                    </div>
                                </div>




                            </div>
                        </div>

                        <div class="nk-block mb-4">
                            <div class="nk-block mb-3">
                                <article class="entry">
                                    <h3 class="mb-0 pb-0">How Collabstr Works</h3>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-gray p-0 m-0">Everything you need to run your influencer campaigns,
                                            and more.</p>

                                    </div>
                                </article>
                            </div><!-- .nk-block -->
                            <div class="row mb-4">
                                <div class="profile-listing-holder col-sm-12 col-md-6 col-lg-4 m-0 mb-4"
                                    style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0 px-3">
                                        <div class="card-inner p-0">
                                            <div class="project">
                                                <div class="profile-listing-img-holder position-relative"
                                                    style="height: 220px;">
                                                    <img class="profile-listing-img img-gradient"
                                                        src="assets/websiteImages/creatorMarketplace/step1.png"
                                                        alt="">
                                                    <div class="d-block position-absolute pb-1 px-1"
                                                        style="bottom: 0; left: 10px;line-height: 1.2;">
                                                        <h5 class="text-white">1</h5>
                                                        <div class="text-white font-135 font-w-600 p-0 m-0">Search
                                                            Influencers</div>
                                                        <div class="step-txt mb-2">Search through thousands of vetted
                                                            Instagram, TikTok, and YouTube
                                                            influencers.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-listing-holder col-sm-12 col-md-6 col-lg-4 m-0 mb-4"
                                    style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0 px-3">
                                        <div class="card-inner p-0">
                                            <div class="project">
                                                <div class="profile-listing-img-holder position-relative"
                                                    style="height: 220px;">
                                                    <img class="profile-listing-img img-gradient"
                                                        src="assets/websiteImages/creatorMarketplace/step3.png"
                                                        alt="">
                                                    <div class="d-block position-absolute pb-1 px-1"
                                                        style="bottom: 0; left: 10px;line-height: 1.2;">
                                                        <h5 class="text-white">2</h5>
                                                        <div class="text-white font-135 font-w-600 p-0 m-0">Purchase Securely
                                                        </div>
                                                        <div class="step-txt mb-2">Safely purchase through Collabstr. We hold
                                                            your payment until the work is completed.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-listing-holder col-sm-12 col-md-6 col-lg-4 m-0 mb-4"
                                    style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0 px-3">
                                        <div class="card-inner p-0">
                                            <div class="project">
                                                <div class="profile-listing-img-holder position-relative"
                                                    style="height: 220px;">
                                                    <img class="profile-listing-img img-gradient"
                                                        src="assets/websiteImages/creatorMarketplace/step2.png"
                                                        alt="">
                                                    <div class="d-block position-absolute pb-1 px-1"
                                                        style="bottom: 0; left: 10px;line-height: 1.2;">
                                                        <h5 class="text-white">3</h5>
                                                        <div class="text-white font-135 font-w-600 p-0 m-0">Receive Quality
                                                            Content</div>
                                                        <div class="step-txt mb-2">Receive your high-quality content from
                                                            influencers directly through the platform.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .nk-block -->

                        <div class="nk-block mb-4">

                            <div class="row mb-4">

                                <div class="profile-listing-holder col-sm-12 col-md-6 col-lg-3 m-0 mb-4"
                                    style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0 px-3">
                                        <div class="card-inner p-0">
                                            <div class="project">
                                                <div class="position-relative" style="height: 185px; overflow: hidden;">
                                                    <div class="d-block pb-1 px-1"
                                                        style="bottom: 0; left: 10px;line-height: 1.2;">
                                                        <h4 style="font-size: 1.5rem;"><b><em
                                                                    class="icon ni ni-sign-dollar"></em></b>
                                                            <div class="feature-title p-0 m-0">No Upfront Cost</div>
                                                            <div class="feature-txt mb-2">Search influencers for free. No
                                                                subscriptions, contracts or hidden fees.</div>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-listing-holder col-sm-12 col-md-6 col-lg-3 m-0 mb-4"
                                    style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0 px-3">
                                        <div class="card-inner p-0">
                                            <div class="project">
                                                <div class="position-relative" style="height: 220px;">
                                                    <div class="d-block pb-1 px-1"
                                                        style="bottom: 0; left: 10px;line-height: 1.2;">
                                                        <h4 style="font-size: 1.5rem;"><b><em
                                                                    class="icon ni ni-list-check"></em></b>
                                                            <div class="feature-title p-0 m-0">Vetted Influencers</div>
                                                            <div class="feature-txt mb-2">Search influencers for free. No
                                                                subscriptions, contracts or hidden fees.</div>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-listing-holder col-sm-12 col-md-6 col-lg-3 m-0 mb-4"
                                    style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0 px-3">
                                        <div class="card-inner p-0">
                                            <div class="project">
                                                <div class="position-relative" style="height: 220px;">
                                                    <div class="d-block pb-1 px-1"
                                                        style="bottom: 0; left: 10px;line-height: 1.2;">
                                                        <h4 style="font-size: 1.5rem;"><b><em
                                                                    class="icon ni ni-msg-circle-fill"></em></b>
                                                            <div class="feature-title p-0 m-0">Instant Chat</div>
                                                            <div class="feature-txt mb-2">Search influencers for free. No
                                                                subscriptions, contracts or hidden fees.</div>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-listing-holder col-sm-12 col-md-6 col-lg-3 m-0 mb-4"
                                    style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0 px-3">
                                        <div class="card-inner p-0">
                                            <div class="project">
                                                <div class="position-relative" style="height: 220px;">
                                                    <div class="d-block pb-1 px-1"
                                                        style="bottom: 0; left: 10px;line-height: 1.2;">
                                                        <h4 style="font-size: 1.5rem;"><b><em
                                                                    class="icon ni ni-lock-alt-fill"></em></b>
                                                            <div class="feature-title p-0 m-0">Secure Purchases</div>
                                                            <div class="feature-txt mb-2">Search influencers for free. No
                                                                subscriptions, contracts or hidden fees.</div>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- .nk-block -->

                        <div class="nk-block mb-4">
                            <div class="nk-block mb-3">
                                <article class="entry">
                                    <h3 class="mb-0 pb-0">Work with 30,000+ Brands</h3>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-gray p-0 m-0">Collaborate with brands like Wealthsimple, Hopper, Deezer,
                                            and many more.</p>

                                    </div>
                                </article>
                            </div><!-- .nk-block -->
                            <div class="listing-row mb-5">
                                <div class="profile-listing-holder tiktok-vid-holder custom-col-5 m-0"
                                    style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0">
                                        <div class="card-inner p-0">
                                            <div class="project">
                                                <div class="profile-listing-img-holder position-relative">
                                                    <video class="profile-listing-video content-vid " playsinline=""
                                                        preload="metadata">
                                                        <source src="assets/websiteImages/content/1.mp4#t=0.1">
                                                    </video>
                                                    <div class="d-block position-absolute pb-1"
                                                        style="bottom: 0; left: 10px;line-height: 1.2;">
                                                        <div class="text-white font-200 font-w-600 p-0 m-0 play-btn">
                                                            <b><em class="icon ni ni-forward-alt-fill"></em></b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-listing-holder tiktok-vid-holder custom-col-5 m-0"
                                    style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0">
                                        <div class="card-inner p-0">
                                            <div class="project">
                                                <div class="profile-listing-img-holder position-relative">
                                                    <video class="profile-listing-video content-vid " playsinline=""
                                                        preload="metadata">
                                                        <source src="assets/websiteImages/content/5.mp4#t=0.1">
                                                    </video>
                                                    <div class="d-block position-absolute pb-1"
                                                        style="bottom: 0; left: 10px;line-height: 1.2;">
                                                        <div class="text-white font-200 font-w-600 p-0 m-0 play-btn">
                                                            <b><em class="icon ni ni-forward-alt-fill"></em></b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-listing-holder tiktok-vid-holder custom-col-5 m-0"
                                    style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0">
                                        <div class="card-inner p-0">
                                            <div class="project">
                                                <div class="profile-listing-img-holder position-relative">
                                                    <video class="profile-listing-video content-vid " playsinline=""
                                                        preload="metadata">
                                                        <source src="assets/websiteImages/content/3.mp4#t=0.1">
                                                    </video>
                                                    <div class="d-block position-absolute pb-1"
                                                        style="bottom: 0; left: 10px;line-height: 1.2;">
                                                        <div class="text-white font-200 font-w-600 p-0 m-0 play-btn">
                                                            <b><em class="icon ni ni-forward-alt-fill"></em></b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-listing-holder tiktok-vid-holder custom-col-5 m-0"
                                    style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0">
                                        <div class="card-inner p-0">
                                            <div class="project">
                                                <div class="profile-listing-img-holder position-relative">
                                                    <video class="profile-listing-video content-vid " playsinline=""
                                                        preload="metadata">
                                                        <source src="assets/websiteImages/content/1.mp4#t=0.1">
                                                    </video>
                                                    <div class="d-block position-absolute pb-1"
                                                        style="bottom: 0; left: 10px;line-height: 1.2;">
                                                        <div class="text-white font-200 font-w-600 p-0 m-0 play-btn">
                                                            <b><em class="icon ni ni-forward-alt-fill"></em></b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-listing-holder tiktok-vid-holder custom-col-5 m-0"
                                    style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0">
                                        <div class="card-inner p-0">
                                            <div class="project">
                                                <div class="profile-listing-img-holder position-relative">
                                                    <video class="profile-listing-video content-vid " playsinline=""
                                                        preload="metadata">
                                                        <source src="assets/websiteImages/content/5.mp4#t=0.1">
                                                    </video>
                                                    <div class="d-block position-absolute pb-1"
                                                        style="bottom: 0; left: 10px;line-height: 1.2;">
                                                        <div class="text-white font-200 font-w-600 p-0 m-0 play-btn">
                                                            <b><em class="icon ni ni-forward-alt-fill"></em></b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-listing-holder tiktok-vid-holder custom-col-5 m-0"
                                    style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0">
                                        <div class="card-inner p-0">
                                            <div class="project">
                                                <div class="profile-listing-img-holder position-relative">
                                                    <video class="profile-listing-video content-vid " playsinline=""
                                                        preload="metadata">
                                                        <source src="assets/websiteImages/content/1.mp4#t=0.1">
                                                    </video>
                                                    <div class="d-block position-absolute pb-1"
                                                        style="bottom: 0; left: 10px;line-height: 1.2;">
                                                        <div class="text-white font-200 font-w-600 p-0 m-0 play-btn">
                                                            <b><em class="icon ni ni-forward-alt-fill"></em></b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-listing-holder tiktok-vid-holder custom-col-5 m-0"
                                    style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0">
                                        <div class="card-inner p-0">
                                            <div class="project">
                                                <div class="profile-listing-img-holder position-relative">
                                                    <video class="profile-listing-video content-vid " playsinline=""
                                                        preload="metadata">
                                                        <source src="assets/websiteImages/content/5.mp4#t=0.1">
                                                    </video>
                                                    <div class="d-block position-absolute pb-1"
                                                        style="bottom: 0; left: 10px;line-height: 1.2;">
                                                        <div class="text-white font-200 font-w-600 p-0 m-0 play-btn">
                                                            <b><em class="icon ni ni-forward-alt-fill"></em></b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-listing-holder tiktok-vid-holder custom-col-5 m-0"
                                    style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0">
                                        <div class="card-inner p-0">
                                            <div class="project">
                                                <div class="profile-listing-img-holder position-relative">
                                                    <video class="profile-listing-video content-vid " playsinline=""
                                                        preload="metadata">
                                                        <source src="assets/websiteImages/content/3.mp4#t=0.1">
                                                    </video>
                                                    <div class="d-block position-absolute pb-1"
                                                        style="bottom: 0; left: 10px;line-height: 1.2;">
                                                        <div class="text-white font-200 font-w-600 p-0 m-0 play-btn">
                                                            <b><em class="icon ni ni-forward-alt-fill"></em></b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-listing-holder tiktok-vid-holder custom-col-5 m-0"
                                    style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0">
                                        <div class="card-inner p-0">
                                            <div class="project">
                                                <div class="profile-listing-img-holder position-relative">
                                                    <video class="profile-listing-video content-vid " playsinline=""
                                                        preload="metadata">
                                                        <source src="assets/websiteImages/content/1.mp4#t=0.1">
                                                    </video>
                                                    <div class="d-block position-absolute pb-1"
                                                        style="bottom: 0; left: 10px;line-height: 1.2;">
                                                        <div class="text-white font-200 font-w-600 p-0 m-0 play-btn">
                                                            <b><em class="icon ni ni-forward-alt-fill"></em></b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-listing-holder tiktok-vid-holder custom-col-5 m-0"
                                    style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0">
                                        <div class="card-inner p-0">
                                            <div class="project">
                                                <div class="profile-listing-img-holder position-relative">
                                                    <video class="profile-listing-video content-vid " playsinline=""
                                                        preload="metadata">
                                                        <source src="assets/websiteImages/content/5.mp4#t=0.1">
                                                    </video>
                                                    <div class="d-block position-absolute pb-1"
                                                        style="bottom: 0; left: 10px;line-height: 1.2;">
                                                        <div class="text-white font-200 font-w-600 p-0 m-0 play-btn">
                                                            <b><em class="icon ni ni-forward-alt-fill"></em></b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-listing-holder tiktok-vid-holder custom-col-5 m-0"
                                    style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0">
                                        <div class="card-inner p-0">
                                            <div class="project">
                                                <div class="profile-listing-img-holder position-relative">
                                                    <video class="profile-listing-video content-vid " playsinline=""
                                                        preload="metadata">
                                                        <source src="assets/websiteImages/content/1.mp4#t=0.1">
                                                    </video>
                                                    <div class="d-block position-absolute pb-1"
                                                        style="bottom: 0; left: 10px;line-height: 1.2;">
                                                        <div class="text-white font-200 font-w-600 p-0 m-0 play-btn">
                                                            <b><em class="icon ni ni-forward-alt-fill"></em></b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-listing-holder tiktok-vid-holder custom-col-5 m-0"
                                    style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0">
                                        <div class="card-inner p-0">
                                            <div class="project">
                                                <div class="profile-listing-img-holder position-relative">
                                                    <video class="profile-listing-video content-vid " playsinline=""
                                                        preload="metadata">
                                                        <source src="assets/websiteImages/content/5.mp4#t=0.1">
                                                    </video>
                                                    <div class="d-block position-absolute pb-1"
                                                        style="bottom: 0; left: 10px;line-height: 1.2;">
                                                        <div class="text-white font-200 font-w-600 p-0 m-0 play-btn">
                                                            <b><em class="icon ni ni-forward-alt-fill"></em></b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-listing-holder tiktok-vid-holder custom-col-5 m-0"
                                    style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0">
                                        <div class="card-inner p-0">
                                            <div class="project">
                                                <div class="profile-listing-img-holder position-relative">
                                                    <video class="profile-listing-video content-vid " playsinline=""
                                                        preload="metadata">
                                                        <source src="assets/websiteImages/content/3.mp4#t=0.1">
                                                    </video>
                                                    <div class="d-block position-absolute pb-1"
                                                        style="bottom: 0; left: 10px;line-height: 1.2;">
                                                        <div class="text-white font-200 font-w-600 p-0 m-0 play-btn">
                                                            <b><em class="icon ni ni-forward-alt-fill"></em></b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-listing-holder tiktok-vid-holder custom-col-5 m-0"
                                    style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0">
                                        <div class="card-inner p-0">
                                            <div class="project">
                                                <div class="profile-listing-img-holder position-relative">
                                                    <video class="profile-listing-video content-vid " playsinline=""
                                                        preload="metadata">
                                                        <source src="assets/websiteImages/content/1.mp4#t=0.1">
                                                    </video>
                                                    <div class="d-block position-absolute pb-1"
                                                        style="bottom: 0; left: 10px;line-height: 1.2;">
                                                        <div class="text-white font-200 font-w-600 p-0 m-0 play-btn">
                                                            <b><em class="icon ni ni-forward-alt-fill"></em></b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-listing-holder tiktok-vid-holder custom-col-5 m-0"
                                    style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0">
                                        <div class="card-inner p-0">
                                            <div class="project">
                                                <div class="profile-listing-img-holder position-relative">
                                                    <video class="profile-listing-video content-vid " playsinline=""
                                                        preload="metadata">
                                                        <source src="assets/websiteImages/content/5.mp4#t=0.1">
                                                    </video>
                                                    <div class="d-block position-absolute pb-1"
                                                        style="bottom: 0; left: 10px;line-height: 1.2;">
                                                        <div class="text-white font-200 font-w-600 p-0 m-0 play-btn">
                                                            <b><em class="icon ni ni-forward-alt-fill"></em></b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-listing-holder tiktok-vid-holder custom-col-5 m-0"
                                    style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0">
                                        <div class="card-inner p-0">
                                            <div class="project">
                                                <div class="profile-listing-img-holder position-relative">
                                                    <video class="profile-listing-video content-vid " playsinline=""
                                                        preload="metadata">
                                                        <source src="assets/websiteImages/content/1.mp4#t=0.1">
                                                    </video>
                                                    <div class="d-block position-absolute pb-1"
                                                        style="bottom: 0; left: 10px;line-height: 1.2;">
                                                        <div class="text-white font-200 font-w-600 p-0 m-0 play-btn">
                                                            <b><em class="icon ni ni-forward-alt-fill"></em></b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-listing-holder tiktok-vid-holder custom-col-5 m-0"
                                    style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0">
                                        <div class="card-inner p-0">
                                            <div class="project">
                                                <div class="profile-listing-img-holder position-relative">
                                                    <video class="profile-listing-video content-vid " playsinline=""
                                                        preload="metadata">
                                                        <source src="assets/websiteImages/content/5.mp4#t=0.1">
                                                    </video>
                                                    <div class="d-block position-absolute pb-1"
                                                        style="bottom: 0; left: 10px;line-height: 1.2;">
                                                        <div class="text-white font-200 font-w-600 p-0 m-0 play-btn">
                                                            <b><em class="icon ni ni-forward-alt-fill"></em></b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-listing-holder tiktok-vid-holder custom-col-5 m-0"
                                    style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0">
                                        <div class="card-inner p-0">
                                            <div class="project">
                                                <div class="profile-listing-img-holder position-relative">
                                                    <video class="profile-listing-video content-vid " playsinline=""
                                                        preload="metadata">
                                                        <source src="assets/websiteImages/content/3.mp4#t=0.1">
                                                    </video>
                                                    <div class="d-block position-absolute pb-1"
                                                        style="bottom: 0; left: 10px;line-height: 1.2;">
                                                        <div class="text-white font-200 font-w-600 p-0 m-0 play-btn">
                                                            <b><em class="icon ni ni-forward-alt-fill"></em></b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-listing-holder tiktok-vid-holder custom-col-5 m-0"
                                    style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0">
                                        <div class="card-inner p-0">
                                            <div class="project">
                                                <div class="profile-listing-img-holder position-relative">
                                                    <video class="profile-listing-video content-vid " playsinline=""
                                                        preload="metadata">
                                                        <source src="assets/websiteImages/content/1.mp4#t=0.1">
                                                    </video>
                                                    <div class="d-block position-absolute pb-1"
                                                        style="bottom: 0; left: 10px;line-height: 1.2;">
                                                        <div class="text-white font-200 font-w-600 p-0 m-0 play-btn">
                                                            <b><em class="icon ni ni-forward-alt-fill"></em></b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-listing-holder tiktok-vid-holder custom-col-5 m-0"
                                    style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0">
                                        <div class="card-inner p-0">
                                            <div class="project">
                                                <div class="profile-listing-img-holder position-relative">
                                                    <video class="profile-listing-video content-vid " playsinline=""
                                                        preload="metadata">
                                                        <source src="assets/websiteImages/content/5.mp4#t=0.1">
                                                    </video>
                                                    <div class="d-block position-absolute pb-1"
                                                        style="bottom: 0; left: 10px;line-height: 1.2;">
                                                        <div class="text-white font-200 font-w-600 p-0 m-0 play-btn">
                                                            <b><em class="icon ni ni-forward-alt-fill"></em></b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-listing-holder tiktok-vid-holder custom-col-5 m-0"
                                    style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0">
                                        <div class="card-inner p-0">
                                            <div class="project">
                                                <div class="profile-listing-img-holder position-relative">
                                                    <video class="profile-listing-video content-vid " playsinline=""
                                                        preload="metadata">
                                                        <source src="assets/websiteImages/content/1.mp4#t=0.1">
                                                    </video>
                                                    <div class="d-block position-absolute pb-1"
                                                        style="bottom: 0; left: 10px;line-height: 1.2;">
                                                        <div class="text-white font-200 font-w-600 p-0 m-0 play-btn">
                                                            <b><em class="icon ni ni-forward-alt-fill"></em></b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-listing-holder tiktok-vid-holder custom-col-5 m-0"
                                    style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0">
                                        <div class="card-inner p-0">
                                            <div class="project">
                                                <div class="profile-listing-img-holder position-relative">
                                                    <video class="profile-listing-video content-vid " playsinline=""
                                                        preload="metadata">
                                                        <source src="assets/websiteImages/content/5.mp4#t=0.1">
                                                    </video>
                                                    <div class="d-block position-absolute pb-1"
                                                        style="bottom: 0; left: 10px;line-height: 1.2;">
                                                        <div class="text-white font-200 font-w-600 p-0 m-0 play-btn">
                                                            <b><em class="icon ni ni-forward-alt-fill"></em></b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-listing-holder tiktok-vid-holder custom-col-5 m-0"
                                    style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0">
                                        <div class="card-inner p-0">
                                            <div class="project">
                                                <div class="profile-listing-img-holder position-relative">
                                                    <video class="profile-listing-video content-vid " playsinline=""
                                                        preload="metadata">
                                                        <source src="assets/websiteImages/content/3.mp4#t=0.1">
                                                    </video>
                                                    <div class="d-block position-absolute pb-1"
                                                        style="bottom: 0; left: 10px;line-height: 1.2;">
                                                        <div class="text-white font-200 font-w-600 p-0 m-0 play-btn">
                                                            <b><em class="icon ni ni-forward-alt-fill"></em></b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-listing-holder tiktok-vid-holder custom-col-5 m-0"
                                    style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0">
                                        <div class="card-inner p-0">
                                            <div class="project">
                                                <div class="profile-listing-img-holder position-relative">
                                                    <video class="profile-listing-video content-vid " playsinline=""
                                                        preload="metadata">
                                                        <source src="assets/websiteImages/content/1.mp4#t=0.1">
                                                    </video>
                                                    <div class="d-block position-absolute pb-1"
                                                        style="bottom: 0; left: 10px;line-height: 1.2;">
                                                        <div class="text-white font-200 font-w-600 p-0 m-0 play-btn">
                                                            <b><em class="icon ni ni-forward-alt-fill"></em></b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-listing-holder tiktok-vid-holder custom-col-5 m-0"
                                    style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0">
                                        <div class="card-inner p-0">
                                            <div class="project">
                                                <div class="profile-listing-img-holder position-relative">
                                                    <video class="profile-listing-video content-vid " playsinline=""
                                                        preload="metadata">
                                                        <source src="assets/websiteImages/content/5.mp4#t=0.1">
                                                    </video>
                                                    <div class="d-block position-absolute pb-1"
                                                        style="bottom: 0; left: 10px;line-height: 1.2;">
                                                        <div class="text-white font-200 font-w-600 p-0 m-0 play-btn">
                                                            <b><em class="icon ni ni-forward-alt-fill"></em></b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .nk-block -->

                        <div class="mt-5">

                            <div class="row justify-around my-5">
                                <div class="col-12 col-sm-6 col-md-2 col-lg-2 logo-holder">
                                    <img class="partner-img"
                                        src="assets/websiteImages/creatorMarketplace/logos/wealthsimple.svg"
                                        alt="Wealthsimple logo" loading="lazy">
                                </div>
                                <div class="col-12 col-sm-6 col-md-2 col-lg-2 logo-holder">
                                    <img class="partner-img" src="assets/websiteImages/creatorMarketplace/logos/clickup.svg"
                                        alt="ClickUp logo" loading="lazy">
                                </div>
                                <div class="col-12 col-sm-6 col-md-2 col-lg-2 logo-holder">
                                    <img class="partner-img" src="assets/websiteImages/creatorMarketplace/logos/hopper.svg"
                                        alt="Hopper logo" loading="lazy">
                                </div>
                                <div class="col-12 col-sm-6 col-md-2 col-lg-2 logo-holder">
                                    <img class="partner-img" src="assets/websiteImages/creatorMarketplace/logos/un.svg"
                                        alt="United Nations logo" loading="lazy">
                                </div>
                                <div class="col-12 col-sm-6 col-md-2 col-lg-2 logo-holder">
                                    <img class="partner-img" src="assets/websiteImages/creatorMarketplace/logos/deezer.svg"
                                        alt="Mcdonalds logo" loading="lazy">
                                </div>
                            </div>




                        </div>
                    </div>

                    <div class="nk-block nk-block-lg">
                        <div class="card">
                            <div class="card-inner px-0">
                                <div id="accordion-1" class="accordion accordion-s2">
                                    <div class="accordion-item border-b my-5 pb-4">
                                        <a href="#" class="accordion-head collapsed" data-toggle="collapse"
                                            data-target="#accordion-item-1-1">
                                            <h6 class="title">What is Influencer Marketing?</h6>
                                            <span class="accordion-icon"></span>
                                        </a>
                                        <div class="accordion-body collapse" id="accordion-item-1-1"
                                            data-parent="#accordion-1">
                                            <div class="accordion-inner">
                                                <p>Influencer marketing is a digital marketing strategy that involves
                                                    collaborating with individuals, known as influencers, who have a dedicated
                                                    and engaged following on social media platforms and other online channels.
                                                    These influencers can impact their followers' purchasing decisions due to
                                                    their credibility and authority in specific niches or industries. Brands
                                                    partner with influencers to promote their products or services
                                                    authentically, build social proof, and leverage their influence to reach a
                                                    larger and more targeted audience.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="accordion-2" class="accordion accordion-s2">
                                    <div class="accordion-item border-b my-5 pb-4">
                                        <a href="#" class="accordion-head collapsed" data-toggle="collapse"
                                            data-target="#accordion-item-1-2">
                                            <h6 class="title">How Does Influencer Marketing Work?</h6>
                                            <span class="accordion-icon"></span>
                                        </a>
                                        <div class="accordion-body collapse" id="accordion-item-1-2"
                                            data-parent="#accordion-2">
                                            <div class="accordion-inner">
                                                <p>Influencer marketing operates by identifying suitable influencers for your
                                                    brand, establishing a partnership, and creating and distributing content
                                                    through the influencer's channels. This content can take various forms,
                                                    including sponsored posts, reviews, tutorials, or endorsements. The
                                                    influencer shares this content with their audience, effectively introducing
                                                    your brand or product to a potentially receptive and <a
                                                        href="https://collabstr.com/tiktok-engagement-rate-calculator"
                                                        target="_blank">engaged audience</a>. The key to successful influencer
                                                    marketing lies in crafting authentic and relevant content that resonates
                                                    with both the influencer's followers and your brand's message.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="accordion-3" class="accordion accordion-s2">
                                    <div class="accordion-item border-b my-5 pb-4">
                                        <a href="#" class="accordion-head collapsed" data-toggle="collapse"
                                            data-target="#accordion-item-1-3">
                                            <h6 class="title">Why is Influencer Marketing Important?</h6>
                                            <span class="accordion-icon"></span>
                                        </a>
                                        <div class="accordion-body collapse" id="accordion-item-1-3"
                                            data-parent="#accordion-3">
                                            <div class="accordion-inner">
                                                <p>Influencer marketing is important because it enables brands to connect with
                                                    their target audience in a more genuine and engaging manner. Unlike
                                                    traditional advertising, influencer marketing feels less intrusive and more
                                                    trustworthy, as recommendations come from a trusted source. It helps build
                                                    brand awareness, improve credibility, drive traffic, boost sales, and foster
                                                    lasting customer relationships.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="accordion-4" class="accordion accordion-s2">
                                    <div class="accordion-item border-b my-5 pb-4">
                                        <a href="#" class="accordion-head collapsed" data-toggle="collapse"
                                            data-target="#accordion-item-1-4">
                                            <h6 class="title">How Can I Find the Right Influencers for My Brand?</h6>
                                            <span class="accordion-icon"></span>
                                        </a>
                                        <div class="accordion-body collapse" id="accordion-item-1-4"
                                            data-parent="#accordion-4">
                                            <div class="accordion-inner">
                                                <p>
                                                    Start by identifying your target audience and the platforms they use. Then,
                                                    use the Collabstr influencer marketing tool to <a
                                                        href="https://collabstr.com/search-influencers" target="_blank">search
                                                        for influencers</a> within your niche. Use the gender, price, location,
                                                    and other filters to narrow down relevant influencers as much as possible.
                                                    Once you find an influencer that you’re interested in working with, you can
                                                    simply purchase one of their pre-defined content packages, or send them a
                                                    custom offer directly through their profile.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="accordion-5" class="accordion accordion-s2">
                                    <div class="accordion-item border-b my-5 pb-4">
                                        <a href="#" class="accordion-head collapsed" data-toggle="collapse"
                                            data-target="#accordion-item-1-5">
                                            <h6 class="title">How Much Does Influencer Marketing Cost?</h6>
                                            <span class="accordion-icon"></span>
                                        </a>
                                        <div class="accordion-body collapse" id="accordion-item-1-5"
                                            data-parent="#accordion-5">
                                            <div class="accordion-inner">
                                                <p>
                                                    The cost of influencer marketing varies widely depending on factors such as
                                                    the influencer's reach, niche, and <a
                                                        href="https://collabstr.com/instagram-engagement-rate-calculator"
                                                        target="_blank">engagement rates</a>. Micro-influencers with smaller
                                                    followings may charge less than macro-influencers or celebrities. Some
                                                    influencers may work on a per-post basis, while others prefer ongoing
                                                    partnerships. If you have a budget in mind, consider using the price filters
                                                    found in Collabstr’s search tool to narrow down the influencers that fit
                                                    within your budget, this will save you time during the influencer discovery
                                                    process.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="accordion-6" class="accordion accordion-s2">
                                    <div class="accordion-item border-b my-5 pb-4">
                                        <a href="#" class="accordion-head collapsed" data-toggle="collapse"
                                            data-target="#accordion-item-1-6">
                                            <h6 class="title">What Are the Different Types of Influencer Marketing Campaigns?
                                            </h6>
                                            <span class="accordion-icon"></span>
                                        </a>
                                        <div class="accordion-body collapse" id="accordion-item-1-6"
                                            data-parent="#accordion-6">
                                            <div class="accordion-inner">
                                                <p>
                                                    Influencer marketing can accommodate various campaign types, including
                                                    product reviews, sponsored posts, takeovers, giveaways, and affiliate
                                                    marketing. The type of campaign you choose should align with your goals and
                                                    the influencer's strengths. You can use a <a
                                                        href="https://collabstr.com/influencer-campaign-brief-template"
                                                        target="_blank">campaign brief template</a> like the one offered by
                                                    Collabstr to ensure that you have a well-thought-out campaign brief that
                                                    encapsulates all the important details required to have a successful
                                                    influencer marketing campaign.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="accordion-7" class="accordion accordion-s2">
                                    <div class="accordion-item border-b my-5 pb-4">
                                        <a href="#" class="accordion-head collapsed" data-toggle="collapse"
                                            data-target="#accordion-item-1-7">
                                            <h6 class="title">How Do I Measure the Success of an Influencer Marketing
                                                Campaign?</h6>
                                            <span class="accordion-icon"></span>
                                        </a>
                                        <div class="accordion-body collapse" id="accordion-item-1-7"
                                            data-parent="#accordion-7">
                                            <div class="accordion-inner">
                                                <p>
                                                    To measure the success of an influencer marketing campaign, you can track
                                                    key performance indicators (KPIs) such as click-through rates, conversions,
                                                    and return on investment (ROI). Typically, this tracking would be done
                                                    through your own means, such as a discount code or unique link that is used
                                                    to track the influencer’s impact on your side. Keep in mind that a large
                                                    part of influencer marketing is social proof and social awareness, so many
                                                    viewers may see your product and navigate to your website through other
                                                    methods besides clicking the influencer’s link directly. Additionally, you
                                                    can gather feedback from the influencer and analyze audience sentiment to
                                                    gauge the campaign's impact on brand perception.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="accordion-8" class="accordion accordion-s2">
                                    <div class="accordion-item border-b my-5 pb-4">
                                        <a href="#" class="accordion-head collapsed" data-toggle="collapse"
                                            data-target="#accordion-item-1-8">
                                            <h6 class="title">What Are the Common Mistakes to Avoid in Influencer Marketing?
                                            </h6>
                                            <span class="accordion-icon"></span>
                                        </a>
                                        <div class="accordion-body collapse" id="accordion-item-1-8"
                                            data-parent="#accordion-8">
                                            <div class="accordion-inner">
                                                <p>
                                                    Common mistakes in influencer marketing include failing to define clear
                                                    campaign objectives and expectations and neglecting to communicate changes
                                                    in objectives, timelines, and other aspects that affect the outcome of the
                                                    campaign. Another major downfall to many influencer marketing campaigns is
                                                    the expectation that every campaign is going to hit your KPIs when in
                                                    reality, brands should focus on collecting feedback and data so that they
                                                    can constantly iterate on campaign objectives and angles until they hit
                                                    their desired KPIs.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card-preview -->
                    </div>

                    <div class="nk-block nk-block-lg mb-5 pb-5">
                        <div class="card mb-5">
                            <div class="card-inner p-0 m-0">
                                <div class="cta-holder">
                                    <div class="cta-overlay-holder">
                                        <div class="cta-txt-holder">
                                            <h2 class="cta-title text-white">Find and Hire Influencers</h2>
                                            <h3 class="cta-txt text-white">Search Instagram, TikTok, and YouTube
                                                influencers.</h3>
                                            <a href="{{ route('explore') }}">
                                                <div class="btn cta-btn font-100 py-3 px-4 mt-2">Search Influencers</div>
                                            </a>
                                        </div>
                                    </div>
                                    <img loading="lazy" alt="top influencers" class="cta-img" src="assets/images/cta.png">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
        </div>
        <!-- content @e -->


        <script>
            $(document).ready(function() {
                $('#form').submit(function(event) {
                    event.preventDefault();

                    $('#primary').addClass("d-none");
                    $("#loading").removeClass("d-none")
                    var username = $('#username').val();

                    $(this).attr('action', $(this).attr('action') + '/creator-signup/' + encodeURIComponent(
                        username));

                    this.submit();
                });
            });
        </script>
    @endsection
