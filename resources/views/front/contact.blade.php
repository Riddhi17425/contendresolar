@include('layouts.frontheader')
@include('layouts.hero_section' , ['pageName' => 'Contact'])

<div class="whatsapp-quotes-wrapper text-center">
     <div class="container">
         <p class="whasapp-quotes">Experience Stress-Free Instant Deliveries with Our Services.</p>
         <a class="coman_btn" href="https://api.whatsapp.com/send?phone=919136457555&text=Hello%20,%20I%E2%80%99m%20interested%20in%20the%20services%20and%20products%20of%20Contendre%20Solar." target="_blank">WhatsApp Quote<img src="https://contendresolar.com//public/front/images/arrow.svg" alt="arrow"></a>
         </div>
</div>

<section class="mt-100" id="contactFormSection">
    <div class="container" >
         <div class="row justify-content-center text-center">
             <div class="col-md-9 ">
                 <p>We appreciate your input and welcome any feedback, questions, suggestions, or inquiries you may have. Kindly fill out the brief form below, and one of our representatives will respond to you promptly. Thank you for reaching out to us!</p>
             </div>
         </div>
         <div class="row justify-content-center">
             <div class="col-md-11">
                 <form class="mt-4 contact_form" id="contactForm" method="post" action="{{ route('contact.submit') }}" enctype="multipart/form-data">
                    @csrf 
                    <div class="row" >
                        <div class="mb-4 col-md-6">
                            <label class="form-label">Full Name<span class="red-text">*</span></label>
                            <input type="text" class="form-control" id="fullname" name="fullname" maxlength="50"
                                oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\s+/g, ' ').trimStart();"
                                placeholder="Enter your full name">
                                
                        </div>
                        <div class="mb-4 col-md-6">
                            <label class="form-label">Phone Number<span class="red-text">*</span></label>
                            <input type="tel" class="form-control" id="phone" name="phone" maxlength="15" minlength="10" 
                                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 15);"
                                placeholder="Mobile Number">
                              
                        </div>
                        <div class="mb-4 col-md-6">
                            <label class="form-label">Email Address<span class="red-text">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" maxlength="60" placeholder="Enter your Email">
                            
                        </div>
                        <div class="mb-4 col-md-6">
                            <label class="form-label">Organization<span class="red-text">*</span></label>
                            <input type="text" class="form-control" id="organization" name="organization" maxlength="50" 
                                placeholder="Enter your Organization">
                            
                        </div>
                        <div class="mb-4 col-md-6">
                            <label class="form-label">Requirement<span class="red-text">*</span></label>
                            <input type="text" class="form-control" id="requirement" name="requirement" maxlength="50" 
                                placeholder="Enter your Requirement ">
                         
                        </div>
                        <div class="mb-4 col-md-6">
                            <label class="form-label">City<span class="red-text">*</span></label>
                             <input type="text" class="form-control" id="city" name="city" maxlength="50"
                                oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\s+/g, ' ').trimStart();"
                                placeholder="Enter your city">
                            <!--<select class="form-select" id="city" name="city">-->
                            <!--    <option value="" selected>Select City</option>-->
                            <!--    @foreach($cities as $city)-->
                            <!--        <option value="{{ $city->name }}" {{ old('city') == $city->name ? 'selected' : '' }}>-->
                            <!--            {{ $city->name }}-->
                            <!--        </option>-->
                            <!--    @endforeach-->
                            <!--</select>-->
                        </div>
                        <div class="mb-4 col-md-12">
                            <label class="form-label">Message </label>
                            <textarea class="form-control" placeholder="Enter Your Message" name="message" rows="3"></textarea>
                        </div>
                        <div class="row align-items-center mb-4">
                            <div class="col-auto">
                                 <img id="contact-image-comman-form" src="{{ route('captcha.image') }}" alt="CAPTCHA Image" style="border: 1px solid #ccc; height: 40px;">
                            </div>
                            <div class="col-auto">
                                <svg id="contact-button-comman-form" style="cursor: pointer;" id="contact-button" width="23" height="20" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.539 9.54947C19.539 4.46972 15.5667 0.755859 10.4869 0.755859C5.40715 0.755859 1.34335 4.81966 1.34335 9.89941C1.34335 14.9792 5.40715 19.043 10.4869 19.043C12.9252 19.043 14.9571 18.027 16.5826 16.6047" stroke="#333" stroke-miterlimit="10" stroke-linecap="round"></path>
                                    <path d="M21.5833 5.86837L19.589 9.66244L15.4799 8.32953" stroke="#333" stroke-miterlimit="10" stroke-linecap="round"></path>
                                </svg>
                            </div>
                            <div class="col-auto mt-3 mt-md-0">
                                <input class="form-control" type="text" id="contact-captcha-comman-form" placeholder="Enter captcha" maxlength="4" autocomplete="off">
                            </div>
                            <small id="contact-captcha-error-comman-form" class="text-danger" style="display:none;">Please verify captcha.</small>
                        </div>

                        <div class="mt-lg-4 mt-xxl-3">
                            <button class="coman_btn border-0" type="submit">Submit Inquiry
                                <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                            </button>
                        </div>
                    </div>
                </form>
             </div>
         </div>
    </div>
