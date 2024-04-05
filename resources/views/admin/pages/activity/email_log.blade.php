@extends('admin.layout.master')
@section('title', 'Activity Log')

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
                    <h6 class="card-title">Activity Log</h6>
                    <p class="text-muted mb-3"><a href="https://datatables.net/" target="_blank"></a></p>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Full Name</th>
                                    <th>Brand Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Found Us</th>
                                    <th>Role</th>
                                    <th>Status</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($brands as $brand)
                                    <tr>
                                        <td>{{ $brand->id }}</td>
                                        <td>{{ $brand->full_name }}</td>
                                        <td>{{ $brand->brand_name }}</td>
                                        <td>{{ $brand->email }}</td>
                                        <td>{{ $brand->phone_number }}</td>
                                        <td>{{ $brand->found_us }}</td>
                                        <td>{{ $brand->role }}</td>
                                        <td>
                                            @if($brand->status == 'Active')
                                            <span class="text-success">
                                                Active
                                            </span>
                                            @else
                                            <span class="text-danger">
                                                DeActive
                                            </span>
                                            @endif
                                         </td>

                                        <td>
                                            <a class="edit"
                                                href="{{route('admin.brand.status',['id'=>$brand->id])}}">
                                                <i class="link-icon" data-feather="edit"></i>

                                            </a>
                                            <a class="edit"
                                                href="{{route('admin.brand.edit',['id'=>$brand->id])}}">
                                                <i class="link-icon" data-feather="user"></i>

                                            </a>
                                            <a class="edit"
                                                href="{{route('admin.brand.details',['id'=>$brand->id])}}">
                                                <i class="link-icon" data-feather="eye"></i>

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
