@extends('layouts.main')

@section('sidebar')
@include('layouts.sidebar')

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Kuisioner: Profesi</h5>

                        <form method="POST" action="">


                            <div class="card mb-3">
                                <div class="card-header">Kapan Anda mulai mencari pekerjaan? (Mohon pekerjaan sambilan tidak dimasukkan)</div>
                                <div class="card-body mt-3">
                                    <input type="hidden" name="questions" value="">

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Sebelum lulus (yudisium/wisuda)
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Sesudah lulus (yudisium/wisuda)
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Saya tidak mencari kerja
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                        <strong></strong>
                                    </span>

                                </div>
                            </div>


                            <div class="card mb-3">
                                <div class="card-header">Kira-kira berapa bulan Anda mulai mencari pekerjaan? Mohon pekerjaan sambilan tidak dimasukkan</div>
                                <div class="card-body mt-3">
                                    <input type="hidden" name="questions" value="">

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control">
                                    </div>

                                    <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                        <strong></strong>
                                    </span>

                                </div>
                            </div>


                            <div class="card mb-3">
                                <div class="card-header">Bagaimana Anda mencari pekerjaan tersebut? Jawaban bisa lebih dari satu</div>
                                <div class="card-body mt-3">
                                    <input type="hidden" name="questions" value="">

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                                        <label class="form-check-label" for="gridCheck1">
                                            Melalui iklan di koran/majalah, brosur
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                                        <label class="form-check-label" for="gridCheck2">
                                            Melamar ke perusahaan tanpa mengetahui lowongan yang ada
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                                        <label class="form-check-label" for="gridCheck1">
                                            Pergi ke bursa/pameran kerja
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                                        <label class="form-check-label" for="gridCheck2">
                                            Mencari lewat internet/iklan online/milis
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                                        <label class="form-check-label" for="gridCheck1">
                                            Dihubungi oleh perusahaan
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                                        <label class="form-check-label" for="gridCheck2">
                                            Menghubungi Kemenakertrans
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                                        <label class="form-check-label" for="gridCheck1">
                                            Menghubungi agen tenaga kerja komersial/swasta
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                                        <label class="form-check-label" for="gridCheck2">
                                            Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                                        <label class="form-check-label" for="gridCheck1">
                                            Menghubungi kantor kemahasiswaan/hubungan alumni
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                                        <label class="form-check-label" for="gridCheck2">
                                            Membangun jejaring (network) sejak masih kuliah
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                                        <label class="form-check-label" for="gridCheck2">
                                            Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                                        <label class="form-check-label" for="gridCheck2">
                                            Membangun bisnis sendiri
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                                        <label class="form-check-label" for="gridCheck2">
                                            Melalui penempatan kerja atau magang
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                                        <label class="form-check-label" for="gridCheck2">
                                            Bekerja di tempat yang sama dengan tempat kerja semasa kuliah
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                                        <label class="form-check-label" for="gridCheck2">
                                            Lainnya: <input type="text" class="form-control">
                                        </label>
                                    </div>

                                    <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                        <strong></strong>
                                    </span>
                                </div>
                            </div>


                            <div class="card mb-3">
                                <div class="card-header">Berapa perusahaan/instansi/institusi yang sudah anda lamar (lewat surat atau e-mail) sebelum Anda memeroleh pekerjaan pertama?</div>
                                <div class="card-body mt-3">
                                    <input type="hidden" name="questions" value="">

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control">
                                    </div>

                                    <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                        <strong></strong>
                                    </span>
                                </div>
                            </div>


                            <div class="card mb-3">
                                <div class="card-header">Berapa perusahaan/instansi/institusi yang sudah anda lamar ( secara langsung/surat/e-mail) sebelum anda memperoleh pekerjaan pertama?</div>
                                <div class="card-body mt-3">
                                    <input type="hidden" name="questions" value="">

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            1 Perusahaan
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            2 Perusahaan
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            3 Perusahaan
                                        </label>
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            4 Perusahaan
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            5 Perusahaan
                                        </label>
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            6 Perusahaan
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Lebih dari 6 Perusahaan
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                        <strong></strong>
                                    </span>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-header">Berapa banyak perusahaan/instansi/institusi yang merespon lamaran Anda/mengundang Anda untuk wawancara?</div>
                                <div class="card-body mt-3">
                                    <input type="hidden" name="questions" value="">

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            1 Perusahaan
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            2 Perusahaan
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            3 Perusahaan
                                        </label>
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            4 Perusahaan
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            5 Perusahaan
                                        </label>
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            6 Perusahaan
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Lebih dari 6 Perusahaan
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                        <strong></strong>
                                    </span>

                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-header">Jika pekerjaan Anda saat ini tidak sesuai dengan disiplin ilmu yang Anda tekuni, mengapa Anda mengambilnya? Jawaban bisa lebih dari satu</div>
                                <div class="card-body mt-3">
                                    <input type="hidden" name="questions" value="">

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                                        <label class="form-check-label" for="gridCheck2">
                                            Pekerjaan saya sekarang sudah sesuai dengan pendidikan saya.
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                                        <label class="form-check-label" for="gridCheck2">
                                            Saya belum mendapatkan pekerjaan yang lebih sesuai.
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                                        <label class="form-check-label" for="gridCheck2">
                                            Di pekerjaan ini saya memeroleh prospek karir yang baik.
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                                        <label class="form-check-label" for="gridCheck2">
                                            Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya.
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                                        <label class="form-check-label" for="gridCheck2">
                                            Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya.
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                                        <label class="form-check-label" for="gridCheck2">
                                            Saya dapat memeroleh pendapatan yang lebih tinggi di pekerjaan ini.
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                                        <label class="form-check-label" for="gridCheck2">
                                            Pekerjaan saya saat ini lebih aman/terjamin/secure
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                                        <label class="form-check-label" for="gridCheck2">
                                            Pekerjaan saya saat ini lebih menarik
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                                        <label class="form-check-label" for="gridCheck2">
                                            Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll.
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                                        <label class="form-check-label" for="gridCheck2">
                                            Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya.
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                                        <label class="form-check-label" for="gridCheck2">
                                            Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya.
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                                        <label class="form-check-label" for="gridCheck2">
                                            Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya.
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                                        <label class="form-check-label" for="gridCheck2">
                                            Lainnya: <input type="text" class="form-control" name="lainnya" id="lainnya" placeholder="Lainnya">
                                        </label>
                                    </div>

                                    <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                        <strong></strong>
                                    </span>

                                </div>
                            </div>


                            <div class="card mb-3">
                                <div class="card-header">Pada SAAT LULUS, pada tingkat mana kompetensi di bawah ini yang Anda kuasai? (A) </div>
                                <div class="card-body mt-3">
                                    <input type="hidden" name="questions" value="">

                                    <div>
                                        <p>
                                            1: Sangat Rendah <br>
                                            2: Rendah <br>
                                            3: Cukup <br>
                                            4: Tinggi <br>
                                            5: Sangat Tinggi <br><br>
                                        </p>
                                        <!-- <label for="customRange2" class="form-label"> -->
                                        <table style="width:123%">
                                            <tr>
                                                <th>1</th>
                                                <th>2</th>
                                                <th>3</th>
                                                <th>4</th>
                                                <th>5</th>
                                            </tr>
                                        </table>
                                        <!-- </label> -->
                                        <label class="form-check-label mt-2" for="option-">
                                            <strong>
                                                Problem Solving (Mampu menganalisis dan memecahkan permasalahan)
                                            </strong>
                                        </label>
                                        <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2">
                                        <label class="form-check-label mt-2" for="option-">
                                            <strong>
                                                Berpikir kritis/Critical Thinking
                                            </strong>
                                        </label>
                                        <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2">
                                        <label class="form-check-label mt-2" for="option-">
                                            <strong>
                                                Kreatifitas
                                            </strong>
                                        </label>
                                        <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2">
                                        <label class="form-check-label mt-2" for="option-">
                                            <strong>
                                                Manajemen SDM/People Management
                                            </strong>
                                        </label>
                                        <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2">
                                        <label class="form-check-label mt-2" for="option-">
                                            <strong>
                                                Kerjasama Tim/Coordinating with Other
                                            </strong>
                                        </label>
                                        <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2">
                                        <label class="form-check-label mt-2" for="option-">
                                            <strong>

                                                Kecerdasan Emosional (Mampu mengontrol relasi dan empati interpersonal)
                                            </strong>
                                        </label>
                                        <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2">
                                        <label class="form-check-label mt-2" for="option-">
                                            <strong>
                                                Pengambilan Keputusan/Judgement and Decision Making
                                            </strong>
                                        </label>
                                        <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2">
                                        <label class="form-check-label mt-2" for="option-">
                                            <strong>
                                                Orientasi Pelayanan/Service Orientation
                                            </strong>
                                        </label>
                                        <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2">
                                        <label class="form-check-label mt-2" for="option-">
                                            <strong>
                                                Negoisasi/Negoitation
                                            </strong>
                                        </label>
                                        <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2">
                                        <label class="form-check-label mt-2" for="option-">
                                            <strong>
                                                Keterbukaan/Cognitive Flexibility
                                            </strong>
                                        </label>
                                        <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2">
                                        <label class="form-check-label mt-2" for="option-">
                                            <strong>
                                                Etika
                                            </strong>
                                        </label>
                                        <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2">
                                        <label class="form-check-label mt-2" for="option-">
                                            <strong>
                                                Keahlian Bidang Ilmu
                                            </strong>
                                        </label>
                                        <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2">
                                        <label class="form-check-label mt-2" for="option-">
                                            <strong>
                                                Bahasa Asing
                                            </strong>
                                        </label>
                                        <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2">
                                        <label class="form-check-label mt-2" for="option-">
                                            <strong>
                                                Teknologi Informasi (Office tools, software, cloud storage, mailing service, dll)
                                            </strong>
                                        </label>
                                        <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2">
                                        <label class="form-check-label mt-2" for="option-">
                                            <strong>
                                                Komunikasi
                                            </strong>
                                        </label>
                                        <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2">
                                        <label class="form-check-label mt-2" for="option-">
                                            <strong>
                                                Pengembangan Diri (Potensi, bakat, sikap, prilaku, dan kepribadian)
                                            </strong>
                                        </label>
                                        <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2">


                                    </div>

                                    <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                        <strong></strong>
                                    </span>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-header">Pada SAAT INI, pada tingkat mana kompetensi di bawah ini diperlukan dalam pekerjaan? (B)</div>
                                <div class="card-body mt-3">
                                    <input type="hidden" name="questions" value="">

                                    <div>
                                        <p>
                                            1: Sangat Rendah <br>
                                            2: Rendah <br>
                                            3: Cukup <br>
                                            4: Tinggi <br>
                                            5: Sangat Tinggi <br><br>
                                        </p>
                                        <!-- <label for="customRange2" class="form-label"> -->
                                        <table style="width:123%">
                                            <tr>
                                                <th>1</th>
                                                <th>2</th>
                                                <th>3</th>
                                                <th>4</th>
                                                <th>5</th>
                                            </tr>
                                        </table>
                                        <!-- </label> -->
                                        <label class="form-check-label mt-2" for="option-">
                                            <strong>
                                                Problem Solving (Mampu menganalisis dan memecahkan permasalahan)
                                            </strong>
                                        </label>
                                        <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2">
                                        <label class="form-check-label mt-2" for="option-">
                                            <strong>
                                                Berpikir kritis/Critical Thinking
                                            </strong>
                                        </label>
                                        <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2">
                                        <label class="form-check-label mt-2" for="option-">
                                            <strong>
                                                Kreatifitas
                                            </strong>
                                        </label>
                                        <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2">
                                        <label class="form-check-label mt-2" for="option-">
                                            <strong>
                                                Manajemen SDM/People Management
                                            </strong>
                                        </label>
                                        <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2">
                                        <label class="form-check-label mt-2" for="option-">
                                            <strong>
                                                Kerjasama Tim/Coordinating with Other
                                            </strong>
                                        </label>
                                        <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2">
                                        <label class="form-check-label mt-2" for="option-">
                                            <strong>

                                                Kecerdasan Emosional (Mampu mengontrol relasi dan empati interpersonal)
                                            </strong>
                                        </label>
                                        <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2">
                                        <label class="form-check-label mt-2" for="option-">
                                            <strong>
                                                Pengambilan Keputusan/Judgement and Decision Making
                                            </strong>
                                        </label>
                                        <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2">
                                        <label class="form-check-label mt-2" for="option-">
                                            <strong>
                                                Orientasi Pelayanan/Service Orientation
                                            </strong>
                                        </label>
                                        <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2">
                                        <label class="form-check-label mt-2" for="option-">
                                            <strong>
                                                Negoisasi/Negoitation
                                            </strong>
                                        </label>
                                        <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2">
                                        <label class="form-check-label mt-2" for="option-">
                                            <strong>
                                                Keterbukaan/Cognitive Flexibility
                                            </strong>
                                        </label>
                                        <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2">
                                        <label class="form-check-label mt-2" for="option-">
                                            <strong>
                                                Etika
                                            </strong>
                                        </label>
                                        <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2">
                                        <label class="form-check-label mt-2" for="option-">
                                            <strong>
                                                Keahlian Bidang Ilmu
                                            </strong>
                                        </label>
                                        <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2">
                                        <label class="form-check-label mt-2" for="option-">
                                            <strong>
                                                Bahasa Asing
                                            </strong>
                                        </label>
                                        <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2">
                                        <label class="form-check-label mt-2" for="option-">
                                            <strong>
                                                Teknologi Informasi (Office tools, software, cloud storage, mailing service, dll)
                                            </strong>
                                        </label>
                                        <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2">
                                        <label class="form-check-label mt-2" for="option-">
                                            <strong>
                                                Komunikasi
                                            </strong>
                                        </label>
                                        <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2">


                                    </div>

                                    <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                        <strong></strong>
                                    </span>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-header">Pada SAAT INI, pada tingkat mana kompetensi di bawah ini diperlukan dalam pekerjaan? (B)</div>
                                <div class="card-body mt-3">
                                    <input type="hidden" name="questions" value="">

                                    <div>
                                        <p>
                                            1: Tidak sama sekali <br>
                                            2: Kurang <br>
                                            3: Cukup besar <br>
                                            4: Besar <br>
                                            5: Sangat besar <br><br>
                                        </p>
                                        <!-- <label for="customRange2" class="form-label"> -->
                                        <table style="width:123%">
                                            <tr>
                                                <th>1</th>
                                                <th>2</th>
                                                <th>3</th>
                                                <th>4</th>
                                                <th>5</th>
                                            </tr>
                                        </table>
                                        <!-- </label> -->
                                        <label class="form-check-label mt-2" for="option-">
                                            <strong>
                                                Perkuliahan
                                            </strong>
                                        </label>
                                        <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2">
                                        <label class="form-check-label mt-2" for="option-">
                                            <strong>
                                                Demonstrasi
                                            </strong>
                                        </label>
                                        <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2">
                                        <label class="form-check-label mt-2" for="option-">
                                            <strong>
                                                Partisipasi dalam proyek riset
                                            </strong>
                                        </label>
                                        <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2">
                                        <label class="form-check-label mt-2" for="option-">
                                            <strong>
                                                Magang
                                            </strong>
                                        </label>
                                        <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2">
                                        <label class="form-check-label mt-2" for="option-">
                                            <strong>
                                                Praktikum
                                            </strong>
                                        </label>
                                        <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2">
                                        <label class="form-check-label mt-2" for="option-">
                                            <strong>
                                                Kerja lapangan
                                            </strong>
                                        </label>
                                        <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2">
                                        <label class="form-check-label mt-2" for="option-">
                                            <strong>
                                                Diskusi
                                            </strong>
                                        </label>
                                        <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2">



                                    </div>

                                    <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                        <strong></strong>
                                    </span>
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection