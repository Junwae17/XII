<html>
    <head>
        <title>Admin Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="../user/style3.css">
    </head>
    <br>
        <center> <h3>Report GsPro</h3> </center> <br>  <hr>
        <!-- Cek halaman apakah sudah Login atau Belum -->
        
        <?php

        include '../koneksi.php';
        $id_brg = $_GET['id_brg'];
        $barang = mysqli_query($koneksi, "SELECT * FROM gudang where id_brg ='$id_brg' ");

        // jumlahkan data yang ada ditabel
        $jumlah_barang = mysqli_num_rows($barang);

        ?>

        <!-- END -->
        <center>
        <a href="index.php" class="btn btn-md btn-dark" style="margin-bottom: 10px">Gudang</a>
        <a href="#" class="btn btn-md btn-success" style="margin-bottom: 10px">Barang Terjual</a>
        <a href="#" class="btn btn-md btn-info" style="margin-bottom: 10px">Penjualan</a>
        </center>

        <body>
        <div class="container" style="margin-top: 80px">
        <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <marquee direction="right"><h2>PRODUK YANG TERSEDIA</h2></marquee>
            </div>
            <div class="card-body">
                <marquee><h3>Total Produk Tersedia : <?php echo $jumlah_barang ?></h3></marquee>
            <!-- menampilkan data buku -->
            <a href="add.php" class="btn btn-md btn-primary" style="margin-bottom: 10px">TAMBAH PRODUK</a>
            <!-- <a href="tambahstok.php" class="btn btn-md btn-primary" style="margin-bottom: 10px">TAMBAH STOK</a> -->
            <!-- <a href="cetak_buku.php" class="btn btn-md btn-warning" style="margin-bottom: 10px">CETAK</a> -->
            <!-- <a href="../logout.php" class="btn btn-danger" style="margin-bottom: 10px">LOGOUT</a> -->
            <table class="table table-bordered" id="myTable">
        <tr>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
            <!-- <th>stok_barang</th> -->
            <!-- <th>Aksi</th> -->
        </tr>
        <!-- menampilkan data barang -->
        <?php 
        include '../koneksi.php';
        $barang = mysqli_query($koneksi, "SELECT * FROM gudang where id_brg ='$id_brg' ");
        foreach ($barang as $row){
            echo "<tr>";
            echo "<td>".$nama_barang = $row['nm_brg']."</td>";
            echo "<td>".$harga_jual = $row['hrg_jual']."</td>";
            echo "<td>".$stok = $row['stok']."</td>";
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