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
                                            <div class="more-filters-btn-holder">
                                                <div class="filters-btn more-filters-btn" data-id="location" data-toggle="modal"
                                                    data-target="#location_filter_form_modal">
                                                    Location
                                                    <svg viewbox="0 0 32 32" class="filters-btn-img">
                                                        <g fill="none">
                                                            <path
                                                                d="m28 12-11.2928932 11.2928932c-.3905243.3905243-1.0236893.3905243-1.4142136 0l-11.2928932-11.2928932">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div>

                                                <div class="filters-btn more-filters-btn" data-id="price" data-toggle="modal"
                                                    data-target="#price_filter_form_modal">
                                                    price
                                                    <svg viewbox="0 0 32 32" class="filters-btn-img">
                                                        <g fill="none">
                                                            <path
                                                                d="m28 12-11.2928932 11.2928932c-.3905243.3905243-1.0236893.3905243-1.4142136 0l-11.2928932-11.2928932">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div>

                                                <div class="filters-btn last-filters-btn ">Gender<svg viewbox="0 0 32 32"
                                                        class="filters-btn-img">
                                                        <g fill="none">
                                                            <path
                                                                d="m28 12-11.2928932 11.2928932c-.3905243.3905243-1.0236893.3905243-1.4142136 0l-11.2928932-11.2928932">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="filters-btn-dropdown" style="display: none;">
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


                                            <script>
                                                $('.more-filters-btn').click(function() {
                                                    let t = $(this).data('id');
                                                    if (t === 'price') {
                                                        $('.more-location-holder').hide();
                                                        $('.more-price-holder').show().css('visibility', 'visible');
                                                    } else {
                                                        $('.more-price-holder').css('visibility', 'hidden');
                                                        $('.more-price-title').hide();
                                                        $('.more-location-holder').show();
                                                    }
                                                    showModalFilters();
                                                });

                                                function hideModalFilters() {
                                                    $(".modal-filters").hide();
                                                    $('.modal-content-holder-filters').css('width', 'initial');
                                                    document.body.style.position = "initial";
                                                    const scrollY = document.body.style.top;
                                                    document.body.style.position = '';
                                                    document.body.style.top = '';
                                                    window.scrollTo(0, parseInt(scrollY || '0') * -1);
                                                }

                                                function showModalFilters(content, width) {
                                                    if (content) $(".modal-content-holder-filters").html(content);
                                                    if (width) $('.modal-content-holder-filters').css('width', width);
                                                    $(".modal-filters").css('display', 'flex');
                                                    // When the modal is shown, we want a fixed body
                                                    const scrollY = window.scrollY;
                                                    document.body.style.position = 'fixed';
                                                    document.body.style.top = `-${scrollY}px`;

                                                    // fix scroll issue on mobile
                                                    $('.modal-content-scroll')[0].scrollTop = 1;
                                                }

                                                $(document).on('click', '.close-modal-filters', function() {
                                                    hideModalFilters();
                                                });

                                                $(document).on('click', function(e) {
                                                    if ($(e.target).is('.modal-filters')) hideModalFilters();
                                                });

                                                function controlFromInput(fromSlider, fromInput, toInput, controlSlider) {
                                                    const [from, to] = getParsed(fromInput, toInput);
                                                    fillSlider(fromInput, toInput, '#C6C6C6', '#25daa5', controlSlider);
                                                    if (from > to) {
                                                        fromSlider.value = to;
                                                        fromInput.value = to;
                                                    } else {
                                                        fromSlider.value = from;
                                                    }
                                                }

                                                function controlToInput(toSlider, fromInput, toInput, controlSlider) {
                                                    const [from, to] = getParsed(fromInput, toInput);
                                                    fillSlider(fromInput, toInput, '#C6C6C6', '#25daa5', controlSlider);
                                                    setToggleAccessible(toInput);
                                                    if (from <= to) {
                                                        toSlider.value = to;
                                                        toInput.value = to;
                                                    }
                                                }

                                                function setInput() {
                                                    let [from, to] = getParsed(fromInput, toInput);
                                                    fillSlider(fromInput, toInput, '#C6C6C6', '#25daa5', toSlider);
                                                    setToggleAccessible(toInput);
                                                    if (isNaN(from) || from < minInputNum) {
                                                        fromSlider.value = minInputNum;
                                                        fromInput.value = minInputNum;
                                                    } else if (isNaN(to)) {
                                                        toSlider.value = from + inputStep;
                                                        toInput.value = from + inputStep;
                                                    } else {
                                                        toSlider.value = Math.max(to, from + inputStep);
                                                        toInput.value = Math.max(to, from + inputStep);
                                                    }
                                                }

                                                function controlFromSlider(fromSlider, toSlider, fromInput) {
                                                    const [from, to] = getParsed(fromSlider, toSlider);
                                                    fillSlider(fromSlider, toSlider, '#C6C6C6', '#25daa5', toSlider);
                                                    if (from > to) {
                                                        fromSlider.value = to;
                                                        fromInput.value = to;
                                                    } else {
                                                        fromInput.value = from;
                                                    }
                                                }

                                                function controlToSlider(fromSlider, toSlider, toInput) {
                                                    const [from, to] = getParsed(fromSlider, toSlider);
                                                    fillSlider(fromSlider, toSlider, '#C6C6C6', '#25daa5', toSlider);
                                                    setToggleAccessible(toSlider);
                                                    if (from <= to) {
                                                        toSlider.value = to;
                                                        toInput.value = to;
                                                    } else {
                                                        toInput.value = from;
                                                        toSlider.value = from;
                                                    }
                                                }

                                                function getParsed(currentFrom, currentTo) {
                                                    const from = parseInt(currentFrom.value, 10);
                                                    const to = parseInt(currentTo.value, 10);
                                                    return [from, to];
                                                }

                                                function fillSlider(from, to, sliderColor, rangeColor, controlSlider) {
                                                    const rangeDistance = to.max - to.min;
                                                    const fromPosition = from.value - to.min;
                                                    const toPosition = to.value - to.min;
                                                    controlSlider.style.background = `linear-gradient(
                                                    to right,
                                                    ${sliderColor} 0%,
                                                    ${sliderColor} ${(fromPosition)/(rangeDistance)*100}%,
                                                    ${rangeColor} ${((fromPosition)/(rangeDistance))*100}%,
                                                    ${rangeColor} ${(toPosition)/(rangeDistance)*100}%,
                                                    ${sliderColor} ${(toPosition)/(rangeDistance)*100}%,
                                                    ${sliderColor} 100%)`;
                                                }

                                                function setToggleAccessible(currentTarget) {
                                                    const toSlider = document.querySelector('#toSlider');
                                                    if (Number(currentTarget.value) <= 0) {
                                                        toSlider.style.zIndex = 2;
                                                    } else {
                                                        toSlider.style.zIndex = 0;
                                                    }
                                                }

                                                const fromSlider = document.querySelector('#fromSlider');
                                                const toSlider = document.querySelector('#toSlider');
                                                const fromInput = document.querySelector('#fromInput');
                                                const toInput = document.querySelector('#toInput');
                                                const minInputNum = 50;
                                                const inputStep = 5;
                                                fillSlider(fromSlider, toSlider, '#C6C6C6', '#25daa5', toSlider);
                                                setToggleAccessible(toSlider);

                                                fromSlider.oninput = () => controlFromSlider(fromSlider, toSlider, fromInput);
                                                toSlider.oninput = () => controlToSlider(fromSlider, toSlider, toInput);
                                                fromInput.oninput = () => controlFromInput(fromSlider, fromInput, toInput, toSlider);
                                                toInput.oninput = () => controlToInput(toSlider, fromInput, toInput, toSlider);
                                                fromInput.addEventListener("focusout", setInput);
                                                toInput.addEventListener("focusout", setInput);


                                                /* location */
                                                const token = "8iPbBiHSIBzKECLNNvmswWPieRgMUtU70QuwJqgUamyMTifJLdFhHllcVh7bhKyR";
                                                const locationUrl = "/get-locations";
                                                const multiple = false;
                                            </script>
                                        </div>
                                    </div><!-- .card-preview -->
                                </form>
                            </div><!-- .nk-block -->


                            <div class="nk-block my-4">
                                <div class="nk-block mb-3">
                                    <article class="entry">
                                        <h3 class="mb-0 pb-0">Instagram Influencers</h3>
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
                                                                        class="font-90 text-gray-light">{{ $row->categories }}</span>
                                                                    <span
                                                                        class="text-black"><b>₹{{ $row->package_price_ }}</b></span>
                                                                </div>
                                                                <div class="text-reduce font-90 font-w-300 text-gray-1">
                                                                    {{ $row->bio }}</div>
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
                                                src="assets/websiteImages/creatorMarketplace/arrow.svg"
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
    @endsection
