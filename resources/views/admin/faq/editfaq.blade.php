@extends('admin.layouts.app')

@section('title', 'Faq Management')

@section('content')
<div class="container-xxl">
    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div
                class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">Edit Faq</h3>
            </div>
        </div>
    </div>

    <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="{{ route('faq.update', $data->id) }}">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $data->id }}" />

            <div class="col-xl-12 col-lg-8">
                <div class="card mb-3 p-3">
                    <div class="card-header py-3 p-0 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold">Faq Information</h6>
                    </div>
                <div class="row g-3 align-items-center">

                    <div class="col-md-6">
                            <label class="form-label">Faq Title</label>
                            <input type="text" id="faq_title" name="faq_title" value="{{ $data->faq_title }}" 
                                class="form-control">
                    </div>
                    <div class="col-md-6">
                            <label class="form-label">Faq Url</label>
                            <input type="text" id="faq_url" name="faq_url" value="{{ $data->faq_url }}" 
                                class="form-control">
                        </div>
                <div id="faqRepeater">
                    @php
                        $metaBlocks = json_decode($data->title_description, true) ?? [];
                    @endphp

                <!-- @if (!empty($metaBlocks)) -->
                    @foreach ($metaBlocks as $index => $block)
                    <div class="row g-3 align-items-center faqGroup border p-3 mb-3 rounded">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Title</label>
                            <input type="text"  name="title[]" value="{{ $block['title'] ?? ''}}" 
                                class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="description" class="form-label">Answer</label>
                            <textarea name="description[]" class="form-control summernote">{{ $block['description'] ?? ''}}</textarea>
                        </div>
                        
                        <div class="col-md-12 mb-2">
                            <button type="button" class="btn btn-danger remove">Remove</button>
                        </div>
                    </div>    
                    </div>
                    @endforeach
                <!-- @endif -->
                </div>

                <div class="mb-3">
                    <button type="button" id="addMore" class="btn btn-success">+ Add More</button>
                </div>

                
                    <!-- <button type="submit" class="btn btn-primary w-sm-100 py-2 px-5 text-uppercase">Save</button> -->
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
<!-- Summernote CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">

<!-- Cropper CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css">

<!-- Plugin CSS files -->
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
<!-- Summernote JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
<!-- Cropper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
<script src="{!! asset('public/admin_public/dist/assets/plugin/multi-select/js/jquery.multi-select.js') !!}"></script>
<script src="{!! asset('public/admin_public/dist/assets/plugin/bootstrap-tagsinput/bootstrap-tagsinput.js') !!}"></script>
<script src="{!! asset('public/admin_public/dist/assets/bundles/dropify.bundle.js') !!}"></script>
<script src="{!! asset('public/admin_public/dist/assets/bundles/dataTables.bundle.js') !!}"></script>

<script>
    $(document).ready(function() {
        $('.dropify').dropify();
        
        $('.summernote').each(function () {
            $(this).summernote({
                placeholder: 'Enter faq description here...',
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
    });
</script>

<script>
    $(document).ready(function () {
        $('#addMore').click(function () {
            let html = `
            <div class="row g-3 align-items-center faqGroup border p-3 mb-3 rounded">
                <div class="col-md-6">
                    <label class="form-label">Title</label>
                    <input type="text" name="title[]"  class="form-control">
                </div>
                <div class="col-md-12">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description[]" class="form-control summernote" ></textarea>
                </div>
                <div class="col-md-12 mb-2">
                    <button type="button" class="btn btn-danger remove">Remove</button>
                </div>
            </div>`;
            
            $('#faqRepeater').append(html);
            $('.summernote').summernote({
                placeholder: 'Enter faq description here...',
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

        $(document).on('click', '.remove', function () {
            $(this).closest('.faqGroup').remove();
        });
    });
</script>
@endpush