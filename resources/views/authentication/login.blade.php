<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" data-theme-mode="light"
    data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Login - Aroun Systems & Safety Equipments</title>
    <link rel="icon" href="{{ asset('website_assets/images/favicons/favicon.png') }}" type="image/x-icon">
    <script src="./assets/js/authentication-main.js"></script>
    <link id="style" href="./assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/styles.css" rel="stylesheet">
    <link href="./assets/css/icons.css" rel="stylesheet">
</head>

<body class="authentication-background">
    <div class="container">
        <div class="row justify-content-center align-items-center authentication authentication-basic h-100">
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
                <div class="card custom-card my-4">
                    <div class="card-body p-5">
                        <div class="mb-3 d-flex justify-content-center">
                            <a href="#!">
                                <img src="{{ asset('assets/images/img/arounlogo.png') }}" alt="logo"
                                    class="desktop-logo">
                                <img src="{{ asset('assets/images/img/arounlogo.png') }}" alt="logo"
                                    class="desktop-white">
                            </a>
                        </div>
                        <p class="h5 mb-2 text-center">Sign In</p>
                        <p class="mb-4 text-muted op-7 fw-normal text-center">Welcome back Admin!</p>

                        <div class="row gy-3">
                            <div class="col-xl-12">
                                <label for="signin-username" class="form-label text-default">User Name<sup
                                        class="fs-12 text-danger">*</sup></label>
                                <input type="text" class="form-control" id="signin-username" placeholder="user name">
                            </div>
                            <div class="col-xl-12 mb-2">
                                <label for="signin-password" class="form-label text-default d-block">Password<sup
                                        class="fs-12 text-danger">*</sup></label>
                                <div class="position-relative">
                                    <input type="password" class="form-control create-password-input"
                                        id="signin-password" placeholder="password">
                                    <a href="javascript:void(0);" class="show-password-button text-muted"
                                        onclick="createpassword('signin-password',this)" id="button-addon2"><i
                                            class="ri-eye-off-line align-middle"></i></a>
                                </div>
                                <div class="mt-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="defaultCheck1">
                                        <label class="form-check-label text-muted fw-normal" for="defaultCheck1">
                                            Remember password ?
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid mt-4">
                            <button class="btn btn-primary" id="sign-inbtn">Sign In</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/show-password.js"></script>
    <script src="{{ asset('assets/js/jquery-3.6.1.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#sign-inbtn').click(function() {
                $('.is-invalid').removeClass('is-invalid');
                var isvalid = true;
                if ($('#signin-username').val() == '') {
                    $('#signin-username').addClass('is-invalid');
                    isvalid = false;
                }
                if ($('#signin-password').val() == '') {
                    $('#signin-password').addClass('is-invalid');
                    isvalid = false;
                }
                if (isvalid) {
                    $.ajax({
                        url: '{{ route('logincheck') }}',
                        method: 'POST',
                        data: {
                            email: $('#signin-username').val(),
                            password: $('#signin-password').val(),
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            if (response.status == '401') {
                                toastr.clear();
                                // toastr.options.positionClass = 'toast-bottom-center';

                                toastr.error('Invalid username or password',
                                    'Authentication Failed');
                                $('#signin-username').addClass('is-invalid');
                                $('#signin-password').addClass('is-invalid');
                            } else if (response.status == '200') {
                                window.location.href = response.redirect_url;

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

</body>

</html>