</section>

<section class="mt-100">
    <div class="container">
        <div class="row g-4 g-xxl-5">
            <div class="col-lg-6">
                <div class="why_choose_bt">
                    <span><img class="img-fluid" src="{{ asset('public/front/images/solar-consultancy.png') }}" alt="image"></span>
                    <div class="mt-4">
                        <h3>Solar Consultancy</h3>
                        <p>
                            Book a session with our expert consultants to understand which solar system is best for your space, energy needs, and budget.
                        </p>
                        <div class="mt-4">
                            <a class="coman_btn px-xxl-4"data-bs-toggle="modal" data-bs-target="#requestmodal" style="cursor: pointer;">Request Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="why_choose_bt">
                    <span><img class="img-fluid" src="{{ asset('public/front/images/sales-inquiry.png') }}" alt="image"></span>
                    <div class="mt-4">
                        <h3>Sales Inquiry</h3>
                        <p>
                            Whether you’re a homeowner or a business, get in touch with our sales team to discuss solutions, pricing, and current offers
                        </p>
                        <div class="mt-4">
                            <a class="coman_btn px-xxl-4" href="#contactFormSection" target="_self">Get Quote</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="why_choose_bt">
                    <span><img class="img-fluid" src="{{ asset('public/front/images/service-support.png') }}" alt="image"></span>
                    <div class="mt-4">
                        <h3>Service Support</h3>
                        <p>
                            Facing issues with your existing installation? Our service team is always available to troubleshoot and ensure your system performs its best.
                        </p>
                        <div class="mt-4">
                            <a class="coman_btn px-xxl-4" data-bs-toggle="modal" data-bs-target="#servicemodal" style="cursor: pointer;">Raise Ticket</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="why_choose_bt">
                    <span><img class="img-fluid" src="{{ asset('public/front/images/partner-contendre.png') }}" alt="image"></span>
                    <div class="mt-4">
                        <h3>Partner With Contendre</h3>
                        <p>
                            Interested in becoming a Contendre dealer, installer, or service partner? We’re open to collaboration and expansion opportunities.
                        </p>
                        <div class="mt-4">
                            <a class="coman_btn px-xxl-4" data-bs-toggle="modal" data-bs-target="#applymodal" style="cursor: pointer;">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="mt-100">
    <div class="container-fluid p-md-0">
       <!--<iframe class="contact_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3765.8667129386718!2d73.10730962374281!3d19.28816164528068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be79734cb56c043%3A0x709acae455ea133c!2sContendre%20Solar%20-%20Best%20Solar%20Manufacturing%20Company!5e0!3m2!1sen!2sin!4v1753508483887!5m2!1sen!2sin" width="100%" height="800" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d470.09924292625294!2d73.0944465!3d19.5074991!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be79734cb56c043%3A0x709acae455ea133c!2sContendre%20Solar!5e0!3m2!1sen!2sin!4v1787059985576!5m2!1sen!2sin" width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
    </div>
</section>

