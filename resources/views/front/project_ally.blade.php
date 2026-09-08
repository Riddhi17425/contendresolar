@include('layouts.frontheader')
@include('layouts.hero_section' , ['pageName' => 'Project-Ally'])

<section class="mt-100">
    <div class="container">        
        <div class="row align-items-center gx-lg-5">
            <div class="col-lg-6">
                <div>
                    <h3 class="style_head animation-top">Succeed With Solar</h3>
                    <h2 class="head2 animation-top">Join The Program</h2>
                    <p class="animation-bottom">At Contendre Solar, partnership means more than selling systems—it’s about shaping the future of clean energy. As a channel partner, you become an end-to-end, vertically integrated solar solutions provider, influencing every stage of the value chain and earning lasting customer trust.

                    </p>
                    <p class="animation-bottom">Our state-of-the-art manufacturing ensures large-scale, automated production with consistent quality and competitive pricing. We protect our innovative designs and technologies with strong intellectual property rights, giving partners confidence and exclusivity.

                    </p>
                    <p class="animation-bottom">Through a PAN-India network of trained service stations and localized stocking units, we minimize logistics costs, reduce transit damage, and guarantee prompt support for you and your customers.</p>
                    <p class="animation-bottom">We drive awareness and growth with roadshows, exhibitions, training, and on-ground marketing. Your team receives full technical and sales training, detailed customer literature, and continuous field and online support—equipping you to deliver reliable solar solutions and sustainable returns.
</p>                    
                </div>

            </div>
            <div class="col-lg-6">
                <img class=" img-fluid animation-zoom-in" src="{{ asset('public/front/images/about-img.png') }}" alt="image">
            </div>
            <div class="col-lg-12">
                <p>Contendre Solar plans to focus on awareness development by way of road shows, exhibitions, training and social events etc. We shall be imparting training to you, your marketing and field staff, provide you with the literature containing answers to all likely questions by customers in addition to the online as well as on field support from our team.</p>
                <div class="">
                    <a class="coman_btn animation-bottom" data-bs-toggle="modal" data-bs-target="#applymodal">Join Now <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow"></a>
                    </div>
            </div>
        </div>
    </div>
</section>

<section class="Sustainable mt-100 project_ally p-lg-5">
  <div class="container">    
    <div class="animation-bottom" id="counterSection">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="Sustainable_bot border-0">
            <h2 class="head2">Why Choose Contendre Solar</h2>
                <p>A collaboration between Contendre Solar and dedicated partners like you ensures mutual benefit and lasting recognition in the solar market.
</p>
            
          </div>
        </div>        
      </div>
    </div>
  </div>
</section>

<!-- table -->
 <section class="mt-100">
   <div class="container">
    <p class="about_head text-start">BECOME A PROJECT ASSOCIATE</p>
     <table class="distributor-table mt-3">
       <thead>
         <tr>
           <th>
             <p class="sub_head">Total Investment - 0</p>
           </th>
           <th>
             <p class="sub_head">Registeration Fees - 0</p>
           </th>           
         </tr>
       </thead>
       <tbody>
         <tr>
           <td>
             <p>Earn from home. New Source of Passive Income. Contribute towards a Greener & Cleaner Earth.
</p>
             <!--<p>Be a part of Govt. of India's solar initiative.-->
             <!--Leave your Next Generation with a beautiful planet.</p>-->
           </td>
           <td>
             <p class="sub_head">HOW DOES IT WORK?</p>
             <p>Share your references about the project installation if you are in any of the following sectors:</p>
             <ul>
                <li>Institutional Sector (Schools / Colleges)</li>
                <li>Industrial Sector (Factories / Office spaces / Big Manufacturing Plants)</li>
                <li>Storage Sector (Warehouses / Cold Storage Units)</li>
                <li>Residential Sector (Housing Societies / Houses / Bungalows etc.)</li>
                <li>Public Sector (Temples / Other Public Buildings)</li>
             </ul>
             <p>Our team of qualified technicians pitch according to your references with a proposal. A referral award is given to you once the deal is confirmed. Earn a handsome referral reward, once the project is completed.
</p>
           </td>
         </tr>
       </tbody>       
     </table>    
   </div>
 </section>
 <section class="mt-100">
   <div class="container">
    <h2 class="about_head text-start">BECOME A PROJECT ASSOCIATE</h2>
     <table class="distributor-table mt-3">
       <thead>
         <tr>
           <th>
             <p class="sub_head">INTERNATIONAL BUSINESS</p>
           </th>
           <th>
             <p class="sub_head">Registeration Fees - 0</p>
           </th>           
         </tr>
       </thead>
       <tbody>
         <tr>
           <td>
             <p>Solar Product Distribution Solar Installation Service Solar AMC Services<p>             
           </td>
           <td>
             <p>The solar market is growing fast all over the world, and at Contendre Solar, we want to be part of this exciting journey. We are looking for strong business partners with the right resources to help us take our world-class products global.Interested in joining us on this opportunity, reach out at info@contendresolar.com.
</p>             
           </td>
         </tr>
       </tbody>       
     </table>    
   </div>
 </section>

 <section class="Sustainable mt-100 project_ally_2 p-lg-5">
  <div class="container">    
    <div class="mt-5 animation-bottom" id="counterSection">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="Sustainable_bot border-0">
            <h2 class="head2 mb-3">Become a Project Ally</h2>
            <p>If you’re passionate about making the planet greener for future generations, we’d love to hear from you!
             Please download the application form, fill in your details, print it on your company letterhead, and send it to us. We’ll review it and welcome you to Team Contendre.
</p>
            <a class="coman_btn animation-bottom" href="{{ asset('public/terms&conditions_pdf/Ally-program-terms-condition.pdf')}}" target="_blank">Terms & Conditions <img src="{{ asset('public/front/images/arrow.svg') }}" alt="arrow"></a>
          </div>
        </div>        
      </div>
    </div>
  </div>
</section>
 @include('layouts.partnerform')
@include('layouts.frontfooter')