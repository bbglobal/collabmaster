@extends('admin.layout.master')
@section('title', 'Email Activity')

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
                    <h6 class="card-title">Email Activity</h6>
                    <p class="text-muted mb-3"><a href="https://datatables.net/" target="_blank"></a></p>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Email</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($activities as $activity)
                                    <tr>
                                        <td>{{ $activity->id }}</td>
                                        <td>{{ $activity->email }}</td>
                                        

                                         
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
