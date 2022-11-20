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

    @include('frontend.layouts.inc.js')

    <script>
        $(".menu-links li a").click(function() {
            // $(".navbar a").removeClass("active");
            // $(this).addClass("active");

            $(".menu-links li").removeClass("active");

            $(this).parent().addClass('active')
        });
    </script>

    <script>

        $( "#contact_us_submit" ).on("click", function() {
            var name = $("#contact_us_name").val()
            var email = $("#contact_us_email").val()
            var message = $("#contact_us_message").val()

            $.ajax({
                url: "{{ env('SAIYONEE_BACKEND_URL') }} . '/api/submit_contact_us_mail'",
                type: 'POST',
                data: {
                    name: name,
                    email: email,
                    message: message
                },
                success: function(response)
                {
                    console.log(response);
                }
            });

            });
    </script>

</body>

</html>
