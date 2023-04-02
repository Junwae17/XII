<?php
require 'admin/functions.php';

$produk = query("SELECT * FROM produk");

$no = 1;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Customer</title>
</head>

<body>
    <h1>Hi, Ini Halaman Customer</h1>

    <!-- Search -->
    <form action="index.php" method="get">
        <label for="cari">Cari : </label>
        <input type="text" name="cari" id="cari">
        <input type="submit" value="search">
    </form>
    <br />
    <!-- Search -->

    <?php
    // Judul Pencarian
    if (isset($_GET['cari'])) {
        $cari = $_GET['cari'];
        echo "Hasil Pencarian : " . $cari;
    }
    // Judul Pencarian
    ?>
    
    <!-- Hasil Pencarian -->
    <table border="1">
        <tr>
            <th>NO.</th>
            <th>Nama Produk</th>
            <th>Foto</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
        <?php
        if (isset($_GET['cari'])) {
            $cari = $_GET['cari'];
            $data = mysqli_query($conn, "SELECT * FROM produk WHERE nama_produk LIKE '%" . $cari . "%'");
        } else {
            $data = mysqli_query($conn, "SELECT * FROM produk");
        }
        
        $no = 1;
        while ($row = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td>
                    <?= $no++; ?>
                </td>
                <td>
                    <?= $row["nama_produk"]; ?>
                </td>
                <td><img src="image/<?= $row["foto"] ?>" alt="" width="100"></td>
                <td>
                    <?= number_format($row["harga"]); ?>
                </td>
                <td>
                    <?= $row["stok"]; ?>
                </td>
                <td>
                    <?= $row["deskripsi"]; ?>
                </td>
                <td>
                    <a href="pesan.php?id=<?= $row["id_produk"]; ?>">Pesan</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
    <!-- Hasil Pencarian -->

        <a href="login/index.php">Login</a>
        <br>
        <a href="logout.php">Logout</a>
</body>

</html>