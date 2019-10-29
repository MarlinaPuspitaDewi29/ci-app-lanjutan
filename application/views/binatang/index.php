<div class="container">

    <?php if ($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">Daftar Binatang
                <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>binatang/tambah" class="btn btn-primary">Tambah Daftar Binatang</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari daftar binatang.." name="keyword">
                    <div class=" input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h3>Daftar Binatang</h3>
            <?php if (empty($binatang)) : ?>
            <div class="alert alert-danger" role="alert">
                daftar binatang tidak ditemukan.
            </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($binatang as $bnt) : ?>
                <li class="list-group-item">
                    <?= $bnt['nama']; ?>
                    <a href="<?= base_url(); ?>binatang/hapus/<?= $bnt['id']; ?>" class="badge badge-danger float-right"
                        onclick="return confirm('yakin?');">hapus</a>
                    <a href="<?= base_url(); ?>binatang/ubah/<?= $bnt['id']; ?>" class="badge badge-success float-right"
                        onclick="return confirm('yakin?');">ubah</a>
                    <a href="<?= base_url(); ?>binatang/detail/<?= $bnt['id']; ?>"
                        class="badge badge-primary float-right">detail</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>