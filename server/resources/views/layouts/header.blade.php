<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from maxartkiller.com/website/finwallapp2/HTML/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Jan 2025 19:12:28 GMT -->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="generator" content="" />
    <title>finwallapp V2.0 - Mobile HTML template</title>

    <!-- manifest meta -->
    <meta name="mobile-web-app-capable" content="yes" />
    <link rel="manifest" href="manifest.json" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/favicon180.png" sizes="180x180" />
    <link rel="icon" href="assets/img/favicon32.png" sizes="32x32" type="image/png" />
    <link rel="icon" href="assets/img/favicon16.png" sizes="16x16" type="image/png" />

    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&amp;display=swap"
        rel="stylesheet" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <!-- swiper carousel css -->
    <link rel="stylesheet" href="assets/vendor/swiperjs-6.6.2/swiper-bundle.min.css" />

    <!-- style css for this template -->
    <link href="assets/css/style.css" rel="stylesheet" id="style" />
</head>

<body class="body-scroll" data-page="index">
    <!-- loader section -->
    <div class="container-fluid loader-wrap">
        <div class="row h-100">
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto text-center align-self-center">
                <div class="logo-wallet">
                    <div class="wallet-bottom"></div>
                    <div class="wallet-cards"></div>
                    <div class="wallet-top"></div>
                </div>
                <p class="mt-4">
                    <span class="text-secondary">Track Linan with Wallet app</span><br /><strong>Please wait...</strong>
                </p>
            </div>
        </div>
    </div>
    <!-- loader section ends -->

    <!-- Sidebar main menu -->
    <div class="sidebar-wrap sidebar-overlay">
        <!-- Add pushcontent or fullmenu instead overlay -->
        <div class="closemenu text-muted">Close Menu</div>
        <div class="sidebar">
            <!-- user information -->
            <div class="row my-3">
                <div class="col-12 profile-sidebar">
                    <div class="clearfix"></div>
                    <div class="circle small one"></div>
                    <div class="circle small two"></div>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 194.287 141.794" class="menubg">
                        <defs>
                            <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1"
                                gradientUnits="objectBoundingBox">
                                <stop offset="0" stop-color="#09b2fd" />
                                <stop offset="1" stop-color="#6b00e5" />
                            </linearGradient>
                        </defs>
                        <path id="menubg"
                            d="M672.935,207.064c-19.639,1.079-25.462-3.121-41.258,10.881s-24.433,41.037-49.5,34.15-14.406-16.743-50.307-29.667-32.464-19.812-16.308-41.711S500.472,130.777,531.872,117s63.631,21.369,93.913,15.363,37.084-25.959,56.686-19.794,4.27,32.859,6.213,44.729,9.5,16.186,9.5,26.113S692.573,205.985,672.935,207.064Z"
                            transform="translate(-503.892 -111.404)" fill="url(#linear-gradient)" />
                    </svg>

                    <div class="row mt-3">
                        <div class="col-auto">
                            <figure class="avatar avatar-80 rounded-20 p-1 bg-white shadow-sm">
                                <img src="assets/img/user1.jpg" alt="" class="rounded-18" />
                            </figure>
                        </div>
                        <div class="col px-0 align-self-center">
                            <h5 class="mb-2"><%= data.username %></h5>
                            <p class="text-muted size-12">
                                New York City,<br />United States
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- user emnu navigation -->
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">
                                <div class="avatar avatar-40 icon">
                                    <i class="bi bi-house-door"></i>
                                </div>
                                <div class="col">Dashboard</div>
                                <!-- <div class="arrow"><i class="bi bi-chevron-right"></i></div> -->
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                aria-expanded="false">
                                <div class="avatar avatar-40 icon">
                                    <i class="bi bi-cart"></i>
                                </div>
                                <div class="col">Shop</div>
                                <div class="arrow">
                                    <i class="bi bi-chevron-down plus"></i>
                                    <i class="bi bi-chevron-up minus"></i>
                                </div>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item nav-link" href="shop.html">
                                        <div class="avatar avatar-40 icon">
                                            <i class="bi bi-shop"></i>
                                        </div>
                                        <div class="col align-self-center">Shop home</div>
                                        <div class="arrow">
                                            <i class="bi bi-chevron-right"></i>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item nav-link" href="products.html">
                                        <div class="avatar avatar-40 icon">
                                            <i class="bi bi-box-seam"></i>
                                        </div>
                                        <div class="col align-self-center">All Products</div>
                                        <div class="arrow">
                                            <i class="bi bi-chevron-right"></i>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item nav-link" href="product.html">
                                        <div class="avatar avatar-40 icon">
                                            <i class="bi bi-box-seam"></i>
                                        </div>
                                        <div class="col align-self-center">Product</div>
                                        <div class="arrow">
                                            <i class="bi bi-chevron-right"></i>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item nav-link" href="cart.html">
                                        <div class="avatar avatar-40 icon">
                                            <i class="bi bi-bag"></i>
                                        </div>
                                        <div class="col align-self-center">Cart</div>
                                        <div class="arrow">
                                            <i class="bi bi-chevron-right"></i>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item nav-link" href="myorders.html">
                                        <div class="avatar avatar-40 icon">
                                            <i class="bi bi-view-list"></i>
                                        </div>
                                        <div class="col align-self-center">My Orders</div>
                                        <div class="arrow">
                                            <i class="bi bi-chevron-right"></i>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item nav-link" href="payment.html">
                                        <div class="avatar avatar-40 icon">
                                            <i class="bi bi-cash-stack"></i>
                                        </div>
                                        <div class="col align-self-center">Payment</div>
                                        <div class="arrow">
                                            <i class="bi bi-chevron-right"></i>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item nav-link" href="invoice.html">
                                        <div class="avatar avatar-40 icon">
                                            <i class="bi bi-receipt"></i>
                                        </div>
                                        <div class="col align-self-center">Invoice</div>
                                        <div class="arrow">
                                            <i class="bi bi-chevron-right"></i>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="chat.html" tabindex="-1">
                                <div class="avatar avatar-40 icon">
                                    <i class="bi bi-chat-text"></i>
                                </div>
                                <div class="col">Messages</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="notifications.html" tabindex="-1">
                                <div class="avatar avatar-40 icon">
                                    <i class="bi bi-bell"></i>
                                </div>
                                <div class="col">Notification</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="blog.html" tabindex="-1">
                                <div class="avatar avatar-40 icon">
                                    <i class="bi bi-newspaper"></i>
                                </div>
                                <div class="col">Blogs</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="style.html" tabindex="-1">
                                <div class="avatar avatar-40 icon">
                                    <i class="bi bi-palette"></i>
                                </div>
                                <div class="col">
                                    Style <i class="bi bi-star-fill text-warning small"></i>
                                </div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="pages.html" tabindex="-1">
                                <div class="avatar avatar-40 icon">
                                    <i class="bi bi-file-earmark-text"></i>
                                </div>
                                <div class="col">
                                    Pages <span class="badge bg-info fw-light">new</span>
                                </div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="signin.html" tabindex="-1">
                                <div class="avatar avatar-40 icon">
                                    <i class="bi bi-box-arrow-right"></i>
                                </div>
                                <div class="col">Logout</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Sidebar main menu ends -->

    <!-- Begin page -->
    <main class="h-100">
        <!-- Header -->
        <header class="header position-fixed">
            <div class="row">
                <div class="col-auto">
                    <a href="javascript:void(0)" target="_self" class="btn btn-light btn-44 menu-btn">
                        <i class="bi bi-list"></i>
                    </a>
                </div>
                <div class="col text-center">
                    <div class="logo-small">
                        <img src="assets/img/logo.png" alt="" />
                        <h5>
                            <span class="text-secondary fw-light">Linan</span><br />Wallet
                        </h5>
                    </div>
                </div>
                <div class="col-auto">
                    <a href="profile.html" target="_self" class="btn btn-light btn-44">
                        <i class="bi bi-person-circle"></i>
                        <span class="count-indicator"></span>
                    </a>
                </div>
            </div>
        </header>
        <!-- Header ends -->

        @yield('content')


    </main>
    <!-- Page ends-->
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <ul class="nav nav-pills nav-justified">
                <li class="nav-item">
                    <a class="nav-link active" href="index.html">
                        <span>
                            <i class="nav-icon bi bi-house"></i>
                            <span class="nav-text">Home</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="stats.html">
                        <span>
                            <i class="nav-icon bi bi-binoculars"></i>
                            <span class="nav-text">Statistics</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item centerbutton">
                    <button type="button" class="nav-link" data-bs-toggle="modal" data-bs-target="#menumodal"
                        id="centermenubtn">
                        <span class="theme-radial-gradient">
                            <i class="bi bi-grid size-22"></i>
                        </span>
                    </button>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="shop.html">
                        <span>
                            <i class="nav-icon bi bi-bag"></i>
                            <span class="nav-text">Shop</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="wallet.html">
                        <span>
                            <i class="nav-icon bi bi-wallet2"></i>
                            <span class="nav-text">Wallet</span>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </footer>
    <!-- Menu Modal -->
    <div class="modal fade" id="menumodal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content shadow">
                <div class="modal-body">
                    <h1 class="mb-4">
                        <span class="text-secondary fw-light">Quick</span><br />Actions!
                    </h1>
                    <div class="text-center">
                        <img src="assets/img/QRCode.png" alt="" class="mb-2" />
                        <p class="small text-secondary mb-4">
                            Ask to scan this QR-Code<br />to accept money
                        </p>
                    </div>
                    <div class="row justify-content-center mb-4">
                        <div class="col-auto text-center">
                            <a href="bills.html"
                                class="avatar avatar-70 p-1 shadow-sm shadow-danger rounded-20 bg-opac mb-2"
                                data-bs-dismiss="modal">
                                <div class="icons text-danger">
                                    <i class="bi bi-receipt-cutoff size-24"></i>
                                </div>
                            </a>
                            <p class="size-10 text-secondary">Pay Bill</p>
                        </div>

                        <div class="col-auto text-center">
                            <a href="sendmoney.html"
                                class="avatar avatar-70 p-1 shadow-sm shadow-purple rounded-20 bg-opac mb-2"
                                data-bs-dismiss="modal">
                                <div class="icons text-purple">
                                    <i class="bi bi-arrow-up-right size-24"></i>
                                </div>
                            </a>
                            <p class="size-10 text-secondary">Send Money</p>
                        </div>

                        <div class="col-auto text-center">
                            <a href="receivemoney.html"
                                class="avatar avatar-70 p-1 shadow-sm shadow-success rounded-20 bg-opac mb-2"
                                data-bs-dismiss="modal">
                                <div class="icons text-success">
                                    <i class="bi bi-arrow-down-left size-24"></i>
                                </div>
                            </a>
                            <p class="size-10 text-secondary">Receive Money</p>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-2">
                        <div class="col-auto text-center">
                            <a href="withdraw.html"
                                class="avatar avatar-70 p-1 shadow-sm shadow-secondary rounded-20 bg-opac mb-2"
                                data-bs-dismiss="modal">
                                <div class="icons text-secondary">
                                    <i class="bi bi-bank size-24"></i>
                                </div>
                            </a>
                            <p class="size-10 text-secondary">Withdraw</p>
                        </div>

                        <div class="col-auto text-center">
                            <a href="addmoney.html"
                                class="avatar avatar-70 p-1 shadow-sm shadow-warning rounded-20 bg-opac mb-2"
                                data-bs-dismiss="modal">
                                <div class="icons text-warning">
                                    <i class="bi bi-wallet2 size-24"></i>
                                </div>
                            </a>
                            <p class="size-10 text-secondary">Add Money</p>
                        </div>

                        <div class="col-auto text-center">
                            <div class="avatar avatar-70 p-1 shadow-sm shadow-info rounded-20 bg-opac mb-2"
                                data-bs-dismiss="modal">
                                <div class="icons text-info">
                                    <i class="bi bi-tv size-24"></i>
                                </div>
                            </div>
                            <p class="size-10 text-secondary">Recharge</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer ends-->

    <!-- PWA app install toast message -->
    <div class="position-fixed bottom-0 start-50 translate-middle-x z-index-99">
        <div class="toast mb-3" role="alert" aria-live="assertive" aria-atomic="true" id="toastinstall"
            data-bs-animation="true">
            <div class="toast-header">
                <img src="assets/img/favicon32.png" class="rounded me-2" alt="..." />
                <strong class="me-auto">Install PWA App</strong>
                <small>now</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                <div class="row">
                    <div class="col">
                        Click "Install" to install PWA app & experience indepedent.
                    </div>
                    <div class="col-auto align-self-center ps-0">
                        <button class="btn-default btn btn-sm" id="addtohome">
                            Install
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Required jquery and libraries -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/vendor/bootstrap-5/js/bootstrap.bundle.min.js"></script>

    <!-- Customized jquery file  -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/color-scheme.js"></script>

    <!-- PWA app service registration and works -->
    <script src="assets/js/pwa-services.js"></script>

    <!-- Chart js script -->
    <script src="assets/vendor/chart-js-3.3.1/chart.min.js"></script>

    <!-- Progress circle js script -->
    <script src="assets/vendor/progressbar-js/progressbar.min.js"></script>

    <!-- swiper js script -->
    <script src="assets/vendor/swiperjs-6.6.2/swiper-bundle.min.js"></script>

    <!-- page level custom script -->
    <script src="assets/js/app.js"></script>
</body>

</html>
