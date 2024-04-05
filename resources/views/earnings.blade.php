@extends('layouts.main')

@push('footer-style')
    <style>
        .nk-footer {
            display: none;
        }
        .billing-holder {
            width: 80%;
            margin: 4% auto;
        }

        .billing-title {
            font-size: 210%;
            font-weight: 600;
            margin: 0 0 4% 0;
        }

        .total-row {
            display: flex;
            flex-wrap: wrap;
            margin: 5% 0 6% 0;
        }

        .total-holder {
            width: 25%;
            padding: 26px 0 26px 26px;
            border-right: 1px solid rgba(191, 203, 218, .6);
        }

        .total-title {
            color: gray;
            margin-bottom: 5px;
            font-size: 90%;
        }

        .total-num {
            font-weight: 500;
            font-size: 190%;
            margin: 0;
        }

        .total-holder {
            width: 25%;
            padding: 26px 0 26px 26px;
            border-right: 1px solid rgba(191, 203, 218, .6);
        }

        .total-title {
            color: gray;
            margin-bottom: 5px;
            font-size: 90%;
        }

        .total-num {
            font-weight: 500;
            font-size: 190%;
            margin: 0;
        }

        .input-form {
            display: flex;
            margin: 2% 0;
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

        .input {
            min-height: 32px !important;
            font-weight: 300;
            margin-right: 8px;
            width: 100px;
        }

        select {
            padding-right: 25px;
            background-image: url(data:image/svg+xml;charset=utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" xml:space="preserve"><path d="M7.41,8.59L12,13.17l4.59-4.58L18,10l-6,6l-6-6L7.41,8.59z"/><path fill="none" d="M0,0h24v24H0V0z"/></svg>);
            background-position: center right;
            background-repeat: no-repeat;
        }

        option {
            font-weight: normal;
            display: block;
            min-height: 1.2em;
            padding: 0px 2px 1px;
            white-space: nowrap;
        }

        .order-holder {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 10px;
            border-bottom: 1px solid rgba(191, 203, 218, .4);
            font-size: 92%;
        }

        .order-date,
        .order-amount {
            width: 90px;
        }

        .order-title {
            font-weight: 600;
        }

        .order-details {
            width: 30%;
        }

        .order-status {
            width: 16%;
        }

        .order-date,
        .order-amount {
            width: 90px;
        }

        .no-orders {
            margin: 5% auto;
            text-align: center;
            color: #AAA;
        }
    </style>
@endpush

@section('main-section')
    <div id="content">
        <div class="billing-holder">
            <h1 class="billing-title">Earnings</h1>

            <div class="total-row">

                <div class="total-holder">
                    <div class="total-title">Total Earned (2024)</div>
                    <div class="total-num">$0.00</div>
                </div>
                <div class="total-holder">
                    <div class="total-title">Total Pending (2024)</div>
                    <div class="total-num">$0</div>
                </div>

            </div>

            <form class="input-form" method="get">
                <select class="input type-input">
                    <option value="">All Earnings</option>


                </select>

                <select class="input year-input" name="y">

                    <option value="2021">2021</option>

                    <option value="2022">2022</option>

                    <option value="2023">2023</option>

                    <option value="2024" selected>2024</option>

                </select>

                <select class="input month-input" name="m">
                    <option value="">All Months</option>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
            </form>

            <div class="orders-holder">
                <div class="orders-table">
                    <div class="order-holder">
                        <div class="order-title order-date">Date</div>
                        <div class="order-title order-details">Details</div>
                        <div class="order-title order-status">Status</div>
                        <div class="order-title order-amount">Amount</div>
                    </div>

                    <div class="no-orders">You have no payments for the time period selected.</div>

                </div>
            </div>
        </div>
    </div>
@endsection
