<?= $this->extend('layout/page_layout'); ?>
<!--START CONTENT-->
<?= $this->section('pageContent'); ?>
<!---->

<?php if (session()->getFlashdata('pesan')) : ?>

    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>

<?php endif; ?>

welcome back <?= $fotografer_sess ?>
<br>



<a href="/Profile/<?= $fotografer[0]['slug']; ?>"><button class="btn btn-primary" type="button"> Direct to fotografer dashboard </button></a>

<?= $this->endSection(); ?>