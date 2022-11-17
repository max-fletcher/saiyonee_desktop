@extends('frontend.layouts.base')

@section('home')active @endsection
@section('frontend-header-title')Home @endsection

@push('page-specific-css')
@endpush

@section('frontend-page-content')
    <!--=================================
    banner -->
    <section id="home-slider" class="fullscreen">
        <div class="carousel-inner">
            <!--/ Carousel item end -->
            <div class="mt-5 carousel-item active h-100 bg-overlay-red" style="background: url({{ asset('frontend/images/banner2.png') }}) no-repeat 0 0; background-size: cover;" >
                <div class="slider-content">
                <div class="container">
                    <div class="row carousel-caption align-items-center h-100">
                        <div class="col-md-12 text-start">
                            <h3 class="text-dark" style="font-weight: 600">Smarter Way to</h3>
                        <div class="slider-1">
                            <h1 class="animated2 text-white divider-3">Find <span>Your</span> Perfect <span> Match !</span></h1>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
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
                        <div class="timeline-badge"><img class="img-fluid" src="{{ asset('frontend/images/step1.png') }}" width="150" alt="" /></div>
                        <div class="timeline-panel">
                        <div class="timeline-heading text-center">
                            <h4 class="timeline-title divider-3">CREATE PROFILE</h4>
                        </div>
                        <div class="timeline-body">
                            <p>Fill up details about your education, family, likes, dislikes and more. Remember the more information you give, the better matches we can suggest!</p>
                        </div>
                        </div>
                    </li>
                <li>
                    <div class="timeline-badge"><img class="img-fluid" src="{{ asset('frontend/images/step2.png') }}" width="150" alt="" /></div>
                    <div class="timeline-panel">
                    <div class="timeline-heading text-center">
                        <h4 class="timeline-title divider-3">FIND MATCH</h4>
                    </div>
                    <div class="timeline-body">
                        <p>Browse our collection of potential brides and grooms, see their profiles and swipe right to the ones who seem like the right match for you.</p>
                    </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-badge"><img class="img-fluid" src="{{ asset('frontend/images/step3.png') }}" width="150" alt="" /></div>
                    <div class="timeline-panel">
                    <div class="timeline-heading text-center">
                        <h4 class="timeline-title divider-3">START DATING</h4>
                    </div>
                    <div class="timeline-body">
                        <p>Start messaging your potential soulmate, set up a meet, and find out if they really are the one.</p>
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
            {{-- <div class="container-fluid h-100">
                <div class="row justify-content-center mb-4">
                    <div class="col-md-8">
                    <h2 class="title divider">Download Our App</h2>
                    </div>
                </div>
                <div class="row justify-content-center justify-content-lg-start h-75">
                    <div class="col-lg-8 col-md-12 align-self-center">
                    <h2 class="title mb-3">Want ot find your match..!! <br/>
                        Get our app now.</h2>
                    <a class="button btn-dark btn-lg  full-rounded"><i class="fa fa-apple" aria-hidden="true"></i><span><span>available on the</span> app store</span></a> <a class="button btn-lg full-rounded white-bg text-dark"><img class="img-fluid me-2" src="{{ asset('frontend/images/play-icon.png') }}" alt=""><span><span>get it on</span> google play</span></a> </div>
                </div>
            </div> --}}
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
            <div class="col-md-6">
                <h3 class="title">Founded in 2020</h3>
                <h5 class="clearfix text-orange mb-4">New Generation Matchmaking</h5>
                <p class="mb-0">
                    Saiyonee is a Bangladeshi Matchmaking App that is demystifying and re-designing matchmaking. Saiyonee is committed to showcase you the widest possible pool of Bangladeshi singles in one platform. <br/>
                    <br/>
                    Saiyonee is a Bangladeshi Matchmaking App that is demystifying and re-designing matchmaking. Saiyonee is committed to showcase you the widest possible pool of Bangladeshi singles in one platform.
                </p>
            </div>
            </div>
        </div>
    </section>

    <section class="page-section-pb">
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
    </section>

    <section id="blogs" class="page-section-ptb grey-bg">
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
                    <a class="button" href="{{ route('blog.details') }}">read more..</a> </div>
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
                    <a class="button" href="{{ route('blog.details') }}">read more..</a> </div>
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
                    <a class="button" href="{{ route('blog.details') }}">read more..</a> </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!--=================================
    page-section -->
@endsection

@push('page-specific-js')
@endpush