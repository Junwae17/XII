<?php

$conn = mysqli_connect('localhost', 'root', '', 'junprinter');

$username = $_POST["username"];
$password = $_POST["password"];

$query = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");

$cek = mysqli_num_rows($query);

if($cek > 0) {
    $data = mysqli_fetch_array($query);

    if($data["roles"] == "Admin") {
        session_start();
        $_SESSION["nama_lengkap"] = $data["nama_lengkap"];
        $_SESSION["username"] = $data["username"];
        $_SESSION["roles"] = $data["roles"];
        header('location:../admin/index.php');
    } elseif($data["roles"] == "Customer") {
        session_start();
        $_SESSION["nama_lengkap"] = $data["nama_lengkap"];
        $_SESSION["username"] = $data["username"];
        $_SESSION["roles"] = $data["roles"];
        header('location:../index.php');
    }
} else {
    echo "
    <script type='text/javascript'>
    alert('Username Adios');
    window.location = 'index.php';
    </script>
    ";
}

?>