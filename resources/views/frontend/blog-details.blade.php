@extends('frontend.layouts.base')

@section('frontend-header-title')Blog Details @endsection

@section('frontend-page-content')
    <!--=================================
    banner -->
    <section class="inner-intro bg bg-fixed bg-overlay-black-60" style="background-image:url({{ asset('frontend/images/bg/inner-bg-1.jpg') }});">
    <div class="container">
      <div class="row intro-title justify-content-center">
        <div class="col-md-12">
          <div class="section-title">
            <h1 class="position-relative divider">Blog details <span class="sub-title w-100">Micro blogs</span></h1>
          </div>
        </div>
        <div class="col-md-12 mt-7">
          <ul class="page-breadcrumb">
            <li><a href="index-default.html"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
            <li><span>blog</span> <i class="fa fa-angle-double-right"></i></li>
            <li><span>Blog Single</span> </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!--=================================
  banner -->
  
  <!--=================================
  Page Section -->
  <section class="page-section-ptb">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="post">
            <div class="post-image clearfix"><img class="img-fluid" src="{{ asset('frontend/images/blog/blog-1.jpg') }}" alt="" /></div>
            <div class="post-details">
              <div class="post-title mt-2">
                <h5 class="title text-uppercase mt-2"><a href="#">A Brief History Of Creation</a></h5>
              </div>
              <p>March, 2022 by<a href="#">John Doe</a></p>
              <div class="post-icon">
                <div class="post-content">
                  <p>Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Curabitur aliquet quam.Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci.</p>
                  <br/>
                  <blockquote class="entry-quote">
                    <p>ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Curabitur aliquet quam.Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci.</p>
                    <div class="quote-author"><a href="#">- John Doe</a></div>
                  </blockquote>
                  <p>ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Curabitur aliquet quam.Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci.</p>
                </div>
                <br/>
                <div class="social-share-box mb-2">
                  <h5 class="title">Did You Like This Post? Share it :</h5>
                  <div class="team-social-icon social-icons social-icons-light social-colored-hover float-end">
                    <div class="social-icons color-hover">
                      <ul>
                        <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="social-gplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li class="social-dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="comments-1 d-flex">
                  <div class="comments-photo media-left"><a href="#"><img alt="" class="media-object" src="{{ asset('frontend/images/thumbnail/thum-1.jpg') }}" style="width:80px; height:80px;"></a></div>
                  <div class="comments-info media-body">
                    <h5 class="title">John Doe</h5>
                    <p>Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Curabitur aliquet quam.Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci.</p>
                  </div>
                </div>
                <div class="comment-box">
                  <div class="section-title">
                    <h3 class="title">Comments
                      <label class="form-label">(03)</label>
                    </h3>
                  </div>
                  <ol class="list-inline comment-list">
                    <li>
                      <div class="comments-media">
                        <div class="comments-photo media-left"><a href="#"><img alt="" class="media-object" src="{{ asset('frontend/images/thumbnail/thum-4.jpg') }}" style="width:80px; height:80px;"></a></div>
                        <div class="comments-info media-body">
                          <h5 class="title">John Doe</h5>
                          <div class="comment-metadata"><a href="#"><i class="fa fa-calendar"></i>July 18, 2022 at 1:26 pm</a></div>
                          <a href="#" class="reply button btn-sm full-rounded btn-colored"><span>Reply</span></a>
                          <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
                        </div>
                      </div>
                      <ul class="list-inline">
                        <li>
                          <div class="comments-media">
                            <div class="comments-photo media-left"><a href="#"><img alt="" class="media-object" src="{{ asset('frontend/images/thumbnail/thum-5.jpg') }}" style="width:80px; height:80px;"></a></div>
                            <div class="comments-info media-body">
                              <h5 class="title">John Doe</h5>
                              <div class="comment-metadata"><a href="#"><i class="fa fa-calendar"></i>July 18, 2022 at 1:26 pm</a></div>
                              <a href="#" class="reply button btn-sm full-rounded btn-colored"><span>Reply</span></a>
                              <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best.</p>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <div class="comments-media">
                        <div class="comments-photo media-left"><a href="#"><img alt="" class="media-object" src="{{ asset('frontend/images/thumbnail/thum-6.jpg') }}" style="width:80px; height:80px;"></a></div>
                        <div class="comments-info media-body">
                          <h5 class="title">John Doe</h5>
                          <div class="comment-metadata"><a href="#"><i class="fa fa-calendar"></i>July 18, 2022 at 1:26 pm</a></div>
                          <a href="#" class="reply button btn-sm full-rounded btn-colored"><span>Reply</span></a>
                          <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit lorem ipsum dolor sit amet of Lorem Ipsum. </p>
                        </div>
                      </div>
                    </li>
                  </ol>
                </div>
                <div class="comment-respond">
                  <div class="section-title text-start">
                    <h3 class="title">Leave a Reply</h3>
                    <p>Your email address will not be published. Required fields are marked *</p>
                  </div>
                  <div id="formmessage" style="display:none">Success/Error Message Goes Here</div>
                  <form id="contactform" role="form" method="post" action="http://themes.potenzaglobalsolutions.com/html/cupid-love-dating-website-html5-template/cupid-love/php/contact-form.php">
                    <div class="form-group mb-3 half-group">
                      <label class="form-label" for="InputName">Name*</label>
                      <div class="input-group">
                        <input type="text" class="form-control" id="InputName" placeholder="">
                      </div>
                    </div>
                    <div class="form-group mb-3 half-group">
                      <label class="form-label" for="InputEmail">Email*</label>
                      <div class="input-group">
                        <input type="email" class="form-control" id="InputEmail" placeholder="">
                      </div>
                    </div>
                    <div class="form-group mb-3">
                      <label class="form-label">Message*</label>
                      <div class="input-group">
                        <textarea class="form-control" rows="5"></textarea>
                      </div>
                    </div>
                    <div class="form-group sm-mb-0">
                      <input type="hidden" name="action" value="sendEmail"/>
                      <button id="submit" name="submit" type="submit" value="Send" class="button btn-lg btn-theme full-rounded animated right-icn"><span>Submit Now<i class="glyph-icon flaticon-hearts" aria-hidden="true"></i></span></button>
                    </div>
                  </form>
                  <div id="ajaxloader" style="display:none"><img class="center-block" src="{{ asset('frontend/images/loading.gif') }}" alt="" /></div>
                </div>
              </div>
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
@endpush
