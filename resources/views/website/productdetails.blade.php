@extends('website.layouts.app')

@section('seo_title', $subproduct->seo_title ?? $subproduct->name . ' | Aroun Systems')
@section('seo_description', $subproduct->seo_description ?? Str::limit(strip_tags($subproduct->description), 160))
@section('seo_keywords', $subproduct->seo_keywords ?? $subproduct->name . ', ' . ($subproduct->mainproduct->product_name
    ?? '') . ', safety equipment, PPE')
@section('seo_author', $subproduct->seo_author ?? 'Aroun Systems & Safety Equipments')
@section('seo_image', asset('dynamic_images/' . ($subproduct->image ?? 'default.png')))

@push('styles')
    <link rel="stylesheet" href="{{ asset('website_assets/css/module-css/page-header.css') }}" />

    <link rel="stylesheet" href="{{ asset('website_assets/css/module-css/shop.css') }}" />
    <link rel="stylesheet" href="{{ asset('website_assets/css/module-css/productdetail.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}">
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
                        <li><span class="fas fa-angle-right"></span></li>
                        <li>{{ $subproduct->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION 2: Main Product Details --}}
    <section class="product-detail-section">
        <div class="container">
            <div class="row">
                {{-- Column 1: Product Gallery --}}
                <div class="col-lg-6">
                    <div class="product-gallery">
                        <div class="product-gallery-main">
                            <img src="{{ asset('dynamic_images') }}/{{ $subproduct->image }}"
                                alt="{{ $subproduct->name }}" id="main-product-image">
                        </div>
                        {{-- NEW: Thumbnail Gallery --}}
                        {{-- <div class="product-gallery-thumbnails">
                            <div class="thumb active">
                                <img src="{{ asset('website_assets/images/product/products/1.png') }}"
                                    alt="N95 Welding Respirator Thumb 1">
                            </div>
                            <div class="thumb">
                                <img src="{{ asset('website_assets/images/product/products/2.png') }}"
                                    alt="N95 Welding Respirator Thumb 2">
                            </div>
                            <div class="thumb">
                                <img src="{{ asset('website_assets/images/product/products/3.png') }}"
                                    alt="N95 Welding Respirator Thumb 3">
                            </div>
                            <div class="thumb">
                                <img src="{{ asset('website_assets/images/product/products/4.png') }}"
                                    alt="N95 Welding Respirator Thumb 4">
                            </div>
                        </div> --}}
                    </div>
                </div>

                {{-- Column 2: Product Information --}}
                <div class="col-lg-6">
                    <div class="product-info">
                        {{-- NEW: Category --}}
                        <div class="product-info-category">{{ $subproduct->mainproduct->product_name }}</div>

                        <h2 class="product-info-title">{{ $subproduct->name }}</h2>

                        <div class="product-info-price">
                            <span class="current-price">₹{{ $subproduct->price }}</span>
                            <span class="stock-status stock-in">
                                <i class="fas fa-check-circle"></i> In Stock
                            </span>
                        </div>
                        <p class="product-info-summary">
                            {{ $subproduct->description }}
                        </p>
                        {{-- <ul class="product-features-list">
                            <li>Flame-resistant outer layer for added safety.</li>
                            <li>Adjustable nose clip for a secure, custom fit.</li>
                            <li>Cool Flow™ Valve for reduced heat build-up.</li>
                            <li>Filters at least 95% of airborne particles.</li>
                        </ul> --}}
                        <div class="product-info-cta">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#quoteModal" data-product="{{ $subproduct->name }}">
                                <i class="fas fa-paper-plane"></i> Get a Quote
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="quoteModal" tabindex="-1" aria-labelledby="quoteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="quoteModalLabel">Request a Quote</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="quoteForm">
                        <div class="mb-3">
                            <label for="productName" class="form-label">Product</label>
                            <input type="text" class="form-control" id="productName" name="productName"
                                value="{{ $subproduct->name }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="number" class="form-control" id="quantity" name="quantity" required>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" id="submitbtn">Send Quote</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- SECTION 4: Related Products --}}
    <section class="product-description-section">
        <div class="container">
            <div class="section-header">
                <p class="section-subtitle">More Products</p>
                <h2 class="section-title">You May Also Like</h2>
            </div>

            {{-- Your existing related products grid (which is already well-designed) --}}
            <div class="products-grid">
                @foreach ($relatedproducts as $relatedproduct)
                    <div class="product-card">
                        <span class="product-badge new">New</span>
                        <div class="product-image">
                            <img src="{{ asset('dynamic_images') }}/{{ $relatedproduct->image }}" alt="Safety Goggles">
                            <div class="product-overlay">
                                <span
                                    class="product-overlay-text">{{ $relatedproduct->mainproduct->product_name ?? '' }}</span>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="product-category">{{ $relatedproduct->mainproduct->product_name ?? '' }}</div>
                            <h3 class="product-title">
                                <a
                                    href="{{ url('product/' . $relatedproduct->url ?? '') }}">{{ $relatedproduct->name }}</a>
                            </h3>
                            <div class="product-price">
                                <span class="current-price">₹{{ $relatedproduct->price }}</span>
                            </div>
                            <div class="product-meta">
                                <span class="stock-status stock-in">In Stock</span>
                                <a href="{{ url('product/' . $relatedproduct->url ?? '') }}">
                                    <div class="product-rating">View More</div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </section>
