 <header class="main-header-two">
     <div class="main-menu-two__top">
         <div class="main-menu-two__top-inner">
             <ul class="list-unstyled main-menu-two__contact-list">
                 <li>
                     <div class="icon">
                         <i class="icon-phone-call"></i>
                     </div>
                     <div class="text">
                         <p><a href="tel:8438434000">+91 84384 34000</a></p>
                     </div>
                 </li>
                 <li>
                     <div class="icon">
                         <i class="icon-email"></i>
                     </div>
                     <div class="text">
                         <p><a href="mailto:arounsystems@gmail.com">arounsystems@gmail.com</a>
                         </p>
                     </div>
                 </li>
                 <li>
                     <div class="icon">
                         <i class="icon-location1"></i>
                     </div>
                     <div class="text">
                         <p>Pondicherry, Chennai</p>
                     </div>
                 </li>
             </ul>
             <div class="main-menu-two__top-right">
                 <div class="main-menu-two__top-time">
                     <div class="main-menu-two__top-time-icon">
                         <span class="fas fa-clock"></span>
                     </div>
                     <p class="main-menu-two__top-text">Mon - Sun: 09:00 AM - 09:00 PM</p>
                 </div>
                 <div class="main-menu-two__social">
                     <a href="https://www.facebook.com/arounsystems/" target="_blank"><i
                             class="fab fa-facebook"></i></a>
                     <a href="https://x.com/arounsystems" target="_blank"><i class="fab fa-twitter"></i></a>
                     <a href="https://www.instagram.com/arounsystems/" target="_blank"><i
                             class="fab fa-instagram"></i></a>
                     <a href="https://www.youtube.com/@arounfiresafetyequipments5968" target="_blank"><i
                             class="fab fa-youtube"></i></a>
                 </div>
             </div>
         </div>
     </div>
     <nav class="main-menu">
         <div class="main-menu-two__wrapper">
             <div class="main-menu-two__wrapper-inner">
                 <div class="main-menu-two__left">
                     <div class="main-menu-two__logo">
                         <a href="{{ route('home') }}"><img
                                 src="{{ asset('website_assets/images/resources/logo-2.png') }}" alt=""
                                 class="w-72"></a>
                     </div>
                 </div>
                 <div class="main-menu-two__main-menu-box">
                     <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                     <ul class="main-menu__list">
                         <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                             <a href="{{ route('home') }}">Home</a>
                         </li>
                         <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                             <a href="{{ route('about') }}">About</a>
                         </li>

                         <li
                             class="dropdown {{ request()->routeIs('servicelist') || request()->routeIs('firehydrantinstallation') || request()->routeIs('firehydrantsysteminstallationservice') || request()->routeIs('signboardinstallationservice') || request()->routeIs('fireextinguisherinstallationservice') ? 'active' : '' }}">
                             <a href="{{ route('servicelist') }}">Service</a>
                             <ul class="shadow-box">
                                 <li class="{{ request()->routeIs('firehydrantinstallation') ? 'active' : '' }}">
                                     <a href="{{ route('firehydrantinstallation') }}">Fire Hydrant Installation
                                         Service</a>
                                 </li>
                                 <li
                                     class="{{ request()->routeIs('firehydrantsysteminstallationservice') ? 'active' : '' }}">
                                     <a href="{{ route('firehydrantsysteminstallationservice') }}">Fire Hydrant System
                                         Installation Service</a>
                                 </li>
                                 <li class="{{ request()->routeIs('signboardinstallationservice') ? 'active' : '' }}">
                                     <a href="{{ route('signboardinstallationservice') }}">Sign Board Installation
                                         Service</a>
                                 </li>
                                 <li
                                     class="{{ request()->routeIs('fireextinguisherinstallationservice') ? 'active' : '' }}">
                                     <a href="{{ route('fireextinguisherinstallationservice') }}">Fire Extinguisher
                                         Installation Service</a>
                                 </li>
                             </ul>
                         </li>

                         <li class="{{ request()->routeIs('productlist') ? 'active' : '' }}">
                             <a href="{{ route('productlist') }}">Product</a>
                         </li>
                         <li class="{{ request()->routeIs('websitegallery') ? 'active' : '' }}">
                             <a href="{{ route('websitegallery') }}">Gallery</a>
                         </li>
                         <li class="{{ request()->routeIs('websiteblog') ? 'active' : '' }}">
                             <a href="{{ route('websiteblog') }}">Blog</a>
                         </li>
                     </ul>

                 </div>
                 <div class="main-menu-two__right">
                     <div class="main-menu-two__right-content">
                         <div class="main-menu-two__call">
                             <div class="main-menu-two__call-icon">
                                 <i class="icon-phone-call"></i>
                             </div>
                             <div class="main-menu-two__call-content">
                                 <p class="main-menu-two__call-sub-title">Call Anytime</p>
                                 <h5 class="main-menu-two__call-number"><a href="tel:84384 35000">+91 84384 35000</a>
                                 </h5>
                             </div>
                         </div>

                         <div class="main-menu-two__btn-box">
                             <a href="{{ route('contact') }}" class="thm-btn">Contact<span><i
                                         class="icon-right-arrow"></i></span></a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </nav>
 </header>
 <div class="stricky-header stricked-menu main-menu main-menu-two">
     <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
 </div><!-- /.stricky-header -->
