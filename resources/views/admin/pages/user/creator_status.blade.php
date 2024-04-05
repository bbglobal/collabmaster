@extends('admin.layout.master')
@section('title', 'Status')

@push('plugin-styles')
    <link href="{{ asset('admin/assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Status Changes</h4>
                    <br>
                    {{-- <p class="text-muted mb-3">Read the <a href="https://jqueryvalidation.org/" target="_blank"> Official jQuery Validation Documentation </a>for a full list of instructions and other options.</p> --}}
                    <form id="signupForm" action="{{ route('admin.status.creator.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" @if(!empty($user)) value="{{$user->id}}" @endif>

                        <div class="mb-3">
                            <label for="ageSelect" class="form-label">Status</label>
                            <select class="form-select" name="status" id="ageSelect" required>
                                <option selected disabled>Select your Status</option>
                                <option value="Active" @if(!empty($user) && $user->status == 'Active') selected @endif>Active</option>
                                <option value="DeActive" @if(!empty($user) && $user->status == 'DeActive') selected @endif>DeActive</option>

                            </select>
                            <span class="text-danger">{{ $errors->first('status') }}</span>

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
