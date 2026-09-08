@extends('admin.layouts.app')

@section('title', 'Board Members List')

@section('content')
<div class="container-xxl">

    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div
                class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">Board Members</h3>

                <div class="row align-items-center mb-3">
                    <div class="col-md-12">
                        <a href="{{ route('boardmember.create') }}" class="btn btn-primary">Add Board Member</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="message-pop-up" class="alert  alert-dismissible fade show"  role="alert" style="display: none">
            <span id="success-message"></span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" id="success-message" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
    <div class="row g-3 mb-3">
        <div class="col-md-12 col-lg-12 ">
            <div class="card mb-3 bg-transparent p-2">
               <table id="boardmemberTable" class="table table-hover align-middle mb-0" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                
               </table>
            </div>
            <div class="row g-3 mb-3">
                <div class="col-md-12">
                    
                </div>
            </div>
        </div>
    </div> <!-- Row end  -->
</div>
    
@endsection
@push('styles')
    <!--plugin css file -->
    <link rel="stylesheet" href="{!! asset('public/admin_public/dist/assets/plugin/multi-select/css/multi-select.css') !!}">
    <link rel="stylesheet"
        href="{!! asset('public/admin_public/dist/assets/plugin/bootstrap-tagsinput/bootstrap-tagsinput.css') !!}">
    <link rel="stylesheet" href="{!! asset('public/admin_public/dist/assets/plugin/dropify/dist/css/dropify.min.css') !!}">
    <link rel="stylesheet"
        href="{!! asset('public/admin_public/dist/assets/plugin/datatables/responsive.dataTables.min.css') !!}">
    <link rel="stylesheet"
        href="{!! asset('public/admin_public/dist/assets/plugin/datatables/dataTables.bootstrap5.min.css') !!}">
@endpush
@push('scripts')
    <script>
        window.APP_URLS = {
            getBoardmemberdata: "{{ route('getBoardmemberData') }}",
            deleteboardmember:"{{ route('boardmember.delete' , [':id']) }}",
            csrfToken: "{{ csrf_token() }}",
            image_path: "{{ asset('/') }}"
        };
    </script>

    <!-- ✅ Load jQuery first -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- ✅ Load DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <!-- ✅ Now load your local scripts that depend on DataTables -->
    <script src="{{ asset('public/admin/js/boardmember/boardmember.js') }}"></script>

    <!-- ✅ Then load your bundle (if needed) -->
    <script src="{{ asset('path/to/libscripts.bundle.js') }}"></script>
    
@endpush