<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Cupid Love - Dating HTML5 Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Saiyonee</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.png') }}" />

    @include('frontend.layouts.inc.css')

    <style>
        .topbar ul li a:hover, .topbar ul li a:hover i{
            color: white !important;
        }

        h2.title.divider, h2.title.divider-2, h2.title.divider-3, h4.title.divider-3{
            color: #212529 !important;
        }

        .lead{
            color:#212529!important;
        }
    </style>

</head>

<body>

    <!--=================================
        preloader -->
    <div id="preloader">
        <div class="clear-loading loading-effect"><img src="images/loading.gif" alt="" /></div>
    </div>
    <!--=================================
        preloader -->


    @include('frontend.layouts.header')

    @yield('frontend-page-content')

    @include('frontend.layouts.footer')



    <!--=================================
        Color Customizer -->
    <!-- <div class="style-customizer closed">
        <div class="buy-button"> <a class="opener" href="#"><i class="fa fa-cog fa-spin"></i></a> </div>
        <div class="clearfix content-chooser">
            <div class="section-title">
            <h4 class="title">Color Schemes</h4>
            </div>
            <p>Which theme color you want to use? Here are some predefined colors.</p>
            <ul class="styleChange clearfix">
            <li class="skin-default selected" title="Default" data-style="skin-default" ></li>
            <li class="skin-tomato" title="tomato" data-style="skin-tomato"></li>
            <li class="skin-ruby" title="ruby" data-style="skin-ruby" ></li>
            <li class="skin-pelorous" title="pelorous" data-style="skin-pelorous"></li>
            <li class="skin-cranberry" title="cranberry" data-style="skin-cranberry"></li>
            <li class="skin-golden-sand" title="golden-sand" data-style="skin-golden-sand"></li>
            <li class="skin-deep-cerise" title="deep-cerise" data-style="skin-deep-cerise"></li>
            <li class="skin-la-rioja" title="la-rioja" data-style="skin-la-rioja"></li>
            <li class="skin-summer-sky" title="summer-sky" data-style="skin-summer-sky"></li>
            <li class="skin-amaranth" title="amaranth" data-style="skin-amaranth"></li>
            <li class="skin-light-tomato" title="light-tomato" data-style="skin-light-tomato"></li>
            <li class="skin-pacific-blue" title="pacific-blue" data-style="skin-pacific-blue"></li>
            </ul>
            <ul class="resetAll clearfix">
            <li><a target="_blank" class="button" href="#"><span>Purchase Now</span></a></li>
            <li><a class="button-reset button" href="#"><span>Reset All</span></a></li>
            </ul>
        </div>
        </div> -->

    <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-level-up"></i></a></div>



    {{-- MAIL SENT SUCCESS --}}
    <div class="modal fade" id="mail_sent_modal" tabindex="-1" aria-labelledby="mail_sent_modal_label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    {{-- <div class="modal-rounded-decoration">
                    </div> --}}
                        <h2 class="modal-head mail_sent_status"></h2>
                    
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6 class="newsletter_modal_body_text mail_sent_message"></h6>
                    {{-- <form>
                        <div class="mb-1">
                            <label for="email" class="col-form-label newsletter_modal_form_label">Email:</label>
                            <input type="text" class="form-control newsletter_modal_form_input" name="email" id="email" />
                        </div>
                    </form> --}}
                </div>
                {{-- <div class="modal-footer">
                    <a target="_blank" href="https://app.saiyonee.com"><button type="button"  class="btn btn-light uppercase modal-button mt-3 mt-md-1">Continue </button></a>
                    <p>By continuing you agree to our Terms and Privacy Policy.</p>
                </div> --}}
            </div>
        </div>
    </div>




    @include('frontend.layouts.inc.js')

    <script>
        $(".menu-links li a").click(function() {
            // $(".navbar a").removeClass("active");
            // $(this).addClass("active");

            $(".menu-links li").removeClass("active");

            $(this).parent().addClass('active')
        });
    </script>

    {{--             
        // processData: false,
        // accept: 'application/json',
        // contentType: 'application/json',
        // CrossDomain:true,
        // async: false, 
    --}}

    <script>
        $("#contact_us_submit").on("click", function() {

            $("#contact_us_submit").prop('disabled', true)

            var name = $("#contact_us_name").val()
            var email = $("#contact_us_email").val()
            var message = $("#contact_us_message").val()

            // console.log(name, email, message);

            $.ajax({
                url: "{{ route('submit_contact_us') }}",
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    name: name,
                    email: email,
                    message: message
                },
                success: function(response){
                    console.log(response.status);

                    if(response.status === 'success'){
                        // clear fields
                        $("#contact_us_name").val('')
                        $("#contact_us_email").val('')
                        $("#contact_us_message").val('')
                        
                        $('.mail_sent_status').text('Mail Sent Successfully!')
                        $('.mail_sent_message').text('Thank you for your valuable feedback. We will be with you shortly.')
                        $("#mail_sent_modal").modal('show')

                        $("#contact_us_submit").prop('disabled', false)
                    }
                    else if(response.status === 'failed'){
                        $('.mail_sent_status').text('Whoops!')
                        $('.mail_sent_message').text('Something went wrong! Please try again later or contact system administrators.')
                        $("#mail_sent_modal").modal('show')

                        $("#contact_us_submit").prop('disabled', false)
                    }

                },
                error: function(error){

                    // console.log('err', error);

                    if(error.status === 429){
                        // clear fields
                        $("#contact_us_name").val('')
                        $("#contact_us_email").val('')
                        $("#contact_us_message").val('')

                        $('.mail_sent_status').text('Limit Exceeded!')
                        $('.mail_sent_message').text('You have exceeded your limit of 5 messages per day. Please try again tomorrow.')
                        $("#mail_sent_modal").modal('show');

                        $("#contact_us_submit").prop('disabled', false)
                    }
                    else if(error.status === 422){
                        // console.log(error.responseJSON.errors, 'Validation errors');
                        // console.log(error.responseJSON.errors.name);
                        // console.log(error.responseJSON.errors.name[0]);
                        // console.log(typeof(error.responseJSON.errors.name[0]));

                        var message = ''

                        all_errors = error.responseJSON.errors
                        // console.log(all_errors);

                        // console.log((Object.keys(all_errors).length - 1))

                        Object.values(all_errors).forEach((each_error, index) => {
                            // console.log(each_error[0]);
                            message += each_error
                            // console.log(index);
                                message += '<br>'
                        });

                        message = 'The following validation errors occured. <br>' + message + '<br> Please resolve them and try again.'

                        // console.log(message);

                        $('.mail_sent_status').text('Validation Errors!')
                        $('.mail_sent_message').html(message)
                        $("#mail_sent_modal").modal('show');

                        $("#contact_us_submit").prop('disabled', false)
                    }
                    else{
                        $('.mail_sent_status').text('Whoops!')
                        $('.mail_sent_message').text('Something went wrong! Please try again later or contact system administrators.')
                        $("#mail_sent_modal").modal('show');

                        $("#contact_us_submit").prop('disabled', false)
                    }

                }
            });

        });
    </script>

</body>

</html>
