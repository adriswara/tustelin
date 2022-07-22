<?= $this->extend('layout/page_layout'); ?>
<?= $this->section('pageContent'); ?>

<div class="container">
    <div class="row">
        <div class="row-8">
            <h2 class="">Form Edit Data </h2>

            <form action="/Profile/updateProfile/<?= $fotografer['id_fotografer']; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="id_fotografer" id="<?= $fotografer['id_fotografer']; ?>">
                <input type="hidden" name="olddisplaypic" id="<?= $fotografer['displaypic']; ?>">

                <div class="mb-3">
                    <label for="displaypic" class="form-label">Display Pic</label>
                    <img src="/displaypic/<?= $fotografer['displaypic']; ?>" class="img-thumbnail img-preview">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input <?= ($validation->hasError('displaypic')) ? 'is-invalid' : ''; ?>" id="displaypic" name="displaypic" onchange="previewImg()">
                        <div class="invalid-feedback">
                            <?= $validation->getError('displaypic'); ?>
                        </div>
                        <label class="custom-file-label" for="displaypic"> <?= $fotografer['displaypic']; ?> </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Fotografer</label>
                    <input type="text" name="nama" class="form-control  <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" autofocus value="<?= $fotografer['nama']; ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nama'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="akun_instagram" class="form-label">akun instagram </label>
                    <input type="text" name="akun_instagram" class="form-control" id="akun_instagram" value="<?= $fotografer['akun_instagram']; ?>">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>