<?php
//form edit open
echo form_open_multipart(base_url('laporan/edit/' . $laporan->id));
?>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?= $laporan->nama ?>" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Tempat/Tanggal Lahir </label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="xxxx,dd/MM/yyyy" class="form-control" name="ttl" value="<?= $laporan->ttl ?>" required >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jekel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select class="form-control" aria-label="Default select example" name="jekel">
                            <!-- <option value="<?= $laporan->jekel ?>" selected><?= $laporan->jekel ?></option> -->
                            <option value="Laki-Laki" <?= ($laporan->jekel=="Laki-Laki"?"selected":"");   ?> >Laki-Laki</option>
                            <option value="Perempuan" <?= ($laporan->jekel=="Perempuan"?"selected":"");   ?>>Perempuan</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Tinggi Badan</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" placeholder="Tinggi Badan" name="tb" value="<?= $laporan->tb ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tglhilang" class="col-sm-2 col-form-label">Rambut</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Rambut" name="rambut" value="<?= $laporan->rambut ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nohp" class="col-sm-2 col-form-label">Kulit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Kulit" name="kulit" value="<?= $laporan->kulit ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="mata" class="col-sm-2 col-form-label">Mata</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Mata" name="mata" value="<?= $laporan->mata?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nohp" class="col-sm-2 col-form-label">Ciri Khusus</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Ciri Khusus" name="cirik" value="<?= $laporan->cirik ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tglhilang" class="col-sm-2 col-form-label">Tanggal Hilang</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" placeholder="Tanggal Hilang" name="tglhilang" id="tglhilang" value="<?=$laporan->tglhilang ?>" required>
                    </div>
                </div><div class="form-group row">
                    <label for="infot" class="col-sm-2 col-form-label">Info Terakhir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Info Terakhir" name="infot" value="<?= $laporan->infot ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="photo" class="col-sm-2 col-form-label">Photo</label>
                    <div class="col-sm-10">

                    <?php if(url_exists("http:127.0.0.1:8999/images/".$laporan->photo)){ ?>
                        <img src="http:127.0.0.1:8999/images/<?= $laporan->photo ?>" class="img-thumbnail" width="300px">
                    <?php }else{ ?>
                    <img src="<?php echo base_url() ?>assets/images/<?= $laporan->photo ?>" class="img-thumbnail" width="300px">
                    <?php }?>
                  
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="photo">
                    </div>
                </div>
<div class="form-group row">
    <label for="role" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-10">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save </button>
        <button type="reset" class="btn btn-primary"><i class="fa fa-times"></i> Reset </button>
        <a class="btn btn-default" href="<?= base_url('laporan') ?>"><i class="fa fa-backward"></i> Back </a>
    </div>
</div>
<?php
echo form_close();
?>

<?php 

function url_exists($url) {
    $hdrs = @get_headers($url);

    // echo @$hdrs[1]."\n";

    return is_array($hdrs) ? preg_match('/^HTTP\\/\\d+\\.\\d+\\s+2\\d\\d\\s+.*$/',$hdrs[0]) : false;
}

?>

<?php 
    function getDates($date) {
        return $date->tglhilang;
    }
    
    
?>
<script>
    let tglhilang = document.getElementById("tglhilang")
    let splitDate = tglhilang.defaultValue.split("/")
    let dateJoin = `20${splitDate[2]}-${splitDate[0]}-${splitDate[1]}`
    tglhilang.value = dateJoin
</script>