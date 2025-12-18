@extends('website.layouts.app')
@section('seo_title', 'About Aroun Systems & Safety Equipments | ISO Certified Fire Safety Company')
@section('seo_description',
    'Learn about Aroun Systems - ISO 9001:2015 certified manufacturer with 15+ years experience
    in fire safety systems, PPE equipment, and industrial safety solutions across multiple states.')
@section('seo_keywords',
    'about aroun systems, fire safety company history, ISO certified manufacturer, industrial
    safety solutions, PPE equipment supplier, fire protection services, safety training provider')
@section('seo_author', 'Aroun Systems & Safety Equipments')
@section('seo_image', asset('website_assets/images/aroun-systems-about-og.jpg'))
@push('styles')
    <link rel="stylesheet" href="website_assets/css/module-css/page-header.css" />
@endpush
@section('content')



    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(website_assets/images/backgrounds/page-header-bg.png);">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <div class="page-header__img-1">
                    <img src="website_assets/images/resources/page-header-img-1.png" alt="">
                </div>
                <div class="page-header__shape-1 float-bob-y">
                    <img src="website_assets/images/shapes/page-header-shape-1.png" alt="">
                </div>
                <h3>About Us</h3>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><span class="fas fa-angle-right"></span></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--About One Start-->
    <section class="about-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-two__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="about-two__img-box">
                            <div class="about-two__img">
                                <img src="website_assets/images/resources/about-two-img-1.png" alt="">
                            </div>
                            <div class="about-two__img-two">
                                <img src="website_assets/images/resources/about-two-img-2.png" alt="">
                            </div>
                            <div class="about-two__counter">
                                <div class="shape1"><img src="website_assets/images/shapes/about-two-shape-1.png"
                                        alt="">
                                </div>
                                <div class="count-text-box count-box">
                                    <h2 class="count-text" data-stop="1000" data-speed="1500">00</h2>
                                    <span class="plus">+</span>
                                </div>

                                <p>Projects <br>
                                    Completed</p>
                            </div>
                            <div class="about-two__shape-2 float-bob-x">
                                <img src="website_assets/images/shapes/about-two-shape-2.png" alt="">
                            </div>
                            <div class="about-two__shape-3">
                                <img src="website_assets/images/shapes/about-two-shape-3.png" alt="">
                            </div>
                            <div class="about-two__shape-4 float-bob-y">
                                <img src="website_assets/images/shapes/about-two-shape-4.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-two__right">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline-border"></span>
                                <div class="section-title__shape-1">
                                    <i class="fas fa-certificate"></i>
                                </div>
                                <h6 class="section-title__tagline">ABOUT AROUN FIRE SAFETY</h6>
                                <span class="section-title__tagline-border"></span>
                                <div class="section-title__shape-2">
                                    <i class="fas fa-certificate"></i>
                                </div>
                            </div>
                            <h3 class="section-title__title title-animation">ISO Certified Manufacturer
                                <span> & Safety
                                    Solutions Provider</span>
                            </h3>
                        </div>
                        <p class="about-two__text">Aroun Fire Safety provides comprehensive protection solutions
                            across multiple states with certified expertise in fire systems installation and safety
                            equipment supply for diverse industrial applications and requirements.</p>
                        <div class="about-two__progress-box-outer">
                            <div class="about-two__progress-single">
                                <div class="about-two__progress-box">
                                    <div class="circle-progress"
                                        data-options='{ "value": 0.95,"thickness": 4,"emptyFill": "#F4F5F9","lineCap": "square", "size": 100, "fill": { "color": "#FD5523" } }'>
                                    </div><!-- /.circle-progress -->
                                    <div class="about-two__pack count-box">
                                        <p class="count-text" data-stop="95" data-speed="1500"></p>
                                        <span>%</span>
                                    </div>
                                </div>
                                <div class="about-two__progress-content">
                                    <p>Quality
                                        <br> Standards
                                    </p>
                                </div>
                            </div>
                            <div class="about-two__progress-single">
                                <div class="about-two__progress-box">
                                    <div class="circle-progress"
                                        data-options='{ "value": 0.97,"thickness": 4,"emptyFill": "#F4F5F9","lineCap": "square", "size": 100, "fill": { "color": "#FD5523" } }'>
                                    </div><!-- /.circle-progress -->
                                    <div class="about-two__pack count-box">
                                        <p class="count-text" data-stop="97" data-speed="1500"></p>
                                        <span>%</span>
                                    </div>
                                </div>
                                <div class="about-two__progress-content">
                                    <p>Client
                                        <br> Retention
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="about-two__point-box-one">
                            <ul class="about-two__point-one">
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>ISO 9001:2015 Certified</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>MSME Registered Company</p>
                                    </div>
                                </li>
                            </ul>
                            <ul class="about-two__point-one about-two__point-one--two">
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>24/7 Emergency Service</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Multi-State Operations</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="about-two__btn-and-author-box">
                            {{-- <div class="about-two__btn-box">
                                <a href="about.html" class="thm-btn">Read More
                                    <span><i class="icon-right-arrow"></i></span>
                                </a>
                            </div> --}}
                            {{-- <div class="about-two__author-box">
                                <div class="about-two__author-details">
                                    <div class="about-two__author-img-box">
                                        <div class="about-two__author-img">
                                            <img src="website_assets/images/resources/about-one-author-img-1.jpg"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="about-two__author-content">
                                        <h4>AROUN Team</h4>
                                        <p>Certified Experts</p>
                                    </div>
                                </div>
                                <div class="about-two__video-link">
                                    <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                        <div class="about-two__video-icon">
                                            <span class="fa fa-play"></span>
                                            <i class="ripple"></i>
                                        </div>
                                    </a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About One End-->

    <!--Sliding Text One Start-->
    <section class="sliding-text-one">
        <div class="sliding-text-one__wrap">
            <ul class="sliding-text__list list-unstyled marquee_mode">
                <li>
                    <h2 data-hover="ISO 9001:2015 CERTIFIED" class="sliding-text__title">ISO 9001:2015 CERTIFIED
                        <img src="website_assets/images/icon/sliding-text-icon-1.png" alt="">
                    </h2>
                </li>
                <li>
                    <h2 data-hover="FIRE HYDRANT SYSTEMS" class="sliding-text__title">FIRE HYDRANT SYSTEMS
                        <img src="website_assets/images/icon/sliding-text-icon-1.png" alt="">
                    </h2>
                </li>
                <li>
                    <h2 data-hover="FIRE EXTINGUISHERS" class="sliding-text__title">FIRE EXTINGUISHERS
                        <img src="website_assets/images/icon/sliding-text-icon-1.png" alt="">
                    </h2>
                </li>
                <li>
                    <h2 data-hover="SAFETY EQUIPMENT" class="sliding-text__title">SAFETY EQUIPMENT
                        <img src="website_assets/images/icon/sliding-text-icon-1.png" alt="">
                    </h2>
                </li>
                <li>
                    <h2 data-hover="24/7 EMERGENCY SERVICE" class="sliding-text__title">24/7 EMERGENCY SERVICE
                        <img src="website_assets/images/icon/sliding-text-icon-1.png" alt="">
                    </h2>
                </li>
            </ul>
        </div>
    </section>
    <!--Sliding Text One End-->

    <!--Services One Start-->
    <section class="services-one">
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline-border"></span>
                    <div class="section-title__shape-1">
                        <i class="fas fa-plane"></i>
                    </div>
                    <h6 class="section-title__tagline">Our Products</h6>
                    <span class="section-title__tagline-border"></span>
                    <div class="section-title__shape-2">
                        <i class="fas fa-plane"></i>
                    </div>
                </div>
                <h3 class="section-title__title title-animation">Quality Safety Products <br>
                    <span>for Complete Protection</span>
                </h3>
            </div>
            <div class="services-one__carousel owl-theme owl-carousel">
                <!--Services One Single Start-->
                <div class="item">
                    <div class="services-one__single">
                        <div class="services-one__img-box">
                            <div class="services-one__img">
                                <img src="website_assets/images/services/1.png" alt="">
                            </div>
                            <div class="services-one__icon">
                                <span class="icon-worldwide-shipping"></span>
                            </div>
                        </div>
                        <div class="services-one__content">
                            <div class="services-one__count">01</div>
                            <h4 class="services-one__title"><a href="{{ route('firehydrantinstallation') }}">Fire Hydrant
                                    Installation Service</a></h4>
                            <p class="services-one__text">Professional installation of fire hydrants ensuring reliable
                                water
                                supply for emergency firefighting operations when needed.</p>
                            <div class="services-one__btn-box">
                                <a href="{{ route('firehydrantinstallation') }}">Read More <span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="item">
                    <div class="services-one__single">
                        <div class="services-one__img-box">
                            <div class="services-one__img">
                                <img src="website_assets/images/services/2.png" alt="">
                            </div>
                            <div class="services-one__icon">
                                <span class="icon-shipment"></span>
                            </div>
                        </div>
                        <div class="services-one__content">
                            <div class="services-one__count">02</div>
                            <h4 class="services-one__title"><a
                                    href="{{ route('firehydrantsysteminstallationservice') }}">Fire Hydrant
                                    System Installation Service</a></h4>
                            <p class="services-one__text">Complete fire hydrant system setup including pipes, valves, and
                                connections for comprehensive building fire protection.</p>
                            <div class="services-one__btn-box">
                                <a href="{{ route('firehydrantsysteminstallationservice') }}">Read More <span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="item">
                    <div class="services-one__single">
                        <div class="services-one__img-box">
                            <div class="services-one__img">
                                <img src="website_assets/images/services/4.png" alt="">
                            </div>
                            <div class="services-one__icon">
                                <span class="icon-delivery-man"></span>
                            </div>
                        </div>
                        <div class="services-one__content">
                            <div class="services-one__count">03</div>
                            <h4 class="services-one__title"><a href="{{ route('signboardinstallationservice') }}">Sign
                                    Board
                                    Installation
                                    Service</a>
                            </h4>
                            <p class="services-one__text">Expert installation of safety sign boards for clear emergency
                                exit
                                routes and fire equipment location identification.</p>
                            <div class="services-one__btn-box">
                                <a href="{{ route('signboardinstallationservice') }}">Read More <span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="item">
                    <div class="services-one__single">
                        <div class="services-one__img-box">
                            <div class="services-one__img">
                                <img src="website_assets/images/services/3.png" alt="">
                            </div>
                            <div class="services-one__icon">
                                <span class="icon-truck"></span>
                            </div>
                        </div>
                        <div class="services-one__content">
                            <div class="services-one__count">04</div>
                            <h4 class="services-one__title"><a
                                    href="{{ route('fireextinguisherinstallationservice') }}">Fire Extinguisher
                                    Installation Service</a></h4>
                            <p class="services-one__text">Proper installation of fire extinguishers at strategic locations
                                for quick access during fire emergencies.</p>
                            <div class="services-one__btn-box">
                                <a href="{{ route('fireextinguisherinstallationservice') }}">Read More <span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->

                <!--Services One Single End-->
            </div>
        </div>
    </section>
    <!--Services One End-->

    <!--Find Transport Start -->
    <section class="find-transport">
        <div class="find-transport__shape-bg"
            style="background-image: url(website_assets/images/shapes/find-transport-shape-bg.png);"></div>
        <div class="container">
            <div class="find-transport__inner">
                <div class="find-transport__title-box">
                    <h3 class="find-transport__title">Looking for the Best
                        <br> Fire Safety Solutions Provider?
                    </h3>
                </div>
                <div class="find-transport__btn-and-call">
                    <div class="find-transport__call-us">
                        <div class="icon">
                            <span class="icon-phone-call"></span>
                        </div>
                        <div class="content">
                            <span>Call Us 24/7</span>
                            <p><a href="tel:8438434000">+91 84384 34000</a></p>
                        </div>
                    </div>
                    <div class="find-transport__btn-box">
                        <a href="{{ route('contact') }}" class="thm-btn">Get Free Quote<span><i
                                    class="icon-right-arrow"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Find Transport End -->

    <!-- Testimonial Three Start -->
    <section class="testimonial-two">
        <div class="container">
            <div class="section-title text-left sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline-border"></span>
                    <div class="section-title__shape-1">
                        <i class="fas fa-plane"></i>
                    </div>
                    <h6 class="section-title__tagline">Client Testimonials
                    </h6>
                    <span class="section-title__tagline-border"></span>
                    <div class="section-title__shape-2">
                        <i class="fas fa-plane"></i>
                    </div>
                </div>
                <h3 class="section-title__title title-animation"> What Our Clients
                    Say <br> <span>About Aroun Fire Safety</span>
                </h3>
            </div>
            <div class="testimonial-two__middle">
                <div class="testimonial-two__carousel owl-carousel owl-theme">
                    <!--Testimonial Two Single Start-->
                    <div class="item">
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__single-inner">
                                <div class="testimonial-two__shape-1">
                                    <img src="website_assets/images/shapes/testimonial-two-shape-1.png" alt="">
                                </div>
                                <div class="testimonial-two__quote">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="testimonial-two__ratting">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </div>
                                <p class="testimonial-two__text">Aroun Fire Safety installed our complete fire hydrant
                                    system with ISO certified quality. Their professional team ensured timely completion and
                                    excellent safety standards for our industrial facility.</p>
                                <div class="testimonial-two__client-info">
                                    <div class="testimonial-two__client-img">
                                        <img src="website_assets/images/testimonial/user.png" alt="">
                                    </div>
                                    <div class="testimonial-two__client-content">
                                        <h3><a href="#!">Rajesh Kumar</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial Two Single End-->
                    <!--Testimonial Two Single Start-->
                    <div class="item">
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__single-inner">
                                <div class="testimonial-two__shape-1">
                                    <img src="website_assets/images/shapes/testimonial-two-shape-1.png" alt="">
                                </div>
                                <div class="testimonial-two__quote">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="testimonial-two__ratting">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </div>
                                <p class="testimonial-two__text">The fire alarm systems from Aroun Safety are highly
                                    reliable. Their 24/7 support and regular maintenance services give us complete peace of
                                    mind for our commercial building safety.</p>
                                <div class="testimonial-two__client-info">
                                    <div class="testimonial-two__client-img">
                                        <img src="website_assets/images/testimonial/user.png" alt="">
                                    </div>
                                    <div class="testimonial-two__client-content">
                                        <h3><a href="#!">Priya Sharma</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial Two Single End-->
                    <!--Testimonial Two Single Start-->
                    <div class="item">
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__single-inner">
                                <div class="testimonial-two__shape-1">
                                    <img src="website_assets/images/shapes/testimonial-two-shape-1.png" alt="">
                                </div>
                                <div class="testimonial-two__quote">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="testimonial-two__ratting">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </div>
                                <p class="testimonial-two__text">We rely on Aroun Systems for all our PPE requirements.
                                    Their safety equipment supply is top-quality and their fire extinguisher refilling
                                    service is prompt and professional.</p>
                                <div class="testimonial-two__client-info">
                                    <div class="testimonial-two__client-img">
                                        <img src="website_assets/images/testimonial/user.png" alt="">
                                    </div>
                                    <div class="testimonial-two__client-content">
                                        <h3><a href="#!">Arun Patel</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial Two Single End-->
                    <!--Testimonial Two Single Start-->
                    <div class="item">
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__single-inner">
                                <div class="testimonial-two__shape-1">
                                    <img src="website_assets/images/shapes/testimonial-two-shape-1.png" alt="">
                                </div>
                                <div class="testimonial-two__quote">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="testimonial-two__ratting">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </div>
                                <p class="testimonial-two__text">The fixed lifeline systems installation by Aroun team was
                                    exceptional. Their certified engineers ensured complete safety compliance for our height
                                    work operations.</p>
                                <div class="testimonial-two__client-info">
                                    <div class="testimonial-two__client-img">
                                        <img src="website_assets/images/testimonial/user.png" alt="">
                                    </div>
                                    <div class="testimonial-two__client-content">
                                        <h3><a href="#!">Suresh Reddy</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial Two Single End-->
                    <!--Testimonial Two Single Start-->
                    <div class="item">
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__single-inner">
                                <div class="testimonial-two__shape-1">
                                    <img src="website_assets/images/shapes/testimonial-two-shape-1.png" alt="">
                                </div>
                                <div class="testimonial-two__quote">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="testimonial-two__ratting">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </div>
                                <p class="testimonial-two__text">Aroun Safety's fire sprinkler systems are installed with
                                    precision. Their multi-state service coverage makes them our preferred fire safety
                                    partner across locations.</p>
                                <div class="testimonial-two__client-info">
                                    <div class="testimonial-two__client-img">
                                        <img src="website_assets/images/testimonial/user.png" alt="">
                                    </div>
                                    <div class="testimonial-two__client-content">
                                        <h3><a href="#!">Meena Iyer</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial Two Single End-->
                    <!--Testimonial Two Single Start-->
                    <div class="item">
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__single-inner">
                                <div class="testimonial-two__shape-1">
                                    <img src="website_assets/images/shapes/testimonial-two-shape-1.png" alt="">
                                </div>
                                <div class="testimonial-two__quote">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="testimonial-two__ratting">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </div>
                                <p class="testimonial-two__text">Excellent safety training programs from Aroun Systems.
                                    Their IRATA certified trainers provided comprehensive fire safety education for our
                                    entire workforce.</p>
                                <div class="testimonial-two__client-info">
                                    <div class="testimonial-two__client-img">
                                        <img src="website_assets/images/testimonial/user.png" alt="">
                                    </div>
                                    <div class="testimonial-two__client-content">
                                        <h3><a href="#!">Vikram Singh</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial Two Single End-->
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Three End -->





    <!-- Blog Two End -->

    <!--Start Brand One-->
    <section class="brand-one">
        <div class="container">
            <div class="brand-one__carousel owl-carousel owl-theme">
                <!--Start Brand One Single-->
                <div class="brand-one__single">
                    <div class="brand-one__single-inner">
                        <a href="#"><img src="website_assets/images/brand/1.png" alt=""></a>
                    </div>
                </div>
                <!--End Brand One Single-->

                <!--Start Brand One Single-->
                <div class="brand-one__single">
                    <div class="brand-one__single-inner">
                        <a href="#"><img src="website_assets/images/brand/2.png" alt=""></a>
                    </div>
                </div>
                <!--End Brand One Single-->

                <!--Start Brand One Single-->
                <div class="brand-one__single">
                    <div class="brand-one__single-inner">
                        <a href="#"><img src="website_assets/images/brand/3.png" alt=""></a>
                    </div>
                </div>
                <!--End Brand One Single-->

                <!--Start Brand One Single-->
                <div class="brand-one__single">
                    <div class="brand-one__single-inner">
                        <a href="#"><img src="website_assets/images/brand/4.png" alt=""></a>
                    </div>
                </div>
                <!--End Brand One Single-->

                <!--Start Brand One Single-->
                <div class="brand-one__single">
                    <div class="brand-one__single-inner">
                        <a href="#"><img src="website_assets/images/brand/5.png" alt=""></a>
                    </div>
                </div>
                <!--End Brand One Single-->

                <!--Start Brand One Single-->
                <div class="brand-one__single">
                    <div class="brand-one__single-inner">
                        <a href="#"><img src="website_assets/images/brand/6.png" alt=""></a>
                    </div>
                </div>
                <div class="brand-one__single">
                    <div class="brand-one__single-inner">
                        <a href="#"><img src="website_assets/images/brand/7.png" alt=""></a>
                    </div>
                </div>
                <div class="brand-one__single">
                    <div class="brand-one__single-inner">
                        <a href="#"><img src="website_assets/images/brand/8.png" alt=""></a>
                    </div>
                </div>
                <div class="brand-one__single">
                    <div class="brand-one__single-inner">
                        <a href="#"><img src="website_assets/images/brand/9.png" alt=""></a>
                    </div>
                </div>
                <!--End Brand One Single-->
            </div>
        </div>
    </section>
@endsection
