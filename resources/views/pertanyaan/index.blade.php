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
                                    <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Quis</span>

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
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif

                            <button type="button" class="btn btn-success mb-5" data-bs-toggle="modal" data-bs-target="#buatSection">
                                Buat Section
                            </button>

                            <button type="button" class="btn btn-primary mb-5" data-bs-toggle="modal" data-bs-target="#buatPertanyaan">
                                Buat pertanyaan
                            </button>


                            <div class="modal fade" id="buatPertanyaan" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Buat Pertanyan</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form class="row g-3 needs-validation" action="/pertanyaan" method="post" novalidate>
                                            @csrf
                                            <div class="modal-body">


                                                <div class="row mb-3">
                                                    <label for="nomor" class="col-sm-3 col-form-label">Nomor</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" id="nomor" name="nomor" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="pertanyaan" class="col-sm-3 col-form-label">Pertanyaan</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="pertanyaan" name="pertanyaan" required>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="section" class="col-sm-3 col-form-label">Section</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-select" id="section" name="section" required>
                                                            <option selected disabled value="">Pilih Section</option>
                                                            @foreach ($section as $s)
                                                            <option value="{{ $s->nama_section }}">{{ $s->nama_section }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="jenis" class="col-sm-3 col-form-label">Jenis</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-select" id="jenis" name="jenis" required>
                                                            <option selected disabled value="">Pilih Jenis</option>
                                                            <option value="paragraf">paragraf</option>
                                                            <option value="radio">radio button</option>
                                                            <option value="combo">combo box</option>
                                                            <option value="text">text area</option>
                                                            <option value="range">range</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save
                                                        changes</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- End Vertically centered Modal-->



                            <div class="modal fade" id="buatSection" tabindex="-1">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Buat Section</h5>
                                        </div>
                                        <form class="row g-3 needs-validation" action="/section" method="post" novalidate>
                                            @csrf

                                            <div class="modal-body">

                                                <div class="row mb-3">
                                                    <label for="nama_section" class="col-sm-3 col-form-label">Nomor Section</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" id="nomor" name="nomor" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="nama_section" class="col-sm-3 col-form-label">Nama Section</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="nama_section" name="nama_section" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="keterangan_section" class="col-sm-3 col-form-label">Keterangan Section</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="keterangan_section" name="keterangan_section" required>
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save
                                                        changes</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- End Vertically centered Modal-->

                            @foreach ($section as $s)
                            <?php
                            $pertanyaanss = $pertanyaans->where('section', $s->nama_section)->sortBy('nomor');
                            // echo '<pre>';print_r($pertanyaan);exit;
                            ?>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title ">
                                        Bagian {{ $s->nomor }} : {{ $s->nama_section }}
                                        <a href="javascript:void(0)" onclick="document.getElementById('delsec').submit()" class="float-end btn btn-sm btn-danger">Hapus Section</a>
                                        <button type="button" class="float-end btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editSection{{ $s->id }}">
                                            Edit pertanyaan
                                        </button>
                                        <br> <span> {{ $s->keterangan_section }} </span>
                                    </h5>
                                    <div class="modal fade" id="editSection{{ $s->id }}" tabindex="-1">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Buat Section</h5>
                                                </div>
                                                <form class="row g-3 needs-validation" action="/section/update/{{ $s->id }}" method="post" novalidate>
                                                    @csrf

                                                    <div class="modal-body">

                                                        <div class="row mb-3">
                                                            <label for="nama_section" class="col-sm-3 col-form-label">Nomor Section</label>
                                                            <div class="col-sm-9">
                                                                <input type="number" class="form-control" id="nomor" name="nomor" value="{{ $s->nomor }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="nama_section" class="col-sm-3 col-form-label">Nama Section</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" id="nama_section" name="nama_section" value="{{ $s->nama_section }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="keterangan_section" class="col-sm-3 col-form-label">Keterangan Section</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" id="keterangan_section" name="keterangan_section" value="{{ $s->keterangan_section }}" required>
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div><!-- End Vertically centered Modal-->


                                    <form id="delsec" action="/section/delete/{{ $s->id }}" method="post">
                                        @csrf
                                    </form>

                                    @foreach ($pertanyaanss as $pertanyaan)

                                    <h5 class="card-title">{{ $pertanyaan->nomor }}. {{ $pertanyaan->pertanyaan }}
                                    </h5>
                                    @if ($pertanyaan->jenis == 'combo')
                                    <p>{{ $pertanyaan->deskripsi }}</p>
                                    <div class="row mb-3">
                                        <legend class="col-form-label col-sm-2 pt-0">Checkboxes</legend>
                                        <div class="col-sm-10">
                                            @foreach ($jawabans as $jawaban)
                                            @if ($jawaban->pertanyaan_id == $pertanyaan->id)
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck1" value="{{ $jawaban->jawaban }}">
                                                <label class="form-check-label" for="gridCheck1">
                                                    {{ $jawaban->jawaban }}
                                                </label>
                                                <form action="/jawaban/delete/{{ $jawaban->id }}" method="post">
                                                    @csrf
                                                    <button class="badge btn-danger"><a type="submit" class="badge btn-danger">Delete</a></button>
                                                </form>
                                            </div>
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    @elseif ($pertanyaan->jenis == 'radio')
                                    <p>{{ $pertanyaan->deskripsi }}</p>
                                    <fieldset class="row mb-3">
                                        <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                                        <div class="col-sm-10">
                                            @foreach ($jawabans as $jawaban)
                                            @if ($jawaban->pertanyaan_id == $pertanyaan->id)
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="{{ $jawaban->jawaban }}">
                                                <label class="form-check-label" for="gridRadios1">
                                                    {{ $jawaban->jawaban }}
                                                </label>
                                                <form action="/jawaban/delete/{{ $jawaban->id }}" method="post">
                                                    @csrf
                                                    <button class="badge btn-danger"><a type="submit" class="badge btn-danger">Delete</a></button>
                                                </form>
                                            </div>
                                            @endif
                                            @endforeach
                                        </div>
                                    </fieldset>
                                    @elseif ($pertanyaan->jenis == 'text')
                                    <p>{{ $pertanyaan->deskripsi }}</p>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Text</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    @elseif ($pertanyaan->jenis == 'range')
                                    <p>{{ $pertanyaan->deskripsi }}</p>
                                    <div class="row mb-5">
                                        <label class="col-sm-2 col-form-label">Ranges</label>
                                        <div class="col-sm-10">
                                            @foreach ($jawabans as $jawaban)
                                            @if ($jawaban->pertanyaan_id == $pertanyaan->id)
                                            <div>
                                                <label for="customRange2" class="form-label">{{ $jawaban->jawaban }}</label>
                                                <table style="width:123%">
                                                    <tr>
                                                        <th>1</th>
                                                        <th>2</th>
                                                        <th>3</th>
                                                        <th>4</th>
                                                        <th>5</th>
                                                    </tr>
                                                </table>
                                                <input type="range" class="form-range" min="1" max="5" step="1" id="customRange2" value="" name="{{ $jawaban->jawaban }}">
                                                <form action="/jawaban/delete/{{ $jawaban->id }}" method="post">
                                                    @csrf
                                                    <button class="badge btn-danger"><a type="submit" class="badge btn-danger">Delete</a></button>
                                                </form>
                                            </div>
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    @elseif ($pertanyaan->jenis == 'paragraf')
                                    <p>{{ $pertanyaan->deskripsi }}</p>
                                    <div class="row mb-3">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Textarea</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" style="height: 100px"></textarea>
                                        </div>
                                    </div>
                                    @endif

                                    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#inputJawaban{{ $pertanyaan->id }}">
                                        Jawaban
                                    </button>

                                    <!-- Vertically centered Modal -->
                                    <form action="/pertanyaan/update/{{ $pertanyaan->id }}" method="post" class="mb-3">
                                        @csrf
                                        <button type="button" class="btn btn-warning mr-1" data-bs-toggle="modal" data-bs-target="#editPertanyaan{{ $pertanyaan->id }}">
                                            Edit pertanyaan
                                        </button>
                                    </form>
                                    <form action="/pertanyaan/delete/{{ $pertanyaan->id }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-danger ml-1" data-bs-toggle="modal">
                                            Hapus pertanyaan
                                        </button>
                                    </form>
                                    <div class="modal fade" id="inputJawaban{{ $pertanyaan->id }}" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Tambah jawaban untuk nomor
                                                        {{ $pertanyaan->nomor }}
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="/jawaban" method="post">
                                                    @csrf
                                                    <input type="hidden" name="pertanyaan_id" value="{{ $pertanyaan->id }}">
                                                    <div class="modal-body">
                                                        
                                                        <div class="row mb-3">
                                                            <label for="nomor" class="col-sm-3 col-form-label">Nomor</label>
                                                            <div class="col-sm-9">
                                                                <input type="hidden" class="form-control" id="nomor" aria-describedby="inputGroupPrepend" name="nomor" value="{{ $pertanyaan->nomor }}" required>
                                                                <input type="number" class="form-control" aria-describedby="inputGroupPrepend"  value="{{ $pertanyaan->nomor }}" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="jawaban" class="col-sm-3 col-form-label">Jawaban</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" id="jawaban" aria-describedby="inputGroupPrepend" name="jawaban" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">buat
                                                            pertanyaan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div><!-- End Vertically centered Modal-->

                                    <div class="modal fade" id="editPertanyaan{{ $pertanyaan->id }}" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Pertanyaan
                                                        {{ $pertanyaan->nomor }}
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="/pertanyaan/update/{{ $pertanyaan->id }}" method="post">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="col-md-4">
                                                            <label for="nomor" class="form-label">Nomor</label>
                                                            <div class="input-group has-validation">
                                                                <input type="number" class="form-control" id="nomor" aria-describedby="inputGroupPrepend" name="nomor" value="{{ $pertanyaan->nomor }}" required>
                                                                <div class="invalid-feedback">
                                                                    mohon untuk memasukkan nomor.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="pertanyaan" class="form-label">Pertanyaan</label>
                                                            <div class="input-group has-validation">
                                                                <input type="text" class="form-control" id="pertanyaan" aria-describedby="inputGroupPrepend" name="pertanyaan" value="{{ $pertanyaan->pertanyaan }}" required>
                                                                <div class="invalid-feedback">
                                                                    mohon untuk memasukkan pertanyaan.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="deskripsi" class="form-label">Deskripsi</label>
                                                            <div class="input-group has-validation">
                                                                <input type="text" class="form-control" id="deskripsi" aria-describedby="inputGroupPrepend" name="deskripsi" value="{{ $pertanyaan->deskripsi }}">
                                                                <div class="invalid-feedback">
                                                                    mohon untuk memasukkan deskripsi.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="numberOfSection" class="form-label">Section</label>
                                                            <div class="input-group has-validation">
                                                                <input type="number" class="form-control" id="numberOfSection" aria-describedby="inputGroupPrepend" name="section" value="{{ $pertanyaan->section }}" required>
                                                                <div class="invalid-feedback">
                                                                    mohon untuk memasukkan section.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="validationCustom04" class="form-label">Jenis</label>
                                                            <select class="form-select" id="validationCustom04" name="jenis" required>
                                                                <option selected disabled value="">Choose...
                                                                </option>
                                                                <option value="paragraf">paragraf</option>
                                                                <option value="radio">radio butto</option>
                                                                <option value="combo">combo box</option>
                                                                <option value="text">text area</option>
                                                                <option value="range">range</option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Mohon untuk memilih jenis pertanyaan.
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div><!-- End Vertically centered Modal-->

                                    @endforeach
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