@include('layouts.frontheader')
 @include('layouts.hero_section' , ['pageName' => 'Contendre-ally']) 

<div class="text-center">
     <a class="coman_btn border-0" type="submit" href="{{ route('distributor') }}">Apply Now <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow"></a>
</div>  
<section class="mt-100">
    <div class="container">        
        <div class="row align-items-center gx-lg-5">
            <div class="col-lg-6">
                <div>
                    <p class="style_head animation-top">Join Our Network</p>
                    <h2 class="head2 animation-top">Lead The Solar Revolution</h2>
                    <p>Join us in driving a sustainable future. Download the application form, fill in your details on your company 
                    letterhead, and send it to us. We’ll review your submission and welcome you to the Contendre network of solar allies.
</p>                   
                    <div class="">
                        <a class="coman_btn animation-bottom" href="{{ asset('public/terms&conditions_pdf/Ally-program-terms-condition.pdf')}}" target="_blank">Terms & Conditions <img src="{{ asset('public/front/images/arrow.svg') }}"alt="arrow"></a>
                    </div>                                                                      
                </div>               
            </div>
            <div class="col-lg-6">
                <img class=" img-fluid animation-zoom-in" src="{{ asset('public/front/images/ally-locator.png') }}" alt="image">
            </div>                                                                       
        </div>
    </div>
</section>
@include('layouts.frontfooter')