<?php

include "../../koneksi.php";

$id_pengguna = $_POST['id_pengguna'];
$username_baru = $_POST['username_baru'];
$pass = $_POST['pass'];
$password = sha1($pass);

$sql_select = $koneksi->query("SELECT * FROM tab_user WHERE id_pengguna = '$id_pengguna'");
$data_select = $sql_select->fetch_assoc();
$cek_password = $data_select['password'];

if($password == $cek_password){
    $sql_update = $koneksi->query("UPDATE tab_user SET nama_pengguna = '$username_baru' WHERE id_pengguna = '$id_pengguna'");
    if($sql_update===true){
        echo "<script> alert('Username Berhasil di ubah Silahkan login Kembali !!!');
        window.location.href='../logout.php' </script>";
    }else{
        echo "<script> alert('Username gagal di ubah !!!');
        window.location.href='../halaman/akun/ubah_password.php' </script>";
    }
}else{
    echo "<script> alert('Password Salah!!!');
    window.location.href='../halaman/akun/ubah_password.php' </script>";
}

?>