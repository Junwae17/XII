<html>

<head>
    <title>Barang Terjual</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../user/style3.css">
</head>
<br>
<center>
    <h1>Klontong Babeh Rojak</h1>
</center> <br>
<hr>
<!-- Cek halaman apakah sudah Login atau Belum -->

<?php

include '../koneksi.php';
$barang = mysqli_query($koneksi, "SELECT * FROM brg_terjual");

// jumlahkan data yang ada ditabel
$jumlah_barang = mysqli_num_rows($barang);

?>

<!-- END -->
<center>
    <a href="../gudang/index.php" class="btn btn-md btn-dark" style="margin-bottom: 10px">Gudang</a>
    <a href="#" class="btn btn-md btn-success" style="margin-bottom: 10px">Barang Terjual</a>
    <a href="../penjualan/index.php" class="btn btn-md btn-info" style="margin-bottom: 10px">Penjualan</a>
</center>

<body>
    <!-- Search Box -->
    <center>
        <form action="index.php" method="get">
            <label>Search : </label>
            <input type="text" name="cari">
            <input type="submit" value="search">
        </form>
        <br>

        <?php
        if (isset($_GET['cari'])) {
            $cari = $_GET['cari'];
            echo "<hr>";
            echo "Hasil Pencarian : " . $cari;
            echo "<hr>";
        }
        ?>
    </center>
    <!-- Search Box -->

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <marquee>
                            <h2>PRODUK YANG TERJUAL</h2>
                        </marquee>
                    </div>
                    <div class="card-body">
                        <marquee>
                            <h3>Total Produk Yang Terjual :
                                <?php echo $jumlah_barang ?>
                            </h3>
                        </marquee>


                        <!-- menampilkan data buku -->
                        <!-- <a href="tambahstok.php" class="btn btn-md btn-primary" style="margin-bottom: 10px">TAMBAH STOK</a> -->
                        <!-- <a href="cetak_buku.php" class="btn btn-md btn-warning" style="margin-bottom: 10px">CETAK</a> -->
                        <!-- <a href="../logout.php" class="btn btn-danger" style="margin-bottom: 10px">LOGOUT</a> -->
                        <table class="table table-bordered" id="myTable">
                            <tr>
                                <th>Id Produk</th>
                                <th>Id Struk</th>
                                <th>Nama Produk</th>
                                <th>Harga Jual</th>
                                <th>Banyak Barang</th>
                                <th>Total Barang</th>
                            </tr>
                            <!-- menampilkan data barang -->
                            <?php
                            include '../koneksi.php';
                            if (isset($_GET['cari'])) {
                                $cari = $_GET['cari'];
                                $data = mysqli_query($koneksi, "select * from brg_terjual where nm_brg like '%" . $cari . "%' ");
                            } else {
                                $data = mysqli_query($koneksi, "select * from brg_terjual");
                            }
                            foreach ($data as $row) {
                                echo "<tr>";
                                echo "<td>" . $id_barang = $row['id_brg'] . "</td>";
                                echo "<td>" . $id_struk = $row['id_struk'] . "</td>";
                                echo "<td>" . $nama_barang = $row['nm_brg'] . "</td>";
                                echo "<td>" . $harga_jual = $row['hrg_jual'] . "</td>";
                                echo "<td>" . $bnyk_brg = $row['bnyk_brg'] . "</td>";
                                echo "<td>" . $ttl_harga = $row['ttl_harga'] . "</td>";
                                ?>
                                <?php
                                echo "</tr>";
                            }
                            ?>

                            </tbody>
                        </table>
                        <center>
                        </center>
                    </div>
                </div>
            </div>
</body>

</html>