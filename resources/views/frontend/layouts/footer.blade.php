<!--=================================
footer -->
<footer id="contact" class="page-section-pt text-white text-center" style="background: url({{ asset('frontend/images/background.png') }}) no-repeat 0 0; background-size: cover;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row mb-4 mb-md-5">
                    <div class="col-md-12">
                        <h2 class="title divider mb-3 contact_us_title">Contact Us</h2>
                        {{--  <p cl0"lead">We love our customers, so feel free to visit during normal business hours.</p> --}}
                    </div>
                </div>
                <div class="row mb-4 mb-md-5">
                    {{--  <div class="col-md-4">
                        <div class="address-block"> <img src="{{ asset('frontend/images/icon1.png') }}" width="40" alt=""> </i> <a href="tel:+8801737556883">+8801737556883</a> </div>
                    </div>
                    <div class="col-md-4">
                        <div class="address-block"> <img src="{{ asset('frontend/images/icon2.png') }}" width="40" alt=""></i>
                        <address>
                        T317 Timber Oak Drive<br/>
                        Sundown, TX 79372
                        </address>
                        </div>
                    </div> --}}
                    <div class="col-md-12">
                        <div class="address-block"> <img src="{{ asset('frontend/images/icon3.png') }}" width="40" alt=""></i> <p>contact@saiyonee.com</p> </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <h4 class="title divider-3" style="font-weight: 700;">We love to hear from our customers.<br/>Please share your question or feedback using the form.</h4>
                    </div>
                </div>
                <div class="row mb-0 mb-md-2 mb-lg-3 mb-xl-4">
                    <div class="col-md-12 mb-0 mb-lg-2">
                        <div id="formmessage" style="display:none">Success/Error Message Goes Here</div>
                            <form id="contactform" class="main-form">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="input-group">
                                            <input id="contact_us_name" placeholder="Your name here" class="form-control input_text" name="name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="input-group">
                                            <input id="contact_us_email" placeholder="Your mail here" class="form-control input_text" name="email" type="email">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="input-group">
                                            <textarea id="contact_us_message" class="form-control input-message input_text" placeholder="Your message here*" rows="7" name="message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-0">
                                        <input type="hidden" name="action" value="sendEmail" />
                                        {{-- <button id="submit" name="submit" type="submit" value="Send" class="button btn-lg btn-theme full-rounded animated right-icn mb-0"><span>Submit Now<i class="glyph-icon flaticon-hearts" aria-hidden="true"></i></span></button> --}}
                                        <button id="contact_us_submit" type="button" class="btn btn-light uppercase contact_us_submit_btn mt-5">Submit Now</button>
                                    </div>
                                </div>
                            </form>
                        <div id="ajaxloader" style="display:none"><img class="center-block" src="{{ asset('frontend/images/loading.gif') }}" alt="" /></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-widget mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                <div class="footer-logo mb-2"> <img class="img-center" src="{{ asset('frontend/images/saiyonee-header.png') }}" alt="" /> </div>
                <div class="social-icons color-hover mt-2">
                    <ul>
                        <li class="social-facebook"><a href="https://www.facebook.com/saiyonee" class="text-dark icon_link"><i class="fa fa-facebook social_link"></i></a></li>
                        <li class="social-instagram"><a href="https://www.instagram.com/my_saiyonee" class="text-dark icon_link"><i class="fa fa-instagram social_link"></i></a></li>
                        <li class="social-linkedin"><a href="https://www.linkedin.com/company/saiyonee/" class="text-dark icon_link"><i class="fa fa-linkedin social_link"></i></a></li>
                        {{-- <li class="social-twitter"><a href="#" class="text-dark icon_link"><i class="fa fa-twitter social_link"></i></a></li> --}}
                        {{-- <li class="social-dribbble"><a href="#" class="text-dark icon_link"><i class="fa fa-dribbble social_link"></i></a></li> --}}
                        {{-- <li class="social-gplus"><a href="#" class="text-dark icon_link"><i class="fa fa-google-plus social_link"></i></a></li> --}}
                        {{-- <li class="social-youtube"><a href="#" class="text-dark icon_link"><i class="fa fa-youtube social_link"></i></a></li> --}}
                    </ul>
                </div>

                <div class="">
                    <ul class="d-md-flex justify-content-center">
                        <li class="fw-bold mx-md-2"><a href="{{ route('privacy_policy') }}" class="text-dark icon_link privacy_and_terms">Privacy Policy</a></li>
                        <li class="fw-bold mx-md-2"><a href="{{ route('terms_of_service') }}" class="text-dark icon_link privacy_and_terms">Terms Of Service</a></li>
                    </ul>
                </div>

                    <p class="copyright">© 2022 - Saiyonee All Right Reserved </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--=================================
footer -->

<style>
    input::placeholder{
        color: #dcdcdc !important;
    }

    textarea::placeholder{
        color: #dcdcdc !important;
    }

    .input_text{
        border-bottom-color: #212529 !important;
    }

    .contact_us_submit_btn{
        width: 55%;
        border-radius: 22px;
        height: 60px;
        font-weight: 700;
        font-size: 1.5rem;
        color:#212529!important;
    }

    .contact_us_submit_btn:hover{
        background-color:#000;
        border-color: #000;
        color:#f8f9fa !important;
    }

    .social_link{
        font-size: 23px;
    }

    .copyright{
        color: #212529!important;
        font-weight: 600;
    }

    #newsletter_modal{
        height: 70%;
    }

    #newsletter_modal>.modal-dialog>.modal-content>.modal-header{
        border-bottom: none;
    }

    .icon_link{
        padding-top: 4px;
    }
</style>