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
                                <div class="card-header">Bagaimanakah menurut anda kecukupan dan ketersediaan sarana dan prasarana yang ada di UNIDA Gontor?</div>
                                <div class="card-body mt-3">
                                    <input type="hidden" name="questions" value="">

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Sangat cukup
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Cukup
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Kurang Cukup
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                        <strong></strong>
                                    </span>

                                </div>
                            </div>


                            <div class="card mb-3">
                                <div class="card-header">Bagaimanakah kelayakan sarana dan prasarana yang tersedia di UNIDA Gontor?</div>
                                <div class="card-body mt-3">
                                    <input type="hidden" name="questions" value="">

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Sangat Layak
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Layak
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Kurang Layak
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                        <strong></strong>
                                    </span>

                                </div>
                            </div>


                            <div class="card mb-3">
                                <div class="card-header">Bagaimanakah kemudahan mengakses sarana dan prasarana di UNIDA Gontor?</div>
                                <div class="card-body mt-3">
                                    <input type="hidden" name="questions" value="">

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Sangat mudah
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Mudah
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Sulit
                                        </label>
                                        <input class="form-check-input " type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Sangat sulit
                                        </label>
                                        <input class="form-check-input " type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                        <strong></strong>
                                    </span>
                                </div>
                            </div>


                            <div class="card mb-3">
                                <div class="card-header">Saran untuk Pengembangan infrastuktur (Labolatorium, Ruang kuliah, Perpustakaan).</div>
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