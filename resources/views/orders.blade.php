@extends('layouts.main')

@push('footer-style')
    <style>
        .nk-footer {
            display: none;
        }

        .no-orders {
            text-align: center;
            margin: 8% auto 4% auto;
            width: 80%;
        }

        .btn {
            display: block;
            text-align: center;
            font-weight: 600;
            border: none;
            font-size: 100%;
            font-family: inherit;
            border-radius: 8px;
            box-shadow: var(--lightBoxShadow);
            text-decoration: none;
            cursor: pointer;
            transition-duration: 0.3s;
            position: relative;
        }

        .no-orders-btn {
            background-color: var(--black);
            padding: 16px;
            width: 200px;
            margin: 0 auto;
            color: white;
        }

        .no-orders-outline-btn {
            background-color: var(--white);
            padding: 14px;
            width: 200px;
            color: var(--black);
            border: 2px solid var(--black);
        }

        .no-orders-outline-btn:hover {
            background-color: var(--black);
            color: var(--white);
        }

        .order-info {
            background: #fcfcaa9e;
            padding: 1rem
        }

        .orders-container {
            border: 1px solid #8d8d8d2b;
            padding: 1rem;
        }

        .order-state {
            display: flex;
            align-items: center;
            justify-content: start;
        }

        #msg-holder {
            display: none;
        }
    </style>
@endpush

@section('main-section')
    <link rel="stylesheet" href="{{ url('assets/css/banner.css') }}">
    <div id="msg-holder">
        <div id="msg-holder-row">
            <img src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/succ.svg" class="succ-err-msg-img"
                id="msg-img-succ">
            <img src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/err.svg" class="succ-err-msg-img"
                id="msg-img-err">
            <div id="msg"></div>
        </div>
    </div>
    <div id="content">
        @if (Auth::user()->role == 'creator' && count($orders) > 0)
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            {{-- if user has no orders  --}}
            {{-- <div class="no-orders">Your orders will be displayed here. Share your profile to help increase sales.</div> --}}
            {{-- <div class="btn no-orders-btn" onclick="copyLink()">Share Profile</div> --}}


            {{-- if user got orders --}}
            <div class="orders-container">
                <h6>My Orders</h6>
                @foreach ($orders as $order)
                    <div class="order-info">
                        <small>
                            <strong>{{ $order->package_content_type }}</strong><br />
                        </small>
                        <small>{{ $order->description }}</small>
                    </div>
                    <div class="order-state">
                        @if ($order->conformation_status == 'Accepted')
                            <button type="button" class="btn no-orders-btn" style="margin: 1rem;" disabled>
                                Accepted
                            </button>
                        @elseif($order->conformation_status == 'Decline')
                            <button type="button" class="btn no-orders-btn" style="margin: 1rem;" disabled>
                                Decline
                            </button>
                        @else
                            <form action="{{ route('order.conformation.process') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $order->id }}">
                                <input type="hidden" name="conformation_status" value="Accepted">
                                <button type="submit" class="btn no-orders-btn" style="margin: 1rem;">Accept</button>
                            </form>

                            <form action="{{ route('order.conformation.process') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $order->id }}">
                                <input type="hidden" name="conformation_status" value="Decline">
                                <button type="submit" class="btn no-orders-outline-btn"
                                    style="margin: 1rem;">Decline</button>
                            </form>
                        @endif

                    </div>
                @endforeach


            </div>
        @elseif(Auth::user()->role == 'creator' && count($offers) > 0)
            <div class="orders-container">
                <h5>My Offers</h5>
                @foreach ($offers as $row)
                    <h6 class="mt-5"><u>{{ $row->package_title }}</u></h6>
                    <small class="text-muted" style="word-break: break-word;">{{ $row->package_description }}</small>
                    <a href="{{ url('chatify/' . $row->brand_id) }}" type="button" class="btn no-orders-btn"
                        style="margin: 1rem;">
                        Let's Chat
                    </a>
                @endforeach
            </div>
        @else
            <div class="no-orders">Your orders will be displayed here. To create an order, purchase a package from a Brand.
            </div>
            <a href="{{ route('explore') }}" class="btn no-orders-btn">Explore Influencers</a>
        @endif
    </div>

    <script>
        function copyLink() {
            let textArea = document.createElement("textarea");
            textArea.value = 'https://collabstr.com/user';
            document.body.appendChild(textArea);
            textArea.select();
            document.execCommand("Copy");
            textArea.remove();
            showMsg('Profile URL copied to clipboard.', 'succ')
        }
    </script>
@endsection
