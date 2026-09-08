<!DOCTYPE html>
<html lang="en">

<head>
            <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-T8V92HQ');</script>
        <!-- End Google Tag Manager -->
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Contendre-Solar</title> -->
    <title>{!! $title ?? $metatitle ?? '' !!}</title>
    <meta name="description" content="{{ strip_tags($description ?? $metadescription ?? '') }}">
    <meta name="base-url" content="{{ url('/') }}">

    <link rel="canonical" href="{{ url()->current() }}" />

    <!-- Favicon (ICO format, best for all browsers) -->
    <!--<link rel="icon" href="https://contendresolar.com/public/front/images/favicon-icon.png" type="image/png">-->
    
    <link rel="icon" href="https://contendresolar.com/public/front/images/favicon-icon.ico" sizes="any">
 
    <!-- Preconnect to external domains -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net"> 

    <!-- Bootstrap CSS --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Google Fonts --> 
  
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />

    <!-- Remix Icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('public/front/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front/css/responsive.css') }}">
    
    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '852829446004652');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=852829446004652&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
    
    
<script type=application/ld+json>{
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "Contendre Solar",
    "url": "https://contendresolar.com/",
    "logo": "https://contendresolar.com/public/front/images/logo-header.svg"    ,
    "image": "https://contendresolar.com/public/front/images/banner_hero.png",
    "description": "Contendre Solar is a leading solar panel manufacturer in India, offering high-efficiency solar solutions for residential, commercial, and industrial needs.",
    "priceRange": "INR",
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.1",
        "reviewCount": "13"
    },
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "Unit I/6, Rajlakshmi Hi-Tech Park, Sonale Village",
        "addressLocality": "Bhiwandi",
        "addressRegion": "Maharashtra",
        "postalCode": "421302",
        "addressCountry": "IN"
    },
    "telephone": "+918928731268",
    "geo": {
        "@type": "GeoCoordinates",
        "latitude": "19.28720603666156",
        "longitude": "73.11082067301707"
    },
    "openingHours": "Mo, Tu, We, Th, Fr, Sa, Su 08:00 - 20:00",
    "contactPoint": [
        {
            "@type": "ContactPoint",
            "telephone": "+918928731268",
            "contactType": "customer support",
            "areaServed": ["IN"],
            "availableLanguage": ["English"]
        },
        {
            "@type": "ContactPoint",
            "telephone": "+918928731268",
            "contactType": "technical support",
            "areaServed": ["IN"],
            "availableLanguage": ["English"]
        }
    ],
    "sameAs": [
        "https://www.facebook.com/contendregreenenergy",
        "https://www.instagram.com/contendresolar/",
        "https://www.linkedin.com/company/contendresolar",
        "https://pinterest.com/contendresolar/",
        "https://www.youtube.com/@contendresolar1528"
    ]
}</script> 
<script type=application/ld+json>{
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "Contendre Solar",
    "alternateName": "Solar Panel Manufacturer in India | Contendre Solar",
    "url": "https://contendresolar.com/"
}</script>



</head>


<!--@include('layouts.loader')-->

@php
    $isWhiteHeader = request()->is('channel-sales*', 'epc*', 'solar-developer*');
@endphp

