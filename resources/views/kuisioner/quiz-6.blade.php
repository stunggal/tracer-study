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
                        <h5 class="card-title">Kuisioner Penilaian Dosen</h5>

                        <form method="POST" action="">


                            <div class="card mb-3">
                                <div class="card-header">Sebutkan kegiatan akademik/non akademik universitas yang paling berpengaruh pada pekerjaan Anda saat ini? (min 3)</div>
                                <div class="card-body mt-3">
                                    <input type="hidden" name="questions" value="">

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                        Perkuliahan
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                        Praktikum/Penelitian
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                        Pengabdian Masyarakat
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                        Diskusi Islamisasi
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                        Tahfizh al Qur'an
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                        Kegiatan Kebahasaan
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                        UKM
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Other : <input type="text" name="other_reason" />
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                        <strong></strong>
                                    </span>

                                </div>
                            </div>


                            <div class="card mb-3">
                                <div class="card-header">Bila memilih perkuliahan, mata kuliah apa yang paling dibutuhkan oleh pekerjaan Anda saat ini ? (min 3)</div>
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
                                <div class="card-header">Menurut Anda, apakah kurikulum program studi Anda sudah  memenuhi kebutuhan dunia kerja dan pengabdian? (Mohon berikan penjelasan)</div>
                                <div class="card-body mt-3">
                                    <input type="hidden" name="questions" value="">

                                    <div class="col-sm-10">
                                        <textarea class="form-control" style="height: 100px"></textarea>
                                    </div>

                                    <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                        <strong></strong>
                                    </span>
                                </div>
                            </div>


                            <div class="card mb-3">
                                <div class="card-header">Silakan beri saran atau masukan untuk pengembangan kurikulum program studi Anda</div>
                                <div class="card-body mt-3">
                                    <input type="hidden" name="questions" value="">
                                    
                                    <div class="col-sm-10">
                                        <textarea class="form-control" style="height: 100px"></textarea>
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