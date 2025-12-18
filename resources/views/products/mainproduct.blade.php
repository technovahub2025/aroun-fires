<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light"
    data-menu-styles="dark" data-toggled="close">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin - Aroun Systems & Safety Equipments</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
    <style>
        .img-container {
            width: 100%;
            height: 300px;
            overflow: hidden;
            position: relative;
            margin-top: 15px;
        }

        #imageCrop {
            max-width: 100%;
            display: block;
        }
    </style>

</head>

<body>
    @include('static.header')
    <div class="page">
        @include('static.sidebar')
        <div class="main-content app-content">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
                    <div>
                        <nav>
                            <ol class="breadcrumb mb-1">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Product Management</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Main-Product List</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="btn-list">
                        <button class="btn btn-primary btn-wave me-0" data-bs-effect="effect-flip-horizontal"
                            data-bs-toggle="modal" href="#modaldemo8">
                            Add Main-Product
                        </button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <h1 class="page-title fw-medium fs-18 mb-0">Main-Product List</h1>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap w-100 pt-2"
                                        id="responsive-file-export">
                                        <thead class="table-primary">
                                            <tr>
                                                <th>#</th>
                                                <th>Product Name</th>
                                                <th>Image</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                                <th>Created By</th>
                                                <th>Created at</th>
                                                <th>Last Update</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($mainproducts as $key => $mainproduct)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $mainproduct->product_name }}</td>
                                                    <td class="text-center"><a
                                                            href="dynamic_images/{{ $mainproduct->image }}"
                                                            target="_blank"><img
                                                                src="dynamic_images/{{ $mainproduct->image }}"
                                                                alt=""
                                                                style="max-width:150px;max-height:150px"></a>
                                                    </td>
                                                    <td
                                                        style="max-width: 200px; word-wrap: break-word; overflow-wrap: break-word; white-space: normal;">
                                                        @if (strlen($mainproduct->description) > 100)
                                                            <span
                                                                id="short-description">{{ substr($mainproduct->description, 0, 100) }}...</span>
                                                            <a href="#" id="read-more" data-toggle="modal"
                                                                data-target="#descriptionModal" class="btn-link"
                                                                style="color: rgb(0, 81, 255)">Read
                                                                More</a>
                                                        @else
                                                            <span
                                                                id="full-description">{{ $mainproduct->description }}</span>
                                                        @endif
                                                    </td>
                                                    <td class="text-center"><button class="btn btn-primary edit-btn"
                                                            data-id="{{ $mainproduct->id }}">Edit</button> &nbsp;
                                                        <button class="btn btn-danger deletebtn"
                                                            data-id="{{ $mainproduct->id }}">Delete</button>
                                                    </td>
                                                    <td>{{ $mainproduct->crm_name }}</td>
                                                    <td>{{ $mainproduct->created_log }}</td>
                                                    <td>{{ $mainproduct->updated_log }}</td>
                                                </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                                <div class="modal fade" id="descriptionModal" tabindex="-1" role="dialog"
                                    aria-labelledby="descriptionModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="descriptionModalLabel">Full Description
                                                </h5>
                                                <button aria-label="Close" class="btn-close"
                                                    data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p id="modal-description">{{ $mainproduct->description ?? '' }}</p>
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
                                    <div class="modal-dialog modal-lg modal-dialog-centered text-center"
                                        role="document">
                                        <div class="modal-content modal-content-demo">
                                            <div class="modal-header">
                                                <h6 class="modal-title">Add Main-Product</h6>
                                                <button aria-label="Close" class="btn-close"
                                                    data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body text-start">
                                                <div class="mb-3">
                                                    <label for="adminName" class="form-label">Main Product
                                                        Name</label>
                                                    <input type="text" class="form-control" id="adminName"
                                                        placeholder="Enter Product name" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="adminName" class="form-label">Description</label>
                                                    <textarea name="description" id="description" cols="30" rows="5" class="form-control"
                                                        placeholder="Enter Description"></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="image" class="form-label">Product Image</label>
                                                    <input type="file" class="form-control" id="imageInput"
                                                        accept="image/*">
                                                </div>
                                                <div class="img-container img-containers  d-none">
                                                    <img id="imageCrop" style="display:none;" />
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                <button class="btn btn-success" id="submit-btn">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- editpopup --}}
                                <div class="modal fade" id="editmodaldemo8" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="editmodaldemo8Label"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered text-center"
                                        role="document">
                                        <div class="modal-content modal-content-demo">
                                            <div class="modal-header">
                                                <h6 class="modal-title">Edit Main-Product</h6><button
                                                    aria-label="Close" class="btn-close"
                                                    data-bs-dismiss="modal"></button>
                                            </div>
                                            <input type="hidden" id="editids">
                                            <div class="modal-body text-start">
                                                <div class="mb-3">
                                                    <label for="adminName" class="form-label">Main Product
                                                        Name</label>
                                                    <input type="text" class="form-control" id="editadminName"
                                                        placeholder="Enter Product name" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="adminName" class="form-label">Description</label>
                                                    <textarea name="description" id="editdescription" cols="30" rows="5" class="form-control"
                                                        placeholder="Enter Description"></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="image" class="form-label">Product Image</label>
                                                    <input type="file" class="form-control" id="editimageInput"
                                                        accept="image/*">
                                                </div>
                                                <div class="img-container img-containeredit  d-none">
                                                    <img id="editimageCrop" style="display:none;" />
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                <button class="btn btn-success" id="update-btn">Update</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- endpopup --}}
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
        // let cropper;

        // document.getElementById('imageInput').addEventListener('change', function(event) {
        //     const files = event.target.files;
        //     const done = (url) => {
        //         document.getElementById('imageCrop').src = url;
        //         document.getElementById('imageCrop').style.display = 'block';
        //     };

        //     if (files && files.length > 0) {
        //         const reader = new FileReader();
        //         reader.onload = (e) => {
        //             done(e.target.result);
        //         };
        //         reader.readAsDataURL(files[0]);
        //     }
        // });

        // document.getElementById('imageCrop').addEventListener('load', function() {
        //     if (cropper) {
        //         cropper.destroy();
        //     }
        //     cropper = new Cropper(this, {
        //         aspectRatio: 500 / 400,
        //         viewMode: 1,
        //         autoCropArea: 1,
        //         responsive: true,
        //         background: false,
        //     });
        // });

        // Handle the submit action
        // document.getElementById('submit-btn').addEventListener('click', function() {
        //     const canvas = cropper.getCroppedCanvas();
        //     // Convert to Blob or Base64 for upload
        //     canvas.toBlob((blob) => {
        //         const formData = new FormData();
        //         formData.append('croppedImage', blob);

        //         // Send the formData to your server here
        //         // Example: axios.post('/upload', formData)
        //     });
        // });
    </script>
    <script>
        let cropper;
        let cropperedit;
        let isimageupload = false;

        document.getElementById('imageInput').addEventListener('change', function(event) {
            $('.img-containers ').removeClass('d-none');
            const files = event.target.files;
            const done = (url) => {
                document.getElementById('imageCrop').src = url;
                document.getElementById('imageCrop').style.display = 'block';
            };

            if (files && files.length > 0) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    done(e.target.result);
                };
                reader.readAsDataURL(files[0]);
            }
        });
        document.getElementById('editimageInput').addEventListener('change', function(event) {
            $('.img-containeredit ').removeClass('d-none');
            isimageupload = true;
            const files = event.target.files;
            const done = (url) => {
                document.getElementById('editimageCrop').src = url;
                document.getElementById('editimageCrop').style.display = 'block';
            };

            if (files && files.length > 0) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    done(e.target.result);
                };
                reader.readAsDataURL(files[0]);
            }
        });

        document.getElementById('imageCrop').addEventListener('load', function() {
            if (cropper) {
                cropper.destroy();
            }
            cropper = new Cropper(this, {
                aspectRatio: 500 / 400,
                viewMode: 1,
                autoCropArea: 1,
                responsive: true,
                background: false,
            });
        });
        document.getElementById('editimageCrop').addEventListener('load', function() {
            if (cropperedit) {
                cropperedit.destroy();
            }
            cropperedit = new Cropper(this, {
                aspectRatio: 500 / 400,
                viewMode: 1,
                autoCropArea: 1,
                responsive: true,
                background: false,
            });
        });
        $(document).ready(function() {
            $('#submit-btn').click(function(e) {
                e.preventDefault();
                var isvalid = true;
                $('.is-invalid').removeClass('is-invalid');
                if ($('#adminName').val() === '') {
                    $('#adminName').addClass('is-invalid');
                    isvalid = false;
                }
                if ($('#description').val() === '') {
                    $('#description').addClass('is-invalid');
                    isvalid = false;
                }
                if ($('#imageInput').val() === '') {
                    $('#imageInput').addClass('is-invalid');
                    isvalid = false;
                }


                if (isvalid) {
                    const canvas = cropper.getCroppedCanvas();
                    // Convert to Blob or Base64 for upload
                    canvas.toBlob((blob) => {
                        const formData = new FormData();
                        formData.append('croppedImage', blob);
                        formData.append('productname', $('#adminName').val());
                        formData.append('description', $('#description').val());
                        formData.append('_token', '{{ csrf_token() }}');

                        $.ajax({
                            url: '{{ route('insertmainproduct') }}',
                            type: 'POST',
                            data: formData,
                            contentType: false,
                            processData: false,
                            success: function(response) {
                                if (response.status == '200') {
                                    Swal.fire({
                                        title: 'Success',
                                        text: 'Main-Product Added Successfully',
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
                    });

                }
            });
            $(document).on('click', '.edit-btn', function() {
                var standardId = $(this).data('id');
                $.ajax({
                    type: 'POST',
                    url: '{{ route('editmainproduct') }}',
                    data: {
                        id: standardId,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {

                        if (response.status == '200' && response.data) {
                            $('#editadminName').val(response.data.product_name);
                            $('#editdescription').val(response.data.description);
                            $('#editids').val(response.data.id);
                            $('#editmodaldemo8').modal('show');
                        } else {
                            console.error('Failed to fetch existing data for editing.');
                        }
                    },
                    error: function(xhr, status, error) {

                        console.error(xhr.responseText);

                    }
                });
            });
            $('#read-more').click(function(e) {
                e.preventDefault();
                $('#descriptionModal').modal('show');
            });
            $('#update-btn').click(function(e) {
                e.preventDefault();
                var isvalid = true;

                $('.is-invalid').removeClass('is-invalid');

                if ($('#editadminName').val() === '') {
                    $('#editadminName').addClass('is-invalid');
                    isvalid = false;
                }
                if ($('#editdescription').val() === '') {
                    $('#editdescription').addClass('is-invalid');
                    isvalid = false;
                }






                if (isvalid) {
                    const formData = new FormData();

                    if (isimageupload) {
                        console.log('checkedit');
                        const canvasedit = cropperedit.getCroppedCanvas();

                        canvasedit.toBlob((blob) => {
                            if (blob) {
                                formData.append('croppedImage', blob);
                                console.log(blob, 'Image blob added');
                                formData.append('productname', $('#editadminName').val());
                                formData.append('description', $('#editdescription').val());
                                formData.append('id', $('#editids').val());
                                formData.append('_token', '{{ csrf_token() }}');
                                $.ajax({
                                    url: '{{ route('updatemainproduct') }}', // Update this URL if necessary
                                    type: 'POST',
                                    data: formData,
                                    contentType: false, // Important: Do not set contentType
                                    processData: false, // Important: Do not process data
                                    success: function(response) {
                                        if (response.status == '200') {
                                            Swal.fire({
                                                title: 'Success',
                                                text: 'Product has been successfully updated',
                                                icon: 'success',
                                                confirmButtonText: 'OK'
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    window.location.reload();
                                                }
                                            });
                                        } else {
                                            Swal.fire({
                                                title: 'Error',
                                                text: 'Internal Server Error',
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
                            } else {
                                console.error('Blob is null');
                            }
                        });
                    } else {
                        // Handle case where no image upload is performed
                        formData.append('productname', $('#editadminName').val());
                        formData.append('description', $('#editdescription').val());
                        formData.append('_token', '{{ csrf_token() }}');
                        formData.append('id', $('#editids').val());


                        $.ajax({
                            url: '{{ route('updatemainproduct') }}', // Update this URL if necessary
                            type: 'POST',
                            data: formData,
                            contentType: false,
                            processData: false,
                            success: function(response) {
                                if (response.status == '200') {
                                    Swal.fire({
                                        title: 'Success',
                                        text: 'Product has been successfully updated',
                                        icon: 'success',
                                        confirmButtonText: 'OK'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            window.location.reload();
                                        }
                                    });
                                } else {
                                    Swal.fire({
                                        title: 'Error',
                                        text: 'Internal Server Error',
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
                }
            });

            $(document).on('click', '.deletebtn', function() {
                var standardId = $(this).data('id');

                // Show confirmation dialog
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You won’t be able to revert this!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                }).then((result) => {
                    if (result.isConfirmed) {
                        // If confirmed, proceed with the AJAX request
                        $.ajax({
                            type: 'POST',
                            url: '{{ route('deletemainproduct') }}',
                            data: {
                                id: standardId,
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(response) {
                                if (response.status == '200') {
                                    Swal.fire({
                                        title: 'Success',
                                        text: 'Product has been successfully Deleted',
                                        icon: 'success',
                                        confirmButtonText: 'OK'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            window.location.reload();
                                        }
                                    });
                                } else {
                                    Swal.fire({
                                        title: 'Error',
                                        text: 'Internal Server Error',
                                        icon: 'error',
                                        confirmButtonText: 'OK'
                                    });
                                }
                            },
                            error: function(xhr, status, error) {
                                Swal.fire({
                                    title: 'Error',
                                    text: 'Internal Server Error',
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
