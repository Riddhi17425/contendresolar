@include('layouts.frontheader')
@include('layouts.hero_section', ['pageName' => 'Blog-Details'])


<div class="homeowners_ser_main">
    <div class="container">
        <div class="homeowners_ser">
            <div>
                <p style="font-size: large;" class="mb-1">{{ \Carbon\Carbon::parse($blogs->date)->format('F jS, Y') }}
                </p>
                <h1 class="head2">{{ $blogs->title }}</h1>
            </div>
        </div>
    </div>
</div>
<section class="blog-detail-wrap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 mb-4">
                <img src="{{ asset('public/blogs/blog_detail_image/' . $blogs->detail_image) }}"
                    alt="{{ str_replace(['-', '_'], ' ', pathinfo($blogs->detail_image, PATHINFO_FILENAME)) }}"
                    class="img-fluid w-100">
            </div>
            <div class="col-lg-12">
                {!! $blogs->short_description !!}
            </div>
        </div>
        {!! $blogs->description !!}

        @if (!empty($blogs->blog_cta_image))
            <a href="{{ route('contact.us') }}" target="_blank">
                <img src="{{ asset('public/blogs/blog_cta_image/' . $blogs->blog_cta_image) }}"
                    alt="{{ str_replace(['-', '_'], ' ', pathinfo($blogs->blog_cta_image, PATHINFO_FILENAME)) }}"
                    class="img-fluid cta-img mb-3" />
            </a>
        @endif

        @if (!empty($blogs->conclusion))
            {!! $blogs->conclusion !!}
        @endif

        {{-- Author box (data layouts/blog_author_meta.blade.php se aata hai) --}}
        @include('layouts.blog_author_meta', ['variant' => 'box'])
    </div>

</section>
@if (!empty($faqs))
    <section class="faq mt-100">
        <div class="container">

            <h4 class="head2 animation-top text-center"> FAQs</h4>
            <div class="accordion" id="accordionExample">
                <div class="row">
                    @foreach ($faqs as $key => $item)
                        <div class="col-lg-6">
                            <div class="according_main">
                                <h5 class="sub_head" data-bs-toggle="collapse"
                                    data-bs-target="#collapse{{ $key }}"
                                    aria-expanded="{{ $key == 0 ? 'true' : 'false' }}"
                                    aria-controls="collapse{{ $key }}">
                                    {{ $item['title'] ?? '' }}
                                </h5>
                                <div id="collapse{{ $key }}"
                                    class="accordion-collapse collapse {{ $key == 0 ? 'show' : '' }}"
                                    data-bs-parent="#accordionExample">
                                    <div>
                                        {!! $item['description'] ?? '' !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endif

@include('layouts.frontfooter')