<div class="homeowners_ser_main mt-100">
    <div class="container">
        <div class="homeowners_ser contant_detail" id="inquiryform">
            <h2 class="about_head">CONNECT WITH US</h2>
            <div class="row gx-lg-0 mt-4">
                <div class="col-md-3">
                    <div class="contact-wrapper">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="49" height="49" viewBox="0 0 49 49" fill="none">
                                <path d="M36.3281 27.8418C36.8961 26.8799 38.1213 26.5673 39.0713 27.1455L47.5293 32.2939C48.1312 32.6612 48.4999 33.319 48.5 34.0312C48.5 34.7457 48.1293 35.4052 47.5293 35.7705L27.8076 47.7793C26.7877 48.4003 25.6439 48.7109 24.502 48.7109C23.36 48.7109 22.2143 48.4003 21.1963 47.7793L1.46973 35.7725C0.867971 35.4051 0.5 34.7454 0.5 34.0332C0.500141 33.321 0.86987 32.6592 1.46973 32.2939L9.92773 27.1455C10.8777 26.5671 12.1059 26.8798 12.6719 27.8418C13.2396 28.8037 12.934 30.0495 11.9863 30.626L6.38574 34.0352L23.252 44.3047C24.0219 44.7715 24.9781 44.7715 25.748 44.3047L42.6133 34.0352L37.0137 30.626C36.0657 30.0496 35.7602 28.8038 36.3281 27.8418ZM24.5 0C28.2399 4.63412e-05 31.7555 1.47811 34.3975 4.16113C37.0414 6.84622 38.5 10.4118 38.5 14.207C38.5 18.0023 37.0414 21.5699 34.3975 24.2529L29.3936 29.2217C28.0436 30.561 26.2718 31.2304 24.5 31.2305C22.728 31.2305 20.9555 30.5612 19.6055 29.2217V29.2197L14.6162 24.2676C9.14238 18.7128 9.14203 9.69981 14.5996 4.16113C17.2436 1.47807 20.76 0 24.5 0ZM24.5 4.06152C21.828 4.06152 19.3157 5.11636 17.4277 7.03223C13.5298 10.9878 13.5298 17.4281 17.4277 21.3857L22.4014 26.3213C23.5573 27.4659 25.4417 27.4659 26.5977 26.3213L31.5859 21.3691C33.4578 19.4675 34.5 16.9204 34.5 14.209C34.5 11.4975 33.4573 8.94812 31.5693 7.03223C29.6814 5.11659 27.1718 4.06157 24.5 4.06152ZM24.5 8.09961C27.8138 8.09971 30.4999 10.8257 30.5 14.1885C30.5 17.5514 27.8139 20.2772 24.5 20.2773C21.186 20.2773 18.5 17.5514 18.5 14.1885C18.5001 10.8256 21.1861 8.09961 24.5 8.09961Z" fill="#111111" />
                            </svg>
                        </div>
                        <div class="contact-wrapper-detail">
                            <p class="contact-wrapper-title">Manufacturing Unit:</p>
                            <!--<a target="_blank" href="https://maps.app.goo.gl/rMd8SZghn4APhPW89">Unit 1/6, Rajlakshmi Hi-Tech Park, Sonale village, Bhiwandi, Maharashtra – 421302. India.</a>-->
                            <a target="_blank" href="https://maps.app.goo.gl/PBX88NKgGGvb6FMt8">Survey No. 350, 351, Bhiwandi - Wada Rd, opp. Amantran Hotel, Musarne, Wada, Maharashtra 421312, India 
