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
            <form action="/Databasetest/updateReviewTransaksi/<?= $review['id_pemesanan']; ?>" method="post">
                <?= csrf_field(); ?>
                <input type="hidden" name="id_pemesanan" id="<?= $review['id_pemesanan']; ?>">
                <div class="mb-3">
                    <label for="id_fotografer" class="form-label d-none"> id Fotografer </label>
                    <input type="text" name="id_fotografer" class="form-control d-none" id="id_fotografer" value="<?= $review['id_fotografer']; ?>">
                </div>
                <div class="mb-3">
                    <label for="id_pengguna" class="form-label d-none"> id pengguna </label>
                    <input type="text" name="id_pengguna" class="form-control d-none" id="id_pengguna" value="<?= $review['id_pengguna']; ?>">
                </div>
                <div class="mb-3">
                    <label for="ulasan" class="form-label"> ulasan </label>
                    <input type="text" name="ulasan" class="form-control" id="ulasan" value="<?= $review['ulasan']; ?>">
                </div>
                <div class="mb-3">
                    <label for="rating" class="form-label"> rating : </label>
                    <?= $value = $review['rating']; ?>
                    <div class="btn-group">
                        <!-- <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Small button
                        </button> -->
                        <div class="dropdown-menu">
                            <div class="radio">
                                <?= $inputRating = null; ?>

                                <!--  -->
                                <input <?= ($inputRating == 'inputRating1') ? "checked" : "" ?> onChange="location.reload()" type="radio" id="inputRating" name="inputRating" value="inputRating1">
                                <label for="inputRating"><i class="fa fa-star" aria-hidden="true"></i> 1</label>
                            </div>
                            <div class="radio">
                                <?= $inputRating = null; ?>

                                <!--  -->
                                <input <?= ($inputRating == 'inputRating2') ? "checked" : "" ?> type="radio" id="inputRating" name="inputRating" value="inputRating2">
                                <label for="inputRating"><i class="fa fa-star" aria-hidden="true"></i> 2</label>
                            </div>
                            <div class="radio">
                                <?= $inputRating = null; ?>

                                <!--  -->
                                <input <?= ($inputRating == 'inputRating3') ? "checked" : "" ?> type="radio" id="inputRating" name="inputRating" value="inputRating3">
                                <label for="inputRating"><i class="fa fa-star" aria-hidden="true"></i> 3</label>
                            </div>
                            <div class="radio">
                                <?= $inputRating = null; ?>

                                <!--  -->
                                <input <?= ($inputRating == 'inputRating4') ? "checked" : "" ?> type="radio" id="inputRating" name="inputRating" value="inputRating4">
                                <label for="inputRating"><i class="fa fa-star" aria-hidden="true"></i> 4</label>
                            </div>
                            <div class="radio">
                                <?= $inputRating = null; ?>

                                <!--  -->
                                <input <?= ($inputRating == 'inputRating5') ? "checked" : "" ?> type="radio" id="inputRating" name="inputRating" value="inputRating5">
                                <label for="inputRating"><i class="fa fa-star" aria-hidden="true"></i> 5</label>
                            </div>
                        </div>

                    </div>
                    <?php if ($inputRating == 'inputRating1') : ?>
                        <?= $value = 1; ?>
                    <?php endif; ?>
                    <input type="text" name="rating" class="form-control" id="rating" value="<?= $value; ?>">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>