@extends('layouts.main')

@section('sidebar')
    @include('layouts.sidebar')

@endsection

@section('content')
<section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
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
                                    <h6 class="text-primary">15</h6>
                                    <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Quis</span>

                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Sales Card -->

                <!-- Sales Card -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Kuisioner <span>| Jumlah Aktif</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-check2"></i>
                                </div>
                                <div class="ps-3">
                                    <h6 class="text-success">10</h6>
                                    <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Quis</span>

                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Sales Card -->

                <!-- Sales Card -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Kuisioner <span>| Jumlah Draft/Non Aktif</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-exclamation"></i>
                                </div>
                                <div class="ps-3">
                                    <h6 class="text-danger">5</h6>
                                    <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Quis</span>

                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Sales Card -->



                <!-- Reports -->
                <div class="col-12">
                    <div class="card">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Active</a></li>
                                <li><a class="dropdown-item" href="#">Non Active</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Kuisioner <span>/ Mari kita isi kuisioner tracer studi untuk menuju unida unggul 2025</span></h5>

                            <div class="container">

                                <a href="#" class="btn btn-primary rounded bg-primary p-1 ms-1 mb-3 ">Buat Kuisioner</a>

                                <div class="row">
                                    
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <img src="https://pbs.twimg.com/media/FMWTDXJVEAExU7y.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Kuisioner Penilaian Dosen</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <a href="#" class="btn btn-primary rounded bg-primary p-1 ms-1">View</a>
                                                <a href="#" class="btn btn-primary rounded bg-primary p-1 ms-1">Edit</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div><!-- End Reports -->

                


            </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Status</h5>

                        <!-- Pie Chart -->
                        <canvas id="pieChart" style="max-height: 400px;"></canvas>
                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                new Chart(document.querySelector('#pieChart'), {
                                    type: 'pie',
                                    data: {
                                        labels: [
                                            'Bekerja (full-time / part-time)',
                                            'wiraswasta',
                                            'melanjutkan pendidikan',
                                            'tidak kerja tetapi sedang mencari kerja',
                                            'belum memungkinkan bekerja',
                                        ],
                                        datasets: [{
                                            label: 'My First Dataset',
                                            data: [300, 50, 100, 40, 120],
                                            backgroundColor: [
                                                'rgb(0, 204, 102)',
                                                'rgb(102, 102, 255)',
                                                'rgb(255, 255, 102)',
                                                'rgb(255, 102, 102)',
                                                'rgb(255, 102, 255)',
                                            ],
                                            hoverOffset: 4
                                        }]
                                    }
                                });
                            });
                        </script>
                        <!-- End Pie CHart -->

                    </div>
                </div>
            </div>

        </div><!-- End Right side columns -->

    </div>
</section>
@endsection