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
                                    <h2 class="hero-title-text title-gradient">Influencer Marketing Made Easy</h2>
                                    <div class="text-gray-1 hero-subtitle">
                                        <p class="lead">Find and hire top Instagram, TikTok, YouTube, and UGC influencers to
                                            create unique content for your brand</p>
                                    </div>
                                </div>

                                <form action="javascript:void(0)" class="pos-rel">
                                    <div class="card card-style m-0 card-style-mb">
                                        <div class="card-inner light-box-shadow p-0 border-radius-6 pos-rel">
                                            <span class="pos-abs span-divider"></span>
                                            <div class="row p-0 m-0 border-radius-6">
                                                <div class="col-md-6 border-radius-6 p-0">
                                                    <div class="form-group border-radius-6">
                                                        <div class="form-control-wrap position-relative h-60">
                                                            <label
                                                                class="form-label pos-abs search-input-label m-0"><b>Plateform</b></label>
                                                            <input type="text"
                                                                class="dropdown-input form-control border-0 padding-2 border-radius-6 h-60"
                                                                placeholder="Choose a plateform">
                                                            <ul class="dropdown-list light-box-shadow">
                                                                <li>Any</li>
                                                                <li>Instagram</li>
                                                                <li>Tiktok</li>
                                                                <li>User Generated Content</li>
                                                                <li>YouTube</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 border-radius-6 p-0">
                                                    <div class="form-group border-radius-6">
                                                        <div class="form-control-wrap position-relative h-60">
                                                            <label
                                                                class="form-label pos-abs search-input-label m-0"><b>Category</b></label>
                                                            <input type="text"
                                                                class="dropdown-input form-control border-0 padding-2 border-radius-6 h-60"
                                                                placeholder="Enter keywords, niches or category">
                                                            <div class="dropdown-list light-box-shadow">
                                                                <div class="font-90 text-gray-light">
                                                                    Popular
                                                                </div>
                                                                <div class="dropdown-list-2">
                                                                    <p> Lifestyle</p>
                                                                    <p> Fashion</p>
                                                                    <p> Beauty</p>
                                                                    <p> Travel</p>
                                                                    <p> Health & Fitness</p>
                                                                    <p> Comedy & Entertainment</p>
                                                                    <p> Food & Drink</p>
                                                                    <p> Model</p>
                                                                    <p> Art & Photography</p>
                                                                    <p> Family & Children</p>
                                                                    <p> Music & Dance</p>
                                                                    <p> Animals & Pets</p>
                                                                    <p> Adventure & Outdoors</p>
                                                                    <p> Education</p>
                                                                    <p> Entrepreneur & Business</p>
                                                                    <p> Athlete & Sports</p>
                                                                    <p> LGBTQ2+</p>
                                                                    <p> Vegan</p>
                                                                    <p> Gaming</p>
                                                                    <p> Technology</p>
                                                                    <p> Actor</p>
                                                                    <p> Healthcare</p>
                                                                    <p> Cannabis</p>
                                                                    <p> Skilled Trades</p>
                                                                    <p> Automotive</p>
                                                                    <p> Celebrity & Public Figure</p>

                                                                </div>
                                                            </div>
                                                            <button class="btn search-btn-cus m-0 pos-abs" type="button">
                                                                <em class="rotate-80 icon ni ni-search"></em>
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                        </div>
                                    </div><!-- .card-preview -->
                                </form>
                            </div><!-- .nk-block -->

                            <div class="nk-block my-4">
                                <div class="nk-block mb-3">
                                    <article class="entry">
                                        <h3 class="mb-0 pb-0">Featured</h3>
                                        <div class="d-flex justify-content-between">
                                            <p class="text-gray p-0 m-0 ">Hire top influencers across all platforms</p>
                                            <span class="text-black"><b>see all</b></span>
                                        </div>
                                    </article>
                                </div><!-- .nk-block -->
                                <div class="listing-row">
                                    <div class="profile-listing-holder custom-col-4 m-0" style="padding: 0 0.5rem !important;">
                                        <div class="card h-100 p-0">
                                            <div class="card-inner p-0">
                                                <a href="influencer-details.html">
                                                    <div class="project">
                                                        <div class="profile-listing-img-holder position-relative">
                                                            <div class="profile-listing-badge-holder"
                                                                title="Top creators have completed multiple orders and have a high rating from brands.">

                                                                <div class="profile-listing-badge">
                                                                    <svg class="profile-listing-badge-img" viewbox="0 0 512 512"
                                                                        fill="#FFADBB">
                                                                        <path
                                                                            d="M233 1.5c-44.2 5.8-82.1 24.1-113 54.6C59.6 115.7 44 206 80.9 281.5c34.4 70.3 106.5 113.7 183.1 110.2 72.1-3.3 135.1-44.9 167.1-110.2 52.9-108.1-4.8-239-120.6-273.6-22.7-6.8-54.7-9.4-77.5-6.4zm33 94.1c1.6 1.6 8.2 13.5 14.6 26.4 6.3 12.9 11.6 23.6 11.7 23.7.1 0 11.5 1.8 25.2 3.8 13.8 2 26.7 4.1 28.7 4.6 6.9 1.8 11.8 10.9 9.8 17.9-.7 2.5-6.4 8.9-21 23.5l-20 20.1 4.5 26.4c2.8 16.1 4.4 27.8 4 29.8-1.3 7.1-10 13.2-16.8 11.8-1.7-.4-13.8-6.3-26.9-13.2L256 257.9l-23.8 12.5c-13.1 6.9-25.2 12.8-26.9 13.2-6.8 1.4-15.5-4.7-16.8-11.8-.4-2 1.2-13.5 4-29.7l4.6-26.5-20.1-20.1c-16.5-16.5-20.3-20.8-21-23.9-1.6-7.4 3-15.7 9.8-17.5 2-.5 14.9-2.6 28.7-4.6 13.7-2 25-3.7 25.1-3.8s5.6-11 12.2-24.2c11.1-22.3 14.3-27.3 18.2-28.8.8-.4 4.1-.5 7.3-.4 4.9.3 6.3.8 8.7 3.3z">
                                                                        </path>
                                                                        <path
                                                                            d="M248 155.7c-5.9 11.6-8.2 15.2-10.6 16.6-1.9 1-9.2 2.6-18 3.9-8.2 1.2-15.1 2.3-15.4 2.5-.2.2 4.6 5.4 10.7 11.6s11.6 12.2 12.2 13.4c1.6 3.1 1.4 7.1-1.3 22.8-1.3 7.7-2.3 14.1-2.1 14.3.1.1 6.7-3.1 14.7-7.3 9.4-4.9 15.6-7.5 17.8-7.5 2.9 0 19.6 7.6 28.8 13.2 1.8 1.1 3.5 1.9 3.7 1.7.1-.2-.8-6.7-2.1-14.4-2.8-16.3-2.9-19.6-1-23.3.8-1.5 6.4-7.6 12.4-13.5 6.1-6 10.5-11 9.9-11.2-.7-.2-7.7-1.3-15.6-2.5-8.4-1.2-15.8-2.8-17.5-3.8-2.4-1.3-4.8-5.1-10.6-16.5-4.1-8.1-7.7-14.7-8-14.7s-3.9 6.6-8 14.7zM65.7 395.3C49 433.1 44 445.4 44 448.5c0 7.6 6.7 14.5 14.1 14.5 2 0 18.4-5 36.4-11.1 18-6 33.1-10.6 33.5-10.2s6.6 14.7 13.9 31.8c14.2 33.4 15.5 35.5 23.3 37.5 5.2 1.4 10.4.2 13.6-3.3 2.9-3.1 40.6-87.7 39.5-88.7-.4-.4-4.8-1.5-9.8-2.5-14.4-2.8-34.8-10-51.1-18-23.1-11.2-40.2-23.4-59.4-42.1l-10.5-10.2-21.8 49.1zm350.2-40.7c-10.1 10.3-25.2 22.6-37.4 30.7-20.5 13.5-52.3 26.7-75 31.2-4.9 1-9.4 2.1-9.8 2.5-.5.4 7.8 20.1 18.4 43.9 20.3 45.8 21.2 47.3 28.5 48.7 4.2.8 11.1-1.6 14.2-4.9 1.1-1.2 8-16.1 15.3-33.2s13.6-31.4 13.9-31.8c.4-.5 15.5 4.1 33.5 10.2 18.2 6.2 34.3 11.1 36.3 11.1 7.5 0 14.2-6.9 14.2-14.6 0-3.2-4.8-15-21.8-53.2l-21.8-49.1-8.5 8.5z">
                                                                        </path>
                                                                    </svg>
                                                                    <div class="profile-listing-badge-title">Top Creator</div>
                                                                </div>


                                                            </div> <img class="profile-listing-img"
                                                                src="assets/sellers/16445/16276271080633945.webp" alt="">
                                                            <div class="d-block position-absolute pb-1"
                                                                style="bottom: 0; left: 10px;line-height: 1.2;">
                                                                <div class="text-white font-80 font-w-600 p-0 m-0">influencers
                                                                    Name</div>
                                                                <div class="text-white font-75 font-w-300 p-0 m-0">Address,
                                                                    District, State</div>
                                                            </div>
                                                        </div>
                                                        <div class="project-details">
                                                            <div class="d-flex justify-content-between">
                                                                <span class="font-90 text-gray-light">Instagram</span>
                                                                <span class="text-black"><b>₹1100</b></span>
                                                            </div>
                                                            <div class="text-reduce font-90 font-w-300 text-gray-1"> Fashion
                                                                &amp; Lifestyle Content Creator Fashion &amp; Lifestyl</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-listing-holder custom-col-4 m-0" style="padding: 0 0.5rem !important;">
                                        <div class="card h-100 p-0">
                                            <div class="card-inner p-0">
                                                <a href="influencer-details.html">
                                                    <div class="project">
                                                        <div class="profile-listing-img-holder position-relative">
                                                            <div class="profile-listing-badge-holder"
                                                                title="Top creators have completed multiple orders and have a high rating from brands.">

                                                                <div class="profile-listing-badge">
                                                                    <svg class="profile-listing-badge-img" viewbox="0 0 512 512"
                                                                        fill="#FFADBB">
                                                                        <path
                                                                            d="M233 1.5c-44.2 5.8-82.1 24.1-113 54.6C59.6 115.7 44 206 80.9 281.5c34.4 70.3 106.5 113.7 183.1 110.2 72.1-3.3 135.1-44.9 167.1-110.2 52.9-108.1-4.8-239-120.6-273.6-22.7-6.8-54.7-9.4-77.5-6.4zm33 94.1c1.6 1.6 8.2 13.5 14.6 26.4 6.3 12.9 11.6 23.6 11.7 23.7.1 0 11.5 1.8 25.2 3.8 13.8 2 26.7 4.1 28.7 4.6 6.9 1.8 11.8 10.9 9.8 17.9-.7 2.5-6.4 8.9-21 23.5l-20 20.1 4.5 26.4c2.8 16.1 4.4 27.8 4 29.8-1.3 7.1-10 13.2-16.8 11.8-1.7-.4-13.8-6.3-26.9-13.2L256 257.9l-23.8 12.5c-13.1 6.9-25.2 12.8-26.9 13.2-6.8 1.4-15.5-4.7-16.8-11.8-.4-2 1.2-13.5 4-29.7l4.6-26.5-20.1-20.1c-16.5-16.5-20.3-20.8-21-23.9-1.6-7.4 3-15.7 9.8-17.5 2-.5 14.9-2.6 28.7-4.6 13.7-2 25-3.7 25.1-3.8s5.6-11 12.2-24.2c11.1-22.3 14.3-27.3 18.2-28.8.8-.4 4.1-.5 7.3-.4 4.9.3 6.3.8 8.7 3.3z">
                                                                        </path>
                                                                        <path
                                                                            d="M248 155.7c-5.9 11.6-8.2 15.2-10.6 16.6-1.9 1-9.2 2.6-18 3.9-8.2 1.2-15.1 2.3-15.4 2.5-.2.2 4.6 5.4 10.7 11.6s11.6 12.2 12.2 13.4c1.6 3.1 1.4 7.1-1.3 22.8-1.3 7.7-2.3 14.1-2.1 14.3.1.1 6.7-3.1 14.7-7.3 9.4-4.9 15.6-7.5 17.8-7.5 2.9 0 19.6 7.6 28.8 13.2 1.8 1.1 3.5 1.9 3.7 1.7.1-.2-.8-6.7-2.1-14.4-2.8-16.3-2.9-19.6-1-23.3.8-1.5 6.4-7.6 12.4-13.5 6.1-6 10.5-11 9.9-11.2-.7-.2-7.7-1.3-15.6-2.5-8.4-1.2-15.8-2.8-17.5-3.8-2.4-1.3-4.8-5.1-10.6-16.5-4.1-8.1-7.7-14.7-8-14.7s-3.9 6.6-8 14.7zM65.7 395.3C49 433.1 44 445.4 44 448.5c0 7.6 6.7 14.5 14.1 14.5 2 0 18.4-5 36.4-11.1 18-6 33.1-10.6 33.5-10.2s6.6 14.7 13.9 31.8c14.2 33.4 15.5 35.5 23.3 37.5 5.2 1.4 10.4.2 13.6-3.3 2.9-3.1 40.6-87.7 39.5-88.7-.4-.4-4.8-1.5-9.8-2.5-14.4-2.8-34.8-10-51.1-18-23.1-11.2-40.2-23.4-59.4-42.1l-10.5-10.2-21.8 49.1zm350.2-40.7c-10.1 10.3-25.2 22.6-37.4 30.7-20.5 13.5-52.3 26.7-75 31.2-4.9 1-9.4 2.1-9.8 2.5-.5.4 7.8 20.1 18.4 43.9 20.3 45.8 21.2 47.3 28.5 48.7 4.2.8 11.1-1.6 14.2-4.9 1.1-1.2 8-16.1 15.3-33.2s13.6-31.4 13.9-31.8c.4-.5 15.5 4.1 33.5 10.2 18.2 6.2 34.3 11.1 36.3 11.1 7.5 0 14.2-6.9 14.2-14.6 0-3.2-4.8-15-21.8-53.2l-21.8-49.1-8.5 8.5z">
                                                                        </path>
                                                                    </svg>
                                                                    <div class="profile-listing-badge-title">Top Creator</div>
                                                                </div>


                                                            </div> <img class="profile-listing-img"
                                                                src="assets/sellers/22281/1627628109068337.webp" alt="">
                                                            <div class="d-block position-absolute pb-1"
                                                                style="bottom: 0; left: 10px;line-height: 1.2;">
                                                                <div class="text-white font-80 font-w-600 p-0 m-0">influencers
                                                                    Name</div>
                                                                <div class="text-white font-75 font-w-300 p-0 m-0">Address,
                                                                    District, State</div>
                                                            </div>
                                                        </div>
                                                        <div class="project-details">
                                                            <div class="d-flex justify-content-between">
                                                                <span class="font-90 text-gray-light">Instagram</span>
                                                                <span class="text-black"><b>₹1100</b></span>
                                                            </div>
                                                            <div class="text-reduce font-90 font-w-300 text-gray-1"> Fashion
                                                                &amp; Lifestyle Content Creator Fashion &amp; Lifestyl</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-listing-holder custom-col-4 m-0" style="padding: 0 0.5rem !important;">
                                        <div class="card h-100 p-0">
                                            <div class="card-inner p-0">
                                                <a href="influencer-details.html">
                                                    <div class="project">
                                                        <div class="profile-listing-img-holder position-relative">
                                                            <div class="profile-listing-badge-holder"
                                                                title="Top creators have completed multiple orders and have a high rating from brands.">

                                                                <div class="profile-listing-badge">
                                                                    <svg class="profile-listing-badge-img"
                                                                        viewbox="0 0 512 512" fill="#FFADBB">
                                                                        <path
                                                                            d="M233 1.5c-44.2 5.8-82.1 24.1-113 54.6C59.6 115.7 44 206 80.9 281.5c34.4 70.3 106.5 113.7 183.1 110.2 72.1-3.3 135.1-44.9 167.1-110.2 52.9-108.1-4.8-239-120.6-273.6-22.7-6.8-54.7-9.4-77.5-6.4zm33 94.1c1.6 1.6 8.2 13.5 14.6 26.4 6.3 12.9 11.6 23.6 11.7 23.7.1 0 11.5 1.8 25.2 3.8 13.8 2 26.7 4.1 28.7 4.6 6.9 1.8 11.8 10.9 9.8 17.9-.7 2.5-6.4 8.9-21 23.5l-20 20.1 4.5 26.4c2.8 16.1 4.4 27.8 4 29.8-1.3 7.1-10 13.2-16.8 11.8-1.7-.4-13.8-6.3-26.9-13.2L256 257.9l-23.8 12.5c-13.1 6.9-25.2 12.8-26.9 13.2-6.8 1.4-15.5-4.7-16.8-11.8-.4-2 1.2-13.5 4-29.7l4.6-26.5-20.1-20.1c-16.5-16.5-20.3-20.8-21-23.9-1.6-7.4 3-15.7 9.8-17.5 2-.5 14.9-2.6 28.7-4.6 13.7-2 25-3.7 25.1-3.8s5.6-11 12.2-24.2c11.1-22.3 14.3-27.3 18.2-28.8.8-.4 4.1-.5 7.3-.4 4.9.3 6.3.8 8.7 3.3z">
                                                                        </path>
                                                                        <path
                                                                            d="M248 155.7c-5.9 11.6-8.2 15.2-10.6 16.6-1.9 1-9.2 2.6-18 3.9-8.2 1.2-15.1 2.3-15.4 2.5-.2.2 4.6 5.4 10.7 11.6s11.6 12.2 12.2 13.4c1.6 3.1 1.4 7.1-1.3 22.8-1.3 7.7-2.3 14.1-2.1 14.3.1.1 6.7-3.1 14.7-7.3 9.4-4.9 15.6-7.5 17.8-7.5 2.9 0 19.6 7.6 28.8 13.2 1.8 1.1 3.5 1.9 3.7 1.7.1-.2-.8-6.7-2.1-14.4-2.8-16.3-2.9-19.6-1-23.3.8-1.5 6.4-7.6 12.4-13.5 6.1-6 10.5-11 9.9-11.2-.7-.2-7.7-1.3-15.6-2.5-8.4-1.2-15.8-2.8-17.5-3.8-2.4-1.3-4.8-5.1-10.6-16.5-4.1-8.1-7.7-14.7-8-14.7s-3.9 6.6-8 14.7zM65.7 395.3C49 433.1 44 445.4 44 448.5c0 7.6 6.7 14.5 14.1 14.5 2 0 18.4-5 36.4-11.1 18-6 33.1-10.6 33.5-10.2s6.6 14.7 13.9 31.8c14.2 33.4 15.5 35.5 23.3 37.5 5.2 1.4 10.4.2 13.6-3.3 2.9-3.1 40.6-87.7 39.5-88.7-.4-.4-4.8-1.5-9.8-2.5-14.4-2.8-34.8-10-51.1-18-23.1-11.2-40.2-23.4-59.4-42.1l-10.5-10.2-21.8 49.1zm350.2-40.7c-10.1 10.3-25.2 22.6-37.4 30.7-20.5 13.5-52.3 26.7-75 31.2-4.9 1-9.4 2.1-9.8 2.5-.5.4 7.8 20.1 18.4 43.9 20.3 45.8 21.2 47.3 28.5 48.7 4.2.8 11.1-1.6 14.2-4.9 1.1-1.2 8-16.1 15.3-33.2s13.6-31.4 13.9-31.8c.4-.5 15.5 4.1 33.5 10.2 18.2 6.2 34.3 11.1 36.3 11.1 7.5 0 14.2-6.9 14.2-14.6 0-3.2-4.8-15-21.8-53.2l-21.8-49.1-8.5 8.5z">
                                                                        </path>
                                                                    </svg>
                                                                    <div class="profile-listing-badge-title">Top Creator</div>
                                                                </div>


                                                            </div> <img class="profile-listing-img"
                                                                src="assets/sellers/11075/1647476418558705.webp" alt="">
                                                            <div class="d-block position-absolute pb-1"
                                                                style="bottom: 0; left: 10px;line-height: 1.2;">
                                                                <div class="text-white font-80 font-w-600 p-0 m-0">influencers
                                                                    Name</div>
                                                                <div class="text-white font-75 font-w-300 p-0 m-0">Address,
                                                                    District, State</div>
                                                            </div>
                                                        </div>
                                                        <div class="project-details">
                                                            <div class="d-flex justify-content-between">
                                                                <span class="font-90 text-gray-light">Instagram</span>
                                                                <span class="text-black"><b>₹1100</b></span>
                                                            </div>
                                                            <div class="text-reduce font-90 font-w-300 text-gray-1"> Fashion
                                                                &amp; Lifestyle Content Creator Fashion &amp; Lifestyl</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-listing-holder custom-col-4 m-0"
                                        style="padding: 0 0.5rem !important;">
                                        <div class="card h-100 p-0">
                                            <div class="card-inner p-0">
                                                <a href="influencer-details.html">
                                                    <div class="project">
                                                        <div class="profile-listing-img-holder position-relative">
                                                            <div class="profile-listing-badge-holder"
                                                                title="Top creators have completed multiple orders and have a high rating from brands.">

                                                                <div class="profile-listing-badge">
                                                                    <svg class="profile-listing-badge-img"
                                                                        viewbox="0 0 512 512" fill="#FFADBB">
                                                                        <path
                                                                            d="M233 1.5c-44.2 5.8-82.1 24.1-113 54.6C59.6 115.7 44 206 80.9 281.5c34.4 70.3 106.5 113.7 183.1 110.2 72.1-3.3 135.1-44.9 167.1-110.2 52.9-108.1-4.8-239-120.6-273.6-22.7-6.8-54.7-9.4-77.5-6.4zm33 94.1c1.6 1.6 8.2 13.5 14.6 26.4 6.3 12.9 11.6 23.6 11.7 23.7.1 0 11.5 1.8 25.2 3.8 13.8 2 26.7 4.1 28.7 4.6 6.9 1.8 11.8 10.9 9.8 17.9-.7 2.5-6.4 8.9-21 23.5l-20 20.1 4.5 26.4c2.8 16.1 4.4 27.8 4 29.8-1.3 7.1-10 13.2-16.8 11.8-1.7-.4-13.8-6.3-26.9-13.2L256 257.9l-23.8 12.5c-13.1 6.9-25.2 12.8-26.9 13.2-6.8 1.4-15.5-4.7-16.8-11.8-.4-2 1.2-13.5 4-29.7l4.6-26.5-20.1-20.1c-16.5-16.5-20.3-20.8-21-23.9-1.6-7.4 3-15.7 9.8-17.5 2-.5 14.9-2.6 28.7-4.6 13.7-2 25-3.7 25.1-3.8s5.6-11 12.2-24.2c11.1-22.3 14.3-27.3 18.2-28.8.8-.4 4.1-.5 7.3-.4 4.9.3 6.3.8 8.7 3.3z">
                                                                        </path>
                                                                        <path
                                                                            d="M248 155.7c-5.9 11.6-8.2 15.2-10.6 16.6-1.9 1-9.2 2.6-18 3.9-8.2 1.2-15.1 2.3-15.4 2.5-.2.2 4.6 5.4 10.7 11.6s11.6 12.2 12.2 13.4c1.6 3.1 1.4 7.1-1.3 22.8-1.3 7.7-2.3 14.1-2.1 14.3.1.1 6.7-3.1 14.7-7.3 9.4-4.9 15.6-7.5 17.8-7.5 2.9 0 19.6 7.6 28.8 13.2 1.8 1.1 3.5 1.9 3.7 1.7.1-.2-.8-6.7-2.1-14.4-2.8-16.3-2.9-19.6-1-23.3.8-1.5 6.4-7.6 12.4-13.5 6.1-6 10.5-11 9.9-11.2-.7-.2-7.7-1.3-15.6-2.5-8.4-1.2-15.8-2.8-17.5-3.8-2.4-1.3-4.8-5.1-10.6-16.5-4.1-8.1-7.7-14.7-8-14.7s-3.9 6.6-8 14.7zM65.7 395.3C49 433.1 44 445.4 44 448.5c0 7.6 6.7 14.5 14.1 14.5 2 0 18.4-5 36.4-11.1 18-6 33.1-10.6 33.5-10.2s6.6 14.7 13.9 31.8c14.2 33.4 15.5 35.5 23.3 37.5 5.2 1.4 10.4.2 13.6-3.3 2.9-3.1 40.6-87.7 39.5-88.7-.4-.4-4.8-1.5-9.8-2.5-14.4-2.8-34.8-10-51.1-18-23.1-11.2-40.2-23.4-59.4-42.1l-10.5-10.2-21.8 49.1zm350.2-40.7c-10.1 10.3-25.2 22.6-37.4 30.7-20.5 13.5-52.3 26.7-75 31.2-4.9 1-9.4 2.1-9.8 2.5-.5.4 7.8 20.1 18.4 43.9 20.3 45.8 21.2 47.3 28.5 48.7 4.2.8 11.1-1.6 14.2-4.9 1.1-1.2 8-16.1 15.3-33.2s13.6-31.4 13.9-31.8c.4-.5 15.5 4.1 33.5 10.2 18.2 6.2 34.3 11.1 36.3 11.1 7.5 0 14.2-6.9 14.2-14.6 0-3.2-4.8-15-21.8-53.2l-21.8-49.1-8.5 8.5z">
                                                                        </path>
                                                                    </svg>
                                                                    <div class="profile-listing-badge-title">Top Creator</div>
                                                                </div>


                                                            </div> <img class="profile-listing-img"
                                                                src="assets/sellers/8718/1627632207827411.webp" alt="">
                                                            <div class="d-block position-absolute pb-1"
                                                                style="bottom: 0; left: 10px;line-height: 1.2;">
                                                                <div class="text-white font-80 font-w-600 p-0 m-0">influencers
                                                                    Name</div>
                                                                <div class="text-white font-75 font-w-300 p-0 m-0">Address,
                                                                    District, State</div>
                                                            </div>
                                                        </div>
                                                        <div class="project-details">
                                                            <div class="d-flex justify-content-between">
                                                                <span class="font-90 text-gray-light">Instagram</span>
                                                                <span class="text-black"><b>₹1100</b></span>
                                                            </div>
                                                            <div class="text-reduce font-90 font-w-300 text-gray-1"> Fashion
                                                                &amp; Lifestyle Content Creator Fashion &amp; Lifestyl</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .nk-block -->


                            <div class="nk-block mb-4">
                                <div class="nk-block mb-3">
                                    <article class="entry">
                                        <h3 class="mb-0 pb-0">Instagram</h3>
                                        <div class="d-flex justify-content-between">
                                            <p class="text-gray p-0 m-0 ">Hire Instagram influencers</p>
                                            <span class="text-black"><b>see all</b></span>
                                        </div>
                                    </article>
                                </div><!-- .nk-block -->
                                <div class="listing-row">
                                    <div class="profile-listing-holder custom-col-4 m-0"
                                        style="padding: 0 0.5rem !important;">
                                        <div class="card h-100 p-0">
                                            <div class="card-inner p-0">
                                                <a href="influencer-details.html">
                                                    <div class="project">
                                                        <div class="profile-listing-img-holder position-relative">
                                                            <img class="profile-listing-img"
                                                                src="assets/sellers/10551/16276326246123445.webp" alt="">

                                                            <div class="d-block position-absolute pb-1"
                                                                style="bottom: 0; left: 10px;line-height: 1.2;">
                                                                <div class="text-white font-80 font-w-600 p-0 m-0">influencers
                                                                    Name</div>
                                                                <div class="text-white font-75 font-w-300 p-0 m-0">Address,
                                                                    District, State</div>
                                                            </div>
                                                        </div>
                                                        <div class="project-details">
                                                            <div class="d-flex justify-content-between">
                                                                <span class="font-90 text-gray-light">Instagram</span>
                                                                <span class="text-black"><b>₹1100</b></span>
                                                            </div>
                                                            <div class="text-reduce font-90 font-w-300 text-gray-1"> Fashion
                                                                &amp; Lifestyle Content Creator Fashion &amp; Lifestyl</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-listing-holder custom-col-4 m-0"
                                        style="padding: 0 0.5rem !important;">
                                        <div class="card h-100 p-0">
                                            <div class="card-inner p-0">
                                                <a href="influencer-details.html">
                                                    <div class="project">
                                                        <div class="profile-listing-img-holder position-relative">
                                                            <img class="profile-listing-img"
                                                                src="assets/sellers/2559/16276313585041966.webp" alt="">

                                                            <div class="d-block position-absolute pb-1"
                                                                style="bottom: 0; left: 10px;line-height: 1.2;">
                                                                <div class="text-white font-80 font-w-600 p-0 m-0">influencers
                                                                    Name</div>
                                                                <div class="text-white font-75 font-w-300 p-0 m-0">Address,
                                                                    District, State</div>
                                                            </div>
                                                        </div>
                                                        <div class="project-details">
                                                            <div class="d-flex justify-content-between">
                                                                <span class="font-90 text-gray-light">Instagram</span>
                                                                <span class="text-black"><b>₹1100</b></span>
                                                            </div>
                                                            <div class="text-reduce font-90 font-w-300 text-gray-1"> Fashion
                                                                &amp; Lifestyle Content Creator Fashion &amp; Lifestyl</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-listing-holder custom-col-4 m-0"
                                        style="padding: 0 0.5rem !important;">
                                        <div class="card h-100 p-0">
                                            <div class="card-inner p-0">
                                                <a href="influencer-details.html">
                                                    <div class="project">
                                                        <div class="profile-listing-img-holder position-relative">
                                                            <img class="profile-listing-img"
                                                                src="assets/sellers/18657/1627627518040945.webp" alt="">

                                                            <div class="d-block position-absolute pb-1"
                                                                style="bottom: 0; left: 10px;line-height: 1.2;">
                                                                <div class="text-white font-80 font-w-600 p-0 m-0">influencers
                                                                    Name</div>
                                                                <div class="text-white font-75 font-w-300 p-0 m-0">Address,
                                                                    District, State</div>
                                                            </div>
                                                        </div>
                                                        <div class="project-details">
                                                            <div class="d-flex justify-content-between">
                                                                <span class="font-90 text-gray-light">Instagram</span>
                                                                <span class="text-black"><b>₹1100</b></span>
                                                            </div>
                                                            <div class="text-reduce font-90 font-w-300 text-gray-1"> Fashion
                                                                &amp; Lifestyle Content Creator Fashion &amp; Lifestyl</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-listing-holder custom-col-4 m-0"
                                        style="padding: 0 0.5rem !important;">
                                        <div class="card h-100 p-0">
                                            <div class="card-inner p-0">
                                                <a href="influencer-details.html">
                                                    <div class="project">
                                                        <div class="profile-listing-img-holder position-relative">
                                                            <img class="profile-listing-img"
                                                                src="assets/sellers/27346/1683824548835731.webp" alt="">

                                                            <div class="d-block position-absolute pb-1"
                                                                style="bottom: 0; left: 10px;line-height: 1.2;">
                                                                <div class="text-white font-80 font-w-600 p-0 m-0">influencers
                                                                    Name</div>
                                                                <div class="text-white font-75 font-w-300 p-0 m-0">Address,
                                                                    District, State</div>
                                                            </div>
                                                        </div>
                                                        <div class="project-details">
                                                            <div class="d-flex justify-content-between">
                                                                <span class="font-90 text-gray-light">Instagram</span>
                                                                <span class="text-black"><b>₹1100</b></span>
                                                            </div>
                                                            <div class="text-reduce font-90 font-w-300 text-gray-1"> Fashion
                                                                &amp; Lifestyle Content Creator Fashion &amp; Lifestyl</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .nk-block -->


                            <div class="nk-block mb-4">
                                <div class="nk-block mb-3">
                                    <article class="entry">
                                        <h3 class="mb-0 pb-0">Tiktok</h3>
                                        <div class="d-flex justify-content-between">
                                            <p class="text-gray p-0 m-0 ">Hire Instagram influencers</p>
                                            <span class="text-black"><b>see all</b></span>
                                        </div>
                                    </article>
                                </div><!-- .nk-block -->
                                <div class="listing-row">
                                    <div class="profile-listing-holder custom-col-4 m-0"
                                        style="padding: 0 0.5rem !important;">
                                        <div class="card h-100 p-0">
                                            <div class="card-inner p-0">
                                                <a href="influencer-details.html">
                                                    <div class="project">
                                                        <div class="profile-listing-img-holder position-relative">
                                                            <img class="profile-listing-img"
                                                                src="assets/sellers/8710/16276322058511531.webp" alt="">

                                                            <div class="d-block position-absolute pb-1"
                                                                style="bottom: 0; left: 10px;line-height: 1.2;">
                                                                <div class="text-white font-80 font-w-600 p-0 m-0">influencers
                                                                    Name</div>
                                                                <div class="text-white font-75 font-w-300 p-0 m-0">Address,
                                                                    District, State</div>
                                                            </div>
                                                        </div>
                                                        <div class="project-details">
                                                            <div class="d-flex justify-content-between">
                                                                <span class="font-90 text-gray-light">Instagram</span>
                                                                <span class="text-black"><b>₹1100</b></span>
                                                            </div>
                                                            <div class="text-reduce font-90 font-w-300 text-gray-1"> Fashion
                                                                &amp; Lifestyle Content Creator Fashion &amp; Lifestyl</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-listing-holder custom-col-4 m-0"
                                        style="padding: 0 0.5rem !important;">
                                        <div class="card h-100 p-0">
                                            <div class="card-inner p-0">
                                                <a href="influencer-details.html">
                                                    <div class="project">
                                                        <div class="profile-listing-img-holder position-relative">
                                                            <img class="profile-listing-img"
                                                                src="assets/sellers/23962/16276283826766195.webp" alt="">

                                                            <div class="d-block position-absolute pb-1"
                                                                style="bottom: 0; left: 10px;line-height: 1.2;">
                                                                <div class="text-white font-80 font-w-600 p-0 m-0">influencers
                                                                    Name</div>
                                                                <div class="text-white font-75 font-w-300 p-0 m-0">Address,
                                                                    District, State</div>
                                                            </div>
                                                        </div>
                                                        <div class="project-details">
                                                            <div class="d-flex justify-content-between">
                                                                <span class="font-90 text-gray-light">Instagram</span>
                                                                <span class="text-black"><b>₹1100</b></span>
                                                            </div>
                                                            <div class="text-reduce font-90 font-w-300 text-gray-1"> Fashion
                                                                &amp; Lifestyle Content Creator Fashion &amp; Lifestyl</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-listing-holder custom-col-4 m-0"
                                        style="padding: 0 0.5rem !important;">
                                        <div class="card h-100 p-0">
                                            <div class="card-inner p-0">
                                                <a href="influencer-details.html">
                                                    <div class="project">
                                                        <div class="profile-listing-img-holder position-relative">
                                                            <img class="profile-listing-img"
                                                                src="assets/sellers/10867/16276326928647254.webp" alt="">

                                                            <div class="d-block position-absolute pb-1"
                                                                style="bottom: 0; left: 10px;line-height: 1.2;">
                                                                <div class="text-white font-80 font-w-600 p-0 m-0">influencers
                                                                    Name</div>
                                                                <div class="text-white font-75 font-w-300 p-0 m-0">Address,
                                                                    District, State</div>
                                                            </div>
                                                        </div>
                                                        <div class="project-details">
                                                            <div class="d-flex justify-content-between">
                                                                <span class="font-90 text-gray-light">Instagram</span>
                                                                <span class="text-black"><b>₹1100</b></span>
                                                            </div>
                                                            <div class="text-reduce font-90 font-w-300 text-gray-1"> Fashion
                                                                &amp; Lifestyle Content Creator Fashion &amp; Lifestyl</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-listing-holder custom-col-4 m-0"
                                        style="padding: 0 0.5rem !important;">
                                        <div class="card h-100 p-0">
                                            <div class="card-inner p-0">
                                                <a href="influencer-details.html">
                                                    <div class="project">
                                                        <div class="profile-listing-img-holder position-relative">
                                                            <img class="profile-listing-img"
                                                                src="assets/sellers/27907/16316687952073267.webp" alt="">

                                                            <div class="d-block position-absolute pb-1"
                                                                style="bottom: 0; left: 10px;line-height: 1.2;">
                                                                <div class="text-white font-80 font-w-600 p-0 m-0">influencers
                                                                    Name</div>
                                                                <div class="text-white font-75 font-w-300 p-0 m-0">Address,
                                                                    District, State</div>
                                                            </div>
                                                        </div>
                                                        <div class="project-details">
                                                            <div class="d-flex justify-content-between">
                                                                <span class="font-90 text-gray-light">Instagram</span>
                                                                <span class="text-black"><b>₹1100</b></span>
                                                            </div>
                                                            <div class="text-reduce font-90 font-w-300 text-gray-1"> Fashion
                                                                &amp; Lifestyle Content Creator Fashion &amp; Lifestyl</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .nk-block -->


                            <div class="nk-block mb-4">
                                <div class="nk-block mb-3">
                                    <article class="entry">
                                        <h3 class="mb-0 pb-0">Categories</h3>

                                    </article>
                                </div><!-- .nk-block -->
                                <div class="listing-row mb-4">
                                    <div class="profile-listing-holder custom-col-4 m-0 mb-4"
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
                                                            <h5 class="text-white pb-2">Label</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-listing-holder custom-col-4 m-0 mb-4"
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
                                                            <h5 class="text-white pb-2">Label</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-listing-holder custom-col-4 m-0 mb-4"
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
                                                            <h5 class="text-white pb-2">Label</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-listing-holder custom-col-4 m-0 mb-4"
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
                                                            <h5 class="text-white pb-2">Label</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                        <img class="partner-img" src="assets/websiteImages/creatorMarketplace/logos/buzzfeed.svg"
                                            alt="Buzzfeed logo" loading="lazy">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-2 col-lg-2 logo-holder">
                                        <img class="partner-img" src="assets/websiteImages/creatorMarketplace/logos/bloomberg.svg"
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



                            <div class="nk-block mb-4">
                                <div class="nk-block mb-3">
                                    <article class="entry">
                                        <h3 class="mb-0 pb-0">How Collabstr Works</h3>
                                        <div class="d-flex justify-content-between">
                                            <p class="text-gray p-0 m-0 ">Everything you need to run your influencer campaigns,
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
                                                            src="assets/websiteImages/creatorMarketplace/step1.png" alt="">
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
                                                            src="assets/websiteImages/creatorMarketplace/step3.png" alt="">
                                                        <div class="d-block position-absolute pb-1 px-1"
                                                            style="bottom: 0; left: 10px;line-height: 1.2;">
                                                            <h5 class="text-white">2</h5>
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
                                                            src="assets/websiteImages/creatorMarketplace/step2.png" alt="">
                                                        <div class="d-block position-absolute pb-1 px-1"
                                                            style="bottom: 0; left: 10px;line-height: 1.2;">
                                                            <h5 class="text-white">3</h5>
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
                                                            <h4 style="font-size: 2rem;"><b><em
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
                                                            <h4 style="font-size: 2rem;"><b><em
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
                                                            <h4 style="font-size: 2rem;"><b><em
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
                                                            <h4 style="font-size: 2rem;"><b><em
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
                                        <h3 class="mb-0 pb-0">Trusted by 30,000+ Brands</h3>
                                        <div class="d-flex justify-content-between">
                                            <p class="text-gray p-0 m-0 ">View collaborations from brands like Wealthsimple,
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
                                        <img class="partner-img" src="assets/websiteImages/creatorMarketplace/logos/wealthsimple.svg"
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
                                                <a href="case-study.html">
                                                    <div class="profile-listing-img-holder position-relative"
                                                        style="height: 332px;">
                                                        <img class="profile-listing-img"
                                                            src="caseStudies/wealthsimple/header.jpg" alt="">
                                                        <div class="d-block position-absolute pb-1 px-1"
                                                            style="bottom: 0; left: 10px;line-height: 1.2;">
                                                            <div class="similar-post-title mb-2">Wealthsimple Launches
                                                                'Wealthsimple Cash' With Instagram and TikTok Influencers on
                                                                Collabstr</div>
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
                                                <a href="case-study.html">
                                                    <div class="profile-listing-img-holder position-relative"
                                                        style="height: 332px;">
                                                        <img class="profile-listing-img" src="caseStudies/numi/header.jpg"
                                                            alt="">
                                                        <div class="d-block position-absolute pb-1 px-1"
                                                            style="bottom: 0; left: 10px;line-height: 1.2;">
                                                            <div class="similar-post-title mb-2">Wealthsimple Launches
                                                                'Wealthsimple Cash' With Instagram and TikTok Influencers on
                                                                Collabstr</div>
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
                                                <a href="case-study.html">
                                                    <div class="profile-listing-img-holder position-relative"
                                                        style="height: 332px;">
                                                        <img class="profile-listing-img" src="caseStudies/mcfadden/header.jpg"
                                                            alt="">
                                                        <div class="d-block position-absolute pb-1 px-1"
                                                            style="bottom: 0; left: 10px;line-height: 1.2;">
                                                            <div class="similar-post-title mb-2">Wealthsimple Launches
                                                                'Wealthsimple Cash' With Instagram and TikTok Influencers on
                                                                Collabstr</div>
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
                                                            <div class="testimonial-title p-0 m-0 mt-2">5 stars from a creator
                                                                and a brand</div>
                                                            <div class="testimonial-txt mb-2">I've used Collabstr from both the
                                                                Creator side and the Brand side! It is extremely user-friendly
                                                                and has lead to some great relationships with creators/brands I
                                                                wouldn't have been connected to otherwise. Love the platform!
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



                        <div class="nk-block my-4">
                            <div class="nk-block mb-3">
                                <article class="entry">
                                    <h3 class="mb-0 pb-0">YouTube</h3>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-gray p-0 m-0 ">Hire YouTube influencers</p>
                                        <span class="text-black"><b>see all</b></span>
                                    </div>
                                </article>
                            </div><!-- .nk-block -->
                            <div class="listing-row">
                                <div class="profile-listing-holder custom-col-4 m-0" style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0">
                                        <div class="card-inner p-0">
                                            <a href="influencer-details.html">
                                                <div class="project">
                                                    <div class="profile-listing-img-holder position-relative">
                                                        <img class="profile-listing-img"
                                                            src="assets/sellers/95147/16908134308909397.webp" alt="">

                                                        <div class="d-block position-absolute pb-1"
                                                            style="bottom: 0; left: 10px;line-height: 1.2;">
                                                            <div class="text-white font-80 font-w-600 p-0 m-0">influencers Name
                                                            </div>
                                                            <div class="text-white font-75 font-w-300 p-0 m-0">Address,
                                                                District, State</div>
                                                        </div>
                                                    </div>
                                                    <div class="project-details">
                                                        <div class="d-flex justify-content-between">
                                                            <span class="font-90 text-gray-light">Instagram</span>
                                                            <span class="text-black"><b>₹1100</b></span>
                                                        </div>
                                                        <div class="text-reduce font-90 font-w-300 text-gray-1"> Fashion &amp;
                                                            Lifestyle Content Creator Fashion &amp; Lifestyl</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-listing-holder custom-col-4 m-0" style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0">
                                        <div class="card-inner p-0">
                                            <a href="influencer-details.html">
                                                <div class="project">
                                                    <div class="profile-listing-img-holder position-relative">
                                                        <img class="profile-listing-img"
                                                            src="assets/sellers/39738/16437989097996066.webp" alt="">

                                                        <div class="d-block position-absolute pb-1"
                                                            style="bottom: 0; left: 10px;line-height: 1.2;">
                                                            <div class="text-white font-80 font-w-600 p-0 m-0">influencers Name
                                                            </div>
                                                            <div class="text-white font-75 font-w-300 p-0 m-0">Address,
                                                                District, State</div>
                                                        </div>
                                                    </div>
                                                    <div class="project-details">
                                                        <div class="d-flex justify-content-between">
                                                            <span class="font-90 text-gray-light">Instagram</span>
                                                            <span class="text-black"><b>₹1100</b></span>
                                                        </div>
                                                        <div class="text-reduce font-90 font-w-300 text-gray-1"> Fashion &amp;
                                                            Lifestyle Content Creator Fashion &amp; Lifestyl</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-listing-holder custom-col-4 m-0" style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0">
                                        <div class="card-inner p-0">
                                            <a href="influencer-details.html">
                                                <div class="project">
                                                    <div class="profile-listing-img-holder position-relative">
                                                        <img class="profile-listing-img"
                                                            src="https://d5ik1gor6xydq.cloudfront.net/assets/sellers/23325/16276282775204651.webp"
                                                            alt="">

                                                        <div class="d-block position-absolute pb-1"
                                                            style="bottom: 0; left: 10px;line-height: 1.2;">
                                                            <div class="text-white font-80 font-w-600 p-0 m-0">influencers Name
                                                            </div>
                                                            <div class="text-white font-75 font-w-300 p-0 m-0">Address,
                                                                District, State</div>
                                                        </div>
                                                    </div>
                                                    <div class="project-details">
                                                        <div class="d-flex justify-content-between">
                                                            <span class="font-90 text-gray-light">Instagram</span>
                                                            <span class="text-black"><b>₹1100</b></span>
                                                        </div>
                                                        <div class="text-reduce font-90 font-w-300 text-gray-1"> Fashion &amp;
                                                            Lifestyle Content Creator Fashion &amp; Lifestyl</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-listing-holder custom-col-4 m-0" style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0">
                                        <div class="card-inner p-0">
                                            <a href="influencer-details.html">
                                                <div class="project">
                                                    <div class="profile-listing-img-holder position-relative">
                                                        <img class="profile-listing-img"
                                                            src="assets/websiteImages/creatorMarketplace/step3.png" alt="">

                                                        <div class="d-block position-absolute pb-1"
                                                            style="bottom: 0; left: 10px;line-height: 1.2;">
                                                            <div class="text-white font-80 font-w-600 p-0 m-0">influencers Name
                                                            </div>
                                                            <div class="text-white font-75 font-w-300 p-0 m-0">Address,
                                                                District, State</div>
                                                        </div>
                                                    </div>
                                                    <div class="project-details">
                                                        <div class="d-flex justify-content-between">
                                                            <span class="font-90 text-gray-light">Instagram</span>
                                                            <span class="text-black"><b>₹1100</b></span>
                                                        </div>
                                                        <div class="text-reduce font-90 font-w-300 text-gray-1"> Fashion &amp;
                                                            Lifestyle Content Creator Fashion &amp; Lifestyl</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .nk-block -->



                        <div class="nk-block my-4">
                            <div class="nk-block mb-3">
                                <article class="entry">
                                    <h3 class="mb-0 pb-0">User Generated Content</h3>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-gray p-0 m-0 ">Purchase high-quality UGC</p>
                                        <span class="text-black"><b>see all</b></span>
                                    </div>
                                </article>
                            </div><!-- .nk-block -->
                            <div class="listing-row">
                                <div class="profile-listing-holder custom-col-4 m-0" style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0">
                                        <div class="card-inner p-0">
                                            <a href="influencer-details.html">
                                                <div class="project">
                                                    <div class="profile-listing-img-holder position-relative">
                                                        <img class="profile-listing-img"
                                                            src="assets/sellers/31479/16348480239917421.webp" alt="">

                                                        <div class="d-block position-absolute pb-1"
                                                            style="bottom: 0; left: 10px;line-height: 1.2;">
                                                            <div class="text-white font-80 font-w-600 p-0 m-0">influencers Name
                                                            </div>
                                                            <div class="text-white font-75 font-w-300 p-0 m-0">Address,
                                                                District, State</div>
                                                        </div>
                                                    </div>
                                                    <div class="project-details">
                                                        <div class="d-flex justify-content-between">
                                                            <span class="font-90 text-gray-light">Instagram</span>
                                                            <span class="text-black"><b>₹1100</b></span>
                                                        </div>
                                                        <div class="text-reduce font-90 font-w-300 text-gray-1"> Fashion &amp;
                                                            Lifestyle Content Creator Fashion &amp; Lifestyl</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-listing-holder custom-col-4 m-0" style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0">
                                        <div class="card-inner p-0">
                                            <a href="influencer-details.html">
                                                <div class="project">
                                                    <div class="profile-listing-img-holder position-relative">
                                                        <img class="profile-listing-img"
                                                            src="assets/sellers/20464/16276278252202716.webp" alt="">

                                                        <div class="d-block position-absolute pb-1"
                                                            style="bottom: 0; left: 10px;line-height: 1.2;">
                                                            <div class="text-white font-80 font-w-600 p-0 m-0">influencers Name
                                                            </div>
                                                            <div class="text-white font-75 font-w-300 p-0 m-0">Address,
                                                                District, State</div>
                                                        </div>
                                                    </div>
                                                    <div class="project-details">
                                                        <div class="d-flex justify-content-between">
                                                            <span class="font-90 text-gray-light">Instagram</span>
                                                            <span class="text-black"><b>₹1100</b></span>
                                                        </div>
                                                        <div class="text-reduce font-90 font-w-300 text-gray-1"> Fashion &amp;
                                                            Lifestyle Content Creator Fashion &amp; Lifestyl</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-listing-holder custom-col-4 m-0" style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0">
                                        <div class="card-inner p-0">
                                            <a href="influencer-details.html">
                                                <div class="project">
                                                    <div class="profile-listing-img-holder position-relative">
                                                        <img class="profile-listing-img"
                                                            src="assets/sellers/34913/16393944646583931.webp" alt="">

                                                        <div class="d-block position-absolute pb-1"
                                                            style="bottom: 0; left: 10px;line-height: 1.2;">
                                                            <div class="text-white font-80 font-w-600 p-0 m-0">influencers Name
                                                            </div>
                                                            <div class="text-white font-75 font-w-300 p-0 m-0">Address,
                                                                District, State</div>
                                                        </div>
                                                    </div>
                                                    <div class="project-details">
                                                        <div class="d-flex justify-content-between">
                                                            <span class="font-90 text-gray-light">Instagram</span>
                                                            <span class="text-black"><b>₹1100</b></span>
                                                        </div>
                                                        <div class="text-reduce font-90 font-w-300 text-gray-1"> Fashion &amp;
                                                            Lifestyle Content Creator Fashion &amp; Lifestyl</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-listing-holder custom-col-4 m-0" style="padding: 0 0.5rem !important;">
                                    <div class="card h-100 p-0">
                                        <div class="card-inner p-0">
                                            <a href="influencer-details.html">
                                                <div class="project">
                                                    <div class="profile-listing-img-holder position-relative">
                                                        <img class="profile-listing-img"
                                                            src="assets/sellers/94644/16904957779267836.webp" alt="">

                                                        <div class="d-block position-absolute pb-1"
                                                            style="bottom: 0; left: 10px;line-height: 1.2;">
                                                            <div class="text-white font-80 font-w-600 p-0 m-0">influencers Name
                                                            </div>
                                                            <div class="text-white font-75 font-w-300 p-0 m-0">Address,
                                                                District, State</div>
                                                        </div>
                                                    </div>
                                                    <div class="project-details">
                                                        <div class="d-flex justify-content-between">
                                                            <span class="font-90 text-gray-light">Instagram</span>
                                                            <span class="text-black"><b>₹1100</b></span>
                                                        </div>
                                                        <div class="text-reduce font-90 font-w-300 text-gray-1"> Fashion &amp;
                                                            Lifestyle Content Creator Fashion &amp; Lifestyl</div>
                                                    </div>
                                                </div>
                                            </a>
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
                                                <h6 class="title">What is Influencer Marketing?</h6>
                                                <span class="accordion-icon"></span>
                                            </a>
                                            <div class="accordion-body collapse" id="accordion-item-1-1"
                                                data-parent="#accordion-1">
                                                <div class="accordion-inner">
                                                    <p>Influencer marketing is a digital marketing strategy that involves
                                                        collaborating with individuals, known as influencers, who have a
                                                        dedicated and engaged following on social media platforms and other
                                                        online channels. These influencers can impact their followers'
                                                        purchasing decisions due to their credibility and authority in specific
                                                        niches or industries. Brands partner with influencers to promote their
                                                        products or services authentically, build social proof, and leverage
                                                        their influence to reach a larger and more targeted audience.</p>
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
                                                    <p>Influencer marketing operates by identifying suitable influencers for
                                                        your brand, establishing a partnership, and creating and distributing
                                                        content through the influencer's channels. This content can take various
                                                        forms, including sponsored posts, reviews, tutorials, or endorsements.
                                                        The influencer shares this content with their audience, effectively
                                                        introducing your brand or product to a potentially receptive and <a
                                                            href="https://collabstr.com/tiktok-engagement-rate-calculator"
                                                            target="_blank">engaged audience</a>. The key to successful
                                                        influencer marketing lies in crafting authentic and relevant content
                                                        that resonates with both the influencer's followers and your brand's
                                                        message.
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
                                                    <p>Influencer marketing is important because it enables brands to connect
                                                        with their target audience in a more genuine and engaging manner. Unlike
                                                        traditional advertising, influencer marketing feels less intrusive and
                                                        more trustworthy, as recommendations come from a trusted source. It
                                                        helps build brand awareness, improve credibility, drive traffic, boost
                                                        sales, and foster lasting customer relationships.
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
                                                        Start by identifying your target audience and the platforms they use.
                                                        Then, use the Collabstr influencer marketing tool to <a
                                                            href="https://collabstr.com/search-influencers"
                                                            target="_blank">search for influencers</a> within your niche. Use
                                                        the gender, price, location, and other filters to narrow down relevant
                                                        influencers as much as possible. Once you find an influencer that you’re
                                                        interested in working with, you can simply purchase one of their
                                                        pre-defined content packages, or send them a custom offer directly
                                                        through their profile.
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
                                                        The cost of influencer marketing varies widely depending on factors such
                                                        as the influencer's reach, niche, and <a
                                                            href="https://collabstr.com/instagram-engagement-rate-calculator"
                                                            target="_blank">engagement rates</a>. Micro-influencers with
                                                        smaller followings may charge less than macro-influencers or
                                                        celebrities. Some influencers may work on a per-post basis, while others
                                                        prefer ongoing partnerships. If you have a budget in mind, consider
                                                        using the price filters found in Collabstr’s search tool to narrow down
                                                        the influencers that fit within your budget, this will save you time
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
                                                <h6 class="title">What Are the Different Types of Influencer Marketing
                                                    Campaigns?</h6>
                                                <span class="accordion-icon"></span>
                                            </a>
                                            <div class="accordion-body collapse" id="accordion-item-1-6"
                                                data-parent="#accordion-6">
                                                <div class="accordion-inner">
                                                    <p>
                                                        Influencer marketing can accommodate various campaign types, including
                                                        product reviews, sponsored posts, takeovers, giveaways, and affiliate
                                                        marketing. The type of campaign you choose should align with your goals
                                                        and the influencer's strengths. You can use a <a
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
                                                        To measure the success of an influencer marketing campaign, you can
                                                        track key performance indicators (KPIs) such as click-through rates,
                                                        conversions, and return on investment (ROI). Typically, this tracking
                                                        would be done through your own means, such as a discount code or unique
                                                        link that is used to track the influencer’s impact on your side. Keep in
                                                        mind that a large part of influencer marketing is social proof and
                                                        social awareness, so many viewers may see your product and navigate to
                                                        your website through other methods besides clicking the influencer’s
                                                        link directly. Additionally, you can gather feedback from the influencer
                                                        and analyze audience sentiment to gauge the campaign's impact on brand
                                                        perception.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="accordion-8" class="accordion accordion-s2">
                                        <div class="accordion-item border-b my-5 pb-4">
                                            <a href="#" class="accordion-head collapsed" data-toggle="collapse"
                                                data-target="#accordion-item-1-8">
                                                <h6 class="title">What Are the Common Mistakes to Avoid in Influencer
                                                    Marketing?</h6>
                                                <span class="accordion-icon"></span>
                                            </a>
                                            <div class="accordion-body collapse" id="accordion-item-1-8"
                                                data-parent="#accordion-8">
                                                <div class="accordion-inner">
                                                    <p>
                                                        Common mistakes in influencer marketing include failing to define clear
                                                        campaign objectives and expectations and neglecting to communicate
                                                        changes in objectives, timelines, and other aspects that affect the
                                                        outcome of the campaign. Another major downfall to many influencer
                                                        marketing campaigns is the expectation that every campaign is going to
                                                        hit your KPIs when in reality, brands should focus on collecting
                                                        feedback and data so that they can constantly iterate on campaign
                                                        objectives and angles until they hit their desired KPIs.
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
                                                <a href="influencers.html">
                                                    <div class="btn cta-btn font-100 py-3 px-4 mt-2">Search Influencers</div>
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
        <!-- content @e -->
    @endsection
