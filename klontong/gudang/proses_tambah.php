<?php
// include koneksi
include '../koneksi.php';

// menangkap data yang ada di form
$id_brg = $_POST['id_brg'];
$nm_brg = $_POST['nm_brg'];
$hrg_awal = $_POST['hrg_awal'];
$hrg_jual = $_POST['hrg_jual'];
$stok = $_POST['stok'];

// $input = $input_daftar_buku && $input_stok_buku;

// menginput database
$input = mysqli_query($koneksi,"insert into gudang values('','$nm_brg','$hrg_awal','$hrg_jual','$stok')");
// $input_stok_buku = mysqli_query($koneksi,"insert into stok_buku values('$judul_buku','$rak','$jumlah_buku')");

// Mengembalikan ke halaman awal
if($input){
    ?>
    <script>
        alert('data berhasil');
        window.location = "index.php"
    </script>

    <script>
        alert('data gagal');
        window.location = "index.php";
    </script>
    <?php
}
?>