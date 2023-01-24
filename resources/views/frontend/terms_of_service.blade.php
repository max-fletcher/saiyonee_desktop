@extends('frontend.layouts.base')

@section('frontend-header-title') Privacy Policy @endsection

@push('page-specific-css')

   <style> @import url('https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600&display=swap'); </style>

   <style>
      .contest_title{
         font-family: 'Hind Siliguri', sans-serif;
      }

      @media only screen and (min-width: 992px) and (max-width: 1129px) {
         .timeline-inner{
               background-position: right -520px bottom -120px !important;
               background-position-x: right -520px !important;
               background-position-y: bottom -120px !important;
         }
      }

      @media only screen and (min-width: 1130px) and (max-width: 1299px) {
         .timeline-inner{
               background-position: right -430px bottom -100px !important;
               background-position-x: right -430px !important;
               background-position-y: bottom -100px !important;
         }
      }

      @media only screen and (min-width: 1300px) and (max-width: 1499px) {
         .timeline-inner{
               background-position: right -380px bottom -100px !important;
               background-position-x: right -380px !important;
               background-position-y: bottom -100px !important;
         }
      }

      @media only screen and (min-width: 1500px) {
         .timeline-inner{
               background-position: right -300px bottom -100px !important;
               background-position-x: right -300px !important;
               background-position-y: bottom -100px !important;
         }
      }

      @media only screen and (min-width: 1500px) {
         .timeline-inner{
               background-position: right -290px bottom -100px !important;
               background-position-x: right -290px !important;
               background-position-y: bottom -100px !important;
         }
      }

      .apps_title{
         font-weight: 500;
         font-size: 60px;
         line-height: 1.1;
         color: #212529!important;
      }

      .register_btn{
         width: 55%;
         min-width: 200px;
         border-radius: 22px;
         height: 60px;
         font-weight: 700;
         font-size: 1.5rem;
         color:#212529!important;
      }

      .contest_opening{
         font-size: 0.9rem !important;
         font-weight: 800;
      }

      .contest_submission_date{
         font-size: 1.1rem !important;
         font-weight: 800;
      }

      .contest_para{
         font-size: 0.9rem;
         font-weight: 600;
      }

      .contest_link:hover{
         text-decoration: underline !important;
      }

      .underline{
         text-decoration: underline;
      }
      .font_inline_bold_800{
         font-weight: 800;
      }

      .apps_para{
         font-size: 0.9rem;
         font-weight: 600;
         padding: 0em 2em;
      }

      @media only screen and (min-width: 500px) and (max-width: 660px) {
         .apps_para{
               padding: 0em 5em;
         }
      }

      @media only screen and (min-width: 661px) and (max-width: 992px) {
         .apps_para{
               padding: 0em 7em;
         }
      }

      @media only screen and (min-width: 993px) and (max-width: 1100px) {
         .apps_para{
               padding: 0em 10em;
         }
      }

      @media only screen and (min-width: 1101px) {
         .apps_para{
               padding: 0em 15em;
         }
      }

      .newsletter_modal_header_text{
         width: 100%;
         text-align:center;
         font-weight:700;
         color: #CF0000;
      }

      .newsletter_modal_form_label{
         font-weight:700;
         color: #CF0000;
      }

      .newsletter_modal_form_input, .newsletter_modal_form_input:focus{
         color: #CF0000;
      }

      .newsletter_modal_subscribe_btn{
         background-color: #CF0000;
         color: #fff;
         border-color: #CF0000;
         font-weight: 500;
      }

      .newsletter_modal_body_text{
         font-size: 14px;
         color: black;
         font-weight: 600;
      }

      /* Bunch of media queries for positioning main_image */
      .main_image{
         aspect-ratio: 1250/770;
         min-height: 400px;
         /* background: url(http://localhost:8000/frontend/images/banner2.png) no-repeat 0 0; */
         /* background-size: cover; */
         /* background-position-x: center !important; */
         /* no-repeat 0 0; background-size: cover; */
         /* background-repeat: no-repeat 0 0; */
         /* background-position: 72% 30% !important; */
         background-position-x: 72% !important;
         background-position-y: 30% !important;
         background-size: cover;
      }

      @media only screen and (max-width: 570px) {
         .main_image{
               background-position: -400px 0px !important;
         }
         .carousel-caption{
               left: 50px;
         }
      }

      @media only screen and (max-width: 470px) {
         .main_image{
               background-position: -450px 0px !important;
         }
      }

      @media only screen and (max-width: 1100px) {
         .main_image{
               min-height: 500px;
         }
      }

      @media only screen and (max-width: 900px) {
         .main_image{
               min-height: 600px;
         }
      }
      /* End Bunch of media queries for positioning main_image */

      .text_no_wrap{
         white-space: nowrap;
      }

      @media only screen and (max-width: 1300px) {
         .banner_image_text{
               padding-top: 85px;
         }
      }

      @media only screen and (max-width: 767px) {
         .banner_image_text{
               padding-top: 60px;
         }
      }

      @media only screen and (min-width: 1200px) {
         .founded_description{
               margin-top: -220px;
         }
      }

      @media only screen and (min-width: 992px) and (max-width: 1199px) {
         .founded_description{
               margin-top: -150px;
         }
      }

      @media only screen and (min-width: 767px) and (max-width: 991px) {
         .founded_description{
               margin-top: -70px;
         }
      }

      .onload-design{
         padding: 0px;
         background-color: #F99187;
         height: 10em; 
         border-bottom-left-radius: 100%;
         border-bottom-right-radius: 100%;
         border-top-left-radius: 25px;
         border-top-right-radius: 25px;
         
      }
      .modal-content{
         text-align: center;
         border-radius: 1.1em !important;
      }

      /* .modal-rounded-decoration{
         background-color: #FFB7AC;
      } */

      .modal-head-onload-design{
         text-align: center;
         width: 100%;
         color: white;
         padding-left: 1.2em;
         font-size: 40px !important;
         line-height: 1em !important;
      }

      .modal-footer{
         align-items: center !important;
         justify-content: center !important;
      }

      .modal-header-onload-design .btn-close {
         padding: 0.5rem 0.5rem !important;
         margin: -5.5rem 0.5rem -0.5rem auto !important;
         background-color: white;
         border-radius: 20px;
      }

      .modal-button{
         width: 55%;
         min-width: 200px;
         border-radius: 22px;
         height: 60px;
         font-weight: 700;
         font-size: 1.5rem;
         color: #fff !important;
         background-color:#F99187;
      }
      
      .modal-button:hover{
         color: #F99187!important;
         background-color:#fff;
         border: 1px solid #F99187;
      }

      .image_circle{
         border-radius: 50%;
      }

      .steps_video_link{
         color: #CF0000;
         cursor: pointer;
      }

      .timeline-body{
         font-size: 0.8rem;
         font-weight: 700;
      }

      .founded_description > p{
         font-weight: 500;
         font-size: 1rem;
      }

      .text-red{
         color: red;
      }

      .form-check-input{
         width: 1.05rem;
         height: 1.05rem;
         background-size: cover;
      }

      .form-check-input:checked {
         background-color: #CF0000;
         border-color: #CF0000;
      }

      .radio_label{
         color: #3d3d3d !important;
         font-weight: 400 !important;
         font-size: 16px !important;
      }

      .contest_form_row{
         display: flex;
         justify-content: center;
      }

      .small_text{
         font-weight: 500 !important;
         font-size: 12px !important;
      }

      @media screen and (max-width: 479px){
         h3 {
               font-size: 25px;
         }
      }

      @media screen and (max-width: 479px){
         h1 {
               font-size: 36px;
         }
      }

      /* @media screen and (max-width: 767px){
         h4 {
               font-size: 40px;
         }
      } */

      #contest_section{
         margin-top: 10px !important;
         margin-bottom: 50px !important;
         opacity: 0.75;
      }

      .contest_submit_btn{
         width: 55%;
         border-radius: 22px;
         height: 60px;
         font-weight: 700;
         font-size: 1.5rem;
         background: #F99187;
      }

      .label_text{
         color: #3d3d3d !important;
         font-weight: 600 !important;
         font-size: 16px !important;
      }

      .input_text::placeholder{
         color: #FFB7AC !important;
         font-weight: 600;
         font-size: 16px;
      }

      .input_text{
         color: #000 !important;
         font-weight: 600;
         font-size: 16px;
      }

      .input_error_border_red{
         color: #CF0000 !important;
         font-weight: 600;
         font-size: 16px;
         border-bottom-color: red !important;
      }

      .contest_labels{
         color: #3d3d3d !important;
         font-size: 20px;
         font-weight: 600;
      }

      .font_weight_or{
         font-weight: 500;
      }
      
      /* Bunch of media queries for positioning steps couple image properly */
      @media screen and (min-width: 1571px) and (max-width: 1770px){
         .timeline-section:before {
               left: -110px;
         }
      }

      @media screen and (min-width: 1550px) and (max-width: 1570px){
         .timeline-section:before {
               left: -30px;
         }
      }

      @media screen and (min-width: 1400px) and (max-width: 1549px){
         .timeline-section:before {
               left: -70px;
         }
      }

      @media screen and (min-width: 1360px) and (max-width: 1399px){
         .timeline-section:before {
               height: 450px;
               left: -30px;
         }
      }
      /* End Bunch of media queries for positioning steps couple image properly */

      #contact_us_message{
         height: 120px;
      }

      .list_disc{
         list-style-type: disc;
         margin-left: 14px;
      }

      .grey_text{
         color: #3d3d3d;
      }
   </style>

   {{-- RBox plugin CSS --}}
   <link rel="stylesheet" href="{{ asset('frontend/rbox/jquery-rbox.css') }}" />
   {{-- RBox Custom CSS --}}
   <style>
      @media only screen and (min-width: 1000px) {
            .rbox-wrap {
               max-width: 50%;
            }
      }
      @media only screen and (min-width: 0px) and (max-width: 999px) {
            .rbox-wrap {
               max-width: 80%;
            }
      }
   </style>

   <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
