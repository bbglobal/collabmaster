@extends('admin.layout.master')
@section('title', 'Details')

@push('plugin-styles')
    <link href="{{ asset('admin/assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Details</h4>
                    <br>
                    {{-- <p class="text-muted mb-3">Read the <a href="https://jqueryvalidation.org/" target="_blank"> Official jQuery Validation Documentation </a>for a full list of instructions and other options.</p> --}}
                    
                        <div class="mb-3">
                            <label for="name" class="form-label">Location: @if (!empty($user))
                                    {{ $user->creator->location }}
                                @endif
                            </label>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Bio: @if (!empty($user))
                                    {{ $user->creator->bio }}
                                @endif
                            </label>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Description: @if (!empty($user))
                                    {{ $user->creator->description }}
                                @endif
                            </label>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Gender: @if (!empty($user))
                                    {{ $user->creator->genderOption }}
                                @endif
                            </label>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Instagram Username: @if (!empty($user))
                                    {{ $user->creator->instagram_username }}
                                @endif
                            </label>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Instagram Followers: @if (!empty($user))
                                    {{ $user->creator->instagram_followers }}
                                @endif
                            </label>
                        </div>

                        @if (!empty($user->creator->tiktok_username))
                            <div class="mb-3">
                                <label for="name" class="form-label">Tiktok Username:
                                    {{ $user->creator->tiktok_username }} </label>
                            </div>
                        @endif

                        @if (!empty($user->creator->youtube_username))
                            <div class="mb-3">
                                <label for="name" class="form-label">Youtube Username:
                                    {{ $user->creator->youtube_username }} </label>
                            </div>
                        @endif

                        @if (!empty($user->creator->twitter_username))
                            <div class="mb-3">
                                <label for="name" class="form-label">Twitter Username:
                                    {{ $user->creator->twitter_username }} </label>
                            </div>
                        @endif

                        @if (!empty($user->creator->twitch_username))
                            <div class="mb-3">
                                <label for="name" class="form-label">Twitch Username:
                                    {{ $user->creator->twitch_username }} </label>
                            </div>
                        @endif

                        @if (!empty($user->creator->amazon_storefront))
                            <div class="mb-3">
                                <label for="name" class="form-label">Amazon Storefront:
                                    {{ $user->creator->amazon_storefront }} </label>
                            </div>
                        @endif

                        @if (!empty($user->creator->website))
                            <div class="mb-3">
                                <label for="name" class="form-label">Website: {{ $user->creator->website }} </label>
                            </div>
                        @endif

                        <div class="mb-3">
                            <label for="name" class="form-label">Categories: @if (!empty($user))
                                    {{ $user->creator->categories }}
                                @endif
                            </label>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Platform: @if (!empty($user))
                                    {{ $user->creator->platform }}
                                @endif
                            </label>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Details</h4>
                    <br>
                    {{-- <p class="text-muted mb-3">Read the <a href="https://jqueryvalidation.org/" target="_blank"> Official jQuery Validation Documentation </a>for a full list of instructions and other options.</p> --}}
                    
                        <div class="mb-3">
                            <label for="name" class="form-label">Profile: 
                                <br>

                                <img src="{{asset('assets/images/'.$user->creator->file_path )}}" alt="" style="width: 100px">
                            </label>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Image 1:  <br>                          
                                <img src="{{asset('assets/images/'.$user->creator->img_1 )}}" alt="" style="width: 100px">

                            </label>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Image 2:  <br>                               
                                <img src="{{asset('assets/images/'.$user->creator->img_2 )}}" alt="" style="width: 100px">

                            </label>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Image 3:  <br>                       
                                <img src="{{asset('assets/images/'.$user->creator->img_3 )}}" alt="" style="width: 100px">

                            </label>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Image 4: <br>       
                                <img src="{{asset('assets/images/'.$user->creator->img_4 )}}" alt="" style="width: 100px">

                            </label>
                        </div>

                       

                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('plugin-scripts')
    <script src="{{ asset('admin/assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatables-net-bs5/dataTables.bootstrap5.js') }}"></script>
@endpush

@push('custom-scripts')
    <script src="{{ asset('admin/assets/js/data-table.js') }}"></script>
@endpush
