<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Daftar Binatang
                </div>
                <div class="card-body">
                </div>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama">
                        <small class="form-text text-danger"><?= form_error('nama'); ?></small>

                    </div>
                    <div class="form-group">
                        <label for="asal">Asal</label>
                        <input type="text" name="asal" class="form-control" id="asal">
                        <small class="form-text text-danger"><?= form_error('asal'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="namalatin">Nama Latin</label>
                        <input type="text" name="namalatin" class="form-control" id="namalatin">
                        <small class="form-text text-danger"><?= form_error('namalatin'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="tingkattaksonomi">Tingkat Taksonomi</label>
                        <input type="text" name="tingkattaksonomi" class="form-control" id="tingkattaksonomi">
                        <small class="form-text text-danger"><?= form_error('tingkattaksonomi'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="makanan">Makanan</label>
                        <select class="form-control" id="makanan" name="makanan">
                            <option value="sayuran">Sayuran</option>
                            <option value="daging">Daging</option>
                            <option value="rumput">Rumput</option>
                            <option value="lainlain">Lain-Lain</option>
                        </select>
                    </div>
                    <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                </form>
            </div>
        </div>


    </div>
</div>

</div>