@endpush

@section('frontend-page-content')
   <!--=================================
   banner -->
   {{-- <section id="home-slider" class="fullscreen">
      <div class="carousel-inner">
         <div class="mt-5 carousel-item active h-100 bg-overlay-red main_image" style="background: url({{ asset('frontend/images/banner2.png') }}) no-repeat 0 0; background-size: cover;" >
               <div class="slider-content">
                  <div class="container">
                     <div class="row carousel-caption align-items-center h-100">
                           <div class="col-md-12 text-start banner_image_text">
                              <h3 class="text-white" style="font-weight: 600">Smartest Way to</h3>
                              <div class="slider-1">
                                 <h1 class="animated2 text-white divider-3">Find <span>Your</span> Perfect <span class="text_no_wrap"> Match !</span></h1>
                              </div>
                           </div>
                     </div>
                  </div>
               </div>
         </div>
      </div>
   </section> --}}

   {{-- <h4 class="grey_text">HTML5 Video</h4>
   <a href="#" class="rbox-video-autoplay" data-rbox-type="video" data-rbox-video="{{ asset('frontend/videos/sign-up-video-tutorial.mp4') }}" data-rbox-autoplay="true">
      Video with autoplay
   </a> --}}

   <!--=================================
   banner -->

   <!--=================================
   Page Section -->

   <section id="contest_rules_section" class="page-section-ptb">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-md-8 text-center mb-4 mb-md-5">
               <h3 class="title divider-2"> <div class="fw-bold">Terms & Conditions</div></h3>
            </div>
         </div>

         <div class="row">
            <div class="col-12 px-2">
               <div class="row mb-0 mb-md-2 mx-3">
                  <div class="col-12 mb-0 mb-lg-2">

                     {{-- <h5 class="contest_opening mb-3"> Dear Couple, </h5> --}}

                     <span class="contest_para">

                           <h4 class="fw-bold grey_text">Updated at 2023-02-01</h4><br>

                           <h4 class="grey_text"><strong>General Terms</strong></h4>

                           <p><br />
                           By accessing and placing an order with Saiyonee, you confirm that you are in agreement with and bound by the terms of service contained in the Terms &amp; Conditions outlined below. These terms apply to the entire website and any email or other type of communication between you and Saiyonee.</p>
                           
                           <p><br />
                           Under no circumstances shall Saiyonee team be liable for any direct, indirect, special, incidental or consequential damages, including, but not limited to, loss of data or profit, arising out of the use, or the inability to use, the materials on this site, even if Saiyonee team or an authorized representative has been advised of the possibility of such damages. If your use of materials from this site results in the need for servicing, repair or correction of equipment or data, you assume any costs thereof.</p>
                           
                           <p><br />
                           Saiyonee will not be responsible for any outcome that may occur during the course of usage of our resources. We reserve the rights to change prices and revise the resources usage policy in any moment.</p>
                           
                           <h4 class="grey_text"><br />
                           <strong>License</strong></h4>
                           
                           <p><br />
                           Saiyonee grants you a revocable, non-exclusive, non-transferable, limited license to download, install and use the website strictly in accordance with the terms of this Agreement.</p>
                           
                           <p><br />
                           These Terms &amp; Conditions are a contract between you and Saiyonee (referred to in these Terms &amp; Conditions as &quot;Saiyonee&quot;, &quot;us&quot;, &quot;we&quot; or &quot;our&quot;), the provider of the Saiyonee website and the services accessible from the Saiyonee website (which are collectively referred to in these Terms &amp; Conditions as the &quot;Saiyonee Service&quot;).</p>
                           
                           <p><br />
                           You are agreeing to be bound by these Terms &amp; Conditions. If you do not agree to these Terms &amp; Conditions, please do not use the Saiyonee Service. In these Terms &amp; Conditions, &quot;you&quot; refers both to you as an individual and to the entity you represent. If you violate any of these Terms &amp; Conditions, we reserve the right to cancel your account or block access to your account without notice.</p>
                           
                           <h4 class="grey_text"><br />
                           <strong>Definitions and key terms</strong></h4>
                           
                           <p><br />
                           To help explain things as clearly as possible in this Terms &amp; Conditions, every time any of these terms are referenced, are<br />
                           strictly defined as:</p>
                           
                           <ul class="list_disc">
                              <li>Cookie: small amount of data generated by a website and saved by your web browser. It is used to identify your browser, provide analytics, remember information about you such as your language preference or login information.</li>
                              <li>Company: when this policy mentions &ldquo;Company,&rdquo; &ldquo;we,&rdquo; &ldquo;us,&rdquo; or &ldquo;our,&rdquo; it refers to Matpreneur Ltd, 9 Dhaka Housing, North Adabar, Dhaka, Bangladesh that is responsible for your information under this Terms &amp; Conditions.</li>
                              <li>Country: where Saiyonee or the owners/founders of Saiyonee are based, in this case is Bangladesh</li>
                              <li>Device: any internet connected device such as a phone, tablet, computer or any other device that can be used to visit Saiyonee and use the services.</li>
                              <li>Service: refers to the service provided by Saiyonee as described in the relative terms (if available) and on this platform.</li>
                              <li>Third-party service: refers to advertisers, contest sponsors, promotional and marketing partners, and others who provide our content or whose products or services we think may interest you. Website: Saiyonee.&quot;&rsquo;s&quot; site&nbsp;can be accessed via this URL: <a href="http://saiyonee.com/">http://saiyonee.com/</a></li>
                              <li>You: a person or entity that is registered with Saiyonee to use the Services.</li>
                           </ul>
                           <br>
                           
                           <h4 class="grey_text"><strong>Restrictions</strong></h4>
                           
                           <p><br />
                           You agree not to, and you will not permit others to:</p>
                           
                           <ul class="list_disc">
                              <li>License, sell, rent, lease, assign, distribute, transmit, host, outsource, disclose or otherwise commercially exploit the website or make the platform available to any third party.</li>
                              <li>Modify, make derivative works of, disassemble, decrypt, reverse compile or reverse engineer any part of the website.</li>
                              <li>Remove, alter or obscure any proprietary notice (including any notice of copyright or trademark) of Saiyonee or its affiliates, partners, suppliers or the licensors of the website.</li>
                           </ul>
                           <br>
                           
                           <h4 class="grey_text"><strong>Return and Refund Policy</strong></h4>
                           
                           <p><br />
                           Thanks for shopping at Saiyonee. We appreciate the fact that you like to buy the stuff we build. We also want to make sure you have a rewarding experience while you&rsquo;re exploring, evaluating, and purchasing our products.</p>
                           
                           <p><br />
                           As with any shopping experience, there are terms and conditions that apply to transactions at Saiyonee. We&rsquo;ll be as brief as our attorneys will allow. The main thing to remember is that by placing an order or making a purchase at Saiyonee, you agree to the terms along with Saiyonee.&quot;&rsquo;s&quot; Privacy Policy.</p>
                           
                           <p><br />
                           If, for any reason, You are not completely satisfied with any good or service that we provide, don&#39;t hesitate to contact us and we will discuss any of the issues you are going through with our product.</p>
                           
                           <h4 class="grey_text"><br />
                           <strong>Your Suggestions</strong></h4>
                           
                           <p><br />
                           Any feedback, comments, ideas, improvements or suggestions (collectively, &quot;Suggestions&quot;) provided by you to Saiyonee with respect to the website shall remain the sole and exclusive property of Saiyonee.</p>
                           
                           <p><br />
                           Saiyonee shall be free to use, copy, modify, publish, or redistribute the Suggestions for any purpose and in any way without any credit or any compensation to you.</p>
                           
                           <h4 class="grey_text"><br />
                           <strong>Your Consent</strong></h4>
                           
                           <p><br />
                           We&#39;ve updated our Terms &amp; Conditions to provide you with complete transparency into what is being set when you visit our site and how it&#39;s being used. By using our website, registering an account, or making a purchase, you hereby consent to our Terms &amp; Conditions.</p>
                           
                           <h4 class="grey_text"><br />
                           <strong>Links to Other Websites</strong></h4>
                           
                           <p><br />
                           This Terms &amp; Conditions applies only to the Services. The Services may contain links to other websites not operated or controlled by Saiyonee. We are not responsible for the content, accuracy or opinions expressed in such websites, and such websites are not investigated, monitored or checked for accuracy or completeness by us. Please remember that when you use a link to go from the Services to another website, our Terms &amp; Conditions are no longer in effect. Your browsing and interaction on any other website, including those that have a link on our platform, is subject to that website&rsquo;s own rules and policies. Such third parties may use their own cookies or other methods to collect information about you.</p>
                           
                           <h4 class="grey_text"><br />
                           <strong>Cookies</strong></h4>
                           
                           <p><br />
                           Saiyonee uses &quot;Cookies&quot; to identify the areas of our website that you have visited. A Cookie is a small piece of data stored on your computer or mobile device by your web browser. We use Cookies to enhance the performance and functionality of our website but are non-essential to their use. However, without these cookies, certain functionality like videos may become unavailable or you would be required to enter your login details every time you visit the website as we would not be able to remember that you had logged in previously. Most web browsers can be set to disable the use of Cookies. However, if you disable Cookies, you may not be able to access functionality on our website correctly or at all. We never place Personally Identifiable Information in Cookies.</p>
                           
                           <h4 class="grey_text"><br />
                           <strong>Changes To Our Terms &amp; Conditions</strong></h4>
                           
                           <p><br />
                           You acknowledge and agree that <em>Saiyonee</em> may stop (permanently or temporarily) providing the Service (or any features within the Service) to you or to users generally at <em>Saiyonee</em>&rsquo;s sole discretion, without prior notice to you. You may stop using the Service at any time. You do not need to specifically inform <em>Saiyonee</em> when you stop using the Service. You acknowledge and agree that if <em>Saiyonee</em> disables access to your account, you may be prevented from accessing the Service, your account details or any files or other materials which is contained in your account.</p>
                           
                           <p><br />
                           If we decide to change our Terms &amp; Conditions, we will post those changes on this page, and/or update the Terms &amp; Conditions modification date below.</p>
                           
                           <h4 class="grey_text"><br />
                           <strong>Modifications to Our website</strong></h4>
                           
                           <p><br />
                           Saiyonee reserves the right to modify, suspend or discontinue, temporarily or permanently, the website or any service to which it connects, with or without notice and without liability to you.</p>
                           
                           <h4 class="grey_text"><br />
                           <strong>Updates to Our website</strong></h4>
                           
                           <p><br />
                           Saiyonee may from time to time provide enhancements or improvements to the features/ functionality of the website, which may include patches, bug fixes, updates, upgrades and other modifications (&quot;Updates&quot;).</p>
                           
                           <p><br />
                           Updates may modify or delete certain features and/or functionalities of the website. You agree that Saiyonee has no obligation to (i) provide any Updates, or (ii) continue to provide or enable any particular features and/or functionalities of the website to you.</p>
                           
                           <p><br />
                           You further agree that all Updates will be (i) deemed to constitute an integral part of the website, and (ii) subject to the terms and conditions of this Agreement.</p>
                           
                           <h4 class="grey_text"><br />
                           <strong>Third-Party Services</strong></h4>
                           
                           <p><br />
                           We may display, include or make available third-party content (including data, information, applications and other products services) or provide links to third-party websites or services (&quot;Third- Party Services&quot;).</p>
                           
                           <p><br />
                           You acknowledge and agree that Saiyonee shall not be responsible for any Third-Party Services, including their accuracy, completeness, timeliness, validity, copyright compliance, legality, decency, quality or any other aspect thereof. Saiyonee does not assume and shall not have any liability or responsibility to you or any other person or entity for any Third-Party Services. Third-Party Services and links thereto are provided solely as a convenience to you and you access and use them entirely at your own risk and subject to such third parties&#39; terms and conditions.</p>
                           
                           <h4 class="grey_text"><br />
                           <strong>Term and Termination</strong></h4>
                           
                           <p><br />
                           This Agreement shall remain in effect until terminated by you or Saiyonee.</p>
                           
                           <p><br />
                           Saiyonee may, in its sole discretion, at any time and for any or no reason, suspend or terminate this Agreement with or without prior notice.</p>
                           
                           <p><br />
                           This Agreement will terminate immediately, without prior notice from Saiyonee, in the event that you fail to comply with any provision of this Agreement. You may also terminate this Agreement by deleting the website and all copies thereof from your computer.</p>
                           
                           <p><br />
                           Upon termination of this Agreement, you shall cease all use of the website and delete all copies of the website from your computer.</p>
                           
                           <p><br />
                           Termination of this Agreement will not limit any of Saiyonee&#39;s rights or remedies at law or in equity in case of breach by you(during the term of this Agreement) of any of your obligations under the present Agreement.</p>
                           
                           <h4 class="grey_text"><br />
                           <strong>Copyright Infringement Notice</strong></h4>
                           
                           <p><br />
                           If you are a copyright owner or such owner&rsquo;s agent and believe any material on our website constitutes an infringement on your copyright, please contact us setting forth the following information: (a) a physical or electronic signature of the copyright owner or a person authorized to act on his behalf; (b) identification of the material that is claimed to be infringing; (c) your contact information, including your address, telephone number, and an email; (d) a statement by you that you have a good faith belief that use of the material is not authorized by the copyright owners; and (e) the a statement that the information in the notification is accurate, and, under penalty of perjury you are authorized to act on behalf of the owner.</p>
                           
                           <h4 class="grey_text"><br />
                           <strong>Indemnification</strong></h4>
                           
                           <p><br />
                           You agree to indemnify and hold Saiyonee and its parents, subsidiaries, affiliates, officers, employees, agents, partners and licensors (if any) harmless from any claim or demand, including reasonable attorneys&#39; fees, due to or arising out of your: (a) use of the website; (b) violation of this Agreement or any law or regulation; or (c) violation of any right of a third party.</p>
                           
                           <h4 class="grey_text"><br />
                           <strong>No Warranties</strong></h4>
                           
                           <p><br />
                           The website is provided to you &quot;AS IS&quot; and &quot;AS AVAILABLE&quot; and with all faults and defects without warranty of any kind. To the maximum extent permitted under applicable law, Saiyonee, on its own behalf and on behalf of its affiliates and its and their respective licensors and service providers, expressly disclaims all warranties, whether express, implied, statutory or otherwise, with respect to the website, including all implied warranties of merchantability, fitness for a particular purpose, title and non-infringement, and warranties that may arise out of course of dealing, course of performance, usage or trade practice.</p>
                           
                           <p><br />
                           Without limitation to the foregoing, Saiyonee provides no warranty or undertaking, and makes no representation of any kind that the website will meet your requirements, achieve any intended results, be compatible or work with any other software, , systems or services, operate without interruption, meet any performance or reliability standards or be error free or that any errors or defects can or will be corrected.</p>
                           
                           <p><br />
                           Without limiting the foregoing, neither Saiyonee nor any Saiyonee&#39;s provider makes any representation or warranty of any kind, express or implied: (i) as to the operation or availability of the website, or the information, content, and materials or products included thereon; (ii) that the website will be uninterrupted or error-free; (iii) as to the accuracy, reliability, or currency of any<br />
                           information or content provided through the website; or (iv) that the website, its servers, the content, or e-mails sent from or on behalf of Saiyonee are free of viruses, scripts, trojan horses, worms, malware, timebombs or other harmful components.</p>
                           
                           <p>&nbsp;</p>
                           
                           <p>Some jurisdictions do not allow the exclusion of or limitations on implied warranties or the limitations on the applicable statutory rights of a consumer, so some or all of the above exclusions and limitations may not apply to you.</p>
                           
                           <h4 class="grey_text"><br />
                           <strong>Limitation of Liability</strong></h4>
                           
                           <p><br />
                           Notwithstanding any damages that you might incur, the entire liability of Saiyonee and any of its suppliers under any provision of this Agreement and your exclusive remedy for all of the foregoing shall be limited to the amount actually paid by you for the website.</p>
                           
                           <p><br />
                           To the maximum extent permitted by applicable law, in no event shall Saiyonee or its suppliers be liable for any special, incidental, indirect, or consequential damages whatsoever (including, but not limited to, damages for loss of profits, for loss of data or other information, for business interruption, for personal injury, for loss of privacy arising out of or in any way related to the use of or inability to use the website, third-party software and/or third-party hardware used with the website, or otherwise in connection with any provision of this Agreement), even if Saiyonee or any supplier has been advised of the possibility of such damages and even if the remedy fails of its essential purpose.</p>
                           
                           <p><br />
                           Some states/jurisdictions do not allow the exclusion or limitation of incidental or consequential damages, so the above limitation or exclusion may not apply to you.</p>
                           
                           <h4 class="grey_text"><br />
                           <strong>Severability</strong></h4>
                           
                           <p><br />
                           If any provision of this Agreement is held to be unenforceable or invalid, such provision will be changed and interpreted to accomplish the objectives of such provision to the greatest extent possible under applicable law and the remaining provisions will continue in full force and effect.</p>
                           
                           <p><br />
                           This Agreement, together with the Privacy Policy and any other legal notices published by Saiyonee on the Services, shall constitute the entire agreement between you and Saiyonee concerning the Services. If any provision of this Agreement is deemed invalid by a court of competent jurisdiction, the invalidity of such provision shall not affect the validity of the remaining provisions of this Agreement, which shall remain in full force and effect. No waiver of any term of this Agreement shall be deemed a further or continuing waiver of such term or any other term, and Saiyonee.&quot;&rsquo;s&quot; failure to assert any right or provision under this Agreement shall not constitute a waiver of such right or provision. YOU AND Saiyonee AGREE THAT ANY CAUSE OF ACTION ARISING OUT OF OR RELATED TO THE SERVICES MUST COMMENCE WITHIN ONE (1) YEAR AFTER THE CAUSE OF ACTION ACCRUES. OTHERWISE, SUCH CAUSE OF ACTION IS PERMANENTLY BARRED.</p>
                           
                           <h4 class="grey_text"><br />
                           <strong>Waiver</strong></h4>
                           
                           <p><br />
                           Except as provided herein, the failure to exercise a right or to require performance of an obligation under this Agreement shall not effect a party&#39;s ability to exercise such right or require such performance at any time thereafter nor shall be the waiver of a breach constitute waiver of any subsequent breach.</p>
                           
                           <p>&nbsp;</p>
                           
                           <ul class="list_disc">
                              <li><strong>failure to exercise, and no delay in exercising, on the part of either party, any right or any power under this Agreement shall operate as a waiver of that right or power. Nor shall any single or partial exercise of any right or power under this Agreement preclude further exercise of that or any other right granted herein. In the event of a conflict between this Agreement and any applicable purchase or other terms, the terms of this Agreement shall govern.</strong></li>
                           </ul>
                           
                           <h4 class="grey_text"><br />
                           <strong>Amendments to this Agreement</strong></h4>
                           
                           <p><br />
                           Saiyonee reserves the right, at its sole discretion, to modify or replace this Agreement at any time. If a revision is material we will provide at least 30 days&#39; notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.</p>
                           
                           <p><br />
                           By continuing to access or use our website after any revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, you are no longer authorized to use Saiyonee.</p>
                           
                           <h4 class="grey_text"><br />
                           <strong>Entire Agreement</strong></h4>
                           
                           <p><br />
                           The Agreement constitutes the entire agreement between you and Saiyonee regarding your use of the website and supersedes all prior and contemporaneous written or oral agreements between you and Saiyonee.</p>
                           
                           <p><br />
                           You may be subject to additional terms and conditions that apply when you use or purchase other Saiyonee&#39;s services, which Saiyonee will provide to you at the time of such use or purchase.</p>
                           
                           <h4 class="grey_text"><br />
                           <strong>Updates to Our Terms</strong></h4>
                           
                           <p><br />
                           We may change our Service and policies, and we may need to make changes to these Terms so that they accurately reflect our Service and policies. Unless otherwise required by law, we will notify you (for example, through our Service) before we make changes to these Terms and give you an opportunity to review them before they go into effect. Then, if you continue to use the Service, you will be bound by the updated Terms. If you do not want to agree to these or any updated Terms, you can delete your account.</p>
                           
                           <h4 class="grey_text"><br />
                           <strong>Intellectual Property</strong></h4>
                           
                           <p><br />
                           The website and its entire contents, features and functionality (including but not limited to all information, software, text, displays, images, video and audio, and the design, selection and arrangement thereof), are owned by Saiyonee, its licensors or other providers of such material and are protected by Bangladesh and international copyright, trademark, patent, trade secret and other intellectual property or proprietary rights laws. The material may not be copied, modified, reproduced, downloaded or distributed in any way, in whole or in part, without the express prior written permission of Saiyonee, unless and except as is expressly provided in these Terms &amp; Conditions. Any unauthorized use of the material is prohibited.</p>
                           
                           <h4 class="grey_text"><br />
                           <strong>Agreement to Arbitrate</strong></h4>
                           
                           <p><br />
                           This section applies to any dispute EXCEPT IT DOESN&rsquo;T INCLUDE A DISPUTE RELATING TO CLAIMS FOR INJUNCTIVE OR EQUITABLE RELIEF REGARDING THE ENFORCEMENT OR VALIDITY OF YOUR OR Saiyonee.&quot;&rsquo;s&quot; INTELLECTUAL PROPERTY RIGHTS. The term &ldquo;dispute&rdquo; means any dispute, action, or other controversy between you and Saiyonee concerning the Services or this agreement, whether in contract, warranty, tort, statute, regulation, ordinance, or any other legal or equitable basis. &ldquo;Dispute&rdquo; will be given the broadest possible meaning allowable under law.</p>
                           
                           <h4 class="grey_text"><br />
                           <strong>Notice of Dispute</strong></h4>
                           
                           <p><br />
                           In the event of a dispute, you or Saiyonee must give the other a Notice of Dispute, which is a written statement that sets forth the name, address, and contact information of the party giving it, the facts giving rise to the dispute, and the relief requested. You must send any Notice of Dispute via email to: contact@saiyonee.com. Saiyonee will send any Notice of Dispute to you by mail to your address if we have it, or otherwise to your email address. You and Saiyonee will attempt to resolve any dispute through informal negotiation within sixty (60) days from the date the Notice of Dispute is sent. After sixty (60) days, you or Saiyonee may commence arbitration.</p>
                           
                           <h4 class="grey_text"><br />
                           <strong>Binding Arbitration</strong></h4>
                           
                           <p><br />
                           If you and Saiyonee don&rsquo;t resolve any dispute by informal negotiation, any other effort to resolve the dispute will be conducted exclusively by binding arbitration as described in this section. You are giving up the right to litigate (or participate in as a party or class member) all disputes in court before a judge or jury. The dispute shall be settled by binding arbitration in accordance with the commercial arbitration rules of the American Arbitration Association. Either party may seek any interim or preliminary injunctive relief from any court of competent jurisdiction, as necessary to protect the party&rsquo;s rights or property pending the completion of arbitration. Any and all legal, accounting, and other costs, fees, and expenses incurred by the prevailing party shall be borne by the non-prevailing party.</p>
                           
                           <h4 class="grey_text"><br />
                           <strong>Submissions and Privacy</strong></h4>
                           
                           <p><br />
                           In the event that you submit or post any ideas, creative suggestions, designs, photographs, information, advertisements, data or proposals, including ideas for new or improved products, services, features, technologies or promotions, you expressly agree that such submissions will automatically be treated as non-confidential and non-proprietary and will become the sole property of Saiyonee without any compensation or credit to you whatsoever. Saiyonee and its affiliates shall have no obligations with respect to such submissions or posts and may use the ideas contained in such submissions or posts for any purposes in any medium in perpetuity, including, but not limited to, developing, manufacturing, and marketing products and services using such ideas.</p>
                           
                           <h4 class="grey_text"><br />
                           <strong>Promotions</strong></h4>
                           
                           <p><br />
                           Saiyonee may, from time to time, include contests, promotions, sweepstakes, or other activities (&ldquo;Promotions&rdquo;) that require you to submit material or information concerning yourself. Please note that all Promotions may be governed by separate rules that may contain certain eligibility requirements, such as restrictions as to age and geographic location. You are responsible to read all Promotions rules to determine whether or not you are eligible to participate. If you enter any Promotion, you agree to abide by and to comply with all Promotions Rules.</p>
                           
                           <p>Additional terms and conditions may apply to purchases of goods or services on or through the Services, which terms and conditions are made a part of this Agreement by this reference.</p>
                           
                           <h4 class="grey_text"><br />
                           <strong>Typographical Errors</strong></h4>
                           
                           <p><br />
                           In the event a product and/or service is listed at an incorrect price or with incorrect information due to typographical error, we shall have the right to refuse or cancel any orders placed for the product and/or service listed at the incorrect price. We shall have the right to refuse or cancel any such order whether or not the order has been confirmed and your credit card charged. If your credit card has already been charged for the purchase and your order is canceled, we shall immediately issue a credit to your credit card account or other payment account in the amount of the charge.</p>
                           
                           <h4 class="grey_text"><br />
                           <strong>Miscellaneous</strong></h4>
                           
                           <p><br />
                           If for any reason a court of competent jurisdiction finds any provision or portion of these Terms &amp; Conditions to be unenforceable, the remainder of these Terms &amp; Conditions will continue in full force and effect. Any waiver of any provision of these Terms &amp; Conditions will be effective only if in writing and signed by an authorized representative of Saiyonee. Saiyonee<br />
                           will be entitled to injunctive or other equitable relief (without the obligations of posting any bond or surety) in the event of any breach or anticipatory breach by you. Saiyonee operates and controls the Saiyonee Service from its offices in Bangladesh. The Service is not intended for distribution to or use by any person or entity in any jurisdiction or country where such distribution or<br />
                           use would be contrary to law or regulation. Accordingly, those persons who choose to access the Saiyonee Service from other locations do so on their own initiative and are solely responsible for compliance with local laws, if and to the extent local laws are applicable. These Terms &amp; Conditions (which include and incorporate the Saiyonee Privacy Policy) contains the entire understanding, and supersedes all prior understandings, between you and Saiyonee concerning its subject matter, and cannot be changed or modified by you. The section headings used in this Agreement are for convenience only and will not be given any legal import.</p>
                           
                           <h4 class="grey_text"><br />
                           <strong>Disclaimer</strong></h4>
                           
                           <p><br />
                           Saiyonee is not responsible for any content, code or any other imprecision.</p>
                           
                           <p><br />
                           Saiyonee does not provide warranties or guarantees.</p>
                           
                           <p><br />
                           In no event shall Saiyonee be liable for any special, direct, indirect, consequential, or incidental damages or any damages whatsoever, whether in an action of contract, negligence or other tort, arising out of or in connection with the use of the Service or the contents of the Service. The Company reserves the right to make additions, deletions, or modifications to the contents on the Service at any time without prior notice.</p>
                           
                           <p><br />
                           The Saiyonee Service and its contents are provided &quot;as is&quot; and &quot;as available&quot; without any warranty or representations of any kind, whether express or implied. Saiyonee is a distributor and not a publisher of the content supplied by third parties; as such, Saiyonee exercises no editorial control over such content and makes no warranty or representation as to the accuracy, reliability or currency of any information, content, service or merchandise provided through or accessible via the Saiyonee Service. Without limiting the foregoing, Saiyonee specifically disclaims all warranties and representations in any content transmitted on or in connection with the Saiyonee Service or on sites that may appear as links on the Saiyonee Service, or in the products provided as a part of, or otherwise in connection with, the Saiyonee Service, including without limitation any warranties of merchantability, fitness for a particular purpose or non-infringement of third party rights. No oral advice or written information given by Saiyonee or any of its affiliates, employees, officers, directors, agents, or the like will create a warranty. Price and availability information is subject to change without notice. Without limiting the foregoing, Saiyonee does not warrant that the Saiyonee Service will be uninterrupted, uncorrupted, timely, or error-free.</p>
                           
                           <h4 class="grey_text"><br />
                           <strong>Contact Us</strong></h4>
                           
                           <p><br />
                           Don&#39;t hesitate to contact us if you have any questions.</p>
                           
                           <ul class="list_disc">
                              <li>Via Email: contact@saiyonee.com</li>
                              <li>Via Phone Number: 01327230288</li>
                              <li>Via this Link: http://saiyonee.com/#contact</li>
                              <li>Via this Address: 9 Dhaka Housing, North Adabar, Dhaka</li>
                           </ul>                           
                     </span>

                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!--=================================
   page-section -->
@endsection

@push('page-specific-js')
   <script>
      $( document ).ready(function() {
            setTimeout(() => {
               $("#newsletter_modal").modal('show');
            }, 2000);
      });
   </script>

   {{-- RBox plugin JS --}}
   <script src="{{asset('frontend/rbox/jquery-rbox.js')}}"></script>
   <script>
      $(".rbox-video-autoplay").rbox({
            'type': 'video',
      });
   </script>
@endpush