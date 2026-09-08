@extends('admin.layouts.app')

@section('title', 'Edit Blog')

@section('content')
<div class="container-xxl">
    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div
                class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">Edit Blog</h3>
            </div>
        </div>
    </div>

    <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="{{ route('blog.update', $data->id) }}">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $data->id }}" />

            <div class="col-xl-12 col-lg-8">
                <div class="card mb-3 p-3">
                    <div class="card-header py-3 p-0 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold">Blog Information</h6>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-6">
                            <label class="form-label">Blog Title</label>
                            <input type="text" id="title" name="title" value="{{ $data->title }}" 
                                class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="date" class="form-label">Blog Date</label>
                            <input type="date" id="date" name="date" value="{{ $data->date }}" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="short_description" class="form-label">Blog Short Description</label>
                            <textarea id="short_description" name="short_description" class="form-control">{{ $data->short_description }}</textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="url" class="form-label">Blog URL</label>
                            <input type="text" id="url" name="url" value="{{ $data->url }}" class="form-control">
                        </div>
                        <div class="card mb-3">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold">Front Blog Image</h6>
                            </div>
                            <div class="card-body">
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-12">
                                        <label class="form-label" for="input-file-front">Front Image Upload</label>
                                        <input type="file" id="input-file-front" name="front_image" class="dropify"
                                            data-default-file="{{ asset('public/blogs/blog_front_image/' . $data->front_image) }}" >
                                    </div>
                                    @if ($errors->has('front_image'))
                                    <span class="text-danger">{{ $errors->first('front_image') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="description" class="form-label">Blog Description</label>
                            <textarea id="description" name="description"
                                class="form-control">{{ $data->description }}</textarea>
                        </div>
                        
                        <div class="card mb-3">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold">Blog Detail Image</h6>
                            </div>
                            <div class="card-body">
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-12">
                                        <label class="form-label" for="input-file-front">Blog Image Upload</label>
                                        <input type="file" id="input-file-front" name="detail_image" class="dropify"
                                            data-default-file="{{ asset('public/blogs/blog_detail_image/' . $data->detail_image) }}" >
                                    </div>
                                    @if ($errors->has('detail_image'))
                                    <span class="text-danger">{{ $errors->first('detail_image') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        
                        <div class="card mb-3">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold">Blog Cta Image</h6>
                            </div>
                            <div class="card-body">
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-12">
                                        <label class="form-label" for="input-file-front">Blog Cta Image Upload</label>
                                        <input type="file" id="input-file-front" name="blog_cta_image" class="dropify"
                                            data-default-file="{{ asset('public/blogs/blog_cta_image/' . $data->blog_cta_image) }}" >
                                    </div>
                                    @if ($errors->has('blog_cta_image'))
                                    <span class="text-danger">{{ $errors->first('blog_cta_image') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div> 
                        <div class="col-md-12">
                            <label for="conclusion" class="form-label">Conclusion</label>
                            <textarea id="conclusion" name="conclusion"
                                class="form-control">{{ $data->conclusion }}</textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Meta Title</label>
                            <input type="text" id="meta_title" name="meta_title" value="{{ $data->meta_title }}" 
                                class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="meta_description" class="form-label">Meta Description</label>
                            <textarea id="meta_description" name="meta_description" class="form-control">{{ $data->meta_description }}</textarea>
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
                            <input type="text"  name="faq_title[]" value="{{ $block['title'] ?? ''}}" 
                                class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="faq_description[]" class="form-control summernote">{{ $block['description'] ?? ''}}</textarea>
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
<!-- Dropify CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropify/dist/css/dropify.min.css">
@endpush

@push('scripts')
<!-- Summernote JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
<!-- Dropify JS -->
<script src="https://cdn.jsdelivr.net/npm/dropify/dist/js/dropify.min.js"></script>

<script>
$(document).ready(function() {
    $('.dropify').dropify();
    $('#description,#meta_description').summernote({
        placeholder: 'Enter Blog Description here...',
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
    $('#before_image_desc').summernote({
        placeholder: 'Enter Blog Description here...',
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
    $('#after_image_desc').summernote({
        placeholder: 'Enter Blog Description here...',
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
    $('#short_description').summernote({
        placeholder: 'Enter Blog Short Description here...',
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
    $('#conclusion').summernote({
        placeholder: 'Enter Conclusion  here...',
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

<script>
    $(document).ready(function () {
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
        ],
        callbacks: {
            onChange: function(contents) {
                $(this).val(contents);
            }
        }
    });

        $('#addMore').click(function () {
            let html = `
            <div class="row g-3 align-items-center faqGroup border p-3 mb-3 rounded">
                <div class="col-md-6">
                    <label class="form-label">Title</label>
                    <input type="text" name="faq_title[]"  class="form-control">
                </div>
                <div class="col-md-12">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="faq_description[]" class="form-control summernote" ></textarea>
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