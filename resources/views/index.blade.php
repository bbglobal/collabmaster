﻿@extends('layouts.main')

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
                                    <h2 class="hero-title-text title-gradient">Influencer Marketing Made Easy
                                    </h2>
                                    <div class="text-gray-1 hero-subtitle">
                                        <p class="lead">Find and hire top Instagram, TikTok, YouTube, and UGC
                                            influencers to
                                            create unique content for your brand</p>
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
                                        <h3 class="mb-0 pb-0">Featured</h3>
                                        <div class="d-flex justify-content-between">
                                            <p class="text-gray p-0 m-0 ">Hire top influencers across all
                                                platforms</p>
                                            <a href="{{route('explore')}}" class="text-black"><b>see all</b></a>
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


                            <div class="nk-block mb-4">
                                <div class="nk-block mb-3">
                                    <article class="entry">
                                        <h3 class="mb-0 pb-0">Instagram</h3>
                                        <div class="d-flex justify-content-between">
                                            <p class="text-gray p-0 m-0 ">Hire Instagram influencers</p>
                                            <a href="{{route('explore')}}" class="text-black"><b>see all</b></a>
                                        </div>
                                    </article>
                                </div><!-- .nk-block -->
                                <div class="listing-row">
                                    @foreach ($insta as $row)
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
                                    {{-- <div class="profile-listing-holder custom-col-4 m-0" style="padding: 0 0.5rem !important;">
                                        <div class="card h-100 p-0">
                                            <div class="card-inner p-0">
                                                <a href="#">
                                                    <div class="project">
                                                        <div class="profile-listing-img-holder position-relative">
                                                            <img class="profile-listing-img"
                                                                src="assets/sellers/10551/16276326246123445.webp"
                                                                alt="">

                                                            <div class="d-block position-absolute pb-1"
                                                                style="bottom: 0; left: 10px;line-height: 1.2;">
                                                                <div class="text-white font-80 font-w-600 p-0 m-0">
                                                                    influencers Name</div>
                                                                <div class="text-white font-75 font-w-300 p-0 m-0">
                                                                    Address, District, State</div>
                                                            </div>
                                                        </div>
                                                        <div class="project-details">
                                                            <div class="d-flex justify-content-between">
                                                                <span class="font-90 text-gray-light">Instagram</span>
                                                                <span class="text-black"><b>₹1100</b></span>
                                                            </div>
                                                            <div class="text-reduce font-90 font-w-300 text-gray-1">
                                                                Fashion &amp; Lifestyle Content Creator Fashion
                                                                &amp; Lifestyl</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div><!-- .nk-block -->


                            <div class="nk-block mb-4">
                                <div class="nk-block mb-3">
                                    <article class="entry">
                                        <h3 class="mb-0 pb-0">Tiktok</h3>
                                        <div class="d-flex justify-content-between">
                                            <p class="text-gray p-0 m-0 ">Hire Instagram influencers</p>
                                            <a href="{{route('explore')}}" class="text-black"><b>see all</b></a>
                                        </div>
                                    </article>
                                </div><!-- .nk-block -->
                                <div class="listing-row">
                                    @foreach ($tiktok as $row)
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


                            <div class="nk-block mb-4">
                                <div class="nk-block mb-3">
                                    <article class="entry">
                                        <h3 class="mb-0 pb-0">Categories</h3>

                                    </article>
                                </div><!-- .nk-block -->
                                <div class="listing-row mb-4">
                                    <a href="{{ url('influencers/search?c=Travel') }}"
                                        class="d-block profile-listing-holder custom-col-4 m-0 mb-4"
                                        style="padding: 0 0.5rem !important;">
                                        <div class="card h-100 p-0">
                                            <div class="card-inner p-0">
                                                <div class="project">
                                                    <div class="profile-listing-img-holder position-relative"
                                                        style="height: 185px;">
                                                        <img class="profile-listing-img"
                                                            src="assets/websiteImages/creatorMarketplace/categories/travel.png"
                                                            alt="">
                                                        <div class="d-block position-absolute pb-1"
                                                            style="bottom: 0; left: 10px;line-height: 1.2;">
                                                            <h5 class="text-white pb-2">Travel</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{ url('influencers/search?c=Beauty') }}"
                                        class="d-block profile-listing-holder custom-col-4 m-0 mb-4"
                                        style="padding: 0 0.5rem !important;">
                                        <div class="card h-100 p-0">
                                            <div class="card-inner p-0">
                                                <div class="project">
                                                    <div class="profile-listing-img-holder position-relative"
                                                        style="height: 185px;">
                                                        <img class="profile-listing-img"
                                                            src="assets/websiteImages/creatorMarketplace/categories/beauty.png"
                                                            alt="">
                                                        <div class="d-block position-absolute pb-1"
                                                            style="bottom: 0; left: 10px;line-height: 1.2;">
                                                            <h5 class="text-white pb-2">Beauty</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{ url('influencers/search?c=Music%20&%20Dance') }}"
                                        class="d-block profile-listing-holder custom-col-4 m-0 mb-4"
                                        style="padding: 0 0.5rem !important;">
                                        <div class="card h-100 p-0">
                                            <div class="card-inner p-0">
                                                <div class="project">
                                                    <div class="profile-listing-img-holder position-relative"
                                                        style="height: 185px;">
                                                        <img class="profile-listing-img"
                                                            src="assets/websiteImages/creatorMarketplace/categories/music%20%26%20dance.png"
                                                            alt="">
                                                        <div class="d-block position-absolute pb-1"
                                                            style="bottom: 0; left: 10px;line-height: 1.2;">
                                                            <h5 class="text-white pb-2">Music &amp; Dance</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{ url('influencers/search?c=Fashion') }}"
                                        class="d-block profile-listing-holder custom-col-4 m-0 mb-4"
                                        style="padding: 0 0.5rem !important;">
                                        <div class="card h-100 p-0">
                                            <div class="card-inner p-0">
                                                <div class="project">
                                                    <div class="profile-listing-img-holder position-relative"
                                                        style="height: 185px;">
                                                        <img class="profile-listing-img"
                                                            src="assets/websiteImages/creatorMarketplace/categories/fashion.png"
                                                            alt="">
                                                        <div class="d-block position-absolute pb-1"
                                                            style="bottom: 0; left: 10px;line-height: 1.2;">
                                                            <h5 class="text-white pb-2">Fashion</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div><!-- .nk-block -->


                            <div class="pt-0 pb-4">
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



                            <div class="nk-block mb-4" id="how-it-works">
                                <div class="nk-block mb-3">
                                    <article class="entry">
                                        <h3 class="mb-0 pb-0">How Collabstr Works</h3>
                                        <div class="d-flex justify-content-between">
                                            <p class="text-gray p-0 m-0 ">Everything you need to run your
                                                influencer campaigns,
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
                                                            <div class="text-white font-135 font-w-600 p-0 m-0">
                                                                Search Influencers</div>
                                                            <div class="step-txt mb-2">Search through thousands
                                                                of vetted Instagram, TikTok, and YouTube
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
                                                            <div class="text-white font-135 font-w-600 p-0 m-0">
                                                                Search Influencers</div>
                                                            <div class="step-txt mb-2">Search through thousands
                                                                of vetted Instagram, TikTok, and YouTube
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
                                                            src="assets/websiteImages/creatorMarketplace/step2.png"
                                                            alt="">
                                                        <div class="d-block position-absolute pb-1 px-1"
                                                            style="bottom: 0; left: 10px;line-height: 1.2;">
                                                            <h5 class="text-white">3</h5>
                                                            <div class="text-white font-135 font-w-600 p-0 m-0">
                                                                Search Influencers</div>
                                                            <div class="step-txt mb-2">Search through thousands
                                                                of vetted Instagram, TikTok, and YouTube
                                                                influencers.</div>
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
                                                                <div class="feature-title p-0 m-0">No Upfront
                                                                    Cost</div>
                                                                <div class="feature-txt mb-2">Search
                                                                    influencers for free. No subscriptions,
                                                                    contracts or hidden fees.</div>
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
                                                            <h4 style="font-size: 1.5rem"><b><em
                                                                        class="icon ni ni-list-check"></em></b>
                                                                <div class="feature-title p-0 m-0">Vetted
                                                                    Influencers</div>
                                                                <div class="feature-txt mb-2">Search
                                                                    influencers for free. No subscriptions,
                                                                    contracts or hidden fees.</div>
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
                                                            <h4 style="font-size: 1.5rem"><b><em
                                                                        class="icon ni ni-msg-circle-fill"></em></b>
                                                                <div class="feature-title p-0 m-0">Instant Chat
                                                                </div>
                                                                <div class="feature-txt mb-2">Search
                                                                    influencers for free. No subscriptions,
                                                                    contracts or hidden fees.</div>
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
                                                            <h4 style="font-size: 1.5rem"><b><em
                                                                        class="icon ni ni-lock-alt-fill"></em></b>
                                                                <div class="feature-title p-0 m-0">Secure
                                                                    Purchases</div>
                                                                <div class="feature-txt mb-2">Search
                                                                    influencers for free. No subscriptions,
                                                                    contracts or hidden fees.</div>
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
                                        <h3 class="mb-0 pb-0">Trusted by 30,000+ Brands</h3>
                                        <div class="d-flex justify-content-between">
                                            <p class="text-gray p-0 m-0 ">View collaborations from brands like
                                                Wealthsimple,
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
                                    <h3 class="mb-0 pb-0">Case Studies</h3>
                                </article>
                            </div><!-- .nk-block -->
                            <div class="listing-row mb-4">
                                <div class="profile-listing-holder custom-col-3 m-0 mb-4"
                                    style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0">
                                        <div class="card-inner p-0">
                                            <div class="project">
                                                <a href="{{ route('case.study') }}">
                                                    <div class="profile-listing-img-holder position-relative"
                                                        style="height: 332px;">
                                                        <img class="profile-listing-img"
                                                            src="assets/caseStudies/wealthsimple/header.jpg" alt="">
                                                        <div class="d-block position-absolute pb-1 px-1"
                                                            style="bottom: 0; left: 10px;line-height: 1.2;">
                                                            <div class="similar-post-title mb-2">Wealthsimple
                                                                Launches 'Wealthsimple Cash' With Instagram and
                                                                TikTok Influencers on Collabstr</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-listing-holder custom-col-3 m-0 mb-4"
                                    style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0">
                                        <div class="card-inner p-0">
                                            <div class="project">
                                                <a href="{{ route('case.study') }}">
                                                    <div class="profile-listing-img-holder position-relative"
                                                        style="height: 332px;">
                                                        <img class="profile-listing-img"
                                                            src="assets/caseStudies/numi/header.jpg" alt="">
                                                        <div class="d-block position-absolute pb-1 px-1"
                                                            style="bottom: 0; left: 10px;line-height: 1.2;">
                                                            <div class="similar-post-title mb-2">Wealthsimple
                                                                Launches 'Wealthsimple Cash' With Instagram and
                                                                TikTok Influencers on Collabstr</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-listing-holder custom-col-3 m-0 mb-4"
                                    style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0">
                                        <div class="card-inner p-0">
                                            <div class="project">
                                                <a href="{{ route('case.study') }}">
                                                    <div class="profile-listing-img-holder position-relative"
                                                        style="height: 332px;">
                                                        <img class="profile-listing-img"
                                                            src="assets/caseStudies/mcfadden/header.jpg" alt="">
                                                        <div class="d-block position-absolute pb-1 px-1"
                                                            style="bottom: 0; left: 10px;line-height: 1.2;">
                                                            <div class="similar-post-title mb-2">Wealthsimple
                                                                Launches 'Wealthsimple Cash' With Instagram and
                                                                TikTok Influencers on Collabstr</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .nk-block -->




                        <div class="nk-block mb-4">
                            <div class="nk-block mb-3">
                                <article class="entry">
                                    <h3 class="mb-0 pb-0">What Brands Say About Us</h3>
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
                                                            <div class="testimonial-title p-0 m-0 mt-2">5 stars
                                                                from a creator and a brand</div>
                                                            <div class="testimonial-txt mb-2">I've used
                                                                Collabstr from both the Creator side and the
                                                                Brand side! It is extremely user-friendly and
                                                                has lead to some great relationships with
                                                                creators/brands I wouldn't have been connected
                                                                to otherwise. Love the platform!
                                                            </div>
                                                        </h4>
                                                    </div>
                                                    <div class="testimonial-author">Layla - Influencer &
                                                        Founder</div>
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
                                                            <div class="testimonial-title p-0 m-0 mt-2">Best
                                                                platform to connect with influencers</div>
                                                            <div class="testimonial-txt mb-2">
                                                                Best platform to connect with influencers and
                                                                content creators. I’ve signed up to many
                                                                platforms, collabstr is the easiest to use and
                                                                gives the best results for my brand.
                                                            </div>
                                                        </h4>
                                                    </div>
                                                    <div class="testimonial-author">Myriam - Founder of BBeyond
                                                    </div>
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
                                                            <div class="testimonial-title p-0 m-0 mt-2">Great
                                                                way to generate content</div>
                                                            <div class="testimonial-txt mb-2">
                                                                Been using Collabstr to generate content for our
                                                                seasonal clothing lines. Super easy for us to
                                                                search for relevant influencers and pay them. We
                                                                save at least 10-20 hours a month on this.
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



                        <div class="nk-block my-4">
                            <div class="nk-block mb-3">
                                <article class="entry">
                                    <h3 class="mb-0 pb-0">YouTube</h3>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-gray p-0 m-0 ">Hire YouTube influencers</p>
                                        <a href="{{route('explore')}}" class="text-black"><b>see all</b></a>
                                    </div>
                                </article>
                            </div><!-- .nk-block -->
                            <div class="listing-row">
                                @foreach ($youtube as $row)
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
                                    <h3 class="mb-0 pb-0">User Generated Content</h3>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-gray p-0 m-0 ">Purchase high-quality UGC</p>
                                        <a href="{{route('explore')}}" class="text-black"><b>see all</b></a>
                                    </div>
                                </article>
                            </div><!-- .nk-block -->
                            <div class="listing-row">
                                @foreach ($ugc as $row)
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
                                                    <p>Influencer marketing is a digital marketing strategy that
                                                        involves collaborating with individuals, known as
                                                        influencers, who have a dedicated and engaged following
                                                        on social media platforms and other online channels.
                                                        These influencers can impact their followers' purchasing
                                                        decisions due to their credibility and authority in
                                                        specific niches or industries. Brands partner with
                                                        influencers to promote their products or services
                                                        authentically, build social proof, and leverage their
                                                        influence to reach a larger and more targeted audience.
                                                    </p>
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
                                                    <p>Influencer marketing operates by identifying suitable
                                                        influencers for your brand, establishing a partnership,
                                                        and creating and distributing content through the
                                                        influencer's channels. This content can take various
                                                        forms, including sponsored posts, reviews, tutorials, or
                                                        endorsements. The influencer shares this content with
                                                        their audience, effectively introducing your brand or
                                                        product to a potentially receptive and <a
                                                            href="https://collabstr.com/tiktok-engagement-rate-calculator"
                                                            target="_blank">engaged audience</a>. The key to
                                                        successful influencer marketing lies in crafting
                                                        authentic and relevant content that resonates with both
                                                        the influencer's followers and your brand's message.
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
                                                    <p>Influencer marketing is important because it enables
                                                        brands to connect with their target audience in a more
                                                        genuine and engaging manner. Unlike traditional
                                                        advertising, influencer marketing feels less intrusive
                                                        and more trustworthy, as recommendations come from a
                                                        trusted source. It helps build brand awareness, improve
                                                        credibility, drive traffic, boost sales, and foster
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
                                                <h6 class="title">How Can I Find the Right Influencers for My
                                                    Brand?</h6>
                                                <span class="accordion-icon"></span>
                                            </a>
                                            <div class="accordion-body collapse" id="accordion-item-1-4"
                                                data-parent="#accordion-4">
                                                <div class="accordion-inner">
                                                    <p>
                                                        Start by identifying your target audience and the
                                                        platforms they use. Then, use the Collabstr influencer
                                                        marketing tool to <a href="https://collabstr.com/search-influencers"
                                                            target="_blank">search for influencers</a> within
                                                        your niche. Use the gender, price, location, and other
                                                        filters to narrow down relevant influencers as much as
                                                        possible. Once you find an influencer that you’re
                                                        interested in working with, you can simply purchase one
                                                        of their pre-defined content packages, or send them a
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
                                                <h6 class="title">How Much Does Influencer Marketing Cost?
                                                </h6>
                                                <span class="accordion-icon"></span>
                                            </a>
                                            <div class="accordion-body collapse" id="accordion-item-1-5"
                                                data-parent="#accordion-5">
                                                <div class="accordion-inner">
                                                    <p>
                                                        The cost of influencer marketing varies widely depending
                                                        on factors such as the influencer's reach, niche, and <a
                                                            href="https://collabstr.com/instagram-engagement-rate-calculator"
                                                            target="_blank">engagement rates</a>.
                                                        Micro-influencers with smaller followings may charge
                                                        less than macro-influencers or celebrities. Some
                                                        influencers may work on a per-post basis, while others
                                                        prefer ongoing partnerships. If you have a budget in
                                                        mind, consider using the price filters found in
                                                        Collabstr’s search tool to narrow down the influencers
                                                        that fit within your budget, this will save you time
                                                        during the influencer discovery process.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="accordion-6" class="accordion accordion-s2">
                                        <div class="accordion-item border-b my-5 pb-4">
                                            <a href="#" class="accordion-head collapsed" data-toggle="collapse"
                                                data-target="#accordion-item-1-6">
                                                <h6 class="title">What Are the Different Types of Influencer
                                                    Marketing Campaigns?</h6>
                                                <span class="accordion-icon"></span>
                                            </a>
                                            <div class="accordion-body collapse" id="accordion-item-1-6"
                                                data-parent="#accordion-6">
                                                <div class="accordion-inner">
                                                    <p>
                                                        Influencer marketing can accommodate various campaign
                                                        types, including product reviews, sponsored posts,
                                                        takeovers, giveaways, and affiliate marketing. The type
                                                        of campaign you choose should align with your goals and
                                                        the influencer's strengths. You can use a <a
                                                            href="https://collabstr.com/influencer-campaign-brief-template"
                                                            target="_blank">campaign brief template</a> like
                                                        the one offered by Collabstr to ensure that you have a
                                                        well-thought-out campaign brief that encapsulates all
                                                        the important details required to have a successful
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
                                                <h6 class="title">How Do I Measure the Success of an
                                                    Influencer Marketing Campaign?</h6>
                                                <span class="accordion-icon"></span>
                                            </a>
                                            <div class="accordion-body collapse" id="accordion-item-1-7"
                                                data-parent="#accordion-7">
                                                <div class="accordion-inner">
                                                    <p>
                                                        To measure the success of an influencer marketing
                                                        campaign, you can track key performance indicators
                                                        (KPIs) such as click-through rates, conversions, and
                                                        return on investment (ROI). Typically, this tracking
                                                        would be done through your own means, such as a discount
                                                        code or unique link that is used to track the
                                                        influencer’s impact on your side. Keep in mind that a
                                                        large part of influencer marketing is social proof and
                                                        social awareness, so many viewers may see your product
                                                        and navigate to your website through other methods
                                                        besides clicking the influencer’s link directly.
                                                        Additionally, you can gather feedback from the
                                                        influencer and analyze audience sentiment to gauge the
                                                        campaign's impact on brand perception.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="accordion-8" class="accordion accordion-s2">
                                        <div class="accordion-item border-b my-5 pb-4">
                                            <a href="#" class="accordion-head collapsed" data-toggle="collapse"
                                                data-target="#accordion-item-1-8">
                                                <h6 class="title">What Are the Common Mistakes to Avoid in
                                                    Influencer Marketing?</h6>
                                                <span class="accordion-icon"></span>
                                            </a>
                                            <div class="accordion-body collapse" id="accordion-item-1-8"
                                                data-parent="#accordion-8">
                                                <div class="accordion-inner">
                                                    <p>
                                                        Common mistakes in influencer marketing include failing
                                                        to define clear campaign objectives and expectations and
                                                        neglecting to communicate changes in objectives,
                                                        timelines, and other aspects that affect the outcome of
                                                        the campaign. Another major downfall to many influencer
                                                        marketing campaigns is the expectation that every
                                                        campaign is going to hit your KPIs when in reality,
                                                        brands should focus on collecting feedback and data so
                                                        that they can constantly iterate on campaign objectives
                                                        and angles until they hit their desired KPIs.
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
                                                <h2 class="cta-title text-white"> Hire Influencers
                                                </h2>
                                                <h3 class="cta-txt text-white">Search Instagram, TikTok, and
                                                    YouTube influencers.</h3>
                                                <a href="{{route('influencer.search')}}">
                                                    <div class="btn cta-btn font-100 py-3 px-4 mt-2">Search
                                                        Influencers</div>
                                                </a>
                                            </div>
                                        </div>
                                        <img loading="lazy" alt="top influencers" class="cta-img"
                                            src="assets/images/cta.png">
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
        <script src="{{ url('assets/js/modal.js') }}"></script>
    @endsection
