@include('layouts.frontheader')
@include('layouts.hero_section' , ['pageName' => 'Solar Panel For Home'])
<style>
    .readmore-text {
  display: -webkit-box;
  -webkit-line-clamp: 1;  /* show only 3 lines initially */
  -webkit-box-orient: vertical;
  overflow: hidden;
}
 
.readmore-text.show {
  display: block; /* full text when expanded */
}
 
.readmore-btn {
  color: #F16F24;
  cursor: pointer;
  text-decoration: underline;
  display: inline-block;
  margin-top: 6px;
}
 
</style>
<section class="mt-100">
    <div class="container">
        <div class="row gy-2 gy-lg-0 gx-lg-5">
            <div class="col-lg-6">
                <div class="mb-xxl-5">
                    <h3 class="style_head">Home Solar System</h3>
                    <h2 class="head2">Providing ready-to-use Solar Systems for your Home</h2>
                </div>
                <p>Electricity costs keep climbing , but sunlight remains unlimited. Implementing a solar energy system for home use is a great option to help mitigate costs, support independence from the grid, and help the environment.</p>

                <p>A residential solar rooftop panel for home uses solar energy to create clean energy, saving you money and reducing your carbon footprint. It's a long-term investment providing financial and environmental benefits to your family.</p>
                
                <p>Contendre Solar is the name homeowners across India trust for solar rooftop panels for homes. We have installed more than 30,000 solar setups that power thousands of Indian families daily - from city roofs to large residential complexes.</p>
                <div class="readmore-box">
                 <div class="readmore-text">
                     <p>Our home solar systems are weather-proof for Indian conditions and require minimal maintenance. Contendre provides a seamless experience from consultancy to installation to after-sales support.</p>
                 <p>Going solar for home is not only about savings - it's about long-term energy security. With our solar panels for the house, you won’t have an interruption in electricity during power cuts and will be safeguarded from rising electricity costs. </p>
                 <p>Make the switch today to the best rooftop system for your home, and take part in India's growing solar community.</p>
                 </div>
                 <a class="readmore-btn">Read More</a>
                 </div>
                </div>
                

            <div class="col-lg-6">
                <img class="img-fluid" src="{{ asset('public/front/images/Home_Solar_System.png') }}" alt="Home_Solar_System">
            </div>
        </div>

        <div class="mt-4 mt-xxl-5">
<!--            <p>On one hand, you save today; on the other hand, you are securing a sustainable future for your family. Contendre Solar has successfully installed thousands of solar panels in residential homes, which include total support from consultation and permitting to post installation maintenance, making getting a home solar installation and assisting each step as simple and seamless as possible.-->
<!--</p>-->

            <!--<p>Whether you want solar power for home, energy backup, or simply wish to reduce your dependency on the grid, our home solar system solutions are ready to deliver reliable power immediately. Save money, gain energy independence, and contribute to a greener environment with Contendre Solar.</p>-->
        </div>
    </div>
</section>

