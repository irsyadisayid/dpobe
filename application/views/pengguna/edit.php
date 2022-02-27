<?php
//form edit open
echo form_open(base_url('pengguna/edit/' . $pengguna->id));
?>
<div class="form-group row">
    <label for="name" class="col-sm-4 col-form-label">Nama</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?= $pengguna->nama ?>" required>
    </div>
</div>
<div class="form-group row">
    <label for="ttl" class="col-sm-4 col-form-label">Tempat/Tanggal Lahir</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" name="ttl" value="<?= $pengguna->ttl ?>" required>
    </div>
</div>
<div class="form-group row">
<label for="agama" class="col-sm-4 col-form-label">Agama</label>
    <div class="col-md-8">
    <select class="form-control" aria-label="Default select example" name="agama">
            <option value="Islam"<?= ($pengguna->agama=="Islam"?"selected":""); ?>>Islam</option>
            <option value="KristenKhatolik"<?= ($pengguna->agama=="KristenKhatolik"?"selected":""); ?>>Kristen Khatolik</option>
            <option value="KristenProtestan"<?= ($pengguna->agama=="KristenProtestan"?"selected":""); ?>>Kristen Protestan</option>
            <option value="Hindu"<?= ($pengguna->agama=="Hindu"?"selected":""); ?>>Hindu</option>
            <option value="Budha"<?= ($pengguna->agama=="Budha"?"selected":""); ?>>Budha</option>
            <option value="KongHuCu"<?= ($pengguna->agama=="KongHuCu"?"selected":""); ?>>Kong Hu Cu</option>
    </select>
    </div>
</div>
<div class="form-group row">
    <label for="pekerjaan" class="col-sm-4 col-form-label">Pekerjaan</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" name="pekerjaan" value="<?= $pengguna->pekerjaan ?>" required>
    </div>
</div>
<div class="form-group row">
    <label for="kewarganegaraan" class="col-sm-4 col-form-label">kewarganegaraan</label>
    <div class="col-md-8">
        <select class="form-control" aria-label="Default select example" name="kewarganegaraan">
            <option value="WNI"<?= ($pengguna->kewarganegaraan=="WNI"?"selected":""); ?>>WNI</option>
            <option value="WNA"<?= ($pengguna->kewarganegaraan=="WNA"?"selected":""); ?>>WNA</option>
        </select>
    </div>
</div>
<div class="form-group row">
    <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" name="alamat" value="<?= $pengguna->alamat ?>" required>
    </div>
</div>
<div class="form-group row">
    <label for="nohp" class="col-sm-4 col-form-label">No HP</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" name="nohp" value="<?= $pengguna->nohp ?>" required>
    </div>
</div>
<div class="form-group row">
    <label for="email" class="col-sm-4 col-form-label">Email</label>
    <div class="col-sm-8">
        <input type="email" class="form-control" placeholder="Email" name="email" value="<?= $pengguna->email ?>" required>
    </div>
</div>
<div class="form-group row">
    <label for="password" class="col-sm-4 col-form-label">Password</label>
    <div class="col-sm-8">
        <input type="password" class="form-control" placeholder="Password" name="password" value="<?= set_value('password') ?>">
        <small class="text-danger ">Minimum 6 characters or maximum 32 characters or empty</small>
    </div>
</div>
<div class="form-group row">
    <label for="role" class="col-sm-4 col-form-label"></label>
    <div class="col-sm-8">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save </button>
        <button type="reset" class="btn btn-primary"><i class="fa fa-times"></i> Reset </button>
        <a class="btn btn-default" href="<?= base_url('pengguna') ?>"><i class="fa fa-backward"></i> Back </a>
    </div>
</div>
<?php
echo form_close();
?>