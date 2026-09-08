@include('layouts.frontheader')

<link rel="stylesheet" href="{{ asset('public/front/css/channel-sales.css') }}">
<link rel="stylesheet" href="{{ asset('public/front/css/channel-sales-responsive.css') }}">

<div class="channel_sales_wrapper">
    <!-- 1. Hero Section (Figma Exact Node 75:1656) -->
    <section class="cs_hero_section dev_page_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <p class="cs_hero_subtitle animation-top">Building Solar Projects Starts with the Right Partner</p>
                    <h1 class="cs_hero_title animation-top">Solar Developer — Turnkey Solar Project Solutions</h1>
                    
                    <p class="cs_hero_para animation-bottom">
                        For a <b>solar project developer</b>, module selection is only one part of a much larger decision. Technology, product quality, certifications, supply capability, technical documentation, and long-term performance all influence how a project comes together.
                    </p>
                    <p class="cs_hero_para animation-bottom">
                        We bring solar production and project expertise together and we work with developers of commercial, industrial, ground mount and utility-scale projects to help our project stakeholders who focus on longer term, on-going performance, using intelligent modules, quality-led manufacturing and technical service.
                    </p>
                    <p class="cs_hero_para animation-bottom">
                        For <b>solar developers in India</b>, the focus is clear: choose a partner that can support the project beyond the module datasheet.
                    </p>
                    
                    <div class="mt-4">
                        <a class="cs_hero_btn animation-bottom" data-bs-toggle="modal" data-bs-target="#applymodal">
                            Discuss Your Solar Project <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Client Logos Bar (Figma Frame 75:1710) -->
    <section class="mt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="head2 cs_intro_head_title animation-top text-center mb-0">Delivering Reliable Solar Solutions <span>Across Industries</span></h2>
                </div>
            </div>
            
            <div class="cs_intro_card mt-3 p-4 rounded-3 bg-white shadow-sm">
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

    <!-- 3. Our Module Technologies (Figma Frame 75:1727) -->
    <section class="mt-100">
        <div class="container">
            <div class="text-center">
                <h2 class="head2 animation-top mb-3">Our Module Technologies</h2>
                <p class="cs_desc mx-auto text-center">
                    Select the right solar technology for your project. Our modules are engineered for performance, reliability, and long-term energy yield.
                </p>
            </div>
            
            <div class="row g-5 pt-4">
                <!-- Card 1: N-TYPE TOPCON -->
                <div class="col-lg-6">
                    <div class="position-relative" style="margin-top: 50px;">
                        <!-- Border Box -->
                        <div class="p-4" style="border: 2px solid #DDDDDD; border-radius: 4px; height: 320px; background: #FFFFFF; position: relative;">
                            <!-- Panel Image Breaking Out of Top -->
                            <img src="{{ asset('public/front/images/epc/solar_module_front.webp') }}" alt="N-TYPE TOPCON" style="position: absolute; top: -65px; left: 50%; transform: translateX(-50%); height: 380px; z-index: 5; object-fit: contain;">
                        </div>
                        <!-- Bottom Info Bar -->
                        <div class="d-flex align-items-center justify-content-between mt-4">
                            <div>
                                <h3 class="fw-bold mb-1" style="font-size: 22px; color: #F16F24; letter-spacing: 0.5px;">N – TYPE TOPCON</h3>
                                <p class="mb-0 text-muted">Half – Cut TOPCon Cell &nbsp;|&nbsp; Bifacial Dual Glass</p>
                            </div>
                            <a data-bs-toggle="modal" data-bs-target="#applymodal" style="cursor: pointer; width: 44px; height: 44px; background: #F16F24; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #FFFFFF; flex-shrink: 0; text-decoration: none;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 2: P-TYPE PERC -->
                <div class="col-lg-6">
                    <div class="position-relative" style="margin-top: 50px;">
                        <!-- Border Box -->
                        <div class="p-4" style="border: 2px solid #DDDDDD; border-radius: 4px; height: 320px; background: #FFFFFF; position: relative;">
                            <!-- Panel Image Breaking Out of Top -->
                            <img src="{{ asset('public/front/images/epc/solar_module_front.webp') }}" alt="P-TYPE PERC" style="position: absolute; top: -65px; left: 50%; transform: translateX(-50%); height: 380px; z-index: 5; object-fit: contain;">
                        </div>
                        <!-- Bottom Info Bar -->
                        <div class="d-flex align-items-center justify-content-between mt-4">
                            <div>
                                <h3 class="fw-bold mb-1" style="font-size: 22px; color: #F16F24; letter-spacing: 0.5px;">P-TYPE PERC</h3>
                                <p class="mb-0 text-muted">
                                    Half-Cut PERC Cell &nbsp;|&nbsp; Bifacial Glass to Glass & Transparent Backsheet &nbsp;|&nbsp; Monofacial Glass to White Backsheet
                                </p>
                            </div>
                            <a data-bs-toggle="modal" data-bs-target="#applymodal" style="cursor: pointer; width: 44px; height: 44px; background: #F16F24; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #FFFFFF; flex-shrink: 0; text-decoration: none;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Why Contendre for Solar Developers (Figma Frame 75:1752) -->
    <section class="mt-100">
        <div class="container">
            <div class="cs_section_header animation-top text-center mb-lg-5">
                <h2 class="head2">Why Contendre for Solar Developers</h2>
                <p class="mt-3 text-center mx-auto mb-0">
                    A solar project is expected to generate for years, making the choice of technology and manufacturing partner an important part of project planning. Contendre Solar brings together <b>solar PV module manufacturing, custom modules, EPC, and OEM capabilities</b>, supported by automated production, strong quality and R&D capabilities, and phased product testing.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="cs_why_card_item h-100">
                        <div class="cs_card_icon_wrap mb-3">
                            <img src="{{ asset('public/front/images/epc/why_dev_icon_1.webp') }}" alt="Consistency" class="img-fluid" style="max-height: 60px;">
                        </div>
                        <div>
                            <h3 class="cs_h3">Manufacturing Built for Consistency</h3>
                            <p class="cs_body_18">Automated production and dedicated quality systems help maintain consistency across module manufacturing, from incoming materials through final inspection.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="cs_why_card_item h-100">
                        <div class="cs_card_icon_wrap mb-3">
                            <img src="{{ asset('public/front/images/epc/why_dev_icon_2.webp') }}" alt="Technology" class="img-fluid" style="max-height: 60px;">
                        </div>
                        <div>
                            <h3 class="cs_h3">Advanced Module Technology</h3>
                            <p class="cs_body_18">TOPCon and other high-efficiency module technologies support stronger generation and dependable long-term project performance.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="cs_why_card_item h-100">
                        <div class="cs_card_icon_wrap mb-3">
                            <img src="{{ asset('public/front/images/epc/why_dev_icon_3.webp') }}" alt="Compliance" class="img-fluid" style="max-height: 60px;">
                        </div>
                        <div>
                            <h3 class="cs_h3">Compliance-Ready Products</h3>
                            <p class="cs_body_18">BIS approval, IEC certification, and ALMM listing across applicable products support procurement, compliance, and project evaluation requirements.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="cs_why_card_item h-100">
                        <div class="cs_card_icon_wrap mb-3">
                            <img src="{{ asset('public/front/images/epc/why_dev_icon_4.webp') }}" alt="Conditions" class="img-fluid" style="max-height: 60px;">
                        </div>
                        <div>
                            <h3 class="cs_h3">Built for Real-World Conditions</h3>
                            <p class="cs_body_18">Applicable modules offer features such as high mechanical load resistance, PID resistance, fire resistance, salt-mist resistance, and high-wind resistance.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="cs_why_card_item h-100">
                        <div class="cs_card_icon_wrap mb-3">
                            <img src="{{ asset('public/front/images/epc/why_dev_icon_5.webp') }}" alt="Technical Support" class="img-fluid" style="max-height: 60px;">
                        </div>
                        <div>
                            <h3 class="cs_h3">Technical Support for Project Teams</h3>
                            <p class="cs_body_18">Access relevant product specifications and technical documentation for engineering coordination, evaluation, and project due diligence.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="cs_why_card_item h-100">
                        <div class="cs_card_icon_wrap mb-3">
                            <img src="{{ asset('public/front/images/epc/why_dev_icon_6.webp') }}" alt="Experience" class="img-fluid" style="max-height: 60px;">
                        </div>
                        <div>
                            <h3 class="cs_h3">Experience Across Solar Applications</h3>
                            <p class="cs_body_18">Contendre's project ecosystem spans infrastructure, industrial, commercial, government-linked, and other solar applications.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Trust & Capability (Figma Exact) -->
    <section class="mt-100">
        <div class="container">
            <div class="row gy-5 gx-lg-5 align-items-center">
                <!-- Left Image: Manufacturing Plant -->
                <div class="col-lg-5">
                    <img class="img-fluid animation-zoom-in" src="{{ asset('public/front/images/manufacturing.webp') }}" alt="Trust & Capability">
                </div>

                <!-- Right Content: Trust & Capability List -->
                <div class="col-lg-7">
                    <div class="animation-top">
                        <h2 class="head2 mb-4">Trust & Capability</h2>
                    </div>

                    <div class="mt-4">
                        <div class="row justify-content-between align-items-end">
                            <!-- 1. BIS Certified Products -->
                            <div class="col-lg-6">
                                <div class="precision_icon animation-bottom">
                                    <span>
                                        <img src="{{ asset('public/front/images/Advanced-Manufacturing1.webp') }}" alt="BIS Certified Products">
                                    </span>
                                    <p>BIS Certified Products</p>
                                </div>
                            </div>

                            <!-- 2. IEC Certified Products -->
                            <div class="col-lg-6">
                                <div class="precision_icon animation-bottom">
                                    <span>
                                        <img src="{{ asset('public/front/images/Advanced Manufacturing2.webp') }}" alt="IEC Certified Products">
                                    </span>
                                    <p>IEC Certified Products</p>
                                </div>
                            </div>

                            <!-- 3. Advanced Manufacturing -->
                            <div class="col-lg-6">
                                <div class="precision_icon animation-bottom">
                                    <span>
                                        <img src="{{ asset('public/front/images/Advanced Manufacturing3.webp') }}" alt="Advanced Manufacturing">
                                    </span>
                                    <p>Advanced Manufacturing</p>
                                </div>
                            </div>

                            <!-- 4. TOPCon Technology -->
                            <div class="col-lg-6">
                                <div class="precision_icon animation-bottom">
                                    <span>
                                        <img src="{{ asset('public/front/images/Advanced Manufacturing4.webp') }}" alt="TOPCon Technology">
                                    </span>
                                    <p>TOPCon Technology</p>
                                </div>
                            </div>

                            <!-- 5. ALMM-Listed Applicable Modules -->
                            <div class="col-lg-6">
                                <div class="precision_icon animation-bottom">
                                    <span>
                                        <img src="{{ asset('public/front/images/Advanced Manufacturing5.webp') }}" alt="ALMM-Listed Applicable Modules">
                                    </span>
                                    <p>ALMM-Listed Applicable Modules</p>
                                </div>
                            </div>

                            <!-- 6. Project-Oriented Technical Support -->
                            <div class="col-lg-6">
                                <div class="precision_icon animation-bottom">
                                    <span>
                                        <img src="{{ asset('public/front/images/Advanced Manufacturing6.webp') }}" alt="Project-Oriented Technical Support">
                                    </span>
                                    <p>Project-Oriented Technical Support</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Our Solar Developer Support Capabilities (Figma Frame 75:1857) -->
    <section class="mt-100">
        <div class="container-fluid px-0">
            <div class="container text-center mb-4 mb-lg-5">
                <h2 class="head2 animation-top mb-3">Our Solar Developer Support Capabilities</h2>
                <p class="cs_desc mx-auto text-center">
                    Developers need clarity at every stage, from selecting the right module to planning supply. Our support is designed around those project requirements.
                </p>
            </div>
            
            <!-- Full Width Container with Background Image & Floating White Box -->
            <div class="position-relative w-100 overflow-hidden" style="background: url('{{ asset('public/front/images/epc/dev_support_bg.webp') }}') center center / cover no-repeat; min-height: 620px; padding: 75px 0; display: flex; align-items: center;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-8 col-12">
                            <div class="bg-white rounded-3 shadow-lg position-relative" style="padding: 50px 45px; box-shadow: 0 15px 45px rgba(0,0,0,0.12) !important;">
                                <!-- Top Row: Number 01 & Arrows -->
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <span class="fw-bold" id="devStepNum" style="font-size: 56px; color: var(--orange); line-height: 1;">01</span>
                                    <div class="d-flex align-items-center gap-3">
                                        <button class="btn rounded-circle text-white d-flex align-items-center justify-content-center p-0" id="prevDevBtn" onclick="navDevStep(-1)" style="width: 46px; height: 46px; background: var(--orange); border: none; opacity: 0.5; cursor: pointer;" disabled>
                                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                                        </button>
                                        <button class="btn rounded-circle text-white d-flex align-items-center justify-content-center p-0" id="nextDevBtn" onclick="navDevStep(1)" style="width: 46px; height: 46px; background: var(--orange); border: none; cursor: pointer;">
                                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                                        </button>
                                    </div>
                                </div>
                                
                                <!-- Title -->
                                <div class="d-md-flex align-items-center mb-3">
                                    <span class="d-none d-md-inline-block" style="width: 36px; height: 2px; background: var(--orange); margin-right: 14px; flex-shrink: 0;"></span>
                                    <h3 class="fw-bold mb-0" id="devStepTitle" style="font-size: 24px; color: var(--black); line-height: 34px;">Module Selection & Technical Evaluation</h3>
                                </div>
                                
                                <!-- Description -->
                                <p class="mb-0 cs_body_18" id="devStepDesc">
                                    We help project teams evaluate module technologies and configurations according to capacity, site conditions, project design and performance objectives.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Stepper Script -->
    <script>
        const devStepsData = [
            {
                num: "01",
                title: "Module Selection & Technical Evaluation",
                desc: "We help project teams evaluate module technologies and configurations according to capacity, site conditions, project design and performance objectives."
            },
            {
                num: "02",
                title: "Project Design & System Coordination",
                desc: "We work with developer engineering teams to provide single-line diagrams, CAD layouts, and technical data for system integration."
            },
            {
                num: "03",
                title: "Custom Module & OEM Manufacturing",
                desc: "Tailored module specifications including custom glass, frame color, cell type, and dimensions for specific project needs."
            },
            {
                num: "04",
                title: "Supply Chain & Logistics Planning",
                desc: "Phased manufacturing and delivery schedules structured to match site readiness and installation timelines."
            },
            {
                num: "05",
                title: "Technical Support & Performance Documentation",
                desc: "Continuous technical assistance, flash test data, warranty logs, and post-supply documentation."
            }
        ];
        let currentDevIdx = 0;

        function navDevStep(dir) {
            currentDevIdx += dir;
            if (currentDevIdx < 0) currentDevIdx = 0;
            if (currentDevIdx >= devStepsData.length) currentDevIdx = devStepsData.length - 1;
            
            document.getElementById("devStepNum").innerText = devStepsData[currentDevIdx].num;
            document.getElementById("devStepTitle").innerText = devStepsData[currentDevIdx].title;
            document.getElementById("devStepDesc").innerText = devStepsData[currentDevIdx].desc;

            document.getElementById("prevDevBtn").disabled = (currentDevIdx === 0);
            document.getElementById("prevDevBtn").style.opacity = (currentDevIdx === 0) ? "0.5" : "1";
            document.getElementById("nextDevBtn").disabled = (currentDevIdx === devStepsData.length - 1);
            document.getElementById("nextDevBtn").style.opacity = (currentDevIdx === devStepsData.length - 1) ? "0.5" : "1";
        }
    </script>

    <!-- 6. Solar Project Types We Support (Figma Node 75:1888) -->
    <section class="mt-100">
        <div class="container">
            <div class="text-center mb-2 mb-lg-5">
                <h2 class="head2 animation-top mb-3">Solar Project Types We Support</h2>
                <p class="cs_desc mx-auto text-center">
                    Solar projects differ in scale, application, and operating conditions. The right module therefore depends on the project, not simply its capacity.
                </p>
            </div>

            <div class="row align-items-center g-0 g-lg-5">
                <!-- Left Image -->
                <div class="col-lg-6">
                    <div class="overflow-hidden shadow-sm" style="height: 100%; min-height: 520px;">
                        <img src="{{ asset('public/front/images/epc/project_types_side_img.webp') }}" alt="Solar Project Types We Support" class="w-100 h-100" style="min-height: 520px; object-fit: cover;">
                    </div>
                </div>
                
                <!-- Right Accordion List (Figma Exact 5-Item Accordion) -->
                <div class="col-lg-6">
                    <div class="project_types_accordion">
                        <!-- Item 01 -->
                        <div class="project_type_item" style="border-bottom: 1px solid var(--bor-grey); padding: 22px 0;">
                            <div class="d-flex align-items-center justify-content-between project_type_header" onclick="toggleProjectType(0)" style="cursor: pointer;">
                                <div class="d-flex align-items-center">
                                    <span class="fw-semibold" style="font-size: 22px; color: var(--black); min-width: 48px;">01</span>
                                    <h3 class="fw-medium mb-0" style="font-size: 22px; color: var(--black);">Utility-Scale Solar Projects</h3>
                                </div>
                                <span class="project_type_icon fw-light" style="font-size: 28px; color: var(--orange); line-height: 1; user-select: none;">&minus;</span>
                            </div>
                            <div class="project_type_body" style="display: block; padding-left: 48px; padding-top: 14px;">
                                <p class="mb-3 cs_body_18">
                                    For <b>utility-scale solar developers</b>, module efficiency, reliability, certifications, supply capability, and long-term energy generation are critical considerations.
                                </p>
                                <p class="mb-0 cs_body_18">
                                    Contendre’s module portfolio is designed to support large-scale project requirements, with technology and product configurations selected based on project specifications.
                                </p>
                            </div>
                        </div>

                        <!-- Item 02 -->
                        <div class="project_type_item" style="border-bottom: 1px solid var(--bor-grey); padding: 22px 0;">
                            <div class="d-flex align-items-center justify-content-between project_type_header" onclick="toggleProjectType(1)" style="cursor: pointer;">
                                <div class="d-flex align-items-center">
                                    <span class="fw-semibold" style="font-size: 22px; color: var(--black); min-width: 48px;">02</span>
                                    <h3 class="fw-medium mb-0" style="font-size: 22px; color: var(--black);">Commercial & Industrial Solar Projects</h3>
                                </div>
                                <span class="project_type_icon fw-light" style="font-size: 28px; color: var(--orange); line-height: 1; user-select: none;">+</span>
                            </div>
                            <div class="project_type_body" style="display: none; padding-left: 48px; padding-top: 14px;">
                                <p class="mb-3 cs_body_18">
                                    For <b>commercial & industrial solar developers</b>, optimizing rooftop space utilization, energy generation density, and structural safety are top priorities.
                                </p>
                                <p class="mb-0 cs_body_18">
                                    Our high-efficiency modules are optimized for factories, warehouses, and corporate facilities to deliver superior energy yield and lower operating costs.
                                </p>
                            </div>
                        </div>

                        <!-- Item 03 -->
                        <div class="project_type_item" style="border-bottom: 1px solid var(--bor-grey); padding: 22px 0;">
                            <div class="d-flex align-items-center justify-content-between project_type_header" onclick="toggleProjectType(2)" style="cursor: pointer;">
                                <div class="d-flex align-items-center">
                                    <span class="fw-semibold" style="font-size: 22px; color: var(--black); min-width: 48px;">03</span>
                                    <h3 class="fw-medium mb-0" style="font-size: 22px; color: var(--black);">Ground-Mounted Solar Projects</h3>
                                </div>
                                <span class="project_type_icon fw-light" style="font-size: 28px; color: var(--orange); line-height: 1; user-select: none;">+</span>
                            </div>
                            <div class="project_type_body" style="display: none; padding-left: 48px; padding-top: 14px;">
                                <p class="mb-3 cs_body_18">
                                    For <b>ground-mounted solar projects</b>, mechanical strength, weather resilience, and consistent long-term energy yields across varying terrains are essential.
                                </p>
                                <p class="mb-0 cs_body_18">
                                    Contendre modules are engineered to endure heavy wind loads, harsh soil conditions, and high UV exposure with minimal degradation.
                                </p>
                            </div>
                        </div>

                        <!-- Item 04 -->
                        <div class="project_type_item" style="border-bottom: 1px solid var(--bor-grey); padding: 22px 0;">
                            <div class="d-flex align-items-center justify-content-between project_type_header" onclick="toggleProjectType(3)" style="cursor: pointer;">
                                <div class="d-flex align-items-center">
                                    <span class="fw-semibold" style="font-size: 22px; color: var(--black); min-width: 48px;">04</span>
                                    <h3 class="fw-medium mb-0" style="font-size: 22px; color: var(--black);">Rooftop Solar Projects</h3>
                                </div>
                                <span class="project_type_icon fw-light" style="font-size: 28px; color: var(--orange); line-height: 1; user-select: none;">+</span>
                            </div>
                            <div class="project_type_body" style="display: none; padding-left: 48px; padding-top: 14px;">
                                <p class="mb-3 cs_body_18">
                                    For <b>rooftop solar developers</b>, weight optimization, high power density, and sleek aesthetic design provide seamless building integration.
                                </p>
                                <p class="mb-0 cs_body_18">
                                    Compatible with standard mounting structures and built with enhanced fire safety and PID resistance for residential and commercial rooftops.
                                </p>
                            </div>
                        </div>

                        <!-- Item 05 -->
                        <div class="project_type_item" style="border-bottom: 1px solid var(--bor-grey); padding: 22px 0;">
                            <div class="d-flex align-items-center justify-content-between project_type_header" onclick="toggleProjectType(4)" style="cursor: pointer;">
                                <div class="d-flex align-items-center">
                                    <span class="fw-semibold" style="font-size: 22px; color: var(--black); min-width: 48px;">05</span>
                                    <h3 class="fw-medium mb-0" style="font-size: 22px; color: var(--black);">Government & Institutional Solar Projects</h3>
                                </div>
                                <span class="project_type_icon fw-light" style="font-size: 28px; color: var(--orange); line-height: 1; user-select: none;">+</span>
                            </div>
                            <div class="project_type_body" style="display: none; padding-left: 48px; padding-top: 14px;">
                                <p class="mb-3 cs_body_18">
                                    For <b>government and institutional projects</b>, ALMM listing, BIS certification, and domestic content compliance are mandatory requirements.
                                </p>
                                <p class="mb-0 cs_body_18">
                                    We support public sector tenders and institutional solar installations with fully certified, bankable modules and rigorous technical documentation.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function toggleProjectType(idx) {
            const items = document.querySelectorAll('.project_type_item');
            items.forEach((item, index) => {
                const body = item.querySelector('.project_type_body');
                const icon = item.querySelector('.project_type_icon');
                if (index === idx) {
                    const isOpen = body.style.display === 'block';
                    if (isOpen) {
                        body.style.display = 'none';
                        icon.innerHTML = '+';
                    } else {
                        body.style.display = 'block';
                        icon.innerHTML = '&minus;';
                    }
                } else {
                    body.style.display = 'none';
                    icon.innerHTML = '+';
                }
            });
        }
    </script>

    <!-- 7. Our Solar Project Development Process (Figma Frame 75:1198 / Process) -->
    <section class="cs_steps_section mt-100" style="background: linear-gradient(180deg, #FFFBF5 0%, rgba(255, 251, 245, 0.85) 15%, rgba(255, 251, 245, 0) 53%), url('{{ asset('public/front/images/channel_sales/img_853bfceac08a891359010793f1219289f901ba68.webp') }}') center center / cover no-repeat; padding: 100px 0;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="head2 animation-top mb-3">Our Solar Project Development Process</h2>
                <p class="cs_desc mx-auto text-center">
                    A well-planned project brings technical and commercial considerations together before execution begins.
                </p>
            </div>

            <div class="cs_step_container">
                <!-- Stepper Navigation -->
                <div class="cs_step_tabs">
                    <button class="cs_step_btn active" onclick="showDevProcessStep(1)">01</button>
                    <div class="cs_step_line"></div>
                    <button class="cs_step_btn" onclick="showDevProcessStep(2)">02</button>
                    <div class="cs_step_line"></div>
                    <button class="cs_step_btn" onclick="showDevProcessStep(3)">03</button>
                    <div class="cs_step_line"></div>
                    <button class="cs_step_btn" onclick="showDevProcessStep(4)">04</button>
                    <div class="cs_step_line"></div>
                    <button class="cs_step_btn" onclick="showDevProcessStep(5)">05</button>
                    <div class="cs_step_line"></div>
                    <button class="cs_step_btn" onclick="showDevProcessStep(6)">06</button>
                    <div class="cs_step_line"></div>
                    <button class="cs_step_btn" onclick="showDevProcessStep(7)">07</button>
                </div>

                <!-- Step 1 Pane -->
                <div class="cs_step_content_pane active" id="devProcessStep1">
                    <h3 class="cs_h3 d-md-flex align-items-center" style="font-size: 24px; font-weight: 600; color: var(--black);">
                        <span class="d-none d-md-inline-block" style="width: 20px; height: 2px; background: var(--orange); margin-right: 12px; flex-shrink: 0;"></span>
                        01. Understand the Project.
                    </h3>
                    <p class="cs_body_18 my-4">
                        We begin with the project’s location, capacity, application, site conditions, technology preferences, and procurement requirements. This gives us a clear understanding of the project’s scope and priorities. It also helps align the initial product approach with your project objectives.
                    </p>
                    <a class="coman_btn cs_btn_orange" data-bs-toggle="modal" data-bs-target="#applymodal">
                        Enquire Now <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                    </a>
                </div>

                <!-- Step 2 Pane -->
                <div class="cs_step_content_pane" id="devProcessStep2">
                    <h3 class="cs_h3 d-md-flex align-items-center" style="font-size: 24px; font-weight: 600; color: var(--black);">
                        <span class="d-none d-md-inline-block" style="width: 20px; height: 2px; background: var(--orange); margin-right: 12px; flex-shrink: 0;"></span>
                        02. Site Assessment & Technical Feasibility
                    </h3>
                    <p class="cs_body_18 my-4">
                        We evaluate solar irradiance, shading parameters, topography, land/roof structure, and grid connectivity to assess project feasibility and optimize system sizing.
                    </p>
                    <a class="coman_btn cs_btn_orange" data-bs-toggle="modal" data-bs-target="#applymodal">
                        Enquire Now <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                    </a>
                </div>

                <!-- Step 3 Pane -->
                <div class="cs_step_content_pane" id="devProcessStep3">
                    <h3 class="cs_h3 d-md-flex align-items-center" style="font-size: 24px; font-weight: 600; color: var(--black);">
                        <span class="d-none d-md-inline-block" style="width: 20px; height: 2px; background: var(--orange); margin-right: 12px; flex-shrink: 0;"></span>
                        03. Engineering & System Design
                    </h3>
                    <p class="cs_body_18 my-4">
                        Our engineering team develops complete module layout drawings, string configurations, electrical single-line diagrams (SLDs), and structural specifications tailored for the site.
                    </p>
                    <a class="coman_btn cs_btn_orange" data-bs-toggle="modal" data-bs-target="#applymodal">
                        Enquire Now <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                    </a>
                </div>

                <!-- Step 4 Pane -->
                <div class="cs_step_content_pane" id="devProcessStep4">
                    <h3 class="cs_h3 d-md-flex align-items-center" style="font-size: 24px; font-weight: 600; color: var(--black);">
                        <span class="d-none d-md-inline-block" style="width: 20px; height: 2px; background: var(--orange); margin-right: 12px; flex-shrink: 0;"></span>
                        04. Technology & Product Selection
                    </h3>
                    <p class="cs_body_18 my-4">
                        We select and configure the optimal module technology (N-Type TOPCon, P-Type PERC, Bifacial) aligned with project energy yield goals and financial parameters.
                    </p>
                    <a class="coman_btn cs_btn_orange" data-bs-toggle="modal" data-bs-target="#applymodal">
                        Enquire Now <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                    </a>
                </div>

                <!-- Step 5 Pane -->
                <div class="cs_step_content_pane" id="devProcessStep5">
                    <h3 class="cs_h3 d-md-flex align-items-center" style="font-size: 24px; font-weight: 600; color: var(--black);">
                        <span class="d-none d-md-inline-block" style="width: 20px; height: 2px; background: var(--orange); margin-right: 12px; flex-shrink: 0;"></span>
                        05. Supply Chain & Logistics Planning
                    </h3>
                    <p class="cs_body_18 my-4">
                        We structure phased manufacturing runs and delivery dispatches to match site readiness and installation milestones, ensuring timely supply execution.
                    </p>
                    <a class="coman_btn cs_btn_orange" data-bs-toggle="modal" data-bs-target="#applymodal">
                        Enquire Now <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                    </a>
                </div>

                <!-- Step 6 Pane -->
                <div class="cs_step_content_pane" id="devProcessStep6">
                    <h3 class="cs_h3 d-md-flex align-items-center" style="font-size: 24px; font-weight: 600; color: var(--black);">
                        <span class="d-none d-md-inline-block" style="width: 20px; height: 2px; background: var(--orange); margin-right: 12px; flex-shrink: 0;"></span>
                        06. Quality Testing & Documentation
                    </h3>
                    <p class="cs_body_18 my-4">
                        Every shipment is backed by batch flash test reports, pre-dispatch quality inspections, and complete ALMM, BIS, and IEC compliance certificates.
                    </p>
                    <a class="coman_btn cs_btn_orange" data-bs-toggle="modal" data-bs-target="#applymodal">
                        Enquire Now <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                    </a>
                </div>

                <!-- Step 7 Pane -->
                <div class="cs_step_content_pane" id="devProcessStep7">
                    <h3 class="cs_h3 d-md-flex align-items-center" style="font-size: 24px; font-weight: 600; color: var(--black);">
                        <span class="d-none d-md-inline-block" style="width: 20px; height: 2px; background: var(--orange); margin-right: 12px; flex-shrink: 0;"></span>
                        07. Ongoing Technical & Warranty Support
                    </h3>
                    <p class="cs_body_18 my-4">
                        We provide post-supply technical coordination, warranty assurance, and continuous performance support to protect developer asset value over the long term.
                    </p>
                    <a class="coman_btn cs_btn_orange" data-bs-toggle="modal" data-bs-target="#applymodal">
                        Enquire Now <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script>
        function showDevProcessStep(stepNum) {
            for (let i = 1; i <= 7; i++) {
                const pane = document.getElementById('devProcessStep' + i);
                if (pane) pane.classList.remove('active');
            }
            const activePane = document.getElementById('devProcessStep' + stepNum);
            if (activePane) activePane.classList.add('active');

            const buttons = document.querySelectorAll('.cs_steps_section .cs_step_btn');
            buttons.forEach((btn, idx) => {
                if (idx + 1 === stepNum) {
                    btn.classList.add('active');
                } else {
                    btn.classList.remove('active');
                }
            });
        }
    </script>

    <!-- 8. Who We Work With (Figma Frame 75:2298 Exact) -->
    <style>
        .who_work_card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
        }
        .who_work_card:hover .who_work_img_wrap img {
            transform: scale(1.04);
        }
        .who_work_img_wrap img {
            transition: transform 0.4s ease;
        }
    </style>
    <section class="mt-100">
        <div class="container">
            <div class="cs_section_header animation-top text-center">
                <h2 class="head2">Who We Work With</h2>
                <p class="cs_desc mt-3">
                    Contendre works across the solar project ecosystem, supporting stakeholders with different technical and procurement requirements.
                </p>
            </div>

            <!-- Top Row: 3 Columns -->
            <div class="row g-4 justify-content-center">
                <!-- 1. Solar Project Developers -->
                <div class="col-lg-4 col-md-6">
                    <div class="who_work_card h-100 d-flex flex-column bg-white overflow-hidden" style="border: 1px solid var(--bor-grey); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                        <div class="who_work_img_wrap overflow-hidden" style="height: 200px;">
                            <img src="{{ asset('public/front/images/epc/who_work_developer.webp') }}" alt="Solar Project Developers" class="w-100 h-100" style="object-fit: cover;">
                        </div>
                        <div class="p-4 d-flex flex-column flex-grow-1 justify-content-between">
                            <div>
                                <h3 class="fw-bold mb-3" style="font-size: 20px; color: var(--black);">Solar Project Developers</h3>
                                <p class="text-muted mb-4 cs_body_18">
                                    For developers looking for dependable module technology, rigorous product documentation, and a manufacturing partner capable of supporting complex utility-scale project timelines.
                                </p>
                            </div>
                            <div>
                                <span style="display: block; width: 28px; height: 2px; background: var(--orange);"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2. Solar EPC Companies -->
                <div class="col-lg-4 col-md-6">
                    <div class="who_work_card h-100 d-flex flex-column bg-white overflow-hidden" style="border: 1px solid var(--bor-grey); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                        <div class="who_work_img_wrap overflow-hidden" style="height: 200px;">
                            <img src="{{ asset('public/front/images/epc/who_work_epc.webp') }}" alt="Solar EPC Companies" class="w-100 h-100" style="object-fit: cover;">
                        </div>
                        <div class="p-4 d-flex flex-column flex-grow-1 justify-content-between">
                            <div>
                                <h3 class="fw-bold mb-3" style="font-size: 20px; color: var(--black);">Solar EPC Companies</h3>
                                <p class="text-muted mb-4 cs_body_18">
                                    For engineering, procurement, and construction teams requiring consistent module supply, seamless technical coordination, and rapid on-site product support throughout project execution.
                                </p>
                            </div>
                            <div>
                                <span style="display: block; width: 28px; height: 2px; background: var(--orange);"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. IPPs & Project Owners -->
                <div class="col-lg-4 col-md-6">
                    <div class="who_work_card h-100 d-flex flex-column bg-white overflow-hidden" style="border: 1px solid var(--bor-grey); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                        <div class="who_work_img_wrap overflow-hidden" style="height: 200px;">
                            <img src="{{ asset('public/front/images/epc/who_work_ipp.webp') }}" alt="IPPs & Project Owners" class="w-100 h-100" style="object-fit: cover;">
                        </div>
                        <div class="p-4 d-flex flex-column flex-grow-1 justify-content-between">
                            <div>
                                <h3 class="fw-bold mb-3" style="font-size: 20px; color: var(--black);">IPPs & Project Owners</h3>
                                <p class="text-muted mb-4 cs_body_18">
                                    For Independent Power Producers and asset owners evaluating module degradation curves, international quality certifications, long-term performance guarantees, and reliable financial models.
                                </p>
                            </div>
                            <div>
                                <span style="display: block; width: 28px; height: 2px; background: var(--orange);"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Row: 2 Wider Columns -->
            <div class="row g-4 justify-content-center mt-2">
                <!-- 4. Commercial & Industrial -->
                <div class="col-lg-6 col-md-6">
                    <div class="who_work_card h-100 d-flex flex-column bg-white overflow-hidden" style="border: 1px solid var(--bor-grey); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                        <div class="who_work_img_wrap overflow-hidden" style="height: 220px;">
                            <img src="{{ asset('public/front/images/epc/who_work_ci.webp') }}" alt="Commercial & Industrial" class="w-100 h-100" style="object-fit: cover;">
                        </div>
                        <div class="p-4 d-flex flex-column flex-grow-1 justify-content-between">
                            <div>
                                <h3 class="fw-bold mb-3" style="font-size: 20px; color: var(--black);">Commercial & Industrial</h3>
                                <p class="text-muted mb-4 cs_body_18">
                                    For enterprise businesses developing onsite solar assets to achieve sustainability milestones and offset high grid tariffs. Built for optimized output on limited commercial rooftops or factory acreage.
                                </p>
                            </div>
                            <div>
                                <span style="display: block; width: 28px; height: 2px; background: var(--orange);"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 5. Infrastructure & Institutional -->
                <div class="col-lg-6 col-md-6">
                    <div class="who_work_card h-100 d-flex flex-column bg-white overflow-hidden" style="border: 1px solid var(--bor-grey); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                        <div class="who_work_img_wrap overflow-hidden" style="height: 220px;">
                            <img src="{{ asset('public/front/images/epc/who_work_infra.webp') }}" alt="Infrastructure & Institutional" class="w-100 h-100" style="object-fit: cover;">
                        </div>
                        <div class="p-4 d-flex flex-column flex-grow-1 justify-content-between">
                            <div>
                                <h3 class="fw-bold mb-3" style="font-size: 20px; color: var(--black);">Infrastructure & Institutional</h3>
                                <p class="text-muted mb-4 cs_body_18">
                                    For government-linked, public sector, and institutional infrastructure projects demanding strict compliance, comprehensive technical logs, systematic supply planning, and robust engineering standards.
                                </p>
                            </div>
                            <div>
                                <span style="display: block; width: 28px; height: 2px; background: var(--orange);"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Reused Section: Let's Build Your Solar Project Together (Figma Frame 75:2336) -->
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
                <!-- Right Graphic Column -->
                <div class="col-lg-5 text-center">
                    <img src="{{ asset('public/front/images/epc/lets_build_together_img.webp') }}" alt="Let's Build Your Solar Project Together" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- 8. Reused Section: Light Beige FAQs (Figma Frame 75:2380) -->
    <section class="cs_faq_section mt-100">
        <div class="container">
            <h2 class="cs_h2 animation-top text-center mb-4">Solar Developer - FAQs</h2>
            <div class="accordion" id="accordionSolarDev">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="according_main mb-4">
                            <h5 class="sub_head"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseDev0"
                                aria-expanded="true"
                                aria-controls="collapseDev0">
                                Why choose Contendre Solar as a module partner for solar projects?
                            </h5>
                            <div id="collapseDev0"
                                class="accordion-collapse collapse show"
                                data-bs-parent="#accordionSolarDev">
                                <div class="pt-2">
                                    Contendre Solar provides high-efficiency TOPCon and Mono PERC modules backed by automated manufacturing, ALMM listing, BIS certification, and comprehensive technical support for seamless developer integration.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="according_main mb-4">
                            <h5 class="sub_head collapsed"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseDev1"
                                aria-expanded="false"
                                aria-controls="collapseDev1">
                                Are Contendre modules listed in ALMM & BIS approved?
                            </h5>
                            <div id="collapseDev1"
                                class="accordion-collapse collapse"
                                data-bs-parent="#accordionSolarDev">
                                <div class="pt-2">
                                    Yes. Applicable Contendre solar modules are BIS certified and listed under ALMM (Approved List of Models and Manufacturers) by MNRE, making them eligible for government and utility projects.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="according_main mb-4">
                            <h5 class="sub_head collapsed"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseDev2"
                                aria-expanded="false"
                                aria-controls="collapseDev2">
                                Does Contendre support OEM / Custom module manufacturing?
                            </h5>
                            <div id="collapseDev2"
                                class="accordion-collapse collapse"
                                data-bs-parent="#accordionSolarDev">
                                <div class="pt-2">
                                    Yes. We offer custom OEM module manufacturing solutions tailored to specific project cell layouts, glass thickness, frame dimensions, and electrical configurations for large developers.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="according_main mb-4">
                            <h5 class="sub_head collapsed"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseDev3"
                                aria-expanded="false"
                                aria-controls="collapseDev3">
                                What is the supply capability for utility-scale developer projects?
                            </h5>
                            <div id="collapseDev3"
                                class="accordion-collapse collapse"
                                data-bs-parent="#accordionSolarDev">
                                <div class="pt-2">
                                    Our automated manufacturing plant delivers multi-megawatt module shipments with phased dispatch schedules aligned strictly with project milestone timelines.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="according_main mb-4">
                            <h5 class="sub_head collapsed"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseDev4"
                                aria-expanded="false"
                                aria-controls="collapseDev4">
                                What warranties are offered on Contendre solar modules?
                            </h5>
                            <div id="collapseDev4"
                                class="accordion-collapse collapse"
                                data-bs-parent="#accordionSolarDev">
                                <div class="pt-2">
                                    We offer 12 to 15 years product warranty and 25 to 30 years linear power output warranty with industry-leading low degradation guarantees.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="according_main mb-4">
                            <h5 class="sub_head collapsed"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseDev5"
                                aria-expanded="false"
                                aria-controls="collapseDev5">
                                How can a developer request technical documentation or PAN files?
                            </h5>
                            <div id="collapseDev5"
                                class="accordion-collapse collapse"
                                data-bs-parent="#accordionSolarDev">
                                <div class="pt-2">
                                    Our engineering sales team provides PVSyst PAN files, datasheets, warranty certificates, and CAD drawings upon project inquiry submission.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="according_main mb-4">
                            <h5 class="sub_head collapsed"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseDev6"
                                aria-expanded="false"
                                aria-controls="collapseDev6">
                                Does Contendre provide both turn-key EPC and module supply only?
                            </h5>
                            <div id="collapseDev6"
                                class="accordion-collapse collapse"
                                data-bs-parent="#accordionSolarDev">
                                <div class="pt-2">
                                    Yes. Developers can partner with us for module supply only or full turnkey EPC services including engineering, grid approvals, and commissioning.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="according_main mb-4">
                            <h5 class="sub_head collapsed"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseDev7"
                                aria-expanded="false"
                                aria-controls="collapseDev7">
                                How to initiate a partnership consultation?
                            </h5>
                            <div id="collapseDev7"
                                class="accordion-collapse collapse"
                                data-bs-parent="#accordionSolarDev">
                                <div class="pt-2">
                                    Fill out the consultation form below or click 'Partner with Contendre' to connect directly with our technical developer team.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. Reused Section: Sustainability CTA Banner (Figma Frame 75:2367) -->
    <section class="cs_sustainability_banner position-relative text-center text-white" style="background: linear-gradient(180deg, rgba(17, 17, 17, 0.7) 0%, rgba(17, 17, 17, 0.75) 100%), url('{{ asset('public/front/images/epc/sustainability_cta_bg.webp') }}') center/cover no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto text-center">
                    <span class="cs_banner_tag animation-top text-white">Ready to Build Better Solar?</span>
                    <h2 class="head_white animation-top cs_banner_title mx-auto" style="max-width: 900px;">
                        Let's Build Your Solar Project Together.
                    </h2>
                    <p class="cs_banner_desc mx-auto animation-bottom">
                        Engineering. Execution. Performance.
                    </p>
                    <div class="mt-4">
                        <a class="coman_btn animation-bottom" data-bs-toggle="modal" data-bs-target="#applymodal">
                            Schedule Consultation <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@include('layouts.partnerform')
@include('layouts.frontfooter')
