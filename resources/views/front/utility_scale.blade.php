@include('layouts.frontheader')
@include('layouts.hero_section' , ['pageName' => 'Utility-Scale'])


<section class="mt-100">
  <div class="container">
    <div class="row align-items-center gy-4 gx-lg-5">      
      <div class="col-lg-6">
        <div>
          <h3 class="style_head animation-top">Utility-Scale Solar for </h3>
          <h2 class="head2 animation-top">National Energy Infrastructure</h2>
          <p class="animation-bottom">As a trusted utility-scale solar EPC company in Maharashtra, India, Contendre Solar develops and executes high-capacity utility scale solar projects designed to strengthen grid reliability and accelerate clean energy adoption. Our expertise spans engineering, procurement, construction, and long-term performance optimization, enabling seamless execution of utility-scale solar assets that support utilities, DISCOMs, and large power purchasers with reliable renewable energy.
        </p>
         
        </div>
      </div>
      <div class="col-lg-6">
        <img class=" img-fluid animation-zoom-in" src="{{ asset('public/front/images/utility.png') }}" alt="image">
      </div>      
    </div>
  </div> 
</section>
<section class="mt-100">
  <div class="container">
    <h3 class="style_head animation-top">Utility-Scale Solar
</h3>
    <h2 class="head2 animation-top">Advantages </h2>

    <div class="row mt-5">
      <div class="col-lg-6">
        <ul class="milestoneul">
          <li>Significant reduction in wholesale electricity costs</li>
          <li>Long-term hedge against rising diesel and fossil-fuel tariffs</li>
          <li>Creation of skilled local jobs and new business opportunities</li>
          <li>Minimal transmission losses thanks to decentralized generation</li>
          
        </ul>
      </div>
      <div class="col-lg-6">
        <ul class="milestoneul">
          <li>Better grid voltage, improved load management, and overall grid stabilization</li>
          <li>Reliable long-term power for industrial and commercial consumers</li>
          <li>Revenue potential through net-metering frameworks where applicable</li>
          <li>Helps DISCOMs meet Renewable Purchase Obligations (RPOs) and national solar targets</li>
        </ul>
      </div>
    </div>
    <p>Utility-scale solar farms provide reasonable price stability during peak demand hours when traditional resources are more likely to see price spikes. It is this reliability and predictability of pricing that has pushed solar into the forefront as one of the fastest-growing and most reliable renewable energy generation sources for both utilities and major energy consumers.
</p>
    
    <div class="">
      <a class="coman_btn animation-bottom" href="{{ route('contact.us') }}#inquiryform">Enquire Now <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
      </a>
    </div>
  </div>
</section>
@include('layouts.frontfooter')