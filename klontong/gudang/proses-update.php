<?php
// include koneksi
include '../koneksi.php';

// menangkap data yang ada di form
$id_brg = $_POST['id_brg'];
$nm_brg = $_POST['nm_brg'];
$hrg_awal = $_POST['hrg_awal'];
$hrg_jual = $_POST['hrg_jual'];
$stok = $_POST['stok'];


// menginput database
$input = mysqli_query($koneksi,"UPDATE gudang SET id_brg='$id_brg',nm_brg='$nm_brg',hrg_awal='$hrg_awal',hrg_jual='$hrg_jual',stok='$stok' WHERE id_brg='$id_brg' ");

// Mengembalikan ke halaman awal
if($input){
    ?>
    <script>
        alert('data berhasil dirubah');
        window.location = "index.php"
    </script>

    <script>
        alert('data gagal dirubah');
        window.location = "index.php";
    </script>
    <?php
}
?>