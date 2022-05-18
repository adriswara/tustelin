<?= $this->extend('layout/logdLayout'); ?>

<?= $this->section('pageContent'); ?>
<h1 class="bg-light"> INI INDEX PHP YANG JADI TABEL BETA</h1>
<div class="container bg-light" style="height:150vh">
    <div class="row">
        <div class="col">
            <h1 class="bg-light">Tabel Fotografer</h1>
            <table class="table  text-dark bg-light ">
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
            <h1 class="bg-light">Tabel Fotografer</h1>
            <table class="table text-dark bg-light">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Komersil</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($aliran_komersil as $i) : ?>
                        <tr>
                            <th scope="row"><?= $i['id_komersil']; ?></th>
                            <td><?= $i['nama_aliran']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <h1 class="bg-light">Tabel Fotografer</h1>
            <table class="table text-dark bg-light">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">nama</th>
                        <th scope="col">merek</th>
                        <th scope="col">jenis</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($alat as $j) : ?>
                        <tr>
                            <th scope="row"><?= $j['id_alat']; ?></th>
                            <td><?= $j['nama_alat']; ?></td>
                            <td><?= $j['merek']; ?></td>
                            <td><?= $j['jenis']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>