@include('layouts.frontheader')
@include('layouts.hero_section' , ['pageName' => 'About Solar'])


<section class="mt-100">
    <div class="container">        
        <div class="row align-items-center g-lg-5">
            <div class="col-lg-6">
                <div>
                    <h3 class="style_head animation-top">Solar Energy, Powering Futures</h3>
                    <h2 class="head2 animation-top">Advanced Solar Energy Solutions for Sustainability
                    </h2>
                    <p class="animation-bottom">The future of energy comes from the sun. As conventional resources run low and pollution rises, solar energy solutions have become the most reliable and abundant choice. There are two main ways to use solar energy: the thermal approach, which uses solar heat for cooking, heating, and electricity, and the photovoltaic approach, which converts sunlight directly into power. 
                    </p>
                    <p class="animation-bottom">These solutions support residential on-grid solar systems, off-grid solar power systems, and large-scale solar energy generation for homes, businesses, and cities. As a trusted solar company in India and a top solar company in Maharashtra, we provide advanced solar technological solutions that make renewable energy easy and reliable. Choosing green energy solutions today helps build a cleaner and sustainable tomorrow.

                    </p>
                   
                   
                </div>
 
            </div>
            <div class="col-lg-6">
                <img class="img-fluid animation-zoom-in" src="{{ asset('public/front/images/sustainability.png') }}" alt="image">
            </div>
        </div>
    </div>
</section>


<section class="mt-100 envi_frien">
  <div class="container">
    <div class="envi_frien_content">
        <div class="d-flex justify-content-end gap-4 mb-3">
      <!-- Prev -->
      <div class="slick-prev-custom">
        <svg width="55" height="54" viewBox="0 0 55 54" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect width="53.9411" height="53.9411" rx="26.9706" transform="matrix(-1 0 0 1 54.0586 0)" fill="#F16F24"/>
          <path d="M17.8975 26.9706H36.2822M17.8975 26.9706L24.9685 19.8995M17.8975 26.9706L24.9685 34.0417" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <!-- Next -->
      <div class="slick-next-custom">
        <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="0.0585938" width="53.9411" height="53.9411" rx="26.9706" fill="#F16F24"/>
          <path d="M36.2197 26.9706H17.835M36.2197 26.9706L29.1487 19.8995M36.2197 26.9706L29.1487 34.0417" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>
    
      <div class="envi_slider">
      <!-- Slide 1 -->
      @foreach($ourexperts as $ourexpert)
      <div>
          
        <p class="head2 expert-title">{{ $ourexpert->title }}</p>
        <p class="expert-name"><svg width="42" height="3" viewBox="0 0 42 3" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 1.94116L41 1.94116" stroke="#F16E24" stroke-width="2" stroke-linecap="round"/>
        </svg>
      
        <span>{{ $ourexpert->name }}</span>
        </p>
          <p>{!! $ourexpert->short_description !!}</p>
       
      </div>
    @endforeach
      <!-- Slide 2 -->
      <!--<div>-->
      <!--  <h2 class="head2">02</h2>-->
      <!--    <h3><svg width="42" height="3" viewBox="0 0 42 3" fill="none" xmlns="http://www.w3.org/2000/svg">-->
      <!--      <path d="M1 1.94116L41 1.94116" stroke="#F16E24" stroke-width="2" stroke-linecap="round"/>-->
      <!--      </svg>-->
      <!--      <span>Emission-free</span>-->
      <!--      </h3>-->
      <!--  <p class="animation-top">Solar energy generation is completely emission-free. Using on-grid and off-grid solar power systems reduces harmful gases and pollution. Trusted solar companies in India deliver advanced solar technological solutions that provide clean, reliable electricity. Choosing solar energy solutions helps homes and businesses reduce their carbon footprint while supporting sustainable green energy solutions.-->
      <!--  </p>-->
      <!--</div>-->

      <!-- Slide 3 -->
      <!--<div>-->
      <!--  <h2 class="head2">03</h2>-->
      <!-- <h3><svg width="42" height="3" viewBox="0 0 42 3" fill="none" xmlns="http://www.w3.org/2000/svg">-->
      <!--  <path d="M1 1.94116L41 1.94116" stroke="#F16E24" stroke-width="2" stroke-linecap="round"/>-->
      <!--  </svg>-->
      <!--  <span>Eco-friendly</span>-->
      <!--  </h3>-->
      <!--  <p class="animation-top"> Solar energy solutions are eco-friendly and safe for the environment. Residential on-grid solar systems and off-grid solar power systems reduce dependence on fossil fuels. As a top solar company in Maharashtra, we provide advanced solar technological solutions that make solar energy generation simple, reliable, and a part of green energy solutions for a cleaner future.</p>-->
      <!--</div>-->
      
      
    </div>
    
    </div>
  </div>
