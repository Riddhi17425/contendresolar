@include('layouts.frontheader')

<link rel="stylesheet" href="{{ asset('public/front/css/channel-sales.css') }}">
<link rel="stylesheet" href="{{ asset('public/front/css/channel-sales-responsive.css') }}">

<section>
    <div class="channel_sales_wrapper">
    <!-- 1. Hero Section (Figma Exact Node 75:1656) -->
    <section class="cs_hero_section dev_page_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <p class="cs_hero_subtitle animation-top">You don't need to own a factory to sell solar panels under your own name.</p>
                    <h1 class="cs_hero_title animation-top">White Label Solar Panels & OEM <br> Solar Module Manufacturing</h1>
                    
                    <p class="cs_hero_para animation-bottom">
                        Contendre Solar builds N-Type TOPCon and P-Type PERC modules. Under a white label or OEM agreement, every module leaves our facility carrying your branding, your packaging, and your documentation.
                    </p>
                    <p class="cs_hero_para animation-bottom"><b>We manufacture. You sell.</b></p>
                     <div class="mt-4">
                        <a class="cs_hero_btn animation-bottom" data-bs-toggle="modal" data-bs-target="#applymodal">
                            Contact Us <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                        </a>
                    </div>
                </div>
            </div>
        </div>
</section>

 <section class="mt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="head2 cs_intro_head_title animation-top text-center mb-0">Delivering Reliable Solar Solutions Across Industries</h2>
                </div>
            </div>
            
            <div class="cs_intro_card mt-4 p-4 rounded-3 bg-white shadow-sm">
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

    <section class="mt-100">
        <div class="container">
            <div class="cs_section_header animation-top text-center mb-lg-5">
                <h2 class="head2">Why Partner With a White-Label & <br>OEM Solar Manufacturer?</h2>
                <p class="mt-3 text-center mx-auto mb-0">
                   Setting up your own module manufacturing means buying land and equipment, hiring and training a production team, and spending years getting quality control right before your first shipment even goes out. This is where <b>white label solar solutions</b> have become the standard entry point for distributors and brands.
                </p>
            </div>
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h4 class="cs_h2 animation-top mb-5">Working with an established <b>solar module OEM manufacturer</b> skips all of it.</h4>
                    
                    <ul>
                        <li class="mb-3">You launch a product line without building a plant</li>
                        <li class="mb-3">You start with a production process that's already tested and running, instead of building one from zero</li>
                        <li class="mb-3">You can increase or reduce order volumes based on demand, without carrying factory overhead</li>
                        <li class="mb-3">Your team spends its time on sales and customer relationships, not on manufacturing operations</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('public/front/images/channel_sales/Partner-With-White-Label.webp') }}" alt="Government Subsidy Benefits for Solar Dealers" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

     <section class="mt-100">
        <div class="container">
            <div class="cs_section_header animation-top text-center mb-lg-5">
                <h2 class="head2">Why Choose Contendre as Your <br> OEM Manufacturing Partner?</h2>
                <p class="mt-3 text-center mx-auto mb-0">
                   Many manufacturers can give you a price. Fewer can adjust their process to fit what a partner actually needs. Here's what sets Contendre apart: 
                </p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="cs_why_card_item h-100">
                        <div class="cs_card_icon_wrap mb-3">
                            <img src="{{ asset('public/front/images/epc/Right-Technology-for-Available-Space.webp') }}" alt="Consistency" class="img-fluid" style="max-height: 60px;">
                        </div>
                        <div>
                            <h3 class="cs_h3">1 GW in-house production.</h3>
                            <p class="cs_body_18">Both N-Type TOPCon and P-Type PERC modules are manufactured at our own facility, not outsourced.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="cs_why_card_item h-100">
                        <div class="cs_card_icon_wrap mb-3">
                            <img src="{{ asset('public/front/images/epc/Ready-for-Long-Term-Energy-Planning.webp') }}" alt="Technology" class="img-fluid" style="max-height: 60px;">
                        </div>
                        <div>
                            <h3 class="cs_h3">Stage-by-stage quality checks.</h3>
                            <p class="cs_body_18">Cell stringing, lamination, electroluminescence inspection, and IV curve testing catch issues during production, not after installation.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="cs_why_card_item h-100">
                        <div class="cs_card_icon_wrap mb-3">
                            <img src="{{ asset('public/front/images/epc/Built-for-Industrial-Conditions.webp') }}" alt="Compliance" class="img-fluid" style="max-height: 60px;">
                        </div>
                        <div>
                            <h3 class="cs_h3">A Group in operation since 1984.</h3>
                            <p class="cs_body_18">Contendre Solar is backed by a manufacturing legacy, not a company still building its process.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="cs_why_card_item h-100">
                        <div class="cs_card_icon_wrap mb-3">
                            <img src="{{ asset('public/front/images/epc/More-Generation-From-the-Same-Footprint.webp') }}" alt="Conditions" class="img-fluid" style="max-height: 60px;">
                        </div>
                        <div>
                            <h3 class="cs_h3">Volume flexibility.</h3>
                            <p class="cs_body_18">Production scales to match order sizes, from a distributor's first order to an EPC company's recurring supply.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="cs_why_card_item h-100">
                        <div class="cs_card_icon_wrap mb-3">
                            <img src="{{ asset('public/front/images/epc/Designed-Around-Your-Energy-Consumption.webp') }}" alt="Technical Support" class="img-fluid" style="max-height: 60px;">
                        </div>
                        <div>
                            <h3 class="cs_h3">Specification flexibility.</h3>
                            <p class="cs_body_18">Modules are adjusted to your requirements rather than limited to a standard catalogue.</p>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>

    <section class="mt-100">
        <div class="container">
            <div class="text-center mb-2 mb-lg-5">
                <h2 class="head2 animation-top mb-3">Our OEM & White-Label Capabilities</h2>
                <p class="cs_desc mx-auto text-center">
                    Whether you're building a regional distribution brand or a focused <b>private label solar panels</b> range for one market segment, specifications and order terms are set around your business, not a fixed template.
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
                                    For <b>commercial solar developers,</b> roof area, energy consumption, and project economics influence module selection. Our <b>solar modules for C&I project</b> requirements support efficient space use and dependable generation.
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
                                    Ground-mounted projects allow greater flexibility in system configuration while introducing their own structural, environmental, and site considerations. Module selection can be aligned with the project's technical requirements.
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
                                    Rooftop projects require careful consideration of available area, structural conditions, system capacity, and energy demand. Contendre supports applicable rooftop requirements through project-specific module selection.
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
                                   Solar solutions for government buildings, educational institutions, healthcare facilities, and other public infrastructure requiring reliable, efficient, and long-term energy solutions.
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

@include('layouts.partnerform')
@include('layouts.frontfooter')