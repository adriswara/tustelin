<?= $this->extend('layout/page_layout'); ?>
<?= $this->section('pageContent'); ?>

<div class="container">
    <div class="row">
        <div class="row-8">
            <h2 class="">Form Edit Data </h2>

            <form action="/Profile/updateProfile/<?= $fotografer['slug']; ?>" method="post" enctype="multipart/form-data">
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
                <div class="mb-3">
                    <label for="email_fotografer" class="form-label"> email fotografer </label>
                    <input type="text" name="email_fotografer" class="form-control" id="email_fotografer" value="<?= $fotografer['email_fotografer']; ?>">
                </div>
                <div class="mb-3">
                    <label for="username_fotografer" class="form-label"> Username </label>
                    <input type="text" name="username_fotografer" class="form-control" id="username_fotografer" value="<?= $fotografer['username_fotografer']; ?>">
                </div>
                <div class="mb-3">
                    <label for="sandi_fotografer" class="form-label"> Sandi </label>
                    <input type="text" name="sandi_fotografer" class="form-control" id="sandi_fotografer" value="<?= $fotografer['sandi_fotografer']; ?>">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label"> alamat </label>
                    <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $fotografer['alamat']; ?>">
                </div>
                <div class="mb-3">
                    <label for="no_telfon" class="form-label"> NoTelfon </label>
                    <input type="text" name="no_telfon" class="form-control" id="no_telfon" value="<?= $fotografer['no_telfon']; ?>">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label"> harga </label>
                    <input type="text" name="harga" class="form-control" id="harga" value="<?= $fotografer['harga']; ?>">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label"> deskripsi </label>
                    <input type="text" name="deskripsi" class="form-control" id="deskripsi" value="<?= $fotografer['deskripsi']; ?>">
                </div>

                <div class="mb-3">
                    <label for="no_rekening" class="form-label"> no rekening </label>
                    <input type="text" name="no_rekening" class="form-control" id="no_rekening" value="<?= $fotografer['no_rekening']; ?>">
                </div>

                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>