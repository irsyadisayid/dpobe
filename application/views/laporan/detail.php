<?php

?>
<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Nama </label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="nama" value="<?= $laporan->nama ?>" required disabled>
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Tempat/Tanggal Lahir </label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="ttl" value="<?= $laporan->ttl ?>" required disabled>
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Jenis Kelamin</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="jekel" value="<?= $laporan->jekel ?>" required disabled>
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Tinggi Badan </label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="tb" value="<?= $laporan->tb ?>" required disabled>
    </div>
</div>
<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Rambut </label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="rambut" value="<?= $laporan->rambut ?>" required disabled>
    </div>
</div>
<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Kulit </label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="kulit" value="<?= $laporan->kulit ?>" required disabled>
    </div>
</div>
<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Mata </label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="mata" value="<?= $laporan->mata ?>" required disabled>
    </div>
</div>
<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Ciri Khusus </label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="cirik" value="<?= $laporan->cirik ?>" required disabled>
    </div>
</div>
<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Tanggal Hilang </label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="tglhilang" value="<?= $laporan->tglhilang ?>" required disabled>
    </div>
</div>
<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Info Terakhir </label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="infot" value="<?= $laporan->infot ?>" required disabled>
    </div>
</div>
<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Photo </label>
    <div class="col-sm-10">
    <?php if(url_exists("http://54.175.111.193/images/".$laporan->photo)){ ?>
                        <img src="http://54.175.111.193/images/<?= $laporan->photo ?>" class="img-thumbnail" width="300px">
                    <?php }else{ ?>
                    <img src="<?php echo base_url() ?>assets/images/<?= $laporan->photo ?>" class="img-thumbnail" width="300px">
                    <?php }?>
        
    </div>
</div>
<!-- <img src="http:192.168.100.10:8000/images/1645363876IMG_20211224_231050.jpg"> -->
<div class="form-group row">
    <label for="role" class="col-sm-6 col-form-label"></label>
    <div class="col-sm-6">
        <a class="btn btn-default" href="<?= base_url('laporan') ?>"><i class="fa fa-backward"></i> Back </a>
    </div>
</div>


<?php 

function url_exists($url) {
    $hdrs = @get_headers($url);

    // echo @$hdrs[1]."\n";

    return is_array($hdrs) ? preg_match('/^HTTP\\/\\d+\\.\\d+\\s+2\\d\\d\\s+.*$/',$hdrs[0]) : false;
}

?>


<?php
echo form_close();
?>