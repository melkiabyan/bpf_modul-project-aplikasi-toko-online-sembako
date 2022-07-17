<div class="container-fluid">
    <!-- <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-6">
            <a href="<?= base_url() ?>Mahasiswa/tambah" class="btn btn-info mb-2">Tambah
                Mahasiswa</a>
        </div> -->
    <?= $this->session->flashdata('message') ?>
    <div class="clearfix">
        <div class="float-left">
            <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        </div>
        <div class="float-right">
            <a href="<?= base_url() ?>Masjid/tambah" class="btn btn-info mb-2">Tambah
                Masjid</a>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-left">No</th>
                            <th>Tanggal</th>
                            <th>Uraian</th>
                            <th>Jumlah</th>
                            <th>Bukti</th>
                            <th>Aksi</th>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($masjid as $us) : ?>
                            <tr>
                                <td> <?= $i; ?>.</td>
                                <td><?= $us['tgl_pemasukan']; ?></td>
                                <td><?= $us['uraian_pemasukan']; ?></td>
                                <td><?= $us['masuk']; ?></td>
                                <td><?= $us['gambar']; ?></td>
                                <td>
                                    <a href="<?= base_url('Mahasiswa/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
                                    <a href="<?= base_url('Mahasiswa/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
                                    <a href="<?= base_url('Mahasiswa/detail/') . $us['id']; ?>" class="badge badge-info">Detail</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>