</section>

        

<section class="mt-100">
    <div class="container">
         <h3 class="style_head animation-top">From Sunlight to Power</h3>
         <h2 class="head2 animation-top">How Solar Energy Lights Homes and Businesses</h2>
         <ol>
          <li class="mb-2 animation-top"><b>Sunlight Absorption:</b> Solar panels absorb sunlight and turn it into Direct Current (DC) electricity. This is the first step in solar energy generation for homes and businesses.</li>
          <li class="mb-2 animation-top"><b>Conversion to Usable Power:</b> A solar inverter changes DC electricity into Alternating Current (AC), which is needed for residential on-grid solar systems, off-grid solar power systems, and everyday appliances.</li>
          <li class="mb-2 animation-top"><b>Powering Homes and Offices:</b> The AC electricity flows through your home or workplace, running lights, fans, and devices. Advanced solar technological solutions make this process reliable and efficient.</li>
          <li class="mb-2 animation-top"><b>Storing or Sharing Extra Power:</b> Extra electricity can be stored in batteries or sent to the grid. Trusted solar companies in India provide green energy solutions that maximize the benefits of solar energy.</li>
          
        </ol>
        
        <div class="mt-5 text-center">
            <img class="img-fluid animation-zoom-in" src="{{ asset('public/front/images/process-of-solar-energy-generation.svg') }}" alt="image">
        </div>
    </div>
    
</section>

<section class="mt-100">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6">
                <p class="animation-top">An on-grid solar system is a practical choice for urban areas connected to the power grid. Homes and businesses use the solar power they generate first, and any shortfall comes from the grid.</p>
                <p class="animation-top">This system is perfect for properties that cannot meet their full energy needs but still want to adopt renewable energy solutions. For larger properties, excess solar energy can be supplied back to the grid, creating passive income.</p>
                <p class="animation-top">On-grid solar systems are also cost-effective, as they require fewer components, especially for properties already linked to the grid. Trusted solar companies in India provide advanced solar technological solutions to make on-grid solar energy generation simple and reliable.
</p>
            </div>
            <div class="col-md-5">
                <h2 class="head2 animation-top">On Grid <br> Installation</h2>
            </div>
        </div>
    </div>
    
</section>

<section class="mt-100">
    <div class="row g-0 align-items-stretch">
        <div class="col-md-6 mb-4 mb-md-0">
            <div class="solar-grid-system h-100">
                <h3 class="style_head animation-top">Solar Grid System </h3>
                <h2 class="head2 animation-top">On Grid System</h2>
                <p class="animation-top">An on-grid solar system is connected to the nearest power grid, allowing electricity to flow to and from the grid as needed. When solar energy generation exceeds consumption, the extra electricity is fed into the grid. If solar power is insufficient, electricity is automatically drawn from the grid.
