<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Daftar Pencarian Orang</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?= set_value('nama') ?>" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Tempat/Tanggal Lahir </label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="xxxx,dd/MM/yyyy" class="form-control" name="ttl" value="<?= set_value('ttl') ?>" required >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jekel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select class="form-control" aria-label="Default select example" name="jekel">
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Tinggi Badan</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" placeholder="Tinggi Badan" name="tb" value="<?= set_value('tb') ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tglhilang" class="col-sm-2 col-form-label">Rambut</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Rambut" name="rambut" value="<?= set_value('rambut') ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nohp" class="col-sm-2 col-form-label">Kulit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Kulit" name="kulit" value="<?= set_value('kulit') ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="mata" class="col-sm-2 col-form-label">Mata</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Mata" name="mata" value="<?= set_value('mata') ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nohp" class="col-sm-2 col-form-label">Ciri Khusus</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Ciri Khusus" name="cirik" value="<?= set_value('cirik') ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tglhilang" class="col-sm-2 col-form-label">Tanggal Hilang</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" placeholder="Tanggal Hilang" name="tglhilang" value="<?= set_value('tglhilang') ?>" required>
                    </div>
                </div><div class="form-group row">
                    <label for="infot" class="col-sm-2 col-form-label">Info Terakhir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Info Terakhir" name="infot" value="<?= set_value('infot') ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="photo" class="col-sm-2 col-form-label">Photo</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="photo">
                    </div>
                </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->