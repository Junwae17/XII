<html>

<head>
    <title>Input Transaksi</title>
</head>

<body>
    <!-- Fungsi mengolah item -->
    <?php
    session_start();
    require 'item.php';
    require '../koneksi.php';
    if (isset($_GET['id_brg']) && !isset($_POST['update'])) {
        $sql = "select * from gudang where id_brg=" . $_GET['id_brg'];
        $result = mysqli_query($koneksi, $sql);
        $meledak = mysqli_fetch_object($result);

        // mencocokan dengan item 
        $item = new Item();

        // class(properties) = databases
        $item->id_brg = $meledak->id_brg;
        $item->nm_brg = $meledak->nm_brg;
        $item->hrg_jual = $meledak->hrg_jual;
        $item->stok = $meledak->stok;
        $item->stok = 1;

        // periksa produk dalam keranjang
        $index = -1;
        $keranjang = unserialize(serialize($_SESSION['keranjang']));
        if (is_countable($keranjang) && count($keranjang) > 0)
        for ($barang = 0; $barang < count($keranjang); $barang++)
            if ($keranjang[$barang]->id_brg == $_GET['id_brg']) {
                $index = $barang;
                break;
            }
        if ($index == -1)
            $_SESSION['keranjang'][] = $item;
        // Session 'keranjang' set $ keranjang sebagai variabel dari $_session
        else {
            if (($keranjang[$index]->stok < $iteminstock))
                $keranjang[$index]->$stok++;
            $_SESSION['keranjang'] = $keranjang;
        }
    }

    // fungsi hapus produk dalam keranjang
    if (isset($_GET['index']) && !isset($_POST['update'])) {
        $keranjang = unserialize(serialize($_SESSION['keranjang']));
        unset($keranjang[$_GET['index']]);
        $keranjang = array_values($keranjang);
        $_SESSION['keranjang'] = $keranjang;
    }

    // fungsi perbarui jumlah dalam keranjang
    if (isset($_POST['update'])) {
        $array_stok = $_POST['stok'];
        $keranjang = unserialize(serialize($_SESSION['keranjang']));
        for ($barang = 0; $barang < count($keranjang); $barang++) {
            $keranjang[$barang]->stok = $array_stok[$barang];
        }
        $_SESSION['keranjang'] = $keranjang;
    }

    ?>
    <!-- Fungsi mengolah item -->
    <h2>Item kamu dalam keranjang : </h2>
    <form method="post">
        <table border="1">
            <tr>
                <th>Aksi</th>
                <th>Id</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
            </tr>
            <!-- untuk menampilkan data yang sudah diolah -->
            <?php
            $keranjang = unserialize(serialize($_SESSION['keranjang']));
            if (is_countable($keranjang) && count($keranjang) > 0);
            $total = 0;
            $index = 0;
            for ($barang = 0; $barang < count($keranjang); $barang++) {
                $total += $keranjang[$barang]->hrg_jual * $keranjang[$barang]->stok;
            ?>
                <tr>
                    <td><a href="tambah.php?index=<?php echo $index; ?>" onclick="return confirm('Kamu yaqin untuk di hapus?')">Hapus</a></td>
                    <td><?php echo $keranjang[$barang]->id_brg; ?></td>
                    <td><?php echo $keranjang[$barang]->nm_brg; ?></td>
                    <td><?php echo $keranjang[$barang]->hrg_jual; ?></td>
                    <td><input type="number" name="stok[]" min="1" value="<?php echo $keranjang[$barang]->stok; ?>"> </td>
                    <td><?php echo $keranjang[$barang]->hrg_jual * $keranjang[$barang]->stok; ?></td>
                </tr>
            <?php
                $index++;
            }
            ?>
            <!-- untuk menampilkan data yang sudah diolah -->

            <tr>
                <td colspan="5" style="text-align: center; font-weight: bold">
                    HASIL
                    <input type="image" id="saveimg" src="save.png" style="width: 30px" name="update" alt="Save Button">
                    <input type="hidden" name="update">
                </td>
                <td>Rp. <?php echo $total; ?></td>
            </tr>
        </table>
    </form>
    <br>
    <a href="entry.php">Lanjut Belanja</a> | <a href="checkout.php">Lanjut</a>
    <?php
    if (isset($_GET["id_brg"]) || isset($_GET['index'])) {
        header('Location: tambah.php');
    }
    ?>
</body>

</html>