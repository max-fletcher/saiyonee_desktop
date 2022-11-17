@extends('frontend.layouts.base')

@section('frontend-header-title')Story Details @endsection

@section('frontend-page-content')

    <!--=================================
    banner -->
    <section class="inner-intro bg bg-fixed bg-overlay-black-60" style="background-image:url({{ asset('frontend/images/bg/inner-bg-1.jpg') }});">
        <div class="container">
            <div class="row intro-title text-center">
                <div class="col-md-12">
                    <div class="section-title">
                        <h1 class="position-relative divider">Quinnel &amp; Jonet<span class="sub-title">Love Story</span></h1>
                    </div>
                </div>
                <div class="col-md-12 mt-7">
                    <ul class="page-breadcrumb">
                        <li><a href="index-default.html"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                        <li><a href="stories.html">Stories</a> <i class="fa fa-angle-double-right"></i></li>
                        <li><span>stories Details</span> </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
    banner -->
  
  <section class="page-section-ptb">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="title">Post by-<span class="text-yellow text-uppercase">johnet leo</span></h3>
          <h6 class="clearfix mb-2">23rd November ,2022, at 5.40 PM</h6>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12"> <img class="img-fluid mb-5 sm-mb-3" src="{{ asset('frontend/images/story/stories-1.jpg') }}" alt="" />
          <p class="mb-0">ARE YOU FAMOUS OR FOCUSED?  Are you famous or are you focused? Let’s start with “famous”. When people look at you, what do they say that you are famous for? Are you famous for procrastination…negative words…poor time management…What are you famous for? Let me share with you what I am famous for. I am famous for consistent, structured, focused daily strategies and techniques to live a victorious life. I know…that is a pretty strong statement! You see, I would rather be “focused” than famous.  I am focused on success. I am focused on assisting you in achieving you dream and discover the greatness that is inside all of you! Forget about being famous, let’s be focused. Be focused on your dreams…be focused on providing for your family…be focused on building a huge team…be focused on Finding Your Why! Let’s commit today to become focused and start changing people’s lives<br/>
            <br/>
            Millions of people world wide watch shows like “Who wants to be a Millionaire” or “Lifestyles of the Rich and Famous”. The interesting thing is that everyone sitting on the couch with a bag of popcorn watching these shows are broke. Why? Because they are famous for sitting back and watching shows on other people being famous. How about we flick the switch in life from famous to focused. Stop dreaming of other people being famous and start being focused on your own destiny! You must laser-focus in on your success and demolish procrastination and create action. Demolish resolutions and create results! Let’s demolish fear and create faith! How is this all possible by simply being focused. How do people become gold medalist, super bowl champions, etc? They take charge of their lives, hire a coach and become focused<br/>
            <br/>
            What are you? Who are you? Where are you going? How are you going to get there? More importantly, why are you not focused? Those that know their “Why” are very focused. I am focused on my Why of changing lives of Champions worldwide through my coaching, mentoring, seminars and success library and creating massive success in those Champions lives!  Do not allow famous to get in your way of being focused. Make a commitment today to forget fame and become laser-focused! Let’s get focused and know your Why! Let’s go out and impact the world one heart at a time. Focus creates success and Fame creates problems. It’s your decision…become focused and live your dream!!! Find Your Why &amp; Fly </p>
        </div>
      </div>
    </div>
  </section>
  <section class="page-section-ptb grey-bg story-slider">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 text-center">
          <h2 class="title divider">They Found True Love</h2>
        </div>
      </div>
    </div>
    <div class="owl-carousel owl-theme" data-nav-dots="true" data-items="5" data-md-items="4" data-sm-items="3" data-xx-items="1" data-space="30">
      <div class="item">
        <div class="story-item">
          <div class="story-image clearfix"><img class="img-fluid" src="{{ asset('frontend/images/story/01.jpg') }}" alt="" />
            <div class="story-link"><a href="stories-details.html"><i class="glyph-icon flaticon-add"></i></a></div>
          </div>
          <div class="story-details text-center">
            <h5 class="title divider-3">Quinnel &amp; Jonet</h5>
            <div class="about-des mt-3">Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in</div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="story-item">
          <div class="story-image clearfix"><img class="img-fluid" src="{{ asset('frontend/images/story/02.jpg') }}" alt="" />
            <div class="story-link"><a href="stories-details.html"><i class="glyph-icon flaticon-add"></i></a></div>
          </div>
          <div class="story-details text-center">
            <h5 class="title divider-3">Adam &amp; Eve</h5>
            <div class="about-des mt-3">Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in</div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="story-item">
          <div class="story-image clearfix"><img class="img-fluid" src="{{ asset('frontend/images/story/03.jpg') }}" alt="" />
            <div class="story-link"><a href="stories-details.html"><i class="glyph-icon flaticon-add"></i></a></div>
          </div>
          <div class="story-details text-center">
            <h5 class="title divider-3">Bella &amp; Edward</h5>
            <div class="about-des mt-3">Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in</div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="story-item">
          <div class="story-image clearfix"><img class="img-fluid" src="{{ asset('frontend/images/story/04.jpg') }}" alt="" />
            <div class="story-link"><a href="stories-details.html"><i class="glyph-icon flaticon-add"></i></a></div>
          </div>
          <div class="story-details text-center">
            <h5 class="title divider-3">DEMI &amp; HEAVEN</h5>
            <div class="about-des mt-3">Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in</div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="story-item">
          <div class="story-image clearfix"><img class="img-fluid" src="{{ asset('frontend/images/story/05.jpg') }}" alt="" />
            <div class="story-link"><a href="stories-details.html"><i class="glyph-icon flaticon-add"></i></a></div>
          </div>
          <div class="story-details text-center">
            <h5 class="title divider-3">David &amp; Bathsheba</h5>
            <div class="about-des mt-3">Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in</div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="story-item">
          <div class="story-image clearfix"><img class="img-fluid" src="{{ asset('frontend/images/story/06.jpg') }}" alt="" />
            <div class="story-link"><a href="stories-details.html"><i class="glyph-icon flaticon-add"></i></a></div>
          </div>
          <div class="story-details text-center">
            <h5 class="title divider-3">Eros &amp; Psychi</h5>
            <div class="about-des mt-3">Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in</div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="story-item">
          <div class="story-image clearfix"><img class="img-fluid" src="{{ asset('frontend/images/story/07.jpg') }}" alt="" />
            <div class="story-link"><a href="stories-details.html"><i class="glyph-icon flaticon-add"></i></a></div>
          </div>
          <div class="story-details text-center">
            <h5 class="title divider-3">Hector &amp; Andromache</h5>
            <div class="about-des mt-3">Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in</div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="story-item">
          <div class="story-image clearfix"><img class="img-fluid" src="{{ asset('frontend/images/story/08.jpg') }}" alt="" />
            <div class="story-link"><a href="stories-details.html"><i class="glyph-icon flaticon-add"></i></a></div>
          </div>
          <div class="story-details text-center">
            <h5 class="title divider-3">Bonnie &amp; Clyde</h5>
            <div class="about-des mt-3">Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in</div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="story-item">
          <div class="story-image clearfix"><img class="img-fluid" src="{{ asset('frontend/images/story/09.jpg') }}" alt="" />
            <div class="story-link"><a href="stories-details.html"><i class="glyph-icon flaticon-add"></i></a></div>
          </div>
          <div class="story-details text-center">
            <h5 class="title divider-3">Henry &amp; Clare</h5>
            <div class="about-des mt-3">Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in</div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="story-item">
          <div class="story-image clearfix"><img class="img-fluid" src="{{ asset('frontend/images/story/10.jpg') }}" alt="" />
            <div class="story-link"><a href="stories-details.html"><i class="glyph-icon flaticon-add"></i></a></div>
          </div>
          <div class="story-details text-center">
            <h5 class="title divider-3">Casanova &amp; Francesca</h5>
            <div class="about-des mt-3">Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in</div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="story-item">
          <div class="story-image clearfix"><img class="img-fluid" src="{{ asset('frontend/images/story/11.jpg') }}" alt="" />
            <div class="story-link"><a href="stories-details.html"><i class="glyph-icon flaticon-add"></i></a></div>
          </div>
          <div class="story-details text-center">
            <h5 class="title divider-3">Jack &amp; Sally</h5>
            <div class="about-des mt-3">Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in</div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="story-item">
          <div class="story-image clearfix"><img class="img-fluid" src="{{ asset('frontend/images/story/12.jpg') }}" alt="" />
            <div class="story-link"><a href="stories-details.html"><i class="glyph-icon flaticon-add"></i></a></div>
          </div>
          <div class="story-details text-center">
            <h5 class="title divider-3">James &amp; Lilly</h5>
            <div class="about-des mt-3">Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in</div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

@push('page-specific-js')
@endpush