<header id="header" class="{{ $isWhiteHeader ? 'cs_white_header' : '' }}">
    <div class="container">
        <div class="header">
            <div>
                <a href="{{ url('/') }}"><img class="img-fluid header-logo" src="{{ asset($isWhiteHeader ? 'public/front/images/logo-header-dark.svg' : 'public/front/images/logo-header.svg') }}" alt="logo"></a>
            </div>
            <nav class="nav">
                <div class="nav-itm">
                    <div id="google_translate_element" class="custom-select">
                <span class="icon">
                    <img src="{{ asset('public/front/images/langu.svg') }}" alt="lan">
                </span>
            </div>
                    <div>
                        <a class=" coman_down" href="{{ route('downloads') }}">Downloads <img src="{{ asset('public/front/images/down-arrow.svg') }}" alt="arrow"></a>
                    </div>
                    <div>
                        <a class="coman_btn" href="{{ route('contact.us') }}">Contact Us <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow"></a>
                    </div>
                </div>

                <div class="nav-item dropdown dropdown-mega">
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="dropdown">
                        <span class="icon-bar top-bar"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                    </button>
                    <div class="dropdown-menu mega-menu">
                        <div class="container">
                            <div class="mega_menu_child">

                                <div class="nav-itm_1">
                                    <div class="row">
                                        <!-- Quick Links & Resources -->
                                        <div class="col-lg-4 col-md-6">
                                            <div class="ft_left">
                                                <p class="sub_head">Company</p>
                                                <ul class="ft_menu">
                                                    <li><a href="{{ route('overview') }}">Overview</a></li>
                                                    <li><a href="{{ route('solar.panel.manufacturer') }}">Solar Panel Manufacturer</a></li>
                                                    <li><a href="{{ route('milestone') }}">Milestones</a></li>
                                                    <li><a href="{{ route('clientele') }}">Clientele</a></li>
                                                </ul>
                                                <hr>
                                                <p class="sub_head">Solutions</p>
                                                <ul class="ft_menu">
                                                    <li><a href="{{ route('solar.panel.for.home') }}">Solar Panel For Home</a></li>
                                                    <li><a href="{{ route('commercial.and.industrial.solar') }}">Commercial & Industrial Solar Panels</a></li>
                                                    <li><a href="{{ route('utility.scale') }}">Utility Scale</a></li>
                                                    <li><a href="{{ route('bipv.solution') }}">BIPV Solution</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Company & Contender Ally Program -->
                                        <div class="col-lg-4 col-md-6">
                                            <div class="ft_left">
                                                <hr class=" d-lg-none">
                                                <p class="sub_head">Resources</p>
                                                <ul class="ft_menu">
                                                    {{-- <li><a href="javascript:void(0);">Case Studies & Installations</a></li> --}}
                                                    <li><a href="{{ route('front.blog') }}">Blog</a></li>
                                                    <li><a href="{{ route('news') }}">News</a></li>
                                                    <li><a href="{{ route('front.video') }}">Videos</a></li>
                                                </ul> 
                                                <hr>
                                                <p class="sub_head">Contendre Ally Program</p>
                                                <ul class="ft_menu">
                                                    <li><a href="{{ route('product.ally') }}">Product Ally Program</a></li>
                                                    <li><a href="{{ route('project.ally') }}">Project Ally Program</a></li>
                                                    <li><a href="{{ route('locater.ally') }}">Ally Locator</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        {{-- <!-- Solutions & Solar Store -->
                                        <div class="col-lg-4 col-md-6">
                                            <div class="ft_left">
                                                <hr class="d-lg-none">
                                                <p class="sub_head">Solar Store</p>
                                                <ul class="ft_menu">
                                                    <li><a href="{{ route('n.type') }}">N - Type TOPCON</a></li>
                                                    <li><a href="{{ route('p.type') }}">P - Type PERC</a></li>
                                                </ul>
                                                <!-- <hr> -->
                                                <!-- <h6 class="sub_head">Solar Store</h6> 
                                                    <ul class="ft_menu">
                                                        <li><a href="javascript:void(0);">N - Type TOPCON</a></li>
                                                        <li><a href="javascript:void(0);">P - Type PERC</a></li>
                                                    </ul> -->
                                            </div>
                                        </div> --}}
                                        <!-- Solutions & Solar Store -->
                                        @php
                                            use App\Models\Product;
                                            $headerProducts = Product::where('status', 'Active')->get();
                                        @endphp
 
                                        <div class="col-lg-4 col-md-6">
                                            <div class="ft_left">
                                                <hr class="d-lg-none">
                                                <p class="sub_head">Solar Store</p>
                                                <ul class="ft_menu">
                                                    @foreach($headerProducts as $product)
                                                        <li>
                                                            <a href="{{ url('product/' . $product->url) }}">
                                                                {{ $product->title }}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="nav-itm_2">
                                    <div class="d-flex gap-2 align-items-center">
                                        <span> <a class="coman_down" href="{{ route('downloads') }}">Downloads <img src="{{ asset('public/front/images/down-arrow.svg') }}"
                                                    alt="arrow"></a></span>
                                        <span><a class="coman_btn" href="{{ route('contact.us') }}">Contact Us <img src="{{ asset('public/front/images/arrow.svg') }}"
                                                    alt="arrow"></a></span>
                                                             
                                        <div>
                                            <span>
                                                <img src="{{ asset('public/front/images/langu.svg') }}" alt="lan">
                                            </span>
                                            
                                            <!-- <select>
                                                <option value="en">EN</option>
                                                <option value="en">EN</option>
                                                <option value="en">EN</option>
                                            </select> -->
                                            <div id="google_translate_element" class="custom-select">
                                                <span class="icon">
                                                    <img src="{{ asset('public/front/images/langu.svg') }}" alt="lan">
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </nav>
        </div>
    </div>
