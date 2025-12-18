<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('seo_title', 'VCrds - Single QR Code for All Business Connections')</title>
    <meta name="description" content="@yield('seo_description', 'One QR code to connect all your business platforms - Facebook, Instagram, WhatsApp, UPI, Google Reviews, Products & more. Boost engagement with VCrds.')">
    <meta name="keywords" content="@yield('seo_keywords', 'qr code generator, digital business card, social media links, upi payment, product catalogue, business growth, multi-platform connection')">
    <meta name="author" content="@yield('seo_author', 'VCrds')">
    <meta property="og:title" content="@yield('seo_title', 'VCrds - Single QR Code for All Business Connections')">
    <meta property="og:description" content="@yield('seo_description', 'One QR code to connect all your business platforms - Facebook, Instagram, WhatsApp, UPI, Google Reviews, Products & more. Boost engagement with VCrds.')">
    <meta property="og:image" content="@yield('seo_image', asset('website_assets/images/vcrds-og-image.jpg'))">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('seo_title', 'VCrds - Single QR Code for All Business Connections')">
    <meta name="twitter:description" content="@yield('seo_description', 'One QR code to connect all your business platforms - Facebook, Instagram, WhatsApp, UPI, Google Reviews, Products & more. Boost engagement with VCrds.')">
    <meta name="twitter:image" content="@yield('seo_image', asset('website_assets/images/vcrds-og-image.jpg'))">
    <link rel="canonical" href="{{ url()->current() }}">
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('website_assets/images/favicons/favicon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('website_assets/images/favicons/favicon.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('website_assets/images/favicons/favicon.png') }}" />
    {{-- <link rel="manifest" href="{{ asset('website_assets/images/favicons/site.webmanifest') }}" /> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('website_assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/custom-animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/font-awesome-all.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('website_assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/module-css/slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/module-css/banner.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/module-css/footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/module-css/about.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/module-css/service.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/module-css/counter.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/module-css/why-choose.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/module-css/project.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/module-css/video.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/module-css/team.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/module-css/brand.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/module-css/download-app.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/module-css/testimonial.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/module-css/blog.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/module-css/sliding-text.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/module-css/skill.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/module-css/process.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/module-css/faq.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/module-css/feature.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/module-css/cta.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/module-css/office-location.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/module-css/find-transport.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/module-css/pricing.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/module-css/contact.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/responsive.css') }}" />


    @stack('styles')

</head>


<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>


    <!--Start Preloader-->
    <div class="loader js-preloader">
        <div></div>
        <div></div>
        <div></div>
    </div>

    <div class="page-wrapper">
        @include('website.static.header')
        @yield('content')
        @include('website.static.footer')

    </div>
    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
            <div class="logo-box">
                <a href="{{ route('home') }}" aria-label="logo image"><img
                        src="{{ asset('website_assets/images/resources/logo-2.png') }}"
                        style="width: 88%;
    background: white;
    padding: 10px;
    border-radius: 10px;"
                        width="140" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:arounsystems@gmail.com">arounsystems@gmail.com</a>
                </li>
                <li>
                    <i class="fas fa-phone"></i>
                    <a href="tel:+918438434000">+91 84384 34000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="https://www.facebook.com/arounsystems/" target="_blank"><i
                            class="fab fa-facebook"></i></a>
                    <a href="https://x.com/arounsystems" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/arounsystems/" target="_blank"><i
                            class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/@arounfiresafetyequipments5968" target="_blank"><i
                            class="fab fa-youtube"></i></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->

        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->



    <!-- Search Popup -->

    <!-- End Search Popup -->



    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
        <span class="scroll-to-top__text"> Go Back Top</span>
    </a>

    <script src="{{ asset('website_assets/js/jquery-latest.js') }}"></script>
    <script src="{{ asset('website_assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('website_assets/js/jarallax.min.js') }}"></script>
    <script src="{{ asset('website_assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('website_assets/js/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('website_assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('website_assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('website_assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('website_assets/js/wNumb.min.js') }}"></script>
    <script src="{{ asset('website_assets/js/wow.js') }}"></script>
    <script src="{{ asset('website_assets/js/isotope.js') }}"></script>
    <script src="{{ asset('website_assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('website_assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('website_assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('website_assets/js/marquee.min.js') }}"></script>
    <script src="{{ asset('website_assets/js/countdown.min.js') }}"></script>
    <script src="{{ asset('website_assets/js/jquery.circleType.js') }}"></script>
    <script src="{{ asset('website_assets/js/jquery.fittext.js') }}"></script>
    <script src="{{ asset('website_assets/js/jquery.lettering.min.js') }}"></script>
    <script src="{{ asset('website_assets/js/jquery-sidebar-content.js') }}"></script>
    <script src="{{ asset('website_assets/js/aos.js') }}"></script>
    <script src="{{ asset('website_assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('website_assets/js/typed-2.0.11.js') }}"></script>
    <script src="{{ asset('website_assets/js/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ asset('website_assets/js/gsap/gsap.js') }}"></script>
    <script src="{{ asset('website_assets/js/gsap/ScrollTrigger.js') }}"></script>
    <script src="{{ asset('website_assets/js/gsap/SplitText.js') }}"></script>
    <script src="{{ asset('website_assets/js/script.js') }}"></script>


    @stack('scripts')
</body>

</html>
