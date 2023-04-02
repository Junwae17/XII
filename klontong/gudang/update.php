<html>
    <head>
        <title>Merubah Data barang</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container" style="margin-top: 80px">
        <div class="row">
        <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header">
            <h3>EDIT Barang</h3>
            </div>
            <div class="card-body">

            <?php 
            include '../koneksi.php';
            $id_barang = $_GET['id_brg'];
            $data = mysqli_query($koneksi,"SELECT * FROM gudang WHERE id_brg = '$id_barang'");
            // data yang sudah dicocokan dengan id_buku , di meledak menggunakan fetch array sehingga bisa ditaro satu satu di form nya
            while($meledak = mysqli_fetch_array($data)){
            ?>

            <form action="proses-update.php" method="post">
            <!-- id_buku -->
            
            <!-- id_buku -->
            <div class="form-group">
                <label>Masukan id_barang</label>
                <input type="number" name="id_brg" placeholder="Masukkan ID barang" class="form-control" value="<?php echo $meledak['id_brg']; ?>" >
            </div>

            <div class="form-group">
                <label>Masukan Nama Produk</label>
                <input type="text" name="nm_brg" placeholder="Masukkan Nama" class="form-control" value="<?php echo $meledak['nm_brg']; ?>">
            </div>
            
            <div class="form-group">
                <label>Masukan Harga Awal</label>
                <input type="number" name="hrg_awal" placeholder="Masukkan Harga Awal" class="form-control" value="<?php echo $meledak['hrg_awal']; ?>">
            </div>
            
            <div class="form-group">
                <label>Masukan Harga Jual</label>
                <input type="number" name="hrg_jual" placeholder="Masukkan kategori" class="form-control" value="<?php echo $meledak['hrg_jual']; ?>">
            </div>

            <div class="form-group">
                <label>Masukan Stok</label>
                <input type="number" name="stok" placeholder="Masukkan stok" class="form-control" value="<?php echo $meledak['stok']; ?>">
            </div>
            
            
            <button type="submit" class="btn btn-success">SUBMIT</button>
            <button type="reset" class="btn btn-warning">RESET</button>
            <a href="index.php">Kembali Ke Halaman Awal</a>
            
            </form>
            <?php 
            }
            ?>
            </div>
        </div>
        </div>
        </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
</html>