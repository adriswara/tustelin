<?= $this->extend('layout/logdLayout'); ?>
<?= $this->section('pageContent'); ?>

<div class="container">
    <div class="row">
        <div class="row-8">
            <h2 class="">Form Input Data </h2>
            <form action="/Databasetest/saveFoto" method="post">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="id_fotografer" class="form-label"> No Id Fotografer </label>
                    <input type="text" name="id_fotografer" class="form-control" id="id_fotografer">
                </div>
                <div class="mb-3">
                    <label for="judul" class="form-label"> Judul</label>
                    <input type="text" name="judul" class="form-control" id="judul" autofocus>
                </div>
                <div class="mb-3">
                    <label for="file_foto" class="form-label">File Foto</label>
                    <input type="text" name="file_foto" class="form-control" id="file_foto">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>