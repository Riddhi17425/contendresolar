@include('layouts.frontheader')
@include('layouts.hero_section' , ['pageName' => $productdetail->url])
    

<section class="mt-100">
    <div class="container">
     
        <div class="row align-items-center gy-4 g-lg-5">
            <div class="col-lg-8">
                <div>
                    <p class="style_head animation-top">{{$productdetail->sub_title}}</p>
                    <h2 class="head2 animation-top">{{$productdetail->title}} Series</h2>
                    {!! $productdetail->short_description !!}
                    <div class="mt-3">
                    <a class="coman_btn animation-bottom" href="{{ route('contact.us') }}#inquiryform" >Enquire Now <img src="{{ asset('public/front/images/arrow.svg') }}"alt="arrow"></a>
                    </div>                                       
                </div>

            </div>
            <div class="col-lg-4">
                <img class=" img-fluid animation-zoom-in" src="{{ asset('/'.$productdetail->image) }}" alt="{{  str_replace(['-', '_'],' ', pathinfo($productdetail->image, PATHINFO_FILENAME)) }}">
            </div>            
        </div>
    </div>
</section>
<!-- feature -->
<section class="mt-100">
  <div class="container">
    <h2 class="head2 animation-top text-center">Incredible Features</h2>
  <div class="feature_wrapper">
    @php
    $productKeyFeatures = json_decode($productdetail->keyfeature_id, true) ?? [];
    @endphp   

    @foreach($productKeyFeatures as $featureTitle)
   
      @php
        $feature = \App\Models\KeyFeature::where('title', $featureTitle)->first();
        if (!$feature) continue;
      @endphp
      <div class="feature_box">
          <div>
            @if($feature->image)
              <img src="{{ asset('public/keyfeature_images/' . $feature->image) }}" 
              alt="{{ $feature->alt_tag ?? $feature->title }}" 
              class="img-fluid mb-3" width="60">
            @else
              <svg width="46" height="48" xmlns="http://www.w3.org/2000/svg">
              <path d="..." fill="#F16F24"/> 
              </svg>
            @endif
          </div>
        <p class="sub_head">{{ $feature->title }}</p>
        {!! $feature->description !!}
      </div>
  
    @endforeach
  </div>
</section>
 <!-- N-TYPE TOPCON --> 
<section class="Sustainable mt-100 n-type">
  <div class="container">
    <div class="Sustainable_top">
      <h2 class="head2 animation-top">{{ $productdetail->banner_title }}</h2>
      <p class="animation-bottom">{{ $productdetail->productdetail }}</p>
    </div>
    <div class="mt-5 animation-bottom" id="counterSection">
      <div class="row gy-4 gx-0">
        <div class="col-lg-3">
          <div class="Sustainable_bot border-0">
            <p class="head2">
              <span data-target="{{ $productdetail->maximum_efficiency }}">{{ $productdetail->maximum_efficiency }}</span>% 
            </p>
            <p>Maximum Efficiency</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="Sustainable_bot">
            <p class="head2">
              <span data-target="{{ $productdetail->maximum_power_output }}">{{ $productdetail->maximum_power_output }}</span>Wp
            </p>
            <p>Maximum Power Output</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="Sustainable_bot">
            <p class="head2">
              {{ $productdetail->positive_power_tolerance }}
            </p>
            <p>Positive Power Tolerance</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="Sustainable_bot">
            <p class="head2">
              {{ $productdetail->cells_guaranted }}
              <!-- <span data-target="1000">0</span>+ -->
            </p>
            <p>Cells Guaranteed</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="mt-100">
    <div class="container">
        <h2 class="head2 animation-top text-center">Qualification & Certifications</h2>
        <div class="quali_slider">
            @foreach($certifications as $certification)
            <img src="{{ asset('public/certificate_image/' . $certification->image) }}" alt="{{  str_replace(['-', '_'],' ', pathinfo($certification->alt_tag, PATHINFO_FILENAME)) }}" class="img-fluid">
            
            @endforeach
        </div>
    </div>
</section>
<div class="request-popup">
    <div class="modal fade" id="request-btn">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title comman_title fs-5" id="dropinq">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <span class="success" style="color: green;margin: 5px;padding: 5px"></span>
                
                <form action="{{ route('contact.us') }}" method="post" id="contactForm">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <input type="text" required class="controlForm" id="fullname" name="fullname" placeholder="Your Name*" 
                                oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\s+/g, ' ').trimStart();">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <input type="text" class="controlForm" id="producttitlefor" readonly name="inquiryfor"
                                value="Become An Partner">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <input type="text" required class="controlForm" id="phone" name="phone" placeholder="Phone Number*" 
                                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 15);">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <input type="email" required class="controlForm" id="email" name="email" placeholder="Email Address*">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <input type="text" required class="controlForm" id="organization" name="organization" placeholder="Organization" 
                                >
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <input type="text" required class="controlForm" id="requirement" name="requirement" placeholder="Requirement"
                                >
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <input type="text" required class="controlForm" id="city" name="city" placeholder="City"
                                oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\s+/g, ' ').trimStart();">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <textarea placeholder="Message*" id="message" name="message" rows="5" class="areatext"></textarea>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-row">
                                <div class="g-recaptcha" data-sitekey="6LfhahkqAAAAADSBdvYBN2NwhGh5dp5SLWd1r_FW"></div>
                            </div>
                            <p id="recaptcha-error" class="error" for="g-recaptcha-response" style="display:none;">Please verify the
                                reCAPTCHA</p>
                        </div>
                        <div class="col-lg-12 col-md-6 col-sm-12">
                            <div class="submit">
                                <button type="submit" class="request-submit btn btn-primary">Submit Inquiry</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('layouts.frontfooter')