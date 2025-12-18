<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light"
    data-menu-styles="dark" data-toggled="close">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gallery - Aroun Systems & Safety Equipments</title>
    <link rel="icon" href="{{ asset('website_assets/images/favicons/favicon.png') }}" type="image/x-icon">
    <script src="./assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="./assets/js/main.js"></script>
    <link id="style" href="./assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/styles.css" rel="stylesheet">
    <link href="./assets/css/icons.css" rel="stylesheet">
    <link href="./assets/libs/node-waves/waves.min.css" rel="stylesheet">
    <link href="./assets/libs/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/libs/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="./assets/libs/@simonwep/pickr/themes/nano.min.css">
    <link rel="stylesheet" href="./assets/libs/choices.js/public/assets/styles/choices.min.css">
    <link rel="stylesheet" href="./assets/libs/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="./assets/libs/@tarekraafat/autocomplete.js/css/autoComplete.css">
    <link rel="stylesheet" href="{{ asset('assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/datatables.net-bs5/css/responsive.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/datatables.net-bs5/css/buttons.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}">
    <style>
        #preloader {
            background-color: var(--primary-color);
            position: fixed;
            width: 100vw;
            height: 100vh;
            z-index: 9999999;
            top: 0;
            left: 0;
            overflow: hidden;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .loader-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #000000b8;
            z-index: 999999;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* HTML: <div class="loader"></div> */
        .loader {
            width: 50px;
            padding: 8px;
            aspect-ratio: 1;
            border-radius: 50%;
            background: var(--primary-color);
            --_m:
                conic-gradient(#0000 10%, #000),
                linear-gradient(#000 0 0) content-box;
            -webkit-mask: var(--_m);
            mask: var(--_m);
            -webkit-mask-composite: source-out;
            mask-composite: subtract;
            animation: l3 1s infinite linear;
        }

        @keyframes l3 {
            to {
                transform: rotate(1turn)
            }
        }
    </style>
    <style>
        .marquee {
            background-color: #f8f9fa;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            overflow: hidden;
        }

        /* .marquee-content {
            display: inline-block;
            white-space: nowrap;
            animation: marquee 10s linear infinite;
        } */

        /* @keyframes marquee {
            0% {
                transform: translate(100%, 0);
            }

            100% {
                transform: translate(-100%, 0);
            }
        } */

        .btn-custom {
            width: 100px;
            margin: 5px;
        }
    </style>
    <style>
        .upload-section {
            border: 2px dashed #dee2e6;
            border-radius: 15px;
            transition: all 0.3s ease;
        }

        .drop-zone {
            padding: 3rem;
            text-align: center;
            cursor: pointer;
        }

        .drop-zone.dragover {
            border-color: #0d6efd;
            background-color: rgba(13, 110, 253, 0.1);
        }

        .image-card {
            position: relative;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            height: 278px;
            /* Set a fixed height */
            width: 100%;
            /* Make it responsive to the column */
            max-width: 100%;
            /* Ensure it doesn’t overflow */
        }

        .image-card img {
            width: 100%;
            /* Ensure image takes full width */
            height: 100%;
            /* Ensure image takes full height */
            object-fit: cover;
            /* Maintain aspect ratio while filling the card */
        }

        .image-card:hover {
            transform: translateY(-5px);
        }

        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.4);
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .image-card:hover .image-overlay {
            opacity: 1;
        }

        .edit-btn,
        .delete-btn {
            transition: transform 0.2s ease;
        }

        .edit-btn:hover,
        .delete-btn:hover {
            transform: scale(1.1);
        }
    </style>

</head>

<body>
    <div class="loader-wrapper d-none" id="customloader">
        <div class="loader"></div>
    </div>
    @include('static.header')

    <div class="page">
        <!-- app-header -->
        <!-- /app-header -->
        <!-- Start::app-sidebar -->

        <!-- End::app-sidebar -->
        @include('static.sidebar')
        <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">

                <!-- Page Header -->
                <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
                    <div>
                        <nav>
                            <ol class="breadcrumb mb-1">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Content Management</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Gallery List</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="btn-list">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addcategorymodal">Add
                            Category</button>

                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <h1 class="page-title fw-medium fs-18 mb-0">Gallery List</h1>
                            </div>
                            <div class="card-body">
                                <!-- Drag & Drop Upload Section -->
                                <div class="upload-section mb-5">
                                    <div class="drop-zone" id="drop-zone">
                                        <div class="drop-content">
                                            <i class="fas fa-cloud-upload-alt fa-3x text-primary"></i>
                                            <h5 class="mt-3">Drag & Drop to Upload</h5>
                                            <p class="text-muted">Supported formats: JPEG, PNG, GIF</p>
                                            <button class="btn btn-primary mt-2">Or Browse Files</button>
                                            <input type="file" id="file-input" multiple accept="image/*" hidden>
                                        </div>
                                    </div>
                                </div>

                                <!-- Image Gallery Grid -->
                                <div class="image-gallery">
                                    <div class="row" id="image-gallery-row">
                                        @foreach ($gallerys as $gallery)
                                            <div class="col-md-3 mb-4">
                                                <div class="image-card">
                                                    <img src="dynamic_images/{{ $gallery->image }}" class="img-fluid"
                                                        alt="Uploaded content">
                                                    <div class="image-overlay">
                                                        <button class="btn btn-sm btn-light edit-btn"
                                                            data-id="{{ $gallery->id }}">
                                                            <i class="fas fa-edit"></i> Edit
                                                        </button>
                                                        <button class="btn btn-sm btn-danger delete-btn"
                                                            data-id="{{ $gallery->id }}">
                                                            <i class="fas fa-trash"></i> Delete
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="editproduct" data-bs-backdrop="static" data-bs-keyboard="false"
                                tabindex="-1" aria-labelledby="modaldemo8Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered text-center" role="document">
                                    <div class="modal-content modal-content-demo">
                                        <div class="modal-header">
                                            <h6 class="modal-title">Edit Gallery</h6><button aria-label="Close"
                                                class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body text-start">
                                            <input type="hidden" id="editid">
                                            <div class="mb-3">
                                                <label for="adminName" class="form-label">Image</label>
                                                <input type="file" name="image" id="image"
                                                    class="form-control" onchange="previewImage(event)">
                                            </div>
                                            <img id="imagePreview" src="" alt="Image Preview"
                                                style="display: none; margin-top: 10px; max-width: 100%;width: 463px;height: 247px;border-radius: 15px;margin-bottom: 16px;">
                                            <div class="mb-3">
                                                <label for="adminName" class="form-label">Category</label>
                                                <select name="category" id="category" class="form-control">
                                                    <option value="" selected disabled>Select Category</option>
                                                    @foreach ($categorys as $category)
                                                        <option value="{{ $category->id }}">{{ $category->category }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                            <button class="btn btn-success" id="submit-btn">Update</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="addcategorymodal" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="modaldemo8Label"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered text-center" role="document">
                                    <div class="modal-content modal-content-demo">
                                        <div class="modal-header">
                                            <h6 class="modal-title">Add category</h6><button aria-label="Close"
                                                class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body text-start">
                                            <div class="mb-3">
                                                <label for="adminName" class="form-label">Category</label>
                                                <input type="text" class="form-control" id="addcategory"
                                                    placeholder="Enter Category">
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                            <button class="btn btn-success" id="Addcategory-btn">Add</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- End::app-content -->


        <!-- Footer Start -->
        @include('static.footer')
        <!-- Footer End -->
        <div class="modal fade" id="header-responsive-search" tabindex="-1"
            aria-labelledby="header-responsive-search" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="input-group">
                            <input type="text" class="form-control border-end-0" placeholder="Search Anything ..."
                                aria-label="Search Anything ..." aria-describedby="button-addon2">
                            <button class="btn btn-primary" type="button" id="button-addon2"><i
                                    class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="{{ asset('assets/js/jquery-3.6.1.min.js') }}"></script>
    <div class="scrollToTop">
        <span class="arrow"><i class="ti ti-arrow-narrow-up fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>
    <script src="./assets/libs/@popperjs/core/umd/popper.min.js"></script>
    <script src="./assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/defaultmenu.min.js"></script>
    <script src="./assets/libs/node-waves/waves.min.js"></script>
    <script src="./assets/js/sticky.js"></script>
    <script src="./assets/libs/simplebar/simplebar.min.js"></script>
    <script src="./assets/js/simplebar.js"></script>
    <script src="./assets/libs/@tarekraafat/autocomplete.js/autoComplete.min.js"></script>
    <script src="./assets/libs/@simonwep/pickr/pickr.es5.min.js"></script>
    <script src="./assets/libs/flatpickr/flatpickr.min.js"></script>
    <script src="./assets/js/custom-switcher.min.js"></script>
    <script src="{{ asset('assets/libs/datatables.net-bs5/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-bs5/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-bs5/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-bs5/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-bs5/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-bs5/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-bs5/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-bs5/js/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="./assets/js/datatables.js"></script>
    <script src="./assets/js/custom.js"></script>
    <script>
        function previewImage(event) {
            const imagePreview = document.getElementById('imagePreview');
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block'; // Show the image
                };
                reader.readAsDataURL(file);
            } else {
                imagePreview.style.display = 'none'; // Hide if no file selected
            }
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dropZone = document.getElementById('drop-zone');
            const fileInput = document.getElementById('file-input');
            const imageGalleryRow = document.getElementById('image-gallery-row');
            dropZone.addEventListener('dragover', (e) => {
                e.preventDefault();
                dropZone.classList.add('dragover');
            });

            dropZone.addEventListener('dragleave', () => {
                dropZone.classList.remove('dragover');
            });

            dropZone.addEventListener('drop', (e) => {
                e.preventDefault();
                dropZone.classList.remove('dragover');
                const files = e.dataTransfer.files;
                handleFiles(files);
            });

            dropZone.addEventListener('click', () => fileInput.click());

            fileInput.addEventListener('change', (e) => {
                handleFiles(e.target.files);
            });

            function handleFiles(files) {
                const formData = new FormData();
                const fileArray = Array.from(files);

                fileArray.forEach(file => {
                    formData.append('files[]', file);
                });
                formData.append('_token', '{{ csrf_token() }}');
                $('#customloader').removeClass('d-none');

                $.ajax({
                    url: '{{ route('uploadimage') }}',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $('#customloader').addClass('d-none');

                        if (response.status == '200') {
                            fileArray.forEach(file => {
                                const reader = new FileReader();
                                reader.onload = function(event) {
                                    const imgElement = document.createElement('div');
                                    imgElement.classList.add('col-md-3', 'mb-4');
                                    imgElement.innerHTML = `
                                        <div class="image-card">
                                            <img src="${event.target.result}" class="img-fluid" alt="Uploaded content">
                                            <div class="image-overlay">
                                                <button class="btn btn-sm btn-light edit-btn" data-id="${response.data}">
                                                    <i class="fas fa-edit"></i> Edit
                                                </button>
                                                <button class="btn btn-sm btn-danger delete-btn" data-id="${response.data}">
                                                    <i class="fas fa-trash"></i> Delete
                                                </button>
                                            </div>
                                        </div>
                                    `;
                                    imageGalleryRow.appendChild(imgElement);
                                    imgElement.querySelector('.delete-btn')
                                        .addEventListener('click', function() {
                                            imgElement.remove();
                                        });
                                };
                                reader.readAsDataURL(file);
                            });
                        } else {
                            console.error('Upload failed:', response.statusText);
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        $('#customloader').addClass('d-none');

                        console.error('Error during file upload:', textStatus, errorThrown);
                    }
                });
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#submit-btn').click(function(e) {
                e.preventDefault();
                var isvalid = true;
                $('.is-invalid').removeClass('is-invalid');
                if ($('#category').val() === '' || $('#category').val() == null) {
                    $('#category').addClass('is-invalid');
                    isvalid = false;
                }

                if (isvalid) {
                    $('#customloader').removeClass('d-none');
                    const formData = new FormData();
                    formData.append('id', $('#editid').val());
                    formData.append('category', $('#category').val());
                    formData.append('image', $('#image')[0].files[0]);
                    formData.append('_token', '{{ csrf_token() }}');
                    $('#customloader').removeClass('d-none');
                    $.ajax({
                        url: '{{ route('editimage') }}',
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            $('#customloader').addClass('d-none');
                            if (response.status == '200') {
                                Swal.fire({
                                    title: 'Success',
                                    text: 'Gallery Updated Successfully',
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
                            $('#customloader').addClass('d-none');
                            Swal.fire({
                                title: 'Oops!',
                                text: 'Something went wrong.',
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        }
                    });
                }
            });
            $('#Addcategory-btn').click(function(e) {
                e.preventDefault();
                var isvalid = true;
                $('.is-invalid').removeClass('is-invalid');
                if ($('#addcategory').val() === '') {
                    $('#addcategory').addClass('is-invalid');
                    isvalid = false;
                }
                if (isvalid) {
                    $('#customloader').removeClass('d-none');
                    $.ajax({
                        url: '{{ route('addcategory') }}',
                        type: 'POST',
                        data: {
                            category: $('#addcategory').val(),
                            _token: '{{ csrf_token() }}',
                        },
                        success: function(response) {
                            $('#customloader').addClass('d-none');
                            if (response.status == '200') {
                                Swal.fire({
                                    title: 'Success',
                                    text: 'Category Added Successfully',
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
                            $('#customloader').addClass('d-none');
                            Swal.fire({
                                title: 'Oops!',
                                text: 'Something went wrong.',
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        }
                    });
                }
            });
            $(document).on('click', '#inactive', function() {
                var standardId = $(this).data('id');
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'Do you want to inactivate the latest news?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, inactivate it!',
                    cancelButtonText: 'No, cancel!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#customloader').removeClass('d-none');
                        $.ajax({
                            type: 'POST',
                            url: '{{ route('inactivelatestmessage') }}',
                            data: {
                                id: standardId,
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(response) {
                                $('#customloader').addClass('d-none');

                                if (response.status == '200') {
                                    Swal.fire({
                                        title: 'Success',
                                        text: 'Latest News In-activated Successfully',
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
                                $('#customloader').addClass('d-none');
                                console.error(xhr.responseText);
                            }
                        });
                    }
                });
            });

            $(document).on('click', '#reactive', function() {
                var standardId = $(this).data('id');
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'Do you want to reactivate the latest news?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, reactivate it!',
                    cancelButtonText: 'No, cancel!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#customloader').removeClass('d-none');

                        $.ajax({
                            type: 'POST',
                            url: '{{ route('reactivelatestmessage') }}',
                            data: {
                                id: standardId,
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(response) {
                                $('#customloader').addClass('d-none');

                                if (response.status == '200') {
                                    Swal.fire({
                                        title: 'Success',
                                        text: 'Latest News Re-activated Successfully',
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
                                $('#customloader').addClass('d-none');
                                console.error(xhr.responseText);
                            }
                        });
                    }
                });
            });
            $('.edit-btn').on('click', function() {
                const id = $(this).data('id');
                $('#customloader').removeClass('d-none');

                $.ajax({
                    url: '{{ route('getgallery') }}',
                    type: 'POST',
                    data: {
                        id: id,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $('#customloader').addClass('d-none');

                        if (response.status == '200') {
                            $('#editproduct').modal('show');
                            $('#category').val(response.data.category_id);
                            $('#editid').val(response.data.id);
                            var imagePreviews = document.getElementById('imagePreview');
                            imagePreviews.src = 'dynamic_images/' + response.data.image;
                            imagePreviews.style.display = 'block';
                        }
                    },
                    error: function(xhr, status, error) {
                        $('#customloader').addClass('d-none');

                        console.error('Error:', error);
                    }
                });
            });
            $('.delete-btn').on('click', function() {
                var galleryId = $(this).data('id');

                // Show confirmation dialog
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'Cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#customloader').removeClass('d-none');
                        // Proceed with AJAX request if confirmed
                        $.ajax({
                            url: '{{ route('deletegallery') }}',
                            type: 'POST',
                            data: {
                                id: galleryId,
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(response) {
                                $('#customloader').addClass('d-none');

                                if (response.status == '200') {
                                    Swal.fire({
                                        title: 'Success',
                                        text: 'Image deleted Successfully',
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
                            error: function(xhr) {
                                $('#customloader').addClass('d-none');

                                Swal.fire({
                                    title: 'Oops!',
                                    text: 'Something went wrong.',
                                    icon: 'error',
                                    confirmButtonText: 'OK'
                                });
                            }
                        });
                    }
                });
            });

        });
    </script>

</body>

</html>
