<?php
// include koneksi

include '../koneksi.php';
// menangkpa data id yanag di kirim dari url
$id_brg = $_GET['id_struk'];

// menghapus data dari table buku ya
$input = mysqli_query($koneksi,"delete from penjualan where id_struk='$id_struk'");

// mengalihkan ke tampilan awal ya
if($input){
    ?>
    <script>
        alert('berhasil hapus');
        window.location = "index.php";
    </script>

    <script>
        alert('gagal hapus');
        window.location = "index.php";
    </script>
    <?php
}
?>