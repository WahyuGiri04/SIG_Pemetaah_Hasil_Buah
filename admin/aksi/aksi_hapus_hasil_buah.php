<?php

include "../../koneksi.php";

$id_hasil_buah = $_GET['id_hasil_buah'];
$id_kecamatan = $_GET['id_kecamatan'];

$sql_hapus = $koneksi->query("DELETE FROM tab_hasil_buah WHERE id_hasil_buah = '$id_hasil_buah'");
if($sql_hapus===true){
    echo "<script>alert('Data buah berhasi di hapus');
    window.location.href='../halaman/data_kecamatan/lihat_data_kecamatan.php?id_kecamatan=$id_kecamatan' </script>";
 }else{
    echo "<script> alert('Data buah gagal di hapus !!!') ;
    window.location.href='../halaman/data_kecamatan/lihat_data_kecamatan.php?id_kecamatan=$id_kecamatan' </script>";
 }

?>