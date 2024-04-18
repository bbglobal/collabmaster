@extends('layouts.main')

@push('footer-style')
    <link rel="stylesheet" href="{{ url('assets/css/search.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/moreFilters.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/modal.css') }}">
    {{-- <link rel="stylesheet" href="{{ url('assets/css/location.css') }}"> --}}
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

                                <form class="search-form-holder" method="get" action="{{ route('search.Influencer') }}">
                                    <div class="search-holder">
                                        <div class="filter-section platform-filter-section">
                                            <div class="filter-title">Platform</div>
                                            <div class="js-filter-placeholder filter-placeholder">Choose a platform</div>
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

                                                        <div class="filter-search-input-pop-option" data-id="Actor">Actor</div>

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

                                    <div class="more-filters-btn-holder">


                                        <div class="filters-btn-holder type-filters-btn-holder" style="display:none;">

                                            <div class="filters-btn type-filters-btn ">Content Type<svg viewBox="0 0 32 32"
                                                    class="filters-btn-img">
                                                    <g fill="none">
                                                        <path
                                                            d="m28 12-11.2928932 11.2928932c-.3905243.3905243-1.0236893.3905243-1.4142136 0l-11.2928932-11.2928932">
                                                        </path>
                                                    </g>
                                                </svg></div>
                                            <div class="filters-btn-dropdown">
                                                <div class="filters-btn-dropdown-main">



                                                    <label class="checkbox-holder" data-platform="amazon"
                                                        style="display:none">Livestream
                                                        <input class="filters-btn-dropdown-checkbox" type="checkbox"
                                                            value="livestream" name="t">
                                                        <span class="checkmark"></span>
                                                    </label>



                                                    <label class="checkbox-holder" data-platform="amazon"
                                                        style="display:none">Video
                                                        <input class="filters-btn-dropdown-checkbox" type="checkbox"
                                                            value="video" name="t">
                                                        <span class="checkmark"></span>
                                                    </label>



                                                    <label class="checkbox-holder" data-platform="amazon"
                                                        style="display:none">Photo
                                                        <input class="filters-btn-dropdown-checkbox" type="checkbox"
                                                            value="photo" name="t">
                                                        <span class="checkmark"></span>
                                                    </label>



                                                    <label class="checkbox-holder" data-platform="user generated content"
                                                        style="display:none">Product Video
                                                        <input class="filters-btn-dropdown-checkbox" type="checkbox"
                                                            value="product video" name="t">
                                                        <span class="checkmark"></span>
                                                    </label>



                                                    <label class="checkbox-holder" data-platform="user generated content"
                                                        style="display:none">Product Photo
                                                        <input class="filters-btn-dropdown-checkbox" type="checkbox"
                                                            value="product photo" name="t">
                                                        <span class="checkmark"></span>
                                                    </label>



                                                    <label class="checkbox-holder" data-platform="user generated content"
                                                        style="display:none">Video Ad
                                                        <input class="filters-btn-dropdown-checkbox" type="checkbox"
                                                            value="video ad" name="t">
                                                        <span class="checkmark"></span>
                                                    </label>



                                                    <label class="checkbox-holder" data-platform="user generated content"
                                                        style="display:none">Photo Ad
                                                        <input class="filters-btn-dropdown-checkbox" type="checkbox"
                                                            value="photo ad" name="t">
                                                        <span class="checkmark"></span>
                                                    </label>



                                                    <label class="checkbox-holder" data-platform="user generated content"
                                                        style="display:none">Tutorial
                                                        <input class="filters-btn-dropdown-checkbox" type="checkbox"
                                                            value="tutorial" name="t">
                                                        <span class="checkmark"></span>
                                                    </label>



                                                    <label class="checkbox-holder" data-platform="user generated content"
                                                        style="display:none">Testimonial/Review
                                                        <input class="filters-btn-dropdown-checkbox" type="checkbox"
                                                            value="testimonial/review" name="t">
                                                        <span class="checkmark"></span>
                                                    </label>



                                                    <label class="checkbox-holder" data-platform="user generated content"
                                                        style="display:none">Unboxing
                                                        <input class="filters-btn-dropdown-checkbox" type="checkbox"
                                                            value="unboxing" name="t">
                                                        <span class="checkmark"></span>
                                                    </label>



                                                    <label class="checkbox-holder" data-platform="user generated content"
                                                        style="display:none">Blog
                                                        <input class="filters-btn-dropdown-checkbox" type="checkbox"
                                                            value="blog" name="t">
                                                        <span class="checkmark"></span>
                                                    </label>



                                                    <label class="checkbox-holder" data-platform="instagram"
                                                        style="display:none">Photo Feed Post
                                                        <input class="filters-btn-dropdown-checkbox" type="checkbox"
                                                            value="photo feed post" name="t">
                                                        <span class="checkmark"></span>
                                                    </label>



                                                    <label class="checkbox-holder" data-platform="instagram"
                                                        style="display:none">Reel
                                                        <input class="filters-btn-dropdown-checkbox" type="checkbox"
                                                            value="reel" name="t">
                                                        <span class="checkmark"></span>
                                                    </label>



                                                    <label class="checkbox-holder" data-platform="instagram"
                                                        style="display:none">Story
                                                        <input class="filters-btn-dropdown-checkbox" type="checkbox"
                                                            value="story" name="t">
                                                        <span class="checkmark"></span>
                                                    </label>



                                                    <label class="checkbox-holder" data-platform="instagram"
                                                        style="display:none">Live
                                                        <input class="filters-btn-dropdown-checkbox" type="checkbox"
                                                            value="live" name="t">
                                                        <span class="checkmark"></span>
                                                    </label>



                                                    <label class="checkbox-holder" data-platform="tiktok"
                                                        style="display:none">Video
                                                        <input class="filters-btn-dropdown-checkbox" type="checkbox"
                                                            value="video" name="t">
                                                        <span class="checkmark"></span>
                                                    </label>



                                                    <label class="checkbox-holder" data-platform="tiktok"
                                                        style="display:none">Story
                                                        <input class="filters-btn-dropdown-checkbox" type="checkbox"
                                                            value="story" name="t">
                                                        <span class="checkmark"></span>
                                                    </label>



                                                    <label class="checkbox-holder" data-platform="tiktok"
                                                        style="display:none">Live
                                                        <input class="filters-btn-dropdown-checkbox" type="checkbox"
                                                            value="live" name="t">
                                                        <span class="checkmark"></span>
                                                    </label>



                                                    <label class="checkbox-holder" data-platform="youtube"
                                                        style="display:none">Video
                                                        <input class="filters-btn-dropdown-checkbox" type="checkbox"
                                                            value="video" name="t">
                                                        <span class="checkmark"></span>
                                                    </label>



                                                    <label class="checkbox-holder" data-platform="youtube"
                                                        style="display:none">Short
                                                        <input class="filters-btn-dropdown-checkbox" type="checkbox"
                                                            value="short" name="t">
                                                        <span class="checkmark"></span>
                                                    </label>



                                                    <label class="checkbox-holder" data-platform="youtube"
                                                        style="display:none">Livestream
                                                        <input class="filters-btn-dropdown-checkbox" type="checkbox"
                                                            value="livestream" name="t">
                                                        <span class="checkmark"></span>
                                                    </label>



                                                    <label class="checkbox-holder" data-platform="twitter"
                                                        style="display:none">Tweet
                                                        <input class="filters-btn-dropdown-checkbox" type="checkbox"
                                                            value="tweet" name="t">
                                                        <span class="checkmark"></span>
                                                    </label>



                                                    <label class="checkbox-holder" data-platform="twitter"
                                                        style="display:none">Thread
                                                        <input class="filters-btn-dropdown-checkbox" type="checkbox"
                                                            value="thread" name="t">
                                                        <span class="checkmark"></span>
                                                    </label>



                                                    <label class="checkbox-holder" data-platform="twitter"
                                                        style="display:none">Retweet
                                                        <input class="filters-btn-dropdown-checkbox" type="checkbox"
                                                            value="retweet" name="t">
                                                        <span class="checkmark"></span>
                                                    </label>



                                                    <label class="checkbox-holder" data-platform="twitch"
                                                        style="display:none">Livestream
                                                        <input class="filters-btn-dropdown-checkbox" type="checkbox"
                                                            value="livestream" name="t">
                                                        <span class="checkmark"></span>
                                                    </label>



                                                </div>
                                                <div class="filters-btn-dropdown-footer">
                                                    <div class="clear-btn js-clear-checkboxes">Clear</div>
                                                    <button type="button" class="btn">Save</button>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="filters-btn more-filters-btn followers-filters-btn-holder "
                                            data-id="followers">Followers<svg viewBox="0 0 32 32" class="filters-btn-img">
                                                <g fill="none">
                                                    <path
                                                        d="m28 12-11.2928932 11.2928932c-.3905243.3905243-1.0236893.3905243-1.4142136 0l-11.2928932-11.2928932">
                                                    </path>
                                                </g>
                                            </svg></div>

                                        <div class="filters-btn more-filters-btn " data-id="location">Location<svg
                                                viewBox="0 0 32 32" class="filters-btn-img">
                                                <g fill="none">
                                                    <path
                                                        d="m28 12-11.2928932 11.2928932c-.3905243.3905243-1.0236893.3905243-1.4142136 0l-11.2928932-11.2928932">
                                                    </path>
                                                </g>
                                            </svg></div>

                                        <div class="filters-btn more-filters-btn " data-id="price">Price<svg
                                                viewBox="0 0 32 32" class="filters-btn-img">
                                                <g fill="none">
                                                    <path
                                                        d="m28 12-11.2928932 11.2928932c-.3905243.3905243-1.0236893.3905243-1.4142136 0l-11.2928932-11.2928932">
                                                    </path>
                                                </g>
                                            </svg></div>

                                        <div class="filters-btn-holder">

                                            <div class="filters-btn last-filters-btn ">Gender<svg viewBox="0 0 32 32"
                                                    class="filters-btn-img">
                                                    <g fill="none">
                                                        <path
                                                            d="m28 12-11.2928932 11.2928932c-.3905243.3905243-1.0236893.3905243-1.4142136 0l-11.2928932-11.2928932">
                                                        </path>
                                                    </g>
                                                </svg></div>

                                            <div class="filters-btn-dropdown">
                                                <div class="filters-btn-dropdown-main">
                                                    <select class="input more-filter-select" name="g">

                                                        <option value="">Choose a gender</option>
                                                        <option value="female">Female</option>
                                                        <option value="male">Male</option>
                                                        <option value="other">Other</option>
                                                    </select>
                                                </div>

                                                <div class="filters-btn-dropdown-footer">
                                                    <div class="clear-btn js-clear-select">Clear</div>
                                                    <button type="button" class="btn">Save</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>



                                    <link rel="stylesheet" type="text/css"
                                        href="/static/igmarketplace/components/modal.css?v=3.66">
                                    <link rel="stylesheet" type="text/css"
                                        href="/static/igmarketplace/search/moreFilters.css?v=3.66">

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
                                                    <select id="country-input" class="input more-filter-select"
                                                        name="ct">


                                                        <option value="">Choose a City</option>

                                                        <option value="delhi">Delhi</option>
                                                        <option value="mumbai">Mumbai</option>
                                                        <option value="bangalore">Bangalore</option>
                                                        <option value="kolkata">Kolkata</option>
                                                        <option value="chennai">Chennai</option>
                                                        <option value="hyderabad">Hyderabad</option>
                                                        <option value="pune">Pune</option>
                                                        <option value="ahmedabad">Ahmedabad</option>
                                                        <option value="surat">Surat</option>
                                                        <option value="jaipur">Jaipur</option>
                                                        <option value="kanpur">Kanpur</option>
                                                        <option value="lucknow">Lucknow</option>
                                                        <option value="nagpur">Nagpur</option>
                                                        <option value="patna">Patna</option>
                                                        <option value="indore">Indore</option>
                                                        <option value="thane">Thane</option>
                                                        <option value="bhopal">Bhopal</option>
                                                        <option value="visakhapatnam">Visakhapatnam</option>
                                                        <option value="vadodara">Vadodara</option>
                                                        <option value="firozabad">Firozabad</option>
                                                        <option value="ludhiana">Ludhiana</option>
                                                        <option value="rajkot">Rajkot</option>
                                                        <option value="agra">Agra</option>
                                                        <option value="siliguri">Siliguri</option>
                                                        <option value="nashik">Nashik</option>
                                                        <option value="faridabad">Faridabad</option>
                                                        <option value="patiala">Patiala</option>
                                                        <option value="meerut">Meerut</option>
                                                        <option value="kalyan">Kalyan</option>
                                                        <option value="bareilly">Bareilly</option>
                                                        <option value="varanasi">Varanasi</option>
                                                        <option value="srinagar">Srinagar</option>
                                                        <option value="aurangabad">Aurangabad</option>
                                                        <option value="dhanbad">Dhanbad</option>
                                                        <option value="amritsar">Amritsar</option>
                                                        <option value="navi mumbai">Navi Mumbai</option>
                                                        <option value="allahabad">Allahabad</option>
                                                        <option value="howrah">Howrah</option>
                                                        <option value="gwalior">Gwalior</option>
                                                        <option value="jabalpur">Jabalpur</option>
                                                        <option value="vijayawada">Vijayawada</option>
                                                        <option value="jodhpur">Jodhpur</option>
                                                        <option value="raipur">Raipur</option>
                                                        <option value="kota">Kota</option>
                                                        <option value="guwahati">Guwahati</option>
                                                        <option value="chandigarh">Chandigarh</option>
                                                        <option value="solapur">Solapur</option>
                                                        <option value="hubli">Hubli</option>
                                                        <option value="dharwad">Dharwad</option>
                                                        <option value="bareilly">Bareilly</option>
                                                        <option value="moradabad">Moradabad</option>
                                                        <option value="mysore">Mysore</option>
                                                        <option value="gurgaon">Gurgaon</option>
                                                        <option value="aligarh">Aligarh</option>
                                                        <option value="jalandhar">Jalandhar</option>
                                                        <option value="tiruchirappalli">Tiruchirappalli</option>
                                                        <option value="bhubaneswar">Bhubaneswar</option>
                                                        <option value="salem">Salem</option>
                                                        <option value="mira-bhayandar">Mira-Bhayandar</option>
                                                        <option value="warangal">Warangal</option>
                                                        <option value="thiruvananthapuram">Thiruvananthapuram</option>
                                                        <option value="guntur">Guntur</option>
                                                        <option value="bhiwandi">Bhiwandi</option>
                                                        <option value="saharanpur">Saharanpur</option>
                                                        <option value="gorakhpur">Gorakhpur</option>
                                                        <option value="bikaner">Bikaner</option>
                                                        <option value="amravati">Amravati</option>
                                                        <option value="noida">Noida</option>
                                                        <option value="jamshedpur">Jamshedpur</option>
                                                        <option value="bhilai">Bhilai</option>
                                                        <option value="cuttack">Cuttack</option>
                                                        <option value="firozabad">Firozabad</option>
                                                        <option value="kochi">Kochi</option>
                                                        <option value="nellore">Nellore</option>
                                                        <option value="bhavnagar">Bhavnagar</option>
                                                        <option value="dehradun">Dehradun</option>
                                                        <option value="durgapur">Durgapur</option>
                                                        <option value="asansol">Asansol</option>
                                                        <option value="rourkela">Rourkela</option>
                                                        <option value="allahabad">Allahabad</option>
                                                        <option value="jabalpur">Jabalpur</option>
                                                        <option value="malegaon">Malegaon</option>
                                                        <option value="ghaziabad">Ghaziabad</option>
                                                        <option value="kohima">Kohima</option>
                                                        <option value="baramulla">Baramulla</option>
                                                        <option value="nanded">Nanded</option>
                                                        <option value="uttarpara kotrung">Uttarpara Kotrung</option>

                                                    </select>
                                                </div>

                                                <div class="more-filter-holder more-location-holder">
                                                    <div class="more-filter-title filter-title">Country</div>

                                                    <div id="location-dropdown" class="">
                                                        <input id="location-input" class="input"
                                                            type="text"
                                                            placeholder='City'
                                                            value="India" readonly>
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
                                        <h3 class="mb-0 pb-0">Influencers</h3>
                                    </article>
                                </div><!-- .nk-block -->
                                <div class="row m-0 p-0">

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
                                <div class="nk-block mb-5">
                                    <div class="paginator mb-5">
                                        <a class="pagination-arrow-holder" href="#">
                                            <div>Next Page</div>
                                            <img class="pagination-arrow"
                                                src="{{ url('assets/websiteImages/creatorMarketplace/arrow.svg') }}"
                                                style="margin-left: 8px" loading="lazy">
                                        </a>
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
