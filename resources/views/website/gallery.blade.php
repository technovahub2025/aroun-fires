@extends('website.layouts.app')
@section('seo_title', 'Gallery | Aroun Systems & Safety Equipments')
@section('seo_description',
    'Browse our gallery of fire safety systems, PPE equipment, and industrial safety solutions
    from Aroun Systems.')
@section('seo_keywords',
    'gallery, fire safety equipment, PPE, industrial safety, safety solutions, aroun systems
    gallery')
@section('seo_author', 'Aroun Systems & Safety Equipments')
@section('seo_image', asset('website_assets/images/aroun-systems-gallery-og.jpg'))
@push('styles')
    <link rel="stylesheet" href="website_assets/css/module-css/page-header.css" />
    <link rel="stylesheet" href="website_assets/css/module-css/shop.css" />
    <link rel="stylesheet" href="website_assets/css/module-css/error.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/css/lightgallery-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .gallery-section {
            padding: 80px 0;
            background-color: #f8f9fa;
        }

        .gallery-filter {
            text-align: center;
            margin-bottom: 40px;
        }

        .filter-btn {
            display: inline-block;
            padding: 10px 25px;
            margin: 0 5px 10px;
            background: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 30px;
            color: #333;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter-btn.active,
        .filter-btn:hover {
            background: #e74c3c;
            color: #fff;
            border-color: #e74c3c;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 25px;
        }

        .gallery-item {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
            background: #fff;
            cursor: pointer;
        }

        .gallery-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .gallery-img {
            width: 100%;
            height: 240px;
            object-fit: cover;
            transition: all 0.5s ease;
        }

        .gallery-item:hover .gallery-img {
            transform: scale(1.05);
        }

        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
            padding: 20px;
            color: #fff;
            transform: translateY(100%);
            transition: all 0.4s ease;
        }

        .gallery-item:hover .gallery-overlay {
            transform: translateY(0);
        }

        .gallery-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .gallery-category {
            font-size: 14px;
            opacity: 0.8;
        }

        .gallery-icon {
            position: absolute;
            top: 15px;
            right: 15px;
            background: rgba(255, 255, 255, 0.9);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transform: scale(0.8);
            transition: all 0.3s ease;
            z-index: 2;
        }

        .gallery-item:hover .gallery-icon {
            opacity: 1;
            transform: scale(1);
        }

        .gallery-icon i {
            color: #e74c3c;
            font-size: 18px;
        }

        .no-results {
            text-align: center;
            padding: 40px;
            grid-column: 1 / -1;
            display: none;
        }

        .section-title {
            text-align: center;
            margin-bottom: 20px;
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
            margin: 0 auto 30px;
        }

        @media (max-width: 768px) {
            .gallery-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                gap: 20px;
            }

            .filter-btn {
                padding: 8px 20px;
                font-size: 14px;
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
                <h3>Gallery</h3>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><span class="fas fa-angle-right"></span></li>
                        <li>Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery-section">
        <div class="container">
            <div class="section-title">
                <h2>Our Gallery</h2>
                <p>Explore our collection of fire safety systems, PPE equipment, and industrial safety solutions</p>
            </div>

            <div class="gallery-filter">
                <button class="filter-btn active" data-filter="all">All</button>
                {{-- <button class="filter-btn" data-filter="fire-safety">Fire Safety</button>
                <button class="filter-btn" data-filter="ppe">PPE Equipment</button>
                <button class="filter-btn" data-filter="industrial">Industrial Safety</button>
                <button class="filter-btn" data-filter="training">Training</button>
                <button class="filter-btn" data-filter="projects">Projects</button> --}}
            </div>

            <div class="gallery-grid" id="lightgallery">
                @foreach ($gallerys as $gallery)
                    <a href="{{ asset('dynamic_images') }}/{{ $gallery->image }}" class="gallery-item"
                        data-category="fire-safety" data-lg-size="1600-1067">
                        <img src="{{ asset('dynamic_images') }}/{{ $gallery->image }}" alt="Fire Extinguisher"
                            class="gallery-img">
                        <div class="gallery-overlay">
                            <h4 class="gallery-title">{{ $gallery->category->category }}</h4>
                            <div class="gallery-category">{{ $gallery->category->category }}</div>
                        </div>
                        <div class="gallery-icon">
                            <i class="fas fa-expand"></i>
                        </div>
                    </a>
                @endforeach




            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/lightgallery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/plugins/zoom/lg-zoom.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/plugins/thumbnail/lg-thumbnail.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize LightGallery
            const gallery = lightGallery(document.getElementById('lightgallery'), {
                plugins: [lgZoom, lgThumbnail],
                speed: 500,
                download: false,
                zoom: true,
                thumbnail: true,
                allowMediaOverlap: false,
                toggleThumb: true,
                showZoomInOutIcons: true,
                actualSize: false
            });

            // Filter functionality
            const filterButtons = document.querySelectorAll('.filter-btn');
            const galleryItems = document.querySelectorAll('.gallery-item');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');

                    const filterValue = this.getAttribute('data-filter');
                    let visibleItems = 0;

                    galleryItems.forEach(item => {
                        if (filterValue === 'all' || item.getAttribute('data-category') ===
                            filterValue) {
                            item.style.display = 'block';
                            visibleItems++;
                        } else {
                            item.style.display = 'none';
                        }
                    });

                    // Show no results message if no items are visible
                    const noResults = document.querySelector('.no-results');
                    if (noResults) {
                        noResults.style.display = visibleItems === 0 ? 'block' : 'none';
                    }
                });
            });

            // Prevent lightbox from opening when clicking the expand icon directly
            document.querySelectorAll('.gallery-icon').forEach(icon => {
                icon.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                });
            });
        });
    </script>
@endpush
