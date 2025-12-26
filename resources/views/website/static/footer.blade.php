<footer class="site-footer-two">
    <div class="site-footer-two__shape-1 float-bob-x">
        <img src="website_assets/images/shapes/site-footer-two-shape-1.png" alt="">
    </div>
    <div class="container">
        <div class="site-footer-two__top">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget-two__column footer-widget-two__about">
                        <div class="footer-widget-two__logo">
                            <a href="{{ route('home') }}"><img
                                    src="{{ asset('website_assets/images/resources/logo-2.png') }}"
                                    class="footer-img-logo" alt=""></a>
                        </div>
                        <p class="footer-widget-two__about-text">Aroun Systems provides complete fire safety solutions
                            and quality equipment for industrial and commercial safety requirements across multiple
                            states in India.</p>
                        <div class="site-footer-two__social">
                            <a href="https://www.facebook.com/arounsystems/" target="_blank"><i
                                    class="icon-facebook-app-symbol"></i></a>
                            <a href="https://x.com/arounsystems"><i class="icon-twitter1"></i></a>
                            <a href="https://www.instagram.com/arounsystems/" target="_blank"><i
                                    class="icon-instagram"></i></a>
                            <a href="https://www.youtube.com/@arounfiresafetyequipments5968" target="_blank"><i
                                    class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="footer-widget-two__column footer-widget-two__usefull-link">
                        <div class="footer-widget-two__title-box">
                            <h3 class="footer-widget-two__title">Quick Links</h3>
                        </div>
                        <div class="footer-widget-two__link-box">
                            <ul class="footer-widget-two__link list-unstyled">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('productlist') }}">Products</a></li>
                                <li><a href="{{ route('servicelist') }}">Services</a></li>
                                <li><a href="{{ route('websiteblog') }}">Blog</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="footer-widget-two__column footer-widget-two__services">
                        <div class="footer-widget-two__title-box">
                            <h3 class="footer-widget-two__title">Our Services</h3>
                        </div>
                        <ul class="footer-widget-two__link list-unstyled">
                            <li><a href="{{ route('firehydrantinstallation') }}">Fire Hydrant Service</a>
                            </li>
                            <li><a href="{{ route('firehydrantsysteminstallationservice') }}">Fire Hydrant System
                                </a>
                            </li>
                            <li><a href="{{ route('signboardinstallationservice') }}">Sign Board
                                    Service</a></li>
                            <li><a href="{{ route('fireextinguisherinstallationservice') }}">Fire Extinguisher
                                    Service</a></li>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="footer-widget-two__column footer-widget-two__newsletter">
                        <h3 class="footer-widget-two__newsletter-title footer-widget-two__title-box">Contact</h3>
                        <ul class="footer-widget-two__contact list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-phone-call"></span>
                                </div>
                                <div class="content">
                                    <h5>24/7 Service</h5>
                                    <p><a href="tel:8438434000">+91 84384 34000</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-location1"></span>
                                </div>
                                <div class="content">
                                    <h5>Corporate Office</h5>
                                    <p>#38, 39, 2nd Cross St., Green Garden,
                                        Lawspet Post, Puducherry.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-location1"></span>
                                </div>
                                <div class="content">
                                    <h5>Admin Office</h5>
                                    <p>Ambattur Industrial Estate,
                                        Nolambur, Chennai
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-location1"></span>
                                </div>
                                <div class="content">
                                    <h5>Branch Office</h5>
                                    <p> SIPCOT IT PARK,
                                        OMR Road, Siruseri, Chennai
                                    </p>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer-two__bottom">
        <div class="container">
            <div class="site-footer-two__bottom-inner">
                <p class="site-footer-two__bottom-text">© Copyright {{ date('Y') }} by <a href="#">Aroun
                        Systems & Safety Equipments</a>
                    All Rights
                    Reserved.</p>
                <p class="site-footer-two__bottom-text">Managed by <a
                        href="https://www.seyfertinfotech.com/" target="_blank">Technovahub</a>
                </p>
            </div>
        </div>
    </div>
</footer>
