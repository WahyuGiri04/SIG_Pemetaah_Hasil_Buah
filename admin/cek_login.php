<?php

include "../koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];
$password1 =sha1($password);
$query_login = $koneksi->query("SELECT count(nama_pengguna) as jumlah FROM `tab_user` WHERE password = '$password1' AND nama_pengguna = '$username'");
$data_login = $query_login->fetch_assoc();
$jumlah = $data_login['jumlah'];
$query_login1 = $koneksi->query("SELECT * FROM `tab_user` WHERE password = '$password1' AND nama_pengguna = '$username'");
$data_login1 = $query_login1->fetch_assoc();
if($jumlah > 0 ){
    session_start();
    $_SESSION['nama_pengguna']=$data_login1['nama_pengguna'];
    $_SESSION['id_pengguna']=$data_login1['id_pengguna'];

    ?>

    
    <script>alert('Login Berhasil');
    window.location.href='halaman/home/home.php' </script>;
	
    <?php
}else{
    ?>
    <script>alert('Password atau Username SALAH !!!');
	window.location.href='index.php' </script>
    <?php
}


?>