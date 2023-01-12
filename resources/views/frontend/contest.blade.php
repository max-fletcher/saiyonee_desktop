@extends('frontend.layouts.base')

@section('home') active @endsection
@section('frontend-header-title') Home @endsection

@push('page-specific-css')

   {{-- For reCaptcha --}}
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <script type="text/javascript">
      function callbackThen(response){
         // read HTTP status
         console.log(response.status);
         
         // read Promise object
         response.json().then(function(data){
            console.log(data);
            if(data.success && data.score > 0.5){
               console.log('valid source');
            }
            else{
               document.getElementById('contestForm').addEventListener('submit', function(event){
                  event.preventDefault();

                  Swal.fire({
                     icon: 'error',
                     title: 'Form Submission Failed!',
                     text: "Recaptcha validation failed! Please try again.",
                     showConfirmButton: false,
                     timer: 2000,
                  })

               })
            }
         });
      }
      function callbackCatch(error){
         console.error('Error:', error)
         Swal.fire({
            icon: 'error',
            title: 'Form Submission Failed!',
            text: error,
            showConfirmButton: false,
            timer: 2000,
         })
      }
   </script>

   {!! htmlScriptTagJsApi([
         'callback_then' => 'callbackThen',
         'callback_catch' => 'callbackCatch'
   ]) !!}

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
         h2 {
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

   {{-- <link rel="stylesheet" href="{{ asset('dropify/css/dropify.css' )}}"> --}}

   <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
   <link rel="stylesheet" href="{{ asset('Image Uploader/image-uploader.min.css' )}}">
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

   {{-- <h2>HTML5 Video</h2>
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
               <h2 class="title divider-2"> <div>Saiyonee X Chitrogolpo presents</div> <div class="mt-4 contest_title">"তোমার আমার লাল নীল সংসারের গল্প"</div> </h2>
            </div>
         </div>

         <div class="row">
            <div class="col-12 px-2">
               <div class="row mb-0 mb-md-2 mx-3">
                  <div class="col-12 mb-0 mb-lg-2">

                     <h5 class="contest_opening mb-3"> Dear Couples, </h5>

                     <span class="contest_para">
                        Thank you for your interest in this contest. We are excited and eager to see your best memories as a couple.
                        Please upload <span class="underline">1 photo and 1 short video</span> that show how beautiful and precious your
                        relationship is.
                        <br><br>

                        <h6 class="contest_opening"> Photo submission guideline </h6>
                        It can be from any type of event or setup. Show us your favourite couple photo !
                        <br><br>

                        {{-- The image file size must not exceed 
                        <span class="underline">5 MB</span>. Having trouble to keep it under 5 MB ? You can use this online tool to shrink photo: 
                        <a class="contest_link" href="https://www.freeconvert.com/image-compressor" target="_blank">https://www.freeconvert.com/image-compressor</a>
                        <br><br> --}}

                        <h6 class="contest_opening"> Video submission guideline </h6>
                        Create a short video <span class="underline">under 30 seconds</span>. 

                        The video should cover <span class="underline">ONE</span> of the following theme, in the context of your relationship.
                        <br>
                        1. Why did you choose 'arranged marriage' over love marriage ?
                        <br>
                        2. What are the beautiful aspects of 'arranged marriage' in your opinion ?
                        <br>
                        3. What are the "myths" against 'arranged marriage' that you believe are not true ?
                        <br><br>

                        You can be as creative as you like !
                        <br><br>

                        <h6 class="contest_opening"> How to Upload ? </h6>
                        1. Please upload your photo and video in a Google drive/Dropbox /Onedrive/iCloud folder and share the link with us <span class="contest_opening"> (Recommended method) </span>
                        <br>
                        <span class="contest_opening">OR,</span>
                        <br>
                        2. Upload photo and video directly to this form
                        <br><br>

                        {{-- The file size must not exceed <span class="underline">25 MB</span>. Having trouble to keep it under 25 MB ? You can use this 
                        online tool to shrink your video:
                        <a class="contest_link" href="https://www.freeconvert.com/video-compressor" target="_blank">https://www.freeconvert.com/video-compressor</a>
                        <br><br> --}}

                        <h6 class="contest_opening mb-2"> Last date of submission : 20th January, 2023 </h6>
                        <br>

                        <h6 class="contest_opening mb-2 underline"> Awards </h6>

                        - <span class="font_inline_bold_800"> 1st award </span> will be given for <span class="font_inline_bold_800">
                        "Best Overall Photo and Video"</span> category. This couple will get an "Outdoor Photo + video shoot" by Chitrogolpo Sr. 
                        Photographer.
                        <br><br>

                        - <span class="font_inline_bold_800"> 2nd award </span> will be given for <span class="font_inline_bold_800"> 
                        "Best Photo" </span>. This couple will get an "Outdoor Photo + video shoot"  by Chitrogolpo Jr. Photographer.
                        <br><br>

                        - <span class="font_inline_bold_800"> 3rd award </span> will be given for <span class="font_inline_bold_800"> 
                        "Best Video" </span>. This couple will get an "Outdoor Photo + video shoot"  by Chitrogolpo Jr. Photographer.
                        <br><br>

                        - All of the <span class="font_inline_bold_800"> Top 10 photos and videos </span> winner will get exciting 
                        <span class="font_inline_bold_800"> merchandises </span> from <span class="font_inline_bold_800"> Saiyonee </span>.
                        <br><br>


                        <h6 class="contest_opening underline"> Contest Terms and conditions </h6>
                        1. For this contest, we are ONLY looking for couples who have done &quotArranged Marriage&quot. To elaborate further, 
                           couples who were first introduced through parent, family, online matchmaking sites, newspaper ad, 'Ghotok', matchmaking 
                           agency etc and eventually got married with both family's consent. 
                           <br><br>

                        2. You have to submit <span class="underline">1 photo and 1 short video</span> under 30 seconds. If you do not submit both, 
                           your submission will be considered <span class="underline">incomplete</span>.
                           <br><br>

                        3. <a class="contest_link" href="https://www.facebook.com/saiyonee" target="_blank">Saiyonee</a> and Chitrogolpo together will select the winners.
                           <br><br>

                        4. <span class="font_inline_bold_800"> Saiyonee will have the right to use Top 10 photos and videos in it's website and 
                           social media. Visit <a class="contest_link" href="www.saiyonee.com" target="_blank">www.saiyonee.com</a> to know more
                           about Saiyonee. </span>
                           <br><br>

                        5. If you have any question, please email to <span class="font_inline_bold_800"> contact@saiyonee.com </span> or message us 
                           in 
                           <br> 
                           facebook <a class="contest_link" href="https://www.facebook.com/saiyonee" target="_blank"> https://www.facebook.com/saiyonee </a> or
                           <br>
                           instagram <a class="contest_link" href="https://www.instagram.com/my_saiyonee" target="_blank"> https://www.instagram.com/my_saiyonee </a>
                           <br><br>

                        6. Saiyonee and Chitrogolpo reserve the right, at its sole discretion, to amend the rules, regulations, and duration of the campaign at any
                           time without any prior notice. Saiyonee and Chitrogolpo has the sole right to disqualify any individual or participants from the campaign.
                           <br><br>
                     </span>

                  </div>
               </div>
            </div>
         </div>

         <hr id="contest_section">

         {{-- @foreach($errors->all() as $error)
            <h1 style="color: #CF0000">{{ $error }}</h1>
         @endforeach --}}

         <div class="row contest_form_row">
            <div class="col-8 px-4">
               <div class="row mb-0 mb-md-2 mb-lg-3 mb-xl-4">
                  <div class="col-12 mb-0 mb-lg-2">
                     <div id="formmessage" style="display:none">Success/Error Message Goes Here</div>
                     <form method="POST" action="{{ route('contest.store', '#contest_section') }}" enctype="multipart/form-data" id="contestForm" class="main-form">
                        @csrf
                        <div class="row">
                           <div class="col-12 mb-5">
                              {{-- <div class="input-group"> --}}
                                 <label class="label_text" for="contest_user_name">
                                    Please tell us your names(Both Husband and Wife)<span class="text-danger"> *</span>
                                 </label>
                                 <input id="contest_user_name" placeholder="Your names here"
                                    class="form-control @error('contest_user_name') input_error_border_red @else input_text @enderror" name="contest_user_name"
                                    type="text" autocomplete="off" value="{{ old('contest_user_name') }}">
                              {{-- </div> --}}
                              @error('contest_user_name')
                                 <div class="text-red fw-bold">{{ $message }}</div>
                              @enderror
                           </div>

                           <div class="col-12 mb-5">
                              {{-- <div class="input-group"> --}}
                                 <label class="label_text" for="contest_marriage_year">
                                    When did you get married? (e.g 2016 / 2018 / 2020)<span class="text-danger"> *</span>
                                 </label>
                                 <input id="contest_marriage_year" placeholder="Your year of marriage here"
                                    class="form-control @error('contest_marriage_year') input_error_border_red @else input_text @enderror" name="contest_marriage_year"
                                    type="text" autocomplete="off" value="{{ old('contest_marriage_year') }}">
                              {{-- </div> --}}
                              @error('contest_marriage_year')
                                 <div class="text-red fw-bold">{{ $message }}</div>
                              @enderror
                           </div>

                           <div class="col-12 mb-5">

                              <label class="label_text mb-3" for="contest_marriage_medium">
                                 How did you get introduced?<span class="text-danger"> *</span>
                              </label>

                              <div class="form-check mb-1">
                                 <input class="form-check-input me-1" type="radio" name="contest_marriage_medium" id="parents_sibling" value="Parents/Sibling" checked>
                                 <label class="radio_label" for="parents_sibling">
                                    Parents/Sibling
                                 </label>
                              </div>
                              <div class="form-check mb-1">
                                 <input class="form-check-input me-1" type="radio" name="contest_marriage_medium" id="relative" value="Relative">
                                 <label class="radio_label" for="relative">
                                    Relative
                                 </label>
                              </div>
                              <div class="form-check mb-1">
                                 <input class="form-check-input me-1" type="radio" name="contest_marriage_medium" id="ghotok_or_marriage_media" value="Ghotok/Marriage Media">
                                 <label class="radio_label" for="ghotok_or_marriage_media">
                                    Ghotok/Marriage Media
                                 </label>
                              </div>

                              <div class="form-check mb-1">
                                 <input class="form-check-input me-1" type="radio" name="contest_marriage_medium" id="newspaper" value="Newspaper">
                                 <label class="radio_label" for="newspaper">
                                    Newspaper
                                 </label>
                              </div>
                              <div class="form-check mb-1">
                                 <input class="form-check-input me-1" type="radio" name="contest_marriage_medium" id="online_matchmaking_site" value="Online Matchmaking site">
                                 <label class="radio_label" for="online_matchmaking_site">
                                    Online Matchmaking site
                                 </label>
                              </div>
                              <div class="form-check mb-1">
                                 <input class="form-check-input me-1" type="radio" name="contest_marriage_medium" id="other" value="Other">
                                 <label class="radio_label" for="other">
                                    Other
                                 </label>
                              </div>

                              {{-- (e.g Parents / Ghotok / Neighbour / Relative etc) --}}

                              {{-- <div class="input-group"> --}}

                                 {{-- <input id="contest_marriage_medium" placeholder="Your marriage medium here"
                                    class="form-control @error('contest_marriage_medium') input_error_border_red @else input_text @enderror" name="contest_marriage_medium"
                                    type="text" autocomplete="off" value="{{ old('contest_marriage_medium') }}"> --}}
                              {{-- </div> --}}
                              @error('contest_marriage_medium')
                                 <div class="text-red fw-bold">{{ $message }}</div>
                              @enderror
                           </div>

                           <div class="col-12 mb-5">
                              {{-- <div class="input-group"> --}}
                                 <label class="label_text" for="contest_known_duration">
                                    How long did you get to know each-other before getting married? (e.g- 3 months / 1 year)<span class="text-danger"> *</span>
                                 </label>
                                 <input id="contest_known_duration" placeholder="Your acquaintance duration here"
                                    class="form-control @error('contest_known_duration') input_error_border_red @else input_text @enderror" name="contest_known_duration"
                                    type="text" autocomplete="off" value="{{ old('contest_known_duration') }}">
                              {{-- </div> --}}
                              @error('contest_known_duration')
                                 <div class="text-red fw-bold">{{ $message }}</div>
                              @enderror
                           </div>

                           <div class="col-md-12 mb-5">
                              {{-- <div class="input-group"> --}}
                                 <label class="label_text" for="contest_marriage_description">
                                    Please tell us a little about how you got introduced and then married (Max 200 words)
                                 </label>
                                 <textarea id="contest_marriage_description" 
                                    class="form-control input-message @error('contest_marriage_description') input_error_border_red @else input_text @enderror"
                                    placeholder="Your description here" rows="7" name="contest_marriage_description">{{ old('contest_marriage_description') }}</textarea>
                              {{-- </div> --}}
                              @error('contest_marriage_description')
                                 <div class="text-red fw-bold">{{ $message }}</div>
                              @enderror
                           </div>

                           <div class="col-12 mb-5">
                              {{-- <div class="input-group"> --}}
                                 <label class="label_text" for="contest_user_email">
                                    Email<span class="text-danger"> *</span>
                                 </label>
                                 <input id="contest_user_email" placeholder="Your email here" 
                                    class="form-control @error('contest_user_email') input_error_border_red @else input_text @enderror"
                                    name="contest_user_email" type="text" autocomplete="off" value="{{ old('contest_user_email') }}">
                              {{-- </div> --}}
                              @error('contest_user_email')
                                 <div class="text-red fw-bold">{{ $message }}</div>
                              @enderror
                           </div>

                           <div class="col-12 mb-5">
                              {{-- <div class="input-group"> --}}
                                 <label class="label_text" for="contest_phone_number">
                                    Phone Number<span class="text-danger"> *</span>
                                 </label>
                                 <input id="contest_phone_number" placeholder="Your phone number here" 
                                    class="form-control @error('contest_phone_number') input_error_border_red @else input_text @enderror"
                                    name="contest_phone_number" type="text" autocomplete="off" value="{{ old('contest_phone_number') }}">
                              {{-- </div> --}}
                              @error('contest_phone_number')
                                 <div class="text-red fw-bold">{{ $message }}</div>
                              @enderror
                           </div>

                           {{-- Shakib Bhai's Multi/Single File Submission Plugin --}}
                           <div class="col-12">
                              <label class="form-label contest_labels" for="InputName">Submit Image 
                                 <br> <small class="small_text">(max file upload size should be 30 MB)</small>
                              </label>
                              <div class="contest_image"></div>
                              @error('contest_image')
                                 <div class="text-red fw-bold">{{ $message }}</div>
                              @enderror
                              @error('contest_image.*')
                                 <div class="text-red fw-bold">{{ $message }}</div>
                              @enderror
                           </div>

                           <h3 class="mt-2 text-center font_weight_or">OR</h3>

                           <div class="col-md-12 mb-3">
                              {{-- <div class="input-group"> --}}
                                 <label class="label_text" for="contest_image_gdrive_url">
                                    Contest Image Google Drive Url
                                    <small class="small_text">(recommended)</small>
                                 </label>
                                 <input id="contest_image_gdrive_url" placeholder="Your google drive link here"
                                    class="form-control @error('contest_image_gdrive_url') input_error_border_red @else input_text @enderror"
                                    name="contest_image_gdrive_url" type="text" autocomplete="off" value="{{ old('contest_image_gdrive_url') }}">
                              {{-- </div> --}}
                              @error('contest_image_gdrive_url')
                                 <div class="text-red fw-bold">{{ $message }}</div>
                              @enderror
                           </div>

                           {{-- Shakib Bhai's Multi/Single File Submission Plugin --}}
                           <div class="col-12 mt-5">
                              <label class="form-label contest_labels" for="InputName">Submit Video 
                                 <br> <small class="small_text">(max file upload size should be 300 MB)
                              </label>
                              <div class="contest_video"></div>
                              @error('contest_video')
                                 <div class="text-red fw-bold">{{ $message }}</div>
                              @enderror
                              @error('contest_video.*')
                                 <div class="text-red fw-bold">{{ $message }}</div>
                              @enderror
                           </div>

                           <h3 class="mt-2 text-center font_weight_or">OR</h3>

                           <div class="col-md-12 mb-3">
                              {{-- <div class="input-group"> --}}
                                 <label class="label_text" for="contest_video_gdrive_url">
                                    Contest Video Google Drive Url
                                    <small class="small_text">(recommended)</small>
                                 </label>
                                 <input id="contest_video_gdrive_url" placeholder="Your google drive link here" 
                                    class="form-control input_text @error('contest_video_gdrive_url') input_error_border_red @else input_text @enderror"
                                    name="contest_video_gdrive_url" type="text" autocomplete="off" value="{{ old('contest_video_gdrive_url') }}">
                              {{-- </div> --}}
                              @error('contest_video_gdrive_url')
                                 <div class="text-red fw-bold">{{ $message }}</div>
                              @enderror
                           </div>

                           {{-- <div class="col-md-12 mb-3">
                              <div class="input-group">
                                 <input type="file" name="contest_video1" class="dropify" />
                              </div>
                           </div>
                           @error('contest_video1')
                              <div class="text-danger">{{ $message }}</div>
                           @enderror --}}

                           <div class="col-md-12 mt-4 mb-2">
                              {{-- <div class="input-group"> --}}
                                 <label class="label_text" for="contest_feedback">
                                    Do you have any opinion or feedback regarding this contest ?  Please share with us. We would love to hear from you (optional)
                                 </label>
                                 <textarea id="contest_feedback" 
                                    class="form-control input-message @error('contest_feedback') input_error_border_red @else input_text @enderror"
                                    placeholder="Your description here" rows="7" name="contest_feedback">{{ old('contest_feedback') }}</textarea>
                              {{-- </div> --}}
                              @error('contest_feedback')
                                 <div class="text-red fw-bold">{{ $message }}</div>
                              @enderror
                           </div>

                           <p class="mt-5 mb-3 fw-bold" style="font-size: 1rem;">
                              *Note: It is recommended to use a google drive link. Otherwise, the submission
                              may take too long or hang up. Just remember to make the folder accessible to everyone. To do that, store your files in a google drive folder, right click on that
                              folder and click the "Share" button. Then from the pop-up, select "Anyone with the link" from the "General Access" dropdown. Finally, click the "Copy link"
                              button and paste in the respective box.
                           </p>

                           <p class="mb-1 fw-bold" style="font-size: 1rem;">
                              Also, if both the image/video and google drive link is submitted, only the drive link will be saved.
                           </p>

                           <div class="col-md-12 mb-0 d-flex justify-content-center">
                              <button id="contest_submit" type="submit" class="btn btn-light uppercase contest_submit_btn mt-5">Submit Now</button>
                           </div>
                        </div>
                     </form>
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
   {{-- <script src="{{ asset('dropify/js/dropify.js' )}}"></script>

   <script type="text/javascript">
      $(document).ready(function(){
         $('.dropify').dropify();
      });
   </script> --}}

   {{-- Sweetalert JS --}}
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

   <script type="text/javascript">
      @if(session()->has('contest_success'))
         Swal.fire({
            icon: 'success',
            title: 'Form Submitted Successfully!',
            showConfirmButton: false,
            timer: 2000,
         })
      @endif
   </script>

   <script type="text/javascript">
      @if(session()->has('contest_failed'))
         Swal.fire({
            icon: 'error',
            title: 'Form Submission Failed!',
            text: 'Something went wrong! Please try again.',
            showConfirmButton: false,
            timer: 2000,
         })
      @endif
   </script>

   <script>
      $( "#contest_submit" ).on( "click", function() {
         Swal.fire({
            title: 'Please wait while your Image and Video is being uploaded...',
            didOpen: () => {
               Swal.showLoading()
            },
            timerProgressBar: true,
            allowOutsideClick: false,
         })
      });
   </script>

   <script src="{{ asset('Image Uploader/image-uploader.min.js' )}}"></script>

   <script type="text/javascript">
      $(document).ready(function(){
         $('.contest_image').imageUploader({imagesInputName: 'contest_image', multiple: false});
      });
   </script>

   <script type="text/javascript">
      $(document).ready(function(){
         $('.contest_video').imageUploader({imagesInputName: 'contest_video', multiple: false});
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