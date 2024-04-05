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

    <div id="msg-holder">
        <div id="msg-holder-row">
            <img src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/err.svg" id="msg-img-err"
                class="succ-err-msg-img">
            <div id="msg"></div>
        </div>
    </div>

    <div class="nk-content main-outer-container">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-content-wrap">

                        <div class="nk-block nk-block-middle nk-auth-body wide-xs pt-0">
                            {{-- <div class="progress progress-lg">
                                <div class="progress-bar" id="progressBar" data-progress="25">25%</div>
                            </div> --}}

                            <div id="s-2">
                                <div class="card">
                                    <div class="card-inner card-inner p-0">
                                        <div class="top-btn-holder">
                                            {{-- <div class="example-profile-btn">View Example Campaign</div> --}}
                                            <div class="step-holder">6/9</div>
                                        </div>
                                        <div class="nk-block-head my-5">
                                            <div class="nk-block-head-content">
                                                <h3 class="nk-block-title"><b>Select the niches that match your content</b>
                                                </h3>
                                            </div>
                                        </div>
                                        <a href="{{ route('create.page', ['id' => 5]) }}" class="top-btn-holder d-block">
                                            <svg class="back-btn" viewBox="0 0 24 24" aria-hidden="true">
                                                <path
                                                    d="M19 11H7.83l4.882-4.882a1 1 0 000-1.413h-.005a1 1 0 00-1.408 0L4.705 11.3a1 1 0 000 1.41L11.3 19.3a1 1 0 001.41 0 1 1 0 000-1.41L7.83 13H19a1 1 0 001-1 1 1 0 00-1-1z">
                                                </path>
                                            </svg>
                                        </a>

                                        <form method="POST" action="{{ route('create.page', ['id' => 7]) }}"
                                            id="form">
                                            @csrf
                                            <div class="niches-holder scroll-holder">
                                                <label class="niche-holder" for="Lifestyle">Lifestyle
                                                    <input type="checkbox" name="categories[]" id="Lifestyle"
                                                        value = "Lifestyle" />
                                                </label>
                                                <label class="niche-holder" for="Fashion">Fashion
                                                    <input type="checkbox" name="categories[]" id="Fashion"
                                                        value = "Fashion" />
                                                </label>
                                                <label class="niche-holder" for="Beauty">Beauty
                                                    <input type="checkbox" name="categories[]" id="Beauty"
                                                        value = "Beauty" />
                                                </label>
                                                <label class="niche-holder" for="Travel">Travel
                                                    <input type="checkbox" name="categories[]" id="Travel"
                                                        value = "Travel" />
                                                </label>
                                                <label class="niche-holder" for="Health &amp; Fitness">Health &amp; Fitness
                                                    <input type="checkbox" name="categories[]" id="Health &amp; Fitness"
                                                        value = "Health &amp; Fitness" />
                                                </label>
                                                <label class="niche-holder" for="Food &amp; Drink">Food &amp; Drink
                                                    <input type="checkbox" name="categories[]" id="Food &amp; Drink"
                                                        value = "Food &amp; Drink" />
                                                </label>
                                                <label class="niche-holder" for="Model">Model
                                                    <input type="checkbox" name="categories[]" id="Model"
                                                        value = "Model" />
                                                </label>
                                                <label class="niche-holder" for="Art &amp; Photography">Art &amp;
                                                    Photography
                                                    <input type="checkbox" name="categories[]" id="Art &amp; Photography"
                                                        value = "Art &amp; Photography" />
                                                </label>
                                                <label class="niche-holder" for="Comedy &amp; Entertainment">Comedy &amp;
                                                    Entertainment
                                                    <input type="checkbox" name="categories[]"
                                                        id="Comedy &amp; Entertainment"
                                                        value = "Comedy &amp; Entertainment" />
                                                </label>
                                                <label class="niche-holder" for="Music &amp; Dance">Music &amp; Dance
                                                    <input type="checkbox" name="categories[]" id="Music &amp; Dance"
                                                        value = "Music &amp; Dance" />
                                                </label>
                                                <label class="niche-holder" for="Entrepreneur &amp; Business">Entrepreneur
                                                    &amp; Business
                                                    <input type="checkbox" name="categories[]"
                                                        id="Entrepreneur &amp; Business"
                                                        value = "Entrepreneur &amp; Business" />
                                                </label>
                                                <label class="niche-holder" for="Family &amp; Children">Family &amp;
                                                    Children
                                                    <input type="checkbox" name="categories[]" id="Family &amp; Children"
                                                        value = "Family &amp; Children" />
                                                </label>
                                                <label class="niche-holder" for="Animals &amp; Pets">Animals &amp; Pets
                                                    <input type="checkbox" name="categories[]" id="Animals &amp; Pets"
                                                        value = "Animals &amp; Pets" />
                                                </label>
                                                <label class="niche-holder" for="Athlete &amp; Sports">Athlete &amp;
                                                    Sports
                                                    <input type="checkbox" name="categories[]" id="Athlete &amp; Sports"
                                                        value = "Athlete &amp; Sports" />
                                                </label>
                                                <label class="niche-holder" for="Education">Education
                                                    <input type="checkbox" name="categories[]" id="Education"
                                                        value = "Education" />
                                                </label>
                                                <label class="niche-holder" for="Adventure &amp; Outdoors">Adventure &amp;
                                                    Outdoors
                                                    <input type="checkbox" name="categories[]"
                                                        id="Adventure &amp; Outdoors"
                                                        value = "Adventure &amp; Outdoors" />
                                                </label>
                                                <label class="niche-holder" for="Technology">Technology
                                                    <input type="checkbox" name="categories[]" id="Technology"
                                                        value = "Technology" />
                                                </label>
                                                <label class="niche-holder" for="Gaming">Gaming
                                                    <input type="checkbox" name="categories[]" id="Gaming"
                                                        value = "Gaming" />
                                                </label>
                                                <label class="niche-holder" for="Celebrity &amp; Public Figure">Celebrity
                                                    &amp; Public Figure
                                                    <input type="checkbox" name="categories[]"
                                                        id="Celebrity &amp; Public Figure"
                                                        value = "Celebrity &amp; Public Figure" />
                                                </label>
                                                <label class="niche-holder" for="Actor">Actor
                                                    <input type="checkbox" name="categories[]" id="Actor"
                                                        value = "Actor" />
                                                </label>
                                                <label class="niche-holder" for="Healthcare">Healthcare
                                                    <input type="checkbox" name="categories[]" id="Healthcare"
                                                        value = "Healthcare" />
                                                </label>
                                                <label class="niche-holder" for="LGBTQ2+">LGBTQ2+
                                                    <input type="checkbox" name="categories[]" id="LGBTQ2+"
                                                        value = "LGBTQ2+" />
                                                </label>
                                                <label class="niche-holder" for="Vegan">Vegan
                                                    <input type="checkbox" name="categories[]" id="Vegan"
                                                        value = "Vegan" />
                                                </label>
                                                <label class="niche-holder" for="Cannabis">Cannabis
                                                    <input type="checkbox" name="categories[]" id="Cannabis"
                                                        value = "Cannabis" />
                                                </label>
                                                <label class="niche-holder" for="Skilled Trades">Skilled Trades
                                                    <input type="checkbox" name="categories[]" id="Skilled Trades"
                                                        value = "Skilled Trades" />
                                                </label>
                                                <label class="niche-holder" for="Automotive">Automotive
                                                    <input type="checkbox" name="categories[]" id="Automotive"
                                                        value = "Automotive" />
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

            $('#msg-holder').hide();

            $('#form').submit(() => {
                $('#primary').addClass("d-none");
                $("#loading").removeClass("d-none")
            });

            $('.niche-holder input[type="checkbox"]').on('change', function() {
                var selectedCount = $('.niche-holder input[type="checkbox"]:checked').length;
                if (selectedCount <= 6) {
                    $(this).closest('.niche-holder').toggleClass('niche-selected');

                    var nicheText = $(this).closest('.niche-holder').text().trim();

                } else {
                    console.log('Maximum selection limit (6) reached.');
                    showMsg('You can only select 6 niches', 'err');
                    $(this).prop('checked', false);
                }
            });

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
        });
    </script>
@endsection
