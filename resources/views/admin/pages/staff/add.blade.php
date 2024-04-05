@extends('admin.layout.master')
@section('title', 'Staff')

@push('plugin-styles')
    <link href="{{ asset('admin/assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <div class="row">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Staff</h4>
                    <br>
                    {{-- <p class="text-muted mb-3">Read the <a href="https://jqueryvalidation.org/" target="_blank"> Official jQuery Validation Documentation </a>for a full list of instructions and other options.</p> --}}
                    <form id="signupForm" action="{{ route('admin.store.staff') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
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
                            <label class="form-label">Permission</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" name="permission[]" class="form-check-input" id="checkInline1"
                                    value="Sales">
                                    <label class="form-check-label" for="checkInline1">
                                        Sales
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" name="permission[]" class="form-check-input" id="checkInline2"
                                    value="Content Managment">
                                    <label class="form-check-label" for="checkInline2">
                                        Content Managment
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" name="permission[]" class="form-check-input" id="checkInline3"
                                    value="Dispute">
                                    <label class="form-check-label" for="checkInline3">
                                        Dispute
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" name="permission[]" class="form-check-input" id="checkInline4"
                                    value="Teams">
                                    <label class="form-check-label" for="checkInline4">
                                        Teams
                                    </label>
                                </div>
                            </div>
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
