@include('layouts.frontheader')

<link rel="stylesheet" href="{{ asset('public/front/css/channel-sales.css') }}">
<link rel="stylesheet" href="{{ asset('public/front/css/channel-sales-responsive.css') }}">

<div class="channel_sales_wrapper">
    <!-- 1. Hero Section (Figma Exact Node 75:718 & 75:754) -->
    <section class="cs_hero_section epc_page_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <p class="cs_hero_subtitle animation-top">From Solar Planning to Power Generation.</p>
                    <h1 class="cs_hero_title animation-top">Leading Solar EPC Company in India for Turnkey Solar Solutions</h1>
                    
                    <p class="cs_hero_para animation-bottom">
                        Execution is everything. A successful solar system comes with outstanding execution. Contendre Solar, a trustworthy Solar EPC partner, offers you integrated solutions that include planning, design and engineering, procurement, construction, commissioning, and aftercare services for solar energy projects of all sizes.
                    </p>
                    <p class="cs_hero_para animation-bottom">
                        Whether installing a solar energy solution on a commercial or residential roof, on agricultural land, or on an industrial roof, all our turnkey operations are motivated by one promise: to develop a clean and green source that will generate energy for many years.
                    </p>
                    
                    <div class="mt-4">
                        <a class="cs_hero_btn animation-bottom" data-bs-toggle="modal" data-bs-target="#applymodal">
                            Request an EPC Quote <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Intro Statement & Client Logos (Figma Frame 75:771) -->
    <section class="mt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="head2 cs_intro_head_title animation-top text-center mb-0">Delivering Reliable Solar Solutions Across Industries</h2>
                </div>
            </div>
            
            <div class="cs_intro_card mt-2 p-4 rounded-3 bg-white shadow-sm">
                <div class="clients_slider">
                    <div class="clients_slide text-center">
                        <div class="cs_client_box">
                            <img src="{{ asset('public/front/images/channel_sales/bel_logo_1_1_360.webp') }}" alt="BEL" class="img-fluid" style="max-height: 50px;">
                        </div>
                    </div>
                    <div class="clients_slide text-center">
                        <div class="cs_client_box">
                            <img src="{{ asset('public/front/images/channel_sales/Indian_Oil_Corporation-Logo_wine_1728907032_1_1_362.webp') }}" alt="Indian Oil" class="img-fluid" style="max-height: 50px;">
                        </div>
                    </div>
                    <div class="clients_slide text-center">
                        <div class="cs_client_box">
                            <img src="{{ asset('public/front/images/channel_sales/State_Bank_of_India_svg_1_1_364.webp') }}" alt="State Bank of India" class="img-fluid" style="max-height: 50px;">
                        </div>
                    </div>
                    <div class="clients_slide text-center">
                        <div class="cs_client_box">
                            <img src="{{ asset('public/front/images/channel_sales/Steel_Authority_of_India_logo_svg_1_1_366.webp') }}" alt="SAIL" class="img-fluid" style="max-height: 50px;">
                        </div>
                    </div>
                    <div class="clients_slide text-center">
                        <div class="cs_client_box">
                            <img src="{{ asset('public/front/images/channel_sales/BSF_Logo_1_1_368.webp') }}" alt="BSF" class="img-fluid" style="max-height: 50px;">
                        </div>
                    </div>
                    <div class="clients_slide text-center">
                        <div class="cs_client_box">
                            <img src="{{ asset('public/front/images/channel_sales/powergrid-logo-png_1_1_370.webp') }}" alt="POWERGRID" class="img-fluid" style="max-height: 50px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Our EPC Services (Figma Frame 75:788) -->
    <section class="mt-100">
        <div class="container">
            <div class="text-center mb-4 mb-lg-4">
                <h2 class="head2 animation-top">Our EPC Services</h2>
                <p class="lead text-secondary mx-auto text-center">
                    Our <b>solar EPC services</b> cover the complete project lifecycle, from the first site assessment to commissioning and post-project support.
                </p>
            </div>

            <div class="row g-4">
                <!-- 1. Project Assessment -->
                <div class="col-lg-4 col-md-6">
                    <div class="cs_why_card_item h-100">
                        <div class="cs_card_icon_wrap">
                            <img src="{{ asset('public/front/images/epc/epc_service_icon_1.webp') }}" alt="Project Assessment">
                        </div>
                        <div>
                            <h3 class="cs_h3">Project Assessment & Feasibility</h3>
                            <p class="cs_body_18">We evaluate your site, energy requirements, available area, structural considerations, and project objectives to determine the right solar solution.</p>
                        </div>
                    </div>
                </div>
                <!-- 2. Engineering & System Design -->
                <div class="col-lg-4 col-md-6">
                    <div class="cs_why_card_item h-100">
                        <div class="cs_card_icon_wrap">
                            <img src="{{ asset('public/front/images/epc/epc_service_icon_2.webp') }}" alt="Engineering & System Design">
                        </div>
                        <div>
                            <h3 class="cs_h3">Engineering & System Design</h3>
                            <p class="cs_body_18">Our team develops project-specific designs covering system capacity, module configuration, electrical architecture, structures, and other critical requirements.</p>
                        </div>
                    </div>
                </div>
                <!-- 3. Procurement -->
                <div class="col-lg-4 col-md-6">
                    <div class="cs_why_card_item h-100">
                        <div class="cs_card_icon_wrap">
                            <img src="{{ asset('public/front/images/epc/epc_service_icon_3.webp') }}" alt="Procurement">
                        </div>
                        <div>
                            <h3 class="cs_h3">Procurement</h3>
                            <p class="cs_body_18">We source and integrate quality components with a focus on performance, compatibility, availability, and project timelines.</p>
                        </div>
                    </div>
                </div>
                <!-- 4. Solar Installation -->
                <div class="col-lg-4 col-md-6">
                    <div class="cs_why_card_item h-100">
                        <div class="cs_card_icon_wrap">
                            <img src="{{ asset('public/front/images/epc/epc_service_icon_4.webp') }}" alt="Solar Installation">
                        </div>
                        <div>
                            <h3 class="cs_h3">Solar Installation</h3>
                            <p class="cs_body_18">Our installation teams execute mounting, electrical works, cabling, equipment integration, and safety requirements with attention to quality and site conditions.</p>
                        </div>
                    </div>
                </div>
                <!-- 5. Testing & Commissioning -->
                <div class="col-lg-4 col-md-6">
                    <div class="cs_why_card_item h-100">
                        <div class="cs_card_icon_wrap">
                            <img src="{{ asset('public/front/images/epc/epc_service_icon_5.webp') }}" alt="Testing & Commissioning">
                        </div>
                        <div>
                            <h3 class="cs_h3">Testing & Commissioning</h3>
                            <p class="cs_body_18">Before the system goes live, the installation is tested and commissioned to verify safe operation and expected system performance.</p>
                        </div>
                    </div>
                </div>
                <!-- 6. Operations & Maintenance -->
                <div class="col-lg-4 col-md-6">
                    <div class="cs_why_card_item h-100">
                        <div class="cs_card_icon_wrap">
                            <img src="{{ asset('public/front/images/epc/epc_service_icon_6.webp') }}" alt="Operations & Maintenance">
                        </div>
                        <div>
                            <h3 class="cs_h3">Operations & Maintenance</h3>
                            <p class="cs_body_18">Our support does not end at commissioning. O&M services help maintain system performance, identify issues early, and support long-term asset reliability.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Solar EPC Solutions by Project Type (Figma Frame 75:1002) -->
    <section class="mt-100">
        <div class="container">
            <div class="cs_section_header animation-top text-center mb-5">
                <h2 class="head2">Solar EPC Solutions by Project Type</h2>
                <p class="cs_desc">
                    Different projects from different EPC solutions provider has different energy profiles, site conditions, and performance objectives. Our <b>epc solar power</b> solutions are planned accordingly.
                </p>
            </div>

            <div class="row g-4 cs_who_row">
                <div class="col-lg-3 col-md-6">
                    <div class="cs_who_card" style="background-image: url('{{ asset('public/front/images/channel_sales/Residential-Solar.webp') }}');">
                        <div class="cs_who_content">
                            <h3 class="cs_who_title">Residential Solar</h3>
                            <p class="cs_who_desc">Rooftop solar solutions designed around household energy consumption, available roof space, and long-term savings.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="cs_who_card" style="background-image: url('{{ asset('public/front/images/channel_sales/Commercial-Industrial-Solar.webp') }}');">
                        <div class="cs_who_content">
                            <h3 class="cs_who_title">Commercial & Industrial Solar</h3>
                            <p class="cs_who_desc">Solar solutions for offices, retail spaces, hotels, institutions, warehouses, manufacturing facilities, and industrial operations looking to manage energy costs, and power requirements.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="cs_who_card" style="background-image: url('{{ asset('public/front/images/channel_sales/Large-Scale-Utility-Scale-Solar.webp') }}');">
                        <div class="cs_who_content">
                            <h3 class="cs_who_title">Large Scale & Utility-Scale Solar</h3>
                            <p class="cs_who_desc">Large-scale solar projects requiring detailed engineering, coordinated execution, high-capacity systems, and disciplined project management.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="cs_who_card" style="background-image: url('{{ asset('public/front/images/channel_sales/Institutional-Infrastructure-Solar.webp') }}');">
                        <div class="cs_who_content">
                            <h3 class="cs_who_title">Institutional & Infrastructure Solar</h3>
                            <p class="cs_who_desc">Project-specific EPC solutions for both rooftop and ground-mounted installations, depending on site availability and energy requirements.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Sectors We Serve (Figma Frame 75:1024 Slider) -->
    <section class="mt-100 mb-4">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="head2 animation-top">Sectors We Serve</h2>
                <p class="lead text-secondary mx-auto text-center">
                    Whether the requirement is for solar panels for commercial buildings, an industrial rooftop, or a larger solar power plant, the approach starts with understanding how the site consumes energy.
                </p>
            </div>

            <!-- Sectors Slick Slider with Dots -->
            <div class="sectors_slider pb-4">
                <div class="px-2">
                    <div class="epc_sector_card">
                        <img src="{{ asset('public/front/images/channel_sales/Manufacturing-Industrial.webp') }}" alt="Manufacturing & Industrial" class="epc_sector_img">
                        <div class="epc_sector_body">
                            <p class="epc_sector_tag">01 / Sector</p>
                            <h3 class="epc_sector_name">Manufacturing & Industrial</h3>
                        </div>
                    </div>
                </div>
                <div class="px-2">
                    <div class="epc_sector_card">
                        <img src="{{ asset('public/front/images/channel_sales/Commercial-Buildings.webp') }}" alt="Commercial Buildings" class="epc_sector_img">
                        <div class="epc_sector_body">
                            <p class="epc_sector_tag">02 / Sector</p>
                            <h3 class="epc_sector_name">Commercial Buildings</h3>
                        </div>
                    </div>
                </div>
                <div class="px-2">
                    <div class="epc_sector_card">
                        <img src="{{ asset('public/front/images/channel_sales/Corporate-Offices.webp') }}" alt="Corporate Offices" class="epc_sector_img">
                        <div class="epc_sector_body">
                            <p class="epc_sector_tag">03 / Sector</p>
                            <h3 class="epc_sector_name">Corporate Offices</h3>
                        </div>
                    </div>
                </div>
                <div class="px-2">
                    <div class="epc_sector_card">
                        <img src="{{ asset('public/front/images/channel_sales/Warehouses-Logistics.webp') }}" alt="Institutional & Infrastructure Solar" class="epc_sector_img">
                        <div class="epc_sector_body">
                            <p class="epc_sector_tag">04 / Sector</p>
                            <h3 class="epc_sector_name">Warehouses & Logistics</h3>
                        </div>
                    </div>
                </div>
                <div class="px-2">
                    <div class="epc_sector_card">
                        <img src="{{ asset('public/front/images/channel_sales/Educational-Institutions.webp') }}" alt="Institutional & Infrastructure Solar" class="epc_sector_img">
                        <div class="epc_sector_body">
                            <p class="epc_sector_tag">05 / Sector</p>
                            <h3 class="epc_sector_name">Educational Institutions</h3>
                        </div>
                    </div>
                </div>
                <div class="px-2">
                    <div class="epc_sector_card">
                        <img src="{{ asset('public/front/images/channel_sales/Healthcare-Facilities.webp') }}" alt="Institutional & Infrastructure Solar" class="epc_sector_img">
                        <div class="epc_sector_body">
                            <p class="epc_sector_tag">06 / Sector</p>
                            <h3 class="epc_sector_name">Healthcare Facilities</h3>
                        </div>
                    </div>
                </div>
                <div class="px-2">
                    <div class="epc_sector_card">
                        <img src="{{ asset('public/front/images/channel_sales/Retail-Hospitality.webp') }}" alt="Institutional & Infrastructure Solar" class="epc_sector_img">
                        <div class="epc_sector_body">
                            <p class="epc_sector_tag">07 / Sector</p>
                            <h3 class="epc_sector_name">Retail & Hospitality</h3>
                        </div>
                    </div>
                </div>
                <div class="px-2">
                    <div class="epc_sector_card">
                        <img src="{{ asset('public/front/images/channel_sales/Residential-Communities.webp') }}" alt="Institutional & Infrastructure Solar" class="epc_sector_img">
                        <div class="epc_sector_body">
                            <p class="epc_sector_tag">08 / Sector</p>
                            <h3 class="epc_sector_name">Residential Communities</h3>
                        </div>
                    </div>
                </div>
                <div class="px-2">
                    <div class="epc_sector_card">
                        <img src="{{ asset('public/front/images/channel_sales/Infrastructure-Large-Projects.webp') }}" alt="Institutional & Infrastructure Solar" class="epc_sector_img">
                        <div class="epc_sector_body">
                            <p class="epc_sector_tag">09 / Sector</p>
                            <h3 class="epc_sector_name">Infrastructure & Large Projects</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. 7-Step Solar EPC Execution Process (Figma Frame 75:1198) -->
    <section class="cs_steps_section mt-100" style="background: linear-gradient(180deg, #FFFBF5 0%, rgba(255, 251, 245, 0.85) 15%, rgba(255, 251, 245, 0) 53%), url('{{ asset('public/front/images/channel_sales/Our-EPC-Process.webp') }}') center center / cover no-repeat; padding: 100px 0;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="head2 animation-top">Our EPC Process</h2>
                <p class="lead text-secondary mx-auto text-center">
                    A successful EPC project needs more than good equipment. It needs a process where every stage connects to the next.
                </p>
            </div>

            <div class="cs_step_container">
                <!-- Stepper Navigation -->
                <div class="cs_step_tabs">
                    <button class="cs_step_btn active" onclick="showEpcStep(1)">01</button>
                    <div class="cs_step_line"></div>
                    <button class="cs_step_btn" onclick="showEpcStep(2)">02</button>
                    <div class="cs_step_line"></div>
                    <button class="cs_step_btn" onclick="showEpcStep(3)">03</button>
                    <div class="cs_step_line"></div>
                    <button class="cs_step_btn" onclick="showEpcStep(4)">04</button>
                    <div class="cs_step_line"></div>
                    <button class="cs_step_btn" onclick="showEpcStep(5)">05</button>
                    <div class="cs_step_line"></div>
                    <button class="cs_step_btn" onclick="showEpcStep(6)">06</button>
                    <div class="cs_step_line"></div>
                    <button class="cs_step_btn" onclick="showEpcStep(7)">07</button>
                </div>

                <!-- Step 1 Pane -->
                <div class="cs_step_content_pane active" id="epcStep1">
                    <h3 class="cs_h3 d-md-flex align-items-center" style="font-size: 28px; font-weight: 600; color: var(--black);">
                        <span class="d-none d-md-inline-block" style="width: 24px; height: 2px; background: var(--orange); margin-right: 15px;"></span>
                        01. Understand
                    </h3>
                    <p class="cs_body_18 my-4">
                        We begin with your energy requirements, project objectives, site conditions, and expectations. This helps us understand the project's priorities before moving into technical planning. We align the initial approach with your operational and energy goals.
                    </p>
                    <a class="coman_btn cs_btn_orange" data-bs-toggle="modal" data-bs-target="#applymodal">
                        Enquire Now <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                    </a>
                </div>
                <!-- Step 2 Pane -->
                <div class="cs_step_content_pane" id="epcStep2">
                    <h3 class="cs_h3 d-md-flex align-items-center" style="font-size: 28px; font-weight: 600; color: var(--black);">
                        <span class="d-none d-md-inline-block" style="width: 24px; height: 2px; background: var(--orange); margin-right: 15px;"></span>
                        02. Assess
                    </h3>
                    <p class="cs_body_18 my-4">
                        Our team evaluates the site, available area, structural considerations, energy consumption, and project feasibility. This assessment helps identify opportunities, limitations, and key project requirements. The findings form the basis for a practical solar solution.
                    </p>
                    <a class="coman_btn cs_btn_orange" data-bs-toggle="modal" data-bs-target="#applymodal">
                        Enquire Now <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                    </a>
                </div>
                <!-- Step 3 Pane -->
                <div class="cs_step_content_pane" id="epcStep3">
                    <h3 class="cs_h3 d-md-flex align-items-center" style="font-size: 28px; font-weight: 600; color: var(--black);">
                        <span class="d-none d-md-inline-block" style="width: 24px; height: 2px; background: var(--orange); margin-right: 15px;"></span>
                        03. Engineer
                    </h3>
                    <p class="cs_body_18 my-4">
                        We develop the technical design and system architecture around the project's specific requirements. System capacity, equipment selection, electrical configuration, and site conditions are considered during design. The objective is to create a solution designed for reliable project performance.
                    </p>
                    <a class="coman_btn cs_btn_orange" data-bs-toggle="modal" data-bs-target="#applymodal">
                        Enquire Now <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                    </a>
                </div>
                <!-- Step 4 Pane -->
                <div class="cs_step_content_pane" id="epcStep4">
                    <h3 class="cs_h3 d-md-flex align-items-center" style="font-size: 28px; font-weight: 600; color: var(--black);">
                        <span class="d-none d-md-inline-block" style="width: 24px; height: 2px; background: var(--orange); margin-right: 15px;"></span>
                        04. Procure
                    </h3>
                    <p class="cs_body_18 my-4">
                        Required modules, inverters, structures, electrical equipment, and other system components are sourced and coordinated for execution. Procurement is aligned with the approved design and project requirements. This helps maintain consistency between selected technology and on-site execution.
                    </p>
                    <a class="coman_btn cs_btn_orange" data-bs-toggle="modal" data-bs-target="#applymodal">
                        Enquire Now <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                    </a>
                </div>
                <!-- Step 5 Pane -->
                <div class="cs_step_content_pane" id="epcStep5">
                    <h3 class="cs_h3 d-md-flex align-items-center" style="font-size: 28px; font-weight: 600; color: var(--black);">
                        <span class="d-none d-md-inline-block" style="width: 24px; height: 2px; background: var(--orange); margin-right: 15px;"></span>
                        05. Execute
                    </h3>
                    <p class="cs_body_18 my-4">
                        Installation, electrical works, integration, safety checks, and site execution are managed through a coordinated project approach. Our team works according to the project's technical and safety requirements. The focus remains on quality execution with minimal disruption to operations.
                    </p>
                    <a class="coman_btn cs_btn_orange" data-bs-toggle="modal" data-bs-target="#applymodal">
                        Enquire Now <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                    </a>
                </div>
                <!-- Step 6 Pane -->
                <div class="cs_step_content_pane" id="epcStep6">
                    <h3 class="cs_h3 d-md-flex align-items-center" style="font-size: 28px; font-weight: 600; color: var(--black);">
                        <span class="d-none d-md-inline-block" style="width: 24px; height: 2px; background: var(--orange); margin-right: 15px;"></span>
                        06. Commission
                    </h3>
                    <p class="cs_body_18 my-4">
                        The completed system is tested, verified, and commissioned for operation. Key system components and electrical connections are checked before the system goes live. This ensures the completed installation is ready for reliable operation.
                    </p>
                    <a class="coman_btn cs_btn_orange" data-bs-toggle="modal" data-bs-target="#applymodal">
                        Enquire Now <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                    </a>
                </div>
                <!-- Step 7 Pane -->
                <div class="cs_step_content_pane" id="epcStep7">
                    <h3 class="cs_h3 d-md-flex align-items-center" style="font-size: 28px; font-weight: 600; color: var(--black);">
                        <span class="d-none d-md-inline-block" style="width: 24px; height: 2px; background: var(--orange); margin-right: 15px;"></span>
                        07. Support
                    </h3>
                    <p class="cs_body_18 my-4">
                        Post-commissioning O&M and technical support help keep the system performing over its operating life. Routine monitoring and maintenance help identify potential issues and maintain system performance. Our support continues beyond installation to help protect your solar investment.
                    </p>
                    <a class="coman_btn cs_btn_orange" data-bs-toggle="modal" data-bs-target="#applymodal">
                        Enquire Now <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Why Choose Contendre Solar for EPC? (Figma Frame 75:1240) -->
    <section class="mt-100">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="head2 animation-top mb-3">Why Choose Contendre Solar for EPC?</h2>
                <p class="lead text-secondary mx-auto text-center">
                    When looking for a credible EPC partner, you need to ensure a confluence of technology, manufacturing insight, engineering prowess, execution rigor, and long-term support. This is what is in store with Contendre Solar in terms of an integrated advantage!
                </p>
            </div>

            <!-- 6 Why Choose Feature Cards -->
            <div class="row g-4 mb-5">
                <!-- 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="cs_why_card_item h-100 p-4 rounded-3" style="background: #F8F2EA; border: none;">
                        <div class="cs_card_icon_wrap">
                            <img src="{{ asset('public/front/images/channel_sales/Capa_1_1_1013.webp') }}" alt="Manufacturing Meets EPC">
                        </div>
                        <div>
                            <h3 class="cs_h3 mb-3" style="font-size: 22px; font-weight: 600;">Manufacturing Meets EPC</h3>
                            <p class="cs_body_18">
                                Contendre brings expertise across <b>solar PV module manufacturing and turnkey project execution</b>, giving us an understanding of both the product and the project, not just the installation.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="cs_why_card_item h-100 p-4 rounded-3" style="background: #F8F2EA; border: none;">
                        <div class="cs_card_icon_wrap">
                            <img src="{{ asset('public/front/images/channel_sales/Capa_1_1_1048.webp') }}" alt="Technology-Driven Solutions">
                        </div>
                        <div>
                            <h3 class="cs_h3 mb-3" style="font-size: 22px; font-weight: 600;">Technology-Driven Solutions</h3>
                            <p class="cs_body_18">
                                Technologies we apply range from N-Type TOPCon modules to custom-built solar solutions, chosen based on the project's needs and longevity.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="cs_why_card_item h-100 p-4 rounded-3" style="background: #F8F2EA; border: none;">
                        <div class="cs_card_icon_wrap">
                            <img src="{{ asset('public/front/images/channel_sales/Icon_1_1075.webp') }}" alt="End-to-End Execution">
                        </div>
                        <div>
                            <h3 class="cs_h3 mb-3" style="font-size: 22px; font-weight: 600;">End-to-End Execution</h3>
                            <p class="cs_body_18">
                                The EPC partner runs the entire EPC life cycle, including design, feasibility, installation, commissioning, and O&M.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="cs_why_card_item h-100 p-4 rounded-3" style="background: #F8F2EA; border: none;">
                        <div class="cs_card_icon_wrap">
                            <img src="{{ asset('public/front/images/channel_sales/Group_1_1060.webp') }}" alt="Quality & Safety Focus">
                        </div>
                        <div>
                            <h3 class="cs_h3 mb-3" style="font-size: 22px; font-weight: 600;">Quality & Safety Focus</h3>
                            <p class="cs_body_18">
                                Our manufacturing ecosystem follows recognized quality and management standards, including <b>ISO 9001, ISO 14001, and ISO 45001,</b> alongside applicable solar product standards and certifications.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="cs_why_card_item h-100 p-4 rounded-3" style="background: #F8F2EA; border: none;">
                        <div class="cs_card_icon_wrap">
                            <img src="{{ asset('public/front/images/channel_sales/Group_1_1076.webp') }}" alt="Built Around Your Project">
                        </div>
                        <div>
                            <h3 class="cs_h3 mb-3" style="font-size: 22px; font-weight: 600;">Built Around Your Project</h3>
                            <p class="cs_body_18">
                                Each location presents unique problems. The solution is designed based on capacity, energy needs, location, space available, and the goals of the project, not a solution to fit all sites.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="cs_why_card_item h-100 p-4 rounded-3" style="background: #F8F2EA; border: none;">
                        <div class="cs_card_icon_wrap">
                            <img src="{{ asset('public/front/images/channel_sales/Capa_1_1_1013.webp') }}" alt="Support Beyond Commissioning">
                        </div>
                        <div>
                            <h3 class="cs_h3 mb-3" style="font-size: 22px; font-weight: 600;">Support Beyond Commissioning</h3>
                            <p class="cs_body_18">
                                Our relationship doesn't end when the system is switched on. O&M and technical support help maintain system performance and protect the value of your solar investment.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Key Numbers / Track Record Timeline (Figma Frame 75:1386) -->
            <div class="mt-100 pt-3">
                <h2 class="head2 animation-top text-center mb-1">Contendre Solar EPC – Key Numbers / Track Record</h2>

                <div class="track_timeline_container d-none d-lg-block">
                    <!-- Central Connecting Line -->
                    <div class="track_timeline_main_line"></div>

                    <div class="row g-0 track_timeline_row">
                        <!-- Node 1 (Icon Top, Stem Top to Dot, Text Bottom) -->
                        <div class="col" style="flex: 1;">
                            <div class="track_item stem_top">
                                <div class="track_item_top pb-4">
                                    <div class="track_icon_circle">
                                        <img src="{{ asset('public/front/images/epc/track_svg_1.webp') }}" alt="20MW+">
                                    </div>
                                </div>
                                <div class="track_dot_wrapper">
                                    <div class="track_dot"></div>
                                </div>
                                <div class="track_item_bottom pt-3">
                                    <h3 class="track_number">20MW+</h3>
                                    <h4 class="track_title">Installed Capacity</h4>
                                    <p class="track_desc">Projects delivered across different applications and project requirements.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Node 2 (Text Top, Dot, Stem Bottom to Icon) -->
                        <div class="col" style="flex: 1;">
                            <div class="track_item stem_bottom">
                                <div class="track_item_top pb-3">
                                    <h3 class="track_number">10+ Years</h3>
                                    <h4 class="track_title">Industry Experience</h4>
                                    <p class="track_desc">Experience across solar manufacturing, technology, and project execution.</p>
                                </div>
                                <div class="track_dot_wrapper">
                                    <div class="track_dot"></div>
                                </div>
                                <div class="track_item_bottom pt-4">
                                    <div class="track_icon_circle">
                                        <img src="{{ asset('public/front/images/epc/track_svg_2.webp') }}" alt="10+ Years">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Node 3 (Icon Top, Stem Top to Dot, Text Bottom) -->
                        <div class="col" style="flex: 1;">
                            <div class="track_item stem_top">
                                <div class="track_item_top pb-4">
                                    <div class="track_icon_circle">
                                        <img src="{{ asset('public/front/images/epc/track_svg_3.webp') }}" alt="Pan India">
                                    </div>
                                </div>
                                <div class="track_dot_wrapper">
                                    <div class="track_dot"></div>
                                </div>
                                <div class="track_item_bottom pt-3">
                                    <h3 class="track_number">Pan India</h3>
                                    <h4 class="track_title">Installation Reach</h4>
                                    <p class="track_desc">Supporting solar projects across locations in India.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Node 4 (Text Top, Dot, Stem Bottom to Icon) -->
                        <div class="col" style="flex: 1;">
                            <div class="track_item stem_bottom">
                                <div class="track_item_top pb-3">
                                    <h3 class="track_number">500+</h3>
                                    <h4 class="track_title">Projects / Installations</h4>
                                    <p class="track_desc">A growing project portfolio across residential, commercial, and industrial applications.</p>
                                </div>
                                <div class="track_dot_wrapper">
                                    <div class="track_dot"></div>
                                </div>
                                <div class="track_item_bottom pt-4">
                                    <div class="track_icon_circle">
                                        <img src="{{ asset('public/front/images/epc/track_svg_4.webp') }}" alt="500+">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Node 5 (Icon Top, Stem Top to Dot, Text Bottom) -->
                        <div class="col" style="flex: 1;">
                            <div class="track_item stem_top">
                                <div class="track_item_top pb-4">
                                    <div class="track_icon_circle">
                                        <img src="{{ asset('public/front/images/epc/track_svg_5.webp') }}" alt="Diverse Client Base">
                                    </div>
                                </div>
                                <div class="track_dot_wrapper">
                                    <div class="track_dot"></div>
                                </div>
                                <div class="track_item_bottom pt-3">
                                    <h3 class="track_number">Diverse Client Base</h3>
                                    <h4 class="track_title">Corporates | Residential | Industrial</h4>
                                    <p class="track_desc">Solutions designed for different scales, sectors, and energy requirements.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile Responsive Grid View -->
                <div class="row g-4 d-lg-none mt-4 text-center justify-content-center">
                    <div class="col-md-4 col-6">
                        <div class="p-3 bg-white rounded-3 shadow-sm h-100">
                            <div class="track_icon_circle mb-3">
                                <img src="{{ asset('public/front/images/epc/track_svg_1.webp') }}" alt="20MW+">
                            </div>
                            <h3 class="track_number">20MW+</h3>
                            <h4 class="track_title">Installed Capacity</h4>
                            <p class="track_desc mx-auto">Projects delivered across different applications and project requirements.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="p-3 bg-white rounded-3 shadow-sm h-100">
                            <div class="track_icon_circle mb-3">
                                <img src="{{ asset('public/front/images/epc/track_svg_2.webp') }}" alt="10+ Years">
                            </div>
                            <h3 class="track_number">10+ Years</h3>
                            <h4 class="track_title">Industry Experience</h4>
                            <p class="track_desc mx-auto">Experience across solar manufacturing, technology, and project execution.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="p-3 bg-white rounded-3 shadow-sm h-100">
                            <div class="track_icon_circle mb-3">
                                <img src="{{ asset('public/front/images/epc/track_svg_3.webp') }}" alt="Pan India">
                            </div>
                            <h3 class="track_number">Pan India</h3>
                            <h4 class="track_title">Installation Reach</h4>
                            <p class="track_desc mx-auto">Supporting solar projects across locations in India.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="p-3 bg-white rounded-3 shadow-sm h-100">
                            <div class="track_icon_circle mb-3">
                                <img src="{{ asset('public/front/images/epc/track_svg_4.webp') }}" alt="500+">
                            </div>
                            <h3 class="track_number">500+</h3>
                            <h4 class="track_title">Projects / Installations</h4>
                            <p class="track_desc mx-auto">A growing project portfolio across residential, commercial, and industrial applications.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-6">
                        <div class="p-3 bg-white rounded-3 shadow-sm h-100">
                            <div class="track_icon_circle mb-3">
                                <img src="{{ asset('public/front/images/epc/track_svg_5.webp') }}" alt="Diverse Client Base">
                            </div>
                            <h3 class="track_number">Diverse Client Base</h3>
                            <h4 class="track_title">Corporates | Residential | Industrial</h4>
                            <p class="track_desc mx-auto">Solutions designed for different scales, sectors, and energy requirements.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. Dark Banner - Our Case Studies (Figma Frame 75:1505) -->
    <section class="cs_dealership_banner position-relative text-center text-white mt-5 mt-lg-0" style="background: linear-gradient(180deg, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.8) 100%), url('{{ asset('public/front/images/epc/epc_case_studies_bg.webp') }}') center/cover no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto text-center">
                    <span class="cs_banner_tag animation-top">Our Case Studies</span>
                    <h2 class="head_white animation-top cs_banner_title">Real Projects. Real Execution. Real Performance.</h2>
                    <p class="cs_banner_desc mx-auto animation-bottom">
                        From commercial rooftops to industrial sites, our portfolio of projects is evidence of how we do solar EPC; it shows our site knowledge, our ability to engineer the correct solution, our discipline in execution, and the ongoing support of performance after completion.
                    </p>
                    <div class="mt-4">
                        <a class="coman_btn animation-bottom" data-bs-toggle="modal" data-bs-target="#applymodal">
                            View Our Projects <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. Let's Build Your Solar Project Together (Figma Frame 75:1518) -->
    <section class="cs_build_section mt-100">
        <div class="container">
            <div class="row align-items-center g-4 g-lg-5">
                <!-- Left Text Column -->
                <div class="col-lg-7">
                    <h2 class="head2 animation-top mb-4">
                        Let's Build Your Solar Project Together.
                    </h2>
                    <p class="mb-4">
                        Contendre Solar offers trustworthy, whole-solar EPC solutions engineered to your mission needs: we can take care of everything from EPC for any aspect of your solar endeavor (engineering and procurement) to solar system installation and EPC for a solar power plant, including commissioning and servicing.
                    </p>
                    <p class="mb-5">
                        If you’d like to design an industrial solar system, a business rooftop solar project, home solar installments, or a greater solar electrical energy project or energy center you’d like help managing, get in touch with us at this time to create electricity for the installation that your business requires, now and for the next quarter century.
                    </p>
                    <div>
                        <a class="coman_btn animation-bottom" data-bs-toggle="modal" data-bs-target="#applymodal">
                            Request an EPC Quote <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                        </a>
                    </div>
                </div>

                <!-- Right Column: Single Combined Image from Figma Node 75:1530 -->
                <div class="col-lg-5 text-center">
                    <img src="{{ asset('public/front/images/epc/lets_build_together_img.webp') }}" alt="Let's Build Your Solar Project Together" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- 10. FAQs - Light Beige Reusable Component (Figma Frame 75:1290) -->
    <section class="cs_faq_section mt-100">
        <div class="container">
            <h2 class="cs_h2 animation-top text-center mb-5">FAQs</h2>
            <div class="accordion" id="accordionEpc">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="according_main mb-4">
                            <h5 class="sub_head"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseEpc0"
                                aria-expanded="true"
                                aria-controls="collapseEpc0">
                                What is Solar EPC?
                            </h5>
                            <div id="collapseEpc0"
                                class="accordion-collapse collapse show"
                                data-bs-parent="#accordionEpc">
                                <div class="pt-2">
                                    Solar EPC stands for Engineering, Procurement, and Construction. A solar EPC company can oversee the entire solar project process, from designing the system through ordering the components to installing it, testing it, commissioning it, and managing the operation and maintenance in the case where this service is part of the project.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="according_main mb-4">
                            <h5 class="sub_head collapsed"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseEpc1"
                                aria-expanded="false"
                                aria-controls="collapseEpc1">
                                How long does a solar EPC project take?
                            </h5>
                            <div id="collapseEpc1"
                                class="accordion-collapse collapse"
                                data-bs-parent="#accordionEpc">
                                <div class="pt-2">
                                    The project schedule would depend upon the size of the project, the condition of the site, getting of approvals, system designs and specifications, availability of material and manpower, etc. The EPC team would provide an estimated schedule of activities upon the evaluation of the project.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="according_main mb-4">
                            <h5 class="sub_head collapsed"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseEpc2"
                                aria-expanded="false"
                                aria-controls="collapseEpc2">
                                How is EPC different from just buying solar panels?
                            </h5>
                            <div id="collapseEpc2"
                                class="accordion-collapse collapse"
                                data-bs-parent="#accordionEpc">
                                <div class="pt-2">
                                    Although purchasing a panel is just one aspect of a solar system, an EPC partner handles the entire system, design, integrating various component products, installation, performance, and testing. As a complete package.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="according_main mb-4">
                            <h5 class="sub_head collapsed"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseEpc3"
                                aria-expanded="false"
                                aria-controls="collapseEpc3">
                                What makes Contendre Solar different from other EPC companies?
                            </h5>
                            <div id="collapseEpc3"
                                class="accordion-collapse collapse"
                                data-bs-parent="#accordionEpc">
                                <div class="pt-2">
                                    Contendre combines solar manufacturing capabilities with turnkey EPC execution. This gives the team a deeper understanding of modules, technology, system integration, and project requirements while providing end-to-end project support.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="according_main mb-4">
                            <h5 class="sub_head collapsed"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseEpc4"
                                aria-expanded="false"
                                aria-controls="collapseEpc4">
                                What is the minimum project size Contendre Solar undertakes?
                            </h5>
                            <div id="collapseEpc4"
                                class="accordion-collapse collapse"
                                data-bs-parent="#accordionEpc">
                                <div class="pt-2">
                                   Project suitability depends on the project type, location, technical requirements, and commercial feasibility. Contact Contendre Solar with your project details to discuss the appropriate EPC solution.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="according_main mb-4">
                            <h5 class="sub_head collapsed"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseEpc5"
                                aria-expanded="false"
                                aria-controls="collapseEpc5">
                                What's included in Contendre Solar turnkey EPC services?
                            </h5>
                            <div id="collapseEpc5"
                                class="accordion-collapse collapse"
                                data-bs-parent="#accordionEpc">
                                <div class="pt-2">
                                    Turnkey EPC services can cover site assessment, feasibility, engineering and design, procurement, installation, electrical integration, testing, commissioning, and post-commissioning O&M support, depending on the project scope.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="according_main mb-4">
                            <h5 class="sub_head collapsed"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseEpc6"
                                aria-expanded="false"
                                aria-controls="collapseEpc6">
                                What is the cost of solar EPC per MW?
                            </h5>
                            <div id="collapseEpc6"
                                class="accordion-collapse collapse"
                                data-bs-parent="#accordionEpc">
                                <div class="pt-2">
                                    There is no single EPC cost per MW because pricing depends on module technology, system capacity, site conditions, mounting structure, equipment selection, project location, civil and electrical requirements, and other scope considerations. A project-specific assessment is required for an accurate quote.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="according_main mb-4">
                            <h5 class="sub_head collapsed"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseEpc7"
                                aria-expanded="false"
                                aria-controls="collapseEpc7">
                                Does Contendre Solar provide O&M after commissioning?
                            </h5>
                            <div id="collapseEpc7"
                                class="accordion-collapse collapse"
                                data-bs-parent="#accordionEpc">
                                <div class="pt-2">
                                    Yes. Contendre Solar provides operations & maintenance services designed to support the performance and longevity of solar systems after commissioning. The scope can vary according to project requirements.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="according_main mb-4">
                            <h5 class="sub_head collapsed"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseEpc7"
                                aria-expanded="false"
                                aria-controls="collapseEpc7">
                                Which states/regions does Contendre Solar operate in?
                            </h5>
                            <div id="collapseEpc7"
                                class="accordion-collapse collapse"
                                data-bs-parent="#accordionEpc">
                                <div class="pt-2">
                                    Contendre Solar supports projects across India. Project feasibility, installation scope, logistics, and execution timelines are evaluated based on the specific location and project requirements.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 11. Sustainability CTA Banner (Figma Frame 75:1582) -->
    <section class="cs_sustainability_banner position-relative text-center text-white py-5" style="background: linear-gradient(180deg, rgba(17, 17, 17, 0.7) 0%, rgba(17, 17, 17, 0.75) 100%), url('{{ asset('public/front/images/epc/Build-Your-Solar-Project.webp') }}') center/cover no-repeat; padding: 120px 0 !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto text-center">
                    <span class="d-block text-uppercase fw-semibold mb-3" style="color: #FFFFFF; font-size: 20px; letter-spacing: 1px;">Ready to Build Better Solar?</span>
                    <h2 class="head_white animation-top mb-4">
                        Let's Build Your Solar Project Together.
                    </h2>
                    <p class="lead text-white fw-medium mb-4 mx-auto">
                        Engineering. Execution. Performance.
                    </p>
                    <a class="coman_btn animation-bottom mt-3" data-bs-toggle="modal" data-bs-target="#applymodal">
                        Schedule EPC Consultation <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
