<!--=================================
footer -->
<footer id="contact" class="page-section-pt text-white text-center" style="background: url({{ asset('frontend/images/background.png') }}) no-repeat 0 0; background-size: cover;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row mb-4 mb-md-5">
                    <div class="col-md-12">
                        <h2 class="title divider mb-3 contact_us_title">Contact Us</h2>
                        <p class="lead">We love our customers, so feel free to visit during normal business hours.</p>
                    </div>
                </div>
                <div class="row mb-4 mb-md-5">
                <div class="col-md-4">
                    <div class="address-block"> <img src="{{ asset('frontend/images/icon1.png') }}" width="40" alt=""> </i> <a href="tel:+8801737556883">+8801737556883</a> </div>
                </div>
                <div class="col-md-4">
                    <div class="address-block"> <img src="{{ asset('frontend/images/icon2.png') }}" width="40" alt=""></i>
                    <address>
                    T317 Timber Oak Drive<br/>
                    Sundown, TX 79372
                    </address>
                    </div>
                </div>
                    <div class="col-md-4">
                        <div class="address-block"> <img src="{{ asset('frontend/images/icon3.png') }}" width="40" alt=""></i> <a href="mailto:contact@saiyonee.com">contact@saiyonee.com</a> </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <h4 class="title divider-3" style="font-weight: 700;">We Love Talking</h4>
                    </div>
                </div>
                <div class="row mb-0 mb-md-2 mb-lg-3 mb-xl-4">
                    <div class="col-md-12 mb-0 mb-lg-2">
                        <div id="formmessage" style="display:none">Success/Error Message Goes Here</div>
                        <form id="contactform" class="main-form" method="post" action="http://themes.potenzaglobalsolutions.com/html/cupid-love-dating-website-html5-template/cupid-love/php/contact-form.php">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                <div class="input-group">
                                    <input id="name" placeholder="Your name here" class="form-control input_text" name="name" type="text">
                                </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                <div class="input-group">
                                    <input id="email" placeholder="Your mail here" class="form-control input_text" name="email" type="email">
                                </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                <div class="input-group">
                                    <textarea id="message" class="form-control input-message input_text" placeholder="Your message here*" rows="7" name="message"></textarea>
                                </div>
                                </div>
                                <div class="col-md-12 mb-0">
                                <input type="hidden" name="action" value="sendEmail"/>
                                {{-- <button id="submit" name="submit" type="submit" value="Send" class="button btn-lg btn-theme full-rounded animated right-icn mb-0"><span>Submit Now<i class="glyph-icon flaticon-hearts" aria-hidden="true"></i></span></button> --}}
                                <button type="button" class="btn btn-light uppercase contact_us_submit_btn mt-5">Submit Now</button>
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
                    <li class="social-facebook"><a href="#" class="text-dark"><i class="fa fa-facebook social_link"></i></a></li>
                    <li class="social-instagram"><a href="#" class="text-dark"><i class="fa fa-instagram social_link"></i></a></li>
                    <li class="social-linkedin"><a href="#" class="text-dark"><i class="fa fa-linkedin social_link"></i></a></li>
                    {{-- <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="social-dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li class="social-gplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li class="social-youtube"><a href="#"><i class="fa fa-youtube"></i></a></li> --}}
                    </ul>
                </div>
                <p class="copyright">© 2022  - Saiyonee All Right Reserved </p>
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

    .social_link{
        font-size: 23px;
    }

    .copyright{
        color: #212529!important;
    }

    #newsletter_modal{
        height: 70%;
    }

    #newsletter_modal>.modal-dialog>.modal-content>.modal-header{
        border-bottom: none;
    }
</style>