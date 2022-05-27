<?= $this->extend('layout/page_layout'); ?>
<?= $this->section('pageContent'); ?>

<div class="container">
    <div class="row">
        <div class="row-8">
            <h2 class="">Form Input Data </h2>
            <form action="/Databasetest/savePengguna" method="post">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="username_pengguna" class="form-label"> username </label>
                    <input type="text" name="username_pengguna" class="form-control  <?= ($validation->hasError('username_pengguna')) ? 'is-invalid' : ''; ?>" id="username_pengguna" autofocus value="<?= old('username_pengguna'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('username_pengguna'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="sandi_pengguna" class="form-label">Sandi Pengguna</label>
                    <input type="text" name="sandi_pengguna" class="form-control" id="sandi_pengguna" value="<?= old('sandi_pengguna'); ?>">
                </div>
                <div class="mb-3">
                    <label for="email_pengguna" class="form-label">Email</label>
                    <input type="text" name="email_pengguna" class="form-control" id="email_pengguna" value="<?= old('email_pengguna'); ?>">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>