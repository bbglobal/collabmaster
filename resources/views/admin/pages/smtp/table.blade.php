@extends('admin.layout.master')
@section('title', 'SMTP')

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <nav class="page-breadcrumb">
        {{-- <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Annual</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Table</li>
        </ol> --}}
        @if ($message = Session::get('success'))
            <div class="alert alert-success">{{ $message }}</div>
        @endif
    </nav>
    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">SMTP Configuration</h4>
                    <br>
                    {{-- <p class="text-muted mb-3">Read the <a href="https://jqueryvalidation.org/" target="_blank"> Official jQuery Validation Documentation </a>for a full list of instructions and other options.</p> --}}
                    <form id="signupForm" action="{{ route('admin.smtp.update') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">SMTP Host</label>
                            <input id="name" class="form-control" name="host" type="text"
                                placeholder="smtp.gmail.com">
                            <span class="text-danger"></span>
                        </div>
                        <div class="mb-3">
                            <label for="port" class="form-label">SMTP Port</label>
                            <input id="port" class="form-control" name="port" type="number" placeholder="465">
                            <span class="text-danger"></span>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">SMTP Username</label>
                            <input id="username" class="form-control" name="username" type="text"
                                placeholder="example@gmail.com">
                            <span class="text-danger"></span>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">SMTP Password</label>
                            <input id="password" class="form-control" name="password" type="password"
                                placeholder="********">
                            <span class="text-danger"></span>
                        </div>
                        <div class="mb-3">
                            <label for="encryption" class="form-label">SMTP Encryption</label>
                            <select name="encryption" id="encryption" class="form-select">
                                <option value="ssl" selected disabled hidden>None</option>
                                <option value="ssl">ssl</option>
                                <option value="tls">tls</option>
                            </select>
                            <span class="text-danger"></span>
                        </div>

                        <input class="btn btn-primary" type="submit" value="Save Changes">
                        <a href="{{ route('event.test') }}" class="btn btn-success">Send a Test Email</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('plugin-scripts')
    <script src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.js') }}"></script>
@endpush

@push('custom-scripts')
    <script src="{{ asset('assets/js/data-table.js') }}"></script>
@endpush
