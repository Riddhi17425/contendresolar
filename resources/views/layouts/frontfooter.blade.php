<footer class="footer">

    <div class="container">

        <div class="footer_top">

            <div class="row">

                <!-- Company Info -->

                <div class="col-lg-3 col-md-6 mb-5 mb-lg-auto">

                    <a href="{{ url('/') }}"><img src="{{ asset('public/front/images/footer-logo.svg') }}" alt="logo" class="footer-logo"></a>

                    <p class="my-4">Our mission is to create a world without waste, shaping it with the power of green energy.</p>



                    <!-- social media -->

                    <div class="ft_social">

                        <a href="https://www.linkedin.com/company/14732185/admin/dashboard/" target="_blank"> <img src="{{ asset('public/front/images/linkedin.svg') }}" alt="linkedin"></a>

                        <!--<a href="javascript:void(0);"> <img src="{{ asset('public/front/images/twitter.svg') }}" alt="twitter"></a>-->

                        <a href="https://www.facebook.com/ContendreGreenergyLimited/" target="_blank"> <img src="{{ asset('public/front/images/facebook.svg') }}" alt="facebook"></a>

                        <a href="https://www.instagram.com/contendresolar/" target="_blank"> <img src="{{ asset('public/front/images/instagram.svg') }}" alt="instagram"></a>

                    </div>

                </div>



                <!-- Quick Links & Resources -->

                <div class="col-lg-3 col-md-6 ">

                    <div class="ft_left">

                        <h6 class="sub_head ">Quick Links</h6>

                        <ul class="ft_menu">

                            <li><a href="{{ url('/') }}">Home</a></li>

                            <li><a href="{{ route('sustainability') }}">About Solar</a></li>

                            <li><a href="{{ route('career') }}">Career</a></li>

                        </ul>

                        <hr>

                        <h6 class="sub_head">Resources</h6>

                        <ul class="ft_menu">

                            {{-- <li><a href="javascript:void(0);">Case Studies & Installations</a></li> --}}

                            <li><a href="{{ route('front.blog') }}">Blog</a></li>

                            <li><a href="{{ route('news') }}">News</a></li>

                            <li><a href="{{ route('front.video') }}">Videos</a></li>

                        </ul>

                    </div>

                </div>



                <!-- Company & Contender Ally Program -->

                <div class="col-lg-3 col-md-6">

                    <div class="ft_left">

                        <hr class=" d-lg-none">

                        <h6 class="sub_head">Company</h6>

                        <ul class="ft_menu">

                            <li><a href="{{ route('overview') }}">Overview</a></li>

                            <li><a href="{{ route('solar.panel.manufacturer') }}">Solar Panel Manufacturer</a></li>

                            <li><a href="{{ route('milestone') }}">Milestones</a></li>

                            <li><a href="{{ route('clientele') }}">Clientele</a></li>

                        </ul>

                        <hr>

                        <h6 class="sub_head">Contendre Ally Program</h6>

                        <ul class="ft_menu">

                            <li><a href="{{ route('product.ally') }}">Product Ally Program</a></li>

                            <li><a href="{{ route('project.ally') }}">Project Ally Program</a></li>

                            <li><a href="{{ route('locater.ally') }}">Ally Locator</a></li>

                        </ul>

                    </div>

                </div>



                <!-- Solutions & Solar Store -->

                <div class="col-lg-3 col-md-6">

                    <div class="ft_left">

                        <hr class="d-lg-none">

                        <h6 class="sub_head">Solutions</h6>

                        <ul class="ft_menu">

                            <li><a href="{{ route('solar.panel.for.home') }}">Solar Panel For Home</a></li>

                            <li><a href="{{ route('commercial.and.industrial.solar') }}">Commercial & Industrial Solar Panels</a></li>

                            <li><a href="{{ route('utility.scale') }}">Utility Scale</a></li>

                            <li><a href="{{ route('bipv.solution') }}">BIPV Solution</a></li>

                        </ul>

                        <hr>

                        <h6 class="sub_head">Solar Store</h6>

                        <ul class="ft_menu">

                            @php

                                use App\Models\Product;

                                $products = Product::select('id','title','url')->where('status','Active')->get();

                            @endphp



                            @foreach($products as $product)

                                <li>

                                    <a href="{{ route('n.type', $product->url) }}">

                                        {{ $product->title }}

                                    </a>

                                </li>

                            @endforeach

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Footer Bottom -->

    <div class="container">

        <div class="ym_cpy">

            <a href="{{ route('privacy.policy') }}">Privacy Policy</a>

            <p class="mb-0">© <span id="currentYear"></span> Contendre Solar, Inc. All Rights Reserved.</p>

            <a href="{{ route('terms.of.use') }}">Terms & Conditions</a>

        </div>

    </div>

</footer>



<!-- Modal -->

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"

    aria-labelledby="staticBackdropLabel" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-lg">

        <div class="modal-content">

            <div class="modal-header">

                <h6 class="modal-title" id="staticBackdropLabel">Legacy of Trust, Future of Energy</h6>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>

            <div>

                <video autoplay muted loop controls con width="100%">

                    <source src="{{ asset('public/front/images/Contendre_Solar.mp4') }}"

                        type="video/mp4">

                </video>

            </div>

        </div>

    </div>

</div>

@include('layouts.whatsapp')

<!-- jquery -->

<script src="https://code.jquery.com/jquery-3.7.1.min.js"

    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<!-- bopotstrap css -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"

    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">

</script>

<script src="https://unpkg.com/scrollreveal"></script>



<!-- fancybox -->

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>



<!-- slick js -->



<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>



<!-- custom js -->

<script src="{{ asset('public/front/js/main.js') }}"></script>



<!-- scroll  -->



<script src="https://unpkg.com/scrollreveal"></script>

</body>



</html>
