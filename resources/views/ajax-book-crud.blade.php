<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Laravel 9 Ajax CRUD Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container mt-2">

        <div class="row">

            <div class="col-md-12 card-header text-center font-weight-bold">
                <h2>Laravel 9 Ajax Book CRUD Tutorial</h2>
            </div>
            <div class="col-md-12 mt-1 mb-2"><button type="button" id="addNewBook" class="btn btn-success">Tambah Pertanyaan</button></div>

        </div>

        <?php $i = 1 ?>
        @foreach ($books as $book)
        <div class="card">
            <h5 class="card-header">Pertanyaan {{ $book->pertanyaan_ke }}
                <a href="javascript:void(0)" class="btn float-right ml-2 btn-primary delete" data-id="{{ $book->id }}">Jenis Pertanyaan</a>
                <p class="float-right">Paragraf</p>
            </h5>
            <div class="card-body">
                <h5 class="card-title">{{ $book->pertanyaan }}</h5>
                <p class="card-text">{{ $book->pertanyaan }}</p>
                <a href="javascript:void(0)" class="btn float-right btn-primary delete" data-id="{{ $book->id }}">Delete Pertanyaan</a>
                <a href="javascript:void(0)" class="btn float-right mr-2 btn-primary" data-id="{{ $book->id }}">Delete</a>
            </div>
        </div><br>
        <?php $i++ ?>
        @endforeach
        
        <div class="col-md-12 mt-1 mb-2 text-center"><button type="button" id="addNewBook" class="btn btn-success"></button><i class="ri-add-circle-line"></i></div>
    </div>

    <!-- boostrap model -->
    <div class="modal fade" id="ajax-book-model" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="ajaxBookModel"></h4>
                </div>
                <div class="modal-body">
                    <form action="javascript:void(0)" id="addEditBookForm" name="addEditBookForm" class="form-horizontal" method="POST">
                        <input type="hidden" name="id" id="id">

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Pertanyaan ke</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="pertanyaan_ke" name="pertanyaan_ke" placeholder="Ex : 1" value="" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Pertanyaan</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="pertanyaan" name="pertanyaan" placeholder="Ex : Tahun berapa anda lulus" value="" maxlength="50" required="">
                            </div>
                        </div>


                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary" id="btn-save" value="addNewBook">Save changes
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
    <!-- end bootstrap model -->
    
    <script type="text/javascript">
        $(document).ready(function($) {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#addNewBook').click(function() {
                $('#addEditBookForm').trigger("reset");
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
                        $('#pertanyaan_ke').val(res.title);
                        $('#pertanyaan').val(res.code);
                        // $('#author').val(res.author);
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
</body>

</html>