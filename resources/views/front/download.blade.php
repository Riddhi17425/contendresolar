@include('layouts.frontheader')
@include('layouts.hero_section', ['pageName' => 'Downloads'])
<section class="mt-100" id="resources-section">
    <div class="container">
        <div class="mb-xxl-5 text-center">
            <h3 class="style_head">Brochures, Certificates & More</h3>
            <h2 class="head2">Resources & Downloads</h2>
        </div>
        <div class="animation-bottom">
            <ul class="nav nav-pills  downloads-pills mb-3" id="downloadTabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="pill" href="#all">All</a>
                </li>
                @foreach ($categories as $category)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link "  data-bs-toggle="pill"  href="#{{ $category->url }}" type="button" role="tab"  aria-selected="true">{{ $category->name }}</button>
                    </li>
                    
                @endforeach
            </ul>
            
            <div class="tab-content mt-3">
    <!-- All Tab -->
    <div class="tab-pane fade show active" id="all">
        @foreach ($downloads as $item)
            <div class="downloads_wrap">
                <div class="downloads_img">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="67" height="67" viewBox="0 0 67 67" fill="none">
                        <rect x="0.5" y="0.565674" width="65.8685" height="65.8685" stroke="#A8AE85" />
                        <path d="M28.6904 9.00001C39.0049 9.00001 38.7143 8.99112 39.7363 9.50685C40.4019 9.84433 40.5245 9.95719 45.625 14.7764C50.482 19.3802 50.8575 19.7832 51.3076 20.8897L51.5234 21.4238L51.5508 37.084C51.5695 52.4522 51.5698 52.7524 51.3916 53.3526C50.8946 54.984 49.6659 56.2314 48.0156 56.794L47.3975 57H19.1729L18.5537 56.794C16.9128 56.2313 15.6845 54.9929 15.1875 53.3613C15.0001 52.7802 15 52.3819 15 33.0049C15 13.623 15 13.2288 15.1875 12.6475C15.6845 11.016 16.9129 9.77848 18.5537 9.21583L19.1729 9.00978L28.6904 9.00001ZM28.5684 11.8223C23.9644 11.8317 20.0354 11.8693 19.8291 11.8975C19.0415 12.0381 18.4788 12.4603 18.085 13.2197L17.8604 13.6416V52.3682L18.085 52.7901C18.385 53.3619 18.6197 53.6058 19.1729 53.8965L19.6416 54.1494H33.2852C46.4314 54.1494 46.938 54.1405 47.2568 53.9717C47.8569 53.6529 48.1474 53.3804 48.4287 52.874L48.71 52.3682L48.7383 37.7217L48.7568 23.0742L44.0029 23.0469L39.2393 23.0186L38.7705 22.7842C38.1704 22.4935 37.5143 21.8365 37.2236 21.2363L36.9893 20.7676L36.9609 16.2861L36.9326 11.8135L28.5684 11.8223ZM26.0645 42.7568C29.7871 42.7568 29.9656 42.7662 30.2656 42.9443C30.6875 43.2069 30.9404 43.6568 30.9404 44.1631C30.9404 44.6694 30.6875 45.1193 30.2656 45.3818C29.9656 45.56 29.7871 45.5693 26.0645 45.5693C22.4078 45.5693 22.1545 45.5604 21.9014 45.3916C21.47 45.1009 21.2822 44.7444 21.2822 44.1631C21.2822 43.5817 21.4701 43.2253 21.9014 42.9346C22.1545 42.7658 22.4078 42.7568 26.0645 42.7568ZM33.0039 35.2549C43.4566 35.2549 43.8429 35.2649 44.1055 35.4336C44.5367 35.7242 44.7245 36.0801 44.7246 36.6611C44.7246 37.2425 44.5368 37.599 44.1055 37.8897C43.8429 38.0583 43.4565 38.0684 33.0039 38.0684C22.5487 38.0684 22.1639 38.0584 21.9014 37.8897C21.4702 37.599 21.2822 37.2424 21.2822 36.6611C21.2823 36.0802 21.4703 35.7242 21.9014 35.4336C22.1639 35.2648 22.5487 35.2549 33.0039 35.2549ZM33.0039 27.7539C43.4536 27.7539 43.8429 27.7631 44.1055 27.9317C44.5368 28.2223 44.7246 28.5788 44.7246 29.1602C44.7246 29.7415 44.5368 30.098 44.1055 30.3887C43.8429 30.5572 43.4536 30.5664 33.0039 30.5664C22.5487 30.5664 22.1639 30.5575 21.9014 30.3887C21.4701 30.098 21.2822 29.7415 21.2822 29.1602C21.2822 28.5788 21.4701 28.2223 21.9014 27.9317C22.1639 27.7629 22.5487 27.7539 33.0039 27.7539ZM39.7549 16.4824C39.7549 18.2828 39.7924 19.7838 39.8486 19.915C39.9049 20.0741 40.027 20.1675 40.2422 20.2051C40.411 20.2332 42.0244 20.2428 43.8154 20.2334L47.0879 20.2051L44.0029 17.2891C42.3154 15.6859 40.6649 14.1393 40.3457 13.8389L39.7549 13.2949V16.4824Z" fill="#454545" />
                    </svg>
                </div>
                <p class="brocure-head">{{ $item->title }}</p>
                </div>
                <div>
                <a class="coman_btn  coman_down" href="{{ asset('public/download_link/' . $item->download_link) }}" target="_blank"><img src="{{ asset('public/front/images/down-arrow.svg') }}" alt="arrow">Download</a>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Category Tabs -->
    @foreach ($categories as $category)
                    <div class="tab-pane fade" id="{{ $category->url }}">
                        @php
                            $filtered = $downloads->where('download_category_id', $category->id);
                        @endphp

                        @forelse ($filtered as $item)
                            <div class="downloads_wrap">
                                <p class="brocure-head">{{ $item->title }}</p>
                                <a class="coman_btn  coman_down" href="{{ asset('public/download_link/' . $item->download_link) }}" target="_blank"><img src="{{ asset('public/front/images/down-arrow.svg') }}" alt="arrow">Download</a>
                            </div>
                        @empty
                           
                        @endforelse
                    </div>
                @endforeach
</div>
            
        </div>
    </div>
</section>
<script>
   document.addEventListener("DOMContentLoaded", function () {
    const allTabBtn = document.getElementById("pills-all-tab");
    const allTabPane = document.getElementById("pills-all");

    function loadAllContent() {
        allTabPane.innerHTML = ""; // Clear
        const otherTabs = document.querySelectorAll(".tab-pane:not(#pills-all)");
        otherTabs.forEach(tab => {
            allTabPane.innerHTML += tab.innerHTML;
        });
    }

    // Load content when clicking "All"
    allTabBtn.addEventListener("click", loadAllContent);
    loadAllContent();
});

</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Page load hone ke saath hi scroll karo
    const target = document.getElementById('resources-section');
    
    if (target) {
        // Fixed navbar/header ki height ke liye offset
        const header = document.querySelector('header, .navbar, .main-header, .fixed-top');
        const headerHeight = header ? header.offsetHeight : 100;
        const offset = target.getBoundingClientRect().top + window.pageYOffset - headerHeight - 30;

        window.scrollTo({
            top: offset,
            behavior: 'smooth'
        });
    }
});
</script>
@include('layouts.frontfooter')