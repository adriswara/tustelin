<?= $this->extend('layout/logdLayout'); ?>

<?= $this->section('pageContent'); ?>
<h1 class="bg-light"> INI INDEX PHP YANG JADI TABEL BETA</h1>
<div class="container bg-light" style="">
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
                        <th><button class="btn btn-primary">Add</button></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($fotografer as $k) : ?>
                        <tr>
                            <th scope="row"><?= $k['id_fotografer']; ?></th>
                            <td><img src="/displaypic/<?= $k['displaypic']; ?>" alt="" width="100"></td>
                            <td><?= $k['nama']; ?></td>
                            <td><?= $k['akun_instagram']; ?></td>
                            <td><button class="btn btn-warning">Edit</button></td>
                            <td><button class="btn btn-danger">Delete</button></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <h1 class="bg-light">Tabel Komersil</h1>
            <table class="table text-dark bg-light">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Komersil</th>
                        <th><button class="btn btn-primary">Add</button></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($aliran_komersil as $i) : ?>
                        <tr>
                            <th scope="row"><?= $i['id_komersil']; ?></th>
                            <td><?= $i['nama_aliran']; ?></td>
                            <td><button class="btn btn-warning">Edit</button></td>
                            <td><button class="btn btn-danger">Delete</button></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <h1 class="bg-light">Tabel Alat</h1>
            <table class="table text-dark bg-light">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">nama</th>
                        <th scope="col">merek</th>
                        <th scope="col">jenis</th>
                        <th><button class="btn btn-primary">Add</button></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($alat as $j) : ?>
                        <tr>
                            <th scope="row"><?= $j['id_alat']; ?></th>
                            <td><?= $j['nama_alat']; ?></td>
                            <td><?= $j['merek']; ?></td>
                            <td><?= $j['jenis']; ?></td>
                            <td><button class="btn btn-warning">Edit</button></td>
                            <td><button class="btn btn-danger">Delete</button></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <h1 class="bg-light">Tabel Admin</h1>
            <table class="table text-dark bg-light">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">nama</th>
                        <th scope="col">password</th>
                        <th scope="col">email</th>
                        <th><button class="btn btn-primary">Add</button></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($admin as $j) : ?>
                        <tr>
                            <th scope="row"><?= $j['id_admin']; ?></th>
                            <td><?= $j['username_admin']; ?></td>
                            <td><?= $j['password_admin']; ?></td>
                            <td><?= $j['email_admin']; ?></td>
                            <td><button class="btn btn-warning">Edit</button></td>
                            <td><button class="btn btn-danger">Delete</button></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <h1 class="bg-light">Tabel Kota</h1>
            <table class="table text-dark bg-light">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">nama kota</th>
                        <th><button class="btn btn-primary">Add</button></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($kota as $j) : ?>
                        <tr>
                            <th scope="row"><?= $j['id_kota']; ?></th>
                            <td><?= $j['nama_kota']; ?></td>
                            <td><button class="btn btn-warning">Edit</button></td>
                            <td><button class="btn btn-danger">Delete</button></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <h1 class="bg-light">Tabel Review</h1>
            <table class="table text-dark bg-light">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">fotografer</th>
                        <th scope="col">pengguna</th>
                        <th scope="col">review</th>
                        <th scope="col">rating</th>
                        <th scope="col">waktu_kirim</th>
                        <th><button class="btn btn-primary">Add</button></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($review as $j) : ?>
                        <tr>
                            <th scope="row"><?= $j['id_review']; ?></th>
                            <td><?= $j['id_fotografer']; ?></td>
                            <td><?= $j['id_pengguna']; ?></td>
                            <td><?= $j['review']; ?></td>
                            <td><?= $j['rating']; ?></td>
                            <td><?= $j['waktu_kirim']; ?></td>
                            <td><button class="btn btn-warning">Edit</button></td>
                            <td><button class="btn btn-danger">Delete</button></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <h1 class="bg-light">Tabel Foto</h1>
            <table class="table text-dark bg-light">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">fotografer</th>
                        <th scope="col">judul</th>
                        <th scope="col">file_foto</th>
                        <th><button class="btn btn-primary">Add</button></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($foto as $j) : ?>
                        <tr>
                            <th scope="row"><?= $j['id_foto']; ?></th>
                            <td><?= $j['id_fotografer']; ?></td>
                            <td><?= $j['judul']; ?></td>
                            <td><?= $j['file_foto']; ?></td>
                            <td><button class="btn btn-warning">Edit</button></td>
                            <td><button class="btn btn-danger">Delete</button></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>