<?= $this->extend('layout/page_layout'); ?>
<?= $this->section('pageContent'); ?>

<div class="container">
    <div class="row">
        <div class="row-8">
            <h2 class="">Form Input Data </h2>
            <form action="/Databasetest/saveFoto" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="id_fotografer" class="form-label"> No Id Fotografer </label>
                    <input type="text" name="id_fotografer" class="form-control  <?= ($validation->hasError('id_fotografer')) ? 'is-invalid' : ''; ?>" id="id_fotografer" autofocus value="<?= old('id_fotografer'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('id_fotografer'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="judul" class="form-label"> Judul</label>
                    <input type="text" name="judul" class="form-control" id="judul" value="<?= old('judul'); ?>" autofocus>
                </div>
                <div class="mb-3">
                    <label for="file_foto" class="form-label">File Foto</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input <?= ($validation->hasError('file_foto')) ? 'is-invalid' : ''; ?>" id="file_foto" name="file_foto">
                        <div class="invalid-feedback">
                            <?= $validation->getError('file_foto'); ?>
                        </div>
                        <label class="custom-file-label" for="file_foto"> Upload Image </label>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>