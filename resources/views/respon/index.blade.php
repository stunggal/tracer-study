@extends('layouts.main')

@section('sidebar')
    @include('layouts.sidebar')
@endsection

@section('content')
    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Kuisioner <span>| Jumlah total</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-check2-all"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6 class="text-primary"><?= $sections->count() ?></h6>
                                        <span class="text-success small pt-1 fw-bold"></span> <span
                                            class="text-muted small pt-2 ps-1">Quis</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Kuisioner <span>| Jumlah sudah diisi</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-check2"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6 class="text-success">10</h6>
                                        <span class="text-success small pt-1 fw-bold"></span> <span
                                            class="text-muted small pt-2 ps-1">Quis</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Kuisioner <span>| Jumlah belum diisi</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-exclamation"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6 class="text-danger">5</h6>
                                        <span class="text-success small pt-1 fw-bold"></span> <span
                                            class="text-muted small pt-2 ps-1">Quis</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->



                    <!-- Reports -->
                    <div class="col-12">
                        <div class="card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Done</a></li>
                                    <li><a class="dropdown-item" href="#">Available</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Kuisioner <span>/ Mari kita isi kuisioner tracer studi untuk menuju
                                        unida unggul 2025</span></h5>

                                <div class="container">
                                    <div class="row">

                                        @foreach ($sections as $section)
                                            <div class="col-sm-4">
                                                <div class="card">
                                                    <img src="https://pbs.twimg.com/media/FMWTDXJVEAExU7y.jpg"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $section->nama_section }} :
                                                            {{ $section->keterangan_section }}</h5>
                                                        <p class="card-text">Mari kita isi kuisioner tracer studi untuk
                                                            menuju
                                                            unida unggul 2025</p>
                                                        <a href="/respon/{{ $section->nama_section }}"><span
                                                                class="badge rounded-pill bg-primary p-2 ms-2">Mulai</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>

                            </div>



                        </div>
                    </div><!-- End Reports -->


                </div>
            </div><!-- End Left side columns -->

        </div>
    </section>
@endsection
