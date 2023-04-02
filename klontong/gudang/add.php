<html>
    <head>
        <title>Tambah Data</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container" style="margin-top: 80px">
        <div class="row">
        <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header">
            <h3>TAMBAH Produk</h3>
            </div>
            <div class="card-body">
            <form action="proses_tambah.php" method="post">

            <!-- <div class="form-group">
                <label>Masukan kode_buku</label>
                <input type="number" name="kode_buku" placeholder="Masukkan kode" class="form-control">
            </div> -->

            <div class="form-group">
                <label>Nama Produk</label>
                <input type="text" name="nm_brg" placeholder="Masukkan Nama" class="form-control">
            </div>
            
            <div class="form-group">
                <label>Harga Awal</label>
                <input type="number" name="hrg_awal" placeholder="Masukkan Harga awal" class="form-control">
            </div>
            
            <div class="form-group">
                <label>Harga Jual</label>
                <input type="number" name="hrg_jual" placeholder="Masukkan Harga Jual" class="form-control">
            </div>
            
            <div class="form-group">
                <label>Masukan stok</label>
                <input type="number" name="stok" placeholder="Masukkan stok" class="form-control">
            </div>
            
            <button type="submit" class="btn btn-success">SUBMIT</button>
            <button type="reset" class="btn btn-warning">RESET</button>
            <a href="index.php">Kembali Ke Halaman Awal</a>
            
            </form>
            </div>
        </div>
        </div>
        </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
</html>