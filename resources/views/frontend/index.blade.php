@extends('frontend.layouts.base')

@section('home') active @endsection
@section('frontend-header-title') Home @endsection

@push('page-specific-css')
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

    <section id="steps" class="page-section-ptb position-relative timeline-section">
        <div class="container">
            <div class="row justify-content-center mb-4 mb-md-5">
                <div class="col-md-10 text-center">
                    <h2 class="title divider mb-3">How to find your Soul Mate</h2>
                </div>
            </div>
            <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <ul class="timeline list-inline">
                    <li class="timeline-inverted">
                        <div class="timeline-badge"><img class="img-fluid image_circle" src="{{ asset('frontend/images/steps/1.png') }}" width="150" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading text-center">
                                <h4 class="timeline-title divider-3">CREATE PROFILE</h4>
                            </div>
                            <div class="timeline-body">
                                <p>Fill up your personal, family, educational and professional information. Remember, the more information you provide, the better matches we can suggest!
                                    <a class="rbox-video-autoplay steps_video_link" data-rbox-type="video" data-rbox-video="{{ asset('frontend/videos/sign-up-video-tutorial.mp4') }}" data-rbox-autoplay="true">
                                        Click here to see video instruction.
                                    </a>
                                </p>
                            </div>
                        </div>
                    </li>
                <li>
                    <div class="timeline-badge"><img class="img-fluid image_circle" src="{{ asset('frontend/images/steps/2.png') }}" width="150" alt="" /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading text-center">
                            <h4 class="timeline-title divider-3">FIND YOUR MATCH</h4>
                        </div>
                        <div class="timeline-body">
                            <p>We’ll show you potential bride/groom profiles one by one. You’ll hit LIKE button on a profile if you are interested. If that person also LIKES you back, it’s a MATCH!</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-badge"><img class="img-fluid image_circle" src="{{ asset('frontend/images/steps/3.png') }}" width="150" alt="" /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading text-center">
                            <h4 class="timeline-title divider-3">START DISCOVERING</h4>
                        </div>
                        <div class="timeline-body">
                            <p>Start messaging your potential soulmate and ask all you need to know. Satisfied? Now set up a meeting and find out if it’s the right person. We encourage involvement of family members throughout the journey.</p>
                        </div>
                    </div>
                </li>
                </ul>
            </div>
            </div>
        </div>
    </section>

    <section id="apps" class="page-section-ptb pb-0 text-center our-app position-relative overflow-h" style="background: url({{ asset('frontend/images/app-background.png') }}) no-repeat 0 0; background-size: cover;">
        <div class="timeline-inner" style="background: url({{ asset('frontend/images/apps.png') }});">
            <div class="container-fluid h-100">
                {{-- <div class="row justify-content-center mb-4">
                    <div class="col-md-8">
                    <h2 class="title divider">Download Our App</h2>
                    </div>
                </div> --}}
                <div class="row justify-content-center justify-content-lg-start h-75">
                    <div class="col-lg-8 col-md-12 align-self-center">
                    <h2 class="title mb-3 apps_title">Interested? Register Now!</h2>
                    <p class="apps_para"> 
                        Saiyonee is here to take away the usual pains that every family has to face in the rigorous journey of matchmaking in this country.
                        Through our extensive profile analysis and a smart algorithm, we will make sure that you find suitable partners for marriage to your taste.
                        Our target is to make educated Bangladeshi people from good family backgrounds find their right partner.
                    </p>
                    <a href="https://app.saiyonee.com"><button type="button" class="btn btn-light uppercase register_btn mt-3 mt-md-1">Register Now</button></a>
                    {{-- <a class="button btn-dark btn-lg  full-rounded"><i class="fa fa-apple" aria-hidden="true"></i><span><span>available on the</span> app store</span></a>
                    <a class="button btn-lg full-rounded white-bg text-dark"><img class="img-fluid me-2" src="{{ asset('frontend/images/play-icon.png') }}" alt=""><span><span>get it on</span> google play</span></a> </div> --}}
                </div>
            </div>
        </div>
    </section>

    <section id="history" class="page-section-ptb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center mb-4 mb-md-5">
                    <h2 class="title divider-2 mb-3">About Us</h2>
                </div>
            </div>
            <div class="row d-flex align-items-center">
            <div class="col-md-6 align-self-center mb-3"><img class="img-fluid" src="{{ asset('frontend/images/about/01.png') }}" alt="" /></div>
            <div class="col-md-6 founded_description">
                <h3 class="title">Founded in 2022</h3>
                <h5 class="clearfix text-orange mb-4">New Generation Matchmaking</h5>
                <p class="mb-0">
                    Saiyonee is a Bangladeshi Matchmaking App that is demystifying and re-designing matchmaking. Saiyonee is committed to showcase you the widest possible pool of Bangladeshi singles in one platform.
                </p>
            </div>
            </div>
        </div>
    </section>

    {{-- COUNTERS SECTION --}}
    {{-- <section class="page-section-pb">
        <div class="container">
            <div class="row">
            <div class="col-md-3 col-sm-6 d-flex">
                <div class="counter left_pos"> <i class="glyph-icon flaticon-people-2"></i> <span class="timer" data-to="1600" data-speed="10000">1600</span>
                <label class="lead muted form-label">Total Members</label>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 d-flex">
                <div class="counter left_pos"> <i class="glyph-icon flaticon-favorite"></i> <span class="timer" data-to="750" data-speed="10000">750</span>
                <label class="lead muted form-label">Online Members</label>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 d-flex">
                <div class="counter left_pos"> <i class="glyph-icon flaticon-charity"></i> <span class="timer" data-to="380" data-speed="10000">380</span>
                <label class="lead muted form-label">Men Online</label>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 d-flex">
                <div class="counter left_pos"> <i class="glyph-icon flaticon-candelabra"></i> <span class="timer" data-to="370" data-speed="10000">370</span>
                <label class="lead muted form-label">Women Online</label>
                </div>
            </div>
            </div>
        </div>
    </section> --}}

    {{-- RECENT BLOGS SECTION --}}
    {{-- <section id="blogs" class="page-section-ptb grey-bg">
        <div class="container">
            <div class="row justify-content-center mb-5 sm-mb-3">
                <div class="col-md-8 text-center">
                    <h2 class="title divider-2 mb-3">Our Recent Blogs</h2>
                </div>
            </div>
            <div class="row post-article">
                <div class="col-md-4">
                    <div class="post post-artical top-pos">
                        <div class="post-image clearfix"><img class="img-fluid" src="{{ asset('frontend/images/blog/05.jpg') }}" alt="" /></div>
                        <div class="post-details">
                            <div class="post-date">27<span class="text-black">MAR</span></div>
                            <div class="post-meta"> <a href="#"><i class="fa fa-user"></i> Admin</a> <a href="#"><i aria-hidden="true" class="fa fa-heart-o"></i>98 Like</a> <a href="#"><i class="fa fa-comments-o last-child"></i>Comments</a> </div>
                            <div class="post-title">
                                <h5 class="title text-uppercase"><a href="{{ route('blog.details') }}">Intentions That Energize You</a></h5>
                            </div>
                            <div class="post-content">
                                <p>Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Curabitur aliquet quam..</p>
                            </div>
                            <a class="button" href="{{ route('blog.details') }}">read more..</a> 
                        </div>
                    </div>
                </div>
            <div class="col-md-4">
                <div class="post post-artical top-pos">
                    <div class="post-image clearfix"><img class="img-fluid" src="{{ asset('frontend/images/blog/01.jpg') }}" alt="" /></div>
                    <div class="post-details">
                        <div class="post-date">15<span class="text-black">MAR</span></div>
                        <div class="post-meta"> <a href="#"><i class="fa fa-user"></i> Admin</a> <a href="#"><i aria-hidden="true" class="fa fa-heart-o"></i>98 Like</a> <a href="#"><i class="fa fa-comments-o last-child"></i>Comments</a> </div>
                        <div class="post-title">
                            <h5 class="title text-uppercase"><a href="{{ route('blog.details') }}">Major Motives Of Our Lives</a></h5>
                        </div>
                        <div class="post-content">
                            <p>Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Curabitur aliquet quam..</p>
                        </div>
                        <a class="button" href="{{ route('blog.details') }}">read more..</a> 
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="post post-artical top-pos sm-mb-0">
                    <div class="post-image clearfix"><img class="img-fluid" src="{{ asset('frontend/images/blog/02.jpg') }}" alt="" /></div>
                    <div class="post-details">
                        <div class="post-date">08<span class="text-black">MAR</span></div>
                        <div class="post-meta"> <a href="#"><i class="fa fa-user"></i> Admin</a> <a href="#"><i aria-hidden="true" class="fa fa-heart-o"></i>98 Like</a> <a href="#"><i class="fa fa-comments-o last-child"></i>Comments</a> </div>
                        <div class="post-title">
                            <h5 class="title text-uppercase"><a href="{{ route('blog.details') }}">A Brief History Of Creation</a></h5>
                        </div>
                        <div class="post-content">
                            <p>Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Curabitur aliquet quam..</p>
                        </div>
                        <a class="button" href="{{ route('blog.details') }}">read more..</a> 
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section> --}}

    {{-- POPUP MODAL ON PAGE LOAD --}}
    <div class="modal fade" id="newsletter_modal" tabindex="-1" aria-labelledby="newsletter_modal_label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header modal-header-onload-design onload-design text-center">
                    {{-- <div class="modal-rounded-decoration">
                    </div> --}}
                    <h2 class="modal-head-onload-design"> Want to become a <br/> Premium Member? </h2>
                    
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6 class="newsletter_modal_body_text">The first 1000 sign-ups will get the opportunity to enjoy a premium membership to our app. All the features 
                        of our app will be available to them free of cost! </h6>
                    {{-- <form>
                        <div class="mb-1">
                            <label for="email" class="col-form-label newsletter_modal_form_label">Email:</label>
                            <input type="text" class="form-control newsletter_modal_form_input" name="email" id="email" />
                        </div>
                    </form> --}}
                </div>
                <div class="modal-footer">
                    <a target="_blank" href="https://app.saiyonee.com"><button type="button"  class="btn btn-light uppercase modal-button mt-3 mt-md-1">Continue </button></a>
                    <p>By continuing you agree to our Terms and Privacy Policy.</p>
                </div>
            </div>
        </div>
    </div>

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