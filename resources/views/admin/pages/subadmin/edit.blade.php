@extends('admin.layout.master')
@section('title', 'SubAdmins')

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Update SubAdmin</h4>
          <br>
          {{-- <p class="text-muted mb-3">Read the <a href="https://jqueryvalidation.org/" target="_blank"> Official jQuery Validation Documentation </a>for a full list of instructions and other options.</p> --}}
          <form id="signupForm" action="{{route('admin.update.subadmin')}}" method="POST">
            @csrf
            <input type="hidden" name="id" @if(!empty($subadmin)) value="{{$subadmin->id}}" @endif>
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input id="name" class="form-control" name="name" type="text"
              @if(!empty($subadmin)) value="{{$subadmin->name}}" @endif>
              <span class="text-danger">{{$errors->first('name')}}</span>
            </div>
              <div class="mb-3">
                <label for="name" class="form-label">Email</label>
                <input id="name" class="form-control" name="email" type="text"
                @if(!empty($subadmin)) value="{{$subadmin->email}}" @endif>
                <span class="text-danger">{{$errors->first('email')}}</span>

              </div>
             
           
            
            <input class="btn btn-primary" type="submit" value="Update">
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
