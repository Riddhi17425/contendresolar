<!-- Modal -->
<div class="modal fade contactmodal" id="applymodal" tabindex="-1" aria-labelledby="applymodalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title fs-5" id="applymodalLabel">Become A Contendre Solar Partner Today</p>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <form class="mt-2" id="partnerForm" method="POST" action="{{ route('partner.submit') }}" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <!-- Your Name -->
                <div class="mb-4 col-md-6">
                  <label class="form-label">Your Name <span class="red-text">*</span></label>
                  <input type="text" class="form-control" id="p_name" name="name" maxlength="50" placeholder="Enter your name" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                  <span class="error text-danger" id="error-p_name"></span>
                </div>

                <!-- Inquiry For (readonly) -->
                <div class="mb-4 col-md-6">
                  <label class="form-label">Become A Partner <span class="red-text">*</span></label>
                  <input type="text" class="form-control" id="p_inquiryfor" name="inquiryfor" value="Become A Partner" readonly>
                  <span class="error text-danger" id="error-p_inquiryfor"></span>
                </div>

                <!-- Phone -->
                <div class="mb-4 col-md-6">
                  <label class="form-label">Phone Number <span class="red-text">*</span></label>
                  <input type="tel" class="form-control" id="p_phone" name="phone" maxlength="15" minlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,15);" placeholder="Mobile Number">
                  <span class="error text-danger" id="error-p_phone"></span>
                </div>

                <!-- Email -->
                <div class="mb-4 col-md-6">
                  <label class="form-label">Email Address <span class="red-text">*</span></label>
                  <input type="email" class="form-control" id="p_email" name="email" maxlength="60" placeholder="Enter your Email">
                  <span class="error text-danger" id="error-p_email"></span>
                </div>

                <!-- Current Business -->
                <div class="mb-4 col-md-6">
                  <label class="form-label">Current Business <span class="red-text">*</span></label>
                  <input type="text" class="form-control" id="p_currentbusiness" name="currentbusiness" maxlength="50" placeholder="Enter current business">
                  <span class="error text-danger" id="error-p_currentbusiness"></span>
                </div>

                <!-- Experience -->
                <div class="mb-4 col-md-6">
                  <label class="form-label">Year of Experience <span class="red-text">*</span></label>
                  <input type="text" class="form-control" id="p_experience" name="experience" maxlength="2" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,15);" placeholder="Enter year of experience">
                  <span class="error text-danger" id="error-p_experience"></span>
                </div>

                <!-- Capacity -->
                <div class="mb-4 col-md-6">
                  <label class="form-label">Turnover & Investment Capacity <span class="red-text">*</span></label>
                  <input type="text" class="form-control" id="p_capacity" name="capacity" placeholder="Enter turnover & investment capacity">
                  <span class="error text-danger" id="error-p_capacity"></span>
                </div>

                <!-- CAPTCHA -->
                <div class="mb-4 col-md-6">
                  <label class="form-label">Captcha <span class="red-text">*</span></label>
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <img id="captchaImg" src="{{ route('captcha.image') }}" alt="CAPTCHA" style="border:1px solid #ccc; height:40px;">
                    </div>
                    <div class="col-auto">
                      <button type="button" id="reloadCaptcha" class="btn p-0 bg-transparent border-0">
                        &#x21bb;
                      </button>
                    </div>
                    <div class="col-auto mt-3">
                      <input class="form-control" type="text" id="captchaInput" name="captcha_input" placeholder="Enter captcha" maxlength="4" autocomplete="off">
                    </div>
                    <small id="captchaError" class="text-danger" style="display:none;"></small>
                  </div>
                </div>

                <div class="mt-lg-4 mt-xxl-3">
                  <button type="submit" class="coman_btn border-0">
                    Submit Inquiry
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

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
  const disposableDomains = [
    'mailinator.com','10minutemail.com','guerrillamail.com','tempmail.com',
    'temp-mail.org','throwawaymail.com','maildrop.cc','dispostable.com',
    'getairmail.com','moakt.com','spamgourmet.com','yopmail.com',
    'sharklasers.com','mailnesia.com','fakemail.net','emailondeck.com',
    'trashmail.com','mintemail.com','mytemp.email'
  ];

  const fieldNames = {
    'p_name': 'Your Name',
    'p_phone': 'Phone Number',
    'p_email': 'Email Address',
    'p_currentbusiness': 'Current Business',
    'p_experience': 'Year of Experience',
    'p_capacity': 'Turnover & Investment Capacity',
    'captchaInput': 'Captcha'
  };

  function isDisposableEmail(email) {
    const domain = email.split('@')[1]?.toLowerCase();
    return disposableDomains.includes(domain);
  }
  
  function isValidEmail(email) {
    const re = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return re.test(email);
}

  function validateField(id, value) {
    const errorSelector = '#error-' + id;
    let valid = true;

    if (!value || value.trim() === '') {
      if (id === 'p_phone') {
        $(errorSelector).text('Please enter your phone number.');
      } else {
        $(errorSelector).text(fieldNames[id] + ' is required.');
      }
      valid = false;
    } else {
      // Additional specific validations
      if (id === 'p_phone') {
        if (!/^\d{10,15}$/.test(value)) {
          $(errorSelector).text('Phone number must be between 10 to 15 digits.');
          valid = false;
        }
      }

      if (id === 'p_email') {
            if (!isValidEmail(value)) {
                $(errorSelector).text('Please enter a valid email address.');
                valid = false;
            } else if (isDisposableEmail(value)) {
                $(errorSelector).text('Invalid email address are not allowed.');
                valid = false;
            } else {
                $(errorSelector).text('');
            }
        }
    }

    if (valid) {
      $(errorSelector).text('');
    }

    return valid;
  }

  // Validate on input
  $('#partnerForm input').on('input', function() {
    const id = $(this).attr('id');
    const val = $(this).val().trim();
    validateField(id, val);
  });

  // Hide captcha error on typing
  $('#captchaInput').on('input', function() {
    $('#captchaError').hide();
  });

  // Reload CAPTCHA Click
  $('#reloadCaptcha').on('click', function() {
    $('#captchaImg').attr('src', '{{ route("captcha.image") }}?' + new Date().getTime());
  });

  // On form submit
  $('#partnerForm').on('submit', function(e) {
    e.preventDefault();
    let formValid = true;

    // Validate all fields (except captcha)
    $('#partnerForm input[type="text"], #partnerForm input[type="tel"], #partnerForm input[type="email"]').each(function() {
      const id = $(this).attr('id');
      const val = $(this).val().trim();
      if (!validateField(id, val)) {
        formValid = false;
      }
    });

    // Validate captcha
    const captchaVal = $('#captchaInput').val().trim();
    if (!captchaVal) {
      $('#captchaError').show().text('Please enter captcha');
      formValid = false;
    }

    if (!formValid) return;

    // AJAX CAPTCHA verification
    $.ajax({
      url: '{{ route("captcha.verify") }}',
      method: 'POST',
      data: {
        _token: '{{ csrf_token() }}',
        custom_captcha: captchaVal
      },
      success: function(response) {
        if (response.success) {
          // If CAPTCHA is correct, submit the form
          $('#partnerForm')[0].submit();
        } else {
          // Handle incorrect CAPTCHA
          $('#captchaError').show().text(response.message || 'Captcha Incorrect');
          $('#captchaImg').attr('src', '{{ route("captcha.image") }}?' + new Date().getTime());  // Reload CAPTCHA
        }
      },
      error: function() {
        $('#captchaError').show().text('Something went wrong. Please try again.');
      }
    });
  });
});
</script>
