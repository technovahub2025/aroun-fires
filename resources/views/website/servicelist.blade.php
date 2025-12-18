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
                <h3>Services</h3>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><span class="fas fa-angle-right"></span></li>
                        <li>Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <section class="services-one services-page">
        <div class="container">
            <div class="row">
                <!--Services One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
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
                            <p class="services-one__text">Professional installation of fire hydrants ensuring reliable water
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
                <div class="col-xl-3 col-lg-6 col-md-6">
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
                <div class="col-xl-3 col-lg-6 col-md-6">
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
                            <h4 class="services-one__title"><a href="{{ route('signboardinstallationservice') }}">Sign Board
                                    Installation
                                    Service</a>
                            </h4>
                            <p class="services-one__text">Expert installation of safety sign boards for clear emergency exit
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
                <div class="col-xl-3 col-lg-6 col-md-6">
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
            </div>
        </div>
    </section>
    <!--Services One End-->
@endsection
