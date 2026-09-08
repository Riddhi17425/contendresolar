@include('layouts.frontheader')
@include('layouts.hero_section' , ['pageName' => 'Product-Ally'])
<section class="mt-100">
    <div class="container">        
        <div class="row align-items-center gx-lg-5">
            <div class="col-lg-6">
                <div>
                    <h3 class="style_head animation-top">Grow Your Solar Business</h3>
                    <h2 class="head2 animation-top">Join Contendre Ally Program
                    </h2>
                    <p class="animation-bottom">Step into the growing world of renewable energy with the Contendre Solar Ally Program. We invite passionate solar installers, distributors, and service providers to become part of a network that delivers high-quality solar power solutions across India.
                    </p>
                    <p class="animation-bottom">Through this program, you gain access to advanced N-Type TOPCon solar modules, P-Type Mono PERC solar modules, monocrystalline solar panels, and reliable off-grid solar systems. As one of the trusted solar module manufacturers in India, Contendre Solar provides technical guidance, training, and business support to ensure your success.

                    </p>
                    <p class="animation-bottom">Our partnership model is designed with flexibility in mind. Whether you aim to be an authorized installer, dealer, contractor, or distributor, the program is tailored to meet your company’s unique goals. You also benefit from our experience as a leading solar panel manufacturer in Maharashtra, allowing you to deliver world-class solar solutions to residential, commercial, and industrial clients.
                    </p>
                    <p class="animation-bottom">By joining the Contendre family, you’re not only expanding your business opportunities but also contributing to a greener, more sustainable future. Together, we can make renewable energy accessible, reliable, and cost-effective, powering communities and shaping India’s solar landscape for years to come.

                    </p>
                    <div class="mt-lg-4 mt-xxl-5">
                        <a class="coman_btn animation-bottom" data-bs-toggle="modal" data-bs-target="#applymodal">Join now <img src="{{ asset('public/front/images/arrow.svg') }}"
                                alt="arrow"></a>
                    </div>
                </div>
 
            </div>
            <div class="col-lg-6">
                <img class=" img-fluid animation-zoom-in" src="{{ asset('public/front/images/product-ally.png') }}" alt="image">
            </div>
        </div>
    </div>
</section>

<!-- products -->
 <section class="products mt-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <h3 class="head2 animation-top text-center">Products You Can Offer</h3>
            </div>
               @foreach($products as $product)
              <div class="col-lg-5 col-xxl-6">
                
                    <div class="series_bot">
                        <div>
                            <img class="img-fluid animation-zoom-in" src="{{ asset('public/productcategory/'.$product->image) }}" 
                         alt="{{  str_replace(['-', '_'],' ', pathinfo($product->image, PATHINFO_FILENAME)) }}">
                        </div>
                        <div class="ser_bot animation-bottom mt-0">
                            <a href="{{ route('n.type', $product->url) }}"><h4>{{ $product->title }}</h4></a>
                            {!! $product->short_description !!}
                        </div>
                    </div>
               
                </div>
              @endforeach
            </div>
    </div>
 </section>
 <!-- Sustainable -->
<section class="Sustainable mt-100 future">
  <div class="container">    
    <div class="animation-bottom" id="counterSection">
      <div class="row gy-4 gy-lg-0">
        <div class="col-lg-10">
          <div class="Sustainable_bot border-0">
            <h2 class="head2">Why Contendre Solar</h2>
            <p>Contendre Solar provides top-quality solar modules, training, and support. As trusted solar panel manufacturers in India, we help solar installers and partners deliver reliable solar solutions for homes, businesses, and off-grid systems.
            </p>
          </div>
        </div>        
      </div>
    </div>
  </div>