function showEpcStep(stepNum) {
    document.querySelectorAll('.cs_steps_section .cs_step_btn').forEach((btn, idx) => {
        if (idx === stepNum - 1) {
            btn.classList.add('active');
        } else {
            btn.classList.remove('active');
        }
    });
    document.querySelectorAll('.cs_steps_section .cs_step_content_pane').forEach((pane, idx) => {
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

<script>
(function() {
    function initSectorsSlider() {
        if (typeof $ !== 'undefined' && typeof $.fn.slick !== 'undefined' && $('.sectors_slider').length) {
            if (!$('.sectors_slider').hasClass('slick-initialized')) {
                $('.sectors_slider').slick({
                    dots: true,
                    arrows: false,
                    infinite: true,
                    speed: 500,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    responsive: [
                        {
                            breakpoint: 992,
                            settings: {
                                slidesToShow: 2
                            }
                        },
                        {
                            breakpoint: 576,
                            settings: {
                                slidesToShow: 1
                            }
                        }
                    ]
                });
            }
        }
    }
    if (document.readyState === 'complete') {
        initSectorsSlider();
    } else {
        window.addEventListener('load', initSectorsSlider);
        if (typeof $ !== 'undefined') {
            $(document).ready(initSectorsSlider);
        }
    }
})();
</script>
