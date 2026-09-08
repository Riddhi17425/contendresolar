@include('layouts.frontheader')

<link rel="stylesheet" href="{{ asset('public/front/css/channel-sales.css') }}">
<link rel="stylesheet" href="{{ asset('public/front/css/channel-sales-responsive.css') }}">

<div class="channel_sales_wrapper">
    <!-- 1. Hero Section (Figma Exact Channel Sales Hero 75:10) -->
    <section class="cs_hero_section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <p class="cs_hero_subtitle animation-top">Build Your Solar Business. Grow With Contendre.</p>
                    <h1 class="cs_hero_title animation-top">Solar Dealership & Distributor Opportunities in India</h1>
                    
                    <p class="cs_hero_para animation-bottom">
                        India is a fast-growing market for solar power. And as the adoption of clean energy rises amongst consumers, commercial buildings, industries, and organizations across the nation, so does the market space available for businesses operating within this segment.
                    </p>
                    <p class="cs_hero_para animation-bottom">
                        Contendre Solar combines leading-edge solar technology, state-of-the-art, high-efficiency modules, full manufacturing power, and best-in-class, partner-centric support infrastructure to enable your business to take advantage of this market opportunity.
                    </p>
                    <p class="cs_hero_para animation-bottom">
                        Whether you are an existing solar panel dealer, an electrical business, EPC company, installer, distributor, or entrepreneur looking to enter the solar industry, Contendre Solar offers solar dealership and distribution opportunities designed around market growth.
                    </p>
                    
                    <div class="cs_hero_quote_text animation-bottom">
                        ‘Your market. Your network. A stronger solar opportunity with Contendre.’
                    </div>
                    
                    <div>
                        <a class="cs_hero_btn animation-bottom" data-bs-toggle="modal" data-bs-target="#applymodal">
                            Become a Channel Partner <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Intro Statement Section (Figma Exact Node 75:66 Text) -->
    <section class="mt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="head2 cs_intro_head_title animation-top text-center">Become a Trusted <span>Solar Dealer and <br/> Distributor</span> with <span>Contendre Solar.</span></h2>
                    <p class="animation-bottom text-center mx-auto mt-4 cs_body_18">
                        Building a solar business takes more than having the right products on your shelf. You need a manufacturer who understands what it takes to enter a market, build customer confidence, create demand, and support the business after the sale. That is where Contendre Solar comes in. We bring together <b>high-efficiency solar technology, product expertise, sales enablement, marketing support, and technical assistance</b> to help dealers and distributors build a stronger presence in India's growing renewable energy market. Whether you want to <b>become a solar dealer</b>, expand your existing distribution business, or explore <b>solar panel dealership opportunities in India</b>, Contendre Solar gives you the product, knowledge, and support to take that opportunity further.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Client Logos Bar (Figma Frame 2783) -->
    <section class="mt-100">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="head2 animation-top text-center">Delivering Reliable Solar Solutions Across Industries</h2>
            </div>
            <div class="clients_slider">
                <div class="clients_slide">
                    <div class="cs_client_box">
                        <img src="{{ asset('public/front/images/channel_sales/bel_logo_1_1_360.webp') }}" alt="BEL" class="img-fluid">
                    </div>
                </div>
                <div class="clients_slide">
                    <div class="cs_client_box">
                        <img src="{{ asset('public/front/images/channel_sales/Indian_Oil_Corporation-Logo_wine_1728907032_1_1_362.webp') }}" alt="Indian Oil" class="img-fluid">
                    </div>
                </div>
                <div class="clients_slide">
                    <div class="cs_client_box">
                        <img src="{{ asset('public/front/images/channel_sales/State_Bank_of_India_svg_1_1_364.webp') }}" alt="State Bank of India" class="img-fluid">
                    </div>
                </div>
                <div class="clients_slide">
                    <div class="cs_client_box">
                        <img src="{{ asset('public/front/images/channel_sales/Steel_Authority_of_India_logo_svg_1_1_366.webp') }}" alt="SAIL" class="img-fluid">
                    </div>
                </div>
                <div class="clients_slide">
                    <div class="cs_client_box">
                        <img src="{{ asset('public/front/images/channel_sales/BSF_Logo_1_1_368.webp') }}" alt="BSF" class="img-fluid">
                    </div>
                </div>
                <div class="clients_slide">
                    <div class="cs_client_box">
                        <img src="{{ asset('public/front/images/channel_sales/powergrid-logo-png_1_1_370.webp') }}" alt="PowerGrid" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Why Contendre Solar 8-Cards (Figma Frame 2786) -->
    <section class="mt-100">
        <div class="container">
            <div class="cs_section_header animation-top text-center">
                <h2 class="head2">Why Contendre Solar?</h2>
            </div>

            <div class="why_contendre_slider animation-bottom">
                <!-- 1 -->
                <div class="px-2">
                    <div class="cs_why_card_item h-100">
                        <div class="cs_card_icon_wrap">
                            <img src="{{ asset('public/front/images/channel_sales/Capa_1_1_1013.webp') }}" alt="Solar Modules">
                        </div>
                        <div>
                            <h3 class="cs_h3">High-Performance Solar Modules</h3>
                            <p class="cs_body_18">Offer customers advanced solar modules designed for efficient, dependable, and long-term energy generation.</p>
                        </div>
                    </div>
                </div>
                <!-- 2 -->
                <div class="px-2">
                    <div class="cs_why_card_item h-100">
                        <div class="cs_card_icon_wrap">
                            <img src="{{ asset('public/front/images/channel_sales/Capa_1_1_1048.webp') }}" alt="Solar Tech">
                        </div>
                        <div>
                            <h3 class="cs_h3">Advanced Solar Technologies</h3>
                            <p class="cs_body_18">Stay competitive with access to evolving solar technologies designed around today's performance and efficiency requirements.</p>
                        </div>
                    </div>
                </div>
                <!-- 3 -->
                <div class="px-2">
                    <div class="cs_why_card_item h-100">
                        <div class="cs_card_icon_wrap">
                            <img src="{{ asset('public/front/images/channel_sales/Icon_1_1075.webp') }}" alt="Product Training">
                        </div>
                        <div>
                            <h3 class="cs_h3">Product & Sales Training</h3>
                            <p class="cs_body_18">Build stronger product understanding and equip your team to communicate the right solar solution with confidence.</p>
                        </div>
                    </div>
                </div>
                <!-- 4 -->
                <div class="px-2">
                    <div class="cs_why_card_item h-100">
                        <div class="cs_card_icon_wrap">
                            <img src="{{ asset('public/front/images/channel_sales/Capa_1_1_1013.webp') }}" alt="Technical Assistance">
                        </div>
                        <div>
                            <h3 class="cs_h3">Sales & Technical Assistance</h3>
                            <p class="cs_body_18">Get the support you need across customer discussions, product queries, project requirements, and technical considerations.</p>
                        </div>
                    </div>
                </div>
                <!-- 5 -->
                <div class="px-2">
                    <div class="cs_why_card_item h-100">
                        <div class="cs_card_icon_wrap">
                            <img src="{{ asset('public/front/images/channel_sales/Capa_1_1_1048.webp') }}" alt="Marketing Support">
                        </div>
                        <div>
                            <h3 class="cs_h3">Marketing & Digital Support</h3>
                            <p class="cs_body_18">Strengthen your local presence with marketing resources and digital creatives that help you take the Contendre brand to your market.</p>
                        </div>
                    </div>
                </div>
                <!-- 6 -->
                <div class="px-2">
                    <div class="cs_why_card_item h-100">
                        <div class="cs_card_icon_wrap">
                            <img src="{{ asset('public/front/images/channel_sales/Icon_1_1075.webp') }}" alt="Reliable Supply">
                        </div>
                        <div>
                            <h3 class="cs_h3">Reliable Product Supply</h3>
                            <p class="cs_body_18">Build customer confidence with access to a dependable product portfolio and supply support for your growing business.</p>
                        </div>
                    </div>
                </div>
                <!-- 7 -->
                <div class="px-2">
                    <div class="cs_why_card_item h-100">
                        <div class="cs_card_icon_wrap">
                            <img src="{{ asset('public/front/images/channel_sales/Capa_1_1_1013.webp') }}" alt="Market Development">
                        </div>
                        <div>
                            <h3 class="cs_h3">Regional Market Development</h3>
                            <p class="cs_body_18">Identify and pursue opportunities in your market with a partnership approach focused on sustainable business growth.</p>
                        </div>
                    </div>
                </div>
                <!-- 8 -->
                <div class="px-2">
                    <div class="cs_why_card_item h-100">
                        <div class="cs_card_icon_wrap">
                            <img src="{{ asset('public/front/images/channel_sales/Capa_1_1_1048.webp') }}" alt="Network Building">
                        </div>
                        <div>
                            <h3 class="cs_h3">Network-Building Opportunities</h3>
                            <p class="cs_body_18">Eligible distributors can expand their reach by developing a sub-dealer network and creating additional avenues for business growth.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Who Can Become Partner 4-Cards (Figma Frame 2787) -->
    <section class="mt-100">
        <div class="container">
            <div class="cs_section_header animation-top text-center">
                <h2 class="head2">Who Can Become a Contendre Solar Channel Partner?</h2>
                <p class="cs_desc mt-3">
                    You don’t have to be an existing solar dealer to explore a channel partnership. If you have a strong local market presence, customer network, sales capability, or relevant business experience, you can explore an opportunity with Contendre Solar.
                </p>
            </div>

            <div class="row g-4 cs_who_row">
                <div class="col-lg-3 col-md-6">
                    <div class="cs_who_card" style="background-image: url('{{ asset('public/front/images/channel_sales/1_1_616.webp') }}');">
                        <div class="cs_who_content">
                            <h3 class="cs_who_title">Electrical & Solar Businesses</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="cs_who_card" style="background-image: url('{{ asset('public/front/images/channel_sales/1_1_620.webp') }}');">
                        <div class="cs_who_content">
                            <h3 class="cs_who_title">EPC Companies & Installers</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="cs_who_card cs_who_card_solid">
                        <h3 class="cs_who_title">Existing Dealers & Distributors</h3>
                        <p class="cs_who_desc mt-2">
                            Expand into a rapidly growing category and add solar to your existing electrical, industrial, energy, or construction product portfolio.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="cs_who_card" style="background-image: url('{{ asset('public/front/images/channel_sales/1_1_628.webp') }}');">
                        <div class="cs_who_content">
                            <h3 class="cs_who_title">Entrepreneurs & Business Owners</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Partnership Models 01, 02, 03 (Figma Frame 2803) -->
    <section class="mt-100">
        <div class="container">
            <div class="cs_section_header animation-top text-center">
                <h2 class="head2">Choose the right Contendre Solar Partnership Model</h2>
                <p class="cs_desc mt-3">
                    Contendre Solar's channel opportunities are built around <b>solar dealership</b> and distribution. The right model depends on the scale of your business, market reach, and growth objectives.
                </p>
            </div>

            <div class="row g-4">
                <!-- 01 -->
                <div class="col-lg-4 col-md-6">
                    <div class="cs_model_box">
                        <div class="d-flex align-items-center mb-3">
                            <span class="cs_model_num">01</span>
                            <h3 class="cs_model_name">Solar Dealership</h3>
                        </div>
                        <p class="cs_body_18 cs_model_desc">
                            This model for a <b>solar dealer</b> can work well for electrical businesses, installers, existing dealers, and entrepreneurs who want to add solar to their portfolio or build a dedicated solar business.
                        </p>
                    </div>
                </div>
                <!-- 02 -->
                <div class="col-lg-4 col-md-6">
                    <div class="cs_model_box">
                        <div class="d-flex align-items-center mb-3">
                            <span class="cs_model_num">02</span>
                            <h3 class="cs_model_name">Solar Distributor</h3>
                        </div>
                        <p class="cs_body_18 cs_model_desc">
                            For a <b>solar distributor</b>, this model can provide added earning potential on product sales via direct sales, on network commission sales, dealer recruiting incentives, and performance-based commissions under the applicable program.
                        </p>
                    </div>
                </div>
                <!-- 03 -->
                <div class="col-lg-4 col-md-6">
                    <div class="cs_model_box">
                        <div class="d-flex align-items-center mb-3">
                            <span class="cs_model_num">03</span>
                            <h3 class="cs_model_name">Solar Panel Wholesale Dealer</h3>
                        </div>
                        <p class="cs_body_18 cs_model_desc">
                            Businesses looking to operate as a <b>solar panel wholesale dealer</b> can explore opportunities based on their market presence, customer network, infrastructure, and business capabilities.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Benefits of Becoming a Solar Dealer or Distributor 6-Cards (Figma Frame 2783 / 659) -->
    <section class="mt-100">
        <div class="container">
            <div class="cs_section_header animation-top text-center">
                <h2 class="head2">Benefits of Becoming a Solar Dealer or Distributor</h2>
                <p class="cs_desc">
                    Choosing the right manufacturer to guide you into a new market, serve customers efficiently, and grow efficiently can be a critical decision in how successful you will be. Contender Solar backs its channel partners with modules and more.
                </p>
            </div>

            <div class="row g-4">
                <!-- 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="cs_why_card_item h-100">
                        <div class="cs_card_icon_wrap">
                            <img src="{{ asset('public/front/images/channel_sales/Group_1_677.webp') }}" alt="Portfolio">
                        </div>
                        <div>
                            <h3 class="cs_h3">A Product Portfolio Built for the Market</h3>
                            <p class="cs_body_18">Offer solar modules incorporating advanced technologies and designed for dependable long-term performance.</p>
                        </div>
                    </div>
                </div>
                <!-- 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="cs_why_card_item h-100">
                        <div class="cs_card_icon_wrap">
                            <img src="{{ asset('public/front/images/channel_sales/Capa_1_1_676.webp') }}" alt="Training">
                        </div>
                        <div>
                            <h3 class="cs_h3">Product & Sales Training</h3>
                            <p class="cs_body_18">Build stronger product understanding and sales capabilities through structured training and enablement support.</p>
                        </div>
                    </div>
                </div>
                <!-- 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="cs_why_card_item h-100">
                        <div class="cs_card_icon_wrap">
                            <img src="{{ asset('public/front/images/channel_sales/Icon_1_1075.webp') }}" alt="Marketing Support">
                        </div>
                        <div>
                            <h3 class="cs_h3">Marketing Support</h3>
                            <p class="cs_body_18">Eligible distributor partners can receive marketing support equivalent to 1% of total purchase value, structured as a co-investment pool for regional business development.</p>
                        </div>
                    </div>
                </div>
                <!-- 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="cs_why_card_item h-100">
                        <div class="cs_card_icon_wrap">
                            <img src="{{ asset('public/front/images/channel_sales/Capa_1_1_1048.webp') }}" alt="Digital Resources">
                        </div>
                        <div>
                            <h3 class="cs_h3">Digital Marketing Resources</h3>
                            <p class="cs_body_18">Access ready-to-use digital and social media creatives to support local marketing and brand-building activities.</p>
                        </div>
                    </div>
                </div>
                <!-- 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="cs_why_card_item h-100">
                        <div class="cs_card_icon_wrap">
                            <img src="{{ asset('public/front/images/channel_sales/Group_1_1076.webp') }}" alt="Tech Support">
                        </div>
                        <div>
                            <h3 class="cs_h3">Sales & Technical Support</h3>
                            <p class="cs_body_18">Get sales and technical assistance for pre-sales requirements, product queries, and post-installation support.</p>
                        </div>
                    </div>
                </div>
                <!-- 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="cs_why_card_item h-100">
                        <div class="cs_card_icon_wrap">
                            <img src="{{ asset('public/front/images/channel_sales/Capa_1_1_1013.webp') }}" alt="Build Beyond">
                        </div>
                        <div>
                            <h3 class="cs_h3">Build Beyond Your Own Sales</h3>
                            <p class="cs_body_18">Eligible distributors can develop their own sub-dealer network and participate in revenue generated through that network under the applicable program.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. How to Become a Contendre Solar Channel Partner (Figma Frame 2781) -->
    <section class="cs_steps_section mt-100">
        <div class="container">
            <div class="cs_section_header animation-top text-center" style="margin-bottom: 30px;">
                <h2 class="head2">How to Become a Contendre Solar Channel Partner?</h2>
                <p class="cs_desc mt-3 mx-auto text-center">
                    Becoming a <b>solar channel partner</b> starts with understanding your business, market, and growth potential. The Contendre Solar team works with prospective partners to identify the appropriate opportunity based on their business profile.
                </p>
            </div>

            <div class="cs_step_container">
                <!-- Stepper Navigation -->
                <div class="cs_step_tabs">
                    <button class="cs_step_btn active" onclick="showCsStep(1)">01</button>
                    <div class="cs_step_line"></div>
                    <button class="cs_step_btn" onclick="showCsStep(2)">02</button>
                    <div class="cs_step_line"></div>
                    <button class="cs_step_btn" onclick="showCsStep(3)">03</button>
                    <div class="cs_step_line"></div>
                    <button class="cs_step_btn" onclick="showCsStep(4)">04</button>
                    <div class="cs_step_line"></div>
                    <button class="cs_step_btn" onclick="showCsStep(5)">05</button>
                </div>

                <!-- Step 1 Content -->
                <div class="cs_step_content_pane active" id="csStep1">
                    <h3 class="cs_h3 d-md-flex align-items-center" style="font-size: 24px; font-weight: 600;">
                        <span class="d-none d-md-inline-block" style="width: 20px; height: 2px; background: var(--cs-orange); margin-right: 15px;"></span>
                        Tell Us About Your Business
                    </h3>
                    <p class="cs_body_18 my-4">
                        Share your business profile, market presence, preferred territory, and experience with our partnership team. This helps us understand your existing strengths, customer network, and the market you want to develop.
                    </p>
                    <a class="coman_btn cs_btn_orange" data-bs-toggle="modal" data-bs-target="#applymodal">
                        Enquire Now <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                    </a>
                </div>

                <!-- Step 2 Content -->
                <div class="cs_step_content_pane" id="csStep2">
                    <h3 class="cs_h3 d-md-flex align-items-center" style="font-size: 24px; font-weight: 600;">
                        <span class="d-none d-md-inline-block" style="width: 20px; height: 2px; background: var(--cs-orange); margin-right: 15px;"></span>
                        Territory & Model Discussion
                    </h3>
                    <p class="cs_body_18 my-4">
                        Our regional partnership manager connects directly with your leadership team to discuss regional demand, available territories, required inventory capacities, and revenue milestones.
                    </p>
                    <a class="coman_btn cs_btn_orange" data-bs-toggle="modal" data-bs-target="#applymodal">
                        Enquire Now <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                    </a>
                </div>

                <!-- Step 3 Content -->
                <div class="cs_step_content_pane" id="csStep3">
                    <h3 class="cs_h3 d-md-flex align-items-center" style="font-size: 24px; font-weight: 600;">
                        <span class="d-none d-md-inline-block" style="width: 20px; height: 2px; background: var(--cs-orange); margin-right: 15px;"></span>
                        Agreement & Setup
                    </h3>
                    <p class="cs_body_18 my-4">
                        Once both parties align on the partnership scope, we finalize the partnership agreement. Our team supports you in the initial setup, ensuring a smooth transition into our network.
                    </p>
                    <a class="coman_btn cs_btn_orange" data-bs-toggle="modal" data-bs-target="#applymodal">
                        Enquire Now <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                    </a>
                </div>

                <!-- Step 4 Content -->
                <div class="cs_step_content_pane" id="csStep4">
                    <h3 class="cs_h3 d-md-flex align-items-center" style="font-size: 24px; font-weight: 600;">
                        <span class="d-none d-md-inline-block" style="width: 20px; height: 2px; background: var(--cs-orange); margin-right: 15px;"></span>
                        Training & Enablement
                    </h3>
                    <p class="cs_body_18 my-4">
                        Contendre Solar provides necessary training covering product knowledge, installation best practices (if applicable), and sales enablement to prepare your team for market success.
                    </p>
                    <a class="coman_btn cs_btn_orange" data-bs-toggle="modal" data-bs-target="#applymodal">
                        Enquire Now <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                    </a>
                </div>

                <!-- Step 5 Content -->
                <div class="cs_step_content_pane" id="csStep5">
                    <h3 class="cs_h3 d-md-flex align-items-center" style="font-size: 24px; font-weight: 600;">
                        <span class="d-none d-md-inline-block" style="width: 20px; height: 2px; background: var(--cs-orange); margin-right: 15px;"></span>
                        Launch & Market Support
                    </h3>
                    <p class="cs_body_18 my-4">
                        We activate the partnership with an initial inventory dispatch and provide ongoing marketing, technical, and sales support to help you capture market share efficiently.
                    </p>
                    <a class="coman_btn cs_btn_orange" data-bs-toggle="modal" data-bs-target="#applymodal">
                        Enquire Now <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. Government Subsidy Benefits for Solar Dealers (Figma About 1:836 / 75:551) -->
    <section class="mt-100">
        <div class="container">
            <div class="row align-items-center gx-lg-5">
                <div class="col-lg-6 text-center order-1 order-lg-0">
                    <img src="{{ asset('public/front/images/channel_sales/cs_subsidy_combined.webp') }}" alt="Government Subsidy Benefits for Solar Dealers" class="img-fluid">
                </div>
                <div class="col-lg-6 order-2 order-lg-1">
                    <h2 class="cs_h2 animation-top">Government Subsidy Benefits for Solar Dealers</h2>
                    <p class="cs_body_18 mb-3">
                        Government initiatives are helping bring rooftop solar to more homes across India, creating greater awareness and demand for residential solar solutions.
                    </p>
                    <p class="cs_body_18 mb-3">
                        Schemes such as <b>PM Surya Ghar</b> are encouraging households to consider rooftop solar, expanding the market opportunity for businesses serving this segment.
                    </p>
                    <p class="cs_body_18 mb-3">
                        For a business exploring a <b>solar rooftop dealership</b>, this growing consumer awareness can open new opportunities to sell solar products and connect customers with appropriate installation solutions.
                    </p>
                    <p class="cs_body_18 mb-3">
                        The terms of whether customers qualify for a government subsidy, the paperwork that they would need, what money off they can expect, and installation restrictions will obviously be dependent on the government scheme they qualify for and on what work has been carried out on the property.
                    </p>
                    <p class="cs_body_18">
                        Customers need to be aware of all the necessary facts, with this information being supplied to them at the earliest possible stage by us. We adhere to the official procedures all the way.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. Join Contendre Solar's Trusted Network (Figma Content Split Row 1:853 / 75:568) -->
    <section class="mt-100">
        <div class="container">
            <div class="row align-items-center gx-lg-5">
                <div class="col-lg-7">
                    <h2 class="cs_h2 animation-top">Join Contendre Solar's Trusted Network of Dealers & Distributors</h2>
                    <p class="cs_body_18 mb-4">
                        India is growing rapidly in solar, and this growth cycle will require well-functioning and deep local networks to get superior products closer to the end customers. At Contendre Solar, we are developing a channel ecosystem of dealers, distributors, EPC firms, and installers with ground networks who understand their geography, aspire to grow alongside renewable growth, and believe in delivering quality to customers.
                    </p>
                    <p class="cs_body_18 mb-4">
                        If you are an existing <b>solar panel dealer,</b> an electrical business, an EPC company, or an entrepreneur exploring <b>solar dealership in India,</b> this is an opportunity to build your market with a manufacturer focused on technology, quality, and long-term growth.
                    </p>
                    <div class="cs_tagline_box">
                        Build Your Market. Expand Your Network. Grow With Solar.
                    </div>
                    <a class="coman_btn mt-3" data-bs-toggle="modal" data-bs-target="#applymodal">
                        Join the Contendre Solar Partner Network <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                    </a>
                </div>
                <div class="col-lg-5 mt-4 mt-lg-0 text-center">
                    <img src="{{ asset('public/front/images/channel_sales/cs_network_combined.webp') }}" alt="Join Contendre Solar's Trusted Network" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- 11. Dealership Opportunities Dark Banner (Figma dealership-opportunities 1:884 / 75:588) -->
    <section class="cs_dealership_banner mt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto text-center">
                    <h2 class="head_white animation-top">Solar Panel Dealership Opportunities in India</h2>
                    <p class="lead text-white fw-semibold mb-4 mx-auto">
                        The growth of rooftop, commercial, industrial, and distributed solar is creating new <b>solar panel dealership opportunities in India.</b>
                    </p>
                    <p class="text-white mb-4 mx-auto">
                        A sustainable solar business is not only about selling panels. It also depends on its quality product portfolio, manufacturer support, market understanding, customer relationships, and ability to react to various customer needs. Contendre Solar offers that through its product portfolio and channel support environment.
                    </p>
                    <p class="text-white mx-auto">
                        For businesses looking to <b>become a solar panel distributor</b>, the distribution opportunity can also provide a route to develop a wider regional network and build additional business opportunities, subject to the applicable partnership model.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 12. FAQs (Figma Frame 75:580) -->
    <section class="cs_faq_section mt-100">
        <div class="container">
            <h2 class="cs_h2 animation-top text-center mb-5">Channel Sales - FAQs</h2>
            <div class="accordion" id="accordionExample">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="according_main mb-4">
                            <h5 class="sub_head"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse0"
                                aria-expanded="true"
                                aria-controls="collapse0">
                                What is a solar dealership and distributorship program?
                            </h5>
                            <div id="collapse0"
                                class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="pt-2">
                                    A solar dealership or distributorship is a business partnership through which authorized dealers or distributors sell solar products in their respective markets. The responsibilities, support, commercial terms, and network opportunities depend on the applicable partnership model.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="according_main mb-4">
                            <h5 class="sub_head collapsed"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse1"
                                aria-expanded="false"
                                aria-controls="collapse1">
                                Who can become a solar dealer or distributor?
                            </h5>
                            <div id="collapse1"
                                class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="pt-2">
                                    Electrical businesses, solar installers, EPC companies, hardware and energy distributors, and new entrepreneurs with local market presence are eligible to apply.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="according_main mb-4">
                            <h5 class="sub_head collapsed"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse2"
                                aria-expanded="false"
                                aria-controls="collapse2">
                                How can I become a solar dealer?
                            </h5>
                            <div id="collapse2"
                                class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="pt-2">
                                    Submit our online Channel Partner Application form. Our team will review your business credentials, connect for a territory consultation, and complete the onboarding process.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="according_main mb-4">
                            <h5 class="sub_head collapsed"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse3"
                                aria-expanded="false"
                                aria-controls="collapse3">
                                Is previous experience in the solar industry required?
                            </h5>
                            <div id="collapse3"
                                class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="pt-2">
                                    No. While prior business or electrical experience helps, Contendre Solar provides end-to-end technical training, product knowledge, and sales enablement kits.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="according_main mb-4">
                            <h5 class="sub_head collapsed"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse4"
                                aria-expanded="false"
                                aria-controls="collapse4">
                                What solar products can dealers and distributors sell?
                            </h5>
                            <div id="collapse4"
                                class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="pt-2">
                                    Dealers and distributors can sell Contendre Solar’s full range of high-efficiency solar modules, solar panels, and associated energy solution products.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="according_main mb-4">
                            <h5 class="sub_head collapsed"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse5"
                                aria-expanded="false"
                                aria-controls="collapse5">
                                What support is provided to dealers and distributors?
                            </h5>
                            <div id="collapse5"
                                class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="pt-2">
                                    Contendre Solar provides complete product training, marketing and digital resources, sales assistance, technical support, and dedicated regional management.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="according_main mb-4">
                            <h5 class="sub_head collapsed"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse6"
                                aria-expanded="false"
                                aria-controls="collapse6">
                                What documents are required to apply for a solar dealership?
                            </h5>
                            <div id="collapse6"
                                class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="pt-2">
                                    Standard business registration documents, GST registration, PAN card, address proof of business premises, and relevant business track record details.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="according_main mb-4">
                            <h5 class="sub_head collapsed"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse7"
                                aria-expanded="false"
                                aria-controls="collapse7">
                                What is the difference between a solar dealer and a solar distributor?
                            </h5>
                            <div id="collapse7"
                                class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="pt-2">
                                    A solar dealer primarily sells directly to end customers, while a solar distributor manages regional distribution, supplies dealers/sub-dealers, and builds a wider regional sales network.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 13. Final Sustainability CTA (Figma Sustainablity 1:927) -->
    <section class="cs_final_section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <p class="animation-top text-center text-white">Ready to Grow With Solar?</p>
                    <h2 class="head_white text-center animation-top" style="margin-bottom: 24px;">Partner With Contendre Solar</h2>
                    <p class="lead text-white mb-4 animation-bottom">
                        India's solar opportunity is growing. Build your presence with a manufacturer bringing together advanced technology, high-performance products, and a partner-focused approach.
                    </p>
                    <div class="cs_hero_quote animation-bottom" style="font-size: 24px; color: #FFFFFF;">
                        ‘Your market has potential. Let's power it together.’
                    </div>
                    <div class="mt-4">
                        <a class="coman_btn animation-bottom" data-bs-toggle="modal" data-bs-target="#applymodal">
                            Become a Contendre Solar Distributor <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
function showCsStep(stepNum) {
    document.querySelectorAll('.cs_step_btn').forEach((btn, idx) => {
        if (idx === stepNum - 1) {
            btn.classList.add('active');
        } else {
            btn.classList.remove('active');
        }
    });
    document.querySelectorAll('.cs_step_content_pane').forEach((pane, idx) => {
        if (idx === stepNum - 1) {
            pane.classList.add('active');
        } else {
            pane.classList.remove('active');
        }
    });
}
</script>

@include('layouts.partnerform')
@include('layouts.frontfooter')
