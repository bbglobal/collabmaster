@extends('admin.layout.master')
@section('title', 'About')

@push('plugin-styles')
    <link href="{{ asset('admin/assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet" />
@endpush



@section('content')
    <div class="row">
       
        <div class="col-md-12 grid-margin">
            @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">About</h6>

                    <form class="forms-sample" action="{{route('admin.about.process')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" @if(!empty($about)) value="{{$about->id}}" @endif> 
                        <div class="row mb-3">

                            <div class="col-md-12">
                                <label class="form-label">About Content</label>
                                <textarea class="form-control" rows="10" cols="50" name="content">
                                    @if(!empty($about)) {{$about->content}} @endif
                                </textarea>
                                <span class="text-danger">{{$errors->first('content')}}</span>
                            </div>

                        </div>
                        @if($about)
                        <input class="btn btn-primary" type="submit" value="Update" style="float: right">

                        @else
                        <input class="btn btn-primary" type="submit" value="Submit" style="float: right">

                        @endif

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
