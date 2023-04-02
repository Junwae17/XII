<?php
require 'functions.php';

$produk = query("SELECT * FROM produk");

?>

<?php require '../layout/sidebar.php'; ?>

<div class="content">

    <h1>Data Produk</h1>
    <a href="tambah_produk.php">Tambah</a>
    <br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>NO.</th>
            <th>Nama Produk</th>
            <th>Foto</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($produk as $data): ?>

            <tr>
                <td>
                    <?= $i; ?>
                </td>
                <td>
                    <?= $data["nama_produk"]; ?>
                </td>
                <td><img src="../image/<?= $data["foto"] ?>" alt="" width="100"></td>
                <td>
                    <?= number_format($data["harga"]); ?>
                </td>
                <td>
                    <?= $data["stok"]; ?>
                </td>
                <td>
                    <?= $data["deskripsi"]; ?>
                </td>
                <td>
                    <a href="edit_produk.php?id=<?= $data["id_produk"]; ?>">Edit</a>
                    <a href="hapus_produk.php?id=<?= $data["id_produk"]; ?>"
                        onclick="return confirm('Apakah anda yakin ingin menghapus data?');">Hapus</a>
                </td>
            </tr>

            <?php $i++; ?>
        <?php endforeach; ?>
    </table>

</div>