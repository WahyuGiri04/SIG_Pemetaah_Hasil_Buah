<?php

include "../../koneksi.php";

$id_hasil_buah = $_POST['id_hasil_buah'];
$id_kecamatan = $_POST['id_kecamatan'];
$jumlah = $_POST['jumlah'];

$sql_edit = $koneksi->query("UPDATE tab_hasil_buah SET jumlah='$jumlah' WHERE id_hasil_buah = '$id_hasil_buah'");
if($sql_edit===true){
    echo "<script>alert('Data hasil buah berhasi di edit');
    window.location.href='../halaman/data_kecamatan/lihat_data_kecamatan.php?id_kecamatan=$id_kecamatan' </script>";
}else{
    echo "<script> alert('Data hasil buah gagal di edit !!!');
    window.location.href='../halaman/data_kecamatan/lihat_data_kecamatan.php?id_kecamatan=$id_kecamatan' </script>";
}

?>