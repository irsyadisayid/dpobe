<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Pengguna</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="name" class="col-sm-4 col-form-label">Nama</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="nama" placeholder="Nama (Sesuai KTP)">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ttl" class="col-sm-4 col-form-label">Tempat/Tanggal Lahir</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="ttl" placeholder="Tempat/Tanggal Lahir (Format : xxxx,dd/MM/yyyy)">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="agama" class="col-sm-4 col-form-label">Agama</label>
                    <div class="col-md-8">
                        <select class="form-control" aria-label="Default select example" name="agama">
                            <option value="Islam">Islam</option>
                            <option value="KristenKhatolik">Kristen Khatolik</option>
                            <option value="KristenProtestan">Kristen Protestan</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="KongHuCu">Kong Hu Cu</option>
                        </select>
                    </div>
                   <!--  <div class="col-sm-8">
                        <input type="text" class="form-control" name="agama" placeholder="Agama">
                    </div> -->
                </div>
                <div class="form-group row">
                    <label for="pekerjaan" class="col-sm-4 col-form-label">Pekerjaan</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kewarganegaraan" class="col-sm-4 col-form-label">kewarganegaraan</label>
                    <div class="col-md-8">
                            <select class="form-control" aria-label="Default select example" name="kewarganegaraan">
                                <option value="WNI">Warga Negara Indonesia (WNI)</option>
                                <option value="WNA">Warga Negara Asing (WNA)</option>
                            </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nohp" class="col-sm-4 col-form-label">No HP</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="nohp" placeholder="No HP">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-4 col-form-label">Password</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" placeholder="Password" name="password" value="<?= set_value('password') ?>" required>
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