@endsection

@push('scripts')
    {{-- NEW: JavaScript for Tabs and Gallery --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // --- Product Tab Functionality ---
            const tabLinks = document.querySelectorAll('.product-tabs .nav-link');
            const tabPanes = document.querySelectorAll('.product-tabs .tab-pane');

            tabLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('data-tab');

                    // Update links
                    tabLinks.forEach(l => l.classList.remove('active'));
                    this.classList.add('active');

                    // Update panes
                    tabPanes.forEach(pane => {
                        if (pane.id === targetId) {
                            pane.classList.add('active');
                        } else {
                            pane.classList.remove('active');
                        }
                    });
                });
            });

            // --- Product Gallery Functionality ---
            const mainImage = document.getElementById('main-product-image');
            const thumbnails = document.querySelectorAll('.product-gallery-thumbnails .thumb');

            thumbnails.forEach(thumb => {
                thumb.addEventListener('click', function() {
                    // Get the new image source from the clicked thumb's img
                    const newImageSrc = this.querySelector('img').getAttribute('src');

                    // Update the main image
                    mainImage.setAttribute('src', newImageSrc);

                    // Update the active state
                    thumbnails.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');
                });
            });

        });
    </script>
    <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#submitbtn').click(function(e) {
                e.preventDefault();
                var isvalid = true;
                $('.is-invalid').removeClass('is-invalid');
                if ($('#productName').val() == '') {
                    isvalid = false;
                    $('#productName').addClass('is-invalid');
                }
                if ($('#quantity').val() == '') {
                    isvalid = false;
                    $('#quantity').addClass('is-invalid');
                }
                if ($('#name').val() == '') {
                    isvalid = false;
                    $('#name').addClass('is-invalid');
                }
                if ($('#phone').val() == '') {
                    isvalid = false;
                    $('#phone').addClass('is-invalid');
                }
                if ($('#message').val() == '') {
                    isvalid = false;
                    $('#message').addClass('is-invalid');
                }
                if (isvalid) {
                    $.ajax({
                        url: '{{ route('insertenquiry') }}',
                        type: 'POST',
                        data: {
                            productName: $('#productName').val(),
                            quantity: $('#quantity').val(),
                            name: $('#name').val(),
                            phone: $('#phone').val(),
                            message: $('#message').val(),
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            if (response.status == '200') {
                                Swal.fire({
                                    title: 'Success',
                                    text: 'Enquiry Submitted Successfully',
                                    icon: 'success',
                                    confirmButtonText: 'OK'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.reload();
                                    }
                                });
                            } else {
                                Swal.fire({
                                    title: 'Oops!',
                                    text: 'Something went wrong.',
                                    icon: 'error',
                                    confirmButtonText: 'OK'
                                });
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Error:', error);
                        }
                    });
                }
            });
        });
    </script>
@endpush
