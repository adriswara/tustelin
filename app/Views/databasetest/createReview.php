<?= $this->extend('layout/logdLayout'); ?>
<?= $this->section('pageContent'); ?>

<div class="container">
    <div class="row">
        <div class="row-8">
            <h2 class="">Form Input Data </h2>
            <form action="/Databasetest/saveReview" method="post">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="id_fotografer" class="form-label"> No Id Fotografer </label>
                    <input type="text" name="id_fotografer" class="form-control" id="id_fotografer" value="<?= old('id_fotografer'); ?>">
                </div>
                <div class="mb-3">
                    <label for="id_pengguna" class="form-label">No Id Pengguna</label>
                    <input type="text" name="id_pengguna" class="form-control" id="id_pengguna" value="<?= old('id_pengguna'); ?>" autofocus>
                </div>
                <div class="mb-3">
                    <label for="review" class="form-label">Review</label>
                    <input type="text" name="review" class="form-control" id="review" value="<?= old('review'); ?>">
                </div>
                <div class="mb-3">
                    <label for="Rating" class="form-label">Rating</label>
                    <input type="text" name="Rating" class="form-control" id="Rating" value="<?= old('Rating'); ?>">
                </div>
                <!-- <div class="mb-3">
                    <label for="waktu_kirim" class="form-label">waktu kirim</label>
                    <input type="text" name="waktu_kirim" class="form-control" id="waktu_kirim" value="<?= old('waktu_kirim'); ?>">
                </div> -->
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>