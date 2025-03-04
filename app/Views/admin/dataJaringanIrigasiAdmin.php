<?= $this->extend('layouts/templateAdmin'); ?>

<?= $this->section('contentAdmin'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-3">Berkas Jaringan Irigasi</h2>
            <?php if (!empty(session()->getFlashdata('success'))) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo session()->getFlashdata('success'); ?>
                </div>
            <?php endif; ?>
            <button id="button" type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#tambahDataJaringan">
                <i class="bi bi-plus-square"></i> Tambah Berkas
            </button> <br>
            <input type="text" class="cd-search table-filter" data-table="table" placeholder="Cari" />
            <table class="table table-bordered table-striped">
                <thead class="bg-secondary">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no  = 1;
                    foreach ($berkas as $value) {
                    ?>
                        <tr>
                            <th><?= $no++; ?></th>
                            <td> <?= $value->nama_daerah; ?> </td>
                            <td>
                                <a href="<?= base_url(); ?>Berkas/updateJaringan/<?= $value->id_berkas; ?>" class="btn btn-success mx-1px"><i class="bi bi-pencil-square"></i> Update</a>
                                <a href="<?= base_url(); ?>Berkas/deleteJaringan/<?= $value->id_berkas; ?>" class="btn btn-danger mx-1px"><i class="bi bi-trash"></i> Delete</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Modal Upload -->
<div class="modal fade" id="tambahDataJaringan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url(); ?>/Berkas/saveJaringan" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="nama_daerah" class="form-label">Nama Daerah</label>
                        <input type="text" class="form-control" id="nama_daerah" name="nama_daerah" autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="pdf" class="form-label">Data</label>
                        <input type="file" class="form-control" id="pdf" name="pdf">
                    </div>
                    <button id="button" type="submit" class="btn btn-primary">Upload</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection('contentAdmin'); ?>