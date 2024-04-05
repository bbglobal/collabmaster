@extends('layouts.main')

@push('footer-style')
    <style>
        .nk-footer {
            display: none;
        }
    </style>
@endpush

@section('main-section')
    @if ($message = Session::get('error'))
        <div id="msg-holder">
            <div id="msg-holder-row">
                <img src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/err.svg" id="msg-img-err"
                    class="succ-err-msg-img">
                <div id="msg">{{ $message }}</div>
            </div>
        </div>
    @endif
    <div class="nk-content main-outer-container">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-content-wrap">

                        <div class="nk-block nk-block-middle nk-auth-body wide-xs pt-0">
                            {{-- <div class="progress progress-lg">
                                <div class="progress-bar" id="progressBar" data-progress="25">25%</div>
                            </div> --}}
                            <div id="s-1">
                                <div class="card">
                                    <div class="card-inner card-inner p-0">
                                        <div class="top-btn-holder">
                                            {{-- <div class="example-profile-btn">View Example Campaign</div> --}}
                                            <div class="step-holder">5/9</div>
                                        </div>
                                        <div class="nk-block-head my-5">
                                            <div class="nk-block-head-content">
                                                <br />
                                                <h3 class="nk-block-title"><b>Add your social channels</b></h3>
                                            </div>
                                        </div>

                                        <a href="{{ route('create.page', ['id' => 4]) }}" class="top-btn-holder d-block">
                                            <svg class="back-btn" viewBox="0 0 24 24" aria-hidden="true">
                                                <path
                                                    d="M19 11H7.83l4.882-4.882a1 1 0 000-1.413h-.005a1 1 0 00-1.408 0L4.705 11.3a1 1 0 000 1.41L11.3 19.3a1 1 0 001.41 0 1 1 0 000-1.41L7.83 13H19a1 1 0 001-1 1 1 0 00-1-1z">
                                                </path>
                                            </svg>
                                        </a>

                                        <form method="POST" action="{{ route('create.page', ['id' => 6]) }}"
                                            id="form">
                                            @csrf
                                            <div class="platform-holder">
                                                <div class="platform-option">
                                                    <div class="platform-img"><img
                                                            src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/instagram.svg">
                                                    </div>
                                                    <div>Add Instagram</div>
                                                </div>
                                                <div class="input-row">
                                                    <input class="input" type="text" name="instagram_username"
                                                        placeholder="Instagram Username" value="">
                                                    <select name="instagram_followers" class="input">
                                                        <option value="" disabled selected hidden>Instagram Followers
                                                        </option>
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
                                                </div>
                                            </div>

                                            <div class="platform-holder">
                                                <div class="platform-option">
                                                    <div class="platform-img"><img
                                                            src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/tiktok.svg">
                                                    </div>
                                                    <div>Add TikTok</div>
                                                </div>
                                                <div class="input-row">
                                                    <input class="input" type="text" name="tiktok_username"
                                                        placeholder="TikTok Username" value="">
                                                    <select name="tiktok_followers" class="input">


                                                        <option value="" disabled selected hidden>TikTok Followers
                                                        </option>


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
                                                </div>
                                            </div>

                                            <div class="platform-holder">
                                                <div class="platform-option">
                                                    <div class="platform-img"><img
                                                            src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/youtube.svg">
                                                    </div>
                                                    <div>Add YouTube</div>
                                                </div>
                                                <div class="input-row">
                                                    <input class="input" type="text" name="youtube_username"
                                                        placeholder="YouTube URL" value="">
                                                    <select name="youtube_followers" class="input">

                                                        <option value="" disabled selected hidden>YouTube Subscribers
                                                        </option>

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
                                                </div>
                                            </div>

                                            <div class="platform-holder">
                                                <div class="platform-option">
                                                    <div class="platform-img"><img
                                                            src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/twitter.svg">
                                                    </div>
                                                    <div>Add Twitter</div>
                                                </div>
                                                <div class="input-row">
                                                    <input class="input" type="text" name="twitter_username"
                                                        placeholder="Twitter Username" value="">
                                                    <select name="twitter_followers" class="input">


                                                        <option value="" disabled selected hidden>Twitter Followers
                                                        </option>


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
                                                </div>
                                            </div>

                                            <div class="platform-holder">
                                                <div class="platform-option">
                                                    <div class="platform-img"><img
                                                            src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/twitch.svg">
                                                    </div>
                                                    <div>Add Twitch</div>
                                                </div>
                                                <div class="input-row">
                                                    <input class="input" type="text" name="twitch_username"
                                                        placeholder="Twitch Username" value="">
                                                    <select name="twitch_followers" class="input">


                                                        <option value="" disabled selected hidden>Twitch Followers
                                                        </option>


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
                                                </div>
                                            </div>

                                            <div class="platform-holder">
                                                <div class="platform-option">
                                                    <div class="platform-img"><img
                                                            src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/amazon.svg">
                                                    </div>
                                                    <div>Add Amazon Storefront</div>
                                                </div>
                                                <div class="input-row">
                                                    <input class="input" type="text" name="amazon_storefront"
                                                        placeholder="Amazon Storefront URL" value="">
                                                </div>
                                            </div>

                                            <div class="platform-holder">
                                                <div class="platform-option">
                                                    <div class="platform-img"><img
                                                            src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/website.svg">
                                                    </div>
                                                    <div>Add Website</div>
                                                </div>
                                                <div class="input-row">
                                                    <input class="input" type="text" name="website"
                                                        placeholder="Website" value="">
                                                </div>
                                            </div>

                                            <div class="form-group mb-3">
                                                <button type="submit" class="btn btn-lg btn-secondary btn-block s-1-con"
                                                    id="primary">Continue</button>

                                                <button class="btn btn-lg btn-secondary btn-block d-none" id="loading"
                                                    type="button" disabled>
                                                    <span class="spinner-border spinner-border-sm" role="status"
                                                        aria-hidden="true"></span>
                                                    <span>Loading...</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
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
            $('#form').submit(() => {
                $('#primary').addClass("d-none");
                $("#loading").removeClass("d-none")
            });

            $('.platform-holder').click(function() {
                $(this).find('.platform-option').hide();
                $(this).find('.input-row').show();
            });
        });
    </script>
@endsection
