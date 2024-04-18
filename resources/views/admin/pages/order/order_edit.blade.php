@extends('admin.layout.master')
@section('title', 'Update Order')

@push('plugin-styles')
    <link href="{{ asset('admin/assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Update Order</h4>
                    <br>
                    {{-- <p class="text-muted mb-3">Read the <a href="https://jqueryvalidation.org/" target="_blank"> Official jQuery Validation Documentation </a>for a full list of instructions and other options.</p> --}}
                    <form id="signupForm" action="{{ route('admin.order.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $order->id }}">
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input id="name" class="form-control" name="full_name" type="text"
                                value="{{ $order->full_name }}">
                            <span class="text-danger">{{ $errors->first('full_name') }}</span>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Address</label>
                            <input id="name" class="form-control" name="address" type="text"
                                value="{{ $order->address }}">
                            <span class="text-danger">{{ $errors->first('address') }}</span>

                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Description</label>
                            <input id="name" class="form-control" name="description" type="text"
                                value="{{ $order->description }}">
                            <span class="text-danger">{{ $errors->first('description') }}</span>

                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Package Content Type</label>
                            <input id="name" class="form-control" name="package_content_type" type="text"
                                value="{{ $order->package_content_type }}">
                            <span class="text-danger">{{ $errors->first('package_content_type') }}</span>

                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Price</label>
                            <input id="name" class="form-control" name="price" type="text"
                                value="{{ $order->price }}">
                            <span class="text-danger">{{ $errors->first('price') }}</span>

                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Status</label>
                            @if ($order->payment_status === 'Completed')
                                <input id="payment_status" class="form-control" name="payment_status" type="text"
                                    value="{{ $order->payment_status }}" readonly>
                            @else
                                <select class="form-control" name="payment_status" id="">
                                    <option value="Pending" @if ($order->payment_status === 'Pending') selected @endif>Pending
                                    </option>
                                    <option value="Completed" @if ($order->payment_status === 'Completed') selected @endif>Accepted
                                    </option>
                                    <option value="Approved" @if ($order->payment_status === 'Approved') selected @endif>Approved
                                    </option>
                                    <option value="Decline" @if ($order->payment_status === 'Decline') selected @endif>Decline
                                    </option>
                                </select>
                            @endif
                            <span class="text-danger">{{ $errors->first('payment_status') }}</span>

                        </div>


                        <input class="btn btn-primary" type="submit" value="Update">
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
