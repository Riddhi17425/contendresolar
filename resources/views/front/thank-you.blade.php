@include('layouts.frontheader')
@include('layouts.hero_section' , ['pageName' => 'Thank You'])

<div class="homeowners_ser_main">
    <div class="container">
    <div class="container">
        <div class="thank_you_card text-center">
            {{-- <div class="icon_box mb-4">
                <img src="{{ asset('public/front/images/thank-you-temp.svg') }}" alt="thankyou" class="img-fluid thank_you_icon" />
            </div> --}}
            <!--<h1 class="thank_you_title">🎉 Thank You!</h1>-->
            <p class="thank_you_message">Thank you for sharing your details!.</p>
            <p class="thank_you_message mb-4">We have recieved the information. Our professional will get back to you with an update for your form submission. We look forward to great collaborations</p>
            
            <a class="coman_btn" href="{{ route('front.home') }}">Back To Home <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow"></a>
        </div>
    </div>
   </div>

@include('layouts.frontfooter')

@push('styles')
<style>
   
</style>
@endpush
