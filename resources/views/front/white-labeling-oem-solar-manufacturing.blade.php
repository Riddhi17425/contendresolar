@include('layouts.frontheader')

<link rel="stylesheet" href="{{ asset('public/front/css/channel-sales.css') }}">
<link rel="stylesheet" href="{{ asset('public/front/css/channel-sales-responsive.css') }}">

<section>
    <div class="channel_sales_wrapper">
        <!-- 1. Hero Section (Figma Exact Node 75:1656) -->
        <section class="cs_hero_section white_label_page_bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <p class="cs_hero_subtitle animation-top">You don't need to own a factory to sell solar panels
                            under your own name.</p>
                        <h1 class="cs_hero_title animation-top">White Label Solar Panels & OEM Solar Module
                            Manufacturing</h1>

                        <p class="cs_hero_para animation-bottom">
                            Contendre Solar builds N-Type TOPCon and P-Type PERC modules. Under a white label or OEM
                            agreement, every module leaves our facility carrying your branding, your packaging, and your
                            documentation.
                        </p>
                        <p class="cs_hero_para animation-bottom"><b>We manufacture. You sell.</b></p>
                        <div class="mt-4">
                            <a href="{{ url('/contact-us') }}#contactFormSection" class="cs_hero_btn animation-bottom">
                                Talk to Our OEM Team
                                <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
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
                        <h2 class="head2 cs_intro_head_title animation-top text-center mb-0">Delivering Reliable Solar
                            Solutions Across Industries</h2>
                    </div>
                </div>

                <div class="cs_intro_card mt-4 p-4 rounded-3 bg-white shadow-sm">
                    <div class="clients_slider">
                        <div class="clients_slide text-center">
                            <div class="cs_client_box">
                                <img src="{{ asset('public/front/images/channel_sales/bel_logo_1_1_360.webp') }}"
                                    alt="BEL" class="img-fluid" style="max-height: 50px;">
                            </div>
                        </div>
                        <div class="clients_slide text-center">
                            <div class="cs_client_box">
                                <img src="{{ asset('public/front/images/channel_sales/Indian_Oil_Corporation-Logo_wine_1728907032_1_1_362.webp') }}"
                                    alt="Indian Oil" class="img-fluid" style="max-height: 50px;">
                            </div>
                        </div>
                        <div class="clients_slide text-center">
                            <div class="cs_client_box">
                                <img src="{{ asset('public/front/images/channel_sales/State_Bank_of_India_svg_1_1_364.webp') }}"
                                    alt="State Bank of India" class="img-fluid" style="max-height: 50px;">
                            </div>
                        </div>
                        <div class="clients_slide text-center">
                            <div class="cs_client_box">
                                <img src="{{ asset('public/front/images/channel_sales/Steel_Authority_of_India_logo_svg_1_1_366.webp') }}"
                                    alt="SAIL" class="img-fluid" style="max-height: 50px;">
                            </div>
                        </div>
                        <div class="clients_slide text-center">
                            <div class="cs_client_box">
                                <img src="{{ asset('public/front/images/channel_sales/BSF_Logo_1_1_368.webp') }}"
                                    alt="BSF" class="img-fluid" style="max-height: 50px;">
                            </div>
                        </div>
                        <div class="clients_slide text-center">
                            <div class="cs_client_box">
                                <img src="{{ asset('public/front/images/channel_sales/powergrid-logo-png_1_1_370.webp') }}"
                                    alt="POWERGRID" class="img-fluid" style="max-height: 50px;">
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
                        Setting up your own module manufacturing means buying land and equipment, hiring and training a
                        production team, and spending years getting quality control right before your first shipment
                        even goes out. This is where <b>white label solar solutions</b> have become the standard entry
                        point for distributors and brands.
                    </p>
                </div>
                <div class="row align-items-center g-5">
                    <div class="col-lg-6">
                        <h4 class="cs_h2 animation-top mb-5">Working with an established <b>solar module OEM
                                manufacturer</b> skips all of it.</h4>

                        <ul>
                            <li class="mb-3">You launch a product line without building a plant</li>
                            <li class="mb-3">You start with a production process that's already tested and running,
                                instead of building one from zero</li>
                            <li class="mb-3">You can increase or reduce order volumes based on demand, without
                                carrying factory overhead</li>
                            <li class="mb-3">Your team spends its time on sales and customer relationships, not on
                                manufacturing operations</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('public/front/images/channel_sales/Partner-With-White-Label.webp') }}"
                            alt="Government Subsidy Benefits for Solar Dealers" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-100">
            <div class="container">
                <div class="cs_section_header animation-top text-center mb-lg-5">
                    <h2 class="head2">Why Choose Contendre as Your <br> OEM Manufacturing Partner?</h2>
                    <p class="mt-3 text-center mx-auto mb-0">
                        Many manufacturers can give you a price. Fewer can adjust their process to fit what a partner
                        actually needs. Here's what sets Contendre apart:
                    </p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="cs_why_card_item h-100">
                            <div class="cs_card_icon_wrap mb-3">
                                <img src="{{ asset('public/front/images/epc/1-GW-in-house.webp') }}" alt="Consistency"
                                    class="img-fluid" style="max-height: 60px;">
                            </div>
                            <div>
                                <h3 class="cs_h3">1 GW in-house production.</h3>
                                <p class="cs_body_18">Both N-Type TOPCon and P-Type PERC modules are manufactured at our
                                    own facility, not outsourced.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="cs_why_card_item h-100">
                            <div class="cs_card_icon_wrap mb-3">
                                <img src="{{ asset('public/front/images/epc/Stage-by-stage.webp') }}" alt="Technology"
                                    class="img-fluid" style="max-height: 60px;">
                            </div>
                            <div>
                                <h3 class="cs_h3">Stage-by-stage quality checks.</h3>
                                <p class="cs_body_18">Cell stringing, lamination, electroluminescence inspection, and
                                    IV curve testing catch issues during production, not after installation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="cs_why_card_item h-100">
                            <div class="cs_card_icon_wrap mb-3">
                                <img src="{{ asset('public/front/images/epc/Group-in-operation.webp') }}"
                                    alt="Compliance" class="img-fluid" style="max-height: 60px;">
                            </div>
                            <div>
                                <h3 class="cs_h3">A Group in operation since 1984.</h3>
                                <p class="cs_body_18">Contendre Solar is backed by a manufacturing legacy, not a
                                    company still building its process.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="cs_why_card_item h-100">
                            <div class="cs_card_icon_wrap mb-3">
                                <img src="{{ asset('public/front/images/epc/Volume-flexibility.webp') }}"
                                    alt="Conditions" class="img-fluid" style="max-height: 60px;">
                            </div>
                            <div>
                                <h3 class="cs_h3">Volume flexibility.</h3>
                                <p class="cs_body_18">Production scales to match order sizes, from a distributor's
                                    first order to an EPC company's recurring supply.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="cs_why_card_item h-100">
                            <div class="cs_card_icon_wrap mb-3">
                                <img src="{{ asset('public/front/images/epc/Specification-flexibility.webp') }}"
                                    alt="Technical Support" class="img-fluid" style="max-height: 60px;">
                            </div>
                            <div>
                                <h3 class="cs_h3">Specification flexibility.</h3>
                                <p class="cs_body_18">Modules are adjusted to your requirements rather than limited to
                                    a standard catalogue.</p>
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
                        Whether you're building a regional distribution brand or a focused <b>private label solar
                            panels</b> range for one market segment, specifications and order terms are set around your
                        business, not a fixed template.
                    </p>
                </div>

                <div class="row align-items-center g-0 g-lg-5">
                    <!-- Left Image -->
                    <div class="col-lg-6">
                        <div class="overflow-hidden shadow-sm" style="height: 100%; min-height: 520px;">
                            <img src="{{ asset('public/front/images/epc/OEM-White-Label-Capabilities.webp') }}"
                                alt="Solar Project Types We Support" class="w-100 h-100"
                                style="min-height: 520px; object-fit: cover;">
                        </div>
                    </div>

                    <!-- Right Accordion List (Figma Exact 5-Item Accordion) -->
                    <div class="col-lg-6">
                        <div class="project_types_accordion">
                            <!-- Item 01 -->
                            <div class="project_type_item"
                                style="border-bottom: 1px solid var(--bor-grey); padding: 22px 0;">
                                <div class="d-flex align-items-center justify-content-between project_type_header"
                                    onclick="toggleProjectType(0)" style="cursor: pointer;">
                                    <div class="d-flex align-items-center">
                                        <span class="fw-semibold"
                                            style="font-size: 22px; color: var(--black); min-width: 48px;">01</span>
                                        <h3 class="fw-medium mb-0" style="font-size: 22px; color: var(--black);">
                                            Custom branding.</h3>
                                    </div>
                                    <span class="project_type_icon fw-light"
                                        style="font-size: 28px; color: var(--orange); line-height: 1; user-select: none;">&minus;</span>
                                </div>
                                <div class="project_type_body"
                                    style="display: block; padding-left: 48px; padding-top: 14px;">
                                    <p class="mb-3 cs_body_18">
                                        Your logo and brand colors on the module and the packaging. This carries through
                                        every touchpoint a customer or installer sees, so the product presents as fully
                                        yours.
                                    </p>
                                </div>
                            </div>

                            <!-- Item 02 -->
                            <div class="project_type_item"
                                style="border-bottom: 1px solid var(--bor-grey); padding: 22px 0;">
                                <div class="d-flex align-items-center justify-content-between project_type_header"
                                    onclick="toggleProjectType(1)" style="cursor: pointer;">
                                    <div class="d-flex align-items-center">
                                        <span class="fw-semibold"
                                            style="font-size: 22px; color: var(--black); min-width: 48px;">02</span>
                                        <h3 class="fw-medium mb-0" style="font-size: 22px; color: var(--black);">
                                            Module customization.</h3>
                                    </div>
                                    <span class="project_type_icon fw-light"
                                        style="font-size: 28px; color: var(--orange); line-height: 1; user-select: none;">+</span>
                                </div>
                                <div class="project_type_body"
                                    style="display: none; padding-left: 48px; padding-top: 14px;">
                                    <p class="mb-3 cs_body_18">
                                        Wattage, cell technology, frame finish, and glass configuration adjusted to
                                        match your product line and target market. The specification follows what your
                                        market actually needs, not what's most convenient to manufacture.
                                    </p>
                                </div>
                            </div>

                            <!-- Item 03 -->
                            <div class="project_type_item"
                                style="border-bottom: 1px solid var(--bor-grey); padding: 22px 0;">
                                <div class="d-flex align-items-center justify-content-between project_type_header"
                                    onclick="toggleProjectType(2)" style="cursor: pointer;">
                                    <div class="d-flex align-items-center">
                                        <span class="fw-semibold"
                                            style="font-size: 22px; color: var(--black); min-width: 48px;">03</span>
                                        <h3 class="fw-medium mb-0" style="font-size: 22px; color: var(--black);">
                                            Private label documentation.</h3>
                                    </div>
                                    <span class="project_type_icon fw-light"
                                        style="font-size: 28px; color: var(--orange); line-height: 1; user-select: none;">+</span>
                                </div>
                                <div class="project_type_body"
                                    style="display: none; padding-left: 48px; padding-top: 14px;">
                                    <p class="mb-3 cs_body_18">
                                        Datasheets, certificates, and warranty documents issued under your company name.
                                        From the initial sale to any warranty support down the line, the documentation
                                        stays entirely under your brand.
                                    </p>
                                </div>
                            </div>

                            <!-- Item 04 -->
                            <div class="project_type_item"
                                style="border-bottom: 1px solid var(--bor-grey); padding: 22px 0;">
                                <div class="d-flex align-items-center justify-content-between project_type_header"
                                    onclick="toggleProjectType(3)" style="cursor: pointer;">
                                    <div class="d-flex align-items-center">
                                        <span class="fw-semibold"
                                            style="font-size: 22px; color: var(--black); min-width: 48px;">04</span>
                                        <h3 class="fw-medium mb-0" style="font-size: 22px; color: var(--black);">
                                            Export-ready packaging.</h3>
                                    </div>
                                    <span class="project_type_icon fw-light"
                                        style="font-size: 28px; color: var(--orange); line-height: 1; user-select: none;">+</span>
                                </div>
                                <div class="project_type_body"
                                    style="display: none; padding-left: 48px; padding-top: 14px;">
                                    <p class="mb-3 cs_body_18">
                                        Packaging built to match your branding and the shipping requirements of your
                                        destination country. That means one design that satisfies both your brand
                                        standards and the practical demands of international transit.
                                    </p>
                                </div>
                            </div>

                            <!-- Item 05 -->
                            <div class="project_type_item"
                                style="border-bottom: 1px solid var(--bor-grey); padding: 22px 0;">
                                <div class="d-flex align-items-center justify-content-between project_type_header"
                                    onclick="toggleProjectType(4)" style="cursor: pointer;">
                                    <div class="d-flex align-items-center">
                                        <span class="fw-semibold"
                                            style="font-size: 22px; color: var(--black); min-width: 48px;">05</span>
                                        <h3 class="fw-medium mb-0" style="font-size: 22px; color: var(--black);">
                                            Flexible order planning</h3>
                                    </div>
                                    <span class="project_type_icon fw-light"
                                        style="font-size: 28px; color: var(--orange); line-height: 1; user-select: none;">+</span>
                                </div>
                                <div class="project_type_body"
                                    style="display: none; padding-left: 48px; padding-top: 14px;">
                                    <p class="mb-3 cs_body_18">
                                        Order structures for distributors, EPC companies, and energy brands are set
                                        individually, not fixed to one standard volume tier. Whether you're placing a
                                        smaller trial order or a recurring large-volume one, the terms are built around
                                        what actually fits your business.
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


        <section class="mt-100">
            <div class="container">
                <div class="cs_section_header animation-top text-center mb-5">
                    <h2 class="head2">Export Ready Solar Module Manufacturing & <br>International Compliance</h2>
                    <p class="cs_desc">
                        Solar panel regulations differ from country to country. If you're sourcing a <b>custom-branded
                            solar panel manufacturer</b> for markets outside India, these requirements are addressed
                        during order planning, not after production is already complete.
                    </p>
                </div>

                <div class="row g-4 cs_who_row">
                    <div class="col-lg-3 col-md-6">
                        <div class="cs_who_card"
                            style="background-image: url('{{ asset('public/front/images/channel_sales/Regulatory-Adaptation.webp') }}');">
                            <div class="cs_who_content">
                                <h3 class="cs_who_title">Regulatory Adaptation</h3>
                                <p class="cs_who_desc">Module specifications aligned with destination-country
                                    regulations, covering electrical standards and labeling requirements to prevent
                                    rework or shipment delays.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="cs_who_card"
                            style="background-image: url('{{ asset('public/front/images/channel_sales/Compliance-Documentation.webp') }}');">
                            <div class="cs_who_content">
                                <h3 class="cs_who_title">Compliance Documentation</h3>
                                <p class="cs_who_desc">Required certificates and customs paperwork prepared in advance
                                    to support smooth clearance and keep international shipments on schedule.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="cs_who_card"
                            style="background-image: url('{{ asset('public/front/images/channel_sales/Export-Grade-Packaging.webp') }}');">
                            <div class="cs_who_content">
                                <h3 class="cs_who_title">Export-Grade Packaging</h3>
                                <p class="cs_who_desc">Packaging and labeling designed for international shipping,
                                    accounting for handling, climate, transit conditions, and practical brand
                                    requirements throughout transit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="cs_who_card"
                            style="background-image: url('{{ asset('public/front/images/channel_sales/Consistency-Across-Orders.webp') }}');">
                            <div class="cs_who_content">
                                <h3 class="cs_who_title">Consistency Across Orders</h3>
                                <p class="cs_who_desc">Same specifications maintained across repeat orders, ensuring
                                    modules remain consistent and avoiding certification issues when exporting to
                                    regulated markets.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="cs_steps_section mt-100"
            style="background: linear-gradient(180deg, #FFFBF5 0%, rgba(255, 251, 245, 0.85) 15%, rgba(255, 251, 245, 0) 53%), url('{{ asset('public/front/images/channel_sales/Our-EPC-Process.webp') }}') center center / cover no-repeat; padding: 100px 0;">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="head2 animation-top">Our OEM Manufacturing Process</h2>
                    <p class="lead text-secondary mx-auto text-center">
                        Working with us as a <b>custom solar panel manufacturer</b> means this process is followed the
                        same way for every order, so module quality and specifications don't shift between shipments.
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
                    </div>

                    <!-- Step 1 Pane -->
                    <div class="cs_step_content_pane active" id="epcStep1">
                        <h3 class="cs_h3 d-md-flex align-items-center"
                            style="font-size: 28px; font-weight: 600; color: var(--black);">
                            <span class="d-none d-md-inline-block"
                                style="width: 24px; height: 2px; background: var(--orange); margin-right: 15px;"></span>
                            01. Requirement discussion
                        </h3>
                        <p class="cs_body_18 my-4">
                            We confirm specifications, branding details, target market, and order volume. This is where
                            the order actually gets shaped, so nothing gets assumed later that wasn't confirmed here
                            first.
                        </p>
                        <a href="{{ url('/contact-us') }}#contactFormSection" class="coman_btn cs_btn_orange">
                            Enquire Now
                            <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                        </a>
                    </div>
                    <!-- Step 2 Pane -->
                    <div class="cs_step_content_pane" id="epcStep2">
                        <h3 class="cs_h3 d-md-flex align-items-center"
                            style="font-size: 28px; font-weight: 600; color: var(--black);">
                            <span class="d-none d-md-inline-block"
                                style="width: 24px; height: 2px; background: var(--orange); margin-right: 15px;"></span>
                            02. Customization
                        </h3>
                        <p class="cs_body_18 my-4">
                            Module design, packaging, and documentation are finalized to match your brand. Every detail,
                            from labeling to spec sheets, is locked in before production starts, not adjusted midway.
                        </p>
                        <a href="{{ url('/contact-us') }}#contactFormSection" class="coman_btn cs_btn_orange">
                            Enquire Now
                            <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                        </a>
                    </div>
                    <!-- Step 3 Pane -->
                    <div class="cs_step_content_pane" id="epcStep3">
                        <h3 class="cs_h3 d-md-flex align-items-center"
                            style="font-size: 28px; font-weight: 600; color: var(--black);">
                            <span class="d-none d-md-inline-block"
                                style="width: 24px; height: 2px; background: var(--orange); margin-right: 15px;"></span>
                            03. Production
                        </h3>
                        <p class="cs_body_18 my-4">
                            Modules are manufactured through our standard process: cell stringing, lamination, EL
                            inspection, and IV curve testing. The same checks apply here as on any Contendre-branded
                            module, regardless of whose name goes on the box.
                        </p>
                        <a href="{{ url('/contact-us') }}#contactFormSection" class="coman_btn cs_btn_orange">
                            Enquire Now
                            <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                        </a>
                    </div>
                    <!-- Step 4 Pane -->
                    <div class="cs_step_content_pane" id="epcStep4">
                        <h3 class="cs_h3 d-md-flex align-items-center"
                            style="font-size: 28px; font-weight: 600; color: var(--black);">
                            <span class="d-none d-md-inline-block"
                                style="width: 24px; height: 2px; background: var(--orange); margin-right: 15px;"></span>
                            04. Quality verification
                        </h3>
                        <p class="cs_body_18 my-4">
                            Each batch is checked against the agreed specification before packaging. If something
                            doesn't match the specification, it gets flagged and resolved before it ever leaves the
                            facility.
                        </p>
                        <a href="{{ url('/contact-us') }}#contactFormSection" class="coman_btn cs_btn_orange">
                            Enquire Now
                            <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                        </a>
                    </div>
                    <!-- Step 5 Pane -->
                    <div class="cs_step_content_pane" id="epcStep5">
                        <h3 class="cs_h3 d-md-flex align-items-center"
                            style="font-size: 28px; font-weight: 600; color: var(--black);">
                            <span class="d-none d-md-inline-block"
                                style="width: 24px; height: 2px; background: var(--orange); margin-right: 15px;"></span>
                            05. Branded packaging
                        </h3>
                        <p class="cs_body_18 my-4">
                            Modules are packed and labeled under your brand identity. Packaging is built around your
                            brand from the start- materials, labeling, and presentation- rather than fitted onto an
                            existing template.
                        </p>
                        <a href="{{ url('/contact-us') }}#contactFormSection" class="coman_btn cs_btn_orange">
                            Enquire Now
                            <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                        </a>
                    </div>
                    <!-- Step 6 Pane -->
                    <div class="cs_step_content_pane" id="epcStep6">
                        <h3 class="cs_h3 d-md-flex align-items-center"
                            style="font-size: 28px; font-weight: 600; color: var(--black);">
                            <span class="d-none d-md-inline-block"
                                style="width: 24px; height: 2px; background: var(--orange); margin-right: 15px;"></span>
                            06. Dispatch
                        </h3>
                        <p class="cs_body_18 my-4">
                            Shipment is arranged for domestic delivery or export, based on the destination. Shipping
                            documentation and timelines are confirmed upfront, so there are no surprises once the order
                            is in transit.
                        </p>
                        <a href="{{ url('/contact-us') }}#contactFormSection" class="coman_btn cs_btn_orange">
                            Enquire Now
                            <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                        </a>
                    </div>
                </div>
            </div>
        </section>

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

        <section class="mt-100">
            <div class="container">
                <div class="row align-items-center gx-lg-5">
                    <div class="col-lg-6 text-center order-1 order-lg-0">
                        <img src="{{ asset('public/front/images/channel_sales/EPCs-Energy-Brands.webp') }}"
                            alt="Government Subsidy Benefits for Solar Dealers" class="img-fluid">
                    </div>
                    <div class="col-lg-6 order-2 order-lg-1">
                        <h2 class="cs_h2 animation-top mb-3">Trusted by Distributors, EPCs & Energy Brands</h2>
                        <p class="cs_body_18 mb-3">
                            Contendre Solar supplies distributors, EPC companies, and energy brands across India, with
                            many returning for repeat orders rather than placing a single one-time purchase. That same
                            standard of consistency applies to OEM and white-label orders, where it matters even more,
                            since the partner's brand reputation depends on the product performing as promised.
                        </p>
                        <p class="cs_body_18">
                            Our OEM and white-label manufacturing approach gives energy brands greater control over how
                            their solar products reach the market. We support partner-specific requirements while
                            maintaining consistent manufacturing and quality standards across every order.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-100">
            <div class="container">
                <div class="cs_section_header animation-top text-center mb-lg-5">
                    <h2 class="head2">Quality Assurance & Testing</h2>
                    <p class="mt-3 text-center mx-auto mb-0">
                        Modules manufactured for a white-label or OEM partner go through the same testing process as
                        modules sold under the Contendre Solar brand.
                    </p>
                </div>

                <div class="row align-items-center g-5">

                    <div class="col-lg-6">
                        <img src="{{ asset('public/front/images/channel_sales/Quality-Assurance-Testing.webp') }}"
                            alt="Government Subsidy Benefits for Solar Dealers" class="img-fluid">
                    </div>


                    <div class="col-lg-6">

                        <ul class="fs-6">
                            <li class="mb-3">Cell stringing and lamination monitored at every stage of production
                            </li>
                            <li class="mb-3">Electroluminescence (EL) inspection to detect microcracks and cell
                                defects</li>
                            <li class="mb-3">IV curve testing to verify actual power output against the rated
                                specification</li>
                            <li class="mb-3">A final quality check before packaging, to confirm the shipment matches
                                the order</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="cs_sustainability_banner position-relative text-center text-white mt-5"
            style="background: linear-gradient(180deg, rgba(17, 17, 17, 0.8) 70%, rgba(17, 17, 17, 0.75) 100%), url('{{ asset('public/front/images/epc/Why-Global-Brands-Trust.webp') }}') center/cover no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto text-center">
                        <h2 class="head_white animation-top cs_banner_title mx-auto" style="max-width: 900px;">
                            Why Global Brands Trust Contendre Solar?
                        </h2>
                        <p class="cs_banner_desc mx-auto animation-bottom">
                            Global brands trust Contendre Solar for a simple reason: what leaves our facility doesn't
                            vary from batch to batch. With N-Type and P-Type production built in-house and backed by the
                            wider Contendre Group, that consistency isn't a promise; it's built into how every order is
                            manufactured. For a <b>white label solar company</b> evaluating long-term manufacturing
                            partners, that's worth more than any single specification.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-100">
            <div class="container">
                <div class="cs_section_header animation-top text-center mb-lg-5">
                    <h2 class="head2">Who Can Benefit from White Label Manufacturing?</h2>
                    <p class="mt-3 text-center mx-auto mb-0">
                        White label and OEM manufacturing work well for a range of businesses, not just large-scale
                        distributors. Whether you're building a new brand or extending an existing one, the model adapts
                        to different scales and market positions.
                    </p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="cs_why_card_item h-100">
                            <div class="cs_card_icon_wrap mb-3">
                                <img src="{{ asset('public/front/images/epc/Distributors.webp') }}" alt="Consistency"
                                    class="img-fluid" style="max-height: 60px;">
                            </div>
                            <div>
                                <h3 class="cs_h3">Distributors</h3>
                                <p class="cs_body_18">Build a branded solar product line without the cost of owning a
                                    manufacturing facility. Your brand grows in the market while the manufacturing
                                    responsibility stays with us.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="cs_why_card_item h-100">
                            <div class="cs_card_icon_wrap mb-3">
                                <img src="{{ asset('public/front/images/epc/EPC-Companies.webp') }}" alt="Technology"
                                    class="img-fluid" style="max-height: 60px;">
                            </div>
                            <div>
                                <h3 class="cs_h3">EPC Companies</h3>
                                <p class="cs_body_18">Get module supply under your own brand for every project you
                                    execute. Consistent quality across projects strengthens your reputation with
                                    clients.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="cs_why_card_item h-100">
                            <div class="cs_card_icon_wrap mb-3">
                                <img src="{{ asset('public/front/images/epc/Energy-Brands.webp') }}" alt="Compliance"
                                    class="img-fluid" style="max-height: 60px;">
                            </div>
                            <div>
                                <h3 class="cs_h3">Energy Brands</h3>
                                <p class="cs_body_18">Extend into branded solar modules, including brands already
                                    established in categories like <b>solar inverter OEM.</b> It's the next step for
                                    brands already known in adjacent solar categories.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="cs_why_card_item h-100">
                            <div class="cs_card_icon_wrap mb-3">
                                <img src="{{ asset('public/front/images/epc/Regional-Newer-Solar-Brands.webp') }}"
                                    alt="Conditions" class="img-fluid" style="max-height: 60px;">
                            </div>
                            <div>
                                <h3 class="cs_h3">Regional & Newer Solar Brands</h3>
                                <p class="cs_body_18">Enter new markets with export-ready, compliant modules from your
                                    first shipment. Build your market presence without having to figure out compliance
                                    along the way.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="cs_why_card_item h-100">
                            <div class="cs_card_icon_wrap mb-3">
                                <img src="{{ asset('public/front/images/epc/Trading-Export-Companies.webp') }}"
                                    alt="Technical Support" class="img-fluid" style="max-height: 60px;">
                            </div>
                            <div>
                                <h3 class="cs_h3">Trading & Export Companies</h3>
                                <p class="cs_body_18">Source a reliable <b>solar module OEM manufacturer</b> for
                                    resale. Reliable supply means fewer disruptions to the orders you commit to your
                                    buyers.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="cs_dealership_banner position-relative text-center text-white mt-5 "
            style="background: linear-gradient(180deg, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.8) 100%), url('{{ asset('public/front/images/epc/white-label-CTA.webp') }}') center/cover no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto text-center">
                        <span class="cs_banner_tag animation-top" style="text-transform: capitalize;">Partner With
                            Contendre Solar</span>
                        <h2 class="head_white animation-top cs_banner_title">Ready to Scale Your Solar Business?</h2>
                        <p class="cs_banner_desc mx-auto animation-bottom">
                            Whether you're a distributor, EPC, or energy brand, OEM manufacturing gives you a branded
                            product line without the capital investment.
                        </p>
                        <p class="cs_banner_desc mx-auto animation-bottom">
                            <b>Your brand has potential. Let's manufacture it right.</b>
                        </p>
                        <div class="mt-4">
                            <a class="coman_btn animation-bottom" data-bs-toggle="modal"
                                data-bs-target="#applymodal">
                                Start Your OEM Partnership With Contendre Solar
                                <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                            </a>
                        </div>
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
                                <h5 class="sub_head" data-bs-toggle="collapse" data-bs-target="#collapseEpc0"
                                    aria-expanded="true" aria-controls="collapseEpc0">
                                    What is the difference between OEM and white-label solar manufacturing?
                                </h5>
                                <div id="collapseEpc0" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionEpc">
                                    <div class="pt-2">
                                        With OEM manufacturing, Contendre builds modules to your specification, and you
                                        may use them as part of a larger branded system. With white-label manufacturing,
                                        the finished module carries your brand entirely, with no reference to Contendre
                                        as the manufacturer.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="according_main mb-4">
                                <h5 class="sub_head collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEpc1" aria-expanded="false"
                                    aria-controls="collapseEpc1">
                                    What is your minimum order quantity (MOQ) for OEM orders?

                                </h5>
                                <div id="collapseEpc1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionEpc">
                                    <div class="pt-2">
                                        Our MOQ for OEM orders starts at …. This can vary based on module specification
                                        and customization requirements. Share your expected order volume with our team
                                        for exact confirmation.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="according_main mb-4">
                                <h5 class="sub_head collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEpc2" aria-expanded="false"
                                    aria-controls="collapseEpc2">
                                    Can panel specifications be customized for our target market's regulations?
                                </h5>
                                <div id="collapseEpc2" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionEpc">
                                    <div class="pt-2">
                                        Yes. Wattage, cell technology, frame and glass configuration, and certification
                                        documentation can be adjusted to meet your target market's regulatory and
                                        climate requirements.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="according_main mb-4">
                                <h5 class="sub_head collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEpc3" aria-expanded="false"
                                    aria-controls="collapseEpc3">
                                    Does Contendre Solar provide branded packaging and documentation?
                                </h5>
                                <div id="collapseEpc3" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionEpc">
                                    <div class="pt-2">
                                        Yes. Packaging, datasheets, certificates, and warranty documents are issued
                                        under your brand identity as part of the white-label agreement.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="according_main mb-4">
                                <h5 class="sub_head collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEpc4" aria-expanded="false"
                                    aria-controls="collapseEpc4">
                                    Which countries do you currently export to?
                                </h5>
                                <div id="collapseEpc4" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionEpc">
                                    <div class="pt-2">
                                        Contendre Solar currently exports to ... Share your target market with our team
                                        to confirm current export capability and compliance requirements.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="according_main mb-4">
                                <h5 class="sub_head collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEpc5" aria-expanded="false"
                                    aria-controls="collapseEpc5">
                                    What is your typical lead time for OEM/white-label orders?
                                </h5>
                                <div id="collapseEpc5" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionEpc">
                                    <div class="pt-2">
                                        Typical lead time for OEM and white-label orders is …, depending on order volume
                                        and customization requirements. Exact timelines are confirmed once your order
                                        specifications are finalized.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>





        @include('layouts.partnerform')
        @include('layouts.frontfooter')
