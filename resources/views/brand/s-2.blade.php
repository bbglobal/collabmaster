@extends('layouts.main')

@push('footer-style')
    <style>
        .nk-footer {
            display: none;
        }#brand-none{
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
                            <div class="progress progress-lg">
                                <div class="progress-bar" id="progressBar" data-progress="25">25%</div>
                            </div>

                            <div id="s-2">
                                <div class="card">
                                    <div class="card-inner card-inner p-0">
                                        <div class="nk-block-head my-5">
                                            <div class="nk-block-head-content">
                                                <h3 class="nk-block-title"><b>Which categories best describe your brand?</b>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="top-btn-holder">
                                            <svg class="back-btn" viewBox="0 0 24 24" aria-hidden="true">
                                                <path
                                                    d="M19 11H7.83l4.882-4.882a1 1 0 000-1.413h-.005a1 1 0 00-1.408 0L4.705 11.3a1 1 0 000 1.41L11.3 19.3a1 1 0 001.41 0 1 1 0 000-1.41L7.83 13H19a1 1 0 001-1 1 1 0 00-1-1z">
                                                </path>
                                            </svg>
                                        </div>

                                        <form method="POST" action="{{ route('register.brand', ['id' => 3]) }}"
                                            id="form">
                                            @csrf
                                            <div class="niches-holder scroll-holder">
                                                <label class="niche-holder" for="beauty">Beauty
                                                    <input type="checkbox" name="categories[]" id="beauty" value="Beauty">
                                                </label>
                                                <label class="niche-holder" for="travel">Travel
                                                    <input type="checkbox" name="categories[]" id="travel" value="Travel">
                                                </label>
                                                <label class="niche-holder" for="health">Health &amp; Fitness
                                                    <input type="checkbox" name="categories[]" id="health"
                                                        value="Health and Fitness">
                                                </label>
                                                <label class="niche-holder" for="food">Food &amp; Drink
                                                    <input type="checkbox" name="categories[]" id="food"
                                                        value="Food and Drink">
                                                </label>
                                                <label class="niche-holder" for="art">Art &amp; Photography
                                                    <input type="checkbox" name="categories[]" id="art"
                                                        value="Art and Photography">
                                                </label>
                                                <label class="niche-holder" for="comedy">Comedy &amp; Entertainment
                                                    <input type="checkbox" name="categories[]" id="comedy"
                                                        value="Comedy and Entertainment">
                                                </label>
                                                <label class="niche-holder" for="music">Music &amp; Dance
                                                    <input type="checkbox" name="categories[]" id="music"
                                                        value="Music and Dance">
                                                </label>
                                                <label class="niche-holder" for="entrepreneur">Entrepreneur &amp; Business
                                                    <input type="checkbox" name="categories[]" id="entrepreneur"
                                                        value="Entrepreneur and Business">
                                                </label>
                                                <label class="niche-holder" for="family">Family &amp; Children
                                                    <input type="checkbox" name="categories[]" id="family"
                                                        value="Family and Children">
                                                </label>
                                                <label class="niche-holder" for="animals">Animals &amp; Pets
                                                    <input type="checkbox" name="categories[]" id="animals"
                                                        value="Animals and Pets">
                                                </label>
                                                <label class="niche-holder" for="sports">Athlete &amp; Sports
                                                    <input type="checkbox" name="categories[]" id="sports"
                                                        value="Athlete and Sports">
                                                </label>
                                                <label class="niche-holder" for="education">Education
                                                    <input type="checkbox" name="categories[]" id="education"
                                                        value="Education">
                                                </label>
                                                <label class="niche-holder" for="adventure">Adventure &amp; Outdoors
                                                    <input type="checkbox" name="categories[]" id="adventure"
                                                        value="Adventure and Outdoors">
                                                </label>
                                                <label class="niche-holder" for="technology">Technology
                                                    <input type="checkbox" name="categories[]" id="technology"
                                                        value="Technology">
                                                </label>
                                                <label class="niche-holder" for="gaming">Gaming
                                                    <input type="checkbox" name="categories[]" id="gaming" value="Gaming">
                                                </label>
                                                <label class="niche-holder" for="healthcare">Healthcare
                                                    <input type="checkbox" name="categories[]" id="healthcare"
                                                        value="Healthcare">
                                                </label>
                                                <label class="niche-holder" for="cannabis">Cannabis
                                                    <input type="checkbox" name="categories[]" id="Cannabis"
                                                        value="cannabis">
                                                </label>
                                                <label class="niche-holder" for="trades">Skilled Trades
                                                    <input type="checkbox" name="categories[]" id="trades"
                                                        value="Skilled Trades">
                                                </label>
                                                <label class="niche-holder" for="automotive">Automotive
                                                    <input type="checkbox" name="categories[]" id="automotive"
                                                        value="Automotive">
                                                </label>
                                            </div>
                                            <div class="form-group mb-3">
                                                <button type="submit" class="btn btn-lg btn-secondary btn-block s-2-con"
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
    <!-- content @e -->

    <script>
        $(document).ready(function() {

            $('#form').submit(() => {
                $('#primary').addClass("d-none");
                $("#loading").removeClass("d-none")
            });

            $('.niche-holder input[type="checkbox"]').on('change', function() {
                var selectedCount = $('.niche-holder input[type="checkbox"]:checked').length;
                if (selectedCount <= 3) {
                    $(this).closest('.niche-holder').toggleClass('niche-selected');

                    var nicheText = $(this).closest('.niche-holder').text().trim();

                } else {
                    console.log('Maximum selection limit (3) reached.');
                    $(this).prop('checked', false);
                }
            });
        });
    </script>
@endsection
