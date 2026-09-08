@extends('admin.layouts.app')

@section('title', 'Product Edit - Admin')

@section('content')
<div class="container-xxl">
    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">Product - Edit</h3>
            </div>
        </div>
    </div> <!-- Row end -->

    <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('product.update', $product->id) }}">
            @csrf
           

            <div class="col-xl-12 col-lg-8">
                <div class="card mb-3 p-3">
                    <div class="card-header py-3 p-0 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold">Product Information</h6>
                    </div>

                    <div class="row g-3 align-items-center">

                        {{-- <div class="col-md-6 mb-3">
                            <label for="keyfeature_id" class="form-label">Select Key Feature</label>
                            <select name="keyfeature_id" id="keyfeature_id" class="form-control">
                                <option value="">-- Select Feature --</option>
                                @foreach($keyfeature as $item)
                                    <option value="{{ $item->id }}" 
                                        {{ old('keyfeature_id', $product->keyfeature_id) == $item->id ? 'selected' : '' }}>
                                        {{ $item->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div> --}}

                        <div class="row g-3 align-items-center">
                        {{-- Key Feature --}}
                        <div class="card mb-4 border">
                            <div class="card-header bg-light"><strong>Key Feature</strong></div> 
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label class="form-label">Select Key Feature <span class="text-danger">*</span></label>
                                        <div class="size-selection-container">
                                            <div class="d-flex flex-wrap gap-2 mb-3">
                                                @php
                                                    $application = $keyfeature->pluck('title')->toArray();
                                                    $oldkeyFeature = old('keyfeature_id', json_decode($product->keyfeature_id, true) ?? []);
                                                @endphp
                                                @foreach($application as $key_feature)
                                                    <div class="form-check">
                                                        <input class="btn-check size-checkbox" type="checkbox" 
                                                            name="keyfeature_id[]" value="{{ $key_feature }}" 
                                                            id="keyfeature_{{ $key_feature }}"
                                                            {{ in_array($key_feature, $oldkeyFeature) ? 'checked' : '' }}>
                                                        <label class="btn btn-outline-primary size-btn" for="keyfeature_{{ $key_feature }}">
                                                            {{ $key_feature }}
                                                        </label>
                                                    </div>
                                                @endforeach 
                                            </div>
                                            <div class="selected-sizes-display">
                                                <small class="text-muted">Selected: </small>
                                                <span id="selectedApplicationText" class="fw-bold text-primary">
                                                    {{ count($oldkeyFeature) ? implode(', ', $oldkeyFeature) : 'None' }}
                                                </span>
                                            </div>
                                            @error('keyfeature_id')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{-- Title --}}
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                   value="{{ old('title', $product->title) }}" placeholder="Enter Title">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Sub Title --}}
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Sub Title <span class="text-danger">*</span></label>
                            <input type="text" name="sub_title" class="form-control @error('sub_title') is-invalid @enderror"
                                   value="{{ old('sub_title', $product->sub_title) }}" placeholder="Enter Sub Title">
                            @error('sub_title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Short Description --}}
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Short Description <span class="text-danger">*</span></label>
                            <textarea name="short_description" class="form-control summernote @error('short_description') is-invalid @enderror"
                                      rows="3" placeholder="Enter Short Description">{{ old('short_description', $product->short_description) }}</textarea>
                            @error('short_description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Url --}}
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Url <span class="text-danger">*</span></label>
                            <input type="text" name="url" class="form-control @error('url') is-invalid @enderror"
                                   value="{{ old('url', $product->url) }}" placeholder="Enter Url">
                            @error('url')
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
                                 src="{{ $product->image ? asset('/' . $product->image) : '#' }}"
                                 alt="Preview"
                                 class="mt-2"
                                 style="max-width: 120px; height: auto; {{ $product->image ? '' : 'display: none;' }}" />
                        </div>

                        {{-- Banner Information --}}
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Maximum Efficiency <span class="text-danger">*</span></label>
                            <input type="text" name="maximum_efficiency" class="form-control @error('maximum_efficiency') is-invalid @enderror"
                                   value="{{ old('maximum_efficiency',$product->maximum_efficiency) }}" placeholder="Enter Url">
                            @error('maximum_efficiency')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Maximum Power Output <span class="text-danger">*</span></label>
                            <input type="text" name="maximum_power_output" class="form-control @error('maximum_power_output') is-invalid @enderror"
                                   value="{{ old('maximum_power_output',$product->maximum_power_output) }}" placeholder="Enter Url">
                            @error('maximum_power_output')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Positive Power Tolerance <span class="text-danger">*</span></label>
                            <input type="text" name="positive_power_tolerance" class="form-control @error('positive_power_tolerance') is-invalid @enderror"
                                   value="{{ old('positive_power_tolerance',$product->positive_power_tolerance) }}" placeholder="Enter Url">
                            @error('positive_power_tolerance')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Cells Guaranteed <span class="text-danger">*</span></label>
                            <input type="text" name="cells_guaranted" class="form-control @error('cells_guaranted') is-invalid @enderror"
                                   value="{{ old('cells_guaranted',$product->cells_guaranted) }}" placeholder="Enter Url">
                            @error('cells_guaranted')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Banner Title <span class="text-danger">*</span></label>
                            <input type="text" name="banner_title" class="form-control @error('banner_title') is-invalid @enderror"
                                   value="{{ old('banner_title',$product->banner_title) }}" placeholder="Enter Url">
                            @error('banner_title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        {{--Banner Image --}}
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Banner Image <span class="text-danger">*</span></label>
                            <input type="file" name="banner_image"
                                   class="form-control @error('banner_image') is-invalid @enderror"
                                   id="imagebannerInput" onchange="previewBannerImage(event)">
                            @error('banner_image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            {{-- Existing + Preview image --}}
                            <img id="banner_preview"
                                 src="{{ $product->banner_image ? asset('/' . $product->banner_image) : '#' }}"
                                 alt="Preview"
                                 class="mt-2"
                                 style="max-width: 120px; height: auto; {{ $product->banner_image ? '' : 'display: none;' }}" />
                        </div>
                        {{-- Short Description --}}
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Banner Description <span class="text-danger">*</span></label>
                            <textarea name="banner_description" class="form-control summernote @error('banner_description') is-invalid @enderror"
                                      rows="3" placeholder="Enter Banner Description">{{ old('banner_description',$product->banner_description) }}</textarea>
                            @error('banner_description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        {{-- Status --}}
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Status <span class="text-danger">*</span></label>
                            <select name="status" class="form-control @error('status') is-invalid @enderror">
                                <option value="Active" {{ old('status', $product->status) === 'Active' ? 'selected' : '' }}>Active</option>
                                <option value="InActive" {{ old('status', $product->status) === 'InActive' ? 'selected' : '' }}>In Active</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                         <div class="col-md-6 mb-3">
                            <label class="form-label">Meta Title <span class="text-danger">*</span></label>
                            <input type="text" name="meta_title" class="form-control @error('meta_title') is-invalid @enderror"
                                   value="{{ old('meta_title',$product->meta_title) }}" placeholder="Enter Url">
                            @error('meta_title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Meta Description <span class="text-danger">*</span></label>
                            <textarea name="meta_description" class="form-control summernote @error('meta_description') is-invalid @enderror"
                                      rows="3" placeholder="Enter Meta Description">{{ old('meta_description',$product->meta_description) }}</textarea>
                            @error('meta_description')
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
<script src="{{ asset('public/admin/js/product/product.js') }}"></script>


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
    function previewBannerImage(event) {
            let reader = new FileReader();
            reader.onload = function () {
                let output = document.getElementById('banner_preview');
                output.src = reader.result;
                output.style.display = 'block';
            }
            reader.readAsDataURL(event.target.files[0]);
        }
</script>
@endpush
