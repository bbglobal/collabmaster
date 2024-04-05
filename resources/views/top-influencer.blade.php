@extends('layouts.main')

@push('footer-style')
    <link rel="stylesheet" href="{{ url('assets/css/search.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/moreFilters.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/modal.css') }}">
@endpush

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
                                    <h2 class="hero-title-text">Top 17,846 Influencers</h2>
                                    <div class="text-gray-1 hero-subtitle">
                                        <p class="lead">Work with the top 17,846 influencers on the world's largest influencer marketplace</p>
                                    </div>
                                </div>

                                <form class="search-form-holder" method="get" action="{{ route('search.Influencer') }}">
                                    <div class="search-holder">
                                        <div class="filter-section platform-filter-section">
                                            <div class="filter-title">Platform</div>
                                            <div class="js-filter-placeholder filter-placeholder"
                                            >Choose a platform</div>
                                            <div class="filter-dropdown-holder platform-dropdown-holder">
                                                <div class="filter-dropdown-option" data-id="">Any</div>

                                                <div class="filter-dropdown-option" data-id="instagram">Instagram</div>

                                                <div class="filter-dropdown-option" data-id="tiktok">TikTok</div>

                                                <div class="filter-dropdown-option" data-id="user generated content">User
                                                    Generated Content</div>

                                                <div class="filter-dropdown-option" data-id="youtube">YouTube</div>

                                            </div>

                                            <select class="mobile-select-dropdown">
                                                <option value="">All</option>

                                                <option value="instagram">Instagram</option>

                                                <option value="tiktok">TikTok</option>

                                                <option value="user generated content">User Generated Content</option>

                                                <option value="youtube">YouTube</option>

                                            </select>

                                            <input type="hidden" name="p" value="">
                                        </div>

                                        <div class="filter-seperator"></div>

                                        <div class="filter-section category-filter-section">
                                            <div class="clear-input-btn"><img class="clear-input-img"
                                                    src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/closeModal.svg">
                                            </div>
                                            <div class="filter-title">Category</div>
                                            <div class="filter-placeholder"><input class="filter-search-input" name="c"
                                                    type="text" placeholder="Enter keywords, niches or categories"
                                                    value=""></div>
                                            <div class="filter-dropdown-holder category-dropdown-holder">
                                                <div class="filter-search-input-suggestion-area">
                                                    <div class="filter-search-input-suggestion-title">Suggested</div>
                                                    <div class="filter-search-input-suggestion-holder"></div>
                                                </div>
                                                <div>
                                                    <div class="filter-search-input-pop-title">Popular</div>
                                                    <div class="filter-search-input-pop-holder">

                                                        <div class="filter-search-input-pop-option" data-id="Lifestyle">
                                                            Lifestyle</div>

                                                        <div class="filter-search-input-pop-option" data-id="Fashion">Fashion
                                                        </div>

                                                        <div class="filter-search-input-pop-option" data-id="Beauty">Beauty
                                                        </div>

                                                        <div class="filter-search-input-pop-option" data-id="Travel">Travel
                                                        </div>

                                                        <div class="filter-search-input-pop-option"
                                                            data-id="Health &amp; Fitness">Health &amp; Fitness</div>

                                                        <div class="filter-search-input-pop-option" data-id="Food &amp; Drink">
                                                            Food &amp; Drink</div>

                                                        <div class="filter-search-input-pop-option"
                                                            data-id="Comedy &amp; Entertainment">Comedy &amp; Entertainment
                                                        </div>

                                                        <div class="filter-search-input-pop-option" data-id="Model">Model</div>

                                                        <div class="filter-search-input-pop-option"
                                                            data-id="Family &amp; Children">Family &amp; Children</div>

                                                        <div class="filter-search-input-pop-option"
                                                            data-id="Art &amp; Photography">Art &amp; Photography</div>

                                                        <div class="filter-search-input-pop-option" data-id="Music &amp; Dance">
                                                            Music &amp; Dance</div>

                                                        <div class="filter-search-input-pop-option"
                                                            data-id="Animals &amp; Pets">Animals &amp; Pets</div>

                                                        <div class="filter-search-input-pop-option"
                                                            data-id="Adventure &amp; Outdoors">Adventure &amp; Outdoors</div>

                                                        <div class="filter-search-input-pop-option" data-id="Education">
                                                            Education</div>

                                                        <div class="filter-search-input-pop-option"
                                                            data-id="Entrepreneur &amp; Business">Entrepreneur &amp; Business
                                                        </div>

                                                        <div class="filter-search-input-pop-option"
                                                            data-id="Athlete &amp; Sports">Athlete &amp; Sports</div>

                                                        <div class="filter-search-input-pop-option" data-id="LGBTQ2+">LGBTQ2+
                                                        </div>

                                                        <div class="filter-search-input-pop-option" data-id="Gaming">Gaming
                                                        </div>

                                                        <div class="filter-search-input-pop-option" data-id="Vegan">Vegan</div>

                                                        <div class="filter-search-input-pop-option" data-id="Technology">
                                                            Technology</div>

                                                        <div class="filter-search-input-pop-option" data-id="Actor">Actor
                                                        </div>

                                                        <div class="filter-search-input-pop-option" data-id="Healthcare">
                                                            Healthcare</div>

                                                        <div class="filter-search-input-pop-option" data-id="Skilled Trades">
                                                            Skilled Trades</div>

                                                        <div class="filter-search-input-pop-option" data-id="Automotive">
                                                            Automotive</div>

                                                        <div class="filter-search-input-pop-option" data-id="Cannabis">
                                                            Cannabis
                                                        </div>

                                                        <div class="filter-search-input-pop-option"
                                                            data-id="Celebrity &amp; Public Figure">Celebrity &amp; Public
                                                            Figure</div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <button type="submit" class="search-btn">
                                            <img alt="Search" class="search-img"
                                                src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/search.svg">
                                        </button>
                                    </div>

                                    <div class="modal-filters">
                                        <div class="modal-content-holder-filters">
                                            <div class="modal-content-header">
                                                <div class="modal-content-header-title">Location</div>
                                                <div class="close-modal-filters"><img class="close-modal-img"
                                                        src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/closeModal.svg">
                                                </div>
                                            </div>

                                            <div class="modal-content-scroll">

                                                <div class="more-filter-holder more-location-holder">
                                                    <div class="more-filter-title filter-title">City</div>


                                                    <link rel="stylesheet" type="text/css"
                                                        href="/static/igmarketplace/components/locationInput.css?v=3.66">

                                                    <div id="location-dropdown" class="">
                                                        <input id="location-input" name="l" class="input"
                                                            type="text"
                                                            placeholder='City - Enter first 3 letters and select from dropdown'
                                                            value="">
                                                        <input id="location-id" name="l_id" type="hidden"
                                                            value="">
                                                        <div id="location-dropdown-content"></div>
                                                    </div>

                                                </div>

                                                <div class="more-filter-holder more-price-holder">
                                                    <div class="range-container">
                                                        <div class="ranges-holder">
                                                            <div class="range-holder">
                                                                <div class="range-title">Min Price</div>
                                                                <div class="range-min-price range-num">$50</div>
                                                            </div>
                                                            <div class="range-holder" style="min-width: 117px">
                                                                <div class="range-title">Max Price</div>

                                                                <div class="range-max-price range-num">$3,000+</div>

                                                            </div>
                                                        </div>
                                                        <div class="sliders-holder">
                                                            <input id="fromSlider" type="range" value="50"
                                                                min="50" step="50" max="3000" />
                                                            <input id="toSlider" type="range" value="3000"
                                                                min="50" step="50" max="3000" />
                                                        </div>
                                                        <input name="pmi" type="hidden" id="fromInput"
                                                            value="50" />
                                                        <input name="pmx" type="hidden" id="toInput"
                                                            value="3000" />
                                                    </div>
                                                </div>

                                                <div class="more-filter-holder more-followers-holder">
                                                    <div class="range-container">
                                                        <div class="ranges-holder">
                                                            <div class="range-holder">
                                                                <div class="range-title">Min Followers</div>
                                                                <div class="range-min-followers range-num">0</div>
                                                            </div>
                                                            <div class="range-holder" style="min-width: 139px">
                                                                <div class="range-title">Max Followers</div>

                                                                <div class="range-max-followers range-num">1,000,000+</div>

                                                            </div>
                                                        </div>
                                                        <div class="sliders-holder">
                                                            <input id="followersFromSlider" type="range" value="0"
                                                                min="0" step="1000" max="6000" />
                                                            <input id="followersToSlider" type="range" value="6000"
                                                                min="0" step="1000" max="6000" />
                                                        </div>
                                                        <input name="fmi" type="hidden" id="followersFromInput"
                                                            value="0" />
                                                        <input name="fmx" type="hidden" id="followersToInput"
                                                            value="1000000" />
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="modal-content-footer">
                                                <button type="button" class='btn modal-btn apply-filter-btn'>Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div><!-- .nk-block -->


                            <div class="nk-block my-4">
                                <div class="nk-block mb-3">
                                    <article class="entry">
                                        <h3 class="title-h2-txt mb-0 pb-0">Featured Influencers</h3>
                                        <div class="d-flex justify-content-between">
                                            <p class="text-gray p-0 m-0">Search Featured Influencers</p>

                                        </div>
                                    </article>
                                </div><!-- .nk-block -->
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


                            <div class="nk-block my-4">
                                <div class="nk-block mb-3">
                                    <article class="entry">
                                        <h3 class="title-h2-txt mb-0 pb-0">Explore Influencers</h3>
                                        <div class="d-flex justify-content-between">
                                            <p class="text-gray p-0 m-0">Search Featured influencers</p>
                                            <span class="text-black"><b>see all</b></span>
                                        </div>
                                    </article>
                                </div><!-- .nk-block -->
                                <div class="row m-0 p-0">
                                    @foreach ($explore as $row)
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

                            <div class="nk-block my-4">
                                <div class="nk-block mb-5">
                                    <div class="paginator mb-5 mt-0" style="justify-content: left;">
                                        <a class="pagination-arrow-holder py-1" href="{{route('explore')}}">
                                            <div>See All</div>
                                            <img class="pagination-arrow"
                                                src="assets/websiteImages/creatorMarketplace/arrow.svg"
                                                style="margin-left: 8px" loading="lazy">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="nk-block mb-4">
                                <div class="nk-block mb-3">
                                    <article class="entry">
                                        <h3 class="title-h2-txt mb-0 pb-0">How Collabstr Works</h3>
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
                                                            <div class="text-white font-135 font-w-600 p-0 m-0">Purchase Securely</div>
                                                            <div class="step-txt mb-2">Safely purchase through Collabstr. We hold your payment until the work is completed.</div>
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
                                                            <div class="text-white font-135 font-w-600 p-0 m-0">Receive Quality Content</div>
                                                            <div class="step-txt mb-2">Receive your high-quality content from influencers directly through the platform.</div>
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
                                        <h3 class="title-h2-txt mb-0 pb-0">Trusted by 30,000+ Brands</h3>
                                        <div class="d-flex justify-content-between">
                                            <p class="text-gray p-0 m-0">View collaborations from brands like Wealthsimple,
                                                Hopper, Deezer, and more.</p>
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



                            <div class="py-5">
                                <div class="row my-5">
                                    <div class="col-12">
                                        <div class="logo-title mt-4">As seen in</div>
                                    </div>
                                </div>
                                <div class="row justify-around my-5">
                                    <div class="col-12 col-sm-6 col-md-2 col-lg-2 logo-holder">
                                        <img class="partner-img"
                                            src="assets/websiteImages/creatorMarketplace/logos/wealthsimple.svg"
                                            alt="Wealthsimple logo" loading="lazy">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-2 col-lg-2 logo-holder">
                                        <img class="partner-img"
                                            src="assets/websiteImages/creatorMarketplace/logos/clickup.svg" alt="ClickUp logo"
                                            loading="lazy">
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
                                    <h3 class="title-h2-txt mb-0 pb-0">What Brands Say About Us</h3>
                                </article>
                            </div><!-- .nk-block -->
                            <div class="row mb-4">
                                <div class="col-sm-12 col-md-4 col-lg-4 m-0 mb-4" style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0 px-3">
                                        <div class="card-inner p-0">
                                            <div class="project">
                                                <div class="position-relative mt-3" style="">
                                                    <div class="d-block pb-1 px-1" style="line-height: 1.2;">
                                                        <h4><b><em class="icon text-pink font-44 ni ni-quote-left"></em></b>
                                                            <div class="testimonial-title p-0 m-0 mt-2">5 stars from a creator
                                                                and a brand</div>
                                                            <div class="testimonial-txt mb-2">I've used Collabstr from both
                                                                the Creator side and the Brand side! It is extremely
                                                                user-friendly and has lead to some great relationships with
                                                                creators/brands I wouldn't have been connected to otherwise.
                                                                Love the platform!
                                                            </div>
                                                        </h4>
                                                    </div>
                                                    <div class="testimonial-author">Layla - Influencer & Founder</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4 m-0 mb-4" style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0 px-3">
                                        <div class="card-inner p-0">
                                            <div class="project">
                                                <div class="position-relative mt-3" style="">
                                                    <div class="d-block pb-1 px-1" style="line-height: 1.2;">
                                                        <h4><b><em class="icon text-pink font-44 ni ni-quote-left"></em></b>
                                                            <div class="testimonial-title p-0 m-0 mt-2">Best platform to
                                                                connect with influencers</div>
                                                            <div class="testimonial-txt mb-2">
                                                                Best platform to connect with influencers and content creators.
                                                                I’ve signed up to many platforms, collabstr is the easiest to
                                                                use and gives the best results for my brand.
                                                            </div>
                                                        </h4>
                                                    </div>
                                                    <div class="testimonial-author">Myriam - Founder of BBeyond</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4 m-0 mb-4" style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0 px-3">
                                        <div class="card-inner p-0">
                                            <div class="project">
                                                <div class="position-relative mt-3" style="">
                                                    <div class="d-block pb-1 px-1" style="line-height: 1.2;">
                                                        <h4><b><em class="icon text-pink font-44 ni ni-quote-left"></em></b>
                                                            <div class="testimonial-title p-0 m-0 mt-2">Great way to generate
                                                                content</div>
                                                            <div class="testimonial-txt mb-2">
                                                                Been using Collabstr to generate content for our seasonal
                                                                clothing lines. Super easy for us to search for relevant
                                                                influencers and pay them. We save at least 10-20 hours a month
                                                                on this.
                                                            </div>
                                                        </h4>
                                                    </div>
                                                    <div class="testimonial-author">Courtney - Marketer</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .nk-block -->



                        <div class="nk-block nk-block-lg">

                            <div class="card">
                                <div class="card-inner px-0">
                                    <div id="accordion-1" class="accordion accordion-s2">
                                        <div class="accordion-item border-b my-5 pb-4">
                                            <a href="#" class="accordion-head collapsed" data-toggle="collapse"
                                                data-target="#accordion-item-1-1">
                                                <h6 class="title">What are some of the benefits of receiving my bill
                                                    electronically?</h6>
                                                <span class="accordion-icon"></span>
                                            </a>
                                            <div class="accordion-body collapse" id="accordion-item-1-1"
                                                data-parent="#accordion-1">
                                                <div class="accordion-inner">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                                        mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                        commodo consequat.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .card-preview -->
                        </div>



                        <div class="nk-block nk-block-lg mb-5 pb-3">
                            <div class="card mb-5">
                                <div class="card-inner p-0 m-0">
                                    <div class="cta-holder">
                                        <div class="cta-overlay-holder">
                                            <div class="cta-txt-holder">
                                                <h2 class="cta-title text-white">The Best Free Influencer Search Tool</h2>
                                                <h3 class="cta-txt text-white">Search Instagram, TikTok, and YouTube
                                                    influencers.</h3>
                                                <div class="btn cta-btn font-100 py-3 px-4 mt-2">Search top Influencers</div>
                                            </div>
                                        </div>
                                        <img loading="lazy" alt="top influencers" class="cta-img"
                                            src="assets/images/cta.png">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex">
                            <a class="path-holder" href="index.htm">Collabstr</a>
                            <span>&nbsp;&nbsp;›&nbsp;&nbsp;</span>
                            <div>Find Influencers</div>

                        </div>

                        <div class="nk-block nk-block-lg mb-5">
                            <h2 class="section-title">Search Influencers by Platform</h2>
                            <div class="combos-holder">
                                <a href="{{route('influencer.search')}}" class="combo-holder">Hire Tiktok Influencer</a>
                                <a href="{{route('influencer.search')}}" class="combo-holder">Hire Instgram Influencer</a>
                                <a href="{{route('influencer.search')}}" class="combo-holder">Hire Youtube Influencer</a>
                                <a href="{{route('influencer.search')}}" class="combo-holder">Hire User Generated Content</a>
                            </div>


                        </div>

                        {{-- <div class="nk-block nk-block-lg mb-5 pb-5">
                            <h2 class="section-title">Find Influencers by Category</h2>
                            <div class="combos-holder">
                                <a href="/top-influencers/in/kent-ken-united-kingdom" class="combo-holder">Top Influencers
                                    in Kent, KEN, United Kingdom</a>
                                <a href="/top-influencers/in/fort-myers-fl-united-states" class="combo-holder">Top
                                    Influencers in Fort Myers, FL, United States</a>
                                <a href="/top-influencers/in/turin-italy" class="combo-holder">Top Influencers in Turin,
                                    Italy</a>
                                <a href="/top-influencers/in/san-jose-ca-united-states" class="combo-holder">Top Influencers
                                    in San Jose, CA, United States</a>
                                <a href="/top-influencers/in/tampa-fl-united-states" class="combo-holder">Top Influencers in
                                    Tampa, FL, United States</a>
                                <a href="/top-influencers/in/antwerp-belgium" class="combo-holder">Top Influencers in
                                    Antwerp, Belgium</a>
                                <a href="/top-influencers/in/riverside-ca-united-states" class="combo-holder">Top
                                    Influencers in Riverside, CA, United States</a>
                                <a href="/top-influencers/in/edinburgh-edh-united-kingdom" class="combo-holder">Top
                                    Influencers in Edinburgh, EDH, United Kingdom</a>
                                <a href="/top-influencers/in/oceanside-ca-united-states" class="combo-holder">Top
                                    Influencers in Oceanside, CA, United States</a>
                                <a href="/top-influencers/in/gothenburg-sweden" class="combo-holder">Top Influencers in
                                    Gothenburg, Sweden</a>
                                <a href="/top-influencers/in/dublin-ireland" class="combo-holder">Top Influencers in Dublin,
                                    Ireland</a>
                                <a href="/top-influencers/in/hamburg-hh-germany" class="combo-holder">Top Influencers in
                                    Hamburg, HH, Germany</a>
                                <a href="/top-influencers/in/adelaide-sa-australia" class="combo-holder">Top Influencers in
                                    Adelaide, SA, Australia</a>
                                <a href="/top-influencers/in/mobile-al-united-states" class="combo-holder">Top Influencers
                                    in Mobile, AL, United States</a>
                                <a href="/top-influencers/in/west-palm-beach-fl-united-states" class="combo-holder">Top
                                    Influencers in West Palm Beach, FL, United States</a>
                                <a href="/top-influencers/in/kansas-city-mo-united-states" class="combo-holder">Top
                                    Influencers in Kansas City, MO, United States</a>
                            </div>
                        </div> --}}


                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- content @e -->


        <!-- Modal Form -->
        <div class="modal fade" tabindex="-1" id="location_filter_form_modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title pos-rel" style="left: 40%;">Location</h5>
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                            <em class="icon ni ni-cross"></em>
                        </a>
                    </div>
                    <div class="modal-body">
                        <form action="#" class="form-validate is-alter">
                            <div class="form-group">
                                <label class="form-label" for="country_address">Country</label>
                                <div class="form-control-wrap ">
                                    <div class="form-control-select">
                                        <select class="form-control" id="country_address" name="country_address">
                                            <option value="default_option">Countries</option>
                                            <option value="option_select_name">Option select name</option>
                                            <option value="option_select_name">Option select name</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="location-search-box">City</label>
                                <div class="form-control-wrap">
                                    <input type="text" id="location-search-box" class="form-control">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <div class="form-group w-100">
                            <button type="button" class="btn btn-lg btn-secondary w-100 text-center d-block">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" tabindex="-1" id="price_filter_form_modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title pos-rel" style="left: 40%;">Price</h5>
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                            <em class="icon ni ni-cross"></em>
                        </a>
                    </div>
                    <div class="modal-body">
                        <form action="#" class="form-validate is-alter">
                            <div class="form-group d-flex">
                                <input type="range" class="range-input w-50" id="range-min" min="0"
                                    max="1500" value="0">
                                <input type="range" class="range-input w-50" id="range-max" min="1501"
                                    max="3000" value="3000">
                            </div>
                            <div class="d-flex w-100" style="gap: 20px;">
                                <div class="form-group w-50">
                                    <label class="form-label" for="min-value">Min Price</label>
                                    <div class="form-control-wrap">
                                        <input type="text" id="min-value" class="form-control" value="0">
                                    </div>
                                </div>
                                <div class="form-group w-50">
                                    <label class="form-label" for="max-value">Max Price</label>
                                    <div class="form-control-wrap">
                                        <input type="text" id="max-value" class="form-control" value="3000">
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <div class="form-group w-100">
                            <button type="button" class="btn btn-lg btn-secondary w-100 text-center d-block">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content @e -->
        <script src="{{ url('assets/js/modal.js') }}"></script>
    @endsection
