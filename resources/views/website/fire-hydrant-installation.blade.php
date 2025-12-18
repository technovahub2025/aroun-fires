@extends('website.layouts.app')
@section('seo_title', 'Fire Hydrant Installation Service | Aroun Systems & Safety Equipments')
@section('seo_description',
    'Professional fire hydrant system installation service by Aroun Systems. ISO certified
    installation, maintenance, and testing of industrial fire hydrant systems for complete safety compliance.')
@section('seo_keywords',
    'fire hydrant installation, fire hydrant systems, industrial fire protection, fire safety
    installation, hydrant system maintenance, fire fighting systems, safety equipment installation')
@section('seo_author', 'Aroun Systems & Safety Equipments')
@section('seo_image', asset('website_assets/images/fire-hydrant-installation-og.jpg'))
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
                <h3>Fire Hydrant Installation</h3>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><span class="fas fa-angle-right"></span></li>
                        <li><a href="{{ route('servicelist') }}">Services</a></li>
                        <li><span class="fas fa-angle-right"></span></li>
                        <li>Fire Hydrant Installation</li>
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
                                <li class="active">
                                    <a href="{{ route('firehydrantinstallation') }}">Fire Hydrant Installation<span
                                            class="icon-next"></span></a>
                                </li>
                                <li>
                                    <a href="{{ route('firehydrantsysteminstallationservice') }}">Fire Hydrant System
                                        Installation<span class="icon-next"></span></a>
                                </li>
                                <li>
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
                            <img src="website_assets/images/services/fire-hydrant-installation.png" alt="">
                        </div>
                        <h3 class="service-details__title-1">Fire Hydrant Installation Service</h3>
                        <p class="service-details__text-1">Aroun Systems provides professional fire hydrant installation
                            services for industrial and commercial facilities. Our certified technicians ensure complete
                            compliance with safety standards and regulations for optimal fire protection systems
                            installation and maintenance requirements.</p>
                        <p class="service-details__text-2">We specialize in comprehensive fire hydrant system installations
                            including underground piping, landing valves, hose boxes and accessories. Our team follows
                            strict quality control measures and industry best practices to deliver reliable and efficient
                            fire fighting systems for your premises safety requirements.</p>
                        <ul class="service-details__points-list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-right-arrow"></span>
                                </div>
                                <p>Complete fire hydrant system installation with underground piping network and surface
                                    components for industrial safety applications</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-right-arrow"></span>
                                </div>
                                <p>Professional installation of landing valves, hose boxes and accessories conforming to IS
                                    standards and safety regulations</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-right-arrow"></span>
                                </div>
                                <p>Regular maintenance and testing services to ensure optimal performance and compliance
                                    with fire safety standards</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-right-arrow"></span>
                                </div>
                                <p>Customized solutions for industrial, commercial and residential buildings with proper
                                    water pressure and flow requirements</p>
                            </li>
                        </ul>
                        <div class="service-details__img-box">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="service-details__img-box-single">
                                        <div class="service-details__img-box-img">
                                            <img src="website_assets/images/services/hydrant-quality-work.png"
                                                alt="">
                                        </div>
                                        <div class="service-details__img-box-content">
                                            <div class="service-details__img-box-content-icon-and-title">
                                                <div class="service-details__img-box-content-icon">
                                                    <span class="icon-new-product"></span>
                                                </div>
                                                <h3 class="service-details__img-box-content-title">Quality Installation</h3>
                                            </div>
                                            <p class="service-details__img-box-content-text">Our certified technicians
                                                ensure high-quality fire hydrant installation with proper materials and
                                                techniques for long-lasting performance and complete safety compliance
                                                standards.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="service-details__img-box-single">
                                        <div class="service-details__img-box-img">
                                            <img src="website_assets/images/services/hydrant-maintenance.png"
                                                alt="">
                                        </div>
                                        <div class="service-details__img-box-content">
                                            <div class="service-details__img-box-content-icon-and-title">
                                                <div class="service-details__img-box-content-icon">
                                                    <span class="icon-customer-loyalty"></span>
                                                </div>
                                                <h3 class="service-details__img-box-content-title">Maintenance Service</h3>
                                            </div>
                                            <p class="service-details__img-box-content-text">Regular maintenance and testing
                                                services to ensure your fire hydrant systems remain operational and
                                                compliant with safety regulations throughout their service life.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="faq-page__single">
                            <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                <div class="accrodion wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="accrodion-title">
                                        <h4>What is the installation timeline for fire hydrant systems?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Fire hydrant installation timelines vary based on project size and
                                                complexity. Standard industrial installations typically take 2-4 weeks
                                                including planning, material procurement and commissioning phases for
                                                complete system readiness.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accrodion active wow fadeInRight" data-wow-delay="100ms"
                                    data-wow-duration="1500ms">
                                    <div class="accrodion-title">
                                        <h4>Do you provide maintenance services after installation?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Yes, we offer comprehensive maintenance packages including quarterly
                                                inspections, annual testing, and emergency repair services to ensure your
                                                fire hydrant systems remain fully operational and compliant with safety
                                                standards.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accrodion wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                                    <div class="accrodion-title">
                                        <h4>What standards do you follow for installation?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>We follow IS 5290 standards for fire hydrant installations and comply with
                                                National Building Code requirements. Our installations meet ISO 9001:2015
                                                quality standards and local fire safety regulations for complete compliance.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accrodion wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <div class="accrodion-title">
                                        <h4>Can you install hydrant systems in existing buildings?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Yes, we specialize in retrofitting fire hydrant systems in existing buildings
                                                with minimal disruption. Our team assesses the structure and designs
                                                customized solutions that meet safety requirements while preserving building
                                                integrity.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accrodion wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                                    <div class="accrodion-title">
                                        <h4>What is your service coverage area?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>We provide fire hydrant installation services across Tamilnadu, Puducherry,
                                                Karnataka, Kerala, Andhra, Telangana and Maharashtra with our multi-state
                                                operations and 24/7 emergency support services for all clients.</p>
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
