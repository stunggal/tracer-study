<!-- Vertically centered Modal -->
<div class="modal fade" id="addNewPilihan" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <form action="javascript:void(0)" id="addEditPilihanForm" name="addEditPilihanForm" class="form-horizontal" method="POST">
                    <input type="hidden" name="id" id="id">
                    <input type="hidden" name="nim_mhs" id="nim_mhs" value="402019611018">

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Pilihan Pertanyaan</label>
                        <div class="col-sm-12">
                            <input type="hidden" name="id" id="id">
                            <input type="hidden" name="id_pertanyaan" id="id_pertanyaan">
                            <input type="text" class="form-control" id="pilihan_jawaban" name="pilihan_jawaban" required>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="btn-save-pilihan" value="addNewPilihan">Save changes</button>

            </div>
        </div>
    </div>
</div>
<!-- End Vertically centered Modal-->