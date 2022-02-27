<?php
//Open form
echo form_open(base_url('pengguna'), 'class="form-horizontal"');
?>
<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-lg">
    <i class="fa fa-plus"></i>Tambah Pengguna
</button>
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
            <th>Name</th>
            <th>Create at</th>
            <th>Updated_at</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pengguna as $p => $pengguna) { ?>
            <tr>
                <td><?= $p + 1; ?></td>
                <td><?= $pengguna->nama ?></td>
                <td><?= $pengguna->created_at ?></td>
                <td><?= $pengguna->updated_at ?></td>
                <td>
                    <div class="btn-group">
                        <a href="<?= base_url('pengguna/detail/' . $pengguna->id) ?>" class="btn btn-primary btn-sm">
                            <i class="fa fa-info">Detail</i>
                        </a>
                        <a href="<?= base_url('pengguna/edit/' . $pengguna->id) ?>" class="btn btn-warning btn-sm">
                            <i class="fa fa-edit">Edit</i>
                        </a>
                        <a href="<?= base_url('pengguna/delete/' . $pengguna->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you really want to delete this data ?')">
                            <i class="fa fa-trash">Delete</i>
                        </a>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>

</table>