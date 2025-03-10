<!doctype html>
<html lang="en" class="h-100">


<!-- Mirrored from maxartkiller.com/website/finwallapp2/HTML/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Jan 2025 19:13:03 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Linan | E-Wallet</title>

    <!-- manifest meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="manifest" href="manifest.json" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('') }}assets/img/favicon180.png" sizes="180x180">
    <link rel="icon" href="{{ asset('') }}assets/img/favicon32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="{{ asset('') }}assets/img/favicon16.png" sizes="16x16" type="image/png">

    <!-- Google fonts-->

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&amp;display=swap"
        rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <!-- style css for this template -->
    <link href="{{ asset('') }}assets/css/style.css" rel="stylesheet" id="style">
</head>

<body class="body-scroll d-flex flex-column h-100" data-page="signin">

    <!-- loader section -->
    <div class="container-fluid loader-wrap">
        <div class="row h-100">
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto text-center align-self-center">
                <div class="logo-wallet">
                    <div class="wallet-bottom">
                    </div>
                    <div class="wallet-cards"></div>
                    <div class="wallet-top">
                    </div>
                </div>
                <p class="mt-4"><span class="text-secondary">Linan Wallet App</span><br><strong>Please
                        wait...</strong></p>
            </div>
        </div>
    </div>
    <!-- loader section ends -->


    <!-- Begin page content -->
    <main class="container-fluid h-100 ">
        <div class="row h-100">
            <div class="col-11 col-sm-11 mx-auto">
                <!-- header -->
                <div class="row">
                    <header class="header">
                        <div class="row">
                            <div class="col">
                                <div class="logo-small">
                                    <img src="{{ asset('') }}assets/img/logo.png" alt="" />
                                    <h5><span class="text-secondary fw-light">Linan</span><br />Wallet</h5>
                                </div>
                            </div>
                            {{-- <div class="col-auto align-self-center">
                                <a href="#">Sing up</a>
                            </div> --}}
                        </div>
                    </header>
                </div>
                <!-- header ends -->
            </div>
            <form method="post" action="/login">
                @csrf
                <div class="col-11 col-sm-11 col-md-6 col-lg-5 col-xl-3 mx-auto align-self-center py-4">
                    <h1 class="mb-4"><span class="text-secondary fw-light">Sign in to</span><br />your account</h1>

                    <!-- Email Input -->
                    <div class="form-group form-floating mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            id="email" placeholder="email" value="{{ old('email') }}">
                        <label class="form-control-label" for="email">Your Email</label>

                        <!-- Error Message for Email -->
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Password Input -->
                    <div class="form-group form-floating mb-3 position-relative">
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" id="password" placeholder="Password">
                        <label class="form-control-label" for="password">Your Password</label>

                        <!-- Eye Icon -->
                        <span class="position-absolute top-50 end-0 translate-middle-y me-3" style="cursor: pointer;"
                            onclick="togglePassword()">
                            <i id="eyeIcon" class="fa fa-eye"></i>
                        </span>

                        <!-- Error Message for Password -->
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>




                    <!-- Error Message for Login -->
                    @if ($errors->has('login'))
                        <div class="text-danger">
                            {{ $errors->first('login') }}
                        </div>
                    @endif

                    <p class="mb-3 text-end">
                        <a href="#" class="">Forgot your password?</a>
                    </p>
                </div>

                <div class="col-11 col-sm-11 mt-auto mx-auto py-4">
                    <div class="row ">
                        <div class="col-12 d-grid">
                            <button type="submit" class="btn btn-default btn-lg shadow-sm">Sign In</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </main>

    <!-- FontAwesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>

    <script>
        function togglePassword() {
            let passwordInput = document.getElementById("password");
            let eyeIcon = document.getElementById("eyeIcon");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.classList.remove("fa-eye");
                eyeIcon.classList.add("fa-eye-slash");
            } else {
                passwordInput.type = "password";
                eyeIcon.classList.remove("fa-eye-slash");
                eyeIcon.classList.add("fa-eye");
            }
        }
    </script>
    <!-- Required jquery and libraries -->
    <script src="{{ asset('') }}assets/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('') }}assets/js/popper.min.js"></script>
    <script src="{{ asset('') }}assets/vendor/bootstrap-5/js/bootstrap.bundle.min.js"></script>

    <!-- Customized jquery file  -->
    <script src="{{ asset('') }}assets/js/main.js"></script>
    <script src="{{ asset('') }}assets/js/color-scheme.js"></script>

    <!-- PWA app service registration and works -->
    <script src="{{ asset('') }}assets/js/pwa-services.js"></script>

    <!-- page level custom script -->
    <script src="{{ asset('') }}assets/js/app.js"></script>

</body>




</html>
