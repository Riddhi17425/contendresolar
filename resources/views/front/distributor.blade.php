@include('layouts.frontheader')
@include('layouts.hero_section' , ['pageName' => 'Distributor'])

<section class="mt-100">
  <div class="container">

    <div class="mb-4">
      <h2 class="head2">Company / Organization Details</h2>
    </div>

    <form class="form_locator" id="companyForm" method="POST" action="{{ route('distributor.submit') }}" novalidate>
      @csrf
      <div class="row gx-lg-5">
        <!-- Company Name -->
        <div class="col-md-6">
          <div class="form-group">
            <label>Company Name<span>*</span></label>
            <input type="text" id="company_name" name="company_name" placeholder="Enter Company Name" />
            <small class="error-message text-danger" style="display: none;"></small>
          </div>
        </div>

        <!-- Type of Business -->
        <div class="col-md-6">
          <div class="form-group">
            <label>Type of Business<span>*</span></label>
            <input type="text" id="business_type" name="company_business" placeholder="Business type" />
            <small class="error-message text-danger" style="display: none;"></small>
          </div>
        </div>

        <!-- Company Email -->
        <div class="col-md-6">
          <div class="form-group">
            <label>Company Email<span>*</span></label>
            <input type="email" id="company_email" name="company_email" placeholder="Enter your Email" />
            <small class="error-message text-danger" style="display: none;"></small>
          </div>
        </div>

        <!-- Company Address -->
        <div class="col-md-6">
          <div class="form-group">
            <label>Company Address<span>*</span></label>
            <input type="text" id="company_address" name="company_address" placeholder="Enter your company address" />
            <small class="error-message text-danger" style="display: none;"></small>
          </div>
        </div>

        <!-- Company Number -->
        <div class="col-md-6">
          <div class="form-group">
            <label>Company Number<span>*</span></label>
            <input type="text" id="company_number" name="company_number" maxlength="15" minlength="10"
                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 15);"
                placeholder="Enter your Requirement" />
            <small class="error-message text-danger" style="display: none;"></small>
          </div>
        </div>

        <!-- Company Website -->
        <div class="col-md-6">
          <div class="form-group">
            <label>Company Website<span>*</span></label>
            <input type="url" id="company_website" name="company_website" placeholder="Enter your company website" />
            <small class="error-message text-danger" style="display: none;"></small>
          </div>
        </div>

        <!-- Office Phone -->
        <div class="col-md-6">
          <div class="form-group">
            <label>Office Phone</label>
            <input type="text" id="office_phone" name="officephone" maxlength="15" minlength="10"
                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 15);"
                placeholder="Enter your Office phone" />
            <small class="error-message text-danger" style="display: none;"></small>
          </div>
        </div>

        <!-- PAN Card Number -->
        <div class="col-md-6">
          <div class="form-group">
            <label>PAN Card Number<span>*</span></label>
            <input type="text" id="pan_card" name="pannumber" placeholder="Enter your PAN Card number" />
            <small class="error-message text-danger" style="display: none;"></small>
          </div>
        </div>

        <!-- GST Number -->
        <div class="col-md-6">
          <div class="form-group">
            <label>GST Number<span>*</span></label>
            <input type="text" id="gst_number" name="gstnumber" placeholder="Enter your GST number" />
            <small class="error-message text-danger" style="display: none;"></small>
          </div>
        </div>

        <!-- Distributor Services -->
        <div class="col-md-6">
          <div class="form-group">
            <label>Distributor Services<span>*</span></label>
            <input type="text" id="distributor_services" name="distributor_services" placeholder="Enter your distributor services" />
            <small class="error-message text-danger" style="display: none;"></small>
          </div>
        </div>

        <!-- Preferred Partnership Area -->
        <div class="col-md-6">
          <div class="form-group">
            <label>Preferred Partnership Area<span>*</span></label>
            <input type="text" id="partnership_area" name="area" placeholder="Enter your preferred partnership area" />
            <small class="error-message text-danger" style="display: none;"></small>
          </div>
        </div>
      </div>

      <h2 class="head2 mt-5 mb-4">Individual Details</h2>

      <div class="row gx-lg-5">
        <!-- Applicant Name -->
        <div class="col-md-6">
          <div class="form-group">
            <label>Applicant Name<span>*</span></label>
            <input type="text" id="applicant_name" name="applicant_name" placeholder="Enter Applicant Name" />
            <small class="error-message text-danger" style="display: none;"></small>
          </div>
        </div>

        <!-- Designation -->
        <div class="col-md-6">
          <div class="form-group">
            <label>Designation<span>*</span></label>
            <input type="text" id="designation" name="designation" placeholder="Enter your designation" />
            <small class="error-message text-danger" style="display: none;"></small>
          </div>
        </div>

        <!-- Other Owners, Directors or Partners Details -->
        <div class="col-md-6">
          <div class="form-group">
            <label>Other Owners, Directors or Partners Details<span>*</span></label>
            <input type="text" id="other_owners" name="other_owners_directors_partners_details" placeholder="Enter Details" />
            <small class="error-message text-danger" style="display: none;"></small>
          </div>
        </div>

        <!-- Mobile Number -->
        <div class="col-md-6">
          <div class="form-group">
            <label>Mobile Number<span>*</span></label>
            <input type="text" id="mobile_number" name="applicant_number" maxlength="15" minlength="10"
                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 15);"
                placeholder="Enter your Mobile Number" />
            <small class="error-message text-danger" style="display: none;"></small>
          </div>
        </div>

        <!-- Residence Address -->
        <div class="col-md-6">
          <div class="form-group">
            <label>Residence Address<span>*</span></label>
            <input type="text" id="residence_address" name="applicant_residence_address" placeholder="Enter your Residence Address" />
            <small class="error-message text-danger" style="display: none;"></small>
          </div>
        </div>

        <!-- Terms and Conditions -->
        <div class="col-md-12">
          <div class="form-group">
            <div class="check_box">
              <input type="checkbox" id="terms_conditions" name="is_approve" />
              <p class="mb-0">I/We have read and understood all the terms and conditions associated with this partnership program.</p>
            </div>
            <small id="terms_error" class="text-danger" style="display: none;"></small>
          </div>
        </div>

        <!-- CAPTCHA -->
        <div class="row align-items-center mb-4">
          <div class="col-auto">
            <img id="distributor-image-comman-form" src="{{ route('captcha.image') }}" alt="CAPTCHA Image" style="border: 1px solid #ccc; height: 40px;">
          </div>
          <div class="col-auto">
            <svg id="distributor-button-comman-form" style="cursor: pointer;" width="23" height="20" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M19.539 9.54947C19.539 4.46972 15.5667 0.755859 10.4869 0.755859C5.40715 0.755859 1.34335 4.81966 1.34335 9.89941C1.34335 14.9792 5.40715 19.043 10.4869 19.043C12.9252 19.043 14.9571 18.027 16.5826 16.6047" stroke="#333" stroke-miterlimit="10" stroke-linecap="round"></path>
              <path d="M21.5833 5.86837L19.589 9.66244L15.4799 8.32953" stroke="#333" stroke-miterlimit="10" stroke-linecap="round"></path>
            </svg>
          </div>
          <div class="col-auto mt-3 mt-md-0">
            <input class="form-control" type="text" id="distributor-captcha-comman-form" placeholder="Enter captcha" maxlength="4" autocomplete="off">
          </div>
          <small id="distributor-captcha-error-comman-form" class="text-danger" style="display: none;">Please verify captcha.</small>
        </div>

        <!-- Submit Button -->
        <div class="col-md-12">
          <div class="form-group">
            <button type="submit" id="submitBtn" class="coman_btn animation-bottom">Submit
              <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow" />
            </button>
          </div>
        </div>
      </div>
    </form>
  </div>
