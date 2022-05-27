<?= $this->extend('layout/page_layout'); ?>
<?= $this->section('pageContent'); ?>

<div class="container">
    <div class="row">
        <div class="row-8">
            <h2 class="">Form Edit Data </h2>


            <?php if (session()->getFlashdata('pesan')) : ?>

                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>

            <?php endif; ?>

            <form action="/Databasetest/updateAdmin/<?= $admin['id_admin']; ?>" method="post">
                <?= csrf_field(); ?>
                <input type="hidden" name="id_admin" id="<?= $admin['id_admin']; ?>">
                <div class="mb-3">
                    <label for="username_admin" class="form-label"> Nama Admin </label>
                    <input type="text" name="username_admin" class="form-control  <?= ($validation->hasError('username_admin')) ? 'is-invalid' : ''; ?>" id="username_admin" autofocus value="<?= $admin['username_admin']; ?>" id="username_admin" value="<?= $admin['username_admin']; ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('username_admin'); ?>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="password_admin" class="form-label">Password Admin</label>
                    <input type="text" name="password_admin" class="form-control" id="password_admin" value="<?= $admin['password_admin']; ?>">

                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Admin </label>
                    <input type="text" name="email_admin" class="form-control" id="email_admin" value="<?= $admin['email_admin']; ?>">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>