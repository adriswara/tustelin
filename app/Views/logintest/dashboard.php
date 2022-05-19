<?= $this->extend('layout/page_layout'); ?>
<!--START CONTENT-->
<?= $this->section('pageContent'); ?>
<!---->


welcome back <?= $get_sess ?>

<a href="/Dashboard/logged"><button class="btn btn-primary" type="button"> Direct to market </button></a>

<?= $this->endSection(); ?>