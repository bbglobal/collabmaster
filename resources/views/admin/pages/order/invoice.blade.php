@extends('admin.layout.master')
@section('title', 'Invoice')

@push('plugin-styles')
    <link href="{{ asset('admin/assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Invoice</h4>
          <br>
          {{-- <p class="text-muted mb-3">Read the <a href="https://jqueryvalidation.org/" target="_blank"> Official jQuery Validation Documentation </a>for a full list of instructions and other options.</p> --}}
          
            <div class="mb-3">
              <label for="name" class="form-label">Full Name: @if(!empty($order)) {{$order->full_name}} @endif</label>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Address: @if(!empty($order)) {{$order->address}} @endif</label>
              </div>

              <div class="mb-3">
                <label for="name" class="form-label">Description: @if(!empty($order)) {{$order->description}} @endif</label>
              </div>

              <div class="mb-3">
                <label for="name" class="form-label">Package Content Type: @if(!empty($order)) {{$order->package_content_type}} @endif</label>
              </div>

              <div class="mb-3">
                <label for="name" class="form-label">Price: @if(!empty($order)) {{$order->price}} @endif</label>
              </div>

              <div class="mb-3">
                <label for="name" class="form-label">Payment Status: @if(!empty($order)) {{$order->payment_status}} @endif</label>
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
