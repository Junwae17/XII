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
        $id_struk = $_GET['id_struk'];
        $barang = mysqli_query($koneksi, "SELECT * FROM penjualan where id_struk ='$id_struk' ");

        // jumlahkan data yang ada ditabel
        $jumlah_barang = mysqli_num_rows($barang);

        ?>

        <!-- END -->
        <center>
        <a href="index.php" class="btn btn-md btn-dark" style="margin-bottom: 10px">Gudang</a>
        <a href="../barang-terjual/index.php" class="btn btn-md btn-success" style="margin-bottom: 10px">Barang Terjual</a>
        <a href="../penjualan/index.php" class="btn btn-md btn-info" style="margin-bottom: 10px">Penjualan</a>
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
            <!-- <a href="add.php" class="btn btn-md btn-primary" style="margin-bottom: 10px">TAMBAH PRODUK</a> -->
            <!-- <a href="tambahstok.php" class="btn btn-md btn-primary" style="margin-bottom: 10px">TAMBAH STOK</a> -->
            <!-- <a href="cetak_buku.php" class="btn btn-md btn-warning" style="margin-bottom: 10px">CETAK</a> -->
            <!-- <a href="../logout.php" class="btn btn-danger" style="margin-bottom: 10px">LOGOUT</a> -->
            <table class="table table-bordered" id="myTable">
        <tr>
            <th>No</th>
            <th>Id Jual</th>
            <th>Tanggal</th>
            <th>Id Struk</th>
            <th>Total Harga</th>
            <th>Total Untung</th>
            <!-- <th>stok_barang</th> -->
            <!-- <th>Aksi</th> -->
        </tr>
        <!-- menampilkan data barang -->
        <?php 
        $i = 1;
        include '../koneksi.php';
        $barang = mysqli_query($koneksi, "SELECT * FROM penjualan where id_struk ='$id_struk' ");

        foreach ($barang as $row){
            echo "<tr>";
            echo "<td>". $i++ ."</td>";
            echo "<td>".$id_jual = $row['id_jual']."</td>";
            echo "<td>".$tgl_transaksi = $row['tgl_transaksi']."</td>";
            echo "<td>".$id_struk = $row['id_struk']."</td>";
            echo "<td>Rp.". number_format($harga_jual = $row['ttl_jmlh_hrg'])."-.</td>";
            echo "<td>Rp.". number_format($untung = $row['ttl_untung'])."-.</td>";
            
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