</header>


<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T8V92HQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en'
        }, 'google_translate_element');
    }

    function toggleGoogleTranslate() {
        var translateElement = document.getElementById("google_translate_element");
        if (translateElement.style.display === "none") {
            translateElement.style.display = "block";
        } else {
            translateElement.style.display = "none";
        }
    }
</script>



<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<style>
    .suggestions-box {
    border: 1px solid #ccc;
    display: none;
    position: absolute;
    background: #fff;
    z-index: 999;
    width: 100%;
    }
    .suggestions-box div {
        padding: 8px;
        cursor: pointer;
    }
    .suggestions-box div:hover {
        background-color: #f0f0f0;
    }
        .goog-te-gadget-simple {
            border: none !important; 
            background: none !important; 
            padding: 0 !important; 
            font-family: "Glacial Indifference", sans-serif;
        }
        .goog-te-gadget-icon {
            display: none !important; 
        }
        .goog-te-gadget-simple span {
            border-left: none !important;
            font-family: inherit !important;
            color: var(--gray) !important;
            font-size: 16px !important;
        }
        .lang-select {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .custom-select {
        display: flex;
        gap: 8px;
        cursor: pointer;
    }

    .goog-te-combo {
        border: none;
        background: transparent;
        outline: none;
        color: #000;
        font-weight: 500;
        cursor: pointer;
      
    }
</style>
<style>

        .goog-te-gadget {
           
            font-size: 0px;
                height: 0;
        }

        .goog-te-gadget span
        {
            display:none;
        }
        .goog-te-gadget-simple {
            border: none !important; 
            background: none !important; 
            padding: 0 !important; 
            font-family: "Glacial Indifference", sans-serif;
        }
        .goog-te-gadget-icon {
            display: none !important; 
        }
        .goog-te-gadget-simple span {
            border-left: none !important;
            font-family: inherit !important;
            color: var(--gray) !important;
            font-size: 14px !important;
        }
        .lang-select {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* .custom-select {
        display: flex;
        align-items: center;
        gap: 8px;
        background-color: #fff;
        border: 2px solid #D9D9D9;
        border-radius: 25px;
        padding: 8px 15px;
        cursor: pointer;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    } */

    .custom-select:hover {
        border-color: #A8964E;
    }

    .custom-select .icon svg {
        stroke: #A8964E;
    }

    .goog-te-combo {
        border: none;
        background: transparent;
        outline: none;
        color: #000;
        font-weight: 500;
        cursor: pointer;
        max-width:20px;
        padding:0!important;
    }
    
    .menu_flex {
    align-items: normal;
}
</style>

