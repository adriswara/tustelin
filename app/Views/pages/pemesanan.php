<?= $this->extend('layout/page_layout'); ?>
<?= $this->section('pageContent'); ?>

<div class="container">
    <div class="row">
        <div class="row-8">
            <h2 class="">Form Pemesanan </h2>
            <form action="/Profile/savePesanan/" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="jumlah_hari" class="form-label"> Jumlah hari</label>
                    <input type="text" name="jumlah_hari" class="form-control   " id="jimlah_hari" value="">
                </div>
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan </label>
                    <input type="text" name="keterangan" class="form-control" id="keterangan" value="<?= old('keterangan'); ?>">
                </div>
                <div class="mb-3">
                    <label for="id_pengguna" class="form-label">id_pengguna </label>
                    <input type="text" name="id_pengguna" class="form-control" id="id_pengguna" value="<?= $pengguna['id_pengguna']; ?>">
                </div>
                <div class="mb-3">
                    <label for="id_fotografer" class="form-label">id_fotografer </label>
                    <input type="text" name="id_fotografer" class="form-control" id="id_fotografer" value="<?= $profil[0]['id_fotografer']; ?>">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>