</section>
<!-- feature -->
 <section class="mt-100">
    <div class="container">
        <div class="feature_wrapper">
            <div>
                <div class="feature_box">
                    <div>
                        <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.37929 16.5217C7.09954 15.2615 7.14249 13.9511 7.50418 12.712C7.86586 11.4729 8.53456 10.3451 9.44827 9.43332C10.362 8.52152 11.4911 7.85518 12.731 7.4961C13.9709 7.13701 15.2814 7.0968 16.541 7.37919C17.2342 6.29493 18.1893 5.40265 19.3181 4.78457C20.4469 4.1665 21.7132 3.84253 23.0001 3.84253C24.2871 3.84253 25.5533 4.1665 26.6821 4.78457C27.811 5.40265 28.766 6.29493 29.4593 7.37919C30.7208 7.09557 32.0335 7.1356 33.2754 7.49556C34.5172 7.85552 35.6479 8.52371 36.5622 9.43798C37.4764 10.3523 38.1446 11.4829 38.5046 12.7248C38.8645 13.9666 38.9046 15.2794 38.621 16.5409C39.7052 17.2341 40.5975 18.1892 41.2156 19.318C41.8336 20.4468 42.1576 21.7131 42.1576 23C42.1576 24.287 41.8336 25.5532 41.2156 26.682C40.5975 27.8109 39.7052 28.7659 38.621 29.4592C38.9033 30.7188 38.8631 32.0292 38.5041 33.2691C38.145 34.509 37.4786 35.6382 36.5668 36.5519C35.655 37.4656 34.5273 38.1343 33.2881 38.496C32.049 38.8577 30.7386 38.9006 29.4785 38.6209C28.7861 39.7093 27.8303 40.6054 26.6995 41.2262C25.5688 41.8471 24.2997 42.1725 23.0097 42.1725C21.7197 42.1725 20.4506 41.8471 19.3199 41.2262C18.1891 40.6054 17.2333 39.7093 16.541 38.6209C15.2814 38.9032 13.9709 38.863 12.731 38.504C11.4911 38.1449 10.362 37.4785 9.44827 36.5667C8.53456 35.6549 7.86586 34.5272 7.50418 33.288C7.14249 32.0489 7.09954 30.7385 7.37929 29.4784C6.28671 28.7869 5.38675 27.8304 4.76314 26.6977C4.13952 25.565 3.8125 24.293 3.8125 23C3.8125 21.707 4.13952 20.435 4.76314 19.3024C5.38675 18.1697 6.28671 17.2131 7.37929 16.5217Z" stroke="#F16F24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M17.25 23.0001L21.0833 26.8334L28.75 19.1667" stroke="#F16F24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <p class="sub_head">Proven Products at Competitive Prices
                    </p>
                    <p>Our solar modules and solutions are field-tested for performance and reliability. Offering quality products at reasonable prices, we help you expand your business and strengthen your brand in the solar energy sector.

                    </p>
                </div>
            </div>
            <div>
                <div class="feature_box">
                    <div>
                       
                        <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M30.6673 40.25V36.4167C30.6673 34.3833 29.8596 32.4333 28.4218 30.9955C26.984 29.5577 25.034 28.75 23.0007 28.75H11.5007C9.46732 28.75 7.51728 29.5577 6.0795 30.9955C4.64172 32.4333 3.83398 34.3833 3.83398 36.4167V40.25" stroke="#F16F24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M30.666 5.99536C32.31 6.42157 33.766 7.38162 34.8054 8.72481C35.8448 10.068 36.4087 11.7183 36.4087 13.4167C36.4087 15.1151 35.8448 16.7654 34.8054 18.1086C33.766 19.4518 32.31 20.4118 30.666 20.838" stroke="#F16F24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M42.166 40.2501V36.4168C42.1647 34.7181 41.5994 33.0679 40.5586 31.7254C39.5179 30.3828 38.0608 29.4239 36.416 28.9993" stroke="#F16F24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M17.2507 21.0833C21.4848 21.0833 24.9173 17.6509 24.9173 13.4167C24.9173 9.18248 21.4848 5.75 17.2507 5.75C13.0165 5.75 9.58398 9.18248 9.58398 13.4167C9.58398 17.6509 13.0165 21.0833 17.2507 21.0833Z" stroke="#F16F24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                    </div>
                    <p class="sub_head">A Team That Supports Your Business
