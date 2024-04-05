@extends('layouts.main')

@push('footer-style')
    <style>
        #msg-holder {
            display: none;
        }

        .niches-holder {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 6%;
        }

        .niche-holder {
            font-size: 85%;
            padding: 6px 8px;
            margin: 10px 10px 10px 0;
            border-radius: 8px;
            min-width: fit-content;
            text-align: center;
            border: 1px solid rgba(191, 203, 218, .6);
            transition-duration: 0.3s;
            cursor: pointer;
        }

        .niche-selected,
        .niche-holder:hover {
            background-color: var(--black) !important;
            color: white !important;
        }

        .primary-img {
            width: 100% !important;
        }

        .img-col,
        .cover-img-badge {
            display: none !important;
        }

        .img1 {
            border-radius: 8px !important;
        }

        #location-dropdown {
            width: 100%;
        }

        @media only screen and (max-width: 800px) {
            .niches-holder {
                margin-bottom: 10%;
            }
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

    @if ($message = Session::get('success'))
        <div id="msg-holder">
            <div id="msg-holder-row">
                <img src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/succ.svg" id="msg-img-err"
                    class="succ-err-msg-img">
                <div id="msg">{{ $message }}</div>
            </div>
        </div>
    @endif

    <link rel="stylesheet" href="{{ url('assets/css/edit-profile.css') }}">
    <div id="content">
        <div class="edit-holder">
            <div class="edit-back-btn" onclick="location.href='/profile/{{ Auth::user()->id }}'"><svg
                    class="edit-back-btn-img" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                        d="M19 11H7.83l4.882-4.882a1 1 0 000-1.413h-.005a1 1 0 00-1.408 0L4.705 11.3a1 1 0 000 1.41L11.3 19.3a1 1 0 001.41 0 1 1 0 000-1.41L7.83 13H19a1 1 0 001-1 1 1 0 00-1-1z">
                    </path>
                </svg>Back to Profile</div>

            <h1 class="edit-title">Edit Profile</h1>

            <div class="tabs-holder">
                <div class="tab tab-active" data-tab="1">Details</div>
                <div class="tab" data-tab="2">Social Media</div>
                <div class="tab" data-tab="3">Images</div>
            </div>

            <div class="form-holder" data-step="1" style="display: block">
                <form class="form form-skinny" style="display: block;" method="POST"
                    action="{{ route('profile.update', ['id' => $brand->user_id]) }}">
                    @csrf
                    <div class="input-title">Location</div>

                    <link rel="stylesheet" type="text/css" href="/static/igmarketplace/components/locationInput.css?v=3.67">

                    <div id="location-input" class="">
                        <input id="location-input" name="location" class="input" type="text" placeholder='City'
                            value="{{ $brand->location }}">
                    </div>

                    <div class="input-title">Description</div>
                    <textarea class="input textarea" name="description"
                        placeholder="What do you sell? What is your mission? Be specific as this is how influencers learn more about your brand."
                        minlength="50" maxlength="800" required>{{ $brand->description }}</textarea>

                    <div class="input-title">Categories</div>
                    <div class="niches-holder">

                        <div class="niche-holder {{ $brand && strpos($brand->categories, 'Fashion') !== false ? 'niche-selected' : '' }}"
                            data-id="36">Fashion</div>

                        <div class="niche-holder {{ $brand && strpos($brand->categories, 'Beauty') !== false ? 'niche-selected' : '' }}"
                            data-id="37">Beauty</div>

                        <div class="niche-holder {{ $brand && strpos($brand->categories, 'Travel') !== false ? 'niche-selected' : '' }}"
                            data-id="34">Travel</div>

                        <div class="niche-holder {{ $brand && strpos($brand->categories, 'Health & Fitness') !== false ? 'niche-selected' : '' }}"
                            data-id="26">Health &amp; Fitness</div>

                        <div class="niche-holder {{ $brand && strpos($brand->categories, 'Food & Drink') !== false ? 'niche-selected' : '' }}"
                            data-id="23">Food &amp; Drink</div>

                        <div class="niche-holder {{ $brand && strpos($brand->categories, 'Art & Photography') !== false ? 'niche-selected' : '' }}"
                            data-id="28">Art &amp; Photography</div>

                        <div class="niche-holder {{ $brand && strpos($brand->categories, 'Comedy & Entertainment') !== false ? 'niche-selected' : '' }}"
                            data-id="38">Comedy &amp; Entertainment</div>

                        <div class="niche-holder {{ $brand && strpos($brand->categories, 'Music & Dance') !== false ? 'niche-selected' : '' }}"
                            data-id="31">Music &amp; Dance</div>

                        <div class="niche-holder {{ $brand && strpos($brand->categories, 'Entrepreneur & Business') !== false ? 'niche-selected' : '' }}"
                            data-id="24">Entrepreneur &amp; Business</div>

                        <div class="niche-holder {{ $brand && strpos($brand->categories, 'Family & Children') !== false ? 'niche-selected' : '' }}"
                            data-id="29">Family &amp; Children</div>

                        <div class="niche-holder {{ $brand && strpos($brand->categories, 'Animals & Pets') !== false ? 'niche-selected' : '' }}"
                            data-id="30">Animals &amp; Pets</div>

                        <div class="niche-holder {{ $brand && strpos($brand->categories, 'Education') !== false ? 'niche-selected' : '' }}"
                            data-id="42">Education</div>

                        <div class="niche-holder {{ $brand && strpos($brand->categories, 'Athlete & Sports') !== false ? 'niche-selected' : '' }}"
                            data-id="33">Athlete &amp; Sports</div>

                        <div class="niche-holder {{ $brand && strpos($brand->categories, 'Adventure & Outdoors') !== false ? 'niche-selected' : '' }}"
                            data-id="45">Adventure &amp; Outdoors</div>

                        <div class="niche-holder {{ $brand && strpos($brand->categories, 'Technology') !== false ? 'niche-selected' : '' }}"
                            data-id="41">Technology</div>

                        <div class="niche-holder {{ $brand && strpos($brand->categories, 'Gaming') !== false ? 'niche-selected' : '' }}"
                            data-id="32">Gaming</div>

                        <div class="niche-holder {{ $brand && strpos($brand->categories, 'Healthcare') !== false ? 'niche-selected' : '' }}"
                            data-id="49">Healthcare</div>

                        <div class="niche-holder {{ $brand && strpos($brand->categories, 'Cannabis') !== false ? 'niche-selected' : '' }}"
                            data-id="50">Cannabis</div>

                        <div class="niche-holder {{ $brand && strpos($brand->categories, 'Skilled Trades') !== false ? 'niche-selected' : '' }}"
                            data-id="48">Skilled Trades</div>

                        <div class="niche-holder {{ $brand && strpos($brand->categories, 'Automotive') !== false ? 'niche-selected' : '' }}"
                            data-id="47">Automotive</div>

                    </div>
                    <input type='hidden' name='niches' id="niches">
                    <button type="submit" class='submit btn'>Save</button>
                </form>
            </div>

            <div class="form-holder" data-step="2">
                <form class="form form-skinny" style="display: block;">
                    @csrf
                    <div class="platform-holder">
                        <div class="input-title" style="display: none">Website</div>
                        <div class="platform-option">
                            <div class="platform-img"><img
                                    src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/website.svg">
                            </div>
                            <div>Add Website</div>
                        </div>
                        <div class="input-row">
                            <input class="input" type="text" name="website" placeholder="Website" value="">
                        </div>
                    </div>

                    <div class="platform-holder">
                        <div class="input-title" style="display: none">Instagram</div>
                        <div class="platform-option">
                            <div class="platform-img"><img
                                    src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/instagram.svg">
                            </div>
                            <div>Add Instagram</div>
                        </div>
                        <div class="input-row">
                            <input class="input" type="text" name="instagram_username"
                                placeholder="Instagram Username" value="">
                        </div>
                    </div>

                    <div class="platform-holder">
                        <div class="input-title" style="display: none">TikTok</div>
                        <div class="platform-option">
                            <div class="platform-img"><img
                                    src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/tiktok.svg">
                            </div>
                            <div>Add TikTok</div>
                        </div>
                        <div class="input-row">
                            <input class="input" type="text" name="tiktok_username" placeholder="TikTok Username"
                                value="">
                        </div>
                    </div>

                    <div class="platform-holder">
                        <div class="input-title" style="display: none">YouTube</div>
                        <div class="platform-option">
                            <div class="platform-img"><img
                                    src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/youtube.svg">
                            </div>
                            <div>Add YouTube</div>
                        </div>
                        <div class="input-row">
                            <input class="input" type="text" name="youtube_username" placeholder="YouTube URL"
                                value="">
                        </div>
                    </div>

                    <div class="platform-holder">
                        <div class="input-title" style="display: none">Twitter</div>
                        <div class="platform-option">
                            <div class="platform-img"><img
                                    src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/twitter.svg">
                            </div>
                            <div>Add Twitter</div>
                        </div>
                        <div class="input-row">
                            <input class="input" type="text" name="twitter_username" placeholder="Twitter Username"
                                value="">
                        </div>
                    </div>

                    <button class='submit btn'>Save</button>
                </form>
            </div>

            <div class="form-holder" data-step="3">
                <form class="form" style="display:block;">
                    @csrf
                    <div id='file-area-prof-pic'>
                        <img class='profile-img'
                            src='https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/avatar.png'>
                        <input id='file-input' type='file' name='img' accept='image/*'>
                    </div>

                    <div class="img-row">
                        <div class="primary-img">
                            <div class="file-area">
                                <div class="cover-img-badge">Cover Photo</div>
                                <input id="required-img" onchange="showImg(this,0)" class="img-input" type="file"
                                    name="img1" accept="image/*">
                                <img class="img img1"
                                    src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/defaultCoverBrand.png">
                            </div>
                        </div>
                        <div class="img-col">
                            <div class="img-row-sq">
                                <div class="file-area">
                                    <!-- menu btn -->
                                    <div class="more-img-holder">
                                        <div class="more-img-badge">&#8226;&#8226;&#8226;</div>
                                        <div class="more-img-dropdown-holder">
                                            <div class="more-img-dropdown-item" data-action="delete" data-id="2">
                                                Delete</div>
                                        </div>
                                    </div>
                                    <!-- menu btn end -->

                                    <input onchange="showImg(this,1)" class="img-input" type="file" name="img2"
                                        accept="image/*">
                                    <img class="img img2"
                                        src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/default.png">
                                </div>
                                <div class="file-area">
                                    <!-- menu btn -->
                                    <div class="more-img-holder">
                                        <div class="more-img-badge">&#8226;&#8226;&#8226;</div>
                                        <div class="more-img-dropdown-holder">
                                            <div class="more-img-dropdown-item" data-action="delete" data-id="3">
                                                Delete</div>
                                        </div>
                                    </div>
                                    <!-- menu btn end -->

                                    <input onchange="showImg(this,2)" class="img-input" type="file" name="img3"
                                        accept="image/*">
                                    <img class="img img3"
                                        src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/default.png">
                                </div>
                            </div>
                            <div class="file-area file-area4">
                                <!-- menu btn -->
                                <div class="more-img-holder">
                                    <div class="more-img-badge">&#8226;&#8226;&#8226;</div>
                                    <div class="more-img-dropdown-holder">
                                        <div class="more-img-dropdown-item" data-action="delete" data-id="4">Delete
                                        </div>
                                    </div>
                                </div>
                                <!-- menu btn end -->

                                <input onchange="showImg(this,3)" class="img-input" type="file" name="img4"
                                    accept="image/*">
                                <img class="img img4"
                                    src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/default.png">
                            </div>
                        </div>
                    </div>

                    <input type='hidden' name='del_img_list'>

                    <button class='submit btn'>Save</button>
                </form>
            </div>

        </div>
    </div>

    <script>
        $(function() {
            let url = '/edit-profile';
            if (url) {
                $('.mobile-nav-holder, .mobile-nav-more-holder').find(`a[href="${url}"]`).addClass(
                    'nav-item-selected');
                $('.header-center').find(`a[href="${url}"]`).addClass('header-btn-active');
            }
        });

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

    <script>
        $('.tab').click(function() {
            $('.tab').removeClass("tab-active");
            $('.form-holder').hide();
            $(this).addClass('tab-active');
            $(`[data-step=${$(this).data('tab')}]`).show();
        });

        // $('.form').submit(function(e) {
        //     e.preventDefault();
        //     let step = $(this).parent('.form-holder').data('step');
        //     if (step === 1) {
        //         if (!$('#location-id').val()) {
        //             showMsg('Select a city from the dropdown', 'err');
        //             return;
        //         }
        //         if (niches.length === 0) {
        //             showMsg('Select at least 1 category.', 'err');
        //             return;
        //         } else {
        //             $(`[name='niches']`).val(`[${niches}]`);
        //         }
        //     } else if (step === 3) {
        //         $(`[name='del_img_list']`).val(`[${delImgList}]`);
        //     }
        //     let btn = $(this).find('.btn');
        //     btnLoad(btn);
        //     $.ajax({
        //         type: "POST",
        //         url: '/edit-profile/!'.replace('!', step),
        //         contentType: false,
        //         enctype: 'multipart/form-data',
        //         processData: false,
        //         data: new FormData($(this).get(0)),
        //         cache: false,
        //         success: function(data) {
        //             if (data.hasOwnProperty('error')) {
        //                 showMsg(data.error, 'err');
        //             } else {
        //                 showMsg('Changes Saved.', 'succ');
        //             }
        //             stopBtnLoad(btn, 'Save');
        //         }
        //     });

        // });

        // step 2 validation
        $('.platform-option').click(function() {
            $(this).hide();
            $(this).siblings('.input-row').css('display', 'flex');
            $(this).siblings('.input-title').show();
        });

        let niches = [34, 36, 37, ];
        $('.niche-holder').click(function() {
            if (!$(this).hasClass('niche-selected')) {
                if (niches.length > 3) {
                    showMsg('You can only select 3 categories.', 'err');
                    return;
                }
                $(this).addClass('niche-selected');
                niches.push($(this).data('id'));
                $('#niches').val() = niches
                $('#niches').val(niches.join(','));
            } else {
                $(this).removeClass('niche-selected');
                let i = $.inArray($(this).data('id'), niches);
                niches.splice(i, 1);
            }
        });

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
                        'https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/avatar.png');
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
                    if (idx === 0 && '') imgPath = "";
                    if (idx === 1 && '') imgPath = "";
                    if (idx === 2 && '') imgPath = "";
                    if (idx === 3 && '') imgPath = "";
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
    </script>
@endsection