</a>
                        </div>
                    </div> 
                </div>
                <div class="col-md-3 bd-right">
                    <div class="contact-wrapper">
                        <div class="contact-wrapper-detail">
                            <p class="contact-wrapper-title">Headquarters:</p>
                            <a target="_blank" href="https://maps.app.goo.gl/RKhnaGNLG6f6WBWKA">909, Filix Tower, Lal Bahadur Shastri Marg, Sonapur, Bhandup West, Mumbai, Maharashtra 400078</a>
                        </div>
                    </div>
                </div>
                <div class="col col-md-3 bd-right">
                    <div class="contact-wrapper">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="49" height="48" viewBox="0 0 49 48" fill="none">
                                <path d="M10.6477 0.000261303C12.2699 0.0152579 13.8216 0.667758 14.966 1.81764C15.0289 1.88079 18.7404 6.70241 18.7404 6.70241C19.8417 7.85955 20.455 9.39697 20.4523 10.9944C20.4496 12.5919 19.831 14.127 18.7258 15.2805L16.4064 18.1975C17.6902 21.3168 19.5775 24.1517 21.9602 26.5393C24.343 28.927 27.1744 30.8205 30.2912 32.1106L33.2258 29.7766C34.3795 28.6722 35.9148 28.0552 37.5119 28.053C39.109 28.0508 40.6452 28.6638 41.802 29.7649C41.802 29.7649 46.6227 33.4753 46.6848 33.5374C47.8454 34.7015 48.4972 36.2783 48.4973 37.9221C48.4973 39.5662 47.8457 41.1437 46.6848 42.3079L44.8615 44.4094C28.4544 60.1175 -11.4715 20.2012 3.99336 3.74147L6.29707 1.73757C7.46247 0.609108 9.02554 -0.0146495 10.6477 0.000261303ZM10.5266 4.01198C9.96423 4.02658 9.42837 4.25594 9.02949 4.65261L6.72578 6.65553C-4.57697 20.2463 30.0231 52.927 41.9328 41.6721L43.757 39.5686C44.1846 39.1726 44.442 38.6262 44.4738 38.0442C44.5056 37.4621 44.3099 36.8898 43.9279 36.4495C43.9081 36.4342 39.1335 32.7615 39.0715 32.6995C38.6588 32.2903 38.1009 32.0608 37.5197 32.0608C36.9388 32.0609 36.3815 32.2905 35.9689 32.6995C35.9151 32.7553 31.9161 35.9415 31.8742 35.9749C31.602 36.1916 31.2776 36.3335 30.9338 36.387C30.5899 36.4404 30.2375 36.4035 29.9123 36.2796C25.8746 34.7762 22.2072 32.4225 19.1584 29.3782C16.1096 26.3338 13.7507 22.6696 12.2414 18.6341C12.1076 18.3045 12.0634 17.9451 12.1145 17.593C12.1655 17.2411 12.3097 16.9091 12.5314 16.6311C12.5314 16.6311 15.7508 12.5875 15.8049 12.5354C16.214 12.1228 16.4434 11.5657 16.4436 10.9846C16.4436 10.4034 16.2141 9.8456 15.8049 9.43288C15.7428 9.37278 12.0549 4.57448 12.0549 4.57448C11.636 4.19888 11.089 3.99745 10.5266 4.01198ZM28.468 8.01589C31.6549 8.01907 34.7106 9.28679 36.9641 11.5403C39.2176 13.7938 40.4853 16.8494 40.4885 20.0364C40.4885 20.5677 40.2773 21.0777 39.9016 21.4534C39.5259 21.829 39.0158 22.0393 38.4846 22.0393C37.9535 22.0393 37.4442 21.8288 37.0686 21.4534C36.6929 21.0777 36.4817 20.5677 36.4816 20.0364C36.4816 17.9111 35.6368 15.8732 34.134 14.3704C32.6312 12.8676 30.5932 12.0227 28.468 12.0227C27.9367 12.0227 27.4276 11.8115 27.052 11.4358C26.6763 11.0602 26.4651 10.551 26.465 10.0198C26.465 9.48847 26.6763 8.9785 27.052 8.6028C27.4276 8.22732 27.9369 8.01593 28.468 8.01589ZM28.468 0.00319099C33.7793 0.00902394 38.8715 2.12147 42.6272 5.87721C46.3828 9.63296 48.4953 14.725 48.5012 20.0364C48.5012 20.5677 48.2899 21.0777 47.9143 21.4534C47.5387 21.8288 47.0293 22.0393 46.4982 22.0393C45.967 22.0393 45.4569 21.829 45.0813 21.4534C44.7056 21.0777 44.4944 20.5677 44.4943 20.0364C44.4896 15.7873 42.7996 11.7138 39.7951 8.70925C36.7906 5.70467 32.717 4.0148 28.468 4.01003C27.9369 4.00998 27.4276 3.79855 27.052 3.42311C26.6763 3.04741 26.465 2.53744 26.465 2.00612C26.4651 1.47483 26.6763 0.964812 27.052 0.589128C27.4276 0.213737 27.9369 0.00323535 28.468 0.00319099Z" fill="#111111" />
                            </svg>
                        </div>
                        <div class="contact-wrapper-detail">
                            <p class="contact-wrapper-title">Call Us:</p>
                            <a href="tel:+919136457555">+91 91364 57555</a>
                        </div>
                    </div>
                </div>
                <div class="col col-md-3">
                    <div class="contact-wrapper">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="53" height="40" viewBox="0 0 53 40" fill="none">
                                <path d="M41.666 0C44.5381 0.00288701 47.2924 0.961765 49.3232 2.66602C51.3539 4.37022 52.4965 6.68079 52.5 9.09082V30.9092C52.4965 33.3192 51.3539 35.6298 49.3232 37.334C47.2924 39.0382 44.5381 39.9971 41.666 40H11.333C8.46099 39.9971 5.70759 39.0382 3.67676 37.334C1.64595 35.6298 0.503454 33.3193 0.5 30.9092V9.09082C0.503483 6.68072 1.64595 4.37023 3.67676 2.66602C5.70759 0.961815 8.46099 0.00294337 11.333 0H41.666ZM34.1611 23.5635C32.1275 25.2657 29.3724 26.2216 26.5 26.2217C23.6276 26.2217 20.8725 25.2657 18.8389 23.5635L4.83301 11.8184V30.9092C4.83302 32.3558 5.5184 33.7427 6.7373 34.7656C7.95622 35.7885 9.6092 36.3632 11.333 36.3633H41.666C43.3899 36.3633 45.0437 35.7886 46.2627 34.7656C47.4815 33.7427 48.166 32.3557 48.166 30.9092V11.8184L34.1611 23.5635ZM11.333 3.63672C10.0357 3.6389 8.76868 3.96673 7.69531 4.57812C6.62202 5.18955 5.79085 6.05647 5.30957 7.06738L21.9023 20.9932C23.1234 22.0136 24.7767 22.5859 26.5 22.5859C28.2233 22.5859 29.8766 22.0137 31.0977 20.9932L47.6895 7.06738C47.2081 6.0564 46.3771 5.18955 45.3037 4.57812C44.2303 3.96677 42.9633 3.63886 41.666 3.63672H11.333Z" fill="#111111" />
                            </svg>
                        </div>
                        <div class="contact-wrapper-detail">
                            <p class="contact-wrapper-title">Email Us:</p>
                            <a href="mailto:sales@contendresolar.com">sales@contendresolar.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.consultancyform')


