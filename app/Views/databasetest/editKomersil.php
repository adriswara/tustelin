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

            <form action="/Databasetest/updateKomersil/<?= $aliran_komersil['id_komersil']; ?>" method="post">
                <?= csrf_field(); ?>
                <input type="hidden" name="id_komersil" id="<?= $aliran_komersil['id_komersil']; ?>">
                <div class="mb-3">
                    <label for="nama_aliran" class="form-label"> Nama Aliran </label>
                    <input type="text" name="nama_aliran" class="form-control  <?= ($validation->hasError('nama_aliran')) ? 'is-invalid' : ''; ?>" id="nama_aliran" autofocus value="<?= $aliran_komersil['nama_aliran']; ?>" id="nama_aliran" value="<?= $aliran_komersil['nama_aliran']; ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nama_aliran'); ?>
                    </div>
                </div>


                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>