@extends('layouts.main')

@section('sidebar')
    @include('layouts.sidebar')
@endsection

@section('content')
    <section class="section dashboard">
        <div class="row">


            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-12">
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
            <div class="col-xxl-4 col-md-12">
                <div class="card info-card revenue-card">
                    <div class="card-body">
                        <h5 class="card-title">Registered Users <span>| in Total</span></h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-people"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $dataArray['data_registeredUser'] }}</h6>
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
                                <h6>{{ $dataArray['data_haveFilledOutTheForm'] }}</h6>
                                <span class="text-danger small pt-1 fw-bold"></span> <span
                                    class="text-muted small pt-2 ps-1">People</span>

                            </div>
                        </div>

                    </div>
                </div>

            </div><!-- End Customers Card -->
        </div>

        @foreach ($sections as $section)
            <!-- section 1 & 2 -->
            <div class="col-md-12">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h1 class="card-title d-flex justify-content-center">SECTION {{ $section->nama_section }}
                            : {{ $section->keterangan_section }}</h1>
                        <div class="d-flex align-items-center">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">



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
                                                data: [
                                                    @foreach ($dataArray['data_graduated_value'] as $item)
                                                        {{ $item }},
                                                    @endforeach
                                                ],
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
                                                categories: [
                                                    @foreach ($dataArray['data_graduated_tahun'] as $item)
                                                        {{ $item }},
                                                    @endforeach
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
                                                    data: [
                                                        @foreach ($dataArray['dataYangUdahNgisiFormPerProdi'] as $item)
                                                            {{ $item }},
                                                        @endforeach
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

            <!-- Right side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Recent Sales -->
                    <div class="col-4">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                                <h5 class="card-title">Profesi saat ini</h5>
                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Customer</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Brandon Jacob</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bridie Kessler</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ashleigh Langosh</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Angus Grady</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Raheem Lehner</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- End Recent Sales -->

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Apa posisi/jabatan pada saat ini (wiraswasta)
                                </h5>

                                <!-- Pie Chart -->
                                <canvas id="posisi" style="max-height: 400px;"></canvas>
                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        new Chart(document.querySelector('#posisi'), {
                                            type: 'pie',
                                            data: {
                                                labels: [
                                                    'Founder',
                                                    'Co-Founder',
                                                    'Staff',
                                                    'freelance/kerja lepas',
                                                ],
                                                datasets: [{
                                                    label: 'My First Dataset',
                                                    data: [300, 50, 100, 40],
                                                    backgroundColor: [
                                                        'rgb(255, 99, 132)',
                                                        'rgb(54, 162, 235)',
                                                        'rgb(255, 205, 86)',
                                                        'rgb(75, 192, 192)',
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

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Sebutkan sumber dana pembiayaan kuliah</h5>

                                <!-- Donut Chart -->
                                <div id="donutChart" style="min-height: 400px;" class="echart"></div>

                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        echarts.init(document.querySelector("#donutChart")).setOption({
                                            tooltip: {
                                                trigger: 'item'
                                            },
                                            legend: {
                                                top: '5%',
                                                left: 'center'
                                            },
                                            series: [{
                                                name: 'Dana',
                                                type: 'pie',
                                                radius: ['40%', '70%'],
                                                avoidLabelOverlap: false,
                                                label: {
                                                    show: false,
                                                    position: 'center'
                                                },
                                                emphasis: {
                                                    label: {
                                                        show: true,
                                                        fontSize: '18',
                                                        fontWeight: 'bold'
                                                    }
                                                },
                                                labelLine: {
                                                    show: false
                                                },
                                                data: [{
                                                        value: 1048,
                                                        name: 'Biaya Sendiri'
                                                    },
                                                    {
                                                        value: 735,
                                                        name: 'Beasiswa'
                                                    },
                                                    {
                                                        value: 580,
                                                        name: 'Tidak mengambil studi lanjut'
                                                    },
                                                ]
                                            }]
                                        });
                                    });
                                </script>
                                <!-- End Donut Chart -->

                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- End Right side columns -->

            <!-- Right side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Recent Sales -->
                    <div class="col-4">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                                <h5 class="card-title">Nama Perguruan Tinggi Lanjut</h5>
                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Customer</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Brandon Jacob</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bridie Kessler</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ashleigh Langosh</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Angus Grady</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Raheem Lehner</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- End Recent Sales -->

                    <!-- Recent Sales -->
                    <div class="col-4">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                                <h5 class="card-title">program studi lanjut</h5>
                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Customer</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Brandon Jacob</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bridie Kessler</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ashleigh Langosh</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Angus Grady</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Raheem Lehner</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- End Recent Sales -->

                    <!-- Recent Sales -->
                    <div class="col-4">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                                <h5 class="card-title">Sumber dana dalam pembiayaan kuliah (bukan ketika Studi Lanjut)</h5>
                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Customer</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Brandon Jacob</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bridie Kessler</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ashleigh Langosh</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Angus Grady</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Raheem Lehner</td>
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

            <!-- Right side columns -->
            <div class="col-lg-12">
                <div class="row">


                    <!-- Recent Sales -->
                    <div class="col-6">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                                <h5 class="card-title">nama instansi/institusi/perusahaan tempat berkerja saat ini</h5>
                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Customer</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Brandon Jacob</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bridie Kessler</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ashleigh Langosh</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Angus Grady</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Raheem Lehner</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- End Recent Sales -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"> lokasi tempat bekerja saat ini (Propinsi & Kota) berdasarkan
                                    nomenklatur propinsi dan kabupaten dari diktiristek</h5>
                                <!-- Polar Area Chart -->
                                <canvas id="lokasi" style="max-height: 400px;"></canvas>
                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        new Chart(document.querySelector('#lokasi'), {
                                            type: 'polarArea',
                                            data: {
                                                labels: [
                                                    'Propinsi',
                                                    'Kota',
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

                </div>
            </div>

            <div class="col-lg-12">
                <div class="row">


                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Tingkat tempat kerja saat ini</h5>
                                <!-- Polar Area Chart -->
                                <canvas id="tingkat" style="max-height: 400px;"></canvas>
                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        new Chart(document.querySelector('#tingkat'), {
                                            type: 'polarArea',
                                            data: {
                                                labels: [
                                                    'Lokal/ Wilayah/ Wirausaha tidak berbadan hukum',
                                                    'Nasional/ Wirausaha berbadan hukum',
                                                    'Internasional'
                                                ],
                                                datasets: [{
                                                    label: 'My First Dataset',
                                                    data: [11, 16, 7],
                                                    backgroundColor: [
                                                        'rgb(255, 99, 132)',
                                                        'rgb(75, 192, 192)',
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

                    <!-- Recent Sales -->
                    <div class="col-6">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                                <h5 class="card-title">Jenis perusahaan/instansi/institusi tempat bekerja sekarang</h5>
                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Customer</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Brandon Jacob</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bridie Kessler</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ashleigh Langosh</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Angus Grady</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Raheem Lehner</td>
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
            </div><!-- End Right side columns -->

            <!-- section 5 -->
            <div class="col-md-12">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h1 class="card-title d-flex justify-content-center">SECTION 5</h1>
                        <div class="d-flex align-items-center">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">hubungan antara bidang studi dengan pekerjaan</h5>
                                <!-- Pie Chart -->
                                <div id="hubungan" style="min-height: 400px;" class="echart"></div>
                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        echarts.init(document.querySelector("#hubungan")).setOption({
                                            title: {
                                                text: ' ',
                                                subtext: ' ',
                                                left: 'center'
                                            },
                                            tooltip: {
                                                trigger: 'item'
                                            },
                                            legend: {
                                                orient: 'vertical',
                                                left: 'left'
                                            },
                                            series: [{
                                                name: 'hubungan antara bidang studi dengan pekerjaan',
                                                type: 'pie',
                                                radius: '50%',
                                                data: [{
                                                        value: 1048,
                                                        name: 'Sangat erat'
                                                    },
                                                    {
                                                        value: 735,
                                                        name: 'Erat'
                                                    },
                                                    {
                                                        value: 580,
                                                        name: 'Cukup erat'
                                                    },
                                                    {
                                                        value: 484,
                                                        name: 'Kurang erat'
                                                    },
                                                    {
                                                        value: 300,
                                                        name: 'tidak sama sekali'
                                                    }
                                                ],
                                                emphasis: {
                                                    itemStyle: {
                                                        shadowBlur: 10,
                                                        shadowOffsetX: 0,
                                                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                                                    }
                                                }
                                            }]
                                        });
                                    });
                                </script>
                                <!-- End Pie Chart -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">tingkat kesesuaian pendidikan dengan pekerjaan</h5>
                                <!-- Donut Chart -->
                                <div id="kesesuaian" style="min-height: 400px;" class="echart"></div>
                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        echarts.init(document.querySelector("#kesesuaian")).setOption({
                                            tooltip: {
                                                trigger: 'item'
                                            },
                                            legend: {
                                                top: '5%',
                                                left: 'center'
                                            },
                                            series: [{
                                                name: 'tingkat kesesuaian pendidikan dengan pekerjaan',
                                                type: 'pie',
                                                radius: ['40%', '70%'],
                                                avoidLabelOverlap: false,
                                                label: {
                                                    show: false,
                                                    position: 'center'
                                                },
                                                emphasis: {
                                                    label: {
                                                        show: true,
                                                        fontSize: '18',
                                                        fontWeight: 'bold'
                                                    }
                                                },
                                                labelLine: {
                                                    show: false
                                                },
                                                data: [{
                                                        value: 1048,
                                                        name: 'Setingkat Lebih Tinggi'
                                                    },
                                                    {
                                                        value: 735,
                                                        name: 'Tingkat yang Sama (Sesuai)'
                                                    },
                                                    {
                                                        value: 580,
                                                        name: 'Setingkat Lebih Rendah'
                                                    },
                                                    {
                                                        value: 484,
                                                        name: 'Tidak Perlu Pendidikan Tinggi'
                                                    }
                                                ]
                                            }]
                                        });
                                    });
                                </script>
                                <!-- End Donut Chart -->

                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Right side columns -->

            <!-- section 6 -->
            <div class="col-md-12">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h1 class="card-title d-flex justify-content-center">SECTION 6</h1>
                        <div class="d-flex align-items-center">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Mulai mencari pekerjaan</h5>
                                <!-- Doughnut Chart -->
                                <canvas id="mulaiMencariPekerjaan" style="max-height: 400px;"></canvas>
                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        new Chart(document.querySelector('#mulaiMencariPekerjaan'), {
                                            type: 'doughnut',
                                            data: {
                                                labels: [
                                                    'Sebelum lulus (yudisium/wisuda)',
                                                    'Sesudah lulus (yudisium/wisuda)',
                                                    'Saya tidak mencari kerja'
                                                ],
                                                datasets: [{
                                                    label: 'My First Dataset',
                                                    data: [300, 50, 100],
                                                    backgroundColor: [
                                                        'rgb(255, 99, 132)',
                                                        'rgb(54, 162, 235)',
                                                        'rgb(255, 205, 86)'
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

                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">berapa bulan mulai mencari pekerjaan</h5>
                                <!-- Bar Chart -->
                                <canvas id="mulaiMencariPekerjaanBulan" style="max-height: 400px;"></canvas>
                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        new Chart(document.querySelector('#mulaiMencariPekerjaanBulan'), {
                                            type: 'bar',
                                            data: {
                                                labels: ['1 Bulan', '2 Bulan', '3 Bulan', '4 Bulan', '5 Bulan', '6 Bulan', '7 Bulan',
                                                    '8 Bulan', '9 Bulan', '10 Bulan', '11 Bulan', '12 Bulan'
                                                ],
                                                datasets: [{
                                                    label: 'lulusan',
                                                    data: [65, 59, 80, 81, 56, 55, 40, 40, 40, 40, 40, 40],
                                                    backgroundColor: [
                                                        'rgba(255, 99, 132, 0.2)',
                                                        'rgba(255, 159, 64, 0.2)',
                                                        'rgba(255, 205, 86, 0.2)',
                                                        'rgba(75, 192, 192, 0.2)',
                                                        'rgba(54, 162, 235, 0.2)',
                                                        'rgba(153, 102, 255, 0.2)',
                                                        'rgba(201, 203, 207, 0.2)',
                                                        'rgba(255, 206, 86, 0.2)',
                                                        'rgba(75, 192, 192, 0.2)',
                                                        'rgba(153, 102, 255, 0.2)',
                                                        'rgba(255, 159, 64, 0.2)',
                                                        'rgba(255, 99, 132, 0.2)',
                                                    ],
                                                    borderColor: [
                                                        'rgb(255, 99, 132)',
                                                        'rgb(255, 159, 64)',
                                                        'rgb(255, 205, 86)',
                                                        'rgb(75, 192, 192)',
                                                        'rgb(54, 162, 235)',
                                                        'rgb(153, 102, 255)',
                                                        'rgb(201, 203, 207)',
                                                        'rgb(255, 206, 86)',
                                                        'rgb(75, 192, 192)',
                                                        'rgb(153, 102, 255)',
                                                        'rgb(255, 159, 64)',
                                                        'rgb(255, 99, 132)',
                                                    ],
                                                    borderWidth: 1
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
                                <!-- End Bar CHart -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Bagaimana cara mencari pekerjaan</h5>
                                <!-- Polar Area Chart -->
                                <canvas id="caraMencariPekerjaan" style="max-height: 400px;"></canvas>
                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        new Chart(document.querySelector('#caraMencariPekerjaan'), {
                                            type: 'pie',
                                            data: {
                                                labels: [
                                                    'Melalui iklan di koran/majalah, brosur',
                                                    'Melamar ke perusahaan tanpa mengetahui lowongan yang ada',
                                                    'Pergi ke bursa/pameran kerja',
                                                    'Mencari lewat internet/iklan online/milis',
                                                    'Dihubungi oleh perusahaan',
                                                    'Menghubungi Kemenakertrans',
                                                    'Menghubungi agen tenaga kerja komersial/swasta',
                                                    'Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas',
                                                    'Menghubungi kantor kemahasiswaan/hubungan alumni',
                                                    'Membangun jejaring (network) sejak masih kuliah',
                                                    'Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)',
                                                    'Membangun bisnis sendiri',
                                                    'Melalui penempatan kerja atau magang',
                                                    'Bekerja di tempat yang sama dengan tempat kerja semasa kuliah',
                                                    'lainnya'
                                                ],
                                                datasets: [{
                                                    label: 'My First Dataset',
                                                    data: [11, 16, 7, 3, 14, 3, 5, 2, 3, 4, 5, 2, 23, 7, 22],
                                                    backgroundColor: [
                                                        'rgb(255, 99, 132)',
                                                        'rgb(75, 192, 192)',
                                                        'rgb(255, 205, 86)',
                                                        'rgb(201, 203, 207)',
                                                        'rgb(54, 162, 235)',
                                                        'rgb(153, 102, 255)',
                                                        'rgb(255, 159, 64)',
                                                        'rgb(255, 99, 132)',
                                                        'rgb(255, 159, 64)',
                                                        'rgb(255, 99, 132)',
                                                        'rgb(255, 159, 64)',
                                                        'rgb(255, 99, 132)',
                                                        'rgb(255, 159, 64)',
                                                        'rgb(255, 99, 132)',
                                                        'rgb(255, 159, 64)',
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

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Jumlah perusahaan</h5>
                                <!-- Radar Chart -->
                                <canvas id="jumlahPerusahaan" style="max-height: 400px;"></canvas>
                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        new Chart(document.querySelector('#jumlahPerusahaan'), {
                                            type: 'radar',
                                            data: {
                                                labels: [
                                                    '1 perusahaan',
                                                    '2 perusahaan',
                                                    '3 perusahaan',
                                                    '4 perusahaan',
                                                    '5 perusahaan',
                                                    '6 perusahaan',
                                                    '6 perusahaan lebih',
                                                ],
                                                datasets: [{
                                                    label: 'perusahaan/instansi/institusi yang sudah dilamar (lewat surat atau e-mail) sebelum memeroleh pekerjaan pertama',
                                                    data: [65, 59, 90, 81, 56, 55, 40],
                                                    fill: true,
                                                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                                    borderColor: 'rgb(255, 99, 132)',
                                                    pointBackgroundColor: 'rgb(255, 99, 132)',
                                                    pointBorderColor: '#fff',
                                                    pointHoverBackgroundColor: '#fff',
                                                    pointHoverBorderColor: 'rgb(255, 99, 132)'
                                                }, {
                                                    label: 'perusahaan/instansi/institusi yang sudah dilamar (secara langsung/surat/e-mail) sebelum memperoleh pekerjaan pertama',
                                                    data: [28, 48, 40, 19, 96, 27, 100],
                                                    fill: true,
                                                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                                                    borderColor: 'rgb(54, 162, 235)',
                                                    pointBackgroundColor: 'rgb(54, 162, 235)',
                                                    pointBorderColor: '#fff',
                                                    pointHoverBackgroundColor: '#fff',
                                                    pointHoverBorderColor: 'rgb(54, 162, 235)'
                                                }, {
                                                    label: 'banyak perusahaan/instansi/institusi yang merespon lamaran/mengundang untuk wawancara',
                                                    data: [40, 20, 19, 61, 10, 20, 30],
                                                    fill: true,
                                                    backgroundColor: 'rgba(255, 205, 86, 0.2)',
                                                    borderColor: 'rgb(255, 205, 86)',
                                                    pointBackgroundColor: 'rgb(255, 205, 86)',
                                                    pointBorderColor: '#fff',
                                                    pointHoverBackgroundColor: '#fff',
                                                    pointHoverBorderColor: 'rgb(255, 205, 86)'
                                                }]
                                            },
                                            options: {
                                                elements: {
                                                    line: {
                                                        borderWidth: 3
                                                    }
                                                }
                                            }
                                        });
                                    });
                                </script>
                                <!-- End Radar CHart -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Jika pekerjaan tidak sesuai dengan disiplin ilmu yang ditekuni,
                                    mengapa mengambilnya</h5>
                                <!-- Bar Chart -->
                                <canvas id="pekerjaanTidakSesuai" style="max-height: 400px;"></canvas>
                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        new Chart(document.querySelector('#pekerjaanTidakSesuai'), {
                                            type: 'bar',
                                            data: {
                                                labels: ['Pekerjaan saya sekarang sudah sesuai dengan pendidikan saya.',
                                                    'Saya belum mendapatkan pekerjaan yang lebih sesuai.',
                                                    'Di pekerjaan ini saya memeroleh prospek karir yang baik.',
                                                    'Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya.',
                                                    'Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya.',
                                                    'Saya dapat memeroleh pendapatan yang lebih tinggi di pekerjaan ini.',
                                                    'Pekerjaan saya saat ini lebih aman/terjamin/secure',
                                                    'Pekerjaan saya saat ini lebih menarik',
                                                    'Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll.',
                                                    'Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya.',
                                                    'Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya.',
                                                    'Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya.',
                                                    'lainnya'
                                                ],
                                                datasets: [{
                                                    label: 'lulusan',
                                                    data: [65, 59, 80, 81, 56, 55, 40, 40, 40, 40, 40, 40, 50],
                                                    backgroundColor: [
                                                        'rgba(255, 99, 132, 0.2)',
                                                        'rgba(255, 159, 64, 0.2)',
                                                        'rgba(255, 205, 86, 0.2)',
                                                        'rgba(75, 192, 192, 0.2)',
                                                        'rgba(54, 162, 235, 0.2)',
                                                        'rgba(153, 102, 255, 0.2)',
                                                        'rgba(201, 203, 207, 0.2)',
                                                        'rgba(255, 206, 86, 0.2)',
                                                        'rgba(75, 192, 192, 0.2)',
                                                        'rgba(153, 102, 255, 0.2)',
                                                        'rgba(255, 159, 64, 0.2)',
                                                        'rgba(255, 99, 132, 0.2)',
                                                        'rgba(255, 99, 132, 0.2)',
                                                    ],
                                                    borderColor: [
                                                        'rgb(255, 99, 132)',
                                                        'rgb(255, 159, 64)',
                                                        'rgb(255, 205, 86)',
                                                        'rgb(75, 192, 192)',
                                                        'rgb(54, 162, 235)',
                                                        'rgb(153, 102, 255)',
                                                        'rgb(201, 203, 207)',
                                                        'rgb(255, 206, 86)',
                                                        'rgb(75, 192, 192)',
                                                        'rgb(153, 102, 255)',
                                                        'rgb(255, 159, 64)',
                                                        'rgb(255, 99, 132)',
                                                        'rgb(255, 99, 132)',
                                                    ],
                                                    borderWidth: 1
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
                                <!-- End Bar CHart -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Pada SAAT LULUS, pada tingkat mana kompetensi yang dikuasai</h5>
                                <!-- Line Chart -->
                                <canvas id="kompetensiYangDikuasai" style="max-height: 400px;"></canvas>
                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        new Chart(document.querySelector('#kompetensiYangDikuasai'), {
                                            type: 'line',
                                            data: {
                                                labels: ['Sangat tinggi', 'Tiggi', 'Cukup', 'Rendah', 'Sangat rendah', ],
                                                // random data and border color
                                                datasets: [{
                                                    label: 'Problem Solving (Mampu menganalisis dan memecahkan permasalahan)',
                                                    data: [65, 59, 80, 81, 56, ],
                                                    fill: false,
                                                    borderColor: 'rgb(75, 192, 192)',
                                                    tension: 0.1
                                                }, {
                                                    label: 'Berpikir kritis/Critical Thinking',
                                                    data: [59, 65, 70, 60, 35, ],
                                                    fill: false,
                                                    borderColor: 'rgb(255, 99, 132)',
                                                    tension: 0.1
                                                }, {
                                                    label: 'Kreatifitas',
                                                    data: [12, 20, 10, 15, 5, ],
                                                    fill: false,
                                                    borderColor: 'rgb(255, 159, 64)',
                                                    tension: 0.1
                                                }, {
                                                    label: 'Manajemen SDM/People Management',
                                                    data: [20, 10, 15, 5, 10, ],
                                                    fill: false,
                                                    borderColor: 'rgb(255, 205, 86)',
                                                    tension: 0.1
                                                }, {
                                                    label: 'Kerjasama Tim/Coordinating with Other',
                                                    data: [10, 5, 15, 10, 5, ],
                                                    fill: false,
                                                    borderColor: 'rgb(255,0,0)',
                                                    tension: 0.1
                                                }, {
                                                    label: 'Kecerdasan Emosional (Mampu mengontrol relasi dan empati interpersonal)',
                                                    data: [5, 10, 15, 10, 5, ],
                                                    fill: false,
                                                    borderColor: 'rgb(0,255,0)',
                                                    tension: 0.1
                                                }, {
                                                    label: 'Orientasi Pelayanan/Service Orientation ',
                                                    data: [5, 10, 15, 10, 5, ],
                                                    fill: false,
                                                    borderColor: 'rgb(0,0,255)',
                                                    tension: 0.1
                                                }, {
                                                    label: 'Negoisasi/Negoitation ',
                                                    data: [5, 10, 15, 10, 5, ],
                                                    fill: false,
                                                    borderColor: 'rgb(255,255,0)',
                                                    tension: 0.1
                                                }, {
                                                    label: 'Keterbukaan/Cognitive Flexibility ',
                                                    data: [80, 81, 56, 55, 40, ],
                                                    fill: false,
                                                    borderColor: 'rgb(0,255,255)',
                                                    tension: 0.1
                                                }, {
                                                    label: 'Etika ',
                                                    data: [80, 81, 56, 55, 40, ],
                                                    fill: false,
                                                    borderColor: 'rgb(255,0,255)',
                                                    tension: 0.1
                                                }, {
                                                    label: 'Keahlian Bidang Ilmu ',
                                                    data: [80, 81, 56, 55, 40, ],
                                                    fill: false,
                                                    borderColor: 'rgb(192,192,192)',
                                                    tension: 0.1
                                                }, {
                                                    label: 'Bahasa Asing ',
                                                    data: [80, 81, 56, 55, 40, ],
                                                    fill: false,
                                                    borderColor: 'rgb(128,128,128)',
                                                    tension: 0.1
                                                }, {
                                                    label: 'Teknologi Informasi (Office tools, software, cloud storage, mailing service, dll) ',
                                                    data: [80, 81, 56, 55, 40, ],
                                                    fill: false,
                                                    borderColor: 'rgb(128,0,0)',
                                                    tension: 0.1
                                                }, {
                                                    label: 'Komunikasi ',
                                                    data: [80, 81, 56, 55, 40, ],
                                                    fill: false,
                                                    borderColor: 'rgb(128,128,0)',
                                                    tension: 0.1
                                                }, {
                                                    label: 'Pengembangan Diri (Potensi, bakat, sikap, prilaku, dan kepribadian) ',
                                                    data: [80, 81, 56, 55, 40, ],
                                                    fill: false,
                                                    borderColor: 'rgb(0,128,0)',
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

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Pada SAAT LULUS, pada tingkat mana kompetensi yang dikuasai</h5>
                                <!-- Line Chart -->
                                <canvas id="kompetensiYangDiperlukanDalamPekerjaan" style="max-height: 400px;"></canvas>
                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        new Chart(document.querySelector('#kompetensiYangDiperlukanDalamPekerjaan'), {
                                            type: 'line',
                                            data: {
                                                labels: ['Sangat tinggi', 'Tiggi', 'Cukup', 'Rendah', 'Sangat rendah', ],
                                                // random data and border color
                                                datasets: [{
                                                    label: 'Problem Solving (Mampu menganalisis dan memecahkan permasalahan)',
                                                    data: [65, 59, 80, 81, 56, ],
                                                    fill: false,
                                                    borderColor: 'rgb(75, 192, 192)',
                                                    tension: 0.1
                                                }, {
                                                    label: 'Berpikir kritis/Critical Thinking',
                                                    data: [59, 65, 70, 60, 35, ],
                                                    fill: false,
                                                    borderColor: 'rgb(255, 99, 132)',
                                                    tension: 0.1
                                                }, {
                                                    label: 'Kreatifitas',
                                                    data: [12, 20, 10, 15, 5, ],
                                                    fill: false,
                                                    borderColor: 'rgb(255, 159, 64)',
                                                    tension: 0.1
                                                }, {
                                                    label: 'Manajemen SDM/People Management',
                                                    data: [20, 10, 15, 5, 10, ],
                                                    fill: false,
                                                    borderColor: 'rgb(255, 205, 86)',
                                                    tension: 0.1
                                                }, {
                                                    label: 'Kerjasama Tim/Coordinating with Other',
                                                    data: [10, 5, 15, 10, 5, ],
                                                    fill: false,
                                                    borderColor: 'rgb(255,0,0)',
                                                    tension: 0.1
                                                }, {
                                                    label: 'Kecerdasan Emosional (Mampu mengontrol relasi dan empati interpersonal)',
                                                    data: [5, 10, 15, 10, 5, ],
                                                    fill: false,
                                                    borderColor: 'rgb(0,255,0)',
                                                    tension: 0.1
                                                }, {
                                                    label: 'Orientasi Pelayanan/Service Orientation ',
                                                    data: [5, 10, 15, 10, 5, ],
                                                    fill: false,
                                                    borderColor: 'rgb(0,0,255)',
                                                    tension: 0.1
                                                }, {
                                                    label: 'Negoisasi/Negoitation ',
                                                    data: [5, 10, 15, 10, 5, ],
                                                    fill: false,
                                                    borderColor: 'rgb(255,255,0)',
                                                    tension: 0.1
                                                }, {
                                                    label: 'Keterbukaan/Cognitive Flexibility ',
                                                    data: [80, 81, 56, 55, 40, ],
                                                    fill: false,
                                                    borderColor: 'rgb(0,255,255)',
                                                    tension: 0.1
                                                }, {
                                                    label: 'Etika ',
                                                    data: [80, 81, 56, 55, 40, ],
                                                    fill: false,
                                                    borderColor: 'rgb(255,0,255)',
                                                    tension: 0.1
                                                }, {
                                                    label: 'Keahlian Bidang Ilmu ',
                                                    data: [80, 81, 56, 55, 40, ],
                                                    fill: false,
                                                    borderColor: 'rgb(192,192,192)',
                                                    tension: 0.1
                                                }, {
                                                    label: 'Bahasa Asing ',
                                                    data: [80, 81, 56, 55, 40, ],
                                                    fill: false,
                                                    borderColor: 'rgb(128,128,128)',
                                                    tension: 0.1
                                                }, {
                                                    label: 'Teknologi Informasi (Office tools, software, cloud storage, mailing service, dll) ',
                                                    data: [80, 81, 56, 55, 40, ],
                                                    fill: false,
                                                    borderColor: 'rgb(128,0,0)',
                                                    tension: 0.1
                                                }, {
                                                    label: 'Komunikasi ',
                                                    data: [80, 81, 56, 55, 40, ],
                                                    fill: false,
                                                    borderColor: 'rgb(128,128,0)',
                                                    tension: 0.1
                                                }, {
                                                    label: 'Pengembangan Diri (Potensi, bakat, sikap, prilaku, dan kepribadian) ',
                                                    data: [80, 81, 56, 55, 40, ],
                                                    fill: false,
                                                    borderColor: 'rgb(0,128,0)',
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

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Metode pembelajaran</h5>
                                <!-- Line Chart -->
                                <canvas id="metodePembelajaran" style="max-height: 400px;"></canvas>
                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        new Chart(document.querySelector('#metodePembelajaran'), {
                                            type: 'line',
                                            data: {
                                                labels: ['Sangat besar', 'Besar', 'Cukup besar', 'Kurang', 'Tidak sama sekali', ],
                                                datasets: [{
                                                    label: 'Perkuliahan',
                                                    data: [65, 59, 80, 81, 56, ],
                                                    fill: false,
                                                    borderColor: 'rgb(38, 168, 229)',
                                                    tension: 0.1
                                                }, {
                                                    label: 'Demonstrasi',
                                                    data: [65, 59, 80, 81, 56, ],
                                                    fill: false,
                                                    borderColor: 'rgb(191, 103, 189)',
                                                    tension: 0.1
                                                }, {
                                                    label: 'Partisipasi dalam proyek riset',
                                                    data: [65, 59, 80, 81, 56, ],
                                                    fill: false,
                                                    borderColor: 'rgb(152, 77, 107)',
                                                    tension: 0.1
                                                }, {
                                                    label: 'Magang',
                                                    data: [65, 59, 80, 81, 56, ],
                                                    fill: false,
                                                    borderColor: 'rgb(32, 157, 4)',
                                                    tension: 0.1
                                                }, {
                                                    label: 'Praktikum',
                                                    data: [65, 59, 80, 81, 56, ],
                                                    fill: false,
                                                    borderColor: 'rgb(79, 236, 148)',
                                                    tension: 0.1
                                                }, {
                                                    label: 'Kerja lapangan',
                                                    data: [65, 59, 80, 81, 56, ],
                                                    fill: false,
                                                    borderColor: 'rgb(142, 143, 94)',
                                                    tension: 0.1
                                                }, {
                                                    label: 'Diskusi',
                                                    data: [65, 59, 80, 81, 56, ],
                                                    fill: false,
                                                    borderColor: 'rgb(132, 4, 66)',
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

                </div>
            </div><!-- End Right side columns -->

            <!-- section 7 -->
            <div class="col-md-12">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h1 class="card-title d-flex justify-content-center">SECTION 7</h1>
                        <div class="d-flex align-items-center">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Kegiatan yang berpengaruh pada pekerjaan</h5>
                                <!-- Pie Chart -->
                                <div id="kegiatanYangBerpengaruh" style="min-height: 400px;" class="echart"></div>
                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        echarts.init(document.querySelector("#kegiatanYangBerpengaruh")).setOption({
                                            title: {
                                                text: ' ',
                                                subtext: ' ',
                                                left: 'center'
                                            },
                                            tooltip: {
                                                trigger: 'item'
                                            },
                                            legend: {
                                                orient: 'vertical',
                                                left: 'left'
                                            },
                                            series: [{
                                                name: 'Kegiatan yang berpengaruh pada pekerjaan',
                                                type: 'pie',
                                                radius: '50%',
                                                data: [{
                                                        value: 1048,
                                                        name: 'Perkuliahan'
                                                    },
                                                    {
                                                        value: 735,
                                                        name: 'Praktikum/Penelitian'
                                                    },
                                                    {
                                                        value: 580,
                                                        name: 'Pengabdian Masyarakat'
                                                    },
                                                    {
                                                        value: 484,
                                                        name: 'Diskusi Islamisasi'
                                                    },
                                                    {
                                                        value: 300,
                                                        name: "Tahfizh al Qur'an"
                                                    },
                                                    {
                                                        value: 600,
                                                        name: "Kegiatan Kebahasaan"
                                                    },
                                                    {
                                                        value: 267,
                                                        name: "UKM"
                                                    },
                                                    {
                                                        value: 592,
                                                        name: "Lainnya"
                                                    }
                                                ],
                                                emphasis: {
                                                    itemStyle: {
                                                        shadowBlur: 10,
                                                        shadowOffsetX: 0,
                                                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                                                    }
                                                }
                                            }]
                                        });
                                    });
                                </script>
                                <!-- End Pie Chart -->
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                                <h5 class="card-title">Mata kuliah apa yang paling dibutuhkan oleh pekerjaan pada saat ini
                                </h5>
                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Customer</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Brandon Jacob</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bridie Kessler</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ashleigh Langosh</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Angus Grady</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Raheem Lehner</td>
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
            </div><!-- End Right side columns -->

            <!-- section 8 -->
            <div class="col-md-12">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h1 class="card-title d-flex justify-content-center">SECTION 8</h1>
                        <div class="d-flex align-items-center">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">kecukupan dan ketersediaan sarana dan prasarana yang ada di UNIDA
                                    Gontor
                                </h5>
                                <!-- Donut Chart -->
                                <div id="ketersediaanSarana" style="min-height: 400px;" class="echart"></div>
                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        echarts.init(document.querySelector("#ketersediaanSarana")).setOption({
                                            tooltip: {
                                                trigger: 'item'
                                            },
                                            legend: {
                                                top: '5%',
                                                left: 'center'
                                            },
                                            series: [{
                                                name: 'Keadaan sarana dan prasarana',
                                                type: 'pie',
                                                radius: ['40%', '70%'],
                                                avoidLabelOverlap: false,
                                                label: {
                                                    show: false,
                                                    position: 'center'
                                                },
                                                emphasis: {
                                                    label: {
                                                        show: true,
                                                        fontSize: '18',
                                                        fontWeight: 'bold'
                                                    }
                                                },
                                                labelLine: {
                                                    show: false
                                                },
                                                data: [{
                                                        value: 1048,
                                                        name: 'Sangat Cukup'
                                                    },
                                                    {
                                                        value: 735,
                                                        name: 'Cukup'
                                                    },
                                                    {
                                                        value: 580,
                                                        name: 'Kurang Cukup'
                                                    }
                                                ]
                                            }]
                                        });
                                    });
                                </script>
                                <!-- End Donut Chart -->

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Kelayakan sarana dan prasarana yang tersedia di UNIDA Gontor
                                </h5>
                                <!-- Donut Chart -->
                                <div id="kelayakanSarana" style="min-height: 400px;" class="echart"></div>
                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        echarts.init(document.querySelector("#kelayakanSarana")).setOption({
                                            tooltip: {
                                                trigger: 'item'
                                            },
                                            legend: {
                                                top: '5%',
                                                left: 'center'
                                            },
                                            series: [{
                                                name: 'Keadaan sarana dan prasarana',
                                                type: 'pie',
                                                radius: ['40%', '70%'],
                                                avoidLabelOverlap: false,
                                                label: {
                                                    show: false,
                                                    position: 'center'
                                                },
                                                emphasis: {
                                                    label: {
                                                        show: true,
                                                        fontSize: '18',
                                                        fontWeight: 'bold'
                                                    }
                                                },
                                                labelLine: {
                                                    show: false
                                                },
                                                data: [{
                                                        value: 1048,
                                                        name: 'Sangat Layak'
                                                    },
                                                    {
                                                        value: 735,
                                                        name: 'Layak'
                                                    },
                                                    {
                                                        value: 580,
                                                        name: 'Tidak Layak'
                                                    }
                                                ]
                                            }]
                                        });
                                    });
                                </script>
                                <!-- End Donut Chart -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Kemudahan mengakses sarana dan prasarana di UNIDA Gontor</h5>
                                <!-- Pie Chart -->
                                <div id="kemudahanMengaksesSarana" style="min-height: 400px;" class="echart"></div>
                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        echarts.init(document.querySelector("#kemudahanMengaksesSarana")).setOption({
                                            title: {
                                                text: ' ',
                                                subtext: ' ',
                                                left: 'center'
                                            },
                                            tooltip: {
                                                trigger: 'item'
                                            },
                                            legend: {
                                                orient: 'vertical',
                                                left: 'left'
                                            },
                                            series: [{
                                                name: 'Kegiatan yang berpengaruh pada pekerjaan',
                                                type: 'pie',
                                                radius: '50%',
                                                data: [{
                                                        value: 1048,
                                                        name: 'Sangat Mudah'
                                                    },
                                                    {
                                                        value: 735,
                                                        name: 'Mudah'
                                                    },
                                                    {
                                                        value: 580,
                                                        name: 'Sulit'
                                                    },
                                                    {
                                                        value: 484,
                                                        name: 'Sangat Sulit'
                                                    }
                                                ],
                                                emphasis: {
                                                    itemStyle: {
                                                        shadowBlur: 10,
                                                        shadowOffsetX: 0,
                                                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                                                    }
                                                }
                                            }]
                                        });
                                    });
                                </script>
                                <!-- End Pie Chart -->
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                                <h5 class="card-title">Saran untuk Pengembangan infrastuktur</h5>
                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Customer</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Brandon Jacob</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bridie Kessler</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ashleigh Langosh</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Angus Grady</td>
                                            <td>
                                                <a href="#" class="badge bg-primary">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Raheem Lehner</td>
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
            </div>


        </div>
    </section>
@endsection
