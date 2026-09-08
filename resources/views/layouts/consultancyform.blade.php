<div class="modal fade contactmodal" id="requestmodal" tabindex="-1" aria-labelledby="requestmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title fs-5" id="requestmodalLabel">Consultancy Request</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <form class="mt-2 consultancy_form" id="consultancyForm" method="post" action="{{ route('consultancy.submit') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <!-- Name -->
                            <div class="mb-4 col-md-6">
                                <label class="form-label">Full Name<span class="red-text">*</span></label>
                                <input type="text" class="form-control" id="c_name" name="name" maxlength="50"
                                       oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\s+/g, ' ').trimStart();" 
                                       placeholder="Enter your full name">
                                <span class="error" id="error-c_name"></span>
                            </div>
                            <!-- Phone Number -->
                            <div class="mb-4 col-md-6">
                                <label class="form-label">Phone Number<span class="red-text">*</span></label>
                                <input type="tel" class="form-control" id="c_phone" name="phone" maxlength="15" minlength="10" 
                                       oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 15);"
                                       placeholder="Mobile Number">
                                <span class="error" id="error-c_phone"></span>
                            </div>
                            <!-- Email Address -->
                            <div class="mb-4 col-md-6">
                                <label class="form-label">Email Address<span class="red-text">*</span></label>
                                <input type="email" class="form-control" id="c_email" name="email" maxlength="60" placeholder="Enter your Email">
                                <span class="error" id="error-c_email"></span>
                            </div>
                            <!-- Kilowatt -->
                            <div class="mb-4 col-md-6">
                                <label class="form-label">KiloWatt (KW)<span class="red-text">*</span></label>
                                <input type="text" class="form-control" id="c_kilowatt" name="kilowatt" maxlength="50" placeholder="Enter your Organization">
                                <span class="error" id="error-c_kilowatt"></span>
                            </div>
                            <!-- Query -->
                            <div class="mb-4 col-md-6">
                                <label class="form-label">Query<span class="red-text">*</span></label>
                                <input type="text" class="form-control" id="c_query" name="qry" maxlength="50" placeholder="Enter your Requirement">
                                <span class="error" id="error-c_query"></span>
                            </div>
                            <!-- City -->
                            <div class="mb-4 col-md-6">
                                <label class="form-label">City<span class="red-text">*</span></label>
                                <input type="text" class="form-control" id="c_city" name="city" maxlength="50"
                                oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\s+/g, ' ').trimStart();"
                                placeholder="Enter your city">
                                <!--<select class="form-select" id="c_city" name="city">-->
                                <!--    <option value="" selected>Select City</option>-->
                                <!--    @foreach($cities as $city)-->
                                <!--        <option value="{{ $city->name }}" {{ old('city') == $city->name ? 'selected' : '' }}>-->
                                <!--            {{ $city->name }}-->
                                <!--        </option>-->
                                <!--    @endforeach-->
                                <!--</select>-->
                                <span class="error" id="error-c_city"></span>
                            </div>
                            <!-- Captcha -->
                            <div class="mb-4 col-md-6">
                                <label class="form-label">Captcha<span class="red-text">*</span></label>
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <img id="consultancy-image-contact-pop-up" src="{{ route('captcha.image') }}" alt="CAPTCHA Image" style="border: 1px solid #ccc; height: 40px;">
                                    </div>
                                    <div class="col-auto">
                                        <svg id="reload-button_contact_pop_up" style="cursor: pointer;" width="23" height="20" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.539 9.54947C19.539 4.46972 15.5667 0.755859 10.4869 0.755859C5.40715 0.755859 1.34335 4.81966 1.34335 9.89941C1.34335 14.9792 5.40715 19.043 10.4869 19.043C12.9252 19.043 14.9571 18.027 16.5826 16.6047" stroke="#000" stroke-miterlimit="10" stroke-linecap="round"></path>
                                            <path d="M21.5833 5.86837L19.589 9.66244L15.4799 8.32953" stroke="#000" stroke-miterlimit="10" stroke-linecap="round"></path>
                                        </svg>
                                    </div>
                                    <div class="col-auto mt-3 mt-lg-3">
                                        <input class="form-control" type="text" id="consultancy-input-contact-pop-up" name="custom_captcha" placeholder="Enter captcha" maxlength="4" autocomplete="off">
                                    </div>
                                    <small id="consultancy-error-contact-pop-up" class="text-danger" style="display:none;">Please enter the captcha.</small>
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


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
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
        c_name: 'Full Name',
        c_phone: 'Phone',
        c_email: 'Email',
        c_kilowatt: 'Kilowatt',
        c_query: 'Query',
        c_city: 'City',
        'consultancy-input-contact-pop-up': 'Captcha'
    };

    // Live validation
    $('#consultancyForm input, #consultancyForm select').on('input change', function() {
        validateField($(this).attr('id'));
    });

    function validateField(fieldId) {
        let value = $('#' + fieldId).val().trim();
        let errorId = '#error-' + fieldId;

        if (value === '') {
            $(errorId).text(fieldNames[fieldId] + ' is required');
            return;
        }

        if (fieldId === 'c_name') {
            $(errorId).text(/^[a-zA-Z\s]+$/.test(value) ? '' : 'Only letters and spaces allowed');
        } else if (fieldId === 'c_phone') {
            $(errorId).text(/^\d{10,15}$/.test(value) ? '' : 'Phone must be 10-15 digits');
        } else if (fieldId === 'c_email') {
            if (!isValidEmail(value)) {
                $(errorId).text('Please enter a valid email address.');
            } else if (isDisposableEmail(value)) {
                $(errorId).text('Invalid email address are not allowed.');
            } else {
                $(errorId).text('');
            }
        } else if (fieldId === 'c_kilowatt' || fieldId === 'c_query' || fieldId === 'c_city') {
            $(errorId).text(value === '' ? fieldNames[fieldId] + ' is required' : '');
        } else if (fieldId === 'consultancy-input-contact-pop-up') {
            $(errorId).text(/^\d{4}$/.test(value) ? '' : 'Captcha must be 4 digits');
        } else {
            $(errorId).text('');
        }
    }

    // Reload CAPTCHA
    $('#reload-button_contact_pop_up').on('click', function () {
        $('#consultancy-image-contact-pop-up').attr('src', '{{ route("captcha.image") }}?' + new Date().getTime());
        $('#consultancy-input-contact-pop-up').val('');
        $('#consultancy-error-contact-pop-up').hide();
    });

    // Form submission (same rahega)
    $('#consultancyForm').on('submit', function (e) {
        e.preventDefault();
        let form = $(this);
        let isValid = true;

        for (let fieldId in fieldNames) {
            validateField(fieldId);
            if ($('#error-' + fieldId).text() !== '') {
                isValid = false;
            }
        }

        const captchaValue = $('#consultancy-input-contact-pop-up').val().trim();
        if (captchaValue === '') {
            $('#consultancy-error-contact-pop-up').text('Please enter the captcha.').show();
            isValid = false;
        } else {
            $('#consultancy-error-contact-pop-up').hide();
        }

        if (!isValid) return;

        let submitBtn = form.find('button[type="submit"]');
        submitBtn.prop('disabled', true).text('Verifying captcha...');

        $.ajax({
            url: '{{ route("captcha.verify") }}',
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                custom_captcha: captchaValue
            },
            success: function (res) {
                if (res.success) {
                    submitBtn.text('Submitting...');
                    $.ajax({
                        url: form.attr('action'),
                        method: form.attr('method'),
                        data: form.serialize(),
                        success: function () {
                            window.location.href = "{{ route('thank.you') }}";
                        },
                        error: function (xhr) {
                            if (xhr.status === 422) {
                                let errors = xhr.responseJSON.errors;
                                for (let key in errors) {
                                    $('#error-' + key).text(errors[key][0]);
                                }
                            } else {
                                alert('Something went wrong!');
                            }
                            submitBtn.prop('disabled', false).text('Get Support');
                        }
                    });
                } else {
                    $('#consultancy-error-contact-pop-up').text('Captcha Incorrect').show();
                    $('#consultancy-image-contact-pop-up').attr('src', '{{ route("captcha.image") }}?' + new Date().getTime());
                    submitBtn.prop('disabled', false).text('Get Support');
                }
            },
            error: function () {
                alert('Captcha verification failed. Try again.');
                submitBtn.prop('disabled', false).text('Get Support');
            }
        });
    });
});
</script>



<style>
.error {
    color: red;
    font-size: 14px;
}
</style>