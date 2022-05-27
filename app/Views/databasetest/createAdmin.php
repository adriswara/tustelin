<?= $this->extend('layout/page_layout'); ?>
<?= $this->section('pageContent'); ?>

<div class="container">
    <div class="row">
        <div class="row-8">
            <h2 class="">Form Input Data </h2>
            <form action="/Databasetest/saveAdmin" method="post">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="username_admin" class="form-label"> username </label>
                    <input type="text" name="username_admin" class="form-control  <?= ($validation->hasError('username_admin')) ? 'is-invalid' : ''; ?>" id="username_admin" autofocus value="<?= old('username_admin'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('username_admin'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password_admin" class="form-label">Sandi Admin</label>
                    <input type="text" name="password_admin" class="form-control" id="password_admin" value="<?= old('password_admin'); ?>">
                </div>
                <div class="mb-3">
                    <label for="email_admin" class="form-label">Email</label>
                    <input type="text" name="email_admin" class="form-control" id="email_admin" value="<?= old('email_admin'); ?>">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>