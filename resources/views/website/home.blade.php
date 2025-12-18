@extends('website.layouts.app')
@section('seo_title', 'Aroun Systems & Safety Equipments | ISO Certified Fire Safety Solutions & PPE Supplier')
@section('seo_description',
    'Aroun Systems - ISO 9001:2015 certified manufacturer of fire safety systems, PPE equipment,
    and safety training services. Complete fire protection solutions for industrial and commercial sectors.')
@section('seo_keywords',
    'fire safety systems, fire extinguishers, PPE equipment, safety training, fire hydrant systems,
    fire alarm systems, industrial safety, safety equipment supplier, ISO certified company, fire protection services')
@section('seo_author', 'Aroun Systems & Safety Equipments')
@section('seo_image', asset('website_assets/images/aroun-systems-og-image.jpg'))
@section('content')
    <section class="main-slider">
        <div class="swiper-container thm-swiper__slider"
            data-swiper-options='{"slidesPerView": 1, "loop": true,
            "effect": "fade",
            "pagination": {
            "el": "#main-slider-pagination",
            "type": "bullets",
            "clickable": true
            },
            "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
            },
            "autoplay": {
                "delay": 8000
            }
        }'>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="main-slider__pattern-bg"
                        style="background-image: url(website_assets/images/shapes/main-slider-pattern.png);"></div>
                    <div class="main-slider__bg-box">
                        <div class="main-slider__bg"
                            style="background-image: url(website_assets/images/backgrounds/slider-1-1.png);"></div>
                    </div>
                    <div class="main-slider__shape-1"></div>
                    <div class="main-slider__shape-2"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <h4 class="main-slider__sub-title">Certified Fire Protection</h4>
                                    <h2 class="main-slider__title">Complete Safety Systems <br> Installation
                                        <span>Services</span> <br>
                                        <span>Available</span>
                                    </h2>
                                    <p class="main-slider__text">Aroun Fire Safety company plays a crucial
                                        role
                                        in industrial safety systems <br> management and fire protection solutions.</p>
                                    <div class="main-slider__btn-box">
                                        <a href="{{ route('productlist') }}" class="thm-btn">Discover More
                                            <span><i class="icon-right-arrow"></i></span>
                                        </a>
                                    </div>
                                    <div class="main-slider__map">
                                        <img src="website_assets/images/shapes/main-slider-map-1.png" alt=""
                                            class="float-bob-y">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="main-slider__pattern-bg"
                        style="background-image: url(website_assets/images/shapes/main-slider-pattern.png);"></div>
                    <div class="main-slider__bg-box">
                        <div class="main-slider__bg"
                            style="background-image: url(website_assets/images/backgrounds/slider-1-2.png);"></div>
                    </div>
                    <div class="main-slider__shape-1"></div>
                    <div class="main-slider__shape-2"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <h4 class="main-slider__sub-title">Complete Satisfaction</h4>
                                    <h2 class="main-slider__title">Quality Fire Equipment <br> <span> & Safety
                                        </span> <br>
                                        Solutions</h2>
                                    <p class="main-slider__text">Aroun Fire Safety company plays a crucial
                                        role
                                        in industrial safety systems <br> management and fire protection solutions.</p>
                                    <div class="main-slider__btn-box">
                                        <a href="{{ route('productlist') }}" class="thm-btn">Discover More
                                            <span><i class="icon-right-arrow"></i></span>
                                        </a>
                                    </div>
                                    <div class="main-slider__map">
                                        <img src="website_assets/images/shapes/main-slider-map-1.png" alt=""
                                            class="float-bob-y">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="main-slider__pattern-bg"
                        style="background-image: url(website_assets/images/shapes/main-slider-pattern.png);"></div>
                    <div class="main-slider__bg-box">
                        <div class="main-slider__bg"
                            style="background-image: url(website_assets/images/backgrounds/slider-1-3.png);"></div>
                    </div>
                    <div class="main-slider__shape-1"></div>
                    <div class="main-slider__shape-2"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <h4 class="main-slider__sub-title">Expert Safety Training</h4>
                                    <h2 class="main-slider__title">Safety Consultancy, <br>Emergency <span>Response</span>
                                        <br>
                                        <span>& Solutions</span>
                                    </h2>
                                    <p class="main-slider__text">Aroun Fire Safety company plays a crucial
                                        role
                                        in industrial safety systems <br> management and fire protection solutions.</p>
                                    <div class="main-slider__btn-box">
                                        <a href="{{ route('productlist') }}" class="thm-btn">Discover More
                                            <span><i class="icon-right-arrow"></i></span>
                                        </a>
                                    </div>
                                    <div class="main-slider__map">
                                        <img src="website_assets/images/shapes/main-slider-map-1.png" alt=""
                                            class="float-bob-y">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination" id="main-slider-pagination"></div>
            <!-- If we need navigation buttons -->

        </div>
    </section>

    <!--Main Slider End-->

    <!--Feature One Start-->
    <section class="feature-one">
        <div class="container">
            <div class="row">
                <!--Feature One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="feature-one__single">
                        <div class="feature-one__icon">
                            <span class="icon-international-shipping"></span>
                        </div>
                        <div class="feature-one__content">
                            <h3 class="feature-one__title"><a href="#!">Fire Protection Systems</a>
                            </h3>
                            <p class="feature-one__text">A fire safety provider company plays
                                a pivotal role in the industrial safety systems.</p>
                        </div>
                    </div>
                </div>
                <!--Feature One Single End-->
                <!--Feature One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="300ms">
                    <div class="feature-one__single">
                        <div class="feature-one__icon">
                            <span class="icon-courier-services"></span>
                        </div>
                        <div class="feature-one__content">
                            <h3 class="feature-one__title"><a href="#!">Safety Equipment Supply</a>
                            </h3>
                            <p class="feature-one__text">A fire safety provider company plays
                                a pivotal role in the industrial safety systems.</p>
                        </div>
                    </div>
                </div>
                <!--Feature One Single End-->
                <!--Feature One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="500ms">
                    <div class="feature-one__single">
                        <div class="feature-one__icon">
                            <span class="icon-delivery-man"></span>
                        </div>
                        <div class="feature-one__content">
                            <h3 class="feature-one__title"><a href="#!">Emergency Response Team</a>
                            </h3>
                            <p class="feature-one__text">A fire safety provider company plays
                                a pivotal role in the industrial safety systems.</p>
                        </div>
                    </div>
                </div>
                <!--Feature One Single End-->
                <!--Feature One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="700ms">
                    <div class="feature-one__single">
                        <div class="feature-one__icon">
                            <span class="icon-24-hours-service"></span>
                        </div>
                        <div class="feature-one__content">
                            <h3 class="feature-one__title"><a href="#!">24/7 Support Team</a></h3>
                            <p class="feature-one__text">A fire safety provider company plays
                                a pivotal role in the industrial safety systems.</p>
                        </div>
                    </div>
                </div>
                <!--Feature One Single End-->
            </div>
        </div>
    </section>
    <!--Feature One End-->
    <!--About Two Start-->
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
                            <div class="about-two__btn-box">
                                <a href="{{ route('about') }}" class="thm-btn">Read More
                                    <span><i class="icon-right-arrow"></i></span>
                                </a>
                            </div>
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
    <!--About Two End-->

    <!--Services Two Start-->
    <section class="services-two">
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
                <h3 class="section-title__title title-animation">Quality Fire Safety Products <br>
                    <span>for Complete Protection</span>
                </h3>
            </div>
            <div class="services-two__carousel owl-theme owl-carousel">
                <!--Services Two Single Start-->
                @foreach ($subProducts as $subProduct)
                    <div class="item">
                        <div class="services-two__single">
                            <div class="services-two__img">
                                <img src="dynamic_images/{{ $subProduct->image }}" alt="{{ $subProduct->name }}">
                            </div>
                            <div class="services-two__content">
                                {{-- <div class="services-two__icon">
                                    <span class="icon-worldwide-shipping"></span>
                                </div> --}}
                                <div class="services-two__title">
                                    <h3><a href="{{ url('product/' . $subProduct->url) }}">{{ $subProduct->name }}</a></h3>
                                </div>
                                <p class="services-two__text clamp-3">{{ $subProduct->description }}</p>
                                <div class="services-two__btn">
                                    <a href="{{ url('product/' . $subProduct->url) }}">Read More <span
                                            class="icon-next"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


                <!--Services Two Single End-->
            </div>
        </div>
    </section>
    <!--Services Two End-->

    <!--Why Choose Two Start-->
    <section class="why-choose-two">
        <div class="why-choose-two__pattern"
            style="background-image: url(website_assets/images/shapes/why-choose-two-pattern.png);"></div>
        <div class="why-choose-two__bg-box">
            <div class="why-choose-two__shape-bg"
                style="background-image: url(website_assets/images/shapes/why-choose-two-shpae-bg.png);"></div>
        </div>
        <div class="why-choose-two__img reveal">
            <img src="website_assets/images/resources/why-choose-two-img-1.png" alt="">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="why-choose-two__left">
                        <div class="why-choose-two__title-box">
                            <div class="section-title text-left sec-title-animation animation-style1">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline-border"></span>
                                    <div class="section-title__shape-1">
                                        <i class="fas fa-plane"></i>
                                    </div>
                                    <h6 class="section-title__tagline">Why Choose us</h6>
                                    <span class="section-title__tagline-border"></span>
                                    <div class="section-title__shape-2">
                                        <i class="fas fa-plane"></i>
                                    </div>
                                </div>
                                <h3 class="section-title__title title-animation">Reason For Choosing
                                    <span>Fire Safety Solutions!</span>
                                </h3>
                            </div>
                            <p class="why-choose-two__text">A fire safety provider company plays a pivotal role in the
                                industrial safety systems by efficiently managing the protection of assets from point
                                of origin to final destination. These companies offer a diverse range.</p>
                        </div>
                        <div class="why-choose-two__point-box">
                            <ul class="why-choose-two__point">
                                <li>
                                    <div class="why-choose-two__icon">
                                        <span class="icon-international-shipping"></span>
                                    </div>
                                    <div class="why-choose-two__content">
                                        <h4>ISO Certified <br> Quality Standards</h4>
                                        <p>A fire safety provider company plays a role in the safety systems</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="why-choose-two__icon">
                                        <span class="icon-professional-services"></span>
                                    </div>
                                    <div class="why-choose-two__content">
                                        <h4>Professional Safety <br> Management</h4>
                                        <p>A fire safety provider company plays a role in the safety systems</p>
                                    </div>
                                </li>
                            </ul>
                            <ul class="why-choose-two__point why-choose-two__point--two">
                                <li>
                                    <div class="why-choose-two__icon">
                                        <span class="icon-protection"></span>
                                    </div>
                                    <div class="why-choose-two__content">
                                        <h4>Safety & Security <br> Solutions</h4>
                                        <p>A fire safety provider company plays a role in the safety systems</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="why-choose-two__icon">
                                        <span class="icon-tracking"></span>
                                    </div>
                                    <div class="why-choose-two__content">
                                        <h4>24/7 Emergency <br> Response Team</h4>
                                        <p>A fire safety provider company plays a role in the safety systems</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="why-choose-two__btn-box">
                            <a href="{{ route('about') }}" class="thm-btn">Read More
                                <span><i class="icon-right-arrow"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Why Choose Two End-->

    <!--Start Cta One-->
    <section class="cta-one">
        <div class="container">
            <div class="cta-one__inner">
                <div class="cta-one__img">
                    <img src="website_assets/images/resources/cta-one-img-1.png" alt="">
                </div>
                <div class="cta-one__content">
                    <div class="cta-one__shape-1"
                        style="background-image: url(website_assets/images/shapes/cta-one-shape-1.png);"></div>
                    <div class="cta-one__shape-bg"
                        style="background-image: url(website_assets/images/shapes/cta-one-shape-bg.png);"></div>
                    <div class="cta-one__shape-2 float-bob-y">
                        <img src="website_assets/images/shapes/cta-one-shape-2.png" alt="">
                    </div>
                    <div class="cta-one__shape-3 float-bob-x">
                        <img src="website_assets/images/shapes/cta-one-shape-3.png" alt="">
                    </div>
                    <h2>Recognized as One of The <br> Leading <span>Safety Company!</span></h2>
                    <p>Fire safety provider company plays a pivotal <br>
                        role in the industrial safety systems.</p>
                    <div class="cta-one__btn-box">
                        <a href="{{ route('about') }}" class="thm-btn">Read More<span><i
                                    class="icon-right-arrow"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Cta One-->

    <!--Project One Start -->
    <section class="project-one project-two">
        <div class="project-one__bg-color wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
        </div>
        <div class="container">
            <div class="project-one__top">
                <div class="section-title text-left sec-title-animation animation-style1">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline-border"></span>
                        <div class="section-title__shape-1">
                            <i class="fas fa-plane"></i>
                        </div>
                        <h6 class="section-title__tagline">AROUN FIRE SAFETY PORTFOLIO</h6>
                        <span class="section-title__tagline-border"></span>
                        <div class="section-title__shape-2">
                            <i class="fas fa-plane"></i>
                        </div>
                    </div>
                    <h3 class="section-title__title title-animation">Our Certified <span>Safety Projects</span>
                    </h3>
                </div>
                <div class="project-one__btn-box">
                    <a href="{{ route('servicelist') }}" class="thm-btn">view all projects
                        <span><i class="icon-right-arrow"></i></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="project-one__bottom">
            <div class="container">
                <div class="project-two__carousel owl-carousel owl-theme">
                    <!--Project One Single Start-->
                    <div class="item">
                        <div class="project-one__single">
                            <div class="project-one__img-box">
                                <div class="project-one__img">
                                    <img src="website_assets/images/project/1.png" alt="">
                                </div>
                                <div class="project-one__content">
                                    <div class="project-one__title-box">
                                        <p class="project-one__sub-title">ISO Certified</p>
                                        <h3 class="project-one__title"><a href="#!">Fire Hydrant
                                                Systems</a></h3>
                                    </div>
                                    <div class="project-one__arrow">
                                        <a href="website_assets/images/project/1.png" class="img-popup"><span
                                                class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
                    <!--Project One Single Start-->
                    <div class="item">
                        <div class="project-one__single">
                            <div class="project-one__img-box">
                                <div class="project-one__img">
                                    <img src="website_assets/images/project/2.png" alt="">
                                </div>
                                <div class="project-one__content">
                                    <div class="project-one__title-box">
                                        <p class="project-one__sub-title">ISI Marked</p>
                                        <h3 class="project-one__title"><a href="#!">Fire
                                                Extinguishers</a></h3>
                                    </div>
                                    <div class="project-one__arrow">
                                        <a href="website_assets/images/project/2.png" class="img-popup"><span
                                                class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
                    <!--Project One Single Start-->
                    <div class="item">
                        <div class="project-one__single">
                            <div class="project-one__img-box">
                                <div class="project-one__img">
                                    <img src="website_assets/images/project/3.png" alt="">
                                </div>
                                <div class="project-one__content">
                                    <div class="project-one__title-box">
                                        <p class="project-one__sub-title">EN Certified</p>
                                        <h3 class="project-one__title"><a href="#!">Fixed Lifeline
                                                Systems</a></h3>
                                    </div>
                                    <div class="project-one__arrow">
                                        <a href="website_assets/images/project/3.png" class="img-popup"><span
                                                class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
                    <!--Project One Single Start-->
                    <div class="item">
                        <div class="project-one__single">
                            <div class="project-one__img-box">
                                <div class="project-one__img">
                                    <img src="website_assets/images/project/4.png" alt="">
                                </div>
                                <div class="project-one__content">
                                    <div class="project-one__title-box">
                                        <p class="project-one__sub-title">PPE Supply</p>
                                        <h3 class="project-one__title"><a href="#!">Safety Equipment</a>
                                        </h3>
                                    </div>
                                    <div class="project-one__arrow">
                                        <a href="website_assets/images/project/4.png" class="img-popup"><span
                                                class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
                    <!--Project One Single Start-->
                    <div class="item">
                        <div class="project-one__single">
                            <div class="project-one__img-box">
                                <div class="project-one__img">
                                    <img src="website_assets/images/project/1.png" alt="">
                                </div>
                                <div class="project-one__content">
                                    <div class="project-one__title-box">
                                        <p class="project-one__sub-title">IRATA Certified</p>
                                        <h3 class="project-one__title"><a href="#!">Safety Training</a>
                                        </h3>
                                    </div>
                                    <div class="project-one__arrow">
                                        <a href="website_assets/images/project/1.png" class="img-popup"><span
                                                class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
                    <!--Project One Single Start-->
                    <div class="item">
                        <div class="project-one__single">
                            <div class="project-one__img-box">
                                <div class="project-one__img">
                                    <img src="website_assets/images/project/2.png" alt="">
                                </div>
                                <div class="project-one__content">
                                    <div class="project-one__title-box">
                                        <p class="project-one__sub-title">24/7 Service</p>
                                        <h3 class="project-one__title"><a href="#!">Cylinder
                                                Refilling</a></h3>
                                    </div>
                                    <div class="project-one__arrow">
                                        <a href="website_assets/images/project/2.png" class="img-popup"><span
                                                class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
                    <!--Project One Single Start-->
                    <div class="item">
                        <div class="project-one__single">
                            <div class="project-one__img-box">
                                <div class="project-one__img">
                                    <img src="website_assets/images/project/3.png" alt="">
                                </div>
                                <div class="project-one__content">
                                    <div class="project-one__title-box">
                                        <p class="project-one__sub-title">Multi-State</p>
                                        <h3 class="project-one__title"><a href="#!">Fire Alarm
                                                Systems</a></h3>
                                    </div>
                                    <div class="project-one__arrow">
                                        <a href="website_assets/images/project/3.png" class="img-popup"><span
                                                class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
                    <!--Project One Single Start-->
                    <div class="item">
                        <div class="project-one__single">
                            <div class="project-one__img-box">
                                <div class="project-one__img">
                                    <img src="website_assets/images/project/4.png" alt="">
                                </div>
                                <div class="project-one__content">
                                    <div class="project-one__title-box">
                                        <p class="project-one__sub-title">MSME Certified</p>
                                        <h3 class="project-one__title"><a href="#!">Sprinkler
                                                Systems</a></h3>
                                    </div>
                                    <div class="project-one__arrow">
                                        <a href="website_assets/images/project/4.png" class="img-popup"><span
                                                class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
                </div>
            </div>
        </div>
    </section>
    <!--Project One End -->



    <!--Counter Two Start -->
    <section class="counter-two">
        <div class="container">
            <div class="row">
                <!--Counter Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6  wow fadeInLeft" data-wow-delay="100ms">
                    <div class="counter-two__single">
                        <div class="counter-two__icon">
                            <span class="icon-world-wide-web"></span>
                        </div>
                        <div class="counter-two__content">
                            <div class="counter-two__count">
                                <h3 class="odometer" data-count="6">00</h3>
                                <span>+</span>
                            </div>
                            <p class="counter-two__count-text">States Served</p>
                        </div>
                    </div>
                </div>
                <!--Counter Two Single End-->
                <!--Counter Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6  wow fadeInLeft" data-wow-delay="300ms">
                    <div class="counter-two__single">
                        <div class="counter-two__icon">
                            <span class="icon-user-avatar"></span>
                        </div>
                        <div class="counter-two__content">
                            <div class="counter-two__count">
                                <h3 class="odometer" data-count="1000">00</h3>
                                <span>+</span>
                            </div>
                            <p class="counter-two__count-text">Projects Completed</p>
                        </div>
                    </div>
                </div>
                <!--Counter Two Single End-->
                <!--Counter Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6  wow fadeInRight" data-wow-delay="500ms">
                    <div class="counter-two__single">
                        <div class="counter-two__icon">
                            <span class="icon-rating"></span>
                        </div>
                        <div class="counter-two__content">
                            <div class="counter-two__count">
                                <h3 class="odometer" data-count="97">00</h3>
                                <span>%</span>
                            </div>
                            <p class="counter-two__count-text">Client Satisfaction</p>
                        </div>
                    </div>
                </div>
                <!--Counter Two Single End-->
                <!--Counter Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6  wow fadeInRight" data-wow-delay="700ms">
                    <div class="counter-two__single">
                        <div class="counter-two__icon">
                            <span class="icon-delivery-man-1"></span>
                        </div>
                        <div class="counter-two__content">
                            <div class="counter-two__count">
                                <h3 class="odometer" data-count="24">00</h3>
                                <span>/7</span>
                            </div>
                            <p class="counter-two__count-text">Emergency Service</p>
                        </div>
                    </div>
                </div>
                <!--Counter Two Single End-->
            </div>
        </div>
    </section>
    <!--Counter Two End -->

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

    <!--Video Two Start -->
    <section class="video-two">
        <div class="container">
            <div class="video-two__inner">
                <div class="video-two__inner-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                    style="background-image: url(website_assets/images/backgrounds/video-two-bg.png);"></div>
                <div class="video-two__shape-1">
                    <img src="website_assets/images/shapes/video-two-shape-1.png" alt="">
                </div>
                <h3 class="video-two__title">We Are The Leader in
                    <br> Fire Safety Solutions
                </h3>
                <div class="video-two__video-link">
                    <a href="https://www.youtube.com/watch?v=nUIQDAgAN58" class="video-popup">
                        <div class="video-two__video-icon">
                            <span class="fas fa-play"></span>
                            <i class="ripple"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--Video Two End -->

    <!--Testimonials Two Start -->
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
                                    <img src="website_assets/images/shapes/user.png" alt="">
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
                                        {{-- <p>Factory Manager</p> --}}
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
                                    <img src="website_assets/images/shapes/user.png" alt="">
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
                                        {{-- <p>Facility Head</p> --}}
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
                                    <img src="website_assets/images/shapes/user.png" alt="">
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
                                        {{-- <p>Safety Officer</p> --}}
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
                                    <img src="website_assets/images/shapes/user.png" alt="">
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
                                        {{-- <p>Project Manager</p> --}}
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
                                    <img src="website_assets/images/shapes/user.png" alt="">
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
                                        {{-- <p>Operations Head</p> --}}
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
                                    <img src="website_assets/images/shapes/user.png" alt="">
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
                                        {{-- <p>HR Manager</p> --}}
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
    <!--Testimonials Two End -->







    <!-- Blog Two Start -->
    <section class="blog-two">
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline-border"></span>
                    <div class="section-title__shape-1">
                        <i class="fas fa-plane"></i>
                    </div>
                    <h6 class="section-title__tagline">Safety Insights</h6>
                    <span class="section-title__tagline-border"></span>
                    <div class="section-title__shape-2">
                        <i class="fas fa-plane"></i>
                    </div>
                </div>
                <h3 class="section-title__title title-animation">Latest <span>Safety</span> Insights</h3>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-xl-4 col-lg-6  wow fadeInLeft" data-wow-delay="100ms">
                        <div class="blog-two__single">
                            <div class="blog-two__img">
                                <img src="{{ asset('dynamic_images') }}/{{ $blog->image }}"
                                    alt="Fixed Lifeline Systems">
                                <div class="blog-two__plus">
                                    <a href="{{ url('blog/' . $blog->url) }}"><i class="icon-plus"></i></a>
                                </div>
                                {{-- <div class="blog-two__tag">
                                    <a href="{{ url('blog/' . $blog->url) }}">Height Safety</a>
                                </div> --}}
                            </div>
                            <div class="blog-two__content">
                                <ul class="blog-two__meta list-unstyled">
                                    <li>
                                        <a href="{{ url('blog/' . $blog->url) }}">
                                            <span
                                                class="fas fa-calendar-alt"></span>{{ $blog->created_at->format('M d, Y') }}
                                        </a>
                                    </li>
                                    {{-- <li>
                                        <a href="{{ url('blog/' . $blog->url) }}">
                                            <span class="fas fa-comments"></span>Comment
                                        </a>
                                    </li> --}}
                                </ul>
                                <h3 class="blog-two__title"><a
                                        href="{{ url('blog/' . $blog->url) }}">{{ $blog->title }}</a></h3>
                                <div class="blog-two__author-and-btn">
                                    <div class="blog-two__author-info">
                                        <div class="blog-two__author-img-box">
                                            <div class="blog-two__author-img initials-avatar" data-name="Aroun Safety">
                                                <span>AS</span>
                                            </div>
                                        </div>
                                        <div class="blog-two__author-content">
                                            <h5>Aroun Safety</h5>
                                            <p>{{ $blog->created_at->format('M d, Y') }}</p>
                                        </div>
                                    </div>
                                    <div class="blog-two__arrow-box">
                                        <a href="{{ url('blog/' . $blog->url) }}" class="blog-two__arrow"><span
                                                class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
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
