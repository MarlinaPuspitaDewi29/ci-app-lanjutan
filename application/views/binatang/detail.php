<div class="conainer">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Daftar Binatang
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $binatang['nama']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $binatang['asal']; ?></h6>
                    <p class="card-text"><?= $binatang['namalatin']; ?></p>
                    <p class="card-text"><?= $binatang['tingkattaksonomi']; ?></p>
                    <p class="card-text"><?= $binatang['makanan']; ?></p>

                    <a href="<?= base_url(); ?>binatang" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>