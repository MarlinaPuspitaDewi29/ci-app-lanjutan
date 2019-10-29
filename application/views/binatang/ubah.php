<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Daftar Binatang
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $binatang['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama"
                                value="<?= $binatang['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>

                        </div>
                        <div class="form-group">
                            <label for="asal">Asal</label>
                            <input type="text" name="asal" class="form-control" id="asal"
                                value="<?= $binatang['asal']; ?>">
                            <small class="form-text text-danger"><?= form_error('asal'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="namalatin">Nama Latin</label>
                            <input type="text" name="namalatin" class="form-control" id="namalatin"
                                value="<?= $binatang['namalatin']; ?>">
                            <small class="form-text text-danger"><?= form_error('namalatin'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tingkattaksonomi">Tingkat Taksonomi</label>
                            <input type="text" name="tingkattaksonomi" class="form-control" id="tingkattaksonomi"
                                value="<?= $binatang['tingkattaksonomi']; ?>">
                            <small class="form-text text-danger"><?= form_error('tingkattaksonomi'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="makanan">Makanan</label>
                            <select class="form-control" id="makanan" name="makanan">
                                <?php foreach ($sayuran as $s) : ?>
                                <?php if ($s == $binatang['makanan']) : ?>
                                <option value="<?= $s; ?>" selected><?= $s; ?></option>
                                <?php else : ?>
                                <option value="<?= $s; ?>"><?= $s; ?></option>
                                <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>