</p>
                <p class="animation-top">A two-way solar meter tracks electricity sent to and received from the grid. At the end of the billing cycle, users either get an energy credit or pay a small amount. This process, called net metering, makes residential on-grid solar systems a reliable and cost-effective green energy solution.</p>
            </div>
        </div>

        <div class="col-md-6 mb-4 mb-md-0">
            <div class="h-100">
                <img class="img-fluid h-100 w-100 solar-img" src="{{ asset('public/front/images/solar-grid-system.png') }}" alt="image">
            </div>
        </div>

        <div class="col-md-6 mb-4 mb-md-0">
            <div class="h-100">
                <img class="img-fluid h-100 w-100 solar-img" src="{{ asset('public/front/images/solar-grid-system.png') }}" alt="image">
            </div>
        </div>

        <div class="col-md-6">
            <div class="solar-grid-system h-100">
                <h3 class="style_head animation-top">Solar Grid System </h3>
                <h2 class="head2 animation-top">Off Grid System</h2>
                <p class="animation-top">An off-grid solar system works independently, without connection to the power grid. Battery backup stores excess electricity generated during the day, ensuring a steady supply during nights and cloudy days.</p>
                <p class="animation-top">For continuous power, a generator can serve as backup during high electricity needs or low solar generation periods, like winter or monsoon. Off-grid solar power systems, combined with advanced solar technological solutions, make it possible for homes, businesses, and remote areas to enjoy uninterrupted solar energy generation and reliable green energy solutions.
</p>
            </div>
        </div>
    </div>
</section>


<section class="mt-100">
    <div class="container">
        <div class="row justify-content-between align-items-center">
             <div class="col-md-5">
                <h2 class="head2 animation-top">Off Grid <br> Installation</h2>
            </div>
            <div class="col-md-6">
                <p class="animation-top">Off-grid solar systems are perfect for remote properties without access to the power grid. They are also ideal for areas with frequent power cuts, temporary setups, boats, and other standalone applications.</p>
                <p class="animation-top">For larger energy needs, captive off-grid installations serve as dedicated solar power plants. Corporate offices, industrial units, and big housing societies set up these systems to generate large-scale electricity locally. Off-grid solar power systems, combined with advanced solar technological solutions, provide reliable renewable energy generation, ensuring uninterrupted green energy solutions for homes, businesses, and communities far from the grid.
</p>
                
            </div>
        </div>
    </div>
    
</section>

<section class="mt-100">
    <div class="container">
         <h3 class="style_head animation-top">Hybrid Solar Power</h3>
         <h2 class="head2 animation-top">Best of On-Grid and Off-Grid Systems</h2>
        <p class="animation-top">A hybrid solar system connects to both the power grid and a battery backup, combining the best of on-grid and off-grid solar solutions. Excess solar energy is first stored in the battery, while any remaining power is sent to the grid.</p>
        <p class="animation-top">This allows users to earn energy credits through net metering or draw electricity from the grid when needed. During power cuts, the system automatically switches to the battery backup, ensuring uninterrupted electricity. Hybrid solar installations offer residential on-grid solar systems, off-grid solar power systems, and advanced solar technological solutions that provide reliable solar energy generation and sustainable green energy solutions all year round.</p>
        
        <div class="text-center">
            <img class="img-fluid animation-zoom-in" src="{{ asset('public/front/images/Solar-Power-Generation.svg') }}" alt="image">
        </div>
    </div>
    
</section>

<section class="mt-100 installation">
    <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-3">
                   <p class="head2 animation-top">Install!!!</p>
              </div>
              <div class="col-md-6">
                  <p class="animation-top">Hybrid solar systems are ideal for areas connected to the power grid but facing frequent power cuts.</p>
                  <p class="animation-top mb-0">Starting your solar journey can feel challenging, but taking the first step makes all the difference. Let Contendre Solar, a trusted solar company in India and a top solar company in Maharashtra, guide you. You can now enjoy uninterrupted electricity while contributing to a cleaner, sustainable future with our advanced solar technological solutions, you can achieve reliable residential on-grid solar systems, off-grid solar power systems, and green energy solutions.</p>
              </div>
          </div>
    </div>
    
</section>

@include('layouts.frontfooter')