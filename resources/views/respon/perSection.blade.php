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

                    <!-- Reports -->
                    <div class="col-12">
                        <div class="card">

                            <div class="card-body">

                                <h5 class="card-title">Kuisioner <span>/ Mari isi kuisioner dengan berkualitas untuk menuju
                                        unida unggul 2025</span></h5>

                                <div>
                                    @foreach ($section as $s)
                                        @if ($s->nama_section == $nomorsection)
                                            <?php
                                            $pertanyaanss = $pertanyaans->where('section', $s->nama_section)->sortBy('nomor');
                                            ?>
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title ">Bagian {{ $s->nama_section }}<span> :
                                                            {{ $s->keterangan_section }} </span></h5>
                                                    @foreach ($pertanyaanss as $pertanyaan)
                                                        <h5 class="card-title">{{ $pertanyaan->nomor }}.
                                                            {{ $pertanyaan->pertanyaan }}
                                                        </h5>
                                                        @if ($pertanyaan->jenis == 'combo')
                                                            <p>{{ $pertanyaan->deskripsi }}</p>
                                                            <div class="row mb-3">
                                                                <legend class="col-form-label col-sm-2 pt-0">Checkboxes
                                                                </legend>
                                                                <div class="col-sm-10">
                                                                    @foreach ($jawabans as $jawaban)
                                                                        @if ($jawaban->pertanyaan_id == $pertanyaan->id)
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" id="gridCheck1"
                                                                                    value="{{ $jawaban->jawaban }}">
                                                                                <label class="form-check-label"
                                                                                    for="gridCheck1">
                                                                                    {{ $jawaban->jawaban }}
                                                                                </label>
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
                                                                                <input class="form-check-input"
                                                                                    type="radio" name="gridRadios"
                                                                                    id="gridRadios1"
                                                                                    value="{{ $jawaban->jawaban }}">
                                                                                <label class="form-check-label"
                                                                                    for="gridRadios1">
                                                                                    {{ $jawaban->jawaban }}
                                                                                </label>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                            </fieldset>
                                                        @elseif ($pertanyaan->jenis == 'text')
                                                            <p>{{ $pertanyaan->deskripsi }}</p>
                                                            <div class="row mb-3">
                                                                <label for="inputText"
                                                                    class="col-sm-2 col-form-label">Text</label>
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
                                                                                <label for="customRange2"
                                                                                    class="form-label">{{ $jawaban->jawaban }}</label>
                                                                                <table style="width:123%">
                                                                                    <tr>
                                                                                        <th>1</th>
                                                                                        <th>2</th>
                                                                                        <th>3</th>
                                                                                        <th>4</th>
                                                                                        <th>5</th>
                                                                                    </tr>
                                                                                </table>
                                                                                <input type="range" class="form-range"
                                                                                    min="1" max="5"
                                                                                    step="1" id="customRange2"
                                                                                    value=""
                                                                                    name="{{ $jawaban->jawaban }}">
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        @elseif ($pertanyaan->jenis == 'paragraf')
                                                            <p>{{ $pertanyaan->deskripsi }}</p>
                                                            <div class="row mb-3">
                                                                <label for="inputPassword"
                                                                    class="col-sm-2 col-form-label">Textarea</label>
                                                                <div class="col-sm-10">
                                                                    <textarea class="form-control" style="height: 100px"></textarea>
                                                                </div>
                                                            </div>
                                                        @endif

                                                        <!-- Vertically centered Modal -->
                                                        <div class="modal fade" id="inputJawaban{{ $pertanyaan->id }}"
                                                            tabindex="-1">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">tambah jawaban untuk nomor
                                                                            {{ $pertanyaan->nomor }}
                                                                        </h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- End Vertically centered Modal-->

                                                        <div class="modal fade" id="editPertanyaan{{ $pertanyaan->id }}"
                                                            tabindex="-1">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Edit Pertanyaan
                                                                            {{ $pertanyaan->nomor }}
                                                                        </h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- End Vertically centered Modal-->
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach

                                </div>

                            </div>

                        </div>

                    </div><!-- End Reports -->

                </div>
            </div><!-- End Left side columns -->



        </div>
    </section>
@endsection
