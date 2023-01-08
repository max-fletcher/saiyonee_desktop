<!--=================================
header -->
<header id="header" class="dark">
    {{-- <div class="topbar">
        <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
            <div class="topbar-left text-start">
                <ul class="list-inline">
                <li><a href="mailto:contact@saiyonee.com"><i class="fa fa-envelope-o"> </i> contact@saiyonee.com </a></li>
                </ul>
            </div>
            </div>
            <div class="col-md-6">
            <div class="topbar-right text-end">
                <ul class="list-inline social-icons color-hover">
                <li class="social-facebook"><a href="https://www.facebook.com/saiyonee"><i class="fa fa-facebook"></i></a></li>
                <li class="social-instagram"><a href="https://www.instagram.com/my_saiyonee"><i class="fa fa-instagram"></i></a></li> --}}
                {{-- <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li> --}}
                {{-- <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li> --}}
                {{-- <li class="social-dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li> --}}
                {{-- <li class="social-gplus"><a href="#"><i class="fa fa-google-plus"></i></a></li> --}}
                {{-- <li class="social-youtube"><a href="#"><i class="fa fa-youtube"></i></a></li> --}}
                
                {{-- <li class="social-dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li> --}}
               {{--  </ul> --}}
                {{-- <ul class="list-inline text-uppercase top-menu">
                <li><a href="register.html">register</a></li>
                <li><a href="login.html">login</a></li>
                </ul> --}}
         {{--    </div>
            </div>
        </div>
        </div>
    </div> --}}
    <!--=================================
    mega menu -->
    <div class="menu">
        <!-- menu start -->
        <nav id="menu" class="mega-menu">
        <!-- menu list items container -->
        <section class="menu-list-items">
            <div class="container">
            <div class="row position-relative">
                <div class="col-md-12 position-relative">
                    <!-- menu logo -->
                    <ul class="menu-logo">
                        <li> <a href="/"><img src="{{ asset('frontend/images/saiyonee-header.png') }}" alt="logo" /> </a> </li>
                    </ul>

                    <!-- menu links -->
                    <ul class="menu-links">
                        <!-- active class -->
                        <li class="nav_link navbar_home">
                            <a href=@if(Route::currentRouteName() == 'index') "#top" @else {{ route('index', '#top') }} @endif> Home </a>
                        </li>
                        <li class="nav_link navbar_steps">
                            <a href=@if(Route::currentRouteName() == 'index') "#steps" @else {{ route('index', '#steps') }} @endif> Steps </a>
                        </li>
                        <li class="nav_link navbar_apps">
                            <a href=@if(Route::currentRouteName() == 'index') "#apps" @else {{ route('index', '#apps') }} @endif> Apps </a>
                        </li>
                        <li class="nav_link navbar_history">
                            <a href=@if(Route::currentRouteName() == 'index') "#history" @else {{ route('index', '#history') }} @endif> History </a>
                        </li>
                        <li class="nav_link navbar_video">
                            <a class="rbox-video-autoplay steps_video_link" data-rbox-type="video" data-rbox-video="{{ asset('frontend/videos/sign-up-video-tutorial.mp4') }}" data-rbox-autoplay="true">
                                Video
                            </a>
                        </li>
                        <li  class="nav_link navbar_contest">
                            <a href="{{ route('contest.index') }}"> Contest </a>
                        </li>
                        {{-- <li>
                            <a href="#testimonials"> Testimonials </a>
                        </li>
                        <li>
                            <a href="#loves"> Loves </a>
                        </li> --}}
                        <li class="nav_link navbar_contact">
                            <a href=@if(Route::currentRouteName() == 'index') "#contact" @else {{ route('index', '#contact') }} @endif> Contact </a>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
        </section>
        </nav>
        <!-- menu end -->
    </div>
</header>
<!--=================================
header -->