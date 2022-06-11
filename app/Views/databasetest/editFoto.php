<?= $this->extend('layout/page_layout'); ?>
<?= $this->section('pageContent'); ?>

<div class="container">
    <div class="row">
        <div class="row-8">
            <h2 class="">Form Edit Data </h2>

            <form action="/Databasetest/updateFoto/<?= $foto['id_foto']; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="id_foto" id="<?= $foto['id_foto']; ?>">
                <input type="hidden" name="oldfile_foto" id="<?= $foto['file_foto']; ?>">

                <div class="mb-3">
                    <label for="file_foto" class="form-label">Display Pic</label>
                    <img src="/file_foto/<?= $foto['file_foto']; ?>" class="img-thumbnail img-preview">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input <?= ($validation->hasError('file_foto')) ? 'is-invalid' : ''; ?>" id="file_foto" name="file_foto" onchange="previewImg()">
                        <div class="invalid-feedback">
                            <?= $validation->getError('file_foto'); ?>
                        </div>
                        <label class="custom-file-label" for="file_foto"> <?= $foto['file_foto']; ?> </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="id_fotografer" class="form-label">Id fotografer</label>
                    <input type="text" name="id_fotografer" class="form-control  <?= ($validation->hasError('id_fotografer')) ? 'is-invalid' : ''; ?>" id="id_fotografer" autofocus value="<?= $foto['id_fotografer']; ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('id_fotografer'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="judul" class="form-label">judul foto</label>
                    <input type="text" name="judul" class="form-control  <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" autofocus value="<?= $foto['judul']; ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('judul'); ?>
                    </div>
                </div>

                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>