</p>
                    <p> Contendre Solar provides expert guidance for every project;residential, commercial, off-grid, or industrial. From technical support to sales assistance, we ensure your projects succeed efficiently.

                    </p>
                </div>
            </div>
            <div>
                <div class="feature_box">
                    <div>
                       
                        <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M26.834 34.5001V11.5001C26.834 10.4834 26.4301 9.50839 25.7112 8.78951C24.9923 8.07062 24.0173 7.66675 23.0007 7.66675H7.66732C6.65065 7.66675 5.67563 8.07062 4.95674 8.78951C4.23785 9.50839 3.83398 10.4834 3.83398 11.5001V32.5834C3.83398 33.0917 4.03592 33.5793 4.39536 33.9387C4.75481 34.2981 5.24232 34.5001 5.75065 34.5001H9.58398" stroke="#F16F24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M28.75 34.5H17.25" stroke="#F16F24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M36.4173 34.4999H40.2507C40.759 34.4999 41.2465 34.298 41.6059 33.9385C41.9654 33.5791 42.1673 33.0916 42.1673 32.5833V25.5874C42.1665 25.1525 42.0178 24.7307 41.7457 24.3914L35.0756 16.0539C34.8964 15.8294 34.669 15.6481 34.4102 15.5234C34.1514 15.3986 33.8679 15.3337 33.5807 15.3333H26.834" stroke="#F16F24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M32.5833 38.3334C34.7004 38.3334 36.4167 36.6172 36.4167 34.5001C36.4167 32.383 34.7004 30.6667 32.5833 30.6667C30.4662 30.6667 28.75 32.383 28.75 34.5001C28.75 36.6172 30.4662 38.3334 32.5833 38.3334Z" stroke="#F16F24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M13.4173 38.3334C15.5344 38.3334 17.2507 36.6172 17.2507 34.5001C17.2507 32.383 15.5344 30.6667 13.4173 30.6667C11.3002 30.6667 9.58398 32.383 9.58398 34.5001C9.58398 36.6172 11.3002 38.3334 13.4173 38.3334Z" stroke="#F16F24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                    </div>
                    <p class="sub_head">Immediate Availability
</p>
                    <p>Our ready stock of solar panels and PV modules along with a strong logistics network ensures timely delivery of products whenever and wherever you need them.

                    </p>
                </div>
            </div>
            <div>
                <div class="feature_box">
                    <div>
                       
                        <svg width="42" height="38" viewBox="0 0 42 38" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M3.75065 30.5C3.24232 30.5 2.75481 30.2981 2.39536 29.9386C2.03592 29.5792 1.83398 29.0917 1.83398 28.5833V3.66667C1.83398 3.15834 2.03592 2.67082 2.39536 2.31138C2.75481 1.95193 3.24232 1.75 3.75065 1.75H13.334C15.3673 1.75 17.3174 2.55774 18.7551 3.99551C20.1929 5.43329 21.0007 7.38334 21.0007 9.41667C21.0007 7.38334 21.8084 5.43329 23.2462 3.99551C24.6839 2.55774 26.634 1.75 28.6673 1.75H38.2507C38.759 1.75 39.2465 1.95193 39.6059 2.31138C39.9654 2.67082 40.1673 3.15834 40.1673 3.66667V28.5833C40.1673 29.0917 39.9654 29.5792 39.6059 29.9386C39.2465 30.2981 38.759 30.5 38.2507 30.5H26.7507C25.2257 30.5 23.7631 31.1058 22.6848 32.1841C21.6065 33.2625 21.0007 34.725 21.0007 36.25C21.0007 34.725 20.3948 33.2625 19.3165 32.1841C18.2382 31.1058 16.7756 30.5 15.2507 30.5H3.75065Z" stroke="#F16F24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                    </div>
                    <p class="sub_head">The Best Catalog in the Industry
</p>
                    <p> We offer a wide range of solar solutions, PV modules, and accessories at competitive prices, backed by reliable service from product selection to delivery and beyond.

                    </p>
                </div>
            </div>
            <div>
                <div class="feature_box">
                    <div>
                        
                        <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M41.0553 20.9339C41.3985 20.7826 41.6896 20.5339 41.8928 20.2187C42.096 19.9034 42.2022 19.5355 42.1983 19.1605C42.1944 18.7855 42.0806 18.4199 41.871 18.1089C41.6614 17.798 41.3651 17.5554 41.0189 17.4111L24.5912 9.92845C24.0918 9.70065 23.5493 9.58276 23.0003 9.58276C22.4514 9.58276 21.9089 9.70065 21.4095 9.92845L4.98368 17.4034C4.64245 17.5529 4.35217 17.7985 4.14833 18.1103C3.94449 18.4221 3.83594 18.7866 3.83594 19.1591C3.83594 19.5316 3.94449 19.8961 4.14833 20.2079C4.35217 20.5197 4.64245 20.7653 4.98368 20.9148L21.4095 28.4051C21.9089 28.6329 22.4514 28.7508 23.0003 28.7508C23.5493 28.7508 24.0918 28.6329 24.5912 28.4051L41.0553 20.9339Z" stroke="#F16F24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M42.166 19.1667V30.6667" stroke="#F16F24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M11.5 23.9583V30.6666C11.5 32.1916 12.7116 33.6541 14.8683 34.7324C17.0249 35.8108 19.95 36.4166 23 36.4166C26.05 36.4166 28.9751 35.8108 31.1317 34.7324C33.2884 33.6541 34.5 32.1916 34.5 30.6666V23.9583" stroke="#F16F24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                    </div>
                    <p class="sub_head">Comprehensive Training
