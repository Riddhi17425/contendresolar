@include('layouts.frontheader')
@include('layouts.hero_section' , ['pageName' => 'Milestone'])


<section class="mt-100">
  <div class="container">
    <div class="row align-items-center gy-4 gy-lg-0 gx-lg-5">
      <div class="col-lg-4">
        <img class=" img-fluid animation-zoom-in" src="{{ asset('public/front/images/milestone_about.png') }}" alt="image">
      </div>
      <div class="col-lg-8">
                
					<div>
						<h3 class="style_head animation-top">India’s Premium Solar Leader</h3>
                        
        <h2 class="head2 animation-top">Integrated PV Manufacturing & Smart Solutions
</h2>
        <ul class="milestoneul">
          <li>Founded to provide clean, reliable, and renewable solar energy solutions for homes, businesses, and industries.</li>
          <li>State-of-the-art solar PV manufacturing facility at Wada Maharashtra, producing advanced N type TOPCON solar panels.
</li>
          <li>Equipped with modern European machinery for efficient solar PV manufacturing and innovative solar solutions.
</li>
          <li>Complete range of solar products ‘Made in India’ by trusted solar module manufacturers, supporting residential on-grid solar systems and off-grid solar power systems.
</li>
          <li>Seamless integration of solar solutions across the entire value chain, ensuring reliable solar energy generation and green energy solutions.
</li>
        </ul>
      </div>
    </div>
    <!--<div class="col-lg-12 mt-3">-->
    <!--  <p>Solar power has become the largest new source of electricity installed each year since grid parity is achieved in many regions. The trend is accelerating. As the pace of transition from fossil fuels to electricity increases, the world's demand for electric energy is also undergoing a new round of transformation. In order to meet this strong, continuous demand brought by the energy transformation, Contendre has made an ambitious capacity expansion plan, adhering to the business philosophy of "leading, expanding production with advanced technology", where every new production capacity is a new upgrade of product technology.</p>-->
    <!--</div>-->
  </div>
  </div>
</section>
<!-- Sustainable -->
<section class="Sustainable mt-100 future">
  <div class="container">
    <div class="Sustainable_top">
      <h4 class="head2 animation-top">From Solar Panels To Progress</h4>
    </div>
    <div class="mt-5 animation-bottom" id="counterSection">
      <div class="row gy-4 gy-lg-0 gx-0">
        <div class="col-lg-5">
          <div class="Sustainable_bot border-0 ps-0">
            <p class="head2">2024</p>
            <p>Contendre Solar plans to expand its solar PV manufacturing by starting raw material production, strengthening solar solutions and supporting monocrystalline silicon solar panels and industrial solar panels.
</p>
            <!--<p>Contendre Solar plans to establish backward integration with the company foraying into raw material manufacturing. </p>-->
          </div>
        </div>
        <div class="col-lg-5">
          <div class="Sustainable_bot pe-0">
            <p class="head2">2025</p>
            <p>Contendre Greenergy Private Limited gets MSME listing with a 500 Crore revenue target, while expanding solar PV manufacturing and exploring new renewable energy solutions.</p>
            <!--<p>MSME Listing of Contendre Greenergy Private Limited with a target revenue of 500 Crores along with company’s further exploration into other renewable energy sources.</p>-->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="milestone">
  <div class="container">
    <ul class="nav nav-pills mile_nav" id="pills-tab" role="tablist">
      @foreach ($milestones as $index => $milestone)
        <li class="nav-item" role="presentation">
          <button class="nav-link @if ($index === 0) active @endif"
                  id="pills-{{ $milestone->year }}-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-{{ $milestone->year }}"
                  type="button" role="tab"
                  aria-controls="pills-{{ $milestone->year }}"
                  aria-selected="{{ $index === 0 ? 'true' : 'false' }}">
            <div class="dot"></div>
            <div class="nav_year">{{ $milestone->year }}</div>
          </button>
        </li>
      @endforeach
    </ul>

    <div class="tab-content" id="pills-tabContent">
      @foreach ($milestones as $index => $milestone)
        <div class="tab-pane fade @if ($index === 0) show active @endif"
             id="pills-{{ $milestone->year }}"
             role="tabpanel"
             aria-labelledby="pills-{{ $milestone->year }}-tab">
          <div class="mile_content">
            <div class="row">
              <div class="col-lg-6 mb-3 mb-lg-0">
                <img src="{{ asset('public/milestone_images/' . $milestone->image) }}" alt="{{  str_replace(['-', '_'],' ', pathinfo($milestone->image, PATHINFO_FILENAME)) }}" class="img-fluid">
              </div>
              <div class="col-lg-6 ps-lg-5">
                <div class="mile_content">
                  <p style="font-size:25px">{{ $milestone->year }}</p>
                  {!! $milestone->description !!}
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

@include('layouts.frontfooter')