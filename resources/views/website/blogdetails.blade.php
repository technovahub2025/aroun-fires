@extends('website.layouts.app')

{{-- SEO Tags for this specific blog post --}}
@section('seo_title', $blog->title)
@section('seo_description', Str::limit(strip_tags($blog->content), 155))
@section('seo_keywords', $blog->title . ', fire safety blog, industrial safety tips, Aroun Systems')
@section('seo_author', 'Aroun Systems & Safety Equipments')
@section('seo_image', asset('dynamic_images/' . $blog->image))

@push('styles')
    <link rel="stylesheet" href="{{ asset('website_assets/css/module-css/page-header.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/module-css/shop.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/module-css/error.css') }}" />

    {{-- Styles for the blog detail page and sidebar --}}
    <style>
        .blog-detail-page {
            padding: 120px 0;
        }

        .blog-detail__featured-image img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 25px;
        }

        /* Re-use meta style from your blog list */
        .blog-two__meta {
            margin-bottom: 15px;
        }

        .blog-detail__title {
            font-size: 36px;
            font-weight: 700;
            color: #1a2a49;
            /* Adjust color to match your theme */
            margin-bottom: 20px;
        }

        /* This class will style the HTML from your $blog->content */
        .blog-detail__content {
            font-size: 16px;
            line-height: 1.8;
            color: #5f6176;
            /* Adjust to match your theme's body text */
        }

        .blog-detail__content p {
            margin-bottom: 20px;
        }

        .blog-detail__content h2,
        .blog-detail__content h3,
        .blog-detail__content h4,
        .blog-detail__content h5,
        .blog-detail__content h6 {
            font-weight: 700;
            color: #1a2a49;
            /* Adjust color */
            margin-top: 30px;
            margin-bottom: 15px;
        }

        .blog-detail__content ul,
        .blog-detail__content ol {
            margin-bottom: 20px;
            padding-left: 25px;
        }

        .blog-detail__content li {
            margin-bottom: 10px;
        }

        .blog-detail__content blockquote {
            padding: 20px;
            background-color: #f9f9f9;
            border-left: 5px solid #f85322;
            /* Adjust to your theme's accent color */
            margin: 25px 0;
            font-style: italic;
        }

        .blog-detail__content img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin: 20px 0;
        }

        /* Sidebar Styles */
        .sidebar__widget {
            margin-bottom: 30px;
            padding: 30px;
            background-color: #f9f9f9;
            /* Or your theme's widget bg color */
            border-radius: 8px;
        }

        .sidebar__widget-title {
            font-size: 20px;
            font-weight: 700;
            color: #1a2a49;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 10px;
            border-bottom: 2px solid #f85322;
            /* Accent color */
        }

        .sidebar__search-form {
            position: relative;
        }

        .sidebar__search-form input {
            width: 100%;
            height: 50px;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding-left: 20px;
            padding-right: 50px;
        }

        .sidebar__search-form button {
            position: absolute;
            top: 0;
            right: 0;
            width: 50px;
            height: 50px;
            background: transparent;
            border: none;
            color: #f85322;
            /* Accent color */
            font-size: 18px;
        }

        .recent-post__list li {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .recent-post__list li:last-child {
            margin-bottom: 0;
        }

        .recent-post__image {
            width: 280px;
            height: 70px;
            margin-right: 15px;
        }

        .recent-post__image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 5px;
        }

        .recent-post__content h6 {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .recent-post__content h6 a {
            color: #1a2a49;
            transition: 0.3s;
        }

        .recent-post__content h6 a:hover {
            color: #f85322;
        }

        .recent-post__content span {
            font-size: 14px;
            color: #5f6176;
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
                <h3>Blog Details</h3>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><span class="fas fa-angle-right"></span></li>
                        {{-- Link back to the blog list page --}}
                        <li><a href="">Blog</a></li>
                        <li><span class="fas fa-angle-right"></span></li>
                        {{-- Truncate title if it's too long for a breadcrumb --}}
                        <li>{{ Str::limit($blog->title, 30) }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-detail-page">
        <div class="container">
            <div class="row">
                {{-- Main Blog Content --}}
                <div class="col-lg-8">
                    <div class="blog-detail__main">
                        <div class="blog-detail__featured-image">
                            <img src="{{ asset('dynamic_images/' . $blog->image) }}" alt="{{ $blog->title }}">
                        </div>

                        {{-- Meta Info --}}
                        <ul class="blog-two__meta list-unstyled">
                            <li>
                                <a>
                                    <span class="fas fa-calendar-alt"></span>
                                    {{-- Use the formatted date --}}
                                    {{ $blog->created_at->format('M d, Y') }}
                                </a>
                            </li>
                            <li>
                                <a>
                                    <span class="fas fa-user"></span>
                                    By Aroun Safety
                                </a>
                            </li>
                        </ul>

                        {{-- Title --}}
                        <h1 class="blog-detail__title">{{ $blog->title }}</h1>

                        {{-- This is the most important part: --}}
                        {{-- It renders the HTML from your 'content' field --}}
                        @php
                            $blog->content = html_entity_decode($blog->content);
                        @endphp
                        <div class="blog-detail__content">
                            {!! $blog->content !!}
                        </div>
                    </div>
                </div>

                {{-- Sidebar --}}
                <div class="col-lg-4">
                    <aside class="sidebar">
                        {{-- Recent Posts Widget --}}
                        @if ($recent_posts->count() > 0)
                            <div class="sidebar__widget sidebar__widget--recent-posts">
                                <h4 class="sidebar__widget-title">Recent Posts</h4>
                                <ul class="recent-post__list list-unstyled">
                                    @foreach ($recent_posts as $recent)
                                        <li>
                                            <div class="recent-post__image">
                                                <img src="{{ asset('dynamic_images/' . $recent->image) }}"
                                                    alt="{{ $recent->title }}">
                                            </div>
                                            <div class="recent-post__content">
                                                <h6><a href="{{ url('blog/' . $recent->url) }}">{{ $recent->title }}</a>
                                                </h6>
                                                <span>{{ $recent->created_at->format('M d, Y') }}</span>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {{-- You can add more widgets here (e.g., Categories, Tags) --}}

                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    {{-- You can add scripts if needed --}}
@endpush
