@extends('layouts.template')


@section('content')
    <!-- main page content -->
    <div class="main-container container">
        <!-- Balance -->
        <div class="row my-4 text-center">
            <div class="col-12">
                <h1 class="fw-light mb-2">
                    {{ $total ? 'Rp ' . number_format($total, 0, ',', '.') : 'Rp 0' }}
                </h1>
                <p class="text-secondary">Total Balance</p>
            </div>
        </div>

        <!-- Income and Expense -->
        <div class="row mb-4">
            <!-- Card Male -->
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="avatar avatar-40 p-1 shadow-sm shadow-success rounded-15">
                                    <div class="icons bg-success text-white rounded-12">
                                        <i class="bi bi-arrow-down-left"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-self-center ps-0">
                                @foreach ($male_names as $name)
                                    <p class="size-10 text-secondary mb-0">{{ $name }}</p>
                                @endforeach
                                <p>
                                    {{ $total_male > 0 ? 'Rp ' . number_format($total_male, 0, ',', '.') : 'Rp 0' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Female -->
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="avatar avatar-40 p-1 shadow-sm shadow-danger rounded-15">
                                    <div class="icons bg-danger text-white rounded-12">
                                        <i class="bi bi-arrow-up-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-self-center ps-0">
                                @foreach ($female_names as $name)
                                    <p class="size-10 text-secondary mb-0">{{ $name }}</p>
                                @endforeach
                                <p>
                                    {{ $total_female > 0 ? 'Rp ' . number_format($total_female, 0, ',', '.') : 'Rp 0' }}
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!-- categories list -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card bg-theme text-white">
                    <div class="card-body pb-0">
                        <div class="row justify-content-between gx-0 mx-0 pb-3">
                            <div class="col-auto text-center">
                                <a href="/deposit" class="avatar avatar-60 p-1 shadow-sm rounded-15 bg-opac mb-2">
                                    <div class="icons bg-success text-white rounded-12 bg-opac">
                                        <i class="bi bi-credit-card size-22"></i>
                                    </div>
                                </a>
                                <p class="size-10">Deposit</p>
                            </div>

                            <div class="col-auto text-center">
                                <a href="/history" class="avatar avatar-60 p-1 shadow-sm rounded-15 bg-opac mb-2">
                                    <div class="icons bg-success text-white rounded-12 bg-opac">
                                        <i class="bi bi-list-check size-22"></i>
                                    </div>
                                </a>
                                <p class="size-10">Deposit History</p>
                            </div>

                            <div class="col-auto text-center">
                                <a href="#" class="avatar avatar-60 p-1 shadow-sm rounded-15 bg-opac mb-2">
                                    <div class="icons bg-success text-white rounded-12 bg-opac">
                                        <i class="bi bi-bell size-22"></i>
                                    </div>
                                </a>
                                <p class="size-10">Notifications</p>
                            </div>

                            <div class="col-auto text-center">
                                <a href="#" class="avatar avatar-60 p-1 shadow-sm rounded-15 bg-opac mb-2">
                                    <div class="icons bg-success text-white rounded-12 bg-opac">
                                        <i class="bi bi-download size-22"></i>
                                    </div>
                                </a>
                                <p class="size-10">Download</p>
                            </div>
                        </div>

                        <button class="btn btn-link mt-0 py-1 w-100 bar-more collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collpasemorelink" aria-expanded="false"
                            aria-controls="collpasemorelink">
                            <span class=""></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dark mode switch -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="darkmodeswitch" />
                            <label class="form-check-label text-muted px-2" for="darkmodeswitch">Activate Dark Mode</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- My Goals and Targets -->
        <div class="row mb-2">
            <div class="col">
                <h6 class="title">My Goals and Targets</h6>
            </div>
        </div>

        <!-- offers banner -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card theme-bg overflow-hidden">
                    <figure class="m-0 p-0 position-absolute top-0 start-0 w-100 h-100 coverimg right-center-img">
                        <img src="{{ asset('') }}assets/img/offerbg.png" alt="" />
                    </figure>
                    <div class="card-body py-4">
                        <div class="row">
                            <div class="col-9 align-self-center">
                                <h1 class="mb-3">
                                    <span class="fw-light">15% OFF</span><br />GiftCard
                                </h1>
                                <p>
                                    Thank you for spending with us, You have
                                    received Gift Card.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-12 col-md-6 col-lg-4 mb-3">
                <div class="card text-center overflow-hidden">
                    <figure class="m-0 p-0 position-absolute top-0 start-0 w-100 h-100 coverimg">
                        <img src="{{ asset('') }}assets/img/image1.png" alt="" />
                    </figure>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="card text-center shadow-sm">
                                    <div class="card-body">
                                        <div class="avatar avatar-80 rounded-circle shadow-danger shadow-sm p-1 mb-3">
                                            <div id="circlesaving"></div>
                                        </div>
                                        <p class="text-secondary size-10 mb-0">
                                            Dream Car
                                        </p>
                                        <p>
                                            15402k<span class="text-secondary size-10">
                                                Saving</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-center overflow-hidden">
                    <figure class="m-0 p-0 position-absolute top-0 start-0 w-100 h-100 coverimg">
                        <img src="{{ asset('') }}assets/img/image4.jpg" alt="" />
                    </figure>
                    <div class="card-body">
                        <div class="row justify-content-end">
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="card text-center shadow-sm">
                                    <div class="card-body">
                                        <div class="avatar avatar-80 rounded-circle shadow-warning shadow-sm p-1 mb-3">
                                            <div id="circlesaving2"></div>
                                        </div>
                                        <p class="text-secondary size-10 mb-0">
                                            Dream Home
                                        </p>
                                        <p>
                                            55402k<span class="text-secondary size-10">
                                                Saving</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}



    </div>
    <!-- main page content ends -->
@endsection
