@include('layouts.frontheader')
 @include('layouts.hero_section' , ['pageName' => 'News']) 


@foreach($news as $item)
<section class="mt-100">
    <div class="container">        
        <div class="row gy-4 gy-lg-0 gx-lg-5">
            {{-- Alternate image position (left/right) --}}
            @if($loop->iteration % 2 != 0)
                <div class="col-lg-4 mb-4">
                    <img class="img-fluid animation-zoom-in" 
                          src="{{ asset('public/news/news_front_image/'.$item->front_image) }}" 
                         alt="{{  str_replace(['-', '_'],' ', pathinfo($item->front_image, PATHINFO_FILENAME)) }}">
                </div> 
            @endif

            <div class="col-lg-8">
                <div>
                    <p class="style_head animation-top">{{ \Carbon\Carbon::parse($item->date)->format('F jS, Y') }}</p>
                    <h3 class="head fw-normal animation-top" style="color:#111;">{{ $item->title }}</h3>
                    {!! $item->short_description !!}
                </div>               
            </div>
                      

            @if($loop->iteration % 2 == 0)
                <div class="col-lg-4">
                    <img class="img-fluid animation-zoom-in" 
                         src="{{ asset('public/news/news_front_image/'.$item->front_image) }}" 
                         alt="{{  str_replace(['-', '_'],' ', pathinfo($item->front_image, PATHINFO_FILENAME)) }}">
                </div> 
            @endif
            <div class="col-lg-12">
                {!! $item->description !!}
            </div>
        </div>
    </div>
</section>
<div class="mt-100">
   <div class="container">
        <hr>
   </div>
</div>
@endforeach
@include('layouts.frontfooter')