<section class="advantages mt-100">
    <div class="container">
        <div class="row justify-content-between gy-5 gy-lg-0">
            <div class="col-lg-4">
                <img class="img-fluid" src="{{ asset('public/front/images/Solar_Power_for_House.png') }}" alt="image">
            </div>

            <div class="col-lg-8">
                <div class="advantages_rt_main">
                    <div class="mb-5">
                        <h3 class="style_head">Solar Power for House</h3>
                        <h4 class="head2">Advantages</h4>
                    </div>
                    <p>When you make the decision to purchase your solar system for home, you are not only making a green decision, it is also a sound financial decision. Here are some of the best reasons for installing rooftop solar units in India:</p>
                    
                    <div class="accordion advantages_accordion row" id="accordionExample">
  <div class="col-lg-6">
      <div class="row">

    <!-- 1 -->
    <div class="col-lg-12">
      <div class="according_main">
        <p class="sub_head"
            data-bs-toggle="collapse"
            data-bs-target="#collapse11"
            aria-expanded="true"
            aria-controls="collapse11">
            <i class="ri-circle-fill"></i>
          Reduced Electricity Costs
        </p>

        <div id="collapse11" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
          <div>
            Ensure production of your own power and decrease reliance on the grid.
          </div>
        </div>
      </div>
    </div>
     <!-- 3 -->
    <div class="col-lg-12">
      <div class="according_main">
        <p class="sub_head"
            data-bs-toggle="collapse"
            data-bs-target="#collapse13"
            aria-expanded="false"
            aria-controls="collapse13">
         <i class="ri-circle-fill"></i> Lower Maintenance
        </p>

        <div id="collapse13" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div>
            Our solar panels on homes have low maintenance and a manufacturer warranty designed to last.
          </div>
        </div>
      </div>
    </div>
     <!-- 5 -->
    <div class="col-lg-12">
      <div class="according_main">
        <p class="sub_head"
            data-bs-toggle="collapse"
            data-bs-target="#collapse15"
            aria-expanded="false"
            aria-controls="collapse15">
           <i class="ri-circle-fill"></i> Long-Term Savings
        </p>

        <div id="collapse15" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div>
            Save monthly for 25+ years from durable and efficient panels.
          </div>
        </div>
      </div>
    </div>
    <!-- 7 -->
    <div class="col-lg-12">
      <div class="according_main">
        <p class="sub_head"
            data-bs-toggle="collapse"
            data-bs-target="#collapse17"
            aria-expanded="false"
            aria-controls="collapse17">
          <i class="ri-circle-fill"></i> Independence of the Grid
        </p>

        <div id="collapse17" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div>
           Reliable, stable power when the electricity goes out.
          </div>
        </div>
      </div>
    </div>
    <!-- 9 -->
    <div class="col-lg-12">
      <div class="according_main">
        <p class="sub_head"
            data-bs-toggle="collapse"
            data-bs-target="#collapse19"
            aria-expanded="false"
            aria-controls="collapse19">
          <i class="ri-circle-fill"></i> Reduced Carbon Footprint
        </p>

        <div id="collapse19" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div>
            Every kWh of solar produced lowers greenhouse gas emissions.
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
 <div class="col-lg-6">
      <div class="row">
      <!-- 2 -->
    <div class="col-lg-12">
      <div class="according_main">
        <p class="sub_head"
            data-bs-toggle="collapse"
            data-bs-target="#collapse12"
            aria-expanded="false"
            aria-controls="collapse12">
            <i class="ri-circle-fill"></i>
          Increased Value of Home
        </p>

        <div id="collapse12" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div>
            Homes having a solar energy system normally have a greater resale value.
          </div>
        </div>
      </div>
    </div>
    <!-- 4 -->
    <div class="col-lg-12">
      <div class="according_main">
        <p class="sub_head"
            data-bs-toggle="collapse"
            data-bs-target="#collapse14"
            aria-expanded="false"
            aria-controls="collapse14">
           <i class="ri-circle-fill"></i> Government Subsidy
        </p>

        <div id="collapse14" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div>
            Get paid for installing rooftop solar under schemes like PM Surya Ghar Muft Bijli Yojana, rebates are available up to ₹78,000.
          </div>
        </div>
      </div>
    </div>
    <!-- 6 -->
    <div class="col-lg-12">
      <div class="according_main">
        <p class="sub_head"
            data-bs-toggle="collapse"
            data-bs-target="#collapse16"
            aria-expanded="false"
            aria-controls="collapse16">
         <i class="ri-circle-fill"></i>  Protection from Tariff Increases
        </p>

        <div id="collapse16" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div>
            Solar protects you from the risk of raised electricity tariffs.
          </div>
        </div>
      </div>
    </div>
    <!-- 8 -->
    <div class="col-lg-12">
      <div class="according_main">
        <p class="sub_head"
            data-bs-toggle="collapse"
            data-bs-target="#collapse18"
            aria-expanded="false"
            aria-controls="collapse18">
          <i class="ri-circle-fill"></i> Revenue Opportunity
        </p>

        <div id="collapse18" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div>
             Earn money through net metering and feed electricity back into the grid.
          </div>
        </div>
      </div>
    </div>

   
  </div>
 </div>
</div>

                </div>
            </div>
        </div>

        <div class="mt-4 mt-lg-5">
            <p>The cost for solar panels for homes in India starts at ₹60,000 to ₹3,00,000, depending on your consumption patterns, and kW capacity. Contendre Solar will assist and make it easy for you to switch, thanks to solar loans and EMI facilities that breaks the investment to 20% down payment and the rest paid off in affordable monthly installments.