</p>
                    <p>Dealers and partners benefit from practical, hands-on training and year-round technical support, keeping you updated on the latest solar technologies, products, and best industry practices.

                    </p>
                </div>
            </div>
            <div>
                <div class="feature_box">
                    <div>
                       
                        <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M21.0843 38.3333C17.7187 38.3434 14.4723 37.0884 11.9888 34.817C9.50529 32.5456 7.96618 29.4237 7.6767 26.0706C7.38722 22.7175 8.36853 19.3781 10.426 16.7147C12.4835 14.0512 15.4668 12.2583 18.7843 11.6916C29.7093 9.58325 32.5843 8.58659 36.4176 3.83325C38.3343 7.66659 40.251 11.8449 40.251 19.1666C40.251 29.7083 31.0893 38.3333 21.0843 38.3333Z" stroke="#F16F24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M3.83398 40.25C3.83398 34.5 7.37982 29.9767 13.5707 28.75C18.209 27.83 23.0007 24.9167 24.9173 23" stroke="#F16F24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                    </div>
                    <p class="sub_head">Environmentally Responsible
</p>
                    <p>At Contendre Solar, renewable energy is more than a business. It’s a commitment. We help partners provide cost-effective solar solutions while protecting the environment for a sustainable future.
</p>

                </div>
            </div>
        </div>
    </div>
 </section>
 <!-- table -->
 <section class="mt-100">
   <div class="container">
      <h2 class="about_head text-start mb-4">Our Product Ally Program</h2>
      
     <table class="distributor-table">
       <thead>
         <tr>
           <th>
             <p class="sub_head">One-time Fee Payment</p>
             <!--<p>Rs. 50,000</p>-->
           </th>
           <th>
             <p class="sub_head">Requirement</p>
             <p>Office Space</p>
           </th>
           <th class="border-0">
             <p class="sub_head">Minimum Monthly Order</p>
             <!--<p>Fixed Monthly Recurring Order Commitment</p>-->
           </th>
         </tr>
       </thead>
       <tbody>
         <tr>
           <td>
             <p class="sub_head">Requirement</p>
             <ul>
               <li>Business listing on website</li>
               <li>Distributor Certificate</li>
               <li>Distributor Digital Visiting Card</li>
               <li>Distributor Price Lists And Rate Charts</li>
               <li>Dedicated Sales Support Personal</li>
               <li>Marketing Material</li>
               <li>Print Media</li>
               <li>Digital Marketing Leads</li>
               <li>Government tenders</li>
               <li>Advertising Campaign</li>
             </ul>
           </td>
           <td>
             <p class="sub_head">Service</p>
             <ul>
               <li>Service Equipment & Training Session</li>
             </ul>
           </td>
           <td>
                <p class="sub_head">BUSINESS SCOPES</p>
             <ul>
               <li>Supply Of Material To local Installers/EPC</li>
               <li>Companies</li>
               <li>Exclusive Supply To Local Dealers</li>
               <li>EPC Projects (Residential, Institutional, Commercial, Industrial)
                </li>
               <li>Distribution/Trade Network</li>
               <li>Government Tenders</li>
             </ul>
           </td>
         </tr>
       </tbody>
     </table>
     
      <div class="text-center mt-4">
               <a class="coman_btn animation-bottom" href="{{ asset('public/terms&conditions_pdf/Ally-program-terms-condition.pdf')}}" target="_blank">Terms & Conditions <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow">
               </a>
             </div>
   </div>
 </section>
 @include('layouts.partnerform')
@include('layouts.frontfooter')