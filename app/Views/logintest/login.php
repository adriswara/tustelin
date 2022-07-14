<?= $this->extend('layout/page_layout'); ?>
<!--START CONTENT-->
<?= $this->section('pageContent'); ?>
<!---->

<div class="bg-light" style="margin-top: 0rem; margin-bottom: 1rem">
    <div class="row justify-content-md-center" style="margin-bottom: 0rem  ">

        <div class="col-6">
            <h1>User Sign In</h1>
            <?php if (session()->getFlashdata('msg')) : ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
            <?php endif; ?>
            <form action="/login/auth" method="post">
                <div class="mb-3">
                    <label for="InputForEmail" class="form-label">User Email address</label>
                    <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
                </div>
                <div class="mb-3">
                    <label for="InputForPassword" class="form-label">User Password</label>
                    <input type="password" name="password" class="form-control" id="InputForPassword">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Login</button>
                <br>
                <br>
                <h5><a href="/LoginAdmin"><i>Admin Login</i></a></h5>
                <br>
                <h5><a href="/LoginFotografer"><i>Fotografer Login</i></a></h5>
            </form>
        </div>



    </div>
</div>
<?= $this->endSection(); ?>