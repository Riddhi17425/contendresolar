@extends('admin.layouts.app')

@section('title', 'Edit Milestone')

@section('content')
<div class="container-xxl">
    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div
                class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">Edit Milestone</h3>
            </div>
        </div>
    </div>

    <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="{{ route('milestone.update', $data->id) }}">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $data->id }}" />

            <div class="col-xl-12 col-lg-8">
                <div class="card mb-3 p-3">
                    <div class="card-header py-3 p-0 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold">Milestone Information</h6>
                    </div>
                    <div class="row g-3 align-items-center">
                        <!-- <div class="col-md-6">
                            <label class="form-label">Company Name</label>
                            <input type="text" id="company_name" name="company_name" value="{{ $data->company_name }}" 
                                class="form-control">
                        </div> -->
                        <div class="col-md-6">
                            <label class="form-label">Year</label>
                            <input type="text" id="year" name="year" value="{{ $data->year }}" class="form-control">
                        </div>
                        <div class="card mb-3">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold">Image</h6>
                            </div>
                            <div class="card-body">
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-12">
                                        <label class="form-label" for="input-file">Image</label>
                                        <input type="file" id="input-file-front" name="image" class="dropify"
                                            data-default-file="{{ asset('public/milestone_images/' . $data->image) }}" >
                                    </div>
                                    @if ($errors->has('image'))
                                    <span class="text-danger">{{ $errors->first('image') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="description" class="form-label">Description</label>
                            <textarea id="description" name="description"
                                class="form-control" required>{{ $data->description }}</textarea>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Alt Tag</label>
                            <input type="text" id="alt_tag" name="alt_tag" value="{{ $data->alt_tag }}" 
                                class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-set-task w-sm-100 py-2 px-5 text-uppercase">Save</button>
        </form>
    </div>
</div>
@endsection

@push('styles')

<link rel="stylesheet" href="yearpicker.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"/>

<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet"/> -->

<link rel="stylesheet" href="{{ asset('public/admin_public/plugins/daterangepicker/daterangepicker.css') }}">
<!-- Summernote CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
<!-- Dropify CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropify/dist/css/dropify.min.css">
@endpush

@push('scripts')
<!-- Summernote JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
<!-- Dropify JS -->
<script src="https://cdn.jsdelivr.net/npm/dropify/dist/js/dropify.min.js"></script>

<script src="{{ asset('public/admin_public/plugins/daterangepicker/daterangepicker.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script> -->

<script src="yearpicker.js" ></script>
<script>
    $(document).ready(function () {
    $('#year').datepicker({
        format: "yyyy",          
        viewMode: "years",       
        minViewMode: "years",    
        autoclose: true,         
        // startDate: "1900",       
        // endDate: new Date().getFullYear().toString(),
        orientation: "bottom",
        container: 'body',
        appendTo: 'body',
    });

    
});
</script>

<script>
$(document).ready(function() {
    $('.dropify').dropify();
    $('#description').summernote({
        placeholder: 'Enter Milestone Description here...',
        height: 300,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['insert', ['link', 'picture', 'hr']],
            ['view', ['fullscreen', 'codeview']],
            ['help', ['help']]
        ]
    });
});
</script>
@endpush