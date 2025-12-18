@extends('website.layouts.app')
@section('seo_title', 'Contact Aroun Systems | Multiple Locations Across India')
@section('seo_description',
    'Get in touch with Aroun Systems - ISO certified fire safety company with branches in
    Pondicherry and Chennai. Find our locations and contact information.')
@section('seo_keywords',
    'contact aroun systems, fire safety company contact, pondicherry, chennai, industrial safety
    equipment, fire protection services')
@section('seo_author', 'Aroun Systems & Safety Equipments')
@section('seo_image', asset('website_assets/images/aroun-systems-contact-og.jpg'))
@push('styles')
    <link rel="stylesheet" href="website_assets/css/module-css/page-header.css" />
    <link rel="stylesheet" href="website_assets/css/module-css/shop.css" />
    <link rel="stylesheet" href="website_assets/css/module-css/error.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .contact-info {
            padding: 80px 0 50px;
            background: #f8f9fa;
        }

        .contact-info__single {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            text-align: center;
            transition: all 0.3s ease;
            height: 100%;
            border-bottom: 4px solid transparent;
        }

        .contact-info__single:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
            border-bottom-color: #e74c3c;
        }

        .contact-info__icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #e74c3c, #c0392b);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }

        .orange {
            color: white;
        }

        .contact-info__icon span {
            font-size: 32px;
            color: #fff;
        }

        .contact-info__single p {
            font-size: 16px;
            color: #666;
            margin-bottom: 10px;
            font-weight: 500;
        }

        .contact-info__single h5 {
            font-size: 18px;
            color: #222;
            margin-bottom: 8px;
            line-height: 1.4;
        }

        .contact-info__single h5 a {
            color: #222;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .contact-info__single h5 a:hover {
            color: #e74c3c;
        }

        .branches-section {
            padding: 80px 0;
            background: #fff;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 36px;
            color: #222;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .section-title h2:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: #e74c3c;
        }

        .section-title p {
            color: #666;
            max-width: 600px;
            margin: 0 auto;
            font-size: 16px;
        }

        .branches-tabs {
            margin-bottom: 40px;
        }

        .branch-tab {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
        }

        .branch-btn {
            padding: 12px 30px;
            background: #f8f9fa;
            border: none;
            border-radius: 30px;
            color: #333;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .branch-btn i {
            font-size: 14px;
        }

        .branch-btn.active,
        .branch-btn:hover {
            background: #e74c3c;
            color: #fff;
        }

        .branch-content {
            display: none;
            animation: fadeIn 0.5s ease;
        }

        .branch-content.active {
            display: block;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .branch-details {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }

        .branch-map {
            height: 486px;
            width: 100%;
            border: none;
        }

        .branch-info {
            padding: 30px;
        }

        .branch-info h3 {
            font-size: 24px;
            color: #222;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }

        .branch-contact-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .branch-contact-list li {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #f5f5f5;
        }

        .branch-contact-list li:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .branch-contact-icon {
            width: 40px;
            height: 40px;
            background: #f8f9fa;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .branch-contact-icon i {
            color: #e74c3c;
            font-size: 16px;
        }

        .branch-contact-text h5 {
            font-size: 16px;
            color: #222;
            margin-bottom: 5px;
        }

        .branch-contact-text p {
            font-size: 14px;
            color: #666;
            margin: 0;
        }

        .branch-contact-text a {
            color: #666;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .branch-contact-text a:hover {
            color: #e74c3c;
        }

        .all-branches-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .branch-card {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .branch-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .branch-card__header {
            padding: 20px;
            background: linear-gradient(135deg, #e74c3c, #c0392b);
            color: #fff;
            text-align: center;
        }

        .branch-card__header h4 {
            font-size: 20px;
            margin: 0;
        }

        .branch-card__body {
            padding: 20px;
        }

        .branch-card__contact {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .branch-card__contact li {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
            font-size: 14px;
        }

        .branch-card__contact li i {
            width: 20px;
            color: #e74c3c;
            margin-right: 10px;
        }

        .branch-card__contact li:last-child {
            margin-bottom: 0;
        }

        @media (max-width: 768px) {
            .branch-tab {
                flex-direction: column;
                align-items: center;
            }

            .branch-btn {
                width: 100%;
                max-width: 280px;
                justify-content: center;
            }

            .branch-map {
                height: 300px;
            }

            .all-branches-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
@endpush
@section('content')
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
                <h3>Contact Us</h3>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><span class="fas fa-angle-right"></span></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--Contact Info Start-->
    <section class="contact-info">
        <div class="container">
            <div class="row">
                <!--Contact Single Start-->
                <div class="col-xl-3 col-lg-6 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="contact-info__single">
                        <div class="contact-info__icon">
                            <span class="icon-phone-call"></span>
                        </div>
                        <p>Contact Us</p>
                        <h5><a href="tel:04132250356">0413 2250356</a></h5>
                        <h5><a href="tel:+918438434000">+91 84384 34000</a></h5>
                    </div>
                </div>
                <!--Contact Single End-->
                <!--Contact Single Start-->
                <div class="col-xl-3 col-lg-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="contact-info__single">
                        <div class="contact-info__icon">
                            <span class="icon-email"></span>
                        </div>
                        <p>Mail Us</p>
                        <h5><a href="mailto:arounsystems@gmail.com">arounsystems@gmail.com</a></h5>
                        <h5><a href="mailto:info@arounsystems.com">info@arounsystems.com</a></h5>
                    </div>
                </div>
                <!--Contact Single End-->
                <!--Contact Single Start-->
                <div class="col-xl-3 col-lg-6 wow fadeInRight" data-wow-delay="300ms">
                    <div class="contact-info__single">
                        <div class="contact-info__icon">
                            <span class="icon-24-hours-service"></span>
                        </div>
                        <p>Working Hours</p>
                        <h5>Monday - Sunday</h5>
                        <h5>9:00 AM - 9:00 PM</h5>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                    <div class="contact-info__single">
                        <div class="contact-info__icon">
                            <span class="icon-location1"></span>
                        </div>
                        <p>Corporate Office</p>
                        <h5>Puducherry,</h5>
                        <h5>India</h5>
                    </div>
                </div>
                <!--Contact Single End-->
            </div>
        </div>
    </section>
    <!--Contact Info End-->

    <!--Branches Section Start-->
    <section class="branches-section">
        <div class="container">
            <div class="section-title">
                <h2>Our Branches</h2>
                <p>Find Aroun Systems offices in Pondicherry and Chennai</p>
            </div>

            <div class="branches-tabs">
                <div class="branch-tab">
                    <button class="branch-btn active" data-branch="pondicherry">
                        <i class="fas fa-map-marker-alt"></i> Pondicherry
                    </button>
                    <button class="branch-btn" data-branch="chennai">
                        <i class="fas fa-map-marker-alt"></i> Chennai
                    </button>
                </div>
            </div>

            <!-- Pondicherry Branch -->
            <div class="branch-content active" id="pondicherry">
                <div class="branch-details">
                    <div class="row">
                        <div class="col-lg-8">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4670.7960981271035!2d79.80963618430424!3d11.950798806230214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a53616913920067%3A0xbfc507ed34faf33d!2sAroun%20Systems%20%26%20Safety%20Equipments!5e1!3m2!1sen!2sin!4v1761306015367!5m2!1sen!2sin"
                                class="branch-map" allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>
                        <div class="col-lg-4">
                            <div class="branch-info">
                                <h3>Corporate Office</h3>
                                <ul class="branch-contact-list">
                                    <li>
                                        <div class="branch-contact-icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="branch-contact-text">
                                            <h5>Address</h5>
                                            <p># 38, 39, 2nd Cross St.,
                                                <br> Green Garden,
                                                Lawspet Post,<br>Puducherry - 605 008.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="branch-contact-icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="branch-contact-text">
                                            <h5>Phone</h5>
                                            <p><a href="tel:04132250356">0413-2250356</a><br>
                                                <a href="tel:+918438434000">+91 84384 34000</a>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="branch-contact-icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="branch-contact-text">
                                            <h5>Email</h5>
                                            <p><a href="mailto:arounsystems@gmail.com">arounsystems@gmail.com</a>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="branch-contact-icon">
                                            <i class="fas fa-clock"></i>
                                        </div>
                                        <div class="branch-contact-text">
                                            <h5>Working Hours</h5>
                                            <p>Mon - Sun: 9:00 AM - 9:00 PM</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chennai Branch -->
            <div class="branch-content" id="chennai">
                <div class="branch-details">
                    <div class="row">
                        <div class="col-lg-8">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d596873.4371007007!2d79.67963206610872!3d12.39038968697484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525a160103b2f7%3A0x6375075eebceb05d!2sAroun%20Systems%20%26%20Safety%20Equipments!5e1!3m2!1sen!2sin!4v1761306407443!5m2!1sen!2sin"
                                class="branch-map" allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>
                        <div class="col-lg-4">
                            <div class="branch-info">
                                <h3>Branch Office</h3>
                                <ul class="branch-contact-list">
                                    <li>
                                        <div class="branch-contact-icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="branch-contact-text">
                                            <h5>Address</h5>
                                            <p>SIPCOT IT PARK, OMR Road, <br>Siruseri<br>Chennai - 603 103.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="branch-contact-icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="branch-contact-text">
                                            <h5>Phone</h5>
                                            <p><a href="tel:+918056648015">+91 8056648015</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="branch-contact-icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="branch-contact-text">
                                            <h5>Email</h5>
                                            <p><a href="mailto:arounsystems@gmail.com">arounsystems@gmail.com</a>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="branch-contact-icon">
                                            <i class="fas fa-clock"></i>
                                        </div>
                                        <div class="branch-contact-text">
                                            <h5>Working Hours</h5>
                                            <p>Mon - Sun: 9:00 AM - 9:00 PM</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- All Branches Grid -->
            <div class="section-title">
                <h2>All Our Locations</h2>
                <p>Quick contact information for all our branches</p>
            </div>

            <div class="all-branches-grid">
                <!-- Pondicherry Card -->
                <div class="branch-card">
                    <div class="branch-card__header">
                        <h4 class="orange">Pondicherry</h4>
                    </div>
                    <div class="branch-card__body">
                        <ul class="branch-card__contact">
                            <li><i class="fas fa-map-marker-alt"></i> #38,39, 2nd Cross St., Green Garden, Lawspet</li>
                            <li><i class="fas fa-phone"></i> 0413-2250356</li>
                            <li><i class="fas fa-phone"></i> +91 84384 34000</li>
                            <li><i class="fas fa-envelope"></i> arounsystems@gmail.com</li>
                            <li><i class="fas fa-clock"></i> Mon-Sun: 9AM-9PM</li>
                        </ul>
                    </div>
                </div>

                <!-- Chennai Card -->
                <div class="branch-card">
                    <div class="branch-card__header">
                        <h4 class="orange">Chennai</h4>
                    </div>
                    <div class="branch-card__body">
                        <ul class="branch-card__contact">
                            <li><i class="fas fa-map-marker-alt"></i> SIPCOT IT PARK, OMR Road, Siruseri</li>
                            <li><i class="fas fa-phone"></i> +91 8056648015</li>
                            <li><i class="fas fa-envelope"></i> arounsystems@gmail.com</li>
                            <li><i class="fas fa-clock"></i> Mon-Sun: 9AM-9PM</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Branches Section End-->
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Branch tab functionality
            const branchButtons = document.querySelectorAll('.branch-btn');
            const branchContents = document.querySelectorAll('.branch-content');

            branchButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons and contents
                    branchButtons.forEach(btn => btn.classList.remove('active'));
                    branchContents.forEach(content => content.classList.remove('active'));

                    // Add active class to clicked button
                    this.classList.add('active');

                    // Show corresponding content
                    const branchId = this.getAttribute('data-branch');
                    document.getElementById(branchId).classList.add('active');
                });
            });
        });
    </script>
@endpush
