<?php

include "../../koneksi.php";

$id_kecamatan = $_POST['id_kecamatan'];
$id_buah = $_POST['id_buah'];
$jumlah = $_POST['jumlah'];

$sql_select = $koneksi->query("SELECT COUNT(id_hasil_buah) AS hasil FROM tab_hasil_buah WHERE id_buah = '$id_buah' AND id_kecamatan = '$id_kecamatan'");
$data_select = $sql_select->fetch_assoc();
$hasil = $data_select['hasil'];
if($hasil > 0){
   echo "<script> alert('Data hasil buah sudah ada !!!') ;
   window.location.href='../halaman/data_kecamatan/lihat_data_kecamatan.php?id_kecamatan=$id_kecamatan' </script>";
}else{
   $sql_insert = $koneksi->query("INSERT INTO tab_hasil_buah SET id_kecamatan = '$id_kecamatan', id_buah = '$id_buah', jumlah = '$jumlah'");
   if($sql_insert===true){
       echo "<script>alert('Data hasil buah berhasi di tambah');
       window.location.href='../halaman/data_kecamatan/lihat_data_kecamatan.php?id_kecamatan=$id_kecamatan' </script>";
    }else{
       echo "<script> alert('Data hasil buah gagal di tambah !!!') ;
       window.location.href='../halaman/data_kecamatan/lihat_data_kecamatan.php?id_kecamatan=$id_kecamatan' </script>";
    }
}

?>