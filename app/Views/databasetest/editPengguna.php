<?= $this->extend('layout/logdLayout'); ?>
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

            <form action="/Databasetest/updatePengguna/<?= $pelanggan['id_pengguna']; ?>" method="post">
                <?= csrf_field(); ?>
                <input type="hidden" name="id_pengguna" id="<?= $pelanggan['id_pengguna']; ?>">
                <div class="mb-3">
                    <label for="username_pengguna" class="form-label"> Nama pelanggan </label>
                    <input type="text" name="username_pengguna" class="form-control  <?= ($validation->hasError('username_pengguna')) ? 'is-invalid' : ''; ?>" id="username_pengguna" autofocus value="<?= $pelanggan['username_pengguna']; ?>" id="username_pengguna" value="<?= $pelanggan['username_pengguna']; ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('username_pengguna'); ?>
                    </div>
                </div>


                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>