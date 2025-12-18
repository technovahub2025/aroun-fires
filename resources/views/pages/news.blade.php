<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light"
    data-menu-styles="dark" data-toggled="close">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Latest News - Aroun Systems & Safety Equipments</title>
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
                                <li class="breadcrumb-item active" aria-current="page">Latest News List</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="btn-list">

                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <h1 class="page-title fw-medium fs-18 mb-0">Latest News</h1>

                            </div>
                            <div class="card-body">
                                <div class="row m-2 align-items-center">
                                    <div class="col-12 col-md-10 marquee">
                                        <div class="marquee-content">
                                            <marquee behavior="" direction="">
                                                <b
                                                    class="{{ $latestnews->status == 0 ? 'text-danger' : $latestnews->status }}">
                                                    {{ $latestnews->message }}
                                                </b>
                                            </marquee>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-2 text-center mt-2 mt-md-0">
                                        <button class="btn btn-primary btn-custom" data-bs-toggle="modal"
                                            data-bs-target="#modaldemo8">Update</button>
                                        @if ($latestnews->status == 1)
                                            <button class="btn btn-danger btn-custom" id="inactive"
                                                data-id="{{ $latestnews->id }}">In-active</button>
                                        @else
                                            <button class="btn btn-success btn-custom" id="reactive"
                                                data-id="{{ $latestnews->id }}">Re-active</button>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modaldemo8" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="modaldemo8Label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered text-center" role="document">
                        <div class="modal-content modal-content-demo">
                            <div class="modal-header">
                                <h6 class="modal-title">Edit Latest News</h6><button aria-label="Close"
                                    class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body text-start">
                                <input type="hidden" id="editid" value="{{ $latestnews->id }}">
                                <div class="mb-3">
                                    <label for="adminName" class="form-label">Message</label>
                                    <textarea name="message" class="form-control" id="message" cols="20" rows="5"
                                        placeholder="Enter the Message">{{ $latestnews->message }}</textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button class="btn btn-success" id="submit-btn">Update</button>

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
        $(document).ready(function() {
            $('#submit-btn').click(function(e) {
                e.preventDefault();
                var isvalid = true;
                $('.is-invalid').removeClass('is-invalid');
                if ($('#message').val() === '') {
                    $('#message').addClass('is-invalid');
                    isvalid = false;
                }

                if (isvalid) {
                    $('#customloader').removeClass('d-none');
                    $.ajax({
                        url: '{{ route('updatelatestnews') }}',
                        type: 'POST',
                        data: {
                            id: $('#editid').val(),
                            message: $('#message').val(),
                            _token: '{{ csrf_token() }}',
                        },
                        success: function(response) {
                            $('#customloader').addClass('d-none');
                            if (response.status == '200') {
                                Swal.fire({
                                    title: 'Success',
                                    text: 'Latest News Updated Successfully',
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


        });
    </script>

</body>

</html>
