@extends('layouts.template')

@section('content')
    <!-- main page content -->
    <div class="main-container container">
        <!-- chart js areachart-->
        <div class="row">
            <div class="col-12 overflow-hidden">
                <!-- calendar -->
                <div class="row">
                    <div class="col position-relative align-self-center">
                        <input type="text" placeholder="Select date range" readonly="readonly" id="daterange"
                            class="calendar-daterange" />
                        <h6 class="mb-1">Expense</h6>
                        <p class="small text-secondary textdate">1/8/2024 - 7/8/2024</p>
                    </div>
                    <div class="col-auto align-self-center">
                        <button class="btn btn-light btn-44 daterange-btn">
                            <i class="bi bi-calendar-range size-22"></i>
                        </button>
                    </div>
                </div>
                <br />
                <canvas id="areachart" class="mb-4"></canvas>
            </div>
        </div>

        <!-- income expense -->
        <div class="row">
            <div class="col-6 col-md-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="circle-small">
                                    <div id="circleprogresstwo"></div>
                                    <div class="avatar avatar-30 bg-success text-white rounded-circle">
                                        <i class="bi bi-arrow-down-left"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto align-self-center ps-0">
                                <p class="size-10 mb-1 text-secondary">Income</p>
                                <p>1542k</p>
                            </div>
                        </div>
                    </div>
                    <div class="smallchart">
                        <canvas id="smallchart2" class="mw-100"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="circle-small">
                                    <div id="circleprogressthree"></div>
                                    <div class="avatar avatar-30 bg-danger text-white rounded-circle">
                                        <i class="bi bi-arrow-up-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto align-self-center ps-0">
                                <p class="size-10 mb-1 text-secondary">Expense</p>
                                <p>1212k</p>
                            </div>
                        </div>
                    </div>
                    <div class="smallchart">
                        <canvas id="smallchart3" class="mw-100"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- cards expense data  -->
        <div class="row mb-2">
            <div class="col">
                <h6 class="title">My Credit Cards</h6>
            </div>
            <div class="col-auto align-self-center">
                <a href="#" class="small">Add New</a>
            </div>
        </div>
        <!-- swiper credit cards -->
        <div class="row mb-3">
            <div class="col-12 px-0">
                <div class="swiper-container cardswiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card theme-bg shadow-sm shadow-purple mb-3">
                                <img src="assets/img/card-bg.png" alt="" class="cardimg" />
                                <div class="card-body">
                                    <div class="row mb-4">
                                        <div class="col-auto align-self-center">
                                            <img src="assets/img/maestro.png" alt="">
                                        </div>
                                        <div class="col align-self-center text-end">
                                            <p class="small">
                                                <span class="text-muted size-10">City Bank</span><br>
                                                <span class="">Credit Card</span>
                                            </p>
                                        </div>
                                    </div>
                                    <h6 class="fw-normal mb-3">
                                        000 0000 0001 546598
                                    </h6>
                                    <div class="row">
                                        <div class="col-auto">
                                            <p class="mb-0 text-muted size-10">Expiry</p>
                                            <p>09/023</p>
                                        </div>
                                        <div class="col text-end">
                                            <p class="mb-0 text-muted size-10">Card Holder</p>
                                            <p>Maxartkiller</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <p class="mb-0 text-secondary size-10">Expense</p>
                                    <p>1500.00
                                        <small class="text-success">18.2
                                            <i class="bi bi-arrow-up"></i>
                                        </small>
                                    </p>
                                </div>
                                <div class="col text-end">
                                    <p class="mb-0 text-secondary size-10">Limit Remain</p>
                                    <p>13500.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card bg-danger shadow-sm shadow-danger mb-3">
                                <div class="card-body">
                                    <div class="row mb-4">
                                        <div class="col-auto align-self-center">
                                            <img src="assets/img/visa.png" alt="">
                                        </div>
                                        <div class="col align-self-center text-end">
                                            <p class="small">
                                                <span class="text-muted size-10">City Bank</span><br>
                                                <span class="">Credit Card</span>
                                            </p>
                                        </div>
                                    </div>
                                    <h6 class="fw-normal mb-3">
                                        000 0000 0001 546598
                                    </h6>
                                    <div class="row">
                                        <div class="col-auto">
                                            <p class="mb-0 text-muted size-10">Expiry</p>
                                            <p>09/023</p>
                                        </div>
                                        <div class="col text-end">
                                            <p class="mb-0 text-muted size-10">Card Holder</p>
                                            <p>Maxartkiller</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <p class="mb-0 text-secondary size-10">Expense</p>
                                    <p>3500.00
                                        <small class="text-danger">10.2
                                            <i class="bi bi-arrow-down"></i>
                                        </small>
                                    </p>
                                </div>
                                <div class="col text-end">
                                    <p class="mb-0 text-secondary size-10">Limit Remain</p>
                                    <p>13500.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card theme-radial-gradient border-0 mb-3">
                                <div class="card-body">
                                    <div class="row mb-4">
                                        <div class="col-auto align-self-center">
                                            <img src="assets/img/maestro.png" alt="">
                                        </div>
                                        <div class="col align-self-center text-end">
                                            <p class="small">
                                                <span class="text-muted size-10">City Bank</span><br>
                                                <span class="">Credit Card</span>
                                            </p>
                                        </div>
                                    </div>
                                    <h6 class="fw-normal mb-3">
                                        000 0000 0001 546598
                                    </h6>
                                    <div class="row">
                                        <div class="col-auto">
                                            <p class="mb-0 text-muted size-10">Expiry</p>
                                            <p>09/023</p>
                                        </div>
                                        <div class="col text-end">
                                            <p class="mb-0 text-muted size-10">Card Holder</p>
                                            <p>Maxartkiller</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <p class="mb-0 text-secondary size-10">Expense</p>
                                    <p>1254.00
                                        <small class="text-success">18.2
                                            <i class="bi bi-arrow-up"></i>
                                        </small>
                                    </p>
                                </div>
                                <div class="col text-end">
                                    <p class="mb-0 text-secondary size-10">Limit Remain</p>
                                    <p>13500.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- My Frequent Payments -->
        <div class="row mb-3">
            <div class="col">
                <h6 class="title">My Frequent Payments</h6>
            </div>
        </div>
        <div class="row mb-1">
            <div class="col-12 col-md-6">
                <div class="card overflow-hidden mb-3">
                    <figure class="m-0 p-0 position-absolute top-0 end-0 w-50 h-100 coverimg">
                        <img src="assets/img/image2.jpg" alt="">
                    </figure>
                    <div class="card-body p-0">
                        <div class="row mx-0">
                            <div class="col-8 py-3 aftercircle">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="profile.html" class="card text-center">
                                            <div class="card-body p-1">
                                                <div
                                                    class="position-absolute end-0 top-0 bg-success z-index-1 online-status">
                                                </div>
                                                <figure class="avatar avatar-70 shadow-sm rounded-18">
                                                    <img src="assets/img/user4.jpg" alt="">
                                                </figure>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col align-self-center px-0">
                                        <p class="text-secondary size-10 mb-0">Send Money</p>
                                        <p class="mb-2">John Winsels</p>
                                        <p>1500.00
                                            <small class="text-success">18.2
                                                <i class="bi bi-arrow-up"></i>
                                            </small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card overflow-hidden mb-3">
                    <figure class="m-0 p-0 position-absolute top-0 end-0 w-50 h-100 coverimg">
                        <img src="assets/img/image3.jpg" alt="">
                    </figure>
                    <div class="card-body p-0">
                        <div class="row mx-0">
                            <div class="col-8 py-3 aftercircle">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="card text-center">
                                            <div class="card-body p-1">
                                                <div
                                                    class="position-absolute end-0 top-0 bg-success z-index-1 online-status">
                                                </div>
                                                <figure class="avatar avatar-70 shadow-sm rounded-18">
                                                    <img src="assets/img/company5.png" alt="">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center px-0">
                                        <p class="text-secondary size-10 mb-0">Transportation</p>
                                        <p class="mb-2">ID0582Max</p>
                                        <p>320.00
                                            <small class="text-success">1.65
                                                <i class="bi bi-arrow-up"></i>
                                            </small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Top Categories  -->
        <div class="row mb-3">
            <div class="col">
                <h6 class="title">Top Categories</h6>
            </div>
        </div>
        <!-- swiper categories cards -->
        <div class="row mb-3">
            <div class="col-12 px-0">
                <div class="swiper-container connectionwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide text-center">
                            <div class="card bg-opac-50 mb-2">
                                <div class="card-body p-1">
                                    <div class="avatar avatar-70 bg-white text-color-theme rounded-18 shadow-sm">
                                        <i class="bi bi-house size-24"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mb-1 small">1.5k
                                <small class="text-success ">18.2
                                    <i class="bi bi-arrow-up"></i>
                                </small>
                            </p>
                            <p class="mb-0 text-secondary size-10">Rent</p>
                        </div>
                        <div class="swiper-slide text-center">
                            <div class="card bg-opac-50 mb-2">
                                <div class="card-body p-1">
                                    <div class="avatar avatar-70 bg-white text-color-theme rounded-18 shadow-sm">
                                        <i class="bi bi-controller size-24"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mb-1 small">2.48k
                                <small class="text-success ">17.4
                                    <i class="bi bi-arrow-up"></i>
                                </small>
                            </p>
                            <p class="mb-0 text-secondary size-10">Gaming</p>
                        </div>
                        <div class="swiper-slide text-center">
                            <div class="card bg-opac-50 mb-2">
                                <div class="card-body p-1">
                                    <div class="avatar avatar-70 bg-white text-color-theme rounded-18 shadow-sm">
                                        <i class="bi bi-gift size-24"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mb-1 small">250
                                <small class="text-success ">5.45
                                    <i class="bi bi-arrow-up"></i>
                                </small>
                            </p>
                            <p class="mb-0 text-secondary size-10">Gifts</p>
                        </div>
                        <div class="swiper-slide text-center">
                            <div class="card bg-opac-50 mb-2">
                                <div class="card-body p-1">
                                    <div class="avatar avatar-70 bg-white text-color-theme rounded-18 shadow-sm">
                                        <i class="bi bi-flower1 size-24"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mb-1 small">1.5k
                                <small class="text-danger">25.5
                                    <i class="bi bi-arrow-down"></i>
                                </small>
                            </p>
                            <p class="mb-0 text-secondary size-10">Gardening</p>
                        </div>
                        <div class="swiper-slide text-center">
                            <div class="card bg-opac-50 mb-2">
                                <div class="card-body p-1">
                                    <div class="avatar avatar-70 bg-white text-color-theme rounded-18 shadow-sm">
                                        <i class="bi bi-bag size-24"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mb-1 small">1.5k
                                <small class="text-success ">25.84
                                    <i class="bi bi-arrow-up"></i>
                                </small>
                            </p>
                            <p class="mb-0 text-secondary size-10">shopping</p>
                        </div>
                        <div class="swiper-slide text-center">
                            <div class="card bg-opac-50 mb-2">
                                <div class="card-body p-1">
                                    <div class="avatar avatar-70 bg-white text-color-theme rounded-18 shadow-sm">
                                        <i class="bi bi-house size-24"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mb-1 small">1.5k
                                <small class="text-success ">18.2
                                    <i class="bi bi-arrow-up"></i>
                                </small>
                            </p>
                            <p class="mb-0 text-secondary size-10">Rent</p>
                        </div>
                        <div class="swiper-slide text-center">
                            <div class="card bg-opac-50 mb-2">
                                <div class="card-body p-1">
                                    <div class="avatar avatar-70 bg-white text-color-theme rounded-18 shadow-sm">
                                        <i class="bi bi-controller size-24"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mb-1 small">2.48k
                                <small class="text-success ">17.4
                                    <i class="bi bi-arrow-up"></i>
                                </small>
                            </p>
                            <p class="mb-0 text-secondary size-10">Gaming</p>
                        </div>
                        <div class="swiper-slide text-center">
                            <div class="card bg-opac-50 mb-2">
                                <div class="card-body p-1">
                                    <div class="avatar avatar-70 bg-white text-color-theme rounded-18 shadow-sm">
                                        <i class="bi bi-gift size-24"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mb-1 small">250
                                <small class="text-success ">5.45
                                    <i class="bi bi-arrow-up"></i>
                                </small>
                            </p>
                            <p class="mb-0 text-secondary size-10">Gifts</p>
                        </div>
                        <div class="swiper-slide text-center">
                            <div class="card bg-opac-50 mb-2">
                                <div class="card-body p-1">
                                    <div class="avatar avatar-70 bg-white text-color-theme rounded-18 shadow-sm">
                                        <i class="bi bi-flower1 size-24"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mb-1 small">1.5k
                                <small class="text-danger">800
                                    <i class="bi bi-arrow-down"></i>
                                </small>
                            </p>
                            <p class="mb-0 text-secondary size-10">Gardening</p>
                        </div>
                        <div class="swiper-slide text-center">
                            <div class="card bg-opac-50 mb-2">
                                <div class="card-body p-1">
                                    <div class="avatar avatar-70 bg-white text-color-theme rounded-18 shadow-sm">
                                        <i class="bi bi-bag size-24"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mb-1 small">1.5k
                                <small class="text-success ">25.84
                                    <i class="bi bi-arrow-up"></i>
                                </small>
                            </p>
                            <p class="mb-0 text-secondary size-10">shopping</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- upcoming payments -->
        <div class="row mb-3">
            <div class="col">
                <h6 class="title">Upcoming Payments</h6>
            </div>
            <div class="col-auto align-self-center">
                <a href="#" class="small">View all</a>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush bg-none">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="circle-small p-1 shadow-sm shadow-success rounded-circle">
                                            <div id="circleprogressone"></div>
                                        </div>
                                    </div>
                                    <div class="col-4 align-self-center ps-0">
                                        <p class="text-muted size-10 mb-0">Home Loan EMI</p>
                                        <p>1542k</p>
                                    </div>
                                    <div class="col align-self-center">
                                        <p class="text-secondary text-muted size-10 mb-0">Due Date</p>
                                        <p>15-10-2021</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="circle-small p-1 shadow-sm shadow-warning rounded-circle">
                                            <div id="circleprogressfour"></div>
                                        </div>
                                    </div>
                                    <div class="col-4 align-self-center ps-0">
                                        <p class="text-muted size-10 mb-0">Car Loan EMI</p>
                                        <p>536k</p>
                                    </div>
                                    <div class="col align-self-center">
                                        <p class="text-secondary text-muted size-10 mb-0">Due Date</p>
                                        <p>18-10-2021</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- main page content ends -->
@endsection
