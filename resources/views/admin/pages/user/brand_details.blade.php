@extends('admin.layout.master')
@section('title', 'Details')

@push('plugin-styles')
    <link href="{{ asset('admin/assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Details</h4>
          <br>
          {{-- <p class="text-muted mb-3">Read the <a href="https://jqueryvalidation.org/" target="_blank"> Official jQuery Validation Documentation </a>for a full list of instructions and other options.</p> --}}
          <form id="signupForm" action="{{route('admin.store.subadmin')}}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Industry: @if(!empty($user)) {{$user->brand->industry}} @endif</label>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Categories: @if(!empty($user)) {{$user->brand->categories}} @endif</label>
              </div>

              <div class="mb-3">
                <label for="name" class="form-label">Familiarity: @if(!empty($user)) {{$user->brand->familiarity}} @endif</label>
              </div>

              <div class="mb-3">
                <label for="name" class="form-label">Platforms: @if(!empty($user)) {{$user->brand->platforms}} @endif</label>
              </div>

              <div class="mb-3">
                <label for="name" class="form-label">Need: @if(!empty($user)) {{$user->brand->need}} @endif</label>
              </div>

              <div class="mb-3">
                <label for="name" class="form-label">Content: @if(!empty($user)) {{$user->brand->content}} @endif</label>
              </div>
             
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
