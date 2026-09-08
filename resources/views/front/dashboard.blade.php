@include('layouts.frontheader')

<section class="hero">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <div class="hero_lt">
                    <h3 class="animation-top">Premium Rooftop Panels</h3>
                    <h1 class="hero_head animation-top">To Power Your Homes and Businesses</h1>
                    <p class="hero_para animation-bottom">From flexible solar modules to powerful rooftop systems, 
                    we deliver the best solar panels in India that help homes and businesses switch to smarter, cleaner,
                    and sustainable energy.</p>
                    <div class="hero_play animation-bottom">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><img
                                src="{{ asset('public/front/images/play-btn.svg') }}" alt="play"></a>
                        <span>WATCH VIDEO</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="hero_rt col-lg-9 animation-zoom-in">
                    <div class="hero_rt_tp">
                        <p class="hero-h4">P-TYPE PERC</p>
                        <span class="d-none d-lg-inline"><img src="{{ asset('public/front/images/hero_line_rt.png') }}" alt="linw-image"></span>
                    </div>
                    <p class="hero-p">Half-Cut PERC Cell | Bifacial Glass to Glass & Transparent Backsheet | Monofacial Glass to White
                        Backsheet</p>
                </div>
            </div>
        </div>
    <!-- </div> -->
</section>
<!-- clients -->
<section>
    <div class="container animation-bottom">
        <div class="clients">
            <h3>Best Rooftop Solar Panels Trusted by Leading Brands</h3>
            <div class="clients_slider">
                @foreach($branddata as $brand) 
                    <div class="clients_slide">
                        <img class="img-fluid" src="{{ asset('public/brand_image/' .$brand->image) }}" alt="{{  str_replace(['-', '_'],' ', pathinfo($brand->image, PATHINFO_FILENAME)) }}" loading="lazy">
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</section>


<!-- about -->
<section class="about">
    <div class="container">
        <div class="row justify-content-center mb-xll-5 mb-4 mb-lg-auto">
            <div class="col-lg-7 col-xxl-8">
                <h2 class="about_head animation-top">Solar Company in  <span>Maharashtra shaping</span>, a brighter tomorrow.</h2>
            </div>
        </div>
        <div class="row align-items-center gx-lg-5">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div>
                    <p class="style_head animation-top">India’s Most Loved,</p>
                    <h2 class="head2 animation-top">Solar Panel Manufacturer and Supplier</h2>
                    <p class="animation-bottom">As a leading Solar Panel Manufacturing Company and trusted Solar Company in Maharashtra,
                    we specialize in delivering premium solar modules, rooftop solar panels, and flexible solar panels for homes,
                    businesses, and industries. </p>
                    <p class="animation-bottom">We have a strong presence among top Solar Panel Manufacturers in India and provide
                    complete solar panel systems designed for efficiency, durability, and sustainability. We thrive to make clean 
                    energy accessible, offering the best solar panels backed by advanced technology and world-class manufacturing
                    standards.</p>
                    <div class="mt-lg-4 mt-xxl-5">
                        <a class="coman_btn animation-bottom" href="{{ route('overview') }}"> Know Us Better <img src="{{ asset('public/front/images/arrow.svg') }}" loading="lazy"
                                alt="arrow"></a>
                    </div>
                </div>

            </div>
            <div class="col-lg-6">
                <img class=" img-fluid animation-zoom-in" src="{{ asset('public/front/images/about-img.png') }}" alt="image" loading="lazy">
            </div>
        </div>
    </div>
</section>


