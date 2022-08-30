@extends('layouts.main')

@section('sidebar')
@include('layouts.sidebar')

@endsection
<?php

use App\Models\sub_jawaban;
use App\Models\form;
?>
@section('content')
<section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
            <div class="row">

                <!-- Reports -->
                <div class="col-12">
                    <div class="card">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Sudah diisi</a></li>
                                <li><a class="dropdown-item" href="#">Belum diisi</a></li>
                                <li><a class="dropdown-item" href="#">Semua</a></li>
                            </ul>
                        </div>

                        <div class="card-body">

                            <h5 class="card-title">Kuisioner <span>/ Mari isi kuisioner dengan berkualitas untuk menuju unida unggul 2025</span></h5>

                            <div class="container">


                                <?php
                                $i = 1;

                                ?>
                                @foreach ($books as $book)
                                <div class="card">
                                    <h5 class="card-header">No {{ $book->pertanyaan_ke }} </h5>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $book->pertanyaan }}</h5>
                                        <?php $i = 1; ?>
                                        @foreach ($pilihan as $pilih)
                                        @if ($pilih->id_pertanyaan == $book->id)
                                        <?php
                                        $sub_jawaban = sub_jawaban::where('id_pertanyaan', '==', $pilih->id);
                                        // echo '<pre>';print_r($form);die;

                                        if ($pilih->id_pertanyaan == $book->id && $book->jenis_jawaban == '1') {
                                        ?>
                                            <input type="text" class="form-control" id="pertanyaan" name="pertanyaan" placeholder="..." value="" maxlength="50">
                                        <?php
                                        } elseif ($pilih->id_pertanyaan == $book->id && $book->jenis_jawaban == '2') {
                                        ?>
                                            <div class="form-check">
                                                <div class="form-check mt-2">
                                                    <label class="form-check-label" for="gridRadios1">
                                                        {{ $pilih->pilihan_jawaban }}
                                                        <?php if ($pilih->pilihan_jawaban == 'other') : ?>
                                                            <input type="text" class="form-control" name="other_reason" />
                                                        <?php endif; ?>
                                                    </label>
                                                    <input class="form-check-input" type="radio" name="{{ $pilih->id_pertanyaan }}" id="{{ $pilih->pilihan_jawaban }}" value="{{ $pilih->pilihan_jawaban }}">
                                                    
                                                </div>
                                            </div>
                                        <?php
                                            $i++;
                                        } elseif ($pilih->id_pertanyaan == $book->id && $book->jenis_jawaban == '3') {
                                        ?>
                                            <div class="form-check">
                                                <div class="form-check mt-2">
                                                    <label class="form-check-label" for="gridCheck1">
                                                        {{ $pilih->pilihan_jawaban }}
                                                        <input class="form-check-input" type="checkbox" id="{{ $pilih->pilihan_jawaban }}">
                                                        <?php if ($pilih->pilihan_jawaban == 'other') : ?>
                                                            <input type="text" class="form-control" name="other_reason" />
                                                        <?php endif; ?>
                                                    </label>
                                                </div>
                                            </div>
                                        <?php
                                        } elseif ($pilih->id_pertanyaan == $book->id && $book->jenis_jawaban == '4') {
                                        ?>
                                            <textarea class="form-control" style="height: 100px"></textarea>

                                        <?php
                                        } elseif ($pilih->id_pertanyaan == $book->id && $book->jenis_jawaban == '5') {
                                        ?>
                                            <label class="form-check-label mt-2" for="option-">
                                                <strong>
                                                    {{ $pilih->pilihan_jawaban }}
                                                </strong>
                                            </label>
                                            <table style="width:123%">
                                                <tr>
                                                    <th>1</th>
                                                    <th>2</th>
                                                    <th>3</th>
                                                    <th>4</th>
                                                    <th>5</th>
                                                </tr>
                                            </table>
                                            <input type="range" class="form-range" min="1" max="5" step="1" id="{{ $pilih->pilihan_jawaban }}">

                                        <?php
                                        }
                                        ?>
                                        @endif
                                        @endforeach

                                        <button class="badge rounded-pill bg-primary p-2 ms-2 mt-4">Submit</button>
                                    </div>
                                </div><br>
                                <?php $i++ ?>
                                @endforeach


                            </div>

                        </div>

                    </div>

                </div><!-- End Reports -->

            </div>
        </div><!-- End Left side columns -->



    </div>
</section>

<script>
    $(document).ready(function($) {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('body').on('click', '.save-record', function(event) {

            var id = $("#id").val();
            var pertanyaan_ke = $("#pertanyaan_ke").val();
            var pertanyaan = $("#pertanyaan").val();
            var jenis_jawaban = $("#jenis_jawaban").val();
            var nim_mhs = $("#nim_mhs").val();

            $("#btn-save").html('Please Wait...');
            $("#btn-save").attr("disabled", true);

            // ajax
            $.ajax({
                type: "POST",
                url: "{{ url('add-update-book') }}",
                data: {
                    id: id,
                    pertanyaan_ke: pertanyaan_ke,
                    pertanyaan: pertanyaan,
                    jenis_jawaban: jenis_jawaban,
                    nim_mhs: nim_mhs,
                    // author: author,
                },
                dataType: 'json',
                success: function(res) {
                    window.location.reload();
                    $("#btn-save").html('Submit');
                    $("#btn-save").attr("disabled", false);
                }
            });

        });

    });
</script>
@endsection