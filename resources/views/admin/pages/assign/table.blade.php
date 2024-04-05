@extends('admin.layout.master')
@section('title', 'Assign')

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

        <div class="col-md-12">
            <a class="btn btn-primary" href="{{ route('admin.add.assign') }}" style="float: right; margin: 5px">Add
                Assign</a>
        </div>
        <br>
        <div class="col-md-12 grid-margin stretch-card">

            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Assigns</h6>
                    <p class="text-muted mb-3"><a href="https://datatables.net/" target="_blank"></a></p>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Assign</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($assigns as $assign)
                                    <tr>
                                        <td>{{ $assign->id }}</td>
                                        <td>{{ $assign->subadmin->name }}</td>
                                        <td>{{ $assign->assign }}</td>
                                        <td>
                                            <a class="edit"
                                                href="{{ route('admin.edit.assign', ['id' => $assign->id]) }}">
                                                <i class="link-icon" data-feather="edit"></i>

                                            </a>
                                            <a class="fa fa-trash"
                                                href="{{ route('admin.delete.assign', ['id' => $assign->id]) }}">
                                                <i class="link-icon" data-feather="delete"></i>

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
