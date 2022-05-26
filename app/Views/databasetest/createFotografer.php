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
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>