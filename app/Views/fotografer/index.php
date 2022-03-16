<?= $this->extend('layout/page_layout'); ?>

<?= $this->section('pageContent'); ?>
<h1>INI INDEX PHP YANG JADI TABEL BETA</h1>
<div class="containter bg-light" style="height:30vh">
    <div class="row">
        <div class="col">
            <h1>Tabel Fotografer</h1>
            <table class="table bg-dark text-light">
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
            <h1>Tabel Fotografer</h1>
            <table class="table bg-light">
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
            <h1>Tabel Fotografer</h1>
            <table class="table bg-light">
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
                            <td><?= $j['nama']; ?></td>
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