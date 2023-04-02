<html>
    <head>
        <title>Gudang</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="../user/style3.css">
    </head>
    <br>
        <center> <h1>Klontong Babeh Rojak</h1> </center> <br>  <hr>
        <!-- Cek halaman apakah sudah Login atau Belum -->
        
        <?php

        include '../koneksi.php';
        $barang = mysqli_query($koneksi, "SELECT * FROM gudang");

        // jumlahkan data yang ada ditabel
        $jumlah_barang = mysqli_num_rows($barang);

        ?>

        <!-- END -->
        <center>
        <a href="#" class="btn btn-md btn-dark" style="margin-bottom: 10px">Gudang</a>
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
            <a href="add.php" class="btn btn-md btn-primary" style="margin-bottom: 10px">TAMBAH PRODUK</a>
            <!-- <a href="tambahstok.php" class="btn btn-md btn-primary" style="margin-bottom: 10px">TAMBAH STOK</a> -->
            <!-- <a href="cetak_buku.php" class="btn btn-md btn-warning" style="margin-bottom: 10px">CETAK</a> -->
            <!-- <a href="../logout.php" class="btn btn-danger" style="margin-bottom: 10px">LOGOUT</a> -->
            <table class="table table-bordered" id="myTable">
        <tr>
            <th>Id Produk</th>
            <th>Nama Produk</th>
            <th>Harga Awal</th>
            <th>Harga Jual</th>
            <th>Stok</th>
            <!-- <th>stok_barang</th> -->
            <th>Aksi</th>
        </tr>
        <!-- menampilkan data barang -->
        <?php 
        include '../koneksi.php';
        $barang = mysqli_query($koneksi, "SELECT * FROM gudang");
        foreach ($barang as $row){
            echo "<tr>";
            echo "<td>".$id_barang = $row['id_brg']."</td>";
            echo "<td>".$nama_barang = $row['nm_brg']."</td>";
            echo "<td>".$harga_awal = $row['hrg_awal']."</td>";
            echo "<td>".$harga_jual = $row['hrg_jual']."</td>";
            echo "<td>".$stok = $row['stok']."</td>";
            ?>
            <td> 
                <a href="proses-hapus.php?id_brg=<?php echo $row['id_brg'] ?>" class="btn btn-sm btn-danger" onclick="return confirm ('yakin hapus?')">HAPUS</a>  
                <a href="update.php?id_brg=<?php echo $row['id_brg'] ?>" class="btn btn-sm btn-primary">UBAH</a>  
                <a href="detail.php?id_brg=<?php echo $row['id_brg'] ?>" class="btn btn-sm btn-warning">DETAIL</a>  
            </td>
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