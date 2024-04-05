@extends('layouts.main')

@section('main-section')
    <!-- content @s
        -->
        <div class="nk-content main-outer-container mt-0">
            <div class="container-fluid">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-content-wrap">
                            <div class="nk-block-head nk-block-head-lg pb-0">
                                <div class="hero-holder">
                                    <h1 class="hero-title"> Food &amp; Drink Influencer Price Calculator</h1>
                                    <h2 class="hero-subtitle">Calculate how much you should charge or pay for sponsored content
                                        on Instagram, TikTok &amp; YouTube based on 150,000+ influencer rates</h2>
                                    <div class="price">$<span id="rate-show">320</span> <span class="mt-2"
                                            style="font-size: 17px">*</span></div>



                                    <form class="search-form-holder" method="get" action="">
                                        <div class="search-holder">
                                            <div class="filter-section">
                                                <div class="filter-title">Platform</div>
                                                <div class="filter-placeholder">All</div>
                                                <div class="filter-dropdown-holder" style="display: none;">
                                                    <div class="filter-dropdown-option filter-dropdown-option-selected"
                                                        data-id="">All</div>
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

                                            <div class="filter-section">
                                                <div class="filter-title">Category</div>
                                                <div class="filter-placeholder">Food &amp; Drink</div>
                                                <div class="filter-dropdown-holder" style="display: none;">
                                                    <div class="filter-dropdown-option" data-id="">Any</div>
                                                    <div class="filter-dropdown-option" data-id="lifestyle">Lifestyle</div>
                                                    <div class="filter-dropdown-option" data-id="fashion">Fashion</div>
                                                    <div class="filter-dropdown-option" data-id="beauty">Beauty</div>
                                                    <div class="filter-dropdown-option" data-id="travel">Travel</div>
                                                    <div class="filter-dropdown-option" data-id="health &amp; fitness">Health
                                                        &amp; Fitness</div>
                                                    <div class="filter-dropdown-option" data-id="comedy &amp; entertainment">
                                                        Comedy &amp; Entertainment</div>
                                                    <div class="filter-dropdown-option filter-dropdown-option-selected"
                                                        data-id="food &amp; drink">Food &amp; Drink</div>
                                                    <div class="filter-dropdown-option" data-id="model">Model</div>
                                                    <div class="filter-dropdown-option" data-id="art &amp; photography">Art
                                                        &amp; Photography</div>
                                                    <div class="filter-dropdown-option" data-id="family &amp; children">Family
                                                        &amp; Children</div>
                                                    <div class="filter-dropdown-option" data-id="music &amp; dance">Music &amp;
                                                        Dance</div>
                                                    <div class="filter-dropdown-option" data-id="animals &amp; pets">Animals
                                                        &amp; Pets</div>
                                                    <div class="filter-dropdown-option" data-id="adventure &amp; outdoors">
                                                        Adventure &amp; Outdoors</div>
                                                    <div class="filter-dropdown-option" data-id="education">Education</div>
                                                    <div class="filter-dropdown-option" data-id="entrepreneur &amp; business">
                                                        Entrepreneur &amp; Business</div>
                                                    <div class="filter-dropdown-option" data-id="athlete &amp; sports">Athlete
                                                        &amp; Sports</div>
                                                    <div class="filter-dropdown-option" data-id="lgbtq2+">LGBTQ2+</div>
                                                    <div class="filter-dropdown-option" data-id="vegan">Vegan</div>
                                                    <div class="filter-dropdown-option" data-id="gaming">Gaming</div>
                                                    <div class="filter-dropdown-option" data-id="technology">Technology</div>
                                                    <div class="filter-dropdown-option" data-id="actor">Actor</div>
                                                    <div class="filter-dropdown-option" data-id="healthcare">Healthcare</div>
                                                    <div class="filter-dropdown-option" data-id="cannabis">Cannabis</div>
                                                    <div class="filter-dropdown-option" data-id="skilled trades">Skilled Trades
                                                    </div>
                                                    <div class="filter-dropdown-option" data-id="automotive">Automotive</div>
                                                    <div class="filter-dropdown-option"
                                                        data-id="celebrity &amp; public figure">Celebrity &amp; Public Figure
                                                    </div>

                                                </div>

                                                <select class="mobile-select-dropdown">
                                                    <option value="">Any</option>
                                                    <option value="lifestyle">Lifestyle</option>
                                                    <option value="fashion">Fashion</option>
                                                    <option value="beauty">Beauty</option>
                                                    <option value="travel">Travel</option>
                                                    <option value="health &amp; fitness">Health &amp; Fitness</option>
                                                    <option value="comedy &amp; entertainment">Comedy &amp; Entertainment
                                                    </option>
                                                    <option value="food &amp; drink">Food &amp; Drink</option>
                                                    <option value="model">Model</option>
                                                    <option value="art &amp; photography">Art &amp; Photography</option>
                                                    <option value="family &amp; children">Family &amp; Children</option>
                                                    <option value="music &amp; dance">Music &amp; Dance</option>
                                                    <option value="animals &amp; pets">Animals &amp; Pets</option>
                                                    <option value="adventure &amp; outdoors">Adventure &amp; Outdoors</option>
                                                    <option value="education">Education</option>
                                                    <option value="entrepreneur &amp; business">Entrepreneur &amp; Business
                                                    </option>
                                                    <option value="athlete &amp; sports">Athlete &amp; Sports</option>
                                                    <option value="lgbtq2+">LGBTQ2+</option>
                                                    <option value="vegan">Vegan</option>
                                                    <option value="gaming">Gaming</option>
                                                    <option value="technology">Technology</option>
                                                    <option value="actor">Actor</option>
                                                    <option value="healthcare">Healthcare</option>
                                                    <option value="cannabis">Cannabis</option>
                                                    <option value="skilled trades">Skilled Trades</option>
                                                    <option value="automotive">Automotive</option>
                                                    <option value="celebrity &amp; public figure">Celebrity &amp; Public Figure
                                                    </option>
                                                </select>
                                                <input type="hidden" name="c" value="food &amp; drink">
                                            </div>

                                            <div class="filter-seperator"></div>

                                            <div class="filter-section">
                                                <div class="filter-title">Followers</div>
                                                <div class="filter-placeholder">Any</div>
                                                <div class="filter-dropdown-holder" style="display: none;">
                                                    <div class="filter-dropdown-option filter-dropdown-option-selected"
                                                        data-id="">Any</div>
                                                    <div class="filter-dropdown-option" data-id="0-1k">0-1k</div>
                                                    <div class="filter-dropdown-option" data-id="1k-10k">1k-10k</div>
                                                    <div class="filter-dropdown-option" data-id="10k-50k">10k-50k</div>
                                                    <div class="filter-dropdown-option" data-id="50k-100k">50k-100k</div>
                                                    <div class="filter-dropdown-option" data-id="100k-500k">100k-500k</div>
                                                    <div class="filter-dropdown-option" data-id="500k-1m">500k-1m</div>
                                                    <div class="filter-dropdown-option" data-id="1m-5m">1m-5m</div>
                                                    <div class="filter-dropdown-option" data-id="5m-10m">5m-10m</div>
                                                    <div class="filter-dropdown-option" data-id="10m+">10m+</div>
                                                </div>

                                                <select class="mobile-select-dropdown">
                                                    <option value="">Any</option>
                                                    <option value="0-1k">0-1k</option>
                                                    <option value="1k-10k">1k-10k</option>
                                                    <option value="10k-50k">10k-50k</option>
                                                    <option value="50k-100k">50k-100k</option>
                                                    <option value="100k-500k">100k-500k</option>
                                                    <option value="500k-1m">500k-1m</option>
                                                    <option value="1m-5m">1m-5m</option>
                                                    <option value="5m-10m">5m-10m</option>
                                                    <option value="10m+">10m+</option>
                                                </select>
                                                <input type="hidden" name="f" value="">
                                            </div>

                                            <button type="button" class="search-btn">Calculate</button>
                                        </div>
                                    </form>
                                    <h3 class="disclaimer">*Food &amp; Drink Influencers on average charge $320 for a
                                        sponsorship</h3>
                                </div>
                            </div>
                            <div class="nk-block">

                                <div class="nk-block nk-block-lg mb-5 pb-5">
                                    <div class="card mb-5">
                                        <div class="card-inner p-0 m-0">
                                            <div class="cta-holder">
                                                <div class="cta-overlay-holder">
                                                    <div class="cta-txt-holder">
                                                        <h2 class="cta-title text-white">Find and Hire Influencers</h2>
                                                        <h3 class="cta-txt text-white">Search Instagram, TikTok, and YouTube
                                                            influencers.</h3>
                                                        <div class="btn cta-btn font-100 py-3 px-4 mt-2">Search Influencers
                                                        </div>
                                                    </div>
                                                </div>
                                                <img loading="lazy" alt="top influencers" class="cta-img"
                                                    src="assets/images/cta.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .nk-block -->



                            <div class="nk-block mb-4">
                                <div class="nk-block mb-3">
                                    <article class="entry">
                                        <h3 class="mb-0 pb-0">How Our Influencer Pricing Calculator Works</h3>
                                        <div class="d-flex justify-content-between">
                                            <p class="text-gray p-0 m-0">Everything you need to run your influencer campaigns,
                                                and more.</p>

                                        </div>
                                    </article>
                                </div><!-- .nk-block -->
                                <div class="row mb-4">
                                    <div class="profile-listing-holder case-parent-div col-sm-12 col-md-6 col-lg-4 m-0 mb-4"
                                        style="padding: 0 0.5rem !important;">
                                        <div class="card w-400 h-100 p-0">
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
                                                                Instagram, TikTok, and YouTube influencers.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-listing-holder case-parent-div col-sm-12 col-md-6 col-lg-4 m-0 mb-4"
                                        style="padding: 0 0.5rem !important;">
                                        <div class="card w-400 h-100 p-0">
                                            <div class="card-inner p-0">
                                                <div class="project">
                                                    <div class="profile-listing-img-holder position-relative"
                                                        style="height: 220px;">
                                                        <img class="profile-listing-img img-gradient"
                                                            src="assets/websiteImages/creatorMarketplace/step1.png" alt="">
                                                        <div class="d-block position-absolute pb-1 px-1"
                                                            style="bottom: 0; left: 10px;line-height: 1.2;">
                                                            <h5 class="text-white">2</h5>
                                                            <div class="text-white font-135 font-w-600 p-0 m-0">Search
                                                                Influencers</div>
                                                            <div class="step-txt mb-2">Search through thousands of vetted
                                                                Instagram, TikTok, and YouTube influencers.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-listing-holder case-parent-div col-sm-12 col-md-6 col-lg-4 m-0 mb-4"
                                        style="padding: 0 0.5rem !important;">
                                        <div class="card w-400 h-100 p-0">
                                            <div class="card-inner p-0">
                                                <div class="project">
                                                    <div class="profile-listing-img-holder position-relative"
                                                        style="height: 220px;">
                                                        <img class="profile-listing-img img-gradient"
                                                            src="assets/websiteImages/creatorMarketplace/step1.png" alt="">
                                                        <div class="d-block position-absolute pb-1 px-1"
                                                            style="bottom: 0; left: 10px;line-height: 1.2;">
                                                            <h5 class="text-white">3</h5>
                                                            <div class="text-white font-135 font-w-600 p-0 m-0">Search
                                                                Influencers</div>
                                                            <div class="step-txt mb-2">Search through thousands of vetted
                                                                Instagram, TikTok, and YouTube influencers.</div>
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
                                        <h3 class="mb-0 pb-0">What Similar Influencers Are Charging</h3>
                                        <div class="d-flex justify-content-between">
                                            <p class="text-gray p-0 m-0">See what influencers charge for sponsored content</p>
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
                                    <div class="profile-listing-holder custom-col-4 m-0"
                                        style="padding: 0 0.5rem !important;">
                                        <div class="card h-100 p-0">
                                            <div class="card-inner p-0">
                                                <a href="influencer-details.html">
                                                    <div class="project">
                                                        <div class="profile-listing-img-holder position-relative">
                                                            <img class="profile-listing-img"
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
                                    <div class="profile-listing-holder custom-col-4 m-0"
                                        style="padding: 0 0.5rem !important;">
                                        <div class="card h-100 p-0">
                                            <div class="card-inner p-0">
                                                <a href="influencer-details.html">
                                                    <div class="project">
                                                        <div class="profile-listing-img-holder position-relative">
                                                            <img class="profile-listing-img"
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
                                                            <img class="profile-listing-img"
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
                                                            purchasing decisions due to their credibility and authority in
                                                            specific niches or industries. Brands partner with influencers to
                                                            promote their products or services authentically, build social
                                                            proof, and leverage their influence to reach a larger and more
                                                            targeted audience.</p>
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
                                                            your brand, establishing a partnership, and creating and
                                                            distributing content through the influencer's channels. This content
                                                            can take various forms, including sponsored posts, reviews,
                                                            tutorials, or endorsements. The influencer shares this content with
                                                            their audience, effectively introducing your brand or product to a
                                                            potentially receptive and <a
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
                                                        <p>Influencer marketing is important because it enables brands to
                                                            connect with their target audience in a more genuine and engaging
                                                            manner. Unlike traditional advertising, influencer marketing feels
                                                            less intrusive and more trustworthy, as recommendations come from a
                                                            trusted source. It helps build brand awareness, improve credibility,
                                                            drive traffic, boost sales, and foster lasting customer
                                                            relationships.
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
                                                            Start by identifying your target audience and the platforms they
                                                            use. Then, use the Collabstr influencer marketing tool to <a
                                                                href="https://collabstr.com/search-influencers"
                                                                target="_blank">search for influencers</a> within your niche.
                                                            Use the gender, price, location, and other filters to narrow down
                                                            relevant influencers as much as possible. Once you find an
                                                            influencer that you’re interested in working with, you can simply
                                                            purchase one of their pre-defined content packages, or send them a
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
                                                            The cost of influencer marketing varies widely depending on factors
                                                            such as the influencer's reach, niche, and <a
                                                                href="https://collabstr.com/instagram-engagement-rate-calculator"
                                                                target="_blank">engagement rates</a>. Micro-influencers with
                                                            smaller followings may charge less than macro-influencers or
                                                            celebrities. Some influencers may work on a per-post basis, while
                                                            others prefer ongoing partnerships. If you have a budget in mind,
                                                            consider using the price filters found in Collabstr’s search tool to
                                                            narrow down the influencers that fit within your budget, this will
                                                            save you time during the influencer discovery process.
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
                                                            Influencer marketing can accommodate various campaign types,
                                                            including product reviews, sponsored posts, takeovers, giveaways,
                                                            and affiliate marketing. The type of campaign you choose should
                                                            align with your goals and the influencer's strengths. You can use a
                                                            <a href="https://collabstr.com/influencer-campaign-brief-template"
                                                                target="_blank">campaign brief template</a> like the one
                                                            offered by Collabstr to ensure that you have a well-thought-out
                                                            campaign brief that encapsulates all the important details required
                                                            to have a successful influencer marketing campaign.
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
                                                            conversions, and return on investment (ROI). Typically, this
                                                            tracking would be done through your own means, such as a discount
                                                            code or unique link that is used to track the influencer’s impact on
                                                            your side. Keep in mind that a large part of influencer marketing is
                                                            social proof and social awareness, so many viewers may see your
                                                            product and navigate to your website through other methods besides
                                                            clicking the influencer’s link directly. Additionally, you can
                                                            gather feedback from the influencer and analyze audience sentiment
                                                            to gauge the campaign's impact on brand perception.
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
                                                            Common mistakes in influencer marketing include failing to define
                                                            clear campaign objectives and expectations and neglecting to
                                                            communicate changes in objectives, timelines, and other aspects that
                                                            affect the outcome of the campaign. Another major downfall to many
                                                            influencer marketing campaigns is the expectation that every
                                                            campaign is going to hit your KPIs when in reality, brands should
                                                            focus on collecting feedback and data so that they can constantly
                                                            iterate on campaign objectives and angles until they hit their
                                                            desired KPIs.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .card-preview -->
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content @e -->
        <!-- content @e -->
    @endsection
