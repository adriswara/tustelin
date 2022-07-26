<?= $this->extend('layout/page_layout'); ?>

<?= $this->section('pageContent'); ?>
<h1 class="bg-light"> Edit Profile</h1>
<div class="container bg-light">
    <div class="row">
        <div class="col">
            <h1 class="bg-light">Edit Deskripsi</h1>

            <table class="table  text-dark bg-light ">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Display</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Instagram</th>
                        <th scope="col">Rata-rata rating</th>
                        <th scope="col">NIK KTP</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($profileEdit as $j) : ?>
                        <tr>
                            <th scope="row"><?= $j['id_fotografer']; ?></th>
                            <td><img src="/displaypic/<?= $j['displaypic']; ?>" alt="" width="100"></td>
                            <td><?= $j['nama']; ?></td>
                            <td><?= $j['akun_instagram']; ?></td>
                            <td><?= $j['rataRata_rating']; ?></td>
                            <td><?= $j['ktp']; ?></td>
                            <td><a href="/Profile/editProfile/<?= $j['id_fotografer']; ?>" class=" btn btn-warning">Edit </a></td>


                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <h1 class="bg-light">Edit Foto</h1>
            <table class="table text-dark bg-light">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">fotografer</th>
                        <th scope="col">judul</th>
                        <th scope="col">file_foto</th>
                        <th><a href="/Profile/createFoto/<?= $fotoGallery[0]['id_fotografer']; ?>/<?= $fotoGallery[0]['slug']; ?>" class="btn btn-primary ">Add</a></th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($fotoGallery as $j) : ?>
                        <tr>
                            <th scope="row"><?= $j['id_foto']; ?></th>
                            <td><?= $j['slug']; ?></td>
                            <td><?= $j['judul']; ?></td>
                            <td><?= $j['file_foto']; ?></td>
                            <td><img src="/file_foto/<?= $j['file_foto']; ?>" alt="" width="100"></td>
                            <td><a href="/Profile/editFoto/<?= $j['id_foto']; ?>" class=" btn btn-warning">Edit</a></td>
                            <td><a onclick="buttonConfirm()" href="/profile/deleteFoto/<?= $j['id_foto']; ?>" class="btn btn-danger">Delete</button></td>
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