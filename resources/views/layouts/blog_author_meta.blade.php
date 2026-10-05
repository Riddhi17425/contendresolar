@php
    $variant = $variant ?? 'list';   // list | box | page

    // ===== AUTHOR DATA (sirf yahin edit karna hai) =====
    $author = [
        'name'      => 'Yash Sheth',
        'slug'      => 'yash-sheth',
        'role'      => 'Founder, Director – Strategy & Operations',
        'image'     => 'author.jpg',
        'bio'       => "A University of Florida engineering graduate with a minor in renewable energy, Yash Sheth leads Contendre Solar's operations, sales, and business strategy. With a strong focus on quality, customer service, and efficient processes, he works closely across teams to drive growth, strengthen manufacturing capabilities, and build Contendre into a leading solar manufacturer focused on quality and sustainability.",
        'expertise' => ['Solar Manufacturing', 'Business Strategy', 'Operations'],
    ];
    // ===================================================

    $authorUrl = route('front.author.details', $author['slug']);
    $authorImg = asset('public/blogs/author_image/' . $author['image']);
    $fallback  = 'https://ui-avatars.com/api/?name=' . urlencode($author['name']) . '&size=300&background=fdece0&color=F16F24';
@endphp

{{-- Author page ke liye header sabse pehle --}}
@if ($variant === 'page')
    @include('layouts.frontheader')
    @include('layouts.hero_section', ['pageName' => 'Author'])
@endif