@include('layouts.serviceform')

@include('layouts.partnerform')

@include('layouts.frontfooter')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contactForm');
    const submitButton = form.querySelector('button[type="submit"]');

    const fullName = document.getElementById('fullname');
    const emailAddress = document.getElementById('email');
    const contactNumber = document.getElementById('phone');
    const organization = document.getElementById('organization');
    const requirement = document.getElementById('requirement');
    const citySelect = document.getElementById('city');
    const captchaInput = document.getElementById('contact-captcha-comman-form');

    const captchaError = document.getElementById('contact-captcha-error-comman-form');
    const captchaImage = document.getElementById('contact-image-comman-form');
    const reloadButton = document.getElementById('contact-button-comman-form');

    const fullNameError = createErrorElement(fullName, "Please enter a full name");
    const emailError = createErrorElement(emailAddress, "Please enter your email.");
    const contactError = createErrorElement(contactNumber, "Please enter your phone number.");
    const organizationError = createErrorElement(organization, "Please enter your organization");
    const requirementError = createErrorElement(requirement, "Please enter your requirement");
    const cityError = createErrorElement(citySelect, "Please enter your city.");

    const disposableDomains = [
        'mailinator.com', '10minutemail.com', 'guerrillamail.com', 'tempmail.com',
        'temp-mail.org', 'throwawaymail.com', 'maildrop.cc', 'dispostable.com',
        'getairmail.com', 'moakt.com', 'spamgourmet.com', 'yopmail.com',
        'sharklasers.com', 'mailnesia.com', 'fakemail.net', 'emailondeck.com',
        'trashmail.com', 'mintemail.com', 'mytemp.email'
    ];

    function createErrorElement(input, message) {
        let error = document.createElement('small');
        error.className = "text-danger";
        error.style.display = "none";
        error.textContent = message;
        input.parentNode.appendChild(error);
        return error;
    }

    function isValidEmail(email) {
        const re = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        // const re = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(com|net|org|tech|edu|gov|co|in)$/;
        return re.test(email);
    }

    function isDisposableEmail(email) {
        const domain = email.split('@')[1]?.toLowerCase();
        return disposableDomains.includes(domain);
    }

    function isValidName(name) {
        return /^[A-Za-z\s]+$/.test(name);
    }

    function isValidContact(phone) {
        return /^\d{10,15}$/.test(phone);
    }

    function reloadCaptcha() {
        captchaImage.src = '{{ route("captcha.image") }}?' + Date.now();
    }

    reloadButton.addEventListener('click', reloadCaptcha);

    fullName.addEventListener('input', () => {
        fullNameError.style.display = isValidName(fullName.value.trim()) ? 'none' : 'block';
    });

    emailAddress.addEventListener('input', () => {
        const email = emailAddress.value.trim();

        if (email === '') {
            emailError.textContent = "Please enter your email.";
            emailError.style.display = 'block';
        } else if (!isValidEmail(email)) {
            emailError.textContent = "Please enter a valid email.";
            emailError.style.display = 'block';
        } else if (isDisposableEmail(email)) {
            emailError.textContent = "Invalid email address are not allowed.";
            emailError.style.display = 'block';
        } else {
            emailError.style.display = 'none';
        }
    });

    contactNumber.addEventListener('input', () => {
        const phone = contactNumber.value.trim();

        if (phone === '') {
            contactError.textContent = "Please enter your phone number.";
            contactError.style.display = 'block';
        } else if (!isValidContact(phone)) {
            contactError.textContent = "Phone number must be 10 to 15 digits.";
            contactError.style.display = 'block';
        } else {
            contactError.style.display = 'none';
        }
    });

    organization.addEventListener('input', () => {
        organizationError.style.display = organization.value.trim() !== '' ? 'none' : 'block';
    });

    requirement.addEventListener('input', () => {
        requirementError.style.display = requirement.value.trim() !== '' ? 'none' : 'block';
    });
    
    citySelect.addEventListener('input', () => {
    if (citySelect.value.trim() === '') {
        cityError.textContent = "Please enter your city.";
        cityError.style.display = 'block';
    } else {
        cityError.style.display = 'none';
    }
});

    // citySelect.addEventListener('change', () => {
    //     cityError.style.display = citySelect.value.trim() !== '' ? 'none' : 'block';
    // });

    captchaInput.addEventListener('input', () => {
        const value = captchaInput.value.trim();
        if (value.length === 4) {
            captchaError.style.display = 'none';
        } else if (value === '') {
            captchaError.style.display = 'block';
            captchaError.textContent = "Please enter the captcha.";
        } else {
            captchaError.style.display = 'block';
            captchaError.textContent = "Captcha must be 4 digits.";
        }
    });

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        let isValid = true;
        const emailVal = emailAddress.value.trim();
        const phoneVal = contactNumber.value.trim();

        if (!isValidName(fullName.value.trim())) {
            fullNameError.style.display = 'block';
            isValid = false;
        } else {
            fullNameError.style.display = 'none';
        }

        if (emailVal === '') {
            emailError.textContent = "Please enter your email.";
            emailError.style.display = 'block';
            isValid = false;
        } else if (!isValidEmail(emailVal)) {
            emailError.textContent = "Please enter a valid email.";
            emailError.style.display = 'block';
            isValid = false;
        } else if (isDisposableEmail(emailVal)) {
            emailError.textContent = "Invalid email address are not allowed.";
            emailError.style.display = 'block';
            isValid = false;
        } else {
            emailError.style.display = 'none';
        }

        if (phoneVal === '') {
            contactError.textContent = "Please enter your phone number.";
            contactError.style.display = 'block';
            isValid = false;
        } else if (!isValidContact(phoneVal)) {
            contactError.textContent = "Phone number must be 10 to 15 digits.";
            contactError.style.display = 'block';
            isValid = false;
        } else {
            contactError.style.display = 'none';
        }

        if (organization.value.trim() === '') {
            organizationError.style.display = 'block';
            isValid = false;
        } else {
            organizationError.style.display = 'none';
        }

        if (requirement.value.trim() === "") {
            requirementError.style.display = 'block';
            isValid = false;
        } else {
            requirementError.style.display = 'none';
        }

        if (citySelect.value.trim() === "") {
            cityError.style.display = 'block';
            isValid = false;
        } else {
            cityError.style.display = 'none';
        }

        const captchaVal = captchaInput.value.trim();
        if (captchaVal === '') {
            captchaError.textContent = "Please enter the captcha.";
            captchaError.style.display = 'block';
            reloadCaptcha();
            isValid = false;
        } else if (captchaVal.length !== 4) {
            captchaError.textContent = "Captcha must be 4 digits.";
            captchaError.style.display = 'block';
            reloadCaptcha();
            isValid = false;
        } else {
            captchaError.style.display = 'none';
        }

        if (!isValid) return;

        submitButton.textContent = 'Verifying captcha...';
        submitButton.disabled = true;

        // AJAX CAPTCHA verification
        $.ajax({
            url: '{{ route("captcha.verify") }}',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                custom_captcha: captchaVal
            },
            success: function(response) {
                if (response.success) {
                    submitButton.textContent = 'Submitting...';
                    form.submit();
                } else {
                    captchaError.textContent = response.message;
                    captchaError.style.display = 'block';
                    captchaInput.value = '';
                    reloadCaptcha();
                    submitButton.textContent = 'Submit';
                    submitButton.disabled = false;
                }
            },
            error: function() {
                alert('Something went wrong. Please try again.');
                reloadCaptcha();
                submitButton.textContent = 'Submit';
                submitButton.disabled = false;
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