<!-- precision -->
<section class="Precision">
    <div class="container">
        <div class="row gx-lg-5 align-items-center">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <img class=" img-fluid animation-zoom-in" src="{{ asset('public/front/images/Precision.png') }}" alt="image" loading="lazy">
            </div>
            <div class="col-lg-7">
                <div class="animation-top">
                    <h3 class="style_head">Solar Panel Manufacturing Company</h3>
                    <h2 class="head2">Driven by Precision Technology</h2>
                    <p class="col-xxl-10">We combine advanced technology with precision to craft solar panel systems, 
                    modules, and rooftop panels built for long-lasting performance and reliability.</p>
                    <div class="mt-lg-4 mt-xxl-5">
                        <a class="coman_btn" href="{{ route('solar.panel.manufacturer') }}">Our Excellence <img src="{{ asset('public/front/images/arrow.svg') }}" loading="lazy"
                                alt="arrow"></a>
                    </div>
                </div>

                <div class="mt-xxl-5 mt-4">
                    <div class="row justify-content-between align-items-end">
                        <div class="col-lg-6">
                            <div class="precision_icon animation-bottom">
                                <span>
                                    <img src="{{ asset('public/front/images/precision_icon1.png') }}" loading="lazy" alt="image">
                                </span>
                                <p>Made In India</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="precision_icon animation-bottom">
                                <span>
                                    <img src="{{ asset('public/front/images/precision_icon4.png') }}" loading="lazy" alt="image">
                                </span>
                                <p>State-of-the-art Infrastructure</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="precision_icon animation-bottom">
                                <span>
                                    <img src="{{ asset('public/front/images/precision_icon2.png') }}" loading="lazy" alt="image">
                                </span>
                                <p>Tech Innovation</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="precision_icon animation-bottom">
                                <span>
                                    <img src="{{ asset('public/front/images/precision_icon5.png') }}" loading="lazy" alt="image">
                                </span>
                                <p>A-grade Solar Panel Manufacturer</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="precision_icon animation-bottom">
                                <span>
                                    <img src="{{ asset('public/front/images/precision_icon3.png') }}" loading="lazy" alt="image">
                                </span>
                                <p>Strict Quality Standards</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="precision_icon animation-bottom">
                                <span>
                                    <img src="{{ asset('public/front/images/precision_icon6.png') }}" loading="lazy" alt="image">
                                </span>
                                <p>Refined Supply Chain </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="series">
            <div class="row justify-content-center">
                <div class=" col-lg-11">
                    <div class="series_top">
                        <p class="style_head animation-top">Our Advanced</p>
                        <h3 class="head2 animation-top"> Solar Modules</h3>
                        <p class="animation-bottom">At Contendre Solar, one of the top Solar Panel Manufacturers in India,
                        we deliver the best solar panels with PERC and TOPCon technology. From rooftop solar panels to 
                        flexible solar modules, our solar panel systems power homes, businesses, and industries, whatever
                        your space is!</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
               @foreach($products as $product)
                    <div class="col-lg-5 col-xxl-6">
                        <div class="series_bot">
                            <div>
                                <img class="img-fluid animation-zoom-in" src="{{ asset('public/productcategory/'.$product->image) }}" loading="lazy" alt="{{  str_replace(['-', '_'],' ', pathinfo($product->image, PATHINFO_FILENAME)) }}">
                            </div>
                            <div class="ser_bot animation-bottom mt-0">
                                <a href="{{ route('n.type', $product->url) }}"><h4>{{ $product->title }}</h4></a>
                                {!! $product->short_description !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
</section>


<!-- Sustainable -->
<section class="Sustainable mt-100">
    <div class="container">

        <div class="Sustainable_top">
            <h3 class="style_head animation-top">Solar Panels</h3>
            <h2 class="head2 animation-top">Powering a Cleaner, Brighter Future</h2>
            <p class="animation-bottom">With rising concerns over climate change and energy costs, 
            solar panels are becoming the smart choice for homes and businesses. As a trusted solar panel manufacturer 
            in India and Solar Company in Maharashtra, we provide efficient, reliable, and adaptable rooftop solar panels, 
            flexible solar panels, and solar modules. Our solar panel systems make clean & sustainable energy accessible for everyone.
</p>
        </div>

        <div class="mt-5 animation-bottom" id="counterSection">
            <div class="row">
                <div class="col-lg-3 mb-4 mb-lg-0">
                    <div class="Sustainable_bot border-0">
                        <p class="head2"><span data-target="1">0</span> GW+</p>
                        <p>Manufacturing Capacity</p>
                    </div>
                </div>
                <div class="col-lg-3 mb-4 mb-lg-0">
                    <div class="Sustainable_bot">
                        <p class="head2"><span data-target="20">0</span>+</p>
                        <p>Countries Served</p>
                    </div>
                </div>
                <div class="col-lg-3 mb-4 mb-lg-0">
                    <div class="Sustainable_bot">
                        <p class="head2"><span data-target="50">0</span>+ MW</p>
                        <p>Deployed Projects</p>
                    </div>
                </div>
                <div class="col-lg-3 mb-4 mb-lg-0">
                    <div class="Sustainable_bot">
                        <p class="head2"><span data-target="1000">0</span>+</p>
                        <p>Happy Clients</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- Why Solar -->
<section class="why_solar">
    <div class="container">
        <div class="row gx-lg-5">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img class=" img-fluid animation-zoom-in" src="{{ asset('public/front/images/why_solar.png') }}" loading="lazy" alt="image">
            </div>

            <div class="col-lg-6">
                <div class="mb-5">
                    <p class="style_head animation-top">The Switch To</p>
                    <h2 class="head2 animation-top">Rooftop Solar</h2>
                    <p class="animation-bottom">Since 1984, Contendre Group has grown its Textiles and Infrastructure businesses, building a strong legacy and delivering excellence across all its group companies. Here's Why Everyone's Choosing Solar</p>
                </div>
                <div class="col-lg-9 col-xxl-7 animation-bottom">
                    <div class="row g-3 g-xxl-4">
                        <div class="col-6 col-md-4 col-lg-4">
                            <div class="text-center">
                                <!--<span><img class=" img-fluid" src="{{ asset('public/front/images/Renewable.png') }}" loading="lazy" alt="Renewable"></span>-->
                                <!--<p class="mt-3">Renewable</p>-->
                                <span><img class=" img-fluid" src="{{ asset('public/front/images/lower_electricity_bills.png') }}" loading="lazy" alt="Lower Electricity Bills"></span>
                                <p class="mt-3">Lower Electricity Bills</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-4">
                            <div class="text-center">
                                <!--<span><img src="{{ asset('public/front/images/Emission-Free.png') }}" loading="lazy" alt="Emission-Free"></span>-->
                                <!--<p class="mt-3">Emission Free</p>-->
                                <span><img src="{{ asset('public/front/images/energy_independence.png') }}" loading="lazy" alt="Energy Independence"></span>
                                <p class="mt-3">Energy Independence</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-4">
                            <div class="text-center">
                                <!--<span><img src="{{ asset('public/front/images/Environmentally-Friendly.png') }}" loading="lazy"-->
                                <!--        alt="Environmentally-Friendly"></span>-->
                                <!--<p class="mt-3">Eco-Friendly</p>-->
                                <span><img src="{{ asset('public/front/images/government_subsidies.png') }}" loading="lazy"
                                        alt="Government Subsidies"></span>
                                <p class="mt-3">Government Subsidies</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-4">
                            <div class="text-center">
                                <!--<span><img src="{{ asset('public/front/images/Eco-Friendly.png') }}" loading="lazy"alt="Eco-Friendly"></span>-->
                                <!--<p class="mt-3">Environmentally Friendly</p>-->
                                <span><img src="{{ asset('public/front/images/long_term_savings.png') }}" loading="lazy"alt="Long-Term Savings"></span>
                                <p class="mt-3">Long-Term Savings</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-4">
                            <div class="text-center">
                                <!--<span><img src="{{ asset('public/front/images/Government-Benefits.png') }}" loading="lazy" alt="Government-Benefits"></span>-->
                                <!--<p class="mt-3">Government Benefits</p>-->
                                <span><img src="{{ asset('public/front/images/cleaner_energy.png') }}" loading="lazy" alt="Cleaner Energy"></span>
                                <p class="mt-3">Cleaner Energy</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-4">
                            <div class="text-center">
                                <!--<span><img src="{{ asset('public/front/images/Reduce-Electric.png') }}" loading="lazy" alt="Reduce-Electric"></span>-->
                                <!--<p class="mt-3">Reduce Electric Bills</p>-->
                                <span><img src="{{ asset('public/front/images/reliable_power_generation.png') }}" loading="lazy" alt="Reliable Power Generation"></span>
                                <p class="mt-3">Reliable Power Generation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<!-- Featured Solutions -->
<section class="Featured">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="Featured_top">
                    <h3 class="style_head animation-top">Advanced</h3>
                    <h2 class="head2 animation-top">Solar Panel Systems For Every Need</h2>
                    <p class="animation-bottom">Homes, businesses or large infrastructure! Contendre Solar delivers 
                    reliable solar panel systems, rooftop solar panels, flexible solar panels, and solar modules designed 
                    by a trusted solar panel manufacturer in India.</p>
                </div>
            </div>
        </div>

       <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="Featu_tabs animation-bottom">
                    <ul class="Featu_tabs_ul" id="myTab" role="tablist">
                        <li role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">Home Solar</button>
                        </li>
                        <li role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                type="button" role="tab" aria-controls="profile" aria-selected="false">Commercial
                                Solar</button>
                        </li>
                        <li role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">Utility
                                Solar</button>
                        </li>
                        <li role="presentation">
                            <button class="nav-link" id="BIPV-tab" data-bs-toggle="tab" data-bs-target="#BIPV"
                                type="button" role="tab" aria-controls="BIPV" aria-selected="false">BIPV
                                Solar</button>
                        </li>
                    </ul>

                    <div class="tab-content mt-4 Featu_tabs_head" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3>Home Solar</h3>
                            <p class="Featu_tabs_para">Upgrade your home with premium rooftop solar panels today.</p>
                            <p>Electricity bills are rising, and pollution affects everyone. Installing rooftop solar 
                            panels or flexible solar panels at home is an easy way to save money. With trusted solar modules
                            and solar panel systems from a leading solar panel manufacturer in India, you can use the sun’s 
                            energy to create clean, reliable power for all your energy needs.</p>
                            <div class="mt-4">
                                <a class="coman_btn" href="{{ url('/solar-panel-for-home') }}">View More <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow"></a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h3>Commercial Solar</h3>
                            <p class="Featu_tabs_para">Flexible solar panels crafted for modern commercial energy solutions.</p>
                            <p>Businesses can save costs and embrace sustainability with rooftop solar panels and flexible 
                            solar panels from a trusted solar panel manufacturer in India. Our advanced solar panel systems
                            and solar modules provide reliable, clean energy tailored for commercial buildings, factories, 
                            and offices, helping companies reduce expenses while supporting a greener future.</p>
                            <div class="mt-4">
                                <a class="coman_btn" href="{{ url('/commercial-and-industrial-solar') }}">View More <img src="{{ asset('public/front/images/arrow.svg') }}" loading="lazy" alt="arrow"></a>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <h3> Utility Solar</h3>
                            <p class="Featu_tabs_para"> Transforming utility energy with advanced solar panel systems nationwide.</p>
                            <p>Utility-scale solar energy is simpler with Contendre Solar. As a trusted solar power energy company
                            and top Solar Company in Maharashtra, we deliver high-efficiency solar modules, advanced solar panel 
                            systems, and best solar panels that provide sustainable, reliable, and environmentally-friendly energy
                            for communities and large infrastructure projects.</p>
                            <div class="mt-4">
                                <a class="coman_btn" href="{{ url('/utility-scale') }}">View More <img src="{{ asset('public/front/images/arrow.svg') }}" loading="lazy" alt="arrow"></a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="BIPV" role="tabpanel" aria-labelledby="BIPV-tab">
                            <h3>BIPV Solar</h3>
                            <p class="Featu_tabs_para">BIPV solar transforms walls and rooftops into solar energy sources.</p>
                            <p>BIPV solar solutions integrate solar modules and rooftop solar panels directly
                            into buildings, providing clean, reliable energy without compromising design. As a trusted solar panel
                            manufacturer in India and Solar Company in Maharashtra, we deliver advanced solar panel systems that make
                            sustainable energy seamless, efficient, and visually appealing for modern structures.</p>
                            <div class="mt-4">
                                <a class="coman_btn" href="{{ url('/bipv-solution') }}">View More <img src="{{ asset('public/front/images/arrow.svg') }}" loading="lazy" alt="arrow"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- innovations -->
<section class="innovations">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="innovations_top">
                    <h3 class="style_head animation-top">Your Guide to </h3>
                    <h2 class="head2 animation-top">Solar Panels and Systems</h2>
                </div>
            </div>
        </div>
 
        <div class="row gx-lg-5">
            @if(isset($blogs[0]))
            <div class="col-lg-9">
                <div class="row inno_lt_bor">
                    <div class="col-lg-7 ps-lg-0 mb-4 mb-lg-0">
                        <img class="img-fluid animation-zoom-in" src="{{ asset('public/blogs/blog_front_image/' . $blogs[0]->front_image ?? '') }}" loading="lazy" alt="{{  str_replace(['-', '_'],' ', pathinfo($blogs[0]->front_image, PATHINFO_FILENAME)) }}">
                    </div>
                    <div class="col-lg-5">
                        <div class="innovations_lt">
                            <i class="animation-top">{{ \Carbon\Carbon::parse($blogs[0]->date)->format('F jS, Y') }}</i>
                            <h3 class="animation-top">{!! $blogs[0]->title !!}</h3>
                            <div class="animation-bottom">{!! $blogs[0]->short_description !!}.</div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <div class="col-lg-3">
                <div class="innovations_rt">
                @foreach ($blogs as $blog)
                    <div class="inno_rt_child">
                        <div>
                            <i>{{ \Carbon\Carbon::parse($blog->date)->format('F jS, Y') }}</i>
                            <h3>{{ $blog->title }}</h3>
                        </div>
                        <div>
                            <a href="{{ $blog->url ? route('front.blog.details', ['url' => $blog->url]) : '#' }}"><img src="{{ asset('public/front/images/arrow_ch.svg') }}" loading="lazy" alt="arrow"></a>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>

        <div class="mt-4 mt-xxl-5 text-center">
            <a class="coman_btn" href="{{ route('front.blog') }}">View More <img src="{{ asset('public/front/images/arrow.svg') }}" loading="lazy" alt="arrow"></a>
        </div>
    </div>
</section>


<!-- instagram -->
<!--<div class="instagram">-->
<!--    <div class="container">-->
<!--        <div class="insta_top ">-->
<!--            <span> <img class=" img-fluid animation-top instagram_log" src="{{ asset('public/front/images/instagram-logo.png') }}" loading="lazy"-->
<!--                    alt="instagram-logo"></span>-->
<!--            <h4 class="head2 animation-top my-0">Join Our Solar Revolution</h4>-->
            
            
<!--        </div>-->
        
        
<!--        <div class="instagram-feed row" style="align-items: center;">-->
<!--            @forelse (array_slice($feed, 0, 4) as $post)-->
<!--                <div class="instagram-post col-md-3 mb-4 mb-md-0" style="">-->
<!--                    @if ($post['media_type'] === 'IMAGE' || $post['media_type'] === 'CAROUSEL_ALBUM')-->
<!--                        <img src="{{ $post['media_url'] }}" alt="Instagram Image" class="img-fluid">-->
<!--                    @elseif ($post['media_type'] === 'VIDEO')-->
<!--                        <video controls width="100%"   >-->
<!--                            <source src="{{ $post['media_url'] }}" type="video/mp4">-->
<!--                            Your browser does not support the video tag.-->
<!--                        </video>-->
<!--                    @endif-->

                   
<!--                </div>-->
<!--            @empty-->
<!--                <p>No Instagram posts found.</p>-->
<!--            @endforelse-->
<!--        </div>-->

       
<!--    </div>-->
<!--</div>-->


@include('layouts.frontfooter')
