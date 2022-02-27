<?php
//Open form
echo form_open_multipart(base_url('laporan'), 'class="form-horizontal"');
?>
<!-- <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-lg">
    <i class="fa fa-plus"></i>Tambah Laporan
</button> -->
<?php
//Panggil form tambah
include('add.php');
//Closing form
echo form_close();
?>
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<table id="example2" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Hilang</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($laporan as $l => $laporan) { ?>
            <tr>
                <td><?= $l + 1; ?></td>
                <td><?= $laporan->nama ?></td>
                <td><?= $laporan->jekel ?></td>
                <td><?= $laporan->tglhilang ?></td>
                <td>
                    <div class="btn-group">
                        <a href="<?= base_url('laporan/detail/' . $laporan->id) ?>" class="btn btn-primary btn-sm">
                            <i class="fa fa-info-circle">Detail</i>
                        </a>
                        <a href="<?= base_url('laporan/edit/' . $laporan->id) ?>" class="btn btn-warning btn-sm">
                            <i class="fa fa-edit">Edit</i>
                        </a>
                        <a href="<?= base_url('laporan/delete/' . $laporan->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you really want to delete this data ?')">
                            <i class="fa fa-trash">Delete</i>
                        </a>
                        <a href="<?= base_url('laporan/cetaklaporan/' . $laporan->id) ?>" target=_blank class="btn btn-success btn-sm">
                            <i class="fa fa-print">Cetak Laporan</i>
                        </a>
                        <a href="<?= base_url('laporan/cetakposter/' . $laporan->id) ?>"  target=_blank class="btn btn-success btn-sm">
                            <i class="fa fa-print">Cetak Poster</i>
                        </a>

                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>

</table>