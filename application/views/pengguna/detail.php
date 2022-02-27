<div class="form-group row">
    <label for="name" class="col-sm-4 col-form-label">Nama</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" name="nama" value="<?= $pengguna->nama ?>" required disabled>
    </div>
</div>
<div class="form-group row">
    <label for="ttl" class="col-sm-4 col-form-label">Tempat/Tanggal Lahir</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" name="ttl" value="<?= $pengguna->ttl ?>" required disabled>
    </div>
</div>
<div class="form-group row">
    <label for="agama" class="col-sm-4 col-form-label">Agama</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" name="agama" value="<?= $pengguna->agama ?>" required disabled>
    </div>
</div>
<div class="form-group row">
    <label for="pekerjaan" class="col-sm-4 col-form-label">Pekerjaan</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" name="pekerjaan" value="<?= $pengguna->pekerjaan ?>" required disabled>
    </div>
</div>
<div class="form-group row">
    <label for="kewarganegaraan" class="col-sm-4 col-form-label">kewarganegaraan</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" name="kewarganegaraan" value="<?= $pengguna->kewarganegaraan ?>" required disabled>
    </div>
</div>
<div class="form-group row">
    <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" name="alamat" value="<?= $pengguna->alamat ?>" required disabled>
    </div>
</div>
<div class="form-group row">
    <label for="nohp" class="col-sm-4 col-form-label">No HP</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" name="nohp" value="<?= $pengguna->nohp ?>" required disabled>
    </div>
</div>
<div class="form-group row">
    <label for="email" class="col-sm-4 col-form-label">Email</label>
    <div class="col-sm-8">
        <input type="email" class="form-control" name="email" value="<?= $pengguna->email ?>" required disabled>
    </div>
</div>
<div class="form-group row">
    <label for="role" class="col-sm-4 col-form-label"></label>
    <div class="col-sm-8">
        <a class="btn btn-default" href="<?= base_url('pengguna') ?>"><i class="fa fa-backward"></i> Back </a>
    </div>
</div>