@once
<style>
/* Blog card meta (author + date) */
.blog-meta{display:flex;align-items:center;gap:8px 10px;flex-wrap:wrap;color:#555;font-size:14px;line-height:1.2}
.blog-meta-author{display:flex;align-items:center;gap:10px;text-decoration:none}
.blog-meta-author:hover .blog-meta-name{color:#F16F24}
.blog-meta-avatar{width:35px;height:35px;border-radius:50%;object-fit:cover;flex-shrink:0;border:2px solid #fdece0;box-shadow:0 0 0 1px #F16F24}
.blog-meta-name{font-weight:600;color:#222;font-size:14px}
.blog-meta-date{white-space:nowrap;padding-left:10px;border-left:1px solid #cfcfcf;font-style:italic}
.blog-meta--list{padding:0;margin:0}

/* Blog card: upar (meta + arrow), neeche (title) */
.blog-card-top{display:flex;align-items:center;justify-content:space-between;gap:12px;padding:14px 20px 8px 24px}
.blog-card-top .blog-card-arrow{
    width:40px;height:40px;min-width:40px;flex-shrink:0;
    display:flex;align-items:center;justify-content:center;
    border-radius:50%;background:#F16F24;padding:0;margin:0;
}
.blog-card-top .blog-card-arrow img{width:16px;height:16px;object-fit:contain}
.blog-box .blog-link{display:block;padding:0 24px 24px}
.blog-box .blog-link a{text-decoration:none}
.blog-box .blog-list-title{
    margin:0;font-size:22px;line-height:1.35;
    display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;
    overflow:hidden;text-overflow:ellipsis;
}

/* Author page */
.author-profile{display:flex;gap:40px;align-items:center;background:#fff;border:1px solid #eee;border-radius:16px;padding:40px;box-shadow:0 10px 30px rgba(0,0,0,.05)}
.author-profile-img{width:220px;height:220px;border-radius:50%;object-fit:cover;border:4px solid #fdece0;box-shadow:0 0 0 2px #F16F24;flex-shrink:0}
.author-profile-name{font-size:36px;font-weight:700;margin:0 0 4px}
.author-profile-role{color:#F16F24;font-weight:600;text-transform:uppercase;letter-spacing:.5px;margin-bottom:12px}
.author-profile-meta{display:flex;gap:20px;align-items:center;margin-bottom:14px;color:#555}
.author-link{color:#F16F24;font-weight:600;text-decoration:none}
.author-profile-bio{color:#555;line-height:1.8}
.author-tags{display:flex;flex-wrap:wrap;gap:8px;margin-top:14px}
.author-tags span{background:#fdece0;color:#F16F24;padding:4px 14px;border-radius:20px;font-size:13px;font-weight:600}

@media (max-width:767px){
  .author-profile{flex-direction:column;text-align:center;padding:24px}
  .author-profile-img{width:150px;height:150px}
  .author-profile-name{font-size:28px}
  .author-profile-meta,.author-tags{justify-content:center}
}
@media (max-width:575px){
  .blog-meta{font-size:12px;gap:6px 8px}
  .blog-meta-avatar{width:28px;height:28px}
  .blog-meta-name{font-size:13px}
  .blog-card-top{padding:12px 16px 8px}
  .blog-box .blog-link{padding:0 16px 20px}
  .blog-box .blog-list-title{font-size:19px}
}
</style>
@endonce

@if ($variant === 'list')
    {{-- Blog cards: avatar + naam + date --}}
    <div class="blog-meta blog-meta--list">
        <a href="{{ $authorUrl }}" class="blog-meta-author">
            <img class="blog-meta-avatar" src="{{ $authorImg }}" alt="{{ $author['name'] }}"
                 onerror="this.onerror=null;this.src='{{ $fallback }}'">
            <span class="blog-meta-name">{{ $author['name'] }}</span>
        </a>
        <span class="blog-meta-date">{{ \Carbon\Carbon::parse($blog->date)->format('F jS, Y') }}</span>
    </div>

@elseif ($variant === 'box')
    {{-- Blog detail ke neeche author bio box --}}
    <div class="container">
        <div class="author-box" id="author-profile">
            <div class="author-avatar position-relative flex-shrink-0">
                <img class="author-avatar-img" src="{{ $authorImg }}" alt="{{ $author['name'] }}"
                     onerror="this.onerror=null;this.src='{{ $fallback }}'">
            </div>
            <div class="author-info">
                <h4 class="author-name">
                    <a href="{{ $authorUrl }}" class="text-decoration-none" style="color:inherit;">{{ $author['name'] }}</a>
                </h4>
                <p class="author-role">{{ $author['role'] }}</p>
                <p class="author-bio">{{ $author['bio'] }}</p>
                <a href="{{ $authorUrl }}" class="author-link">View Profile →</a>
            </div>
        </div>
    </div>

@else
    {{-- Poora author page --}}
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'ProfilePage',
        'mainEntity' => [
            '@type' => 'Person',
            'name' => $author['name'],
            'jobTitle' => $author['role'],
            'image' => $authorImg,
            'url' => $authorUrl,
            'knowsAbout' => $author['expertise'],
            'worksFor' => ['@type' => 'Organization', 'name' => 'Contendre Solar'],
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>

    <section class="author-page mt-100">
        <div class="container">
            <div class="author-profile">
                <img class="author-profile-img" src="{{ $authorImg }}" alt="{{ $author['name'] }}"
                     onerror="this.onerror=null;this.src='{{ $fallback }}'">
                <div>
                    <h1 class="author-profile-name">{{ $author['name'] }}</h1>
                    <p class="author-profile-role">{{ $author['role'] }}</p>
                    <div class="author-profile-meta">
                        <span><strong>{{ $blogs->count() }}</strong> Articles</span>
                    </div>
                    <p class="author-profile-bio">{{ $author['bio'] }}</p>
                    <div class="author-tags">
                        @foreach ($author['expertise'] as $tag)
                            <span>{{ $tag }}</span>
                        @endforeach
                    </div>
                </div>
            </div>

            <h2 class="head2 text-center mt-5 mb-4">Articles by {{ $author['name'] }}</h2>
            <div class="row">
                @foreach ($blogs as $item)
                    @php $blogLink = route('front.blog.details', ['url' => $item->url]); @endphp
                    <div class="col-lg-4 mb-4">
                        <div class="blog-box">
                            <img src="{{ asset('public/blogs/blog_front_image/' . $item->front_image) }}"
                                 alt="{{ str_replace(['-', '_'], ' ', pathinfo($item->front_image, PATHINFO_FILENAME)) }}"
                                 class="img-fluid w-100">

                            <div class="blog-card-top">
                                @include('layouts.blog_author_meta', ['blog' => $item, 'variant' => 'list'])
                                <a class="coman_btn blog-card-arrow" href="{{ $blogLink }}" aria-label="Read {{ $item->title }}">
                                    <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                                </a>
                            </div>

                            <div class="blog-link">
                                <a href="{{ $blogLink }}">
                                    <h3 class="blog-list-title" title="{{ $item->title }}">{{ $item->title }}</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @include('layouts.frontfooter')
@endif