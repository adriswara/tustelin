<?= $this->extend('layout/logdLayout'); ?>
<?= $this->section('pageContent'); ?>

<div class="container">
    <div class="row">
        <div class="row-8">
            <h2 class="">Form Input Data </h2>
            <form action="/Databasetest/saveKomersil" method="post">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="nama_aliran" class="form-label"> nama aliran </label>
                    <input type="text" name="nama_aliran" class="form-control" id="nama_aliran" value="<?= old('nama_aliran'); ?>">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>