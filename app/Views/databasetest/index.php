<?= $this->extend('layout/page_layout'); ?>

<?= $this->section('pageContent'); ?>
<h1 class="bg-light"> INI INDEX PHP YANG JADI TABEL BETA</h1>
<div class="container bg-light">
    <div class="row">
        <div class="col">
            <h1 class="bg-light">Tabel Fotografer</h1>

            <?php if (session()->getFlashdata('pesan')) : ?>

                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>

            <?php endif; ?>

            <table class="table  text-dark bg-light ">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Display</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Instagram</th>
                        <th><a href="/DatabaseTest/createFotografer" class="btn btn-primary ">Add</a></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($fotografer as $k) : ?>
                        <tr>
                            <th scope="row"><?= $k['id_fotografer']; ?></th>
                            <td><img src="/displaypic/<?= $k['displaypic']; ?>" alt="" width="100"></td>
                            <td><?= $k['nama']; ?></td>
                            <td><?= $k['akun_instagram']; ?></td>
                            <td><a class="btn btn-warning" href="DatabaseTest/editFotografer/<?= $k['id_fotografer']; ?>">Edit</a></td>
                            <td><a onclick="buttonConfirm()" href="/DatabaseTest/deleteFotografer/<?= $k['id_fotografer']; ?>" class="btn btn-danger">Delete</button></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <h1 class="bg-light">Tabel Pengguna</h1>
            <table class="table  text-dark bg-light ">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Sandi</th>
                        <th scope="col">Email</th>
                        <th><a href="/DatabaseTest/createPengguna" class="btn btn-primary ">Add</a></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($user as $k) : ?>
                        <tr>
                            <th scope="row"><?= $k['id_pengguna']; ?></th>
                            <td><?= $k['username_pengguna']; ?></td>
                            <td><?= $k['sandi_pengguna']; ?></td>
                            <td><?= $k['email_pengguna']; ?></td>
                            <td><a class="btn btn-warning" href="DatabaseTest/editPengguna/<?= $k['id_pengguna']; ?>">Edit</a></td>
                            <td><a onclick="buttonConfirm()" href="/DatabaseTest/deletePengguna/<?= $k['id_pengguna']; ?>" class="btn btn-danger">Delete</a></td>
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
                        <th><a href="/DatabaseTest/createKomersil" class="btn btn-primary ">Add</a></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($aliran_komersil as $i) : ?>
                        <tr>
                            <th scope="row"><?= $i['id_komersil']; ?></th>
                            <td><?= $i['nama_aliran']; ?></td>
                            <td><a class="btn btn-warning" href="DatabaseTest/editKomersil/<?= $i['id_komersil']; ?>">Edit</a></td>
                            <td><a onclick="buttonConfirm()" href="/DatabaseTest/deleteKomersil/<?= $i['id_komersil']; ?>" class="btn btn-danger">Delete</button></td>
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
                        <th><a href="/DatabaseTest/createAlat" class="btn btn-primary ">Add</a></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($alat as $j) : ?>
                        <tr>
                            <th scope="row"><?= $j['id_alat']; ?></th>
                            <td><?= $j['nama_alat']; ?></td>
                            <td><?= $j['merek']; ?></td>
                            <td><?= $j['jenis']; ?></td>
                            <td><a class="btn btn-warning" href="DatabaseTest/editAlat/<?= $j['id_alat']; ?>">Edit</a></td>
                            <td><a onclick="buttonConfirm()" href="/DatabaseTest/deleteAlat/<?= $j['id_alat']; ?>" class="btn btn-danger">Delete</button></td>
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
                        <th><a href="/DatabaseTest/createAdmin" class="btn btn-primary ">Add</a></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($admin as $j) : ?>
                        <tr>
                            <th scope="row"><?= $j['id_admin']; ?></th>
                            <td><?= $j['username_admin']; ?></td>
                            <td><?= $j['password_admin']; ?></td>
                            <td><?= $j['email_admin']; ?></td>
                            <td><a class="btn btn-warning" href="DatabaseTest/editAdmin/<?= $j['id_admin']; ?>">Edit</a></td>
                            <td><a onclick="buttonConfirm()" href="/DatabaseTest/deleteAdmin/<?= $j['id_admin']; ?>" class="btn btn-danger">Delete</button></td>
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
                        <th><a href="/DatabaseTest/createKota" class="btn btn-primary ">Add</a></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($kota as $j) : ?>
                        <tr>
                            <th scope="row"><?= $j['id_kota']; ?></th>
                            <td><?= $j['nama_kota']; ?></td>
                            <td><a class="btn btn-warning" href="DatabaseTest/editKota/<?= $j['id_kota']; ?>">Edit</a></td>
                            <td><a onclick="buttonConfirm()" href="/DatabaseTest/deleteKota/<?= $j['id_kota']; ?>" class="btn btn-danger">Delete</button></td>
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
                        <th><a href="/DatabaseTest/createReview" class="btn btn-primary ">Add</a></th>
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
                            <td><a class="btn btn-warning" href="DatabaseTest/editReview/<?= $j['id_review']; ?>">Edit</a></td>
                            <td><a onclick="buttonConfirm()" href="/DatabaseTest/deleteReview/<?= $j['id_review']; ?>" class="btn btn-danger">Delete</button></td>
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
                        <th><a href="/DatabaseTest/createFoto" class="btn btn-primary ">Add</a></th>
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
                            <td><a onclick="buttonConfirm()" href="/DatabaseTest/deleteFoto/<?= $j['id_foto']; ?>" class="btn btn-danger">Delete</button></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    function buttonConfirm() {
        confirm("Confirm Delete?");
    }
</script>
<?php $this->endSection(); ?>