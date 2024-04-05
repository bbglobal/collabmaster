@extends('admin.layout.master')
@section('title', 'Update Creator')

@push('plugin-styles')
    <link href="{{ asset('admin/assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Update Creator</h4>
          <br>
          {{-- <p class="text-muted mb-3">Read the <a href="https://jqueryvalidation.org/" target="_blank"> Official jQuery Validation Documentation </a>for a full list of instructions and other options.</p> --}}
          <form id="signupForm" action="{{route('admin.creator.update')}}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$creator->id}}">
            <div class="mb-3">
              <label for="name" class="form-label">Full Name</label>
              <input id="name" class="form-control" name="full_name" type="text" value="{{$creator->full_name}}">
              <span class="text-danger">{{$errors->first('full_name')}}</span>
            </div>
           
              <div class="mb-3">
                <label for="name" class="form-label">Email</label>
                <input id="name" class="form-control" name="email" type="text" value="{{$creator->email}}">
                <span class="text-danger">{{$errors->first('email')}}</span>

              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Phone No</label>
                <input id="name" class="form-control" name="phone_number" type="text" value="{{$creator->phone_number}}">
                <span class="text-danger">{{$errors->first('phone_number')}}</span>

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
