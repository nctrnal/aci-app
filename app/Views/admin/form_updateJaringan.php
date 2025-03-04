<?= $this->extend('layouts/templateAdmin'); ?>

<?= $this->section('contentAdmin'); ?>

<div class="container">
    <div class="row">
        <h2 class="judul-data">Form Update Data</h2>
        <div class="col">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>

                <div class="alert alert-danger" role="alert">
                    <h4>Periksa Entrian Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>
            <form method="post" action="<?= base_url('Berkas/updateDataJaringan/' . $berkas->id_berkas) ?>" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="nama_daerah" class="form-label">Nama Daerah</label>
                    <input type="text" class="form-control" id="nama_daerah" name="nama_daerah" value="<?= $berkas->nama_daerah; ?>">
                </div>
                <div class="mb-3">
                    <label for="pdf" class="form-label">Data</label>
                    <input type="file" class="form-control" id="pdf" name="pdf" value="<?= $berkas->pdf; ?>">
                </div>
                <button id="button" type="submit" class="btn btn-primary" value="submit">Update</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection('contentAdmin'); ?>