@php
    use App\Models\HiroSection;
    $pageName = strtolower($pageName ?? request()->path());  // fallback if not passed
    $heroSection = HiroSection::where('page_name', $pageName)->first();
@endphp

@if($heroSection)
    <section class="services_hero hero_bgimg " >
        <img class="services_hero_img img-fluid"
             src="{{ $heroSection->image ? asset('/'.$heroSection->image) : asset('public/front/images/banner/default.png') }}" loading="lazy"
             alt="{{  str_replace(['-', '_'],' ', pathinfo($heroSection->image, PATHINFO_FILENAME)) }}">

        <div class="hero_lt text-center">
            <div class="container">
                @if ($pageName == 'blog-details')
                    <p class="head_white mb-3 mb-xxl-4">{{ $heroSection->title }}</p>
                @else
                    <h3>{{ $heroSection->sub_title }}</h3>
                    <h1 class="head_white mb-3 mb-xxl-4">{{ $heroSection->title }}</h1>
                @endif
                <p class="sub_head_white">{!! $heroSection->short_description !!}</p>
                
                @php
                    $whatsappPages = ['n-type', 'p-type'];
                @endphp
                
                @if(in_array($pageName, $whatsappPages))
                    <div class="mt-4">
                        <a class="coman_btn animation-bottom" href="https://api.whatsapp.com/send?phone=91 9136457555&text=Hello" target="_blank" style="background: #29A71A;">
                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M29.3636 0H4.63636C2.07577 0 0 2.07577 0 4.63636V29.3636C0 31.9242 2.07577 34 4.63636 34H29.3636C31.9242 34 34 31.9242 34 29.3636V4.63636C34 2.07577 31.9242 0 29.3636 0Z" fill="#29A71A"/>
                                <path d="M26.3698 7.76599C24.1592 5.53341 21.2237 4.16424 18.0926 3.90545C14.9615 3.64666 11.8409 4.51528 9.29386 6.35464C6.74678 8.194 4.94084 10.883 4.20177 13.9366C3.46271 16.9903 3.83918 20.2075 5.26327 23.008L3.86534 29.7948C3.85084 29.8623 3.85043 29.9321 3.86414 29.9999C3.87785 30.0676 3.90538 30.1317 3.94502 30.1883C4.00308 30.2742 4.08597 30.3403 4.1826 30.3779C4.27924 30.4154 4.38503 30.4226 4.48584 30.3984L11.1375 28.8218C13.9301 30.2098 17.1246 30.5621 20.1525 29.8159C23.1805 29.0697 25.8455 27.2734 27.6734 24.7467C29.5013 22.22 30.3735 19.1267 30.1348 16.0173C29.8961 12.9079 28.5619 9.98406 26.3698 7.76599ZM24.2958 24.319C22.7664 25.8441 20.7969 26.8509 18.6649 27.1974C16.533 27.5439 14.346 27.2127 12.4122 26.2505L11.4851 25.7917L7.40724 26.7575L7.41931 26.7068L8.26434 22.6023L7.81044 21.7066C6.82238 19.7661 6.47383 17.5627 6.81472 15.4119C7.1556 13.2612 8.16844 11.2736 9.70814 9.73371C11.6428 7.79965 14.2664 6.71316 17.002 6.71316C19.7376 6.71316 22.3612 7.79965 24.2958 9.73371C24.3123 9.7526 24.33 9.77035 24.3489 9.78682C26.2596 11.7259 27.3262 14.3416 27.3163 17.0638C27.3063 19.7861 26.2206 22.3939 24.2958 24.319Z" fill="white"/>
                                <path d="M23.9352 21.3082C23.4354 22.0953 22.6459 23.0587 21.6536 23.2977C19.9153 23.7178 17.2474 23.3122 13.9276 20.2169L13.8866 20.1807C10.9676 17.4742 10.2095 15.2216 10.393 13.4349C10.4944 12.4209 11.3394 11.5034 12.0517 10.9047C12.1643 10.8086 12.2978 10.7401 12.4416 10.7049C12.5853 10.6696 12.7354 10.6685 12.8797 10.7015C13.024 10.7346 13.1585 10.801 13.2726 10.8954C13.3866 10.9898 13.477 11.1095 13.5365 11.2451L14.6109 13.6595C14.6807 13.816 14.7066 13.9886 14.6857 14.1588C14.6649 14.3289 14.5981 14.4902 14.4926 14.6252L13.9494 15.3302C13.8328 15.4758 13.7625 15.6529 13.7474 15.8388C13.7323 16.0247 13.7732 16.2108 13.8648 16.3732C14.1691 16.9068 14.8982 17.6915 15.707 18.4182C16.6148 19.2391 17.6216 19.99 18.259 20.2459C18.4296 20.3156 18.6171 20.3326 18.7974 20.2947C18.9777 20.2569 19.1425 20.1658 19.2706 20.0334L19.9008 19.3985C20.0224 19.2786 20.1736 19.193 20.339 19.1506C20.5044 19.1082 20.6781 19.1104 20.8424 19.157L23.3944 19.8813C23.5352 19.9245 23.6642 19.9993 23.7716 20.1C23.8791 20.2007 23.9621 20.3247 24.0142 20.4623C24.0664 20.6 24.0864 20.7478 24.0727 20.8944C24.059 21.0411 24.012 21.1826 23.9352 21.3082Z" fill="white"/>
                            </svg>
                                Get A Whatsapp Quote <img src="{{ asset('public/front/images/arrow.svg') }}"alt="arrow">
                        </a>
 
                    </div>
                     @else
                     <a class="coman_btn" href="{{ url('/contact-us') }}#contactFormSection">Contact Us <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow"></a>
                @endif
            </div>
        </div> 
    </section>

    <div class="homeowners_ser_main">
        <div class="container"> 
            <div class="homeowners_ser">
                @if($heroSection->label)
                    <h2 class="about_head">{!! $heroSection->label !!}</h2>
                @endif
               @if(!empty(trim(strip_tags($heroSection->long_description))))
                    <p>{!! $heroSection->long_description !!}</p>
                @endif
            </div>
        </div>
    </div>
@endif
