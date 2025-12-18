@extends('website.layouts.app')
@section('seo_title', 'Safety Products & Equipment | Aroun Systems')
@section('seo_description',
    'Browse our complete range of industrial safety equipment, PPE, fire protection systems, and
    safety solutions.')
@section('seo_keywords', 'safety products, industrial safety equipment, PPE, fire safety, protective gear')
@section('seo_author', 'Aroun Systems & Safety Equipments')
@section('seo_image', asset('website_assets/images/aroun-systems-products-og.jpg'))
@push('styles')
    <link rel="stylesheet" href="{{ asset('website_assets/css/module-css/page-header.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/module-css/shop.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <style>
        .products-section {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .sidebar {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
            height: fit-content;
            position: sticky;
            top: 100px;
        }

        .sidebar-title {
            font-size: 22px;
            font-weight: 700;
            color: #333;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid #f85322;
            position: relative;
        }

        .sidebar-title::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 50px;
            height: 2px;
            background: #f85322;
        }

        .category-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .category-item {
            margin-bottom: 8px;
        }

        .category-link {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            background: #f8f9fa;
            border-radius: 10px;
            text-decoration: none;
            color: #555;
            font-weight: 600;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .category-link:hover,
        .category-link.active {
            background: #f85322;
            color: white;
            border-color: #f85322;
            transform: translateX(5px);
        }

        .category-link .icon {
            margin-right: 12px;
            font-size: 16px;
            width: 20px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .category-link:hover .icon,
        .category-link.active .icon {
            transform: scale(1.1);
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 25px;
        }

        .product-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: 1px solid #f0f0f0;
            position: relative;
        }

        /* This is the new class to hide/show products */
        .product-card.hide {
            display: none;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
        }

        .product-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: #f85322;
            color: white;
            padding: 6px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 700;
            z-index: 2;
        }

        .product-badge.featured {
            background: #2ecc71;
        }

        .product-badge.sale {
            background: #e74c3c;
        }

        .product-badge.new {
            background: #3498db;
        }

        .product-image {
            position: relative;
            overflow: hidden;
            height: 220px;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .product-card:hover .product-image img {
            transform: scale(1.1);
        }

        .product-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(248, 83, 34, 0.9);
            display: flex;
            flex-direction: column;
            /* Changed for better centering */
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: all 0.3s ease;
            color: white;
            font-size: 22px;
            font-weight: 700;
        }

        .product-card:hover .product-overlay {
            opacity: 1;
        }

        .product-overlay-text {
            transform: translateY(20px);
            opacity: 0;
            transition: all 0.3s ease 0.1s;
        }

        .product-card:hover .product-overlay-text {
            transform: translateY(0);
            opacity: 1;
        }

        .product-content {
            padding: 20px;
        }

        .product-category {
            color: #f85322;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 5px;
        }

        .product-title {
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 10px;
            line-height: 1.4;
            /* Clamp title to 2 lines */
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            height: 45px;
            /* (font-size * line-height * 2) */
        }

        .product-title a {
            color: #333;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .product-title a:hover {
            color: #f85322;
        }

        .product-description {
            color: #666;
            font-size: 14px;
            line-height: 1.5;
            margin-bottom: 15px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            height: 42px;
            /* (font-size * line-height * 2) */
        }

        .product-price {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
        }

        .current-price {
            font-size: 18px;
            font-weight: 700;
            color: #f85322;
        }

        .original-price {
            font-size: 14px;
            color: #999;
            text-decoration: line-through;
        }

        .product-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 15px;
            border-top: 1px solid #f0f0f0;
        }

        .stock-status {
            font-size: 12px;
            font-weight: 600;
            padding: 4px 10px;
            border-radius: 15px;
        }

        .stock-in {
            background: #d4edda;
            color: #155724;
        }

        .stock-out {
            background: #f8d7da;
            color: #721c24;
        }

        .product-rating {
            color: #ffc107;
            font-size: 14px;
        }

        /* Removed .btn-action styles as they weren't used */

        .section-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-subtitle {
            color: #f85322;
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .section-title {
            font-size: 36px;
            font-weight: 700;
            color: #333;
            margin-bottom: 15px;
        }

        .section-description {
            color: #666;
            font-size: 16px;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Removed .filter-section styles as they weren't used */

        @media (max-width: 768px) {
            .products-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                gap: 20px;
            }

            .sidebar {
                margin-bottom: 30px;
                position: static;
            }

            .section-title {
                font-size: 28px;
            }
        }
    </style>
@endpush

@section('content')

    <section class="page-header">
        <div class="page-header__bg"
            style="background-image: url({{ asset('website_assets/images/backgrounds/page-header-bg.png') }});">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <div class="page-header__img-1">
                    <img src="{{ asset('website_assets/images/resources/page-header-img-1.png') }}" alt="">
                </div>
                <div class="page-header__shape-1 float-bob-y">
                    <img src="{{ asset('website_assets/images/shapes/page-header-shape-1.png') }}" alt="">
                </div>
                <h3>Our Products</h3>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><span class="fas fa-angle-right"></span></li>
                        <li>Products</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="products-section">
        <div class="container">
            <div class="section-header">
                <p class="section-subtitle">Premium Safety Solutions</p>
                <h2 class="section-title">Our Safety Products Range</h2>
                <p class="section-description">
                    Discover our comprehensive range of industrial safety equipment designed to protect your workforce
                    with the highest quality standards and certifications.
                </p>
            </div>

            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="sidebar">
                        <h4 class="sidebar-title">Product Categories</h4>
                        <ul class="category-list">
                            <li class="category-item">
                                <a href="#" class="category-link active" data-filter="all">
                                    <span class="icon"><i class="fa-solid fa-border-all"></i></span>
                                    All Products
                                </a>
                            </li>

                            @foreach ($mainProducts as $category)
                                @php
                                    $categorySlug = strtolower(str_replace(' ', '-', $category->product_name));
                                @endphp
                                <li class="category-item">
                                    <a href="#" class="category-link" data-filter="{{ $categorySlug }}">
                                        <span class="icon"><i class="fa-solid fa-tag"></i></span>
                                        {{ $category->product_name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-xl-9 col-lg-8">
                    <div class="products-grid">
                        @forelse ($products as $product)
                            @php
                                $cardCategorySlug = strtolower(
                                    str_replace(' ', '-', $product->mainproduct->product_name),
                                );
                            @endphp
                            <div class="product-card" data-category="{{ $cardCategorySlug }}">

                                <div class="product-image">
                                    <img src="dynamic_images/{{ $product->image }}" alt="{{ $product->name }}">
                                    <div class="product-overlay">
                                        <span class="product-overlay-text">{{ $product->mainproduct->product_name }}</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-category">{{ $product->mainproduct->product_name }}</div>
                                    <h3 class="product-title">
                                        <a href="{{ url('product/' . $product->url) }}">{{ $product->name }}</a>
                                    </h3>
                                    <p class="product-description">
                                        {{ $product->description }}
                                    </p>
                                    <div class="product-price">
                                        <span class="current-price">₹{{ $product->price }}</span>
                                    </div>
                                    <div class="product-meta">
                                        <span class="stock-status stock-in">In Stock</span>
                                        <div class="product-rating">
                                            <a href="{{ url('product/' . $product->url) }}"
                                                style="text-decoration:none; color:inherit;">
                                                View More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p>No products found.</p>
                        @endforelse

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const categoryLinks = document.querySelectorAll('.category-link');
            const productCards = document.querySelectorAll('.product-card');

            // Category filter
            categoryLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();

                    const filterValue = this.getAttribute('data-filter');

                    categoryLinks.forEach(l => l.classList.remove('active'));
                    this.classList.add('active');

                    productCards.forEach(card => {
                        const productCategory = card.getAttribute('data-category');

                        // Check for "all" or a matching category
                        if (filterValue === 'all' || productCategory === filterValue) {
                            card.classList.remove('hide');
                        } else {
                            card.classList.add('hide');
                        }
                    });
                });
            });
        });
    </script>
@endpush
