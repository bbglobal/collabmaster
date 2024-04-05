@extends('admin.layout.master')
@section('title', 'Assign')

@push('plugin-styles')
    <link href="{{ asset('admin/assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Assign</h4>
                    <br>
                    {{-- <p class="text-muted mb-3">Read the <a href="https://jqueryvalidation.org/" target="_blank"> Official jQuery Validation Documentation </a>for a full list of instructions and other options.</p> --}}
                    <form id="signupForm" action="{{ route('admin.store.assign') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="ageSelect" class="form-label">SubAdmin</label>
                            <select class="form-select" name="subadmin_id" id="ageSelect" required>
                                <option selected disabled>Select your SubAdmin</option>
                                @foreach ($subadmins as $subadmin)
                                    <option value="{{ $subadmin->id }}">
                                        {{ $subadmin->name }}
                                    </option>
                                @endforeach

                            </select>
                            <span class="text-danger">{{ $errors->first('subadmin_id') }}</span>

                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Assign</label>
                            <input id="name" class="form-control" name="assign" type="text">
                            <span class="text-danger">{{ $errors->first('assign') }}</span>

                        </div>


                        <input class="btn btn-primary" type="submit" value="Submit">
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
