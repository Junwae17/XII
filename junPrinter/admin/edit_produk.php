<?php
require 'functions.php';

$id = $_GET["id"];
$produk = query("SELECT * FROM produk WHERE id_produk = '$id'")[0];

if (isset($_POST["submit"])) {
    if (updateProduk($_POST) > 0) {
        echo "
        <script type='text/javascript'>
            alert('data berhasil diubah');
            window.location = 'produk.php'
        </script>
    ";
    } else {
        echo "
        <script type='text/javascript'>
            alert('data gagal diubah');
            window.location = 'produk.php'
        </script>
    ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit Produk</title>
</head>

<body>
    <div class="box">
        <h2>Edit Data Produk</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_produk" id="id_produk" value="<?= $produk['id_produk']; ?>">

            <label for="nama_produk">Nama Produk</label>
            <input type="text" name="nama_produk" id="nama_produk" value="<?= $produk['nama_produk']; ?>"> <br /> <br />
            
            <label for="harga">Harga</label>
            <input type="number" name="harga" id="harga" value="<?= $produk['harga']; ?>"> <br /> <br />

            <label for="stok">Stok</label>
            <input type="text" name="stok" id="stok" value="<?= $produk['stok']; ?>"> <br /> <br />
            
            <label for="deskripsi">Deskripsi</label>
            <input type="text" name="deskripsi" id="deskripsi" value="<?= $produk['deskripsi']; ?>"> <br /> <br />

            <label for="foto">Foto</label>
            <input type="file" name="foto" id="foto" value="<?= $produk["foto"]; ?>"> <br /> <br />

            <button type="submit" name="submit">Ubah</button>
        </form>
    </div>
</body>

</html>