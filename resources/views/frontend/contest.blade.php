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

   <style>
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

      .apps_para{
         font-size: 0.9rem;
         font-weight: 600;
      }

      .apps_para{
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

      .contest_submit_btn{
         width: 55%;
         border-radius: 22px;
         height: 60px;
         font-weight: 700;
         font-size: 1.5rem;
         background: #F99187;
      }

      .input_text::placeholder{
         color: #FFB7AC !important;
         font-weight: 600;
         font-size: 20px;
      }

      .input_text{
         color: #CF0000 !important;
         font-weight: 600;
         font-size: 20px;
      }

      .contest_labels{
         color: #FFB7AC !important;
         font-size: 20px;
         font-weight: 600;
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

   {{-- <link rel="stylesheet" href="{{ asset('dropify/css/dropify.css' )}}"> --}}

   <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
   <link rel="stylesheet" href="{{ asset('Image Uploader/image-uploader.min.css' )}}">
@endpush

@section('frontend-page-content')
   <!--=================================
   banner -->
   <section id="home-slider" class="fullscreen">
      <div class="carousel-inner">
         <!--/ Carousel item end -->
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
   </section>

   {{-- <h2>HTML5 Video</h2>
   <a href="#" class="rbox-video-autoplay" data-rbox-type="video" data-rbox-video="{{ asset('frontend/videos/sign-up-video-tutorial.mp4') }}" data-rbox-autoplay="true">
      Video with autoplay
   </a> --}}

   <!--=================================
   banner -->

   <!--=================================
   Page Section -->

   <section id="history" class="page-section-ptb">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-md-8 text-center mb-4 mb-md-5">
               <h2 class="title divider-2 mb-3">Contest</h2>
            </div>
         </div>

         @foreach($errors->all() as $error)
            <h1 style="color: #CF0000">{{ $error }}</h1>
         @endforeach

         <div class="row">
            <div class="col-12 px-4">
               <div class="row mb-0 mb-md-2 mb-lg-3 mb-xl-4">
                  <div class="col-12 mb-0 mb-lg-2">
                     <div id="formmessage" style="display:none">Success/Error Message Goes Here</div>
                     <form method="POST" action="{{ route('contest.store', '#contestForm') }}" enctype="multipart/form-data" id="contestForm" class="main-form">
                        @csrf
                        <div class="row">
                           <div class="col-md-6 mb-3">
                              <div class="input-group">
                                 <input id="contact_us_name" placeholder="Your name here" class="form-control input_text" name="contest_user_name"
                                    type="text" autocomplete="off" value="{{ old('contest_user_name') }}">
                              </div>
                              @error('contest_user_name')
                                 <div class="text-danger">{{ $message }}</div>
                              @enderror
                           </div>

                           <div class="col-md-6 mb-3">
                              <div class="input-group">
                                 <input id="contact_us_email" placeholder="Your mail here" class="form-control input_text" name="contest_user_email"
                                    type="text" autocomplete="off" value="{{ old('contest_user_email') }}">
                              </div>
                              @error('contest_user_email')
                                 <div class="text-danger">{{ $message }}</div>
                              @enderror
                           </div>

                           {{-- <div class="col-md-12 mb-3">
                              <div class="input-group">
                                 <textarea id="contact_us_message" class="form-control input-message input_text" placeholder="Your message here"
                                    rows="7" name="contest_user_message">{{ old('contest_user_message') }}</textarea>
                              </div>
                              @error('contest_user_message')
                                 <div class="text-danger">{{ $message }}</div>
                              @enderror
                           </div> --}}

                           {{-- <div class="col-md-12 mb-3">
                              <div class="input-group">
                                 <input type="file" name="previous_appointments[]" class="dropify"/>
                              </div>
                           </div> --}}

                           {{-- Shakib Bhai's Multi/Single File Submission Plugin --}}
                           <label class="form-label contest_labels mt-1" for="InputName">Submit Images</label>
                           <div class="contest_images"></div>
                           @error('contest_images')
                              <div class="text-danger">{{ $message }}</div>
                           @enderror

                           {{-- Shakib Bhai's Multi/Single File Submission Plugin --}}
                           <label class="form-label contest_labels mt-2" for="InputName">Submit Video</label>
                           <div class="contest_video"></div>
                           @error('contest_video')
                              <div class="text-danger">{{ $message }}</div>
                           @enderror

                           {{-- <div class="col-md-12 mb-3">
                              <div class="input-group">
                                 <input type="file" name="contest_video1" class="dropify" />
                              </div>
                           </div>
                           @error('contest_video1')
                              <div class="text-danger">{{ $message }}</div>
                           @enderror --}}

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

   <script src="{{ asset('Image Uploader/image-uploader.min.js' )}}"></script>

   <script type="text/javascript">
      $(document).ready(function(){
         $('.contest_images').imageUploader({imagesInputName: 'contest_images', multiple: true});
      });
   </script>

   <script type="text/javascript">
      $(document).ready(function(){
         $('.contest_video').imageUploader({imagesInputName: 'contest_video', multiple: false});
      });
   </script>
@endpush