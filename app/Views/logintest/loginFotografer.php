<?= $this->extend('layout/page_layout'); ?>
<!--START CONTENT-->
<?= $this->section('pageContent'); ?>
<!---->

<div class="bg-light" style="margin-top: 0rem; margin-bottom: 1rem">
    <div class="row justify-content-md-center" style="margin-bottom: 0rem  ">

        <div class="col-6">
            <h1>Fotografer Sign In</h1>
            <?php if (session()->getFlashdata('msg')) : ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
            <?php endif; ?>
            <form action="/loginFotografer/auth" method="post">
                <div class="mb-3">
                    <label for="InputForEmail" class="form-label">Fotografer Email address</label>
                    <input type="email" name="email_fotografer" class="form-control" id="InputForEmail" value="<?= set_value('email_fotografer') ?>">
                </div>
                <div class="mb-3">
                    <label for="InputForPassword" class="form-label">Fotografer Password</label>
                    <input type="password" name="password_fotografer" class="form-control" id="InputForPassword">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Login</button>
                <br>
                <br>
                <h5><a href="/Login"><i>User Login</i></a></h5>
                <br>
            </form>
        </div>



    </div>
</div>
<?= $this->endSection(); ?>