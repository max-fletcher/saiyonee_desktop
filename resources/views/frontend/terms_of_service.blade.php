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

      @media screen and (max-width: 767px){
         h4 {
               font-size: 40px;
         }
      }

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

                           <h4 class="fw-bold grey_text">Updated at 2023-02-01</h4>

                           <p><br />
                           Saiyonee (&ldquo;we,&rdquo; &ldquo;our,&rdquo; or &ldquo;us&rdquo;) is committed to protecting your privacy. This Privacy Policy explains how your personal information is collected, used, and disclosed by Saiyonee.</p>

                           <p><br />
                           This Privacy Policy applies to our website, and its associated subdomains (collectively, our &ldquo;Service&rdquo;) alongside our application, Saiyonee. By accessing or using our Service, you signify that you have read, understood, and agree to our collection, storage, use, and disclosure of your personal information as described in this Privacy Policy and our Terms of Service.</p>

                           <h4 class="grey_text"><br />
                           <strong>Definitions and key terms</strong></h4>

                           <p><br />
                           To help explain things as clearly as possible in this Privacy Policy, every time any of these terms are referenced, are strictly defined as:</p>

                           <ul class="list_disc">
                              <li>Cookie: small amount of data generated by a website and saved by your web browser. It is used to identify your browser, provide analytics, remember information about you such as your language preference or login information.</li>
                              <li>Company: when this policy mentions &ldquo;Company,&rdquo; &ldquo;we,&rdquo; &ldquo;us,&rdquo; or &ldquo;our,&rdquo; it refers to Matpreneur Ltd, 9 Dhaka Housing, North Adabar, Dhaka that is responsible for your information under this Privacy Policy.</li>
                              <li>Country: where Saiyonee or the owners/founders of Saiyonee are based, in this case is Bangladesh</li>
                              <li>Customer: refers to the company, organization or person that signs up to use the Saiyonee Service to manage the relationships with your consumers or service users.</li>
                              <li>Device: any internet connected device such as a phone, tablet, computer or any other device that can be used to visit Saiyonee and use the services. IP address: Every device connected to the Internet is assigned a number known as an Internet protocol (IP) address. These numbers are usually assigned in geographic blocks. An IP address can often be used to identify the location from which a device is connecting to the Internet.</li>
                              <li>Personnel: refers to those individuals who are employed by Saiyonee or are under contract to perform a service on behalf of one of the parties.</li>
                              <li>Personal Data: any information that directly, indirectly, or in connection with other information &mdash; including a personal identification number &mdash; allows for the identification or identifiability of a natural person.</li>
                              <li>Service: refers to the service provided by Saiyonee as described in the relative terms (if available) and on this platform.</li>
                              <li>Third-party service: refers to advertisers, contest sponsors, promotional and marketing partners, and others who provide our content or whose products or services we think may interest you. Website: Saiyonee&#39;s site, which can be accessed via this URL: http://saiyonee.com/</li>
                              <li>You: a person or entity that is registered with Saiyonee to use the Services.</li>
                           </ul>

                           <h4 class="grey_text"><br />
                           <strong>What Information Do We Collect ?</strong></h4>

                           <p><br />
                           We collect information from you when you visit our website, register on our site, place an order, subscribe to our newsletter, respond to a survey or fill out a form.</p>

                           <ul class="list_disc">
                              <li>Name / Username</li>
                              <li>Phone Numbers</li>
                              <li>Email Addresses</li>
                              <li>Mailing Addresses</li>
                              <li>Job Titles</li>
                              <li>Billing Addresses</li>
                              <li>Debit/credit card numbers</li>
                              <li>Age</li>
                              <li>Password</li>
                           </ul>

                           <p>We also collect information from mobile devices for a better user experience, although these features are completely optional:</p>

                           <ul class="list_disc">
                              <li>Location (GPS): Location data helps to create an accurate representation of your interests, and this can be used to bring more targeted and relevant ads to potential customers.</li>
                              <li>Phonebook (Contacts list): Your contacts list allows the website to be much more easy to use by the user, since accessing your contacts from the app makes you save tons of time.</li>
                              <li>Camera (Pictures): Granting camera permission allows the user to upload any picture straight from the website, you can safely deny camera permissions for this website.</li>
                              <li>Photo Gallery (Pictures): Granting photo gallery access allows the user to upload any picture from their photo gallery, you can safely deny photo gallery access for this website.</li>
                           </ul>

                           <h4 class="grey_text">&nbsp;</h4>

                           <h4 class="grey_text"><strong>How Do We Use The Information We Collect ?</strong></h4>

                           <p><br />
                           Any of the information we collect from you may be used in one of the following ways:</p>

                           <ul class="list_disc">
                              <li>To personalize your experience (your information helps us to better respond to your individual needs)</li>
                              <li>To improve our website (we continually strive to improve our website offerings based on the information and feedback we receive from you)</li>
                              <li>To improve customer service (your information helps us to more effectively respond to your customer service requests and support needs)</li>
                              <li>To process transactions</li>
                              <li>To administer a contest, promotion, survey or other site feature</li>
                              <li>To send periodic emails</li>
                           </ul>

                           <h4 class="grey_text"><br />
                           <strong>When does Saiyonee use end user information from third parties ?</strong></h4>

                           <p><br />
                           Saiyonee will collect End User Data necessary to provide the Saiyonee services to our customers.</p>

                           <p>
                           End users may voluntarily provide us with information they have made available on social media websites. If you provide us with any such information, we may collect publicly available information from the social media websites you have indicated. You can control how much of your information social media websites make public by visiting these websites and changing your privacy settings.</p>
                           <br>

                           <h4 class="grey_text"><strong>When does Saiyonee use customer information from third parties ?</strong></h4>

                           <p><br />
                           We receive some information from the third parties when you contact us. For example, when you submit your email address to us to show interest in becoming a Saiyonee customer, we receive information from a third party that provides automated fraud detection services to Saiyonee. We also occasionally collect information that is made publicly available on social media websites. You can control how much of your information social media websites make public by visiting these websites and changing your privacy settings.</p>

                           <h4 class="grey_text"><br />
                           <strong>Do we share the information we collect with third parties ?</strong></h4>

                           <p><br />
                           We may share the information that we collect, both personal and non-personal, with third parties such as advertisers, contest sponsors, promotional and marketing partners, and others who provide our content or whose products or services we think may interest you. We may also share it with our current and future affiliated companies and business partners, and if we are involved in a merger, asset sale or other business reorganization, we may also share or transfer your personal and non-personal information to our successors-in-interest.</p>

                           <p>We may engage trusted third party service providers to perform functions and provide services to us, such as hosting and maintaining our servers and the website, database storage and management, e-mail management, storage marketing, credit card processing, customer service and fulfilling orders for products and services you may purchase through the website. We will likely share your personal information, and possibly some non-personal information, with these third parties to enable them to perform these services for us and for you.</p>

                           <p>We may share portions of our log file data, including IP addresses, for analytics purposes with third parties such as web analytics partners, application developers, and ad networks. If your IP address is shared, it may be used to estimate general location and other technographics such as connection speed, whether you have visited the website in a shared location, and type of the device used to visit the website. They may aggregate information about our advertising and what you see on the website and then provide auditing, research and reporting for us and our advertisers. We may also disclose personal and non-personal information about you to government or law enforcement officials or private parties as we, in our sole discretion, believe necessary or appropriate in order to respond to claims, legal process (including subpoenas), to protect our rights and interests or those of a third party, the safety of the public or any person, to prevent or stop any illegal, unethical, or legally actionable activity, or to otherwise comply with applicable court orders, laws, rules and regulations.</p>

                           <h4 class="grey_text"><br />
                           <strong>Where and when is information collected from customers and end users ?</strong></h4>

                           <p><br />
                           Saiyonee will collect personal information that you submit to us. We may also receive personal information about you from third parties as described above.</p>

                           <h4 class="grey_text"><br />
                           <strong>How Do We Use Your Email Address?</strong></h4>

                           <p><br />
                           By submitting your email address on this website, you agree to receive emails from us. You can cancel your participation in any of these email lists at any time by clicking on the opt-out link or other unsubscribe option that is included in the respective email. We only send emails to people who have authorized us to contact them, either directly, or through a third party. We do not send unsolicited commercial emails, because we hate spam as much as you do. By submitting your email address, you also agree to allow us to use your email address for customer audience targeting on sites like Facebook, where we display custom advertising to specific people who have opted-in to receive communications from us. Email addresses submitted only through the order processing page will be used for the sole purpose of sending you information and updates pertaining to your order. If, however, you have provided the same email to us through another method, we may use it for any of the purposes stated in this Policy. Note: If at any time you would like to unsubscribe from receiving future emails, we include detailed unsubscribe instructions at<br />
                           the bottom of each email.</p>

                           <h4 class="grey_text"><br />
                           <strong>How Long Do We Keep Your Information?</strong></h4>

                           <p><br />
                           We keep your information only so long as we need it to provide Saiyonee to you and fulfill the purposes described in this policy. This is also the case for anyone that we share your information with and who carries out services on our behalf. When we no longer need to use your information and there is no need for us to keep it to comply with our legal or regulatory obligations, we&rsquo;ll either remove it from our systems or depersonalize it so that we can&#39;t identify you.</p>
                           <br>

                           <h4 class="grey_text"><strong>How Do We Protect Your Information?</strong></h4>
                           <br>

                           <p>We implement a variety of security measures to maintain the safety of your personal information when you place an order or enter, submit, or access your personal information. We offer the use of a secure server. All supplied sensitive/credit information is transmitted via Secure Socket Layer (SSL) technology and then encrypted into our Payment gateway providers database only to be accessible by those authorized with special access rights to such systems, and are required to keep the information confidential. After a transaction, your private information (credit cards, social security numbers, financials, etc.) is never kept on file. We cannot, however, ensure or warrant the absolute security of any information you transmit to Saiyonee or guarantee that your information on the Service may not be accessed, disclosed, altered, or destroyed by a breach of any of our physical, technical, or managerial safeguards.</p>
                           <br>

                           <h4 class="grey_text"><strong>Could my information be transferred to other countries?</strong></h4>
                           <br>

                           <p>Saiyonee is incorporated in Bangladesh. Information collected via our website, through direct interactions with you, or from use of our help services may be transferred from time to time to our offices or personnel, or to third parties, located throughout the world, and may be viewed and hosted anywhere in the world, including countries that may not have laws of general applicability regulating the use and transfer of such data. To the fullest extent allowed by applicable law, by using any of the above, you voluntarily consent to the trans-border transfer and hosting of such information.</p>
                           <br>

                           <h4 class="grey_text"><strong>Is the information collected through the Saiyonee Service secure?</strong></h4>
                           <br>

                           <p>We take precautions to protect the security of your information. We have physical, electronic, and managerial procedures to help safeguard, prevent unauthorized access, maintain data security, and correctly use your information. However, neither people nor security systems are foolproof, including encryption systems. In addition, people can commit intentional crimes, make mistakes or fail to follow policies. Therefore, while we use reasonable efforts to protect your personal information, we cannot guarantee its absolute security. If applicable law imposes any non-disclaimable duty to protect your personal information, you agree that intentional misconduct will be the standards used to measure our compliance with that duty.</p>

                           <h4 class="grey_text"><br />
                           <strong>Can I update or correct my information?</strong></h4>

                           <p><br />
                           The rights you have to request updates or corrections to the information Saiyonee collects depend on your relationship with Saiyonee. Personnel may update or correct their information as detailed in our internal company employment policies.</p>

                           <p>
                           Customers have the right to request the restriction of certain uses and disclosures of personally identifiable information as follows. You can contact us in order to (1) update or correct your personally identifiable information, (2) change your preferences with respect to communications and other information you receive from us, or (3) delete the personally identifiable information maintained about you on our systems (subject to the following paragraph), by cancelling your account. Such updates, corrections, changes and deletions will have no effect on other information that we maintain, or information that we have provided to third parties in accordance with this Privacy Policy prior to such update, correction, change or deletion. To protect your privacy and security, we may take reasonable steps (such as requesting a unique password) to verify your identity before granting you profile access or making corrections. You are responsible for maintaining the secrecy of your unique password and account information at all times.</p>

                           <p>
                           You should be aware that it is not technologically possible to remove each and every record of the information you have provided to us from our system. The need to back up our systems to protect information from inadvertent loss means that a copy of your information may exist in a non-erasable form that will be difficult or impossible for us to locate. Promptly after receiving your request, all personal information stored in databases we actively use, and other readily searchable media will be updated, corrected, changed or deleted, as appropriate, as soon as and to the extent reasonably and technically practicable. If you are an end user and wish to update, delete, or receive any information we have about you, you may do so by contacting<br />
                           the organization of which you are a customer.</p>

                           <h4 class="grey_text"><br />
                           <strong>Personnel</strong></h4>

                           <p><br />
                           If you are a Saiyonee worker or applicant, we collect information you voluntarily provide to us. We use the information collected for Human Resources purposes in order to administer benefits to workers and screen applicants.</p>

                           <p><br />
                           You may contact us in order to (1) update or correct your information, (2) change your preferences with respect to communications and other information you receive from us, or (3) receive a record of the information we have relating to you. Such updates, corrections, changes and deletions will have no effect on other information that we maintain, or information that we have provided to third parties in accordance with this Privacy Policy prior to such update, correction, change or deletion.</p>

                           <h4 class="grey_text"><br />
                           <strong>Sale of Business</strong></h4>

                           <p><br />
                           We reserve the right to transfer information to a third party in the event of a sale, merger or other transfer of all or substantially all of the assets of Saiyonee or any of its Corporate Affiliates (as defined herein), or that portion of Saiyonee or any of its Corporate Affiliates to which the Service relates, or in the event that we discontinue our business or file a petition or have filed against us a petition in bankruptcy, reorganization or similar proceeding, provided that the third party agrees to adhere to the terms of this Privacy Policy.</p>

                           <h4 class="grey_text"><br />
                           <strong>Affiliates</strong></h4>

                           <p><br />
                           We may disclose information (including personal information) about you to our Corporate Affiliates. For purposes of this Privacy Policy, &quot;Corporate Affiliate&quot; means any person or entity which directly or indirectly controls, is controlled by or is under common control with Saiyonee, whether by ownership or otherwise. Any information relating to you that we provide to our Corporate Affiliates will be treated by those Corporate Affiliates in accordance with the terms of this Privacy Policy.</p>

                           <h4 class="grey_text"><br />
                           <strong>Governing Law</strong></h4>

                           <p><br />
                           This Privacy Policy is governed by the laws of Bangladesh without regard to its conflict of laws provision. You consent to the exclusive jurisdiction of the courts in connection with any action or dispute arising between the parties under or in connection with this Privacy Policy except for those individuals who may have rights to make claims under Privacy Shield, or the Swiss-US framework.</p>

                           <p><br />
                           The laws of Bangladesh, excluding its conflicts of law rules, shall govern this Agreement and your use of the website. Your use of the website may also be subject to other local, state, national, or international laws.</p>

                           <p><br />
                           By using Saiyonee or contacting us directly, you signify your acceptance of this Privacy Policy. If you do not agree to this Privacy Policy, you should not engage with our website, or use our services. Continued use of the website, direct engagement with us, or following the posting of changes to this Privacy Policy that do not significantly affect the use or disclosure of your personal information will mean that you accept those changes.</p>

                           <h4 class="grey_text"><br />
                           <strong>Your Consent</strong></h4>

                           <p><br />
                           We&#39;ve updated our Privacy Policy to provide you with complete transparency into what is being set when you visit our site and how it&#39;s being used. By using our website, registering an account, or making a purchase, you hereby consent to our Privacy Policy and agree to its terms.</p>

                           <h4 class="grey_text"><br />
                           <strong>Links to Other Websites</strong></h4>

                           <p><br />
                           This Privacy Policy applies only to the Services. The Services may contain links to other websites not operated or controlled by Saiyonee. We are not responsible for the content, accuracy or opinions expressed in such websites, and such websites are not investigated, monitored or checked for accuracy or completeness by us. Please remember that when you use a link to go from the Services to another website, our Privacy Policy is no longer in effect. Your browsing and interaction on any other website, including those that have a link on our platform, is subject to that website&rsquo;s own rules and policies. Such third parties may use their own cookies or other methods to collect information about you.</p>

                           <h4 class="grey_text"><br />
                           <strong>Advertising</strong></h4>

                           <p><br />
                           This website may contain third party advertisements and links to third party sites. Saiyonee does not make any representation as to the accuracy or suitability of any of the information contained in those advertisements or sites and does not accept any responsibility or liability for the conduct or content of those advertisements and sites and the offerings made by the third parties. Advertising keeps Saiyonee and many of the websites and services you use free of charge. We work hard to make sure that ads are safe, unobtrusive, and as relevant as possible.<br />
                           Third party advertisements and links to other sites where goods or services are advertised are not endorsements or recommendations by Saiyonee of the third party sites, goods or services. Saiyonee takes no responsibility for the content of any of the ads, promises made, or the quality/reliability of the products or services offered in all advertisements. Cookies for Advertising These cookies collect information over time about your online activity on the website and other online services to make online advertisements more relevant and effective to you. This is known as interest-based advertising. They also perform functions like preventing the same ad from continuously reappearing and ensuring that ads are properly displayed for advertisers. Without cookies, it&rsquo;s really hard for an advertiser to reach its audience, or to know how many ads were shown and how many clicks they received.</p>

                           <h4 class="grey_text"><br />
                           <strong>Cookies</strong></h4>

                           <p><br />
                           Saiyonee uses &quot;Cookies&quot; to identify the areas of our website that you have visited. A Cookie is a small piece of data stored on your computer or mobile device by your web browser. We use Cookies to enhance the performance and functionality of our website but are non-essential to their use. However, without these cookies, certain functionality like videos may become unavailable or you would be required to enter your login details every time you visit the website as we would not be able to remember that you had logged in previously. Most web browsers can be set to disable the use of Cookies. However, if you disable Cookies, you may not be able to access functionality on our website correctly or at all. We never place Personally Identifiable Information in Cookies.</p>

                           <h4 class="grey_text"><br />
                           <strong>Blocking and disabling cookies and similar technologies</strong></h4>

                           <p><br />
                           Wherever you&#39;re located you may also set your browser to block cookies and similar technologies, but this action may block our essential cookies and prevent our website from functioning properly, and you may not be able to fully utilize all of its features and services. You should also be aware that you may also lose some saved information (e.g. saved login details, site preferences) if you block cookies on your browser. Different browsers make different controls available to you. Disabling a cookie or category of cookie does not delete the cookie from your browser, you will need to do this yourself from within your browser, you should visit your browser&#39;s help menu for more information.</p>

                           <h4 class="grey_text"><br />
                           <strong>Remarketing Services</strong></h4>

                           <p><br />
                           We use remarketing services. What Is Remarketing? In digital marketing, remarketing (or retargeting) is the practice of serving ads across the internet to people who have already visited your website. It allows your company to seem like they&#39;re &ldquo;following&rdquo; people around the internet by serving ads on the websites and platforms they use most.</p>

                           <h4 class="grey_text"><br />
                           <strong>Payment Details</strong></h4>

                           <p><br />
                           In respect to any credit card or other payment processing details you have provided us, we commit that this confidential information will be stored in the most secure manner possible.</p>

                           <h4 class="grey_text"><br />
                           <strong>Kids&#39; Privacy</strong></h4>

                           <p><br />
                           We collect information from kids under the age of 13 just to better our services. If You are a parent or guardian and You are aware that Your child has provided Us with Personal Data without your permission, please contact Us. If We become aware that We have collected Personal Data from anyone under the age of 13 without verification of parental consent, We take steps to remove that information from Our servers.</p>

                           <h4 class="grey_text"><br />
                           <strong>Changes To Our Privacy Policy</strong></h4>

                           <p><br />
                           We may change our Service and policies, and we may need to make changes to this Privacy Policy so that they accurately reflect our Service and policies. Unless otherwise required by law, we will notify you (for example, through our Service) before we make changes to this Privacy Policy and give you an opportunity to review them before they go into effect. Then, if you continue to use the Service, you will be bound by the updated Privacy Policy. If you do not want to agree to this or any updated Privacy Policy, you can delete your account.</p>

                           <h4 class="grey_text"><br />
                           <strong>Third-Party Services</strong></h4>

                           <p><br />
                           We may display, include or make available third-party content (including data, information, applications and other products services) or provide links to third-party websites or services (&quot;Third- Party Services&quot;). You acknowledge and agree that Saiyonee shall not be responsible for any Third-Party Services, including their accuracy, completeness, timeliness, validity, copyright compliance, legality, decency, quality or any other aspect thereof. Saiyonee does not assume and shall not have any liability or responsibility to you or any other person or entity for any Third-Party Services. Third-Party Services and links thereto are provided solely as a convenience to you and you access and use them entirely at your own risk and subject to such third parties&#39; terms and conditions.</p>

                           <h4 class="grey_text"><br />
                           <strong>Facebook Pixel</strong></h4>

                           <p><br />
                           Facebook pixel is an analytics tool that allows you to measure the effectiveness of your advertising by understanding the actions people take on your website. You can use the pixel to: Make sure your ads are shown to the right people. Facebook pixel may collect information from your device when you use the service. Facebook pixel collects information that is held in accordance<br />
                           with its Privacy Policy Tracking Technologies</p>

                           <ul class="list_disc">
                              <li><strong>Google Maps API</strong></li>
                           </ul>

                           <p style="margin-left:40px">Google Maps API is a robust tool that can be used to create a custom map, a searchable map, check-in functions, display<br />
                           live data synching with location, plan routes, or create a mashup just to name a few.<br />
                           Google Maps API may collect information from You and from Your Device for security purposes.<br />
                           Google Maps API collects information that is held in accordance with its Privacy Policy</p>

                           <ul class="list_disc">
                              <li><strong>Cookies</strong></li>
                           </ul>

                           <p style="margin-left:40px">We use Cookies to enhance the performance and functionality of our website but are non-essential to their use. However,<br />
                           without these cookies, certain functionality like videos may become unavailable or you would be required to enter your<br />
                           login details every time you visit the website as we would not be able to remember that you had logged in previously.</p>

                           <ul class="list_disc">
                              <li><strong>Local Storage</strong></li>
                           </ul>

                           <p style="margin-left:40px">Local Storage sometimes known as DOM storage, provides web apps with methods and protocols for storing client-side<br />
                           data. Web storage supports persistent data storage, similar to cookies but with a greatly enhanced capacity and no<br />
                           information stored in the HTTP request header.</p>

                           <ul class="list_disc">
                              <li><strong>Sessions</strong></li>
                           </ul>

                           <p style="margin-left:40px">Saiyonee uses &quot;Sessions&quot; to identify the areas of our website that you have visited. A Session is a small piece of data<br />
                           stored on your computer or mobile device by your web browser.</p>

                           <h4 class="grey_text"><br />
                           <strong>Information about General Data Protection Regulation(GDPR)</strong></h4>

                           <p><br />
                           We may be collecting and using information from you if you are from the European Economic Area (EEA), and in this section of our Privacy Policy we are going to explain exactly how and why is this data collected, and how we maintain this data under protection from being replicated or used in the wrong way.</p>

                           <h4 class="grey_text"><br />
                           <strong>What is GDPR?</strong></h4>

                           <p><br />
                           GDPR is an EU-wide privacy and data protection law that regulates how EU residents&#39; data is protected by companies and enhances the control the EU residents have, over their personal data.</p>

                           <p><br />
                           The GDPR is relevant to any globally operating company and not just the EU-based businesses and EU residents. Our customers&rsquo; data is important irrespective of where they are located, which is why we have implemented GDPR controls as our baseline standard for all our operations worldwide.</p>

                           <h4 class="grey_text"><br />
                           <strong>What is personal data?</strong></h4>

                           <p><br />
                           Any data that relates to an identifiable or identified individual. GDPR covers a broad spectrum of information that could be used on its own, or in combination with other pieces of information, to identify a person. Personal data extends beyond a person&rsquo;s name or email address. Some examples include financial information, political opinions, genetic data, biometric data, IP addresses, physical address, sexual orientation, and ethnicity.</p>

                           <p>&nbsp;</p>

                           <p>The Data Protection Principles include requirements such as:</p>

                           <ul class="list_disc">
                              <li>Personal data collected must be processed in a fair, legal, and transparent way and should only be used in a way that a person would reasonably expect.</li>
                              <li>Personal data should only be collected to fulfil a specific purpose and it should only be used for that purpose.</li>
                              <li>Organizations must specify why they need the personal data when they collect it.</li>
                              <li>Personal data should be held no longer than necessary to fulfil its purpose.</li>
                              <li>People covered by the GDPR have the right to access their own personal data. They can also request a copy of their data, and that their data be updated, deleted, restricted, or moved to another organization.</li>
                           </ul>

                           <br>
                           <h4 class="grey_text"><strong>Why is GDPR important?</strong></h4>

                           <p><br />
                           GDPR adds some new requirements regarding how companies should protect individuals&#39; personal data that they collect and<br />
                           process. It also raises the stakes for compliance by increasing enforcement and imposing greater fines for breach. Beyond<br />
                           these facts it&#39;s simply the right thing to do. At Saiyonee we strongly believe that your data privacy is very important and we<br />
                           already have solid security and privacy practices in place that go beyond the requirements of this new regulation.</p>

                           <h4 class="grey_text"><br />
                           <strong>Individual Data Subject&#39;s Rights - Data Access, Portability and Deletion</strong></h4>

                           <p><br />
                           We are committed to helping our customers meet the data subject rights requirements of GDPR. Saiyonee processes or stores<br />
                           all personal data in fully vetted, DPA compliant vendors. We do store all conversation and personal data for up to 6 years unless<br />
                           your account is deleted. In which case, we dispose of all data in accordance with our Terms of Service and Privacy Policy, but<br />
                           we will not hold it longer than 60 days.</p>

                           <p><br />
                           We are aware that if you are working with EU customers, you need to be able to provide them with the ability to access, update,<br />
                           retrieve and remove personal data. We got you! We&#39;ve been set up as self service from the start and have always given you<br />
                           access to your data and your customers data. Our customer support team is here for you to answer any questions you might<br />
                           have about working with the API.</p>

                           <h4 class="grey_text"><br />
                           <strong>California Residents</strong></h4>

                           <p><br />
                           The California Consumer Privacy Act (CCPA) requires us to disclose categories of Personal Information we collect and how we<br />
                           use it, the categories of sources from whom we collect Personal Information, and the third parties with whom we share it, which<br />
                           we have explained above.</p>

                           <p><br />
                           We are also required to communicate information about rights California residents have under California law. You may exercise<br />
                           the following rights:</p>

                           <ul class="list_disc">
                              <li>Right to Know and Access. You may submit a verifiable request for information regarding the: (1) categories of Personal Information we collect, use, or share; (2) purposes for which categories of Personal Information are collected or used by us; (3) categories of sources from which we collect Personal Information; and (4) specific pieces of Personal Information we have collected about you.</li>
                              <li>Right to Equal Service. We will not discriminate against you if you exercise your privacy rights.</li>
                              <li>Right to Delete. You may submit a verifiable request to close your account and we will delete Personal Information about you that we have collected.</li>
                              <li>Request that a business that sells a consumer&#39;s personal data, not sell the consumer&#39;s personal data.</li>
                           </ul>

                           <p><br />
                           If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact<br />
                           us.</p>

                           <p>
                           We do not sell the Personal Information of our users.</p>

                           <p>
                           For more information about these rights, please contact us.</p>

                           <h4 class="grey_text"><br />
                           <strong>California Online Privacy Protection Act (CalOPPA)</strong></h4>

                           <p><br />
                           CalOPPA requires us to disclose categories of Personal Information we collect and how we use it, the categories of sources from whom we collect Personal Information, and the third parties with whom we share it, which we have explained above.</p>

                           <p style="font-weight: 600;">
                           CalOPPA users have the following rights:</p>

                           <ul class="list_disc">
                              <li>Right to Know and Access. You may submit a verifiable request for information regarding the: (1) categories of PersonalInformation we collect, use, or share; (2) purposes for which categories of Personal Information are collected or used byus; (3) categories of sources from which we collect Personal Information; and (4) specific pieces of Personal Informationwe have collected about you.</li>
                              <li>Right to Equal Service. We will not discriminate against you if you exercise your privacy rights.</li>
                              <li>Right to Delete. You may submit a verifiable request to close your account and we will delete Personal Information about you that we have collected.</li>
                              <li>Right to request that a business that sells a consumer&#39;s personal data, not sell the consumer&#39;s personal data.</li>
                           </ul>

                           <p><br />
                           If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact<br />
                           us.</p>

                           <p>
                           We do not sell the Personal Information of our users.</p>

                           <p>
                           For more information about these rights, please contact us.</p>

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