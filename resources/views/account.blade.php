@extends('layouts.main')

@push('footer-style')
    <style>
        .edit-holder {
            width: 80%;
            margin: 4% auto;
        }

        .edit-title {
            font-size: 210%;
            font-weight: 600;
            margin: 0 0 4% 0;
        }

        .tabs-holder {
            display: flex;
            margin-bottom: 4%;
        }

        .tab-active {
            box-shadow: 0 3px 0 0 var(--black);
            color: var(--black);
        }

        .tab {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            padding: 18px 9px;
            margin-right: 45px;
            color: gray;
            cursor: pointer;
            font-weight: 600;
            transition-duration: 0.3s;
            white-space: nowrap;
        }

        .tab {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            padding: 18px 9px;
            margin-right: 45px;
            color: gray;
            cursor: pointer;
            font-weight: 600;
            transition-duration: 0.3s;
            white-space: nowrap;
        }

        .form-holder {
            display: none;
        }

        div {
            display: block;
        }

        .form-skinny {
            width: 50% !important;
        }

        .form-holder .input {
            width: calc(100% - 10px);
            margin-bottom: 6%;
        }

        .input,
        .textarea,
        select {
            -webkit-appearance: none;
            appearance: none;
        }

        .input {
            min-height: 45px;
            padding: 0 4px;
        }

        .textarea,
        .input,
        #card-element {
            font-family: 'Inter', sans-serif;
            border-radius: 8px;
            background-color: white;
            border: 1px solid rgba(191, 203, 218, .9);
            transition-duration: 0.3s;
        }

        .input-title {
            font-weight: 600;
            margin-bottom: 14px;
            display: flex;
            align-items: center;
        }

        .submit {
            background-color: var(--black);
            color: white;
            width: 250px;
            padding: 16px 0;
            margin: 0 0 0 auto;
        }

        .form-holder {
            display: none;
        }

        .form {
            display: flex;
            justify-content: center;
            width: 100%;
            flex-direction: column;
        }

        .input-title-btn {
            color: #2c9eff;
            margin-left: 12px;
            font-size: 82%;
            cursor: pointer;
        }

        .card-holder {
            font-size: 92%;
            display: flex;
            align-items: center;
        }

        .card-img {
            opacity: 0.7;
            width: 17px;
            margin-right: 8px;
        }

        .btn:hover {
            opacity: 0.8;
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

        .disable-btn {
            background-color: var(--red);
        }

        .settings-btn {
            min-width: fit-content;
            width: 40%;
            padding: 14px 0;
            margin-bottom: 6%;
            box-shadow: none !important;
        }

        .signout-btn {
            background-color: var(--black);
            color: white;
        }

        .settings-btn {
            min-width: fit-content;
            width: 40%;
            padding: 14px 0;
            margin-bottom: 6%;
            box-shadow: none !important;
        }
    </style>
@endpush

@section('main-section')
    <div id="content">
        <div class="edit-holder">
            <h1 class="edit-title">Account</h1>

            <div class="tabs-holder">
                <div class="tab tab-active" data-tab="1">Details</div>

                <div class="tab" data-tab="2">Payment</div>

                <div class="tab" data-tab="3">Settings</div>
            </div>

            <div class="form-holder" data-step="1" style="display: block">
                <form class="form form-skinny">
                    @csrf
                    <div class="input-title">Email</div>
                    <input class='input' type='email' placeholder='Email' name='email'
                        value="rnfrumn803@coachnutrio.com" required>

                    <div class="input-title">Password</div>
                    <input class='input change-pwd' minlength="6" type='password' name="curr-pwd"
                        placeholder='Enter Current Password' value="*********">

                    <button class='submit btn'>Save</button>
                </form>
            </div>


            <div class="form-holder" data-step="2">
                <div class="form form-skinny">



                    <div class="input-title">Card Verification <div class="change-card-btn input-title-btn">Change</div>
                    </div>
                    <div class="card-holder"><img class="card-img"
                            src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/card.svg"
                            alt="">Visa **** **** **** 9955 11/27</div>

                </div>
            </div>


            <div class="form-holder" data-step="3">
                <div class="form form-skinny">
                    <div class="input-title">SMS Alerts</div>

                    <div class="disable-btn btn settings-btn">Disable SMS Alerts</div>


                    <div class="input-title">Log Out</div>
                    <div class="signout-btn btn settings-btn" onclick="location.href='/logout'">Sign Out</div>

                    <div class="acc-btn-holder">


                        <div class="delete-acc-btn">Delete Account</div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        $(function() {
            let tab = '1';
            if (tab) $(`[data-tab='${tab}']`).click();
        });

        $('.tab').click(function() {
            let tab = $(this).data('tab');
            $('.tab').removeClass("tab-active");
            $('.form-holder').hide();
            $(this).addClass('tab-active');
            $(`[data-step=${tab}]`).show();
            replaceUrl('t', tab);
        });

        function replaceUrl(arg, param) {
            let href = new URL(window.location.href);
            href.searchParams.set(arg, param);
            history.replaceState(null, '', href.toString());
        }

        // tab 1
        $('.change-pwd').click(function() {
            if ($(this).val() === '*********') {
                $(this).val('');
                $('.new-pwd').show();
            }
        });

        $('.form').submit(function(e) {
            e.preventDefault();

            let newPassword = $("#new-pwd").val().trim();
            let newPasswordConfirm = $("#new-pwd-confirm").val().trim();

            if (newPassword.length && newPassword !== newPasswordConfirm) {
                showMsg("New password does not match.", 'err');
                return;
            }

            let btn = $(this).find('.submit');
            btnLoad(btn);
            $.ajax({
                url: "/account",
                type: 'POST',
                data: new FormData($(this).get(0)),
                processData: false,
                contentType: false,
                cache: false,
                success: function(data) {
                    stopBtnLoad(btn, 'Save');
                    if (data.hasOwnProperty('error')) {
                        showMsg(data.error, 'err');
                    } else {
                        showMsg(data.success, 'succ');
                    }
                }
            });
        });

        // tab 2

        $('.change-card-btn').click(function() {
            $.ajax({
                headers: {
                    'X-CSRFToken': 'OMVdB3EzdkeLaY9YNYkuhcqIbt5guWeEnDVf5yX6n4ob6ewgJTVR15va4QDdNNpn'
                },
                url: "/change-card",
                type: 'POST',
                success: function(data) {
                    if (!data.hasOwnProperty('error')) {
                        showModal(data);
                    } else {
                        showMsg(data.error, 'err');
                    }
                }
            });
        });


        // get payout login link
        function getLink() {
            $.ajax({
                headers: {
                    'X-CSRFToken': 'OMVdB3EzdkeLaY9YNYkuhcqIbt5guWeEnDVf5yX6n4ob6ewgJTVR15va4QDdNNpn'
                },
                url: "/get-dots-login-link",
                type: 'POST',
                success: function(data) {
                    if (data.hasOwnProperty('success')) {
                        window.open(data.success);
                    }
                }
            });
        }

        // tab 3
        $('.enable-btn').click(function() {
            $.ajax({
                headers: {
                    'X-CSRFToken': 'OMVdB3EzdkeLaY9YNYkuhcqIbt5guWeEnDVf5yX6n4ob6ewgJTVR15va4QDdNNpn'
                },
                url: "/add-sms",
                type: 'POST',
                success: function(data) {
                    if (!data.hasOwnProperty('error')) {
                        showModal(data);
                    } else {
                        showMsg(data.error, 'err');
                    }
                }
            });
        });

        $(".disable-btn").click(function(e) {
            e.preventDefault();
            let btn = $(this);
            if (btn.text().includes('Disable')) {
                btn.text("Confirm");
                return;
            }
            $.ajax({
                headers: {
                    'X-CSRFToken': 'OMVdB3EzdkeLaY9YNYkuhcqIbt5guWeEnDVf5yX6n4ob6ewgJTVR15va4QDdNNpn'
                },
                url: "/disable-sms",
                type: 'POST',
                success: function(data) {
                    if (data.hasOwnProperty('error')) {
                        showMsg(data.error, 'err');
                    } else {
                        showMsg(data.success, 'succ');
                        btn.text("Disabled");
                    }
                }
            });
        });



        $('.delete-acc-btn').click(function() {
            showModal(`
<link rel='stylesheet' type='text/css' href="/static/igmarketplace/auth/brandSignupModal.css?v=3.65">


<form class="delete-form" >
    <input type="hidden" name="csrfmiddlewaretoken" value="OMVdB3EzdkeLaY9YNYkuhcqIbt5guWeEnDVf5yX6n4ob6ewgJTVR15va4QDdNNpn">

    <div class="modal-content-header">
        <div class="modal-content-header-title">Why Are You Deleting Your Account?</div>
        <div class="close-modal"><img class="close-modal-img" src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/closeModal.svg"></div>
    </div>

    <div class="modal-content-scroll">
        <div class="modal-txt modal-txt-space">Once you delete your account, all of your profile and payout info will be removed. If you choose to come back, you will need to create profile and be verified again. </div>

        <select class="input" name="delete_reason" required>
            <option value="" disabled selected hidden>Please select a reason</option>
            
                <option value="1">Too busy/Not taking new partnerships</option>
            
                <option value="2">Not enough orders</option>
            
                <option value="3">I&#x27;ll be back</option>
            
                <option value="4">Other</option>
            
                <option value="5">Orders not relevant</option>
            
        </select>
    </div>

    <div class="modal-content-footer">
        <button class='btn modal-btn'>Delete Account</button>
        
    </div>
</form>
`);
        });



        $(document).on('submit', '.delete-form', function(e) {
            e.preventDefault();
            let btn = $(this).find('.btn');
            btnLoad(btn);
            $.ajax({
                url: "/delete-account",
                type: 'POST',
                data: new FormData($(this).get(0)),
                processData: false,
                contentType: false,
                cache: false,
                success: function(data) {
                    if (data.hasOwnProperty('error')) {
                        stopBtnLoad(btn, 'Delete Account');
                        showMsg(data.error, 'err');
                    } else {
                        location.href = '/logout';
                    }
                }
            });
        });
    </script>
@endsection
