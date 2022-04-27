<?= $this->extend('layout/logDLayout'); ?>
<!--START CONTENT-->
<?= $this->section('pageContent'); ?>
<!---->


welcome back <?= $get_sess ?>

<a href="http://localhost:8080/login/logout"><button class="btn btn-primary" type="button"> Logout </button></a>

<?= $this->endSection(); ?>