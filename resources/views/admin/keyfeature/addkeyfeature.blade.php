@extends('admin.layouts.app')

@section('title', 'Milestone Add')

@section('content')
<div class="container-xxl">
    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div
                class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">KeyFeature Add</h3>
            </div>
        </div>
    </div> <!-- Row end -->

    <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="{{ route('keyfeature.store') }}">
            @csrf
            <div class="col-xl-12 col-lg-8">
                <div class="card mb-3 p-3">
                    <div class="card-header py-3 p-0 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold">Key Feature Information</h6>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Title <span class=" text-danger required-star">*</span></label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                value="{{ old('title') }}" placeholder="Enter Title">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Alt Tag</label>
                            <input type="text" id="alt_tag" name="alt_tag" class="form-control">
                        </div>
                        {{-- <div class="col-md-6">
                            <label class="form-label" for="image">Icon Image</label>
                            <input type="file" id="image" name="image" class="form-control">
                        </div> --}}
                        <div class="col-md-6 mb-3"> 
                            <label class="form-label">Image <span class="text-danger required-star">*</span></label>
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image"  onchange="validateAndPreviewImage()">
                                    @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <img id="image" src="#" alt="Preview" class="mt-2" style="max-width: 120px; height: auto; display: none;" />
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Description <span class="text-danger required-star">*</span></label>
                                <textarea name="description" id="description"
                                    class="form-control @error('description') is-invalid @enderror"
                                    value="{{ old('description') }}" placeholder="Enter description">{{ old('description') }}</textarea>
                                @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
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




<!-- Summernote JS -->
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
    $('#description').summernote({
        placeholder: 'Enter Milestone Short Description here...',
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

    var $modal = $('#modalCrop');
    var image = document.getElementById('image');
    var cropper;

    $("body").on("change", ".image", function(e) {
        var files = e.target.files;
        var done = function(url) {
            image.src = url;
            $modal.modal('show');
        };

        if (files && files.length > 0) {
            var reader = new FileReader();
            reader.onload = function(e) {
                done(reader.result);
            };
            reader.readAsDataURL(files[0]);
        }
    });

    $modal.on('shown.bs.modal', function() {
        cropper = new Cropper(image, {
            aspectRatio: 3 / 2,
            viewMode: 3,
        });
    }).on('hidden.bs.modal', function() {
        cropper.destroy();
        cropper = null;
    });

    $("#crop").click(function() {
        canvas = cropper.getCroppedCanvas({
            width: 400,
            height: 400,
        });

        canvas.toBlob(function(blob) {
            url = URL.createObjectURL(blob);
            var reader = new FileReader();
            reader.readAsDataURL(blob);
            reader.onloadend = function() {
                var base64data = reader.result;
                $modal.modal('hide');
                $('#cropped_image').val(base64data);
            };
        });
    });
});

$(document).ready(function() {
    ClassicEditor.create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });

    $('#myCartTable').addClass('nowrap').dataTable({
        responsive: true,
        columnDefs: [{
            targets: [-1, -3],
            className: 'dt-body-right'
        }]
    });

    $('.deleterow').on('click', function() {
        var tablename = $(this).closest('table').DataTable();
        tablename.row($(this).parents('tr')).remove().draw();
    });

    $('#optgroup').multiSelect({
        selectableOptgroup: true
    });
});

$(function() {
    $('.dropify').dropify();

    var drEvent = $('#dropify-event').dropify();
    drEvent.on('dropify.beforeClear', function(event, element) {
        return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
    });

    drEvent.on('dropify.afterClear', function(event, element) {
        alert('File deleted');
    });

    $('.dropify-fr').dropify({
        messages: {
            default: 'Glissez-déposez un fichier ici ou cliquez',
            replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
            remove: 'Supprimer',
            error: 'Désolé, le fichier trop volumineux'
        }
    });
});
document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('.add-more').addEventListener('click', function() {
        let row = document.querySelector('.template').cloneNode(true);
        row.classList.remove('template');
        row.style.display = 'flex';
        document.querySelector('.wattage-price-container').appendChild(row);
    });

    document.querySelector('.wattage-price-container').addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-row')) {
            e.target.closest('.wattage-price-row').remove();
        }
    });
});
function validateAndPreviewImage() {
    const input = document.getElementById("image");
    const file = input.files[0];
    const previewImg = document.getElementById("preview_image");
    const bannerId = document.getElementById("span_image_id")?.value;
    // Check if file selected
    if (bannerId && !file) {
        return true; // allow update without new image
    }
    if (!file) {
        previewImg.style.display = "none";
        return false;
    }

    if (!file.type.startsWith("image/")) {
        input.value = ""; // reset input
        previewImg.style.display = "none";
        return false;
    }

    // Show image preview
    const reader = new FileReader();
    reader.onload = function (e) {
        previewImg.src = e.target.result;
        previewImg.style.display = "block";
        
    }
    reader.readAsDataURL(file);
    return true;
}
</script>
