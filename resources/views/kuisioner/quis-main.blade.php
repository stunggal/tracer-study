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
                                $jenis = array('1' => 'Paragraf', '2' => 'Radio Button', '3' => 'Combo Box');

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
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="{{ $pilih->id_pertanyaan }}" id="{{ $pilih->pilihan_jawaban }}" value="{{ $pilih->pilihan_jawaban }}">
                                                    <label class="form-check-label" for="gridRadios1">
                                                        {{ $pilih->pilihan_jawaban }}
                                                    </label>
                                                </div>
                                            </div>
                                        <?php
                                            $i++;
                                        } elseif ($pilih->id_pertanyaan == $book->id && $book->jenis_jawaban == '3') {
                                        ?>
                                            <div class="form-check">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="{{ $pilih->pilihan_jawaban }}">
                                                    <label class="form-check-label" for="gridCheck1">
                                                        {{ $pilih->pilihan_jawaban }}
                                                    </label>
                                                </div>
                                            </div>
                                        <?php
                                        } elseif ($pilih->id_pertanyaan == $book->id && $book->jenis_jawaban == '4') {
                                        ?>
                                            <textarea class="form-control" style="height: 100px"></textarea>

                                        <?php
                                        }
                                        ?>
                                        @endif
                                        @endforeach

                                    </div>
                                </div><br>
                                <?php $i++ ?>
                                @endforeach
                                <div class="col-md-12 mt-1 mb-2 text-center rounded">
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addNewBook">
                                        <i class="ri-add-circle-line"></i></button>
                                    </button>
                                </div>

                            </div>

                        </div>

                    </div>

                </div><!-- End Reports -->

            </div>
        </div><!-- End Left side columns -->



    </div>
</section>
@endsection