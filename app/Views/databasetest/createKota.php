<?= $this->extend('layout/logdLayout'); ?>
<?= $this->section('pageContent'); ?>

<div class="container">
    <div class="row">
        <div class="row-8">
            <h2 class="">Form Input Data </h2>
            <form action="/Databasetest/saveKota" method="post">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="nama_kota" class="form-label"> Nama Kota </label>
                    <input type="text" name="nama_kota" class="form-control" id="nama_kota">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>