<?= $this->extend('layout/page_layout'); ?>
<!--START CONTENT-->
<?= $this->section('pageContent'); ?>
<!---->


welcome back <?= $get_sess ?>

<a href="/databasetest"><button class="btn btn-primary" type="button"> Direct to admin dashboard </button></a>

<?= $this->endSection(); ?>