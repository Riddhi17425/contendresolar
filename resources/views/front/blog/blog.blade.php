@include('layouts.frontheader')
@include('layouts.hero_section' , ['pageName' => 'Blog'])

<section class="blog-wrap mt-100">
    <div class="container">
        <div class="row" id="blogContainer">
            @foreach($blogs as $key => $item)
                <div class="col-lg-4 mb-4 blog-item" 
                     style="{{ $key >= 6 ? 'display:none;' : '' }}">
                    <div class="blog-box">
                        <img src="{{ asset('public/blogs/blog_front_image/' .$item->front_image) }}" 
                             alt="{{  str_replace(['-', '_'],' ', pathinfo($item->front_image, PATHINFO_FILENAME)) }}" 
                             class="img-fluid w-100">
                        <p class="blog-date">
                            <em>{{ \Carbon\Carbon::parse($item->date)->format('F jS, Y') }}</em>
                        </p>
                        <div class="blog-link">
                            <a href="{{ $item->url ? route('front.blog.details', ['url' => $item->url]) : '#' }}">
                                <h3 class="blog-list-title">{{ $item->title }}</h3>
                            </a>
                            <a class="coman_btn" 
                               href="{{ $item->url ? route('front.blog.details', ['url' => $item->url]) : '#' }}">
                               <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div id="loadMore" style="text-align:center; padding:20px; display:none;">
            Loading...
        </div>

        <div id="noMore" style="text-align:center; padding:20px; display:none; font-weight:bold;">
            No more Blogs Found!
        </div>
    </div>
</section>

@include('layouts.frontfooter')

<script>
document.addEventListener("DOMContentLoaded", function() {
    const blogs = document.querySelectorAll('.blog-item');
    const loadMoreDiv = document.getElementById('loadMore');
    const noMoreDiv = document.getElementById('noMore');
    let shown = 6; // Initially show 6 blogs
    const increment = 3; // Blogs to show per scroll

    function showMoreBlogs() {
        if(shown >= blogs.length){
            noMoreDiv.style.display = 'block'; // Show "No more blogs"
            return;
        }

        // Show loading indicator
        loadMoreDiv.style.display = 'block';

        setTimeout(() => {
            let end = shown + increment;
            for(let i = shown; i < end && i < blogs.length; i++){
                blogs[i].style.display = 'block';
                blogs[i].style.opacity = 0;
                blogs[i].style.transform = 'translateY(50px)';
                blogs[i].style.transition = 'all 0.5s ease';

                setTimeout(() => {
                    blogs[i].style.opacity = 1;
                    blogs[i].style.transform = 'translateY(0)';
                }, 50);
            }
            shown += increment;
            loadMoreDiv.style.display = 'none';

            if(shown >= blogs.length){
                noMoreDiv.style.display = 'block';
            }
        }, 500); // Simulate loading delay
    }

    window.addEventListener('scroll', () => {
        // Trigger load when user scrolls near bottom
        if(window.innerHeight + window.scrollY >= document.body.offsetHeight - 100){
            showMoreBlogs();
        }
    });
});
</script>
