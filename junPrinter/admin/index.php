<?php
session_start();

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
    alert('Silahkan Login Dulu Boss!');
    window.location = 'index.php';
    </script>
    ";
}

if($_SESSION["roles"] != "Admin"){
    echo "
    <script type='text/javascript'>
    alert('Mohon maaf anda bukan admin!');
    window.location = '../login/index.php';
    </script>
    ";
}

?>

<?php require '../layout/sidebar.php'; ?>


<div class="content">
    <h1>Hi, <?= $_SESSION["nama_lengkap"]; ?> Ini Halaman Admin</h1>
    <a href="../logout.php">Logout</a>
</div>
