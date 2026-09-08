@include('layouts.frontheader')
@include('layouts.hero_section' , ['pageName' => 'BIPV'])

<section class="mt-100">
  <div class="container">
    <div class="row align-items-center gy-4 g-lg-5">     
     <div class="col-lg-6">
        <img class=" img-fluid animation-zoom-in" src="{{ asset('public/front/images/bipv-sol.png') }}" alt="image">
      </div> 
      <div class="col-lg-6">
        <div>
          <p class="style_head animation-top">Building Integrated Photovoltaics</p>
          <h2 class="head2 animation-top">The Future of Solar Design</h2>
          <p class="animation-bottom">From sleek curtain walls to custom sunshades, BIPV glass can be colour-matched or patterned to 
          complement any façade. Panels can even display graphics or logos, blending branding with clean energy production. 
          As efficiency improves and costs fall, integrated solar panels for façades and roofs are rapidly becoming a preferred 
          choice for architects, developers, and homeowners pursuing net zero energy buildings.
        </p>
          
        </div>
      </div>
          
    </div>
  </div>
</section>
<section class="mt-100">
  <div class="container">
    <div class="row align-items-center gy-4 gx-lg-5">
          
      <div class="col-lg-6">
        <div>
          <h3 class="style_head animation-top">Integrated Solar Panels Are the Future!
</h3>
          <h2 class="head2 animation-top">Make the Switch with Contendre BIPV Products</h2>
          <p class="animation-bottom">Contendre Solar delivers next-generation architectural solar solutions: transparent or full-spandrel BIPV glass for façades, windows, roof glazing, skylights, and sunshades. Our crystalline-silicon technology combines proven durability with outstanding design flexibility, enabling developers to convert entire structures into reliable, power-producing assets.

        </p>
          
    <!--      <div class="">-->
    <!--  <a class="coman_btn animation-bottom" href="javascript:void(0);">Explore Our BIPV Products<img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">-->
    <!--  </a>-->
    <!--</div>-->
        </div>
        
      </div>    
       <div class="col-lg-6">
        <img class=" img-fluid animation-zoom-in" src="{{ asset('public/front/images/bipv-sol1.png') }}" alt="image">
      </div>  
    </div>
  </div>
</section>
<section class="mt-100">
  <div class="container">
    <h3 class="style_head animation-top">End-to-End BIPV Solutions </h3>
    <p class="head2 animation-top">With Contendre </p>
   
    <p>From concept to commissioning, we provide a seamless path to energy-positive buildings:</p>
    <div class="row mt-5">
      <div class="col-lg-6">
        <ul class="milestoneul">
          <li><strong>Design and Engineering :</strong> Collaboration with architects and builders to align solar performance with structural and aesthetic goals.</li>
          <li><strong>Product Selection :</strong>  Wide portfolio of BIPV glass, façades, and shading devices tailored for optimal generation and visual harmony.</li>
          <li><strong>Project Management :</strong> Dedicated coordination to keep schedules and budgets on track.</li>
        </ul>
      </div>
      <div class="col-lg-6">
        <ul class="milestoneul">
          <li><strong>Monitoring and Optimisation :</strong>  Real-time performance tracking for maximum output and rapid issue resolution.
</li>
          <li><strong>Ongoing Maintenance and Support :</strong> Proactive service programs that safeguard efficiency for decades.
</li>
          <li><strong>Installation and Integration :</strong> Skilled teams ensure flawless incorporation of BIPV modules into the building envelope.</li>
        </ul>
      </div>
    </div>
    <p>By uniting architectural design and renewable energy, Contendre’s end-to-end BIPV solutions help developers, businesses, and homeowners achieve sustainable, energy-independent spaces that meet tomorrow’s standards today.
</p>
    
    <div class="">
      <a class="coman_btn animation-bottom" href="{{ route('contact.us') }}#inquiryform">Reach out <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
      </a>
    </div>
  </div>
</section>
@include('layouts.frontfooter')