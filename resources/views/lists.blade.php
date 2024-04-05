@extends('layouts.main')

@push('footer-style')
    <style>
        .nk-footer {
            display: none;
        }

        .page-holder {
            width: 80%;
            margin: 4% auto;
        }

        .campaign-info-holder {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 0 0 4% 0;
        }

        .lists-title {
            font-size: 210%;
            font-weight: 600;
            margin: 0;
        }

        a:hover {
            color: #fff;
        }

        .create-btn {
            display: flex;
            align-items: center;
            width: fit-content;
            padding: 10px 18px;
            font-size: 90%;
            font-weight: 600;
            cursor: pointer;
            margin: 0;
            box-shadow: var(--lightBoxShadow);
            border-radius: 8px;
            transition-duration: 0.3s;
            background-color: var(--black);
            text-decoration: none;
            color: white;
        }

        .no-lists {
            color: gray;
            text-align: center;
            margin: 8% auto;
            width: 80%;
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
        <div class="page-holder">
            <div class="campaign-info-holder">
                <h1 class="lists-title">Lists</h1>
                <a href="{{ route('explore') }}" class="create-btn">Explore Influencers</a>
            </div>

            <div class="no-lists">Your saved influencers will be displayed here. To add an influencer to a list, click the
                "save" button on their profile.</div>

        </div>
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
