@include('layouts.frontheader')
@include('layouts.hero_section' , ['pageName' => 'about'])

<div class="homeowners_ser_main overview_main">
    <div class="container">
        <div class="homeowners_ser overview d-flex">
            <div class="over-f-icon">
                <img src="{{ asset('public/front/images/sustainability.svg') }}" class="over-icon" alt="sustainability">
                <p class="mt-3">Sustainability</p>
            </div>
            <div class="over-f-icon">
                <img src="{{ asset('public/front/images/quality.svg') }}" class="over-icon" alt="Quality">
                <p class="mt-3">Quality</p>
            </div>
            <div class="over-f-icon">
                <img src="{{ asset('public/front/images/Innovation.svg') }}" class="over-icon" alt="Innovation">
                <p class="mt-3">Innovation</p>
            </div>
            <div class="over-f-icon">
                <img src="{{ asset('public/front/images/satisfaction.svg') }}" class="over-icon" alt="Satisfaction">
                <p class="mt-3">Satisfaction</p>
            </div>
            <div class="over-f-icon">
                <img src="{{ asset('public/front/images/adaptable.svg') }}" class="over-icon" alt="Adaptable">
                <p class="mt-3">Adaptability</p>
            </div>
            <div class="over-f-icon">
                <img src="{{ asset('public/front/images/responsible.svg') }}" class="over-icon" alt="Responsible">
                <p class="mt-3">Responsibility</p>
            </div>

        </div>
    </div>
</div>

<section class="mt-100">
    <div class="container">
        <div class="row align-items-center gy-4 gy-lg-0 gx-lg-5">
            <div class="col-lg-6">
                <div>
                    <p class="style_head animation-top">We Are Contendre</p>
                    <h2 class="head2 animation-top">Shaping Tomorrow with Solar Solutions</h2>
                    <p class="animation-bottom">Since 1984, Contendre Group has driven success across textiles and infrastructure. With Contendre Greenergy, we now lead in solar solutions and sustainable energy.
                    </p>
                    <p class="animation-bottom">We started with the vision of giving everyone access to cost-effective solar solutions. Every individual and business aiming to cut their carbon footprint should have highest quality and customized solar solutions.

                    </p>
                    <p>Our consortium delivers value with Solar Installation and Manufacturing Company expertise, cutting-edge solar solutions, expert solar panel manufacturers, and photovoltaic PV systems built for all needs.

                    </p>
                </div>

            </div>
            <div class="col-lg-6">
                <img class=" img-fluid animation-zoom-in" src="{{ asset('public/front/images/We-Are-Contendre.png') }}"
                    alt="image">
            </div>
            <div class="col-lg-12 mt-3">
                <p class="animation-bottom mb-1">To serve diverse clients, we provide customized solar modules, EPC services, OEM solutions, and turnkey solar solutions that meet trusted global quality standards.
</p>
                <p class="animation-bottom mb-0">Each Contendre Solar installation helps reduce electricity bills today while creating a cleaner, greener future. It’s a true win-win for people and the planet.
</p>
            </div>
        </div>
    </div>
</section>

<section class="vision-mission mt-100">
    <!--<div class="half-bg">-->
    <!--</div>-->
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <img src="{{ asset('public/front/images/vision.png') }}" alt="vision" class="img-fluid">
                <h4 class="head2 animation-top our_solar_purpose">Our Solar Purpose</h4>
                <p>To build harmony between the environment and human growth by offering cost-effective solar solutions. Through cutting-edge solar solutions and expert solar panel manufacturing, we aim to ensure customer satisfaction and become one of the most admired providers of highest quality and customized solar solutions, shaping a sustainable future.
</p>
            </div>
            <div class="col-xl-6">
                <img src="{{ asset('public/front/images/mission.png') }}" alt="mission" class="img-fluid">
                <h4 class="head2 animation-top our_solar_purpose">Our Solar Commitment
