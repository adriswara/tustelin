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

            <form action="/Databasetest/updateKota/<?= $kota['id_kota']; ?>" method="post">
                <?= csrf_field(); ?>
                <input type="hidden" name="id_kota" id="<?= $kota['id_kota']; ?>">
                <div class="mb-3">
                    <label for="nama_kota" class="form-label"> Nama Aliran </label>
                    <input type="text" name="nama_kota" class="form-control  <?= ($validation->hasError('nama_kota')) ? 'is-invalid' : ''; ?>" id="nama_kota" autofocus value="<?= $kota['nama_kota']; ?>" id="nama_kota" value="<?= $kota['nama_kota']; ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nama_kota'); ?>
                    </div>
                </div>


                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>