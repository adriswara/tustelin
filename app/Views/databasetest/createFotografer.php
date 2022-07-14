<?= $this->extend('layout/page_layout'); ?>
<?= $this->section('pageContent'); ?>

<div class="container">
    <div class="row">
        <div class="row-8">
            <h2 class="">Form Input Data </h2>

            <form action="/Databasetest/saveFotografer" method="post" enctype="multipart/form-data">
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
                    <label for="id_komersil" class="form-label"> id_komersil </label>
                    <input type="text" name="id_komersil" class="form-control" id="id_komersil" value="<?= old('id_komersil'); ?>">
                </div>
                <div class="mb-3">
                    <label for="id_alat" class="form-label"> id_alat </label>
                    <input type="text" name="id_alat" class="form-control" id="id_alat" value="<?= old('id_alat'); ?>">
                </div>
                <div class="mb-3">
                    <label for="id_kota" class="form-label"> id_kota </label>
                    <input type="text" name="id_kota" class="form-control" id="id_kota" value="<?= old('id_kota'); ?>">
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
                <div class="mb-3">
                    <label for="email_fotografer" class="form-label"> email_fotografer </label>
                    <input type="text" name="no_telfon" class="form-control" id="email_fotografer" value="<?= old('email_fotografer'); ?>">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>