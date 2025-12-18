@extends('website.layouts.app')
@section('seo_title', 'Fire Extinguisher Installation Service | Aroun Systems & Safety Equipments')
@section('seo_description',
    'Professional fire extinguisher installation service by Aroun Systems. ISI certified
    installation, maintenance, and testing of portable fire extinguishers for industrial and commercial safety compliance.')
@section('seo_keywords',
    'fire extinguisher installation, portable fire extinguisher installation, ISI certified
    extinguishers, fire safety equipment installation, extinguisher maintenance service')
@section('seo_author', 'Aroun Systems & Safety Equipments')
@section('seo_image', asset('website_assets/images/fire-extinguisher-installation-og.jpg'))
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
                <h3>Fire Extinguisher Installation</h3>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><span class="fas fa-angle-right"></span></li>
                        <li><a href="{{ route('servicelist') }}">Services</a></li>
                        <li><span class="fas fa-angle-right"></span></li>
                        <li>Fire Extinguisher Installation</li>
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
                                <li>
                                    <a href="{{ route('signboardinstallationservice') }}">Sign Board Installation<span
                                            class="icon-next"></span></a>
                                </li>
                                <li class="active">
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
                            <img src="website_assets/images/services/fire-extinguisher-installation.png" alt="">
                        </div>
                        <h3 class="service-details__title-1">Fire Extinguisher Installation Service</h3>
                        <p class="service-details__text-1">Aroun Systems provides professional fire extinguisher
                            installation services with ISI certified portable extinguishers for industrial and commercial
                            facilities. Our certified technicians ensure proper placement and compliance with fire safety
                            standards for effective emergency response capabilities.</p>
                        <p class="service-details__text-2">We specialize in comprehensive fire extinguisher installations
                            including ABC powder, CO2, mechanical foam and clean agent types. Our systematic approach
                            guarantees strategic placement, proper mounting and clear accessibility for quick response
                            during fire emergency situations.</p>
                        <ul class="service-details__points-list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-right-arrow"></span>
                                </div>
                                <p>Professional installation of ISI certified portable fire extinguishers including ABC
                                    powder, CO2, foam and clean agent types for different fire classes</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-right-arrow"></span>
                                </div>
                                <p>Strategic placement of extinguishers near exits, along escape routes and close to
                                    specific fire hazards with proper mounting height and clear access</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-right-arrow"></span>
                                </div>
                                <p>Installation of fire extinguisher cabinets, wall brackets and stand mounts with proper
                                    signage and illumination for easy identification</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-right-arrow"></span>
                                </div>
                                <p>Regular maintenance, hydro testing and refilling services to ensure extinguishers remain
                                    operational and compliant with safety regulations</p>
                            </li>
                        </ul>
                        <div class="service-details__img-box">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="service-details__img-box-single">
                                        <div class="service-details__img-box-img">
                                            <img src="website_assets/images/services/extinguisher-placement.png"
                                                alt="">
                                        </div>
                                        <div class="service-details__img-box-content">
                                            <div class="service-details__img-box-content-icon-and-title">
                                                <div class="service-details__img-box-content-icon">
                                                    <span class="icon-new-product"></span>
                                                </div>
                                                <h3 class="service-details__img-box-content-title">Strategic Placement</h3>
                                            </div>
                                            <p class="service-details__img-box-content-text">Our experts strategically place
                                                fire extinguishers considering fire risks, travel distances and
                                                accessibility requirements for quick response during emergency situations.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="service-details__img-box-single">
                                        <div class="service-details__img-box-img">
                                            <img src="website_assets/images/services/extinguisher-maintenance.png"
                                                alt="">
                                        </div>
                                        <div class="service-details__img-box-content">
                                            <div class="service-details__img-box-content-icon-and-title">
                                                <div class="service-details__img-box-content-icon">
                                                    <span class="icon-customer-loyalty"></span>
                                                </div>
                                                <h3 class="service-details__img-box-content-title">Maintenance Service</h3>
                                            </div>
                                            <p class="service-details__img-box-content-text">Regular maintenance, pressure
                                                testing and refilling services to ensure your fire extinguishers remain
                                                operational and compliant with safety standards throughout their service
                                                life.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="faq-page__single">
                            <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                <div class="accrodion wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="accrodion-title">
                                        <h4>What types of fire extinguishers do you install?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>We install all types of ISI certified fire extinguishers including ABC powder
                                                for general fires, CO2 for electrical fires, foam for flammable liquids and
                                                clean agent for sensitive equipment areas. Each type is selected based on
                                                specific fire risks.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accrodion active wow fadeInRight" data-wow-delay="100ms"
                                    data-wow-duration="1500ms">
                                    <div class="accrodion-title">
                                        <h4>What is the proper mounting height for fire extinguishers?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Fire extinguishers should be mounted at 1-1.5 meters height from floor level
                                                with the carrying handle approximately 1 meter high. This ensures easy
                                                access and operation for most adults during emergency situations.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accrodion wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                                    <div class="accrodion-title">
                                        <h4>How often should fire extinguishers be inspected?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Fire extinguishers require monthly visual inspections by facility staff and
                                                annual professional maintenance by certified technicians. Hydrostatic
                                                testing is required every 5-12 years depending on extinguisher type.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accrodion wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <div class="accrodion-title">
                                        <h4>What is the maximum travel distance to extinguishers?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Maximum travel distance to Class A fire extinguishers is 15 meters in low
                                                hazard areas and 23 meters in ordinary hazard areas. For Class B fires,
                                                maximum travel distance is 9-15 meters depending on extinguisher rating.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accrodion wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                                    <div class="accrodion-title">
                                        <h4>Do you provide training on extinguisher usage?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Yes, we provide comprehensive fire extinguisher training covering different
                                                fire types, proper selection of extinguishers, PASS technique (Pull, Aim,
                                                Squeeze, Sweep) and hands-on practice sessions for effective emergency
                                                response.</p>
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
