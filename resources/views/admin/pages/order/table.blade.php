@extends('admin.layout.master')
@section('title', 'Orders')

@push('plugin-styles')
    <link href="{{ asset('admin/assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet" />
@endpush



@section('content')
    <nav class="page-breadcrumb">
        {{-- <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('user.annual')}}">Annual</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data Table</li>
  </ol>  --}}
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
    </nav>




    <div class="row">


        <div class="col-md-12 grid-margin stretch-card">

            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Orders</h6>
                    <p class="text-muted mb-3"><a href="https://datatables.net/" target="_blank"></a></p>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Full Name</th>
                                    <th>Address</th>
                                    <th>Description</th>
                                    <th>Package Content Type</th>
                                    <th>Price</th>
                                    <th>Payment Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->full_name }}</td>
                                        <td>{{ $order->address }}</td>
                                        <td>{{ $order->description }}</td>
                                        <td>{{ $order->package_content_type }}</td>
                                        <td>{{ $order->price }}</td>
                                        <td>
                                            @if ($order->payment_status == 'Completed')
                                                <span class="text-success">
                                                    Accepted
                                                </span>
                                            @elseif($order->payment_status == 'Decline')
                                                <span class="text-danger">
                                                    Decline
                                                </span>
                                            @elseif($order->payment_status == 'Pending')
                                                <span class="text-warning">
                                                    Pending
                                                </span>
                                            @elseif($order->payment_status == 'Approved')
                                                <span class="text-info">
                                                    Approved
                                                </span>
                                            @endif
                                        </td>

                                        <td>
                                            <a class="edit" href="{{ route('admin.invoice', ['id' => $order->id]) }}"
                                                target="_blank">
                                                <i class="link-icon" data-feather="eye"></i>

                                            </a>

                                            <a class="edit" href="{{ route('admin.order.edit', ['id' => $order->id]) }}"
                                                target="_blank">
                                                <i class="link-icon" data-feather="edit"></i>

                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
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
