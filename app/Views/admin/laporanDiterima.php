<?= $this->extend('layouts/templateAdmin'); ?>

<?= $this->section('contentAdmin'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-3">Daftar Laporan Diterima</h2>
            <a id="button" class="btn btn-primary mb-3" href="/Admin/lihatLaporan">
                <i class="bi bi-journal-text"></i> Laporan Masuk
            </a><br>
            <?php if (!empty(session()->getFlashdata('success'))) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo session()->getFlashdata('success'); ?>
                </div>
            <?php endif; ?>
            <input type="text" class="cd-search table-filter" data-table="table" placeholder="Cari" />
            <table class="table table-bordered table-striped">
                <thead class="bg-secondary">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pelapor</th>
                        <th scope="col">Pelapor</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Kerusakan</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">User</th>
                        <th scope="col">Bukti</th>
                        <th scope="col">Tanggal Laporan</th>
                        <th scope="col" style="width: 130px;">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no  = 1;
                    foreach ($laporan as $value) {
                    ?>
                        <tr>
                            <th><?= $no++; ?></th>
                            <td><?= $value->nama_pelapor; ?> </td>
                            <td><?= $value->pelapor; ?> </td>
                            <td><?= $value->lokasi; ?> </td>
                            <td><?= $value->jenis_kerusakan; ?> </td>
                            <td><?= $value->deskripsi; ?> </td>
                            <td><?= $value->user; ?> </td>
                            <td><a href="<?= base_url('uploads/bukti/' . $value->bukti); ?>"><img width="100px" src="<?= base_url('uploads/bukti/' . $value->bukti); ?>" alt="Bukti"></a></td>
                            <td><?= $value->created_at; ?> </td>
                            <td>
                                <a class="btn btn-success"><i class="bi bi-check-circle-fill"> Diterima</i></a>
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

<?= $this->endSection('contentAdmin'); ?>