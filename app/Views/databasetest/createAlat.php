<?= $this->extend('layout/page_layout'); ?>
<?= $this->section('pageContent'); ?>

<div class="container">
    <div class="row">
        <div class="row-8">
            <h2 class="">Form Input Data </h2>
            <form action="/Databasetest/saveAlat" method="post">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="nama_alat" class="form-label"> Nama Alat </label>
                    <input type="text" name="nama_alat" class="form-control" id="nama_alat" value="<?= old('nama_alat'); ?>">
                </div>
                <div class="mb-3">
                    <label for="merek" class="form-label">Merek</label>
                    <input type="text" name="merek" class="form-control" id="merek" value="<?= old('merek'); ?>" autofocus>
                </div>
                <div class="mb-3">
                    <label for="jenis" class="form-label">Jenis Alat</label>
                    <input type="text" name="jenis" class="form-control" id="jenis" value="<?= old('jenis'); ?>">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>