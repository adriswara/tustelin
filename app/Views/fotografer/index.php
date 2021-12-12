<?= $this->extend('layout/page_layout'); ?>

<?= $this->section('pageContent'); ?>
<div class="containter bg-light" style="height:30vh">
    <div class="row">
        <div class="col">
            <h1>Tabel Fotografer</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Display</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Instagram</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($fotografer as $k) : ?>
                        <tr>
                            <th scope="row"><?= $k['id_fotografer']; ?></th>
                            <td><img src="/displaypic/<?= $k['displaypic']; ?>" alt="" width="100"></td>
                            <td><?= $k['nama']; ?></td>
                            <td><?= $k['akun_instagram']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>