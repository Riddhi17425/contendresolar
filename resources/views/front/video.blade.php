@include('layouts.frontheader')
@include('layouts.hero_section' , ['pageName' => 'Videos']) 


<section class="mt-100">
    <div class="container">
        <div class="row g-lg-5">
            @foreach ($videos as $video)
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="vid_wrapper">

                        @if($video->video_source == 'youtube')
                            {{-- ✅ YouTube Video --}}
                            <div class="vid_wrapper_child">
                                
                                 <img src="{{ $video->thumnail_image 
                                    ? asset('/' . $video->thumnail_image) 
                                    : 'https://img.youtube.com/vi/' . \Illuminate\Support\Str::afterLast($video->video, 'v=') . '/hqdefault.jpg' }}" 
                                    alt="{{ $video->video_title }}" 
                                    class="img-fluid">
                                    
                               <a href="{{ $video->video }}" data-fancybox="video-gallery">
                                <svg width="70" height="50" viewBox="0 0 70 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="19.5977" y="9.91992" width="30.1" height="30.1" fill="white"/>
                                <path d="M68.5339 8.36211C67.7289 5.33169 65.3576 2.94294 62.3447 2.13211C56.8876 0.66211 34.998 0.662109 34.998 0.662109C34.998 0.662109 13.1085 0.66211 7.64846 2.13211C4.63846 2.94294 2.26721 5.32878 1.46221 8.36211C-0.00195312 13.8571 -0.00195312 25.3196 -0.00195312 25.3196C-0.00195312 25.3196 -0.00195312 36.7821 1.46221 42.2771C2.26721 45.3075 4.63846 47.6963 7.65138 48.5071C13.1085 49.9771 34.998 49.9771 34.998 49.9771C34.998 49.9771 56.8876 49.9771 62.3476 48.5071C65.3576 47.6963 67.7289 45.3104 68.5368 42.2771C69.998 36.7821 69.998 25.3196 69.998 25.3196C69.998 25.3196 69.998 13.8571 68.5339 8.36211ZM27.8405 35.7292V14.91L46.1339 25.3196L27.8405 35.7292Z" fill="#F16F24"/>
                              </svg>
                              </a>
                            </div>

                        @elseif($video->video_source == 'upload')
                            {{-- ✅ Uploaded Video --}}
                            <div class="vid_wrapper_child">
                                
                                 <img src="{{ $video->thumnail_image 
                                    ? asset('/' . $video->thumnail_image) 
                                    : 'https://img.youtube.com/vi/' . \Illuminate\Support\Str::afterLast($video->video, 'v=') . '/hqdefault.jpg' }}" 
                                    alt="{{ $video->video_title }}" 
                                    class="img-fluid">
                                    
                               <a href="{{ $video->video }}" data-fancybox="video-gallery">
                                <svg width="70" height="50" viewBox="0 0 70 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="19.5977" y="9.91992" width="30.1" height="30.1" fill="white"/>
                                <path d="M68.5339 8.36211C67.7289 5.33169 65.3576 2.94294 62.3447 2.13211C56.8876 0.66211 34.998 0.662109 34.998 0.662109C34.998 0.662109 13.1085 0.66211 7.64846 2.13211C4.63846 2.94294 2.26721 5.32878 1.46221 8.36211C-0.00195312 13.8571 -0.00195312 25.3196 -0.00195312 25.3196C-0.00195312 25.3196 -0.00195312 36.7821 1.46221 42.2771C2.26721 45.3075 4.63846 47.6963 7.65138 48.5071C13.1085 49.9771 34.998 49.9771 34.998 49.9771C34.998 49.9771 56.8876 49.9771 62.3476 48.5071C65.3576 47.6963 67.7289 45.3104 68.5368 42.2771C69.998 36.7821 69.998 25.3196 69.998 25.3196C69.998 25.3196 69.998 13.8571 68.5339 8.36211ZM27.8405 35.7292V14.91L46.1339 25.3196L27.8405 35.7292Z" fill="#F16F24"/>
                              </svg>
                              </a>
                            </div>
                        @endif

                        <h5 class="sub_head">{{ $video->video_title }}</h4>
                        {!! $video->video_description !!}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


@include('layouts.frontfooter')