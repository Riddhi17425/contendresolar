@extends('admin.layouts.app')

@section('title', 'Board Members Edit - Admin')

@section('content')
<div class="container-xxl">
    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">Board Members - Edit</h3>
            </div>
        </div>
    </div> <!-- Row end -->

    <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('boardmember.update', $boardmember->id) }}">
            @csrf
           

            <div class="col-xl-12 col-lg-8">
                <div class="card mb-3 p-3">
                    <div class="card-header py-3 p-0 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold">Board Member Information</h6>
                    </div>

                    <div class="row g-3 align-items-start">
                        {{-- Title --}}
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Name <span class="text-danger">*</span></label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                   value="{{ old('title', $boardmember->title) }}" placeholder="Enter Name">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Designation --}}
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Designation <span class="text-danger">*</span></label>
                            <input type="text" name="designation" class="form-control @error('designation') is-invalid @enderror"
                                   value="{{ old('designation', $boardmember->designation) }}" placeholder="Enter Designation">
                            @error('designation')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Short Description --}}
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Description <span class="text-danger">*</span></label>
                            <textarea name="description" class="form-control summernote @error('description') is-invalid @enderror"
                                      rows="3" placeholder="Enter Description">{{ old('description', $boardmember->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- Image --}}
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Image <span class="text-danger">*</span></label>
                            <input type="file" name="image"
                                   class="form-control @error('image') is-invalid @enderror"
                                   id="imageInput" onchange="previewImage(event)">
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            {{-- Existing + Preview image --}}
                            <img id="preview"
                                 src="{{ $boardmember->image ? asset('/' . $boardmember->image) : '#' }}"
                                 alt="Preview"
                                 class="mt-2"
                                 style="max-width: 120px; height: auto; {{ $boardmember->image ? '' : 'display: none;' }}" />
                        </div>
                        {{-- Alt --}}
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Alt <span class="text-danger">*</span></label>
                            <input type="text" name="alt_tag" class="form-control @error('alt_tag') is-invalid @enderror"
                                   value="{{ old('alt_tag',$boardmember->alt_tag) }}" placeholder="Enter Alt">
                            @error('alt_tag')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Status --}}
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Status <span class="text-danger">*</span></label>
                            <select name="status" class="form-control @error('status') is-invalid @enderror">
                                <option value="Active" {{ old('status', $boardmember->status) === 'Active' ? 'selected' : '' }}>Active</option>
                                <option value="InActive" {{ old('status', $boardmember->status) === 'InActive' ? 'selected' : '' }}>In Active</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-set-task w-sm-100 py-2 px-5 text-uppercase">Update</button>
        </form>
    </div>
</div>
@endsection

@push('styles')
<!-- Summernote CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">

<!-- Cropper CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css">
@endpush

@push('scripts')
<!-- Summernote JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
<!-- Cropper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>

<script>
    $(document).ready(function () {
        $('.summernote').summernote({
            height: 250,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview']]
            ]
        });
    });

    function previewImage(event) {
        let reader = new FileReader();
        reader.onload = function () {
            let output = document.getElementById('preview');
            output.src = reader.result;
            output.style.display = 'block';
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endpush
