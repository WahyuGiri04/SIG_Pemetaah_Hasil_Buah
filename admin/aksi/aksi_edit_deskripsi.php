<?php

include "../../koneksi.php";

$deskripsi = $_POST['deskripsi_kecamatan'];
$id_kecamatan = $_POST['id_kecamatan'];

$sql_update = $koneksi->query("UPDATE tab_kecamatan SET deskripsi ='$deskripsi' WHERE id_kecamatan ='$id_kecamatan'");
if($sql_update===true){
    echo "<script>alert('Data hasil buah berhasi di edit');
    window.location.href='../halaman/data_kecamatan/lihat_data_kecamatan.php?id_kecamatan=$id_kecamatan' </script>";
}else{
    echo "<script> alert('Data hasil buah gagal di edit !!!');
    window.location.href='../halaman/data_kecamatan/lihat_data_kecamatan.php?id_kecamatan=$id_kecamatan' </script>";
}

?>