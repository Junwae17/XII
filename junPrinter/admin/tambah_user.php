<?php

require 'functions.php';

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

if (isset($_POST["submit"])) {
    if (tambahUser($_POST) > 0) {
        echo "
        <script type='text/javascript'>
            alert('data berhasil ditambahkan');
            window.location = 'index.php'
        </script>
    ";
    } else {
        echo "
        <script type='text/javascript'>
            alert('data gagal ditambahkan');
            window.location = 'index.php'
        </script>
    ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah User</title>
</head>

<body>
    <div class="box">
        <h2>Tambah Data User</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap"> <br> <br>

            <label for="username">Username</label>
            <input type="text" name="username" id="username"> <br> <br>

            <label for="password">Password</label>
            <input type="password" name="password" id="password"> <br> <br>

            <label for="foto">Foto</label>
            <input type="file" name="foto" id="foto"> <br> <br>

            <input type="hidden" name="roles" value="Customer"> <br> <br>

            <button type="submit" name="submit">Tambah</button>
        </form>
    </div>
</body>

</html>