</section>

@include('layouts.frontfooter')

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('companyForm');
  const reloadButton = document.getElementById('distributor-button-comman-form');
  const captchaImage = document.getElementById('distributor-image-comman-form');

  // Disposable email domains list
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

  // CAPTCHA reload
  reloadButton.addEventListener('click', function () {
    captchaImage.src = '{{ route("captcha.image") }}?' + Date.now();
  });

  // Phone number validation function
  function validatePhoneNumber(phone, errorElement) {
    if (phone === '') {
      errorElement.textContent = "Please enter your phone number.";
      errorElement.style.display = 'block';
    } else if (phone.length < 10 || phone.length > 15) {
      errorElement.textContent = "Phone number must be 10 to 15 digits.";
      errorElement.style.display = 'block';
    } else {
      errorElement.style.display = 'none';
    }
  }

  // Enforce digit-only input for phone fields + live validation
  ['company_number', 'mobile_number'].forEach(id => {
    const input = document.getElementById(id);
    const errorEl = input.parentElement.querySelector('.error-message');
    
    if (input && errorEl) {
      input.addEventListener('input', function () {
        // Remove non-digit characters immediately
        input.value = input.value.replace(/\D/g, '');

        // Validate phone number
        validatePhoneNumber(input.value, errorEl);
      });
    }
  });

  // Live validation on any input change
  form.addEventListener('input', function (e) {
    validateField(e.target);
  });

  // Submit form
  form.addEventListener('submit', function (e) {
    e.preventDefault();
    let isValid = true;

    const fieldsToValidate = [
      { id: 'company_name', name: 'Company Name' },
      { id: 'business_type', name: 'Type of Business' },
      { id: 'company_email', name: 'Company Email', type: 'email' },
      { id: 'company_address', name: 'Company Address' },
      { id: 'company_number', name: 'Company Number', type: 'phone' },
      { id: 'company_website', name: 'Company Website', type: 'url' },
      { id: 'pan_card', name: 'PAN Card Number', type: 'pan' },
      { id: 'gst_number', name: 'GST Number', type: 'gst' },
      { id: 'distributor_services', name: 'Distributor Services' },
      { id: 'partnership_area', name: 'Preferred Partnership Area' },
      { id: 'applicant_name', name: 'Applicant Name' },
      { id: 'designation', name: 'Designation' },
      { id: 'other_owners', name: 'Other Owners / Partners' },
      { id: 'mobile_number', name: 'Mobile Number', type: 'phone' },
      { id: 'residence_address', name: 'Residence Address' }
    ];

    fieldsToValidate.forEach(field => {
      const input = document.getElementById(field.id);
      if (!validateField(input, field.type)) {
        isValid = false;
      }
    });

    // CAPTCHA validation
    const captchaInput = document.getElementById('distributor-captcha-comman-form');
    const captchaErrorEl = document.getElementById('distributor-captcha-error-comman-form');
    const captchaValue = captchaInput.value.trim();

    captchaErrorEl.style.display = 'none';
    captchaErrorEl.textContent = '';

    if (captchaValue === '' || captchaValue.length !== 4) {
      captchaErrorEl.textContent = 'Please enter the 4-digit CAPTCHA.';
      captchaErrorEl.style.display = 'block';
      isValid = false;
    }

    if (isValid) {
      submitForm(captchaValue);
    }
  });

  // Field validator
  function validateField(input, customType = null) {
    if (!input) return true;

    const fieldId = input.id;
    const value = input.value.trim();
    const errorEl = input.parentElement.querySelector('.error-message');
    let isValid = true;

    if (!errorEl) return true;

    errorEl.style.display = 'none';
    errorEl.textContent = '';

    // Replace underscores with spaces and capitalize the first letter of each word
    const fieldName = fieldId.replace(/_/g, ' ').replace(/\b\w/g, (char) => char.toUpperCase());

    if (value === '') {
      errorEl.textContent = `${fieldName} is required.`;
      errorEl.style.display = 'block';
      return false;
    }

    const type = customType || input.type;

    switch (type) {
      case 'email':
        const emailRegex = /^[^\s@]+@[^\s@]+\.[a-zA-Z]{2,6}$/;
        if (!emailRegex.test(value)) {
          errorEl.textContent = 'Enter a valid email address.';
          isValid = false;
        } else if (isDisposableEmail(value)) {
          errorEl.textContent = 'Invalid email address are not allowed.';
          isValid = false;
        }
        break;

      case 'phone':
        const phoneRegex = /^\d{10,15}$/;
        if (!phoneRegex.test(value)) {
          errorEl.textContent = 'Phone number must be 10 to 15 digits.';
          isValid = false;
        }
        break;

      case 'pan':
        const panRegex = /^[A-Z]{5}[0-9]{4}[A-Z]{1}$/;
        if (!panRegex.test(value)) {
          errorEl.textContent = 'Enter a valid PAN (e.g. ABCDE1234F).';
          isValid = false;
        }
        break;

      case 'gst':
        const gstRegex = /^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[A-Z0-9]{1}Z[0-9A-Z]{1}$/;
        if (!gstRegex.test(value)) {
          errorEl.textContent = 'Enter a valid GST number.';
          isValid = false;
        }
        break;

      case 'url':
        try {
          new URL(value);
        } catch (_) {
          errorEl.textContent = 'Enter a valid website URL.';
          isValid = false;
        }
        break;
    }

    if (!isValid) {
      errorEl.style.display = 'block';
    }

    return isValid;
  }

  // AJAX CAPTCHA verification
  function submitForm(captchaValue) {
    const submitButton = document.getElementById('submitBtn');
    submitButton.textContent = 'Verifying CAPTCHA...';
    submitButton.disabled = true;

    $.ajax({
      url: '{{ route("captcha.verify") }}',
      type: 'POST',
      data: {
        _token: '{{ csrf_token() }}',
        custom_captcha: captchaValue
      },
      success: function (response) {
        if (response.success) {
          submitButton.textContent = 'Submitting...';
          form.submit();
        } else {
          const captchaErrorEl = document.getElementById('distributor-captcha-error-comman-form');
          captchaErrorEl.textContent = response.message || 'Captcha validation failed.';
          captchaErrorEl.style.display = 'block';
          document.getElementById('distributor-captcha-comman-form').value = '';
          document.getElementById('distributor-image-comman-form').src = '{{ route("captcha.image") }}?' + Date.now();
          submitButton.textContent = 'Submit';
          submitButton.disabled = false;
        }
      },
      error: function () {
        alert('Something went wrong. Please try again.');
        document.getElementById('distributor-image-comman-form').src = '{{ route("captcha.image") }}?' + Date.now();
        submitButton.textContent = 'Submit';
        submitButton.disabled = false;
      }
    });
  }
});


</script>
