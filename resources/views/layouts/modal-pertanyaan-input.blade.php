<!-- Vertically centered Modal -->
<div class="modal fade" id="addNewBook" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <form action="javascript:void(0)" id="addEditBookForm" name="addEditBookForm" class="form-horizontal" method="POST">
                    <input type="hidden" name="id" id="id">
                    <input type="hidden" name="nim_mhs" id="nim_mhs" value="402019611018">

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Pertanyaan ke</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="pertanyaan_ke" name="pertanyaan_ke" placeholder="Example : 1" value="" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-4 control-label">Pertanyaan</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="pertanyaan" name="pertanyaan" placeholder="Example : Tahun berapa anda lulus" value="" maxlength="50" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-4 control-label">Jenis Jawaban</label>
                        <div class="col-sm-12">
                            <select class="form-select" aria-label="Default select example"  id="jenis_jawaban" name="jenis_jawaban">
                                <option selected>Pilih jenis soal</option>
                                <option value="1">Paragraf</option>
                                <option value="2">Radio Button</option>
                                <option value="3">Combo Box</option>
                            </select>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="btn-save" value="addNewBook">Save changes</button>

            </div>
        </div>
    </div>
</div>
<!-- End Vertically centered Modal-->