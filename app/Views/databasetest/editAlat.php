<?= $this->extend('layout/logdLayout'); ?>
<?= $this->section('pageContent'); ?>

<div class="container">
    <div class="row">
        <div class="row-8">
            <h2 class="">Form Edit Data </h2>

            <form action="/Databasetest/updateAlat/<?= $alat['id_alat']; ?>" method="post">
                <?= csrf_field(); ?>
                <input type="hidden" name="id_alat" id="<?= $alat['id_alat']; ?>">
                <div class="mb-3">
                    <label for="nama_alat" class="form-label"> Nama Alat </label>
                    <input type="text" name="nama_alat" class="form-control  <?= ($validation->hasError('nama_alat')) ? 'is-invalid' : ''; ?>" id="nama_alat" autofocus value="<?= $alat['nama_alat']; ?>" id="nama_alat" value="<?= $alat['nama_alat']; ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nama_alat'); ?>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="merek" class="form-label">Merek Alat</label>
                    <input type="text" name="merek" class="form-control" id="merek" value="<?= $alat['merek']; ?>">

                </div>
                <div class="mb-3">
                    <label for="jenis" class="form-label">Jenis Alat </label>
                    <input type="text" name="jenis" class="form-control" id="jenis" value="<?= $alat['jenis']; ?>">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>