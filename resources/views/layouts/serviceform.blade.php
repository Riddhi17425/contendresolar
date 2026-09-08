<div class="modal fade contactmodal" id="servicemodal" tabindex="-1" aria-labelledby="servicemodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title fs-5" id="applymodalLabel">Support Service</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <form class="mt-2" id="serviceForm" method="post" action="{{ route('service.submit') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <!-- Company Name -->
                                <div class="mb-4 col-md-6">
                                    <label class="form-label">Company Name<span class="red-text">*</span></label>
                                    <input type="text" class="form-control" id="s_name" name="name" maxlength="50"
                                           placeholder="Enter your Company name">
                                    <span class="error" id="error-s_name"></span>
                                </div>

                                <!-- Phone Number -->
                                <div class="mb-4 col-md-6">
                                    <label class="form-label">Phone Number<span class="red-text">*</span></label>
                                    <input type="tel" class="form-control" id="s_phone" name="phone" maxlength="15" minlength="10"
                                           oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 15);"
                                           placeholder="Mobile Number">
                                    <span class="error" id="error-s_phone"></span>
                                </div>

                                <!-- Email Address -->
                                <div class="mb-4 col-md-6">
                                    <label class="form-label">Email Address<span class="red-text">*</span></label>
                                    <input type="email" class="form-control" id="s_email" name="email" maxlength="60" placeholder="Enter your Email">
                                    <span class="error" id="error-s_email"></span>
                                </div>

                                <!-- Product Name -->
                                <div class="mb-4 col-md-6">
                                    <label class="form-label">Product Name<span class="red-text">*</span></label>
                                    <input type="text" class="form-control" id="s_product_name" name="product_name" maxlength="50"
                                           placeholder="Enter Product Name">
                                    <span class="error" id="error-s_product_name"></span>
                                </div>

                                <!-- Modal Number -->
                                <div class="mb-4 col-md-6">
                                    <label class="form-label">Modal Number<span class="red-text">*</span></label>
                                    <input type="tel" class="form-control" id="s_modal_number" name="modal_number" maxlength="15"
                                           placeholder="Modal Number">
                                    <span class="error" id="error-s_modal_number"></span>
                                </div>

                                

                                <div class="mb-4 col-md-6">
                                    <label class="form-label">City Of Installation<span class="red-text">*</span></label>
                                    <input type="text" class="form-control" id="s_city_installation" name="city_installation" maxlength="50"
                                oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\s+/g, ' ').trimStart();"
                                placeholder="Enter your city">
                                    <!--<select class="form-select" id="s_city_installation" name="city_installation">-->
                                    <!--    <option value="" selected>Select City Installation</option>-->
                                    <!--    @foreach($cities as $city)-->
                                    <!--        <option value="{{ $city->name }}" {{ old('city') == $city->name ? 'selected' : '' }}>-->
                                    <!--            {{ $city->name }}-->
                                    <!--        </option>-->
                                    <!--    @endforeach-->
                                    <!--</select>-->
                                    <span class="error" id="error-s_city_installation"></span>
                                </div>

                                <!-- CAPTCHA Section -->
                                <div class="mb-4 col-md-6">
                                    <label class="form-label">Captcha<span class="red-text">*</span></label>
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <img id="captcha-image" src="{{ route('captcha.image') }}" alt="CAPTCHA Image" style="border: 1px solid #ccc; height: 40px;">
                                        </div>
                                        <div class="col-auto">
                                            <svg id="reload-button" style="cursor: pointer;" width="23" height="20" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M19.539 9.54947C19.539 4.46972 15.5667 0.755859 10.4869 0.755859C5.40715 0.755859 1.34335 4.81966 1.34335 9.89941C1.34335 14.9792 5.40715 19.043 10.4869 19.043C12.9252 19.043 14.9571 18.027 16.5826 16.6047" stroke="#000" stroke-miterlimit="10" stroke-linecap="round"></path>
                                                <path d="M21.5833 5.86837L19.589 9.66244L15.4799 8.32953" stroke="#000" stroke-miterlimit="10" stroke-linecap="round"></path>
                                            </svg>
                                        </div>
                                        <div class="col-auto mt-3 mt-lg-0">
                                            <input class="form-control" type="text" id="captcha-input" placeholder="Enter captcha" autocomplete="off" maxlength="4">
                                        </div>
                                        <small id="captcha-error" class="text-danger" style="display:none;">Please verify captcha.</small>
                                    </div>
                                </div>

                                <div class="mt-lg-4 mt-xxl-3">
                                    <button class="coman_btn border-0" type="submit">Get Support
                                        <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {

    // List of disposable email domains
    const disposableDomains = [
        'mailinator.com', '10minutemail.com', 'guerrillamail.com', 'tempmail.com',
        'temp-mail.org', 'throwawaymail.com', 'maildrop.cc', 'dispostable.com',
        'getairmail.com', 'moakt.com', 'spamgourmet.com', 'yopmail.com',
        'sharklasers.com', 'mailnesia.com', 'fakemail.net', 'emailondeck.com',
        'trashmail.com', 'mintemail.com', 'mytemp.email'
    ];

    function isDisposableEmail(email) {
        const domain = email.split('@')[1]?.toLowerCase();
        return disposableDomains.includes(domain);
    }
    
    function isValidEmail(email) {
    
    const re = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return re.test(email);
}

    const fieldNames = {
        's_name': 'Company Name',
        's_phone': 'Phone Number',
        's_email': 'Email Address',
        's_product_name': 'Product Name',
        's_modal_number': 'Modal Number',
        's_city_installation': 'City Of Installation',
        'captcha-input': 'Captcha'
    };

    function validateField(id, value) {
        const errorId = '#error-' + id;
        let isValid = true;

        if (!value) {
            $(errorId).text(fieldNames[id] + ' is required');
            isValid = false;
        } else {
            // Custom validation
            switch (id) {
                case 's_name':
                    $(errorId).text('');
                    break;
                case 's_phone':
                    if (!/^\d{10,15}$/.test(value)) {
                        $(errorId).text('Phone number must be between 10 to 15 digits');
                        isValid = false;
                    }
                    break;
                case 's_email':
                    if (!isValidEmail(value)) {
        $(errorId).text('Please enter a valid email address.');  // ← errorSelector → errorId kar do
        isValid = false;
    } else if (isDisposableEmail(value)) {
        $(errorId).text('Invalid email address are not allowed.');
        isValid = false;
    } else {
        $(errorId).text('');
    }
                    break;
                case 's_modal_number':
                    if (!/^[0-9a-zA-Z-]+$/.test(value)) {
                        $(errorId).text('Only letters, numbers, and dashes allowed');
                        isValid = false;
                    }
                    break;
                case 'captcha-input':  // Add CAPTCHA validation here
                    if (value.trim() === '') {
                        $(errorId).text('Captcha is required');
                        isValid = false;
                    } else {
                        $(errorId).text(''); // Clear the error if CAPTCHA is entered
                    }
                    break;

                case 's_city_installation':
                    if (!value) {
                        $(errorId).text('City of Installation is required');
                        isValid = false;
                    } else {
                        $(errorId).text('');  // Clear error message if valid
                    }
                    break;
            }

            if (isValid) {
                $(errorId).text(''); // Clear error message if valid
            }
        }

        return isValid;
    }

    // Real-time validation
    $('#serviceForm input, #serviceForm select').on('input', function () {
        let fieldId = $(this).attr('id');
        let value = $(this).val().trim();
        validateField(fieldId, value);
    });

    // CAPTCHA error hiding when user starts typing
    $('#captcha-input').on('input', function () {
        $('#captcha-error').hide(); // Hide CAPTCHA error when user starts typing
    });

    // Submit validation
    $('#serviceForm').on('submit', function (e) {
        e.preventDefault();
        let isValid = true;

        // Validate all fields
        $('#serviceForm input[type="text"], #serviceForm input[type="tel"], #serviceForm input[type="email"], #serviceForm select').each(function () {
            const fieldId = $(this).attr('id');
            const value = $(this).val().trim();
            if (!validateField(fieldId, value)) {
                isValid = false;
            }
        });

        // Validate CAPTCHA
        let captchaValue = $('#captcha-input').val().trim();
        if (captchaValue === '') {
            $('#captcha-error').show().text("Please enter the captcha.");
            isValid = false;
        } else {
            $('#captcha-error').hide(); // Hide CAPTCHA error when user enters something
        }

        if (isValid) {
            // CAPTCHA AJAX check
            $.ajax({
                url: '{{ route("captcha.verify") }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    custom_captcha: captchaValue
                },
                success: function (response) {
                    if (response.success) {
                        // If CAPTCHA is correct, submit the form
                        $('#serviceForm')[0].submit();
                    } else {
                        $('#captcha-error').show().text(response.message);  // Show CAPTCHA error if invalid
                        $('#captcha-image').attr('src', '{{ route("captcha.image") }}?' + Date.now());
                    }
                },
                error: function () {
                    $('#captcha-error').show().text('Something went wrong. Please try again.');
                }
            });
        }
    });

    // Reload CAPTCHA when clicked
    $('#reload-button').on('click', function () {
        $('#captcha-image').attr('src', '{{ route("captcha.image") }}?' + Date.now());
    });

});

</script>
