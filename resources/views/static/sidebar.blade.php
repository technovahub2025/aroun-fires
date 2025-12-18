<aside class="app-sidebar sticky" id="sidebar">

    <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header">
        <a href="#!" class="header-logo">
            <img src="./dimage.png" alt="logo" class="desktop-logo">
            <img src="./smalllogo.png" alt="logo" class="toggle-dark">
            <img src="./dimage.png" alt="logo" class="desktop-dark">
            <img src="./smalllogo.png" alt="logo" class="toggle-logo">
            <img src="./smalllogo.png" alt="logo" class="toggle-white">
            <img src="./dimage.png" alt="logo" class="desktop-white">
        </a>
    </div>
    <!-- End::main-sidebar-header -->

    <!-- Start::main-sidebar -->
    <div class="main-sidebar" id="sidebar-scroll">

        <!-- Start::nav -->
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                    viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                </svg>
            </div>
            <ul class="main-menu">
                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Main</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="dashboard" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        <span class="side-menu__label">Dashboard</span>
                    </a>
                </li>
                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Content Management</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                {{-- <li class="slide">
                    <a href="latestnews" class="side-menu__item">
                        <i class="ri ri-news-line w-6 h-6 side-menu__icon"></i>
                        <span class="side-menu__label">Latest News</span>
                    </a>
                </li> --}}
                <li class="slide">
                    <a href="blog" class="side-menu__item">
                        <i class="ti ti-brand-blogger w-6 h-6 side-menu__icon"></i>
                        <span class="side-menu__label">Blogs</span>
                    </a>
                </li>

                <li class="slide">
                    <a href="gallery" class="side-menu__item">
                        <i class="ri ri-image-circle-line w-6 h-6 side-menu__icon"></i>
                        <span class="side-menu__label">Gallery</span>
                    </a>
                </li>
                </li>
                <!-- End::slide -->
                <li class="slide__category"><span class="category-name">Product Management</span></li>
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="la la-shopping-cart w-6 h-6 side-menu__icon"></i>

                        <span class="side-menu__label">Product</span>
                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Product </a>
                        </li>
                        <li class="slide">
                            <a href="mainproduct" class="side-menu__item">Main-Product List</a>
                        </li>
                        <li class="slide">
                            <a href="subproduct" class="side-menu__item">Sub-Product List</a>
                        </li>
                    </ul>
                <li class="slide">
                    <a href="{{ route('enquiry') }}" class="side-menu__item">
                        <i class="ri ri-question-line w-6 h-6 side-menu__icon"></i>
                        <span class="side-menu__label">Enquiry</span>
                    </a>
                </li>
                </li>
                {{-- <li class="slide">
                    <a href="catalogue" class="side-menu__item">
                        <i class="bx bx-book-open w-6 h-6 side-menu__icon"></i>
                        <span class="side-menu__label">Catalogue</span>
                    </a>
                </li> --}}
                <li class="slide__category"><span class="category-name">Others</span></li>
                <li class="slide">
                    <a href="admin" class="side-menu__item">
                        <i class="ri ri-admin-fill w-6 h-6 side-menu__icon"></i>

                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        <span class="side-menu__label">CRM User</span>
                    </a>
                </li>
                <li class="slide">
                    <a href="{{ route('logout') }}" class="side-menu__item">
                        <i class="ti ti-logout w-6 h-6 side-menu__icon"></i>
                        <span class="side-menu__label">Logout</span>
                    </a>
                </li>
            </ul>

        </nav>

    </div>

</aside>
