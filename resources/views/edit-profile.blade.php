@extends('layouts.main')

@push('footer-style')
    <style>
        #msg-holder {
            display: none;
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

    <link rel="stylesheet" href="{{ url('assets/css/banner.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/edit-profile.css') }}">
    <div id="content">
        <div class="edit-holder">
            <div class="edit-back-btn" onclick="location.href='/profile/{{ Auth::user()->id }}'"><svg class="edit-back-btn-img"
                    viewBox="0 0 24 24" aria-hidden="true">
                    <path
                        d="M19 11H7.83l4.882-4.882a1 1 0 000-1.413h-.005a1 1 0 00-1.408 0L4.705 11.3a1 1 0 000 1.41L11.3 19.3a1 1 0 001.41 0 1 1 0 000-1.41L7.83 13H19a1 1 0 001-1 1 1 0 00-1-1z">
                    </path>
                </svg>Back to Profile</div>

            <h1 class="edit-title">Edit Profile</h1>

            <div class="tabs-holder">
                <div class="tab tab-active" data-tab="1">Details</div>
                <div class="tab" data-tab="2">Social Media</div>
                <div class="tab" data-tab="3">Images</div>
                <div class="tab" data-tab="4">Packages</div>
                <div class="tab" data-tab="5">Portfolio</div>
            </div>

            <div class="form-holder" data-step="1" style="display: block">

                <form class="form form-skinny" method="POST" acction="">
                    @csrf
                    <div class="input-title tooltip">Display Name
                        <div class="tooltip-txt">This is the name that is shown on your profile and to brands when
                            communicating.</div>
                    </div>
                    <input class="input" type="text" name="display_name"
                        placeholder="Name shown on your profile and to brands" minlength="2" maxlength="30"
                        value="{{ $creator->full_name }}" required>

                    <div class="input-title">Location</div>

                    <input class="input" type="text" name="title"
                        placeholder="E.g. Fitness Content Creator & Student Athlete" minlength="10" maxlength="75"
                        value="{{ $creator->bio }}" required>

                    <div class="input-title">Title</div>
                    <input class="input" type="text" name="title"
                        placeholder="E.g. Fitness Content Creator & Student Athlete" minlength="10" maxlength="75"
                        value="{{ $creator->platform }}" required>

                    <div class="input-title">Description</div>
                    <textarea class="input textarea" name="description"
                        placeholder="Who are you? What type of content do you create and you post? Who is your audience? Be specific as this will help you show up in searches"
                        minlength="100" maxlength="800" required>{{ $creator->description }}</textarea>




                    <div class="input-title">Who is your audience?</div>
                    <textarea class="input textarea" name="faq_179629"
                        placeholder="Be thorough with your answer, as this helps brands understand more about you."></textarea>

                    <div class="input-title">What brands have you worked with?</div>
                    <textarea class="input textarea" name="faq_179630"
                        placeholder="Be thorough with your answer, as this helps brands understand more about you."></textarea>


                    <div class="input-title">Gender</div>
                    <select name="gender" class="input">
                        <option value="Female" {{ $creator->genderOption == 'Female' ? 'selected' : '' }}>Female</option>
                        <option value="Male" {{ $creator->genderOption == 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Other" {{ $creator->genderOption == 'Other' ? 'selected' : '' }}>Other</option>
                    </select>

                    <button type="submit" class='submit btn'>Save</button>
                </form>
            </div>

            <div class="form-holder" data-step="2">
                <form class="form form-skinny">
                    @csrf
                    <div class="platform-holder">

                        <div class="input-title">Instagram</div>
                        <div class="platform-option"
                            style="{{ $creator->instagram_username == null ? 'display: flex' : 'display: none' }}">
                            <div class="platform-img"><img
                                    src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/instagram.svg">
                            </div>
                            <div>Add Instagram</div>
                        </div>
                        <div class="input-row"
                            style="{{ $creator->instagram_username != null ? 'display: flex' : 'display: none' }}">
                            <input class="input" type="text" name="instagram_username" placeholder="Instagram Username"
                                value="{{ $creator->instagram_username }}">
                            <select name="instagram_followers" class="input">
                                <option value="0-1k" {{ $creator->instagram_followers == '0-1k' ? 'selected' : '' }}>
                                    0-1k</option>
                                <option value="1k-10k" {{ $creator->instagram_followers == '1k-10k' ? 'selected' : '' }}>
                                    1k-10k</option>
                                <option value="10k-50k"
                                    {{ $creator->instagram_followers == '10k-50k' ? 'selected' : '' }}>10k-50k</option>
                                <option value="50k-100k"
                                    {{ $creator->instagram_followers == '50k-100k' ? 'selected' : '' }}>50k-100k</option>
                                <option value="100k-500k"
                                    {{ $creator->instagram_followers == '100k-500k' ? 'selected' : '' }}>100k-500k</option>
                                <option value="500k-1m"
                                    {{ $creator->instagram_followers == '500k-1m' ? 'selected' : '' }}>500k-1m</option>
                                <option value="1m-5m" {{ $creator->instagram_followers == '1m-5m' ? 'selected' : '' }}>
                                    1m-5m</option>
                                <option value="5m-10m" {{ $creator->instagram_followers == '5m-10m' ? 'selected' : '' }}>
                                    5m-10m</option>
                                <option value="10m+" {{ $creator->instagram_followers == '10m+' ? 'selected' : '' }}>
                                    10m+</option>
                            </select>
                        </div>

                    </div>

                    <div class="platform-holder">
                        <div class="input-title" style="display: none">TikTok</div>
                        <div class="platform-option"
                            style="{{ $creator->tiktok_username == null ? 'display: flex' : 'display: none' }}">
                            <div class="platform-img"><img
                                    src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/tiktok.svg">
                            </div>
                            <div>Add TikTok</div>
                        </div>
                        <div class="input-row"
                            style="{{ $creator->tiktok_username != null ? 'display: flex' : 'display: none' }}">
                            <input class="input" type="text" name="tiktok_username" placeholder="TikTok Username"
                                value="{{ $creator->tiktok_username }}">
                            <select name="tiktok_followers" class="input">
                                <option value="" disabled hidden
                                    {{ $creator->tiktok_followers == null ? 'selected' : '' }}>TikTok Followers</option>
                                <option value="0-1k" {{ $creator->tiktok_followers == '0-1k' ? 'selected' : '' }}>0-1k
                                </option>
                                <option value="1k-10k" {{ $creator->tiktok_followers == '1k-10k' ? 'selected' : '' }}>
                                    1k-10k</option>
                                <option value="10k-50k" {{ $creator->tiktok_followers == '10k-50k' ? 'selected' : '' }}>
                                    10k-50k</option>
                                <option value="50k-100k" {{ $creator->tiktok_followers == '50k-100k' ? 'selected' : '' }}>
                                    50k-100k</option>
                                <option value="100k-500k"
                                    {{ $creator->tiktok_followers == '100k-500k' ? 'selected' : '' }}>100k-500k</option>
                                <option value="500k-1m" {{ $creator->tiktok_followers == '500k-1m' ? 'selected' : '' }}>
                                    500k-1m</option>
                                <option value="1m-5m" {{ $creator->tiktok_followers == '1m-5m' ? 'selected' : '' }}>1m-5m
                                </option>
                                <option value="5m-10m" {{ $creator->tiktok_followers == '5m-10m' ? 'selected' : '' }}>
                                    5m-10m</option>
                                <option value="10m+" {{ $creator->tiktok_followers == '10m+' ? 'selected' : '' }}>10m+
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="platform-holder">
                        <div class="input-title" style="display: none">YouTube</div>
                        <div class="platform-option"
                            style="{{ $creator->youtube_url == null ? 'display: flex' : 'display: none' }}">
                            <div class="platform-img"><img
                                    src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/youtube.svg">
                            </div>
                            <div>Add YouTube</div>
                        </div>
                        <div class="input-row"
                            style="{{ $creator->youtube_url != null ? 'display: flex' : 'display: none' }}">
                            <input class="input" type="text" name="youtube_username" placeholder="YouTube URL"
                                value="{{ $creator->youtube_url }}">
                            <select name="youtube_followers" class="input">
                                <option value="" disabled hidden
                                    {{ $creator->youtube_followers == null ? 'selected' : '' }}>YouTube Subscribers
                                </option>
                                <option value="0-1k" {{ $creator->youtube_followers == '0-1k' ? 'selected' : '' }}>0-1k
                                </option>
                                <option value="1k-10k" {{ $creator->youtube_followers == '1k-10k' ? 'selected' : '' }}>
                                    1k-10k</option>
                                <option value="10k-50k" {{ $creator->youtube_followers == '10k-50k' ? 'selected' : '' }}>
                                    10k-50k</option>
                                <option value="50k-100k"
                                    {{ $creator->youtube_followers == '50k-100k' ? 'selected' : '' }}>50k-100k</option>
                                <option value="100k-500k"
                                    {{ $creator->youtube_followers == '100k-500k' ? 'selected' : '' }}>100k-500k</option>
                                <option value="500k-1m" {{ $creator->youtube_followers == '500k-1m' ? 'selected' : '' }}>
                                    500k-1m</option>
                                <option value="1m-5m" {{ $creator->youtube_followers == '1m-5m' ? 'selected' : '' }}>
                                    1m-5m</option>
                                <option value="5m-10m" {{ $creator->youtube_followers == '5m-10m' ? 'selected' : '' }}>
                                    5m-10m</option>
                                <option value="10m+" {{ $creator->youtube_followers == '10m+' ? 'selected' : '' }}>10m+
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="platform-holder">
                        <div class="input-title" style="display: none">Twitter</div>
                        <div class="platform-option"
                            style="{{ $creator->twitter_username == null ? 'display: flex' : 'display: none' }}">
                            <div class="platform-img"><img
                                    src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/twitter.svg">
                            </div>
                            <div>Add Twitter</div>
                        </div>
                        <div class="input-row"
                            style="{{ $creator->twitter_username != null ? 'display: flex' : 'display: none' }}">
                            <input class="input" type="text" name="twitter_username" placeholder="Twitter Username"
                                value="{{ $creator->twitter_username }}">
                            <select name="twitter_followers" class="input">
                                <option value="" disabled hidden
                                    {{ $creator->twitter_followers == null ? 'selected' : '' }}>Twitter Followers</option>
                                <option value="0-1k" {{ $creator->twitter_followers == '0-1k' ? 'selected' : '' }}>0-1k
                                </option>
                                <option value="1k-10k" {{ $creator->twitter_followers == '1k-10k' ? 'selected' : '' }}>
                                    1k-10k</option>
                                <option value="10k-50k" {{ $creator->twitter_followers == '10k-50k' ? 'selected' : '' }}>
                                    10k-50k</option>
                                <option value="50k-100k"
                                    {{ $creator->twitter_followers == '50k-100k' ? 'selected' : '' }}>50k-100k</option>
                                <option value="100k-500k"
                                    {{ $creator->twitter_followers == '100k-500k' ? 'selected' : '' }}>100k-500k</option>
                                <option value="500k-1m" {{ $creator->twitter_followers == '500k-1m' ? 'selected' : '' }}>
                                    500k-1m</option>
                                <option value="1m-5m" {{ $creator->twitter_followers == '1m-5m' ? 'selected' : '' }}>
                                    1m-5m</option>
                                <option value="5m-10m" {{ $creator->twitter_followers == '5m-10m' ? 'selected' : '' }}>
                                    5m-10m</option>
                                <option value="10m+" {{ $creator->twitter_followers == '10m+' ? 'selected' : '' }}>10m+
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="platform-holder">
                        <div class="input-title" style="display: none">Twitch</div>
                        <div class="platform-option"
                            style="{{ $creator->twitch_username == null ? 'display: flex' : 'display: none' }}">
                            <div class="platform-img"><img
                                    src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/twitch.svg">
                            </div>
                            <div>Add Twitch</div>
                        </div>
                        <div class="input-row"
                            style="{{ $creator->twitch_username != null ? 'display: flex' : 'display: none' }}">
                            <input class="input" type="text" name="twitch_username" placeholder="Twitch Username"
                                value="{{ $creator->twitch_username }}">
                            <select name="twitch_followers" class="input">
                                <option value="" disabled hidden
                                    {{ $creator->twitch_followers == null ? 'selected' : '' }}>Twitch Followers</option>
                                <option value="0-1k" {{ $creator->twitch_followers == '0-1k' ? 'selected' : '' }}>0-1k
                                </option>
                                <option value="1k-10k" {{ $creator->twitch_followers == '1k-10k' ? 'selected' : '' }}>
                                    1k-10k</option>
                                <option value="10k-50k" {{ $creator->twitch_followers == '10k-50k' ? 'selected' : '' }}>
                                    10k-50k</option>
                                <option value="50k-100k" {{ $creator->twitch_followers == '50k-100k' ? 'selected' : '' }}>
                                    50k-100k</option>
                                <option value="100k-500k"
                                    {{ $creator->twitch_followers == '100k-500k' ? 'selected' : '' }}>100k-500k</option>
                                <option value="500k-1m" {{ $creator->twitch_followers == '500k-1m' ? 'selected' : '' }}>
                                    500k-1m</option>
                                <option value="1m-5m" {{ $creator->twitch_followers == '1m-5m' ? 'selected' : '' }}>1m-5m
                                </option>
                                <option value="5m-10m" {{ $creator->twitch_followers == '5m-10m' ? 'selected' : '' }}>
                                    5m-10m</option>
                                <option value="10m+" {{ $creator->twitch_followers == '10m+' ? 'selected' : '' }}>10m+
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="platform-holder">
                        <div class="input-title" style="display: none">Amazon Storefront</div>
                        <div class="platform-option"
                            style="{{ $creator->amazon_storefront == null ? 'display: flex' : 'display: none' }}">
                            <div class="platform-img"><img
                                    src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/amazon.svg">
                            </div>
                            <div>Add Amazon Storefront</div>
                        </div>
                        <div class="input-row"
                            style="{{ $creator->amazon_storefront != null ? 'display: flex' : 'display: none' }}">
                            <input class="input" type="text" name="amazon_storefront"
                                placeholder="Amazon Storefront URL" value="{{ $creator->amazon_storefront }}">
                        </div>
                    </div>


                    <div class="platform-holder">
                        <div class="input-title" style="display: none">Website</div>
                        <div class="platform-option"
                            style="{{ $creator->website == null ? 'display: flex' : 'display: none' }}">
                            <div class="platform-img"><img
                                    src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/website.svg">
                            </div>
                            <div>Add Website</div>
                        </div>
                        <div class="input-row"
                            style="{{ $creator->website != null ? 'display: flex' : 'display: none' }}">
                            <input class="input" type="text" name="website" placeholder="Website"
                                value="{{ $creator->website }}">
                        </div>
                    </div>

                    <button class='submit btn'>Save</button>
                </form>
            </div>

            <div class="form-holder" data-step="3">
                <form class="form">
                    @csrf
                    <div id='file-area-prof-pic'>
                        <img class='profile-img' src='{{ url('assets/images/' . $creator->file_path) }}'>
                        <input id='file-input' type='file' name='img' accept='image/*'>
                    </div>

                    <div class="img-row">
                        <div class="primary-img">
                            <div class="file-area">
                                <div class="cover-img-badge">Cover Photo</div>
                                <input id="required-img" onchange="showImg(this,0)" class="img-input" type="file"
                                    name="img1" accept="image/*">
                                <img class="img img1" src="{{ url('assets/images/' . $creator->img_1) }}">
                            </div>
                        </div>
                        <div class="img-col">
                            <div class="img-row-sq">
                                <div class="file-area">
                                    <!-- menu btn -->
                                    <div class="more-img-holder" style="display: block">
                                        <div class="more-img-badge">&#8226;&#8226;&#8226;</div>
                                        <div class="more-img-dropdown-holder">
                                            <div class="more-img-dropdown-item" data-action="delete" data-id="2">
                                                Delete</div>
                                        </div>
                                    </div>
                                    <!-- menu btn end -->

                                    <input onchange="showImg(this,1)" class="img-input" type="file" name="img2"
                                        accept="image/*">
                                    <img class="img img2" src="{{ url('assets/images/' . $creator->img_2) }}">
                                </div>
                                <div class="file-area">
                                    <!-- menu btn -->
                                    <div class="more-img-holder" style="display: block">
                                        <div class="more-img-badge">&#8226;&#8226;&#8226;</div>
                                        <div class="more-img-dropdown-holder">
                                            <div class="more-img-dropdown-item" data-action="delete" data-id="3">
                                                Delete</div>
                                        </div>
                                    </div>
                                    <!-- menu btn end -->

                                    <input onchange="showImg(this,2)" class="img-input" type="file" name="img3"
                                        accept="image/*">
                                    <img class="img img3" src="{{ url('assets/images/' . $creator->img_3) }}">
                                </div>
                            </div>
                            <div class="file-area file-area4">
                                <!-- menu btn -->
                                <div class="more-img-holder" style="display: block">
                                    <div class="more-img-badge">&#8226;&#8226;&#8226;</div>
                                    <div class="more-img-dropdown-holder">
                                        <div class="more-img-dropdown-item" data-action="delete" data-id="4">Delete
                                        </div>
                                    </div>
                                </div>
                                <!-- menu btn end -->

                                <input onchange="showImg(this,3)" class="img-input" type="file" name="img4"
                                    accept="image/*">
                                <img class="img img4" src="{{ url('assets/images/' . $creator->img_4) }}">
                            </div>
                        </div>
                    </div>

                    <input type='hidden' name='del_img_list'>

                    <button class='submit btn'>Save</button>
                </form>
            </div>


            <div class="form-holder" data-step="4">
                <form class="form">
                    @csrf
                    <div class="scroll-holder box-scroll-holder">

                        @foreach ($packages as $package)
                            <div class="package-holder box-holder package-holder-1" style="display: flex;">
                                <div class="quantity-row">

                                    <select class="input package-content-type-select" name="package_content_type_">
                                        <option value="" disabled hidden >Choose Content Type</option>
                                        <option value="Instagram Photo Feed Post" {{ $package->package_content_type_ == 'Instagram Photo Feed Post' ? 'selected' : '' }}>Instagram Photo Feed Post</option>
                                        <option value="Instagram Reel" {{ $package->package_content_type_ == 'Instagram Reel' ? 'selected' : '' }}>Instagram Reel</option>
                                        <option value="Instagram Story" {{ $package->package_content_type_ == 'Instagram Story' ? 'selected' : '' }}>Instagram Story</option>
                                        <option value="Instagram Live" {{ $package->package_content_type_ == 'Instagram Live' ? 'selected' : '' }}>Instagram Live</option>
                                        <option value="TikTok Video" {{ $package->package_content_type_ == 'TikTok Video' ? 'selected' : '' }}>TikTok Video</option>
                                        <option value="TikTok Story" {{ $package->package_content_type_ == 'TikTok Story' ? 'selected' : '' }}>TikTok Story</option>
                                        <option value="TikTok Live" {{ $package->package_content_type_ == 'TikTok Live' ? 'selected' : '' }}>TikTok Live</option>
                                        <option value="UGC Product Video" {{ $package->package_content_type_ == 'UGC Product Video' ? 'selected' : '' }}>UGC Product Video</option>
                                        <option value="UGC Product Photo" {{ $package->package_content_type_ == 'UGC Product Photo' ? 'selected' : '' }}>UGC Product Photo</option>
                                        <option value="UGC Video Ad" {{ $package->package_content_type_ == 'UGC Video Ad' ? 'selected' : '' }}>UGC Video Ad</option>
                                        <option value="UGC Photo Ad" {{ $package->package_content_type_ == 'UGC Photo Ad' ? 'selected' : '' }}>UGC Photo Ad</option>
                                        <option value="UGC Tutorial" {{ $package->package_content_type_ == 'UGC Tutorial' ? 'selected' : '' }}>UGC Tutorial</option>
                                        <option value="UGC Testimonial/Review" {{ $package->package_content_type_ == 'UGC Testimonial/Review' ? 'selected' : '' }}>UGC Testimonial/Review</option>
                                        <option value="UGC Unboxing" {{ $package->package_content_type_ == 'UGC Unboxing' ? 'selected' : '' }}>UGC Unboxing</option>
                                        <option value="UGC Blog" {{ $package->package_content_type_ == 'UGC Blog' ? 'selected' : '' }}>UGC Blog</option>
                                        <option value="YouTube Video" {{ $package->package_content_type_ == 'YouTube Video' ? 'selected' : '' }}>YouTube Video</option>
                                        <option value="YouTube Short" {{ $package->package_content_type_ == 'YouTube Short' ? 'selected' : '' }}>YouTube Short</option>
                                        <option value="YouTube Livestream" {{ $package->package_content_type_ == 'YouTube Livestream' ? 'selected' : '' }}>YouTube Livestream</option>
                                        <option value="Twitter Tweet" {{ $package->package_content_type_ == 'Twitter Tweet' ? 'selected' : '' }}>Twitter Tweet</option>
                                        <option value="Twitter Thread" {{ $package->package_content_type_ == 'Twitter Thread' ? 'selected' : '' }}>Twitter Thread</option>
                                        <option value="Twitter Retweet" {{ $package->package_content_type_ == 'Twitter Retweet' ? 'selected' : '' }}>Twitter Retweet</option>
                                        <option value="Twitch Livestream" {{ $package->package_content_type_ == 'Twitch Livestream' ? 'selected' : '' }}>Twitch Livestream</option>
                                        <option value="Amazon Livestream" {{ $package->package_content_type_ == 'Amazon Livestream' ? 'selected' : '' }}>Amazon Livestream</option>
                                        <option value="Amazon Video" {{ $package->package_content_type_ == 'Amazon Video' ? 'selected' : '' }}>Amazon Video</option>
                                        <option value="Amazon Photo" {{ $package->package_content_type_ == 'Amazon Photo' ? 'selected' : '' }}>Amazon Photo</option>
                                    </select>

                                    <input class="input quantity-input" type="number" name="package_quantity_"
                                        placeholder="Quantity" value="{{ $package->package_quantity_ }}">
                                </div>

                                <div class="duration-row">
                                    <input class="input duration-input" name="package_duration_" type="number"
                                        placeholder="Duration (Optional)" value="{{ $package->package_duration_ }}">
                                    <select class="input duration-unit" name="package_duration_unit_">
                                        <option value="Seconds">Seconds</option>
                                        <option value="Minutes">Minutes</option>
                                        <option value="Hours">Hours</option>
                                    </select>
                                </div>

                                <input class="input price-input" type="number" name="package_price_"
                                    placeholder="Price (USD)" value="{{ $package->package_price_ }}">
                                <textarea class="input textarea description-input" name="package_description_"
                                    placeholder="Write a useful description of what brands can expect to receive from this package" maxlength="800">{{ $package->package_description_ }}</textarea>

                                <div class="package-btn-row">
                                    <div class="add-desc-btn-holder" style="visibility: hidden"><span
                                            class="add-desc-btn">Add a Description</span><span class="add-desc-num">+20%
                                            Improvement</span></div>

                                </div>
                            </div>
                        @endforeach

                        <div class="add-package-btn add-btn mobile-add-btn">+ Add Package</div>
                    </div>

                    <div class="add-package-btn add-btn desktop-add-btn">+ Add Package</div>
                    <button class='submit btn'>Save</button>
                </form>
            </div>

            <div class="form-holder" data-step="5">
                <form class="form content-form">
                    @csrf

                    <div class="file-upload-area">
                        <img class="file-upload-img"
                            src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/upload.svg">Click
                        to upload images or videos
                        <input type="file" class="file-input" name="files" accept="image/*,video/*" multiple>
                    </div>


                    <div class="upload-submission-list">

                    </div>


                    <input type='hidden' name='videos'>
                    <input type='hidden' name='del_file_list'>

                    <button class='submit btn'>Save</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        // $(function() {
        //     let url = '/edit-page';
        //     if (url) {
        //         $('.mobile-nav-holder, .mobile-nav-more-holder').find(`a[href="${url}"]`).addClass(
        //             'nav-item-selected');
        //         $('.header-center').find(`a[href="${url}"]`).addClass('header-btn-active');
        //     }
        // });

        $('.nav-item-more').click(function() {
            $('.mobile-nav-more-holder').css('display', 'flex');
        });

        $('.nav-item-close').click(function() {
            $('.mobile-nav-more-holder').hide();
        });


        function btnLoad(btn) {
            btn.addClass('disabled-btn').html("<i class='fa fa-circle-o-notch fa-spin'></i>");
        }

        function stopBtnLoad(btn, txt) {
            btn.removeClass('disabled-btn').html(txt);
        }

        function showMsg(txt, type) {
            // hide img first
            $('.succ-err-msg-img').hide();
            $(`#msg-img-${type}`).show();
            $('#msg').text(txt);
            $('#msg-holder').fadeIn();
            setTimeout(hideMsg, 5000);
        }

        function hideMsg() {
            $('#msg-holder').fadeOut();
            $('.succ-err-msg-img').fadeOut();
        }
    </script>




    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <script>
        $(function() {
            let tab = '';
            if (tab) $(`[data-tab='${tab}']`).click();

            let dateInput = $(`[name='dob']`);
            let minDate = new Date(new Date().getTime() - (100 * 365 * 24 * 60 * 60 * 1000)); // 100yrs ago
            let maxDate = new Date(new Date().getTime());

            dateInput.datepicker({
                dateFormat: 'MM d, yy',
                minDate: minDate,
                maxDate: maxDate,
                dayNamesMin: ["S", "M", "T", "W", "T", "F", "S"],
                constrainInput: true,
                changeMonth: true,
                changeYear: true,
                yearRange: "-100:+1"
            });


        });

        $('.tab').click(function() {
            let tab = $(this).data('tab');
            $('.tab').removeClass("tab-active");
            $('.form-holder').hide();
            $(this).addClass('tab-active');
            $(`[data-step=${tab}]`).show();
            replaceUrl('t', tab);
            hideShowPlatforms();
        });

        function replaceUrl(arg, param) {
            let href = new URL(window.location.href);
            href.searchParams.set(arg, param);
            history.replaceState(null, '', href.toString());
        }

        $('.form').submit(function(e) {
            e.preventDefault();
            let btn = $(this).find('.btn');
            let step = $(this).parent('.form-holder').data('step');
            switch (step) {
                case 1:
                    if (containsContactInfo($('[name="description"]').val())) {
                        showMsg('Brands will contact you through the platform. You do not need to provide any contact info.',
                            'err');
                        return;
                    } else if (!keywords.length) {
                        showMsg('Add at least 1 keyword. Type a keyword then press enter to add it.', 'err');
                        return;
                    } else if (!languages.length) {

                    }
                    $(`[name='keywords']`).val(`${JSON.stringify(keywords)}`);
                    $(`[name='languages']`).val(`[${languages}]`);
                    break;
                case 2:
                    if (!validateSocialChannels()) return;
                    break;
                case 3:
                    $(`[name='del_img_list']`).val(`[${delImgList}]`);
                    break;
                case 4:
                    if (!validatePackages()) return;
                    break;
                case 5:
                    if ((videoFilesObjs.length + imageFilesObjs.length) > 12) {
                        showMsg('Please add a maximum of 12 photos & videos at a time.', 'err');
                        return;
                    }

                    btnLoad(btn);

                    // if videos added and upload not complete
                    if (videoFilesObjs.length && uploaded < videoFilesObjs.length) {
                        let fileNames = [];
                        for (let i = 0; i < videoFilesObjs.length; i++) {
                            fileNames.push(videoFilesObjs[i].name);
                        }

                        $.ajax({
                            type: 'POST',
                            url: '/get-presigned-url-content',
                            data: {
                                'files': JSON.stringify(fileNames),
                                'csrfmiddlewaretoken': 'CK6kkPy77wBof1HJrYIgPldSDkEKFMJAbB6mOkREhgLObh41nTjDzeikwHcHYDUj'
                            },
                            success: function(data) {
                                if (data.success) {
                                    s3Upload(data.urls);
                                } else {
                                    stopBtnLoad(btn, 'Save');
                                    showMsg(data.error, 'err');
                                }
                            }
                        });
                        return;
                    } else {
                        uploadImages();
                    }
            }

            btnLoad(btn);
            $.ajax({
                type: "POST",
                url: '/edit-page/!'.replace('!', step),
                contentType: false,
                enctype: 'multipart/form-data',
                processData: false,
                data: new FormData($(this).get(0)),
                cache: false,
                success: function(data) {
                    if (data.hasOwnProperty('error')) {
                        showMsg(data.error, 'err');
                    } else {
                        if (data.hasOwnProperty('fixed') && data.fixed) {
                            $('.broken').hide();
                            showMsg('Your broken links have been fixed.', 'succ');
                        } else {
                            showMsg('Changes Saved.', 'succ');
                        }
                    }
                    stopBtnLoad(btn, 'Save');
                }
            });

        });

        // step 1 validation
        var keywords = ['', ];

        function addKeyword(el) {
            if (keywords.length < 5) {
                let keyword = el.val();
                $('.keyword-list').append(
                    `<span class='keyword'>${keyword}<img class="remove-keyword-btn" src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/closeModal.svg"></span>`
                );
                keywords.push(keyword);
                el.val('');
            } else {
                showMsg('You can only add 5 keywords.', 'err');
            }
        }

        $(".keyword-input").on('keyup', function(e) {
            if ((e.key === 'Enter' || e.keyCode === 13) && $(this).val()) addKeyword($(this));
        });

        $(document).on('click', '.remove-keyword-btn', function() {
            let keyword = $(this).parent('.keyword');
            keyword.remove();
            const index = keywords.findIndex(item => item === keyword.text());
            keywords.splice(index, 1);
        });


        $('.language-dropdown').change(function() {
            addLanguage($(this));
        });

        var languages = [];

        function addLanguage(el) {
            $('.languages-list').append(
                `<span class='keyword'>${$("option:selected", el).text()}<img class="remove-language-btn" src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/closeModal.svg"></span>`
            );
            languages.push(el.val());
        }

        $(document).on('click', '.remove-language-btn', function() {
            let keyword = $(this).parent('.keyword');
            keyword.remove();
            const index = languages.findIndex(item => item === keyword.text());
            languages.splice(index, 1);
        });


        // step 2 validation
        $('.platform-option').click(function() {
            $(this).hide();
            $(this).siblings('.input-row').css('display', 'flex');
            $(this).siblings('.input-title').show();
        });

        function validateSocialChannels() {
            let instagramUsername = $('[name="instagram_username"]').val().trim();
            let instagramFollowers = $('[name="instagram_followers"]').find(":selected").val();
            let tiktokUsername = $('[name="tiktok_username"]').val().trim();
            let tiktokFollowers = $('[name="tiktok_followers"]').find(":selected").val();
            let youtubeUsername = $('[name="youtube_username"]').val().trim();
            let youtubeFollowers = $('[name="youtube_followers"]').find(":selected").val();
            let twitterUsername = $('[name="twitter_username"]').val().trim();
            let twitterFollowers = $('[name="twitter_followers"]').find(":selected").val();
            let twitchUsername = $('[name="twitch_username"]').val().trim();
            let twitchFollowers = $('[name="twitch_followers"]').find(":selected").val();

            if (instagramUsername && !instagramFollowers) {
                showMsg('Enter your Instagram followers.', 'err');
                return false;
            } else if (tiktokUsername && !tiktokFollowers) {
                showMsg('Enter your TikTok followers.', 'err');
                return false;
            } else if (youtubeUsername && !youtubeFollowers) {
                showMsg('Enter your YouTube subscribers.', 'err');
                return false;
            } else if (youtubeUsername && !youtubeUsername.includes('youtube.com') && youtubeFollowers) {
                showMsg('Enter your full YouTube Channel URL. E.g. https://www.youtube.com/channel/ABCD', 'err');
                return false;
            } else if (twitterUsername && !twitterFollowers) {
                showMsg('Enter your Twitter followers.', 'err');
                return false;
            } else if (twitchUsername && !twitchFollowers) {
                showMsg('Enter your Twitch followers.', 'err');
                return false;
            }

            hideShowPlatforms();
            return true;
        }

        // step 3 validation
        $(document).on('click', function(e) {
            // if outside menu clicked
            if (!$(e.target).is('.more-img-badge')) {
                $('.more-img-dropdown-holder').hide();
            }
        });

        $('.more-img-holder').click(function() {
            $(this).find('.more-img-dropdown-holder').toggle();
        });

        let delImgList = [];
        $('.more-img-dropdown-item').click(function() {
            let id = $(this).data('id');
            $(this).parents('.more-img-holder').hide();
            $(`[name='img${id}']`).val('');
            $(`.img${id}`).attr('src',
                'https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/default.png');
            delImgList.push(id);
        });

        // prof pic
        document.getElementById('file-input').onchange = function() {
            let file = this.files[0];
            let input = this;
            let dimension = 200;

            // check if image too small
            let img = new Image;
            img.onload = function() {
                if (img.width < dimension || img.height < dimension) {
                    $('.profile-img').attr('src',
                        'https://d5ik1gor6xydq.cloudfront.net/sellers/135441/17095803117366173.webp');
                    input.value = '';
                    showMsg('Image must be at least ' + dimension.toString() + 'px x ' + dimension.toString() +
                        'px', 'err');
                } else if (file.size > 8388608) {
                    input.value = '';
                    showMsg('Image must be under 8MB.', 'err');
                } else {
                    if (!file.type.startsWith('image/')) {
                        return
                    }
                    let img = document.getElementsByClassName('profile-img')[0];
                    img.file = file;
                    const reader = new FileReader();
                    reader.onload = (function(aImg) {
                        return function(e) {
                            aImg.src = e.target.result;
                        };
                    })(img);
                    reader.readAsDataURL(file);
                }
            };
            img.src = URL.createObjectURL(file);
        };

        function showImg(element, idx) {
            let file = element.files[0];
            let input = element;
            let width = 700;
            let height = 700;

            // check if image too small
            let img = new Image;
            img.onload = function() {
                if (img.width < width || img.height < height) {
                    let imgPath = "websiteImages/creatorMarketplace/default.png";
                    if (idx === 0 && 'sellers/135441/17084621233573737.webp') imgPath =
                        "sellers/135441/17084621233573737.webp";
                    if (idx === 1 && 'sellers/135441/17095803118460636.webp') imgPath =
                        "sellers/135441/17095803118460636.webp";
                    if (idx === 2 && 'sellers/135441/17095803120075932.webp') imgPath =
                        "sellers/135441/17095803120075932.webp";
                    if (idx === 3 && 'sellers/135441/17095803121435711.webp') imgPath =
                        "sellers/135441/17095803121435711.webp";
                    document.getElementsByClassName("img")[idx].src = `https://d5ik1gor6xydq.cloudfront.net/${imgPath}`;
                    input.value = '';
                    showMsg('Image must be at least ' + width.toString() + 'px x ' + height.toString() + 'px', 'err');
                } else if (file.size > 8388608) {
                    input.value = '';
                    showMsg('Image must be under 8MB.', 'err');
                } else {
                    if (!file.type.startsWith('image/')) {
                        return
                    }
                    let img = document.getElementsByClassName("img")[idx];
                    img.file = file;
                    const reader = new FileReader();
                    reader.onload = (function(aImg) {
                        return function(e) {
                            aImg.src = e.target.result;
                        };
                    })(img);
                    reader.readAsDataURL(file);
                    // show more img menu
                    $(img).siblings('.more-img-holder').show();
                }
            };
            img.src = URL.createObjectURL(file);
        }


        // step 4 validation

        let descCount = 0;
        $('.add-desc-btn').click(function() {
            let parent = $(this).parents('.box-holder');
            parent.find('.add-desc-btn-holder').css('visibility', 'hidden');
            parent.find('.description-input').show();
        });

        // if video content show duration
        vidArr = ['Photo', 'Tweet', 'Thread', 'Retweet', 'Story'];
        $('.package-content-type-select').change(function() {
            let durationRow = $(this).parents(".box-holder").find(".duration-row");
            if ($(this).find("option:selected").val() && !vidArr.some(substring => $(this).find("option:selected")
                    .text().includes(substring))) {
                durationRow.css('display', 'flex');
            } else {
                durationRow.hide();
                durationRow.find('.duration-input').val('');
            }
        });

        // remove err class on package inputs when clicked
        $('.package-holder .input').click(function() {
            $(this).removeClass('empty-input');
        });

        // check if all fields filled out
        function validatePackages() {
            let errs = 0;
            let msg = '';
            for (let i = 0; i < packageCount + 1; i++) {
                let pkg = $('.package-holder:visible').eq(i);
                let contentType = pkg.find('.package-content-type-select');
                let quantity = pkg.find('.quantity-input');
                let price = pkg.find('.price-input');
                let desc = pkg.find('.description-input')

                if (!contentType.find(":selected").val()) {
                    contentType.addClass('empty-input');
                    if (errs === 0) msg = 'Choose a content type.';
                    errs++;
                }

                if (!quantity.val() || quantity.val() < 1) {
                    quantity.addClass('empty-input');
                    if (errs === 0) msg = 'Minimum quantity is 1.';
                    errs++;
                }

                if (!price.val() || price.val() < 50) {
                    price.addClass('empty-input');
                    if (errs === 0) msg = 'Minimum price is $50.';
                    errs++;
                }

                if (desc.val().length > 0 && desc.val().length < 30) {
                    desc.addClass('empty-input');
                    if (errs === 0) msg = 'Description must be at least 30 characters.';
                    errs++;
                }
            }
            if (errs > 0) {
                showMsg(msg, 'err');
                return false;
            }
            return true;
        }

        // add package
        let packageCount = -1;

        packageCount = 2 - 1;

        $('.add-package-btn').click(function() {
            packageCount++;
            $('.package-holder').not(":visible").eq(packageCount).css('display', 'flex');
            if (packageCount === 29) {
                $(this).hide();
            }
        });

        // delete package
        $('.delete-package-btn').click(function() {
            let holder = $(this).parents('.box-holder');
            holder.hide();
            holder.find('.package-content-type-select').val('').change().click();
            holder.find('.quantity-input').val('').click();
            holder.find('.duration-input').val('');
            holder.find('.price-input').val('').click();
            holder.find('.description-input').val('').click().hide();
            holder.find('.add-desc-btn-holder').css('visibility', 'visible');
            packageCount--;
            if (packageCount < 29) {
                let width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
                if (width <= 800) {
                    $('.add-package-btn.mobile-add-btn').show();
                } else {
                    $('.add-package-btn.desktop-add-btn').show();
                }
            }
        });

        function containsContactInfo(txt) {
            txt = txt.toLowerCase();
            let emailExp = /\S+@\S+\.\S+/; //email matches x@x
            let phoneExp = /[ ][0-9-.+]{8,14}([ .)]+|[0-9]$)/;
            return emailExp.test(txt) || phoneExp.test(txt);
        }

        function hidePlatform(options, plat) {
            options.each(function() {
                if ($(this).text().includes(plat)) $(this).attr('hidden', '').attr('disabled', '');
            });
        }

        function hideShowPlatforms() {
            // hide/show package categories based on usernames added if they come back to edit
            // for every category select make all options with a value shown by default
            let instagramUsername = $('[name="instagram_username"]').val().trim();
            let tiktokUsername = $('[name="tiktok_username"]').val().trim();
            let youtubeUsername = $('[name="youtube_username"]').val().trim();
            let twitterUsername = $('[name="twitter_username"]').val().trim();
            let twitchUsername = $('[name="twitch_username"]').val().trim();
            let amazonUsername = $('[name="amazon_storefront"]').val().trim();

            let options = $('.package-content-type-select > option');
            options.each(function() {
                if ($(this).val()) $(this).removeAttr('hidden').removeAttr('disabled');
            });



            if (!instagramUsername) {
                hidePlatform(options, 'Instagram');
            }

            if (!tiktokUsername) {
                hidePlatform(options, 'TikTok');
            }

            if (!youtubeUsername) {
                hidePlatform(options, 'YouTube');
            }
            if (!twitterUsername) {
                hidePlatform(options, 'Twitter');
            }

            if (!twitchUsername) {
                hidePlatform(options, 'Twitch');
            }

            if (!amazonUsername) {
                hidePlatform(options, 'Amazon');
            }
        }

        // step 5
        let delFileListObjs = [];
        let imageFilesObjs = [];
        let videoFilesObjs = [];
        let fileList = $('.upload-submission-list');
        let maxFileSize = 53687091200;
        let maxFileSizeFormatted = '5GB';
        document.getElementsByClassName('file-input')[0].onchange = function() {
            for (let i = 0; i < this.files.length; i++) {
                let file = this.files[i];

                if (file.size > maxFileSize) {
                    this.value = '';
                    showMsg('Max file size is ' + maxFileSizeFormatted, 'err');
                    return;
                }

                let fileObj = {
                    name: (Math.round(+new Date() / 1000).toString() + file.name.toString()).toLowerCase(),
                    file: file,
                };

                // if img show as image
                let idx = Math.floor(Math.random() * 100000000);
                if (file.type.startsWith('image/')) {
                    showImage(file, idx);
                    fileObj.id = idx;
                    imageFilesObjs.push(fileObj)
                } else {
                    showVideo(file, idx);
                    fileObj.id = idx;
                    videoFilesObjs.push(fileObj)
                }

            }
            this.value = '';
            fileList.css('display', 'flex');
        };

        function showImage(file, idx) {
            let img = new Image;
            img.onload = function() {
                let img = $("<img class='content-img'>").get(0);
                img.file = file;
                const reader = new FileReader();
                reader.onload = (function(aImg) {
                    return function(e) {
                        aImg.src = e.target.result;
                    };
                })(img);
                reader.readAsDataURL(file);
                let holder = $(
                    `<div class="content-holder"><div class="remove-content-btn" data-id=${idx}><img class="remove-content-img" src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/closeModal.svg"></div></div>`
                );
                holder.append(img);
                fileList.prepend(holder);
            };
            img.src = URL.createObjectURL(file);
        }

        function showVideo(file, idx) {
            let video = $('<video class="content-video" preload="metadata" controls></video>').get(0);
            video.src = URL.createObjectURL(file);
            video.load();
            let holder = $(
                `<div class="content-holder"><div class="remove-content-btn" data-id=${idx}><img class="remove-content-img" src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/closeModal.svg"></div></div>`
            );
            holder.append(video);
            fileList.prepend(holder);
        }

        $(document).on('click', '.remove-content-btn', function() {
            let idx = $(this).data('id');
            if (!idx) {
                delFileListObjs.push($(this).data('file-id'));
            } else {
                if ($(this).siblings('.content-video').length) {
                    const index = videoFilesObjs.findIndex(item => item.id === idx);
                    videoFilesObjs.splice(index, 1);
                } else {
                    const index = imageFilesObjs.findIndex(item => item.id === idx);
                    imageFilesObjs.splice(index, 1);
                }
            }
            $(this).parent('.content-holder').remove();
            if (!fileList.children().length) fileList.hide();
        });

        function addImagesInput() {
            let input = $('.file-input').get(0);
            input.value = '';
            if (imageFilesObjs.length) {
                const dt = new DataTransfer();
                for (let i = 0; i < imageFilesObjs.length; i++) {
                    dt.items.add(imageFilesObjs[i].file);
                }
                input.files = dt.files // Assign the updated list of only imgs
            }
        }

        let uploaded = 0;

        function s3Upload(signedUrls) {
            uploaded = 0;
            for (let i = 0; i < videoFilesObjs.length; i++) {
                let file = videoFilesObjs[i].file;
                let xhr = new XMLHttpRequest();
                xhr.upload.onload = (event) => {
                    // a video upload finished
                    uploaded++;
                    if (uploaded === videoFilesObjs.length) {
                        $('.content-form').submit();
                    }
                };

                xhr.open('PUT', signedUrls[i], true);
                xhr.setRequestHeader('Content-Type', 'application/octet-stream');
                xhr.send(file);
            }
        }

        function uploadImages() {
            // add image files to input before submitting form
            addImagesInput();
            // add video files to add to db and files to delete
            $(`[name='videos']`).val(`${JSON.stringify(videoFilesObjs.map(({name}) => (name)))}`);
            $(`[name='del_file_list']`).val(`[${delFileListObjs}]`);
        }

        /* location */
        const token = "CK6kkPy77wBof1HJrYIgPldSDkEKFMJAbB6mOkREhgLObh41nTjDzeikwHcHYDUj";
        const locationUrl = "/get-locations";
        const multiple = false;
    </script>
@endsection
