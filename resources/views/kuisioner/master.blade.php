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
        <div class="col-lg-8">
            <div class="row">


            @include('layouts.modal-pertanyaan-input')

                <!-- Reports -->
                <div class="col-12">
                    <div class="card">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Active</a></li>
                                <li><a class="dropdown-item" href="#">Non Active</a></li>
                            </ul>
                        </div>

                        <div class="card-body">

                            <h5 class="card-title">Kuisioner <span>/ Mari buat kuisioner yang berkualitas untuk menuju unida unggul 2025</span></h5>

                            <div class="container">

                                <button type="button" class="btn btn-primary rounded bg-success p-1 ms-1 mb-3" data-bs-toggle="modal" data-bs-target="#addNewBook">
                                    Buat Pertanyaan
                                </button>



                                <?php $i = 1 ?>
                                @foreach ($books as $book)
                                <div class="card">
                                    <h5 class="card-header">Pertanyaan {{ $book->pertanyaan_ke }} | Paragraf
                                        <a href="javascript:void(0)" class="btn btn-primary delete" data-bs-target="{{ $book->id }}">Jenis</a>
                                    </h5>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $book->pertanyaan }}</h5>
                                        <p class="card-text">Jenis jawaban: {{ $book->jenis_jawaban }}</p>

                                        <a href="javascript:void(0)" class="btn float-right mr-2 btn-danger delete" data-id="{{ $book->id }}">Delete Jawaban</a>
                                        <a href="javascript:void(0)" class="btn float-right btn-danger delete" data-id="{{ $book->id }}">Delete Pertanyaan</a>
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

        </div><!-- End Right side columns -->

    </div>
</section>

<script type="text/javascript">
    $(document).ready(function($) {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#addNewBook').click(function() {
            // $('#pertanyaan_ke').trigger("reset");
            // $('#pertanyaan').trigger("reset");
            $('#ajaxBookModel').html("Add Book");
            $('#ajax-book-model').modal('show');
        });

        $('body').on('click', '.edit', function() {

            var id = $(this).data('id');

            // ajax
            $.ajax({
                type: "POST",
                url: "{{ url('edit-book') }}",
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(res) {
                    $('#ajaxBookModel').html("Edit Book");
                    $('#ajax-book-model').modal('show');
                    $('#id').val(res.id);
                    $('#pertanyaan_ke').val(res.pertanyaan_ke);
                    $('#pertanyaan').val(res.pertanyaan);
                    $('#jenis_jawaban').val(res.jenis_jawaban);
                    $('#nim_mhs').val(res.nim_mhs);
                }
            });

        });

        $('body').on('click', '.delete', function() {

            if (confirm("Delete Record?") == true) {
                var id = $(this).data('id');

                // ajax
                $.ajax({
                    type: "POST",
                    url: "{{ url('delete-book') }}",
                    data: {
                        id: id
                    },
                    dataType: 'json',
                    success: function(res) {

                        window.location.reload();
                    }
                });
            }

        });

        $('body').on('click', '#btn-save', function(event) {

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