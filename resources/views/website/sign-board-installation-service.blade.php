@extends('website.layouts.app')
@section('seo_title', 'Sign Board Installation Service | Aroun Systems & Safety Equipments')
@section('seo_description',
    'Professional safety sign board installation service by Aroun Systems. ISO certified
    installation of industrial safety signs, glow tapes, and emergency route markers for workplace safety compliance.')
@section('seo_keywords',
    'safety sign board installation, industrial safety signs, emergency sign installation, safety
    signage, glow tape installation, fire safety signs')
@section('seo_author', 'Aroun Systems & Safety Equipments')
@section('seo_image', asset('website_assets/images/sign-board-installation-og.jpg'))
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
                <h3>Sign Board Installation</h3>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><span class="fas fa-angle-right"></span></li>
                        <li><a href="{{ route('servicelist') }}">Services</a></li>
                        <li><span class="fas fa-angle-right"></span></li>
                        <li>Sign Board Installation</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Service Details Start-->
    <section class="service-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="service-details__sidebar">
                        <div class="service-details__services-box">
                            <h3 class="service-details__services-title">Our Services</h3>
                            <ul class="service-details__services-list list-unstyled">
                                <li>
                                    <a href="{{ route('firehydrantinstallation') }}">Fire Hydrant Installation<span
                                            class="icon-next"></span></a>
                                </li>
                                <li>
                                    <a href="{{ route('firehydrantsysteminstallationservice') }}">Fire Hydrant System
                                        Installation<span class="icon-next"></span></a>
                                </li>
                                <li class="active">
                                    <a href="{{ route('signboardinstallationservice') }}">Sign Board Installation<span
                                            class="icon-next"></span></a>
                                </li>
                                <li>
                                    <a href="{{ route('fireextinguisherinstallationservice') }}">Fire Extinguisher
                                        Installation<span class="icon-next"></span></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="service-details__left">
                        <div class="service-details__img">
                            <img src="website_assets/images/services/sign-board-installation.png" alt="">
                        </div>
                        <h3 class="service-details__title-1">Sign Board Installation Service</h3>
                        <p class="service-details__text-1">Aroun Systems provides professional safety sign board
                            installation services for industrial facilities and commercial buildings. Our certified team
                            ensures proper placement and compliance with safety standards for effective hazard communication
                            and emergency guidance systems.</p>
                        <p class="service-details__text-2">We specialize in comprehensive safety signage installations
                            including prohibition signs, warning signs, mandatory signs and emergency information boards.
                            Our systematic approach guarantees clear visibility and proper understanding of safety
                            instructions throughout your premises requirements.</p>
                        <ul class="service-details__points-list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-right-arrow"></span>
                                </div>
                                <p>Professional installation of safety sign boards including prohibition, warning, mandatory
                                    and emergency signs for comprehensive hazard communication</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-right-arrow"></span>
                                </div>
                                <p>Strategic placement of emergency exit signs, fire safety signs and evacuation route
                                    markers with proper visibility and illumination requirements</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-right-arrow"></span>
                                </div>
                                <p>Installation of glow tapes, photoluminescent signs and emergency lighting systems for
                                    clear guidance during power failures and low visibility conditions</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-right-arrow"></span>
                                </div>
                                <p>Custom sign board solutions with company logos, specific instructions and multilingual
                                    content for effective communication across diverse workforce</p>
                            </li>
                        </ul>
                        <div class="service-details__img-box">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="service-details__img-box-single">
                                        <div class="service-details__img-box-img">
                                            <img src="website_assets/images/services/safety-signage-design.png"
                                                alt="">
                                        </div>
                                        <div class="service-details__img-box-content">
                                            <div class="service-details__img-box-content-icon-and-title">
                                                <div class="service-details__img-box-content-icon">
                                                    <span class="icon-new-product"></span>
                                                </div>
                                                <h3 class="service-details__img-box-content-title">Safety Signage Design
                                                </h3>
                                            </div>
                                            <p class="service-details__img-box-content-text">Our team designs and installs
                                                comprehensive safety signage systems considering workplace hazards,
                                                visibility requirements and compliance standards for effective safety
                                                communication.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="service-details__img-box-single">
                                        <div class="service-details__img-box-img">
                                            <img src="website_assets/images/services/emergency-signage.png" alt="">
                                        </div>
                                        <div class="service-details__img-box-content">
                                            <div class="service-details__img-box-content-icon-and-title">
                                                <div class="service-details__img-box-content-icon">
                                                    <span class="icon-customer-loyalty"></span>
                                                </div>
                                                <h3 class="service-details__img-box-content-title">Emergency Signage</h3>
                                            </div>
                                            <p class="service-details__img-box-content-text">Professional installation of
                                                emergency exit signs, evacuation route markers and assembly point signs with
                                                proper illumination for clear guidance during emergency situations.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="faq-page__single">
                            <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                <div class="accrodion wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="accrodion-title">
                                        <h4>What types of safety signs do you install?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>We install all types of safety signs including prohibition signs (red
                                                circles), warning signs (yellow triangles), mandatory signs (blue circles),
                                                emergency signs (green rectangles) and fire safety signs with proper symbols
                                                and text as per safety standards.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accrodion active wow fadeInRight" data-wow-delay="100ms"
                                    data-wow-duration="1500ms">
                                    <div class="accrodion-title">
                                        <h4>What are the height and placement requirements for safety signs?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Safety signs should be installed at eye level (1.5-2 meters height) with
                                                clear visibility from appropriate distances. Emergency signs require
                                                illumination and placement at decision points, corridor intersections and
                                                exit routes for maximum effectiveness.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accrodion wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                                    <div class="accrodion-title">
                                        <h4>Do you provide custom sign board solutions?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Yes, we provide custom safety sign solutions with company logos, specific
                                                instructions, multilingual content and specialized symbols. Our team can
                                                design and install signs tailored to your specific workplace hazards and
                                                safety requirements.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accrodion wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <div class="accrodion-title">
                                        <h4>What materials are used for outdoor sign boards?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>For outdoor installations, we use weather-resistant materials like aluminum
                                                composite panels, stainless steel and UV-protected vinyl. These materials
                                                withstand environmental conditions and maintain visibility and legibility
                                                over extended periods.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accrodion wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                                    <div class="accrodion-title">
                                        <h4>Do you install photoluminescent signs and glow tapes?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Yes, we specialize in photoluminescent sign installations and glow tape
                                                applications for emergency evacuation paths. These materials glow in the
                                                dark during power failures, providing clear guidance when conventional
                                                lighting fails.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
