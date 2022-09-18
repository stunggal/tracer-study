@extends('layouts.main')

@section('header')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
@endsection

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
                    <div class="col-xxl-4 col-md-12">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Kuisioner <span>| Jumlah quiz</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-check2-all"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6 class="text-primary">1231231231</h6>
                                        <span class="text-success small pt-1 fw-bold"></span> <span
                                            class="text-muted small pt-2 ps-1">Quis</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->

                </div>
            </div><!-- End Left side columns -->

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">
                    <!-- Reports -->
                    <div class="col-12">
                        <div class="card">

                            <div class="card-body">

                                <h5 class="card-title">Kuisioner <span>/ Mari buat kuisioner yang berkualitas untuk menuju
                                        unida unggul 2025</span></h5>

                                @if (session()->has('success'))
                                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                        {{ session()->get('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif

                                <button type="button" class="btn btn-primary mb-5" data-bs-toggle="modal"
                                    data-bs-target="#buatPertanyaan">
                                    buat pertanyaan
                                </button>
                                <div class="modal fade" id="buatPertanyaan" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Buat Pertanyan</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form class="row g-3 needs-validation" action="/pertanyaan" method="post"
                                                novalidate>
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="col-md-4">
                                                        <label for="nomor" class="form-label">Nomor</label>
                                                        <div class="input-group has-validation">
                                                            <input type="number" class="form-control" id="nomor"
                                                                aria-describedby="inputGroupPrepend" name="nomor"
                                                                required>
                                                            @if ($errors->has('nomor'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('nomor') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="validationCustomUsername"
                                                            class="form-label">Pertanyaan</label>
                                                        <div class="input-group has-validation">
                                                            <input type="text" class="form-control"
                                                                id="validationCustomUsername"
                                                                aria-describedby="inputGroupPrepend" name="pertanyaan"
                                                                required>
                                                            @if ($errors->has('name'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('name') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="numberOfSection" class="form-label">Section</label>
                                                        <div class="input-group has-validation">
                                                            <input type="number" class="form-control" id="numberOfSection"
                                                                aria-describedby="inputGroupPrepend" name="section"
                                                                required>
                                                            @if ($errors->has('section'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('section') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="validationCustom04" class="form-label">State</label>
                                                        <select class="form-select" id="validationCustom04" name="jenis"
                                                            required>
                                                            <option selected disabled value="">Choose...</option>
                                                            <option value="paragraf">paragraf</option>
                                                            <option value="radio">radio butto</option>
                                                            <option value="combo">combo box</option>
                                                            <option value="text">text area</option>
                                                            <option value="range">range</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Please select a valid state.
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div><!-- End Vertically centered Modal-->

                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title ">Section 1</h5>
                                    </div>
                                </div>

                                @foreach ($pertanyaansSection1 as $pertanyaan)
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $pertanyaan->nomor }}. {{ $pertanyaan->pertanyaan }}
                                            </h5>
                                            <p>{{ $pertanyaan->jenis }}</p>

                                            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                                                data-bs-target="#verticalycentered">
                                                Jawaban
                                            </button>

                                            <!-- Vertically centered Modal -->
                                            <form action="/pertanyaan/update/{{ $pertanyaan->id }}" method="post"
                                                class="mb-3">
                                                @csrf
                                                <button type="submit" class="btn btn-warning mr-1"
                                                    data-bs-toggle="modal">
                                                    Edit pertanyaan
                                                </button>
                                            </form>
                                            <form action="/pertanyaan/delete/{{ $pertanyaan->id }}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-danger ml-1"
                                                    data-bs-toggle="modal">
                                                    Hapus pertanyaan
                                                </button>
                                            </form>
                                            <div class="modal fade" id="verticalycentered" tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Vertically Centered</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Non omnis incidunt qui sed occaecati magni asperiores est
                                                            mollitia.
                                                            Soluta at et reprehenderit. Placeat autem numquam et fuga
                                                            numquam.
                                                            Tempora in facere consequatur sit dolor ipsum. Consequatur nemo
                                                            amet
                                                            incidunt est facilis. Dolorem neque recusandae quo sit molestias
                                                            sint dignissimos.
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- End Vertically centered Modal-->

                                        </div>
                                    </div>
                                @endforeach

                            </div>

                        </div>

                    </div><!-- End Reports -->

                </div>
            </div><!-- End Left side columns -->

        </div>
    </section>
@endsection
