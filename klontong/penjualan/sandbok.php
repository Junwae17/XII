<html>
    <head>
        <title>Admin Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="../user/style3.css">
    </head>
    <br>
        <center> <h3>Penjualan GsPro</h3> </center> <br>  <hr>


<div class="container" style="margin-top: 80px">
        <div class="row">
        <div class="col-md-12">
        <div class="card">
        <div class="card-header">
        <?php 
    // Judul Hasil Pencarian
    include '../koneksi.php';
    if (isset ($_GET['cari'])){
        $cari = $_GET['cari'];
        echo "Hasil Pencarian : ".$cari;
    }
    // Judul Hasil Pencarian
    ?>
    || <a href="index.php">Kembali Ke Halaman Awal</a>
    </div>
                
                
        <table class="table table-bordered" id="myTable">
        <tr>
            <th>No</th>
            <th>Id Struk</th>
            <th>Tanggal</th>
            <th>Id Produk</th>
            <th>Harga</th>
        </tr>
        
        <?php
        // Hasil Pencariannya muuncul disini
        include '../koneksi.php';
        if(isset($_GET['cari'])){
            $cari = $_GET ['cari'];
            $data = mysqli_query($koneksi, "SELECT * FROM penjualan WHERE id_struk LIKE '%".$cari."%' ");
        }else{
            $data = mysqli_query($koneksi, "SELECT * FROM penjualan");
        }
        $no=1;
        while($meledak = mysqli_fetch_array($data)){
        // Hasil Pencariannya muuncul disini
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $meledak['id_jual']; ?></td>
            <td><?php echo $meledak['tgl_transaksi']; ?></td>
            <td><?php echo $meledak['id_struk']; ?></td>
            <td><?php echo $meledak['ttl_jmlh_hrg']; ?></td>
        </tr>
        <?php 
        }
        ?>

</tbody>
</table>
<center>
</center>
</div>
</div>
</div>
<!-- end search -->