@extends('website.layouts.app')
@section('seo_title', 'Fire Hydrant System Installation Service | Aroun Systems & Safety Equipments')
@section('seo_description',
    'Complete fire hydrant system installation by Aroun Systems. Professional installation of
    industrial fire hydrant networks including piping, valves, and accessories with ISO certified quality standards.')
@section('seo_keywords',
    'fire hydrant system installation, industrial fire protection systems, fire hydrant network
    installation, fire fighting system installation, hydrant system maintenance')
@section('seo_author', 'Aroun Systems & Safety Equipments')
@section('seo_image', asset('website_assets/images/fire-hydrant-system-installation-og.jpg'))
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
                <h3>Fire Hydrant System Installation</h3>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><span class="fas fa-angle-right"></span></li>
                        <li><a href="{{ route('servicelist') }}">Services</a></li>
                        <li><span class="fas fa-angle-right"></span></li>
                        <li>Fire Hydrant System Installation</li>
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
                                <li class="active">
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
                            <img src="website_assets/images/services/fire-hydrant-system-installation.png" alt="">
                        </div>
                        <h3 class="service-details__title-1">Fire Hydrant System Installation Service</h3>
                        <p class="service-details__text-1">Aroun Systems delivers comprehensive fire hydrant system
                            installation solutions for large industrial complexes and commercial establishments. Our expert
                            team ensures complete network integration with proper water supply systems and pressure
                            requirements for optimal fire protection coverage.</p>
                        <p class="service-details__text-2">We provide end-to-end fire hydrant system installations including
                            main piping networks, branch connections, pressure boosting systems and monitoring equipment.
                            Our systematic approach guarantees reliable performance and complete compliance with national
                            fire safety standards and regulations.</p>
                        <ul class="service-details__points-list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-right-arrow"></span>
                                </div>
                                <p>Complete fire hydrant network installation with main pipelines, branch connections and
                                    strategic hydrant point placements for maximum coverage</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-right-arrow"></span>
                                </div>
                                <p>Professional installation of pressure boosting systems, water storage tanks and pumping
                                    arrangements to maintain required flow rates</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-right-arrow"></span>
                                </div>
                                <p>Integration with building management systems and fire alarm networks for coordinated
                                    emergency response and monitoring capabilities</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-right-arrow"></span>
                                </div>
                                <p>Comprehensive testing and commissioning services including flow tests, pressure tests and
                                    functional checks for system validation</p>
                            </li>
                        </ul>
                        <div class="service-details__img-box">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="service-details__img-box-single">
                                        <div class="service-details__img-box-img">
                                            <img src="website_assets/images/services/hydrant-system-design.png"
                                                alt="">
                                        </div>
                                        <div class="service-details__img-box-content">
                                            <div class="service-details__img-box-content-icon-and-title">
                                                <div class="service-details__img-box-content-icon">
                                                    <span class="icon-new-product"></span>
                                                </div>
                                                <h3 class="service-details__img-box-content-title">System Design</h3>
                                            </div>
                                            <p class="service-details__img-box-content-text">Our engineers design complete
                                                fire hydrant systems considering building layout, water supply availability
                                                and risk assessment for optimal protection coverage and performance
                                                standards.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="service-details__img-box-single">
                                        <div class="service-details__img-box-img">
                                            <img src="website_assets/images/services/hydrant-system-integration.png"
                                                alt="">
                                        </div>
                                        <div class="service-details__img-box-content">
                                            <div class="service-details__img-box-content-icon-and-title">
                                                <div class="service-details__img-box-content-icon">
                                                    <span class="icon-customer-loyalty"></span>
                                                </div>
                                                <h3 class="service-details__img-box-content-title">System Integration</h3>
                                            </div>
                                            <p class="service-details__img-box-content-text">Seamless integration of fire
                                                hydrant systems with other safety systems including fire alarms, sprinklers
                                                and building management for coordinated emergency response operations.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="faq-page__single">
                            <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                <div class="accrodion wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="accrodion-title">
                                        <h4>What components are included in a complete fire hydrant system?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>A complete fire hydrant system includes underground piping network, surface
                                                hydrant points, landing valves, hose boxes, pressure boosting pumps, water
                                                storage tanks and monitoring panels for comprehensive fire protection
                                                coverage.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accrodion active wow fadeInRight" data-wow-delay="100ms"
                                    data-wow-duration="1500ms">
                                    <div class="accrodion-title">
                                        <h4>How do you determine hydrant placement and spacing?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Hydrant placement follows IS standards with strategic positioning considering
                                                building layout, fire risk areas and hose reach requirements. Typically
                                                placed at 30-45 meter intervals for optimal coverage and accessibility
                                                during emergencies.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accrodion wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                                    <div class="accrodion-title">
                                        <h4>What water pressure and flow rates are required?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Fire hydrant systems require minimum 3.5 kg/cm² pressure at the farthest
                                                point with flow rates of 900-1800 LPM depending on building occupancy and
                                                risk category as per National Building Code requirements.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accrodion wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <div class="accrodion-title">
                                        <h4>Do you provide system documentation and compliance certificates?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Yes, we provide complete system documentation including as-built drawings,
                                                test certificates, compliance reports and operation manuals. All
                                                installations come with ISO 9001:2015 quality certification and fire
                                                department approval documents.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accrodion wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                                    <div class="accrodion-title">
                                        <h4>What is the typical project timeline for large systems?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Large industrial fire hydrant system installations typically take 4-8 weeks
                                                including design approval, material procurement, installation and
                                                commissioning phases. Complex projects may require additional time for
                                                integration with existing systems.</p>
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
