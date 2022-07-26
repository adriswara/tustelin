<?= $this->extend('layout/page_layout'); ?>

<?= $this->section('pageContent'); ?>
<div class="container bg-light">
    <div class="row">
        <div class="col">

            <h1 class="bg-light"> Pemesanan</h1>
            <h1 class="bg-light">Transaksi Jasa</h1>

            <table class="table  text-dark bg-light ">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">pengguna</th>
                        <th scope="col">fotografer</th>
                        <th scope="col">jumlah Hari</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Waktu Pesan</th>
                        <th scope="col">Status Pemesanan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listPesan as $j) : ?>
                        <?php if ($j['status_pemesanan'] == 0) : ?>
                            <tr>
                                <th scope="row"><?= $j['id_pemesanan']; ?></th>
                                <td><?= $j['username_pengguna']; ?></td>
                                <td><?= $j['nama']; ?></td>
                                <td><?= $j['jumlah_hari']; ?></td>
                                <td><?= $j['keterangan']; ?></td>
                                <td><?= $j['waktu_pesan']; ?></td>
                                <td>Belum Diterima</td>
                                <form action="/Profile/approvePesanan/<?= $j['id_pemesanan']; ?>" method="post" enctype="multipart/form-data">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="id_pemesanan" id="<?= $j['id_pemesanan']; ?>">
                                    <td><input type="text" name="status_pemesanan" class="form-control d-none" id="status_pemesanan" value="1">
                                    </td>

                                </form>
                            </tr>
                        <?php elseif ($j['status_pemesanan'] == 1) : ?>
                            <tr>
                                <th scope="row"><?= $j['id_pemesanan']; ?></th>
                                <td><?= $j['username_pengguna']; ?></td>
                                <td><?= $j['nama']; ?></td>
                                <td><?= $j['jumlah_hari']; ?></td>
                                <td><?= $j['keterangan']; ?></td>
                                <td><?= $j['waktu_pesan']; ?></td>
                                <td>Berlangsung</td>
                                <form action="/Profile/selesaiPemesanan/<?= $j['id_pemesanan']; ?>" method="post" enctype="multipart/form-data">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="id_pemesanan" id="<?= $j['id_pemesanan']; ?>">
                                    <td><input type="text" name="status_pemesanan" class="form-control d-none" id="status_pemesanan" value="2">
                                    </td>
                                </form>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h1 class="bg-light">Transaksi Selesai</h1>
            <table class="table  text-dark bg-light ">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">pengguna</th>
                        <th scope="col">fotografer</th>
                        <th scope="col">jumlah Hari</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Waktu Pesan</th>
                        <th scope="col">Status Pemesanan</th>
                        <th scope="col">Ulasan</th>
                        <th scope="col">Rating</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pesanan as $j) : ?>
                        <?php if ($j['status_pemesanan'] == 2) : ?>
                            <tr>
                                <th scope="row"><?= $j['id_pemesanan']; ?></th>
                                <td><?= $j['id_pengguna']; ?></td>
                                <td><?= $j['id_fotografer']; ?></td>
                                <td><?= $j['jumlah_hari']; ?></td>
                                <td><?= $j['keterangan']; ?></td>
                                <td><?= $j['waktu_pesan']; ?></td>
                                <td>Selesai</td>
                                <td><?= $j['ulasan']; ?></td>
                                <td><?= $j['rating']; ?></td>
                                <td><a class="btn btn-warning" href="/Profile/editReviewTransaksi/<?= $j['id_pemesanan']; ?>">Beri Ulasan</a></td>
                            </tr>
                        <?php endif; ?>
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