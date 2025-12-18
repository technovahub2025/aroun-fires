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
    <link rel="stylesheet" href="./assets/libs/quill/quill.snow.css">
    <link rel="stylesheet" href="./assets/libs/quill/quill.bubble.css">

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

        <style>.blog-card {
            transition: all 0.3s ease;
            border: none;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        }

        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.15);
        }

        .image-placeholder {
            background-color: #f8f9fa;
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
        }

        .action-buttons .btn {
            margin-left: 10px;
            min-width: 80px;
        }

        .add-new-btn {
            padding: 12px 25px;
            font-weight: 600;
        }

        .blog-title {
            color: #2c3e50;
            transition: color 0.3s ease;
        }

        .blog-title:hover {
            color: #3498db;
        }

        .editorinvalid {
            border: 1px solid red;
        }

        .limited-content {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 4;
            /* Limit to 4 lines */
            overflow: hidden;
            /* Hides overflow text */
            text-overflow: ellipsis;
            /* Adds ellipsis at the end */
            max-height: calc(4 * 1.2em);
            /* Adjust based on line height */
            line-height: 1.2em;
            /* Set your desired line height */
        }
    </style>
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
                                <li class="breadcrumb-item active" aria-current="page">Blog List</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="btn-list">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaldemo8">Add
                            Blog</button>

                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <h1 class="page-title fw-medium fs-18 mb-0">Blog List</h1>
                            </div>
                            <div class="card-body">
                                @foreach ($blogs as $blog)
                                    <div class="row align-items-center mt-4 border rounded py-2 shadow-sm m-2">
                                        <!-- Image Column -->
                                        <div class="col-md-3 mb-3 mb-md-0">
                                            <div class="image-placeholders">
                                                <img src="dynamic_images/{{ $blog->image }}" alt=""
                                                    style="max-height: 239px;border-radius: 10px;    width: 358px;">
                                            </div>
                                        </div>

                                        <!-- Content Column -->
                                        <div class="col-md-9">
                                            <div class="d-flex flex-column h-100">
                                                <h5 class="blog-title mb-3">{{ $blog->title }}</h5>

                                                <div class="text-muted flex-grow-1 limited-content">
                                                    {!! $blog->content !!}
                                                </div>

                                                <div class="d-flex justify-content-end action-buttons">
                                                    <button class="btn btn-secondary" data-bs-toggle="modal"
                                                        data-bs-target="#blogModal"
                                                        data-content="{{ addslashes($blog->content) }}">View Full Blog
                                                    </button>
                                                    <button class="btn btn-primary editbtn"
                                                        data-id="{{ $blog->id }}">
                                                        <i class="fas fa-edit me-2"></i>Edit
                                                    </button>
                                                    <button class="btn btn-danger deleteblog"
                                                        data-id="{{ $blog->id }}">
                                                        <i class="fas fa-trash me-2"></i>Delete
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                <!-- Custom Pagination -->
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item {{ $blogs->onFirstPage() ? 'disabled' : '' }}">
                                            <a class="page-link" href="{{ $blogs->previousPageUrl() }}">Previous</a>
                                        </li>

                                        @for ($i = 1; $i <= $blogs->lastPage(); $i++)
                                            <li class="page-item {{ $i == $blogs->currentPage() ? 'active' : '' }}">
                                                <a class="page-link"
                                                    href="{{ $blogs->url($i) }}">{{ $i }}</a>
                                            </li>
                                        @endfor

                                        <li class="page-item {{ $blogs->hasMorePages() ? '' : 'disabled' }}">
                                            <a class="page-link" href="{{ $blogs->nextPageUrl() }}">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                            <div class="modal fade" id="blogModal" tabindex="-1" aria-labelledby="blogModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="blogModalLabel">Blog Content</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p id="fullContent"></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="modaldemo8" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="modaldemo8Label"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered text-center" role="document">
                                    <div class="modal-content modal-content-demo">
                                        <div class="modal-header">
                                            <h6 class="modal-title">Add Blog</h6><button aria-label="Close"
                                                class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body text-start">
                                            <div class="mb-3">
                                                <label for="adminName" class="form-label">Image</label>
                                                <input type="file" id="image" class="form-control"
                                                    onchange="previewImage()" accept="image/*">
                                            </div>
                                            <div class="mb-3 text-center">
                                                <img src="" alt="uploadedimg" class="d-none"
                                                    id="displayuploadedimage"
                                                    style="max-width: 500px;max-height: 500px;">
                                            </div>
                                            <div class="mb-3">
                                                <label for="adminName" class="form-label">Title</label>
                                                <input type="text" id="title" class="form-control"
                                                    placeholder="Enter Blog Title">
                                            </div>
                                            <div class="mb-3">
                                                <label for="adminName" class="form-label">URL</label>
                                                <input type="text" id="url" class="form-control"
                                                    placeholder="Enter Blog Url">
                                            </div>
                                            <div class="mb-3">
                                                <label for="adminName" class="form-label">Content</label>
                                                <div id="editor"></div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                            <button class="btn btn-success" id="submit-btn">Add Blog</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="editmodaldemo8" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="modaldemo8Label"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered text-center" role="document">
                                    <div class="modal-content modal-content-demo">
                                        <div class="modal-header">
                                            <h6 class="modal-title">Edit Blog</h6><button aria-label="Close"
                                                class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body text-start">
                                            <input type="hidden" name="editid" id="editid">
                                            <div class="mb-3">
                                                <label for="adminName" class="form-label">Image</label>
                                                <input type="file" id="editimage" class="form-control"
                                                    onchange="editpreviewImage()" accept="image/*">
                                            </div>
                                            <div class="mb-3 text-center">
                                                <img src="" alt="uploadedimg" class="d-none"
                                                    id="editdisplayuploadedimage"
                                                    style="max-width: 500px;max-height: 500px;">
                                            </div>
                                            <div class="mb-3">
                                                <label for="adminName" class="form-label">Title</label>
                                                <input type="text" id="edittitle" class="form-control"
                                                    placeholder="Enter Blog Title">
                                            </div>
                                            <div class="mb-3">
                                                <label for="adminName" class="form-label">Content</label>
                                                <div id="editeditor"></div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                            <button class="btn btn-success" id="updateblog">update</button>

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
    <!-- Quill Editor JS -->
    <script src="./assets/libs/quill/quill.js"></script>

    <!-- Internal Quill JS -->
    <script src="./assets/js/quill-editor.js"></script>

    <!-- Custom JS -->
    <script src="./assets/js/custom.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const viewMoreButtons = document.querySelectorAll('[data-bs-toggle="modal"]');
            viewMoreButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const fullContent = this.getAttribute('data-content');
                    document.getElementById('fullContent').innerHTML = fullContent;
                });
            });
        });
    </script>

    <script>
        function previewImage() {
            const file = document.getElementById('image').files[0];
            const imgTag = document.getElementById('displayuploadedimage');

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imgTag.src = e.target.result;
                    imgTag.classList.remove('d-none'); // Show the image
                };
                reader.readAsDataURL(file);
            }
        }

        function editpreviewImage() {
            const file = document.getElementById('editimage').files[0];
            const imgTag = document.getElementById('editdisplayuploadedimage');

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imgTag.src = e.target.result;
                    imgTag.classList.remove('d-none'); // Show the image
                };
                reader.readAsDataURL(file);
            }
        }

        $(document).ready(function() {
            $('#submit-btn').on('click', function() {
                var isvalid = true;
                $('.is-invalid').removeClass('is-invalid');

                if ($('#image').val() == '') {
                    $('#image').addClass('is-invalid');
                    isvalid = false;
                }
                if ($('#title').val() == '') {
                    $('#title').addClass('is-invalid');
                    isvalid = false;
                }
                if ($('#url').val() == '') {
                    $('#url').addClass('is-invalid');
                    isvalid = false;
                }
                var editorContent = $('#editor .ql-editor').html();
                if (editorContent.trim() === '' || editorContent === '<p><br></p>') {
                    $('#editor .ql-editor').addClass('editorinvalid');
                    isvalid = false;
                } else {
                    $('#editor .ql-editor').removeClass('editorinvalid');
                }

                if (isvalid) {
                    var formData = new FormData();
                    formData.append('code', editorContent);
                    formData.append('title', $('#title').val());
                    formData.append('url', $('#url').val());
                    formData.append('image', $('#image')[0].files[
                        0]);
                    formData.append('_token', '{{ csrf_token() }}');

                    $.ajax({
                        url: '{{ route('addblog') }}',
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            if (response.status == '200') {
                                Swal.fire({
                                    title: 'Success',
                                    text: 'Blog Added Successfully',
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
            $('.editbtn').click(function() {
                var blogId = $(this).data('id');

                $.ajax({
                    url: '{{ route('editblog') }}',
                    method: 'POST',
                    data: {
                        id: blogId,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.status == '200') {
                            $('#editmodaldemo8').modal('show');
                            const imgTag = document.getElementById('editdisplayuploadedimage');

                            imgTag.src = 'dynamic_images/' + response.data.image;
                            imgTag.classList.remove('d-none');
                            $('#edittitle').val(response.data.title);
                            $('#editeditor .ql-editor').empty().append(response.data.content);
                            $('#editid').val(response.data.id);


                        }
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                        console.error(error);
                    }
                });
            });
            $('#updateblog').on('click', function() {
                var isvalid = true;
                $('.is-invalid').removeClass('is-invalid');

                // if ($('#editimage').val() == '') {
                //     $('#editimage').addClass('is-invalid');
                //     isvalid = false;
                // }
                if ($('#edittitle').val() == '') {
                    $('#edittitle').addClass('is-invalid');
                    isvalid = false;
                }

                var editorContent = $('#editeditor .ql-editor').html();
                if (editorContent.trim() === '' || editorContent === '<p><br></p>') {
                    $('#editeditor .ql-editor').addClass('editorinvalid');
                    isvalid = false;
                } else {
                    $('#editeditor .ql-editor').removeClass('editorinvalid');
                }

                if (isvalid) {
                    var formData = new FormData();
                    formData.append('code', editorContent);
                    formData.append('id', $('#editid').val());
                    formData.append('title', $('#edittitle').val());
                    formData.append('image', $('#editimage')[0].files[
                        0]);
                    formData.append('_token', '{{ csrf_token() }}');

                    $.ajax({
                        url: '{{ route('updateblog') }}',
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            if (response.status == '200') {
                                Swal.fire({
                                    title: 'Success',
                                    text: 'Blog Updated Successfully',
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
            $('.deleteblog').click(function() {
                var blogId = $(this).data('id');

                // Show confirmation dialog
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You won\'t be able to revert this!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, keep it'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // If confirmed, proceed with the AJAX request
                        $.ajax({
                            url: '{{ route('deleteblog') }}',
                            method: 'POST',
                            data: {
                                id: blogId,
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(response) {
                                if (response.status == '200') {
                                    Swal.fire({
                                        title: 'Success',
                                        text: 'Blog Deleted Successfully',
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
    <script>
        // 1. Find the input element by its ID
        const productInput = document.getElementById('url');

        // 2. Add an event listener that runs every time the user types
        productInput.addEventListener('input', function(event) {

            // Get the current text from the input box
            let value = event.target.value;

            // 3. Change all text to lowercase
            value = value.toLowerCase();

            // 4. Replace all spaces (even multiple spaces) with a single hyphen
            value = value.replace(/\s+/g, '-');

            // 5. Remove all special characters that are NOT letters, numbers, or a hyphen
            value = value.replace(/[^a-z0-9-]/g, '');

            // 6. Update the input box with the new, clean text
            event.target.value = value;
        });
    </script>
    <script>
        // 1. Find both input elements
        const sourceInput = document.getElementById('title');
        const destinationInput = document.getElementById('url');

        // 2. Create a function to format the text
        function formatTextForUrl(text) {
            let value = text;

            // Change all text to lowercase
            value = value.toLowerCase();

            // Replace all spaces (even multiple spaces) with a single hyphen
            value = value.replace(/\s+/g, '-');

            // Remove all special characters that are NOT letters, numbers, or a hyphen
            value = value.replace(/[^a-z0-9-]/g, '');

            return value;
        }

        // 3. Add an event listener to the FIRST input box
        sourceInput.addEventListener('input', function(event) {

            // Get the text from the source box
            const originalText = event.target.value;

            // Format the text using our function
            const formattedText = formatTextForUrl(originalText);

            // 4. Set the formatted text as the value of the SECOND box
            destinationInput.value = formattedText;
        });
    </script>

</body>

</html>
