<?= $this->extend('layout/page_layout'); ?>
<!--START CONTENT-->
<?= $this->section('pageContent'); ?>
<!---->



<div class="bg-light" style="margin-top: 0rem; margin-bottom: 1rem">
    <div class="row justify-content-md-center">

        <div class="col-6">
            <h1>Daftar Fotografer</h1>
            <?php if (isset($validation)) : ?>
                <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
            <?php endif; ?>
            <form action="/registerFotografer/saveFotografer" method="post">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="displaypic" class="form-label">Display Pic</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input <?= ($validation->hasError('displaypic')) ? 'is-invalid' : ''; ?>" id="displaypic" name="displaypic">
                        <div class="invalid-feedback">
                            <?= $validation->getError('displaypic'); ?>
                        </div>
                        <label class="custom-file-label" for="displaypic"> Upload Image </label>
                    </div>
                    <!-- <input type="text" name="displaypic" class="form-control" id="displaypic" value="<?= old('displaypic'); ?>"> -->
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Username</label>
                    <input type="text" name="nama" class="form-control  <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" autofocus value="<?= old('nama'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nama'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Sandi</label>
                    <input type="text" name="nama" class="form-control  <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" autofocus value="<?= old('nama'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nama'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email_fotografer" class="form-label"> email_fotografer </label>
                    <input type="text" name="email_fotografer" class="form-control" id="email_fotografer" value="<?= old('email_fotografer'); ?>">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Fotografer</label>
                    <input type="text" name="nama" class="form-control  <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" autofocus value="<?= old('nama'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nama'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="akun_instagram" class="form-label">akun instagram </label>
                    <input type="text" name="akun_instagram" class="form-control" id="akun_instagram" value="<?= old('akun_instagram'); ?>">
                </div>
                <div class="mb-3">
                    <label for="ktp" class="form-label">NIK KTP </label>
                    <input type="text" name="ktp" class="form-control" id="ktp" value="<?= old('ktp'); ?>">
                </div>
                <div class="mb-3">
                    <label for="id_komersil" class="form-label"> Aliran Komersil </label>
                    <br>
                    <?php foreach ($aliran as $index => $j) : ?>
                        <input type="radio" id="id_komersil" name="id_komersil" value="<?= $j['id_komersil']; ?>">
                        <label for="html"><?= $j['nama_aliran']; ?></label><br>
                    <?php endforeach; ?>

                </div>
                <div class="mb-3">
                    <label for="id_alat" class="form-label"> Alat Utama </label>
                    <br>
                    <?php foreach ($alat as $index => $j) : ?>
                        <input type="radio" id="id_alat" name="id_alat" value="<?= $j['id_alat']; ?>">
                        <label for="html"><?= $j['nama_alat']; ?></label><br>
                    <?php endforeach; ?>
                </div>
                <div class="mb-3">
                    <label for="id_kota" class="form-label"> id_kota </label>
                    <br>
                    <?php foreach ($kota as $index => $j) : ?>
                        <input type="radio" id="id_kota" name="id_kota" value="<?= $j['id_kota']; ?>">
                        <label for="html"><?= $j['nama_kota']; ?></label><br>
                    <?php endforeach; ?>
                </div>
                <div class="mb-3">
                    <label for="id_kota" class="form-label"> Kepemilikan Studio </label>
                    <br>
                    <br>

                    <input type="radio" id="id_kepemilikan" name="id_kepemilikan" value="0">
                    <label for="html">Tidak Memiliki</label><br>
                    <input type="radio" id="id_kepemilikan" name="id_kepemilikan" value="1">
                    <label for="html">Memiliki</label><br>
                </div>
                <div class="mb-3">
                    <label for="no_telpon" class="form-label"> no_telpon </label>
                    <input type="text" name="no_telfon" class="form-control" id="no_telpon" value="<?= old('no_telpon'); ?>">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label"> alamat </label>
                    <input type="text" name="no_telfon" class="form-control" id="alamat" value="<?= old('alamat'); ?>">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label"> harga </label>
                    <input type="text" name="no_telfon" class="form-control" id="harga" value="<?= old('harga'); ?>">
                </div>

                <br>
                <button type="submit" class="btn btn-primary">Register</button>
                <br>
                <br>
                <br>
                <br>
                <br>
                <h5><a href="/register"><i>Register Pelanggan</i></a></h5>
            </form>
        </div>

    </div>
</div>

<?= $this->endSection(); ?>