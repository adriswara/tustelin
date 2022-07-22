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
                        <th scope="col">pengguna</th>
                        <th scope="col">fotografer</th>
                        <th scope="col">jumlah Hari</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Waktu Pesan</th>
                        <th><a href="/DatabaseTest/createFotografer" class="btn btn-primary ">Approve</a></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listPesan as $j) : ?>
                        <tr>
                            <th scope="row"><?= $j['id_pemesanan']; ?></th>
                            <td><?= $j['id_pengguna']; ?></td>
                            <td><?= $j['id_fotografer']; ?></td>
                            <td><?= $j['jumlah_hari']; ?></td>
                            <td><?= $j['keterangan']; ?></td>
                            <td><?= $j['waktu_pesan']; ?></td>
                            <td><a href="/Profile/editProfile/<?= $j['id_fotografer']; ?>" class=" btn btn-warning">Edit </a></td>

                            <td><a onclick="buttonConfirm()" href="/DatabaseTest/deleteFotografer/<?= $j['id_fotografer']; ?>" class="btn btn-danger">Delete</button></td>
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