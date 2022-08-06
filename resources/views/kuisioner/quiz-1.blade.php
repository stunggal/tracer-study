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
                        <h5 class="card-title">Kuisioner: Tracer Studi</h5>

                        <form method="POST" action="">


                            <div class="card mb-3">
                                <div class="card-header">Apakah status Anda saat ini ?</div>
                                <div class="card-body mt-3">
                                    <input type="hidden" name="questions-1-1" value="">

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-1-1">
                                            Bekerja (full time/part time)
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions-1-1" id="option-1-1" value="Bekerja (full time/part time)">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-1-1">
                                            Wiraswasta 
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions-1-1" id="option-1-1" value="Wiraswasta">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-1-1">
                                            Melanjutkan Pendidikan 
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions-1-1" id="option-1-1" value="Melanjutkan Pendidikan">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-1-1">
                                            Tidak Kerja tetapi sedang mencari kerja
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions-1-1" id="option-1-1" value="Tidak Kerja tetapi sedang mencari kerja">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-1-1">
                                            Belum memungkinkan bekerja 
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions-1-1" id="option-1-1" value="Belum memungkinkan bekerja">
                                    </div>

                                    <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                        <strong></strong>
                                    </span>

                                </div>
                            </div>


                            <div class="card mb-3">
                                <div class="card-header">Jika tidak, apakah Anda aktif mencari pekerjaan dalam 4 minggu terakhir? </div>
                                <div class="card-body mt-3">
                                    <input type="hidden" name="questions-1-2" value="">

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-1-2">
                                            Tidak
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions-1-2" id="option-1-2" value="Tidak">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-1-2">
                                            Tidak, tapi saya sedang menunggu hasil lamaran kerja
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions-1-2" id="option-1-2" value="Tidak, tapi saya sedang menunggu hasil lamaran kerja">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-1-2">
                                            Ya, saya akan mulai bekerja dalam 2 minggu ke depan
                                        </label>
                                        <input class="form-check-input " type="radio" name="questions-1-2" id="option-1-2" value="Ya, saya akan mulai bekerja dalam 2 minggu ke depan">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-1-2">
                                            Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan
                                        </label>
                                        <input class="form-check-input " type="radio" name="questions-1-2" id="option-1-2" value="Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-1-2">
                                            Other : <input type="text" name="other_reason" />
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions-1-2" id="option-1-2" value="other_reason">
                                    </div>

                                    <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                        <strong></strong>
                                    </span>

                                </div>
                            </div>


                            <div class="card mb-3">
                                <div class="card-header">Apakah status Anda saat ini ?</div>
                                <div class="card-body mt-3">
                                    <input type="hidden" name="questions-1-3" value="">

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-1-3">
                                            Sebelum lulus (yudisium/wisuda)
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions-1-3" id="option-1-3" value="Sebelum lulus (yudisium/wisuda)">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-1-3">
                                            Setelah lulus (yudisium/wisuda)
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions-1-3" id="option-1-3" value="Setelah lulus (yudisium/wisuda)">
                                    </div>

                                    <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                        <strong></strong>
                                    </span>

                                </div>
                            </div>


                            <div class="card mb-3">
                                <div class="card-header">Dalam berapa bulan Anda menunggu untuk mendapatkan pekerjaan pertama termasuk bekerja sebelum lulus ? (Isikan dalam jumlah bulan) </div>
                                <div class="card-body mt-3">
                                    <input type="hidden" name="questions" value="">

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-1-4">
                                            Langsung Kerja
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions-1-4" id="option-1-4" value="Langsung Kerja">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-1-4">
                                            Other : <input type="text" name="other_reason" />
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions-1-4" id="option-1-4" value="other_reason">
                                    </div>

                                    <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                        <strong></strong>
                                    </span>

                                </div>
                            </div>


                            <div class="card mb-3">
                                <div class="card-header">Kira-kira berapa rata-rata pendapatan anda setiap bulannya? . ( jika anda lanjut studi/beasiswa, isi dengan jumlah uang living allowance/dana penelitian riset. Jika anda ibu rumah tangga, isi dengan jumlah besaran uang belanja. Jika anda mengabdi, isi dengan honor minimal pengabdian tersebut). Pertanyaan selanjutnya terbuka untuk nominal pendapatan</div>
                                <div class="card-body mt-3">
                                    <input type="hidden" name="questions" value="">

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-1-5">
                                            Kurang dari Rp 2.000.000,-
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions-1-5" id="option-1-5" value="Kurang dari Rp 2.000.000,-">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-1-5">
                                            Lebih dari 2.000.000,-
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions-1-5" id="option-1-5" value="Lebih dari 2.000.000,-">
                                    </div>

                                    <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                        <strong></strong>
                                    </span>
                                </div>
                            </div>


                            <div class="card mb-3">
                                <div class="card-header">Apakah profesi Anda saat ini?</div>
                                <div class="card-body mt-3">
                                    <input type="hidden" name="questions-1-6" value="">

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Pegawai Negeri/TNI/Polri
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions-1-6" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Pegawai Swasta/Karyawan
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions-1-6" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Guru/Dosen (PNS)
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions-1-6" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Guru/Dosen (non-PNS)
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions-1-6" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Guru Ngaji/Dai </label>
                                        <input class="form-check-input" type="radio" name="questions-1-6" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Guru Pesantren (Pengabdian)
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions-1-6" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Wiraswasta/Wirausaha/Enterpreneur/Startup
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions-1-6" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Studi Lanjut
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions-1-6" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Pimpinan pesantren/lembaga Islam
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions-1-6" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Tokoh masyarakat/Kyai
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions-1-6" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Staff Pengabdian
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions-1-6" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Ibu rumah tangga
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions-1-6" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Other : <input type="text" name="other_reason" />
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions-1-6" id="option-1" value="">
                                    </div>

                                    <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                        <strong></strong>
                                    </span>

                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-header">Bila Anda seorang wiraswasta, apa posisi/jabatan Anda saat ini </div>
                                <div class="card-body mt-3">
                                    <input type="hidden" name="questions" value="">

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Founder
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions-1-7" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Co-Founder
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions-1-7" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Staff
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions-1-7" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Freelance/Kerja Lepas
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions-1-7" id="option-1" value="">
                                    </div>

                                    <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                        <strong></strong>
                                    </span>

                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-header">Bila Anda mengambil studi lanjut, sebutkan sumber dana pembiayaan kuliah </div>
                                <div class="card-body mt-3">
                                    <input type="hidden" name="questions-1-8" value="">

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Biaya Sendiri
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions-1-8" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Beasiswa
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions-1-8" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Tidak mengambil studi lanjut
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions-1-8" id="option-1" value="">
                                    </div>

                                    <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                        <strong></strong>
                                    </span>

                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-header">Sebutkan nama Perguruan Tinggi tempat Anda mengambil studi lanjut </div>
                                <div class="card-body mt-3">
                                    <input type="hidden" name="questions-1-9" value="">

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control">
                                    </div>

                                    <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                        <strong></strong>
                                    </span>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-header">Sebutkan program studi lanjut Anda </div>
                                <div class="card-body mt-3">
                                    <input type="hidden" name="questions-1-10" value="">

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control">
                                    </div>

                                    <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                        <strong></strong>
                                    </span>
                                </div>
                            </div>


                            <div class="card mb-3">
                                <div class="card-header">Sebutkan sumber dana dalam pembiayaan kuliah? (bukan ketika Studi Lanjut)</div>
                                <div class="card-body mt-3">
                                    <input type="hidden" name="questions-1-11" value="">

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                                        <label class="form-check-label" for="gridCheck1">
                                            Biaya sendiri / Keluarga
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck2" >
                                        <label class="form-check-label" for="gridCheck2">
                                            Beasiswa ADIK
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck3">
                                        <label class="form-check-label" for="gridCheck3">
                                            Beasiswa BIDIKMISI
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck4" >
                                        <label class="form-check-label" for="gridCheck4">
                                            Beasiswa PPA
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck5">
                                        <label class="form-check-label" for="gridCheck5">
                                            Beasiswa AFIRMASI (Daerah)
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck6" checked>
                                        <label class="form-check-label" for="gridCheck6">
                                            Beasiswa Perusahaan/Swasta
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck7">
                                        <label class="form-check-label" for="gridCheck7">
                                            Beasiswa LAZISWAF
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck8" >
                                        <label class="form-check-label" for="gridCheck8">
                                            Beasiswa BRI
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck9">
                                        <label class="form-check-label" for="gridCheck1">
                                            Beasiswa BI
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck10" >
                                        <label class="form-check-label" for="gridCheck2">
                                            Beasiswa PLN
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck11" >
                                        <label class="form-check-label" for="gridCheck2">
                                            Beasiswa Guru Pengabdian Gontor
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="gridCheck12" >
                                        <label class="form-check-label" for="gridCheck2">
                                            Other : <input type="text" name="other_reason" />
                                        </label>
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