</p>

            
            <div class="mt-4 mt-xxl-5">
                <a class="coman_btn" href="{{ route('contact.us') }}#inquiryform">Enquire Now<img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow"></a>
            </div>
        </div>
    </div> 
</section>

<!-- consultation -->
<section class="consultation">
    <div class="container">
        <div>
            <h3 class="head_white mb-lg-4 mb-xxl-5">Get a Solar Consultation</h3>
            <p>Ready to power your home with solar energy? <br>
                Click below to reach our inquiry form and one of our experts will connect with you shortly.</p>
        </div>

        <div class="consultation_bt">

            <div class="con_bt_child">
                <span><img src="{{ asset('public/front/images/consultation_icon.svg') }}" alt="image"></span>
                <p class="sub_head_white">Free site evaluation</p>
            </div>
            <div class="con_bt_child">
                <span><img src="{{ asset('public/front/images/consultation_icon.svg') }}" alt="image"></span>
                <p class="sub_head_white">Customized solar panel quote</p>
            </div>
            <div class="con_bt_child">
                <span><img src="{{ asset('public/front/images/consultation_icon.svg') }}" alt="image"></span>
                <p class="sub_head_white">Help with government subsidy & installation</p>
            </div>
        </div>

        <div>
            <a class="coman_btn" href="{{ route('contact.us') }}#inquiryform">Enquire Now<img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow"></a>
        </div>
    </div>
</section>

<!-- why_choose -->


<section class="why_choose mt-100">
    <div class="container">
        <div class="text-center mb-4">
            <p class="style_head">Reasons to Choose </p>
            <h2 class="head2 mb-4">Contendre Solar for Your Home
</h2>
            <p>Contendre Solar is your quality residential solar systems partner, dedicated to reducing energy bills, increasing property value, and contributing to a cleaner planet. 
</p>
        </div>

        <div class="row g-4 g-xxl-5">
            <div class="col-lg-6">
                <div class="why_choose_bt">
                    <span><img class="img-fluid" src="{{ asset('public/front/images/why_choose_1.png') }}" alt="image"></span>
                    <div class="mt-5">
                        <h4 class="why_choose_title">Full installation services</h4>
                        <p>From site evaluation to a complete home solar installation, our experienced and certified team provides you with a seamless experience with no hassle. 

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="why_choose_bt">
                    <span><img class="img-fluid" src="{{ asset('public/front/images/why_choose_2.png') }}" alt="image"></span>
                    <div class="mt-5">
                        <h4 class="why_choose_title">One-stop destination for rebates:</h4>
                        <p>We help homeowners with government schemes that make solar installation affordable and maximize your savings. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="why_choose_bt">
                    <span><img class="img-fluid" src="{{ asset('public/front/images/why_choose_3.png') }}" alt="image"></span>
                    <div class="mt-5">
                        <h4 class="why_choose_title">Custom-built solar panel solution:</h4>
                        <p> Our solar panels for your home are tailored to your energy needs, regardless of whether you live in a small apartment or a large property. 

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="why_choose_bt">
                    <span><img class="img-fluid" src="{{ asset('public/front/images/why_choose_4.png') }}" alt="image"></span>
                    <div class="mt-5">
                        <h4 class="why_choose_title">Types of Solar Panels </h4>
                        <ul>
                            <li>Off-Grid Systems: Gain energy independence in homes located in areas with an unreliable grid supply.</li>
                            <li>On-Grid: Connect directly to the grid, and benefit from net metering and reduced electricity bills. </li>
                            <li>Hybrid: A combination of both on-grid and off-grid provides you with maximum flexibility, reliability, and savings.
</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="mt-100">
    <div class="container">
        <h2 class="head2">Why Choose Contendre Solar for Your Home?</h2>
        <p>Contendre Solar is among the best solar systems for homes in India, offering high-quality residential solar systems that are efficient, affordable, and reliable. Here’s what makes us stand out:</p>
        <p><b>Complete Installation Services</b></p>
        <p>We handle everything from consultation to installation. Our experts assess your property to design the ideal rooftop solar panel for the house, ensuring maximum sunlight capture and efficiency. Our team installs each home solar panel with precision, taking care of wiring, orientation, and safety.</p>
        <p>Once your solar energy products for home are live, we continue to support you with regular maintenance, ensuring consistent energy performance for decades.</p>
        <p><b>Support for Subsidies & Financing</b></p>
        <p>At Contendre, we don’t just install — we empower. Our dedicated team helps you access government subsidies for rooftop solar panel for home under national and state-level schemes. We handle all documentation and processes, ensuring maximum financial benefit.</p>
        <p>We also offer solar financing options to make switching to solar simple, so you can buy solar panel for home online or through our sales team, without worrying about upfront costs.</p>
  



    
        <h2 class="head2">Our Solar Panel Solutions for Homes</h2>
        <p>We deliver complete solar energy systems for home, tailored to your property size, energy consumption requirements, and budget. Each of our installations at Contendre Solar is designed for reliability, efficiency, and durability.</p>
        <p>Whether you live in a small building or a bungalow, we design our rooftop solar panels for homes to suit your lifestyle. Our panels are designed for the Indian climate and engineered to produce the maximum power output with minimum maintenance.</p>
  



    
        <h2 class="head2">Types of Solar Panels Available</h2>
        <p>Contendre Solar offers a wide variety of systems to suit every homeowner’s energy goals:</p>
        <ul>
            <li>On-Grid Systems - These allow you to connect your home solar system to the local grid, which means you can export excess power, and you could potentially save some money/s with net metering. </li>
            <li>
                Off-Grid Systems - These are perfect for remote areas who do not have a great grid access; they achieve total autonomy, and allow for battery storage for backup.
            </li>
            <li>
                Hybrid Systems - This is a smart combination of option 1 and option 2; the hybrid system can connect to a grid but also has batteries that come with the service in the event of an outage. 
            </li>
        </ul>
        <p>Each type allows you to set up the best rooftop solar system for your home; providing efficiency, durability and long term savings.</p>
   




   
         <h2 class="head2">Cost and Government Subsidy Details</h2>
         <p>The Government of India offers multiple incentives for homeowners adopting solar energy. Under the PM Surya Ghar Muft Bijli Yojana, households installing rooftop solar panel for home in India can receive subsidies up to ₹78,000 for systems up to 3kW.</p>
         <p>At Contendre Solar, we help you determine the right solar system for house size, apply for subsidies, and complete the installation at the most competitive price. With our easy loan options, you can start saving from day one.</p>
    


   
         <h2 class="head2">Empowering Homes Across India</h2>
         <p>With installations in over 30,000 homes, Contendre Solar continues to redefine residential solar in India.Our mission is to make solar panels for home accessible to every family, urban or rural. </p>
         <p>We provide unparalleled support, reliability, and efficiency from the time of consultation to installation and after-sales service. Installing every home solar system is a small step toward India's energy independence. Choose Contendre Solar, India’s most trusted rooftop solar company , to make your home self-reliant, sustainable, and future-ready.</p>
    </div>
</section>

<!-- faq -->
@if($faq && $faq->title_description)
    @php
        $faqs = json_decode($faq->title_description, true);
    @endphp

    <section class="faq mt-100">
        <div class="container">
           
            <h4 class="head2 animation-top text-center">{{ $faq->faq_title }} - FAQs</h4>
            <div class="accordion" id="accordionExample">
                <div class="row">
                    @foreach($faqs as $key => $item)
                        <div class="col-lg-6">
                            <div class="according_main">
                                <h5 class="sub_head"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapse{{ $key }}"
                                    aria-expanded="{{ $key == 0 ? 'true' : 'false' }}"
                                    aria-controls="collapse{{ $key }}">
                                    {{ $item['title'] ?? '' }}
                                </h5>
                                <div id="collapse{{ $key }}"
                                    class="accordion-collapse collapse {{ $key == 0 ? 'show' : '' }}"
                                    data-bs-parent="#accordionExample">
                                    <div>
                                        {!! $item['description'] ?? '' !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endif
<script>
  // One-liner that works for *any* .readmore-btn
  document.querySelectorAll('.readmore-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      // Walk up to the .readmore-box, then find the .readmore-text inside it
      const text = btn.closest('.readmore-box').querySelector('.readmore-text');
      text.classList.toggle('show');
      btn.textContent = text.classList.contains('show') ? 'Read Less' : 'Read More';
    });
  });
</script>
@include('layouts.frontfooter')