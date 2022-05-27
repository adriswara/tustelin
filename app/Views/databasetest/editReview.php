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

            <form action="/Databasetest/updateReview/<?= $review['id_review']; ?>" method="post">
                <?= csrf_field(); ?>
                <input type="hidden" name="id_review" id="<?= $review['id_review']; ?>">
                <div class="mb-3">
                    <label for="id_fotografer" class="form-label"> id Fotografer </label>
                    <input type="text" name="id_fotografer" class="form-control" id="id_fotografer" value="<?= $review['id_fotografer']; ?>">
                </div>
                <div class="mb-3">
                    <label for="id_pengguna" class="form-label"> id pengguna </label>
                    <input type="text" name="id_pengguna" class="form-control" id="id_pengguna" value="<?= $review['id_pengguna']; ?>">
                </div>

                <div class="mb-3">
                    <label for="review" class="form-label"> review </label>
                    <input type="text" name="review" class="form-control" id="review" value="<?= $review['review']; ?>">
                </div>

                <div class="mb-3">
                    <label for="rating" class="form-label"> rating </label>
                    <input type="text" name="rating" class="form-control" id="rating" value="<?= $review['rating']; ?>">
                </div>


                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>