<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-6"><a href="<?= base_url() ?>Sembako/tambah" class="btn btn-info mb-2">Tambah
                Sembako</a></div>
        <div class="col-md-12">
            <table class="table"> -->
    <?= $this->session->flashdata('message') ?>
    <div class="clearfix">
        <div class="float-left">
            <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        </div>
        <div class="float-right">
            <a href="<?= base_url() ?>Sembako/tambah" class="btn btn-info mb-2">Tambah
                Sembako</a>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Gambar</td>
                            <td>Nama Sembako</td>
                            <td>Stok</td>
                            <td>Harga</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($sembako as $us) : ?>
                            <tr>
                                <td><?= $i; ?>.</td>
                                <td><img src="<?= base_url('assets/img/sembako/') . $us['gambar']; ?>" style="width : 100px;" class="img-thumbnail"></td>
                                <td><?= $us['nama']; ?></td>
                                <td><?= $us['stok']; ?></td>
                                <td><?= $us['harga']; ?></td>
                                <td>
                                    <a href="<?= base_url('Sembako/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
                                    <a href="<?= base_url('Sembako/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
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
<!-- /.container-fluid -->