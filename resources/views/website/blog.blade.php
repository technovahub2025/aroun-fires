@extends('website.layouts.app')
@section('seo_title', 'Blog | Aroun Systems & Safety Equipments – Fire Safety & Industrial Insights')
@section('seo_description',
    'Explore the latest blogs and articles from Aroun Systems & Safety Equipments.
    Stay updated on fire safety trends, PPE innovations, industrial safety tips, and expert insights.')
@section('seo_keywords',
    'fire safety blog, industrial safety tips, PPE articles, Aroun Systems insights,
    fire protection guides, safety equipment news, workplace safety blog')
@section('seo_author', 'Aroun Systems & Safety Equipments')
@section('seo_image', asset('website_assets/images/aroun-systems-blog-og.png'))
@push('styles')
    <link rel="stylesheet" href="website_assets/css/module-css/page-header.css" />
    <link rel="stylesheet" href="website_assets/css/module-css/shop.css" />
    <link rel="stylesheet" href="website_assets/css/module-css/error.css" />
    <style>
        .clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .prices {
            color: #f85322 !important;
        }
    </style>
    <style>
        .blog-two__author-img.initials-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #3498db;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 18px;
        }

        .blog-two__author-img.initials-avatar span {
            line-height: 1;
        }
    </style>
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
                <h3>Blog</h3>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><span class="fas fa-angle-right"></span></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Blog Page Start-->
    <section class="blog-page">
        <div class="container">
            <div class="row">
                <!-- Blog Two Single Start -->
                @foreach ($blogs as $blog)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="blog-two__single">
                            <div class="blog-two__img">
                                <img src="{{ asset('dynamic_images') }}/{{ $blog->image }}" alt="Fixed Lifeline Systems">
                                <div class="blog-two__plus">
                                    <a href="{{ url('blog/' . $blog->url) }}"><i class="icon-plus"></i></a>
                                </div>
                                <div class="blog-two__tag">
                                    {{-- <a href="#!">Height Safety</a> --}}
                                </div>
                            </div>
                            <div class="blog-two__content">
                                <ul class="blog-two__meta list-unstyled">
                                    <li>
                                        <a href="{{ url('blog/' . $blog->url) }}">
                                            <span class="fas fa-calendar-alt"></span>
                                            {{-- May 15, 2024 --}}
                                            {{ $blog->created_at->format('M d, Y') }}
                                        </a>
                                    </li>
                                    {{-- <li>
                                        <a href="#!">
                                            <span class="fas fa-comments"></span>Comment
                                        </a>
                                    </li> --}}
                                </ul>
                                <h3 class="blog-two__title"><a
                                        href="{{ url('blog/' . $blog->url) }}">{{ $blog->title }}</a></h3>
                                <div class="blog-two__author-and-btn">
                                    <div class="blog-two__author-info">
                                        <div class="blog-two__author-img-box">
                                            <div class="blog-two__author-img initials-avatar" data-name="Aroun Safety">
                                                <span>AS</span>
                                            </div>
                                        </div>
                                        <div class="blog-two__author-content">
                                            <h5>Aroun Safety</h5>
                                            <p>{{ $blog->created_at->format('M d, Y') }}</p>
                                        </div>
                                    </div>
                                    <div class="blog-two__arrow-box">
                                        <a href="{{ url('blog/' . $blog->url) }}" class="blog-two__arrow"><span
                                                class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>


@endsection
