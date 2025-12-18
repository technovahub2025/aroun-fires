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
</head>

<body>
    <div class="loader-wrapper d-none" id="customloader">
        <div class="loader"></div>
    </div>
    @include('static.header')
    <div class="page">
        @include('static.sidebar')
        <div class="main-content app-content">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
                    <div>
                        <nav>
                            <ol class="breadcrumb mb-1">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">CRM</a></li>
                                <li class="breadcrumb-item active" aria-current="page">CRM List</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="btn-list">
                        {{-- <button class="btn btn-white btn-wave">
                            <i class="ri-filter-3-line align-middle me-1 lh-1"></i> Filter
                        </button> --}}
                        <button class="btn btn-primary btn-wave me-0" data-bs-effect="effect-flip-horizontal"
                            data-bs-toggle="modal" href="#modaldemo8">
                            <i class="ri-user-add-fill me-1"></i> Add CRM
                        </button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <h1 class="page-title fw-medium fs-18 mb-0">CRM List</h1>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap w-100 pt-2"
                                        id="responsive-file-export">
                                        <thead class="table-primary">
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Position</th>
                                                <th>Action</th>
                                                <th>Created By</th>
                                                <th>Created at</th>
                                                <th>Last Update</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $key => $user)
                                                <tr>
                                                    <td>
                                                        @if ($user->status == 1)
                                                            <i class="bi bi-circle-fill" aria-hidden="true"
                                                                style="color:#008000" title="Standard Active"></i>
                                                        @else
                                                            <i class="bi bi-circle-fill" aria-hidden="true"
                                                                style="color:#FF0000" title="Standard Deactive"></i>
                                                        @endif
                                                        {{ $key + 1 }}
                                                    </td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->phone }}</td>
                                                    <td>
                                                        @if ($user->position == 1)
                                                            Super Admin
                                                        @elseif ($user->position == 2)
                                                            Admin
                                                        @else
                                                            {{ $user->position }}
                                                        @endif
                                                    </td>
                                                    <td class="text-center">
                                                        <button class="btn btn-info btn-sm md-trigger edit-btn"
                                                            data-id="{{ $user->id }}">
                                                            <i class="ti ti-edit"></i> Edit
                                                        </button>

                                                    </td>
                                                    <td>{{ $user->crm_name }}</td>
                                                    <td>{{ $user->created_log }}</td>
                                                    <td>{{ $user->updated_log }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="modal fade" id="modaldemo8" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="modaldemo8Label"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered text-center" role="document">
                                        <div class="modal-content modal-content-demo">
                                            <div class="modal-header">
                                                <h6 class="modal-title">Add Admin</h6><button aria-label="Close"
                                                    class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body text-start">
                                                <div class="mb-3">
                                                    <label for="adminName" class="form-label">Name</label>
                                                    <input type="text" class="form-control" id="adminName"
                                                        placeholder="Enter admin name" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="adminEmail" class="form-label">Email</label>
                                                    <input type="email" class="form-control" id="adminEmail"
                                                        placeholder="Enter admin email" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="adminphone" class="form-label">Phone</label>
                                                    <input type="phone" class="form-control" id="adminphone"
                                                        placeholder="Enter admin phone" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="adminPosition" class="form-label">Position</label>
                                                    <select class="form-control" id="adminPosition">
                                                        <option value="" selected disabled>Select Positon
                                                        </option>
                                                        @if (Auth::user()->position == 1)
                                                            <option value="1">Super Admin</option>
                                                        @endif
                                                        <option value="2">Admin</option>
                                                    </select>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="adminPassword" class="form-label">Password</label>
                                                        <input type="password" class="form-control"
                                                            id="adminPassword" placeholder="Enter password" required>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="confirmPassword" class="form-label">Confirm
                                                            Password</label>
                                                        <input type="password" class="form-control"
                                                            id="confirmPassword" placeholder="Confirm password"
                                                            required>
                                                    </div>
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
                                    <div class="modal-dialog modal-dialog-centered text-center" role="document">
                                        <div class="modal-content modal-content-demo">
                                            <div class="modal-header">
                                                <h6 class="modal-title">Edit Admin</h6><button aria-label="Close"
                                                    class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <input type="hidden" id="editids">
                                            <div class="modal-body text-start">
                                                <div class="mb-3">
                                                    <label for="adminName" class="form-label">Name</label>
                                                    <input type="text" class="form-control" id="editadminName"
                                                        placeholder="Enter admin name" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="adminEmail" class="form-label">Email</label>
                                                    <input type="email" class="form-control" id="editadminEmail"
                                                        placeholder="Enter admin email" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="adminphone" class="form-label">Phone</label>
                                                    <input type="phone" class="form-control" id="editadminphone"
                                                        placeholder="Enter admin phone" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="adminPosition" class="form-label">Position</label>
                                                    <select class="form-control" id="editadminPosition">
                                                        <option value="" selected disabled>Select Positon
                                                        </option>
                                                        @if (Auth::user()->position == 1)
                                                            <option value="1">Super Admin</option>
                                                        @endif
                                                        <option value="2">Admin</option>
                                                    </select>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="adminstatus" class="form-label">Status</label>
                                                        <select class="form-control" id="editadminstatus">
                                                            <option value="" selected disabled>Select
                                                                Status
                                                            </option>
                                                            <option value="1">Active</option>
                                                            <option value="0">In-Active</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="adminPassword" class="form-label">Change
                                                            Password</label>
                                                        <input type="password" class="form-control"
                                                            id="editadminPassword" placeholder="Enter password"
                                                            required>
                                                    </div>
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
        $(document).ready(function() {
            $('#submit-btn').click(function(e) {
                e.preventDefault();
                var isvalid = true;
                $('.is-invalid').removeClass('is-invalid');
                if ($('#adminName').val() === '') {
                    $('#adminName').addClass('is-invalid');
                    isvalid = false;
                }
                if ($('#adminEmail').val() === '') {
                    $('#adminEmail').addClass('is-invalid');
                    isvalid = false;
                }
                if ($('#adminphone').val() === '') {
                    $('#adminphone').addClass('is-invalid');
                    isvalid = false;
                }
                if ($('#adminPosition').val() == '' || $('#adminPosition').val() == null) {
                    $('#adminPosition').addClass('is-invalid');
                    isvalid = false;
                }
                if ($('#adminPassword').val() === '') {
                    $('#adminPassword').addClass('is-invalid');
                    isvalid = false;
                }
                if ($('#confirmPassword').val() === '') {
                    $('#confirmPassword').addClass('is-invalid');
                    isvalid = false;
                } else if ($('#confirmPassword').val() !== $('#adminPassword').val()) {
                    $('#confirmPassword').addClass('is-invalid');
                    isvalid = false;
                }

                if (isvalid) {
                    $('#customloader').removeClass('d-none');

                    $.ajax({
                        url: '{{ route('insertadmin') }}',
                        type: 'POST',
                        data: {
                            name: $('#adminName').val(),
                            email: $('#adminEmail').val(),
                            phone: $('#adminphone').val(),
                            position: $('#adminPosition').val(),
                            password: $('#adminPassword').val(),
                            _token: '{{ csrf_token() }}',
                        },
                        success: function(response) {
                            $('#customloader').addClass('d-none');

                            if (response.status == '200') {
                                Swal.fire({
                                    title: 'Success',
                                    text: 'Admin Added Successfully',
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
            $(document).on('click', '.edit-btn', function() {
                var standardId = $(this).data('id');
                $('#customloader').removeClass('d-none');

                $.ajax({
                    type: 'POST',
                    url: '{{ route('editadmin') }}',
                    data: {
                        id: standardId,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $('#customloader').addClass('d-none');


                        if (response.status == '200' && response.data) {

                            $('#editadminName').val(response.data.name);
                            $('#editadminEmail').val(response.data.email);
                            $('#editadminphone').val(response.data.phone);
                            $('#editadminPosition').val(response.data.position);
                            $('#editadminstatus').val(response.data.status);
                            $('#editids').val(response.data.id);
                            $('#editmodaldemo8').modal('show');
                        } else {

                            console.error('Failed to fetch existing data for editing.');
                        }
                    },
                    error: function(xhr, status, error) {
                        $('#customloader').addClass('d-none');

                        console.error(xhr.responseText);

                    }
                });
            });
            $('#update-btn').click(function(e) {
                e.preventDefault();
                var isvalid = true;

                // Clear previous errors
                $('.is-invalid').removeClass('is-invalid');

                // Validate Name
                if ($('#editadminName').val() === '') {
                    $('#editadminName').addClass('is-invalid');
                    isvalid = false;
                }
                if ($('#editadminEmail').val() === '') {
                    $('#editadminEmail').addClass('is-invalid');
                    isvalid = false;
                }


                // Validate Phone
                if ($('#editadminphone').val() === '') {
                    $('#editadminphone').addClass('is-invalid');
                    isvalid = false;
                }

                // Validate Position
                if ($('#editadminPosition').val() == '' || $('#editadminPosition').val() == null) {
                    $('#editadminPosition').addClass('is-invalid');
                    isvalid = false;
                }
                if ($('#editadminstatus').val() == '' || $('#editadminstatus').val() == null) {
                    $('#editadminstatus').addClass('is-invalid');
                    isvalid = false;
                }





                if (isvalid) {
                    $('#customloader').removeClass('d-none');

                    $.ajax({
                        url: '{{ route('updateadmin') }}',
                        type: 'POST',
                        data: {
                            editid: $('#editids').val(),
                            name: $('#editadminName').val(),
                            email: $('#editadminEmail').val(),
                            phone: $('#editadminphone').val(),
                            position: $('#editadminPosition').val(),
                            status: $('#editadminstatus').val(),
                            password: $('#editadminPassword').val(),
                            _token: '{{ csrf_token() }}',
                        },
                        success: function(response) {
                            $('#customloader').removeClass('d-none');

                            if (response.status == '200') {
                                Swal.fire({
                                    title: 'Success',
                                    text: 'Admin has been successfuly Updated',
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
                            $('#customloader').removeClass('d-none');

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
    </script>

</body>

</html>
