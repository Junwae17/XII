<?php

$conn = mysqli_connect('localhost', 'root', '', 'junprinter');

function query($query)
{
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambahUser($data)
{
    global $conn;

    $nama_lengkap = htmlspecialchars($data["nama_lengkap"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $foto = $_FILES["foto"]["name"];
    $files = $_FILES["foto"]["tmp_name"];
    $roles = htmlspecialchars($data["roles"]);

    $query = ("INSERT INTO user VALUES(NULL, '$nama_lengkap', '$username', '$password', '$foto', '$roles')");

    move_uploaded_file($files, "../image/" . $foto);

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function hapusUser($id)
{
    global $conn;

    $query = ("DELETE FROM user WHERE id_user = '$id'");
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapusProduk($id)
{
    global $conn;

    $query = ("DELETE FROM produk WHERE id_produk = '$id'");
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function updateUser($data)
{
    global $conn;

    $id = htmlspecialchars($data["id_user"]);
    $nama_lengkap = htmlspecialchars($data["nama_lengkap"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $foto = $_FILES["foto"]["name"];
    $files = $_FILES["foto"]["tmp_name"];
    $roles = htmlspecialchars($data["roles"]);

    if(empty($foto)){
        $query = "UPDATE user SET
        nama_lengkap = '$nama_lengkap',
        username = '$username',
        password = '$password',
        roles = '$roles' WHERE id_user = '$id'";
    
        mysqli_query($conn, $query);
    
        return mysqli_affected_rows($conn);
    } else {
        $query = "UPDATE user SET
        nama_lengkap = '$nama_lengkap',
        username = '$username',
        password = '$password',
        foto = '$foto',
        roles = '$roles' WHERE id_user = '$id'";
        
        move_uploaded_file($files, "../image/" . $foto);
    
        mysqli_query($conn, $query);
    
        return mysqli_affected_rows($conn);
    }

}

function tambahProduk($data)
{
    global $conn;

    $nama_produk = htmlspecialchars($data["nama_produk"]);
    $foto = $_FILES["foto"]["name"];
    $files = $_FILES["foto"]["tmp_name"];
    $stok = htmlspecialchars($data["stok"]);
    $harga = htmlspecialchars($data["harga"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $query = ("INSERT INTO produk VALUES(NULL, '$nama_produk', '$foto', '$harga', '$stok', '$deskripsi')");

    move_uploaded_file($files, "../image/" . $foto);

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function updateProduk($data)
{
    global $conn;

    $id = htmlspecialchars($data["id_produk"]);
    $nama_produk = htmlspecialchars($data["nama_produk"]);
    $harga = htmlspecialchars($data["harga"]);
    $stok = htmlspecialchars($data["stok"]);
    $foto = $_FILES["foto"]["name"];
    $files = $_FILES["foto"]["tmp_name"];
    $deskripsi = htmlspecialchars($data["deskripsi"]);

    if(empty($foto)){
        $query = "UPDATE produk SET
        nama_produk = '$nama_produk',
        harga = '$harga',
        stok = '$stok',
        deskripsi = '$deskripsi' WHERE id_produk = '$id'";
    
        mysqli_query($conn, $query);
    
        return mysqli_affected_rows($conn);
    } else {
        $query = "UPDATE produk SET
        nama_produk = '$nama_produk',
        harga = '$harga',
        stok = '$stok',
        foto = '$foto',
        deskripsi = '$deskripsi' WHERE id_produk = '$id'";
        
        move_uploaded_file($files, "../image/" . $foto);
    
        mysqli_query($conn, $query);
    
        return mysqli_affected_rows($conn);
    }

}

?>