</h4>
                <p>We help our partners build a brighter future by providing safe, strong, and on-time turnkey solar solutions. With world-class solar technology and expert solar panel manufacturing, we deliver real value and remain a reliable name in solar solutions and renewable energy.
</p>
            </div>
        </div>
    </div>

</section>

<section class="mt-100">
  <div class="container">
    <h3 class="style_head animation-top text-center">Solar Experts</h3>
    <h2 class="head2 animation-top text-center">Powering Innovations</h2>
    <p>Contendre’s leadership blends seasoned industry expertise with first-generation entrepreneurial energy. The combination of deep operational, manufacturing, HR, and finance experience alongside dynamic founders ensures stability, agility, and a future-focused approach—positioning Contendre for sustainable growth in the evolving solar manufacturing landscape.</p>

    <!-- Tab Content -->
    <div class="tab-content" id="memberTabsContent">
      @foreach($boardmember as $key => $member)
        <div 
          class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" 
          id="member-{{ $key }}" 
          role="tabpanel" 
          aria-labelledby="tab-{{ $key }}">
          
          <div class="row">
            <div class="col-xl-4">
              <div class="member-image">
                <img src="{{ asset('/'.$member->image) }}" 
                     alt="{{ str_replace(['-', '_'],' ', pathinfo($member->image, PATHINFO_FILENAME)) }}" 
                     class="img-fluid">
              </div>
            </div>
            <!--<div class="col-xl-7">-->
            <!--  <div class="member-info">-->
            <!--    <h3 class="member-name">{{ $member['title'] }}</h3>-->
            <!--    <h4 class="member-position">{{ $member['designation'] }}</h4>-->
            <!--    <div class="member-bio">-->
            <!--      {!! $member->description !!}-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->
            <div class="col-xl-8">
              <div class="member-info">
                <p class="member-name">{{ $member['title'] }}</p>
                <p>{{ $member['designation'] }}</p>
                <div class="member-bio-wrapper">
                  <div class="member-bio clamp-text">
                    {!! $member->description !!}
                  </div>
                  <!--<button class="read-more-btn">Read More</button>-->
                </div>
              </div>
            </div>

          </div>
        </div>
      @endforeach
      
       <!-- Nav Tabs -->
      <div class="row justify-content-end overview_tabs_main" id="overview_tabs_main">
          <div class="col-lg-8">
               <ul class="nav nav-tabs overview_tabs" id="memberTabs" role="tablist">
      @foreach($boardmember as $key => $member)
        <li class="nav-item" role="presentation">
          <button 
            class="nav-link {{ $loop->first ? 'active' : '' }}" 
            id="tab-{{ $key }}" 
            data-bs-toggle="tab" 
            data-bs-target="#member-{{ $key }}" 
            type="button" 
            role="tab" 
            aria-controls="member-{{ $key }}" 
            aria-selected="{{ $loop->first ? 'true' : 'false' }}">
            <img src="{{ asset('/' . $member->image) }}" 
                 alt="{{ str_replace(['-', '_'],' ', pathinfo($member->image, PATHINFO_FILENAME)) }}" 
                 class="img-fluid" >
          </button>
        </li>
      @endforeach
    </ul>
          </div>
      </div>
    
    </div>
  </div>
</section>


@include('layouts.frontfooter')



<script>
document.addEventListener("DOMContentLoaded", function () {
  document.addEventListener("click", function (e) {
    if (e.target && e.target.classList.contains("read-more-btn")) {
      let btn = e.target;
      let bio = btn.previousElementSibling; // .member-bio
      let overviewTabs = document.getElementById("overview_tabs_main");

      bio.classList.toggle("expanded");

      if (bio.classList.contains("expanded")) {
        btn.textContent = "Read Less";
       overviewTabs.style.marginTop = "0em";
      } else {
        btn.textContent = "Read More";
        overviewTabs.style.marginTop = "-11em";
      }
    }
  });
});
</script>

