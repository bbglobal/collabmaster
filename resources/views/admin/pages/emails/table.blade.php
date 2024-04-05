@extends('admin.layout.master')
@section('title', 'Email Templates')

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
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">SMTP Configuration</h4>
                    <br>
                    {{-- <p class="text-muted mb-3">Read the <a href="https://jqueryvalidation.org/" target="_blank"> Official jQuery Validation Documentation </a>for a full list of instructions and other options.</p> --}}
                    <form id="signupForm" action="{{ route('update.email.template') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="heading" class="form-label">Heading</label>
                            <input id="heading" class="form-control" name="heading" type="text" value="{{ $template->heading }}"
                                placeholder="Email Title" required>
                            @error('heading')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="body" class="form-label">Body</label>
                            <textarea class="form-control" name="body" id="body" cols="30" rows="5" required>{{ $template->body }}</textarea>
                            @error('body')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="table-responsive my-5">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Customer Name</th>
                                        <td>{customer_name}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{email}</td>
                                    </tr>
                                    <tr>
                                        <th>Contact</th>
                                        <td>{contact}</td>
                                    </tr>
                                    <tr>
                                        <th>Role</th>
                                        <td>{role}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mb-3">
                            <label for="port" class="form-label">Signature</label>
                            <input id="port" class="form-control" type="text" value="{email_signature}" readonly>
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
