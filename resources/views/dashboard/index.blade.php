@extends('layouts.main')

@section('sidebar')
    @include('layouts.sidebar')
@endsection

@section('content')
    <section class="section dashboard">
        <div class="row">

            <!-- section 1 & 2 -->
            <div class="col-md-12">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h1 class="card-title d-flex justify-content-center">SECTION 1 & 2</h1>
                        <div class="d-flex align-items-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title ">Graduation <span>| in Total</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-mortarboard"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>145</h6>
                                        <span class="text-success small pt-1 fw-bold"></span> <span
                                            class="text-muted small pt-2 ps-1">People</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Revenue Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">
                            <div class="card-body">
                                <h5 class="card-title">Registered Users <span>| in Total</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>$3,264</h6>
                                        <span class="text-success small pt-1 fw-bold"></span> <span
                                            class="text-muted small pt-2 ps-1">Users</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Revenue Card -->

                    <!-- Customers Card -->
                    <div class="col-xxl-4 col-xl-12">

                        <div class="card info-card customers-card">
                            <div class="card-body">
                                <h5 class="card-title">Have Filled Out The Form <span>| Users</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-person-check"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>1244</h6>
                                        <span class="text-danger small pt-1 fw-bold"></span> <span
                                            class="text-muted small pt-2 ps-1">People</span>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div><!-- End Customers Card -->

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

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Graduated <span>/ Las 7 Years</span></h5>

                                <!-- Line Chart -->
                                <div id="reportsChart"></div>

                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        new ApexCharts(document.querySelector("#reportsChart"), {
                                            series: [{
                                                name: 'Graduation',
                                                data: [331, 340, 328, 351, 342, 382, 356],
                                            }],
                                            chart: {
                                                height: 350,
                                                type: 'area',
                                                toolbar: {
                                                    show: false
                                                },
                                            },
                                            markers: {
                                                size: 4
                                            },
                                            colors: ['#4154f1'],
                                            fill: {
                                                type: "gradient",
                                                gradient: {
                                                    shadeIntensity: 1,
                                                    opacityFrom: 0.3,
                                                    opacityTo: 0.4,
                                                    stops: [0, 90, 100]
                                                }
                                            },
                                            dataLabels: {
                                                enabled: false
                                            },
                                            stroke: {
                                                curve: 'smooth',
                                                width: 2
                                            },
                                            xaxis: {
                                                type: 'year',
                                                categories: ["2018", "2019",
                                                    "2020", "2021",
                                                    "2022", "2023",
                                                    "2024"
                                                ]
                                            },
                                            tooltip: {
                                                x: {
                                                    format: 'Year'
                                                },
                                            }
                                        }).render();
                                    });
                                </script>
                                <!-- End Line Chart -->

                            </div>

                        </div>
                    </div><!-- End Reports -->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">students per program who have filled out the form</h5>

                                <!-- Line Chart -->
                                <canvas id="lineChart" style="max-height: 400px;"></canvas>
                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        new Chart(document.querySelector('#lineChart'), {
                                            type: 'line',
                                            data: {
                                                labels: ['saa', 'afi', 'iqt', 'pai', 'pba', 'tbi', 'pm', 'hes', 'mnj', 'ei', 'hi',
                                                    'ilkom', 'ti', 'agro', 'tip', 'farmasi', 'gizi', 'kkk'
                                                ],
                                                datasets: [{
                                                    label: 'Line Chart',
                                                    data: [65, 59, 80, 81, 56, 55, 40, 75, 72, 78, 80, 90, 100, 80, 90, 100, 80,
                                                        90, 100,
                                                    ],
                                                    fill: false,
                                                    borderColor: 'rgb(75, 192, 192)',
                                                    tension: 0.1
                                                }]
                                            },
                                            options: {
                                                scales: {
                                                    y: {
                                                        beginAtZero: true
                                                    }
                                                }
                                            }
                                        });
                                    });
                                </script>
                                <!-- End Line CHart -->

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Bar Chart</h5>

                                <!-- Bar Chart -->
                                <div id="barChart" style="min-height: 400px;" class="echart"></div>

                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        echarts.init(document.querySelector("#barChart")).setOption({
                                            xAxis: {
                                                type: 'category',
                                                data: ['1 bulan', '2 bulan', '3 bulan', '4 bulan', '5 bulan',
                                                    '6 bulan', '7 bulan', '8 bulan', '9 bulan', '10 bulan', '11 bulan',
                                                    '12 bulan', '<1 tahun'
                                                ]
                                            },
                                            yAxis: {
                                                type: 'value'
                                            },
                                            series: [{
                                                data: [120, 200, 150, 80, 70, 110, 130, 134, 56, 211, 44, 56, 77],
                                                type: 'bar'
                                            }]
                                        });
                                    });
                                </script>
                                <!-- End Bar Chart -->

                            </div>
                        </div>
                    </div>

                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">

                            <div class="card-body">
                                <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Prodi</th>
                                            <th scope="col">Profesi</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><a href="#">#2457</a></th>
                                            <td>Brandon Jacob</td>
                                            <td>At praesentium minu</td>
                                            <td>$64</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#">#2457</a></th>
                                            <td>Brandon Jacob</td>
                                            <td>At praesentium minu</td>
                                            <td>$64</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#">#2457</a></th>
                                            <td>Brandon Jacob</td>
                                            <td>At praesentium minu</td>
                                            <td>$64</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#">#2457</a></th>
                                            <td>Brandon Jacob</td>
                                            <td>At praesentium minu</td>
                                            <td>$64</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#">#2457</a></th>
                                            <td>Brandon Jacob</td>
                                            <td>At praesentium minu</td>
                                            <td>$64</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Recent Sales -->


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

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Jika belum bekerja, apakah aktif dalam mencari pekerjaan dalam 4
                                minggu terakhir</h5>

                            <!-- Doughnut Chart -->
                            <canvas id="doughnutChart" style="max-height: 400px;"></canvas>
                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    new Chart(document.querySelector('#doughnutChart'), {
                                        type: 'doughnut',
                                        data: {
                                            labels: [
                                                'Tidak',
                                                'Tidak, tapi sedang menunggu hasil lamaran kerja',
                                                'Ya, akan mulai bekerja dalam 2 minggu ke depan',
                                                'Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan',
                                                'sudah bekerja',
                                                'other'
                                            ],
                                            datasets: [{
                                                label: 'My First Dataset',
                                                data: [300, 50, 100, 40, 120, 10],
                                                backgroundColor: [
                                                    'rgb(255, 99, 132)',
                                                    'rgb(54, 162, 235)',
                                                    'rgb(255, 205, 86)',
                                                    'rgb(75, 192, 192)',
                                                    'rgb(153, 102, 255)',
                                                    'rgb(255, 159, 64)',
                                                ],
                                                hoverOffset: 4
                                            }]
                                        }
                                    });
                                });
                            </script>
                            <!-- End Doughnut CHart -->

                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">menunggu mendapatkan pekerjaan dalam hitungan bulan</h5>

                            <!-- Polar Area Chart -->
                            <canvas id="polarAreaChart" style="max-height: 400px;"></canvas>
                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    new Chart(document.querySelector('#polarAreaChart'), {
                                        type: 'polarArea',
                                        data: {
                                            labels: [
                                                'Sebelum lulus (yudisium/wisuda)',
                                                'Setelah lulus (yudisium/wisuda)',
                                            ],
                                            datasets: [{
                                                label: 'My First Dataset',
                                                data: [11, 16, ],
                                                backgroundColor: [
                                                    'rgb(255, 99, 132)',
                                                    'rgb(255, 205, 86)',
                                                ]
                                            }]
                                        }
                                    });
                                });
                            </script>
                            <!-- End Polar Area Chart -->

                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Rata - rata gaji dalam satu bulan</h5>

                            <!-- Polar Area Chart -->
                            <canvas id="ratarata" style="max-height: 400px;"></canvas>
                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    new Chart(document.querySelector('#ratarata'), {
                                        type: 'polarArea',
                                        data: {
                                            labels: [
                                                'Kurang dari Rp 2.000.000,-',
                                                'Lebih dari 2.000.000,-',
                                            ],
                                            datasets: [{
                                                label: 'My First Dataset',
                                                data: [11, 16, ],
                                                backgroundColor: [
                                                    'rgb(255, 205, 86)',
                                                    'rgb(255, 99, 132)',
                                                ]
                                            }]
                                        }
                                    });
                                });
                            </script>
                            <!-- End Polar Area Chart -->

                        </div>
                    </div>
                </div>

                <div class="row">


                </div>

            </div><!-- End Right side columns -->

            <!-- section 3 -->
            <div class="col-md-12">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h1 class="card-title d-flex justify-content-center">SECTION 3</h1>
                        <div class="d-flex align-items-center">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
